<?php
/**
 * Poster with right sidebar block pattern
 */
return array(
	'title'      => __( 'Poster with right sidebar', 'twentytwentytwo' ),
	'categories' => array( 'twentytwentytwo_pages' ),
	'content'    => '<!-- jk:group {"align":"full","layout":{"inherit":true}} -->
					<div class="jk-block-group alignfull"><!-- jk:columns {"align":"wide","style":{"spacing":{"blockGap":"5%"}}} -->
					<div class="jk-block-columns alignwide"><!-- jk:column {"width":"70%"} -->
					<div class="jk-block-column" style="flex-basis:70%">

					<!-- jk:heading {"level":1,"align":"wide","style":{"typography":{"fontSize":"clamp(3rem, 6vw, 4.5rem)"},"spacing":{"margin":{"bottom":"0px"}}}} -->
				<h1 class="alignwide" style="font-size:clamp(3rem, 6vw, 4.5rem);margin-bottom:0px">' . jk_kses_post( __( '<em>Flutter</em>, a collection of bird-related ephemera', 'twentytwentytwo' ) ) . '</h1>
					<!-- /jk:heading --></div>
					<!-- /jk:column -->

					<!-- jk:column {"width":""} -->
					<div class="jk-block-column"></div>
					<!-- /jk:column --></div>
					<!-- /jk:columns -->

					<!-- jk:columns {"align":"wide","style":{"spacing":{"blockGap":"5%"}}} -->
					<div class="jk-block-columns alignwide"><!-- jk:column {"width":"70%","style":{"spacing":{"padding":{"bottom":"32px"}}}} -->
					<div class="jk-block-column" style="padding-bottom:32px;flex-basis:70%"><!-- jk:image {"width":984,"height":1426,"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="jk-block-image size-full is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/bird-on-salmon.jpg" alt="' . esc_attr__( 'Image of a bird on a branch', 'twentytwentytwo' ) . '" width="984" height="1426"/></figure>
					<!-- /jk:image --></div>
					<!-- /jk:column -->

					<!-- jk:column {"width":""} -->
					<div class="jk-block-column"><!-- jk:image {"width":100,"height":47,"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="jk-block-image size-full is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/icon-binoculars.png" alt="' . esc_attr__( 'An icon representing binoculars.', 'twentytwentytwo' ) . '" width="100" height="47"/></figure>
					<!-- /jk:image -->

					<!-- jk:spacer {"height":16} -->
					<div style="height:16px" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer -->

					<!-- jk:heading {"level":3,"fontSize":"large"} -->
					<h3 class="has-large-font-size"><em>' . esc_html__( 'Date', 'twentytwentytwo' ) . '</em></h3>
					<!-- /jk:heading -->

					<!-- jk:paragraph -->
					<p>' . esc_html__( 'February, 12 2021', 'twentytwentytwo' ) . '</p>
					<!-- /jk:paragraph -->

					<!-- jk:spacer {"height":16} -->
					<div style="height:16px" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer -->

					<!-- jk:heading {"level":3,"fontSize":"large"} -->
					<h3 class="has-large-font-size"><em>' . esc_html__( 'Location', 'twentytwentytwo' ) . '</em></h3>
					<!-- /jk:heading -->

					<!-- jk:paragraph -->
					<p>' . jk_kses_post( __( 'The Grand Theater<br>154 Eastern Avenue<br>Maryland NY, 12345', 'twentytwentytwo' ) ) . '</p>
					<!-- /jk:paragraph -->

					<!-- jk:spacer {"height":16} -->
					<div style="height:16px" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer --></div>
					<!-- /jk:column --></div>
					<!-- /jk:columns --></div>
					<!-- /jk:group -->',
);
