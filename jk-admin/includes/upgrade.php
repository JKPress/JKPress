<?php
/**
 * JKPress Upgrade API
 *
 * Most of the functions are pluggable and can be overwritten.
 *
 * @package JKPress
 * @subpackage Administration
 */

/** Include user installation customization script. */
if ( file_exists( JK_CONTENT_DIR . '/install.php' ) ) {
	require JK_CONTENT_DIR . '/install.php';
}

/** JKPress Administration API */
require_once ABSPATH . 'jk-admin/includes/admin.php';

/** JKPress Schema API */
require_once ABSPATH . 'jk-admin/includes/schema.php';

if ( ! function_exists( 'jk_install' ) ) :
	/**
	 * Installs the site.
	 *
	 * Runs the required functions to set up and populate the database,
	 * including primary admin user and initial options.
	 *
	 * @since 2.1.0
	 *
	 * @param string $blog_title    Site title.
	 * @param string $user_name     User's username.
	 * @param string $user_email    User's email.
	 * @param bool   $is_public     Whether the site is public.
	 * @param string $deprecated    Optional. Not used.
	 * @param string $user_password Optional. User's chosen password. Default empty (random password).
	 * @param string $language      Optional. Language chosen. Default empty.
	 * @return array {
	 *     Data for the newly installed site.
	 *
	 *     @type string $url              The URL of the site.
	 *     @type int    $user_id          The ID of the site owner.
	 *     @type string $password         The password of the site owner, if their user account didn't already exist.
	 *     @type string $password_message The explanatory message regarding the password.
	 * }
	 */
	function jk_install( $blog_title, $user_name, $user_email, $is_public, $deprecated = '', $user_password = '', $language = '' ) {
		if ( ! empty( $deprecated ) ) {
			_deprecated_argument( __FUNCTION__, '2.6.0' );
		}

		jk_check_mysql_version();
		jk_cache_flush();
		make_db_current_silent();

		/*
		 * Ensure update checks are delayed after installation.
		 *
		 * This prevents users being presented with a maintenance mode screen
		 * immediately after installation.
		 */
		jk_unschedule_hook( 'jk_version_check' );
		jk_unschedule_hook( 'jk_update_plugins' );
		jk_unschedule_hook( 'jk_update_themes' );

		jk_schedule_event( time() + HOUR_IN_SECONDS, 'twicedaily', 'jk_version_check' );
		jk_schedule_event( time() + ( 1.5 * HOUR_IN_SECONDS ), 'twicedaily', 'jk_update_plugins' );
		jk_schedule_event( time() + ( 2 * HOUR_IN_SECONDS ), 'twicedaily', 'jk_update_themes' );

		populate_options();
		populate_roles();

		update_option( 'blogname', $blog_title );
		update_option( 'admin_email', $user_email );
		update_option( 'blog_public', $is_public );

		// Freshness of site - in the future, this could get more specific about actions taken, perhaps.
		update_option( 'fresh_site', 1, false );

		if ( $language ) {
			update_option( 'JKLANG', $language );
		}

		$guessurl = jk_guess_url();

		update_option( 'siteurl', $guessurl );

		// If not a public site, don't ping.
		if ( ! $is_public ) {
			update_option( 'default_pingback_flag', 0 );
		}

		/*
		 * Create default user. If the user already exists, the user tables are
		 * being shared among sites. Just set the role in that case.
		 */
		$user_id        = username_exists( $user_name );
		$user_password  = trim( $user_password );
		$email_password = false;
		$user_created   = false;

		if ( ! $user_id && empty( $user_password ) ) {
			$user_password = jk_generate_password( 12, false );
			$message       = __( '<strong><em>Note that password</em></strong> carefully! It is a <em>random</em> password that was generated just for you.' );
			$user_id       = jk_create_user( $user_name, $user_password, $user_email );
			update_user_meta( $user_id, 'default_password_nag', true );
			$email_password = true;
			$user_created   = true;
		} elseif ( ! $user_id ) {
			// Password has been provided.
			$message      = '<em>' . __( 'Your chosen password.' ) . '</em>';
			$user_id      = jk_create_user( $user_name, $user_password, $user_email );
			$user_created = true;
		} else {
			$message = __( 'User already exists. Password inherited.' );
		}

		$user = new JK_User( $user_id );
		$user->set_role( 'administrator' );

		if ( $user_created ) {
			$user->user_url = $guessurl;
			jk_update_user( $user );
		}

		jk_install_defaults( $user_id );

		jk_install_maybe_enable_pretty_permalinks();

		flush_rewrite_rules();

		jk_new_blog_notification( $blog_title, $guessurl, $user_id, ( $email_password ? $user_password : __( 'The password you chose during installation.' ) ) );

		jk_cache_flush();

		/**
		 * Fires after a site is fully installed.
		 *
		 * @since 3.9.0
		 *
		 * @param JK_User $user The site owner.
		 */
		do_action( 'jk_install', $user );

		return array(
			'url'              => $guessurl,
			'user_id'          => $user_id,
			'password'         => $user_password,
			'password_message' => $message,
		);
	}
endif;

if ( ! function_exists( 'jk_install_defaults' ) ) :
	/**
	 * Creates the initial content for a newly-installed site.
	 *
	 * Adds the default "Uncategorized" category, the first post (with comment),
	 * first page, and default widgets for default theme for the current version.
	 *
	 * @since 2.1.0
	 *
	 * @global jkdb       $jkdb         JKPress database abstraction object.
	 * @global JK_Rewrite $jk_rewrite   JKPress rewrite component.
	 * @global string     $table_prefix The database table prefix.
	 *
	 * @param int $user_id User ID.
	 */
	function jk_install_defaults( $user_id ) {
		global $jkdb, $jk_rewrite, $table_prefix;

		// Default category.
		$cat_name = __( 'Uncategorized' );
		/* translators: Default category slug. */
		$cat_slug = sanitize_title( _x( 'Uncategorized', 'Default category slug' ) );

		$cat_id = 1;

		$jkdb->insert(
			$jkdb->terms,
			array(
				'term_id'    => $cat_id,
				'name'       => $cat_name,
				'slug'       => $cat_slug,
				'term_group' => 0,
			)
		);
		$jkdb->insert(
			$jkdb->term_taxonomy,
			array(
				'term_id'     => $cat_id,
				'taxonomy'    => 'category',
				'description' => '',
				'parent'      => 0,
				'count'       => 1,
			)
		);
		$cat_tt_id = $jkdb->insert_id;

		// First post.
		$now             = current_time( 'mysql' );
		$now_gmt         = current_time( 'mysql', 1 );
		$first_post_guid = get_option( 'home' ) . '/?p=1';

		if ( is_multisite() ) {
			$first_post = get_site_option( 'first_post' );

			if ( ! $first_post ) {
				$first_post = "<!-- jk:paragraph -->\n<p>" .
				/* translators: First post content. %s: Site link. */
				__( 'Welcome to %s. This is your first post. Edit or delete it, then start writing!' ) .
				"</p>\n<!-- /jk:paragraph -->";
			}

			$first_post = sprintf(
				$first_post,
				sprintf( '<a href="%s">%s</a>', esc_url( network_home_url() ), get_network()->site_name )
			);

			// Back-compat for pre-4.4.
			$first_post = str_replace( 'SITE_URL', esc_url( network_home_url() ), $first_post );
			$first_post = str_replace( 'SITE_NAME', get_network()->site_name, $first_post );
		} else {
			$first_post = "<!-- jk:paragraph -->\n<p>" .
			/* translators: First post content. %s: Site link. */
			__( 'Welcome to JKPress. This is your first post. Edit or delete it, then start writing!' ) .
			"</p>\n<!-- /jk:paragraph -->";
		}

		$jkdb->insert(
			$jkdb->posts,
			array(
				'post_author'           => $user_id,
				'post_date'             => $now,
				'post_date_gmt'         => $now_gmt,
				'post_content'          => $first_post,
				'post_excerpt'          => '',
				'post_title'            => __( 'Hello world!' ),
				/* translators: Default post slug. */
				'post_name'             => sanitize_title( _x( 'hello-world', 'Default post slug' ) ),
				'post_modified'         => $now,
				'post_modified_gmt'     => $now_gmt,
				'guid'                  => $first_post_guid,
				'comment_count'         => 1,
				'to_ping'               => '',
				'pinged'                => '',
				'post_content_filtered' => '',
			)
		);

		if ( is_multisite() ) {
			update_posts_count();
		}

		$jkdb->insert(
			$jkdb->term_relationships,
			array(
				'term_taxonomy_id' => $cat_tt_id,
				'object_id'        => 1,
			)
		);

		// Default comment.
		if ( is_multisite() ) {
			$first_comment_author = get_site_option( 'first_comment_author' );
			$first_comment_email  = get_site_option( 'first_comment_email' );
			$first_comment_url    = get_site_option( 'first_comment_url', network_home_url() );
			$first_comment        = get_site_option( 'first_comment' );
		}

		$first_comment_author = ! empty( $first_comment_author ) ? $first_comment_author : __( 'A JKPress Commenter' );
		$first_comment_email  = ! empty( $first_comment_email ) ? $first_comment_email : 'wapuu@wordpress.example';
		$first_comment_url    = ! empty( $first_comment_url ) ? $first_comment_url : esc_url( __( 'https://wordpress.org/' ) );
		$first_comment        = ! empty( $first_comment ) ? $first_comment : sprintf(
			/* translators: %s: Gravatar URL. */
			__(
				'Hi, this is a comment.
To get started with moderating, editing, and deleting comments, please visit the Comments screen in the dashboard.
Commenter avatars come from <a href="%s">Gravatar</a>.'
			),
			/* translators: The localized Gravatar URL. */
			esc_url( __( 'https://gravatar.com/' ) )
		);
		$jkdb->insert(
			$jkdb->comments,
			array(
				'comment_post_ID'      => 1,
				'comment_author'       => $first_comment_author,
				'comment_author_email' => $first_comment_email,
				'comment_author_url'   => $first_comment_url,
				'comment_date'         => $now,
				'comment_date_gmt'     => $now_gmt,
				'comment_content'      => $first_comment,
				'comment_type'         => 'comment',
			)
		);

		// First page.
		if ( is_multisite() ) {
			$first_page = get_site_option( 'first_page' );
		}

		if ( empty( $first_page ) ) {
			$first_page = "<!-- jk:paragraph -->\n<p>";
			/* translators: First page content. */
			$first_page .= __( "This is an example page. It's different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors. It might say something like this:" );
			$first_page .= "</p>\n<!-- /jk:paragraph -->\n\n";

			$first_page .= "<!-- jk:quote -->\n<blockquote class=\"jk-block-quote\"><p>";
			/* translators: First page content. */
			$first_page .= __( "Hi there! I'm a bike messenger by day, aspiring actor by night, and this is my website. I live in Los Angeles, have a great dog named Jack, and I like pi&#241;a coladas. (And gettin' caught in the rain.)" );
			$first_page .= "</p></blockquote>\n<!-- /jk:quote -->\n\n";

			$first_page .= "<!-- jk:paragraph -->\n<p>";
			/* translators: First page content. */
			$first_page .= __( '...or something like this:' );
			$first_page .= "</p>\n<!-- /jk:paragraph -->\n\n";

			$first_page .= "<!-- jk:quote -->\n<blockquote class=\"jk-block-quote\"><p>";
			/* translators: First page content. */
			$first_page .= __( 'The XYZ Doohickey Company was founded in 1971, and has been providing quality doohickeys to the public ever since. Located in Gotham City, XYZ employs over 2,000 people and does all kinds of awesome things for the Gotham community.' );
			$first_page .= "</p></blockquote>\n<!-- /jk:quote -->\n\n";

			$first_page .= "<!-- jk:paragraph -->\n<p>";
			$first_page .= sprintf(
				/* translators: First page content. %s: Site admin URL. */
				__( 'As a new JKPress user, you should go to <a href="%s">your dashboard</a> to delete this page and create new pages for your content. Have fun!' ),
				admin_url()
			);
			$first_page .= "</p>\n<!-- /jk:paragraph -->";
		}

		$first_post_guid = get_option( 'home' ) . '/?page_id=2';
		$jkdb->insert(
			$jkdb->posts,
			array(
				'post_author'           => $user_id,
				'post_date'             => $now,
				'post_date_gmt'         => $now_gmt,
				'post_content'          => $first_page,
				'post_excerpt'          => '',
				'comment_status'        => 'closed',
				'post_title'            => __( 'Sample Page' ),
				/* translators: Default page slug. */
				'post_name'             => __( 'sample-page' ),
				'post_modified'         => $now,
				'post_modified_gmt'     => $now_gmt,
				'guid'                  => $first_post_guid,
				'post_type'             => 'page',
				'to_ping'               => '',
				'pinged'                => '',
				'post_content_filtered' => '',
			)
		);
		$jkdb->insert(
			$jkdb->postmeta,
			array(
				'post_id'    => 2,
				'meta_key'   => '_jk_page_template',
				'meta_value' => 'default',
			)
		);

		// Privacy Policy page.
		if ( is_multisite() ) {
			// Disable by default unless the suggested content is provided.
			$privacy_policy_content = get_site_option( 'default_privacy_policy_content' );
		} else {
			if ( ! class_exists( 'JK_Privacy_Policy_Content' ) ) {
				require_once ABSPATH . 'jk-admin/includes/class-jk-privacy-policy-content.php';
			}

			$privacy_policy_content = JK_Privacy_Policy_Content::get_default_content();
		}

		if ( ! empty( $privacy_policy_content ) ) {
			$privacy_policy_guid = get_option( 'home' ) . '/?page_id=3';

			$jkdb->insert(
				$jkdb->posts,
				array(
					'post_author'           => $user_id,
					'post_date'             => $now,
					'post_date_gmt'         => $now_gmt,
					'post_content'          => $privacy_policy_content,
					'post_excerpt'          => '',
					'comment_status'        => 'closed',
					'post_title'            => __( 'Privacy Policy' ),
					/* translators: Privacy Policy page slug. */
					'post_name'             => __( 'privacy-policy' ),
					'post_modified'         => $now,
					'post_modified_gmt'     => $now_gmt,
					'guid'                  => $privacy_policy_guid,
					'post_type'             => 'page',
					'post_status'           => 'draft',
					'to_ping'               => '',
					'pinged'                => '',
					'post_content_filtered' => '',
				)
			);
			$jkdb->insert(
				$jkdb->postmeta,
				array(
					'post_id'    => 3,
					'meta_key'   => '_jk_page_template',
					'meta_value' => 'default',
				)
			);
			update_option( 'jk_page_for_privacy_policy', 3 );
		}

		// Set up default widgets for default theme.
		update_option(
			'widget_block',
			array(
				2              => array( 'content' => '<!-- jk:search /-->' ),
				3              => array( 'content' => '<!-- jk:group --><div class="jk-block-group"><!-- jk:heading --><h2>' . __( 'Recent Posts' ) . '</h2><!-- /jk:heading --><!-- jk:latest-posts /--></div><!-- /jk:group -->' ),
				4              => array( 'content' => '<!-- jk:group --><div class="jk-block-group"><!-- jk:heading --><h2>' . __( 'Recent Comments' ) . '</h2><!-- /jk:heading --><!-- jk:latest-comments {"displayAvatar":false,"displayDate":false,"displayExcerpt":false} /--></div><!-- /jk:group -->' ),
				5              => array( 'content' => '<!-- jk:group --><div class="jk-block-group"><!-- jk:heading --><h2>' . __( 'Archives' ) . '</h2><!-- /jk:heading --><!-- jk:archives /--></div><!-- /jk:group -->' ),
				6              => array( 'content' => '<!-- jk:group --><div class="jk-block-group"><!-- jk:heading --><h2>' . __( 'Categories' ) . '</h2><!-- /jk:heading --><!-- jk:categories /--></div><!-- /jk:group -->' ),
				'_multiwidget' => 1,
			)
		);
		update_option(
			'sidebars_widgets',
			array(
				'jk_inactive_widgets' => array(),
				'sidebar-1'           => array(
					0 => 'block-2',
					1 => 'block-3',
					2 => 'block-4',
				),
				'sidebar-2'           => array(
					0 => 'block-5',
					1 => 'block-6',
				),
				'array_version'       => 3,
			)
		);

		if ( ! is_multisite() ) {
			update_user_meta( $user_id, 'show_welcome_panel', 1 );
		} elseif ( ! is_super_admin( $user_id ) && ! metadata_exists( 'user', $user_id, 'show_welcome_panel' ) ) {
			update_user_meta( $user_id, 'show_welcome_panel', 2 );
		}

		if ( is_multisite() ) {
			// Flush rules to pick up the new page.
			$jk_rewrite->init();
			$jk_rewrite->flush_rules();

			$user = new JK_User( $user_id );
			$jkdb->update( $jkdb->options, array( 'option_value' => $user->user_email ), array( 'option_name' => 'admin_email' ) );

			// Remove all perms except for the login user.
			$jkdb->query( $jkdb->prepare( "DELETE FROM $jkdb->usermeta WHERE user_id != %d AND meta_key = %s", $user_id, $table_prefix . 'user_level' ) );
			$jkdb->query( $jkdb->prepare( "DELETE FROM $jkdb->usermeta WHERE user_id != %d AND meta_key = %s", $user_id, $table_prefix . 'capabilities' ) );

			/*
			 * Delete any caps that snuck into the previously active blog. (Hardcoded to blog 1 for now.)
			 * TODO: Get previous_blog_id.
			 */
			if ( ! is_super_admin( $user_id ) && 1 !== $user_id ) {
				$jkdb->delete(
					$jkdb->usermeta,
					array(
						'user_id'  => $user_id,
						'meta_key' => $jkdb->base_prefix . '1_capabilities',
					)
				);
			}
		}
	}
