<?php
/**
 * Video trailer block pattern
 */
return array(
	'title'      => __( 'Video trailer', 'twentytwentytwo' ),
	'categories' => array( 'featured', 'columns' ),
	'content'    => '<!-- jk:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"spacing":{"padding":{"top":"6rem","bottom":"4rem"}}},"backgroundColor":"secondary","textColor":"foreground","layout":{"inherit":true}} -->
				<div class="jk-block-group alignfull has-foreground-color has-secondary-background-color has-text-color has-background has-link-color" style="padding-top:6rem;padding-bottom:4rem"><!-- jk:columns {"align":"wide"} -->
				<div class="jk-block-columns alignwide"><!-- jk:column {"width":"33.33%"} -->
				<div class="jk-block-column" style="flex-basis:33.33%"><!-- jk:heading {"fontSize":"x-large"} -->
				<h2 class="has-x-large-font-size" id="extended-trailer">' . esc_html__( 'Extended Trailer', 'twentytwentytwo' ) . '</h2>
				<!-- /jk:heading -->

				<!-- jk:paragraph -->
				<p>' . esc_html__( 'A film about hobbyist bird watchers, a catalog of different birds, paired with the noises they make. Each bird is listed by their scientific name so things seem more official.', 'twentytwentytwo' ) . '</p>
				<!-- /jk:paragraph --></div>
				<!-- /jk:column -->

				<!-- jk:column {"width":"66.66%"} -->
				<div class="jk-block-column" style="flex-basis:66.66%"><!-- jk:video -->
				<figure class="jk-block-video"><video controls src="' . esc_url( get_template_directory_uri() ) . '/assets/videos/birds.mp4"></video></figure>
				<!-- /jk:video --></div>
				<!-- /jk:column --></div>
				<!-- /jk:columns --></div>
				<!-- /jk:group -->',
);
