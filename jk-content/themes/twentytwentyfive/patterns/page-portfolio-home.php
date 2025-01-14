<?php
/**
 * Title: Portfolio homepage
 * Slug: twentytwentyfive/page-portfolio-home
 * Categories: twentytwentyfive_page, posts
 * Keywords: starter
 * Block Types: core/post-content
 * Post Types: page, jk_template
 * Viewport width: 1400
 * Description: A portfolio homepage pattern.
 *
 * @package JKPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- jk:group {"align":"full","layout":{"type":"default"}} -->
<div class="jk-block-group alignfull">
	<!-- jk:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
	<div class="jk-block-group alignfull" style="padding-top:var(--jk--preset--spacing--50);padding-bottom:var(--jk--preset--spacing--50)">
		<!-- jk:columns {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|50"}}}} -->
		<div class="jk-block-columns alignwide" style="padding-top:var(--jk--preset--spacing--80);padding-bottom:var(--jk--preset--spacing--50)">
			<!-- jk:column {"width":"50%"} -->
			<div class="jk-block-column" style="flex-basis:50%">
				<!-- jk:heading {"align":"wide","fontSize":"x-large"} -->
				<h2 class="jk-block-heading alignwide has-x-large-font-size"><?php esc_html_e( 'My name is Anna Möller and these are some of my photo projects.', 'twentytwentyfive' ); ?></h2>
				<!-- /jk:heading -->
			</div>
			<!-- /jk:column -->

			<!-- jk:column {"width":"50%"} -->
			<div class="jk-block-column" style="flex-basis:50%">
				<!-- jk:spacer {"height":"var:preset|spacing|20"} -->
				<div style="height:var(--jk--preset--spacing--20)" aria-hidden="true" class="jk-block-spacer"></div>
				<!-- /jk:spacer -->
				</div>
			<!-- /jk:column -->
		</div>
		<!-- /jk:columns -->
	</div>
	<!-- /jk:group -->
</div>
<!-- /jk:group -->

<!-- jk:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="jk-block-group alignfull" style="margin-top:0;margin-bottom:0">
	<!-- jk:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} -->
	<div class="jk-block-columns alignwide">
		<!-- jk:column {"width":"66.66%"} -->
		<div class="jk-block-column" style="flex-basis:66.66%">
			<!-- jk:query {"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]},"layout":{"type":"default"}} -->
			<div class="jk-block-query">
				<!-- jk:post-template -->
					<!-- jk:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
					<div class="jk-block-group">
						<!-- jk:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /-->
						<!-- jk:post-title {"isLink":true} /-->
						<!-- jk:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-4"}}},"typography":{"fontStyle":"normal","fontWeight":"300"}}} /-->
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
		<!-- /jk:column -->
		<!-- jk:column {"width":"33.33%"} -->
		<div class="jk-block-column" style="flex-basis:33.33%">
			<!-- jk:query {"query":{"perPage":1,"pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]},"layout":{"type":"default"}} -->
			<div class="jk-block-query">
				<!-- jk:post-template -->
					<!-- jk:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
					<div class="jk-block-group">
						<!-- jk:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /-->
						<!-- jk:post-title {"isLink":true} /-->
						<!-- jk:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-4"}}},"typography":{"fontStyle":"normal","fontWeight":"300"}}} /-->
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
		<!-- /jk:column -->
	</div>
	<!-- /jk:columns -->

	<!-- jk:spacer {"height":"var:preset|spacing|30"} -->
	<div style="height:var(--jk--preset--spacing--30)" aria-hidden="true" class="jk-block-spacer"></div>
	<!-- /jk:spacer -->
</div>
<!-- /jk:group -->

<!-- jk:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="jk-block-group alignfull" style="margin-top:0;margin-bottom:0">
	<!-- jk:spacer {"height":"var:preset|spacing|30"} -->
	<div style="height:var(--jk--preset--spacing--30)" aria-hidden="true" class="jk-block-spacer"></div>
	<!-- /jk:spacer -->
	<!-- jk:query {"query":{"perPage":3,"pages":0,"offset":"2","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]},"align":"wide","layout":{"type":"default"}} -->
	<div class="jk-block-query alignwide">
		<!-- jk:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"grid","columnCount":3}} -->
			<!-- jk:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
			<div class="jk-block-group">
				<!-- jk:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /-->
				<!-- jk:post-title {"isLink":true} /-->
				<!-- jk:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-4"}}},"typography":{"fontStyle":"normal","fontWeight":"300"}}} /-->
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
	<!-- jk:spacer {"height":"var:preset|spacing|30"} -->
	<div style="height:var(--jk--preset--spacing--30)" aria-hidden="true" class="jk-block-spacer"></div>
	<!-- /jk:spacer -->
</div>
<!-- /jk:group -->

<!-- jk:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="jk-block-group alignfull" style="margin-top:0;margin-bottom:0">
	<!-- jk:spacer {"height":"var:preset|spacing|30"} -->
	<div style="height:var(--jk--preset--spacing--30)" aria-hidden="true" class="jk-block-spacer"></div>
	<!-- /jk:spacer -->
	<!-- jk:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} -->
	<div class="jk-block-columns alignwide">
		<!-- jk:column {"width":"33.33%"} -->
		<div class="jk-block-column" style="flex-basis:33.33%">
			<!-- jk:query {"query":{"perPage":1,"pages":0,"offset":"5","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]},"layout":{"type":"default"}} -->
			<div class="jk-block-query">
				<!-- jk:post-template -->
					<!-- jk:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
					<div class="jk-block-group">
						<!-- jk:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /-->
						<!-- jk:post-title {"isLink":true} /-->
						<!-- jk:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-4"}}},"typography":{"fontStyle":"normal","fontWeight":"300"}}} /-->
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
		<!-- /jk:column -->
		<!-- jk:column {"width":"66.66%"} -->
		<div class="jk-block-column" style="flex-basis:66.66%">
			<!-- jk:query {"query":{"perPage":1,"pages":0,"offset":"6","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]},"layout":{"type":"default"}} -->
			<div class="jk-block-query">
				<!-- jk:post-template -->
					<!-- jk:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
					<div class="jk-block-group">
						<!-- jk:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /-->
						<!-- jk:post-title {"isLink":true} /-->
						<!-- jk:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-4"}}},"typography":{"fontStyle":"normal","fontWeight":"300"}}} /-->
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
		<!-- /jk:column -->
	</div>
	<!-- /jk:columns -->

	<!-- jk:spacer {"height":"var:preset|spacing|70"} -->
	<div style="height:var(--jk--preset--spacing--70)" aria-hidden="true" class="jk-block-spacer"></div>
	<!-- /jk:spacer -->

	<!-- jk:query {"query":{"perPage":3,"pages":0,"offset":"7","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]},"align":"wide","layout":{"type":"default"}} -->
	<div class="jk-block-query alignwide">
		<!-- jk:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"grid","columnCount":3}} -->
			<!-- jk:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
			<div class="jk-block-group">
				<!-- jk:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /-->
				<!-- jk:post-title {"isLink":true} /-->
				<!-- jk:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-4"}}},"typography":{"fontStyle":"normal","fontWeight":"300"}}} /-->
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

	<!-- jk:separator {"align":"full"} -->
	<hr class="jk-block-separator alignfull has-alpha-channel-opacity"/>
	<!-- /jk:separator -->

	<!-- jk:spacer {"height":"var:preset|spacing|30"} -->
	<div style="height:var(--jk--preset--spacing--30)" aria-hidden="true" class="jk-block-spacer"></div>
	<!-- /jk:spacer -->
</div>
<!-- /jk:group -->

<!-- jk:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="jk-block-group alignfull" style="margin-top:0;margin-bottom:0">
	<!-- jk:group {"align":"wide","layout":{"type":"constrained"}} -->
	<div class="jk-block-group alignwide">
		<!-- jk:group {"align":"wide","layout":{"type":"default"}} -->
		<div class="jk-block-group alignwide">
			<!-- jk:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size"><?php esc_html_e( 'Twenty Twenty-Five', 'twentytwentyfive' ); ?></p>
			<!-- /jk:paragraph -->
			<!-- jk:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size"><?php esc_html_e( 'email@example.com', 'twentytwentyfive' ); ?><br><?php echo esc_html_x( '+1 555 349 1806', 'Phone number.', 'twentytwentyfive' ); ?></p>
			<!-- /jk:paragraph -->
		</div>
		<!-- /jk:group -->
	</div>
	<!-- /jk:group -->
</div>
<!-- /jk:group -->