endif;

/**
 * Maybe enable pretty permalinks on installation.
 *
 * If after enabling pretty permalinks don't work, fallback to query-string permalinks.
 *
 * @since 4.2.0
 *
 * @global JK_Rewrite $jk_rewrite JKPress rewrite component.
 *
 * @return bool Whether pretty permalinks are enabled. False otherwise.
 */
function jk_install_maybe_enable_pretty_permalinks() {
	global $jk_rewrite;

	// Bail if a permalink structure is already enabled.
	if ( get_option( 'permalink_structure' ) ) {
		return true;
	}

	/*
	 * The Permalink structures to attempt.
	 *
	 * The first is designed for mod_rewrite or nginx rewriting.
	 *
	 * The second is PATHINFO-based permalinks for web server configurations
	 * without a true rewrite module enabled.
	 */
	$permalink_structures = array(
		'/%year%/%monthnum%/%day%/%postname%/',
		'/index.php/%year%/%monthnum%/%day%/%postname%/',
	);

	foreach ( (array) $permalink_structures as $permalink_structure ) {
		$jk_rewrite->set_permalink_structure( $permalink_structure );

		/*
		 * Flush rules with the hard option to force refresh of the web-server's
		 * rewrite config file (e.g. .htaccess or web.config).
		 */
		$jk_rewrite->flush_rules( true );

		$test_url = '';

		// Test against a real JKPress post.
		$first_post = get_page_by_path( sanitize_title( _x( 'hello-world', 'Default post slug' ) ), OBJECT, 'post' );
		if ( $first_post ) {
			$test_url = get_permalink( $first_post->ID );
		}

		/*
		 * Send a request to the site, and check whether
		 * the 'X-Pingback' header is returned as expected.
		 *
		 * Uses jk_remote_get() instead of jk_remote_head() because web servers
		 * can block head requests.
		 */
		$response          = jk_remote_get( $test_url, array( 'timeout' => 5 ) );
		$x_pingback_header = jk_remote_retrieve_header( $response, 'X-Pingback' );
		$pretty_permalinks = $x_pingback_header && get_bloginfo( 'pingback_url' ) === $x_pingback_header;

		if ( $pretty_permalinks ) {
			return true;
		}
	}

	/*
	 * If it makes it this far, pretty permalinks failed.
	 * Fallback to query-string permalinks.
	 */
	$jk_rewrite->set_permalink_structure( '' );
	$jk_rewrite->flush_rules( true );

	return false;
}

if ( ! function_exists( 'jk_new_blog_notification' ) ) :
	/**
	 * Notifies the site admin that the installation of JKPress is complete.
	 *
	 * Sends an email to the new administrator that the installation is complete
	 * and provides them with a record of their login credentials.
	 *
	 * @since 2.1.0
	 *
	 * @param string $blog_title Site title.
	 * @param string $blog_url   Site URL.
	 * @param int    $user_id    Administrator's user ID.
	 * @param string $password   Administrator's password. Note that a placeholder message is
	 *                           usually passed instead of the actual password.
	 */
	function jk_new_blog_notification( $blog_title, $blog_url, $user_id, $password ) {
		$user      = new JK_User( $user_id );
		$email     = $user->user_email;
		$name      = $user->user_login;
		$login_url = jk_login_url();

		$message = sprintf(
			/* translators: New site notification email. 1: New site URL, 2: User login, 3: User password or password reset link, 4: Login URL. */
			__(
				'Your new JKPress site has been successfully set up at:

%1$s

You can log in to the administrator account with the following information:

Username: %2$s
Password: %3$s
Log in here: %4$s

We hope you enjoy your new site. Thanks!

--The JKPress Team
https://wordpress.org/
'
			),
			$blog_url,
			$name,
			$password,
			$login_url
		);

		$installed_email = array(
			'to'      => $email,
			'subject' => __( 'New JKPress Site' ),
			'message' => $message,
			'headers' => '',
		);

		/**
		 * Filters the contents of the email sent to the site administrator when JKPress is installed.
		 *
		 * @since 5.6.0
		 *
		 * @param array $installed_email {
		 *     Used to build jk_mail().
		 *
		 *     @type string $to      The email address of the recipient.
		 *     @type string $subject The subject of the email.
		 *     @type string $message The content of the email.
		 *     @type string $headers Headers.
		 * }
		 * @param JK_User $user          The site administrator user object.
		 * @param string  $blog_title    The site title.
		 * @param string  $blog_url      The site URL.
		 * @param string  $password      The site administrator's password. Note that a placeholder message
		 *                               is usually passed instead of the user's actual password.
		 */
		$installed_email = apply_filters( 'jk_installed_email', $installed_email, $user, $blog_title, $blog_url, $password );

		jk_mail(
			$installed_email['to'],
			$installed_email['subject'],
			$installed_email['message'],
			$installed_email['headers']
		);
	}
endif;

if ( ! function_exists( 'jk_upgrade' ) ) :
	/**
	 * Runs JKPress Upgrade functions.
	 *
	 * Upgrades the database if needed during a site update.
	 *
	 * @since 2.1.0
	 *
	 * @global int $jk_current_db_version The old (current) database version.
	 * @global int $jk_db_version         The new database version.
	 */
	function jk_upgrade() {
		global $jk_current_db_version, $jk_db_version;

		$jk_current_db_version = (int) __get_option( 'db_version' );

		// We are up to date. Nothing to do.
		if ( $jk_db_version === $jk_current_db_version ) {
			return;
		}

		if ( ! is_blog_installed() ) {
			return;
		}

		jk_check_mysql_version();
		jk_cache_flush();
		pre_schema_upgrade();
		make_db_current_silent();
		upgrade_all();
		if ( is_multisite() && is_main_site() ) {
			upgrade_network();
		}
		jk_cache_flush();

		if ( is_multisite() ) {
			update_site_meta( get_current_blog_id(), 'db_version', $jk_db_version );
			update_site_meta( get_current_blog_id(), 'db_last_updated', microtime() );
		}

		delete_transient( 'jk_core_block_css_files' );

		/**
		 * Fires after a site is fully upgraded.
		 *
		 * @since 3.9.0
		 *
		 * @param int $jk_db_version         The new $jk_db_version.
		 * @param int $jk_current_db_version The old (current) $jk_db_version.
		 */
		do_action( 'jk_upgrade', $jk_db_version, $jk_current_db_version );
	}
endif;

/**
 * Functions to be called in installation and upgrade scripts.
 *
 * Contains conditional checks to determine which upgrade scripts to run,
 * based on database version and JK version being updated-to.
 *
 * @ignore
 * @since 1.0.1
 *
 * @global int $jk_current_db_version The old (current) database version.
 * @global int $jk_db_version         The new database version.
 */
function upgrade_all() {
	global $jk_current_db_version, $jk_db_version;

	$jk_current_db_version = (int) __get_option( 'db_version' );

	// We are up to date. Nothing to do.
	if ( $jk_db_version === $jk_current_db_version ) {
		return;
	}

	// If the version is not set in the DB, try to guess the version.
	if ( empty( $jk_current_db_version ) ) {
		$jk_current_db_version = 0;

		// If the template option exists, we have 1.5.
		$template = __get_option( 'template' );
		if ( ! empty( $template ) ) {
			$jk_current_db_version = 2541;
		}
	}

	if ( $jk_current_db_version < 6039 ) {
		upgrade_230_options_table();
	}

	populate_options();

	if ( $jk_current_db_version < 2541 ) {
		upgrade_100();
		upgrade_101();
		upgrade_110();
		upgrade_130();
	}

	if ( $jk_current_db_version < 3308 ) {
		upgrade_160();
	}

	if ( $jk_current_db_version < 4772 ) {
		upgrade_210();
	}

	if ( $jk_current_db_version < 4351 ) {
		upgrade_old_slugs();
	}

	if ( $jk_current_db_version < 5539 ) {
		upgrade_230();
	}

	if ( $jk_current_db_version < 6124 ) {
		upgrade_230_old_tables();
	}

	if ( $jk_current_db_version < 7499 ) {
		upgrade_250();
	}

	if ( $jk_current_db_version < 7935 ) {
		upgrade_252();
	}

	if ( $jk_current_db_version < 8201 ) {
		upgrade_260();
	}

	if ( $jk_current_db_version < 8989 ) {
		upgrade_270();
	}

	if ( $jk_current_db_version < 10360 ) {
		upgrade_280();
	}

	if ( $jk_current_db_version < 11958 ) {
		upgrade_290();
	}

	if ( $jk_current_db_version < 15260 ) {
		upgrade_300();
	}

	if ( $jk_current_db_version < 19389 ) {
		upgrade_330();
	}

	if ( $jk_current_db_version < 20080 ) {
		upgrade_340();
	}

	if ( $jk_current_db_version < 22422 ) {
		upgrade_350();
	}

	if ( $jk_current_db_version < 25824 ) {
		upgrade_370();
	}

	if ( $jk_current_db_version < 26148 ) {
		upgrade_372();
	}

	if ( $jk_current_db_version < 26691 ) {
		upgrade_380();
	}

	if ( $jk_current_db_version < 29630 ) {
		upgrade_400();
	}

	if ( $jk_current_db_version < 33055 ) {
		upgrade_430();
	}

	if ( $jk_current_db_version < 33056 ) {
		upgrade_431();
	}

	if ( $jk_current_db_version < 35700 ) {
		upgrade_440();
	}

	if ( $jk_current_db_version < 36686 ) {
		upgrade_450();
	}

	if ( $jk_current_db_version < 37965 ) {
		upgrade_460();
	}

	if ( $jk_current_db_version < 44719 ) {
		upgrade_510();
	}

	if ( $jk_current_db_version < 45744 ) {
		upgrade_530();
	}

	if ( $jk_current_db_version < 48575 ) {
		upgrade_550();
	}

	if ( $jk_current_db_version < 49752 ) {
		upgrade_560();
	}

	if ( $jk_current_db_version < 51917 ) {
		upgrade_590();
	}

	if ( $jk_current_db_version < 53011 ) {
		upgrade_600();
	}

	if ( $jk_current_db_version < 55853 ) {
		upgrade_630();
	}

	if ( $jk_current_db_version < 56657 ) {
		upgrade_640();
	}

	if ( $jk_current_db_version < 57155 ) {
		upgrade_650();
	}

	if ( $jk_current_db_version < 58975 ) {
		upgrade_670();
	}
	maybe_disable_link_manager();

	maybe_disable_automattic_widgets();

	update_option( 'db_version', $jk_db_version );
	update_option( 'db_upgraded', true );
}

/**
 * Execute changes made in JKPress 1.0.
 *
 * @ignore
 * @since 1.0.0
 *
 * @global jkdb $jkdb JKPress database abstraction object.
 */
function upgrade_100() {
	global $jkdb;

	// Get the title and ID of every post, post_name to check if it already has a value.
	$posts = $jkdb->get_results( "SELECT ID, post_title, post_name FROM $jkdb->posts WHERE post_name = ''" );
	if ( $posts ) {
		foreach ( $posts as $post ) {
			if ( '' === $post->post_name ) {
				$newtitle = sanitize_title( $post->post_title );
				$jkdb->query( $jkdb->prepare( "UPDATE $jkdb->posts SET post_name = %s WHERE ID = %d", $newtitle, $post->ID ) );
			}
		}
	}

	$categories = $jkdb->get_results( "SELECT cat_ID, cat_name, category_nicename FROM $jkdb->categories" );
	foreach ( $categories as $category ) {
		if ( '' === $category->category_nicename ) {
			$newtitle = sanitize_title( $category->cat_name );
			$jkdb->update( $jkdb->categories, array( 'category_nicename' => $newtitle ), array( 'cat_ID' => $category->cat_ID ) );
		}
	}

	$sql = "UPDATE $jkdb->options
		SET option_value = REPLACE(option_value, 'jk-links/links-images/', 'jk-images/links/')
		WHERE option_name LIKE %s
		AND option_value LIKE %s";
	$jkdb->query( $jkdb->prepare( $sql, $jkdb->esc_like( 'links_rating_image' ) . '%', $jkdb->esc_like( 'jk-links/links-images/' ) . '%' ) );

	$done_ids = $jkdb->get_results( "SELECT DISTINCT post_id FROM $jkdb->post2cat" );
	if ( $done_ids ) :
		$done_posts = array();
		foreach ( $done_ids as $done_id ) :
			$done_posts[] = $done_id->post_id;
		endforeach;
		$catwhere = ' AND ID NOT IN (' . implode( ',', $done_posts ) . ')';
	else :
		$catwhere = '';
	endif;

	$allposts = $jkdb->get_results( "SELECT ID, post_category FROM $jkdb->posts WHERE post_category != '0' $catwhere" );
	if ( $allposts ) :
		foreach ( $allposts as $post ) {
			// Check to see if it's already been imported.
			$cat = $jkdb->get_row( $jkdb->prepare( "SELECT * FROM $jkdb->post2cat WHERE post_id = %d AND category_id = %d", $post->ID, $post->post_category ) );
			if ( ! $cat && 0 !== (int) $post->post_category ) { // If there's no result.
				$jkdb->insert(
					$jkdb->post2cat,
					array(
						'post_id'     => $post->ID,
						'category_id' => $post->post_category,
					)
				);
			}
		}
	endif;
}

/**
 * Execute changes made in JKPress 1.0.1.
 *
 * @ignore
 * @since 1.0.1
 *
 * @global jkdb $jkdb JKPress database abstraction object.
 */
function upgrade_101() {
	global $jkdb;

	// Clean up indices, add a few.
	add_clean_index( $jkdb->posts, 'post_name' );
	add_clean_index( $jkdb->posts, 'post_status' );
	add_clean_index( $jkdb->categories, 'category_nicename' );
	add_clean_index( $jkdb->comments, 'comment_approved' );
	add_clean_index( $jkdb->comments, 'comment_post_ID' );
	add_clean_index( $jkdb->links, 'link_category' );
	add_clean_index( $jkdb->links, 'link_visible' );
}

/**
 * Execute changes made in JKPress 1.2.
 *
 * @ignore
 * @since 1.2.0
 *
 * @global jkdb $jkdb JKPress database abstraction object.
 */
