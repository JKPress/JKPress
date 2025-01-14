<?php
/**
 * Title: Grid of posts featuring the first post, 2 columns
 * Slug: twentytwentyfour/posts-grid-2-col
 * Categories: query
 * Block Types: core/query
 * Description: A grid of posts featuring the first post, 2 columns.
 */
?>

<!-- jk:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="jk-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--jk--preset--spacing--50);padding-right:var(--jk--preset--spacing--50);padding-bottom:var(--jk--preset--spacing--50);padding-left:var(--jk--preset--spacing--50)">
	<!-- jk:heading {"align":"wide","style":{"typography":{"lineHeight":"1"},"spacing":{"margin":{"top":"0"}}},"fontSize":"x-large"} -->
	<h2 class="jk-block-heading alignwide has-x-large-font-size" style="margin-top:0;line-height:1"><?php esc_html_e( 'Watch, Read, Listen', 'twentytwentyfour' ); ?></h2>
	<!-- /jk:heading -->

	<!-- jk:spacer {"height":"var:preset|spacing|10","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
	<div style="margin-top:0;margin-bottom:0;height:var(--jk--preset--spacing--10)" aria-hidden="true" class="jk-block-spacer">
	</div>
	<!-- /jk:spacer -->

	<!-- jk:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|30"}}}} -->
	<div class="jk-block-columns alignwide">
		<!-- jk:column {"width":"60%"} -->
		<div class="jk-block-column" style="flex-basis:60%">
			<!-- jk:query {"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
			<div class="jk-block-query">
				<!-- jk:post-template {"style":{"spacing":{"blockGap":"0"}}} -->
				<!-- jk:post-featured-image {"isLink":true,"aspectRatio":"3/4"} /-->

				<!-- jk:spacer {"height":"var:preset|spacing|10"} -->
				<div style="height:var(--jk--preset--spacing--10)" aria-hidden="true" class="jk-block-spacer">
				</div>
				<!-- /jk:spacer -->

				<!-- jk:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
				<div class="jk-block-group">
					<!-- jk:post-title {"level":3,"isLink":true,"fontSize":"x-large"} /-->

					<!-- jk:post-excerpt {"excerptLength":35} /-->

					<!-- jk:template-part {"slug":"post-meta"} /-->

				</div>
				<!-- /jk:group -->
				<!-- /jk:post-template -->
			</div>
			<!-- /jk:query -->
		</div>
		<!-- /jk:column -->

		<!-- jk:column {"width":"40%"} -->
		<div class="jk-block-column" style="flex-basis:40%">
			<!-- jk:query {"query":{"perPage":2,"pages":0,"offset":1,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
			<div class="jk-block-query">
				<!-- jk:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
				<!-- jk:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->

				<!-- jk:spacer {"height":"5px","style":{"layout":{}}} -->
				<div style="height:5px" aria-hidden="true" class="jk-block-spacer">
				</div>
				<!-- /jk:spacer -->

				<!-- jk:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
				<div class="jk-block-group">
					<!-- jk:post-title {"level":3,"isLink":true,"fontSize":"large"} /-->

					<!-- jk:post-excerpt {"excerptLength":14,"fontSize":"small"} /-->
					<!-- jk:template-part {"slug":"post-meta"} /-->

				</div>
				<!-- /jk:group -->
				<!-- /jk:post-template -->
			</div>
			<!-- /jk:query -->
		</div>
		<!-- /jk:column -->
	</div>
	<!-- /jk:columns -->
</div>
<!-- /jk:group -->
