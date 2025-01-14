<?php
/**
 * Title: Post with left-aligned content
 * Slug: twentytwentyfive/post-with-left-aligned-content
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

	<!-- jk:group {"tagName":"main","align":"wide","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
	<main class="jk-block-group alignwide">
		<!-- jk:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
		<div class="jk-block-group" style="padding-top:var(--jk--preset--spacing--50);padding-bottom:var(--jk--preset--spacing--50)">
			<!-- jk:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
			<div class="jk-block-columns alignwide">
				<!-- jk:column {"width":"40%"} -->
				<div class="jk-block-column" style="flex-basis:40%">
					<!-- jk:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
					<div class="jk-block-group alignwide">
						<!-- jk:post-title {"level":1,"align":"wide","fontSize":"x-large"} /-->
						<!-- jk:group {"style":{"spacing":{"blockGap":"4px"}},"fontSize":"small","layout":{"type":"flex","flexWrap":"nowrap"}} -->
						<div class="jk-block-group has-small-font-size">
							<!-- jk:paragraph -->
							<p><?php echo esc_html_x( 'by', 'Prefix before the author name. The post author name is displayed in a separate block.', 'twentytwentyfive' ); ?></p>
							<!-- /jk:paragraph -->
							<!-- jk:post-author-name {"isLink":true,"fontSize":"small"} /-->
						</div>
						<!-- /jk:group -->
					</div>
					<!-- /jk:group -->
				</div>
				<!-- /jk:column -->
				<!-- jk:column {"width":"60%"} -->
				<div class="jk-block-column" style="flex-basis:60%">
					<!-- jk:post-featured-image /-->
				</div>
				<!-- /jk:column -->
			</div>
			<!-- /jk:columns -->

			<!-- jk:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
			<div class="jk-block-columns alignwide">
				<!-- jk:column {"width":"100%"} -->
				<div class="jk-block-column" style="flex-basis:100%">
					<!-- jk:group {"align":"wide","style":{"spacing":{"blockGap":"4px"}},"fontSize":"small","layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="jk-block-group alignwide has-small-font-size">
						<!-- jk:post-date /-->
						<!-- jk:paragraph -->
						<p><?php echo esc_html_x( '·', 'Separator between date and categories.', 'twentytwentyfive' ); ?></p>
						<!-- /jk:paragraph -->
						<!-- jk:post-terms {"term":"category"} /-->
					</div>
					<!-- /jk:group -->
				</div>
				<!-- /jk:column -->
			</div>
			<!-- /jk:columns -->
		</div>
		<!-- /jk:group -->

		<!-- jk:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
		<div class="jk-block-group" style="padding-top:var(--jk--preset--spacing--50);padding-bottom:var(--jk--preset--spacing--50)">
			<!-- jk:post-content {"align":"wide","layout":{"type":"constrained","justifyContent":"left","contentSize":"800px"}} /-->
		</div>
		<!-- /jk:group -->

		<!-- jk:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
		<div class="jk-block-group alignwide" style="margin-top:var(--jk--preset--spacing--60);margin-bottom:var(--jk--preset--spacing--60)">
			<!-- jk:group {"align":"wide","style":{"border":{"top":{"color":"var:preset|color|accent-6","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"constrained"}} -->
			<div class="jk-block-group alignwide" style="border-top-color:var(--jk--preset--color--accent-6);border-top-width:1px">
				<!-- jk:group {"ariaLabel":"<?php esc_attr_e( 'Post navigation', 'twentytwentyfive' ); ?>","tagName":"nav","align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
				<nav class="jk-block-group alignwide" aria-label="<?php esc_attr_e( 'Post navigation', 'twentytwentyfive' ); ?>" style="padding-top:var(--jk--preset--spacing--40);padding-bottom:var(--jk--preset--spacing--40)">
					<!-- jk:post-navigation-link {"type":"previous","showTitle":true,"arrow":"arrow"} /-->
					<!-- jk:post-navigation-link {"showTitle":true,"arrow":"arrow"} /-->
				</nav>
				<!-- /jk:group -->
			</div>
			<!-- /jk:group -->
		</div>
		<!-- /jk:group -->

		<!-- jk:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
		<div class="jk-block-group" style="padding-top:var(--jk--preset--spacing--50);padding-bottom:var(--jk--preset--spacing--50)">
			<!-- jk:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
			<div class="jk-block-columns alignwide">
				<!-- jk:column {"width":"40%"} -->
				<div class="jk-block-column" style="flex-basis:40%">
					<!-- jk:spacer {"height":"var:preset|spacing|20"} -->
					<div style="height:var(--jk--preset--spacing--20)" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer -->
				</div>
				<!-- /jk:column -->
				<!-- jk:column {"width":"60%","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}}} -->
				<div class="jk-block-column" style="padding-top:0;padding-bottom:0;flex-basis:60%">
					<!-- jk:pattern {"slug":"twentytwentyfive/comments"} /-->
				</div>
				<!-- /jk:column -->
			</div>
			<!-- /jk:columns -->
		</div>
		<!-- /jk:group -->
	</main>
	<!-- /jk:group -->

<!-- jk:template-part {"slug":"footer-columns"} /-->
