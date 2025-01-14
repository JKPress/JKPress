<?php
/**
 * Blog footer
 */
return array(
	'title'      => __( 'Blog footer', 'twentytwentytwo' ),
	'categories' => array( 'footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- jk:group {"align":"full","style":{"spacing":{"padding":{"top":"var(--jk--custom--spacing--large, 8rem)","bottom":"var(--jk--custom--spacing--large, 8rem)"}}},"layout":{"inherit":true}} -->
					<div class="jk-block-group alignfull" style="padding-top:var(--jk--custom--spacing--large, 8rem);padding-bottom:var(--jk--custom--spacing--large, 8rem)"><!-- jk:columns {"align":"wide"} -->
					<div class="jk-block-columns alignwide"><!-- jk:column -->
					<div class="jk-block-column"><!-- jk:paragraph {"style":{"typography":{"textTransform":"uppercase"}}} -->
					<p style="text-transform:uppercase">' . esc_html__( 'About us', 'twentytwentytwo' ) . '</p>
					<!-- /jk:paragraph -->

					<!-- jk:paragraph -->
					<p>' . esc_html__( 'We are a rogue collective of bird watchers. We’ve been known to sneak through fences, climb perimeter walls, and generally trespass in order to observe the rarest of birds.', 'twentytwentytwo' ) . '</p>
					<!-- /jk:paragraph --></div>
					<!-- /jk:column -->

					<!-- jk:column -->
					<div class="jk-block-column"><!-- jk:paragraph {"style":{"typography":{"textTransform":"uppercase"}}} -->
					<p style="text-transform:uppercase">' . esc_html__( 'Latest posts', 'twentytwentytwo' ) . '</p>
					<!-- /jk:paragraph -->

					<!-- jk:latest-posts /--></div>
					<!-- /jk:column -->

					<!-- jk:column -->
					<div class="jk-block-column"><!-- jk:paragraph {"style":{"typography":{"textTransform":"uppercase"}}} -->
					<p style="text-transform:uppercase">' . esc_html__( 'Categories', 'twentytwentytwo' ) . '</p>
					<!-- /jk:paragraph -->

					<!-- jk:categories /--></div>
					<!-- /jk:column --></div>
					<!-- /jk:columns -->

					<!-- jk:spacer {"height":50} -->
					<div style="height:50px" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer -->

					<!-- jk:group {"align":"wide","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
					<div class="jk-block-group alignwide" style="padding-top:4rem;padding-bottom:4rem"><!-- jk:site-title {"level":0} /-->

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
