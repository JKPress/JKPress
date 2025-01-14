<?php
/**
 * Title: Footer
 * Slug: twentytwentyfive/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Footer columns with logo, title, tagline and links.
 *
 * @package JKPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- jk:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="jk-block-group" style="padding-top:var(--jk--preset--spacing--60);padding-bottom:var(--jk--preset--spacing--50)">
	<!-- jk:group {"align":"wide","layout":{"type":"default"}} -->
	<div class="jk-block-group alignwide">
		<!-- jk:site-logo /-->

		<!-- jk:group {"align":"full","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
		<div class="jk-block-group alignfull">
			<!-- jk:columns -->
			<div class="jk-block-columns">
				<!-- jk:column {"width":"100%"} -->
				<div class="jk-block-column" style="flex-basis:100%"><!-- jk:site-title {"level":2} /-->

				<!-- jk:site-tagline /-->
				</div>
				<!-- /jk:column -->

				<!-- jk:column {"width":""} -->
				<div class="jk-block-column">
					<!-- jk:spacer {"height":"var:preset|spacing|40","width":"0px"} -->
					<div style="height:var(--jk--preset--spacing--40);width:0px" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer -->
				</div>
				<!-- /jk:column -->
			</div>
			<!-- /jk:columns -->

			<!-- jk:group {"style":{"spacing":{"blockGap":"var:preset|spacing|80"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"top","justifyContent":"space-between"}} -->
			<div class="jk-block-group">
				<!-- jk:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"}} -->
					<!-- jk:navigation-link {"label":"<?php esc_html_e( 'Blog', 'twentytwentyfive' ); ?>","url":"#"} /-->

					<!-- jk:navigation-link {"label":"<?php esc_html_e( 'About', 'twentytwentyfive' ); ?>","url":"#"} /-->

					<!-- jk:navigation-link {"label":"<?php esc_html_e( 'FAQs', 'twentytwentyfive' ); ?>","url":"#"} /-->

					<!-- jk:navigation-link {"label":"<?php esc_html_e( 'Authors', 'twentytwentyfive' ); ?>","url":"#"} /-->
				<!-- /jk:navigation -->

				<!-- jk:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"}} -->
					<!-- jk:navigation-link {"label":"<?php esc_html_e( 'Events', 'twentytwentyfive' ); ?>","url":"#"} /-->

					<!-- jk:navigation-link {"label":"<?php esc_html_e( 'Shop', 'twentytwentyfive' ); ?>","url":"#"} /-->

					<!-- jk:navigation-link {"label":"<?php esc_html_e( 'Patterns', 'twentytwentyfive' ); ?>","url":"#"} /-->

					<!-- jk:navigation-link {"label":"<?php esc_html_e( 'Themes', 'twentytwentyfive' ); ?>","url":"#"} /-->
				<!-- /jk:navigation -->
			</div>
				<!-- /jk:group -->
		</div>
		<!-- /jk:group -->

		<!-- jk:spacer {"height":"var:preset|spacing|70"} -->
		<div style="height:var(--jk--preset--spacing--70)" aria-hidden="true" class="jk-block-spacer"></div>
		<!-- /jk:spacer -->

		<!-- jk:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
		<div class="jk-block-group alignfull">
			<!-- jk:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size"><?php esc_html_e( 'Twenty Twenty-Five', 'twentytwentyfive' ); ?></p>
			<!-- /jk:paragraph -->
			<!-- jk:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size">
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
	</div>
	<!-- /jk:group -->
</div>
<!-- /jk:group -->
