<?php
/**
 * Title: Photo blog page
 * Slug: twentytwentyfive/template-page-photo-blog
 * Template Types: page
 * Viewport width: 1400
 *
 * @package JKPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- jk:template-part {"slug":"header"} /-->

<!-- jk:group {"tagName":"main","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<main class="jk-block-group" style="margin-top:var(--jk--preset--spacing--60)">
	<!-- jk:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
	<div class="jk-block-group alignfull" style="padding-top:var(--jk--preset--spacing--60);padding-bottom:var(--jk--preset--spacing--60)">
		<!-- jk:post-title {"textAlign":"center","level":1,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"fontSize":"x-large"} /-->
		<!-- jk:post-featured-image {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} /-->
		<!-- jk:post-content {"align":"full","layout":{"type":"constrained"}} /-->
	</div>
	<!-- /jk:group -->
</main>
<!-- /jk:group -->

<!-- jk:template-part {"slug":"footer"} /-->
