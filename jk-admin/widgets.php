<?php
/**
 * Widget administration screen.
 *
 * @package JKPress
 * @subpackage Administration
 */

/** JKPress Administration Bootstrap */
require_once __DIR__ . '/admin.php';

/** JKPress Administration Widgets API */
require_once ABSPATH . 'jk-admin/includes/widgets.php';

if ( ! current_user_can( 'edit_theme_options' ) ) {
	jk_die(
		'<h1>' . __( 'You need a higher level of permission.' ) . '</h1>' .
		'<p>' . __( 'Sorry, you are not allowed to edit theme options on this site.' ) . '</p>',
		403
	);
}

if ( ! current_theme_supports( 'widgets' ) ) {
	jk_die( __( 'The theme you are currently using is not widget-aware, meaning that it has no sidebars that you are able to change. For information on making your theme widget-aware, please <a href="https://developer.wordpress.org/themes/functionality/widgets/">follow these instructions</a>.' ) );
}

// Used in the HTML title tag.
$title       = __( 'Widgets' );
$parent_file = 'themes.php';

if ( jk_use_widgets_block_editor() ) {
	require ABSPATH . 'jk-admin/widgets-form-blocks.php';
} else {
	require ABSPATH . 'jk-admin/widgets-form.php';
}
