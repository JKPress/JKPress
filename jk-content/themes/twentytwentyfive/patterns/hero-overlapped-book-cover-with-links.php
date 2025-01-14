<?php
/**
 * Title: Hero, overlapped book cover with links
 * Slug: twentytwentyfive/hero-overlapped-book-cover-with-links
 * Categories: banner
 * Description: A hero with an overlapped book cover and links.
 *
 * @package JKPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- jk:group {"align":"full","className":"is-style-section-1","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="jk-block-group alignfull is-style-section-1" style="margin-top:0;margin-bottom:0;padding-top:var(--jk--preset--spacing--80);padding-right:var(--jk--preset--spacing--50);padding-bottom:var(--jk--preset--spacing--80);padding-left:var(--jk--preset--spacing--50)">
	<!-- jk:group {"align":"wide","layout":{"type":"default"}} -->
	<div class="jk-block-group alignwide">
		<!-- jk:columns {"verticalAlignment":null,"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|80","left":"var:preset|spacing|80"}}}} -->
		<div class="jk-block-columns alignwide">
			<!-- jk:column {"verticalAlignment":"center","width":"55%"} -->
			<div class="jk-block-column is-vertically-aligned-center" style="flex-basis:55%">
				<!-- jk:group {"style":{"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left","flexWrap":"nowrap","verticalAlignment":"top"}} -->
				<div class="jk-block-group" style="min-height:100%">
					<!-- jk:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
					<div class="jk-block-group">
						<!-- jk:heading {"fontSize":"xx-large"} -->
						<h2 class="jk-block-heading has-xx-large-font-size">
							<?php echo esc_html_x( 'The Stories Book', 'Hero - Overlapped book cover pattern headline text', 'twentytwentyfive' ); ?>
						</h2>
						<!-- /jk:heading -->

						<!-- jk:paragraph {"className":"is-style-text-subtitle"} -->
						<p class="is-style-text-subtitle">
							<?php echo esc_html_x( 'A fine collection of moments in time featuring photographs from Louis Fleckenstein, Paul Strand and Asahachi Kōno.', 'Hero - Overlapped book cover pattern subline text', 'twentytwentyfive' ); ?>
						</p>
						<!-- /jk:paragraph -->
					</div>
					<!-- /jk:group -->

					<!-- jk:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
					<div class="jk-block-group">
						<!-- jk:spacer {"style":{"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} -->
						<div style="margin-top:var(--jk--preset--spacing--20);margin-bottom:var(--jk--preset--spacing--20)" aria-hidden="true" class="jk-block-spacer"></div>
						<!-- /jk:spacer -->

						<!-- jk:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
						<div class="jk-block-columns">
							<!-- jk:column {"verticalAlignment":"stretch"} -->
							<div class="jk-block-column is-vertically-aligned-stretch">
								<!-- jk:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"horizontal","flexWrap":"wrap","justifyContent":"space-between"}} -->
								<div class="jk-block-buttons">
									<!-- jk:button {"width":100,"className":"is-style-fill"} -->
									<div class="jk-block-button has-custom-width jk-block-button__width-100 is-style-fill">
										<a class="jk-block-button__link jk-element-button" href="#">
											<?php echo esc_html_x( 'Amazon', 'Example brand name.', 'twentytwentyfive' ); ?>
										</a>
									</div>
									<!-- /jk:button -->
									<!-- jk:button {"width":100,"className":"is-style-fill"} -->
									<div class="jk-block-button has-custom-width jk-block-button__width-100 is-style-fill">
										<a class="jk-block-button__link jk-element-button" href="#">
											<?php echo esc_html_x( 'Apple Books', 'Example brand name.', 'twentytwentyfive' ); ?>
										</a>
									</div>
									<!-- /jk:button -->
								</div>
								<!-- /jk:buttons -->
							</div>
							<!-- /jk:column -->
							<!-- jk:column {"verticalAlignment":"stretch"} -->
							<div class="jk-block-column is-vertically-aligned-stretch">
								<!-- jk:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"horizontal","flexWrap":"wrap","justifyContent":"space-between"}} -->
								<div class="jk-block-buttons">
									<!-- jk:button {"width":100,"className":"is-style-fill"} -->
									<div class="jk-block-button has-custom-width jk-block-button__width-100 is-style-fill">
										<a class="jk-block-button__link jk-element-button" href="#">
											<?php echo esc_html_x( 'Audible', 'Example brand name.', 'twentytwentyfive' ); ?>
										</a>
									</div>
									<!-- /jk:button -->
									<!-- jk:button {"width":100,"className":"is-style-fill"} -->
									<div class="jk-block-button has-custom-width jk-block-button__width-100 is-style-fill">
										<a class="jk-block-button__link jk-element-button" href="#">
											<?php echo esc_html_x( 'Barnes &amp; Noble', 'Example brand name.', 'twentytwentyfive' ); ?>
										</a>
									</div>
									<!-- /jk:button -->
								</div>
								<!-- /jk:buttons -->
							</div>
							<!-- /jk:column -->
						</div>
						<!-- /jk:columns -->

						<!-- jk:spacer {"style":{"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} -->
						<div style="margin-top:var(--jk--preset--spacing--20);margin-bottom:var(--jk--preset--spacing--20)" aria-hidden="true" class="jk-block-spacer"></div>
						<!-- /jk:spacer -->

						<!-- jk:paragraph {"fontSize":"medium"} -->
						<p class="has-medium-font-size"><?php echo jk_kses_post( _x( 'Outside Europe? View <a href="#" rel="nofollow">international editions</a>.', 'Pattern placeholder text with link.', 'twentytwentyfive' ) ); ?></p>
						<!-- /jk:paragraph -->
					</div>
					<!-- /jk:group -->
				</div>
				<!-- /jk:group -->
			</div>
			<!-- /jk:column -->

			<!-- jk:column {"verticalAlignment":"top","width":"45%"} -->
			<div class="jk-block-column is-vertically-aligned-top" style="flex-basis:45%">
				<!-- jk:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
				<figure class="jk-block-image size-full">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/book-image.webp" alt="<?php echo esc_attr__( 'Book Image', 'twentytwentyfive' ); ?>" style="aspect-ratio:3/4;object-fit:cover"/>
				</figure>
				<!-- /jk:image -->
			</div>
			<!-- /jk:column -->
		</div>
		<!-- /jk:columns -->
	</div>
	<!-- /jk:group -->
</div>
<!-- /jk:group -->
