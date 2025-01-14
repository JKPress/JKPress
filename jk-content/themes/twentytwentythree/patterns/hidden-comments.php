<?php
/**
 * Title: Hidden Comments
 * Slug: twentytwentythree/hidden-comments
 * Inserter: no
 */
?>
<!-- jk:group {"layout":{"type":"constrained"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
<div class="jk-block-group" style="padding-top:var(--jk--preset--spacing--40);padding-right:var(--jk--preset--spacing--40);padding-bottom:var(--jk--preset--spacing--40);padding-left:var(--jk--preset--spacing--40)">
	<!-- jk:comments -->
	<div class="jk-block-comments">
		<!-- jk:heading {"level":2} -->
		<h2><?php echo esc_html_x( 'Comments', 'Title of comments section', 'twentytwentythree' ); ?></h2>
		<!-- /jk:heading -->

		<!-- jk:comments-title {"level":3} /-->

		<!-- jk:comment-template -->
			<!-- jk:columns {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
			<div class="jk-block-columns" style="margin-bottom:var(--jk--preset--spacing--40)">
				<!-- jk:column {"width":"40px"} -->
				<div class="jk-block-column" style="flex-basis:40px">
					<!-- jk:avatar {"size":40,"style":{"border":{"radius":"20px"}}} /-->
				</div>
				<!-- /jk:column -->

				<!-- jk:column -->
				<div class="jk-block-column">
					<!-- jk:comment-author-name /-->

					<!-- jk:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"flex"}} -->
					<div class="jk-block-group" style="margin-top:0px;margin-bottom:0px">
						<!-- jk:comment-date /-->
						<!-- jk:comment-edit-link /-->
					</div>
					<!-- /jk:group -->

					<!-- jk:comment-content /-->

					<!-- jk:comment-reply-link /-->
				</div>
				<!-- /jk:column -->
			</div>
			<!-- /jk:columns -->
		<!-- /jk:comment-template -->

		<!-- jk:comments-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->
			<!-- jk:comments-pagination-previous /-->
			<!-- jk:comments-pagination-numbers /-->
			<!-- jk:comments-pagination-next /-->
		<!-- /jk:comments-pagination -->

	<!-- jk:post-comments-form /-->
	</div>
	<!-- /jk:comments -->
</div>
<!-- /jk:group -->
