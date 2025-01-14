<?php
/**
 * About page with large image and buttons
 */
return array(
	'title'      => __( 'About page with large image and buttons', 'twentytwentytwo' ),
	'categories' => array( 'twentytwentytwo_pages', 'buttons' ),
	'content'    => '<!-- jk:group {"align":"full","style":{"spacing":{"padding":{"top":"var(--jk--custom--spacing--small, 1.25rem)","bottom":"var(--jk--custom--spacing--small, 1.25rem)"}}},"layout":{"inherit":true}} -->
					<div class="jk-block-group alignfull" style="padding-top:var(--jk--custom--spacing--small, 1.25rem);padding-bottom:var(--jk--custom--spacing--small, 1.25rem)"><!-- jk:image {"align":"wide","width":2100,"height":1260,"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="jk-block-image alignwide size-full is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/flight-path-on-gray-b.jpg" alt="" width="2100" height="1260"/></figure>
					<!-- /jk:image -->

					<!-- jk:columns {"align":"wide"} -->
					<div class="jk-block-columns alignwide"><!-- jk:column -->
					<div class="jk-block-column"><!-- jk:buttons -->
					<div class="jk-block-buttons"><!-- jk:button {"width":100} -->
					<div class="jk-block-button has-custom-width jk-block-button__width-100"><a class="jk-block-button__link">' . esc_html__( 'Purchase my work', 'twentytwentytwo' ) . '</a></div>
					<!-- /jk:button --></div>
					<!-- /jk:buttons --></div>
					<!-- /jk:column -->

					<!-- jk:column -->
					<div class="jk-block-column"><!-- jk:buttons -->
					<div class="jk-block-buttons"><!-- jk:button {"width":100} -->
					<div class="jk-block-button has-custom-width jk-block-button__width-100"><a class="jk-block-button__link">' . esc_html__( 'Support my studio', 'twentytwentytwo' ) . '</a></div>
					<!-- /jk:button --></div>
					<!-- /jk:buttons --></div>
					<!-- /jk:column -->

					<!-- jk:column -->
					<div class="jk-block-column"><!-- jk:buttons -->
					<div class="jk-block-buttons"><!-- jk:button {"width":100} -->
					<div class="jk-block-button has-custom-width jk-block-button__width-100"><a class="jk-block-button__link">' . esc_html__( 'Take a class', 'twentytwentytwo' ) . '</a></div>
					<!-- /jk:button --></div>
					<!-- /jk:buttons --></div>
					<!-- /jk:column --></div>
					<!-- /jk:columns -->

					<!-- jk:columns {"align":"wide"} -->
					<div class="jk-block-columns alignwide"><!-- jk:column -->
					<div class="jk-block-column"><!-- jk:buttons -->
					<div class="jk-block-buttons"><!-- jk:button {"width":100} -->
					<div class="jk-block-button has-custom-width jk-block-button__width-100"><a class="jk-block-button__link">' . esc_html__( 'Read about me', 'twentytwentytwo' ) . '</a></div>
					<!-- /jk:button --></div>
					<!-- /jk:buttons --></div>
					<!-- /jk:column -->

					<!-- jk:column -->
					<div class="jk-block-column"><!-- jk:buttons -->
					<div class="jk-block-buttons"><!-- jk:button {"width":100} -->
					<div class="jk-block-button has-custom-width jk-block-button__width-100"><a class="jk-block-button__link">' . esc_html__( 'Learn about my process', 'twentytwentytwo' ) . '</a></div>
					<!-- /jk:button --></div>
					<!-- /jk:buttons --></div>
					<!-- /jk:column -->

					<!-- jk:column -->
					<div class="jk-block-column"><!-- jk:buttons -->
					<div class="jk-block-buttons"><!-- jk:button {"width":100} -->
					<div class="jk-block-button has-custom-width jk-block-button__width-100"><a class="jk-block-button__link">' . esc_html__( 'Join my mailing list', 'twentytwentytwo' ) . '</a></div>
					<!-- /jk:button --></div>
					<!-- /jk:buttons --></div>
					<!-- /jk:column --></div>
					<!-- /jk:columns -->

					<!-- jk:spacer {"height":50} -->
					<div style="height:50px" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer -->

					<!-- jk:social-links {"iconColor":"primary","iconColorValue":"var(--jk--preset--color--primary)","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
					<ul class="jk-block-social-links has-icon-color is-style-logos-only"><!-- jk:social-link {"url":"#","service":"wordpress"} /-->

					<!-- jk:social-link {"url":"#","service":"facebook"} /-->

					<!-- jk:social-link {"url":"#","service":"twitter"} /-->

					<!-- jk:social-link {"url":"#","service":"instagram"} /--></ul>
					<!-- /jk:social-links --></div>
					<!-- /jk:group -->',
);
