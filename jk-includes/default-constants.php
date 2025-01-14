<?php
/**
 * Defines constants and global variables that can be overridden, generally in jk-config.php.
 *
 * @package JKPress
 */

/**
 * Defines initial JKPress constants.
 *
 * @see jk_debug_mode()
 *
 * @since 3.0.0
 *
 * @global int    $blog_id    The current site ID.
 * @global string $jk_version The JKPress version string.
 */
function jk_initial_constants() {
	global $blog_id, $jk_version;

	/**#@+
	 * Constants for expressing human-readable data sizes in their respective number of bytes.
	 *
	 * @since 4.4.0
	 * @since 6.0.0 `PB_IN_BYTES`, `EB_IN_BYTES`, `ZB_IN_BYTES`, and `YB_IN_BYTES` were added.
	 */
	define( 'KB_IN_BYTES', 1024 );
	define( 'MB_IN_BYTES', 1024 * KB_IN_BYTES );
	define( 'GB_IN_BYTES', 1024 * MB_IN_BYTES );
	define( 'TB_IN_BYTES', 1024 * GB_IN_BYTES );
	define( 'PB_IN_BYTES', 1024 * TB_IN_BYTES );
	define( 'EB_IN_BYTES', 1024 * PB_IN_BYTES );
	define( 'ZB_IN_BYTES', 1024 * EB_IN_BYTES );
	define( 'YB_IN_BYTES', 1024 * ZB_IN_BYTES );
	/**#@-*/

	// Start of run timestamp.
	if ( ! defined( 'JK_START_TIMESTAMP' ) ) {
		define( 'JK_START_TIMESTAMP', microtime( true ) );
	}

	$current_limit     = ini_get( 'memory_limit' );
	$current_limit_int = jk_convert_hr_to_bytes( $current_limit );

	// Define memory limits.
	if ( ! defined( 'JK_MEMORY_LIMIT' ) ) {
		if ( false === jk_is_ini_value_changeable( 'memory_limit' ) ) {
			define( 'JK_MEMORY_LIMIT', $current_limit );
		} elseif ( is_multisite() ) {
			define( 'JK_MEMORY_LIMIT', '64M' );
		} else {
			define( 'JK_MEMORY_LIMIT', '40M' );
		}
	}

	if ( ! defined( 'JK_MAX_MEMORY_LIMIT' ) ) {
		if ( false === jk_is_ini_value_changeable( 'memory_limit' ) ) {
			define( 'JK_MAX_MEMORY_LIMIT', $current_limit );
		} elseif ( -1 === $current_limit_int || $current_limit_int > 256 * MB_IN_BYTES ) {
			define( 'JK_MAX_MEMORY_LIMIT', $current_limit );
		} elseif ( jk_convert_hr_to_bytes( JK_MEMORY_LIMIT ) > 256 * MB_IN_BYTES ) {
			define( 'JK_MAX_MEMORY_LIMIT', JK_MEMORY_LIMIT );
		} else {
			define( 'JK_MAX_MEMORY_LIMIT', '256M' );
		}
	}

	// Set memory limits.
	$jk_limit_int = jk_convert_hr_to_bytes( JK_MEMORY_LIMIT );
	if ( -1 !== $current_limit_int && ( -1 === $jk_limit_int || $jk_limit_int > $current_limit_int ) ) {
		ini_set( 'memory_limit', JK_MEMORY_LIMIT );
	}

	if ( ! isset( $blog_id ) ) {
		$blog_id = 1;
	}

	if ( ! defined( 'JK_CONTENT_DIR' ) ) {
		define( 'JK_CONTENT_DIR', ABSPATH . 'jk-content' ); // No trailing slash, full paths only - JK_CONTENT_URL is defined further down.
	}

	/*
	 * Add define( 'JK_DEVELOPMENT_MODE', 'core' ), or define( 'JK_DEVELOPMENT_MODE', 'plugin' ), or
	 * define( 'JK_DEVELOPMENT_MODE', 'theme' ), or define( 'JK_DEVELOPMENT_MODE', 'all' ) to jk-config.php
	 * to signify development mode for JKPress core, a plugin, a theme, or all three types respectively.
	 */
	if ( ! defined( 'JK_DEVELOPMENT_MODE' ) ) {
		define( 'JK_DEVELOPMENT_MODE', '' );
	}

	// Add define( 'JK_DEBUG', true ); to jk-config.php to enable display of notices during development.
	if ( ! defined( 'JK_DEBUG' ) ) {
		if ( jk_get_development_mode() || 'development' === jk_get_environment_type() ) {
			define( 'JK_DEBUG', true );
		} else {
			define( 'JK_DEBUG', false );
		}
	}

	/*
	 * Add define( 'JK_DEBUG_DISPLAY', null ); to jk-config.php to use the globally configured setting
	 * for 'display_errors' and not force errors to be displayed. Use false to force 'display_errors' off.
	 */
	if ( ! defined( 'JK_DEBUG_DISPLAY' ) ) {
		define( 'JK_DEBUG_DISPLAY', true );
	}

	// Add define( 'JK_DEBUG_LOG', true ); to enable error logging to jk-content/debug.log.
	if ( ! defined( 'JK_DEBUG_LOG' ) ) {
		define( 'JK_DEBUG_LOG', false );
	}

	if ( ! defined( 'JK_CACHE' ) ) {
		define( 'JK_CACHE', false );
	}

	/*
	 * Add define( 'SCRIPT_DEBUG', true ); to jk-config.php to enable loading of non-minified,
	 * non-concatenated scripts and stylesheets.
	 */
	if ( ! defined( 'SCRIPT_DEBUG' ) ) {
		if ( ! empty( $jk_version ) ) {
			$develop_src = str_contains( $jk_version, '-src' );
		} else {
			$develop_src = false;
		}

		define( 'SCRIPT_DEBUG', $develop_src );
	}

	/**
	 * Private
	 */
	if ( ! defined( 'MEDIA_TRASH' ) ) {
		define( 'MEDIA_TRASH', false );
	}

	if ( ! defined( 'SHORTINIT' ) ) {
		define( 'SHORTINIT', false );
	}

	// Constants for features added to JK that should short-circuit their plugin implementations.
	define( 'JK_FEATURE_BETTER_PASSWORDS', true );

	/**#@+
	 * Constants for expressing human-readable intervals
	 * in their respective number of seconds.
	 *
	 * Please note that these values are approximate and are provided for convenience.
	 * For example, MONTH_IN_SECONDS wrongly assumes every month has 30 days and
	 * YEAR_IN_SECONDS does not take leap years into account.
	 *
	 * If you need more accuracy please consider using the DateTime class (https://www.php.net/manual/en/class.datetime.php).
	 *
	 * @since 3.5.0
	 * @since 4.4.0 Introduced `MONTH_IN_SECONDS`.
	 */
	define( 'MINUTE_IN_SECONDS', 60 );
	define( 'HOUR_IN_SECONDS', 60 * MINUTE_IN_SECONDS );
	define( 'DAY_IN_SECONDS', 24 * HOUR_IN_SECONDS );
	define( 'WEEK_IN_SECONDS', 7 * DAY_IN_SECONDS );
	define( 'MONTH_IN_SECONDS', 30 * DAY_IN_SECONDS );
	define( 'YEAR_IN_SECONDS', 365 * DAY_IN_SECONDS );
	/**#@-*/
}

