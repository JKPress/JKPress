<?php
/**
 * Dark footer with title and citation
 */
return array(
	'title'      => __( 'Dark footer with title and citation', 'twentytwentytwo' ),
	'categories' => array( 'footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- jk:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"padding":{"top":"var(--jk--custom--spacing--small, 1.25rem)","bottom":"var(--jk--custom--spacing--small, 1.25rem)"}}},"backgroundColor":"foreground","textColor":"background","layout":{"inherit":true}} -->
					<div class="jk-block-group alignfull has-background-color has-foreground-background-color has-text-color has-background has-link-color" style="padding-top:var(--jk--custom--spacing--small, 1.25rem);padding-bottom:var(--jk--custom--spacing--small, 1.25rem)"><!-- jk:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
					<div class="jk-block-group alignwide"><!-- jk:site-title {"level":0} /-->

					<!-- jk:paragraph {"align":"right"} -->
					<p class="has-text-align-right">' .
					sprintf(
						/* Translators: JKPress link. */
						esc_html__( 'Proudly powered by %s', 'twentytwentytwo' ),
						'<a href="' . esc_url( __( 'https://wordpress.org', 'twentytwentytwo' ) ) . '" rel="nofollow">JKPress</a>'
					) . '</p>
					<!-- /jk:paragraph --></div>
					<!-- /jk:group --></div>
					<!-- /jk:group -->',
);
