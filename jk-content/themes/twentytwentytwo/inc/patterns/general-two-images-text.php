<?php
/**
 * Two images with text block pattern
 */
return array(
	'title'      => __( 'Two images with text', 'twentytwentytwo' ),
	'categories' => array( 'featured', 'columns', 'gallery' ),
	'content'    => '<!-- jk:columns {"align":"wide"} -->
					<div class="jk-block-columns alignwide"><!-- jk:column {"style":{"spacing":{"padding":{"top":"0rem","right":"0rem","bottom":"0rem","left":"0rem"}}}} -->
					<div class="jk-block-column" style="padding-top:0rem;padding-right:0rem;padding-bottom:0rem;padding-left:0rem"><!-- jk:image {"width":984,"height":1426,"sizeSlug":"large"} -->
					<figure class="jk-block-image size-large is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/bird-on-salmon.jpg" alt="' . esc_attr__( 'Illustration of a bird sitting on a branch.', 'twentytwentytwo' ) . '" width="984" height="1426"/></figure>
					<!-- /jk:image --></div>
					<!-- /jk:column -->

					<!-- jk:column {"style":{"spacing":{"padding":{"top":"0rem","right":"0rem","bottom":"0rem","left":"0rem"}}}} -->
					<div class="jk-block-column" style="padding-top:0rem;padding-right:0rem;padding-bottom:0rem;padding-left:0rem"><!-- jk:image {"width":984,"height":1426,"sizeSlug":"large"} -->
					<figure class="jk-block-image size-large is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/bird-on-green.jpg" alt="' . esc_attr__( 'Illustration of a bird flying.', 'twentytwentytwo' ) . '" width="984" height="1426"/></figure>
					<!-- /jk:image -->

					<!-- jk:spacer {"height":30} -->
					<div style="height:30px" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer -->

					<!-- jk:heading {"fontSize":"x-large"} -->
					<h2 class="has-x-large-font-size" id="screening">' . esc_html__( 'SCREENING', 'twentytwentytwo' ) . '</h2>
					<!-- /jk:heading -->

					<!-- jk:paragraph -->
					<p>' . jk_kses_post( __( 'May 14th, 2022 @ 7:00PM<br>The Vintagé Theater,<br>245 Arden Rd.<br>Gardenville, NH', 'twentytwentytwo' ) ) . '</p>
					<!-- /jk:paragraph -->

					<!-- jk:spacer {"height":8} -->
					<div style="height:8px" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer -->

					<!-- jk:spacer {"height":10} -->
					<div style="height:10px" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer -->

					<!-- jk:buttons -->
					<div class="jk-block-buttons"><!-- jk:button {"backgroundColor":"foreground"} -->
					<div class="jk-block-button"><a class="jk-block-button__link has-foreground-background-color has-background">' . esc_html__( 'Buy Tickets', 'twentytwentytwo' ) . '</a></div>
					<!-- /jk:button --></div>
					<!-- /jk:buttons --></div>
					<!-- /jk:column --></div>
					<!-- /jk:columns -->',
);
