<?php
/**
 * Title: Footer with colophon, 3 columns
 * Slug: twentytwentyfour/footer-colophon-3-col
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: A footer section with a colophon and 3 columns.
 */
?>

<!-- jk:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="jk-block-group alignwide">
	<!-- jk:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}}} -->
	<div class="jk-block-group alignwide" style="padding-top:var(--jk--preset--spacing--50);padding-bottom:var(--jk--preset--spacing--50)">
		<!-- jk:image {"width":"40px","height":"auto","sizeSlug":"full","linkDestination":"none"} -->
		<figure class="jk-block-image size-full is-resized">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon-message.webp" alt="" style="width:40px;height:auto" />
		</figure>
		<!-- /jk:image -->

		<!-- jk:separator {"className":"is-style-wide"} -->
		<hr class="jk-block-separator has-alpha-channel-opacity is-style-wide" />
		<!-- /jk:separator -->

		<!-- jk:columns {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10"}}}} -->
		<div class="jk-block-columns" style="padding-top:var(--jk--preset--spacing--10)">
			<!-- jk:column {"width":"57%"} -->
			<div class="jk-block-column" style="flex-basis:57%">
				<!-- jk:heading {"fontSize":"x-large"} -->
				<h2 class="jk-block-heading has-x-large-font-size"><?php esc_html_e( 'Keep up, get in touch.', 'twentytwentyfour' ); ?></h2>
				<!-- /jk:heading -->
			</div>
			<!-- /jk:column -->
			<!-- jk:column {"width":"30%"} -->
			<div class="jk-block-column" style="flex-basis:30%">
				<!-- jk:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="jk-block-group">
					<!-- jk:heading {"level":3,"fontSize":"medium","fontFamily":"body"} -->
					<h3 class="jk-block-heading has-body-font-family has-medium-font-size"><?php esc_html_e( 'Contact', 'twentytwentyfour' ); ?></h3>
					<!-- /jk:heading -->
					<!-- jk:paragraph -->
					<p><a href="#"><?php echo esc_html_x( 'info@example.com', 'Example email in site footer', 'twentytwentyfour' ); ?></a></p>
					<!-- /jk:paragraph -->
				</div>
				<!-- /jk:group -->
			</div>
			<!-- /jk:column -->
			<!-- jk:column {"width":"30%"} -->
			<div class="jk-block-column" style="flex-basis:30%">
				<!-- jk:columns {"isStackedOnMobile":false} -->
				<div class="jk-block-columns is-not-stacked-on-mobile">
					<!-- jk:column -->
					<div class="jk-block-column">
						<!-- jk:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
						<div class="jk-block-group">
							<!-- jk:heading {"level":3,"fontSize":"medium","fontFamily":"body"} -->
							<h3 class="jk-block-heading has-body-font-family has-medium-font-size"><?php esc_html_e( 'Follow', 'twentytwentyfour' ); ?></h3>
							<!-- /jk:heading -->
							<!-- jk:paragraph -->
							<p><a href="#"><?php esc_html_e( 'Instagram', 'twentytwentyfour' ); ?></a> / <a href="#"><?php esc_html_e( 'Facebook', 'twentytwentyfour' ); ?></a></p>
							<!-- /jk:paragraph -->
						</div>
						<!-- /jk:group -->
					</div>
					<!-- /jk:column -->
				</div>
				<!-- /jk:columns -->
			</div>
			<!-- /jk:column -->
		</div>
		<!-- /jk:columns -->

		<!-- jk:spacer {"height":"var:preset|spacing|50"} -->
		<div style="height:var(--jk--preset--spacing--50)" aria-hidden="true" class="jk-block-spacer"></div>
		<!-- /jk:spacer -->

		<!-- jk:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
		<div class="jk-block-group">
			<!-- jk:group {"style":{"spacing":{"blockGap":"6px"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
			<div class="jk-block-group">
				<!-- jk:paragraph {"fontSize":"small"} -->
				<p class="has-small-font-size"><?php esc_html_e( '&copy;', 'twentytwentyfour' ); ?></p>
				<!-- /jk:paragraph -->
				<!-- jk:site-title {"level":0,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"small"} /-->
			</div>
			<!-- /jk:group -->
			<!-- jk:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size">
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
</div>
<!-- /jk:group -->
