<?php
/**
 * Title: Heading and paragraph with image on the right
 * Slug: twentytwentyfive/heading-and-paragraph-with-image
 * Categories: about
 * Description: A two-column section with a heading and paragraph on the left, and an image on the right.
 *
 * @package JKPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>

<!-- jk:group {"align":"full","className":"is-style-section-5","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="jk-block-group alignfull is-style-section-5" style="margin-top:0;margin-bottom:0;padding-top:var(--jk--preset--spacing--50);padding-bottom:var(--jk--preset--spacing--50)">
	<!-- jk:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|80"}}}} -->
	<div class="jk-block-columns alignwide">
		<!-- jk:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="jk-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- jk:heading {"className":"jk-block-heading"} -->
			<h2 class="jk-block-heading">
				<?php esc_html_e( 'About the event', 'twentytwentyfive' ); ?>
			</h2>
			<!-- /jk:heading -->
			<!-- jk:paragraph {"fontSize":"medium"} -->
			<p class="has-medium-font-size"><?php echo esc_html_x( 'Held over a weekend, the event is structured around a series of exhibitions, workshops, and panel discussions. The exhibitions showcase a curated selection of photographs that tell compelling stories from various corners of the globe, each image accompanied by detailed narratives that provide context and deeper insight into the historical significance of the scenes depicted. These photographs are drawn from the archives of renowned photographers, as well as emerging talents, ensuring a blend of both classical and contemporary perspectives.', 'Event Overview Text.', 'twentytwentyfive' ); ?></p>
			<!-- /jk:paragraph -->
		</div>
		<!-- /jk:column -->

		<!-- jk:column {"verticalAlignment":"center","width":"50%","layout":{"type":"default"}} -->
		<div class="jk-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- jk:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full"} -->
			<figure class="jk-block-image size-full">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/ruins-image.webp' ); ?>" alt="<?php echo esc_attr_x( 'Cliff Palace, Colorado', 'Alt text for Overview picture.', 'twentytwentyfive' ); ?>" style="aspect-ratio:1;object-fit:cover"/>
			</figure>
			<!-- /jk:image -->
		</div>
		<!-- /jk:column -->
	</div>
	<!-- /jk:columns -->
</div>
<!-- /jk:group -->
