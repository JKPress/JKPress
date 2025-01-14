<?php
/**
 * Title: Event schedule
 * Slug: twentytwentyfive/event-schedule
 * Categories: about
 * Description: A section with specified dates and times for an event.
 * Keywords: events, agenda, schedule, lectures
 *
 * @package JKPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- jk:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="jk-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--jk--preset--spacing--60);padding-bottom:var(--jk--preset--spacing--60)">
	<!-- jk:group {"align":"wide","layout":{"type":"default"}} -->
	<div class="jk-block-group alignwide">
		<!-- jk:heading {"fontSize":"xx-large"} -->
		<h2 class="jk-block-heading has-xx-large-font-size"><?php esc_html_e( 'Agenda', 'twentytwentyfive' ); ?></h2>
		<!-- /jk:heading -->
		<!-- jk:paragraph -->
		<p><?php esc_html_e( 'These are some of the upcoming events.', 'twentytwentyfive' ); ?></p>
		<!-- /jk:paragraph -->
		<!-- jk:spacer {"height":"var:preset|spacing|30"} -->
		<div style="height:var(--jk--preset--spacing--30)" aria-hidden="true" class="jk-block-spacer"></div>
		<!-- /jk:spacer -->
		<!-- jk:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"top":{"color":"var:preset|color|accent-6","width":"1px"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
		<div class="jk-block-group" style="border-top-color:var(--jk--preset--color--accent-6);border-top-width:1px;padding-top:var(--jk--preset--spacing--40);padding-bottom:var(--jk--preset--spacing--40)">
			<!-- jk:columns -->
			<div class="jk-block-columns">
				<!-- jk:column {"verticalAlignment":"top","width":"40%"} -->
				<div class="jk-block-column is-vertically-aligned-top" style="flex-basis:40%">
					<!-- jk:heading {"level":3} -->
					<h3 class="jk-block-heading"><?php echo esc_html_x( 'Mon, Jan 1', 'Example event date in pattern.', 'twentytwentyfive' ); ?></h3>
					<!-- /jk:heading -->
				</div>
				<!-- /jk:column -->
				<!-- jk:column {"verticalAlignment":"top","width":"60%"} -->
				<div class="jk-block-column is-vertically-aligned-top" style="flex-basis:60%">
					<!-- jk:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
					<div class="jk-block-columns is-not-stacked-on-mobile" style="margin-top:var(--jk--preset--spacing--40);margin-bottom:var(--jk--preset--spacing--40)">
						<!-- jk:column {"width":"33.33%"} -->
						<div class="jk-block-column" style="flex-basis:33.33%">
							<!-- jk:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"layout":{"selfStretch":"fixed","flexSize":"270px"}}} -->
							<figure class="jk-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/marshland-birds-square.webp" alt="<?php esc_attr_e( 'Birds on a lake.', 'twentytwentyfive' ); ?>" style="aspect-ratio:1;object-fit:cover"/></figure>
							<!-- /jk:image -->
						</div>
						<!-- /jk:column -->
						<!-- jk:column {"width":"66.66%"} -->
						<div class="jk-block-column" style="flex-basis:66.66%">
							<!-- jk:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
							<div class="jk-block-group">
								<!-- jk:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
								<div class="jk-block-group">
									<!-- jk:heading {"level":4} -->
									<h4 class="jk-block-heading"><a href="#"><?php esc_html_e( 'Fauna from North America and its characteristics', 'twentytwentyfive' ); ?></a></h4>
									<!-- /jk:heading -->
									<!-- jk:paragraph -->
									<p><?php echo esc_html_x( '9 AM — 11 AM', 'Example event time in pattern.', 'twentytwentyfive' ); ?></p>
									<!-- /jk:paragraph -->
								</div>
								<!-- /jk:group -->
								<!-- jk:paragraph {"fontSize":"small"} -->
								<p class="has-small-font-size"><?php echo jk_kses_post( _x( 'Lecture by <a href="#">Prof. Fiona Presley</a>', 'Pattern placeholder text with link.', 'twentytwentyfive' ) ); ?></p>
								<!-- /jk:paragraph -->
							</div>
							<!-- /jk:group -->
						</div>
						<!-- /jk:column -->
					</div>
					<!-- /jk:columns -->
					<!-- jk:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
					<div class="jk-block-columns is-not-stacked-on-mobile" style="margin-top:var(--jk--preset--spacing--40);margin-bottom:var(--jk--preset--spacing--40)">
						<!-- jk:column {"width":"33.33%"} -->
						<div class="jk-block-column" style="flex-basis:33.33%">
							<!-- jk:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"layout":{"selfStretch":"fixed","flexSize":"270px"}}} -->
							<figure class="jk-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/coral-square.webp" alt="<?php esc_attr_e( 'View of the deep ocean.', 'twentytwentyfive' ); ?>" style="aspect-ratio:1;object-fit:cover"/></figure>
							<!-- /jk:image -->
						</div>
						<!-- /jk:column -->
						<!-- jk:column {"width":"66.66%"} -->
						<div class="jk-block-column" style="flex-basis:66.66%">
							<!-- jk:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
							<div class="jk-block-group">
								<!-- jk:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
								<div class="jk-block-group">
									<!-- jk:heading {"level":4} -->
									<h4 class="jk-block-heading"><a href="#"><?php esc_html_e( 'Things you didn’t know about the deep ocean', 'twentytwentyfive' ); ?></a></h4>
									<!-- /jk:heading -->
									<!-- jk:paragraph -->
									<p><?php echo esc_html_x( '9 AM — 11 AM', 'Example event time in pattern.', 'twentytwentyfive' ); ?></p>
									<!-- /jk:paragraph -->
								</div>
								<!-- /jk:group -->
								<!-- jk:paragraph {"fontSize":"small"} -->
								<p class="has-small-font-size"><?php echo jk_kses_post( _x( 'Lecture by <a href="#">Prof. Fiona Presley</a>', 'Pattern placeholder text with link.', 'twentytwentyfive' ) ); ?></p>
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
		</div>
		<!-- /jk:group -->
		<!-- jk:spacer {"height":"var:preset|spacing|30"} -->
		<div style="height:var(--jk--preset--spacing--30)" aria-hidden="true" class="jk-block-spacer"></div>
		<!-- /jk:spacer -->
		<!-- jk:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"top":{"color":"var:preset|color|accent-6","width":"1px"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
		<div class="jk-block-group" style="border-top-color:var(--jk--preset--color--accent-6);border-top-width:1px;padding-top:var(--jk--preset--spacing--40);padding-bottom:var(--jk--preset--spacing--40)">
			<!-- jk:columns -->
			<div class="jk-block-columns">
				<!-- jk:column {"verticalAlignment":"top","width":"40%"} -->
				<div class="jk-block-column is-vertically-aligned-top" style="flex-basis:40%">
					<!-- jk:heading {"level":3} -->
					<h3 class="jk-block-heading"><?php echo esc_html_x( 'Mon, Jan 1', 'Example event date in pattern.', 'twentytwentyfive' ); ?></h3>
					<!-- /jk:heading -->
				</div>
				<!-- /jk:column -->
				<!-- jk:column {"verticalAlignment":"top","width":"60%"} -->
				<div class="jk-block-column is-vertically-aligned-top" style="flex-basis:60%">
					<!-- jk:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
					<div class="jk-block-columns is-not-stacked-on-mobile" style="margin-top:var(--jk--preset--spacing--40);margin-bottom:var(--jk--preset--spacing--40)">
						<!-- jk:column {"width":"33.33%"} -->
						<div class="jk-block-column" style="flex-basis:33.33%">
							<!-- jk:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"layout":{"selfStretch":"fixed","flexSize":"270px"}}} -->
							<figure class="jk-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/parthenon-square.webp" alt="<?php esc_attr_e( 'The Acropolis of Athens.', 'twentytwentyfive' ); ?>" style="aspect-ratio:1;object-fit:cover"/></figure>
							<!-- /jk:image -->
						</div>
						<!-- /jk:column -->
						<!-- jk:column {"width":"66.66%"} -->
						<div class="jk-block-column" style="flex-basis:66.66%"><!-- jk:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
							<div class="jk-block-group">
								<!-- jk:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
								<div class="jk-block-group">
									<!-- jk:heading {"level":4} -->
									<h4 class="jk-block-heading"><a href="#"><?php esc_html_e( 'Ancient buildings and symbols', 'twentytwentyfive' ); ?></a></h4>
									<!-- /jk:heading -->
									<!-- jk:paragraph -->
									<p><?php echo esc_html_x( '9 AM — 11 AM', 'Example event time in pattern.', 'twentytwentyfive' ); ?></p>
									<!-- /jk:paragraph -->
								</div>
								<!-- /jk:group -->
								<!-- jk:paragraph {"fontSize":"small"} -->
								<p class="has-small-font-size"><?php echo jk_kses_post( _x( 'Lecture by <a href="#">Prof. Fiona Presley</a>', 'Pattern placeholder text with link.', 'twentytwentyfive' ) ); ?></p>
								<!-- /jk:paragraph -->
							</div>
							<!-- /jk:group -->
						</div>
						<!-- /jk:column -->
					</div>
					<!-- /jk:columns -->
					<!-- jk:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
					<div class="jk-block-columns is-not-stacked-on-mobile" style="margin-top:var(--jk--preset--spacing--40);margin-bottom:var(--jk--preset--spacing--40)">
						<!-- jk:column {"width":"33.33%"} -->
						<div class="jk-block-column" style="flex-basis:33.33%">
							<!-- jk:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"layout":{"selfStretch":"fixed","flexSize":"270px"}}} -->
							<figure class="jk-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/agenda-img-4.webp" alt="<?php esc_attr_e( 'Black and white photo of an African woman.', 'twentytwentyfive' ); ?>" style="aspect-ratio:1;object-fit:cover"/></figure>
							<!-- /jk:image -->
						</div>
						<!-- /jk:column -->
						<!-- jk:column {"width":"66.66%"} -->
						<div class="jk-block-column" style="flex-basis:66.66%">
							<!-- jk:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
							<div class="jk-block-group">
								<!-- jk:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
								<div class="jk-block-group">
									<!-- jk:heading {"level":4} -->
									<h4 class="jk-block-heading"><a href="#"><?php esc_html_e( 'An introduction to African dialects', 'twentytwentyfive' ); ?></a></h4>
									<!-- /jk:heading -->
									<!-- jk:paragraph -->
									<p><?php echo esc_html_x( '9 AM — 11 AM', 'Example event time in pattern.', 'twentytwentyfive' ); ?></p>
									<!-- /jk:paragraph -->
								</div>
								<!-- /jk:group -->
								<!-- jk:paragraph {"fontSize":"small"} -->
								<p class="has-small-font-size"><?php echo jk_kses_post( _x( 'Lecture by <a href="#">Prof. Fiona Presley</a>', 'Pattern placeholder text with link.', 'twentytwentyfive' ) ); ?></p>
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
		</div>
		<!-- /jk:group -->
	</div>
	<!-- /jk:group -->
</div>
<!-- /jk:group -->
