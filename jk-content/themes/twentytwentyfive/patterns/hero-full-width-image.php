<?php
/**
 * Title: Hero, full width image
 * Slug: twentytwentyfive/hero-full-width-image
 * Categories: banner
 * Description: A hero with a full width image, heading, short paragraph and button.
 *
 * @package JKPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>

<!-- jk:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/northern-buttercups-flowers.webp","alt":"Picture of a flower","dimRatio":10,"isUserOverlayColor":true,"focalPoint":{"x":0.5,"y":0.95},"minHeight":840,"minHeightUnit":"px","contentPosition":"bottom center","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="jk-block-cover alignfull has-custom-content-position is-position-bottom-center" style="margin-top:0;margin-bottom:0;padding-top:var(--jk--preset--spacing--50);padding-right:var(--jk--preset--spacing--50);padding-bottom:var(--jk--preset--spacing--50);padding-left:var(--jk--preset--spacing--50);min-height:840px">
	<span aria-hidden="true" class="jk-block-cover__background has-background-dim-10 has-background-dim"></span>
	<img class="jk-block-cover__image-background" alt="<?php echo esc_attr_x( 'Picture of a flower', 'Alt text for cover image.', 'twentytwentyfive' ); ?>" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/northern-buttercups-flowers.webp" style="object-position:50% 95%" data-object-fit="cover" data-object-position="50% 95%"/>
	<div class="jk-block-cover__inner-container">
		<!-- jk:group {"align":"wide","layout":{"type":"constrained","justifyContent":"left"}} -->
		<div class="jk-block-group alignwide">
			<!-- jk:heading {"textAlign":"left","fontSize":"xx-large"} -->
			<h2 class="jk-block-heading has-text-align-left has-xx-large-font-size"><?php echo esc_html_x( 'Tell your story', 'Sample hero heading', 'twentytwentyfive' ); ?></h2>
			<!-- /jk:heading -->

			<!-- jk:paragraph -->
			<p><?php echo esc_html_x( 'Like flowers that bloom in unexpected places, every story unfolds with beauty and resilience, revealing hidden wonders.', 'Sample hero paragraph', 'twentytwentyfive' ); ?></p>
			<!-- /jk:paragraph -->

			<!-- jk:buttons -->
			<div class="jk-block-buttons">
				<!-- jk:button -->
				<div class="jk-block-button"><a class="jk-block-button__link jk-element-button"><?php echo esc_html_x( 'Learn More', 'Sample hero button', 'twentytwentyfive' ); ?></a></div>
				<!-- /jk:button -->
			</div>
			<!-- /jk:buttons -->
		</div>
		<!-- /jk:group -->
	</div>
</div>
<!-- /jk:cover -->
