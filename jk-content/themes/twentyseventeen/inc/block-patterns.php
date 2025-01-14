<?php
/**
 * Twenty Seventeen Theme: Block Patterns
 *
 * @package JKPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 2.5
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {

	register_block_pattern_category(
		'twentyseventeen',
		array( 'label' => __( 'Twenty Seventeen', 'twentyseventeen' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {
	register_block_pattern(
		'twentyseventeen/large-heading-with-button',
		array(
			'title'      => __( 'Large Heading with Button', 'twentyseventeen' ),
			'categories' => array( 'twentyseventeen' ),
			'content'    => '<!-- jk:heading {"level":1,"textColor":"black","style":{"typography":{"fontSize":50}}} -->
            <h1 class="has-black-color has-text-color" style="font-size:50px">' . __( 'Attract Leads with Marketing Campaigns that Work', 'twentyseventeen' ) . '</h1>
            <!-- /jk:heading -->

            <!-- jk:buttons -->
            <div class="jk-block-buttons"><!-- jk:button {"borderRadius":0,"className":"is-style-fill"} -->
            <div class="jk-block-button is-style-fill"><a class="jk-block-button__link no-border-radius">' . __( 'Our Services', 'twentyseventeen' ) . '</a></div>
            <!-- /jk:button --></div>
            <!-- /jk:buttons -->',
		)
	);

	register_block_pattern(
		'twentyseventeen/images-with-text-and-link',
		array(
			'title'      => __( 'Images with Text and Link', 'twentyseventeen' ),
			'categories' => array( 'twentyseventeen' ),
			'content'    => '<!-- jk:spacer -->
            <div style="height:100px" aria-hidden="true" class="jk-block-spacer"></div>
            <!-- /jk:spacer -->
            <!-- jk:columns -->
            <div class="jk-block-columns"><!-- jk:column -->
            <div class="jk-block-column">
			<!-- jk:image {"className":"size-large"} -->
			<figure class="jk-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/stripes.jpg" alt="' . __( 'Black Stripes', 'twentyseventeen' ) . '"/></figure>
			<!-- /jk:image -->
            <!-- jk:heading {"textColor":"black","style":{"typography":{"fontSize":45}}} -->
            <h2 class="has-black-color has-text-color" style="font-size:45px">' . __( 'Branding', 'twentyseventeen' ) . '</h2>
            <!-- /jk:heading -->
            <!-- jk:paragraph {"textColor":"black","style":{"typography":{"lineHeight":"1.8"}}} -->
            <p class="has-black-color has-text-color" style="line-height:1.8">' . __( 'Communicate your purpose and goals with a beautiful logo that encapsulates your business.', 'twentyseventeen' ) . '</p>
            <!-- /jk:paragraph -->
            <!-- jk:paragraph {"style":{"typography":{"lineHeight":"3"}}} -->
            <p style="line-height:3"><a href="#"><strong>' . __( 'See Case Study', 'twentyseventeen' ) . ' →</strong></a></p>
            <!-- /jk:paragraph --></div>
            <!-- /jk:column -->
            <!-- jk:column -->
            <div class="jk-block-column"><!-- jk:spacer {"height":254} -->
            <div style="height:254px" aria-hidden="true" class="jk-block-spacer"></div>
            <!-- /jk:spacer -->
			<!-- jk:image {"className":"size-large"} -->
			<figure class="jk-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/white-border.jpg" alt="' . __( 'White border', 'twentyseventeen' ) . '"/></figure>
			<!-- /jk:image -->
            <!-- jk:heading {"textColor":"black","style":{"typography":{"fontSize":45}}} -->
            <h2 class="has-black-color has-text-color" style="font-size:45px">' . __( 'Web Design', 'twentyseventeen' ) . '</h2>
            <!-- /jk:heading -->
            <!-- jk:paragraph {"textColor":"black","style":{"typography":{"lineHeight":"1.8"}}} -->
            <p class="has-black-color has-text-color" style="line-height:1.8">' . __( 'Need a website? We&#39;ve got you covered. Our design team will create a stunning design to transform your brand.', 'twentyseventeen' ) . '</p>
            <!-- /jk:paragraph -->
            <!-- jk:paragraph {"style":{"typography":{"lineHeight":"3.0"}}} -->
            <p style="line-height:3.0"><a href="#"><strong>' . __( 'See Case Study', 'twentyseventeen' ) . ' →</strong></a></p>
            <!-- /jk:paragraph --></div>
            <!-- /jk:column --></div>
            <!-- /jk:columns -->',
		)
	);

	register_block_pattern(
		'twentyseventeen/images-with-link',
		array(
			'title'      => __( 'Images with Link', 'twentyseventeen' ),
			'categories' => array( 'twentyseventeen' ),
			'content'    => '<!-- jk:spacer -->
            <div style="height:100px" aria-hidden="true" class="jk-block-spacer"></div>
            <!-- /jk:spacer -->
            <!-- jk:columns {"verticalAlignment":"top"} -->
            <div class="jk-block-columns are-vertically-aligned-top"><!-- jk:column -->
            <div class="jk-block-column"><!-- jk:group -->
            <div class="jk-block-group"><div class="jk-block-group__inner-container">
			<!-- jk:image {"align":"center","sizeSlug":"large","className":"is-style-default"} -->
			<div class="jk-block-image is-style-default"><figure class="aligncenter size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/stripes.jpg" alt="' . __( 'Black Stripes', 'twentyseventeen' ) . '"/></figure></div>
			<!-- /jk:image -->
            <!-- jk:heading {"align":"left","textColor":"black","style":{"typography":{"fontSize":30}}} -->
            <h2 class="has-text-align-left has-black-color has-text-color" style="font-size:30px">' . __( 'Branding', 'twentyseventeen' ) . '</h2>
            <!-- /jk:heading -->
            <!-- jk:paragraph {"align":"left"} -->
            <p class="has-text-align-left"><a href="#">' . __( 'See Case Study', 'twentyseventeen' ) . ' →</a></p>
            <!-- /jk:paragraph --></div></div>
            <!-- /jk:group --></div>
            <!-- /jk:column -->
            <!-- jk:column -->
            <div class="jk-block-column"><!-- jk:group -->
            <div class="jk-block-group"><div class="jk-block-group__inner-container">
			<!-- jk:image {"align":"center","sizeSlug":"large","className":"is-style-default"} -->
			<div class="jk-block-image is-style-default"><figure class="aligncenter size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/white-border.jpg" alt="' . __( 'White border', 'twentyseventeen' ) . '"/></figure></div>
			<!-- /jk:image -->
            <!-- jk:heading {"align":"left","textColor":"black","style":{"typography":{"fontSize":30}}} -->
            <h2 class="has-text-align-left has-black-color has-text-color" style="font-size:30px">' . __( 'Design', 'twentyseventeen' ) . '</h2>
            <!-- /jk:heading -->
            <!-- jk:paragraph {"align":"left"} -->
            <p class="has-text-align-left"><a href="#">' . __( 'See Case Study', 'twentyseventeen' ) . ' →</a></p>
            <!-- /jk:paragraph --></div></div>
            <!-- /jk:group --></div>
            <!-- /jk:column -->
            <!-- jk:column -->
            <div class="jk-block-column"><!-- jk:group -->
            <div class="jk-block-group"><div class="jk-block-group__inner-container">
			<!-- jk:image {"align":"center","sizeSlug":"large","className":"is-style-default"} -->
			<div class="jk-block-image is-style-default"><figure class="aligncenter size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/direct-light.jpg" alt="' . __( 'Direct Light', 'twentyseventeen' ) . '"/></figure></div>
			<!-- /jk:image -->
            <!-- jk:heading {"align":"left","textColor":"black","style":{"typography":{"fontSize":30}}} -->
            <h2 class="has-text-align-left has-black-color has-text-color" style="font-size:30px">' . __( 'Strategy', 'twentyseventeen' ) . '</h2>
            <!-- /jk:heading -->
            <!-- jk:paragraph {"align":"left"} -->
            <p class="has-text-align-left"><a href="#">' . __( 'See Case Study', 'twentyseventeen' ) . ' →</a></p>
            <!-- /jk:paragraph --></div></div>
            <!-- /jk:group --></div>
            <!-- /jk:column --></div>
            <!-- /jk:columns -->
            <!-- jk:spacer -->
            <div style="height:100px" aria-hidden="true" class="jk-block-spacer"></div>
            <!-- /jk:spacer -->',
		)
	);

	register_block_pattern(
		'twentyseventeen/services',
		array(
			'title'      => __( 'Services', 'twentyseventeen' ),
			'categories' => array( 'twentyseventeen' ),
			'content'    => '<!-- jk:spacer -->
            <div style="height:100px" aria-hidden="true" class="jk-block-spacer"></div>
            <!-- /jk:spacer -->
            
            <!-- jk:heading {"level":1,"style":{"typography":{"fontSize":50}}} -->
            <h1 style="font-size:50px">' . __( 'Our Services', 'twentyseventeen' ) . '</h1>
            <!-- /jk:heading -->
            
            <!-- jk:columns -->
            <div class="jk-block-columns"><!-- jk:column -->
            <div class="jk-block-column">
            <!-- jk:paragraph {"style":{"typography":{"fontSize":21, "lineHeight":"2.5"}}} -->
            <p style="font-size:21px"><a href="#">' . __( 'Branding', 'twentyseventeen' ) . ' →</a><br><a href="#">' . __( 'Web Design', 'twentyseventeen' ) . ' →</a><br><a href="#">' . __( 'Web Development', 'twentyseventeen' ) . ' →</a></p>
            <!-- /jk:paragraph -->
            </div>
            <!-- /jk:column -->
            
            <!-- jk:column -->
            <div class="jk-block-column">
            <!-- jk:paragraph {"style":{"typography":{"fontSize":21, "lineHeight":"2.5"}}} -->
            <p style="font-size:21px"><a href="#">' . __( 'Content Strategy', 'twentyseventeen' ) . ' →</a><br><a href="#">' . __( 'Marketing &amp; SEO', 'twentyseventeen' ) . ' →</a><br><a href="#">' . __( 'Video Production', 'twentyseventeen' ) . ' →</a></p>
            <!-- /jk:paragraph --></div>
            <!-- /jk:column --></div>
            <!-- /jk:columns -->
            
            <!-- jk:spacer -->
            <div style="height:100px" aria-hidden="true" class="jk-block-spacer"></div>
            <!-- /jk:spacer -->',
		)
	);

	register_block_pattern(
		'twentyseventeen/contact-us',
		array(
			'title'      => __( 'Contact Us', 'twentyseventeen' ),
			'categories' => array( 'twentyseventeen' ),
			'content'    => '<!-- jk:cover {"customOverlayColor":"#93aab8","minHeight":700,"align":"center"} -->
            <div class="jk-block-cover aligncenter has-background-dim" style="background-color:#93aab8;min-height:700px"><div class="jk-block-cover__inner-container"><!-- jk:paragraph {"align":"left","textColor":"white","style":{"typography":{"fontSize":50}}} -->
            <p class="has-text-align-left has-white-color has-text-color" style="font-size:50px">' . __( 'We are proud to serve outstanding clients.', 'twentyseventeen' ) . '</p>
            <!-- /jk:paragraph -->
            
            <!-- jk:buttons -->
            <div class="jk-block-buttons"><!-- jk:button {"borderRadius":0,"backgroundColor":"black","textColor":"white","className":"is-style-fill"} -->
            <div class="jk-block-button is-style-fill"><a class="jk-block-button__link has-white-color has-black-background-color has-text-color has-background no-border-radius">' . __( 'Contact us', 'twentyseventeen' ) . '</a></div>
            <!-- /jk:button --></div>
            <!-- /jk:buttons --></div></div>
            <!-- /jk:cover -->',
		)
	);
}
