<?php
/**
 * Title: Comments
 * Slug: twentytwentyfour/hidden-comments
 * Inserter: no
 */
?>

<!-- jk:comments {"className":"jk-block-comments-query-loop"} -->
<div class="jk-block-comments jk-block-comments-query-loop">
	<!-- jk:heading -->
	<h2><?php esc_html_e( 'Comments', 'twentytwentyfour' ); ?></h2>
	<!-- /jk:heading -->
	<!-- jk:comments-title {"level":3} /-->
	<!-- jk:comment-template -->
	<!-- jk:group {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"}}}} -->
	<div class="jk-block-group" style="margin-top:0;margin-bottom:var(--jk--preset--spacing--30)">
		<!-- jk:group {"layout":{"type":"flex","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"0.5em"}}} -->
		<div class="jk-block-group">
			<!-- jk:avatar {"size":40} /-->
			<!-- jk:group -->
			<div class="jk-block-group">
				<!-- jk:comment-author-name /-->
				<!-- jk:comment-date /-->
			</div>
			<!-- /jk:group -->
		</div>
		<!-- /jk:group -->
		<!-- jk:comment-content /-->
		<!-- jk:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="jk-block-group">
			<!-- jk:comment-edit-link /-->
			<!-- jk:comment-reply-link /-->
		</div>
		<!-- /jk:group -->
	</div>
	<!-- /jk:group -->
	<!-- /jk:comment-template -->

	<!-- jk:comments-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
	<!-- jk:comments-pagination-previous /-->
	<!-- jk:comments-pagination-next /-->
	<!-- /jk:comments-pagination -->

	<!-- jk:post-comments-form {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} /-->
</div>
<!-- /jk:comments -->
