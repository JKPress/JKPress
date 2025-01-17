<?php
/**
 * Twenty Seventeen: Customizer
 *
 * @package JKPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param JK_Customize_Manager $jk_customize Theme Customizer object.
 */
function twentyseventeen_customize_register( $jk_customize ) {
	$jk_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$jk_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$jk_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	$jk_customize->selective_refresh->add_partial(
		'blogname',
		array(
			'selector'        => '.site-title a',
			'render_callback' => 'twentyseventeen_customize_partial_blogname',
		)
	);
	$jk_customize->selective_refresh->add_partial(
		'blogdescription',
		array(
			'selector'        => '.site-description',
			'render_callback' => 'twentyseventeen_customize_partial_blogdescription',
		)
	);

	/**
	 * Custom colors.
	 */
	$jk_customize->add_setting(
		'colorscheme',
		array(
			'default'           => 'light',
			'transport'         => 'postMessage',
			'sanitize_callback' => 'twentyseventeen_sanitize_colorscheme',
		)
	);

	$jk_customize->add_setting(
		'colorscheme_hue',
		array(
			'default'           => 250,
			'transport'         => 'postMessage',
			'sanitize_callback' => 'absint', // The hue is stored as a positive integer.
		)
	);

	$jk_customize->add_control(
		'colorscheme',
		array(
			'type'     => 'radio',
			'label'    => __( 'Color Scheme', 'twentyseventeen' ),
			'choices'  => array(
				'light'  => __( 'Light', 'twentyseventeen' ),
				'dark'   => __( 'Dark', 'twentyseventeen' ),
				'custom' => __( 'Custom', 'twentyseventeen' ),
			),
			'section'  => 'colors',
			'priority' => 5,
		)
	);

	$jk_customize->add_control(
		new JK_Customize_Color_Control(
			$jk_customize,
			'colorscheme_hue',
			array(
				'mode'     => 'hue',
				'section'  => 'colors',
				'priority' => 6,
			)
		)
	);

	/**
	 * Theme options.
	 */
	$jk_customize->add_section(
		'theme_options',
		array(
			'title'    => __( 'Theme Options', 'twentyseventeen' ),
			'priority' => 130, // Before Additional CSS.
		)
	);

	$jk_customize->add_setting(
		'page_layout',
		array(
			'default'           => 'two-column',
			'sanitize_callback' => 'twentyseventeen_sanitize_page_layout',
			'transport'         => 'postMessage',
		)
	);

	$jk_customize->add_control(
		'page_layout',
		array(
			'label'           => __( 'Page Layout', 'twentyseventeen' ),
			'section'         => 'theme_options',
			'type'            => 'radio',
			'description'     => __( 'When the two-column layout is assigned, the page title is in one column and content is in the other.', 'twentyseventeen' ),
			'choices'         => array(
				'one-column' => __( 'One Column', 'twentyseventeen' ),
				'two-column' => __( 'Two Column', 'twentyseventeen' ),
			),
			'active_callback' => 'twentyseventeen_is_view_with_layout_option',
		)
	);

	/**
	 * Filters the number of front page sections in Twenty Seventeen.
	 *
	 * @since Twenty Seventeen 1.0
	 *
	 * @param int $num_sections Number of front page sections.
	 */
	$num_sections = apply_filters( 'twentyseventeen_front_page_sections', 4 );

	// Create a setting and control for each of the sections available in the theme.
	for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
		$jk_customize->add_setting(
			'panel_' . $i,
			array(
				'default'           => false,
				'sanitize_callback' => 'absint',
				'transport'         => 'postMessage',
			)
		);

		$jk_customize->add_control(
			'panel_' . $i,
			array(
				/* translators: %d: The front page section number. */
				'label'           => sprintf( __( 'Front Page Section %d Content', 'twentyseventeen' ), $i ),
				'description'     => ( 1 !== $i ? '' : __( 'Select pages to feature in each area from the dropdowns. Add an image to a section by setting a featured image in the page editor. Empty sections will not be displayed.', 'twentyseventeen' ) ),
				'section'         => 'theme_options',
				'type'            => 'dropdown-pages',
				'allow_addition'  => true,
				'active_callback' => 'twentyseventeen_is_frontpage',
			)
		);

		$jk_customize->selective_refresh->add_partial(
			'panel_' . $i,
			array(
				'selector'            => '#panel' . $i,
				'render_callback'     => 'twentyseventeen_front_page_section',
				'container_inclusive' => true,
			)
		);
	}
}
add_action( 'customize_register', 'twentyseventeen_customize_register' );

/**
 * Sanitize the page layout options.
 *
 * @param string $input Page layout.
 */
function twentyseventeen_sanitize_page_layout( $input ) {
	$valid = array(
		'one-column' => __( 'One Column', 'twentyseventeen' ),
		'two-column' => __( 'Two Column', 'twentyseventeen' ),
	);

	if ( array_key_exists( $input, $valid ) ) {
		return $input;
	}

	return '';
}

/**
 * Sanitize the colorscheme.
 *
 * @param string $input Color scheme.
 */
function twentyseventeen_sanitize_colorscheme( $input ) {
	$valid = array( 'light', 'dark', 'custom' );

	if ( in_array( $input, $valid, true ) ) {
		return $input;
	}

	return 'light';
}

/**
 * Render the site title for the selective refresh partial.
 *
 * @since Twenty Seventeen 1.0
 *
 * @see twentyseventeen_customize_register()
 *
 * @return void
 */
function twentyseventeen_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @since Twenty Seventeen 1.0
 *
 * @see twentyseventeen_customize_register()
 *
 * @return void
 */
function twentyseventeen_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Return whether we're previewing the front page and it's a static page.
 *
 * This function is an alias for twentyseventeen_is_frontpage().
 *
 * @since Twenty Seventeen 1.0
 * @since Twenty Seventeen 3.3 Converted function to an alias.
 *
 * @return bool Whether the current page is the front page and static.
 */
function twentyseventeen_is_static_front_page() {
	return twentyseventeen_is_frontpage();
}

/**
 * Return whether we're on a view that supports a one or two column layout.
 */
function twentyseventeen_is_view_with_layout_option() {
	// This option is available on all pages. It's also available on archives when there isn't a sidebar.
	return ( is_page() || ( is_archive() && ! is_active_sidebar( 'sidebar-1' ) ) );
}

/**
 * Bind JS handlers to instantly live-preview changes.
 */
function twentyseventeen_customize_preview_js() {
	jk_enqueue_script( 'twentyseventeen-customize-preview', get_theme_file_uri( '/assets/js/customize-preview.js' ), array( 'customize-preview' ), '20161002', array( 'in_footer' => true ) );
}
add_action( 'customize_preview_init', 'twentyseventeen_customize_preview_js' );

/**
 * Load dynamic logic for the customizer controls area.
 */
function twentyseventeen_panels_js() {
	jk_enqueue_script( 'twentyseventeen-customize-controls', get_theme_file_uri( '/assets/js/customize-controls.js' ), array(), '20161020', array( 'in_footer' => true ) );
}
add_action( 'customize_controls_enqueue_scripts', 'twentyseventeen_panels_js' );
