<?php
/**
 * Title: Project layout
 * Slug: twentytwentyfour/gallery-project-layout
 * Categories: gallery, featured, portfolio
 * Viewport width: 1600
 * Description: A gallery section with a project layout with 2 images.
 */
?>

<!-- jk:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"backgroundColor":"contrast","textColor":"base-2","layout":{"type":"constrained"}} -->
<div class="jk-block-group alignfull has-base-2-color has-contrast-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:var(--jk--preset--spacing--50);padding-right:var(--jk--preset--spacing--50);padding-bottom:var(--jk--preset--spacing--50);padding-left:var(--jk--preset--spacing--50)">
	<!-- jk:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|60"}}}} -->
	<div class="jk-block-columns alignwide">
		<!-- jk:column {"verticalAlignment":"stretch","width":"60%","style":{"spacing":{"padding":{"right":"0"}}}} -->
		<div class="jk-block-column is-vertically-aligned-stretch" style="padding-right:0;flex-basis:60%">
			<!-- jk:group {"style":{"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
			<div class="jk-block-group" style="min-height:100%">
				<!-- jk:image {"aspectRatio":"9/16","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
				<figure class="jk-block-image size-large is-style-rounded">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/angular-roof.webp" alt="<?php esc_attr_e( 'An empty staircase under an angular roof in Darling Harbour, Sydney, Australia', 'twentytwentyfour' ); ?>" style="aspect-ratio:9/16;object-fit:cover" />
				</figure>
				<!-- /jk:image -->

				<!-- jk:paragraph {"fontSize":"medium"} -->
				<p class="has-medium-font-size"><?php echo esc_html_x( '1. Through Études, we aspire to redefine architectural boundaries and usher in a new era of design excellence that leaves an indelible mark on the built environment.', 'Sample text for the feature area', 'twentytwentyfour' ); ?></p>
				<!-- /jk:paragraph -->
			</div>
			<!-- /jk:group -->
		</div>
		<!-- /jk:column -->

		<!-- jk:column {"width":"40%"} -->
		<div class="jk-block-column" style="flex-basis:40%">
			<!-- jk:group {"layout":{"type":"constrained"}} -->
			<div class="jk-block-group">
				<!-- jk:paragraph {"style":{"typography":{"lineHeight":"1.2","fontStyle":"normal","fontWeight":"500"}},"fontSize":"large"} -->
				<p class="has-large-font-size" style="font-style:normal;font-weight:500;line-height:1.2"><?php echo esc_html_x( 'Our comprehensive suite of professional services caters to a diverse clientele, ranging from homeowners to commercial developers. With a commitment to innovation and sustainability, Études is the bridge that transforms architectural dreams into remarkable built realities.', 'Sample text for the feature area', 'twentytwentyfour' ); ?></p>
				<!-- /jk:paragraph -->

				<!-- jk:spacer {"height":"var:preset|spacing|40","style":{"layout":{}}} -->
				<div style="height:var(--jk--preset--spacing--40)" aria-hidden="true" class="jk-block-spacer">
				</div>
				<!-- /jk:spacer -->

				<!-- jk:group {"layout":{"type":"default"}} -->
				<div class="jk-block-group">
					<!-- jk:paragraph {"fontSize":"medium"} -->
					<p class="has-medium-font-size"><?php echo esc_html_x( '2. Case studies that celebrate the artistry can fuel curiosity and ignite inspiration.', 'Sample text for the feature area', 'twentytwentyfour' ); ?></p>
					<!-- /jk:paragraph -->

					<!-- jk:image {"aspectRatio":"9/16","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
					<figure class="jk-block-image size-large is-style-rounded">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/art-gallery.webp" alt="<?php esc_attr_e( 'Art Gallery of Ontario, Toronto, Canada', 'twentytwentyfour' ); ?>" style="aspect-ratio:9/16;object-fit:cover" />
					</figure>
					<!-- /jk:image -->
				</div>
				<!-- /jk:group -->
			</div>
			<!-- /jk:group -->
		</div>
		<!-- /jk:column -->
	</div>
	<!-- /jk:columns -->
</div>
<!-- /jk:group -->
