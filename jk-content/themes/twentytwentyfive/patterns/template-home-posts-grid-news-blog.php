<?php
/**
 * Title: News blog with featured posts grid
 * Slug: twentytwentyfive/template-home-posts-grid-news-blog
 * Template Types: front-page, index, home
 * Inserter: no
 *
 * @package JKPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- jk:template-part {"slug":"header-large-title"} /-->

<!-- jk:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<main class="jk-block-group" style="margin-top:0;margin-bottom:0;">

	<!-- jk:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
	<div class="jk-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--jk--preset--spacing--50);padding-bottom:var(--jk--preset--spacing--50)">
		<!-- jk:query {"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide"} -->
		<div class="jk-block-query alignwide">
			<!-- jk:post-template -->
				<!-- jk:post-featured-image {"isLink":true,"aspectRatio":"16/9","align":"wide"} /-->
				<!-- jk:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
				<div class="jk-block-group" style="padding-top:var(--jk--preset--spacing--40)">
					<!-- jk:post-title {"textAlign":"center","level":1,"isLink":true,"fontSize":"xx-large"} /-->
					<!-- jk:post-terms {"term":"category","textAlign":"center","style":{"typography":{"textTransform":"uppercase","letterSpacing":"1.4px"}}} /-->
					<!-- jk:post-date {"textAlign":"center","isLink":true} /-->
				</div>
				<!-- /jk:group -->
			<!-- /jk:post-template -->
			<!-- jk:query-no-results -->
				<!-- jk:paragraph {"align":"center","placeholder":"<?php esc_attr_e( 'Add text or blocks that will display when a query returns no results.', 'twentytwentyfive' ); ?>"} -->
				<p class="has-text-align-center"><?php echo esc_html_x( 'Sorry, but nothing was found. Please try a search with different keywords.', 'Message explaining that there are no results returned from a search.', 'twentytwentyfive' ); ?></p>
				<!-- /jk:paragraph -->
			<!-- /jk:query-no-results -->
		</div>
		<!-- /jk:query -->
	</div>
	<!-- /jk:group -->

	<!-- jk:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
	<div class="jk-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--jk--preset--spacing--50);padding-bottom:var(--jk--preset--spacing--50)">
		<!-- jk:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","columnCount":null,"minimumColumnWidth":"40rem"}} -->
		<div class="jk-block-group alignwide">
			<!-- jk:query {"query":{"perPage":1,"pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]}} -->
			<div class="jk-block-query">
				<!-- jk:post-template -->
					<!-- jk:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
					<div class="jk-block-group">
						<!-- jk:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /-->
						<!-- jk:post-title {"isLink":true,"fontSize":"x-large"} /-->
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
			<!-- jk:query {"query":{"perPage":1,"pages":0,"offset":"2","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]}} -->
			<div class="jk-block-query">
				<!-- jk:post-template -->
					<!-- jk:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
					<div class="jk-block-group">
						<!-- jk:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /-->
						<!-- jk:post-title {"isLink":true,"fontSize":"x-large"} /-->
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
		</div>
		<!-- /jk:group -->
	</div>
	<!-- /jk:group -->

	<!-- jk:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
	<div class="jk-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--jk--preset--spacing--50);padding-bottom:var(--jk--preset--spacing--50)">
		<!-- jk:query {"query":{"perPage":3,"pages":0,"offset":"3","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]},"align":"wide"} -->
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
			<!-- jk:query-no-results -->
			<!-- jk:paragraph -->
			<p><?php echo esc_html_x( 'Sorry, but nothing was found. Please try a search with different keywords.', 'Message explaining that there are no results returned from a search.', 'twentytwentyfive' ); ?></p>
			<!-- /jk:paragraph -->
			<!-- /jk:query-no-results -->
		</div>
		<!-- /jk:query -->
	</div>
	<!-- /jk:group -->

	<!-- jk:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
	<div class="jk-block-group alignwide" style="margin-top:0;margin-bottom:0;padding-top:var(--jk--preset--spacing--60);padding-bottom:var(--jk--preset--spacing--60)">
		<!-- jk:heading {"align":"wide"} -->
		<h2 class="jk-block-heading alignwide"><?php esc_html_e( 'Architecture', 'twentytwentyfive' ); ?></h2>
		<!-- /jk:heading -->
		<!-- jk:query {"query":{"perPage":6,"pages":0,"offset":"6","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]},"align":"wide","layout":{"type":"default"}} -->
		<div class="jk-block-query alignwide">
			<!-- jk:post-template {"align":"full","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
				<!-- jk:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"bottom":{"color":"var:preset|color|accent-6","width":"1px"},"top":[],"right":[],"left":[]}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"space-between"}} -->
				<div class="jk-block-group alignfull" style="border-bottom-color:var(--jk--preset--color--accent-6);border-bottom-width:1px;padding-top:var(--jk--preset--spacing--30);padding-bottom:var(--jk--preset--spacing--30)">
					<!-- jk:post-title {"level":3,"isLink":true,"fontSize":"large"} /-->
					<!-- jk:post-date {"textAlign":"right","isLink":true} /-->
				</div>
				<!-- /jk:group -->
			<!-- /jk:post-template -->
			</div>
		<!-- /jk:query -->
	</div>
	<!-- /jk:group -->

</main>
<!-- /jk:group -->

<!-- jk:pattern {"slug":"twentytwentyfive/cta-newsletter"} /-->

<!-- jk:template-part {"slug":"footer-columns"} /-->
