<?php
/**
 * About page links
 */
return array(
	'title'      => __( 'About page links', 'twentytwentytwo' ),
	'categories' => array( 'twentytwentytwo_pages', 'buttons' ),
	'content'    => '<!-- jk:group {"align":"full","style":{"spacing":{"padding":{"top":"10rem","bottom":"10rem"}}},"layout":{"inherit":false,"contentSize":"400px"}} -->
					<div class="jk-block-group alignfull" style="padding-top:10rem;padding-bottom:10rem;"><!-- jk:image {"align":"center","width":100,"height":100,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
					<div class="jk-block-image is-style-rounded"><figure class="aligncenter size-full is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/icon-bird.jpg" alt="' . esc_attr__( 'Logo featuring a flying bird', 'twentytwentytwo' ) . '" width="100" height="100"/></figure></div>
					<!-- /jk:image -->

					<!-- jk:group -->
					<div class="jk-block-group">

					<!-- jk:heading {"textAlign":"center","style":{"typography":{"fontSize":"var(--jk--custom--typography--font-size--huge, clamp(2.25rem, 4vw, 2.75rem))"}}} -->
					<h2 class="has-text-align-center" style="font-size:var(--jk--custom--typography--font-size--huge, clamp(2.25rem, 4vw, 2.75rem))">' . esc_html__( 'Swoop', 'twentytwentytwo' ) . '</h2>
					<!-- /jk:heading -->

					<!-- jk:paragraph {"align":"center"} -->
					<p class="has-text-align-center">' . esc_html__( 'A podcast about birds', 'twentytwentytwo' ) . '</p>
					<!-- /jk:paragraph -->

					<!-- jk:spacer {"height":40} -->
					<div style="height:40px" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer -->

					<!-- jk:buttons {"contentJustification":"left"} -->
					<div class="jk-block-buttons is-content-justification-left"><!-- jk:button {"width":100,"style":{"border":{"radius":"6px"}},"className":"is-style-fill"} -->
					<div class="jk-block-button has-custom-width jk-block-button__width-100 is-style-fill"><a class="jk-block-button__link" style="border-radius:6px">' . esc_html__( 'Watch our videos', 'twentytwentytwo' ) . '</a></div>
					<!-- /jk:button -->

					<!-- jk:button {"width":100,"style":{"border":{"radius":"6px"}},"className":"is-style-fill"} -->
					<div class="jk-block-button has-custom-width jk-block-button__width-100 is-style-fill"><a class="jk-block-button__link" style="border-radius:6px">' . esc_html__( 'Listen on iTunes Podcasts', 'twentytwentytwo' ) . '</a></div>
					<!-- /jk:button -->

					<!-- jk:button {"width":100,"style":{"border":{"radius":"6px"}},"className":"is-style-fill"} -->
					<div class="jk-block-button has-custom-width jk-block-button__width-100 is-style-fill"><a class="jk-block-button__link" style="border-radius:6px">' . esc_html__( 'Listen on Spotify', 'twentytwentytwo' ) . '</a></div>
					<!-- /jk:button -->

					<!-- jk:button {"width":100,"style":{"border":{"radius":"6px"}},"className":"is-style-fill"} -->
					<div class="jk-block-button has-custom-width jk-block-button__width-100 is-style-fill"><a class="jk-block-button__link" style="border-radius:6px">' . esc_html__( 'Support the show', 'twentytwentytwo' ) . '</a></div>
					<!-- /jk:button -->

					<!-- jk:button {"width":100,"style":{"border":{"radius":"6px"}},"className":"is-style-fill"} -->
					<div class="jk-block-button has-custom-width jk-block-button__width-100 is-style-fill"><a class="jk-block-button__link" style="border-radius:6px">' . esc_html__( 'About the hosts', 'twentytwentytwo' ) . '</a></div>
					<!-- /jk:button --></div>
					<!-- /jk:buttons --></div>
					<!-- /jk:group -->

					<!-- jk:spacer {"height":40} -->
					<div style="height:40px" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer -->

					<!-- jk:social-links {"iconColor":"primary","iconColorValue":"var(--jk--preset--color--primary)","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
					<ul class="jk-block-social-links has-icon-color is-style-logos-only"><!-- jk:social-link {"url":"#","service":"wordpress"} /-->

					<!-- jk:social-link {"url":"#","service":"facebook"} /-->

					<!-- jk:social-link {"url":"#","service":"twitter"} /-->

					<!-- jk:social-link {"url":"#","service":"instagram"} /--></ul>
					<!-- /jk:social-links --></div>
					<!-- /jk:group -->',
);
