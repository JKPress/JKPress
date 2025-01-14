<?php
/**
 * Title: Archive for the right-aligned blog
 * Slug: twentytwentyfive/template-archive-vertical-header-blog
 * Template Types: archive
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

	<!-- jk:column {"width":"90%","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
	<div class="jk-block-column" style="padding-top:var(--jk--preset--spacing--50);padding-right:var(--jk--preset--spacing--50);padding-bottom:var(--jk--preset--spacing--50);padding-left:var(--jk--preset--spacing--50);flex-basis:90%">
		<!-- jk:group {"tagName":"main","layout":{"type":"default"}} -->
		<main class="jk-block-group">
			<!-- jk:spacer {"height":"var:preset|spacing|50"} -->
			<div style="height:var(--jk--preset--spacing--50)" aria-hidden="true" class="jk-block-spacer"></div>
			<!-- /jk:spacer -->
			<!-- jk:query-title {"type":"archive","fontSize":"large"} /-->
			<!-- jk:term-description /-->
			<!-- jk:spacer {"height":"var:preset|spacing|50"} -->
			<div style="height:var(--jk--preset--spacing--50)" aria-hidden="true" class="jk-block-spacer"></div>
			<!-- /jk:spacer -->

			<!-- jk:pattern {"slug":"twentytwentyfive/template-query-loop-vertical-header-blog"} /-->

			<!-- jk:spacer {"height":"var:preset|spacing|50"} -->
			<div style="height:var(--jk--preset--spacing--50)" aria-hidden="true" class="jk-block-spacer"></div>
			<!-- /jk:spacer -->
		</main>
		<!-- /jk:group -->
	</div>
	<!-- /jk:column -->
</div>
<!-- /jk:columns -->

<!-- jk:template-part {"slug":"footer"} /-->
