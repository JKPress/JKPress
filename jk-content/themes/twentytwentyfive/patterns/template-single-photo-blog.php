<?php
/**
 * Title: Photo blog single post
 * Slug: twentytwentyfive/template-single-photo-blog
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

<!-- jk:group {"tagName":"main","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<main class="jk-block-group" style="margin-top:var(--jk--preset--spacing--60)">
	<!-- jk:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
	<div class="jk-block-group alignwide" style="padding-top:var(--jk--preset--spacing--60);padding-bottom:var(--jk--preset--spacing--60)">
		<!-- jk:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
		<div class="jk-block-columns alignwide">
			<!-- jk:column {"width":"60%"} -->
			<div class="jk-block-column" style="flex-basis:60%">
				<!-- jk:post-title {"level":1} /-->
				</div>
			<!-- /jk:column -->
			<!-- jk:column {"width":"40%"} -->
			<div class="jk-block-column" style="flex-basis:40%">
				<!-- jk:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
				<div class="jk-block-group">
					<!-- jk:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="jk-block-group">
						<!-- jk:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"fontSize":"small","layout":{"type":"constrained"}} -->
						<div class="jk-block-group has-small-font-size">
							<!-- jk:paragraph --><p><?php echo esc_html_x( 'Published on', 'Prefix before the post date block.', 'twentytwentyfive' ); ?></p><!-- /jk:paragraph -->
							<!-- jk:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast"} /-->
						</div>
						<!-- /jk:group -->
						<!-- jk:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"fontSize":"small","layout":{"type":"constrained"}} -->
						<div class="jk-block-group has-small-font-size">
							<!-- jk:paragraph --><p><?php echo esc_html_x( 'Posted by', 'Prefix before the author name. The post author name is displayed in a separate block on the next line.', 'twentytwentyfive' ); ?></p><!-- /jk:paragraph -->
							<!-- jk:post-author-name {"isLink":true} /-->
						</div>
						<!-- /jk:group -->
					</div>
					<!-- /jk:group -->
					<!-- jk:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="jk-block-group">
						<!-- jk:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
						<div class="jk-block-group">
							<!-- jk:paragraph {"fontSize":"small"} -->
							<p class="has-small-font-size"><?php echo esc_html_x( 'Categories:', 'Prefix before one or more categories. The categories are displayed in a separate block on the next line.', 'twentytwentyfive' ); ?></p>
							<!-- /jk:paragraph -->
							<!-- jk:post-terms {"term":"category","style":{"typography":{"fontStyle":"normal","fontWeight":"300"}}} /-->
						</div>
						<!-- /jk:group -->
						<!-- jk:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
						<div class="jk-block-group">
							<!-- jk:paragraph {"fontSize":"small"} -->
							<p class="has-small-font-size"><?php echo esc_html_x( 'Tagged:', 'Prefix before one or more tags. The tags are displayed in a separate block on the next line.', 'twentytwentyfive' ); ?></p>
							<!-- /jk:paragraph -->
							<!-- jk:post-terms {"term":"post_tag","style":{"typography":{"fontStyle":"normal","fontWeight":"300"}}} /-->
						</div>
					<!-- /jk:group -->
					</div>
				<!-- /jk:group -->
				</div>
				<!-- /jk:group -->
			</div>
			<!-- /jk:column -->
		</div>
		<!-- /jk:columns -->
		<!-- jk:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"0"}}},"layout":{"type":"default"}} -->
		<div class="jk-block-group alignwide" style="margin-top:var(--jk--preset--spacing--50);margin-bottom:0">
			<!-- jk:group {"ariaLabel":"<?php esc_attr_e( 'Post navigation', 'twentytwentyfive' ); ?>","tagName":"nav","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
			<nav aria-label="<?php esc_attr_e( 'Post navigation', 'twentytwentyfive' ); ?>" class="jk-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--jk--preset--spacing--40);padding-bottom:var(--jk--preset--spacing--40)">
				<!-- jk:post-navigation-link {"type":"previous","label":"<?php esc_html_e( 'Previous Photo', 'twentytwentyfive' ); ?>","fontSize":"small"} /-->
				<!-- jk:post-navigation-link {"label":"<?php esc_html_e( 'Next Photo', 'twentytwentyfive' ); ?>","fontSize":"small"} /-->
			</nav>
			<!-- /jk:group -->
		</div>
		<!-- /jk:group -->
		<!-- jk:post-featured-image {"aspectRatio":"auto","align":"wide"} /-->
		</div>
	<!-- /jk:group -->

	<!-- jk:post-content {"align":"wide","layout":{"type":"constrained","justifyContent":"left"}} /-->

	<!-- jk:group {"align":"wide","layout":{"type":"constrained","justifyContent":"left"}} -->
	<div class="jk-block-group alignwide">
		<!-- jk:pattern {"slug":"twentytwentyfive/comments"} /-->
	</div>
	<!-- /jk:group -->
</main>
<!-- /jk:group -->
<!-- jk:template-part {"slug":"footer"} /-->
