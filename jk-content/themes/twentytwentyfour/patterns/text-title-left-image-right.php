<?php
/**
 * Title: Title text and button on left with image on right
 * Slug: twentytwentyfour/text-title-left-image-right
 * Categories: banner, about, featured
 * Viewport width: 1400
 * Description: A title, a paragraph and a CTA button on the left with an image on the right.
 */
?>

<!-- jk:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"accent","layout":{"type":"constrained"}} -->
<div class="jk-block-group alignfull has-accent-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--jk--preset--spacing--50);padding-right:var(--jk--preset--spacing--50);padding-bottom:var(--jk--preset--spacing--50);padding-left:var(--jk--preset--spacing--50)">
	<!-- jk:columns {"verticalAlignment":null,"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|50"}}}} -->
	<div class="jk-block-columns alignwide">
		<!-- jk:column {"verticalAlignment":"stretch","width":"50%"} -->
		<div class="jk-block-column is-vertically-aligned-stretch" style="flex-basis:50%">
			<!-- jk:group {"style":{"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
			<div class="jk-block-group" style="min-height:100%">

				<!-- jk:paragraph {"style":{"typography":{"lineHeight":"1.2"}},"fontSize":"x-large","fontFamily":"heading"} -->
				<p class="has-heading-font-family has-x-large-font-size" style="line-height:1.2"><?php echo esc_html_x( 'Études offers comprehensive consulting, management, design, and research solutions. Every architectural endeavor is an opportunity to shape the future.', 'Headline for the About pattern', 'twentytwentyfour' ); ?></p>
				<!-- /jk:paragraph -->

				<!-- jk:group {"layout":{"type":"constrained","contentSize":"300px","justifyContent":"left"}} -->
				<div class="jk-block-group">

					<!-- jk:paragraph {"style":{"layout":{"selfStretch":"fixed","flexSize":"50%"}}} -->
					<p><?php echo esc_html_x( 'Leaving an indelible mark on the landscape of tomorrow.', 'Description for the About pattern', 'twentytwentyfour' ); ?></p>
					<!-- /jk:paragraph -->

					<!-- jk:buttons -->
					<div class="jk-block-buttons">
						<!-- jk:button -->
						<div class="jk-block-button">
							<a class="jk-block-button__link jk-element-button"><?php echo esc_html_x( 'About us', 'Call to Action button text', 'twentytwentyfour' ); ?></a>
						</div>
						<!-- /jk:button -->
					</div>
					<!-- /jk:buttons -->
				</div>
				<!-- /jk:group -->
			</div>
			<!-- /jk:group -->
		</div>
		<!-- /jk:column -->

		<!-- jk:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="jk-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- jk:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
			<figure class="jk-block-image size-large is-style-rounded">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/museum.webp" alt="<?php esc_attr_e( 'A ramp along a curved wall in the Kiasma Museu, Helsinki, Finland', 'twentytwentyfour' ); ?>" style="aspect-ratio:3/4;object-fit:cover" />
			</figure>
			<!-- /jk:image -->
		</div>
		<!-- /jk:column -->
	</div>
	<!-- /jk:columns -->
</div>
<!-- /jk:group -->
