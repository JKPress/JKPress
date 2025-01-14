<?php
/**
 * Title: News blog home
 * Slug: twentytwentyfive/template-home-news-blog
 * Template Types: front-page, index, home
 * Viewport width: 1400
 * Inserter: no
 *
 * @package JKPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- jk:template-part {"slug":"header-large-title"} /-->

<!-- jk:group {"tagName":"main","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<main class="jk-block-group">
	<!-- jk:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
	<div class="jk-block-group alignfull" style="padding-top:var(--jk--preset--spacing--50);padding-bottom:var(--jk--preset--spacing--50)">
		<!-- jk:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
		<div class="jk-block-columns alignwide">
			<!-- jk:column {"width":"25%"} -->
			<div class="jk-block-column" style="flex-basis:25%">
				<!-- jk:group {"style":{"layout":{"columnSpan":1,"rowSpan":1}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
				<div class="jk-block-group">
					<!-- jk:query {"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]}} -->
					<div class="jk-block-query">
						<!-- jk:post-template -->
							<!-- jk:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
							<div class="jk-block-group">
								<!-- jk:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /-->
								<!-- jk:post-title {"isLink":true,"fontSize":"large"} /-->
								<!-- jk:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase","letterSpacing":"1.4px"}}} /-->
							</div>
							<!-- /jk:group -->
						<!-- /jk:post-template -->
						<!-- jk:query-no-results -->
							<!-- jk:paragraph -->
							<p><?php echo esc_html_x( 'Sorry, but nothing was found. Please try a search with different keywords.', 'Message explaining that there are no results returned from a search.', 'twentytwentyfive' ); ?></p>
							<!-- /jk:paragraph -->
						<!-- /jk:query-no-results -->
					</div>
					<!-- /jk:query -->
					<!-- jk:query {"query":{"perPage":1,"pages":0,"offset":"3","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]}} -->
					<div class="jk-block-query">
						<!-- jk:post-template -->
							<!-- jk:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
							<div class="jk-block-group">
								<!-- jk:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /-->
								<!-- jk:post-title {"isLink":true,"fontSize":"large"} /-->
								<!-- jk:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase","letterSpacing":"1.4px"}}} /-->
							</div>
							<!-- /jk:group -->
						<!-- /jk:post-template -->
					</div>
					<!-- /jk:query -->
				</div>
				<!-- /jk:group -->
			</div>
			<!-- /jk:column -->
			<!-- jk:column {"width":"50%"} -->
			<div class="jk-block-column" style="flex-basis:50%">
				<!-- jk:query {"query":{"perPage":1,"pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]}} -->
				<div class="jk-block-query">
					<!-- jk:post-template -->
						<!-- jk:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
						<div class="jk-block-group">
							<!-- jk:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->
							<!-- jk:post-title {"level":1,"isLink":true} /-->
							<!-- jk:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase","letterSpacing":"1.4px"}}} /-->
							<!-- jk:post-excerpt {"fontSize":"medium"} /-->
						</div>
						<!-- /jk:group -->
					<!-- /jk:post-template -->
				</div>
				<!-- /jk:query -->
			</div>
			<!-- /jk:column -->
			<!-- jk:column {"width":"25%"} -->
			<div class="jk-block-column" style="flex-basis:25%">
				<!-- jk:group {"style":{"layout":{"columnSpan":1,"rowSpan":1}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
				<div class="jk-block-group">
					<!-- jk:query {"query":{"perPage":1,"pages":0,"offset":"2","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]}} -->
					<div class="jk-block-query">
						<!-- jk:post-template -->
							<!-- jk:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
							<div class="jk-block-group">
								<!-- jk:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /-->
								<!-- jk:post-title {"isLink":true,"fontSize":"large"} /-->
								<!-- jk:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase","letterSpacing":"1.4px"}}} /-->
							</div>
							<!-- /jk:group -->
						<!-- /jk:post-template -->
					</div>
					<!-- /jk:query -->
					<!-- jk:query {"query":{"perPage":1,"pages":0,"offset":"4","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]}} -->
					<div class="jk-block-query">
						<!-- jk:post-template -->
							<!-- jk:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
							<div class="jk-block-group">
								<!-- jk:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /-->
								<!-- jk:post-title {"isLink":true,"fontSize":"large"} /-->
								<!-- jk:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase","letterSpacing":"1.4px"}}} /-->
							</div>
							<!-- /jk:group -->
						<!-- /jk:post-template -->
					</div>
					<!-- /jk:query -->
				</div>
				<!-- /jk:group -->
			</div>
			<!-- /jk:column -->
		</div>
		<!-- /jk:columns -->
	</div>
	<!-- /jk:group -->

	<!-- jk:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained"}} -->
	<div class="jk-block-group alignfull" style="padding-top:var(--jk--preset--spacing--50);padding-bottom:var(--jk--preset--spacing--50)">
		<!-- jk:query {"query":{"perPage":2,"pages":0,"offset":"5","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]},"align":"wide"} -->
		<div class="jk-block-query alignwide">
			<!-- jk:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","columnCount":2}} -->
				<!-- jk:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
				<div class="jk-block-group">
					<!-- jk:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /-->
					<!-- jk:post-title {"isLink":true,"fontSize":"x-large"} /-->
					<!-- jk:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase","letterSpacing":"1.4px"}}} /-->
				</div>
				<!-- /jk:group -->
			<!-- /jk:post-template -->
		</div>
		<!-- /jk:query -->
	</div>
	<!-- /jk:group -->

	<!-- jk:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
	<div class="jk-block-group alignfull" style="padding-top:var(--jk--preset--spacing--50);padding-bottom:var(--jk--preset--spacing--50)">
		<!-- jk:query {"query":{"perPage":6,"pages":0,"offset":"7","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]},"align":"wide"} -->
		<div class="jk-block-query alignwide">
			<!-- jk:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","columnCount":3}} -->
				<!-- jk:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
				<div class="jk-block-group">
					<!-- jk:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->
					<!-- jk:post-title {"isLink":true,"fontSize":"large"} /-->
					<!-- jk:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase","letterSpacing":"1.4px"}}} /-->
				</div>
				<!-- /jk:group -->
			<!-- /jk:post-template -->
			<!-- jk:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
			<div class="jk-block-group" style="padding-top:var(--jk--preset--spacing--40);padding-bottom:var(--jk--preset--spacing--40)">
				<!-- jk:query-pagination {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
					<!-- jk:query-pagination-previous /-->
					<!-- jk:query-pagination-numbers /-->
					<!-- jk:query-pagination-next /-->
				<!-- /jk:query-pagination -->
			</div>
			<!-- /jk:group -->
		</div>
		<!-- /jk:query -->
	</div>
	<!-- /jk:group -->
</main>
<!-- /jk:group -->

<!-- jk:template-part {"slug":"footer-newsletter"} /-->
