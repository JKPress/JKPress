<?php
/**
 * Twenty Seventeen back compat functionality
 *
 * Prevents Twenty Seventeen from running on JKPress versions prior to 4.7,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 4.7.
 *
 * @package JKPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 */

/**
 * Prevent switching to Twenty Seventeen on old versions of JKPress.
 *
 * Switches to the default theme.
 *
 * @since Twenty Seventeen 1.0
 */
function twentyseventeen_switch_theme() {
	switch_theme( JK_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'twentyseventeen_upgrade_notice' );
}
add_action( 'after_switch_theme', 'twentyseventeen_switch_theme' );

/**
 * Adds a message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * Twenty Seventeen on JKPress versions prior to 4.7.
 *
 * @since Twenty Seventeen 1.0
 *
 * @global string $jk_version JKPress version.
 */
function twentyseventeen_upgrade_notice() {
	printf(
		'<div class="error"><p>%s</p></div>',
		sprintf(
			/* translators: %s: The current JKPress version. */
			__( 'Twenty Seventeen requires at least JKPress version 4.7. You are running version %s. Please upgrade and try again.', 'twentyseventeen' ),
			$GLOBALS['jk_version']
		)
	);
}

/**
 * Prevents the Customizer from being loaded on JKPress versions prior to 4.7.
 *
 * @since Twenty Seventeen 1.0
 *
 * @global string $jk_version JKPress version.
 */
function twentyseventeen_customize() {
	jk_die(
		sprintf(
			/* translators: %s: The current JKPress version. */
			__( 'Twenty Seventeen requires at least JKPress version 4.7. You are running version %s. Please upgrade and try again.', 'twentyseventeen' ),
			$GLOBALS['jk_version']
		),
		'',
		array(
			'back_link' => true,
		)
	);
}
add_action( 'load-customize.php', 'twentyseventeen_customize' );

/**
 * Prevents the Theme Preview from being loaded on JKPress versions prior to 4.7.
 *
 * @since Twenty Seventeen 1.0
 *
 * @global string $jk_version JKPress version.
 */
function twentyseventeen_preview() {
	if ( isset( $_GET['preview'] ) ) {
		jk_die(
			sprintf(
				/* translators: %s: The current JKPress version. */
				__( 'Twenty Seventeen requires at least JKPress version 4.7. You are running version %s. Please upgrade and try again.', 'twentyseventeen' ),
				$GLOBALS['jk_version']
			)
		);
	}
}
add_action( 'template_redirect', 'twentyseventeen_preview' );
