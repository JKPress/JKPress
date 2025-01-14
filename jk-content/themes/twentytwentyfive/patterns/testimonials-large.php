<?php
/**
 * Title: Review with large image on right
 * Slug: twentytwentyfive/testimonials-large
 * Keywords: testimonial
 * Categories: testimonials
 * Description: A testimonial with a large image on the right.
 *
 * @package JKPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- jk:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="jk-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--jk--preset--spacing--60);padding-bottom:var(--jk--preset--spacing--60)">
	<!-- jk:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60"}}}} -->
	<div class="jk-block-columns alignwide">
		<!-- jk:column -->
		<div class="jk-block-column">
			<!-- jk:group {"style":{"dimensions":{"minHeight":"100%"},"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left","flexWrap":"wrap","verticalAlignment":"space-between"}} -->
			<div class="jk-block-group" style="min-height:100%">
				<!-- jk:heading {"className":"is-style-text-annotation","style":{"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"x-small"} -->
				<h2 class="jk-block-heading is-style-text-annotation has-x-small-font-size"><?php echo esc_html_x( 'What people are saying', 'Testimonial heading.', 'twentytwentyfive' ); ?></h2>
				<!-- /jk:heading -->

				<!-- jk:quote {"className":"is-style-plain","style":{"spacing":{"blockGap":"var:preset|spacing|50"},"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"x-large"} -->
				<blockquote class="jk-block-quote is-style-plain has-x-large-font-size" style="font-style:normal;font-weight:400">
					<!-- jk:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","justifyContent":"left","contentSize":"400px"}} -->
					<div class="jk-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
						<!-- jk:paragraph {"fontSize":"xx-large"} -->
						<p class="has-xx-large-font-size"><?php echo esc_html_x( '“Superb product and customer service!”', 'Sample testimonial.', 'twentytwentyfive' ); ?></p>
						<!-- /jk:paragraph -->
					</div>
					<!-- /jk:group -->
					<cite><?php echo jk_kses_post( _x( 'Jo Mulligan <br /><sub>Atlanta, GA</sub>', 'Sample testimonial citation.', 'twentytwentyfive' ) ); ?></cite>
				</blockquote>
				<!-- /jk:quote -->
			</div>
			<!-- /jk:group -->
		</div>
		<!-- /jk:column -->

		<!-- jk:column {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
		<div class="jk-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
			<!-- jk:image {"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none"} -->
			<figure class="jk-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/typewriter.webp" alt="<?php echo esc_attr_x( 'Picture of a person typing on a typewriter.', 'Alt text for testimonial image.', 'twentytwentyfive' ); ?>" style="aspect-ratio:1;object-fit:cover"/></figure>
			<!-- /jk:image -->
		</div>
		<!-- /jk:column -->
	</div>
	<!-- /jk:columns -->
</div>
<!-- /jk:group -->
