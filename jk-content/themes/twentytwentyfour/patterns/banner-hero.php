<?php
/**
 * Title: Hero
 * Slug: twentytwentyfour/banner-hero
 * Categories: banner, call-to-action, featured
 * Viewport width: 1400
 * Description: A hero section with a title, a paragraph, a CTA button, and an image.
 */
?>

<!-- jk:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"","wideSize":""}} -->
<div class="jk-block-group alignfull" style="padding-top:var(--jk--preset--spacing--50);padding-right:var(--jk--preset--spacing--50);padding-bottom:var(--jk--preset--spacing--50);padding-left:var(--jk--preset--spacing--50)">

	<!-- jk:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained","contentSize":"565px"}} -->
	<div class="jk-block-group">

		<!-- jk:heading {"textAlign":"center","fontSize":"x-large","level":1} -->
		<h1 class="jk-block-heading has-text-align-center has-x-large-font-size"><?php echo esc_html_x( 'A commitment to innovation and sustainability', 'Heading of the hero section', 'twentytwentyfour' ); ?></h1>
		<!-- /jk:heading -->

		<!-- jk:spacer {"height":"1.25rem"} -->
		<div style="height:1.25rem" aria-hidden="true" class="jk-block-spacer"></div>
		<!-- /jk:spacer -->

		<!-- jk:paragraph {"align":"center"} -->
		<p class="has-text-align-center"><?php echo esc_html_x( 'Études is a pioneering firm that seamlessly merges creativity and functionality to redefine architectural excellence.', 'Content of the hero section', 'twentytwentyfour' ); ?></p>
		<!-- /jk:paragraph -->

		<!-- jk:spacer {"height":"1.25rem"} -->
		<div style="height:1.25rem" aria-hidden="true" class="jk-block-spacer"></div>
		<!-- /jk:spacer -->

		<!-- jk:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="jk-block-buttons">
			<!-- jk:button -->
			<div class="jk-block-button">
				<a class="jk-block-button__link jk-element-button"><?php echo esc_html_x( 'About us', 'Button text of the hero section', 'twentytwentyfour' ); ?></a>
			</div>
			<!-- /jk:button -->
		</div>
		<!-- /jk:buttons -->
	</div>
	<!-- /jk:group -->

	<!-- jk:spacer {"height":"var:preset|spacing|30","style":{"layout":{}}} -->
	<div style="height:var(--jk--preset--spacing--30)" aria-hidden="true" class="jk-block-spacer">
	</div>
	<!-- /jk:spacer -->

	<!-- jk:image {"align":"wide","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
	<figure class="jk-block-image alignwide size-full is-style-rounded">
		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/building-exterior.webp" alt="<?php esc_attr_e( 'Building exterior in Toronto, Canada', 'twentytwentyfour' ); ?>" />
	</figure>
	<!-- /jk:image -->
</div>
<!-- /jk:group -->