function upgrade_110() {
	global $jkdb;

	// Set user_nicename.
	$users = $jkdb->get_results( "SELECT ID, user_nickname, user_nicename FROM $jkdb->users" );
	foreach ( $users as $user ) {
		if ( '' === $user->user_nicename ) {
			$newname = sanitize_title( $user->user_nickname );
			$jkdb->update( $jkdb->users, array( 'user_nicename' => $newname ), array( 'ID' => $user->ID ) );
		}
	}

	$users = $jkdb->get_results( "SELECT ID, user_pass from $jkdb->users" );
	foreach ( $users as $row ) {
		if ( ! preg_match( '/^[A-Fa-f0-9]{32}$/', $row->user_pass ) ) {
			$jkdb->update( $jkdb->users, array( 'user_pass' => md5( $row->user_pass ) ), array( 'ID' => $row->ID ) );
		}
	}

	// Get the GMT offset, we'll use that later on.
	$all_options = get_alloptions_110();

	$time_difference = $all_options->time_difference;

	$server_time    = time() + (int) gmdate( 'Z' );
	$weblogger_time = $server_time + $time_difference * HOUR_IN_SECONDS;
	$gmt_time       = time();

	$diff_gmt_server       = ( $gmt_time - $server_time ) / HOUR_IN_SECONDS;
	$diff_weblogger_server = ( $weblogger_time - $server_time ) / HOUR_IN_SECONDS;
	$diff_gmt_weblogger    = $diff_gmt_server - $diff_weblogger_server;
	$gmt_offset            = -$diff_gmt_weblogger;

	// Add a gmt_offset option, with value $gmt_offset.
	add_option( 'gmt_offset', $gmt_offset );

	/*
	 * Check if we already set the GMT fields. If we did, then
	 * MAX(post_date_gmt) can't be '0000-00-00 00:00:00'.
	 * <michel_v> I just slapped myself silly for not thinking about it earlier.
	 */
	$got_gmt_fields = ( '0000-00-00 00:00:00' !== $jkdb->get_var( "SELECT MAX(post_date_gmt) FROM $jkdb->posts" ) );

	if ( ! $got_gmt_fields ) {

		// Add or subtract time to all dates, to get GMT dates.
		$add_hours   = (int) $diff_gmt_weblogger;
		$add_minutes = (int) ( 60 * ( $diff_gmt_weblogger - $add_hours ) );
		$jkdb->query( "UPDATE $jkdb->posts SET post_date_gmt = DATE_ADD(post_date, INTERVAL '$add_hours:$add_minutes' HOUR_MINUTE)" );
		$jkdb->query( "UPDATE $jkdb->posts SET post_modified = post_date" );
		$jkdb->query( "UPDATE $jkdb->posts SET post_modified_gmt = DATE_ADD(post_modified, INTERVAL '$add_hours:$add_minutes' HOUR_MINUTE) WHERE post_modified != '0000-00-00 00:00:00'" );
		$jkdb->query( "UPDATE $jkdb->comments SET comment_date_gmt = DATE_ADD(comment_date, INTERVAL '$add_hours:$add_minutes' HOUR_MINUTE)" );
		$jkdb->query( "UPDATE $jkdb->users SET user_registered = DATE_ADD(user_registered, INTERVAL '$add_hours:$add_minutes' HOUR_MINUTE)" );
	}
}

/**
 * Execute changes made in JKPress 1.5.
 *
 * @ignore
 * @since 1.5.0
 *
 * @global jkdb $jkdb JKPress database abstraction object.
 */
function upgrade_130() {
	global $jkdb;

	// Remove extraneous backslashes.
	$posts = $jkdb->get_results( "SELECT ID, post_title, post_content, post_excerpt, guid, post_date, post_name, post_status, post_author FROM $jkdb->posts" );
	if ( $posts ) {
		foreach ( $posts as $post ) {
			$post_content = addslashes( deslash( $post->post_content ) );
			$post_title   = addslashes( deslash( $post->post_title ) );
			$post_excerpt = addslashes( deslash( $post->post_excerpt ) );
			if ( empty( $post->guid ) ) {
				$guid = get_permalink( $post->ID );
			} else {
				$guid = $post->guid;
			}

			$jkdb->update( $jkdb->posts, compact( 'post_title', 'post_content', 'post_excerpt', 'guid' ), array( 'ID' => $post->ID ) );

		}
	}

	// Remove extraneous backslashes.
	$comments = $jkdb->get_results( "SELECT comment_ID, comment_author, comment_content FROM $jkdb->comments" );
	if ( $comments ) {
		foreach ( $comments as $comment ) {
			$comment_content = deslash( $comment->comment_content );
			$comment_author  = deslash( $comment->comment_author );

			$jkdb->update( $jkdb->comments, compact( 'comment_content', 'comment_author' ), array( 'comment_ID' => $comment->comment_ID ) );
		}
	}

	// Remove extraneous backslashes.
	$links = $jkdb->get_results( "SELECT link_id, link_name, link_description FROM $jkdb->links" );
	if ( $links ) {
		foreach ( $links as $link ) {
			$link_name        = deslash( $link->link_name );
			$link_description = deslash( $link->link_description );

			$jkdb->update( $jkdb->links, compact( 'link_name', 'link_description' ), array( 'link_id' => $link->link_id ) );
		}
	}

	$active_plugins = __get_option( 'active_plugins' );

	/*
	 * If plugins are not stored in an array, they're stored in the old
	 * newline separated format. Convert to new format.
	 */
	if ( ! is_array( $active_plugins ) ) {
		$active_plugins = explode( "\n", trim( $active_plugins ) );
		update_option( 'active_plugins', $active_plugins );
	}

	// Obsolete tables.
	$jkdb->query( 'DROP TABLE IF EXISTS ' . $jkdb->prefix . 'optionvalues' );
	$jkdb->query( 'DROP TABLE IF EXISTS ' . $jkdb->prefix . 'optiontypes' );
	$jkdb->query( 'DROP TABLE IF EXISTS ' . $jkdb->prefix . 'optiongroups' );
	$jkdb->query( 'DROP TABLE IF EXISTS ' . $jkdb->prefix . 'optiongroup_options' );

	// Update comments table to use comment_type.
	$jkdb->query( "UPDATE $jkdb->comments SET comment_type='trackback', comment_content = REPLACE(comment_content, '<trackback />', '') WHERE comment_content LIKE '<trackback />%'" );
	$jkdb->query( "UPDATE $jkdb->comments SET comment_type='pingback', comment_content = REPLACE(comment_content, '<pingback />', '') WHERE comment_content LIKE '<pingback />%'" );

	// Some versions have multiple duplicate option_name rows with the same values.
	$options = $jkdb->get_results( "SELECT option_name, COUNT(option_name) AS dupes FROM `$jkdb->options` GROUP BY option_name" );
	foreach ( $options as $option ) {
		if ( $option->dupes > 1 ) { // Could this be done in the query?
			$limit    = $option->dupes - 1;
			$dupe_ids = $jkdb->get_col( $jkdb->prepare( "SELECT option_id FROM $jkdb->options WHERE option_name = %s LIMIT %d", $option->option_name, $limit ) );
			if ( $dupe_ids ) {
				$dupe_ids = implode( ',', $dupe_ids );
				$jkdb->query( "DELETE FROM $jkdb->options WHERE option_id IN ($dupe_ids)" );
			}
		}
	}

	make_site_theme();
}

/**
 * Execute changes made in JKPress 2.0.
 *
 * @ignore
 * @since 2.0.0
 *
 * @global jkdb $jkdb                  JKPress database abstraction object.
 * @global int  $jk_current_db_version The old (current) database version.
 */
function upgrade_160() {
	global $jkdb, $jk_current_db_version;

	populate_roles_160();

	$users = $jkdb->get_results( "SELECT * FROM $jkdb->users" );
	foreach ( $users as $user ) :
		if ( ! empty( $user->user_firstname ) ) {
			update_user_meta( $user->ID, 'first_name', jk_slash( $user->user_firstname ) );
		}
		if ( ! empty( $user->user_lastname ) ) {
			update_user_meta( $user->ID, 'last_name', jk_slash( $user->user_lastname ) );
		}
		if ( ! empty( $user->user_nickname ) ) {
			update_user_meta( $user->ID, 'nickname', jk_slash( $user->user_nickname ) );
		}
		if ( ! empty( $user->user_level ) ) {
			update_user_meta( $user->ID, $jkdb->prefix . 'user_level', $user->user_level );
		}
		if ( ! empty( $user->user_icq ) ) {
			update_user_meta( $user->ID, 'icq', jk_slash( $user->user_icq ) );
		}
		if ( ! empty( $user->user_aim ) ) {
			update_user_meta( $user->ID, 'aim', jk_slash( $user->user_aim ) );
		}
		if ( ! empty( $user->user_msn ) ) {
			update_user_meta( $user->ID, 'msn', jk_slash( $user->user_msn ) );
		}
		if ( ! empty( $user->user_yim ) ) {
			update_user_meta( $user->ID, 'yim', jk_slash( $user->user_icq ) );
		}
		if ( ! empty( $user->user_description ) ) {
			update_user_meta( $user->ID, 'description', jk_slash( $user->user_description ) );
		}

		if ( isset( $user->user_idmode ) ) :
			$idmode = $user->user_idmode;
			if ( 'nickname' === $idmode ) {
				$id = $user->user_nickname;
			}
			if ( 'login' === $idmode ) {
				$id = $user->user_login;
			}
			if ( 'firstname' === $idmode ) {
				$id = $user->user_firstname;
			}
			if ( 'lastname' === $idmode ) {
				$id = $user->user_lastname;
			}
			if ( 'namefl' === $idmode ) {
				$id = $user->user_firstname . ' ' . $user->user_lastname;
			}
			if ( 'namelf' === $idmode ) {
				$id = $user->user_lastname . ' ' . $user->user_firstname;
			}
			if ( ! $idmode ) {
				$id = $user->user_nickname;
			}
			$jkdb->update( $jkdb->users, array( 'display_name' => $id ), array( 'ID' => $user->ID ) );
		endif;

		// FIXME: RESET_CAPS is temporary code to reset roles and caps if flag is set.
		$caps = get_user_meta( $user->ID, $jkdb->prefix . 'capabilities' );
		if ( empty( $caps ) || defined( 'RESET_CAPS' ) ) {
			$level = get_user_meta( $user->ID, $jkdb->prefix . 'user_level', true );
			$role  = translate_level_to_role( $level );
			update_user_meta( $user->ID, $jkdb->prefix . 'capabilities', array( $role => true ) );
		}

	endforeach;
	$old_user_fields = array( 'user_firstname', 'user_lastname', 'user_icq', 'user_aim', 'user_msn', 'user_yim', 'user_idmode', 'user_ip', 'user_domain', 'user_browser', 'user_description', 'user_nickname', 'user_level' );
	$jkdb->hide_errors();
	foreach ( $old_user_fields as $old ) {
		$jkdb->query( "ALTER TABLE $jkdb->users DROP $old" );
	}
	$jkdb->show_errors();

	// Populate comment_count field of posts table.
	$comments = $jkdb->get_results( "SELECT comment_post_ID, COUNT(*) as c FROM $jkdb->comments WHERE comment_approved = '1' GROUP BY comment_post_ID" );
	if ( is_array( $comments ) ) {
		foreach ( $comments as $comment ) {
			$jkdb->update( $jkdb->posts, array( 'comment_count' => $comment->c ), array( 'ID' => $comment->comment_post_ID ) );
		}
	}

	/*
	 * Some alpha versions used a post status of object instead of attachment
	 * and put the mime type in post_type instead of post_mime_type.
	 */
	if ( $jk_current_db_version > 2541 && $jk_current_db_version <= 3091 ) {
		$objects = $jkdb->get_results( "SELECT ID, post_type FROM $jkdb->posts WHERE post_status = 'object'" );
		foreach ( $objects as $object ) {
			$jkdb->update(
				$jkdb->posts,
				array(
					'post_status'    => 'attachment',
					'post_mime_type' => $object->post_type,
					'post_type'      => '',
				),
				array( 'ID' => $object->ID )
			);

			$meta = get_post_meta( $object->ID, 'imagedata', true );
			if ( ! empty( $meta['file'] ) ) {
				update_attached_file( $object->ID, $meta['file'] );
			}
		}
	}
}

/**
 * Execute changes made in JKPress 2.1.
 *
 * @ignore
 * @since 2.1.0
 *
 * @global int  $jk_current_db_version The old (current) database version.
 * @global jkdb $jkdb                  JKPress database abstraction object.
 */
function upgrade_210() {
	global $jk_current_db_version, $jkdb;

	if ( $jk_current_db_version < 3506 ) {
		// Update status and type.
		$posts = $jkdb->get_results( "SELECT ID, post_status FROM $jkdb->posts" );

		if ( ! empty( $posts ) ) {
			foreach ( $posts as $post ) {
				$status = $post->post_status;
				$type   = 'post';

				if ( 'static' === $status ) {
					$status = 'publish';
					$type   = 'page';
				} elseif ( 'attachment' === $status ) {
					$status = 'inherit';
					$type   = 'attachment';
				}

				$jkdb->query( $jkdb->prepare( "UPDATE $jkdb->posts SET post_status = %s, post_type = %s WHERE ID = %d", $status, $type, $post->ID ) );
			}
		}
	}

	if ( $jk_current_db_version < 3845 ) {
		populate_roles_210();
	}

	if ( $jk_current_db_version < 3531 ) {
		// Give future posts a post_status of future.
		$now = gmdate( 'Y-m-d H:i:59' );
		$jkdb->query( "UPDATE $jkdb->posts SET post_status = 'future' WHERE post_status = 'publish' AND post_date_gmt > '$now'" );

		$posts = $jkdb->get_results( "SELECT ID, post_date FROM $jkdb->posts WHERE post_status ='future'" );
		if ( ! empty( $posts ) ) {
			foreach ( $posts as $post ) {
				jk_schedule_single_event( mysql2date( 'U', $post->post_date, false ), 'publish_future_post', array( $post->ID ) );
			}
		}
	}
}

/**
 * Execute changes made in JKPress 2.3.
 *
 * @ignore
 * @since 2.3.0
 *
 * @global int  $jk_current_db_version The old (current) database version.
 * @global jkdb $jkdb                  JKPress database abstraction object.
 */