/**
 * Defines plugin directory JKPress constants.
 *
 * Defines must-use plugin directory constants, which may be overridden in the sunrise.php drop-in.
 *
 * @since 3.0.0
 */
function jk_plugin_directory_constants() {
	if ( ! defined( 'JK_CONTENT_URL' ) ) {
		define( 'JK_CONTENT_URL', get_option( 'siteurl' ) . '/jk-content' ); // Full URL - JK_CONTENT_DIR is defined further up.
	}

	/**
	 * Allows for the plugins directory to be moved from the default location.
	 *
	 * @since 2.6.0
	 */
	if ( ! defined( 'JK_PLUGIN_DIR' ) ) {
		define( 'JK_PLUGIN_DIR', JK_CONTENT_DIR . '/plugins' ); // Full path, no trailing slash.
	}

	/**
	 * Allows for the plugins directory to be moved from the default location.
	 *
	 * @since 2.6.0
	 */
	if ( ! defined( 'JK_PLUGIN_URL' ) ) {
		define( 'JK_PLUGIN_URL', JK_CONTENT_URL . '/plugins' ); // Full URL, no trailing slash.
	}

	/**
	 * Allows for the plugins directory to be moved from the default location.
	 *
	 * @since 2.1.0
	 * @deprecated
	 */
	if ( ! defined( 'PLUGINDIR' ) ) {
		define( 'PLUGINDIR', 'jk-content/plugins' ); // Relative to ABSPATH. For back compat.
	}

	/**
	 * Allows for the mu-plugins directory to be moved from the default location.
	 *
	 * @since 2.8.0
	 */
	if ( ! defined( 'JKMU_PLUGIN_DIR' ) ) {
		define( 'JKMU_PLUGIN_DIR', JK_CONTENT_DIR . '/mu-plugins' ); // Full path, no trailing slash.
	}

	/**
	 * Allows for the mu-plugins directory to be moved from the default location.
	 *
	 * @since 2.8.0
	 */
	if ( ! defined( 'JKMU_PLUGIN_URL' ) ) {
		define( 'JKMU_PLUGIN_URL', JK_CONTENT_URL . '/mu-plugins' ); // Full URL, no trailing slash.
	}

	/**
	 * Allows for the mu-plugins directory to be moved from the default location.
	 *
	 * @since 2.8.0
	 * @deprecated
	 */
	if ( ! defined( 'MUPLUGINDIR' ) ) {
		define( 'MUPLUGINDIR', 'jk-content/mu-plugins' ); // Relative to ABSPATH. For back compat.
	}
}

