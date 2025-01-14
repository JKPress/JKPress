<?php
/**
 * Title: Right-aligned posts
 * Slug: twentytwentyfive/template-query-loop-vertical-header-blog
 * Inserter: no
 *
 * @package JKPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- jk:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]}} -->
<div class="jk-block-query">
	<!-- jk:post-template -->
		<!-- jk:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
		<div class="jk-block-group">
			<!-- jk:post-title {"isLink":true,"fontSize":"xx-large"} /-->
			<!-- jk:post-date {"fontSize":"small","isLink":true} /-->
		</div>
		<!-- /jk:group -->
		<!-- jk:spacer {"height":"var:preset|spacing|40"} -->
		<div style="height:var(--jk--preset--spacing--40)" aria-hidden="true" class="jk-block-spacer"></div>
		<!-- /jk:spacer -->
		<!-- jk:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
		<div class="jk-block-columns"><!-- jk:column {"width":"70%"} -->
		<div class="jk-block-column" style="flex-basis:70%"><!-- jk:post-excerpt {"moreText":"","showMoreOnNewLine":false} /--></div>
		<!-- /jk:column -->

		<!-- jk:column -->
		<div class="jk-block-column"></div>
		<!-- /jk:column --></div>
		<!-- /jk:columns -->
		<!-- jk:post-featured-image {"isLink":true,"aspectRatio":"16/9"} /-->
		<!-- jk:spacer {"height":"var:preset|spacing|80"} -->
		<div style="height:var(--jk--preset--spacing--80)" aria-hidden="true" class="jk-block-spacer"></div>
		<!-- /jk:spacer -->
	<!-- /jk:post-template -->
	<!-- jk:query-pagination {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
		<!-- jk:query-pagination-previous /-->
		<!-- jk:query-pagination-numbers /-->
		<!-- jk:query-pagination-next /-->
	<!-- /jk:query-pagination -->

	<!-- jk:query-no-results -->
		<!-- jk:paragraph -->
		<p><?php echo esc_html_x( 'Sorry, but nothing was found. Please try a search with different keywords.', 'Message explaining that there are no results returned from a search.', 'twentytwentyfive' ); ?></p>
		<!-- /jk:paragraph -->
	<!-- /jk:query-no-results -->
</div>
<!-- /jk:query -->
