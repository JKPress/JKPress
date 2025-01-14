<?php
/**
 * Block Patterns
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern/
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern_category/
 *
 * @package JKPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 3.8
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {

	register_block_pattern_category(
		'twentyeleven',
		array( 'label' => esc_html__( 'Twenty Eleven', 'twentyeleven' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {

	// Heading, and two columns featuring an image and dropcap.
	register_block_pattern(
		'twentyeleven/large-text',
		array(
			'title'         => esc_html__( 'Image and Text Columns', 'twentyeleven' ),
			'categories'    => array( 'twentyeleven' ),
			'viewportWidth' => 1000,
			'content'       => '<!-- jk:heading {"style":{"typography":{"fontSize":45}}} -->
				<h2 style="font-size:45px">' . esc_html__( 'A Bowl Full of&nbsp;Flowers', 'twentyeleven' ) . '</h2>
				<!-- /jk:heading -->
				<!-- jk:columns -->
				<div class="jk-block-columns"><!-- jk:column -->
				<div class="jk-block-column"><!-- jk:image {"id":null,"sizeSlug":"large","linkDestination":"none"} -->
				<figure class="jk-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/images/patterns/pattern-flower.jpg" alt="' . esc_attr( 'A yellow flower against a dark background.', 'twentyeleven' ) . '" /></figure>
				<!-- /jk:image -->
				<!-- jk:paragraph {"dropCap":true} -->
				<p class="has-drop-cap">' . esc_html__( 'This is just an example post to showcase the featured post section on the showcase page. Who doesn&#8217;t like flowers? I like flowers. Nullam hendrerit enim nunc. Vestibulum eget nulla magna! Fusce lobortis neque eu neque egestas tincidunt. Duis elementum consequat lorem, in eleifend justo mollis at. Nam quis adipiscing magna. Duis adipiscing est ac nibh feugiat rhoncus. Donec non lorem felis, eget commodo purus.', 'twentyeleven' ) . '</p>
				<!-- /jk:paragraph --></div>
				<!-- /jk:column -->
				<!-- jk:column {"width":"40%"} -->
				<div class="jk-block-column" style="flex-basis:40%"><!-- jk:paragraph -->
				<p>' . esc_html__( 'Aenean euismod elementum nisi quis eleifend. Lectus quam id leo in vitae turpis. Etiam tempor orci eu lobortis elementum nibh. At quis risus sed vulputate odio ut enim blandit. Id ornare arcu odio ut. Blandit massa enim nec dui nunc mattis enim ut tellus. Fermentum iaculis eu non diam phasellus vestibulum. Magna fermentum iaculis eu non diam phasellus vestibulum lorem. Ullamcorper velit sed ullamcorper morbi tincidunt ornare massa. Cursus sit amet dictum sit amet justo donec. At tellus at urna condimentum mattis. Et ligula ullamcorper malesuada proin libero nunc. Ipsum dolor sit amet consectetur adipiscing elit duis tristique sollicitudin. Pellentesque diam volutpat commodo sed egestas. Mi proin sed libero enim sed faucibus.', 'twentyeleven' ) . '</p>
				<!-- /jk:paragraph --></div>
				<!-- /jk:column --></div>
				<!-- /jk:columns -->',
		)
	);

	// Two columns with a quote.
	register_block_pattern(
		'twentyeleven/inline-quote',
		array(
			'title'         => esc_html__( 'Inline Quote', 'twentyeleven' ),
			'categories'    => array( 'twentyeleven' ),
			'viewportWidth' => 1000,
			'content'       => '<!-- jk:columns -->
				<div class="jk-block-columns"><!-- jk:column -->
				<div class="jk-block-column"><!-- jk:paragraph -->
				<p>' . esc_html__( 'This is just an example post to showcase the featured post section on the showcase page. Who doesn&#8217;t like flowers? I like flowers. Nullam hendrerit enim nunc. Vestibulum eget nulla magna! Fusce lobortis neque eu neque egestas tincidunt. Duis elementum consequat lorem, in eleifend justo mollis at. Nam quis adipiscing magna. Duis adipiscing est ac nibh feugiat rhoncus. Donec non lorem felis, eget commodo purus.', 'twentyeleven' ) . '</p>
				<!-- /jk:paragraph --></div>
				<!-- /jk:column -->
				<!-- jk:column -->
				<div class="jk-block-column"><!-- jk:separator {"color":"black","className":"is-style-wide"} -->
				<hr class="jk-block-separator has-text-color has-background has-black-background-color has-black-color is-style-wide"/>
				<!-- /jk:separator -->
				<!-- jk:quote {"className":"is-style-large"} -->
				<blockquote class="jk-block-quote is-style-large"><p><strong><em>' . esc_html__( '"There are always flowers for those who want to see them."', 'twentyeleven' ) . '</em></strong></p><cite>' . esc_html__( 'Henri Matisse', 'twentyeleven' ) . '</cite></blockquote>
				<!-- /jk:quote --></div>
				<!-- /jk:column --></div>
				<!-- /jk:columns -->',
		)
	);

	// Cover block with a call-to-action to follow the blog.
	register_block_pattern(
		'twentyeleven/follow',
		array(
			'title'         => esc_html__( 'Follow Blog', 'twentyeleven' ),
			'categories'    => array( 'twentyeleven' ),
			'viewportWidth' => 1000,
			'content'       => '<!-- jk:cover {"overlayColor":"black","minHeight":900,"minHeightUnit":"px","align":"center"} -->
				<div class="jk-block-cover aligncenter has-black-background-color has-background-dim" style="min-height:900px"><div class="jk-block-cover__inner-container"><!-- jk:paragraph {"align":"center","style":{"typography":{"fontSize":85}}} -->
				<p class="has-text-align-center" style="font-size:85px">' . esc_html__( 'Get In Touch', 'twentyeleven' ) . '</p>
				<!-- /jk:paragraph -->
				<!-- jk:paragraph {"align":"center","style":{"typography":{"fontSize":25}}} -->
				<p class="has-text-align-center" style="font-size:25px">' . esc_html__( 'Click to subscribe to this blog and receive notifications of new posts by email.', 'twentyeleven' ) . '</p>
				<!-- /jk:paragraph -->
				<!-- jk:paragraph {"align":"center","style":{"typography":{"fontSize":25}}} -->
				<p class="has-text-align-center" style="font-size:25px">' . esc_html__( 'Join 1,729 other followers', 'twentyeleven' ) . '</p>
				<!-- /jk:paragraph -->
				<!-- jk:buttons {"contentJustification":"center"} -->
				<div class="jk-block-buttons is-content-justification-center"><!-- jk:button {"borderRadius":0,"backgroundColor":"white","textColor":"black"} -->
				<div class="jk-block-button"><a class="jk-block-button__link has-black-color has-white-background-color has-text-color has-background no-border-radius">' . esc_html__( 'Follow', 'twentyeleven' ) . '</a></div>
				<!-- /jk:button --></div>
				<!-- /jk:buttons --></div></div>
				<!-- /jk:cover -->',
		)
	);

	// Heading, and two columns with an image and text.
	register_block_pattern(
		'twentyeleven/about',
		array(
			'title'         => esc_html__( 'About Me', 'twentyeleven' ),
			'categories'    => array( 'twentyeleven' ),
			'viewportWidth' => 1000,
			'content'       => '<!-- jk:heading {"style":{"typography":{"fontSize":50}}} -->
				<h2 style="font-size:50px">' . esc_html__( 'About Me', 'twentyeleven' ) . '</h2>
				<!-- /jk:heading --><!-- jk:columns -->
				<div class="jk-block-columns"><!-- jk:column -->
				<div class="jk-block-column"><!-- jk:image {"id":null,"sizeSlug":"large","linkDestination":"none"} -->
				<figure class="jk-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/images/patterns/pattern-woman.jpg" alt="' . esc_attr( 'Photo of a woman.', 'twentyeleven' ) . '" /></figure>
				<!-- /jk:image --></div>
				<!-- /jk:column -->
				<!-- jk:column -->
				<div class="jk-block-column"><!-- jk:paragraph -->
				<p><strong>' . esc_html__( 'This is a paragraph to tell about yourself.', 'twentyeleven' ) . '</strong> ' . esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nulla porttitor massa id neque aliquam vestibulum morbi blandit cursus. Feugiat nisl pretium fusce id velit. Cursus risus at ultrices mi. Pellentesque nec nam aliquam sem et tortor consequat. Est lorem ipsum dolor sit amet consectetur adipiscing. Nisi porta lorem mollis aliquam. Aenean euismod elementum nisi quis eleifend quam adipiscing vitae proin. Malesuada bibendum arcu vitae elementum curabitur vitae nunc sed. Quis hendrerit dolor magna eget est lorem ipsum dolor sit. Viverra vitae congue eu consequat.', 'twentyeleven' ) . '</p>
				<!-- /jk:paragraph --></div>
				<!-- /jk:column --></div>
				<!-- /jk:columns -->',
		)
	);

	// Two columns with headings and lists.
	register_block_pattern(
		'twentyeleven/lists',
		array(
			'title'         => esc_html__( 'Two Columns of Lists', 'twentyeleven' ),
			'categories'    => array( 'twentyeleven' ),
			'viewportWidth' => 1000,
			'content'       => '<!-- jk:columns -->
				<div class="jk-block-columns"><!-- jk:column -->
				<div class="jk-block-column"><!-- jk:paragraph {"style":{"typography":{"fontSize":25}}} -->
				<p style="font-size:25px"><strong>' . esc_html__( 'Books', 'twentyeleven' ) . '</strong></p>
				<!-- /jk:paragraph -->
				<!-- jk:list -->
				<ul><li>' . esc_html__( 'Aenean euismod elementum, 1999', 'twentyeleven' ) . '</li><li>' . esc_html__( 'Nisi quis eleifend, 1999', 'twentyeleven' ) . '</li><li>' . esc_html__( 'Lectus quam id leo in vitae turpis, 2006', 'twentyeleven' ) . '</li><li>' . esc_html__( 'Etiam tempor orci eu lobortis, 2009', 'twentyeleven' ) . '</li><li>' . esc_html__( 'At quis risus sed vulputate odio ut enim, 2015', 'twentyeleven' ) . '</li><li>' . esc_html__( 'Blandit. Id ornare arcu odio ut, 2018', 'twentyeleven' ) . '</li><li>' . esc_html__( 'Aenean euismod elementum II, 2020', 'twentyeleven' ) . '</li></ul>
				<!-- /jk:list --></div>
				<!-- /jk:column -->
				<!-- jk:column -->
				<div class="jk-block-column"><!-- jk:paragraph {"style":{"typography":{"fontSize":25}}} -->
				<p style="font-size:25px"><strong>' . esc_html__( 'Talks', 'twentyeleven' ) . '</strong></p>
				<!-- /jk:paragraph -->
				<!-- jk:list -->
				<ul><li>' . esc_html__( 'Aenean euismod elementum', 'twentyeleven' ) . '</li><li>' . esc_html__( 'Nisi quis eleifend', 'twentyeleven' ) . '</li><li>' . esc_html__( 'Lectus quam id leo in vitae turpis', 'twentyeleven' ) . '</li><li>' . esc_html__( 'Etiam tempor orci eu lobortis', 'twentyeleven' ) . '</li><li>' . esc_html__( 'At quis risus sed vulputate odio ut enim', 'twentyeleven' ) . '</li><li>' . esc_html__( 'Blandit. Id ornare arcu odio ut', 'twentyeleven' ) . '</li><li>' . esc_html__( 'Aenean euismod elementum', 'twentyeleven' ) . '</li></ul>
				<!-- /jk:list --></div>
				<!-- /jk:column --></div>
				<!-- /jk:columns -->',
		)
	);

}
