<?php
/**
 * Footer with text, title, and logo
 */
return array(
	'title'      => __( 'Footer with text, title, and logo', 'twentytwentytwo' ),
	'categories' => array( 'footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- jk:group {"align":"full","style":{"spacing":{"padding":{"top":"var(--jk--custom--spacing--large, 8rem)","bottom":"6rem"}}},"backgroundColor":"secondary","layout":{"inherit":true}} -->
					<div class="jk-block-group alignfull has-secondary-background-color has-background" style="padding-top:var(--jk--custom--spacing--large, 8rem);padding-bottom:6rem"><!-- jk:columns {"align":"wide"} -->
					<div class="jk-block-columns alignwide"><!-- jk:column {"width":"33%"} -->
					<div class="jk-block-column" style="flex-basis:33%"><!-- jk:paragraph {"style":{"typography":{"textTransform":"uppercase"}}} -->
					<p style="text-transform:uppercase">' . esc_html__( 'About us', 'twentytwentytwo' ) . '</p>
					<!-- /jk:paragraph -->

					<!-- jk:paragraph {"style":{"fontSize":"small"} -->
					<p class="has-small-font-size">' . esc_html__( 'We are a rogue collective of bird watchers. We’ve been known to sneak through fences, climb perimeter walls, and generally trespass in order to observe the rarest of birds.', 'twentytwentytwo' ) . '</p>
					<!-- /jk:paragraph -->

					<!-- jk:spacer {"height":180} -->
					<div style="height:180px" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer -->

					<!-- jk:site-title {"level":0} /--></div>
					<!-- /jk:column -->

					<!-- jk:column {"verticalAlignment":"bottom"} -->
					<div class="jk-block-column is-vertically-aligned-bottom"><!-- jk:site-logo {"align":"right","width":60} /--></div>
					<!-- /jk:column --></div>
					<!-- /jk:columns --></div>
					<!-- /jk:group -->',
);
