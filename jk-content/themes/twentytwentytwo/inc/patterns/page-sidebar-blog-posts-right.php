<?php
/**
 * Blog posts with right sidebar block pattern
 */
return array(
	'title'      => __( 'Blog posts with right sidebar', 'twentytwentytwo' ),
	'categories' => array( 'twentytwentytwo_pages' ),
	'content'    => '<!-- jk:group {"align":"full","style":{"spacing":{"padding":{"top":"var(--jk--custom--spacing--small, 1.25rem)","bottom":"var(--jk--custom--spacing--small, 1.25rem)"}}},"layout":{"inherit":true}} -->
					<div class="jk-block-group alignfull" style="padding-top:var(--jk--custom--spacing--small, 1.25rem);padding-bottom:var(--jk--custom--spacing--small, 1.25rem)"><!-- jk:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"2rem","top":"0px","right":"0px","left":"0px"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
					<div class="jk-block-group alignwide" style="padding-top:0px;padding-right:0px;padding-bottom:2rem;padding-left:0px"><!-- jk:group {"layout":{"type":"flex"}} -->
					<div class="jk-block-group"><!-- jk:site-logo {"width":64} /--></div>
					<!-- /jk:group -->

					<!-- jk:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"}} -->
					<!-- jk:page-list /-->
					<!-- /jk:navigation --></div>
					<!-- /jk:group -->

					<!-- jk:spacer {"height":64} -->
					<div style="height:64px" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer -->

					<!-- jk:columns {"align":"wide","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"blockGap":"5%"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
					<div class="jk-block-columns alignwide has-foreground-color has-text-color has-link-color" style="margin-top:0px;margin-bottom:0px"><!-- jk:column {"width":"66.66%","style":{"spacing":{"padding":{"bottom":"6rem"}}}} -->
					<div class="jk-block-column" style="padding-bottom:6rem;flex-basis:66.66%"><!-- jk:query {"queryId":9,"query":{"perPage":"5","pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list"},"layout":{"inherit":true}} -->
					<div class="jk-block-query"><!-- jk:post-template -->
					<!-- jk:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0","bottom":"1rem"}},"typography":{"fontStyle":"normal","fontWeight":"300"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground","fontSize":"var(--jk--custom--typography--font-size--huge, clamp(2.25rem, 4vw, 2.75rem))"} /-->

					<!-- jk:post-featured-image {"isLink":true} /-->

					<!-- jk:post-excerpt /-->

					<!-- jk:group {"layout":{"type":"flex"}} -->
					<div class="jk-block-group"><!-- jk:post-date {"format":"F j, Y","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"small"} /-->

					<!-- jk:post-terms {"term":"category","fontSize":"small"} /-->

					<!-- jk:post-terms {"term":"post_tag","fontSize":"small"} /--></div>
					<!-- /jk:group -->

					<!-- jk:spacer {"height":64} -->
					<div style="height:64px" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer -->
					<!-- /jk:post-template -->

					<!-- jk:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
					<!-- jk:query-pagination-previous {"fontSize":"small"} /-->

					<!-- jk:query-pagination-numbers /-->

					<!-- jk:query-pagination-next {"fontSize":"small"} /-->
					<!-- /jk:query-pagination --></div>
					<!-- /jk:query --></div>
					<!-- /jk:column -->

					<!-- jk:column {"width":"33.33%"} -->
					<div class="jk-block-column" style="flex-basis:33.33%"><!-- jk:image {"width":768,"height":1160,"sizeSlug":"large","linkDestination":"none"} -->
					<figure class="jk-block-image size-large is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/flight-path-on-salmon.jpg" alt="' . esc_attr__( 'Illustration of a flying bird.', 'twentytwentytwo' ) . '" width="768" height="1160"/></figure>
					<!-- /jk:image -->

					<!-- jk:spacer {"height":4} -->
					<div style="height:4px" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer -->

					<!-- jk:site-title {"isLink":false,"style":{"typography":{"fontStyle":"normal","fontWeight":"300","lineHeight":"1.2"}},"fontSize":"large","fontFamily":"source-serif-pro"} /-->

					<!-- jk:site-tagline /-->

					<!-- jk:spacer {"height":16} -->
					<div style="height:16px" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer -->

					<!-- jk:heading {"level":4,"fontSize":"large"} -->
					<h4 class="has-large-font-size"><em>' . esc_html__( 'Categories', 'twentytwentytwo' ) . '</em></h4>
					<!-- /jk:heading -->

					<!-- jk:tag-cloud {"taxonomy":"category","showTagCounts":true} /-->

					<!-- jk:heading {"level":4,"fontSize":"large"} -->
					<h4 class="has-large-font-size"><em>' . esc_html__( 'Tags', 'twentytwentytwo' ) . '</em></h4>
					<!-- /jk:heading -->

					<!-- jk:tag-cloud {"showTagCounts":true} /--></div>
					<!-- /jk:column --></div>
					<!-- /jk:columns --></div>
					<!-- /jk:group -->',
);
