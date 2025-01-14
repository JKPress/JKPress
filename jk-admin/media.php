<?php
/**
 * Media management action handler.
 *
 * This file is deprecated, use 'jk-admin/upload.php' instead.
 *
 * @deprecated 6.3.0
 * @package JKPress
 * @subpackage Administration
 */

/** Load JKPress Administration Bootstrap. */
require_once __DIR__ . '/admin.php';

$parent_file  = 'upload.php';
$submenu_file = 'upload.php';

$action = ! empty( $_REQUEST['action'] ) ? sanitize_text_field( $_REQUEST['action'] ) : '';

switch ( $action ) {
	case 'editattachment':
	case 'edit':
		if ( empty( $_GET['attachment_id'] ) ) {
			jk_redirect( admin_url( 'upload.php?error=deprecated' ) );
			exit;
		}
		$att_id = (int) $_GET['attachment_id'];

		jk_redirect( admin_url( "upload.php?item={$att_id}&error=deprecated" ) );
		exit;

	default:
		jk_redirect( admin_url( 'upload.php?error=deprecated' ) );
		exit;
}
