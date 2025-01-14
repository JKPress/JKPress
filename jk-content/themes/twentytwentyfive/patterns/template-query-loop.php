<?php
/**
 * Title: List of posts, 1 column
 * Slug: twentytwentyfive/template-query-loop
 * Categories: query
 * Block Types: core/query
 * Description: A list of posts, 1 column, with featured image and post date.
 *
 * @package JKPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- jk:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"align":"full","layout":{"type":"default"}} -->
<div class="jk-block-query alignfull">
	<!-- jk:post-template {"align":"full","layout":{"type":"default"}} -->
		<!-- jk:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
		<div class="jk-block-group alignfull" style="padding-top:var(--jk--preset--spacing--60);padding-bottom:var(--jk--preset--spacing--60)">
			<!-- jk:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /-->
			<!-- jk:post-title {"isLink":true,"fontSize":"x-large"} /-->
			<!-- jk:post-content {"align":"full","fontSize":"medium","layout":{"type":"constrained"}} /-->
			<!-- jk:post-date {"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"fontSize":"small"} /-->
		</div>
		<!-- /jk:group -->
	<!-- /jk:post-template -->
	<!-- jk:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
	<div class="jk-block-group" style="padding-top:var(--jk--preset--spacing--60);padding-bottom:var(--jk--preset--spacing--60)">
		<!-- jk:query-no-results -->
		<!-- jk:paragraph -->
		<p><?php echo esc_html_x( 'Sorry, but nothing was found. Please try a search with different keywords.', 'Message explaining that there are no results returned from a search.', 'twentytwentyfive' ); ?></p>
		<!-- /jk:paragraph -->
		<!-- /jk:query-no-results -->
	</div>
	<!-- /jk:group -->
	<!-- jk:group {"align":"wide","layout":{"type":"constrained"}} -->
	<div class="jk-block-group alignwide">
		<!-- jk:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
			<!-- jk:query-pagination-previous /-->
			<!-- jk:query-pagination-numbers /-->
			<!-- jk:query-pagination-next /-->
		<!-- /jk:query-pagination -->
	</div>
	<!-- /jk:group -->
</div>
<!-- /jk:query -->
