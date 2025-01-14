<?php
/**
 * Title: Call to action with image on right
 * Slug: twentytwentyfour/cta-content-image-on-right
 * Categories: call-to-action, banner
 * Viewport width: 1400
 * Description: A title, paragraph, two CTA buttons, and an image for a general CTA section.
 */
?>

<!-- jk:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="jk-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--jk--preset--spacing--50);padding-right:var(--jk--preset--spacing--50);padding-bottom:var(--jk--preset--spacing--50);padding-left:var(--jk--preset--spacing--50)">
	<!-- jk:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
	<div class="jk-block-columns alignwide are-vertically-aligned-center">
		<!-- jk:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="jk-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- jk:heading -->
			<h2 class="jk-block-heading"><?php echo esc_html_x( 'Enhance your architectural journey with the Études Architect app.', 'Sample heading', 'twentytwentyfour' ); ?></h2>
			<!-- /jk:heading -->

			<!-- jk:list {"style":{"typography":{"lineHeight":"1.75"}},"className":"is-style-checkmark-list"} -->
			<ul class="is-style-checkmark-list" style="line-height:1.75">
				<!-- jk:list-item -->
				<li><?php echo esc_html_x( 'Collaborate with fellow architects.', 'Sample list item', 'twentytwentyfour' ); ?></li>
				<!-- /jk:list-item -->

				<!-- jk:list-item -->
				<li><?php echo esc_html_x( 'Showcase your projects.', 'Sample list item', 'twentytwentyfour' ); ?></li>
				<!-- /jk:list-item -->

				<!-- jk:list-item -->
				<li><?php echo esc_html_x( 'Experience the world of architecture.', 'Sample list item', 'twentytwentyfour' ); ?></li>
				<!-- /jk:list-item -->
			</ul>
			<!-- /jk:list -->

			<!-- jk:buttons -->
			<div class="jk-block-buttons">
				<!-- jk:button -->
				<div class="jk-block-button">
					<a class="jk-block-button__link jk-element-button"><?php echo esc_html_x( 'Download app', 'Button text of this section', 'twentytwentyfour' ); ?></a>
				</div>
				<!-- /jk:button -->

				<!-- jk:button {"className":"is-style-outline"} -->
				<div class="jk-block-button is-style-outline">
					<a class="jk-block-button__link jk-element-button"><?php echo esc_html_x( 'How it works', 'Button text of this section', 'twentytwentyfour' ); ?></a>
				</div>
				<!-- /jk:button -->
			</div>
			<!-- /jk:buttons -->
		</div>
		<!-- /jk:column -->

		<!-- jk:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="jk-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- jk:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
			<figure class="jk-block-image size-full is-style-rounded">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/abstract-geometric-art.webp" alt="<?php esc_attr_e( 'White abstract geometric artwork from Dresden, Germany', 'twentytwentyfour' ); ?>" style="aspect-ratio:4/3;object-fit:cover" />
			</figure>
			<!-- /jk:image -->
		</div>
		<!-- /jk:column -->
	</div>
	<!-- /jk:columns -->
</div>
<!-- /jk:group -->
