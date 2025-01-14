<?php
/**
 * Title: Text with alternating images
 * Slug: twentytwentyfour/text-alternating-images
 * Categories: text, about
 * Viewport width: 1400
 * Description: A text section, then a two-column section with text in one column and an image in the other.
 */
?>

<!-- jk:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="jk-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--jk--preset--spacing--50);padding-right:var(--jk--preset--spacing--50);padding-bottom:var(--jk--preset--spacing--50);padding-left:var(--jk--preset--spacing--50)">
	<!-- jk:group {"align":"wide","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
	<div class="jk-block-group alignwide">
		<!-- jk:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
		<div class="jk-block-group">

			<!-- jk:heading {"textAlign":"center","className":"is-style-asterisk"} -->
			<h2 class="jk-block-heading has-text-align-center is-style-asterisk"><?php echo esc_html_x( 'An array of resources', 'Sample heading content', 'twentytwentyfour' ); ?></h2>
			<!-- /jk:heading -->

			<!-- jk:paragraph {"align":"center","style":{"layout":{"selfStretch":"fit","flexSize":null}}} -->
			<p class="has-text-align-center"><?php echo esc_html_x( 'Our comprehensive suite of professional services caters to a diverse clientele, ranging from homeowners to commercial developers.', 'Sample subheading content', 'twentytwentyfour' ); ?></p>
			<!-- /jk:paragraph -->
		</div>
		<!-- /jk:group -->

		<!-- jk:spacer {"height":"var:preset|spacing|40"} -->
		<div style="height:var(--jk--preset--spacing--40)" aria-hidden="true" class="jk-block-spacer"></div>
		<!-- /jk:spacer -->

		<!-- jk:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|60"}}}} -->
		<div class="jk-block-columns alignwide">
			<!-- jk:column {"verticalAlignment":"center","width":"40%"} -->
			<div class="jk-block-column is-vertically-aligned-center" style="flex-basis:40%">
				<!-- jk:heading {"level":3,"className":"is-style-asterisk"} -->
				<h3 class="jk-block-heading is-style-asterisk"><?php echo esc_html_x( 'Études Architect App', 'Sample list heading', 'twentytwentyfour' ); ?></h3>
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
			</div>
			<!-- /jk:column -->

			<!-- jk:column {"width":"50%"} -->
			<div class="jk-block-column" style="flex-basis:50%">
				<!-- jk:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
				<figure class="jk-block-image size-large is-style-rounded">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/tourist-and-building.webp" alt="<?php esc_attr_e( 'Tourist taking photo of a building', 'twentytwentyfour' ); ?>" />
				</figure>
				<!-- /jk:image -->
			</div>
			<!-- /jk:column -->
		</div>
		<!-- /jk:columns -->

		<!-- jk:spacer {"height":"var:preset|spacing|40"} -->
		<div style="height:var(--jk--preset--spacing--40)" aria-hidden="true" class="jk-block-spacer"></div>
		<!-- /jk:spacer -->

		<!-- jk:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|60"}}}} -->
		<div class="jk-block-columns alignwide">
			<!-- jk:column {"width":"50%"} -->
			<div class="jk-block-column" style="flex-basis:50%">
				<!-- jk:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
				<figure class="jk-block-image size-large is-style-rounded">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/windows.webp" alt="<?php esc_attr_e( 'Windows of a building in Nuremberg, Germany', 'twentytwentyfour' ); ?>" />
				</figure>
				<!-- /jk:image -->
			</div>
			<!-- /jk:column -->

			<!-- jk:column {"verticalAlignment":"center","width":"40%"} -->
			<div class="jk-block-column is-vertically-aligned-center" style="flex-basis:40%">
				<!-- jk:heading {"level":3,"className":"is-style-asterisk"} -->
				<h3 class="jk-block-heading is-style-asterisk"><?php echo esc_html_x( 'Études Newsletter', 'Sample heading', 'twentytwentyfour' ); ?></h3>
				<!-- /jk:heading -->

				<!-- jk:list {"style":{"typography":{"lineHeight":"1.75"}},"className":"is-style-checkmark-list"} -->
				<ul class="is-style-checkmark-list" style="line-height:1.75">
					<!-- jk:list-item -->
					<li><?php echo esc_html_x( 'A world of thought-provoking articles.', 'Sample list item', 'twentytwentyfour' ); ?></li>
					<!-- /jk:list-item -->

					<!-- jk:list-item -->
					<li><?php echo esc_html_x( 'Case studies that celebrate architecture.', 'Sample list item', 'twentytwentyfour' ); ?></li>
					<!-- /jk:list-item -->

					<!-- jk:list-item -->
					<li><?php echo esc_html_x( 'Exclusive access to design insights.', 'Sample list item', 'twentytwentyfour' ); ?></li>
					<!-- /jk:list-item -->
				</ul>
				<!-- /jk:list -->
			</div>
			<!-- /jk:column -->
		</div>
		<!-- /jk:columns -->
	</div>
	<!-- /jk:group -->
</div>
<!-- /jk:group -->
