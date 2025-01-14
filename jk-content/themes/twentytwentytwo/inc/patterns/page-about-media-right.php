<?php
/**
 * About page with media on the right
 */
return array(
	'title'      => __( 'About page with media on the right', 'twentytwentytwo' ),
	'categories' => array( 'twentytwentytwo_pages' ),
	'content'    => '<!-- jk:media-text {"align":"full","mediaPosition":"right","mediaLink":"' . esc_url( get_template_directory_uri() ) . '/assets/images/bird-on-black.jpg","mediaType":"image","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"backgroundColor":"foreground","textColor":"background"} -->
				<div class="jk-block-media-text alignfull has-media-on-the-right is-stacked-on-mobile has-background-color has-foreground-background-color has-text-color has-background has-link-color"><figure class="jk-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/bird-on-black.jpg" alt="' . esc_attr__( 'An image of a bird flying', 'twentytwentytwo' ) . '"/></figure><div class="jk-block-media-text__content"><!-- jk:spacer {"height":32} -->
					<div style="height:32px" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer -->
					<!-- jk:site-logo {"width":60} /-->

					<!-- jk:group {"style":{"spacing":{"padding":{"right":"min(8rem, 5vw)","top":"min(20rem, 20vw)"}}}} -->
					<div class="jk-block-group" style="padding-top:min(20rem, 20vw);padding-right:min(8rem, 5vw)"><!-- jk:heading {"style":{"typography":{"fontWeight":"300","lineHeight":"1.115","fontSize":"clamp(3rem, 6vw, 4.5rem)"}}} -->
					<h2 style="font-size:clamp(3rem, 6vw, 4.5rem);font-weight:300;line-height:1.115"><em>' . jk_kses_post( __( 'Emery<br>Driscoll', 'twentytwentytwo' ) ) . '</em></h2>
					<!-- /jk:heading -->

					<!-- jk:paragraph {"style":{"typography":{"lineHeight":"1.6"}}} -->
					<p style="line-height:1.6">' . esc_html__( 'Oh hello. My name’s Emery, and you’ve found your way to my website. I’m an avid bird watcher, and I also broadcast my own radio show on Tuesday evenings at 11PM EDT.', 'twentytwentytwo' ) . '</p>
					<!-- /jk:paragraph -->

					<!-- jk:spacer {"height":40} -->
					<div style="height:40px" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer -->

					<!-- jk:social-links {"iconColor":"background","iconColorValue":"var(--jk--preset--color--foreground)","iconBackgroundColor":"foreground","iconBackgroundColorValue":"var(--jk--preset--color--background)"} -->
					<ul class="jk-block-social-links has-icon-color has-icon-background-color"><!-- jk:social-link {"url":"#","service":"wordpress"} /-->

					<!-- jk:social-link {"url":"#","service":"twitter"} /-->

					<!-- jk:social-link {"url":"#","service":"instagram"} /--></ul>
					<!-- /jk:social-links --></div>
					<!-- /jk:group --></div>

					<!-- jk:spacer {"height":32} -->
					<div style="height:32px" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer --></div>
					<!-- /jk:media-text -->',
);
