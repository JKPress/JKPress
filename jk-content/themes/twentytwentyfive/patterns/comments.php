<?php
/**
 * Title: Comments
 * Slug: twentytwentyfive/comments
 * Description: Comments area with comments list, pagination, and comment form.
 * Categories: text
 * Block Types: core/comments
 *
 * @package JKPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- jk:comments {"className":"jk-block-comments-query-loop","style":{"spacing":{"margin":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}}} -->
<div class="jk-block-comments jk-block-comments-query-loop" style="margin-top:var(--jk--preset--spacing--70);margin-bottom:var(--jk--preset--spacing--70)">
	<!-- jk:heading {"fontSize":"x-large"} -->
	<h2 class="jk-block-heading has-x-large-font-size"><?php esc_html_e( 'Comments', 'twentytwentyfive' ); ?></h2>
	<!-- /jk:heading -->
	<!-- jk:comments-title {"level":3,"fontSize":"large"} /-->
	<!-- jk:comment-template -->
	<!-- jk:group {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|50"}}}} -->
	<div class="jk-block-group" style="margin-top:0;margin-bottom:var(--jk--preset--spacing--50)">
		<!-- jk:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
		<div class="jk-block-group">
			<!-- jk:avatar {"size":50} /-->
			<!-- jk:group -->
			<div class="jk-block-group">
				<!-- jk:comment-date /-->
				<!-- jk:comment-author-name /-->
				<!-- jk:comment-content /-->
				<!-- jk:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="jk-block-group">
					<!-- jk:comment-edit-link /-->
					<!-- jk:comment-reply-link /-->
				</div>
				<!-- /jk:group -->
			</div>
			<!-- /jk:group -->
		</div>
		<!-- /jk:group -->
	</div>
	<!-- /jk:group -->
	<!-- /jk:comment-template -->

	<!-- jk:comments-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
	<!-- jk:comments-pagination-previous /-->
	<!-- jk:comments-pagination-next /-->
	<!-- /jk:comments-pagination -->

	<!-- jk:post-comments-form /-->
</div>
<!-- /jk:comments -->
