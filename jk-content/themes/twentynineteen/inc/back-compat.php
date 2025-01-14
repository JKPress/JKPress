<?php
/**
 * Twenty Nineteen back compat functionality
 *
 * Prevents Twenty Nineteen from running on JKPress versions prior to 4.7,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 4.7.
 *
 * @package JKPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0.0
 */

/**
 * Prevent switching to Twenty Nineteen on old versions of JKPress.
 *
 * Switches to the default theme.
 *
 * @since Twenty Nineteen 1.0.0
 */
function twentynineteen_switch_theme() {
	switch_theme( JK_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'twentynineteen_upgrade_notice' );
}
add_action( 'after_switch_theme', 'twentynineteen_switch_theme' );

/**
 * Adds a message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * Twenty Nineteen on JKPress versions prior to 4.7.
 *
 * @since Twenty Nineteen 1.0.0
 *
 * @global string $jk_version JKPress version.
 */
function twentynineteen_upgrade_notice() {
	printf(
		'<div class="error"><p>%s</p></div>',
		sprintf(
			/* translators: %s: JKPress version. */
			__( 'Twenty Nineteen requires at least JKPress version 4.7. You are running version %s. Please upgrade and try again.', 'twentynineteen' ),
			$GLOBALS['jk_version']
		)
	);
}

/**
 * Prevents the Customizer from being loaded on JKPress versions prior to 4.7.
 *
 * @since Twenty Nineteen 1.0.0
 *
 * @global string $jk_version JKPress version.
 */
function twentynineteen_customize() {
	jk_die(
		sprintf(
			/* translators: %s: JKPress version. */
			__( 'Twenty Nineteen requires at least JKPress version 4.7. You are running version %s. Please upgrade and try again.', 'twentynineteen' ),
			$GLOBALS['jk_version']
		),
		'',
		array(
			'back_link' => true,
		)
	);
}
add_action( 'load-customize.php', 'twentynineteen_customize' );

/**
 * Prevents the Theme Preview from being loaded on JKPress versions prior to 4.7.
 *
 * @since Twenty Nineteen 1.0.0
 *
 * @global string $jk_version JKPress version.
 */
function twentynineteen_preview() {
	if ( isset( $_GET['preview'] ) ) {
		jk_die(
			sprintf(
				/* translators: %s: JKPress version. */
				__( 'Twenty Nineteen requires at least JKPress version 4.7. You are running version %s. Please upgrade and try again.', 'twentynineteen' ),
				$GLOBALS['jk_version']
			)
		);
	}
}
add_action( 'template_redirect', 'twentynineteen_preview' );
