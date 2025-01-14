<?php
/**
 * Title: Pricing, 2 columns
 * Slug: twentytwentyfive/pricing-2-col
 * Categories: call-to-action
 * Viewport width: 1400
 * Description: Pricing section with two columns, pricing plan, description, and call-to-action buttons.
 *
 * @package JKPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- jk:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="jk-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--jk--preset--spacing--60);padding-bottom:var(--jk--preset--spacing--60)">
	<!-- jk:heading {"textAlign":"center","align":"wide"} -->
	<h2 class="jk-block-heading alignwide has-text-align-center"><?php esc_html_e( 'Pricing', 'twentytwentyfive' ); ?></h2>
	<!-- /jk:heading -->

	<!-- jk:paragraph {"align":"center"} -->
	<p class="has-text-align-center"><?php esc_html_e( 'Cancel or pause anytime.', 'twentytwentyfive' ); ?></p>
	<!-- /jk:paragraph -->

	<!-- jk:spacer {"height":"var:preset|spacing|40"} -->
	<div style="height:var(--jk--preset--spacing--40)" aria-hidden="true" class="jk-block-spacer"></div>
	<!-- /jk:spacer -->

	<!-- jk:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|50"}}}} -->
	<div class="jk-block-columns alignwide">
		<!-- jk:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}},"border":{"width":"1px","color":"var:preset|color|accent-6","radius":"10px"}}} -->
		<div class="jk-block-column has-border-color" style="border-color:var(--jk--preset--color--accent-6);border-width:1px;border-radius:10px;padding-top:var(--jk--preset--spacing--50);padding-right:var(--jk--preset--spacing--50);padding-bottom:var(--jk--preset--spacing--50);padding-left:var(--jk--preset--spacing--50)">
			<!-- jk:heading {"level":3} -->
			<h3 class="jk-block-heading" id="free"><?php esc_html_e( 'Free', 'twentytwentyfive' ); ?></h3>
			<!-- /jk:heading -->

			<!-- jk:paragraph {"fontSize":"large"} -->
			<p class="has-large-font-size"><?php esc_html_e( '0€', 'twentytwentyfive' ); ?></p>
			<!-- /jk:paragraph -->

			<!-- jk:list {"className":"is-style-checkmark-list","style":{"spacing":{"padding":{"left":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"fontSize":"small"} -->
			<ul style="padding-bottom:var(--jk--preset--spacing--20);padding-left:var(--jk--preset--spacing--20)" class="jk-block-list is-style-checkmark-list has-small-font-size">
				<!-- jk:list-item -->
				<li><?php esc_html_e( 'Get access to our paid articles and weekly newsletter.', 'twentytwentyfive' ); ?></li>
				<!-- /jk:list-item -->

				<!-- jk:list-item -->
				<li><?php esc_html_e( 'Join our IRL events.', 'twentytwentyfive' ); ?></li>
				<!-- /jk:list-item -->

				<!-- jk:list-item -->
				<li><?php esc_html_e( 'Get a free tote bag.', 'twentytwentyfive' ); ?></li>
				<!-- /jk:list-item -->

				<!-- jk:list-item -->
				<li><?php esc_html_e( 'An elegant addition of home decor collection.', 'twentytwentyfive' ); ?></li>
				<!-- /jk:list-item -->

				<!-- jk:list-item -->
				<li><?php esc_html_e( 'Join our forums.', 'twentytwentyfive' ); ?></li>
				<!-- /jk:list-item -->
			</ul>
			<!-- /jk:list -->

			<!-- jk:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="jk-block-buttons">
				<!-- jk:button {"width":100} -->
				<div class="jk-block-button has-custom-width jk-block-button__width-100"><a class="jk-block-button__link jk-element-button"><?php echo esc_html_x( 'Join', 'Button text, refers to joining a community. Verb.', 'twentytwentyfive' ); ?></a></div>
				<!-- /jk:button -->
			</div>
			<!-- /jk:buttons -->
		</div>
		<!-- /jk:column -->

		<!-- jk:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}},"border":{"width":"1px","color":"var:preset|color|accent-6","radius":"10px"}},"layout":{"type":"default"}} -->
		<div class="jk-block-column has-border-color" style="border-color:var(--jk--preset--color--accent-6);border-width:1px;border-radius:10px;padding-top:var(--jk--preset--spacing--50);padding-right:var(--jk--preset--spacing--50);padding-bottom:var(--jk--preset--spacing--50);padding-left:var(--jk--preset--spacing--50)">
			<!-- jk:heading {"level":3} -->
			<h3 class="jk-block-heading" id="single"><?php echo esc_html_x( 'Single', 'Name of membership package.', 'twentytwentyfive' ); ?></h3>
			<!-- /jk:heading -->

			<!-- jk:paragraph {"fontSize":"large"} -->
			<p class="has-large-font-size"><?php esc_html_e( '20€/month', 'twentytwentyfive' ); ?></p>
			<!-- /jk:paragraph -->

			<!-- jk:list {"className":"is-style-checkmark-list","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"fontSize":"small"} -->
			<ul style="padding-bottom:var(--jk--preset--spacing--20);padding-left:var(--jk--preset--spacing--20)" class="jk-block-list is-style-checkmark-list has-small-font-size">
				<!-- jk:list-item -->
				<li><?php esc_html_e( 'Get access to our paid articles and weekly newsletter.', 'twentytwentyfive' ); ?></li>
				<!-- /jk:list-item -->

				<!-- jk:list-item -->
				<li><?php esc_html_e( 'Join our IRL events.', 'twentytwentyfive' ); ?></li>
				<!-- /jk:list-item -->

				<!-- jk:list-item -->
				<li><?php esc_html_e( 'Get a free tote bag.', 'twentytwentyfive' ); ?></li>
				<!-- /jk:list-item -->

				<!-- jk:list-item -->
				<li><?php esc_html_e( 'An elegant addition of home decor collection.', 'twentytwentyfive' ); ?></li>
				<!-- /jk:list-item -->

				<!-- jk:list-item -->
				<li><?php esc_html_e( 'Join our forums.', 'twentytwentyfive' ); ?></li>
				<!-- /jk:list-item -->
			</ul>
			<!-- /jk:list -->

			<!-- jk:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="jk-block-buttons">
				<!-- jk:button {"width":100} -->
				<div class="jk-block-button has-custom-width jk-block-button__width-100"><a class="jk-block-button__link jk-element-button"><?php echo esc_html_x( 'Join', 'Button text, refers to joining a community. Verb.', 'twentytwentyfive' ); ?></a></div>
				<!-- /jk:button -->
			</div>
			<!-- /jk:buttons -->
		</div>
		<!-- /jk:column -->
	</div>
	<!-- /jk:columns -->
</div>
<!-- /jk:group -->
