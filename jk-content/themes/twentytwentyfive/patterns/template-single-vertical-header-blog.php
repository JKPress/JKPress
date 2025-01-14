<?php
/**
 * Title: Right-aligned single post
 * Slug: twentytwentyfive/template-single-vertical-header-blog
 * Template Types: posts, single
 * Viewport width: 1400
 * Inserter: no
 *
 * @package JKPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- jk:columns {"isStackedOnMobile":false,"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"blockGap":{"left":"0"}}}} -->
<div class="jk-block-columns is-not-stacked-on-mobile" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
	<!-- jk:column {"width":"8rem"} -->
	<div class="jk-block-column" style="flex-basis:8rem">
		<!-- jk:template-part {"slug":"vertical-header"} /-->
	</div>
	<!-- /jk:column -->
	<!-- jk:column {"width":"90%","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"0"}}},"layout":{"type":"default"}} -->
	<div class="jk-block-column" style="padding-top:var(--jk--preset--spacing--50);padding-right:0;padding-bottom:var(--jk--preset--spacing--50);padding-left:var(--jk--preset--spacing--50);flex-basis:90%">
		<!-- jk:group {"tagName":"main","layout":{"type":"default"}} -->
		<main class="jk-block-group">
			<!-- jk:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"0"}}},"layout":{"type":"default"}} -->
			<div class="jk-block-group" style="padding-right:var(--jk--preset--spacing--50);padding-left:0">
				<!-- jk:spacer {"height":"var:preset|spacing|50"} -->
				<div style="height:var(--jk--preset--spacing--50)" aria-hidden="true" class="jk-block-spacer"></div>
				<!-- /jk:spacer -->
				<!-- jk:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
				<div class="jk-block-group">
					<!-- jk:post-title {"level":1,"style":{"layout":{"selfStretch":"fixed","flexSize":"70vw"}},"fontSize":"xx-large"} /-->
					<!-- jk:post-date {"textAlign":"right","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","fontSize":"small"} /-->
					</div>
				<!-- /jk:group -->

				<!-- jk:spacer {"height":"var:preset|spacing|50"} -->
				<div style="height:var(--jk--preset--spacing--50)" aria-hidden="true" class="jk-block-spacer"></div>
				<!-- /jk:spacer -->
			</div>
			<!-- /jk:group -->
			<!-- jk:post-featured-image {"aspectRatio":"16/9"} /-->
			<!-- jk:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
			<div class="jk-block-group" style="padding-right:var(--jk--preset--spacing--50)">
				<!-- jk:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
				<div class="jk-block-group" style="padding-top:var(--jk--preset--spacing--20);padding-bottom:var(--jk--preset--spacing--20)">
					<!-- jk:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="jk-block-group">
						<!-- jk:avatar {"size":30,"isLink":true,"style":{"border":{"radius":"100px"}}} /-->
						<!-- jk:post-author-name {"isLink":true,"fontSize":"small"} /-->
					</div>
					<!-- /jk:group -->
					<!-- jk:post-terms {"term":"post_tag","separator":"  ","className":"is-style-post-terms-1","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} /-->
				</div>
				<!-- /jk:group -->

				<!-- jk:spacer {"height":"var:preset|spacing|50"} -->
				<div style="height:var(--jk--preset--spacing--50)" aria-hidden="true" class="jk-block-spacer"></div>
				<!-- /jk:spacer -->

				<!-- jk:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
				<div class="jk-block-columns">
					<!-- jk:column {"width":"75%","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|60"}}}} -->
					<div class="jk-block-column" style="padding-bottom:var(--jk--preset--spacing--60);flex-basis:75%">
						<!-- jk:post-content {"layout":{"type":"default"}} /-->
					</div>
					<!-- /jk:column -->
					<!-- jk:column {"width":"25%"} -->
					<div class="jk-block-column" style="flex-basis:25%">
						<!-- jk:template-part {"slug":"sidebar"} /-->
					</div>
					<!-- /jk:column -->
				</div>
				<!-- /jk:columns -->

				<!-- jk:spacer {"height":"var:preset|spacing|50"} -->
				<div style="height:var(--jk--preset--spacing--50)" aria-hidden="true" class="jk-block-spacer"></div>
				<!-- /jk:spacer -->
			</div>
			<!-- /jk:group -->
			<!-- jk:group {"ariaLabel":"<?php esc_attr_e( 'Post navigation', 'twentytwentyfive' ); ?>","tagName":"nav","align":"full","style":{"border":{"top":{"color":"var:preset|color|accent-6","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
			<nav class="jk-block-group alignfull" aria-label="<?php esc_attr_e( 'Post navigation', 'twentytwentyfive' ); ?>" style="border-top-color:var(--jk--preset--color--accent-6);border-top-width:1px;padding-top:var(--jk--preset--spacing--40);padding-bottom:var(--jk--preset--spacing--40)">
				<!-- jk:post-navigation-link {"type":"previous","showTitle":true,"arrow":"arrow"} /-->
				<!-- jk:post-navigation-link {"showTitle":true,"arrow":"arrow"} /-->
			</nav>
			<!-- /jk:group -->
		</main>
		<!-- /jk:group -->
		<!-- jk:group {"tagName":"aside","align":"wide","layout":{"type":"constrained","justifyContent":"left"},"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
		<aside class="jk-block-group alignwide" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
			<!-- jk:pattern {"slug":"twentytwentyfive/comments"} /-->
		</aside>
		<!-- /jk:group -->
	</div>
	<!-- /jk:column -->
</div>
<!-- /jk:columns -->

<!-- jk:template-part {"slug":"footer"} /-->
