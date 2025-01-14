<?php
/**
 * Bootstrap file for setting the ABSPATH constant
 * and loading the jk-config.php file. The jk-config.php
 * file will then load the jk-settings.php file, which
 * will then set up the JKPress environment.
 *
 * If the jk-config.php file is not found then an error
 * will be displayed asking the visitor to set up the
 * jk-config.php file.
 *
 * Will also search for jk-config.php in JKPress' parent
 * directory to allow the JKPress directory to remain
 * untouched.
 *
 * @package JKPress
 */

/** Define ABSPATH as this file's directory */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/*
 * The error_reporting() function can be disabled in php.ini. On systems where that is the case,
 * it's best to add a dummy function to the jk-config.php file, but as this call to the function
 * is run prior to jk-config.php loading, it is wrapped in a function_exists() check.
 */
if ( function_exists( 'error_reporting' ) ) {
	/*
	 * Initialize error reporting to a known set of levels.
	 *
	 * This will be adapted in jk_debug_mode() located in jk-includes/load.php based on JK_DEBUG.
	 * @see https://www.php.net/manual/en/errorfunc.constants.php List of known error levels.
	 */
	error_reporting( E_CORE_ERROR | E_CORE_WARNING | E_COMPILE_ERROR | E_ERROR | E_WARNING | E_PARSE | E_USER_ERROR | E_USER_WARNING | E_RECOVERABLE_ERROR );
}

/*
 * If jk-config.php exists in the JKPress root, or if it exists in the root and jk-settings.php
 * doesn't, load jk-config.php. The secondary check for jk-settings.php has the added benefit
 * of avoiding cases where the current directory is a nested installation, e.g. / is JKPress(a)
 * and /blog/ is JKPress(b).
 *
 * If neither set of conditions is true, initiate loading the setup process.
 */
if ( file_exists( ABSPATH . 'jk-config.php' ) ) {

	/** The config file resides in ABSPATH */
	require_once ABSPATH . 'jk-config.php';

} elseif ( @file_exists( dirname( ABSPATH ) . '/jk-config.php' ) && ! @file_exists( dirname( ABSPATH ) . '/jk-settings.php' ) ) {

	/** The config file resides one level above ABSPATH but is not part of another installation */
	require_once dirname( ABSPATH ) . '/jk-config.php';

} else {

	// A config file doesn't exist.

	define( 'JKINC', 'jk-includes' );
	require_once ABSPATH . JKINC . '/version.php';
	require_once ABSPATH . JKINC . '/compat.php';
	require_once ABSPATH . JKINC . '/load.php';

	// Check for the required PHP version and for the MySQL extension or a database drop-in.
	jk_check_php_mysql_versions();

	// Standardize $_SERVER variables across setups.
	jk_fix_server_vars();

	define( 'JK_CONTENT_DIR', ABSPATH . 'jk-content' );
	require_once ABSPATH . JKINC . '/functions.php';

	$path = jk_guess_url() . '/jk-admin/setup-config.php';

	// Redirect to setup-config.php.
	if ( ! str_contains( $_SERVER['REQUEST_URI'], 'setup-config' ) ) {
		header( 'Location: ' . $path );
		exit;
	}

	jk_load_translations_early();

	// Die with an error message.
	$die = '<p>' . sprintf(
		/* translators: %s: jk-config.php */
		__( "There doesn't seem to be a %s file. It is needed before the installation can continue." ),
		'<code>jk-config.php</code>'
	) . '</p>';
	$die .= '<p>' . sprintf(
		/* translators: 1: Documentation URL, 2: jk-config.php */
		__( 'Need more help? <a href="%1$s">Read the support article on %2$s</a>.' ),
		__( 'https://developer.wordpress.org/advanced-administration/wordpress/jk-config/' ),
		'<code>jk-config.php</code>'
	) . '</p>';
	$die .= '<p>' . sprintf(
		/* translators: %s: jk-config.php */
		__( "You can create a %s file through a web interface, but this doesn't work for all server setups. The safest way is to manually create the file." ),
		'<code>jk-config.php</code>'
	) . '</p>';
	$die .= '<p><a href="' . $path . '" class="button button-large">' . __( 'Create a Configuration File' ) . '</a></p>';

	jk_die( $die, __( 'JKPress &rsaquo; Error' ) );
}
