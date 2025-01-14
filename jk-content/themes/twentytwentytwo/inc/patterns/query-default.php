<?php
/**
 * Default posts block pattern
 */
return array(
	'title'      => __( 'Default posts', 'twentytwentytwo' ),
	'categories' => array( 'query' ),
	'blockTypes' => array( 'core/query' ),
	'content'    => '<!-- jk:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":""},"align":"wide","layout":{"inherit":true}} -->
					<div class="jk-block-query alignwide"><!-- jk:post-template {"align":"wide"} -->
					<!-- jk:group {"layout":{"inherit":true}} -->
					<div class="jk-block-group"><!-- jk:post-title {"isLink":true,"align":"wide","fontSize":"var(--jk--custom--typography--font-size--huge, clamp(2.25rem, 4vw, 2.75rem))"} /-->

					<!-- jk:post-featured-image {"isLink":true,"align":"wide","style":{"spacing":{"margin":{"top":"calc(1.75 * var(--jk--style--block-gap))"}}}} /-->

					<!-- jk:columns {"align":"wide"} -->
					<div class="jk-block-columns alignwide"><!-- jk:column {"width":"650px"} -->
					<div class="jk-block-column" style="flex-basis:650px"><!-- jk:post-excerpt /-->

					<!-- jk:post-date {"isLink":true,"format":"F j, Y","style":{"typography":{"fontStyle":"italic","fontWeight":"400"}},"fontSize":"small"} /--></div>
					<!-- /jk:column -->

					<!-- jk:column {"width":""} -->
					<div class="jk-block-column"></div>
					<!-- /jk:column --></div>
					<!-- /jk:columns -->

					<!-- jk:spacer {"height":16} -->
					<div style="height:16px" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer -->

					<!-- jk:separator {"align":"wide","className":"is-style-wide"} -->
					<hr class="jk-block-separator alignwide is-style-wide"/>
					<!-- /jk:separator -->

					<!-- jk:spacer {"height":16} -->
					<div style="height:16px" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer --></div>
					<!-- /jk:group -->
					<!-- /jk:post-template -->

					<!-- jk:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
					<!-- jk:query-pagination-previous {"fontSize":"small"} /-->

					<!-- jk:query-pagination-numbers /-->

					<!-- jk:query-pagination-next {"fontSize":"small"} /-->
					<!-- /jk:query-pagination --></div>
					<!-- /jk:query -->',
);