function upgrade_230() {
	global $jk_current_db_version, $jkdb;

	if ( $jk_current_db_version < 5200 ) {
		populate_roles_230();
	}

	// Convert categories to terms.
	$tt_ids     = array();
	$have_tags  = false;
	$categories = $jkdb->get_results( "SELECT * FROM $jkdb->categories ORDER BY cat_ID" );
	foreach ( $categories as $category ) {
		$term_id     = (int) $category->cat_ID;
		$name        = $category->cat_name;
		$description = $category->category_description;
		$slug        = $category->category_nicename;
		$parent      = $category->category_parent;
		$term_group  = 0;

		// Associate terms with the same slug in a term group and make slugs unique.
		$exists = $jkdb->get_results( $jkdb->prepare( "SELECT term_id, term_group FROM $jkdb->terms WHERE slug = %s", $slug ) );
		if ( $exists ) {
			$term_group = $exists[0]->term_group;
			$id         = $exists[0]->term_id;
			$num        = 2;
			do {
				$alt_slug = $slug . "-$num";
				++$num;
				$slug_check = $jkdb->get_var( $jkdb->prepare( "SELECT slug FROM $jkdb->terms WHERE slug = %s", $alt_slug ) );
			} while ( $slug_check );

			$slug = $alt_slug;

			if ( empty( $term_group ) ) {
				$term_group = $jkdb->get_var( "SELECT MAX(term_group) FROM $jkdb->terms GROUP BY term_group" ) + 1;
				$jkdb->query( $jkdb->prepare( "UPDATE $jkdb->terms SET term_group = %d WHERE term_id = %d", $term_group, $id ) );
			}
		}

		$jkdb->query(
			$jkdb->prepare(
				"INSERT INTO $jkdb->terms (term_id, name, slug, term_group) VALUES
		(%d, %s, %s, %d)",
				$term_id,
				$name,
				$slug,
				$term_group
			)
		);

		$count = 0;
		if ( ! empty( $category->category_count ) ) {
			$count    = (int) $category->category_count;
			$taxonomy = 'category';
			$jkdb->query( $jkdb->prepare( "INSERT INTO $jkdb->term_taxonomy (term_id, taxonomy, description, parent, count) VALUES ( %d, %s, %s, %d, %d)", $term_id, $taxonomy, $description, $parent, $count ) );
			$tt_ids[ $term_id ][ $taxonomy ] = (int) $jkdb->insert_id;
		}

		if ( ! empty( $category->link_count ) ) {
			$count    = (int) $category->link_count;
			$taxonomy = 'link_category';
			$jkdb->query( $jkdb->prepare( "INSERT INTO $jkdb->term_taxonomy (term_id, taxonomy, description, parent, count) VALUES ( %d, %s, %s, %d, %d)", $term_id, $taxonomy, $description, $parent, $count ) );
			$tt_ids[ $term_id ][ $taxonomy ] = (int) $jkdb->insert_id;
		}

		if ( ! empty( $category->tag_count ) ) {
			$have_tags = true;
			$count     = (int) $category->tag_count;
			$taxonomy  = 'post_tag';
			$jkdb->insert( $jkdb->term_taxonomy, compact( 'term_id', 'taxonomy', 'description', 'parent', 'count' ) );
			$tt_ids[ $term_id ][ $taxonomy ] = (int) $jkdb->insert_id;
		}

		if ( empty( $count ) ) {
			$count    = 0;
			$taxonomy = 'category';
			$jkdb->insert( $jkdb->term_taxonomy, compact( 'term_id', 'taxonomy', 'description', 'parent', 'count' ) );
			$tt_ids[ $term_id ][ $taxonomy ] = (int) $jkdb->insert_id;
		}
	}

	$select = 'post_id, category_id';
	if ( $have_tags ) {
		$select .= ', rel_type';
	}

	$posts = $jkdb->get_results( "SELECT $select FROM $jkdb->post2cat GROUP BY post_id, category_id" );
	foreach ( $posts as $post ) {
		$post_id  = (int) $post->post_id;
		$term_id  = (int) $post->category_id;
		$taxonomy = 'category';
		if ( ! empty( $post->rel_type ) && 'tag' === $post->rel_type ) {
			$taxonomy = 'tag';
		}
		$tt_id = $tt_ids[ $term_id ][ $taxonomy ];
		if ( empty( $tt_id ) ) {
			continue;
		}

		$jkdb->insert(
			$jkdb->term_relationships,
			array(
				'object_id'        => $post_id,
				'term_taxonomy_id' => $tt_id,
			)
		);
	}

	// < 3570 we used linkcategories. >= 3570 we used categories and link2cat.
	if ( $jk_current_db_version < 3570 ) {
		/*
		 * Create link_category terms for link categories. Create a map of link
		 * category IDs to link_category terms.
		 */
		$link_cat_id_map  = array();
		$default_link_cat = 0;
		$tt_ids           = array();
		$link_cats        = $jkdb->get_results( 'SELECT cat_id, cat_name FROM ' . $jkdb->prefix . 'linkcategories' );
		foreach ( $link_cats as $category ) {
			$cat_id     = (int) $category->cat_id;
			$term_id    = 0;
			$name       = jk_slash( $category->cat_name );
			$slug       = sanitize_title( $name );
			$term_group = 0;

			// Associate terms with the same slug in a term group and make slugs unique.
			$exists = $jkdb->get_results( $jkdb->prepare( "SELECT term_id, term_group FROM $jkdb->terms WHERE slug = %s", $slug ) );
			if ( $exists ) {
				$term_group = $exists[0]->term_group;
				$term_id    = $exists[0]->term_id;
			}

			if ( empty( $term_id ) ) {
				$jkdb->insert( $jkdb->terms, compact( 'name', 'slug', 'term_group' ) );
				$term_id = (int) $jkdb->insert_id;
			}

			$link_cat_id_map[ $cat_id ] = $term_id;
			$default_link_cat           = $term_id;

			$jkdb->insert(
				$jkdb->term_taxonomy,
				array(
					'term_id'     => $term_id,
					'taxonomy'    => 'link_category',
					'description' => '',
					'parent'      => 0,
					'count'       => 0,
				)
			);
			$tt_ids[ $term_id ] = (int) $jkdb->insert_id;
		}

		// Associate links to categories.
		$links = $jkdb->get_results( "SELECT link_id, link_category FROM $jkdb->links" );
		if ( ! empty( $links ) ) {
			foreach ( $links as $link ) {
				if ( 0 === (int) $link->link_category ) {
					continue;
				}
				if ( ! isset( $link_cat_id_map[ $link->link_category ] ) ) {
					continue;
				}
				$term_id = $link_cat_id_map[ $link->link_category ];
				$tt_id   = $tt_ids[ $term_id ];
				if ( empty( $tt_id ) ) {
					continue;
				}

				$jkdb->insert(
					$jkdb->term_relationships,
					array(
						'object_id'        => $link->link_id,
						'term_taxonomy_id' => $tt_id,
					)
				);
			}
		}

		// Set default to the last category we grabbed during the upgrade loop.
		update_option( 'default_link_category', $default_link_cat );
	} else {
		$links = $jkdb->get_results( "SELECT link_id, category_id FROM $jkdb->link2cat GROUP BY link_id, category_id" );
		foreach ( $links as $link ) {
			$link_id  = (int) $link->link_id;
			$term_id  = (int) $link->category_id;
			$taxonomy = 'link_category';
			$tt_id    = $tt_ids[ $term_id ][ $taxonomy ];
			if ( empty( $tt_id ) ) {
				continue;
			}
			$jkdb->insert(
				$jkdb->term_relationships,
				array(
					'object_id'        => $link_id,
					'term_taxonomy_id' => $tt_id,
				)
			);
		}
	}

	if ( $jk_current_db_version < 4772 ) {
		// Obsolete linkcategories table.
		$jkdb->query( 'DROP TABLE IF EXISTS ' . $jkdb->prefix . 'linkcategories' );
	}

	// Recalculate all counts.
	$terms = $jkdb->get_results( "SELECT term_taxonomy_id, taxonomy FROM $jkdb->term_taxonomy" );
	foreach ( (array) $terms as $term ) {
		if ( 'post_tag' === $term->taxonomy || 'category' === $term->taxonomy ) {
			$count = $jkdb->get_var( $jkdb->prepare( "SELECT COUNT(*) FROM $jkdb->term_relationships, $jkdb->posts WHERE $jkdb->posts.ID = $jkdb->term_relationships.object_id AND post_status = 'publish' AND post_type = 'post' AND term_taxonomy_id = %d", $term->term_taxonomy_id ) );
		} else {
			$count = $jkdb->get_var( $jkdb->prepare( "SELECT COUNT(*) FROM $jkdb->term_relationships WHERE term_taxonomy_id = %d", $term->term_taxonomy_id ) );
		}
		$jkdb->update( $jkdb->term_taxonomy, array( 'count' => $count ), array( 'term_taxonomy_id' => $term->term_taxonomy_id ) );
	}
}

/**
 * Remove old options from the database.
 *
 * @ignore
 * @since 2.3.0
 *
 * @global jkdb $jkdb JKPress database abstraction object.
 */
function upgrade_230_options_table() {
	global $jkdb;
	$old_options_fields = array( 'option_can_override', 'option_type', 'option_width', 'option_height', 'option_description', 'option_admin_level' );
	$jkdb->hide_errors();
	foreach ( $old_options_fields as $old ) {
		$jkdb->query( "ALTER TABLE $jkdb->options DROP $old" );
	}
	$jkdb->show_errors();
}

/**
 * Remove old categories, link2cat, and post2cat database tables.
 *
 * @ignore
 * @since 2.3.0
 *
 * @global jkdb $jkdb JKPress database abstraction object.
 */
function upgrade_230_old_tables() {
	global $jkdb;
	$jkdb->query( 'DROP TABLE IF EXISTS ' . $jkdb->prefix . 'categories' );
	$jkdb->query( 'DROP TABLE IF EXISTS ' . $jkdb->prefix . 'link2cat' );
	$jkdb->query( 'DROP TABLE IF EXISTS ' . $jkdb->prefix . 'post2cat' );
}

/**
 * Upgrade old slugs made in version 2.2.
 *
 * @ignore
 * @since 2.2.0
 *
 * @global jkdb $jkdb JKPress database abstraction object.
 */
function upgrade_old_slugs() {
	// Upgrade people who were using the Redirect Old Slugs plugin.
	global $jkdb;
	$jkdb->query( "UPDATE $jkdb->postmeta SET meta_key = '_jk_old_slug' WHERE meta_key = 'old_slug'" );
}

/**
 * Execute changes made in JKPress 2.5.0.
 *
 * @ignore
 * @since 2.5.0
 *
 * @global int $jk_current_db_version The old (current) database version.
 */
function upgrade_250() {
	global $jk_current_db_version;

	if ( $jk_current_db_version < 6689 ) {
		populate_roles_250();
	}
}

/**
 * Execute changes made in JKPress 2.5.2.
 *
 * @ignore
 * @since 2.5.2
 *
 * @global jkdb $jkdb JKPress database abstraction object.
 */
function upgrade_252() {
	global $jkdb;

	$jkdb->query( "UPDATE $jkdb->users SET user_activation_key = ''" );
}

/**
 * Execute changes made in JKPress 2.6.
 *
 * @ignore
 * @since 2.6.0
 *
 * @global int $jk_current_db_version The old (current) database version.
 */
function upgrade_260() {
	global $jk_current_db_version;

	if ( $jk_current_db_version < 8000 ) {
		populate_roles_260();
	}
}

/**
 * Execute changes made in JKPress 2.7.
 *
 * @ignore
 * @since 2.7.0
 *
 * @global int  $jk_current_db_version The old (current) database version.
 * @global jkdb $jkdb                  JKPress database abstraction object.
 */
function upgrade_270() {
	global $jk_current_db_version, $jkdb;

	if ( $jk_current_db_version < 8980 ) {
		populate_roles_270();
	}

	// Update post_date for unpublished posts with empty timestamp.
	if ( $jk_current_db_version < 8921 ) {
		$jkdb->query( "UPDATE $jkdb->posts SET post_date = post_modified WHERE post_date = '0000-00-00 00:00:00'" );
	}
}

/**
 * Execute changes made in JKPress 2.8.
 *
 * @ignore
 * @since 2.8.0
 *
 * @global int  $jk_current_db_version The old (current) database version.
 * @global jkdb $jkdb                  JKPress database abstraction object.
 */
function upgrade_280() {
	global $jk_current_db_version, $jkdb;

	if ( $jk_current_db_version < 10360 ) {
		populate_roles_280();
	}
	if ( is_multisite() ) {
		$start = 0;
		while ( $rows = $jkdb->get_results( "SELECT option_name, option_value FROM $jkdb->options ORDER BY option_id LIMIT $start, 20" ) ) {
			foreach ( $rows as $row ) {
				$value = maybe_unserialize( $row->option_value );
				if ( $value === $row->option_value ) {
					$value = stripslashes( $value );
				}
				if ( $value !== $row->option_value ) {
					update_option( $row->option_name, $value );
				}
			}
			$start += 20;
		}
		clean_blog_cache( get_current_blog_id() );
	}
}

/**
 * Execute changes made in JKPress 2.9.
 *
 * @ignore
 * @since 2.9.0
 *
 * @global int $jk_current_db_version The old (current) database version.
 */
function upgrade_290() {
	global $jk_current_db_version;

	if ( $jk_current_db_version < 11958 ) {
		/*
		 * Previously, setting depth to 1 would redundantly disable threading,
		 * but now 2 is the minimum depth to avoid confusion.
		 */
		if ( 1 === (int) get_option( 'thread_comments_depth' ) ) {
			update_option( 'thread_comments_depth', 2 );
			update_option( 'thread_comments', 0 );
		}
	}
}

/**
 * Execute changes made in JKPress 3.0.
 *
 * @ignore
 * @since 3.0.0
 *
 * @global int  $jk_current_db_version The old (current) database version.
 * @global jkdb $jkdb                  JKPress database abstraction object.
 */
function upgrade_300() {
	global $jk_current_db_version, $jkdb;

	if ( $jk_current_db_version < 15093 ) {
		populate_roles_300();
	}

	if ( $jk_current_db_version < 14139 && is_multisite() && is_main_site() && ! defined( 'MULTISITE' ) && get_site_option( 'siteurl' ) === false ) {
		add_site_option( 'siteurl', '' );
	}

	// 3.0 screen options key name changes.
	if ( jk_should_upgrade_global_tables() ) {
		$sql    = "DELETE FROM $jkdb->usermeta
			WHERE meta_key LIKE %s
			OR meta_key LIKE %s
			OR meta_key LIKE %s
			OR meta_key LIKE %s
			OR meta_key LIKE %s
			OR meta_key LIKE %s
			OR meta_key = 'manageedittagscolumnshidden'
			OR meta_key = 'managecategoriescolumnshidden'
			OR meta_key = 'manageedit-tagscolumnshidden'
			OR meta_key = 'manageeditcolumnshidden'
			OR meta_key = 'categories_per_page'
			OR meta_key = 'edit_tags_per_page'";
		$prefix = $jkdb->esc_like( $jkdb->base_prefix );
		$jkdb->query(
			$jkdb->prepare(
				$sql,
				$prefix . '%' . $jkdb->esc_like( 'meta-box-hidden' ) . '%',
				$prefix . '%' . $jkdb->esc_like( 'closedpostboxes' ) . '%',
				$prefix . '%' . $jkdb->esc_like( 'manage-' ) . '%' . $jkdb->esc_like( '-columns-hidden' ) . '%',
				$prefix . '%' . $jkdb->esc_like( 'meta-box-order' ) . '%',
				$prefix . '%' . $jkdb->esc_like( 'metaboxorder' ) . '%',
				$prefix . '%' . $jkdb->esc_like( 'screen_layout' ) . '%'
			)
		);
	}
}

/**
 * Execute changes made in JKPress 3.3.
 *
 * @ignore
 * @since 3.3.0
 *
 * @global int   $jk_current_db_version The old (current) database version.
 * @global jkdb  $jkdb                  JKPress database abstraction object.
 * @global array $jk_registered_widgets
 * @global array $sidebars_widgets
 */
function upgrade_330() {
	global $jk_current_db_version, $jkdb, $jk_registered_widgets, $sidebars_widgets;

	if ( $jk_current_db_version < 19061 && jk_should_upgrade_global_tables() ) {
		$jkdb->query( "DELETE FROM $jkdb->usermeta WHERE meta_key IN ('show_admin_bar_admin', 'plugins_last_view')" );
	}

	if ( $jk_current_db_version >= 11548 ) {
		return;
	}

	$sidebars_widgets  = get_option( 'sidebars_widgets', array() );
	$_sidebars_widgets = array();

	if ( isset( $sidebars_widgets['jk_inactive_widgets'] ) || empty( $sidebars_widgets ) ) {
		$sidebars_widgets['array_version'] = 3;
	} elseif ( ! isset( $sidebars_widgets['array_version'] ) ) {
		$sidebars_widgets['array_version'] = 1;
	}

	switch ( $sidebars_widgets['array_version'] ) {
		case 1:
			foreach ( (array) $sidebars_widgets as $index => $sidebar ) {
				if ( is_array( $sidebar ) ) {
					foreach ( (array) $sidebar as $i => $name ) {
						$id = strtolower( $name );
						if ( isset( $jk_registered_widgets[ $id ] ) ) {
							$_sidebars_widgets[ $index ][ $i ] = $id;
							continue;
						}

						$id = sanitize_title( $name );
						if ( isset( $jk_registered_widgets[ $id ] ) ) {
							$_sidebars_widgets[ $index ][ $i ] = $id;
							continue;
						}

						$found = false;

						foreach ( $jk_registered_widgets as $widget_id => $widget ) {
							if ( strtolower( $widget['name'] ) === strtolower( $name ) ) {
								$_sidebars_widgets[ $index ][ $i ] = $widget['id'];

								$found = true;
								break;
							} elseif ( sanitize_title( $widget['name'] ) === sanitize_title( $name ) ) {
								$_sidebars_widgets[ $index ][ $i ] = $widget['id'];

								$found = true;
								break;
							}
						}

						if ( $found ) {
							continue;
						}

						unset( $_sidebars_widgets[ $index ][ $i ] );
					}
				}
			}
			$_sidebars_widgets['array_version'] = 2;
			$sidebars_widgets                   = $_sidebars_widgets;
			unset( $_sidebars_widgets );

			// Intentional fall-through to upgrade to the next version.
		case 2:
			$sidebars_widgets                  = retrieve_widgets();
			$sidebars_widgets['array_version'] = 3;
			update_option( 'sidebars_widgets', $sidebars_widgets );
	}
}

