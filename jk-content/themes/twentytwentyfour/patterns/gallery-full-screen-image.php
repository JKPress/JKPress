<?php
/**
 * Title: Full screen image
 * Slug: twentytwentyfour/gallery-full-screen-image
 * Categories: gallery, portfolio
 * Description: A cover image section that covers the entire width.
 */
?>

<!-- jk:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/art-gallery.webp","hasParallax":true,"dimRatio":0,"overlayColor":"base","minHeight":100,"minHeightUnit":"vh","isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="jk-block-cover alignfull is-light has-parallax" style="padding-top:var(--jk--preset--spacing--50);padding-right:var(--jk--preset--spacing--50);padding-bottom:var(--jk--preset--spacing--50);padding-left:var(--jk--preset--spacing--50);min-height:100vh">
	<span aria-hidden="true" class="jk-block-cover__background has-base-background-color has-background-dim-0 has-background-dim">
	</span>
	<div role="img" class="jk-block-cover__image-background has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/art-gallery.webp)">
	</div>
	<div class="jk-block-cover__inner-container">
		<!-- jk:spacer {"height":"500px"} -->
		<div style="height:500px" aria-hidden="true" class="jk-block-spacer"></div>
		<!-- /jk:spacer -->
	</div>
</div>
<!-- /jk:cover -->
