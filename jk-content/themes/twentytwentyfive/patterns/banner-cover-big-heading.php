<?php
/**
 * Title: Cover with big heading
 * Slug: twentytwentyfive/banner-cover-big-heading
 * Categories: banner, about, featured
 * Description: A full-width cover section with a large background image and an oversized heading.
 *
 * @package JKPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- jk:group {"align":"full","className":"is-style-section-3","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="jk-block-group alignfull is-style-section-3" style="margin-top:0;margin-bottom:0;padding-top:var(--jk--preset--spacing--50);padding-bottom:var(--jk--preset--spacing--50)">
	<!-- jk:group {"align":"wide","style":{"spacing":{}},"layout":{"type":"constrained"}} -->
	<div class="jk-block-group alignwide">
		<!-- jk:image {"sizeSlug":"full","linkDestination":"none","align":"wide"} -->
		<figure class="jk-block-image alignwide size-full">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/coming-soon-bg-image.webp" alt="<?php esc_attr_e( 'Photo of a field full of flowers, a blue sky and a tree.', 'twentytwentyfive' ); ?>"/>
		</figure>
		<!-- /jk:image -->

		<!-- jk:group {"align":"full","layout":{"type":"default"}} -->
		<div class="jk-block-group alignfull">
			<!-- jk:heading {"align":"left","style":{"typography":{"fontSize":"clamp(1rem, 380px, 24vw)","letterSpacing":"-0.02em","lineHeight":"1","fontWeight":"700","fontStyle":"normal"}}} -->
			<h2 class="jk-block-heading has-text-align-left" style="font-size:clamp(1rem, 380px, 24vw);font-style:normal;font-weight:700;letter-spacing:-0.02em;line-height:1"><?php echo esc_html_e( 'Stories', 'twentytwentyfive' ); ?></h2>
			<!-- /jk:heading -->

		</div>
		<!-- /jk:group -->
	</div>
	<!-- /jk:group -->
</div>
<!-- /jk:group -->
