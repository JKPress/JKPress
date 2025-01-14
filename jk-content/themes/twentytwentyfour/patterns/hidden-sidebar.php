<?php
/**
 * Title: Sidebar
 * Slug: twentytwentyfour/hidden-sidebar
 * Inserter: no
 */
?>
<!-- jk:group {"style":{"spacing":{"blockGap":"36px","padding":{"right":"0","left":"0"}}},"layout":{"type":"default"}} -->
<div class="jk-block-group" style="padding-right:0;padding-left:0">
	<!-- jk:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
	<div class="jk-block-group" style="margin-top:0;margin-bottom:0">
		<!-- jk:avatar {"size":80,"style":{"border":{"radius":"16px"}}} /-->

		<!-- jk:group {"style":{"spacing":{"blockGap":"16px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="jk-block-group">
			<!-- jk:heading {"style":{"typography":{"fontSize":"1.6rem"}}} -->
			<h2 class="jk-block-heading" style="font-size:1.6rem"><?php esc_html_e( 'About the author', 'twentytwentyfour' ); ?></h2>
			<!-- /jk:heading -->

			<!-- jk:post-author-biography {"fontSize":"small"} /-->
		</div>
		<!-- /jk:group -->
	</div>
	<!-- /jk:group -->

	<!-- jk:separator {"backgroundColor":"contrast","className":"is-style-wide"} -->
	<hr class="jk-block-separator has-text-color has-contrast-color has-alpha-channel-opacity has-contrast-background-color has-background is-style-wide"/>
	<!-- /jk:separator -->

	<!-- jk:group {"style":{"spacing":{"blockGap":"16px"}},"layout":{"type":"constrained"}} -->
	<div class="jk-block-group">
		<!-- jk:heading {"style":{"typography":{"fontSize":"1.6rem"}}} -->
		<h2 class="jk-block-heading" style="font-size:1.6rem"><?php esc_html_e( 'Popular Categories', 'twentytwentyfour' ); ?></h2>
		<!-- /jk:heading -->

		<!-- jk:categories {"showHierarchy":true,"showPostCounts":true,"fontSize":"small"} /-->
	</div>
	<!-- /jk:group -->

	<!-- jk:separator {"backgroundColor":"contrast","className":"is-style-wide"} -->
	<hr class="jk-block-separator has-text-color has-contrast-color has-alpha-channel-opacity has-contrast-background-color has-background is-style-wide"/>
	<!-- /jk:separator -->

	<!-- jk:group {"style":{"spacing":{"blockGap":"26px"}},"layout":{"type":"constrained"}} -->
	<div class="jk-block-group">
		<!-- jk:group {"style":{"spacing":{"blockGap":"16px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="jk-block-group">
			<!-- jk:heading {"style":{"typography":{"fontSize":"1.6rem"}}} -->
			<h2 class="jk-block-heading" style="font-size:1.6rem"><?php esc_html_e( 'Useful Links', 'twentytwentyfour' ); ?></h2>
			<!-- /jk:heading -->

			<!-- jk:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size"><?php esc_html_e( 'Links I found useful and wanted to share.', 'twentytwentyfour' ); ?></p>
			<!-- /jk:paragraph -->
		</div>
		<!-- /jk:group -->

		<!-- jk:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"blockGap":"var:preset|spacing|10"}},"fontSize":"small"} -->
		<!-- jk:navigation-link {"label":"<?php esc_html_e( 'Latest inflation report', 'twentytwentyfour' ); ?>","url":"#","className":"is-style-arrow-link","style":{"typography":{"textDecoration":"underline"}}} /-->
		<!-- jk:navigation-link {"label":"<?php esc_html_e( 'Financial apps for families', 'twentytwentyfour' ); ?>","url":"#","className":"is-style-arrow-link","style":{"typography":{"textDecoration":"underline"}}} /-->
		<!-- /jk:navigation -->
	</div>
	<!-- /jk:group -->

	<!-- jk:separator {"backgroundColor":"contrast","className":"is-style-wide"} -->
	<hr class="jk-block-separator has-text-color has-contrast-color has-alpha-channel-opacity has-contrast-background-color has-background is-style-wide"/>
	<!-- /jk:separator -->

	<!-- jk:group {"style":{"spacing":{"blockGap":"16px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
	<div class="jk-block-group">
		<!-- jk:heading {"style":{"typography":{"fontSize":"1.6rem"}}} -->
		<h2 class="jk-block-heading" style="font-size:1.6rem"><?php esc_html_e( 'Search the website', 'twentytwentyfour' ); ?></h2>
		<!-- /jk:heading -->

		<!-- jk:search {"label":"<?php echo esc_attr_x( 'Search', 'search form label', 'twentytwentyfour' ); ?>","showLabel":false,"placeholder":"<?php echo esc_attr_x( 'Search...', 'search form placeholder', 'twentytwentyfour' ); ?>","width":100,"widthUnit":"%","buttonText":"<?php echo esc_attr_x( 'Search', 'search form label', 'twentytwentyfour' ); ?>"} /-->
	</div>
	<!-- /jk:group -->

	<!-- jk:spacer {"height":"var:preset|spacing|10"} -->
	<div style="height:var(--jk--preset--spacing--10)" aria-hidden="true" class="jk-block-spacer">
	</div>
	<!-- /jk:spacer -->
</div>
<!-- /jk:group -->
