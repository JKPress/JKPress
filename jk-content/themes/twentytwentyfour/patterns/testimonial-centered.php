<?php
/**
 * Title: Centered testimonial
 * Slug: twentytwentyfour/testimonial-centered
 * Keywords: quote, review, about
 * Categories: testimonials, text
 * Viewport width: 1300
 * Description: A centered testimonial section with an avatar, name, and job title.
 */
?>

<!-- jk:group {"metadata":{"name":"<?php echo esc_html_x( 'Testimonial', 'Name of testimonial pattern', 'twentytwentyfour' ); ?>"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained","contentSize":""}} -->
<div class="jk-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--jk--preset--spacing--60);padding-right:var(--jk--preset--spacing--60);padding-bottom:var(--jk--preset--spacing--60);padding-left:var(--jk--preset--spacing--60)">
	<!-- jk:group {"layout":{"type":"constrained"}} -->
	<div class="jk-block-group">
		<!-- jk:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.2"}},"textColor":"base","fontSize":"x-large","fontFamily":"heading"} -->
		<p class="has-text-align-center has-base-color has-text-color has-heading-font-family has-x-large-font-size" style="line-height:1.2">
			<em><?php echo esc_html_x( '“Études has saved us thousands of hours of work and has unlocked insights we never thought possible.”', 'Testimonial Text or Review Text Got From the Person', 'twentytwentyfour' ); ?></em>
		</p>
		<!-- /jk:paragraph -->

		<!-- jk:spacer {"height":"var:preset|spacing|10"} -->
		<div style="height:var(--jk--preset--spacing--10)" aria-hidden="true" class="jk-block-spacer"></div>
		<!-- /jk:spacer -->

		<!-- jk:group {"metadata":{"name":"<?php echo esc_html_x( 'Testimonial source', 'Name of testimonial citation group', 'twentytwentyfour' ); ?>"},"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","flexWrap":"nowrap"}} -->
		<div class="jk-block-group">
			<!-- jk:image {"align":"center","width":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"thumbnail","linkDestination":"none","style":{"border":{"radius":"100px"}}} -->
			<figure class="jk-block-image aligncenter size-thumbnail is-resized has-custom-border">
				<img alt="" style="border-radius:100px;aspect-ratio:1;object-fit:cover;width:60px" />
			</figure>
			<!-- /jk:image -->

			<!-- jk:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|10","bottom":"0"}}}} -->
			<p class="has-text-align-center" style="margin-top:var(--jk--preset--spacing--10);margin-bottom:0"><?php echo esc_html_x( 'Annie Steiner', 'Name of Person Provided the Testimonial', 'twentytwentyfour' ); ?></p>
			<!-- /jk:paragraph -->

			<!-- jk:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"textColor":"contrast-3","fontSize":"small"} -->
			<p class="has-text-align-center has-contrast-3-color has-text-color has-small-font-size" style="font-style:normal;font-weight:300"><?php echo esc_html_x( 'CEO, Greenprint', 'Designation of Person Provided Testimonial', 'twentytwentyfour' ); ?></p>
			<!-- /jk:paragraph -->
		</div>
		<!-- /jk:group -->

	</div>
	<!-- /jk:group -->
</div>
<!-- /jk:group -->