/**
 * Execute changes made in JKPress 3.4.
 *
 * @ignore
 * @since 3.4.0
 *
 * @global int  $jk_current_db_version The old (current) database version.
 * @global jkdb $jkdb                  JKPress database abstraction object.
 */
function upgrade_340() {
	global $jk_current_db_version, $jkdb;

	if ( $jk_current_db_version < 19798 ) {
		$jkdb->hide_errors();
		$jkdb->query( "ALTER TABLE $jkdb->options DROP COLUMN blog_id" );
		$jkdb->show_errors();
	}

	if ( $jk_current_db_version < 19799 ) {
		$jkdb->hide_errors();
		$jkdb->query( "ALTER TABLE $jkdb->comments DROP INDEX comment_approved" );
		$jkdb->show_errors();
	}

	if ( $jk_current_db_version < 20022 && jk_should_upgrade_global_tables() ) {
		$jkdb->query( "DELETE FROM $jkdb->usermeta WHERE meta_key = 'themes_last_view'" );
	}

	if ( $jk_current_db_version < 20080 ) {
		if ( 'yes' === $jkdb->get_var( "SELECT autoload FROM $jkdb->options WHERE option_name = 'uninstall_plugins'" ) ) {
			$uninstall_plugins = get_option( 'uninstall_plugins' );
			delete_option( 'uninstall_plugins' );
			add_option( 'uninstall_plugins', $uninstall_plugins, null, false );
		}
	}
}

/**
 * Execute changes made in JKPress 3.5.
 *
 * @ignore
 * @since 3.5.0
 *
 * @global int  $jk_current_db_version The old (current) database version.
 * @global jkdb $jkdb                  JKPress database abstraction object.
 */
function upgrade_350() {
	global $jk_current_db_version, $jkdb;

	if ( $jk_current_db_version < 22006 && $jkdb->get_var( "SELECT link_id FROM $jkdb->links LIMIT 1" ) ) {
		update_option( 'link_manager_enabled', 1 ); // Previously set to 0 by populate_options().
	}

	if ( $jk_current_db_version < 21811 && jk_should_upgrade_global_tables() ) {
		$meta_keys = array();
		foreach ( array_merge( get_post_types(), get_taxonomies() ) as $name ) {
			if ( str_contains( $name, '-' ) ) {
				$meta_keys[] = 'edit_' . str_replace( '-', '_', $name ) . '_per_page';
			}
		}
		if ( $meta_keys ) {
			$meta_keys = implode( "', '", $meta_keys );
			$jkdb->query( "DELETE FROM $jkdb->usermeta WHERE meta_key IN ('$meta_keys')" );
		}
	}

	if ( $jk_current_db_version < 22422 ) {
		$term = get_term_by( 'slug', 'post-format-standard', 'post_format' );
		if ( $term ) {
			jk_delete_term( $term->term_id, 'post_format' );
		}
	}
}

/**
 * Execute changes made in JKPress 3.7.
 *
 * @ignore
 * @since 3.7.0
 *
 * @global int $jk_current_db_version The old (current) database version.
 */
function upgrade_370() {
	global $jk_current_db_version;

	if ( $jk_current_db_version < 25824 ) {
		jk_clear_scheduled_hook( 'jk_auto_updates_maybe_update' );
	}
}

/**
 * Execute changes made in JKPress 3.7.2.
 *
 * @ignore
 * @since 3.7.2
 *
 * @global int $jk_current_db_version The old (current) database version.
 */
function upgrade_372() {
	global $jk_current_db_version;

	if ( $jk_current_db_version < 26148 ) {
		jk_clear_scheduled_hook( 'jk_maybe_auto_update' );
	}
}

/**
 * Execute changes made in JKPress 3.8.0.
 *
 * @ignore
 * @since 3.8.0
 *
 * @global int $jk_current_db_version The old (current) database version.
 */
function upgrade_380() {
	global $jk_current_db_version;

	if ( $jk_current_db_version < 26691 ) {
		deactivate_plugins( array( 'mp6/mp6.php' ), true );
	}
}

/**
 * Execute changes made in JKPress 4.0.0.
 *
 * @ignore
 * @since 4.0.0
 *
 * @global int $jk_current_db_version The old (current) database version.
 */
function upgrade_400() {
	global $jk_current_db_version;

	if ( $jk_current_db_version < 29630 ) {
		if ( ! is_multisite() && false === get_option( 'JKLANG' ) ) {
			if ( defined( 'JKLANG' ) && ( '' !== JKLANG ) && in_array( JKLANG, get_available_languages(), true ) ) {
				update_option( 'JKLANG', JKLANG );
			} else {
				update_option( 'JKLANG', '' );
			}
		}
	}
}

/**
 * Execute changes made in JKPress 4.2.0.
 *
 * @ignore
 * @since 4.2.0
 */
function upgrade_420() {}

/**
 * Executes changes made in JKPress 4.3.0.
 *
 * @ignore
 * @since 4.3.0
 *
 * @global int  $jk_current_db_version The old (current) database version.
 * @global jkdb $jkdb                  JKPress database abstraction object.
 */
function upgrade_430() {
	global $jk_current_db_version, $jkdb;

	if ( $jk_current_db_version < 32364 ) {
		upgrade_430_fix_comments();
	}

	// Shared terms are split in a separate process.
	if ( $jk_current_db_version < 32814 ) {
		update_option( 'finished_splitting_shared_terms', 0 );
		jk_schedule_single_event( time() + ( 1 * MINUTE_IN_SECONDS ), 'jk_split_shared_term_batch' );
	}

	if ( $jk_current_db_version < 33055 && 'utf8mb4' === $jkdb->charset ) {
		if ( is_multisite() ) {
			$tables = $jkdb->tables( 'blog' );
		} else {
			$tables = $jkdb->tables( 'all' );
			if ( ! jk_should_upgrade_global_tables() ) {
				$global_tables = $jkdb->tables( 'global' );
				$tables        = array_diff_assoc( $tables, $global_tables );
			}
		}

		foreach ( $tables as $table ) {
			maybe_convert_table_to_utf8mb4( $table );
		}
	}
}

/**
 * Executes comments changes made in JKPress 4.3.0.
 *
 * @ignore
 * @since 4.3.0
 *
 * @global jkdb $jkdb JKPress database abstraction object.
 */
function upgrade_430_fix_comments() {
	global $jkdb;

	$content_length = $jkdb->get_col_length( $jkdb->comments, 'comment_content' );

	if ( is_jk_error( $content_length ) ) {
		return;
	}

	if ( false === $content_length ) {
		$content_length = array(
			'type'   => 'byte',
			'length' => 65535,
		);
	} elseif ( ! is_array( $content_length ) ) {
		$length         = (int) $content_length > 0 ? (int) $content_length : 65535;
		$content_length = array(
			'type'   => 'byte',
			'length' => $length,
		);
	}

	if ( 'byte' !== $content_length['type'] || 0 === $content_length['length'] ) {
		// Sites with malformed DB schemas are on their own.
		return;
	}

	$allowed_length = (int) $content_length['length'] - 10;

	$comments = $jkdb->get_results(
		"SELECT `comment_ID` FROM `{$jkdb->comments}`
			WHERE `comment_date_gmt` > '2015-04-26'
			AND LENGTH( `comment_content` ) >= {$allowed_length}
			AND ( `comment_content` LIKE '%<%' OR `comment_content` LIKE '%>%' )"
	);

	foreach ( $comments as $comment ) {
		jk_delete_comment( $comment->comment_ID, true );
	}
}

/**
 * Executes changes made in JKPress 4.3.1.
 *
 * @ignore
 * @since 4.3.1
 */
function upgrade_431() {
	// Fix incorrect cron entries for term splitting.
	$cron_array = _get_cron_array();
	if ( isset( $cron_array['jk_batch_split_terms'] ) ) {
		unset( $cron_array['jk_batch_split_terms'] );
		_set_cron_array( $cron_array );
	}
}

/**
 * Executes changes made in JKPress 4.4.0.
 *
 * @ignore
 * @since 4.4.0
 *
 * @global int  $jk_current_db_version The old (current) database version.
 * @global jkdb $jkdb                  JKPress database abstraction object.
 */
function upgrade_440() {
	global $jk_current_db_version, $jkdb;

	if ( $jk_current_db_version < 34030 ) {
		$jkdb->query( "ALTER TABLE {$jkdb->options} MODIFY option_name VARCHAR(191)" );
	}

	// Remove the unused 'add_users' role.
	$roles = jk_roles();
	foreach ( $roles->role_objects as $role ) {
		if ( $role->has_cap( 'add_users' ) ) {
			$role->remove_cap( 'add_users' );
		}
	}
}

/**
 * Executes changes made in JKPress 4.5.0.
 *
 * @ignore
 * @since 4.5.0
 *
 * @global int  $jk_current_db_version The old (current) database version.
 * @global jkdb $jkdb                  JKPress database abstraction object.
 */
function upgrade_450() {
	global $jk_current_db_version, $jkdb;

	if ( $jk_current_db_version < 36180 ) {
		jk_clear_scheduled_hook( 'jk_maybe_auto_update' );
	}

	// Remove unused email confirmation options, moved to usermeta.
	if ( $jk_current_db_version < 36679 && is_multisite() ) {
		$jkdb->query( "DELETE FROM $jkdb->options WHERE option_name REGEXP '^[0-9]+_new_email$'" );
	}

	// Remove unused user setting for jkLink.
	delete_user_setting( 'wplink' );
}

/**
 * Executes changes made in JKPress 4.6.0.
 *
 * @ignore
 * @since 4.6.0
 *
 * @global int $jk_current_db_version The old (current) database version.
 */
function upgrade_460() {
	global $jk_current_db_version;

	// Remove unused post meta.
	if ( $jk_current_db_version < 37854 ) {
		delete_post_meta_by_key( '_post_restored_from' );
	}

	// Remove plugins with callback as an array object/method as the uninstall hook, see #13786.
	if ( $jk_current_db_version < 37965 ) {
		$uninstall_plugins = get_option( 'uninstall_plugins', array() );

		if ( ! empty( $uninstall_plugins ) ) {
			foreach ( $uninstall_plugins as $basename => $callback ) {
				if ( is_array( $callback ) && is_object( $callback[0] ) ) {
					unset( $uninstall_plugins[ $basename ] );
				}
			}

			update_option( 'uninstall_plugins', $uninstall_plugins );
		}
	}
}

/**
 * Executes changes made in JKPress 5.0.0.
 *
 * @ignore
 * @since 5.0.0
 * @deprecated 5.1.0
 */
function upgrade_500() {
}

/**
 * Executes changes made in JKPress 5.1.0.
 *
 * @ignore
 * @since 5.1.0
 */
function upgrade_510() {
	delete_site_option( 'upgrade_500_was_gutenberg_active' );
}

/**
 * Executes changes made in JKPress 5.3.0.
 *
 * @ignore
 * @since 5.3.0
 */
function upgrade_530() {
	/*
	 * The `admin_email_lifespan` option may have been set by an admin that just logged in,
	 * saw the verification screen, clicked on a button there, and is now upgrading the db,
	 * or by populate_options() that is called earlier in upgrade_all().
	 * In the second case `admin_email_lifespan` should be reset so the verification screen
	 * is shown next time an admin logs in.
	 */
	if ( function_exists( 'current_user_can' ) && ! current_user_can( 'manage_options' ) ) {
		update_option( 'admin_email_lifespan', 0 );
	}
}

/**
 * Executes changes made in JKPress 5.5.0.
 *
 * @ignore
 * @since 5.5.0
 *
 * @global int $jk_current_db_version The old (current) database version.
 */
function upgrade_550() {
	global $jk_current_db_version;

	if ( $jk_current_db_version < 48121 ) {
		$comment_previously_approved = get_option( 'comment_whitelist', '' );
		update_option( 'comment_previously_approved', $comment_previously_approved );
		delete_option( 'comment_whitelist' );
	}

	if ( $jk_current_db_version < 48575 ) {
		// Use more clear and inclusive language.
		$disallowed_list = get_option( 'blacklist_keys' );

		/*
		 * This option key was briefly renamed `blocklist_keys`.
		 * Account for sites that have this key present when the original key does not exist.
		 */
		if ( false === $disallowed_list ) {
			$disallowed_list = get_option( 'blocklist_keys' );
		}

		update_option( 'disallowed_keys', $disallowed_list );
		delete_option( 'blacklist_keys' );
		delete_option( 'blocklist_keys' );
	}

	if ( $jk_current_db_version < 48748 ) {
		update_option( 'finished_updating_comment_type', 0 );
		jk_schedule_single_event( time() + ( 1 * MINUTE_IN_SECONDS ), 'jk_update_comment_type_batch' );
	}
}

/**
 * Executes changes made in JKPress 5.6.0.
 *
 * @ignore
 * @since 5.6.0
 *
 * @global int  $jk_current_db_version The old (current) database version.
 * @global jkdb $jkdb                  JKPress database abstraction object.
 */
function upgrade_560() {
	global $jk_current_db_version, $jkdb;

	if ( $jk_current_db_version < 49572 ) {
		/*
		 * Clean up the `post_category` column removed from schema in version 2.8.0.
		 * Its presence may conflict with `JK_Post::__get()`.
		 */
		$post_category_exists = $jkdb->get_var( "SHOW COLUMNS FROM $jkdb->posts LIKE 'post_category'" );
		if ( ! is_null( $post_category_exists ) ) {
			$jkdb->query( "ALTER TABLE $jkdb->posts DROP COLUMN `post_category`" );
		}

		/*
		 * When upgrading from JK < 5.6.0 set the core major auto-updates option to `unset` by default.
		 * This overrides the same option from populate_options() that is intended for new installs.
		 * See https://core.trac.wordpress.org/ticket/51742.
		 */
		update_option( 'auto_update_core_major', 'unset' );
	}

	if ( $jk_current_db_version < 49632 ) {
		/*
		 * Regenerate the .htaccess file to add the `HTTP_AUTHORIZATION` rewrite rule.
		 * See https://core.trac.wordpress.org/ticket/51723.
		 */
		save_mod_rewrite_rules();
	}

	if ( $jk_current_db_version < 49735 ) {
		delete_transient( 'dirsize_cache' );
	}

	if ( $jk_current_db_version < 49752 ) {
		$results = $jkdb->get_results(
			$jkdb->prepare(
				"SELECT 1 FROM {$jkdb->usermeta} WHERE meta_key = %s LIMIT 1",
				JK_Application_Passwords::USERMETA_KEY_APPLICATION_PASSWORDS
			)
		);

		if ( ! empty( $results ) ) {
			$network_id = get_main_network_id();
			update_network_option( $network_id, JK_Application_Passwords::OPTION_KEY_IN_USE, 1 );
		}
	}
}

/**
 * Executes changes made in JKPress 5.9.0.
 *
 * @ignore
 * @since 5.9.0
 *
 * @global int $jk_current_db_version The old (current) database version.
 */
function upgrade_590() {
	global $jk_current_db_version;

	if ( $jk_current_db_version < 51917 ) {
		$crons = _get_cron_array();

		if ( $crons && is_array( $crons ) ) {
			// Remove errant `false` values, see #53950, #54906.
			$crons = array_filter( $crons );
			_set_cron_array( $crons );
		}
	}
}