/**
 * Defines cookie-related JKPress constants.
 *
 * Defines constants after multisite is loaded.
 *
 * @since 3.0.0
 */
function jk_cookie_constants() {
	/**
	 * Used to guarantee unique hash cookies.
	 *
	 * @since 1.5.0
	 */
	if ( ! defined( 'COOKIEHASH' ) ) {
		$siteurl = get_site_option( 'siteurl' );
		if ( $siteurl ) {
			define( 'COOKIEHASH', md5( $siteurl ) );
		} else {
			define( 'COOKIEHASH', '' );
		}
	}

	/**
	 * @since 2.0.0
	 */
	if ( ! defined( 'USER_COOKIE' ) ) {
		define( 'USER_COOKIE', 'wordpressuser_' . COOKIEHASH );
	}

	/**
	 * @since 2.0.0
	 */
	if ( ! defined( 'PASS_COOKIE' ) ) {
		define( 'PASS_COOKIE', 'wordpresspass_' . COOKIEHASH );
	}

	/**
	 * @since 2.5.0
	 */
	if ( ! defined( 'AUTH_COOKIE' ) ) {
		define( 'AUTH_COOKIE', 'wordpress_' . COOKIEHASH );
	}

	/**
	 * @since 2.6.0
	 */
	if ( ! defined( 'SECURE_AUTH_COOKIE' ) ) {
		define( 'SECURE_AUTH_COOKIE', 'wordpress_sec_' . COOKIEHASH );
	}

	/**
	 * @since 2.6.0
	 */
	if ( ! defined( 'LOGGED_IN_COOKIE' ) ) {
		define( 'LOGGED_IN_COOKIE', 'wordpress_logged_in_' . COOKIEHASH );
	}

	/**
	 * @since 2.3.0
	 */
	if ( ! defined( 'TEST_COOKIE' ) ) {
		define( 'TEST_COOKIE', 'wordpress_test_cookie' );
	}

	/**
	 * @since 1.2.0
	 */
	if ( ! defined( 'COOKIEPATH' ) ) {
		define( 'COOKIEPATH', preg_replace( '|https?://[^/]+|i', '', get_option( 'home' ) . '/' ) );
	}

	/**
	 * @since 1.5.0
	 */
	if ( ! defined( 'SITECOOKIEPATH' ) ) {
		define( 'SITECOOKIEPATH', preg_replace( '|https?://[^/]+|i', '', get_option( 'siteurl' ) . '/' ) );
	}

	/**
	 * @since 2.6.0
	 */
	if ( ! defined( 'ADMIN_COOKIE_PATH' ) ) {
		define( 'ADMIN_COOKIE_PATH', SITECOOKIEPATH . 'jk-admin' );
	}

	/**
	 * @since 2.6.0
	 */
	if ( ! defined( 'PLUGINS_COOKIE_PATH' ) ) {
		define( 'PLUGINS_COOKIE_PATH', preg_replace( '|https?://[^/]+|i', '', JK_PLUGIN_URL ) );
	}

	/**
	 * @since 2.0.0
	 * @since 6.6.0 The value has changed from false to an empty string.
	 */
	if ( ! defined( 'COOKIE_DOMAIN' ) ) {
		define( 'COOKIE_DOMAIN', '' );
	}

	if ( ! defined( 'RECOVERY_MODE_COOKIE' ) ) {
		/**
		 * @since 5.2.0
		 */
		define( 'RECOVERY_MODE_COOKIE', 'wordpress_rec_' . COOKIEHASH );
	}
}

