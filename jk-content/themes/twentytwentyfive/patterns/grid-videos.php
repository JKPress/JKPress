<?php
/**
 * Title: Grid with videos
 * Slug: twentytwentyfive/grid-videos
 * Categories: about
 * Description: A grid with videos.
 *
 * @package JKPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- jk:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|50","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="jk-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--jk--preset--spacing--50);padding-bottom:var(--jk--preset--spacing--50)">
	<!-- jk:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="jk-block-group alignwide">
		<!-- jk:heading {"textAlign":"left","align":"wide","className":"is-style-text-subtitle","style":{"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"x-large"} -->
		<h2 class="jk-block-heading alignwide has-text-align-left is-style-text-subtitle has-x-large-font-size"><?php esc_html_e( 'Explore the episodes', 'twentytwentyfive' ); ?></h2>
		<!-- /jk:heading -->

		<!-- jk:paragraph {"className":"is-style-text-annotation"} -->
		<p class="is-style-text-annotation"><?php esc_html_e( 'Podcast', 'twentytwentyfive' ); ?></p>
		<!-- /jk:paragraph -->
	</div>
	<!-- /jk:group -->

	<!-- jk:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","minimumColumnWidth":"19rem"}} -->
	<div class="jk-block-group alignwide">
		<!-- jk:video -->
		<figure class="jk-block-video"></figure>
		<!-- /jk:video -->

		<!-- jk:video -->
		<figure class="jk-block-video"></figure>
		<!-- /jk:video -->

		<!-- jk:video -->
		<figure class="jk-block-video"></figure>
		<!-- /jk:video -->

		<!-- jk:video -->
		<figure class="jk-block-video"></figure>
		<!-- /jk:video -->

		<!-- jk:video -->
		<figure class="jk-block-video"></figure>
		<!-- /jk:video -->

		<!-- jk:video -->
		<figure class="jk-block-video"></figure>
		<!-- /jk:video -->
	</div>
	<!-- /jk:group -->
</div>
<!-- /jk:group -->