/**
 * Executes changes made in JKPress 6.0.0.
 *
 * @ignore
 * @since 6.0.0
 *
 * @global int $jk_current_db_version The old (current) database version.
 */
function upgrade_600() {
	global $jk_current_db_version;

	if ( $jk_current_db_version < 53011 ) {
		jk_update_user_counts();
	}
}

/**
 * Executes changes made in JKPress 6.3.0.
 *
 * @ignore
 * @since 6.3.0
 *
 * @global int $jk_current_db_version The old (current) database version.
 */
function upgrade_630() {
	global $jk_current_db_version;

	if ( $jk_current_db_version < 55853 ) {
		if ( ! is_multisite() ) {
			// Replace non-autoload option can_compress_scripts with autoload option, see #55270
			$can_compress_scripts = get_option( 'can_compress_scripts', false );
			if ( false !== $can_compress_scripts ) {
				delete_option( 'can_compress_scripts' );
				add_option( 'can_compress_scripts', $can_compress_scripts, '', true );
			}
		}
	}
}

/**
 * Executes changes made in JKPress 6.4.0.
 *
 * @ignore
 * @since 6.4.0
 *
 * @global int $jk_current_db_version The old (current) database version.
 */
function upgrade_640() {
	global $jk_current_db_version;

	if ( $jk_current_db_version < 56657 ) {
		// Enable attachment pages.
		update_option( 'jk_attachment_pages_enabled', 1 );

		// Remove the jk_https_detection cron. Https status is checked directly in an async Site Health check.
		$scheduled = jk_get_scheduled_event( 'jk_https_detection' );
		if ( $scheduled ) {
			jk_clear_scheduled_hook( 'jk_https_detection' );
		}
	}
}

/**
 * Executes changes made in JKPress 6.5.0.
 *
 * @ignore
 * @since 6.5.0
 *
 * @global int  $jk_current_db_version The old (current) database version.
 * @global jkdb $jkdb                  JKPress database abstraction object.
 */
function upgrade_650() {
	global $jk_current_db_version, $jkdb;

	if ( $jk_current_db_version < 57155 ) {
		$stylesheet = get_stylesheet();

		// Set autoload=no for all themes except the current one.
		$theme_mods_options = $jkdb->get_col(
			$jkdb->prepare(
				"SELECT option_name FROM $jkdb->options WHERE autoload = 'yes' AND option_name != %s AND option_name LIKE %s",
				"theme_mods_$stylesheet",
				$jkdb->esc_like( 'theme_mods_' ) . '%'
			)
		);

		$autoload = array_fill_keys( $theme_mods_options, false );
		jk_set_option_autoload_values( $autoload );
	}
}
/**
 * Executes changes made in JKPress 6.7.0.
 *
 * @ignore
 * @since 6.7.0
 *
 * @global int  $jk_current_db_version The old (current) database version.
 */
function upgrade_670() {
	global $jk_current_db_version;

	if ( $jk_current_db_version < 58975 ) {
		$options = array(
			'recently_activated',
			'_jk_suggested_policy_text_has_changed',
			'dashboard_widget_options',
			'ftp_credentials',
			'adminhash',
			'nav_menu_options',
			'jk_force_deactivated_plugins',
			'delete_blog_hash',
			'allowedthemes',
			'recovery_keys',
			'https_detection_errors',
			'fresh_site',
		);

		jk_set_options_autoload( $options, false );
	}
}
/**
 * Executes network-level upgrade routines.
 *
 * @since 3.0.0
 *
 * @global int  $jk_current_db_version The old (current) database version.
 * @global jkdb $jkdb                  JKPress database abstraction object.
 */
function upgrade_network() {
	global $jk_current_db_version, $jkdb;

	// Always clear expired transients.
	delete_expired_transients( true );

	// 2.8.0
	if ( $jk_current_db_version < 11549 ) {
		$jkmu_sitewide_plugins   = get_site_option( 'jkmu_sitewide_plugins' );
		$active_sitewide_plugins = get_site_option( 'active_sitewide_plugins' );
		if ( $jkmu_sitewide_plugins ) {
			if ( ! $active_sitewide_plugins ) {
				$sitewide_plugins = (array) $jkmu_sitewide_plugins;
			} else {
				$sitewide_plugins = array_merge( (array) $active_sitewide_plugins, (array) $jkmu_sitewide_plugins );
			}

			update_site_option( 'active_sitewide_plugins', $sitewide_plugins );
		}
		delete_site_option( 'jkmu_sitewide_plugins' );
		delete_site_option( 'deactivated_sitewide_plugins' );

		$start = 0;
		while ( $rows = $jkdb->get_results( "SELECT meta_key, meta_value FROM {$jkdb->sitemeta} ORDER BY meta_id LIMIT $start, 20" ) ) {
			foreach ( $rows as $row ) {
				$value = $row->meta_value;
				if ( ! @unserialize( $value ) ) {
					$value = stripslashes( $value );
				}
				if ( $value !== $row->meta_value ) {
					update_site_option( $row->meta_key, $value );
				}
			}
			$start += 20;
		}
	}

	// 3.0.0
	if ( $jk_current_db_version < 13576 ) {
		update_site_option( 'global_terms_enabled', '1' );
	}

	// 3.3.0
	if ( $jk_current_db_version < 19390 ) {
		update_site_option( 'initial_db_version', $jk_current_db_version );
	}

	if ( $jk_current_db_version < 19470 ) {
		if ( false === get_site_option( 'active_sitewide_plugins' ) ) {
			update_site_option( 'active_sitewide_plugins', array() );
		}
	}

	// 3.4.0
	if ( $jk_current_db_version < 20148 ) {
		// 'allowedthemes' keys things by stylesheet. 'allowed_themes' keyed things by name.
		$allowedthemes  = get_site_option( 'allowedthemes' );
		$allowed_themes = get_site_option( 'allowed_themes' );
		if ( false === $allowedthemes && is_array( $allowed_themes ) && $allowed_themes ) {
			$converted = array();
			$themes    = jk_get_themes();
			foreach ( $themes as $stylesheet => $theme_data ) {
				if ( isset( $allowed_themes[ $theme_data->get( 'Name' ) ] ) ) {
					$converted[ $stylesheet ] = true;
				}
			}
			update_site_option( 'allowedthemes', $converted );
			delete_site_option( 'allowed_themes' );
		}
	}

	// 3.5.0
	if ( $jk_current_db_version < 21823 ) {
		update_site_option( 'ms_files_rewriting', '1' );
	}

	// 3.5.2
	if ( $jk_current_db_version < 24448 ) {
		$illegal_names = get_site_option( 'illegal_names' );
		if ( is_array( $illegal_names ) && count( $illegal_names ) === 1 ) {
			$illegal_name  = reset( $illegal_names );
			$illegal_names = explode( ' ', $illegal_name );
			update_site_option( 'illegal_names', $illegal_names );
		}
	}

	// 4.2.0
	if ( $jk_current_db_version < 31351 && 'utf8mb4' === $jkdb->charset ) {
		if ( jk_should_upgrade_global_tables() ) {
			$jkdb->query( "ALTER TABLE $jkdb->usermeta DROP INDEX meta_key, ADD INDEX meta_key(meta_key(191))" );
			$jkdb->query( "ALTER TABLE $jkdb->site DROP INDEX domain, ADD INDEX domain(domain(140),path(51))" );
			$jkdb->query( "ALTER TABLE $jkdb->sitemeta DROP INDEX meta_key, ADD INDEX meta_key(meta_key(191))" );
			$jkdb->query( "ALTER TABLE $jkdb->signups DROP INDEX domain_path, ADD INDEX domain_path(domain(140),path(51))" );

			$tables = $jkdb->tables( 'global' );

			// sitecategories may not exist.
			if ( ! $jkdb->get_var( "SHOW TABLES LIKE '{$tables['sitecategories']}'" ) ) {
				unset( $tables['sitecategories'] );
			}

			foreach ( $tables as $table ) {
				maybe_convert_table_to_utf8mb4( $table );
			}
		}
	}

	// 4.3.0
	if ( $jk_current_db_version < 33055 && 'utf8mb4' === $jkdb->charset ) {
		if ( jk_should_upgrade_global_tables() ) {
			$upgrade = false;
			$indexes = $jkdb->get_results( "SHOW INDEXES FROM $jkdb->signups" );
			foreach ( $indexes as $index ) {
				if ( 'domain_path' === $index->Key_name && 'domain' === $index->Column_name && '140' !== $index->Sub_part ) {
					$upgrade = true;
					break;
				}
			}

			if ( $upgrade ) {
				$jkdb->query( "ALTER TABLE $jkdb->signups DROP INDEX domain_path, ADD INDEX domain_path(domain(140),path(51))" );
			}

			$tables = $jkdb->tables( 'global' );

			// sitecategories may not exist.
			if ( ! $jkdb->get_var( "SHOW TABLES LIKE '{$tables['sitecategories']}'" ) ) {
				unset( $tables['sitecategories'] );
			}

			foreach ( $tables as $table ) {
				maybe_convert_table_to_utf8mb4( $table );
			}
		}
	}

	// 5.1.0
	if ( $jk_current_db_version < 44467 ) {
		$network_id = get_main_network_id();
		delete_network_option( $network_id, 'site_meta_supported' );
		is_site_meta_supported();
	}
}

//
// General functions we use to actually do stuff.
//

/**
 * Creates a table in the database, if it doesn't already exist.
 *
 * This method checks for an existing database table and creates a new one if it's not
 * already present. It doesn't rely on MySQL's "IF NOT EXISTS" statement, but chooses
 * to query all tables first and then run the SQL statement creating the table.
 *
 * @since 1.0.0
 *
 * @global jkdb $jkdb JKPress database abstraction object.
 *
 * @param string $table_name Database table name.
 * @param string $create_ddl SQL statement to create table.
 * @return bool True on success or if the table already exists. False on failure.
 */
function maybe_create_table( $table_name, $create_ddl ) {
	global $jkdb;

	$query = $jkdb->prepare( 'SHOW TABLES LIKE %s', $jkdb->esc_like( $table_name ) );

	if ( $jkdb->get_var( $query ) === $table_name ) {
		return true;
	}

	// Didn't find it, so try to create it.
	$jkdb->query( $create_ddl );

	// We cannot directly tell that whether this succeeded!
	if ( $jkdb->get_var( $query ) === $table_name ) {
		return true;
	}

	return false;
}

/**
 * Drops a specified index from a table.
 *
 * @since 1.0.1
 *
 * @global jkdb $jkdb JKPress database abstraction object.
 *
 * @param string $table Database table name.
 * @param string $index Index name to drop.
 * @return true True, when finished.
 */
function drop_index( $table, $index ) {
	global $jkdb;

	$jkdb->hide_errors();

	$jkdb->query( "ALTER TABLE `$table` DROP INDEX `$index`" );

	// Now we need to take out all the extra ones we may have created.
	for ( $i = 0; $i < 25; $i++ ) {
		$jkdb->query( "ALTER TABLE `$table` DROP INDEX `{$index}_$i`" );
	}

	$jkdb->show_errors();

	return true;
}

/**
 * Adds an index to a specified table.
 *
 * @since 1.0.1
 *
 * @global jkdb $jkdb JKPress database abstraction object.
 *
 * @param string $table Database table name.
 * @param string $index Database table index column.
 * @return true True, when done with execution.
 */
function add_clean_index( $table, $index ) {
	global $jkdb;

	drop_index( $table, $index );
	$jkdb->query( "ALTER TABLE `$table` ADD INDEX ( `$index` )" );

	return true;
}

/**
 * Adds column to a database table, if it doesn't already exist.
 *
 * @since 1.3.0
 *
 * @global jkdb $jkdb JKPress database abstraction object.
 *
 * @param string $table_name  Database table name.
 * @param string $column_name Table column name.
 * @param string $create_ddl  SQL statement to add column.
 * @return bool True on success or if the column already exists. False on failure.
 */
function maybe_add_column( $table_name, $column_name, $create_ddl ) {
	global $jkdb;

	foreach ( $jkdb->get_col( "DESC $table_name", 0 ) as $column ) {
		if ( $column === $column_name ) {
			return true;
		}
	}

	// Didn't find it, so try to create it.
	$jkdb->query( $create_ddl );

	// We cannot directly tell that whether this succeeded!
	foreach ( $jkdb->get_col( "DESC $table_name", 0 ) as $column ) {
		if ( $column === $column_name ) {
			return true;
		}
	}

	return false;
}

/**
 * If a table only contains utf8 or utf8mb4 columns, convert it to utf8mb4.
 *
 * @since 4.2.0
 *
 * @global jkdb $jkdb JKPress database abstraction object.
 *
 * @param string $table The table to convert.
 * @return bool True if the table was converted, false if it wasn't.
 */
function maybe_convert_table_to_utf8mb4( $table ) {
	global $jkdb;

	$results = $jkdb->get_results( "SHOW FULL COLUMNS FROM `$table`" );
	if ( ! $results ) {
		return false;
	}

	foreach ( $results as $column ) {
		if ( $column->Collation ) {
			list( $charset ) = explode( '_', $column->Collation );
			$charset         = strtolower( $charset );
			if ( 'utf8' !== $charset && 'utf8mb4' !== $charset ) {
				// Don't upgrade tables that have non-utf8 columns.
				return false;
			}
		}
	}

	$table_details = $jkdb->get_row( "SHOW TABLE STATUS LIKE '$table'" );
	if ( ! $table_details ) {
		return false;
	}

	list( $table_charset ) = explode( '_', $table_details->Collation );
	$table_charset         = strtolower( $table_charset );
	if ( 'utf8mb4' === $table_charset ) {
		return true;
	}

	return $jkdb->query( "ALTER TABLE $table CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci" );
}

/**
 * Retrieve all options as it was for 1.2.
 *
 * @since 1.2.0
 *
 * @global jkdb $jkdb JKPress database abstraction object.
 *
 * @return stdClass List of options.
 */
function get_alloptions_110() {
	global $jkdb;
	$all_options = new stdClass();
	$options     = $jkdb->get_results( "SELECT option_name, option_value FROM $jkdb->options" );
	if ( $options ) {
		foreach ( $options as $option ) {
			if ( 'siteurl' === $option->option_name || 'home' === $option->option_name || 'category_base' === $option->option_name ) {
				$option->option_value = untrailingslashit( $option->option_value );
			}
			$all_options->{$option->option_name} = stripslashes( $option->option_value );
		}
	}
	return $all_options;
}

/**
 * Utility version of get_option that is private to installation/upgrade.
 *
 * @ignore
 * @since 1.5.1
 * @access private
 *
 * @global jkdb $jkdb JKPress database abstraction object.
 *
 * @param string $setting Option name.
 * @return mixed
 */
function __get_option( $setting ) { // phpcs:ignore JKPress.NamingConventions.ValidFunctionName.FunctionDoubleUnderscore,PHPCompatibility.FunctionNameRestrictions.ReservedFunctionNames.FunctionDoubleUnderscore
	global $jkdb;

	if ( 'home' === $setting && defined( 'JK_HOME' ) ) {
		return untrailingslashit( JK_HOME );
	}

	if ( 'siteurl' === $setting && defined( 'JK_SITEURL' ) ) {
		return untrailingslashit( JK_SITEURL );
	}

	$option = $jkdb->get_var( $jkdb->prepare( "SELECT option_value FROM $jkdb->options WHERE option_name = %s", $setting ) );

	if ( 'home' === $setting && ! $option ) {
		return __get_option( 'siteurl' );
	}

	if ( in_array( $setting, array( 'siteurl', 'home', 'category_base', 'tag_base' ), true ) ) {
		$option = untrailingslashit( $option );
	}

	return maybe_unserialize( $option );
}

/**
 * Filters for content to remove unnecessary slashes.
 *
 * @since 1.5.0
 *
 * @param string $content The content to modify.
 * @return string The de-slashed content.
 */
