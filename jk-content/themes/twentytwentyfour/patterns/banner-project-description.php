<?php
/**
 * Title: Project description
 * Slug: twentytwentyfour/banner-project-description
 * Categories: featured, banner, about, portfolio
 * Viewport width: 1400
 * Description: Project description section with title, paragraph, and an image.
 */
?>
<!-- jk:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"accent-2","layout":{"type":"constrained"}} -->
<div class="jk-block-group alignfull has-accent-2-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--jk--preset--spacing--50);padding-right:var(--jk--preset--spacing--50);padding-bottom:var(--jk--preset--spacing--50);padding-left:var(--jk--preset--spacing--50)">
	<!-- jk:columns {"align":"wide"} -->
	<div class="jk-block-columns alignwide">
		<!-- jk:column {"width":"40%"} -->
		<div class="jk-block-column" style="flex-basis:40%">
			<!-- jk:paragraph {"style":{"layout":{"selfStretch":"fixed","flexSize":"50%"}}} -->
			<p><?php echo esc_html_x( 'Art Gallery — Overview', 'Sample title for a project or post', 'twentytwentyfour' ); ?></p>
			<!-- /jk:paragraph -->
		</div>
		<!-- /jk:column -->

		<!-- jk:column {"width":"60%"} -->
		<div class="jk-block-column" style="flex-basis:60%">

			<!-- jk:paragraph {"style":{"typography":{"lineHeight":"1.2"}},"fontSize":"x-large","fontFamily":"heading"} -->
			<p class="has-heading-font-family has-x-large-font-size" style="line-height:1.2"><?php echo esc_html_x( 'This transformative project seeks to enhance the gallery\'s infrastructure, accessibility, and exhibition spaces while preserving its rich cultural heritage.', 'Sample descriptive text for a project or post.', 'twentytwentyfour' ); ?></p>
			<!-- /jk:paragraph -->

		</div>
		<!-- /jk:column -->
	</div>
	<!-- /jk:columns -->

	<!-- jk:spacer {"height":"var:preset|spacing|40"} -->
	<div style="height:var(--jk--preset--spacing--40)" aria-hidden="true" class="jk-block-spacer">
	</div>
	<!-- /jk:spacer -->

	<!-- jk:image {"align":"wide","sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
	<figure class="jk-block-image alignwide size-large is-style-rounded">
		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hotel-facade.webp" alt="<?php esc_attr_e( 'Hyatt Regency San Francisco, San Francisco, United States', 'twentytwentyfour' ); ?>" />
	</figure>
	<!-- /jk:image -->
</div>
<!-- /jk:group -->
