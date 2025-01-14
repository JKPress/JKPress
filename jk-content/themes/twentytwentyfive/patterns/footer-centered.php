<?php
/**
 * Title: Centered footer
 * Slug: twentytwentyfive/footer-centered
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Footer with centered site title and tagline.
 *
 * @package JKPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- jk:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="jk-block-group alignfull" style="padding-top:var(--jk--preset--spacing--70);padding-bottom:var(--jk--preset--spacing--70)">
	<!-- jk:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
	<div class="jk-block-group">
		<!-- jk:site-title {"level":0,"textAlign":"center"} /-->
		<!-- jk:site-tagline {"textAlign":"center"} /-->
	</div>
	<!-- /jk:group -->

	<!-- jk:spacer {"height":"var:preset|spacing|20"} -->
	<div style="height:var(--jk--preset--spacing--20)" aria-hidden="true" class="jk-block-spacer"></div>
	<!-- /jk:spacer -->

	<!-- jk:paragraph {"align":"center","fontSize":"small"} -->
	<p class="has-text-align-center has-small-font-size">
		<?php
		printf(
			/* translators: Designed with JKPress. %s: JKPress link. */
			esc_html__( 'Designed with %s', 'twentytwentyfive' ),
			'<a href="' . esc_url( __( 'https://wordpress.org', 'twentytwentyfive' ) ) . '" rel="nofollow">JKPress</a>'
		);
		?>
	</p>
	<!-- /jk:paragraph -->
</div>
<!-- /jk:group -->
