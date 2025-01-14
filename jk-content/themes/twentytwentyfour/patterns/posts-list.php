<?php
/**
 * Title: List of posts without images, 1 column
 * Slug: twentytwentyfour/posts-list
 * Categories: query, posts
 * Block Types: core/query
 * Description: A list of posts without images, 1 column.
 */
?>

<!-- jk:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="jk-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--jk--preset--spacing--50);padding-right:var(--jk--preset--spacing--50);padding-bottom:var(--jk--preset--spacing--50);padding-left:var(--jk--preset--spacing--50)">
	<!-- jk:heading {"align":"wide","style":{"typography":{"lineHeight":"1"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|40"}}},"fontSize":"x-large"} -->
		<h2 class="jk-block-heading alignwide has-x-large-font-size" style="margin-top:0;margin-bottom:var(--jk--preset--spacing--40);line-height:1"><?php esc_html_e( 'Watch, Read, Listen', 'twentytwentyfour' ); ?></h2>
	<!-- /jk:heading -->

	<!-- jk:group {"align":"wide","layout":{"type":"constrained"}} -->
	<div class="jk-block-group alignwide">
		<!-- jk:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"align":"wide","layout":{"type":"default"}} -->
		<div class="jk-block-query alignwide">
			<!-- jk:post-template -->
			<!-- jk:separator {"backgroundColor":"contrast-3","className":"alignwide is-style-wide"} -->
			<hr class="jk-block-separator has-text-color has-contrast-3-color has-alpha-channel-opacity has-contrast-3-background-color has-background alignwide is-style-wide" />
			<!-- /jk:separator -->

			<!-- jk:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} -->
			<div class="jk-block-columns alignwide are-vertically-aligned-center" style="margin-top:var(--jk--preset--spacing--20);margin-bottom:var(--jk--preset--spacing--20)">
				<!-- jk:column {"verticalAlignment":"center","width":"72%"} -->
				<div class="jk-block-column is-vertically-aligned-center" style="flex-basis:72%">
					<!-- jk:post-title {"isLink":true,"style":{"typography":{"lineHeight":"1.1","fontSize":"1.5rem"}}} /-->
				</div>
				<!-- /jk:column -->

				<!-- jk:column {"verticalAlignment":"center","width":"28%"} -->
				<div class="jk-block-column is-vertically-aligned-center" style="flex-basis:28%">
					<!-- jk:template-part {"slug":"post-meta"} /-->
				</div>
				<!-- /jk:column -->
			</div>
			<!-- /jk:columns -->
			<!-- /jk:post-template -->

			<!-- jk:spacer {"height":"var:preset|spacing|30"} -->
			<div style="height:var(--jk--preset--spacing--30)" aria-hidden="true" class="jk-block-spacer"></div>
			<!-- /jk:spacer -->

			<!-- jk:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->
			<!-- jk:query-pagination-previous /-->

			<!-- jk:query-pagination-numbers /-->

			<!-- jk:query-pagination-next /-->
			<!-- /jk:query-pagination -->

			<!-- jk:query-no-results -->
			<!-- jk:pattern {"slug":"twentytwentyfour/hidden-no-results"} /-->
			<!-- /jk:query-no-results -->
		</div>
		<!-- /jk:query -->
	</div>
	<!-- /jk:group -->
</div>
<!-- /jk:group -->