/**
 * Defines SSL-related JKPress constants.
 *
 * @since 3.0.0
 */
function jk_ssl_constants() {
	/**
	 * @since 2.6.0
	 */
	if ( ! defined( 'FORCE_SSL_ADMIN' ) ) {
		if ( 'https' === parse_url( get_option( 'siteurl' ), PHP_URL_SCHEME ) ) {
			define( 'FORCE_SSL_ADMIN', true );
		} else {
			define( 'FORCE_SSL_ADMIN', false );
		}
	}
	force_ssl_admin( FORCE_SSL_ADMIN );

	/**
	 * @since 2.6.0
	 * @deprecated 4.0.0
	 */
	if ( defined( 'FORCE_SSL_LOGIN' ) && FORCE_SSL_LOGIN ) {
		force_ssl_admin( true );
	}
}

/**
 * Defines functionality-related JKPress constants.
 *
 * @since 3.0.0
 */
function jk_functionality_constants() {
	/**
	 * @since 2.5.0
	 */
	if ( ! defined( 'AUTOSAVE_INTERVAL' ) ) {
		define( 'AUTOSAVE_INTERVAL', MINUTE_IN_SECONDS );
	}

	/**
	 * @since 2.9.0
	 */
	if ( ! defined( 'EMPTY_TRASH_DAYS' ) ) {
		define( 'EMPTY_TRASH_DAYS', 30 );
	}

	if ( ! defined( 'JK_POST_REVISIONS' ) ) {
		define( 'JK_POST_REVISIONS', true );
	}

	/**
	 * @since 3.3.0
	 */
	if ( ! defined( 'JK_CRON_LOCK_TIMEOUT' ) ) {
		define( 'JK_CRON_LOCK_TIMEOUT', MINUTE_IN_SECONDS );
	}
}

/**
 * Defines templating-related JKPress constants.
 *
 * @since 3.0.0
 */
function jk_templating_constants() {
	/**
	 * Filesystem path to the current active template directory.
	 *
	 * @since 1.5.0
	 * @deprecated 6.4.0 Use get_template_directory() instead.
	 * @see get_template_directory()
	 */
	define( 'TEMPLATEPATH', get_template_directory() );

	/**
	 * Filesystem path to the current active template stylesheet directory.
	 *
	 * @since 2.1.0
	 * @deprecated 6.4.0 Use get_stylesheet_directory() instead.
	 * @see get_stylesheet_directory()
	 */
	define( 'STYLESHEETPATH', get_stylesheet_directory() );

	/**
	 * Slug of the default theme for this installation.
	 * Used as the default theme when installing new sites.
	 * It will be used as the fallback if the active theme doesn't exist.
	 *
	 * @since 3.0.0
	 *
	 * @see JK_Theme::get_core_default_theme()
	 */
	if ( ! defined( 'JK_DEFAULT_THEME' ) ) {
		define( 'JK_DEFAULT_THEME', 'twentytwentyfive' );
	}
}
