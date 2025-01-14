<?php
/**
 * Title: News blog with sidebar
 * Slug: twentytwentyfive/template-home-with-sidebar-news-blog
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

<!-- jk:group {"tagName":"main","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<main class="jk-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--jk--preset--spacing--50);padding-bottom:var(--jk--preset--spacing--50)">
	<!-- jk:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
	<div class="jk-block-columns alignwide">
		<!-- jk:column {"width":"75%"} -->
		<div class="jk-block-column" style="flex-basis:75%">
			<!-- jk:query {"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
			<div class="jk-block-query">
				<!-- jk:post-template -->
					<!-- jk:post-featured-image {"isLink":true,"aspectRatio":"3/2","align":"wide"} /-->
					<!-- jk:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
					<div class="jk-block-group" style="padding-top:var(--jk--preset--spacing--40);padding-bottom:var(--jk--preset--spacing--40)">
						<!-- jk:post-title {"level":1,"isLink":true} /-->
						<!-- jk:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase","letterSpacing":"1.4px"}}} /-->
						<!-- jk:post-date {"isLink":true} /-->
					</div>
					<!-- /jk:group -->
				<!-- /jk:post-template -->
			</div>
			<!-- /jk:query -->
		</div>
		<!-- /jk:column -->
		<!-- jk:column {"width":"25%"} -->
		<div class="jk-block-column" style="flex-basis:25%">
			<!-- jk:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase","letterSpacing":"1.6px"}},"fontSize":"small"} -->
			<h2 class="jk-block-heading has-small-font-size" style="font-style:normal;font-weight:600;letter-spacing:1.6px;text-transform:uppercase"><?php esc_html_e( 'The Latest', 'twentytwentyfive' ); ?></h2>
			<!-- /jk:heading -->
			<!-- jk:spacer {"height":"var:preset|spacing|20"} -->
			<div style="height:var(--jk--preset--spacing--20)" aria-hidden="true" class="jk-block-spacer"></div>
			<!-- /jk:spacer -->
			<!-- jk:query {"query":{"perPage":6,"pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]}} -->
			<div class="jk-block-query">
				<!-- jk:post-template -->
					<!-- jk:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="jk-block-group">
						<!-- jk:post-title {"level":3,"isLink":true,"fontSize":"large"} /-->
						<!-- jk:post-date {"fontSize":"small","isLink":true} /-->
					</div>
					<!-- /jk:group -->
					<!-- jk:spacer {"height":"var:preset|spacing|20"} -->
					<div style="height:var(--jk--preset--spacing--20)" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer -->
				<!-- /jk:post-template -->
				<!-- jk:query-no-results -->
					<!-- jk:paragraph {"placeholder":"<?php esc_attr_e( 'Add text or blocks that will display when a query returns no results.', 'twentytwentyfive' ); ?>","fontSize":"medium"} -->
					<p class="has-medium-font-size"><?php echo esc_html_x( 'Sorry, but nothing was found. Please try a search with different keywords.', 'Message explaining that there are no results returned from a search.', 'twentytwentyfive' ); ?></p>
					<!-- /jk:paragraph -->
				<!-- /jk:query-no-results -->
			</div>
			<!-- /jk:query -->
		</div>
		<!-- /jk:column -->
	</div>
	<!-- /jk:columns -->
	<!-- jk:spacer {"height":"var:preset|spacing|50"} -->
	<div style="height:var(--jk--preset--spacing--50)" aria-hidden="true" class="jk-block-spacer"></div>
	<!-- /jk:spacer -->
	<!-- jk:query {"query":{"perPage":4,"pages":0,"offset":"7","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]},"align":"wide"} -->
	<div class="jk-block-query alignwide">
		<!-- jk:post-template -->
			<!-- jk:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"},"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"bottom":{"color":"var:preset|color|accent-6","width":"1px"}}}} -->
			<div class="jk-block-columns" style="border-bottom-color:var(--jk--preset--color--accent-6);border-bottom-width:1px;margin-top:var(--jk--preset--spacing--30);margin-bottom:var(--jk--preset--spacing--30);padding-top:var(--jk--preset--spacing--30);padding-bottom:var(--jk--preset--spacing--30)">
				<!-- jk:column {"verticalAlignment":"center","width":"60%"} -->
				<div class="jk-block-column is-vertically-aligned-center" style="flex-basis:60%">
					<!-- jk:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
					<div class="jk-block-group">
						<!-- jk:post-title {"fontSize":"x-large"} /-->
						<!-- jk:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"fontSize":"small","layout":{"type":"flex","flexWrap":"wrap"}} -->
						<div class="jk-block-group has-small-font-size">
							<!-- jk:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase","letterSpacing":"1.4px"}}} /-->
							<!-- jk:paragraph -->
							<p><?php echo esc_html_x( '·', 'Separator between date and categories.', 'twentytwentyfive' ); ?></p>
							<!-- /jk:paragraph -->
							<!-- jk:post-date {"isLink":true} /-->
						</div>
						<!-- /jk:group -->
					</div>
					<!-- /jk:group -->
				</div>
				<!-- /jk:column -->
				<!-- jk:column {"width":"20%"} -->
				<div class="jk-block-column" style="flex-basis:20%"></div>
				<!-- /jk:column -->
				<!-- jk:column {"width":"13.33%"} -->
				<div class="jk-block-column" style="flex-basis:13.33%">
					<!-- jk:post-featured-image {"isLink":true,"aspectRatio":"1","style":{"layout":{"selfStretch":"fixed","flexSize":"180px"}}} /-->
				</div>
				<!-- /jk:column -->
			</div>
			<!-- /jk:columns -->
		<!-- /jk:post-template -->
		<!-- jk:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
		<div class="jk-block-group" style="padding-top:var(--jk--preset--spacing--30);padding-bottom:var(--jk--preset--spacing--30)">
			<!-- jk:query-pagination {"fontSize":"medium","layout":{"type":"flex","justifyContent":"space-between"}} -->
				<!-- jk:query-pagination-previous /-->
				<!-- jk:query-pagination-numbers /-->
				<!-- jk:query-pagination-next /-->
			<!-- /jk:query-pagination -->
		</div>
		<!-- /jk:group -->
		<!-- jk:query-no-results -->
			<!-- jk:paragraph -->
			<p><?php echo esc_html_x( 'Sorry, but nothing was found. Please try a search with different keywords.', 'Message explaining that there are no results returned from a search.', 'twentytwentyfive' ); ?></p>
			<!-- /jk:paragraph -->
		<!-- /jk:query-no-results -->
	</div>
	<!-- /jk:query -->
</main>
<!-- /jk:group -->

<!-- jk:template-part {"slug":"footer-columns"} /-->
