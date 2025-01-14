<?php
/**
 * Title: Centered heading
 * Slug: twentytwentyfive/cta-centered-heading
 * Categories: call-to-action
 * Description: A hero with a centered heading, paragraph and button.
 *
 * @package JKPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- jk:group {"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"margin":{"top":"0","bottom":"0"}},"dimensions":{"minHeight":"0vh"}},"layout":{"type":"constrained"}} -->
<div class="jk-block-group alignfull" style="min-height:0vh;margin-top:0;margin-bottom:0;padding-top:var(--jk--preset--spacing--70);padding-right:var(--jk--preset--spacing--40);padding-bottom:var(--jk--preset--spacing--70);padding-left:var(--jk--preset--spacing--40)">
	<!-- jk:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
	<div class="jk-block-group">
		<!-- jk:heading {"textAlign":"center","style":{"spacing":{"margin":{"right":"0","left":"0"},"padding":{"right":"0","left":"0"}}},"fontSize":"xx-large"} -->
		<h2 class="jk-block-heading has-text-align-center has-xx-large-font-size" style="margin-right:0;margin-left:0;padding-right:0;padding-left:0"><?php esc_html_e( 'Tell your story', 'twentytwentyfive' ); ?></h2>
		<!-- /jk:heading -->
		<!-- jk:paragraph {"align":"center"} -->
		<p class="has-text-align-center"><?php esc_html_e( 'Like flowers that bloom in unexpected places, every story unfolds with beauty and resilience, revealing hidden wonders.', 'twentytwentyfive' ); ?></p>
		<!-- /jk:paragraph -->

		<!-- jk:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="jk-block-buttons">
			<!-- jk:button -->
			<div class="jk-block-button"><a class="jk-block-button__link jk-element-button"><?php esc_html_e( 'Learn more', 'twentytwentyfive' ); ?></a></div>
			<!-- /jk:button --></div>
		<!-- /jk:buttons -->
		</div>
	<!-- /jk:group -->
	</div>
<!-- /jk:group -->
