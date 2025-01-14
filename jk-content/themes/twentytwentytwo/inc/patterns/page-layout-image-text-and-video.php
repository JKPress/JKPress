<?php
/**
 * Page layout with image, text and video.
 */
return array(
	'title'      => __( 'Page layout with image, text and video', 'twentytwentytwo' ),
	'categories' => array( 'twentytwentytwo_pages' ),
	'content'    => '<!-- jk:group {"align":"full","style":{"spacing":{"padding":{"top":"var(--jk--custom--spacing--large, 8rem)","bottom":"var(--jk--custom--spacing--large, 8rem)"}}},"backgroundColor":"primary","textColor":"background"} -->
					<div class="jk-block-group alignfull has-background-color has-primary-background-color has-text-color has-background" style="padding-top:var(--jk--custom--spacing--large, 8rem);padding-bottom:var(--jk--custom--spacing--large, 8rem)"><!-- jk:group {"layout":{"inherit":true}} -->
					<div class="jk-block-group"><!-- jk:heading {"level":1,"align":"wide","style":{"typography":{"fontSize":"clamp(3rem, 6vw, 4.5rem)"}}} -->
					<h1 class="alignwide" style="font-size:clamp(3rem, 6vw, 4.5rem)">' . jk_kses_post( __( '<em>Warble</em>, a film about <br>hobbyist bird watchers.', 'twentytwentytwo' ) ) . '</h1>
					<!-- /jk:heading -->

					<!-- jk:spacer {"height":50} -->
					<div style="height:50px" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer -->

					<!-- jk:columns {"align":"wide"} -->
					<div class="jk-block-columns alignwide"><!-- jk:column {"width":"33.33%"} -->
					<div class="jk-block-column" style="flex-basis:33.33%"><!-- jk:heading {"fontSize":"x-large"} -->
					<h2 class="has-x-large-font-size">' . esc_html__( 'Screening', 'twentytwentytwo' ) . '</h2>
					<!-- /jk:heading -->

					<!-- jk:paragraph -->
					<p>' . jk_kses_post( __( 'May 14th, 2022 @ 7:00PM<br>The Vintagé Theater,<br>245 Arden Rd.<br>Gardenville, NH', 'twentytwentytwo' ) ) . '</p>
					<!-- /jk:paragraph -->

					<!-- jk:buttons -->
					<div class="jk-block-buttons"><!-- jk:button {"backgroundColor":"secondary","textColor":"primary"} -->
					<div class="jk-block-button"><a class="jk-block-button__link has-primary-color has-secondary-background-color has-text-color has-background">' . esc_html__( 'Buy Tickets', 'twentytwentytwo' ) . '</a></div>
					<!-- /jk:button --></div>
					<!-- /jk:buttons --></div>
					<!-- /jk:column -->

					<!-- jk:column {"width":"66.66%"} -->
					<div class="jk-block-column" style="flex-basis:66.66%"></div>
					<!-- /jk:column --></div>
					<!-- /jk:columns --></div>
					<!-- /jk:group -->

					<!-- jk:image {"align":"full","width":2400,"height":1178,"style":{"color":{}}} -->
					<figure class="jk-block-image alignfull is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/flight-path-on-transparent-a.png" alt="' . esc_attr__( 'An illustration of a bird in flight', 'twentytwentytwo' ) . '" width="2400" height="1178"/></figure>
					<!-- /jk:image -->

					<!-- jk:group {"align":"full","layout":{"inherit":true}} -->
					<div class="jk-block-group alignfull"><!-- jk:columns {"align":"wide"} -->
					<div class="jk-block-columns alignwide"><!-- jk:column {"width":"33.33%"} -->
					<div class="jk-block-column" style="flex-basis:33.33%"><!-- jk:heading {"fontSize":"x-large"} -->
					<h2 class="has-x-large-font-size">' . esc_html__( 'Extended Trailer', 'twentytwentytwo' ) . '</h2>
					<!-- /jk:heading -->

					<!-- jk:paragraph -->
					<p>' . esc_html__( 'Oh hello. My name’s Angelo, and you’ve found your way to my blog. I write about a range of topics, but lately I’ve been sharing my hopes for next year.', 'twentytwentytwo' ) . '</p>
					<!-- /jk:paragraph --></div>
					<!-- /jk:column -->

					<!-- jk:column {"width":"66.66%"} -->
					<div class="jk-block-column" style="flex-basis:66.66%"><!-- jk:video {"id":181} -->
					<figure class="jk-block-video"><video controls src="' . esc_url( get_template_directory_uri() ) . '/assets/videos/birds.mp4"></video></figure>
					<!-- /jk:video --></div>
					<!-- /jk:column --></div>
					<!-- /jk:columns --></div>
					<!-- /jk:group --></div>
					<!-- /jk:group -->',
);
