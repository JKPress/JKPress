<?php

/*
 * The error_reporting() function can be disabled in php.ini. On systems where that is the case,
 * it's best to add a dummy function to the jk-config.php file, but as this call to the function
 * is run prior to jk-config.php loading, it is wrapped in a function_exists() check.
 */
if ( function_exists( 'error_reporting' ) ) {
	/*
	 * Disable error reporting.
	 *
	 * Set this to error_reporting( -1 ) for debugging.
	 */
	error_reporting( 0 );
}

// Set ABSPATH for execution.
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __DIR__ ) . '/' );
}

define( 'JKINC', 'jk-includes' );
define( 'JK_CONTENT_DIR', ABSPATH . 'jk-content' );

require ABSPATH . 'jk-admin/includes/noop.php';
require ABSPATH . JKINC . '/theme.php';
require ABSPATH . JKINC . '/class-jk-theme-json-resolver.php';
require ABSPATH . JKINC . '/global-styles-and-settings.php';
require ABSPATH . JKINC . '/script-loader.php';
require ABSPATH . JKINC . '/version.php';

$protocol = $_SERVER['SERVER_PROTOCOL'];
if ( ! in_array( $protocol, array( 'HTTP/1.1', 'HTTP/2', 'HTTP/2.0', 'HTTP/3' ), true ) ) {
	$protocol = 'HTTP/1.0';
}

$load = $_GET['load'];
if ( is_array( $load ) ) {
	ksort( $load );
	$load = implode( '', $load );
}

$load = preg_replace( '/[^a-z0-9,_-]+/i', '', $load );
$load = array_unique( explode( ',', $load ) );

if ( empty( $load ) ) {
	header( "$protocol 400 Bad Request" );
	exit;
}

$rtl            = ( isset( $_GET['dir'] ) && 'rtl' === $_GET['dir'] );
$expires_offset = 31536000; // 1 year.
$out            = '';

$jk_styles = new JK_Styles();
jk_default_styles( $jk_styles );

$etag = $jk_styles->get_etag( $load );

if ( isset( $_SERVER['HTTP_IF_NONE_MATCH'] ) && stripslashes( $_SERVER['HTTP_IF_NONE_MATCH'] ) === $etag ) {
	header( "$protocol 304 Not Modified" );
	exit;
}

foreach ( $load as $handle ) {
	if ( ! array_key_exists( $handle, $jk_styles->registered ) ) {
		continue;
	}

	$style = $jk_styles->registered[ $handle ];

	if ( empty( $style->src ) ) {
		continue;
	}

	$path = ABSPATH . $style->src;

	if ( $rtl && ! empty( $style->extra['rtl'] ) ) {
		// All default styles have fully independent RTL files.
		$path = str_replace( '.min.css', '-rtl.min.css', $path );
	}

	$content = get_file( $path ) . "\n";

	// Note: str_starts_with() is not used here, as jk-includes/compat.php is not loaded in this file.
	if ( 0 === strpos( $style->src, '/' . JKINC . '/css/' ) ) {
		$content = str_replace( '../images/', '../' . JKINC . '/images/', $content );
		$content = str_replace( '../js/tinymce/', '../' . JKINC . '/js/tinymce/', $content );
		$content = str_replace( '../fonts/', '../' . JKINC . '/fonts/', $content );
		$out    .= $content;
	} else {
		$out .= str_replace( '../images/', 'images/', $content );
	}
}

header( "Etag: $etag" );
header( 'Content-Type: text/css; charset=UTF-8' );
header( 'Expires: ' . gmdate( 'D, d M Y H:i:s', time() + $expires_offset ) . ' GMT' );
header( "Cache-Control: public, max-age=$expires_offset" );

echo $out;
exit;
