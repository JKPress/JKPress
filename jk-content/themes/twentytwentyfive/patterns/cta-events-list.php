<?php
/**
 * Title: Events list
 * Slug: twentytwentyfive/cta-events-list
 * Categories: call-to-action
 * Description: A list of events with call to action.
 *
 * @package JKPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- jk:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="jk-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--jk--preset--spacing--50);padding-bottom:var(--jk--preset--spacing--50)">
	<!-- jk:group {"align":"wide","layout":{"type":"default"}} -->
	<div class="jk-block-group alignwide">
		<!-- jk:heading -->
		<h2 class="jk-block-heading"><?php esc_html_e( 'Upcoming events', 'twentytwentyfive' ); ?></h2>
		<!-- /jk:heading -->

		<!-- jk:paragraph -->
		<p><?php esc_html_e( 'These are some of the upcoming events', 'twentytwentyfive' ); ?></p>
		<!-- /jk:paragraph -->

		<!-- jk:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"var:preset|spacing|70"}}},"layout":{"type":"default"}} -->
		<div class="jk-block-group" style="margin-top:var(--jk--preset--spacing--70)">
			<!-- jk:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
			<div class="jk-block-group" style="padding-top:var(--jk--preset--spacing--40);padding-bottom:var(--jk--preset--spacing--40)">
				<!-- jk:group {"layout":{"type":"constrained"}} -->
				<div class="jk-block-group">
					<!-- jk:heading {"level":3} -->
					<h3 class="jk-block-heading"><?php esc_html_e( 'Tell your story', 'twentytwentyfive' ); ?></h3>
					<!-- /jk:heading -->

					<!-- jk:paragraph -->
					<p><?php esc_html_e( 'Atlanta, GA, USA', 'twentytwentyfive' ); ?></p>
					<!-- /jk:paragraph -->
				</div>
				<!-- /jk:group -->

				<!-- jk:group {"style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
				<div class="jk-block-group">
					<!-- jk:paragraph {"style":{"typography":{"textTransform":"uppercase"}}} -->
					<p style="text-transform:uppercase"><?php echo esc_html_x( 'Mon, Jan 1', 'Example event date in pattern.', 'twentytwentyfive' ); ?></p>
					<!-- /jk:paragraph -->

					<!-- jk:buttons -->
					<div class="jk-block-buttons">
						<!-- jk:button {"fontSize":"small"} -->
						<div class="jk-block-button has-custom-font-size has-small-font-size"><a class="jk-block-button__link jk-element-button"><?php esc_html_e( 'Buy Tickets', 'twentytwentyfive' ); ?></a></div>
						<!-- /jk:button -->
					</div>
					<!-- /jk:buttons -->
				</div>
				<!-- /jk:group -->
			</div>
			<!-- /jk:group -->

			<!-- jk:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"top":{"color":"var:preset|color|accent-6","width":"1px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
			<div class="jk-block-group" style="border-top-color:var(--jk--preset--color--accent-6);border-top-width:1px;padding-top:var(--jk--preset--spacing--40);padding-bottom:var(--jk--preset--spacing--40)"><!-- jk:group {"layout":{"type":"constrained"}} -->
				<div class="jk-block-group">
					<!-- jk:heading {"level":3} -->
					<h3 class="jk-block-heading">
						<?php
						echo jk_kses_post(
							/* translators: This string contains the word "Stories" in four different languages with the first item in the locale's language. */
							_x( '“Stories, <span lang="es">historias</span>, <span lang="uk">iсторії</span>, <span lang="el">iστορίες</span>”', 'Placeholder heading in four languages.', 'twentytwentyfive' )
						);
						?>
					</h3>
					<!-- /jk:heading -->

					<!-- jk:paragraph -->
					<p><?php esc_html_e( 'Mexico City, Mexico', 'twentytwentyfive' ); ?></p>
					<!-- /jk:paragraph -->
				</div>
				<!-- /jk:group -->

				<!-- jk:group {"style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
				<div class="jk-block-group">
					<!-- jk:paragraph {"style":{"typography":{"textTransform":"uppercase"}}} -->
					<p style="text-transform:uppercase"><?php echo esc_html_x( 'Mon, Jan 1', 'Example event date in pattern.', 'twentytwentyfive' ); ?></p>
					<!-- /jk:paragraph -->

					<!-- jk:buttons -->
					<div class="jk-block-buttons">
						<!-- jk:button {"fontSize":"small"} -->
						<div class="jk-block-button has-custom-font-size has-small-font-size"><a class="jk-block-button__link jk-element-button"><?php esc_html_e( 'Buy Tickets', 'twentytwentyfive' ); ?></a></div>
						<!-- /jk:button -->
					</div>
					<!-- /jk:buttons -->
				</div>
				<!-- /jk:group -->
			</div>
			<!-- /jk:group -->

			<!-- jk:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"top":{"color":"var:preset|color|accent-6","width":"1px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
			<div class="jk-block-group" style="border-top-color:var(--jk--preset--color--accent-6);border-top-width:1px;padding-top:var(--jk--preset--spacing--40);padding-bottom:var(--jk--preset--spacing--40)"><!-- jk:group {"layout":{"type":"constrained"}} -->
				<div class="jk-block-group">
					<!-- jk:heading {"level":3} -->
					<h3 class="jk-block-heading"><?php esc_html_e( 'Tell your story', 'twentytwentyfive' ); ?></h3>
					<!-- /jk:heading -->

					<!-- jk:paragraph -->
					<p><?php esc_html_e( 'Thornville, OH, USA', 'twentytwentyfive' ); ?></p>
					<!-- /jk:paragraph -->
				</div>
				<!-- /jk:group -->

				<!-- jk:group {"style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
				<div class="jk-block-group">
					<!-- jk:paragraph {"style":{"typography":{"textTransform":"uppercase"}}} -->
					<p style="text-transform:uppercase"><?php echo esc_html_x( 'Mon, Jan 1', 'Example event date in pattern.', 'twentytwentyfive' ); ?></p>
					<!-- /jk:paragraph -->

					<!-- jk:buttons -->
					<div class="jk-block-buttons">
						<!-- jk:button {"fontSize":"small"} -->
						<div class="jk-block-button has-custom-font-size has-small-font-size"><a class="jk-block-button__link jk-element-button"><?php esc_html_e( 'Buy Tickets', 'twentytwentyfive' ); ?></a></div>
						<!-- /jk:button -->
					</div>
					<!-- /jk:buttons -->
				</div>
				<!-- /jk:group -->
			</div>
			<!-- /jk:group -->

			<!-- jk:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"top":{"color":"var:preset|color|accent-6","width":"1px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
			<div class="jk-block-group" style="border-top-color:var(--jk--preset--color--accent-6);border-top-width:1px;padding-top:var(--jk--preset--spacing--40);padding-bottom:var(--jk--preset--spacing--40)"><!-- jk:group {"layout":{"type":"constrained"}} -->
				<div class="jk-block-group">
					<!-- jk:heading {"level":3} -->
					<h3 class="jk-block-heading">
						<?php
						echo jk_kses_post(
							/* translators: This string contains the word "Stories" in four different languages with the first item in the locale's language. */
							_x( '“Stories, <span lang="es">historias</span>, <span lang="uk">iсторії</span>, <span lang="el">iστορίες</span>”', 'Placeholder heading in four languages.', 'twentytwentyfive' )
						);
						?>
					</h3>
					<!-- /jk:heading -->

					<!-- jk:paragraph -->
					<p><?php esc_html_e( 'Thornville, OH, USA', 'twentytwentyfive' ); ?></p>
					<!-- /jk:paragraph -->
				</div>
				<!-- /jk:group -->

				<!-- jk:group {"style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
				<div class="jk-block-group">
					<!-- jk:paragraph {"style":{"typography":{"textTransform":"uppercase"}}} -->
					<p style="text-transform:uppercase"><?php echo esc_html_x( 'Mon, Jan 1', 'Example event date in pattern.', 'twentytwentyfive' ); ?></p>
					<!-- /jk:paragraph -->

					<!-- jk:buttons -->
					<div class="jk-block-buttons">
						<!-- jk:button {"fontSize":"small"} -->
						<div class="jk-block-button has-custom-font-size has-small-font-size"><a class="jk-block-button__link jk-element-button"><?php esc_html_e( 'Buy Tickets', 'twentytwentyfive' ); ?></a></div>
						<!-- /jk:button -->
					</div>
					<!-- /jk:buttons -->
				</div>
				<!-- /jk:group -->
			</div>
			<!-- /jk:group -->
		</div>
		<!-- /jk:group -->
	</div>
	<!-- /jk:group -->
</div>
<!-- /jk:group -->
