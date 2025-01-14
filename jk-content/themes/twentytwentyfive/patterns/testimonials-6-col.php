<?php
/**
 * Title: 3 column layout with 6 testimonials
 * Slug: twentytwentyfive/testimonials-6-col
 * Keywords: testimonial
 * Categories: testimonials
 * Description: A section with three columns and two rows, each containing a testimonial and citation.
 *
 * @package JKPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- jk:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|50","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="jk-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--jk--preset--spacing--60);padding-bottom:var(--jk--preset--spacing--60)">
	<!-- jk:heading {"align":"wide","fontSize":"xx-large"} -->
	<h2 class="jk-block-heading alignwide has-xx-large-font-size"><?php echo esc_html_x( 'What people are saying', 'Testimonial section heading.', 'twentytwentyfive' ); ?></h2>
	<!-- /jk:heading -->

	<!-- jk:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|50"}}}} -->
	<div class="jk-block-columns alignwide">
		<!-- jk:column {"style":{"border":{"width":"1px","color":"var(--jk--preset--color--accent-6)","radius":"10px"},"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
		<div class="jk-block-column has-border-color" style="border-color:var(--jk--preset--color--accent-6);border-width:1px;border-radius:10px;padding-top:var(--jk--preset--spacing--40);padding-right:var(--jk--preset--spacing--40);padding-bottom:var(--jk--preset--spacing--40);padding-left:var(--jk--preset--spacing--40)">
			<!-- jk:quote {"className":"is-style-plain","style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"blockGap":"var:preset|spacing|40"}},"fontSize":"x-large"} -->
			<blockquote class="jk-block-quote is-style-plain has-x-large-font-size" style="font-style:normal;font-weight:400">
				<!-- jk:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","justifyContent":"left","contentSize":"400px"}} -->
				<div class="jk-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
					<!-- jk:paragraph {"style":{"typography":{"lineHeight":"1.1"}}} -->
					<p style="line-height:1.1"><?php echo esc_html_x( '“Amazing quality and care. I love all your products.”', 'Sample testimonial.', 'twentytwentyfive' ); ?></p>
					<!-- /jk:paragraph -->
				</div>
				<!-- /jk:group -->
				<cite><?php echo jk_kses_post( _x( 'Otto Reid <br><sub>Springfield, IL</sub>', 'Sample testimonial citation.', 'twentytwentyfive' ) ); ?></cite>
			</blockquote>
			<!-- /jk:quote -->
		</div>
		<!-- /jk:column -->

		<!-- jk:column {"style":{"border":{"width":"1px","color":"var(--jk--preset--color--accent-6)","radius":"10px"},"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
		<div class="jk-block-column has-border-color" style="border-color:var(--jk--preset--color--accent-6);border-width:1px;border-radius:10px;padding-top:var(--jk--preset--spacing--40);padding-right:var(--jk--preset--spacing--40);padding-bottom:var(--jk--preset--spacing--40);padding-left:var(--jk--preset--spacing--40)">
			<!-- jk:quote {"className":"is-style-plain","style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"blockGap":"var:preset|spacing|40"}},"fontSize":"x-large"} -->
			<blockquote class="jk-block-quote is-style-plain has-x-large-font-size" style="font-style:normal;font-weight:400">
				<!-- jk:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","justifyContent":"left","contentSize":"400px"}} -->
				<div class="jk-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
					<!-- jk:paragraph {"style":{"typography":{"lineHeight":"1.1"}}} -->
					<p style="line-height:1.1"><?php echo esc_html_x( '“Amazing quality and care. I love all your products.”', 'Sample testimonial.', 'twentytwentyfive' ); ?></p>
					<!-- /jk:paragraph -->
				</div>
				<!-- /jk:group -->
				<cite><?php echo jk_kses_post( _x( 'Otto Reid <br><sub>Springfield, IL</sub>', 'Sample testimonial citation.', 'twentytwentyfive' ) ); ?></cite>
			</blockquote>
			<!-- /jk:quote -->
		</div>
		<!-- /jk:column -->

		<!-- jk:column {"style":{"border":{"width":"1px","color":"var(--jk--preset--color--accent-6)","radius":"10px"},"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
		<div class="jk-block-column has-border-color" style="border-color:var(--jk--preset--color--accent-6);border-width:1px;border-radius:10px;padding-top:var(--jk--preset--spacing--40);padding-right:var(--jk--preset--spacing--40);padding-bottom:var(--jk--preset--spacing--40);padding-left:var(--jk--preset--spacing--40)">
			<!-- jk:quote {"className":"is-style-plain","style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"blockGap":"var:preset|spacing|40"}},"fontSize":"x-large"} -->
			<blockquote class="jk-block-quote is-style-plain has-x-large-font-size" style="font-style:normal;font-weight:400">
				<!-- jk:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","justifyContent":"left","contentSize":"400px"}} -->
				<div class="jk-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
					<!-- jk:paragraph {"style":{"typography":{"lineHeight":"1.1"}}} -->
					<p style="line-height:1.1"><?php echo esc_html_x( '“Amazing quality and care. I love all your products.”', 'Sample testimonial.', 'twentytwentyfive' ); ?></p>
					<!-- /jk:paragraph -->
				</div>
				<!-- /jk:group -->
				<cite><?php echo jk_kses_post( _x( 'Otto Reid <br><sub>Springfield, IL</sub>', 'Sample testimonial citation.', 'twentytwentyfive' ) ); ?></cite>
			</blockquote>
			<!-- /jk:quote -->
		</div>
		<!-- /jk:column -->
	</div>
	<!-- /jk:columns -->

	<!-- jk:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|50"}}}} -->
	<div class="jk-block-columns alignwide">
		<!-- jk:column {"style":{"border":{"width":"1px","color":"var(--jk--preset--color--accent-6)","radius":"10px"},"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
		<div class="jk-block-column has-border-color" style="border-color:var(--jk--preset--color--accent-6);border-width:1px;border-radius:10px;padding-top:var(--jk--preset--spacing--40);padding-right:var(--jk--preset--spacing--40);padding-bottom:var(--jk--preset--spacing--40);padding-left:var(--jk--preset--spacing--40)">
			<!-- jk:quote {"className":"is-style-plain","style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"blockGap":"var:preset|spacing|40"}},"fontSize":"x-large"} -->
			<blockquote class="jk-block-quote is-style-plain has-x-large-font-size" style="font-style:normal;font-weight:400">
				<!-- jk:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","justifyContent":"left","contentSize":"400px"}} -->
				<div class="jk-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
					<!-- jk:paragraph {"style":{"typography":{"lineHeight":"1.1"}}} -->
					<p style="line-height:1.1"><?php echo esc_html_x( '“Amazing quality and care. I love all your products.”', 'Sample testimonial.', 'twentytwentyfive' ); ?></p>
					<!-- /jk:paragraph -->
				</div>
				<!-- /jk:group -->
				<cite><?php echo jk_kses_post( _x( 'Otto Reid <br><sub>Springfield, IL</sub>', 'Sample testimonial citation.', 'twentytwentyfive' ) ); ?></cite>
			</blockquote>
			<!-- /jk:quote -->
		</div>
		<!-- /jk:column -->

		<!-- jk:column {"style":{"border":{"width":"1px","color":"var(--jk--preset--color--accent-6)","radius":"10px"},"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
		<div class="jk-block-column has-border-color" style="border-color:var(--jk--preset--color--accent-6);border-width:1px;border-radius:10px;padding-top:var(--jk--preset--spacing--40);padding-right:var(--jk--preset--spacing--40);padding-bottom:var(--jk--preset--spacing--40);padding-left:var(--jk--preset--spacing--40)"><!-- jk:quote {"className":"is-style-plain","style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"blockGap":"var:preset|spacing|40"}},"fontSize":"x-large"} -->
			<blockquote class="jk-block-quote is-style-plain has-x-large-font-size" style="font-style:normal;font-weight:400">
				<!-- jk:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","justifyContent":"left","contentSize":"400px"}} -->
				<div class="jk-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
					<!-- jk:paragraph {"style":{"typography":{"lineHeight":"1.1"}}} -->
					<p style="line-height:1.1"><?php echo esc_html_x( '“Amazing quality and care. I love all your products.”', 'Sample testimonial.', 'twentytwentyfive' ); ?></p>
					<!-- /jk:paragraph -->
				</div>
				<!-- /jk:group --><cite><?php echo jk_kses_post( _x( 'Otto Reid <br><sub>Springfield, IL</sub>', 'Sample testimonial citation.', 'twentytwentyfive' ) ); ?></cite>
			</blockquote>
			<!-- /jk:quote -->
		</div>
		<!-- /jk:column -->

		<!-- jk:column {"style":{"border":{"width":"1px","color":"var(--jk--preset--color--accent-6)","radius":"10px"},"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
		<div class="jk-block-column has-border-color" style="border-color:var(--jk--preset--color--accent-6);border-width:1px;border-radius:10px;padding-top:var(--jk--preset--spacing--40);padding-right:var(--jk--preset--spacing--40);padding-bottom:var(--jk--preset--spacing--40);padding-left:var(--jk--preset--spacing--40)"><!-- jk:quote {"className":"is-style-plain","style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"blockGap":"var:preset|spacing|40"}},"fontSize":"x-large"} -->
			<blockquote class="jk-block-quote is-style-plain has-x-large-font-size" style="font-style:normal;font-weight:400">
				<!-- jk:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","justifyContent":"left","contentSize":"400px"}} -->
				<div class="jk-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
					<!-- jk:paragraph {"style":{"typography":{"lineHeight":"1.1"}}} -->
					<p style="line-height:1.1"><?php echo esc_html_x( '“Amazing quality and care. I love all your products.”', 'Sample testimonial.', 'twentytwentyfive' ); ?></p>
					<!-- /jk:paragraph -->
				</div>
				<!-- /jk:group --><cite><?php echo jk_kses_post( _x( 'Otto Reid <br><sub>Springfield, IL</sub>', 'Sample testimonial citation.', 'twentytwentyfive' ) ); ?></cite>
			</blockquote>
			<!-- /jk:quote -->
		</div>
		<!-- /jk:column -->
	</div>
	<!-- /jk:columns -->
</div>
<!-- /jk:group -->
