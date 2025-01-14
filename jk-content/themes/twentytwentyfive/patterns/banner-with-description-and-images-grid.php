<?php
/**
 * Title: Banner with description and images grid
 * Slug: twentytwentyfive/banner-description-images-grid
 * Categories: banner, featured
 * Description: A banner with a short paragraph, and two images displayed in a grid layout.
 *
 * @package JKPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- jk:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="jk-block-group alignfull" style="margin-top:0;margin-bottom:0">
	<!-- jk:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","minimumColumnWidth":"26rem"}} -->
	<div class="jk-block-group alignwide" style="padding-top:var(--jk--preset--spacing--50);padding-bottom:var(--jk--preset--spacing--50)">
		<!-- jk:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch","flexWrap":"nowrap"}} -->
		<div class="jk-block-group">
			<!-- jk:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
			<div class="jk-block-group">
				<!-- jk:heading {"className":"is-style-text-annotation"} -->
				<h2 class="jk-block-heading is-style-text-annotation"><?php esc_html_e( 'About Us', 'twentytwentyfive' ); ?></h2>
				<!-- /jk:heading -->

				<!-- jk:paragraph {"className":"is-style-text-subtitle"} -->
				<p class="is-style-text-subtitle">
				<?php
				printf(
					/* translators: %s is the brand name, e.g., 'Fleurs'. */
					esc_html__( '%s is a flower delivery and subscription business. Based in the EU, our mission is not only to deliver stunning flower arrangements across but also foster knowledge and enthusiasm on the beautiful gift of nature: flowers.', 'twentytwentyfive' ),
					'<strong>' . esc_html_x( 'Fleurs', 'Example brand name.', 'twentytwentyfive' ) . '</strong>'
				);
				?>
				</p>
				<!-- /jk:paragraph -->

			</div>
			<!-- /jk:group -->

			<!-- jk:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="jk-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/grid-flower-1.webp" alt="<?php esc_attr_e( 'Photography close up of a red flower.', 'twentytwentyfive' ); ?>" style="aspect-ratio:16/9;object-fit:cover"/></figure>
			<!-- /jk:image -->
		</div>
		<!-- /jk:group -->

		<!-- jk:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
		<figure class="jk-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/grid-flower-2.webp" alt="<?php esc_attr_e( 'Black and white photography close up of a flower.', 'twentytwentyfive' ); ?>" style="aspect-ratio:3/4;object-fit:cover"/></figure>
		<!-- /jk:image -->
	</div>
	<!-- /jk:group -->
</div>
<!-- /jk:group -->
