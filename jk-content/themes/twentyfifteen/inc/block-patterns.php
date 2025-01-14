<?php
/**
 * Block Patterns
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern/
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern_category/
 *
 * @package JKPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 3.0
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {

	register_block_pattern_category(
		'twentyfifteen',
		array( 'label' => esc_html__( 'Twenty Fifteen', 'twentyfifteen' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {

	// Gallery and Description.
	register_block_pattern(
		'twentyfifteen/gallery-description',
		array(
			'title'      => esc_html__( 'Gallery and Description', 'twentyfifteen' ),
			'categories' => array( 'twentyfifteen' ),
			'content'    => '<!-- jk:columns {"verticalAlignment":"top"} --><div class="jk-block-columns are-vertically-aligned-top"><!-- jk:column {"verticalAlignment":"top","width":"70%"} --><div class="jk-block-column is-vertically-aligned-top" style="flex-basis:70%"><!-- jk:gallery {"ids":[null,null,null],"columns":2,"linkTo":"none"} --><figure class="jk-block-gallery columns-2 is-cropped"><ul class="blocks-gallery-grid"><li class="blocks-gallery-item"><figure><img src="' . esc_url( get_template_directory_uri() ) . '/assets/pier-seagull.jpg" alt="' . esc_attr__( 'A pier with a seagull.', 'twentyfifteen' ) . '" data-full-url="' . esc_url( get_template_directory_uri() ) . '/assets/pier-seagull.jpg" data-link="#"/></figure></li><li class="blocks-gallery-item"><figure><img src="' . esc_url( get_template_directory_uri() ) . '/assets/pier-seagulls.jpg" alt="' . esc_attr__( 'A pier with seagulls.', 'twentyfifteen' ) . '" data-full-url="' . esc_url( get_template_directory_uri() ) . '/assets/pier-seagulls.jpg" data-link="#"/></figure></li><li class="blocks-gallery-item"><figure><img src="' . esc_url( get_template_directory_uri() ) . '/assets/pier-sunset.jpg" alt="' . esc_attr__( 'A pier at sunset', 'twentyfifteen' ) . '" data-full-url="' . esc_url( get_template_directory_uri() ) . '/assets/pier-sunset.jpg" data-link="#"/></figure></li></ul></figure><!-- /jk:gallery --></div><!-- /jk:column --><!-- jk:column {"verticalAlignment":"top"} --><div class="jk-block-column is-vertically-aligned-top"><!-- jk:paragraph {"fontSize":"small"} --><p class="has-small-font-size"><em>' . esc_html__( 'Our default 2015 theme is clean, blog-focused, and designed for clarity. Twenty Fifteen’s simple, straightforward typography is readable on a wide variety of screen sizes, and suitable for multiple languages.', 'twentyfifteen' ) . '</em></p><!-- /jk:paragraph --><!-- jk:separator {"color":"dark-gray","className":"is-style-wide"} --><hr class="jk-block-separator has-text-color has-background has-dark-gray-background-color has-dark-gray-color is-style-wide"/><!-- /jk:separator --></div><!-- /jk:column --></div><!-- /jk:columns -->',
		)
	);

	// Contact Area.
	register_block_pattern(
		'twentyfifteen/contact-area',
		array(
			'title'      => esc_html__( 'Contact area', 'twentyfifteen' ),
			'categories' => array( 'twentyfifteen' ),
			'content'    => '<!-- jk:group {"backgroundColor":"light-gray","textColor":"dark-gray"} --><div class="jk-block-group has-dark-gray-color has-light-gray-background-color has-text-color has-background"><div class="jk-block-group__inner-container"><!-- jk:columns --><div class="jk-block-columns"><!-- jk:column --><div class="jk-block-column"><!-- jk:paragraph --><p><strong>' . esc_html__( 'Email', 'twentyfifteen' ) . '</strong><br><a href="mailto:#">' . esc_html__( 'example@example.com', 'twentyfifteen' ) . '</a></p><!-- /jk:paragraph --><!-- jk:paragraph --><p><strong>' . esc_html__( 'Follow us', 'twentyfifteen' ) . '</strong></p><!-- /jk:paragraph --><!-- jk:social-links --><ul class="jk-block-social-links"><!-- jk:social-link {"url":"https://facebook.com","service":"facebook"} /--><!-- jk:social-link {"url":"https://twitter.com","service":"twitter"} /--><!-- jk:social-link {"url":"https://instagram.com","service":"instagram"} /--><!-- jk:social-link {"url":"https://youtube.com","service":"youtube"} /--></ul><!-- /jk:social-links --></div><!-- /jk:column --><!-- jk:column --><div class="jk-block-column"><!-- jk:paragraph --><p><strong>' . esc_html__( 'Phone', 'twentyfifteen' ) . '</strong><br>' . esc_html__( '(123) 555-5555', 'twentyfifteen' ) . '</p><!-- /jk:paragraph --><!-- jk:paragraph --><p><strong>' . esc_html__( 'Address', 'twentyfifteen' ) . '</strong><br>' . esc_html__( '123 Main Street', 'twentyfifteen' ) . '<br>' . esc_html__( 'City, State, 00000', 'twentyfifteen' ) . '</p><!-- /jk:paragraph --></div><!-- /jk:column --></div><!-- /jk:columns --></div></div><!-- /jk:group -->',
		)
	);

	// Two Columns with Images.
	register_block_pattern(
		'twentyfifteen/two-columns-with-images',
		array(
			'title'      => esc_html__( 'Two Columns with Images', 'twentyfifteen' ),
			'categories' => array( 'twentyfifteen' ),
			'content'    => '<!-- jk:columns --><div class="jk-block-columns"><!-- jk:column --><div class="jk-block-column"><!-- jk:image {"id":null,"sizeSlug":"large","linkDestination":"none"} --><figure class="jk-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/pier-seagull.jpg" alt="' . esc_attr__( 'A pier with a seagull.', 'twentyfifteen' ) . '"/></figure><!-- /jk:image --><!-- jk:heading --><h2>' . esc_html__( 'Adventure', 'twentyfifteen' ) . '</h2><!-- /jk:heading --><!-- jk:paragraph --><p>' . esc_html__( 'I faced about again, and rushed towards the approaching Martian, rushed right down the gravelly beach and headlong into the water. Others did the same.', 'twentyfifteen' ) . '</p><!-- /jk:paragraph --></div><!-- /jk:column --><!-- jk:column --><div class="jk-block-column"><!-- jk:image {"id":null,"sizeSlug":"large","linkDestination":"none"} --><figure class="jk-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/pier-seagulls.jpg" alt="' . esc_attr__( 'A pier with seagulls.', 'twentyfifteen' ) . '"/></figure><!-- /jk:image --><!-- jk:heading --><h2>' . esc_html__( 'Travels', 'twentyfifteen' ) . '</h2><!-- /jk:heading --><!-- jk:paragraph --><p>' . esc_html__( 'A boatload of people putting back came leaping out as I rushed past. The stones under my feet were muddy and slippery, and the river was so low.', 'twentyfifteen' ) . '</p><!-- /jk:paragraph --></div><!-- /jk:column --></div><!-- /jk:columns -->',
		)
	);

	// Columns with a list.
	register_block_pattern(
		'twentyfifteen/columns-with-list',
		array(
			'title'      => esc_html__( 'Columns with a List', 'twentyfifteen' ),
			'categories' => array( 'twentyfifteen' ),
			'content'    => '<!-- jk:heading --><h2>' . esc_html__( 'What to pack for the beach', 'twentyfifteen' ) . '</h2><!-- /jk:heading --><!-- jk:paragraph {"style":{"color":{"text":"#707070"}}} --><p class="has-text-color" style="color:#707070"><em>' . esc_html__( 'You don’t need a lot, trust us!', 'twentyfifteen' ) . '</em></p><!-- /jk:paragraph --><!-- jk:columns --><div class="jk-block-columns"><!-- jk:column {"width":"65%"} --><div class="jk-block-column" style="flex-basis:65%"><!-- jk:paragraph --><p>' . esc_html__( 'As I watched, the planet seemed to grow larger and smaller and to advance and recede, but that was simply that my eye was tired. Forty millions of miles it was from us — more than forty millions of miles of void. Few people realize the immensity of vacancy in which the dust of the material universe swims.', 'twentyfifteen' ) . '</p><!-- /jk:paragraph --></div><!-- /jk:column --><!-- jk:column {"width":"5%"} --><div class="jk-block-column" style="flex-basis:5%"></div><!-- /jk:column --><!-- jk:column {"width":"30%"} --><div class="jk-block-column" style="flex-basis:30%"><!-- jk:list --><ul><li>' . esc_html__( 'Towels', 'twentyfifteen' ) . '</li><li>' . esc_html__( 'Camera', 'twentyfifteen' ) . '</li><li>' . esc_html__( 'Water Bottle', 'twentyfifteen' ) . '</li><li>' . esc_html__( 'Swimsuit', 'twentyfifteen' ) . '</li><li>' . esc_html__( 'Snacks', 'twentyfifteen' ) . '</li></ul><!-- /jk:list --></div><!-- /jk:column --></div><!-- /jk:columns -->',
		)
	);
}
