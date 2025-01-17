<?php
/**
 * Twenty Twenty-One Starter Content
 *
 * @link https://make.wordpress.org/core/2016/11/30/starter-content-for-themes-in-4-7/
 *
 * @package JKPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

/**
 * Function to return the array of starter content for the theme.
 *
 * Passes it through the `twenty_twenty_one_starter_content` filter before returning.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return array A filtered array of args for the starter_content.
 */
function twenty_twenty_one_get_starter_content() {

	// Define and register starter content to showcase the theme on new sites.
	$starter_content = array(

		// Specify the core-defined pages to create and add custom thumbnails to some of them.
		'posts'     => array(
			'front' => array(
				'post_type'    => 'page',
				'post_title'   => esc_html_x( 'Create your website with blocks', 'Theme starter content', 'twentytwentyone' ),
				'post_content' => '
					<!-- jk:heading {"align":"wide","fontSize":"gigantic","style":{"typography":{"lineHeight":"1.1"}}} -->
					<h2 class="alignwide has-text-align-wide has-gigantic-font-size" style="line-height:1.1">' . esc_html_x( 'Create your website with blocks', 'Theme starter content', 'twentytwentyone' ) . '</h2>
					<!-- /jk:heading -->

					<!-- jk:spacer -->
					<div style="height:100px" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer -->

					<!-- jk:columns {"verticalAlignment":"center","align":"wide","className":"is-style-twentytwentyone-columns-overlap"} -->
					<div class="jk-block-columns alignwide are-vertically-aligned-center is-style-twentytwentyone-columns-overlap"><!-- jk:column {"verticalAlignment":"center"} -->
					<div class="jk-block-column is-vertically-aligned-center"><!-- jk:image {"align":"full","sizeSlug":"large"} -->
					<figure class="jk-block-image alignfull size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/roses-tremieres-hollyhocks-1884.jpg" alt="' . esc_attr__( '&#8220;Roses Trémières&#8221; by Berthe Morisot', 'twentytwentyone' ) . '"/></figure>
					<!-- /jk:image -->

					<!-- jk:spacer -->
					<div style="height:100px" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer -->

					<!-- jk:image {"align":"full","sizeSlug":"large","className":"is-style-twentytwentyone-image-frame"} -->
					<figure class="jk-block-image alignfull size-large is-style-twentytwentyone-image-frame"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/in-the-bois-de-boulogne.jpg" alt="' . esc_attr__( '&#8220;In the Bois de Boulogne&#8221; by Berthe Morisot', 'twentytwentyone' ) . '"/></figure>
					<!-- /jk:image --></div>
					<!-- /jk:column -->

					<!-- jk:column {"verticalAlignment":"center"} -->
					<div class="jk-block-column is-vertically-aligned-center"><!-- jk:spacer -->
					<div style="height:100px" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer -->

					<!-- jk:image {"sizeSlug":"large","className":"alignfull size-full is-style-twentytwentyone-border"} -->
					<figure class="jk-block-image size-large alignfull size-full is-style-twentytwentyone-border"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/young-woman-in-mauve.jpg" alt="' . esc_attr__( '&#8220;Young Woman in Mauve&#8221; by Berthe Morisot', 'twentytwentyone' ) . '"/></figure>
					<!-- /jk:image --></div>
					<!-- /jk:column --></div>
					<!-- /jk:columns -->

					<!-- jk:spacer {"height":50} -->
					<div style="height:50px" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer -->

					<!-- jk:columns {"verticalAlignment":"top","align":"wide"} -->
					<div class="jk-block-columns alignwide are-vertically-aligned-top"><!-- jk:column {"verticalAlignment":"top"} -->
					<div class="jk-block-column is-vertically-aligned-top"><!-- jk:heading {"level":3} -->
					<h3>' . esc_html_x( 'Add block patterns', 'Theme starter content', 'twentytwentyone' ) . '</h3>
					<!-- /jk:heading -->

					<!-- jk:paragraph -->
					<p>' . esc_html_x( 'Block patterns are pre-designed groups of blocks. To add one, select the Add Block button [+] in the toolbar at the top of the editor. Switch to the Patterns tab underneath the search bar, and choose a pattern.', 'Theme starter content', 'twentytwentyone' ) . '</p>
					<!-- /jk:paragraph --></div>
					<!-- /jk:column -->

					<!-- jk:column {"verticalAlignment":"top"} -->
					<div class="jk-block-column is-vertically-aligned-top"><!-- jk:heading {"level":3} -->
					<h3>' . esc_html_x( 'Frame your images', 'Theme starter content', 'twentytwentyone' ) . '</h3>
					<!-- /jk:heading -->

					<!-- jk:paragraph -->
					<p>' . esc_html_x( 'Twenty Twenty-One includes stylish borders for your content. With an Image block selected, open the "Styles" panel within the Editor sidebar. Select the "Frame" block style to activate it.', 'Theme starter content', 'twentytwentyone' ) . '</p>
					<!-- /jk:paragraph --></div>
					<!-- /jk:column -->

					<!-- jk:column {"verticalAlignment":"top"} -->
					<div class="jk-block-column is-vertically-aligned-top"><!-- jk:heading {"level":3} -->
					<h3>' . esc_html_x( 'Overlap columns', 'Theme starter content', 'twentytwentyone' ) . '</h3>
					<!-- /jk:heading -->

					<!-- jk:paragraph -->
					<p>' . esc_html_x( 'Twenty Twenty-One also includes an overlap style for column blocks. With a Columns block selected, open the "Styles" panel within the Editor sidebar. Choose the "Overlap" block style to try it out.', 'Theme starter content', 'twentytwentyone' ) . '</p>
					<!-- /jk:paragraph --></div>
					<!-- /jk:column --></div>
					<!-- /jk:columns -->

					<!-- jk:spacer -->
					<div style="height:100px" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer -->

					<!-- jk:cover {"overlayColor":"green","contentPosition":"center center","align":"wide","className":"is-style-twentytwentyone-border"} -->
					<div class="jk-block-cover alignwide has-green-background-color has-background-dim is-style-twentytwentyone-border"><div class="jk-block-cover__inner-container"><!-- jk:spacer {"height":20} -->
					<div style="height:20px" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer -->

					<!-- jk:paragraph {"fontSize":"huge"} -->
					<p class="has-huge-font-size">' . esc_html_x( 'Need help?', 'Theme starter content', 'twentytwentyone' ) . '</p>
					<!-- /jk:paragraph -->

					<!-- jk:spacer {"height":75} -->
					<div style="height:75px" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer -->

					<!-- jk:columns -->
					<div class="jk-block-columns"><!-- jk:column -->
					<div class="jk-block-column"><!-- jk:paragraph -->
					<p><a href="https://wordpress.org/documentation/article/twenty-twenty-one/">' . esc_html_x( 'Read the Theme Documentation', 'Theme starter content', 'twentytwentyone' ) . '</a></p>
					<!-- /jk:paragraph --></div>
					<!-- /jk:column -->

					<!-- jk:column -->
					<div class="jk-block-column"><!-- jk:paragraph -->
					<p><a href="https://wordpress.org/support/theme/twentytwentyone/">' . esc_html_x( 'Check out the Support Forums', 'Theme starter content', 'twentytwentyone' ) . '</a></p>
					<!-- /jk:paragraph --></div>
					<!-- /jk:column --></div>
					<!-- /jk:columns -->

					<!-- jk:spacer {"height":20} -->
					<div style="height:20px" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer --></div></div>
					<!-- /jk:cover -->',
			),
			'about',
			'contact',
			'blog',
		),

		// Default to a static front page and assign the front and posts pages.
		'options'   => array(
			'show_on_front'  => 'page',
			'page_on_front'  => '{{front}}',
			'page_for_posts' => '{{blog}}',
		),

		// Set up nav menus for each of the two areas registered in the theme.
		'nav_menus' => array(
			// Assign a menu to the "primary" location.
			'primary' => array(
				'name'  => esc_html__( 'Primary menu', 'twentytwentyone' ),
				'items' => array(
					'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
					'page_about',
					'page_blog',
					'page_contact',
				),
			),

			// Assign a menu to the "footer" location.
			'footer'  => array(
				'name'  => esc_html__( 'Secondary menu', 'twentytwentyone' ),
				'items' => array(
					'link_facebook',
					'link_twitter',
					'link_instagram',
					'link_email',
				),
			),
		),
	);

	/**
	 * Filters the array of starter content.
	 *
	 * @since Twenty Twenty-One 1.0
	 *
	 * @param array $starter_content Array of starter content.
	 */
	return apply_filters( 'twenty_twenty_one_starter_content', $starter_content );
}
