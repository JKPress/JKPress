<?php
/**
 * Title: Services, 3 columns
 * Slug: twentytwentyfive/services-3-col
 * Categories: call-to-action, banner, services
 * Description: Three columns with images and text to showcase services.
 *
 * @package JKPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- jk:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|50","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="jk-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--jk--preset--spacing--50);padding-bottom:var(--jk--preset--spacing--50)">
	<!-- jk:heading {"align":"wide"} -->
	<h2 class="jk-block-heading alignwide"><?php esc_html_e( 'Our services', 'twentytwentyfive' ); ?></h2>
	<!-- /jk:heading -->

	<!-- jk:columns {"align":"wide"} -->
	<div class="jk-block-columns alignwide">
		<!-- jk:column -->
		<div class="jk-block-column">

			<!-- jk:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","style":{"spacing":{"margin":{"bottom":"24px"}}}} -->
			<figure class="jk-block-image size-full" style="margin-bottom:24px">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/campanula-alliariifolia-flower.webp" alt="<?php esc_attr_e( 'Image for service', 'twentytwentyfive' ); ?>" style="aspect-ratio:4/3;object-fit:cover"/>
			</figure>
			<!-- /jk:image -->

			<!-- jk:heading {"level":3} -->
			<h3 class="jk-block-heading"><?php esc_html_e( 'Collect', 'twentytwentyfive' ); ?></h3>
			<!-- /jk:heading -->

			<!-- jk:paragraph {"fontSize":"medium"} -->
			<p class="has-medium-font-size"><?php esc_html_e( 'Like flowers that bloom in unexpected places, every story unfolds with beauty and resilience', 'twentytwentyfive' ); ?></p>
			<!-- /jk:paragraph -->
		</div>
		<!-- /jk:column -->

		<!-- jk:column -->
		<div class="jk-block-column">
			<!-- jk:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","style":{"spacing":{"margin":{"bottom":"24px"}}}} -->
			<figure class="jk-block-image size-full" style="margin-bottom:24px">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/delphinium-flowers.webp" alt="<?php esc_attr_e( 'Image for service', 'twentytwentyfive' ); ?>" style="aspect-ratio:4/3;object-fit:cover"/>
			</figure>
			<!-- /jk:image -->

			<!-- jk:heading {"level":3} -->
			<h3 class="jk-block-heading"><?php esc_html_e( 'Assemble', 'twentytwentyfive' ); ?></h3>
			<!-- /jk:heading -->

			<!-- jk:paragraph {"fontSize":"medium"} -->
			<p class="has-medium-font-size"><?php esc_html_e( 'Like flowers that bloom in unexpected places, every story unfolds with beauty and resilience', 'twentytwentyfive' ); ?></p>
			<!-- /jk:paragraph -->
		</div>
		<!-- /jk:column -->

		<!-- jk:column -->
		<div class="jk-block-column">
			<!-- jk:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","style":{"spacing":{"margin":{"bottom":"24px"}}}} -->
			<figure class="jk-block-image size-full" style="margin-bottom:24px">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/star-thristle-flower.webp" alt="<?php esc_attr_e( 'Image for service', 'twentytwentyfive' ); ?>" style="aspect-ratio:4/3;object-fit:cover"/>
			</figure>
			<!-- /jk:image -->

			<!-- jk:heading {"level":3} -->
			<h3 class="jk-block-heading"><?php esc_html_e( 'Deliver', 'twentytwentyfive' ); ?></h3>
			<!-- /jk:heading -->

			<!-- jk:paragraph {"fontSize":"medium"} -->
			<p class="has-medium-font-size"><?php esc_html_e( 'Like flowers that bloom in unexpected places, every story unfolds with beauty and resilience', 'twentytwentyfive' ); ?></p>
			<!-- /jk:paragraph -->
		</div>
		<!-- /jk:column -->
	</div>
	<!-- /jk:columns -->
</div>
<!-- /jk:group -->
