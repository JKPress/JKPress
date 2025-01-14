<?php
/**
 * Grid of posts with left sidebar block pattern
 */
return array(
	'title'      => __( 'Grid of posts with left sidebar', 'twentytwentytwo' ),
	'categories' => array( 'twentytwentytwo_pages' ),
	'content'    => '<!-- jk:group {"align":"full","style":{"spacing":{"padding":{"top":"var(--jk--custom--spacing--small, 1.25rem)","bottom":"var(--jk--custom--spacing--small, 1.25rem)"}}},"layout":{"inherit":true}} -->
					<div class="jk-block-group alignfull" style="padding-top:var(--jk--custom--spacing--small, 1.25rem);padding-bottom:var(--jk--custom--spacing--small, 1.25rem)"><!-- jk:columns {"align":"wide","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
					<div class="jk-block-columns alignwide" style="margin-top:0px;margin-bottom:0px"><!-- jk:column {"width":"30%"} -->
					<div class="jk-block-column" style="flex-basis:30%"><!-- jk:site-title {"isLink":false,"style":{"spacing":{"margin":{"top":"0px","bottom":"1rem"}},"typography":{"fontStyle":"italic","fontWeight":"300","lineHeight":"1.1"}},"fontSize":"var(--jk--custom--typography--font-size--huge, clamp(2.25rem, 4vw, 2.75rem))","fontFamily":"source-serif-pro"} /-->

					<!-- jk:site-tagline {"fontSize":"small"} /-->

					<!-- jk:spacer {"height":32} -->
					<div style="height:32px" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer -->

					<!-- jk:separator {"color":"foreground","className":"is-style-wide"} -->
					<hr class="jk-block-separator has-text-color has-background has-foreground-background-color has-foreground-color is-style-wide"/>
					<!-- /jk:separator -->

					<!-- jk:spacer {"height":16} -->
					<div style="height:16px" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer -->

					<!-- jk:navigation {"orientation":"vertical"} -->
					<!-- jk:page-list /-->
					<!-- /jk:navigation -->

					<!-- jk:spacer {"height":16} -->
					<div style="height:16px" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer -->

					<!-- jk:separator {"color":"foreground","className":"is-style-wide"} -->
					<hr class="jk-block-separator has-text-color has-background has-foreground-background-color has-foreground-color is-style-wide"/>
					<!-- /jk:separator -->

					<!-- jk:spacer {"height":16} -->
					<div style="height:16px" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer -->

					<!-- jk:spacer {"height":16} -->
					<div style="height:16px" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer -->

					<!-- jk:site-logo {"width":60} /--></div>
					<!-- /jk:column -->

					<!-- jk:column {"width":"70%"} -->
					<div class="jk-block-column" style="flex-basis:70%"><!-- jk:query {"query":{"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","sticky":"","inherit":false,"perPage":12},"displayLayout":{"type":"flex","columns":3},"layout":{"inherit":true}} -->
					<div class="jk-block-query"><!-- jk:post-template -->
					<!-- jk:post-featured-image {"isLink":true,"width":"100%","height":"200px"} /-->

					<!-- jk:group {"layout":{"type":"flex","justifyContent":"space-between"}} -->
					<div class="jk-block-group"><!-- jk:post-title {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"small","fontFamily":"system-font"} /-->

					<!-- jk:post-date {"format":"m.d.y","style":{"typography":{"fontStyle":"italic","fontWeight":"400"}},"fontSize":"small"} /--></div>
					<!-- /jk:group -->
					<!-- /jk:post-template -->

					<!-- jk:separator {"className":"alignwide is-style-wide"} -->
					<hr class="jk-block-separator alignwide is-style-wide"/>
					<!-- /jk:separator -->

					<!-- jk:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
					<!-- jk:query-pagination-previous {"fontSize":"small"} /-->

					<!-- jk:query-pagination-numbers /-->

					<!-- jk:query-pagination-next {"fontSize":"small"} /-->
					<!-- /jk:query-pagination --></div>
					<!-- /jk:query --></div>
					<!-- /jk:column --></div>
					<!-- /jk:columns --></div>
					<!-- /jk:group -->',
);
