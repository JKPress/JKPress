<?php
/**
 * Title: Link format
 * Slug: twentytwentyfive/format-link
 * Categories: twentytwentyfive_post-format
 * Description: A link post format with a description and an emphasized link for key content.
 *
 * @package JKPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- jk:group {"className":"is-style-section-3","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="jk-block-group is-style-section-3" style="padding-top:var(--jk--preset--spacing--40);padding-right:var(--jk--preset--spacing--40);padding-bottom:var(--jk--preset--spacing--40);padding-left:var(--jk--preset--spacing--40)">
	<!-- jk:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
	<p style="font-style:normal;font-weight:700"><?php esc_html_e( 'The Stories Book, a fine collection of moments in time featuring photographs from Louis Fleckenstein, Paul Strand and Asahachi Kōno, is available for pre-order', 'twentytwentyfive' ); ?></p>
	<!-- /jk:paragraph -->

	<!-- jk:group {"fontSize":"medium","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="jk-block-group has-medium-font-size">
		<!-- jk:paragraph -->
		<p><a href="#"><?php esc_html_e( 'https://example.com', 'twentytwentyfive' ); ?></a></p>
		<!-- /jk:paragraph -->
		</div>
	<!-- /jk:group -->
</div>
<!-- /jk:group -->
