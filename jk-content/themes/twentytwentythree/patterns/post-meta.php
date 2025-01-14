<?php
/**
 * Title: Post Meta
 * Slug: twentytwentythree/post-meta
 * Categories: query
 * Keywords: post meta
 * Block Types: core/template-part/post-meta
 * Description: Post meta information with separator on the top.
 */
?>
<!-- jk:spacer {"height":"0"} -->
<div style="height:0" aria-hidden="true" class="jk-block-spacer"></div>
<!-- /jk:spacer -->

<!-- jk:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="jk-block-group" style="margin-top:var(--jk--preset--spacing--70)">
	<!-- jk:separator {"opacity":"css","align":"wide","className":"is-style-wide"} -->
	<hr class="jk-block-separator alignwide has-css-opacity is-style-wide"/>
	<!-- /jk:separator -->

	<!-- jk:columns {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|30"}},"fontSize":"small"} -->
	<div class="jk-block-columns alignwide has-small-font-size" style="margin-top:var(--jk--preset--spacing--30)">
		<!-- jk:column {"style":{"spacing":{"blockGap":"0px"}}} -->
		<div class="jk-block-column">
			<!-- jk:group {"style":{"spacing":{"blockGap":"0.5ch"}},"layout":{"type":"flex"}} -->
			<div class="jk-block-group">
				<!-- jk:paragraph -->
				<p>
					<?php echo esc_html_x( 'Posted', 'Verb to explain the publication status of a post', 'twentytwentythree' ); ?>
				</p>
				<!-- /jk:paragraph -->

				<!-- jk:post-date /-->

				<!-- jk:paragraph -->
				<p>
					<?php echo esc_html_x( 'in', 'Preposition to show the relationship between the post and its categories', 'twentytwentythree' ); ?>
				</p>
				<!-- /jk:paragraph -->

				<!-- jk:post-terms {"term":"category"} /-->
			</div>
			<!-- /jk:group -->

			<!-- jk:group {"style":{"spacing":{"blockGap":"0.5ch"}},"layout":{"type":"flex"}} -->
			<div class="jk-block-group">
				<!-- jk:paragraph -->
				<p>
					<?php echo esc_html_x( 'by', 'Preposition to show the relationship between the post and its author', 'twentytwentythree' ); ?>
				</p>
				<!-- /jk:paragraph -->

				<!-- jk:post-author {"showAvatar":false} /-->
			</div>
			<!-- /jk:group -->
		</div>
		<!-- /jk:column -->

		<!-- jk:column {"style":{"spacing":{"blockGap":"0px"}}} -->
		<div class="jk-block-column">
			<!-- jk:group {"style":{"spacing":{"blockGap":"0.5ch"}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="jk-block-group">
				<!-- jk:paragraph -->
				<p>
					<?php echo esc_html_x( 'Tags:', 'Label for a list of post tags', 'twentytwentythree' ); ?>
				</p>
				<!-- /jk:paragraph -->

				<!-- jk:post-terms {"term":"post_tag"} /-->
			</div>
			<!-- /jk:group -->
		</div>
		<!-- /jk:column -->
	</div>
	<!-- /jk:columns -->
</div>
<!-- /jk:group -->
