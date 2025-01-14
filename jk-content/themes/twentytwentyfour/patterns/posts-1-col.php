<?php
/**
 * Title: List of posts, 1 column
 * Slug: twentytwentyfour/posts-1-col
 * Categories: query
 * Block Types: core/query
 * Description: A list of posts, 1 column.
 */
?>

<!-- jk:query {"query":{"perPage":3,"pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"layout":{"type":"constrained"}} -->
<div class="jk-block-query">
	<!-- jk:query-no-results -->
	<!-- jk:pattern {"slug":"twentytwentyfour/hidden-no-results"} /-->
	<!-- /jk:query-no-results -->

	<!-- jk:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
	<div class="jk-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--jk--preset--spacing--50);padding-right:0;padding-bottom:var(--jk--preset--spacing--50);padding-left:0">
		<!-- jk:post-template {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default","columnCount":3}} -->
		<!-- jk:post-featured-image {"isLink":true,"aspectRatio":"3/2","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} /-->
		<!-- jk:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
		<div class="jk-block-group">
			<!-- jk:post-title {"isLink":true,"style":{"spacing":{"margin":{"bottom":"0"}}},"fontSize":"x-large"} /-->
			<!-- jk:template-part {"slug":"post-meta"} /-->
			<!-- jk:post-excerpt {"fontSize":"small"} /-->
			<!-- jk:spacer {"height":"var:preset|spacing|30"} -->
			<div style="height:var(--jk--preset--spacing--30)" aria-hidden="true" class="jk-block-spacer">
			</div>
			<!-- /jk:spacer -->
		</div>
		<!-- /jk:group -->
		<!-- /jk:post-template -->
		<!-- jk:spacer {"height":"var:preset|spacing|50","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
		<div style="margin-top:0;margin-bottom:0;height:var(--jk--preset--spacing--50)" aria-hidden="true" class="jk-block-spacer"></div>
		<!-- /jk:spacer -->
		<!-- jk:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->
		<!-- jk:query-pagination-previous /-->
		<!-- jk:query-pagination-next /-->
		<!-- /jk:query-pagination -->

	</div>
	<!-- /jk:group -->
</div>
<!-- /jk:query -->
