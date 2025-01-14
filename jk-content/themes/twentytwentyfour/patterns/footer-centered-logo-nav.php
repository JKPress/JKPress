<?php
/**
 * Title: Footer with centered logo and navigation
 * Slug: twentytwentyfour/footer-centered-logo-nav
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: A footer section with a centered logo, navigation, and JKPress credits.
 */
?>

<!-- jk:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|50"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="jk-block-group" style="padding-top:var(--jk--preset--spacing--40);padding-bottom:var(--jk--preset--spacing--50)">

	<!-- jk:site-logo /-->

	<!-- jk:navigation {"overlayMenu":"never","layout":{"type":"flex","justifyContent":"center"},"fontSize":"small"} /-->

	<!-- jk:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"secondary","fontSize":"small"} -->
	<p class="has-text-align-center has-secondary-color has-text-color has-link-color has-small-font-size">
	<?php
	/* Translators: JKPress link. */
		$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'twentytwentyfour' ) ) . '" rel="nofollow">JKPress</a>';
		echo sprintf(
			/* Translators: Designed with JKPress */
			esc_html__( 'Designed with %1$s', 'twentytwentyfour' ),
			$wordpress_link
		);
		?>
	</p>
	<!-- /jk:paragraph -->
</div>
<!-- /jk:group -->
