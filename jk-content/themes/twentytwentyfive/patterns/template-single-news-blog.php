<?php
/**
 * Title: News blog single post with sidebar
 * Slug: twentytwentyfive/template-single-news-blog
 * Template Types: posts, single
 * Viewport width: 1400
 * Inserter: no
 *
 * @package JKPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- jk:template-part {"slug":"header-large-title"} /-->

<!-- jk:group {"tagName":"main","layout":{"type":"constrained"}} -->
<main class="jk-block-group">

	<!-- jk:group {"align":"wide","layout":{"type":"constrained"}} -->
	<div class="jk-block-group alignwide">
		<!-- jk:group {"align":"wide","layout":{"type":"default"}} -->
		<div class="jk-block-group alignwide">
			<!-- jk:spacer {"height":"var:preset|spacing|80"} -->
			<div style="height:var(--jk--preset--spacing--80)" aria-hidden="true" class="jk-block-spacer"></div>
			<!-- /jk:spacer -->
			<!-- jk:post-title {"level":1,"align":"wide","fontSize":"xx-large"} /-->
			<!-- jk:spacer {"height":"var:preset|spacing|40"} -->
			<div style="height:var(--jk--preset--spacing--40)" aria-hidden="true" class="jk-block-spacer"></div>
			<!-- /jk:spacer -->
			<!-- jk:group {"layout":{"type":"default"}} -->
			<div class="jk-block-group">
				<!-- jk:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
				<div class="jk-block-group" style="padding-top:var(--jk--preset--spacing--20);padding-bottom:var(--jk--preset--spacing--20)">
					<!-- jk:group {"style":{"spacing":{"blockGap":"4px"}},"fontSize":"small","layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="jk-block-group has-small-font-size">
						<!-- jk:post-date /-->
						<!-- jk:paragraph -->
						<p><?php echo esc_html_x( '·', 'Separator between date and categories.', 'twentytwentyfive' ); ?></p>
						<!-- /jk:paragraph -->
						<!-- jk:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase","letterSpacing":"1.4px"}}} /-->
					</div>
					<!-- /jk:group -->
					<!-- jk:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="jk-block-group">
						<!-- jk:avatar {"size":30,"isLink":true,"style":{"border":{"radius":"100px"}}} /-->
						<!-- jk:post-author-name {"isLink":true,"fontSize":"small"} /-->
					</div>
					<!-- /jk:group -->
				</div>
				<!-- /jk:group -->
			</div>
			<!-- /jk:group -->
		</div>
		<!-- /jk:group -->
	</div>
	<!-- /jk:group -->

	<!-- jk:group {"align":"wide","layout":{"type":"constrained"}} -->
	<div class="jk-block-group alignwide"><!-- jk:post-featured-image {"align":"wide"} /--></div>
	<!-- /jk:group -->

	<!-- jk:group {"align":"wide","layout":{"type":"constrained"}} -->
	<div class="jk-block-group alignwide">
		<!-- jk:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"},"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}}} -->
		<div class="jk-block-columns alignwide" style="padding-top:var(--jk--preset--spacing--60);padding-bottom:var(--jk--preset--spacing--60)">
			<!-- jk:column {"width":"5%"} -->
			<div class="jk-block-column" style="flex-basis:5%"></div>
			<!-- /jk:column -->
			<!-- jk:column {"width":"65%","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|60"}}}} -->
			<div class="jk-block-column" style="padding-bottom:var(--jk--preset--spacing--60);flex-basis:65%">
				<!-- jk:post-content {"layout":{"type":"default"}} /-->
				<!-- jk:spacer {"height":"var:preset|spacing|40"} -->
				<div style="height:var(--jk--preset--spacing--40)" aria-hidden="true" class="jk-block-spacer"></div>
				<!-- /jk:spacer -->
				<!-- jk:post-terms {"term":"post_tag","separator":"  ","className":"is-style-post-terms-1","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} /-->
			</div>
			<!-- /jk:column -->
			<!-- jk:column {"width":"5%"} -->
			<div class="jk-block-column" style="flex-basis:5%"></div>
			<!-- /jk:column -->
			<!-- jk:column {"width":"25%"} -->
			<div class="jk-block-column" style="flex-basis:25%"><!-- jk:template-part {"slug":"sidebar"} /--></div>
			<!-- /jk:column -->
			<!-- jk:column {"width":"5%"} -->
			<div class="jk-block-column" style="flex-basis:5%"></div>
			<!-- /jk:column -->
		</div>
		<!-- /jk:columns -->
	</div>
	<!-- /jk:group -->

	<!-- jk:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
	<div class="jk-block-group alignwide" style="margin-top:var(--jk--preset--spacing--60);margin-bottom:var(--jk--preset--spacing--60)">
		<!-- jk:group {"ariaLabel":"<?php esc_attr_e( 'Post navigation', 'twentytwentyfive' ); ?>","tagName":"nav","align":"wide","style":{"border":{"top":{"color":"var:preset|color|accent-6","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
		<nav class="jk-block-group alignwide" aria-label="<?php esc_attr_e( 'Post navigation', 'twentytwentyfive' ); ?>" style="border-top-color:var(--jk--preset--color--accent-6);border-top-width:1px;padding-top:var(--jk--preset--spacing--40);padding-bottom:var(--jk--preset--spacing--40)">
			<!-- jk:post-navigation-link {"type":"previous","showTitle":true,"arrow":"arrow"} /-->
			<!-- jk:post-navigation-link {"showTitle":true,"arrow":"arrow"} /-->
		</nav>
		<!-- /jk:group -->
	</div>
	<!-- /jk:group -->

	<!-- jk:group {"align":"wide","layout":{"type":"constrained","justifyContent":"center"}} -->
	<div class="jk-block-group alignwide">
		<!-- jk:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}}} -->
		<div class="jk-block-columns alignwide" style="margin-top:0;margin-bottom:0">
			<!-- jk:column {"width":"5%"} -->
			<div class="jk-block-column" style="flex-basis:5%"></div>
			<!-- /jk:column -->

			<!-- jk:column {"width":"65%","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}}} -->
			<div class="jk-block-column" style="padding-top:0;padding-bottom:0;flex-basis:65%">
				<!-- jk:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"default"}} -->
				<div class="jk-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
					<!-- jk:pattern {"slug":"twentytwentyfive/comments"} /-->
				</div>
				<!-- /jk:group -->
			</div>
			<!-- /jk:column -->

			<!-- jk:column {"width":"5%"} -->
			<div class="jk-block-column" style="flex-basis:5%"></div>
			<!-- /jk:column -->

			<!-- jk:column {"width":"25%"} -->
			<div class="jk-block-column" style="flex-basis:25%"></div>
			<!-- /jk:column -->

			<!-- jk:column {"width":"5%"} -->
			<div class="jk-block-column" style="flex-basis:5%"></div>
			<!-- /jk:column -->

		</div>
		<!-- /jk:columns -->
	</div>
	<!-- /jk:group -->
</main>
<!-- /jk:group -->

<!-- jk:template-part {"slug":"footer-newsletter"} /-->
