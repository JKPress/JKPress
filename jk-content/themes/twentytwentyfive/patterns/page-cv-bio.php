<?php
/**
 * Title: CV/bio
 * Slug: twentytwentyfive/page-cv-bio
 * Categories: twentytwentyfive_page, about, featured
 * Keywords: starter
 * Block Types: core/post-content
 * Viewport width: 1400
 * Description: A pattern for a CV/Bio landing page.
 *
 * @package JKPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- jk:cover {"overlayColor":"base","isUserOverlayColor":true,"isDark":false,"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","layout":{"type":"constrained"}} -->
<div class="jk-block-cover alignfull is-light has-contrast-color has-text-color has-link-color" style="margin-top:0;margin-bottom:0;padding-top:var(--jk--preset--spacing--60);padding-right:var(--jk--preset--spacing--50);padding-bottom:var(--jk--preset--spacing--60);padding-left:var(--jk--preset--spacing--50)">
	<span aria-hidden="true" class="jk-block-cover__background has-base-background-color has-background-dim-100 has-background-dim"></span>
	<div class="jk-block-cover__inner-container">
	<!-- jk:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|80"}}}} -->
	<div class="jk-block-columns alignwide">
			<!-- jk:column {"width":"65%"} -->
			<div class="jk-block-column" style="flex-basis:65%">
				<!-- jk:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
				<div class="jk-block-group">
					<!-- jk:heading {"textAlign":"left","style":{"typography":{"fontSize":"22rem","letterSpacing":"-0.03em","fontStyle":"normal","fontWeight":"300","lineHeight":"1.4"}}} -->
					<h2 class="jk-block-heading has-text-align-left" style="font-size:22rem;font-style:normal;font-weight:300;letter-spacing:-0.03em;line-height:1.4"><?php echo esc_html_x( 'Hey,', 'Example heading in pattern.', 'twentytwentyfive' ); ?></h2>
					<!-- /jk:heading -->
					<!-- jk:paragraph {"className":"is-style-text-subtitle"} -->
					<p class="is-style-text-subtitle"><?php echo esc_html_x( 'My name is Nora Winslow Keene, and I’m a committed public interest attorney. Living in Denver, Colorado, I’ve spent years championing the rights of underrepresented workers. A graduate of Stanford University, I played a key role in securing critical protections for agricultural laborers, ensuring better wages and access to healthcare. My work has focused on advocating for environmental justice and improving the quality of life for rural communities. Every case I take on is driven by the belief that everyone deserves dignity and fair treatment in the workplace.', 'Pattern placeholder text.', 'twentytwentyfive' ); ?></p>
					<!-- /jk:paragraph -->
				</div>
				<!-- /jk:group -->
			</div>
			<!-- /jk:column -->

			<!-- jk:column {"width":"35%"} -->
			<div class="jk-block-column" style="flex-basis:35%">
				<!-- jk:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","flexWrap":"nowrap"}} -->
				<div class="jk-block-group">
					<!-- jk:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
					<figure class="jk-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/woman-splashing-water.webp" alt="<?php esc_attr_e( 'Woman on beach, splashing water.', 'twentytwentyfive' ); ?>" style="aspect-ratio:3/4;object-fit:cover"/></figure>
					<!-- /jk:image -->

					<!-- jk:paragraph {"align":"right","style":{"typography":{"lineHeight":"1.2"}},"fontSize":"x-large"} -->
					<p class="has-text-align-right has-x-large-font-size" style="line-height:1.2"><a href="#"><?php esc_html_e( 'Instagram', 'twentytwentyfive' ); ?></a><br><a href="#"><?php esc_html_e( 'LinkedIn', 'twentytwentyfive' ); ?></a><br><a href="#"><?php echo esc_html_x( 'Now', 'Link to a page with information about what the person is working on right now.', 'twentytwentyfive' ); ?></a></p>
					<!-- /jk:paragraph -->
				</div>
				<!-- /jk:group -->
			</div>
			<!-- /jk:column -->
		</div>
	<!-- /jk:columns -->
	</div>
</div>
<!-- /jk:cover -->