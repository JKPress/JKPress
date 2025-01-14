<?php
/**
 * Simple blog posts block pattern
 */
return array(
	'title'      => __( 'Simple blog posts', 'twentytwentytwo' ),
	'categories' => array( 'query' ),
	'blockTypes' => array( 'core/query' ),
	'content'    => '<!-- jk:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"perPage":10},"layout":{"inherit":true}} -->
					<div class="jk-block-query"><!-- jk:post-template -->
					<!-- jk:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"1rem","bottom":"1rem"}},"typography":{"fontStyle":"normal","fontWeight":"300"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"var(--jk--custom--typography--font-size--huge, clamp(2.25rem, 4vw, 2.75rem))"} /-->

					<!-- jk:post-featured-image {"isLink":true} /-->

					<!-- jk:post-excerpt /-->

					<!-- jk:group {"layout":{"type":"flex"}} -->
					<div class="jk-block-group"><!-- jk:post-date {"format":"F j, Y","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"small"} /-->

					<!-- jk:post-terms {"term":"category","fontSize":"small"} /-->

					<!-- jk:post-terms {"term":"post_tag","fontSize":"small"} /--></div>
					<!-- /jk:group -->

					<!-- jk:spacer {"height":128} -->
					<div style="height:128px" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer -->
					<!-- /jk:post-template -->

					<!-- jk:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
					<!-- jk:query-pagination-previous {"fontSize":"small"} /-->

					<!-- jk:query-pagination-numbers /-->

					<!-- jk:query-pagination-next {"fontSize":"small"} /-->
					<!-- /jk:query-pagination --></div>
					<!-- /jk:query -->',
);
