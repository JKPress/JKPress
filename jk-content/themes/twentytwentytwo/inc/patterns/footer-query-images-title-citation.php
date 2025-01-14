<?php
/**
 * Footer with query, featured images, title, and citation
 */
return array(
	'title'      => __( 'Footer with query, featured images, title, and citation', 'twentytwentytwo' ),
	'categories' => array( 'footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- jk:group {"align":"full","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"backgroundColor":"foreground","textColor":"background","layout":{"inherit":true}} -->
					<div class="jk-block-group alignfull has-background-color has-foreground-background-color has-text-color has-background has-link-color" style="padding-top:4rem;padding-bottom:4rem"><!-- jk:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":3},"align":"wide"} -->
					<div class="jk-block-query alignwide"><!-- jk:post-template -->
					<!-- jk:post-featured-image {"isLink":true,"width":"100%","height":"318px"} /-->

					<!-- jk:post-title {"isLink":true,"fontSize":"x-large"} /-->

					<!-- jk:post-excerpt /-->

					<!-- jk:post-date {"format":"F j, Y","isLink":true,"fontSize":"small"} /-->
					<!-- /jk:post-template --></div>
					<!-- /jk:query -->

					<!-- jk:spacer -->
					<div style="height:100px" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer -->

					<!-- jk:group {"align":"wide","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
					<div class="jk-block-group alignwide" style="padding-top:4rem;padding-bottom:4rem"><!-- jk:site-title {"level":0} /-->
					<!-- jk:group {"layout":{"type":"flex","justifyContent":"right"}} -->
					<div class="jk-block-group">
					<!-- jk:paragraph -->
					<p>' .
					sprintf(
						/* Translators: JKPress link. */
						esc_html__( 'Proudly powered by %s', 'twentytwentytwo' ),
						'<a href="' . esc_url( __( 'https://wordpress.org', 'twentytwentytwo' ) ) . '" rel="nofollow">JKPress</a>'
					) . '</p>
					<!-- /jk:paragraph --></div>
					<!-- /jk:group --></div>
					<!-- /jk:group --></div>
					<!-- /jk:group -->',
);
