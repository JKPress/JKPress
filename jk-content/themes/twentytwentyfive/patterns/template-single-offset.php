<?php
/**
 * Title: Offset post without featured image
 * Slug: twentytwentyfive/template-single-offset
 * Template Types: posts, single
 * Viewport width: 1400
 * Inserter: no
 *
 * @package JKPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- jk:template-part {"slug":"header"} /-->

<!-- jk:group {"tagName":"main","align":"wide","layout":{"type":"default"}} -->
<main class="jk-block-group alignwide">
	<!-- jk:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
	<div class="jk-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--jk--preset--spacing--80);padding-bottom:var(--jk--preset--spacing--40)">
		<!-- jk:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|50"}},"border":{"bottom":{"color":"var:preset|color|accent-6","width":"1px"},"top":[],"right":[],"left":[]}},"layout":{"type":"default"}} -->
		<div class="jk-block-group alignwide" style="border-bottom-color:var(--jk--preset--color--accent-6);border-bottom-width:1px;padding-bottom:var(--jk--preset--spacing--50)">
			<!-- jk:post-title {"level":1,"align":"wide","fontSize":"xx-large"} /-->
			<!-- jk:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase","letterSpacing":"1.4px"}}} /-->
		</div>
		<!-- /jk:group -->
	</div>
	<!-- /jk:group -->

	<!-- jk:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
	<div class="jk-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--jk--preset--spacing--30);padding-bottom:var(--jk--preset--spacing--50)">
		<!-- jk:group {"align":"wide","layout":{"type":"default"}} -->
		<div class="jk-block-group alignwide">
			<!-- jk:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
			<div class="jk-block-columns">
				<!-- jk:column {"width":"30%"} -->
				<div class="jk-block-column" style="flex-basis:30%">
					<!-- jk:group {"style":{"spacing":{"blockGap":"4px"}},"fontSize":"small","layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="jk-block-group has-small-font-size">
						<!-- jk:paragraph --><p><?php echo esc_html_x( 'Published on', 'Prefix before the post date block.', 'twentytwentyfive' ); ?></p><!-- /jk:paragraph -->
						<!-- jk:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast"} /-->
					</div>
					<!-- /jk:group -->
				</div>
				<!-- /jk:column -->

				<!-- jk:column {"width":"70%"} -->
				<div class="jk-block-column" style="flex-basis:70%">
					<!-- jk:post-content {"layout":{"type":"default"}} /-->
				</div>
				<!-- /jk:column -->
			</div>
			<!-- /jk:columns -->
		</div>
		<!-- /jk:group -->
	</div>
	<!-- /jk:group -->

	<!-- jk:group {"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
	<div class="jk-block-group alignwide" style="margin-top:0;margin-bottom:0">
		<!-- jk:group {"ariaLabel":"<?php esc_attr_e( 'Post navigation', 'twentytwentyfive' ); ?>","tagName":"nav","align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"top":{"color":"var:preset|color|accent-6","width":"1px"},"right":{},"bottom":{},"left":{}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
		<nav class="jk-block-group alignwide" aria-label="<?php esc_attr_e( 'Post navigation', 'twentytwentyfive' ); ?>" style="border-top-color:var(--jk--preset--color--accent-6);border-top-width:1px;padding-top:var(--jk--preset--spacing--40);padding-bottom:var(--jk--preset--spacing--40)">
			<!-- jk:post-navigation-link {"type":"previous","showTitle":true,"arrow":"arrow"} /-->
			<!-- jk:post-navigation-link {"showTitle":true,"arrow":"arrow"} /-->
		</nav>
		<!-- /jk:group -->
	</div>
	<!-- /jk:group -->

	<!-- jk:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
	<div class="jk-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--jk--preset--spacing--50);padding-bottom:var(--jk--preset--spacing--50)">
		<!-- jk:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
		<div class="jk-block-columns alignwide">
			<!-- jk:column {"width":"30%"} -->
			<div class="jk-block-column" style="flex-basis:30%">
				<!-- jk:spacer {"height":"var:preset|spacing|20"} -->
				<div style="height:var(--jk--preset--spacing--20)" aria-hidden="true" class="jk-block-spacer"></div>
				<!-- /jk:spacer -->
			</div>
			<!-- /jk:column -->
			<!-- jk:column {"width":"70%","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}}} -->
			<div class="jk-block-column" style="padding-top:0;padding-bottom:0;flex-basis:70%">
				<!-- jk:pattern {"slug":"twentytwentyfive/comments"} /-->
			</div>
			<!-- /jk:column -->
		</div>
		<!-- /jk:columns -->
	</div>
	<!-- /jk:group -->
</main>
<!-- /jk:group -->

<!-- jk:template-part {"slug":"footer"} /-->
