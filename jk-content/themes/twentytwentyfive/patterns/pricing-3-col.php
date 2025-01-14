<?php
/**
 * Title: Pricing, 3 columns
 * Slug: twentytwentyfive/pricing-3-col
 * Categories: call-to-action, banner, services
 * Description: A three-column boxed pricing table designed to showcase services, descriptions, and pricing options.
 *
 * @package JKPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- jk:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="jk-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--jk--preset--spacing--60);padding-bottom:var(--jk--preset--spacing--60)">
	<!-- jk:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="jk-block-group alignwide">
		<!-- jk:heading {"fontSize":"x-large"} -->
		<h2 class="jk-block-heading has-x-large-font-size"><?php esc_html_e( 'Choose your membership', 'twentytwentyfive' ); ?></h2>
		<!-- /jk:heading -->

		<!-- jk:paragraph {"className":"is-style-text-annotation"} -->
		<p class="is-style-text-annotation"><?php esc_html_e( 'Pricing', 'twentytwentyfive' ); ?></p>
		<!-- /jk:paragraph -->
	</div>
	<!-- /jk:group -->

	<!-- jk:columns {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|70","bottom":"0"},"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|50"}}}} -->
	<div class="jk-block-columns alignwide" style="margin-top:var(--jk--preset--spacing--70);margin-bottom:0">
		<!-- jk:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"10px","width":"1px"}},"borderColor":"accent-6","layout":{"type":"constrained","justifyContent":"center"}} -->
		<div class="jk-block-column has-border-color has-accent-6-border-color" style="border-width:1px;border-radius:10px;padding-top:var(--jk--preset--spacing--40);padding-right:var(--jk--preset--spacing--40);padding-bottom:var(--jk--preset--spacing--40);padding-left:var(--jk--preset--spacing--40)">
			<!-- jk:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"top":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
			<div class="jk-block-columns is-not-stacked-on-mobile" style="margin-top:0;margin-bottom:0">
				<!-- jk:column {"width":"70%"} -->
				<div class="jk-block-column" style="flex-basis:70%">
					<!-- jk:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"fontSize":"large"} -->
					<h3 class="jk-block-heading has-large-font-size" style="margin-bottom:var(--jk--preset--spacing--20)"><?php esc_html_e( 'Free', 'twentytwentyfive' ); ?></h3>
					<!-- /jk:heading -->

					<!-- jk:paragraph {"fontSize":"small"} -->
					<p class="has-small-font-size"><?php esc_html_e( 'Get access to our free articles and weekly newsletter.', 'twentytwentyfive' ); ?></p>
					<!-- /jk:paragraph -->
				</div>
				<!-- /jk:column -->

				<!-- jk:column {"style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
				<div class="jk-block-column" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">
					<!-- jk:heading {"textAlign":"right","level":3,"style":{"typography":{"textDecoration":"line-through"}}} -->
					<h3 class="jk-block-heading has-text-align-right" style="text-decoration:line-through"><?php esc_html_e( '0€', 'twentytwentyfive' ); ?></h3>
					<!-- /jk:heading -->
				</div>
				<!-- /jk:column -->
			</div>
			<!-- /jk:columns -->

			<!-- jk:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="jk-block-buttons" style="margin-top:var(--jk--preset--spacing--30)">
				<!-- jk:button {"width":100,"style":{"typography":{"lineHeight":"1.2","letterSpacing":"0.08px"}}} -->
				<div class="jk-block-button has-custom-width jk-block-button__width-100" style="letter-spacing:0.08px;line-height:1.2"><a class="jk-block-button__link jk-element-button"><?php echo esc_html_x( 'Join', 'Button text, refers to joining a community. Verb.', 'twentytwentyfive' ); ?></a></div>
				<!-- /jk:button -->
			</div>
			<!-- /jk:buttons -->
		</div>
		<!-- /jk:column -->

		<!-- jk:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"10px","width":"1px"}},"borderColor":"accent-6","layout":{"type":"constrained","justifyContent":"center"}} -->
		<div class="jk-block-column has-border-color has-accent-6-border-color" style="border-width:1px;border-radius:10px;padding-top:var(--jk--preset--spacing--40);padding-right:var(--jk--preset--spacing--40);padding-bottom:var(--jk--preset--spacing--40);padding-left:var(--jk--preset--spacing--40)">
			<!-- jk:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"top":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
			<div class="jk-block-columns is-not-stacked-on-mobile" style="margin-top:0;margin-bottom:0">
				<!-- jk:column {"width":"70%"} -->
				<div class="jk-block-column" style="flex-basis:70%">
					<!-- jk:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"fontSize":"large"} -->
					<h3 class="jk-block-heading has-large-font-size" style="margin-bottom:var(--jk--preset--spacing--20)"><?php echo esc_html_x( 'Single', 'Name of membership package.', 'twentytwentyfive' ); ?></h3>
					<!-- /jk:heading -->

					<!-- jk:paragraph {"fontSize":"small"} -->
					<p class="has-small-font-size"><?php esc_html_e( 'Get access to our paid newsletter and a limited pass for one event.', 'twentytwentyfive' ); ?></p>
					<!-- /jk:paragraph -->
				</div>
				<!-- /jk:column -->

				<!-- jk:column {"style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
				<div class="jk-block-column" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">
					<!-- jk:heading {"textAlign":"right","level":3} -->
					<h3 class="jk-block-heading has-text-align-right"><?php esc_html_e( '20€', 'twentytwentyfive' ); ?></h3>
					<!-- /jk:heading -->

					<!-- jk:paragraph {"align":"right","style":{"spacing":{"margin":{"top":"0"}}},"fontSize":"small"} -->
					<p class="has-text-align-right has-small-font-size" style="margin-top:0"><?php esc_html_e( 'Month', 'twentytwentyfive' ); ?></p>
					<!-- /jk:paragraph -->
				</div>
				<!-- /jk:column -->
			</div>
			<!-- /jk:columns -->

			<!-- jk:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="jk-block-buttons" style="margin-top:var(--jk--preset--spacing--30)">
				<!-- jk:button {"width":100,"style":{"typography":{"lineHeight":"1.2","letterSpacing":"0.08px"}}} -->
				<div class="jk-block-button has-custom-width jk-block-button__width-100" style="letter-spacing:0.08px;line-height:1.2"><a class="jk-block-button__link jk-element-button"><?php echo esc_html_x( 'Join', 'Button text, refers to joining a community. Verb.', 'twentytwentyfive' ); ?></a></div>
				<!-- /jk:button -->
			</div>
			<!-- /jk:buttons -->
		</div>
		<!-- /jk:column -->

		<!-- jk:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"10px","width":"1px"}},"borderColor":"accent-6","layout":{"type":"constrained","justifyContent":"center"}} -->
		<div class="jk-block-column has-border-color has-accent-6-border-color" style="border-width:1px;border-radius:10px;padding-top:var(--jk--preset--spacing--40);padding-right:var(--jk--preset--spacing--40);padding-bottom:var(--jk--preset--spacing--40);padding-left:var(--jk--preset--spacing--40)">
			<!-- jk:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"top":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
			<div class="jk-block-columns is-not-stacked-on-mobile" style="margin-top:0;margin-bottom:0">
				<!-- jk:column {"width":"70%"} -->
				<div class="jk-block-column" style="flex-basis:70%">
					<!-- jk:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"fontSize":"large"} -->
					<h3 class="jk-block-heading has-large-font-size" style="margin-bottom:var(--jk--preset--spacing--20)"><?php echo esc_html_x( 'Expert', 'Name of membership package.', 'twentytwentyfive' ); ?></h3>
					<!-- /jk:heading -->

					<!-- jk:paragraph {"fontSize":"small"} -->
					<p class="has-small-font-size"><?php esc_html_e( 'Get access to our paid newsletter and an unlimited pass.', 'twentytwentyfive' ); ?></p>
					<!-- /jk:paragraph -->
				</div>
				<!-- /jk:column -->

				<!-- jk:column {"style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
				<div class="jk-block-column" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">
					<!-- jk:heading {"textAlign":"right","level":3} -->
					<h3 class="jk-block-heading has-text-align-right"><?php esc_html_e( '40€', 'twentytwentyfive' ); ?></h3>
					<!-- /jk:heading -->

					<!-- jk:paragraph {"align":"right","style":{"spacing":{"margin":{"top":"0"}}},"fontSize":"small"} -->
					<p class="has-text-align-right has-small-font-size" style="margin-top:0"><?php esc_html_e( 'Month', 'twentytwentyfive' ); ?></p>
					<!-- /jk:paragraph -->
				</div>
				<!-- /jk:column -->
			</div>
			<!-- /jk:columns -->

			<!-- jk:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="jk-block-buttons" style="margin-top:var(--jk--preset--spacing--30)">
				<!-- jk:button {"width":100,"style":{"typography":{"lineHeight":"1.2","letterSpacing":"0.08px"}}} -->
				<div class="jk-block-button has-custom-width jk-block-button__width-100" style="letter-spacing:0.08px;line-height:1.2"><a class="jk-block-button__link jk-element-button"><?php echo esc_html_x( 'Join', 'Button text, refers to joining a community. Verb.', 'twentytwentyfive' ); ?></a></div>
				<!-- /jk:button -->
			</div>
			<!-- /jk:buttons -->
		</div>
		<!-- /jk:column -->
	</div>
	<!-- /jk:columns -->
</div>
<!-- /jk:group -->
