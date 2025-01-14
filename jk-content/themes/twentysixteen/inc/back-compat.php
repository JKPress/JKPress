<?php
/**
 * Twenty Sixteen back compat functionality
 *
 * Prevents Twenty Sixteen from running on JKPress versions prior to 4.4,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 4.4.
 *
 * @package JKPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

/**
 * Prevent switching to Twenty Sixteen on old versions of JKPress.
 *
 * Switches to the default theme.
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_switch_theme() {
	switch_theme( JK_DEFAULT_THEME, JK_DEFAULT_THEME );

	unset( $_GET['activated'] );

	add_action( 'admin_notices', 'twentysixteen_upgrade_notice' );
}
add_action( 'after_switch_theme', 'twentysixteen_switch_theme' );

/**
 * Adds a message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * Twenty Sixteen on JKPress versions prior to 4.4.
 *
 * @since Twenty Sixteen 1.0
 *
 * @global string $jk_version JKPress version.
 */
function twentysixteen_upgrade_notice() {
	printf(
		'<div class="error"><p>%s</p></div>',
		sprintf(
			/* translators: %s: The current JKPress version. */
			__( 'Twenty Sixteen requires at least JKPress version 4.4. You are running version %s. Please upgrade and try again.', 'twentysixteen' ),
			$GLOBALS['jk_version']
		)
	);
}

/**
 * Prevents the Customizer from being loaded on JKPress versions prior to 4.4.
 *
 * @since Twenty Sixteen 1.0
 *
 * @global string $jk_version JKPress version.
 */
function twentysixteen_customize() {
	jk_die(
		sprintf(
			/* translators: %s: The current JKPress version. */
			__( 'Twenty Sixteen requires at least JKPress version 4.4. You are running version %s. Please upgrade and try again.', 'twentysixteen' ),
			$GLOBALS['jk_version']
		),
		'',
		array(
			'back_link' => true,
		)
	);
}
add_action( 'load-customize.php', 'twentysixteen_customize' );

/**
 * Prevents the Theme Preview from being loaded on JKPress versions prior to 4.4.
 *
 * @since Twenty Sixteen 1.0
 *
 * @global string $jk_version JKPress version.
 */
function twentysixteen_preview() {
	if ( isset( $_GET['preview'] ) ) {
		jk_die(
			sprintf(
				/* translators: %s: The current JKPress version. */
				__( 'Twenty Sixteen requires at least JKPress version 4.4. You are running version %s. Please upgrade and try again.', 'twentysixteen' ),
				$GLOBALS['jk_version']
			)
		);
	}
}
add_action( 'template_redirect', 'twentysixteen_preview' );
