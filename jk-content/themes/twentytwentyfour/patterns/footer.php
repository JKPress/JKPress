<?php
/**
 * Title: Footer with colophon, 4 columns
 * Slug: twentytwentyfour/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: A footer section with a colophon and 4 columns.
 */
?>

<!-- jk:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="jk-block-group" style="padding-top:var(--jk--preset--spacing--50);padding-bottom:var(--jk--preset--spacing--50)">
	<!-- jk:columns {"align":"wide"} -->
	<div class="jk-block-columns alignwide">
		<!-- jk:column {"width":"30%"} -->
		<div class="jk-block-column" style="flex-basis:30%">
			<!-- jk:group {"style":{"dimensions":{"minHeight":""},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="jk-block-group">
				<!-- jk:site-logo {"width":20,"shouldSyncIcon":true,"style":{"layout":{"selfStretch":"fit","flexSize":null}}} /-->

				<!-- jk:site-title {"level":0,"fontSize":"medium"} /-->

				<!-- jk:site-tagline {"fontSize":"small"} /-->
			</div>
			<!-- /jk:group -->
		</div>
		<!-- /jk:column -->

		<!-- jk:column {"width":"20%"} -->
		<div class="jk-block-column" style="flex-basis:20%">
		</div>
		<!-- /jk:column -->

		<!-- jk:column {"width":"50%"} -->
		<div class="jk-block-column" style="flex-basis:50%">
			<!-- jk:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
			<div class="jk-block-group">
				<!-- jk:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
				<div class="jk-block-group">
					<!-- jk:heading {"level":2,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontFamily":"body"} -->
					<h2 class="jk-block-heading has-medium-font-size has-body-font-family" style="font-style:normal;font-weight:600"><?php esc_html_e( 'About', 'twentytwentyfour' ); ?></h2>
					<!-- /jk:heading -->

					<!-- jk:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="jk-block-group">

						<!-- jk:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"blockGap":"var:preset|spacing|10"}},"fontSize":"small","ariaLabel":"<?php esc_attr_e( 'About', 'twentytwentyfour' ); ?>"} -->

						<!-- jk:navigation-link {"label":"<?php esc_html_e( 'Team', 'twentytwentyfour' ); ?>","url":"#"} /-->
						<!-- jk:navigation-link {"label":"<?php esc_html_e( 'History', 'twentytwentyfour' ); ?>","url":"#"} /-->
						<!-- jk:navigation-link {"label":"<?php esc_html_e( 'Careers', 'twentytwentyfour' ); ?>","url":"#"} /-->

						<!-- /jk:navigation -->

					</div>
					<!-- /jk:group -->
				</div>

				<!-- /jk:group -->

				<!-- jk:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
				<div class="jk-block-group">
					<!-- jk:heading {"level":2,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontFamily":"body"} -->
					<h2 class="jk-block-heading has-medium-font-size has-body-font-family" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Privacy', 'twentytwentyfour' ); ?></h2>
					<!-- /jk:heading -->

					<!-- jk:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="jk-block-group">

						<!-- jk:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"blockGap":"var:preset|spacing|10"}},"fontSize":"small","ariaLabel":"<?php esc_attr_e( 'Privacy', 'twentytwentyfour' ); ?>"} -->

						<!-- jk:navigation-link {"label":"<?php esc_html_e( 'Privacy Policy', 'twentytwentyfour' ); ?>","url":"#"} /-->
						<!-- jk:navigation-link {"label":"<?php esc_html_e( 'Terms and Conditions', 'twentytwentyfour' ); ?>","url":"#"} /-->
						<!-- jk:navigation-link {"label":"<?php esc_html_e( 'Contact Us', 'twentytwentyfour' ); ?>","url":"#"} /-->

						<!-- /jk:navigation -->

					</div>
					<!-- /jk:group -->
				</div>
				<!-- /jk:group -->

				<!-- jk:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
				<div class="jk-block-group">
					<!-- jk:heading {"level":2,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontFamily":"body"} -->
					<h2 class="jk-block-heading has-medium-font-size has-body-font-family" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Social', 'twentytwentyfour' ); ?></h2>
					<!-- /jk:heading -->

					<!-- jk:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="jk-block-group">

						<!-- jk:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"blockGap":"var:preset|spacing|10"}},"fontSize":"small","ariaLabel":"<?php esc_attr_e( 'Social Media', 'twentytwentyfour' ); ?>"} -->

						<!-- jk:navigation-link {"label":"<?php esc_html_e( 'Facebook', 'twentytwentyfour' ); ?>","url":"#"} /-->
						<!-- jk:navigation-link {"label":"<?php esc_html_e( 'Instagram', 'twentytwentyfour' ); ?>","url":"#"} /-->
						<!-- jk:navigation-link {"label":"<?php esc_html_e( 'Twitter/X', 'twentytwentyfour' ); ?>","url":"#"} /-->

						<!-- /jk:navigation -->

					</div>
					<!-- /jk:group -->
				</div>
				<!-- /jk:group -->
			</div>
			<!-- /jk:group -->
		</div>
		<!-- /jk:column -->
	</div>
	<!-- /jk:columns -->

	<!-- jk:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"0"}}}} -->
	<div class="jk-block-group alignwide" style="padding-top:var(--jk--preset--spacing--50);padding-bottom:0">
		<!-- jk:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast-2","fontSize":"small"} -->
		<p class="has-contrast-2-color has-text-color has-link-color has-small-font-size">
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
</div>
<!-- /jk:group -->
