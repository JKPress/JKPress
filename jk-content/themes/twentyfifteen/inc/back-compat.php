<?php
/**
 * Twenty Fifteen back compat functionality
 *
 * Prevents Twenty Fifteen from running on JKPress versions prior to 4.1,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 4.1.
 *
 * @package JKPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

/**
 * Prevent switching to Twenty Fifteen on old versions of JKPress.
 *
 * Switches to the default theme.
 *
 * @since Twenty Fifteen 1.0
 */
function twentyfifteen_switch_theme() {
	switch_theme( JK_DEFAULT_THEME, JK_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'twentyfifteen_upgrade_notice' );
}
add_action( 'after_switch_theme', 'twentyfifteen_switch_theme' );

/**
 * Add message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * Twenty Fifteen on JKPress versions prior to 4.1.
 *
 * @since Twenty Fifteen 1.0
 */
function twentyfifteen_upgrade_notice() {
	printf(
		'<div class="error"><p>%s</p></div>',
		sprintf(
			/* translators: %s: JKPress version. */
			__( 'Twenty Fifteen requires at least JKPress version 4.1. You are running version %s. Please upgrade and try again.', 'twentyfifteen' ),
			$GLOBALS['jk_version']
		)
	);
}

/**
 * Prevent the Customizer from being loaded on JKPress versions prior to 4.1.
 *
 * @since Twenty Fifteen 1.0
 */
function twentyfifteen_customize() {
	jk_die(
		sprintf(
			/* translators: %s: JKPress version. */
			__( 'Twenty Fifteen requires at least JKPress version 4.1. You are running version %s. Please upgrade and try again.', 'twentyfifteen' ),
			$GLOBALS['jk_version']
		),
		'',
		array(
			'back_link' => true,
		)
	);
}
add_action( 'load-customize.php', 'twentyfifteen_customize' );

/**
 * Prevent the Theme Preview from being loaded on JKPress versions prior to 4.1.
 *
 * @since Twenty Fifteen 1.0
 */
function twentyfifteen_preview() {
	if ( isset( $_GET['preview'] ) ) {
		jk_die(
			sprintf(
				/* translators: %s: JKPress version. */
				__( 'Twenty Fifteen requires at least JKPress version 4.1. You are running version %s. Please upgrade and try again.', 'twentyfifteen' ),
				$GLOBALS['jk_version']
			)
		);
	}
}
add_action( 'template_redirect', 'twentyfifteen_preview' );
