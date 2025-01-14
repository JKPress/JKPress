<?php
/**
 * Title: News blog query loop
 * Slug: twentytwentyfive/template-query-loop-news-blog
 * Inserter: no
 *
 * @package JKPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- jk:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]}} -->
<div class="jk-block-query"><!-- jk:post-template -->
<!-- jk:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"},"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}},"border":{"top":{"color":"var:preset|color|accent-6","width":"1px"}}}} -->
<div class="jk-block-columns" style="border-top-color:var(--jk--preset--color--accent-6);border-top-width:1px;padding-top:var(--jk--preset--spacing--50);padding-bottom:var(--jk--preset--spacing--50)"><!-- jk:column {"width":"20%"} -->
<div class="jk-block-column" style="flex-basis:20%"><!-- jk:post-date {"isLink":true} /--></div>
<!-- /jk:column -->

<!-- jk:column -->
<div class="jk-block-column"><!-- jk:post-title /-->

<!-- jk:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase","letterSpacing":"1.4px"}}} /-->

<!-- jk:post-excerpt {"showMoreOnNewLine":false,"fontSize":"medium"} /-->

<!-- jk:group {"style":{"spacing":{"blockGap":"0.12em"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="jk-block-group">
	<!-- jk:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-4"}}}},"textColor":"accent-4","fontSize":"small"} -->
	<p class="has-accent-4-color has-text-color has-link-color has-small-font-size"><?php echo esc_html_x( 'Written by', 'Prefix before the author name. The post author name is displayed in a separate block.', 'twentytwentyfive' ); ?></p>
	<!-- /jk:paragraph -->
	<!-- jk:post-author-name {"isLink":true,"fontSize":"small"} /-->
</div>
<!-- /jk:group --></div>
<!-- /jk:column -->

<!-- jk:column {"width":"20%"} -->
<div class="jk-block-column" style="flex-basis:20%"><!-- jk:post-featured-image {"aspectRatio":"1"} /--></div>
<!-- /jk:column --></div>
<!-- /jk:columns -->
<!-- /jk:post-template -->

<!-- jk:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
<div class="jk-block-group" style="padding-top:var(--jk--preset--spacing--40);padding-bottom:var(--jk--preset--spacing--40)"><!-- jk:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- jk:query-pagination-previous {"label":"<?php esc_html_e( 'Newer Posts', 'twentytwentyfive' ); ?>"} /-->

<!-- jk:query-pagination-numbers /-->

<!-- jk:query-pagination-next {"label":"<?php esc_html_e( 'Older Posts', 'twentytwentyfive' ); ?>"} /-->
<!-- /jk:query-pagination --></div>
<!-- /jk:group -->

<!-- jk:query-no-results -->
<!-- jk:paragraph -->
<p><?php echo esc_html_x( 'Sorry, but nothing was found. Please try a search with different keywords.', 'Message explaining that there are no results returned from a search.', 'twentytwentyfive' ); ?></p>
<!-- /jk:paragraph -->
<!-- /jk:query-no-results -->

<!-- jk:spacer {"height":"var:preset|spacing|70"} -->
<div style="height:var(--jk--preset--spacing--70)" aria-hidden="true" class="jk-block-spacer"></div>
<!-- /jk:spacer --></div>
<!-- /jk:query -->
