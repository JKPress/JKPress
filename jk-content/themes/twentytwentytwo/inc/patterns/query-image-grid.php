<?php
/**
 * Grid of image posts block pattern
 */
return array(
	'title'      => __( 'Grid of image posts', 'twentytwentytwo' ),
	'categories' => array( 'query' ),
	'blockTypes' => array( 'core/query' ),
	'content'    => '<!-- jk:query {"query":{"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","sticky":"","inherit":false,"perPage":12},"displayLayout":{"type":"flex","columns":3},"layout":{"inherit":true}} -->
					<div class="jk-block-query"><!-- jk:post-template -->
					<!-- jk:post-featured-image {"isLink":true,"width":"100%","height":"200px"} /-->

					<!-- jk:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":"0.5rem"}}} -->
					<div class="jk-block-columns is-not-stacked-on-mobile"><!-- jk:column -->
					<div class="jk-block-column"><!-- jk:post-title {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"0.2em"}}},"fontSize":"small","fontFamily":"system-font"} /--></div>
					<!-- /jk:column -->

					<!-- jk:column {"width":"4em"} -->
					<div class="jk-block-column" style="flex-basis:4em"><!-- jk:post-date {"textAlign":"right","format":"m.d.y","style":{"typography":{"fontStyle":"italic","fontWeight":"400"}},"fontSize":"small"} /--></div>
					<!-- /jk:column --></div>
					<!-- /jk:columns -->
					<!-- /jk:post-template -->

					<!-- jk:separator {"className":"is-style-wide"} -->
					<hr class="jk-block-separator alignwide is-style-wide"/>
					<!-- /jk:separator -->

					<!-- jk:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
					<!-- jk:query-pagination-previous {"fontSize":"small"} /-->

					<!-- jk:query-pagination-numbers /-->

					<!-- jk:query-pagination-next {"fontSize":"small"} /-->
					<!-- /jk:query-pagination --></div>
					<!-- /jk:query -->',
);
