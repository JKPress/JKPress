<?php
/**
 * Simple dark about page
 */
return array(
	'title'      => __( 'Simple dark about page', 'twentytwentytwo' ),
	'categories' => array( 'twentytwentytwo_pages' ),
	'content'    => '<!-- jk:cover {"overlayColor":"foreground","minHeight":100,"minHeightUnit":"vh","contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"top":"max(1.25rem, 8vw)","right":"max(1.25rem, 8vw)","bottom":"max(1.25rem, 8vw)","left":"max(1.25rem, 8vw)"}}}} -->
					<div class="jk-block-cover alignfull has-foreground-background-color has-background-dim" style="padding-top:max(1.25rem, 8vw);padding-right:max(1.25rem, 8vw);padding-bottom:max(1.25rem, 8vw);padding-left:max(1.25rem, 8vw);min-height:100vh"><div class="jk-block-cover__inner-container"><!-- jk:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"},"overlayMenu":"always"} -->
					<!-- jk:page-list {"isNavigationChild":true,"showSubmenuIcon":true,"openSubmenusOnClick":false} /-->
					<!-- /jk:navigation -->

					<!-- jk:columns -->
					<div class="jk-block-columns"><!-- jk:column {"verticalAlignment":"bottom","width":"45%","style":{"spacing":{"padding":{"top":"12rem"}}}} -->
					<div class="jk-block-column is-vertically-aligned-bottom" style="padding-top:12rem;flex-basis:45%"><!-- jk:site-logo {"width":60} /-->

					<!-- jk:heading {"style":{"typography":{"fontWeight":"300","lineHeight":"1.115","fontSize":"clamp(3rem, 6vw, 4.5rem)"}}} -->
					<h2 style="font-size:clamp(3rem, 6vw, 4.5rem);font-weight:300;line-height:1.115"><em>' . jk_kses_post( __( 'Jesús<br>Rodriguez', 'twentytwentytwo' ) ) . '</em></h2>
					<!-- /jk:heading -->

					<!-- jk:paragraph {"style":{"typography":{"lineHeight":"1.6"}}} -->
					<p style="line-height:1.6">' . esc_html__( 'Oh hello. My name’s Jesús, and you’ve found your way to my website. I’m an avid bird watcher, and I also broadcast my own radio show on Tuesday evenings at 11PM EDT.', 'twentytwentytwo' ) . '</p>
					<!-- /jk:paragraph -->

					<!-- jk:spacer {"height":40} -->
					<div style="height:40px" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer -->

					<!-- jk:social-links {"iconColor":"background","iconColorValue":"var(--jk--preset--color--foreground)","iconBackgroundColor":"foreground","iconBackgroundColorValue":"var(--jk--preset--color--background)"} -->
					<ul class="jk-block-social-links has-icon-color has-icon-background-color"><!-- jk:social-link {"url":"#","service":"wordpress"} /-->

					<!-- jk:social-link {"url":"#","service":"twitter"} /-->

					<!-- jk:social-link {"url":"#","service":"instagram"} /--></ul>
					<!-- /jk:social-links --></div>
					<!-- /jk:column -->

					<!-- jk:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0rem","right":"0rem","bottom":"4rem","left":"0rem"}}}} -->
					<div class="jk-block-column is-vertically-aligned-center" style="padding-top:0rem;padding-right:0rem;padding-bottom:4rem;padding-left:0rem"><!-- jk:separator {"color":"background","className":"is-style-wide"} -->
					<hr class="jk-block-separator has-text-color has-background has-background-background-color has-background-color is-style-wide"/>
					<!-- /jk:separator --></div>
					<!-- /jk:column --></div>
					<!-- /jk:columns --></div></div>
					<!-- /jk:cover -->',
);
