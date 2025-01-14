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

require ABSPATH . 'jk-admin/includes/noop.php';
require ABSPATH . JKINC . '/script-loader.php';
require ABSPATH . JKINC . '/version.php';

$expires_offset = 31536000; // 1 year.
$out            = '';

$jk_scripts = new JK_Scripts();
jk_default_scripts( $jk_scripts );
jk_default_packages_vendor( $jk_scripts );
jk_default_packages_scripts( $jk_scripts );

$etag = $jk_scripts->get_etag( $load );

if ( isset( $_SERVER['HTTP_IF_NONE_MATCH'] ) && stripslashes( $_SERVER['HTTP_IF_NONE_MATCH'] ) === $etag ) {
	header( "$protocol 304 Not Modified" );
	exit;
}

foreach ( $load as $handle ) {
	if ( ! array_key_exists( $handle, $jk_scripts->registered ) ) {
		continue;
	}

	$path = ABSPATH . $jk_scripts->registered[ $handle ]->src;
	$out .= get_file( $path ) . "\n";
}

header( "Etag: $etag" );
header( 'Content-Type: application/javascript; charset=UTF-8' );
header( 'Expires: ' . gmdate( 'D, d M Y H:i:s', time() + $expires_offset ) . ' GMT' );
header( "Cache-Control: public, max-age=$expires_offset" );

echo $out;
exit;
