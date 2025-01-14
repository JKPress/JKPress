<?php
/**
 * Comment Moderation Administration Screen.
 *
 * Redirects to edit-comments.php?comment_status=moderated.
 *
 * @package JKPress
 * @subpackage Administration
 */
require_once dirname( __DIR__ ) . '/jk-load.php';
jk_redirect( admin_url( 'edit-comments.php?comment_status=moderated' ) );
exit;
