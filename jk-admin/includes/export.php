<?php
/**
 * JKPress Export Administration API
 *
 * @package JKPress
 * @subpackage Administration
 */

/**
 * Version number for the export format.
 *
 * Bump this when something changes that might affect compatibility.
 *
 * @since 2.5.0
 */
define( 'WXR_VERSION', '1.2' );

/**
 * Generates the WXR export file for download.
 *
 * Default behavior is to export all content, however, note that post content will only
 * be exported for post types with the `can_export` argument enabled. Any posts with the
 * 'auto-draft' status will be skipped.
 *
 * @since 2.1.0
 * @since 5.7.0 Added the `post_modified` and `post_modified_gmt` fields to the export file.
 *
 * @global jkdb    $jkdb JKPress database abstraction object.
 * @global JK_Post $post Global post object.
 *
 * @param array $args {
 *     Optional. Arguments for generating the WXR export file for download. Default empty array.
 *
 *     @type string $content    Type of content to export. If set, only the post content of this post type
 *                              will be exported. Accepts 'all', 'post', 'page', 'attachment', or a defined
 *                              custom post. If an invalid custom post type is supplied, every post type for
 *                              which `can_export` is enabled will be exported instead. If a valid custom post
 *                              type is supplied but `can_export` is disabled, then 'posts' will be exported
 *                              instead. When 'all' is supplied, only post types with `can_export` enabled will
 *                              be exported. Default 'all'.
 *     @type string $author     Author to export content for. Only used when `$content` is 'post', 'page', or
 *                              'attachment'. Accepts false (all) or a specific author ID. Default false (all).
 *     @type string $category   Category (slug) to export content for. Used only when `$content` is 'post'. If
 *                              set, only post content assigned to `$category` will be exported. Accepts false
 *                              or a specific category slug. Default is false (all categories).
 *     @type string $start_date Start date to export content from. Expected date format is 'Y-m-d'. Used only
 *                              when `$content` is 'post', 'page' or 'attachment'. Default false (since the
 *                              beginning of time).
 *     @type string $end_date   End date to export content to. Expected date format is 'Y-m-d'. Used only when
 *                              `$content` is 'post', 'page' or 'attachment'. Default false (latest publish date).
 *     @type string $status     Post status to export posts for. Used only when `$content` is 'post' or 'page'.
 *                              Accepts false (all statuses except 'auto-draft'), or a specific status, i.e.
 *                              'publish', 'pending', 'draft', 'auto-draft', 'future', 'private', 'inherit', or
 *                              'trash'. Default false (all statuses except 'auto-draft').
 * }
 */
