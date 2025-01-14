<?php
/**
 * Block Patterns
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern/
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern_category/
 *
 * @package JKPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 3.4
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {

	register_block_pattern_category(
		'twentyten',
		array( 'label' => esc_html__( 'Twenty Ten', 'twentyten' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {

	// Image with large heading and paragraph.
	register_block_pattern(
		'twentyten/intro',
		array(
			'title'         => esc_html__( 'Introduction', 'twentyten' ),
			'categories'    => array( 'twentyten' ),
			'viewportWidth' => 700,
			'content'       => '<!-- jk:image {"id":null,"sizeSlug":"large","linkDestination":"none"} --><figure class="jk-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/images/patterns/pattern-barn.jpg" alt="' . esc_attr__( 'A red barn with a white roof in a field.', 'twentyten' ) . '" /><figcaption><em>' . esc_html__( 'An old barn we passed on the drive', 'twentyten' ) . '</em></figcaption></figure><!-- /jk:image --><!-- jk:heading {"style":{"typography":{"fontSize":60}}} --><h2 style="font-size:60px">' . esc_html__( 'A Weekend Away', 'twentyten' ) . '</h2><!-- /jk:heading --><!-- jk:paragraph --><p>' . esc_html__( 'It’s amazing what a good weekend can do. After a tough couple weeks at work, I knew I needed to get away and be in nature. My partner and I decided to take a long weekend and stay in a cabin in the woods. We packed up after work on Friday and drove out into the country, passing through fields full of horses, old farms, and quaint little town squares. It was an idyllic drive. Eventually, we reached our destination and unpacked the car. We couldn’t wait to cook up a simple dinner and then relax by the fireplace.', 'twentyten' ) . '</p><!-- /jk:paragraph -->',
		)
	);

	// Cover block with a pullquote.
	register_block_pattern(
		'twentyten/highlighted-quote',
		array(
			'title'         => esc_html__( 'Highlighted Quote', 'twentyten' ),
			'categories'    => array( 'twentyten' ),
			'viewportWidth' => 700,
			'content'       => '<!-- jk:cover {"overlayColor":"light-gray"} --><div class="jk-block-cover has-light-gray-background-color has-background-dim"><div class="jk-block-cover__inner-container"><!-- jk:pullquote {"textColor":"black","className":"is-style-solid-color"} --><figure class="jk-block-pullquote is-style-solid-color"><blockquote class="has-text-color has-black-color"><p><em>' . esc_html__( '"Take time off&hellip; The world will not fall apart without you."', 'twentyten' ) . '</em></p><cite>' . esc_html__( '— Malebo Sephodi', 'twentyten' ) . '</cite></blockquote></figure><!-- /jk:pullquote --></div></div><!-- /jk:cover -->',
		)
	);

	// Column blocks featuring two images with text on the side.
	register_block_pattern(
		'twentyten/alternating-images',
		array(
			'title'         => esc_html__( 'Alternating Images', 'twentyten' ),
			'categories'    => array( 'twentyten' ),
			'viewportWidth' => 700,
			'content'       => '<!-- jk:columns {"verticalAlignment":"center"} --><div class="jk-block-columns are-vertically-aligned-center"><!-- jk:column {"verticalAlignment":"center","width":"66.66%"} --><div class="jk-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- jk:image {"id":null,"sizeSlug":"large","linkDestination":"none"} --><figure class="jk-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/images/patterns/pattern-dock.jpg" alt="' . esc_attr__( 'A lake with several boats docked. The sun is rising behind mountains in the background.', 'twentyten' ) . '" /><figcaption><em>' . esc_html__( 'The lake at 6:54 AM', 'twentyten' ) . '</em></figcaption></figure><!-- /jk:image --></div><!-- /jk:column --><!-- jk:column {"verticalAlignment":"top","width":"33.33%"} --><div class="jk-block-column is-vertically-aligned-top" style="flex-basis:33.33%"><!-- jk:paragraph --><p><em>' . esc_html__( 'Nearby our cabin was a lake. The sunrise looked beautiful as it rose over the hills beyond the water, reflecting down onto the gentle morning waves. I sat on the dock and drank a cup of coffee, enjoying the cool air on my skin. The coffee kept me warm inside.', 'twentyten' ) . '</em></p><!-- /jk:paragraph --></div><!-- /jk:column --></div><!-- /jk:columns --><!-- jk:columns --><div class="jk-block-columns"><!-- jk:column {"width":"33.33%"} --><div class="jk-block-column" style="flex-basis:33.33%"><!-- jk:paragraph --><p><em>' . esc_html__( 'Later that night, we went back to the lake and sat by the shore. It felt different at night; quieter, as if all of nature had gone to sleep for  a little while. The only noises were the chirp of crickets and the soft splash of the waves lapping at the shore. What a beautiful way to end the day.', 'twentyten' ) . '</em></p><!-- /jk:paragraph --></div><!-- /jk:column --><!-- jk:column {"width":"66.66%"} --><div class="jk-block-column" style="flex-basis:66.66%"><!-- jk:image {"id":null,"sizeSlug":"large","linkDestination":"none"} --><figure class="jk-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/images/patterns/pattern-lake.jpg" alt="' . esc_attr__( 'A lake at night, with Adirondack chairs in the foreground. The sun sets in the background.', 'twentyten' ) . '" /><figcaption><em>' . esc_html__( 'Relaxing at the lake after dinner', 'twentyten' ) . '</em></figcaption></figure><!-- /jk:image --></div><!-- /jk:column --></div><!-- /jk:columns -->',
		)
	);
}
