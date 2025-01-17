<?php
/**
 * Block Patterns
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern/
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern_category/
 *
 * @package JKPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.8
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {

	register_block_pattern_category(
		'twentynineteen',
		array( 'label' => esc_html__( 'Twenty Nineteen', 'twentynineteen' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {

	// About.
	register_block_pattern(
		'twentynineteen/about',
		array(
			'title'      => esc_html__( 'About', 'twentynineteen' ),
			'categories' => array( 'twentynineteen' ),
			'content'    => implode(
				'',
				array(
					'<!-- jk:paragraph {"fontSize":"huge","style":{"typography":{"lineHeight":"1.3"}}} -->',
					'<p class="has-huge-font-size" style="line-height:1.3">' . esc_html__( 'Advocating for Businesses and Entrepreneurs since 2014', 'twentynineteen' ) . '</p>',
					'<!-- /jk:paragraph -->',
					'<!-- jk:paragraph -->',
					'<p>' . esc_html__( 'Eva Young Consulting was founded in 2014 to meet the needs of small businesses in the San Francisco Bay Area. We help startups define a clear brand identity and digital strategy that will carry them through their financing rounds and scale as their business grows. Discover how we can boost your brand with a unique and powerful digital marketing strategy.', 'twentynineteen' ) . '</p>',
					'<!-- /jk:paragraph -->',
					'<!-- jk:buttons -->',
					'<div class="jk-block-buttons"><!-- jk:button {"backgroundColor":"dark-gray"} -->',
					'<div class="jk-block-button"><a class="jk-block-button__link has-dark-gray-background-color has-background">' . esc_html__( 'Learn More', 'twentynineteen' ) . '</a></div>',
					'<!-- /jk:button --></div>',
					'<!-- /jk:buttons -->',
				)
			),
		)
	);

	// Get In Touch.
	register_block_pattern(
		'twentynineteen/get-in-touch',
		array(
			'title'      => esc_html__( 'Get In Touch', 'twentynineteen' ),
			'categories' => array( 'twentynineteen' ),
			'content'    => implode(
				'',
				array(
					'<!-- jk:paragraph {"fontSize":"huge"} -->',
					'<p class="has-huge-font-size">' . esc_html__( 'Get In Touch', 'twentynineteen' ) . '</p>',
					'<!-- /jk:paragraph -->',
					'<!-- jk:columns -->',
					'<div class="jk-block-columns"><!-- jk:column -->',
					'<div class="jk-block-column"><!-- jk:paragraph -->',
					'<p>' . esc_html__( '20 Cooper Avenue', 'twentynineteen' ) . '<br>' . esc_html__( 'New York, New York 10023', 'twentynineteen' ) . '</p>',
					'<!-- /jk:paragraph --></div>',
					'<!-- /jk:column -->',
					'<!-- jk:column -->',
					'<div class="jk-block-column"><!-- jk:paragraph -->',
					'<p>' . esc_html__( '(555) 555-5555', 'twentynineteen' ) . '<br><a href="mailto:example@example.com">' . esc_html__( 'example@example.com', 'twentynineteen' ) . '</a></p>',
					'<!-- /jk:paragraph --></div>',
					'<!-- /jk:column --></div>',
					'<!-- /jk:columns -->',
					'<!-- jk:buttons -->',
					'<div class="jk-block-buttons"><!-- jk:button {"backgroundColor":"dark-gray"} -->',
					'<div class="jk-block-button"><a class="jk-block-button__link has-dark-gray-background-color has-background">' . esc_html__( 'Contact Us', 'twentynineteen' ) . '</a></div>',
					'<!-- /jk:button --></div>',
					'<!-- /jk:buttons -->',
				)
			),
		)
	);

	// Services.
	register_block_pattern(
		'twentynineteen/services',
		array(
			'title'      => esc_html__( 'Services', 'twentynineteen' ),
			'categories' => array( 'twentynineteen' ),
			'content'    => implode(
				'',
				array(
					'<!-- jk:heading -->',
					'<h2>' . esc_html__( 'Services', 'twentynineteen' ) . '</h2>',
					'<!-- /jk:heading -->',
					'<!-- jk:columns {"className":"has-2-columns"} -->',
					'<div class="jk-block-columns has-2-columns"><!-- jk:column -->',
					'<div class="jk-block-column"><!-- jk:media-text {"mediaLink":"' . esc_url( get_template_directory_uri() ) . '/images/pattern_01.jpg","mediaType":"image","mediaWidth":10,"isStackedOnMobile":false} -->',
					'<div class="jk-block-media-text alignwide" style="grid-template-columns:10% auto"><figure class="jk-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/images/pattern_01.jpg" alt="' . esc_html__( 'Gradient', 'twentynineteen' ) . '"/></figure><div class="jk-block-media-text__content"><!-- jk:paragraph -->',
					'<p>' . esc_html__( 'Website Design', 'twentynineteen' ) . '</p>',
					'<!-- /jk:paragraph --></div></div>',
					'<!-- /jk:media-text -->',
					'<!-- jk:media-text {"mediaLink":"' . esc_url( get_template_directory_uri() ) . '/images/pattern_02.jpg","mediaType":"image","mediaWidth":10,"isStackedOnMobile":false} -->',
					'<div class="jk-block-media-text alignwide" style="grid-template-columns:10% auto"><figure class="jk-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/images/pattern_02.jpg" alt="' . esc_html__( 'Gradient', 'twentynineteen' ) . '"/></figure><div class="jk-block-media-text__content"><!-- jk:paragraph -->',
					'<p>' . esc_html__( 'Mobile', 'twentynineteen' ) . '</p>',
					'<!-- /jk:paragraph --></div></div>',
					'<!-- /jk:media-text -->',
					'<!-- jk:media-text {"mediaLink":"' . esc_url( get_template_directory_uri() ) . '/images/pattern_03.jpg","mediaType":"image","mediaWidth":10,"isStackedOnMobile":false} -->',
					'<div class="jk-block-media-text alignwide" style="grid-template-columns:10% auto"><figure class="jk-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/images/pattern_03.jpg" alt="' . esc_html__( 'Gradient', 'twentynineteen' ) . '"/></figure><div class="jk-block-media-text__content"><!-- jk:paragraph -->',
					'<p>' . esc_html__( 'Social Media', 'twentynineteen' ) . '</p>',
					'<!-- /jk:paragraph --></div></div>',
					'<!-- /jk:media-text --></div>',
					'<!-- /jk:column -->',
					'<!-- jk:column -->',
					'<div class="jk-block-column"><!-- jk:media-text {"mediaLink":"' . esc_url( get_template_directory_uri() ) . '/images/pattern_03.jpg","mediaType":"image","mediaWidth":10,"isStackedOnMobile":false} -->',
					'<div class="jk-block-media-text alignwide" style="grid-template-columns:10% auto"><figure class="jk-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/images/pattern_03.jpg" alt="' . esc_html__( 'Gradient', 'twentynineteen' ) . '"/></figure><div class="jk-block-media-text__content"><!-- jk:paragraph -->',
					'<p>' . esc_html__( 'Marketing', 'twentynineteen' ) . '</p>',
					'<!-- /jk:paragraph --></div></div>',
					'<!-- /jk:media-text -->',
					'<!-- jk:media-text {"mediaLink":"' . esc_url( get_template_directory_uri() ) . '/images/pattern_04.jpg","mediaType":"image","mediaWidth":10,"isStackedOnMobile":false} -->',
					'<div class="jk-block-media-text alignwide" style="grid-template-columns:10% auto"><figure class="jk-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/images/pattern_04.jpg" alt="' . esc_html__( 'Gradient', 'twentynineteen' ) . '"/></figure><div class="jk-block-media-text__content"><!-- jk:paragraph -->',
					'<p>' . esc_html__( 'Copywriting', 'twentynineteen' ) . '</p>',
					'<!-- /jk:paragraph --></div></div>',
					'<!-- /jk:media-text -->',
					'<!-- jk:media-text {"mediaLink":"' . esc_url( get_template_directory_uri() ) . '/images/pattern_01.jpg","mediaType":"image","mediaWidth":10,"isStackedOnMobile":false} -->',
					'<div class="jk-block-media-text alignwide" style="grid-template-columns:10% auto"><figure class="jk-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/images/pattern_01.jpg" alt="' . esc_html__( 'Gradient', 'twentynineteen' ) . '"/></figure><div class="jk-block-media-text__content"><!-- jk:paragraph -->',
					'<p>' . esc_html__( 'Content Strategy', 'twentynineteen' ) . '</p>',
					'<!-- /jk:paragraph --></div></div>',
					'<!-- /jk:media-text --></div>',
					'<!-- /jk:column --></div>',
					'<!-- /jk:columns -->',
				)
			),
		)
	);

	// Team.
	register_block_pattern(
		'twentynineteen/team',
		array(
			'title'         => esc_html__( 'Team', 'twentynineteen' ),
			'categories'    => array( 'twentynineteen' ),
			'viewportWidth' => 1400,
			'content'       => implode(
				'',
				array(
					'<!-- jk:heading -->',
					'<h2>' . esc_html__( 'Team', 'twentynineteen' ) . '</h2>',
					'<!-- /jk:heading -->',
					'<!-- jk:media-text {"mediaType":"image","mediaWidth":28,"imageFill":true} -->',
					'<div class="jk-block-media-text alignwide is-stacked-on-mobile is-image-fill" style="grid-template-columns:28% auto"><figure class="jk-block-media-text__media" style="background-image:url(' . esc_url( get_template_directory_uri() ) . '/images/pattern_01.jpg);background-position:50% 50%"><img src="' . esc_url( get_template_directory_uri() ) . '/images/pattern_01.jpg" alt="' . esc_html__( 'Gradient', 'twentynineteen' ) . '"/></figure><div class="jk-block-media-text__content"><!-- jk:heading {"level":3} -->',
					'<h3>' . esc_html__( 'Eva Young', 'twentynineteen' ) . '</h3>',
					'<!-- /jk:heading -->',
					'<!-- jk:paragraph -->',
					'<p>' . esc_html__( 'Eva Young grew up working alongside her parents at their restaurant in Queens, NY. She opened Eva Young Consulting in 2014 to help small businesses like her parents’ restaurant adapt to the digital age.', 'twentynineteen' ) . '</p>',
					'<!-- /jk:paragraph --></div></div>',
					'<!-- /jk:media-text -->',
					'<!-- jk:media-text {"mediaType":"image","mediaWidth":28,"imageFill":true} -->',
					'<div class="jk-block-media-text alignwide is-stacked-on-mobile is-image-fill" style="grid-template-columns:28% auto"><figure class="jk-block-media-text__media" style="background-image:url(' . esc_url( get_template_directory_uri() ) . '/images/pattern_02.jpg);background-position:50% 50%"><img src="' . esc_url( get_template_directory_uri() ) . '/images/pattern_02.jpg" alt="' . esc_html__( 'Gradient', 'twentynineteen' ) . '"/></figure><div class="jk-block-media-text__content"><!-- jk:heading {"level":3} -->',
					'<h3>' . esc_html__( 'Doug Watson', 'twentynineteen' ) . '</h3>',
					'<!-- /jk:heading -->',
					'<!-- jk:paragraph -->',
					'<p>' . esc_html__( 'Oddly enough, Doug Watson also grew up working alongside his parents at a family-owned restaurant in Queens, NY. He &nbsp;worked on digital campaigns for Fortune 500 Companies before joining Eva Green Consulting.', 'twentynineteen' ) . '</p>',
					'<!-- /jk:paragraph --></div></div>',
					'<!-- /jk:media-text -->',
				)
			),
		)
	);

	// What We Do.
	register_block_pattern(
		'twentynineteen/what-we-do',
		array(
			'title'         => esc_html__( 'What We Do', 'twentynineteen' ),
			'categories'    => array( 'twentynineteen' ),
			'viewportWidth' => 1400,
			'content'       => implode(
				'',
				array(
					'<!-- jk:heading -->',
					'<h2>' . esc_html__( 'What We Do', 'twentynineteen' ) . '</h2>',
					'<!-- /jk:heading -->',
					'<!-- jk:pullquote {"align":"wide","className":"is-style-solid-color"} -->',
					'<figure class="jk-block-pullquote alignwide is-style-solid-color"><blockquote><p>' . esc_html__( 'Redefine brands', 'twentynineteen' ) . '</p><cite>' . esc_html__( 'We help startups define (or refine) a clear brand identity.', 'twentynineteen' ) . '</cite></blockquote></figure>',
					'<!-- /jk:pullquote -->',
					'<!-- jk:pullquote {"mainColor":"dark-gray","customTextColor":"#ffffff","align":"wide","className":"is-style-solid-color"} -->',
					'<figure class="jk-block-pullquote alignwide has-background has-dark-gray-background-color is-style-solid-color"><blockquote class="has-text-color" style="color:#ffffff"><p>' . esc_html__( 'Activate new customers', 'twentynineteen' ) . '</p><cite>' . esc_html__( 'We help businesses grow.', 'twentynineteen' ) . '</cite></blockquote></figure>',
					'<!-- /jk:pullquote -->',
					'<!-- jk:pullquote {"customMainColor":"#f7f7f7","customTextColor":"#111111","align":"wide","className":"is-style-solid-color"} -->',
					'<figure class="jk-block-pullquote alignwide has-background is-style-solid-color" style="background-color:#f7f7f7"><blockquote class="has-text-color" style="color:#111111"><p>' . esc_html__( 'Spark interest on social media', 'twentynineteen' ) . '</p><cite>' . esc_html__( 'We help companies communicate with their customers.', 'twentynineteen' ) . '</cite></blockquote></figure>',
					'<!-- /jk:pullquote -->',
				)
			),
		)
	);
}
