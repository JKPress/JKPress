<?php
/**
 * Title: Page template for the right-aligned blog
 * Slug: twentytwentyfive/template-page-vertical-header-blog
 * Template Types: page
 * Viewport width: 1400
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
	<!-- jk:column {"width":"90%","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|50","left":"0","right":"0"}}},"layout":{"type":"default"}} -->
	<div class="jk-block-column" style="padding-right:0;padding-bottom:var(--jk--preset--spacing--50);padding-left:0;flex-basis:90%">
		<!-- jk:group {"tagName":"main","layout":{"type":"default"}} -->
		<main class="jk-block-group">
			<!-- jk:post-featured-image {"aspectRatio":"16/9","height":""} /-->
			<!-- jk:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
			<div class="jk-block-group" style="padding-right:var(--jk--preset--spacing--50);padding-left:var(--jk--preset--spacing--50)">
				<!-- jk:spacer {"height":"var:preset|spacing|50"} -->
				<div style="height:var(--jk--preset--spacing--50)" aria-hidden="true" class="jk-block-spacer"></div>
				<!-- /jk:spacer -->
				<!-- jk:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
				<div class="jk-block-group">
					<!-- jk:post-title {"level":1,"style":{"layout":{"selfStretch":"fixed","flexSize":"70vw"}},"fontSize":"xx-large"} /-->
				</div>
				<!-- /jk:group -->
				<!-- jk:spacer {"height":"var:preset|spacing|30"} -->
				<div style="height:var(--jk--preset--spacing--30)" aria-hidden="true" class="jk-block-spacer"></div>
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
			</div>
			<!-- /jk:group -->
		</main>
		<!-- /jk:group -->
	</div>
	<!-- /jk:column -->
</div>
<!-- /jk:columns -->

<!-- jk:template-part {"slug":"footer"} /-->
