<?php
/**
 * Title: 2 columns with avatar
 * Slug: twentytwentyfive/testimonials-2-col
 * Keywords: testimonial
 * Categories: testimonials
 * Description: Two columns with testimonials and avatars.
 *
 * @package JKPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- jk:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="jk-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--jk--preset--spacing--60);padding-bottom:var(--jk--preset--spacing--60)">
	<!-- jk:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|50"}}}} -->
	<div class="jk-block-columns alignwide">
		<!-- jk:column -->
		<div class="jk-block-column">
			<!-- jk:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
			<div class="jk-block-columns">
				<!-- jk:column {"width":"64px"} -->
				<div class="jk-block-column" style="flex-basis:64px">
					<!-- jk:image {"width":"64px","aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
					<figure class="jk-block-image size-large is-resized is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/nurse.webp" alt="<?php echo esc_attr_x( 'Picture of a person', 'Alt text for testimonial image.', 'twentytwentyfive' ); ?>" style="aspect-ratio:1;object-fit:cover;width:64px"/></figure>
					<!-- /jk:image -->
				</div>
				<!-- /jk:column -->

				<!-- jk:column -->
				<div class="jk-block-column">
					<!-- jk:quote {"className":"is-style-plain","style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"blockGap":"var:preset|spacing|40"}},"fontSize":"x-large"} -->
					<blockquote class="jk-block-quote is-style-plain has-x-large-font-size" style="font-style:normal;font-weight:400">
						<!-- jk:paragraph {"style":{"typography":{"lineHeight":"1.1"}}} -->
						<p style="line-height:1.1"><?php echo esc_html_x( '“Superb product and customer service!”', 'Sample testimonial.', 'twentytwentyfive' ); ?></p>
						<!-- /jk:paragraph -->
						<cite><?php echo jk_kses_post( _x( 'Jo Mulligan <br /><sub>Atlanta, GA</sub>', 'Sample testimonial citation.', 'twentytwentyfive' ) ); ?></cite>
					</blockquote>
					<!-- /jk:quote -->
				</div>
				<!-- /jk:column -->
			</div>
			<!-- /jk:columns -->
		</div>
		<!-- /jk:column -->

		<!-- jk:column {"width":""} -->
		<div class="jk-block-column">
			<!-- jk:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
			<div class="jk-block-columns">
				<!-- jk:column {"width":"64px"} -->
				<div class="jk-block-column" style="flex-basis:64px">
					<!-- jk:image {"width":"64px","aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
					<figure class="jk-block-image size-large is-resized is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/nurse.webp" alt="<?php echo esc_attr_x( 'Picture of a person', 'Alt text for testimonial image.', 'twentytwentyfive' ); ?>" style="aspect-ratio:1;object-fit:cover;width:64px"/></figure>
					<!-- /jk:image -->
				</div>
				<!-- /jk:column -->

				<!-- jk:column -->
				<div class="jk-block-column">
					<!-- jk:quote {"className":"is-style-plain","style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"blockGap":"var:preset|spacing|40"}},"fontSize":"x-large"} -->
					<blockquote class="jk-block-quote is-style-plain has-x-large-font-size" style="font-style:normal;font-weight:400">
						<!-- jk:paragraph {"style":{"typography":{"lineHeight":"1.1"}}} -->
						<p style="line-height:1.1"><?php echo esc_html_x( '“Amazing quality and care. I love all your products.”', 'Sample testimonial.', 'twentytwentyfive' ); ?></p>
						<!-- /jk:paragraph -->
						<cite><?php echo jk_kses_post( _x( 'Otto Reid <br><sub>Springfield, IL</sub>', 'Sample testimonial citation.', 'twentytwentyfive' ) ); ?></cite>
					</blockquote>
					<!-- /jk:quote -->
				</div>
				<!-- /jk:column -->
			</div>
			<!-- /jk:columns -->
		</div>
		<!-- /jk:column -->
	</div>
	<!-- /jk:columns -->
</div>
<!-- /jk:group -->
