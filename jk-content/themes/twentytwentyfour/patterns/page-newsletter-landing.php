<?php
/**
 * Title: Newsletter landing
 * Slug: twentytwentyfour/page-newsletter-landing
 * Categories: call-to-action, twentytwentyfour_page, featured
 * Keywords: starter
 * Block Types: core/post-content
 * Post Types: page, jk_template
 * Viewport width: 1100
 * Description: A block with a newsletter subscription CTA for a landing page.
 */
?>

<!-- jk:group {"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0","bottom":"0"}},"dimensions":{"minHeight":"100vh"}},"backgroundColor":"accent-3","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="jk-block-group alignfull has-accent-3-background-color has-background" style="min-height:100vh;margin-top:0;margin-bottom:0;padding-top:var(--jk--preset--spacing--60);padding-right:var(--jk--preset--spacing--50);padding-bottom:var(--jk--preset--spacing--60);padding-left:var(--jk--preset--spacing--50)">
	<!-- jk:group {"layout":{"type":"constrained"}} -->
	<div class="jk-block-group">
		<!-- jk:image {"align":"center","width":"45px","height":"49px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
		<figure class="jk-block-image aligncenter size-full is-resized">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon-message.webp" alt="" style="object-fit:cover;width:45px;height:49px" />
		</figure>
		<!-- /jk:image -->

		<!-- jk:spacer {"height":"var:preset|spacing|10"} -->
		<div style="height:var(--jk--preset--spacing--10)" aria-hidden="true" class="jk-block-spacer"></div>
		<!-- /jk:spacer -->

		<!-- jk:heading {"textAlign":"center","style":{"spacing":{"margin":{"right":"0","left":"0"},"padding":{"right":"0","left":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","fontSize":"x-large"} -->
		<h2 class="jk-block-heading has-text-align-center has-contrast-color has-text-color has-link-color has-x-large-font-size" style="margin-right:0;margin-left:0;padding-right:0;padding-left:0"><?php echo esc_html_x( 'Subscribe to the newsletter and stay connected with our community', 'sample content for newsletter subscription', 'twentytwentyfour' ); ?></h2>
		<!-- /jk:heading -->

		<!-- jk:spacer {"height":"var:preset|spacing|10"} -->
		<div style="height:var(--jk--preset--spacing--10)" aria-hidden="true" class="jk-block-spacer"></div>
		<!-- /jk:spacer -->

		<!-- jk:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="jk-block-buttons">
			<!-- jk:button -->
			<div class="jk-block-button">
				<a class="jk-block-button__link jk-element-button"><?php echo esc_html_x( 'Sign up', 'Sample content for newsletter subscribe button', 'twentytwentyfour' ); ?></a>
			</div>
			<!-- /jk:button -->
		</div>
		<!-- /jk:buttons -->
	</div>
	<!-- /jk:group -->
</div>
<!-- /jk:group -->