function deslash( $content ) {
	// Note: \\\ inside a regex denotes a single backslash.

	/*
	 * Replace one or more backslashes followed by a single quote with
	 * a single quote.
	 */
	$content = preg_replace( "/\\\+'/", "'", $content );

	/*
	 * Replace one or more backslashes followed by a double quote with
	 * a double quote.
	 */
	$content = preg_replace( '/\\\+"/', '"', $content );

	// Replace one or more backslashes with one backslash.
	$content = preg_replace( '/\\\+/', '\\', $content );

	return $content;
}

/**
 * Modifies the database based on specified SQL statements.
 *
 * Useful for creating new tables and updating existing tables to a new structure.
 *
 * @since 1.5.0
 * @since 6.1.0 Ignores display width for integer data types on MySQL 8.0.17 or later,
 *              to match MySQL behavior. Note: This does not affect MariaDB.
 *
 * @global jkdb $jkdb JKPress database abstraction object.
 *
 * @param string[]|string $queries Optional. The query to run. Can be multiple queries
 *                                 in an array, or a string of queries separated by
 *                                 semicolons. Default empty string.
 * @param bool            $execute Optional. Whether or not to execute the query right away.
 *                                 Default true.
 * @return array Strings containing the results of the various update queries.
 */
function dbDelta( $queries = '', $execute = true ) { // phpcs:ignore JKPress.NamingConventions.ValidFunctionName.FunctionNameInvalid
	global $jkdb;

	if ( in_array( $queries, array( '', 'all', 'blog', 'global', 'ms_global' ), true ) ) {
		$queries = jk_get_db_schema( $queries );
	}

	// Separate individual queries into an array.
	if ( ! is_array( $queries ) ) {
		$queries = explode( ';', $queries );
		$queries = array_filter( $queries );
	}

	/**
	 * Filters the dbDelta SQL queries.
	 *
	 * @since 3.3.0
	 *
	 * @param string[] $queries An array of dbDelta SQL queries.
	 */
	$queries = apply_filters( 'dbdelta_queries', $queries );

	$cqueries   = array(); // Creation queries.
	$iqueries   = array(); // Insertion queries.
	$for_update = array();

	// Create a tablename index for an array ($cqueries) of recognized query types.
	foreach ( $queries as $qry ) {
		if ( preg_match( '|CREATE TABLE ([^ ]*)|', $qry, $matches ) ) {
			$cqueries[ trim( $matches[1], '`' ) ] = $qry;
			$for_update[ $matches[1] ]            = 'Created table ' . $matches[1];
			continue;
		}

		if ( preg_match( '|CREATE DATABASE ([^ ]*)|', $qry, $matches ) ) {
			array_unshift( $cqueries, $qry );
			continue;
		}

		if ( preg_match( '|INSERT INTO ([^ ]*)|', $qry, $matches ) ) {
			$iqueries[] = $qry;
			continue;
		}

		if ( preg_match( '|UPDATE ([^ ]*)|', $qry, $matches ) ) {
			$iqueries[] = $qry;
			continue;
		}
	}

	/**
	 * Filters the dbDelta SQL queries for creating tables and/or databases.
	 *
	 * Queries filterable via this hook contain "CREATE TABLE" or "CREATE DATABASE".
	 *
	 * @since 3.3.0
	 *
	 * @param string[] $cqueries An array of dbDelta create SQL queries.
	 */
	$cqueries = apply_filters( 'dbdelta_create_queries', $cqueries );

	/**
	 * Filters the dbDelta SQL queries for inserting or updating.
	 *
	 * Queries filterable via this hook contain "INSERT INTO" or "UPDATE".
	 *
	 * @since 3.3.0
	 *
	 * @param string[] $iqueries An array of dbDelta insert or update SQL queries.
	 */
	$iqueries = apply_filters( 'dbdelta_insert_queries', $iqueries );

	$text_fields = array( 'tinytext', 'text', 'mediumtext', 'longtext' );
	$blob_fields = array( 'tinyblob', 'blob', 'mediumblob', 'longblob' );
	$int_fields  = array( 'tinyint', 'smallint', 'mediumint', 'int', 'integer', 'bigint' );

	$global_tables  = $jkdb->tables( 'global' );
	$db_version     = $jkdb->db_version();
	$db_server_info = $jkdb->db_server_info();

	foreach ( $cqueries as $table => $qry ) {
		// Upgrade global tables only for the main site. Don't upgrade at all if conditions are not optimal.
		if ( in_array( $table, $global_tables, true ) && ! jk_should_upgrade_global_tables() ) {
			unset( $cqueries[ $table ], $for_update[ $table ] );
			continue;
		}

		// Fetch the table column structure from the database.
		$suppress    = $jkdb->suppress_errors();
		$tablefields = $jkdb->get_results( "DESCRIBE {$table};" );
		$jkdb->suppress_errors( $suppress );

		if ( ! $tablefields ) {
			continue;
		}

		// Clear the field and index arrays.
		$cfields                  = array();
		$indices                  = array();
		$indices_without_subparts = array();

		// Get all of the field names in the query from between the parentheses.
		preg_match( '|\((.*)\)|ms', $qry, $match2 );
		$qryline = trim( $match2[1] );

		// Separate field lines into an array.
		$flds = explode( "\n", $qryline );

		// For every field line specified in the query.
		foreach ( $flds as $fld ) {
			$fld = trim( $fld, " \t\n\r\0\x0B," ); // Default trim characters, plus ','.

			// Extract the field name.
			preg_match( '|^([^ ]*)|', $fld, $fvals );
			$fieldname            = trim( $fvals[1], '`' );
			$fieldname_lowercased = strtolower( $fieldname );

			// Verify the found field name.
			$validfield = true;
			switch ( $fieldname_lowercased ) {
				case '':
				case 'primary':
				case 'index':
				case 'fulltext':
				case 'unique':
				case 'key':
				case 'spatial':
					$validfield = false;

					/*
					 * Normalize the index definition.
					 *
					 * This is done so the definition can be compared against the result of a
					 * `SHOW INDEX FROM $table_name` query which returns the current table
					 * index information.
					 */

					// Extract type, name and columns from the definition.
					preg_match(
						'/^
							(?P<index_type>             # 1) Type of the index.
								PRIMARY\s+KEY|(?:UNIQUE|FULLTEXT|SPATIAL)\s+(?:KEY|INDEX)|KEY|INDEX
							)
							\s+                         # Followed by at least one white space character.
							(?:                         # Name of the index. Optional if type is PRIMARY KEY.
								`?                      # Name can be escaped with a backtick.
									(?P<index_name>     # 2) Name of the index.
										(?:[0-9a-zA-Z$_-]|[\xC2-\xDF][\x80-\xBF])+
									)
								`?                      # Name can be escaped with a backtick.
								\s+                     # Followed by at least one white space character.
							)*
							\(                          # Opening bracket for the columns.
								(?P<index_columns>
									.+?                 # 3) Column names, index prefixes, and orders.
								)
							\)                          # Closing bracket for the columns.
						$/imx',
						$fld,
						$index_matches
					);

					// Uppercase the index type and normalize space characters.
					$index_type = strtoupper( preg_replace( '/\s+/', ' ', trim( $index_matches['index_type'] ) ) );

					// 'INDEX' is a synonym for 'KEY', standardize on 'KEY'.
					$index_type = str_replace( 'INDEX', 'KEY', $index_type );

					// Escape the index name with backticks. An index for a primary key has no name.
					$index_name = ( 'PRIMARY KEY' === $index_type ) ? '' : '`' . strtolower( $index_matches['index_name'] ) . '`';

					// Parse the columns. Multiple columns are separated by a comma.
					$index_columns                  = array_map( 'trim', explode( ',', $index_matches['index_columns'] ) );
					$index_columns_without_subparts = $index_columns;

					// Normalize columns.
					foreach ( $index_columns as $id => &$index_column ) {
						// Extract column name and number of indexed characters (sub_part).
						preg_match(
							'/
								`?                      # Name can be escaped with a backtick.
									(?P<column_name>    # 1) Name of the column.
										(?:[0-9a-zA-Z$_-]|[\xC2-\xDF][\x80-\xBF])+
									)
								`?                      # Name can be escaped with a backtick.
								(?:                     # Optional sub part.
									\s*                 # Optional white space character between name and opening bracket.
									\(                  # Opening bracket for the sub part.
										\s*             # Optional white space character after opening bracket.
										(?P<sub_part>
											\d+         # 2) Number of indexed characters.
										)
										\s*             # Optional white space character before closing bracket.
									\)                  # Closing bracket for the sub part.
								)?
							/x',
							$index_column,
							$index_column_matches
						);

						// Escape the column name with backticks.
						$index_column = '`' . $index_column_matches['column_name'] . '`';

						// We don't need to add the subpart to $index_columns_without_subparts
						$index_columns_without_subparts[ $id ] = $index_column;

						// Append the optional sup part with the number of indexed characters.
						if ( isset( $index_column_matches['sub_part'] ) ) {
							$index_column .= '(' . $index_column_matches['sub_part'] . ')';
						}
					}

					// Build the normalized index definition and add it to the list of indices.
					$indices[]                  = "{$index_type} {$index_name} (" . implode( ',', $index_columns ) . ')';
					$indices_without_subparts[] = "{$index_type} {$index_name} (" . implode( ',', $index_columns_without_subparts ) . ')';

					// Destroy no longer needed variables.
					unset( $index_column, $index_column_matches, $index_matches, $index_type, $index_name, $index_columns, $index_columns_without_subparts );

					break;
			}

			// If it's a valid field, add it to the field array.
			if ( $validfield ) {
				$cfields[ $fieldname_lowercased ] = $fld;
			}
		}

		// For every field in the table.
		foreach ( $tablefields as $tablefield ) {
			$tablefield_field_lowercased = strtolower( $tablefield->Field );
			$tablefield_type_lowercased  = strtolower( $tablefield->Type );

			$tablefield_type_without_parentheses = preg_replace(
				'/'
				. '(.+)'       // Field type, e.g. `int`.
				. '\(\d*\)'    // Display width.
				. '(.*)'       // Optional attributes, e.g. `unsigned`.
				. '/',
				'$1$2',
				$tablefield_type_lowercased
			);

			// Get the type without attributes, e.g. `int`.
			$tablefield_type_base = strtok( $tablefield_type_without_parentheses, ' ' );

			// If the table field exists in the field array...
			if ( array_key_exists( $tablefield_field_lowercased, $cfields ) ) {

				// Get the field type from the query.
				preg_match( '|`?' . $tablefield->Field . '`? ([^ ]*( unsigned)?)|i', $cfields[ $tablefield_field_lowercased ], $matches );
				$fieldtype            = $matches[1];
				$fieldtype_lowercased = strtolower( $fieldtype );

				$fieldtype_without_parentheses = preg_replace(
					'/'
					. '(.+)'       // Field type, e.g. `int`.
					. '\(\d*\)'    // Display width.
					. '(.*)'       // Optional attributes, e.g. `unsigned`.
					. '/',
					'$1$2',
					$fieldtype_lowercased
				);

				// Get the type without attributes, e.g. `int`.
				$fieldtype_base = strtok( $fieldtype_without_parentheses, ' ' );

				// Is actual field type different from the field type in query?
				if ( $tablefield->Type !== $fieldtype ) {
					$do_change = true;
					if ( in_array( $fieldtype_lowercased, $text_fields, true ) && in_array( $tablefield_type_lowercased, $text_fields, true ) ) {
						if ( array_search( $fieldtype_lowercased, $text_fields, true ) < array_search( $tablefield_type_lowercased, $text_fields, true ) ) {
							$do_change = false;
						}
					}

					if ( in_array( $fieldtype_lowercased, $blob_fields, true ) && in_array( $tablefield_type_lowercased, $blob_fields, true ) ) {
						if ( array_search( $fieldtype_lowercased, $blob_fields, true ) < array_search( $tablefield_type_lowercased, $blob_fields, true ) ) {
							$do_change = false;
						}
					}

					if ( in_array( $fieldtype_base, $int_fields, true ) && in_array( $tablefield_type_base, $int_fields, true )
						&& $fieldtype_without_parentheses === $tablefield_type_without_parentheses
					) {
						/*
						 * MySQL 8.0.17 or later does not support display width for integer data types,
						 * so if display width is the only difference, it can be safely ignored.
						 * Note: This is specific to MySQL and does not affect MariaDB.
						 */
						if ( version_compare( $db_version, '8.0.17', '>=' )
							&& ! str_contains( $db_server_info, 'MariaDB' )
						) {
							$do_change = false;
						}
					}

					if ( $do_change ) {
						// Add a query to change the column type.
						$cqueries[] = "ALTER TABLE {$table} CHANGE COLUMN `{$tablefield->Field}` " . $cfields[ $tablefield_field_lowercased ];

						$for_update[ $table . '.' . $tablefield->Field ] = "Changed type of {$table}.{$tablefield->Field} from {$tablefield->Type} to {$fieldtype}";
					}
				}

				// Get the default value from the array.
				if ( preg_match( "| DEFAULT '(.*?)'|i", $cfields[ $tablefield_field_lowercased ], $matches ) ) {
					$default_value = $matches[1];
					if ( $tablefield->Default !== $default_value ) {
						// Add a query to change the column's default value
						$cqueries[] = "ALTER TABLE {$table} ALTER COLUMN `{$tablefield->Field}` SET DEFAULT '{$default_value}'";

						$for_update[ $table . '.' . $tablefield->Field ] = "Changed default value of {$table}.{$tablefield->Field} from {$tablefield->Default} to {$default_value}";
					}
				}

				// Remove the field from the array (so it's not added).
				unset( $cfields[ $tablefield_field_lowercased ] );
			} else {
				// This field exists in the table, but not in the creation queries?
			}
		}

		// For every remaining field specified for the table.
		foreach ( $cfields as $fieldname => $fielddef ) {
			// Push a query line into $cqueries that adds the field to that table.
			$cqueries[] = "ALTER TABLE {$table} ADD COLUMN $fielddef";

			$for_update[ $table . '.' . $fieldname ] = 'Added column ' . $table . '.' . $fieldname;
		}

		// Index stuff goes here. Fetch the table index structure from the database.
		$tableindices = $jkdb->get_results( "SHOW INDEX FROM {$table};" );

		if ( $tableindices ) {
			// Clear the index array.
			$index_ary = array();

			// For every index in the table.
			foreach ( $tableindices as $tableindex ) {
				$keyname = strtolower( $tableindex->Key_name );

				// Add the index to the index data array.
				$index_ary[ $keyname ]['columns'][]  = array(
					'fieldname' => $tableindex->Column_name,
					'subpart'   => $tableindex->Sub_part,
				);
				$index_ary[ $keyname ]['unique']     = ( '0' === $tableindex->Non_unique ) ? true : false;
				$index_ary[ $keyname ]['index_type'] = $tableindex->Index_type;
			}

			// For each actual index in the index array.
			foreach ( $index_ary as $index_name => $index_data ) {

				// Build a create string to compare to the query.
				$index_string = '';
				if ( 'primary' === $index_name ) {
					$index_string .= 'PRIMARY ';
				} elseif ( $index_data['unique'] ) {
					$index_string .= 'UNIQUE ';
				}

				if ( 'FULLTEXT' === strtoupper( $index_data['index_type'] ) ) {
					$index_string .= 'FULLTEXT ';
				}

				if ( 'SPATIAL' === strtoupper( $index_data['index_type'] ) ) {
					$index_string .= 'SPATIAL ';
				}

				$index_string .= 'KEY ';
				if ( 'primary' !== $index_name ) {
					$index_string .= '`' . $index_name . '`';
				}

				$index_columns = '';

				// For each column in the index.
				foreach ( $index_data['columns'] as $column_data ) {
					if ( '' !== $index_columns ) {
						$index_columns .= ',';
					}

					// Add the field to the column list string.
					$index_columns .= '`' . $column_data['fieldname'] . '`';
				}

				// Add the column list to the index create string.
				$index_string .= " ($index_columns)";

				// Check if the index definition exists, ignoring subparts.
				$aindex = array_search( $index_string, $indices_without_subparts, true );
				if ( false !== $aindex ) {
					// If the index already exists (even with different subparts), we don't need to create it.
					unset( $indices_without_subparts[ $aindex ] );
					unset( $indices[ $aindex ] );
				}
			}
		}

		// For every remaining index specified for the table.
		foreach ( (array) $indices as $index ) {
			// Push a query line into $cqueries that adds the index to that table.
			$cqueries[] = "ALTER TABLE {$table} ADD $index";

			$for_update[] = 'Added index ' . $table . ' ' . $index;
		}

		// Remove the original table creation query from processing.
		unset( $cqueries[ $table ], $for_update[ $table ] );
	}

	$allqueries = array_merge( $cqueries, $iqueries );
	if ( $execute ) {
		foreach ( $allqueries as $query ) {
			$jkdb->query( $query );
		}
	}

	return $for_update;
}

