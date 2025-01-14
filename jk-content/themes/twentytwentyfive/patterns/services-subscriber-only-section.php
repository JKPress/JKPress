<?php
/**
 * Title: Services, subscriber only section
 * Slug: twentytwentyfive/services-subscriber-only-section
 * Categories: call-to-action, services
 * Description: A subscriber-only section highlighting exclusive services and offerings.
 *
 * @package JKPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- jk:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="jk-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--jk--preset--spacing--70);padding-bottom:var(--jk--preset--spacing--70)">
	<!-- jk:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|70","left":"var:preset|spacing|70"}}}} -->
	<div class="jk-block-columns alignwide">
		<!-- jk:column {"verticalAlignment":"center"} -->
		<div class="jk-block-column is-vertically-aligned-center">
			<!-- jk:heading {"fontSize":"xx-large"} -->
			<h2 class="jk-block-heading has-xx-large-font-size"><?php esc_html_e( 'Subscribe to get unlimited access', 'twentytwentyfive' ); ?></h2>
			<!-- /jk:heading -->

			<!-- jk:list {"className":"is-style-checkmark-list","style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"padding":{"left":"var:preset|spacing|30"}}}} -->
			<ul style="margin-top:var(--jk--preset--spacing--40);margin-bottom:var(--jk--preset--spacing--40);padding-left:var(--jk--preset--spacing--30)" class="jk-block-list is-style-checkmark-list">
				<!-- jk:list-item {"fontSize":"medium"} -->
				<li class="has-medium-font-size"><?php esc_html_e( 'Get access to our paid articles and weekly newsletter.', 'twentytwentyfive' ); ?></li>
				<!-- /jk:list-item -->

				<!-- jk:list-item {"fontSize":"medium"} -->
				<li class="has-medium-font-size"><?php esc_html_e( 'Join our IRL events.', 'twentytwentyfive' ); ?></li>
				<!-- /jk:list-item -->

				<!-- jk:list-item {"fontSize":"medium"} -->
				<li class="has-medium-font-size"><?php esc_html_e( 'Get a free tote bag.', 'twentytwentyfive' ); ?></li>
				<!-- /jk:list-item -->

				<!-- jk:list-item {"fontSize":"medium"} -->
				<li class="has-medium-font-size"><?php esc_html_e( 'An elegant addition of home decor collection.', 'twentytwentyfive' ); ?></li>
				<!-- /jk:list-item -->

				<!-- jk:list-item {"fontSize":"medium"} -->
				<li class="has-medium-font-size"><?php esc_html_e( 'Join our forums.', 'twentytwentyfive' ); ?></li>
				<!-- /jk:list-item -->
			</ul>
			<!-- /jk:list -->

			<!-- jk:buttons {"layout":{"type":"flex","justifyContent":"left","flexWrap":"nowrap"}} -->
			<div class="jk-block-buttons">
				<!-- jk:button {"className":"is-style-fill"} -->
				<div class="jk-block-button is-style-fill"><a class="jk-block-button__link jk-element-button"><?php esc_html_e( 'Subscribe', 'twentytwentyfive' ); ?></a></div>
				<!-- /jk:button -->

				<!-- jk:button {"className":"is-style-outline"} -->
				<div class="jk-block-button is-style-outline"><a class="jk-block-button__link jk-element-button"><?php esc_html_e( 'View plans', 'twentytwentyfive' ); ?></a></div>
				<!-- /jk:button -->
			</div>
			<!-- /jk:buttons -->

			<!-- jk:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size"><?php esc_html_e( 'Cancel or pause anytime.', 'twentytwentyfive' ); ?></p>
			<!-- /jk:paragraph -->
		</div>
		<!-- /jk:column -->

		<!-- jk:column {"verticalAlignment":"center"} -->
		<div class="jk-block-column is-vertically-aligned-center">
			<!-- jk:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="jk-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/services-subscriber-photo.webp" alt="<?php esc_attr_e( 'Smartphones capturing a scenic wildflower meadow with trees', 'twentytwentyfive' ); ?>"/></figure>
			<!-- /jk:image -->
		</div>
		<!-- /jk:column -->
	</div>
	<!-- /jk:columns -->
</div>
<!-- /jk:group -->
