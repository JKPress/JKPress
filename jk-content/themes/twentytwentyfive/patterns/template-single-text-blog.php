<?php
/**
 * Title: Text-only blog, single post
 * Slug: twentytwentyfive/template-single-text-blog
 * Template Types: posts, single
 * Viewport width: 1400
 * Inserter: no
 *
 * @package JKPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- jk:template-part {"slug":"header"} /-->

<!-- jk:group {"tagName":"main","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<main class="jk-block-group" style="margin-top:var(--jk--preset--spacing--60)">
	<!-- jk:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
	<div class="jk-block-group alignfull" style="padding-top:var(--jk--preset--spacing--60);">
		<!-- jk:post-title {"level":1} /-->
		<!-- jk:post-terms {"term":"category","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} /-->
		<!-- jk:spacer {"height":"var:preset|spacing|50"} -->
		<div style="height:var(--jk--preset--spacing--50)" aria-hidden="true" class="jk-block-spacer"></div>
		<!-- /jk:spacer -->
		<!-- jk:post-content {"align":"full","layout":{"type":"constrained"}} /-->

		<!-- jk:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
		<div class="jk-block-group" style="padding-top:var(--jk--preset--spacing--60);padding-bottom:var(--jk--preset--spacing--60)">
		<!-- jk:post-terms {"term":"post_tag","separator":"  ","className":"is-style-post-terms-1"} /-->
		</div>
		<!-- /jk:group -->

		<!-- jk:group {"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"},"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
		<div class="jk-block-group alignfull" style="margin-top:var(--jk--preset--spacing--60);margin-bottom:var(--jk--preset--spacing--60);padding-right:var(--jk--preset--spacing--50);padding-left:var(--jk--preset--spacing--50)">
			<!-- jk:group {"ariaLabel":"<?php esc_attr_e( 'Post navigation', 'twentytwentyfive' ); ?>","tagName":"nav","align":"wide","style":{"border":{"top":{"color":"var:preset|color|accent-6","width":"1px"},"right":[],"bottom":[],"left":[]},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
			<nav class="jk-block-group alignwide" aria-label="<?php esc_attr_e( 'Post navigation', 'twentytwentyfive' ); ?>" style="border-top-color:var(--jk--preset--color--accent-6);border-top-width:1px;padding-top:var(--jk--preset--spacing--40);padding-bottom:var(--jk--preset--spacing--40)">
				<!-- jk:post-navigation-link {"type":"previous","showTitle":true,"arrow":"arrow"} /-->
				<!-- jk:post-navigation-link {"showTitle":true,"arrow":"arrow"} /-->
			</nav>
			<!-- /jk:group -->
		</div>
		<!-- /jk:group -->
		<!-- jk:pattern {"slug":"twentytwentyfive/comments"} /-->
	</div>
	<!-- /jk:group -->
</main>
<!-- /jk:group -->
<!-- jk:template-part {"slug":"footer"} /-->
