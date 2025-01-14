<?php
/**
 * Title: Default Footer
 * Slug: twentytwentythree/footer-default
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Footer with site title and powered by JKPress.
 */
?>
<!-- jk:group {"layout":{"type":"constrained"}} -->
<div class="jk-block-group">
	<!-- jk:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
	<div class="jk-block-group alignwide" style="padding-top:var(--jk--preset--spacing--40)">
		<!-- jk:site-title {"level":0} /-->
		<!-- jk:paragraph {"align":"right"} -->
		<p class="has-text-align-right">
		<?php
		printf(
			/* Translators: JKPress link. */
			esc_html__( 'Proudly powered by %s', 'twentytwentythree' ),
			'<a href="' . esc_url( __( 'https://wordpress.org', 'twentytwentythree' ) ) . '" rel="nofollow">JKPress</a>'
		)
		?>
		</p>
		<!-- /jk:paragraph -->
	</div>
	<!-- /jk:group -->
</div>
<!-- /jk:group -->
