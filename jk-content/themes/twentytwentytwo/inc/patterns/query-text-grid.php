<?php
/**
 * Text-based grid of posts block pattern
 */
return array(
	'title'      => __( 'Text-based grid of posts', 'twentytwentytwo' ),
	'categories' => array( 'query' ),
	'blockTypes' => array( 'core/query' ),
	'content'    => '<!-- jk:query {"query":{"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","sticky":"","perPage":12},"displayLayout":{"type":"flex","columns":3},"align":"wide","layout":{"inherit":true}} -->
					<div class="jk-block-query alignwide"><!-- jk:post-template {"align":"wide"} -->

					<!-- jk:post-title {"isLink":true,"fontSize":"x-large"} /-->

					<!-- jk:post-excerpt /-->

					<!-- jk:post-date {"format":"F j, Y","isLink":true,"fontSize":"small"} /-->
					<!-- /jk:post-template -->

					<!-- jk:separator {"align":"wide","className":"is-style-wide"} -->
					<hr class="jk-block-separator alignwide is-style-wide"/>
					<!-- /jk:separator -->

					<!-- jk:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
					<!-- jk:query-pagination-previous {"fontSize":"small"} /-->

					<!-- jk:query-pagination-numbers /-->

					<!-- jk:query-pagination-next {"fontSize":"small"} /-->
					<!-- /jk:query-pagination --></div>
					<!-- /jk:query -->',
);
