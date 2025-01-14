<?php
/**
 * Video with header and details block pattern
 */
return array(
	'title'      => __( 'Video with header and details', 'twentytwentytwo' ),
	'categories' => array( 'featured', 'columns' ),
	'content'    => '<!-- jk:group {"align":"full","style":{"spacing":{"padding":{"top":"var(--jk--custom--spacing--large, 8rem)","bottom":"var(--jk--custom--spacing--large, 8rem)"}},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"backgroundColor":"foreground","textColor":"secondary"} -->
					<div class="jk-block-group alignfull has-secondary-color has-foreground-background-color has-text-color has-background has-link-color" style="padding-top:var(--jk--custom--spacing--large, 8rem);padding-bottom:var(--jk--custom--spacing--large, 8rem)"><!-- jk:group {"align":"full","layout":{"inherit":true}} -->
					<div class="jk-block-group alignfull"><!-- jk:heading {"level":1,"align":"wide","style":{"typography":{"fontSize":"clamp(3rem, 6vw, 4.5rem)"}}} -->
					<h1 class="alignwide" id="warble-a-film-about-hobbyist-bird-watchers-1" style="font-size:clamp(3rem, 6vw, 4.5rem)">' . jk_kses_post( __( '<em>Warble</em>, a film about <br>hobbyist bird watchers.', 'twentytwentytwo' ) ) . '</h1>
					<!-- /jk:heading -->

					<!-- jk:spacer {"height":32} -->
					<div style="height:32px" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer -->

					<!-- jk:video {"align":"wide"} -->
					<figure class="jk-block-video alignwide"><video controls src="' . esc_url( get_template_directory_uri() ) . '/assets/videos/birds.mp4"></video></figure>
					<!-- /jk:video -->

					<!-- jk:spacer {"height":32} -->
					<div style="height:32px" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer -->

					<!-- jk:columns {"align":"wide"} -->
					<div class="jk-block-columns alignwide"><!-- jk:column {"width":"50%"} -->
					<div class="jk-block-column" style="flex-basis:50%"><!-- jk:paragraph -->
					<p><strong>' . esc_html__( 'Featuring', 'twentytwentytwo' ) . '</strong></p>
					<!-- /jk:paragraph --></div>
					<!-- /jk:column -->

					<!-- jk:column -->
					<div class="jk-block-column"><!-- jk:paragraph -->
					<p>' . jk_kses_post( __( 'Jesús Rodriguez<br>Doug Stilton<br>Emery Driscoll<br>Megan Perry<br>Rowan Price', 'twentytwentytwo' ) ) . '</p>
					<!-- /jk:paragraph --></div>
					<!-- /jk:column -->

					<!-- jk:column -->
					<div class="jk-block-column"><!-- jk:paragraph -->
					<p>' . jk_kses_post( __( 'Angelo Tso<br>Edward Stilton<br>Amy Jensen<br>Boston Bell<br>Shay Ford', 'twentytwentytwo' ) ) . '</p>
					<!-- /jk:paragraph --></div>
					<!-- /jk:column --></div>
					<!-- /jk:columns --></div>
					<!-- /jk:group --></div>
					<!-- /jk:group -->',
);
