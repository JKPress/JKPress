<?php
/**
 * Twenty Thirteen back compat functionality
 *
 * Prevents Twenty Thirteen from running on JKPress versions prior to 3.6,
 * since this theme is not meant to be backward compatible and relies on
 * many new functions and markup changes introduced in 3.6.
 *
 * @package JKPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

/**
 * Prevent switching to Twenty Thirteen on old versions of JKPress.
 *
 * Switches to the default theme.
 *
 * @since Twenty Thirteen 1.0
 */
function twentythirteen_switch_theme() {
	switch_theme( JK_DEFAULT_THEME, JK_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'twentythirteen_upgrade_notice' );
}
add_action( 'after_switch_theme', 'twentythirteen_switch_theme' );

/**
 * Add message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * Twenty Thirteen on JKPress versions prior to 3.6.
 *
 * @since Twenty Thirteen 1.0
 */
function twentythirteen_upgrade_notice() {
	printf(
		'<div class="error"><p>%s</p></div>',
		sprintf(
			/* translators: %s: JKPress version. */
			__( 'Twenty Thirteen requires at least JKPress version 3.6. You are running version %s. Please upgrade and try again.', 'twentythirteen' ),
			$GLOBALS['jk_version']
		)
	);
}

/**
 * Prevent the Customizer from being loaded on JKPress versions prior to 3.6.
 *
 * @since Twenty Thirteen 1.0
 */
function twentythirteen_customize() {
	jk_die(
		sprintf(
			/* translators: %s: JKPress version. */
			__( 'Twenty Thirteen requires at least JKPress version 3.6. You are running version %s. Please upgrade and try again.', 'twentythirteen' ),
			$GLOBALS['jk_version']
		),
		'',
		array(
			'back_link' => true,
		)
	);
}
add_action( 'load-customize.php', 'twentythirteen_customize' );

/**
 * Prevent the Theme Preview from being loaded on JKPress versions prior to 3.4.
 *
 * @since Twenty Thirteen 1.0
 */
function twentythirteen_preview() {
	if ( isset( $_GET['preview'] ) ) {
		jk_die(
			sprintf(
				/* translators: %s: JKPress version. */
				__( 'Twenty Thirteen requires at least JKPress version 3.6. You are running version %s. Please upgrade and try again.', 'twentythirteen' ),
				$GLOBALS['jk_version']
			)
		);
	}
}
add_action( 'template_redirect', 'twentythirteen_preview' );
