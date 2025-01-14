<?php
/**
 * About page with media on the left
 */
return array(
	'title'      => __( 'About page with media on the left', 'twentytwentytwo' ),
	'categories' => array( 'twentytwentytwo_pages' ),
	'content'    => '<!-- jk:media-text {"align":"full","mediaType":"image","imageFill":true,"focalPoint":{"x":"0.63","y":"0.16"},"backgroundColor":"foreground","className":"alignfull is-image-fill has-background-color has-text-color has-background has-link-color"} -->
					<div class="jk-block-media-text alignfull is-stacked-on-mobile is-image-fill has-background-color has-text-color has-background has-link-color has-foreground-background-color has-background"><figure class="jk-block-media-text__media" style="background-image:url(' . esc_url( get_template_directory_uri() ) . '/assets/images/bird-on-salmon.jpg);background-position:63% 16%"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/bird-on-salmon.jpg" alt="' . esc_attr__( 'Image of a bird on a branch', 'twentytwentytwo' ) . '"/></figure><div class="jk-block-media-text__content"><!-- jk:spacer {"height":32} -->
					<div style="height:32px" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer -->

					<!-- jk:site-logo {"width":60} /-->

					<!-- jk:group {"style":{"spacing":{"padding":{"right":"min(8rem, 5vw)","top":"min(28rem, 28vw)"}}}} -->
					<div class="jk-block-group" style="padding-top:min(28rem, 28vw);padding-right:min(8rem, 5vw)"><!-- jk:heading {"style":{"typography":{"fontWeight":"300","lineHeight":"1.115","fontSize":"clamp(3rem, 6vw, 4.5rem)"}}} -->
					<h2 style="font-size:clamp(3rem, 6vw, 4.5rem);font-weight:300;line-height:1.115"><em>' . esc_html__( 'Doug', 'twentytwentytwo' ) . '<br>' . esc_html__( 'Stilton', 'twentytwentytwo' ) . '</em></h2>
					<!-- /jk:heading -->

					<!-- jk:paragraph {"style":{"typography":{"lineHeight":"1.6"}}} -->
					<p style="line-height:1.6">' . esc_html__( 'Oh hello. My name’s Doug, and you’ve found your way to my website. I’m an avid bird watcher, and I also broadcast my own radio show on Tuesday evenings at 11PM EDT.', 'twentytwentytwo' ) . '</p>
					<!-- /jk:paragraph -->

					<!-- jk:spacer {"height":40} -->
					<div style="height:40px" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer -->

					<!-- jk:social-links {"iconColor":"background","iconColorValue":"var(--jk--preset--color--background)","iconBackgroundColor":"foreground","iconBackgroundColorValue":"var(--jk--preset--color--foreground)"} -->
					<ul class="jk-block-social-links has-icon-color has-icon-background-color"><!-- jk:social-link {"url":"#","service":"wordpress"} /-->

					<!-- jk:social-link {"url":"#","service":"twitter"} /-->

					<!-- jk:social-link {"url":"#","service":"instagram"} /--></ul>
					<!-- /jk:social-links --></div>
					<!-- /jk:group -->

					<!-- jk:spacer {"height":32} -->
					<div style="height:32px" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer --></div></div>
					<!-- /jk:media-text -->',
);
