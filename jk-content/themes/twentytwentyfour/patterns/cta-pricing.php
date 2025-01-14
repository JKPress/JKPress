<?php
/**
 * Title: Pricing
 * Slug: twentytwentyfour/cta-pricing
 * Categories: call-to-action, services
 * Viewport width: 1400
 * Description: A pricing section with a title, a paragraph and three pricing levels.
 */
?>

<!-- jk:group {"metadata":{"name":"<?php echo esc_html_x( 'Pricing Table', 'Name for the pricing pattern', 'twentytwentyfour' ); ?>"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="jk-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--jk--preset--spacing--50);padding-right:var(--jk--preset--spacing--50);padding-bottom:var(--jk--preset--spacing--50);padding-left:var(--jk--preset--spacing--50)">
	<!-- jk:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"16px"}},"backgroundColor":"base-2","layout":{"type":"constrained"}} -->
	<div class="jk-block-group alignwide has-base-2-background-color has-background" style="border-radius:16px;padding-top:var(--jk--preset--spacing--50);padding-right:var(--jk--preset--spacing--40);padding-bottom:var(--jk--preset--spacing--50);padding-left:var(--jk--preset--spacing--40)">
		<!-- jk:group {"align":"wide","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
		<div class="jk-block-group alignwide">
			<!-- jk:heading {"textAlign":"center"} -->
			<h2 class="jk-block-heading has-text-align-center"><?php echo esc_html_x( 'Our Services', 'Sample heading for pricing pattern', 'twentytwentyfour' ); ?></h2>
			<!-- /jk:heading -->

			<!-- jk:paragraph {"align":"center","style":{"typography":{"fontSize":"1.125rem"},"spacing":{"margin":{"top":"var:preset|spacing|10"}}}} -->
			<p class="has-text-align-center" style="margin-top:var(--jk--preset--spacing--10);font-size:1.125rem"><?php echo esc_html_x( 'We offer flexible options, which you can adapt to the different needs of each project.', 'Sample description for a pricing table', 'twentytwentyfour' ); ?></p>
			<!-- /jk:paragraph -->
		</div>
		<!-- /jk:group -->

		<!-- jk:spacer {"height":"var:preset|spacing|30"} -->
		<div style="height:var(--jk--preset--spacing--30)" aria-hidden="true" class="jk-block-spacer"></div>
		<!-- /jk:spacer -->

		<!-- jk:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|20"}}}} -->
		<div class="jk-block-columns alignwide">
			<!-- jk:column {"style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|30","bottom":"var:preset|spacing|10"}},"border":{"top":{"color":"var:preset|color|contrast-3","width":"1px"}}}} -->
			<div class="jk-block-column" style="border-top-color:var(--jk--preset--color--contrast-3);border-top-width:1px;padding-top:var(--jk--preset--spacing--30);padding-right:var(--jk--preset--spacing--30);padding-bottom:var(--jk--preset--spacing--10);padding-left:var(--jk--preset--spacing--30)">
				<!-- jk:heading {"textAlign":"center","level":4,"style":{"spacing":{"padding":{"top":"1px"}}},"fontSize":"medium"} -->
				<h4 class="jk-block-heading has-text-align-center has-medium-font-size" style="padding-top:1px">
					<em><?php echo esc_html_x( 'Free', 'Sample heading for the first pricing level', 'twentytwentyfour' ); ?></em>
				</h4>
				<!-- /jk:heading -->

				<!-- jk:heading {"textAlign":"center","level":5,"fontSize":"x-large"} -->
				<h5 class="jk-block-heading has-text-align-center has-x-large-font-size"><?php echo esc_html_x( '$0', 'Sample price for the first pricing level', 'twentytwentyfour' ); ?></h5>
				<!-- /jk:heading -->

				<!-- jk:spacer {"height":"var:preset|spacing|10"} -->
				<div style="height:var(--jk--preset--spacing--10)" aria-hidden="true" class="jk-block-spacer">
				</div>
				<!-- /jk:spacer -->

				<!-- jk:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
				<div class="jk-block-group">
					<!-- jk:paragraph {"align":"center"} -->
					<p class="has-text-align-center"><?php echo jk_kses_post( _x( 'Access to 5 exclusive <em>Études Articles</em> per month.', 'Feature for pricing level', 'twentytwentyfour' ) ); ?></p>
					<!-- /jk:paragraph -->

					<!-- jk:separator {"backgroundColor":"contrast-3"} -->
					<hr class="jk-block-separator has-text-color has-contrast-3-color has-alpha-channel-opacity has-contrast-3-background-color has-background is-style-wide" />
					<!-- /jk:separator -->

					<!-- jk:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-2"}}}},"textColor":"contrast-2"} -->
					<p class="has-text-align-center has-contrast-2-color has-text-color has-link-color">
						<s><?php echo esc_html_x( 'Weekly print edition.', 'Feature for pricing level', 'twentytwentyfour' ); ?></s>
					</p>
					<!-- /jk:paragraph -->

					<!-- jk:separator {"backgroundColor":"contrast-3"} -->
					<hr class="jk-block-separator has-text-color has-contrast-3-color has-alpha-channel-opacity has-contrast-3-background-color has-background is-style-wide" />
					<!-- /jk:separator -->

					<!-- jk:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-2"}}}},"textColor":"contrast-2"} -->
					<p class="has-text-align-center has-contrast-2-color has-text-color has-link-color">
						<s><?php echo jk_kses_post( _x( 'Exclusive access to the <em>Études</em> app for iOS and Android.', 'Feature for pricing level', 'twentytwentyfour' ) ); ?></s>
					</p>
					<!-- /jk:paragraph -->
				</div>
				<!-- /jk:group -->

				<!-- jk:spacer {"height":"var:preset|spacing|10"} -->
				<div style="height:var(--jk--preset--spacing--10)" aria-hidden="true" class="jk-block-spacer">
				</div>
				<!-- /jk:spacer -->

				<!-- jk:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
				<div class="jk-block-buttons">
					<!-- jk:button {"width":100,"className":"is-style-outline"} -->
					<div class="jk-block-button has-custom-width jk-block-button__width-100 is-style-outline">
						<a class="jk-block-button__link jk-element-button"><?php echo esc_html_x( 'Subscribe', 'Button text for the first pricing level', 'twentytwentyfour' ); ?></a>
					</div>
					<!-- /jk:button -->
				</div>
				<!-- /jk:buttons -->
			</div>
			<!-- /jk:column -->

			<!-- jk:column {"style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|30","bottom":"var:preset|spacing|10"}},"border":{"top":{"color":"var:preset|color|contrast","width":"2px"}}}} -->
			<div class="jk-block-column" style="border-top-color:var(--jk--preset--color--contrast);border-top-width:2px;padding-top:var(--jk--preset--spacing--30);padding-right:var(--jk--preset--spacing--30);padding-bottom:var(--jk--preset--spacing--10);padding-left:var(--jk--preset--spacing--30)">
				<!-- jk:heading {"textAlign":"center","level":4} -->
				<h4 class="jk-block-heading has-text-align-center">
					<em><?php echo esc_html_x( 'Connoisseur', 'Sample heading for the second pricing level', 'twentytwentyfour' ); ?></em>
				</h4>
				<!-- /jk:heading -->

				<!-- jk:heading {"textAlign":"center","level":5,"fontSize":"x-large"} -->
				<h5 class="jk-block-heading has-text-align-center has-x-large-font-size"><?php echo esc_html_x( '$12', 'Sample price for the second pricing level', 'twentytwentyfour' ); ?></h5>
				<!-- /jk:heading -->

				<!-- jk:spacer {"height":"var:preset|spacing|10"} -->
				<div style="height:var(--jk--preset--spacing--10)" aria-hidden="true" class="jk-block-spacer">
				</div>
				<!-- /jk:spacer -->

				<!-- jk:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
				<div class="jk-block-group">
					<!-- jk:paragraph {"align":"center"} -->
					<p class="has-text-align-center"><?php echo jk_kses_post( _x( 'Access to 20 exclusive <em>Études Articles</em> per month.', 'Feature for pricing level', 'twentytwentyfour' ) ); ?></p>
					<!-- /jk:paragraph -->

					<!-- jk:separator {"backgroundColor":"contrast-3"} -->
					<hr class="jk-block-separator has-text-color has-contrast-3-color has-alpha-channel-opacity has-contrast-3-background-color has-background is-style-wide" />
					<!-- /jk:separator -->

					<!-- jk:paragraph {"align":"center"} -->
					<p class="has-text-align-center"><?php echo esc_html_x( 'Weekly print edition.', 'Feature for pricing level', 'twentytwentyfour' ); ?></p>
					<!-- /jk:paragraph -->

					<!-- jk:separator {"backgroundColor":"contrast-3"} -->
					<hr class="jk-block-separator has-text-color has-contrast-3-color has-alpha-channel-opacity has-contrast-3-background-color has-background is-style-wide" />
					<!-- /jk:separator -->

					<!-- jk:paragraph {"align":"center"} -->
					<p class="has-text-align-center"><?php echo jk_kses_post( _x( 'Exclusive access to the <em>Études</em> app for iOS and Android.', 'Feature for pricing level', 'twentytwentyfour' ) ); ?></p>
					<!-- /jk:paragraph -->
				</div>
				<!-- /jk:group -->

				<!-- jk:spacer {"height":"var:preset|spacing|10"} -->
				<div style="height:var(--jk--preset--spacing--10)" aria-hidden="true" class="jk-block-spacer">
				</div>
				<!-- /jk:spacer -->

				<!-- jk:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
				<div class="jk-block-buttons">
					<!-- jk:button {"width":100,"className":"is-style-fill"} -->
					<div class="jk-block-button has-custom-width jk-block-button__width-100 is-style-fill">
						<a class="jk-block-button__link jk-element-button"><?php echo esc_html_x( 'Subscribe', 'Button text for the second pricing level', 'twentytwentyfour' ); ?></a>
					</div>
					<!-- /jk:button -->
				</div>
				<!-- /jk:buttons -->
			</div>
			<!-- /jk:column -->

			<!-- jk:column {"style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|30","bottom":"var:preset|spacing|10"}},"border":{"top":{"color":"var:preset|color|contrast-3","width":"1px"}}}} -->
			<div class="jk-block-column" style="border-top-color:var(--jk--preset--color--contrast-3);border-top-width:1px;padding-top:var(--jk--preset--spacing--30);padding-right:var(--jk--preset--spacing--30);padding-bottom:var(--jk--preset--spacing--10);padding-left:var(--jk--preset--spacing--30)">
				<!-- jk:heading {"textAlign":"center","level":4,"style":{"spacing":{"padding":{"top":"1px"}}},"fontSize":"medium"} -->
				<h4 class="jk-block-heading has-text-align-center has-medium-font-size" style="padding-top:1px">
					<em><?php echo esc_html_x( 'Expert', 'Sample heading for the third pricing level', 'twentytwentyfour' ); ?></em>
				</h4>
				<!-- /jk:heading -->

				<!-- jk:heading {"textAlign":"center","level":5,"fontSize":"x-large"} -->
				<h5 class="jk-block-heading has-text-align-center has-x-large-font-size"><?php echo esc_html_x( '$28', 'Sample price for the third pricing level', 'twentytwentyfour' ); ?></h5>
				<!-- /jk:heading -->

				<!-- jk:spacer {"height":"var:preset|spacing|10"} -->
				<div style="height:var(--jk--preset--spacing--10)" aria-hidden="true" class="jk-block-spacer">
				</div>
				<!-- /jk:spacer -->

				<!-- jk:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
				<div class="jk-block-group">
					<!-- jk:paragraph {"align":"center"} -->
					<p class="has-text-align-center"><?php echo jk_kses_post( _x( 'Exclusive, unlimited access to <em>Études Articles</em>.', 'Feature for pricing level', 'twentytwentyfour' ) ); ?></p>
					<!-- /jk:paragraph -->

					<!-- jk:separator {"backgroundColor":"contrast-3"} -->
					<hr class="jk-block-separator has-text-color has-contrast-3-color has-alpha-channel-opacity has-contrast-3-background-color has-background is-style-wide" />
					<!-- /jk:separator -->

					<!-- jk:paragraph {"align":"center"} -->
					<p class="has-text-align-center"><?php echo esc_html_x( 'Weekly print edition.', 'Feature for pricing level', 'twentytwentyfour' ); ?></p>
					<!-- /jk:paragraph -->

					<!-- jk:separator {"backgroundColor":"contrast-3"} -->
					<hr class="jk-block-separator has-text-color has-contrast-3-color has-alpha-channel-opacity has-contrast-3-background-color has-background is-style-wide" />
					<!-- /jk:separator -->

					<!-- jk:paragraph {"align":"center"} -->
					<p class="has-text-align-center"><?php echo jk_kses_post( _x( 'Exclusive access to the <em>Études</em> app for iOS and Android', 'Feature for pricing level', 'twentytwentyfour' ) ); ?></p>
					<!-- /jk:paragraph -->
				</div>
				<!-- /jk:group -->

				<!-- jk:spacer {"height":"var:preset|spacing|10"} -->
				<div style="height:var(--jk--preset--spacing--10)" aria-hidden="true" class="jk-block-spacer">
				</div>
				<!-- /jk:spacer -->

				<!-- jk:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
				<div class="jk-block-buttons">
					<!-- jk:button {"width":100,"className":"is-style-outline"} -->
					<div class="jk-block-button has-custom-width jk-block-button__width-100 is-style-outline">
						<a class="jk-block-button__link jk-element-button"><?php echo esc_html_x( 'Subscribe', 'Button text for the third pricing level', 'twentytwentyfour' ); ?></a>
					</div>
					<!-- /jk:button -->
				</div>
				<!-- /jk:buttons -->
			</div>
			<!-- /jk:column -->
		</div>
		<!-- /jk:columns -->
	</div>
	<!-- /jk:group -->
</div>
<!-- /jk:group -->
