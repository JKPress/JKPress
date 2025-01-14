<?php
/**
 * Twenty Nineteen: Customizer
 *
 * @package JKPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param JK_Customize_Manager $jk_customize Theme Customizer object.
 */
function twentynineteen_customize_register( $jk_customize ) {
	$jk_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$jk_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$jk_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $jk_customize->selective_refresh ) ) {
		$jk_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'twentynineteen_customize_partial_blogname',
			)
		);
		$jk_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'twentynineteen_customize_partial_blogdescription',
			)
		);
	}

	/**
	 * Primary color.
	 */
	$jk_customize->add_setting(
		'primary_color',
		array(
			'default'           => 'default',
			'transport'         => 'postMessage',
			'sanitize_callback' => 'twentynineteen_sanitize_color_option',
		)
	);

	$jk_customize->add_control(
		'primary_color',
		array(
			'type'     => 'radio',
			'label'    => __( 'Primary Color', 'twentynineteen' ),
			'choices'  => array(
				'default' => _x( 'Default', 'primary color', 'twentynineteen' ),
				'custom'  => _x( 'Custom', 'primary color', 'twentynineteen' ),
			),
			'section'  => 'colors',
			'priority' => 5,
		)
	);

	// Add primary color hue setting and control.
	$jk_customize->add_setting(
		'primary_color_hue',
		array(
			'default'           => 199,
			'transport'         => 'postMessage',
			'sanitize_callback' => 'absint',
		)
	);

	$jk_customize->add_control(
		new JK_Customize_Color_Control(
			$jk_customize,
			'primary_color_hue',
			array(
				'description' => __( 'Apply a custom color for buttons, links, featured images, etc.', 'twentynineteen' ),
				'section'     => 'colors',
				'mode'        => 'hue',
			)
		)
	);

	// Add image filter setting and control.
	$jk_customize->add_setting(
		'image_filter',
		array(
			'default'           => 1,
			'sanitize_callback' => 'absint',
			'transport'         => 'postMessage',
		)
	);

	$jk_customize->add_control(
		'image_filter',
		array(
			'label'   => __( 'Apply a filter to featured images using the primary color', 'twentynineteen' ),
			'section' => 'colors',
			'type'    => 'checkbox',
		)
	);
}
add_action( 'customize_register', 'twentynineteen_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function twentynineteen_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function twentynineteen_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Bind JS handlers to instantly live-preview changes.
 */
function twentynineteen_customize_preview_js() {
	jk_enqueue_script( 'twentynineteen-customize-preview', get_theme_file_uri( '/js/customize-preview.js' ), array( 'customize-preview' ), '20181214', array( 'in_footer' => true ) );
}
add_action( 'customize_preview_init', 'twentynineteen_customize_preview_js' );

/**
 * Load dynamic logic for the customizer controls area.
 */
function twentynineteen_panels_js() {
	jk_enqueue_script( 'twentynineteen-customize-controls', get_theme_file_uri( '/js/customize-controls.js' ), array(), '20181214', array( 'in_footer' => true ) );
}
add_action( 'customize_controls_enqueue_scripts', 'twentynineteen_panels_js' );

/**
 * Sanitize custom color choice.
 *
 * @param string $choice Whether image filter is active.
 * @return string
 */
function twentynineteen_sanitize_color_option( $choice ) {
	$valid = array(
		'default',
		'custom',
	);

	if ( in_array( $choice, $valid, true ) ) {
		return $choice;
	}

	return 'default';
}
