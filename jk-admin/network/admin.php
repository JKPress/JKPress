<?php
/**
 * JKPress Network Administration Bootstrap
 *
 * @package JKPress
 * @subpackage Multisite
 * @since 3.1.0
 */

define( 'JK_NETWORK_ADMIN', true );

/** Load JKPress Administration Bootstrap */
require_once dirname( __DIR__ ) . '/admin.php';

// Do not remove this check. It is required by individual network admin pages.
if ( ! is_multisite() ) {
	jk_die( __( 'Multisite support is not enabled.' ) );
}

$redirect_network_admin_request = ( 0 !== strcasecmp( $current_blog->domain, $current_site->domain ) || 0 !== strcasecmp( $current_blog->path, $current_site->path ) );

/**
 * Filters whether to redirect the request to the Network Admin.
 *
 * @since 3.2.0
 *
 * @param bool $redirect_network_admin_request Whether the request should be redirected.
 */
$redirect_network_admin_request = apply_filters( 'redirect_network_admin_request', $redirect_network_admin_request );

if ( $redirect_network_admin_request ) {
	jk_redirect( network_admin_url() );
	exit;
}

unset( $redirect_network_admin_request );