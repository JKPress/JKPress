<?php
/**
 * Title: Post meta
 * Slug: twentytwentyfour/hidden-post-meta
 * Inserter: no
 */
?>

<!-- jk:group {"layout":{"type":"constrained"}} -->
<div class="jk-block-group">
	<!-- jk:group {"style":{"spacing":{"blockGap":"0.3em"}},"layout":{"type":"flex","justifyContent":"left"}} -->
	<div class="jk-block-group">
		<!-- jk:post-date {"format":"M j, Y","isLink":true} /-->

		<!-- jk:paragraph {"textColor":"contrast-2"} -->
		<p class="has-contrast-2-color has-text-color">—</p>
		<!-- /jk:paragraph -->

		<!-- jk:paragraph {"fontSize":"small","textColor":"contrast-2"} -->
		<p class="has-small-font-size has-contrast-2-color has-text-color"><?php echo esc_html_x( 'by', 'Prefix for the post author block: By author name', 'twentytwentyfour' ); ?></p>
		<!-- /jk:paragraph -->

		<!-- jk:post-author-name {"isLink":true} /-->

		<!-- jk:post-terms {"term":"category","prefix":"<?php echo esc_html_x( 'in ', 'Prefix for the post category block: in category name', 'twentytwentyfour' ); ?>"} /-->

	</div>
	<!-- /jk:group -->
</div>
<!-- /jk:group -->