/**
 * Updates the database tables to a new schema.
 *
 * By default, updates all the tables to use the latest defined schema, but can also
 * be used to update a specific set of tables in jk_get_db_schema().
 *
 * @since 1.5.0
 *
 * @uses dbDelta
 *
 * @param string $tables Optional. Which set of tables to update. Default is 'all'.
 */
function make_db_current( $tables = 'all' ) {
	$alterations = dbDelta( $tables );
	echo "<ol>\n";
	foreach ( $alterations as $alteration ) {
		echo "<li>$alteration</li>\n";
	}
	echo "</ol>\n";
}

/**
 * Updates the database tables to a new schema, but without displaying results.
 *
 * By default, updates all the tables to use the latest defined schema, but can
 * also be used to update a specific set of tables in jk_get_db_schema().
 *
 * @since 1.5.0
 *
 * @see make_db_current()
 *
 * @param string $tables Optional. Which set of tables to update. Default is 'all'.
 */
function make_db_current_silent( $tables = 'all' ) {
	dbDelta( $tables );
}

/**
 * Creates a site theme from an existing theme.
 *
 * {@internal Missing Long Description}}
 *
 * @since 1.5.0
 *
 * @param string $theme_name The name of the theme.
 * @param string $template   The directory name of the theme.
 * @return bool
 */
function make_site_theme_from_oldschool( $theme_name, $template ) {
	$home_path   = get_home_path();
	$site_dir    = JK_CONTENT_DIR . "/themes/$template";
	$default_dir = JK_CONTENT_DIR . '/themes/' . JK_DEFAULT_THEME;

	if ( ! file_exists( "$home_path/index.php" ) ) {
		return false;
	}

	/*
	 * Copy files from the old locations to the site theme.
	 * TODO: This does not copy arbitrary include dependencies. Only the standard JK files are copied.
	 */
	$files = array(
		'index.php'             => 'index.php',
		'jk-layout.css'         => 'style.css',
		'jk-comments.php'       => 'comments.php',
		'jk-comments-popup.php' => 'comments-popup.php',
	);

	foreach ( $files as $oldfile => $newfile ) {
		if ( 'index.php' === $oldfile ) {
			$oldpath = $home_path;
		} else {
			$oldpath = ABSPATH;
		}

		// Check to make sure it's not a new index.
		if ( 'index.php' === $oldfile ) {
			$index = implode( '', file( "$oldpath/$oldfile" ) );
			if ( str_contains( $index, 'JK_USE_THEMES' ) ) {
				if ( ! copy( "$default_dir/$oldfile", "$site_dir/$newfile" ) ) {
					return false;
				}

				// Don't copy anything.
				continue;
			}
		}

		if ( ! copy( "$oldpath/$oldfile", "$site_dir/$newfile" ) ) {
			return false;
		}

		chmod( "$site_dir/$newfile", 0777 );

		// Update the blog header include in each file.
		$lines = explode( "\n", implode( '', file( "$site_dir/$newfile" ) ) );
		if ( $lines ) {
			$f = fopen( "$site_dir/$newfile", 'w' );

			foreach ( $lines as $line ) {
				if ( preg_match( '/require.*jk-blog-header/', $line ) ) {
					$line = '//' . $line;
				}

				// Update stylesheet references.
				$line = str_replace(
					"<?php echo __get_option('siteurl'); ?>/jk-layout.css",
					"<?php bloginfo('stylesheet_url'); ?>",
					$line
				);

				// Update comments template inclusion.
				$line = str_replace(
					"<?php include(ABSPATH . 'jk-comments.php'); ?>",
					'<?php comments_template(); ?>',
					$line
				);

				fwrite( $f, "{$line}\n" );
			}
			fclose( $f );
		}
	}

	// Add a theme header.
	$header = "/*\n" .
		"Theme Name: $theme_name\n" .
		'Theme URI: ' . __get_option( 'siteurl' ) . "\n" .
		"Description: A theme automatically created by the update.\n" .
		"Version: 1.0\n" .
		"Author: Moi\n" .
		"*/\n";

	$stylelines = file_get_contents( "$site_dir/style.css" );
	if ( $stylelines ) {
		$f = fopen( "$site_dir/style.css", 'w' );

		fwrite( $f, $header );
		fwrite( $f, $stylelines );
		fclose( $f );
	}

	return true;
}

/**
 * Creates a site theme from the default theme.
 *
 * {@internal Missing Long Description}}
 *
 * @since 1.5.0
 *
 * @param string $theme_name The name of the theme.
 * @param string $template   The directory name of the theme.
 * @return void|false
 */
function make_site_theme_from_default( $theme_name, $template ) {
	$site_dir    = JK_CONTENT_DIR . "/themes/$template";
	$default_dir = JK_CONTENT_DIR . '/themes/' . JK_DEFAULT_THEME;

	/*
	 * Copy files from the default theme to the site theme.
	 * $files = array( 'index.php', 'comments.php', 'comments-popup.php', 'footer.php', 'header.php', 'sidebar.php', 'style.css' );
	 */

	$theme_dir = @opendir( $default_dir );
	if ( $theme_dir ) {
		while ( ( $theme_file = readdir( $theme_dir ) ) !== false ) {
			if ( is_dir( "$default_dir/$theme_file" ) ) {
				continue;
			}

			if ( ! copy( "$default_dir/$theme_file", "$site_dir/$theme_file" ) ) {
				return;
			}

			chmod( "$site_dir/$theme_file", 0777 );
		}

		closedir( $theme_dir );
	}

	// Rewrite the theme header.
	$stylelines = explode( "\n", implode( '', file( "$site_dir/style.css" ) ) );
	if ( $stylelines ) {
		$f = fopen( "$site_dir/style.css", 'w' );

		$headers = array(
			'Theme Name:'  => $theme_name,
			'Theme URI:'   => __get_option( 'url' ),
			'Description:' => 'Your theme.',
			'Version:'     => '1',
			'Author:'      => 'You',
		);

		foreach ( $stylelines as $line ) {
			foreach ( $headers as $header => $value ) {
				if ( str_contains( $line, $header ) ) {
					$line = $header . ' ' . $value;
					break;
				}
			}

			fwrite( $f, $line . "\n" );
		}

		fclose( $f );
	}

	// Copy the images.
	umask( 0 );
	if ( ! mkdir( "$site_dir/images", 0777 ) ) {
		return false;
	}

	$images_dir = @opendir( "$default_dir/images" );
	if ( $images_dir ) {
		while ( ( $image = readdir( $images_dir ) ) !== false ) {
			if ( is_dir( "$default_dir/images/$image" ) ) {
				continue;
			}

			if ( ! copy( "$default_dir/images/$image", "$site_dir/images/$image" ) ) {
				return;
			}

			chmod( "$site_dir/images/$image", 0777 );
		}

		closedir( $images_dir );
	}
}

/**
 * Creates a site theme.
 *
 * {@internal Missing Long Description}}
 *
 * @since 1.5.0
 *
 * @return string|false
 */
function make_site_theme() {
	// Name the theme after the blog.
	$theme_name = __get_option( 'blogname' );
	$template   = sanitize_title( $theme_name );
	$site_dir   = JK_CONTENT_DIR . "/themes/$template";

	// If the theme already exists, nothing to do.
	if ( is_dir( $site_dir ) ) {
		return false;
	}

	// We must be able to write to the themes dir.
	if ( ! is_writable( JK_CONTENT_DIR . '/themes' ) ) {
		return false;
	}

	umask( 0 );
	if ( ! mkdir( $site_dir, 0777 ) ) {
		return false;
	}

	if ( file_exists( ABSPATH . 'jk-layout.css' ) ) {
		if ( ! make_site_theme_from_oldschool( $theme_name, $template ) ) {
			// TODO: rm -rf the site theme directory.
			return false;
		}
	} else {
		if ( ! make_site_theme_from_default( $theme_name, $template ) ) {
			// TODO: rm -rf the site theme directory.
			return false;
		}
	}

	// Make the new site theme active.
	$current_template = __get_option( 'template' );
	if ( JK_DEFAULT_THEME === $current_template ) {
		update_option( 'template', $template );
		update_option( 'stylesheet', $template );
	}
	return $template;
}

/**
 * Translate user level to user role name.
 *
 * @since 2.0.0
 *
 * @param int $level User level.
 * @return string User role name.
 */
function translate_level_to_role( $level ) {
	switch ( $level ) {
		case 10:
		case 9:
		case 8:
			return 'administrator';
		case 7:
		case 6:
		case 5:
			return 'editor';
		case 4:
		case 3:
		case 2:
			return 'author';
		case 1:
			return 'contributor';
		case 0:
		default:
			return 'subscriber';
	}
}

/**
 * Checks the version of the installed MySQL binary.
 *
 * @since 2.1.0
 *
 * @global jkdb $jkdb JKPress database abstraction object.
 */
function jk_check_mysql_version() {
	global $jkdb;
	$result = $jkdb->check_database_version();
	if ( is_jk_error( $result ) ) {
		jk_die( $result );
	}
}

/**
 * Disables the Automattic widgets plugin, which was merged into core.
 *
 * @since 2.2.0
 */
function maybe_disable_automattic_widgets() {
	$plugins = __get_option( 'active_plugins' );

	foreach ( (array) $plugins as $plugin ) {
		if ( 'widgets.php' === basename( $plugin ) ) {
			array_splice( $plugins, array_search( $plugin, $plugins, true ), 1 );
			update_option( 'active_plugins', $plugins );
			break;
		}
	}
}

/**
 * Disables the Link Manager on upgrade if, at the time of upgrade, no links exist in the DB.
 *
 * @since 3.5.0
 *
 * @global int  $jk_current_db_version The old (current) database version.
 * @global jkdb $jkdb                  JKPress database abstraction object.
 */
function maybe_disable_link_manager() {
	global $jk_current_db_version, $jkdb;

	if ( $jk_current_db_version >= 22006 && get_option( 'link_manager_enabled' ) && ! $jkdb->get_var( "SELECT link_id FROM $jkdb->links LIMIT 1" ) ) {
		update_option( 'link_manager_enabled', 0 );
	}
}

/**
 * Runs before the schema is upgraded.
 *
 * @since 2.9.0
 *
 * @global int  $jk_current_db_version The old (current) database version.
 * @global jkdb $jkdb                  JKPress database abstraction object.
 */
function pre_schema_upgrade() {
	global $jk_current_db_version, $jkdb;

	// Upgrade versions prior to 2.9.
	if ( $jk_current_db_version < 11557 ) {
		// Delete duplicate options. Keep the option with the highest option_id.
		$jkdb->query( "DELETE o1 FROM $jkdb->options AS o1 JOIN $jkdb->options AS o2 USING (`option_name`) WHERE o2.option_id > o1.option_id" );

		// Drop the old primary key and add the new.
		$jkdb->query( "ALTER TABLE $jkdb->options DROP PRIMARY KEY, ADD PRIMARY KEY(option_id)" );

		// Drop the old option_name index. dbDelta() doesn't do the drop.
		$jkdb->query( "ALTER TABLE $jkdb->options DROP INDEX option_name" );
	}

	// Multisite schema upgrades.
	if ( $jk_current_db_version < 25448 && is_multisite() && jk_should_upgrade_global_tables() ) {

		// Upgrade versions prior to 3.7.
		if ( $jk_current_db_version < 25179 ) {
			// New primary key for signups.
			$jkdb->query( "ALTER TABLE $jkdb->signups ADD signup_id BIGINT(20) NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST" );
			$jkdb->query( "ALTER TABLE $jkdb->signups DROP INDEX domain" );
		}

		if ( $jk_current_db_version < 25448 ) {
			// Convert archived from enum to tinyint.
			$jkdb->query( "ALTER TABLE $jkdb->blogs CHANGE COLUMN archived archived varchar(1) NOT NULL default '0'" );
			$jkdb->query( "ALTER TABLE $jkdb->blogs CHANGE COLUMN archived archived tinyint(2) NOT NULL default 0" );
		}
	}

	// Upgrade versions prior to 4.2.
	if ( $jk_current_db_version < 31351 ) {
		if ( ! is_multisite() && jk_should_upgrade_global_tables() ) {
			$jkdb->query( "ALTER TABLE $jkdb->usermeta DROP INDEX meta_key, ADD INDEX meta_key(meta_key(191))" );
		}
		$jkdb->query( "ALTER TABLE $jkdb->terms DROP INDEX slug, ADD INDEX slug(slug(191))" );
		$jkdb->query( "ALTER TABLE $jkdb->terms DROP INDEX name, ADD INDEX name(name(191))" );
		$jkdb->query( "ALTER TABLE $jkdb->commentmeta DROP INDEX meta_key, ADD INDEX meta_key(meta_key(191))" );
		$jkdb->query( "ALTER TABLE $jkdb->postmeta DROP INDEX meta_key, ADD INDEX meta_key(meta_key(191))" );
		$jkdb->query( "ALTER TABLE $jkdb->posts DROP INDEX post_name, ADD INDEX post_name(post_name(191))" );
	}

	// Upgrade versions prior to 4.4.
	if ( $jk_current_db_version < 34978 ) {
		// If compatible termmeta table is found, use it, but enforce a proper index and update collation.
		if ( $jkdb->get_var( "SHOW TABLES LIKE '{$jkdb->termmeta}'" ) && $jkdb->get_results( "SHOW INDEX FROM {$jkdb->termmeta} WHERE Column_name = 'meta_key'" ) ) {
			$jkdb->query( "ALTER TABLE $jkdb->termmeta DROP INDEX meta_key, ADD INDEX meta_key(meta_key(191))" );
			maybe_convert_table_to_utf8mb4( $jkdb->termmeta );
		}
	}
}

/**
 * Determine if global tables should be upgraded.
 *
 * This function performs a series of checks to ensure the environment allows
 * for the safe upgrading of global JKPress database tables. It is necessary
 * because global tables will commonly grow to millions of rows on large
 * installations, and the ability to control their upgrade routines can be
 * critical to the operation of large networks.
 *
 * In a future iteration, this function may use `jk_is_large_network()` to more-
 * intelligently prevent global table upgrades. Until then, we make sure
 * JKPress is on the main site of the main network, to avoid running queries
 * more than once in multi-site or multi-network environments.
 *
 * @since 4.3.0
 *
 * @return bool Whether to run the upgrade routines on global tables.
 */
function jk_should_upgrade_global_tables() {

	// Return false early if explicitly not upgrading.
	if ( defined( 'DO_NOT_UPGRADE_GLOBAL_TABLES' ) ) {
		return false;
	}

	// Assume global tables should be upgraded.
	$should_upgrade = true;

	// Set to false if not on main network (does not matter if not multi-network).
	if ( ! is_main_network() ) {
		$should_upgrade = false;
	}

	// Set to false if not on main site of current network (does not matter if not multi-site).
	if ( ! is_main_site() ) {
		$should_upgrade = false;
	}

	/**
	 * Filters if upgrade routines should be run on global tables.
	 *
	 * @since 4.3.0
	 *
	 * @param bool $should_upgrade Whether to run the upgrade routines on global tables.
	 */
	return apply_filters( 'jk_should_upgrade_global_tables', $should_upgrade );
}
