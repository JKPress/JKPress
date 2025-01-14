<?php
/**
 * Page layout with two columns.
 */
return array(
	'title'      => __( 'Page layout with two columns', 'twentytwentytwo' ),
	'categories' => array( 'twentytwentytwo_pages' ),
	'content'    => '<!-- jk:group {"align":"full","style":{"spacing":{"padding":{"top":"var(--jk--custom--spacing--large, 8rem)","bottom":"var(--jk--custom--spacing--large, 8rem)"}}},"layout":{"inherit":true}} -->
					<div class="jk-block-group alignfull" style="padding-top:var(--jk--custom--spacing--large, 8rem);padding-bottom:var(--jk--custom--spacing--large, 8rem);"><!-- jk:heading {"level":1,"align":"wide","style":{"typography":{"fontSize":"clamp(4rem, 15vw, 12.5rem)","lineHeight":"1","fontWeight":"200"}}} -->
					<h1 class="alignwide" style="font-size:clamp(4rem, 15vw, 12.5rem);font-weight:200;line-height:1">' . jk_kses_post( __( '<em>Goldfinch </em><br><em>&amp; Sparrow</em>', 'twentytwentytwo' ) ) . '</h1>
					<!-- /jk:heading -->

					<!-- jk:spacer {"height":50} -->
					<div style="height:50px" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer -->

					<!-- jk:group {"align":"wide","layout":{"inherit":false}} -->
					<div class="jk-block-group alignwide"><!-- jk:columns -->
					<div class="jk-block-columns"><!-- jk:column {"verticalAlignment":"center","width":"20%"} -->
					<div class="jk-block-column is-vertically-aligned-center" style="flex-basis:20%"><!-- jk:paragraph -->
					<p>' . esc_html__( 'WELCOME', 'twentytwentytwo' ) . '</p>
					<!-- /jk:paragraph --></div>
					<!-- /jk:column -->

					<!-- jk:column {"verticalAlignment":"center","width":"80%"} -->
					<div class="jk-block-column is-vertically-aligned-center" style="flex-basis:80%"><!-- jk:separator {"className":"is-style-wide"} -->
					<hr class="jk-block-separator is-style-wide"/>
					<!-- /jk:separator --></div>
					<!-- /jk:column --></div>
					<!-- /jk:columns --></div>
					<!-- /jk:group -->

					<!-- jk:columns {"align":"wide"} -->
					<div class="jk-block-columns alignwide"><!-- jk:column -->
					<div class="jk-block-column"><!-- jk:paragraph -->
					<p>' . jk_kses_post( __( 'Oh hello. My name’s Angelo, and I operate this blog. I was born in Portland, but I currently live in upstate New York. You may recognize me from publications with names like <a href="#">Eagle Beagle</a> and <a href="#">Mourning Dive</a>. I write for a living.<br><br>I usually use this blog to catalog extensive lists of birds and other things that I find interesting. If you find an error with one of my lists, please keep it to yourself.<br><br>If that’s not your cup of tea, <a href="#">I definitely recommend this tea</a>. It’s my favorite.', 'twentytwentytwo' ) ) . '</p>
					<!-- /jk:paragraph --></div>
					<!-- /jk:column -->

					<!-- jk:column -->
					<div class="jk-block-column"></div>
					<!-- /jk:column --></div>
					<!-- /jk:columns -->

					<!-- jk:spacer -->
					<div style="height:100px" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer -->

					<!-- jk:columns {"align":"wide"} -->
					<div class="jk-block-columns alignwide"><!-- jk:column {"verticalAlignment":"center"} -->
					<div class="jk-block-column is-vertically-aligned-center"><!-- jk:separator {"className":"is-style-wide"} -->
					<hr class="jk-block-separator is-style-wide"/>
					<!-- /jk:separator --></div>
					<!-- /jk:column -->

					<!-- jk:column {"verticalAlignment":"center"} -->
					<div class="jk-block-column is-vertically-aligned-center"><!-- jk:paragraph -->
					<p>' . esc_html__( 'POSTS', 'twentytwentytwo' ) . '</p>
					<!-- /jk:paragraph --></div>
					<!-- /jk:column --></div>
					<!-- /jk:columns -->

					<!-- jk:columns {"align":"wide"} -->
					<div class="jk-block-columns alignwide"><!-- jk:column -->
					<div class="jk-block-column"></div>
					<!-- /jk:column -->

					<!-- jk:column -->
					<div class="jk-block-column"><!-- jk:latest-posts /--></div>
					<!-- /jk:column --></div>
					<!-- /jk:columns --></div>
					<!-- /jk:group -->',
);
