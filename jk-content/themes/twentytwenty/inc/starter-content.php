<?php
/**
 * Twenty Twenty Starter Content
 *
 * @link https://make.wordpress.org/core/2016/11/30/starter-content-for-themes-in-4-7/
 *
 * @package JKPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

/**
 * Function to return the array of starter content for the theme.
 *
 * Passes it through the `twentytwenty_starter_content` filter before returning.
 *
 * @since Twenty Twenty 1.0
 *
 * @return array A filtered array of args for the starter_content.
 */
function twentytwenty_get_starter_content() {

	// Define and register starter content to showcase the theme on new sites.
	$starter_content = array(
		'widgets'     => array(
			// Place one core-defined widgets in the first footer widget area.
			'sidebar-1' => array(
				'text_about',
			),
			// Place one core-defined widgets in the second footer widget area.
			'sidebar-2' => array(
				'text_business_info',
			),
		),

		// Create the custom image attachments used as post thumbnails for pages.
		'attachments' => array(
			'image-opening' => array(
				'post_title' => _x( 'The New UMoMA Opens its Doors', 'Theme starter content', 'twentytwenty' ),
				'file'       => 'assets/images/2020-landscape-1.png', // URL relative to the template directory.
			),
		),

		// Specify the core-defined pages to create and add custom thumbnails to some of them.
		'posts'       => array(
			'front' => array(
				'post_type'    => 'page',
				'post_title'   => __( 'The New UMoMA Opens its Doors', 'twentytwenty' ),
				// Use the above featured image with the predefined about page.
				'thumbnail'    => '{{image-opening}}',
				'post_content' => implode(
					'',
					array(
						'<!-- jk:group {"align":"wide"} -->',
						'<div class="jk-block-group alignwide"><div class="jk-block-group__inner-container"><!-- jk:heading {"align":"center"} -->',
						'<h2 class="has-text-align-center">' . __( 'The premier destination for modern art in Northern Sweden. Open from 10 AM to 6 PM every day during the summer months.', 'twentytwenty' ) . '</h2>',
						'<!-- /jk:heading --></div></div>',
						'<!-- /jk:group -->',
						'<!-- jk:columns {"align":"wide"} -->',
						'<div class="jk-block-columns alignwide"><!-- jk:column -->',
						'<div class="jk-block-column"><!-- jk:group -->',
						'<div class="jk-block-group"><div class="jk-block-group__inner-container">',
						'<!-- jk:image {"align":"full","id":37,"sizeSlug":"full"} -->',
						'<figure class="jk-block-image alignfull size-full"><img src="' . get_theme_file_uri() . '/assets/images/2020-three-quarters-1.png" alt="" class="jk-image-37"/></figure>',
						'<!-- /jk:image -->',
						'<!-- jk:heading {"level":3} -->',
						'<h3>' . __( 'Works and Days', 'twentytwenty' ) . '</h3>',
						'<!-- /jk:heading -->',
						'<!-- jk:paragraph -->',
						'<p>' . __( 'August 1 -- December 1', 'twentytwenty' ) . '</p>',
						'<!-- /jk:paragraph -->',
						'<!-- jk:button {"className":"is-style-outline"} -->',
						'<div class="jk-block-button is-style-outline"><a class="jk-block-button__link" href="https://make.wordpress.org/core/2019/09/27/block-editor-theme-related-updates-in-wordpress-5-3/">' . __( 'Read More', 'twentytwenty' ) . '</a></div>',
						'<!-- /jk:button --></div></div>',
						'<!-- /jk:group -->',
						'<!-- jk:group -->',
						'<div class="jk-block-group"><div class="jk-block-group__inner-container">',
						'<!-- jk:image {"align":"full","id":37,"sizeSlug":"full"} -->',
						'<figure class="jk-block-image alignfull size-full"><img src="' . get_theme_file_uri() . '/assets/images/2020-three-quarters-3.png" alt="" class="jk-image-37"/></figure>',
						'<!-- /jk:image -->',
						'<!-- jk:heading {"level":3} -->',
						'<h3>' . __( 'Theatre of Operations', 'twentytwenty' ) . '</h3>',
						'<!-- /jk:heading -->',
						'<!-- jk:paragraph -->',
						'<p>' . __( 'October 1 -- December 1', 'twentytwenty' ) . '</p>',
						'<!-- /jk:paragraph -->',
						'<!-- jk:button {"className":"is-style-outline"} -->',
						'<div class="jk-block-button is-style-outline"><a class="jk-block-button__link" href="https://make.wordpress.org/core/2019/09/27/block-editor-theme-related-updates-in-wordpress-5-3/">' . __( 'Read More', 'twentytwenty' ) . '</a></div>',
						'<!-- /jk:button --></div></div>',
						'<!-- /jk:group --></div>',
						'<!-- /jk:column -->',
						'<!-- jk:column -->',
						'<div class="jk-block-column"><!-- jk:group -->',
						'<div class="jk-block-group"><div class="jk-block-group__inner-container">',
						'<!-- jk:image {"align":"full","id":37,"sizeSlug":"full"} -->',
						'<figure class="jk-block-image alignfull size-full"><img src="' . get_theme_file_uri() . '/assets/images/2020-three-quarters-2.png" alt="" class="jk-image-37"/></figure>',
						'<!-- /jk:image -->',
						'<!-- jk:heading {"level":3} -->',
						'<h3>' . __( 'The Life I Deserve', 'twentytwenty' ) . '</h3>',
						'<!-- /jk:heading -->',
						'<!-- jk:paragraph -->',
						'<p>' . __( 'August 1 -- December 1', 'twentytwenty' ) . '</p>',
						'<!-- /jk:paragraph -->',
						'<!-- jk:button {"className":"is-style-outline"} -->',
						'<div class="jk-block-button is-style-outline"><a class="jk-block-button__link" href="https://make.wordpress.org/core/2019/09/27/block-editor-theme-related-updates-in-wordpress-5-3/">' . __( 'Read More', 'twentytwenty' ) . '</a></div>',
						'<!-- /jk:button --></div></div>',
						'<!-- /jk:group -->',
						'<!-- jk:group -->',
						'<div class="jk-block-group"><div class="jk-block-group__inner-container">',
						'<!-- jk:image {"align":"full","id":37,"sizeSlug":"full"} -->',
						'<figure class="jk-block-image alignfull size-full"><img src="' . get_theme_file_uri() . '/assets/images/2020-three-quarters-4.png" alt="" class="jk-image-37"/></figure>',
						'<!-- /jk:image -->',
						'<!-- jk:heading {"level":3} -->',
						'<h3>' . __( 'From Signac to Matisse', 'twentytwenty' ) . '</h3>',
						'<!-- /jk:heading -->',
						'<!-- jk:paragraph -->',
						'<p>' . __( 'October 1 -- December 1', 'twentytwenty' ) . '</p>',
						'<!-- /jk:paragraph -->',
						'<!-- jk:button {"className":"is-style-outline"} -->',
						'<div class="jk-block-button is-style-outline"><a class="jk-block-button__link" href="https://make.wordpress.org/core/2019/09/27/block-editor-theme-related-updates-in-wordpress-5-3/">' . __( 'Read More', 'twentytwenty' ) . '</a></div>',
						'<!-- /jk:button --></div></div>',
						'<!-- /jk:group --></div>',
						'<!-- /jk:column --></div>',
						'<!-- /jk:columns -->',
						'<!-- jk:image {"align":"full","id":37,"sizeSlug":"full"} -->',
						'<figure class="jk-block-image alignfull size-full"><img src="' . get_theme_file_uri() . '/assets/images/2020-landscape-2.png" alt="" class="jk-image-37"/></figure>',
						'<!-- /jk:image -->',
						'<!-- jk:group {"align":"wide"} -->',
						'<div class="jk-block-group alignwide"><div class="jk-block-group__inner-container"><!-- jk:heading {"align":"center","textColor":"accent"} -->',
						'<h2 class="has-accent-color has-text-align-center">' . __( '&#8220;Cyborgs, as the philosopher Donna Haraway established, are not reverent. They do not remember the cosmos.&#8221;', 'twentytwenty' ) . '</h2>',
						'<!-- /jk:heading --></div></div>',
						'<!-- /jk:group -->',
						'<!-- jk:paragraph {"dropCap":true} -->',
						'<p class="has-drop-cap">' . __( 'With seven floors of striking architecture, UMoMA shows exhibitions of international contemporary art, sometimes along with art historical retrospectives. Existential, political and philosophical issues are intrinsic to our programme. As visitor you are invited to guided tours artist talks, lectures, film screenings and other events with free admission', 'twentytwenty' ) . '</p>',
						'<!-- /jk:paragraph -->',
						'<!-- jk:paragraph -->',
						'<p>' . __( 'The exhibitions are produced by UMoMA in collaboration with artists and museums around the world and they often attract international attention. UMoMA has received a Special Commendation from the European Museum of the Year, and was among the top candidates for the Swedish Museum of the Year Award as well as for the Council of Europe Museum Prize.', 'twentytwenty' ) . '</p>',
						'<!-- /jk:paragraph -->',
						'<!-- jk:paragraph -->',
						'<p></p>',
						'<!-- /jk:paragraph -->',
						'<!-- jk:group {"customBackgroundColor":"#ffffff","align":"wide"} -->',
						'<div class="jk-block-group alignwide has-background" style="background-color:#ffffff"><div class="jk-block-group__inner-container"><!-- jk:group -->',
						'<div class="jk-block-group"><div class="jk-block-group__inner-container"><!-- jk:heading {"align":"center"} -->',
						'<h2 class="has-text-align-center">' . __( 'Become a Member and Get Exclusive Offers!', 'twentytwenty' ) . '</h2>',
						'<!-- /jk:heading -->',
						'<!-- jk:paragraph {"align":"center"} -->',
						'<p class="has-text-align-center">' . __( 'Members get access to exclusive exhibits and sales. Our memberships cost $99.99 and are billed annually.', 'twentytwenty' ) . '</p>',
						'<!-- /jk:paragraph -->',
						'<!-- jk:button {"align":"center"} -->',
						'<div class="jk-block-button aligncenter"><a class="jk-block-button__link" href="https://make.wordpress.org/core/2019/09/27/block-editor-theme-related-updates-in-wordpress-5-3/">' . __( 'Join the Club', 'twentytwenty' ) . '</a></div>',
						'<!-- /jk:button --></div></div>',
						'<!-- /jk:group --></div></div>',
						'<!-- /jk:group -->',
						'<!-- jk:gallery {"ids":[39,38],"align":"wide"} -->',
						'<figure class="jk-block-gallery alignwide columns-2 is-cropped"><ul class="blocks-gallery-grid"><li class="blocks-gallery-item"><figure><img src="' . get_theme_file_uri() . '/assets/images/2020-square-2.png" alt="" data-id="39" data-full-url="' . get_theme_file_uri() . '/assets/images/2020-square-2.png" data-link="assets/images/2020-square-2/" class="jk-image-39"/></figure></li><li class="blocks-gallery-item"><figure><img src="' . get_theme_file_uri() . '/assets/images/2020-square-1.png" alt="" data-id="38" data-full-url="' . get_theme_file_uri() . '/assets/images/2020-square-1.png" data-link="' . get_theme_file_uri() . '/assets/images/2020-square-1/" class="jk-image-38"/></figure></li></ul></figure>',
						'<!-- /jk:gallery -->',
					)
				),
			),
			'about',
			'contact',
			'blog',
		),

		// Default to a static front page and assign the front and posts pages.
		'options'     => array(
			'show_on_front'  => 'page',
			'page_on_front'  => '{{front}}',
			'page_for_posts' => '{{blog}}',
		),

		// Set up nav menus for each of the two areas registered in the theme.
		'nav_menus'   => array(
			// Assign a menu to the "primary" location.
			'primary'  => array(
				'name'  => __( 'Primary', 'twentytwenty' ),
				'items' => array(
					'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
					'page_about',
					'page_blog',
					'page_contact',
				),
			),
			// This replicates primary just to demonstrate the expanded menu.
			'expanded' => array(
				'name'  => __( 'Primary', 'twentytwenty' ),
				'items' => array(
					'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
					'page_about',
					'page_blog',
					'page_contact',
				),
			),
			// Assign a menu to the "social" location.
			'social'   => array(
				'name'  => __( 'Social Links Menu', 'twentytwenty' ),
				'items' => array(
					'link_yelp',
					'link_facebook',
					'link_twitter',
					'link_instagram',
					'link_email',
				),
			),
		),
	);

	/**
	 * Filters Twenty Twenty array of starter content.
	 *
	 * @since Twenty Twenty 1.0
	 *
	 * @param array $starter_content Array of starter content.
	 */
	return apply_filters( 'twentytwenty_starter_content', $starter_content );
}
