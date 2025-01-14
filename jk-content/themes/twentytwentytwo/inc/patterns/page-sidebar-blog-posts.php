<?php
/**
 * Blog posts with left sidebar block pattern
 */
return array(
	'title'      => __( 'Blog posts with left sidebar', 'twentytwentytwo' ),
	'categories' => array( 'twentytwentytwo_pages' ),
	'content'    => '<!-- jk:group {"align":"full","style":{"spacing":{"padding":{"top":"var(--jk--custom--spacing--small, 1.25rem)","bottom":"var(--jk--custom--spacing--small, 1.25rem)"}}},"layout":{"inherit":true}} -->
					<div class="jk-block-group alignfull" style="padding-top:var(--jk--custom--spacing--small, 1.25rem);padding-bottom:var(--jk--custom--spacing--small, 1.25rem)"><!-- jk:columns {"align":"wide","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"blockGap":"5%"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
					<div class="jk-block-columns alignwide has-primary-color has-text-color has-link-color" style="margin-top:0px;margin-bottom:0px"><!-- jk:column {"width":"33.33%"} -->
					<div class="jk-block-column" style="flex-basis:33.33%"><!-- jk:cover {"overlayColor":"secondary","minHeight":400,"isDark":false} -->
					<div class="jk-block-cover is-light" style="min-height:400px"><span aria-hidden="true" class="has-secondary-background-color has-background-dim-100 jk-block-cover__gradient-background has-background-dim"></span><div class="jk-block-cover__inner-container"><!-- jk:site-logo {"align":"center","width":60} /--></div></div>
					<!-- /jk:cover -->

					<!-- jk:spacer {"height":40} -->
					<div style="height:40px" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer -->

					<!-- jk:site-tagline {"fontSize":"small"} /-->

					<!-- jk:spacer {"height":32} -->
					<div style="height:32px" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer -->

					<!-- jk:separator {"color":"foreground","className":"is-style-wide"} -->
					<hr class="jk-block-separator has-text-color has-background has-foreground-background-color has-foreground-color is-style-wide"/>
					<!-- /jk:separator -->

					<!-- jk:spacer {"height":32} -->
					<div style="height:32px" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer -->

					<!-- jk:navigation {"orientation":"vertical"} -->
					<!-- jk:page-list /-->
					<!-- /jk:navigation -->

					<!-- jk:spacer {"height":32} -->
					<div style="height:32px" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer -->

					<!-- jk:separator {"color":"foreground","className":"is-style-wide"} -->
					<hr class="jk-block-separator has-text-color has-background has-foreground-background-color has-foreground-color is-style-wide"/>
					<!-- /jk:separator --></div>
					<!-- /jk:column -->

					<!-- jk:column {"width":"66.66%"} -->
					<div class="jk-block-column" style="flex-basis:66.66%"><!-- jk:query {"query":{"perPage":"5","pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"layout":{"inherit":true}} -->
					<div class="jk-block-query"><!-- jk:post-template -->
					<!-- jk:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0","bottom":"1rem"}},"typography":{"fontStyle":"normal","fontWeight":"300"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"var(--jk--custom--typography--font-size--huge, clamp(2.25rem, 4vw, 2.75rem))"} /-->

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
					<!-- /jk:query --></div>
					<!-- /jk:column --></div>
					<!-- /jk:columns --></div>
					<!-- /jk:group -->',
);
