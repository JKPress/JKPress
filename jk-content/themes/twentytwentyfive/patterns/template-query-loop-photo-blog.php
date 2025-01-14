<?php
/**
 * Title: Photo blog posts
 * Slug: twentytwentyfive/template-query-loop-photo-blog
 * Categories: query
 * Block Types: core/query
 * Viewport width: 1400
 * Description: A list of posts, 3 columns, with only featured images.
 *
 * @package JKPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- jk:query {"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"align":"wide","layout":{"type":"default"}} -->
<div class="jk-block-query alignwide">
		<!-- jk:group {"layout":{"type":"constrained"}} -->
		<div class="jk-block-group">
		<!-- jk:query-no-results -->
		<!-- jk:paragraph {"align":"center"} -->
		<p class="has-text-align-center"><?php echo esc_html_x( 'Sorry, but nothing was found. Please try a search with different keywords.', 'Message explaining that there are no results returned from a search.', 'twentytwentyfive' ); ?></p>
		<!-- /jk:paragraph -->
		<!-- /jk:query-no-results -->
	</div>
	<!-- /jk:group -->

	<!-- jk:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
	<div class="jk-block-group" style="padding-top:var(--jk--preset--spacing--50);padding-bottom:var(--jk--preset--spacing--50);">
		<!-- jk:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","columnCount":null,"minimumColumnWidth":"23rem"}} -->
			<!-- jk:post-featured-image {"isLink":true,"aspectRatio":"1"} /-->
		<!-- /jk:post-template -->
	</div>
	<!-- /jk:group -->

	<!-- jk:group {"layout":{"type":"default"}} -->
	<div class="jk-block-group">
		<!-- jk:query-pagination {"paginationArrow":"arrow","align":"full","layout":{"type":"flex","justifyContent":"space-between"}} -->
		<!-- jk:query-pagination-previous /-->
		<!-- jk:query-pagination-numbers /-->
		<!-- jk:query-pagination-next /-->
		<!-- /jk:query-pagination -->
	</div>
	<!-- /jk:group -->
</div>
<!-- /jk:query -->
