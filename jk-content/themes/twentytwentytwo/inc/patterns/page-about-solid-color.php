<?php
/**
 * About page on solid color background
 */
return array(
	'title'      => __( 'About page on solid color background', 'twentytwentytwo' ),
	'categories' => array( 'twentytwentytwo_pages' ),
	'content'    => '<!-- jk:group {"align":"full","style":{"spacing":{"padding":{"top":"1.25rem","right":"1.25rem","bottom":"1.25rem","left":"1.25rem"}}}} -->
					<div class="jk-block-group alignfull" style="padding-top:1.25rem;padding-right:1.25rem;padding-bottom:1.25rem;padding-left:1.25rem"><!-- jk:cover {"overlayColor":"secondary","minHeight":80,"minHeightUnit":"vh","isDark":false,"align":"full"} -->
					<div class="jk-block-cover alignfull is-light" style="min-height:80vh"><span aria-hidden="true" class="has-secondary-background-color has-background-dim-100 jk-block-cover__gradient-background has-background-dim"></span><div class="jk-block-cover__inner-container"><!-- jk:group {"layout":{"inherit":false,"contentSize":"400px"}} -->
					<div class="jk-block-group"><!-- jk:spacer {"height":64} -->
					<div style="height:64px" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer --><!-- jk:heading {"style":{"typography":{"lineHeight":"1","textTransform":"uppercase","fontSize":"clamp(2.75rem, 6vw, 3.25rem)"}}} -->
					<h2 id="edvard-smith" style="font-size:clamp(2.75rem, 6vw, 3.25rem);line-height:1;text-transform:uppercase">' . jk_kses_post( __( 'Edvard<br>Smith', 'twentytwentytwo' ) ) . '</h2>
					<!-- /jk:heading -->

					<!-- jk:spacer {"height":8} -->
					<div style="height:8px" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer -->

					<!-- jk:paragraph {"fontSize":"small"} -->
					<p class="has-small-font-size">' . esc_html__( 'Oh hello. My name’s Edvard, and you’ve found your way to my website. I’m an avid bird watcher, and I also broadcast my own radio show every Tuesday evening at 11PM EDT. Listen in sometime!', 'twentytwentytwo' ) . '</p>
					<!-- /jk:paragraph -->

					<!-- jk:spacer {"height":8} -->
					<div style="height:8px" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer -->

					<!-- jk:social-links {"iconColor":"foreground","iconColorValue":"var(--jk--preset--color--foreground)","className":"is-style-logos-only"} -->
					<ul class="jk-block-social-links has-icon-color is-style-logos-only"><!-- jk:social-link {"url":"#","service":"wordpress"} /-->

					<!-- jk:social-link {"url":"#","service":"twitter"} /-->

					<!-- jk:social-link {"url":"#","service":"instagram"} /--></ul>
					<!-- /jk:social-links --><!-- jk:spacer {"height":64} -->
					<div style="height:64px" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer --></div>
					<!-- /jk:group --></div></div>
					<!-- /jk:cover --></div>
					<!-- /jk:group -->',
);
