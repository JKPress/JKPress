<?php
/**
 * Title: Centered footer with social links
 * Slug: twentytwentyfive/footer-social
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Footer with centered site title and social links.
 *
 * @package JKPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- jk:group {"align":"full","className":"is-style-section-5","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="jk-block-group alignfull is-style-section-5" style="padding-top:var(--jk--preset--spacing--60);padding-bottom:var(--jk--preset--spacing--60)">
	<!-- jk:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
	<div class="jk-block-group">
		<!-- jk:site-title {"level":2,"textAlign":"center","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"400"}},"fontSize":"x-large"} /-->
		<!-- jk:navigation {"overlayMenu":"never","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"400"},"spacing":{"blockGap":"var:preset|spacing|20"}},"fontSize":"x-large","layout":{"type":"flex","justifyContent":"center"},"ariaLabel":"<?php esc_attr_e( 'Social media', 'twentytwentyfive' ); ?>"} -->
		<!-- jk:navigation-link {"label":"<?php esc_html_e( 'Facebook', 'twentytwentyfive' ); ?>","url":"#"} /-->
		<!-- jk:navigation-link {"label":"<?php esc_html_e( 'Instagram', 'twentytwentyfive' ); ?>","url":"#"} /-->
		<!-- jk:navigation-link {"label":"<?php echo esc_html_x( 'X', 'Refers to the social media platform formerly known as Twitter.', 'twentytwentyfive' ); ?>","url":"#"} /-->
		<!-- /jk:navigation -->
	</div>
	<!-- /jk:group -->
	<!-- jk:spacer {"height":"var:preset|spacing|30"} -->
	<div style="height:var(--jk--preset--spacing--30)" aria-hidden="true" class="jk-block-spacer"></div>
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
