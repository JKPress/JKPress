<?php
/**
 * Title: Centered call to action
 * Slug: twentytwentyfour/cta-subscribe-centered
 * Categories: call-to-action
 * Keywords: newsletter, subscribe, button
 * Description: Subscribers CTA section with a title, a paragraph and a CTA button.
 */
?>

<!-- jk:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="jk-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--jk--preset--spacing--50);padding-right:var(--jk--preset--spacing--50);padding-bottom:var(--jk--preset--spacing--50);padding-left:var(--jk--preset--spacing--50)">
	<!-- jk:group {"align":"wide","style":{"border":{"radius":"16px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"base-2","layout":{"type":"constrained"}} -->
	<div class="jk-block-group alignwide has-base-2-background-color has-background" style="border-radius:16px;padding-top:var(--jk--preset--spacing--40);padding-right:var(--jk--preset--spacing--50);padding-bottom:var(--jk--preset--spacing--40);padding-left:var(--jk--preset--spacing--50)">
		<!-- jk:spacer {"height":"var:preset|spacing|10"} -->
		<div style="height:var(--jk--preset--spacing--10)" aria-hidden="true" class="jk-block-spacer"></div>
		<!-- /jk:spacer -->

		<!-- jk:heading {"textAlign":"center","fontSize":"x-large"} -->
		<h2 class="jk-block-heading has-text-align-center has-x-large-font-size"><?php echo esc_html_x( 'Join 900+ subscribers', 'Sample text for Subscriber Heading with numbers', 'twentytwentyfour' ); ?></h2>
		<!-- /jk:heading -->

		<!-- jk:paragraph {"align":"center"} -->
		<p class="has-text-align-center"><?php echo esc_html_x( 'Stay in the loop with everything you need to know.', 'Sample text for Subscriber Description', 'twentytwentyfour' ); ?></p>
		<!-- /jk:paragraph -->

		<!-- jk:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="jk-block-buttons">
			<!-- jk:button -->
			<div class="jk-block-button">
				<a class="jk-block-button__link jk-element-button"><?php echo esc_html_x( 'Sign up', 'Sample text for Sign Up Button', 'twentytwentyfour' ); ?></a>
			</div>
			<!-- /jk:button -->
		</div>
		<!-- /jk:buttons -->

		<!-- jk:spacer {"height":"var:preset|spacing|10"} -->
		<div style="height:var(--jk--preset--spacing--10)" aria-hidden="true" class="jk-block-spacer"></div>
		<!-- /jk:spacer -->
	</div>
	<!-- /jk:group -->
</div>
<!-- /jk:group -->
