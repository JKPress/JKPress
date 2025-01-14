<?php
/**
 * Title: Short heading and paragraph and image on the left
 * Slug: twentytwentyfive/banner-intro-image
 * Categories: banner, featured
 * Description: A Intro pattern with Short heading, paragraph and image on the left.
 *
 * @package JKPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- jk:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="jk-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--jk--preset--spacing--50);padding-bottom:var(--jk--preset--spacing--50)">
	<!-- jk:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
	<div class="jk-block-columns alignwide">
		<!-- jk:column {"width":"56%"} -->
		<div class="jk-block-column" style="flex-basis:56%">
			<!-- jk:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full"} -->
			<figure class="jk-block-image size-full">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/botany-flowers.webp" alt="<?php echo esc_attr_x( 'Picture of a flower', 'Alt text for intro picture.', 'twentytwentyfive' ); ?>" style="aspect-ratio:1;object-fit:cover"/>
			</figure>
			<!-- /jk:image -->
		</div>
		<!-- /jk:column -->

		<!-- jk:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
		<div class="jk-block-column is-vertically-aligned-center">
			<!-- jk:heading -->
			<h2 class="jk-block-heading"><?php echo esc_html_x( 'New arrivals', 'Heading for banner pattern.', 'twentytwentyfive' ); ?></h2>
			<!-- /jk:heading -->

			<!-- jk:paragraph -->
			<p><?php echo esc_html_x( 'Like flowers that bloom in unexpected places, every story unfolds with beauty and resilience, revealing hidden wonders.', 'Sample description for banner with flower.', 'twentytwentyfive' ); ?></p>
			<!-- /jk:paragraph -->

			<!-- jk:buttons -->
			<div class="jk-block-buttons">
				<!-- jk:button -->
				<div class="jk-block-button">
					<a class="jk-block-button__link jk-element-button"><?php echo esc_html_x( 'Learn More', 'Button text of intro section.', 'twentytwentyfive' ); ?></a>
				</div>
				<!-- /jk:button -->
			</div>
			<!-- /jk:buttons -->
		</div>
		<!-- /jk:column -->
	</div>
	<!-- /jk:columns -->
</div>
<!-- /jk:group -->
