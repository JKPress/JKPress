<?php
/**
 * Block Patterns
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern/
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern_category/
 *
 * @package JKPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 3.4
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {

	register_block_pattern_category(
		'twentythirteen',
		array( 'label' => esc_html__( 'Twenty Thirteen', 'twentythirteen' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {
	// Decorative Gallery.
	register_block_pattern(
		'twentythirteen/decorative-gallery',
		array(
			'title'      => esc_html__( 'Decorative Gallery', 'twentythirteen' ),
			'categories' => array( 'twentythirteen' ),
			'content'    => '<!-- jk:cover {"overlayColor":"yellow","minHeight":100,"minHeightUnit":"vh","align":"full"} -->
			<div class="jk-block-cover alignfull has-yellow-background-color has-background-dim" style="min-height:100vh"><div class="jk-block-cover__inner-container"><!-- jk:gallery {"ids":[null,null,null,null,null,null,null,null,null],"linkTo":"none"} -->
			<figure class="jk-block-gallery columns-3 is-cropped"><ul class="blocks-gallery-grid"><li class="blocks-gallery-item"><figure><img src="' . esc_url( get_template_directory_uri() ) . '/images/block-patterns/dark-red.jpg#1" alt="' . esc_attr__( 'Solid red square', 'twentythirteen' ) . '" data-full-url="' . esc_url( get_template_directory_uri() ) . '/images/block-patterns/dark-red.jpg#1" data-link="#"/></figure></li><li class="blocks-gallery-item"><figure><img src="' . esc_url( get_template_directory_uri() ) . '/images/block-patterns/torus-interior.jpg" alt="' . esc_attr__( 'NASA Space Colony illustration, interior view of torus colony. Public spaces appear in the foreground of the torus, while housing, rolling hills, and a river snake up into the background.', 'twentythirteen' ) . '" data-full-url="' . esc_url( get_template_directory_uri() ) . '/images/block-patterns/torus-interior.jpg" data-link="#"/></figure></li><li class="blocks-gallery-item"><figure><img src="' . esc_url( get_template_directory_uri() ) . '/images/block-patterns/dark-red.jpg#2" alt="' . esc_attr__( 'Solid red square', 'twentythirteen' ) . '" data-full-url="' . esc_url( get_template_directory_uri() ) . '/images/block-patterns/dark-red.jpg#2" data-link="#"/></figure></li><li class="blocks-gallery-item"><figure><img src="' . esc_url( get_template_directory_uri() ) . '/images/block-patterns/cylinder-interior.jpg" alt="alt="' . esc_attr__( 'NASA Space Colony illustration, interior view of a cylindrical space colony, looking out through large windows. The interior contains fields, forests, and a river snaking from the foreground into the background. Low clouds hang over the land.', 'twentythirteen' ) . '" data-full-url="' . esc_url( get_template_directory_uri() ) . '/images/block-patterns/cylinder-interior.jpg" data-link="#"/></figure></li><li class="blocks-gallery-item"><figure><img src="' . esc_url( get_template_directory_uri() ) . '/images/block-patterns/orange.jpg" alt="' . esc_attr__( 'Solid orange square', 'twentythirteen' ) . '" data-full-url="' . esc_url( get_template_directory_uri() ) . '/images/block-patterns/orange.jpg" data-link="#"/></figure></li><li class="blocks-gallery-item"><figure><img src="' . esc_url( get_template_directory_uri() ) . '/images/block-patterns/toroidal-colony.jpg" alt="' . esc_attr__( 'NASA Space Colony illustration, cutaway view, exposing the interior of a toroidal colony. Trees and densely-packed housing line the inside of the torus.', 'twentythirteen' ) . '" data-full-url="' . esc_url( get_template_directory_uri() ) . '/images/block-patterns/toroidal-colony.jpg" data-link="#"/></figure></li><li class="blocks-gallery-item"><figure><img src="' . esc_url( get_template_directory_uri() ) . '/images/block-patterns/dark-red.jpg#3" alt="' . esc_attr__( 'Solid red square', 'twentythirteen' ) . '" data-full-url="' . esc_url( get_template_directory_uri() ) . '/images/block-patterns/dark-red.jpg#3" data-link="#"/></figure></li><li class="blocks-gallery-item"><figure><img src="' . esc_url( get_template_directory_uri() ) . '/images/block-patterns/bernal-cutaway.jpg" alt="' . esc_attr__( 'NASA Space Colony illustration, cutaway view of Bernal Sphere. The interior of the sphere is filled with greenery and houses, and a star shines brightly behind the colony.', 'twentythirteen' ) . '" data-full-url="' . esc_url( get_template_directory_uri() ) . '/images/block-patterns/bernal-cutaway.jpg" data-link="#"/></figure></li><li class="blocks-gallery-item"><figure><img src="' . esc_url( get_template_directory_uri() ) . '/images/block-patterns/dark-red.jpg#4" alt="' . esc_attr__( 'Solid red square', 'twentythirteen' ) . '" data-full-url="' . esc_url( get_template_directory_uri() ) . '/images/block-patterns/dark-red.jpg#4" data-link="#"/></figure></li></ul></figure>
			<!-- /jk:gallery --></div></div>
			<!-- /jk:cover -->',
		)
	);

	// Informational Section.
	register_block_pattern(
		'twentythirteen/informational-section',
		array(
			'title'      => esc_html__( 'Informational Section', 'twentythirteen' ),
			'categories' => array( 'twentythirteen' ),
			'content'    => '<!-- jk:media-text {"mediaLink":"' . esc_url( get_template_directory_uri() ) . '/images/block-patterns/toroidal-colony.jpg","mediaType":"image","imageFill":false,"backgroundColor":"off-white"} -->
			<div class="jk-block-media-text alignwide is-stacked-on-mobile has-off-white-background-color has-background"><figure class="jk-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/images/block-patterns/toroidal-colony.jpg" alt=""/></figure><div class="jk-block-media-text__content"><!-- jk:heading -->
			<h2>' . esc_html__( 'Exploring Space', 'twentythirteen' ) . '</h2>
			<!-- /jk:heading -->

			<!-- jk:paragraph -->
			<p>' . esc_html__( "In the 1970s, NASA's Ames Research Center illustrated some explorations around what future space colonies could look like. This piece, illustrated by Rick Guidice, shows the inside of a toroidal shaped colony.", 'twentythirteen' ) . '</p>
			<!-- /jk:paragraph -->

			<!-- jk:buttons -->
			<div class="jk-block-buttons"><!-- jk:button -->
			<div class="jk-block-button"><a class="jk-block-button__link">' . esc_html__( 'Discover More', 'twentythirteen' ) . '</a></div>
			<!-- /jk:button --></div>
			<!-- /jk:buttons --></div></div>
			<!-- /jk:media-text -->',
		)
	);

	// Decorative Columns.
	register_block_pattern(
		'twentythirteen/decorative-columns',
		array(
			'title'      => esc_html__( 'Decorative Columns', 'twentythirteen' ),
			'categories' => array( 'twentythirteen' ),
			'content'    => '<!-- jk:columns {"align":"wide"} -->
			<div class="jk-block-columns alignwide"><!-- jk:column -->
			<div class="jk-block-column"><!-- jk:cover {"overlayColor":"yellow"} -->
			<div class="jk-block-cover has-yellow-background-color has-background-dim"><div class="jk-block-cover__inner-container"><!-- jk:paragraph {"align":"center","placeholder":"' . esc_attr__( 'Write title…', 'twentythirteen' ) . '","textColor":"medium-brown","fontSize":"large"} -->
			<p class="has-text-align-center has-medium-brown-color has-text-color has-large-font-size">' . esc_html__( 'Space', 'twentythirteen' ) . '</p>
			<!-- /jk:paragraph --></div></div>
			<!-- /jk:cover --></div>
			<!-- /jk:column -->

			<!-- jk:column -->
			<div class="jk-block-column"><!-- jk:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/images/block-patterns/torus-interior.jpg","dimRatio":0,"focalPoint":{"x":"0.63","y":"0.33"}} -->
			<div class="jk-block-cover"><img class="jk-block-cover__image-background" alt="" src="' . esc_url( get_template_directory_uri() ) . '/images/block-patterns/torus-interior.jpg" style="object-position:63% 33%" data-object-fit="cover" data-object-position="63% 33%"/><div class="jk-block-cover__inner-container"><!-- jk:paragraph {"align":"center","placeholder":"' . esc_attr__( 'Write title…', 'twentythirteen' ) . '","fontSize":"large"} -->
			<p class="has-text-align-center has-large-font-size"></p>
			<!-- /jk:paragraph --></div></div>
			<!-- /jk:cover --></div>
			<!-- /jk:column -->

			<!-- jk:column -->
			<div class="jk-block-column"><!-- jk:cover {"overlayColor":"yellow"} -->
			<div class="jk-block-cover has-yellow-background-color has-background-dim"><div class="jk-block-cover__inner-container"><!-- jk:paragraph {"align":"center","placeholder":"' . esc_attr__( 'Write title…', 'twentythirteen' ) . '","textColor":"medium-brown","fontSize":"large"} -->
			<p class="has-text-align-center has-medium-brown-color has-text-color has-large-font-size">' . esc_html__( 'Colonies', 'twentythirteen' ) . '</p>
			<!-- /jk:paragraph --></div></div>
			<!-- /jk:cover --></div>
			<!-- /jk:column --></div>
			<!-- /jk:columns -->',
		)
	);

	// Callout Quote.
	register_block_pattern(
		'twentythirteen/callout-quote',
		array(
			'title'      => esc_html__( 'Callout Quote', 'twentythirteen' ),
			'categories' => array( 'twentythirteen' ),
			'blockTypes' => array( 'core/quote' ),
			'content'    => '<!-- jk:columns {"verticalAlignment":"center"} -->
			<div class="jk-block-columns are-vertically-aligned-center"><!-- jk:column {"verticalAlignment":"center"} -->
			<div class="jk-block-column is-vertically-aligned-center"><!-- jk:separator {"className":"is-style-wide"} -->
			<hr class="jk-block-separator is-style-wide"/>
			<!-- /jk:separator --></div>
			<!-- /jk:column -->

			<!-- jk:column {"verticalAlignment":"center"} -->
			<div class="jk-block-column is-vertically-aligned-center"><!-- jk:quote -->
			<blockquote class="jk-block-quote"><p>' . jk_kses_post( __( 'When you look at <br>the stars and the galaxy, you feel that you are not <br>just from any particular piece of land, but from the solar system.', 'twentythirteen' ) ) . '</p><cite>' . esc_html__( 'Kalpana Chawla', 'twentythirteen' ) . '</cite></blockquote>
			<!-- /jk:quote --></div>
			<!-- /jk:column --></div>
			<!-- /jk:columns -->',
		)
	);

	// Big Quote.
	register_block_pattern(
		'twentythirteen/big-quote',
		array(
			'title'      => esc_html__( 'Big Quote', 'twentythirteen' ),
			'categories' => array( 'twentythirteen' ),
			'blockTypes' => array( 'core/quote' ),
			'content'    => '<!-- jk:cover {"overlayColor":"dark-gray","minHeight":100,"minHeightUnit":"vh","align":"full"} -->
			<div class="jk-block-cover alignfull has-dark-gray-background-color has-background-dim" style="min-height:100vh"><div class="jk-block-cover__inner-container"><!-- jk:image {"align":"center","sizeSlug":"thumbnail","linkDestination":"none","className":"is-style-rounded"} -->
			<div class="jk-block-image is-style-rounded"><figure class="aligncenter size-thumbnail"><img src="' . esc_url( get_template_directory_uri() ) . '/images/block-patterns/bernal-cutaway.jpg" alt="alt="' . esc_attr__( 'NASA Space Colony illustration, cutaway view of Bernal Sphere. The interior of the sphere is filled with greenery and houses, and a star shines brightly behind the colony.', 'twentythirteen' ) . '"/></figure></div>
			<!-- /jk:image -->

			<!-- jk:quote {"align":"center","className":"is-style-large"} -->
			<blockquote class="jk-block-quote has-text-align-center is-style-large"><p>' . esc_html__( 'When you look at the stars and the galaxy, you feel that you are not just from any particular piece of land, but from the solar system.', 'twentythirteen' ) . '</p><cite>' . esc_html__( 'Kalpana Chawla', 'twentythirteen' ) . '</cite></blockquote>
			<!-- /jk:quote --></div></div>
			<!-- /jk:cover -->',
		)
	);

	// Informational List.
	register_block_pattern(
		'twentythirteen/informational-list',
		array(
			'title'      => esc_html__( 'Informational List', 'twentythirteen' ),
			'categories' => array( 'twentythirteen' ),
			'content'    => '<!-- jk:cover {"overlayColor":"red","contentPosition":"center center","align":"wide"} -->
			<div class="jk-block-cover alignwide has-red-background-color has-background-dim"><div class="jk-block-cover__inner-container"><!-- jk:paragraph -->
			<p><strong>' . esc_html__( 'FAMOUS ASTRONAUTS', 'twentythirteen' ) . '</strong></p>
			<!-- /jk:paragraph -->

			<!-- jk:columns -->
			<div class="jk-block-columns"><!-- jk:column -->
			<div class="jk-block-column"><!-- jk:paragraph -->
			<p>' . jk_kses_post( __( 'Yuri Gagarin<br>Alan B. Shepard Jr.<br>Valentina Tereshkova<br>John Glenn Jr.', 'twentythirteen' ) ) . '</p>
			<!-- /jk:paragraph --></div>
			<!-- /jk:column -->

			<!-- jk:column -->
			<div class="jk-block-column"><!-- jk:paragraph -->
			<p>' . jk_kses_post( __( 'Neil Armstrong<br>James Lovell Jr.<br>Dr. Sally Ride<br>Chris Hadfield', 'twentythirteen' ) ) . '</p>
			<!-- /jk:paragraph --></div>
			<!-- /jk:column --></div>
			<!-- /jk:columns --></div></div>
			<!-- /jk:cover -->',
		)
	);

}
