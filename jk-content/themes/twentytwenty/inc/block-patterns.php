<?php
/**
 * Block Patterns
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern/
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern_category/
 *
 * @package JKPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.6
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {

	register_block_pattern_category(
		'twentytwenty',
		array( 'label' => esc_html__( 'Twenty Twenty', 'twentytwenty' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {

	// Call to Action.
	register_block_pattern(
		'twentytwenty/call-to-action',
		array(
			'title'         => esc_html__( 'Call to Action', 'twentytwenty' ),
			'categories'    => array( 'twentytwenty' ),
			'viewportWidth' => 1400,
			'content'       => implode(
				'',
				array(
					'<!-- jk:group {"align":"wide","style":{"color":{"background":"#ffffff"}}} -->',
					'<div class="jk-block-group alignwide has-background" style="background-color:#ffffff"><div class="jk-block-group__inner-container"><!-- jk:group -->',
					'<div class="jk-block-group"><div class="jk-block-group__inner-container"><!-- jk:heading {"align":"center"} -->',
					'<h2 class="has-text-align-center">' . esc_html__( 'Support the Museum and Get Exclusive Offers', 'twentytwenty' ) . '</h2>',
					'<!-- /jk:heading -->',
					'<!-- jk:paragraph {"align":"center"} -->',
					'<p class="has-text-align-center">' . esc_html__( 'Members get access to exclusive exhibits and sales. Our memberships cost $99.99 and are billed annually.', 'twentytwenty' ) . '</p>',
					'<!-- /jk:paragraph -->',
					'<!-- jk:button {"align":"center","className":"is-style-outline"} -->',
					'<div class="jk-block-button aligncenter is-style-outline"><a class="jk-block-button__link" href="#">' . esc_html__( 'Become a Member', 'twentytwenty' ) . '</a></div>',
					'<!-- /jk:button --></div></div>',
					'<!-- /jk:group --></div></div>',
					'<!-- /jk:group -->',
				)
			),
		)
	);

	// Double Call to Action.
	register_block_pattern(
		'twentytwenty/double-call-to-action',
		array(
			'title'         => esc_html__( 'Double Call to Action', 'twentytwenty' ),
			'categories'    => array( 'twentytwenty' ),
			'viewportWidth' => 1400,
			'content'       => implode(
				'',
				array(
					'<!-- jk:columns {"align":"wide"} -->',
					'<div class="jk-block-columns alignwide"><!-- jk:column -->',
					'<div class="jk-block-column"><!-- jk:group {"style":{"color":{"background":"#ffffff"}}} -->',
					'<div class="jk-block-group has-background" style="background-color:#ffffff"><div class="jk-block-group__inner-container"><!-- jk:heading {"align":"center"} -->',
					'<h2 class="has-text-align-center">' . esc_html__( 'The Museum', 'twentytwenty' ) . '</h2>',
					'<!-- /jk:heading -->',
					'<!-- jk:paragraph {"align":"center"} -->',
					'<p class="has-text-align-center">' . esc_html__( 'Award-winning exhibitions featuring internationally-renowned artists.', 'twentytwenty' ) . '</p>',
					'<!-- /jk:paragraph -->',
					'<!-- jk:buttons {"align":"center"} -->',
					'<div class="jk-block-buttons aligncenter"><!-- jk:button {"className":"is-style-outline"} -->',
					'<div class="jk-block-button is-style-outline"><a class="jk-block-button__link">' . esc_html__( 'Read More', 'twentytwenty' ) . '</a></div>',
					'<!-- /jk:button --></div>',
					'<!-- /jk:buttons --></div></div>',
					'<!-- /jk:group --></div>',
					'<!-- /jk:column -->',
					'<!-- jk:column -->',
					'<div class="jk-block-column"><!-- jk:group {"style":{"color":{"background":"#ffffff"}}} -->',
					'<div class="jk-block-group has-background" style="background-color:#ffffff"><div class="jk-block-group__inner-container"><!-- jk:heading {"align":"center"} -->',
					'<h2 class="has-text-align-center">' . esc_html__( 'The Store', 'twentytwenty' ) . '</h2>',
					'<!-- /jk:heading -->',
					'<!-- jk:paragraph {"align":"center"} -->',
					'<p class="has-text-align-center">' . esc_html__( 'An awe-inspiring collection of books, prints, and gifts from our exhibitions.', 'twentytwenty' ) . '</p>',
					'<!-- /jk:paragraph -->',
					'<!-- jk:buttons {"align":"center"} -->',
					'<div class="jk-block-buttons aligncenter"><!-- jk:button {"className":"is-style-outline"} -->',
					'<div class="jk-block-button is-style-outline"><a class="jk-block-button__link">' . esc_html__( 'Shop Now', 'twentytwenty' ) . '</a></div>',
					'<!-- /jk:button --></div>',
					'<!-- /jk:buttons --></div></div>',
					'<!-- /jk:group --></div>',
					'<!-- /jk:column --></div>',
					'<!-- /jk:columns -->',
				)
			),
		)
	);

	// Event Details.
	register_block_pattern(
		'twentytwenty/event-details',
		array(
			'title'         => esc_html__( 'Event Details', 'twentytwenty' ),
			'categories'    => array( 'twentytwenty' ),
			'viewportWidth' => 1400,
			'content'       => implode(
				'',
				array(
					'<!-- jk:group {"align":"wide","backgroundColor":"primary"} -->',
					'<div class="jk-block-group alignwide has-primary-background-color has-background"><div class="jk-block-group__inner-container"><!-- jk:columns -->',
					'<div class="jk-block-columns"><!-- jk:column -->',
					'<div class="jk-block-column"><!-- jk:paragraph {"align":"center","textColor":"background","fontSize":"large"} -->',
					'<p class="has-text-align-center has-background-color has-text-color has-large-font-size">' . jk_kses_post( __( '<em>Dates</em><br>Aug 1 — Dec 1', 'twentytwenty' ) ) . '</p>',
					'<!-- /jk:paragraph --></div>',
					'<!-- /jk:column -->',
					'<!-- jk:column -->',
					'<div class="jk-block-column"><!-- jk:paragraph {"align":"center","textColor":"background","fontSize":"large"} -->',
					'<p class="has-text-align-center has-background-color has-text-color has-large-font-size">' . jk_kses_post( __( '<em>Location</em><br>Exhibit Hall B', 'twentytwenty' ) ) . '</p>',
					'<!-- /jk:paragraph --></div>',
					'<!-- /jk:column -->',
					'<!-- jk:column -->',
					'<div class="jk-block-column"><!-- jk:paragraph {"align":"center","textColor":"background","fontSize":"large"} -->',
					'<p class="has-text-align-center has-background-color has-text-color has-large-font-size">' . jk_kses_post( __( '<em>Price</em><br>Included', 'twentytwenty' ) ) . '</p>',
					'<!-- /jk:paragraph --></div>',
					'<!-- /jk:column --></div>',
					'<!-- /jk:columns --></div></div>',
					'<!-- /jk:group -->',
				)
			),
		)
	);

	// Featured Content.
	register_block_pattern(
		'twentytwenty/featured-content',
		array(
			'title'         => esc_html__( 'Featured Content', 'twentytwenty' ),
			'categories'    => array( 'twentytwenty' ),
			'viewportWidth' => 1400,
			'content'       => implode(
				'',
				array(
					'<!-- jk:columns {"align":"wide"} -->',
					'<div class="jk-block-columns alignwide"><!-- jk:column -->',
					'<div class="jk-block-column"><!-- jk:image {"sizeSlug":"full"} -->',
					'<figure class="jk-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/2020-three-quarters-1.png" alt="' . esc_attr__( 'Abstract Rectangles', 'twentytwenty' ) . '"/></figure>',
					'<!-- /jk:image -->',
					'<!-- jk:heading -->',
					'<h2>' . esc_html__( 'Works and Days', 'twentytwenty' ) . '</h2>',
					'<!-- /jk:heading -->',
					'<!-- jk:paragraph {"fontSize":"larger"} -->',
					'<p class="has-larger-font-size">' . esc_html__( 'August 1 — December 1', 'twentytwenty' ) . '</p>',
					'<!-- /jk:paragraph -->',
					'<!-- jk:button {"align":"left","className":"is-style-outline"} -->',
					'<div class="jk-block-button alignleft is-style-outline"><a class="jk-block-button__link" href="#">' . esc_html__( 'Read More', 'twentytwenty' ) . '</a></div>',
					'<!-- /jk:button --></div>',
					'<!-- /jk:column -->',
					'<!-- jk:column -->',
					'<div class="jk-block-column"><!-- jk:image {sizeSlug":"full"} -->',
					'<figure class="jk-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/2020-three-quarters-2.png" alt="' . esc_attr__( 'Abstract Rectangles', 'twentytwenty' ) . '"/></figure>',
					'<!-- /jk:image -->',
					'<!-- jk:heading -->',
					'<h2>' . esc_html__( 'The Life I Deserve', 'twentytwenty' ) . '</h2>',
					'<!-- /jk:heading -->',
					'<!-- jk:paragraph {"fontSize":"larger"} -->',
					'<p class="has-larger-font-size">' . esc_html__( 'August 1 — December 1', 'twentytwenty' ) . '</p>',
					'<!-- /jk:paragraph -->',
					'<!-- jk:button {"align":"left","className":"is-style-outline"} -->',
					'<div class="jk-block-button alignleft is-style-outline"><a class="jk-block-button__link" href="#">' . esc_html__( 'Read More', 'twentytwenty' ) . '</a></div>',
					'<!-- /jk:button --></div>',
					'<!-- /jk:column --></div>',
					'<!-- /jk:columns -->',
				)
			),
		)
	);

	// Introduction.
	register_block_pattern(
		'twentytwenty/introduction',
		array(
			'title'         => esc_html__( 'Introduction', 'twentytwenty' ),
			'categories'    => array( 'twentytwenty' ),
			'viewportWidth' => 1400,
			'content'       => implode(
				'',
				array(
					'<!-- jk:heading {"align":"center"} -->',
					'<h2 class="has-text-align-center">' . esc_html__( 'The Premier Destination for Modern Art in Sweden', 'twentytwenty' ) . '</h2>',
					'<!-- /jk:heading -->',
					'<!-- jk:paragraph {"dropCap":true} -->',
					'<p class="has-drop-cap">' . esc_html__( 'With seven floors of striking architecture, UMoMA shows exhibitions of international contemporary art, sometimes along with art historical retrospectives. Existential, political, and philosophical issues are intrinsic to our program. As visitor, you are invited to guided tours artist talks, lectures, film screenings, and other events with free admission.', 'twentytwenty' ) . '</p>',
					'<!-- /jk:paragraph -->',
				)
			),
		)
	);
}
