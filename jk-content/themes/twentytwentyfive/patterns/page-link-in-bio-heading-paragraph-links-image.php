<?php
/**
 * Title: Link in bio heading, paragraph, links and full-height image
 * Slug: twentytwentyfive/page-link-in-bio-heading-paragraph-links-image
 * Categories: twentytwentyfive_page, banner, featured
 * Keywords: starter
 * Block Types: core/post-content
 * Viewport width: 1400
 * Description: A link in bio landing page with a heading, paragraph, links and a full height image.
 *
 * @package JKPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- jk:group {"align":"full","className":"is-style-section-4","style":{"dimensions":{"minHeight":"100vh"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="jk-block-group alignfull is-style-section-4" style="min-height:100vh;margin-top:0;margin-bottom:0">
	<!-- jk:columns {"align":"full"} -->
	<div class="jk-block-columns alignfull">
		<!-- jk:column {"verticalAlignment":"center"} -->
		<div class="jk-block-column is-vertically-aligned-center">
			<!-- jk:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
			<div class="jk-block-group" style="padding-top:var(--jk--preset--spacing--50);padding-right:var(--jk--preset--spacing--50);padding-bottom:var(--jk--preset--spacing--50);padding-left:var(--jk--preset--spacing--50)">
				<!-- jk:heading -->
				<h2 class="jk-block-heading"><?php esc_html_e( 'Lewis Hine', 'twentytwentyfive' ); ?></h2>
				<!-- /jk:heading -->

				<!-- jk:paragraph -->
				<p><?php esc_html_e( 'Lewis W. Hine studied sociology before moving to New York in 1901 to work at the Ethical Culture School, where he took up photography to enhance his teaching practices', 'twentytwentyfive' ); ?></p>
				<!-- /jk:paragraph -->

				<!-- jk:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="jk-block-group">
					<!-- jk:paragraph -->
					<p><a href="#"><?php esc_html_e( 'Instagram', 'twentytwentyfive' ); ?></a></p>
					<!-- /jk:paragraph -->

					<!-- jk:paragraph -->
					<p><a href="#"><?php echo esc_html_x( 'X', 'Refers to the social media platform formerly known as Twitter.', 'twentytwentyfive' ); ?></a></p>
					<!-- /jk:paragraph -->

					<!-- jk:paragraph -->
					<p><a href="#"><?php esc_html_e( 'TikTok', 'twentytwentyfive' ); ?></a></p>
					<!-- /jk:paragraph -->
				</div>
				<!-- /jk:group -->
			</div>
			<!-- /jk:group -->
		</div>
		<!-- /jk:column -->

		<!-- jk:column -->
		<div class="jk-block-column">
			<!-- jk:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/link-in-bio-background.webp","alt":"Photo of a woman worker.","dimRatio":0,"customOverlayColor":"#6b6b6b","isUserOverlayColor":true,"minHeight":100,"minHeightUnit":"vh","layout":{"type":"default"}} -->
			<div class="jk-block-cover" style="min-height:100vh"><span aria-hidden="true" class="jk-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#6b6b6b"></span>
				<img class="jk-block-cover__image-background" alt="<?php esc_attr_e( 'Photo of a woman worker.', 'twentytwentyfive' ); ?>" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/link-in-bio-background.webp" data-object-fit="cover"/><div class="jk-block-cover__inner-container">
				<!-- jk:spacer {"height":"var:preset|spacing|20"} -->
				<div style="height:var(--jk--preset--spacing--20)" aria-hidden="true" class="jk-block-spacer"></div>
				<!-- /jk:spacer -->
			</div></div>
			<!-- /jk:cover -->
		</div>
		<!-- /jk:column -->
	</div>
	<!-- /jk:columns -->
</div>
<!-- /jk:group -->
