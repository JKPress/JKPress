<?php
/**
 * Title: Text-only blog, posts
 * Slug: twentytwentyfive/template-query-loop-text-blog
 * Inserter: no
 *
 * @package JKPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- jk:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"align":"wide","layout":{"type":"default"}} -->
<div class="jk-block-query alignwide">
	<!-- jk:group {"layout":{"type":"constrained"}} -->
	<div class="jk-block-group">
		<!-- jk:query-no-results {"align":"wide","fontSize":"medium"} -->
			<!-- jk:paragraph -->
			<p><?php echo esc_html_x( 'Sorry, but nothing was found. Please try a search with different keywords.', 'Message explaining that there are no results returned from a search.', 'twentytwentyfive' ); ?></p>
			<!-- /jk:paragraph -->
		<!-- /jk:query-no-results -->
	</div>
	<!-- /jk:group -->
	<!-- jk:post-template {"align":"full","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
		<!-- jk:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"bottom":{"color":"var:preset|color|accent-6","width":"1px"},"top":{},"right":{},"left":{}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"space-between"}} -->
		<div class="jk-block-group alignfull" style="border-bottom-color:var(--jk--preset--color--accent-6);border-bottom-width:1px;padding-top:var(--jk--preset--spacing--30);padding-bottom:var(--jk--preset--spacing--30)">
			<!-- jk:post-title {"isLink":true,"fontSize":"large"} /-->
			<!-- jk:post-date {"textAlign":"right","isLink":true,"fontSize":"small"} /-->
		</div>
		<!-- /jk:group -->
	<!-- /jk:post-template -->

	<!-- jk:spacer {"height":"var:preset|spacing|30"} -->
	<div style="height:var(--jk--preset--spacing--30)" aria-hidden="true" class="jk-block-spacer"></div>
	<!-- /jk:spacer -->

	<!-- jk:group {"align":"full","style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
	<div class="jk-block-group alignfull" style="margin-top:var(--jk--preset--spacing--40);margin-bottom:var(--jk--preset--spacing--40);">
		<!-- jk:query-pagination {"align":"full","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
		<!-- jk:query-pagination-previous /-->
		<!-- jk:query-pagination-numbers /-->
		<!-- jk:query-pagination-next /-->
		<!-- /jk:query-pagination -->
	</div>
	<!-- /jk:group -->
</div>
<!-- /jk:query -->
