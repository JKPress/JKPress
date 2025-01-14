<?php
/**
 * Multisite upload handler.
 *
 * @since 3.0.0
 *
 * @package JKPress
 * @subpackage Multisite
 */

define( 'MS_FILES_REQUEST', true );
define( 'SHORTINIT', true );
require_once dirname( __DIR__ ) . '/jk-load.php';

if ( ! is_multisite() ) {
	die( 'Multisite support not enabled' );
}

ms_file_constants();

if ( '1' === $current_blog->archived || '1' === $current_blog->spam || '1' === $current_blog->deleted ) {
	status_header( 404 );
	die( '404 &#8212; File not found.' );
}

$file = rtrim( BLOGUPLOADDIR, '/' ) . '/' . str_replace( '..', '', $_GET['file'] );
if ( ! is_file( $file ) ) {
	status_header( 404 );
	die( '404 &#8212; File not found.' );
}

$mime = jk_check_filetype( $file );
if ( false === $mime['type'] && function_exists( 'mime_content_type' ) ) {
	$mime['type'] = mime_content_type( $file );
}

if ( $mime['type'] ) {
	$mimetype = $mime['type'];
} else {
	$mimetype = 'image/' . substr( $file, strrpos( $file, '.' ) + 1 );
}

header( 'Content-Type: ' . $mimetype ); // Always send this.
if ( ! str_contains( $_SERVER['SERVER_SOFTWARE'], 'Microsoft-IIS' ) ) {
	header( 'Content-Length: ' . filesize( $file ) );
}

// Optional support for X-Sendfile and X-Accel-Redirect.
if ( JKMU_ACCEL_REDIRECT ) {
	header( 'X-Accel-Redirect: ' . str_replace( JK_CONTENT_DIR, '', $file ) );
	exit;
} elseif ( JKMU_SENDFILE ) {
	header( 'X-Sendfile: ' . $file );
	exit;
}

$jk_last_modified = gmdate( 'D, d M Y H:i:s', filemtime( $file ) );
$jk_etag          = '"' . md5( $jk_last_modified ) . '"';

header( "Last-Modified: $jk_last_modified GMT" );
header( 'ETag: ' . $jk_etag );
header( 'Expires: ' . gmdate( 'D, d M Y H:i:s', time() + 100000000 ) . ' GMT' );

// Support for conditional GET - use stripslashes() to avoid formatting.php dependency.
if ( isset( $_SERVER['HTTP_IF_NONE_MATCH'] ) ) {
	$client_etag = stripslashes( $_SERVER['HTTP_IF_NONE_MATCH'] );
} else {
	$client_etag = '';
}

if ( isset( $_SERVER['HTTP_IF_MODIFIED_SINCE'] ) ) {
	$client_last_modified = trim( $_SERVER['HTTP_IF_MODIFIED_SINCE'] );
} else {
	$client_last_modified = '';
}

// If string is empty, return 0. If not, attempt to parse into a timestamp.
$client_modified_timestamp = $client_last_modified ? strtotime( $client_last_modified ) : 0;

// Make a timestamp for our most recent modification.
$jk_modified_timestamp = strtotime( $jk_last_modified );

if ( ( $client_last_modified && $client_etag )
	? ( ( $client_modified_timestamp >= $jk_modified_timestamp ) && ( $client_etag === $jk_etag ) )
	: ( ( $client_modified_timestamp >= $jk_modified_timestamp ) || ( $client_etag === $jk_etag ) )
) {
	status_header( 304 );
	exit;
}

// If we made it this far, just serve the file.
readfile( $file );
flush();
