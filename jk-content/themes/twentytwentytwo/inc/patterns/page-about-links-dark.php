<?php
/**
 * About page links (dark)
 */
return array(
	'title'      => __( 'About page links (dark)', 'twentytwentytwo' ),
	'categories' => array( 'twentytwentytwo_pages', 'buttons' ),
	'content'    => '<!-- jk:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"padding":{"top":"10rem","bottom":"10rem"}}},"backgroundColor":"primary","textColor":"background","layout":{"inherit":false,"contentSize":"400px"}} -->
					<div class="jk-block-group alignfull has-background-color has-primary-background-color has-text-color has-background has-link-color" style="padding-top:10rem;padding-bottom:10rem;"><!-- jk:group -->
					<div class="jk-block-group">

					<!-- jk:image {"width":100,"height":100,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
					<figure class="jk-block-image size-full is-resized is-style-rounded"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/icon-bird.jpg" alt="' . esc_attr__( 'Logo featuring a flying bird', 'twentytwentytwo' ) . '" width="100" height="100"/></figure>
					<!-- /jk:image -->

					<!-- jk:heading {"textAlign":"left","style":{"typography":{"fontSize":"var(--jk--custom--typography--font-size--huge, clamp(2.25rem, 4vw, 2.75rem))"}}} -->
					<h2 class="has-text-align-left" style="font-size:var(--jk--custom--typography--font-size--huge, clamp(2.25rem, 4vw, 2.75rem))">' . esc_html__( 'A trouble of hummingbirds', 'twentytwentytwo' ) . '</h2>
					<!-- /jk:heading -->

					<!-- jk:spacer {"height":40} -->
					<div style="height:40px" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer -->

					<!-- jk:buttons {"contentJustification":"left"} -->
					<div class="jk-block-buttons is-content-justification-left"><!-- jk:button {"width":100,"style":{"border":{"radius":"6px"}},"className":"is-style-outline"} -->
					<div class="jk-block-button has-custom-width jk-block-button__width-100 is-style-outline"><a class="jk-block-button__link" style="border-radius:6px">' . esc_html__( 'Watch our videos', 'twentytwentytwo' ) . '</a></div>
					<!-- /jk:button -->

					<!-- jk:button {"width":100,"style":{"border":{"radius":"6px"}},"className":"is-style-outline"} -->
					<div class="jk-block-button has-custom-width jk-block-button__width-100 is-style-outline"><a class="jk-block-button__link" style="border-radius:6px">' . esc_html__( 'Listen on iTunes Podcasts', 'twentytwentytwo' ) . '</a></div>
					<!-- /jk:button -->

					<!-- jk:button {"width":100,"style":{"border":{"radius":"6px"}},"className":"is-style-outline"} -->
					<div class="jk-block-button has-custom-width jk-block-button__width-100 is-style-outline"><a class="jk-block-button__link" style="border-radius:6px">' . esc_html__( 'Listen on Spotify', 'twentytwentytwo' ) . '</a></div>
					<!-- /jk:button -->

					<!-- jk:button {"width":100,"style":{"border":{"radius":"6px"}},"className":"is-style-outline"} -->
					<div class="jk-block-button has-custom-width jk-block-button__width-100 is-style-outline"><a class="jk-block-button__link" style="border-radius:6px">' . esc_html__( 'Support the show', 'twentytwentytwo' ) . '</a></div>
					<!-- /jk:button -->

					<!-- jk:button {"width":100,"style":{"border":{"radius":"6px"}},"className":"is-style-outline"} -->
					<div class="jk-block-button has-custom-width jk-block-button__width-100 is-style-outline"><a class="jk-block-button__link" style="border-radius:6px">' . esc_html__( 'About the hosts', 'twentytwentytwo' ) . '</a></div>
					<!-- /jk:button --></div>
					<!-- /jk:buttons --></div>
					<!-- /jk:group --></div>
					<!-- /jk:group -->',
);
