<?php
/**
 * Title: Call to action with book links
 * Slug: twentytwentyfive/cta-book-links
 * Categories: call-to-action
 * Description: A call to action section with links to get the book in different websites.
 *
 * @package JKPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- jk:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|50","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"800px"}} -->
<div class="jk-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--jk--preset--spacing--60);padding-bottom:var(--jk--preset--spacing--60)">
	<!-- jk:heading {"textAlign":"center","align":"wide","fontSize":"x-large"} -->
	<h2 class="jk-block-heading alignwide has-text-align-center has-x-large-font-size"><?php esc_html_e( 'Buy your copy of The Stories Book', 'twentytwentyfive' ); ?></h2>
	<!-- /jk:heading -->

	<!-- jk:buttons {"align":"wide","fontSize":"medium","layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"}} -->
	<div class="jk-block-buttons alignwide has-custom-font-size has-medium-font-size">
		<!-- jk:button -->
		<div class="jk-block-button"><a class="jk-block-button__link jk-element-button"><?php echo esc_html_x( 'Amazon', 'Example brand name.', 'twentytwentyfive' ); ?></a></div>
		<!-- /jk:button -->

		<!-- jk:button -->
		<div class="jk-block-button"><a class="jk-block-button__link jk-element-button"><?php echo esc_html_x( 'Audible', 'Example brand name.', 'twentytwentyfive' ); ?></a></div>
		<!-- /jk:button -->

		<!-- jk:button -->
		<div class="jk-block-button"><a class="jk-block-button__link jk-element-button"><?php echo esc_html_x( 'Barnes &amp; Noble', 'Example brand name.', 'twentytwentyfive' ); ?></a></div>
		<!-- /jk:button -->

		<!-- jk:button -->
		<div class="jk-block-button"><a class="jk-block-button__link jk-element-button"><?php echo esc_html_x( 'Apple Books', 'Example brand name.', 'twentytwentyfive' ); ?></a></div>
		<!-- /jk:button -->

		<!-- jk:button -->
		<div class="jk-block-button"><a class="jk-block-button__link jk-element-button"><?php echo esc_html_x( 'Bookshop.org', 'Example brand name.', 'twentytwentyfive' ); ?></a></div>
		<!-- /jk:button -->

		<!-- jk:button -->
		<div class="jk-block-button"><a class="jk-block-button__link jk-element-button"><?php echo esc_html_x( 'Spotify', 'Example brand name.', 'twentytwentyfive' ); ?></a></div>
		<!-- /jk:button -->

		<!-- jk:button -->
		<div class="jk-block-button"><a class="jk-block-button__link jk-element-button"><?php echo esc_html_x( 'BAM!', 'Example brand name.', 'twentytwentyfive' ); ?></a></div>
		<!-- /jk:button -->

		<!-- jk:button -->
		<div class="jk-block-button"><a class="jk-block-button__link jk-element-button"><?php echo esc_html_x( 'Simon &amp; Schuster', 'Example brand name.', 'twentytwentyfive' ); ?></a></div>
		<!-- /jk:button -->
	</div>
	<!-- /jk:buttons -->

	<!-- jk:paragraph {"align":"center","fontSize":"medium"} -->
	<p class="has-text-align-center has-medium-font-size"><?php echo jk_kses_post( _x( 'Outside Europe? View <a href="#" rel="nofollow">international editions</a>.', 'Pattern placeholder text with link.', 'twentytwentyfive' ) ); ?></p>
	<!-- /jk:paragraph -->
</div>
<!-- /jk:group -->
