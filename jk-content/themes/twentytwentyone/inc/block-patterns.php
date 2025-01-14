<?php
/**
 * Block Patterns
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern/
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern_category/
 *
 * @package JKPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

if ( function_exists( 'register_block_pattern_category' ) ) {
	/**
	 * Register Block Pattern Category.
	 *
	 * @since Twenty Twenty-One 1.0
	 *
	 * @return void
	 */
	function twenty_twenty_one_register_block_pattern_category() {
		register_block_pattern_category(
			'twentytwentyone',
			array( 'label' => esc_html__( 'Twenty Twenty-One', 'twentytwentyone' ) )
		);
	}
	add_action( 'init', 'twenty_twenty_one_register_block_pattern_category' );
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {
	/**
	 * Register Block Pattern.
	 *
	 * @since Twenty Twenty-One 1.0
	 *
	 * @return void
	 */
	function twenty_twenty_one_register_block_pattern() {

		// Large Text.
		register_block_pattern(
			'twentytwentyone/large-text',
			array(
				'title'         => esc_html__( 'Large text', 'twentytwentyone' ),
				'categories'    => array( 'twentytwentyone' ),
				'viewportWidth' => 1440,
				'blockTypes'    => array( 'core/heading' ),
				'content'       => '<!-- jk:heading {"align":"wide","fontSize":"gigantic","style":{"typography":{"lineHeight":"1.1"}}} --><h2 class="alignwide has-text-align-wide has-gigantic-font-size" style="line-height:1.1">' . esc_html__( 'A new portfolio default theme for JKPress', 'twentytwentyone' ) . '</h2><!-- /jk:heading -->',
			)
		);

		// Links Area.
		register_block_pattern(
			'twentytwentyone/links-area',
			array(
				'title'         => esc_html__( 'Links area', 'twentytwentyone' ),
				'categories'    => array( 'twentytwentyone' ),
				'viewportWidth' => 1440,
				'blockTypes'    => array( 'core/cover' ),
				'description'   => esc_html_x( 'A huge text followed by social networks and email address links.', 'Block pattern description', 'twentytwentyone' ),
				'content'       => '<!-- jk:cover {"overlayColor":"green","contentPosition":"center center","align":"wide","className":"is-style-twentytwentyone-border"} --><div class="jk-block-cover alignwide has-green-background-color has-background-dim is-style-twentytwentyone-border"><div class="jk-block-cover__inner-container"><!-- jk:spacer {"height":20} --><div style="height:20px" aria-hidden="true" class="jk-block-spacer"></div><!-- /jk:spacer --><!-- jk:paragraph {"fontSize":"huge"} --><p class="has-huge-font-size">' . jk_kses_post( __( 'Let&#8217;s Connect.', 'twentytwentyone' ) ) . '</p><!-- /jk:paragraph --><!-- jk:spacer {"height":75} --><div style="height:75px" aria-hidden="true" class="jk-block-spacer"></div><!-- /jk:spacer --><!-- jk:columns --><div class="jk-block-columns"><!-- jk:column --><div class="jk-block-column"><!-- jk:paragraph --><p><a href="#" data-type="URL">' . esc_html__( 'Twitter', 'twentytwentyone' ) . '</a> / <a href="#" data-type="URL">' . esc_html__( 'Instagram', 'twentytwentyone' ) . '</a> / <a href="#" data-type="URL">' . esc_html__( 'Dribbble', 'twentytwentyone' ) . '</a></p><!-- /jk:paragraph --></div><!-- /jk:column --><!-- jk:column --><div class="jk-block-column"><!-- jk:paragraph --><p><a href="#">' . esc_html__( 'example@example.com', 'twentytwentyone' ) . '</a></p><!-- /jk:paragraph --></div><!-- /jk:column --></div><!-- /jk:columns --><!-- jk:spacer {"height":20} --><div style="height:20px" aria-hidden="true" class="jk-block-spacer"></div><!-- /jk:spacer --></div></div><!-- /jk:cover --><!-- jk:paragraph --><p></p><!-- /jk:paragraph -->',
			)
		);

		// Media & Text Article Title.
		register_block_pattern(
			'twentytwentyone/media-text-article-title',
			array(
				'title'         => esc_html__( 'Media and text article title', 'twentytwentyone' ),
				'categories'    => array( 'twentytwentyone' ),
				'viewportWidth' => 1440,
				'description'   => esc_html_x( 'A Media & Text block with a big image on the left and a heading on the right. The heading is followed by a separator and a description paragraph.', 'Block pattern description', 'twentytwentyone' ),
				'content'       => '<!-- jk:media-text {"mediaId":1752,"mediaLink":"' . esc_url( get_template_directory_uri() ) . '/assets/images/playing-in-the-sand.jpg","mediaType":"image","className":"is-style-twentytwentyone-border"} --><div class="jk-block-media-text alignwide is-stacked-on-mobile is-style-twentytwentyone-border"><figure class="jk-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/playing-in-the-sand.jpg" alt="' . esc_attr__( '&#8220;Playing in the Sand&#8221; by Berthe Morisot', 'twentytwentyone' ) . '" class="jk-image-1752"/></figure><div class="jk-block-media-text__content"><!-- jk:heading {"align":"center"} --><h2 class="has-text-align-center">' . esc_html__( 'Playing in the Sand', 'twentytwentyone' ) . '</h2><!-- /jk:heading --><!-- jk:separator {"className":"is-style-dots"} --><hr class="jk-block-separator is-style-dots"/><!-- /jk:separator --><!-- jk:paragraph {"align":"center","fontSize":"small"} --><p class="has-text-align-center has-small-font-size">' . jk_kses_post( __( 'Berthe Morisot<br>(French, 1841-1895)', 'twentytwentyone' ) ) . '</p><!-- /jk:paragraph --></div></div><!-- /jk:media-text -->',
			)
		);

		// Overlapping Images.
		register_block_pattern(
			'twentytwentyone/overlapping-images',
			array(
				'title'         => esc_html__( 'Overlapping images', 'twentytwentyone' ),
				'categories'    => array( 'twentytwentyone' ),
				'viewportWidth' => 1024,
				'blockTypes'    => array( 'core/columns' ),
				'description'   => esc_html_x( 'Three images inside an overlapping columns block.', 'Block pattern description', 'twentytwentyone' ),
				'content'       => '<!-- jk:columns {"verticalAlignment":"center","align":"wide","className":"is-style-twentytwentyone-columns-overlap"} --><div class="jk-block-columns alignwide are-vertically-aligned-center is-style-twentytwentyone-columns-overlap"><!-- jk:column {"verticalAlignment":"center"} --><div class="jk-block-column is-vertically-aligned-center"><!-- jk:image {"align":"full","sizeSlug":"full"} --><figure class="jk-block-image alignfull size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/roses-tremieres-hollyhocks-1884.jpg" alt="' . esc_attr__( '&#8220;Roses Trémières&#8221; by Berthe Morisot', 'twentytwentyone' ) . '"/></figure><!-- /jk:image --><!-- jk:spacer --><div style="height:100px" aria-hidden="true" class="jk-block-spacer"></div><!-- /jk:spacer --><!-- jk:image {"align":"full","sizeSlug":"full"} --><figure class="jk-block-image alignfull size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/in-the-bois-de-boulogne.jpg" alt="' . esc_attr__( '&#8220;In the Bois de Boulogne&#8221; by Berthe Morisot', 'twentytwentyone' ) . '"/></figure><!-- /jk:image --></div><!-- /jk:column --><!-- jk:column {"verticalAlignment":"center"} --><div class="jk-block-column is-vertically-aligned-center"><!-- jk:spacer --><div style="height:100px" aria-hidden="true" class="jk-block-spacer"></div><!-- /jk:spacer --><!-- jk:image {"align":"full",sizeSlug":"full"} --><figure class="jk-block-image alignfull size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/young-woman-in-mauve.jpg" alt="' . esc_attr__( '&#8220;Young Woman in Mauve&#8221; by Berthe Morisot', 'twentytwentyone' ) . '"/></figure><!-- /jk:image --></div><!-- /jk:column --></div><!-- /jk:columns -->',
			)
		);

		// Two Images Showcase.
		register_block_pattern(
			'twentytwentyone/two-images-showcase',
			array(
				'title'         => esc_html__( 'Two images showcase', 'twentytwentyone' ),
				'categories'    => array( 'twentytwentyone' ),
				'viewportWidth' => 1440,
				'description'   => esc_html_x( 'A media & text block with a big image on the left and a smaller one with bordered frame on the right.', 'Block pattern description', 'twentytwentyone' ),
				'content'       => '<!-- jk:media-text {"mediaId":1747,"mediaLink":"' . esc_url( get_template_directory_uri() ) . '/assets/images/Daffodils.jpg","mediaType":"image"} --><div class="jk-block-media-text alignwide is-stacked-on-mobile"><figure class="jk-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/Daffodils.jpg" alt="' . esc_attr__( '&#8220;Daffodils&#8221; by Berthe Morisot', 'twentytwentyone' ) . '" size-full"/></figure><div class="jk-block-media-text__content"><!-- jk:image {"align":"center","width":400,"height":512,"sizeSlug":"large","className":"is-style-twentytwentyone-image-frame"} --><figure class="jk-block-image aligncenter size-large is-resized is-style-twentytwentyone-image-frame"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/self-portrait-1885.jpg" alt="' . esc_attr__( '&#8220;Self portrait&#8221; by Berthe Morisot', 'twentytwentyone' ) . '" width="400" height="512"/></figure><!-- /jk:image --></div></div><!-- /jk:media-text -->',
			)
		);

		// Overlapping Images and Text.
		register_block_pattern(
			'twentytwentyone/overlapping-images-and-text',
			array(
				'title'         => esc_html__( 'Overlapping images and text', 'twentytwentyone' ),
				'categories'    => array( 'twentytwentyone' ),
				'viewportWidth' => 1440,
				'blockTypes'    => array( 'core/columns' ),
				'description'   => esc_html_x( 'An overlapping columns block with two images and a text description.', 'Block pattern description', 'twentytwentyone' ),
				'content'       => '<!-- jk:columns {"verticalAlignment":null,"align":"wide","className":"is-style-twentytwentyone-columns-overlap"} --> <div class="jk-block-columns alignwide is-style-twentytwentyone-columns-overlap"><!-- jk:column --> <div class="jk-block-column"><!-- jk:image {sizeSlug":"full"} --> <figure class="jk-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/the-garden-at-bougival-1884.jpg" alt="' . esc_attr__( '&#8220;The Garden at Bougival&#8221; by Berthe Morisot', 'twentytwentyone' ) . '"/></figure> <!-- /jk:image --></div> <!-- /jk:column --> <!-- jk:column {"verticalAlignment":"bottom"} --> <div class="jk-block-column is-vertically-aligned-bottom"><!-- jk:group {"className":"is-style-twentytwentyone-border","backgroundColor":"green"} --> <div class="jk-block-group is-style-twentytwentyone-border has-green-background-color has-background"><div class="jk-block-group__inner-container"><!-- jk:paragraph {"fontSize":"extra-large","style":{"typography":{"lineHeight":"1.4"}}} --> <p class="has-extra-large-font-size" style="line-height:1.4">' . esc_html__( 'Beautiful gardens painted by Berthe Morisot in the late 1800s', 'twentytwentyone' ) . '</p> <!-- /jk:paragraph --></div></div> <!-- /jk:group --></div> <!-- /jk:column --> <!-- jk:column --> <div class="jk-block-column"><!-- jk:image {sizeSlug":"full"} --> <figure class="jk-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/villa-with-orange-trees-nice.jpg" alt="' . esc_attr__( '&#8220;Villa with Orange Trees, Nice&#8221; by Berthe Morisot', 'twentytwentyone' ) . '"/></figure> <!-- /jk:image --></div> <!-- /jk:column --></div> <!-- /jk:columns -->',
			)
		);

		// Portfolio List.
		register_block_pattern(
			'twentytwentyone/portfolio-list',
			array(
				'title'       => esc_html__( 'Portfolio list', 'twentytwentyone' ),
				'categories'  => array( 'twentytwentyone' ),
				'description' => esc_html_x( 'A list of projects with thumbnail images.', 'Block pattern description', 'twentytwentyone' ),
				'content'     => '<!-- jk:separator {"className":"is-style-twentytwentyone-separator-thick"} --> <hr class="jk-block-separator is-style-twentytwentyone-separator-thick"/> <!-- /jk:separator --> <!-- jk:columns --> <div class="jk-block-columns"><!-- jk:column {"verticalAlignment":"center","width":80} --> <div class="jk-block-column is-vertically-aligned-center" style="flex-basis:80%"><!-- jk:paragraph {"fontSize":"extra-large"} --> <p class="has-extra-large-font-size"><a href="#">' . esc_html__( 'Roses Trémières', 'twentytwentyone' ) . '</a></p> <!-- /jk:paragraph --></div> <!-- /jk:column --> <!-- jk:column {"verticalAlignment":"center"} --> <div class="jk-block-column is-vertically-aligned-center"><!-- jk:image {"align":"right","width":85,"height":67,"sizeSlug":"large"} --> <figure class="jk-block-image alignright size-large is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/roses-tremieres-hollyhocks-1884.jpg" alt="' . esc_attr__( '&#8220;Roses Trémières&#8221; by Berthe Morisot', 'twentytwentyone' ) . '" width="85" height="67"/></figure> <!-- /jk:image --></div> <!-- /jk:column --></div> <!-- /jk:columns --> <!-- jk:separator {"className":"is-style-default"} --> <hr class="jk-block-separator is-style-default"/> <!-- /jk:separator --> <!-- jk:columns --> <div class="jk-block-columns"><!-- jk:column {"verticalAlignment":"center","width":80} --> <div class="jk-block-column is-vertically-aligned-center" style="flex-basis:80%"><!-- jk:paragraph {"fontSize":"extra-large"} --> <p class="has-extra-large-font-size"><a href="#">' . esc_html__( 'Villa with Orange Trees, Nice', 'twentytwentyone' ) . '</a></p> <!-- /jk:paragraph --></div> <!-- /jk:column --> <!-- jk:column {"verticalAlignment":"center"} --> <div class="jk-block-column is-vertically-aligned-center"><!-- jk:image {"align":"right","width":53,"height":67,"className":"alignright size-large is-resized"} --><figure class="jk-block-image is-resized alignright size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/villa-with-orange-trees-nice.jpg" alt="&#8220;Villa with Orange Trees, Nice&#8221; by Berthe Morisot" width="53" height="67"/></figure><!-- /jk:image --></div> <!-- /jk:column --></div> <!-- /jk:columns --> <!-- jk:separator {"className":"is-style-default"} --> <hr class="jk-block-separator is-style-default"/> <!-- /jk:separator --> <!-- jk:columns --> <div class="jk-block-columns"><!-- jk:column {"verticalAlignment":"center","width":80} --> <div class="jk-block-column is-vertically-aligned-center" style="flex-basis:80%"><!-- jk:paragraph {"fontSize":"extra-large"} --> <p class="has-extra-large-font-size"><a href="#">' . esc_html__( 'In the Bois de Boulogne', 'twentytwentyone' ) . '</a></p> <!-- /jk:paragraph --></div> <!-- /jk:column --> <!-- jk:column {"verticalAlignment":"center"} --> <div class="jk-block-column is-vertically-aligned-center"><!-- jk:image {"align":"right","width":81,"height":67,"sizeSlug":"large"} --> <figure class="jk-block-image alignright size-large is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/in-the-bois-de-boulogne.jpg" alt="' . esc_attr__( '&#8220;In the Bois de Boulogne&#8221; by Berthe Morisot', 'twentytwentyone' ) . '" width="81" height="67"/></figure> <!-- /jk:image --></div> <!-- /jk:column --></div> <!-- /jk:columns --> <!-- jk:separator {"className":"is-style-default"} --> <hr class="jk-block-separator is-style-default"/> <!-- /jk:separator --> <!-- jk:columns --> <div class="jk-block-columns"><!-- jk:column {"verticalAlignment":"center","width":80} --> <div class="jk-block-column is-vertically-aligned-center" style="flex-basis:80%"><!-- jk:paragraph {"fontSize":"extra-large"} --> <p class="has-extra-large-font-size"><a href="#">' . esc_html__( 'The Garden at Bougival', 'twentytwentyone' ) . '</a></p> <!-- /jk:paragraph --></div> <!-- /jk:column --> <!-- jk:column {"verticalAlignment":"center"} --> <div class="jk-block-column is-vertically-aligned-center"><!-- jk:image {"align":"right","width":85,"height":67,"sizeSlug":"large"} --> <figure class="jk-block-image alignright size-large is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/the-garden-at-bougival-1884.jpg" alt="' . esc_attr__( '&#8220;The Garden at Bougival&#8221; by Berthe Morisot', 'twentytwentyone' ) . '" width="85" height="67"/></figure> <!-- /jk:image --></div> <!-- /jk:column --></div> <!-- /jk:columns --> <!-- jk:separator {"className":"is-style-default"} --> <hr class="jk-block-separator is-style-default"/> <!-- /jk:separator --> <!-- jk:columns --> <div class="jk-block-columns"><!-- jk:column {"verticalAlignment":"center","width":80} --> <div class="jk-block-column is-vertically-aligned-center" style="flex-basis:80%"><!-- jk:paragraph {"fontSize":"extra-large"} --> <p class="has-extra-large-font-size"><a href="#">' . esc_html__( 'Young Woman in Mauve', 'twentytwentyone' ) . '</a></p> <!-- /jk:paragraph --></div> <!-- /jk:column --> <!-- jk:column {"verticalAlignment":"center"} --> <div class="jk-block-column is-vertically-aligned-center"><!-- jk:image {"align":"right","width":54,"height":67,"sizeSlug":"large"} --> <figure class="jk-block-image alignright size-large is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/young-woman-in-mauve.jpg" alt="' . esc_attr__( '&#8220;Young Woman in Mauve&#8221; by Berthe Morisot', 'twentytwentyone' ) . '" width="54" height="67"/></figure> <!-- /jk:image --></div> <!-- /jk:column --></div> <!-- /jk:columns --> <!-- jk:separator {"className":"is-style-default"} --> <hr class="jk-block-separator is-style-default"/> <!-- /jk:separator --> <!-- jk:columns --> <div class="jk-block-columns"><!-- jk:column {"verticalAlignment":"center","width":80} --> <div class="jk-block-column is-vertically-aligned-center" style="flex-basis:80%"><!-- jk:paragraph {"fontSize":"extra-large"} --> <p class="has-extra-large-font-size"><a href="#">' . esc_html__( 'Reading', 'twentytwentyone' ) . '</a></p> <!-- /jk:paragraph --></div> <!-- /jk:column --> <!-- jk:column {"verticalAlignment":"center"} --> <div class="jk-block-column is-vertically-aligned-center"><!-- jk:image {"align":"right","width":84,"height":67,"sizeSlug":"large"} --> <figure class="jk-block-image alignright size-large is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/Reading.jpg" alt="' . esc_attr__( '&#8220;Reading&#8221; by Berthe Morisot', 'twentytwentyone' ) . '" width="84" height="67"/></figure> <!-- /jk:image --></div> <!-- /jk:column --></div> <!-- /jk:columns --> <!-- jk:separator {"className":"is-style-twentytwentyone-separator-thick"} --> <hr class="jk-block-separator is-style-twentytwentyone-separator-thick"/> <!-- /jk:separator -->',
			)
		);

		register_block_pattern(
			'twentytwentyone/contact-information',
			array(
				'title'       => esc_html__( 'Contact information', 'twentytwentyone' ),
				'categories'  => array( 'twentytwentyone' ),
				'blockTypes'  => array( 'core/columns' ),
				'description' => esc_html_x( 'A block with 3 columns that display contact information and social media links.', 'Block pattern description', 'twentytwentyone' ),
				'content'     => '<!-- jk:columns {"align":"wide"} --><div class="jk-block-columns alignwide"><!-- jk:column --><div class="jk-block-column"><!-- jk:paragraph --><p><a href="mailto:#">' . esc_html_x( 'example@example.com', 'Block pattern sample content', 'twentytwentyone' ) . '<br></a>' . esc_html_x( '123-456-7890', 'Block pattern sample content', 'twentytwentyone' ) . '</p><!-- /jk:paragraph --></div><!-- /jk:column --><!-- jk:column --><div class="jk-block-column"><!-- jk:paragraph {"align":"center"} --><p class="has-text-align-center">' . esc_html_x( '123 Main Street', 'Block pattern sample content', 'twentytwentyone' ) . '<br>' . esc_html_x( 'Cambridge, MA, 02139', 'Block pattern sample content', 'twentytwentyone' ) . '</p><!-- /jk:paragraph --></div><!-- /jk:column --><!-- jk:column {"verticalAlignment":"center"} --><div class="jk-block-column is-vertically-aligned-center"><!-- jk:social-links {"align":"right","className":"is-style-twentytwentyone-social-icons-color"} --><ul class="jk-block-social-links alignright is-style-twentytwentyone-social-icons-color"><!-- jk:social-link {"url":"https://wordpress.org","service":"wordpress"} /--><!-- jk:social-link {"url":"https://www.facebook.com/JKPress/","service":"facebook"} /--><!-- jk:social-link {"url":"https://twitter.com/JKPress","service":"twitter"} /--><!-- jk:social-link {"url":"https://www.youtube.com/wordpress","service":"youtube"} /--></ul><!-- /jk:social-links --></div><!-- /jk:column --></div><!-- /jk:columns -->',
			)
		);
	}
	add_action( 'init', 'twenty_twenty_one_register_block_pattern' );
}