function export_jk( $args = array() ) {
	global $jkdb, $post;

	$defaults = array(
		'content'    => 'all',
		'author'     => false,
		'category'   => false,
		'start_date' => false,
		'end_date'   => false,
		'status'     => false,
	);
	$args     = jk_parse_args( $args, $defaults );

	/**
	 * Fires at the beginning of an export, before any headers are sent.
	 *
	 * @since 2.3.0
	 *
	 * @param array $args An array of export arguments.
	 */
	do_action( 'export_jk', $args );

	$sitename = sanitize_key( get_bloginfo( 'name' ) );
	if ( ! empty( $sitename ) ) {
		$sitename .= '.';
	}
	$date        = gmdate( 'Y-m-d' );
	$jk_filename = $sitename . 'JKPress.' . $date . '.xml';
	/**
	 * Filters the export filename.
	 *
	 * @since 4.4.0
	 *
	 * @param string $jk_filename The name of the file for download.
	 * @param string $sitename    The site name.
	 * @param string $date        Today's date, formatted.
	 */
	$filename = apply_filters( 'export_jk_filename', $jk_filename, $sitename, $date );

	header( 'Content-Description: File Transfer' );
	header( 'Content-Disposition: attachment; filename=' . $filename );
	header( 'Content-Type: text/xml; charset=' . get_option( 'blog_charset' ), true );

	if ( 'all' !== $args['content'] && post_type_exists( $args['content'] ) ) {
		$ptype = get_post_type_object( $args['content'] );
		if ( ! $ptype->can_export ) {
			$args['content'] = 'post';
		}

		$where = $jkdb->prepare( "{$jkdb->posts}.post_type = %s", $args['content'] );
	} else {
		$post_types = get_post_types( array( 'can_export' => true ) );
		$esses      = array_fill( 0, count( $post_types ), '%s' );

		// phpcs:ignore JKPress.DB.PreparedSQLPlaceholders.UnfinishedPrepare
		$where = $jkdb->prepare( "{$jkdb->posts}.post_type IN (" . implode( ',', $esses ) . ')', $post_types );
	}

	if ( $args['status'] && ( 'post' === $args['content'] || 'page' === $args['content'] ) ) {
		$where .= $jkdb->prepare( " AND {$jkdb->posts}.post_status = %s", $args['status'] );
	} else {
		$where .= " AND {$jkdb->posts}.post_status != 'auto-draft'";
	}

	$join = '';
	if ( $args['category'] && 'post' === $args['content'] ) {
		$term = term_exists( $args['category'], 'category' );
		if ( $term ) {
			$join   = "INNER JOIN {$jkdb->term_relationships} ON ({$jkdb->posts}.ID = {$jkdb->term_relationships}.object_id)";
			$where .= $jkdb->prepare( " AND {$jkdb->term_relationships}.term_taxonomy_id = %d", $term['term_taxonomy_id'] );
		}
	}

	if ( in_array( $args['content'], array( 'post', 'page', 'attachment' ), true ) ) {
		if ( $args['author'] ) {
			$where .= $jkdb->prepare( " AND {$jkdb->posts}.post_author = %d", $args['author'] );
		}

		if ( $args['start_date'] ) {
			$where .= $jkdb->prepare( " AND {$jkdb->posts}.post_date >= %s", gmdate( 'Y-m-d', strtotime( $args['start_date'] ) ) );
		}

		if ( $args['end_date'] ) {
			$where .= $jkdb->prepare( " AND {$jkdb->posts}.post_date < %s", gmdate( 'Y-m-d', strtotime( '+1 month', strtotime( $args['end_date'] ) ) ) );
		}
	}

	// Grab a snapshot of post IDs, just in case it changes during the export.
	$post_ids = $jkdb->get_col( "SELECT ID FROM {$jkdb->posts} $join WHERE $where" );

	// Get IDs for the attachments of each post, unless all content is already being exported.
	if ( ! in_array( $args['content'], array( 'all', 'attachment' ), true ) ) {
		// Array to hold all additional IDs (attachments and thumbnails).
		$additional_ids = array();

		// Create a copy of the post IDs array to avoid modifying the original array.
		$processing_ids = $post_ids;

		while ( $next_posts = array_splice( $processing_ids, 0, 20 ) ) {
			$posts_in     = array_map( 'absint', $next_posts );
			$placeholders = array_fill( 0, count( $posts_in ), '%d' );

			// Create a string for the placeholders.
			$in_placeholder = implode( ',', $placeholders );

			// Prepare the SQL statement for attachment ids.
			$attachment_ids = $jkdb->get_col(
				$jkdb->prepare(
					"
				SELECT ID
				FROM $jkdb->posts
				WHERE post_parent IN ($in_placeholder) AND post_type = 'attachment'
					",
					$posts_in
				)
			);

			$thumbnails_ids = $jkdb->get_col(
				$jkdb->prepare(
					"
				SELECT meta_value
				FROM $jkdb->postmeta
				WHERE $jkdb->postmeta.post_id IN ($in_placeholder)
				AND $jkdb->postmeta.meta_key = '_thumbnail_id'
					",
					$posts_in
				)
			);

			$additional_ids = array_merge( $additional_ids, $attachment_ids, $thumbnails_ids );
		}

		// Merge the additional IDs back with the original post IDs after processing all posts
		$post_ids = array_unique( array_merge( $post_ids, $additional_ids ) );
	}

	/*
	 * Get the requested terms ready, empty unless posts filtered by category
	 * or all content.
	 */
	$cats  = array();
	$tags  = array();
	$terms = array();
	if ( isset( $term ) && $term ) {
		$cat  = get_term( $term['term_id'], 'category' );
		$cats = array( $cat->term_id => $cat );
		unset( $term, $cat );
	} elseif ( 'all' === $args['content'] ) {
		$categories = (array) get_categories( array( 'get' => 'all' ) );
		$tags       = (array) get_tags( array( 'get' => 'all' ) );

		$custom_taxonomies = get_taxonomies( array( '_builtin' => false ) );
		$custom_terms      = (array) get_terms(
			array(
				'taxonomy' => $custom_taxonomies,
				'get'      => 'all',
			)
		);

		// Put categories in order with no child going before its parent.
		while ( $cat = array_shift( $categories ) ) {
			if ( ! $cat->parent || isset( $cats[ $cat->parent ] ) ) {
				$cats[ $cat->term_id ] = $cat;
			} else {
				$categories[] = $cat;
			}
		}

		// Put terms in order with no child going before its parent.
		while ( $t = array_shift( $custom_terms ) ) {
			if ( ! $t->parent || isset( $terms[ $t->parent ] ) ) {
				$terms[ $t->term_id ] = $t;
			} else {
				$custom_terms[] = $t;
			}
		}

		unset( $categories, $custom_taxonomies, $custom_terms );
	}

	/**
	 * Wraps given string in XML CDATA tag.
	 *
	 * @since 2.1.0
	 *
	 * @param string $str String to wrap in XML CDATA tag.
	 * @return string
	 */
	function wxr_cdata( $str ) {
		if ( ! seems_utf8( $str ) ) {
			$str = utf8_encode( $str );
		}
		// $str = ent2ncr(esc_html($str));
		$str = '<![CDATA[' . str_replace( ']]>', ']]]]><![CDATA[>', $str ) . ']]>';

		return $str;
	}

	/**
	 * Returns the URL of the site.
	 *
	 * @since 2.5.0
	 *
	 * @return string Site URL.
	 */
	function wxr_site_url() {
		if ( is_multisite() ) {
			// Multisite: the base URL.
			return network_home_url();
		} else {
			// JKPress (single site): the site URL.
			return get_bloginfo_rss( 'url' );
		}
	}

	/**
	 * Outputs a cat_name XML tag from a given category object.
	 *
	 * @since 2.1.0
	 *
	 * @param JK_Term $category Category Object.
	 */
	function wxr_cat_name( $category ) {
		if ( empty( $category->name ) ) {
			return;
		}

		echo '<jk:cat_name>' . wxr_cdata( $category->name ) . "</jk:cat_name>\n";
	}

	/**
	 * Outputs a category_description XML tag from a given category object.
	 *
	 * @since 2.1.0
	 *
	 * @param JK_Term $category Category Object.
	 */
	function wxr_category_description( $category ) {
		if ( empty( $category->description ) ) {
			return;
		}

		echo '<jk:category_description>' . wxr_cdata( $category->description ) . "</jk:category_description>\n";
	}

	/**
	 * Outputs a tag_name XML tag from a given tag object.
	 *
	 * @since 2.3.0
	 *
	 * @param JK_Term $tag Tag Object.
	 */
	function wxr_tag_name( $tag ) {
		if ( empty( $tag->name ) ) {
			return;
		}

		echo '<jk:tag_name>' . wxr_cdata( $tag->name ) . "</jk:tag_name>\n";
	}

	/**
	 * Outputs a tag_description XML tag from a given tag object.
	 *
	 * @since 2.3.0
	 *
	 * @param JK_Term $tag Tag Object.
	 */
	function wxr_tag_description( $tag ) {
		if ( empty( $tag->description ) ) {
			return;
		}

		echo '<jk:tag_description>' . wxr_cdata( $tag->description ) . "</jk:tag_description>\n";
	}

	/**
	 * Outputs a term_name XML tag from a given term object.
	 *
	 * @since 2.9.0
	 *
	 * @param JK_Term $term Term Object.
	 */
	function wxr_term_name( $term ) {
		if ( empty( $term->name ) ) {
			return;
		}

		echo '<jk:term_name>' . wxr_cdata( $term->name ) . "</jk:term_name>\n";
	}

	/**
	 * Outputs a term_description XML tag from a given term object.
	 *
	 * @since 2.9.0
	 *
	 * @param JK_Term $term Term Object.
	 */
	function wxr_term_description( $term ) {
		if ( empty( $term->description ) ) {
			return;
		}

		echo "\t\t<jk:term_description>" . wxr_cdata( $term->description ) . "</jk:term_description>\n";
	}

	/**
	 * Outputs term meta XML tags for a given term object.
	 *
	 * @since 4.6.0
	 *
	 * @global jkdb $jkdb JKPress database abstraction object.
	 *
	 * @param JK_Term $term Term object.
	 */
	function wxr_term_meta( $term ) {
		global $jkdb;

		$termmeta = $jkdb->get_results( $jkdb->prepare( "SELECT * FROM $jkdb->termmeta WHERE term_id = %d", $term->term_id ) );

		foreach ( $termmeta as $meta ) {
			/**
			 * Filters whether to selectively skip term meta used for WXR exports.
			 *
			 * Returning a truthy value from the filter will skip the current meta
			 * object from being exported.
			 *
			 * @since 4.6.0
			 *
			 * @param bool   $skip     Whether to skip the current piece of term meta. Default false.
			 * @param string $meta_key Current meta key.
			 * @param object $meta     Current meta object.
			 */
			if ( ! apply_filters( 'wxr_export_skip_termmeta', false, $meta->meta_key, $meta ) ) {
				printf( "\t\t<jk:termmeta>\n\t\t\t<jk:meta_key>%s</jk:meta_key>\n\t\t\t<jk:meta_value>%s</jk:meta_value>\n\t\t</jk:termmeta>\n", wxr_cdata( $meta->meta_key ), wxr_cdata( $meta->meta_value ) );
			}
		}
	}

	/**
	 * Outputs list of authors with posts.
	 *
	 * @since 3.1.0
	 *
	 * @global jkdb $jkdb JKPress database abstraction object.
	 *
	 * @param int[] $post_ids Optional. Array of post IDs to filter the query by.
	 */
	function wxr_authors_list( ?array $post_ids = null ) {
		global $jkdb;

		if ( ! empty( $post_ids ) ) {
			$post_ids = array_map( 'absint', $post_ids );
			$and      = 'AND ID IN ( ' . implode( ', ', $post_ids ) . ')';
		} else {
			$and = '';
		}

		$authors = array();
		$results = $jkdb->get_results( "SELECT DISTINCT post_author FROM $jkdb->posts WHERE post_status != 'auto-draft' $and" );
		foreach ( (array) $results as $result ) {
			$authors[] = get_userdata( $result->post_author );
		}

		$authors = array_filter( $authors );

		foreach ( $authors as $author ) {
			echo "\t<jk:author>";
			echo '<jk:author_id>' . (int) $author->ID . '</jk:author_id>';
			echo '<jk:author_login>' . wxr_cdata( $author->user_login ) . '</jk:author_login>';
			echo '<jk:author_email>' . wxr_cdata( $author->user_email ) . '</jk:author_email>';
			echo '<jk:author_display_name>' . wxr_cdata( $author->display_name ) . '</jk:author_display_name>';
			echo '<jk:author_first_name>' . wxr_cdata( $author->first_name ) . '</jk:author_first_name>';
			echo '<jk:author_last_name>' . wxr_cdata( $author->last_name ) . '</jk:author_last_name>';
			echo "</jk:author>\n";
		}
	}

	/**
	 * Outputs all navigation menu terms.
	 *
	 * @since 3.1.0
	 */
	function wxr_nav_menu_terms() {
		$nav_menus = jk_get_nav_menus();
		if ( empty( $nav_menus ) || ! is_array( $nav_menus ) ) {
			return;
		}

		foreach ( $nav_menus as $menu ) {
			echo "\t<jk:term>";
			echo '<jk:term_id>' . (int) $menu->term_id . '</jk:term_id>';
			echo '<jk:term_taxonomy>nav_menu</jk:term_taxonomy>';
			echo '<jk:term_slug>' . wxr_cdata( $menu->slug ) . '</jk:term_slug>';
			wxr_term_name( $menu );
			echo "</jk:term>\n";
		}
	}

	/**
	 * Outputs list of taxonomy terms, in XML tag format, associated with a post.
	 *
	 * @since 2.3.0
	 */
	function wxr_post_taxonomy() {
		$post = get_post();

		$taxonomies = get_object_taxonomies( $post->post_type );
		if ( empty( $taxonomies ) ) {
			return;
		}
		$terms = jk_get_object_terms( $post->ID, $taxonomies );

		foreach ( (array) $terms as $term ) {
			echo "\t\t<category domain=\"{$term->taxonomy}\" nicename=\"{$term->slug}\">" . wxr_cdata( $term->name ) . "</category>\n";
		}
	}

	/**
	 * Determines whether to selectively skip post meta used for WXR exports.
	 *
	 * @since 3.3.0
	 *
	 * @param bool   $return_me Whether to skip the current post meta. Default false.
	 * @param string $meta_key  Meta key.
	 * @return bool
	 */
	function wxr_filter_postmeta( $return_me, $meta_key ) {
		if ( '_edit_lock' === $meta_key ) {
			$return_me = true;
		}
		return $return_me;
	}
	add_filter( 'wxr_export_skip_postmeta', 'wxr_filter_postmeta', 10, 2 );

	echo '<?xml version="1.0" encoding="' . get_bloginfo( 'charset' ) . "\" ?>\n";

	?>
<!-- This is a JKPress eXtended RSS file generated by JKPress as an export of your site. -->
<!-- It contains information about your site's posts, pages, comments, categories, and other content. -->
<!-- You may use this file to transfer that content from one site to another. -->
<!-- This file is not intended to serve as a complete backup of your site. -->

<!-- To import this information into a JKPress site follow these steps: -->
<!-- 1. Log in to that site as an administrator. -->
<!-- 2. Go to Tools: Import in the JKPress admin panel. -->
<!-- 3. Install the "JKPress" importer from the list. -->
<!-- 4. Activate & Run Importer. -->
<!-- 5. Upload this file using the form provided on that page. -->
<!-- 6. You will first be asked to map the authors in this export file to users -->
<!--    on the site. For each author, you may choose to map to an -->
<!--    existing user on the site or to create a new user. -->
<!-- 7. JKPress will then import each of the posts, pages, comments, categories, etc. -->
<!--    contained in this file into your site. -->

	<?php the_generator( 'export' ); ?>
<rss version="2.0"
	xmlns:excerpt="http://wordpress.org/export/<?php echo WXR_VERSION; ?>/excerpt/"
	xmlns:content="http://purl.org/rss/1.0/modules/content/"
	xmlns:wfw="http://wellformedweb.org/CommentAPI/"
	xmlns:dc="http://purl.org/dc/elements/1.1/"
	xmlns:jk="http://wordpress.org/export/<?php echo WXR_VERSION; ?>/"
>

<channel>
	<title><?php bloginfo_rss( 'name' ); ?></title>
	<link><?php bloginfo_rss( 'url' ); ?></link>
	<description><?php bloginfo_rss( 'description' ); ?></description>
	<pubDate><?php echo gmdate( 'D, d M Y H:i:s +0000' ); ?></pubDate>
	<language><?php bloginfo_rss( 'language' ); ?></language>
	<jk:wxr_version><?php echo WXR_VERSION; ?></jk:wxr_version>
	<jk:base_site_url><?php echo wxr_site_url(); ?></jk:base_site_url>
	<jk:base_blog_url><?php bloginfo_rss( 'url' ); ?></jk:base_blog_url>

	<?php wxr_authors_list( $post_ids ); ?>

	<?php foreach ( $cats as $c ) : ?>
	<jk:category>
		<jk:term_id><?php echo (int) $c->term_id; ?></jk:term_id>
		<jk:category_nicename><?php echo wxr_cdata( $c->slug ); ?></jk:category_nicename>
		<jk:category_parent><?php echo wxr_cdata( $c->parent ? $cats[ $c->parent ]->slug : '' ); ?></jk:category_parent>
		<?php
		wxr_cat_name( $c );
		wxr_category_description( $c );
		wxr_term_meta( $c );
		?>
	</jk:category>
	<?php endforeach; ?>
	<?php foreach ( $tags as $t ) : ?>
	<jk:tag>
		<jk:term_id><?php echo (int) $t->term_id; ?></jk:term_id>
		<jk:tag_slug><?php echo wxr_cdata( $t->slug ); ?></jk:tag_slug>
		<?php
		wxr_tag_name( $t );
		wxr_tag_description( $t );
		wxr_term_meta( $t );
		?>
	</jk:tag>
	<?php endforeach; ?>
	<?php foreach ( $terms as $t ) : ?>
	<jk:term>
		<jk:term_id><?php echo (int) $t->term_id; ?></jk:term_id>
		<jk:term_taxonomy><?php echo wxr_cdata( $t->taxonomy ); ?></jk:term_taxonomy>
		<jk:term_slug><?php echo wxr_cdata( $t->slug ); ?></jk:term_slug>
		<jk:term_parent><?php echo wxr_cdata( $t->parent ? $terms[ $t->parent ]->slug : '' ); ?></jk:term_parent>
		<?php
		wxr_term_name( $t );
		wxr_term_description( $t );
		wxr_term_meta( $t );
		?>
	</jk:term>
	<?php endforeach; ?>
	<?php
	if ( 'all' === $args['content'] ) {
		wxr_nav_menu_terms();
	}
	?>

	<?php
	/** This action is documented in jk-includes/feed-rss2.php */
	do_action( 'rss2_head' );
	?>

	<?php
	if ( $post_ids ) {
		/**
		 * @global JK_Query $jk_query JKPress Query object.
		 */
		global $jk_query;

		// Fake being in the loop.
		$jk_query->in_the_loop = true;

		// Fetch 20 posts at a time rather than loading the entire table into memory.
		while ( $next_posts = array_splice( $post_ids, 0, 20 ) ) {
			$where = 'WHERE ID IN (' . implode( ',', $next_posts ) . ')';
			$posts = $jkdb->get_results( "SELECT * FROM {$jkdb->posts} $where" );

			// Begin Loop.
			foreach ( $posts as $post ) {
				setup_postdata( $post );

				/**
				 * Filters the post title used for WXR exports.
				 *
				 * @since 5.7.0
				 *
				 * @param string $post_title Title of the current post.
				 */
				$title = wxr_cdata( apply_filters( 'the_title_export', $post->post_title ) );

				/**
				 * Filters the post content used for WXR exports.
				 *
				 * @since 2.5.0
				 *
				 * @param string $post_content Content of the current post.
				 */
				$content = wxr_cdata( apply_filters( 'the_content_export', $post->post_content ) );

				/**
				 * Filters the post excerpt used for WXR exports.
				 *
				 * @since 2.6.0
				 *
				 * @param string $post_excerpt Excerpt for the current post.
				 */
				$excerpt = wxr_cdata( apply_filters( 'the_excerpt_export', $post->post_excerpt ) );

				$is_sticky = is_sticky( $post->ID ) ? 1 : 0;
				?>
	<item>
		<title><?php echo $title; ?></title>
		<link><?php the_permalink_rss(); ?></link>
		<pubDate><?php echo mysql2date( 'D, d M Y H:i:s +0000', get_post_time( 'Y-m-d H:i:s', true ), false ); ?></pubDate>
		<dc:creator><?php echo wxr_cdata( get_the_author_meta( 'login' ) ); ?></dc:creator>
		<guid isPermaLink="false"><?php the_guid(); ?></guid>
		<description></description>
		<content:encoded><?php echo $content; ?></content:encoded>
		<excerpt:encoded><?php echo $excerpt; ?></excerpt:encoded>
		<jk:post_id><?php echo (int) $post->ID; ?></jk:post_id>
		<jk:post_date><?php echo wxr_cdata( $post->post_date ); ?></jk:post_date>
		<jk:post_date_gmt><?php echo wxr_cdata( $post->post_date_gmt ); ?></jk:post_date_gmt>
		<jk:post_modified><?php echo wxr_cdata( $post->post_modified ); ?></jk:post_modified>
		<jk:post_modified_gmt><?php echo wxr_cdata( $post->post_modified_gmt ); ?></jk:post_modified_gmt>
		<jk:comment_status><?php echo wxr_cdata( $post->comment_status ); ?></jk:comment_status>
		<jk:ping_status><?php echo wxr_cdata( $post->ping_status ); ?></jk:ping_status>
		<jk:post_name><?php echo wxr_cdata( $post->post_name ); ?></jk:post_name>
		<jk:status><?php echo wxr_cdata( $post->post_status ); ?></jk:status>
		<jk:post_parent><?php echo (int) $post->post_parent; ?></jk:post_parent>
		<jk:menu_order><?php echo (int) $post->menu_order; ?></jk:menu_order>
		<jk:post_type><?php echo wxr_cdata( $post->post_type ); ?></jk:post_type>
		<jk:post_password><?php echo wxr_cdata( $post->post_password ); ?></jk:post_password>
		<jk:is_sticky><?php echo (int) $is_sticky; ?></jk:is_sticky>
				<?php	if ( 'attachment' === $post->post_type ) : ?>
		<jk:attachment_url><?php echo wxr_cdata( jk_get_attachment_url( $post->ID ) ); ?></jk:attachment_url>
	<?php endif; ?>
				<?php wxr_post_taxonomy(); ?>
				<?php
				$postmeta = $jkdb->get_results( $jkdb->prepare( "SELECT * FROM $jkdb->postmeta WHERE post_id = %d", $post->ID ) );
				foreach ( $postmeta as $meta ) :
					/**
					 * Filters whether to selectively skip post meta used for WXR exports.
					 *
					 * Returning a truthy value from the filter will skip the current meta
					 * object from being exported.
					 *
					 * @since 3.3.0
					 *
					 * @param bool   $skip     Whether to skip the current post meta. Default false.
					 * @param string $meta_key Current meta key.
					 * @param object $meta     Current meta object.
					 */
					if ( apply_filters( 'wxr_export_skip_postmeta', false, $meta->meta_key, $meta ) ) {
						continue;
					}
					?>
		<jk:postmeta>
		<jk:meta_key><?php echo wxr_cdata( $meta->meta_key ); ?></jk:meta_key>
		<jk:meta_value><?php echo wxr_cdata( $meta->meta_value ); ?></jk:meta_value>
		</jk:postmeta>
					<?php
	endforeach;

				$_comments = $jkdb->get_results( $jkdb->prepare( "SELECT * FROM $jkdb->comments WHERE comment_post_ID = %d AND comment_approved <> 'spam'", $post->ID ) );
				$comments  = array_map( 'get_comment', $_comments );
				foreach ( $comments as $c ) :
					?>
		<jk:comment>
			<jk:comment_id><?php echo (int) $c->comment_ID; ?></jk:comment_id>
			<jk:comment_author><?php echo wxr_cdata( $c->comment_author ); ?></jk:comment_author>
			<jk:comment_author_email><?php echo wxr_cdata( $c->comment_author_email ); ?></jk:comment_author_email>
			<jk:comment_author_url><?php echo sanitize_url( $c->comment_author_url ); ?></jk:comment_author_url>
			<jk:comment_author_IP><?php echo wxr_cdata( $c->comment_author_IP ); ?></jk:comment_author_IP>
			<jk:comment_date><?php echo wxr_cdata( $c->comment_date ); ?></jk:comment_date>
			<jk:comment_date_gmt><?php echo wxr_cdata( $c->comment_date_gmt ); ?></jk:comment_date_gmt>
			<jk:comment_content><?php echo wxr_cdata( $c->comment_content ); ?></jk:comment_content>
			<jk:comment_approved><?php echo wxr_cdata( $c->comment_approved ); ?></jk:comment_approved>
			<jk:comment_type><?php echo wxr_cdata( $c->comment_type ); ?></jk:comment_type>
			<jk:comment_parent><?php echo (int) $c->comment_parent; ?></jk:comment_parent>
			<jk:comment_user_id><?php echo (int) $c->user_id; ?></jk:comment_user_id>
					<?php
					$c_meta = $jkdb->get_results( $jkdb->prepare( "SELECT * FROM $jkdb->commentmeta WHERE comment_id = %d", $c->comment_ID ) );
					foreach ( $c_meta as $meta ) :
						/**
						 * Filters whether to selectively skip comment meta used for WXR exports.
						 *
						 * Returning a truthy value from the filter will skip the current meta
						 * object from being exported.
						 *
						 * @since 4.0.0
						 *
						 * @param bool   $skip     Whether to skip the current comment meta. Default false.
						 * @param string $meta_key Current meta key.
						 * @param object $meta     Current meta object.
						 */
						if ( apply_filters( 'wxr_export_skip_commentmeta', false, $meta->meta_key, $meta ) ) {
							continue;
						}
						?>
	<jk:commentmeta>
	<jk:meta_key><?php echo wxr_cdata( $meta->meta_key ); ?></jk:meta_key>
			<jk:meta_value><?php echo wxr_cdata( $meta->meta_value ); ?></jk:meta_value>
			</jk:commentmeta>
					<?php	endforeach; ?>
		</jk:comment>
			<?php	endforeach; ?>
		</item>
				<?php
			}
		}
	}
	?>
</channel>
</rss>
	<?php
}
