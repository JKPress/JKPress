<?php
/**
 * Title: Offset posts with featured images only, 4 columns
 * Slug: twentytwentyfour/posts-images-only-offset-4-col
 * Categories: posts
 * Description: A list of posts with featured images only, 4 columns.
 */
?>

<!-- jk:group {"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="jk-block-group alignfull" style="padding-top:var(--jk--preset--spacing--50);padding-right:var(--jk--preset--spacing--50);padding-bottom:var(--jk--preset--spacing--50);padding-left:var(--jk--preset--spacing--50)">
	<!-- jk:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"0","left":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}}} -->
	<div class="jk-block-columns alignwide" style="margin-top:0;margin-bottom:0">
		<!-- jk:column {"style":{"spacing":{"blockGap":"0"}}} -->
		<div class="jk-block-column">
			<!-- jk:query {"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
			<div class="jk-block-query">
				<!-- jk:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
				<!-- jk:post-featured-image {"isLink":true,"align":"wide","style":{"spacing":{"margin":{"bottom":"0"}}}} /-->
				<!-- /jk:post-template -->
			</div>
			<!-- /jk:query -->
		</div>
		<!-- /jk:column -->

		<!-- jk:column {"style":{"spacing":{"blockGap":"0","padding":{"top":"0"}}}} -->
		<div class="jk-block-column" style="padding-top:0">
			<!-- jk:spacer {"height":"var:preset|spacing|50"} -->
			<div style="height:var(--jk--preset--spacing--50)" aria-hidden="true" class="jk-block-spacer">
			</div>
			<!-- /jk:spacer -->

			<!-- jk:query {"query":{"perPage":"3","pages":0,"offset":"3","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
			<div class="jk-block-query">
				<!-- jk:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
				<!-- jk:post-featured-image {"isLink":true,"align":"wide","style":{"spacing":{"margin":{"bottom":"0","top":"0"}}}} /-->
				<!-- /jk:post-template -->
			</div>
			<!-- /jk:query -->

			<!-- jk:spacer {"height":"var:preset|spacing|50"} -->
			<div style="height:var(--jk--preset--spacing--50)" aria-hidden="true" class="jk-block-spacer">
			</div>
			<!-- /jk:spacer -->
		</div>
		<!-- /jk:column -->

		<!-- jk:column {"style":{"spacing":{"blockGap":"0"}}} -->
		<div class="jk-block-column">
			<!-- jk:query {"query":{"perPage":"3","pages":0,"offset":"6","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
			<div class="jk-block-query">
				<!-- jk:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
				<!-- jk:post-featured-image {"isLink":true,"align":"wide","style":{"spacing":{"margin":{"bottom":"0"}}}} /-->
				<!-- /jk:post-template -->
			</div>
			<!-- /jk:query -->
		</div>
		<!-- /jk:column -->

		<!-- jk:column {"style":{"spacing":{"blockGap":"0","padding":{"top":"0"}}}} -->
		<div class="jk-block-column" style="padding-top:0">
			<!-- jk:spacer {"height":"var:preset|spacing|50"} -->
			<div style="height:var(--jk--preset--spacing--50)" aria-hidden="true" class="jk-block-spacer">
			</div>
			<!-- /jk:spacer -->

			<!-- jk:query {"query":{"perPage":"3","pages":0,"offset":"9","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
			<div class="jk-block-query">
				<!-- jk:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
				<!-- jk:post-featured-image {"isLink":true,"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->
				<!-- /jk:post-template -->
			</div>
			<!-- /jk:query -->

			<!-- jk:spacer {"height":"var:preset|spacing|50"} -->
			<div style="height:var(--jk--preset--spacing--50)" aria-hidden="true" class="jk-block-spacer">
			</div>
			<!-- /jk:spacer -->
		</div>
		<!-- /jk:column -->
	</div>
	<!-- /jk:columns -->
</div>
<!-- /jk:group -->
