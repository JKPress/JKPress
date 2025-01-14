<?php
/**
 * Title: Blogging home
 * Slug: twentytwentyfour/page-home-blogging
 * Categories: twentytwentyfour_page
 * Keywords: page, starter
 * Post Types: page, jk_template
 * Viewport width: 1400
 * Description: A blogging home page with a hero section, a text section, a blog section, and a CTA section.
 */
?>

<!-- jk:pattern {"slug":"twentytwentyfour/text-centered-statement-small"}	/-->

<!-- jk:group {"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="jk-block-group alignwide" style="margin-top:0;margin-bottom:0;padding-top:var(--jk--preset--spacing--40);padding-bottom:var(--jk--preset--spacing--40)">
	<!-- jk:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"1rem","left":"1rem"}}}} -->
	<div class="jk-block-columns alignwide">
		<!-- jk:column {"width":"10%"} -->
		<div class="jk-block-column" style="flex-basis:10%">
		</div>
		<!-- /jk:column -->

		<!-- jk:column {"width":"60%"} -->
		<div class="jk-block-column" style="flex-basis:60%">
			<!-- jk:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true}} -->
			<div class="jk-block-query">
				<!-- jk:post-template -->
				<!-- jk:group {"tagName":"article","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
				<article class="jk-block-group">
					<!-- jk:post-featured-image /-->

					<!-- jk:post-title {"isLink":true,"fontSize":"large"} /-->

					<!-- jk:template-part {"slug":"post-meta"} /-->

				</article>
				<!-- /jk:group -->

				<!-- jk:post-excerpt {"moreText":"","excerptLength":40} /-->

				<!-- jk:spacer -->
				<div style="height:100px" aria-hidden="true" class="jk-block-spacer">
				</div>
				<!-- /jk:spacer -->
				<!-- /jk:post-template -->

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
		<!-- /jk:column -->

		<!-- jk:column {"width":"10%"} -->
		<div class="jk-block-column" style="flex-basis:10%">
		</div>
		<!-- /jk:column -->

		<!-- jk:column {"width":"30%"} -->
		<div class="jk-block-column" style="flex-basis:30%">
			<!-- jk:template-part {"slug":"sidebar","tagName":"aside"} /-->
		</div>
		<!-- /jk:column -->

		<!-- jk:column {"width":"10%"} -->
		<div class="jk-block-column" style="flex-basis:10%">
		</div>
		<!-- /jk:column -->
	</div>
	<!-- /jk:columns -->
</div>
<!-- /jk:group -->

<!-- jk:pattern {"slug":"twentytwentyfour/cta-subscribe-centered"}	/-->
