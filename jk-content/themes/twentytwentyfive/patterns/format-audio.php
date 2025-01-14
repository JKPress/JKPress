<?php
/**
 * Title: Audio format
 * Slug: twentytwentyfive/format-audio
 * Categories: twentytwentyfive_post-format
 * Description: An audio post format with an image, title, audio player, and description.
 *
 * @package JKPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- jk:group {"className":"is-style-section-3","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="jk-block-group is-style-section-3" style="padding-top:var(--jk--preset--spacing--30);padding-right:var(--jk--preset--spacing--30);padding-bottom:var(--jk--preset--spacing--30);padding-left:var(--jk--preset--spacing--30)">
	<!-- jk:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
	<div class="jk-block-columns is-not-stacked-on-mobile">
		<!-- jk:column {"width":"100px"} -->
		<div class="jk-block-column" style="flex-basis:100px"><!-- jk:image {"width":"100px","height":"auto","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
		<figure class="jk-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/ruins-image.webp' ); ?>" alt="<?php esc_attr_e( 'Event image', 'twentytwentyfive' ); ?>" style="aspect-ratio:1;object-fit:cover;width:100px;height:auto"/></figure>
		<!-- /jk:image --></div>
		<!-- /jk:column -->

		<!-- jk:column {"width":""} -->
		<div class="jk-block-column"><!-- jk:paragraph -->
		<p><?php esc_html_e( 'Episode 1: Acoma Pueblo with Prof. Fiona Presley', 'twentytwentyfive' ); ?></p>
		<!-- /jk:paragraph -->

		<!-- jk:paragraph {"fontSize":"small"} -->
		<p class="has-small-font-size"><?php esc_html_e( 'Acoma Pueblo, in New Mexico, stands as a testament to the resilience and cultural heritage of the Acoma people', 'twentytwentyfive' ); ?></p>
		<!-- /jk:paragraph -->

		<!-- jk:audio -->
		<figure class="jk-block-audio"><audio controls="" src="#"></audio></figure>
		<!-- /jk:audio --></div>
		<!-- /jk:column --></div>
	<!-- /jk:columns --></div>
<!-- /jk:group -->
