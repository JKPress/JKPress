<?php
/**
 * Title: Post navigation
 * Slug: twentytwentyfive/post-navigation
 * Categories: text
 * Description: Next and previous post links.
 * Block Types: core/post-navigation-link
 *
 * @package JKPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- jk:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
<div class="jk-block-group alignwide" style="margin-top:var(--jk--preset--spacing--60);margin-bottom:var(--jk--preset--spacing--60);">
	<!-- jk:group {"ariaLabel":"<?php esc_attr_e( 'Post navigation', 'twentytwentyfive' ); ?>","tagName":"nav","align":"wide","style":{"border":{"top":{"color":"var:preset|color|accent-6","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<nav class="jk-block-group alignwide" aria-label="<?php esc_attr_e( 'Post navigation', 'twentytwentyfive' ); ?>" style="border-top-color:var(--jk--preset--color--accent-6);border-top-width:1px;padding-top:var(--jk--preset--spacing--40);padding-bottom:var(--jk--preset--spacing--40)">
		<!-- jk:post-navigation-link {"type":"previous","showTitle":true,"arrow":"arrow"} /-->
		<!-- jk:post-navigation-link {"showTitle":true,"arrow":"arrow"} /-->
	</nav>
	<!-- /jk:group -->
</div>
<!-- /jk:group -->
