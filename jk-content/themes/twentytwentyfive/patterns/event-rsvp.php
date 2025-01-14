<?php
/**
 * Title: Event RSVP
 * Slug: twentytwentyfive/event-rsvp
 * Keywords: call-to-action, rsvp, event
 * Categories: call-to-action
 * Block Types: core/post-content
 * Viewport width: 1400
 * Description: RSVP for an upcoming event with a cover image and event details.
 *
 * @package JKPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- jk:group {"align":"full","style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="jk-block-group alignfull" style="margin-top:0;margin-bottom:0">
	<!-- jk:columns {"isStackedOnMobile":false,"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}}} -->
	<div class="jk-block-columns alignfull is-not-stacked-on-mobile" style="margin-top:0;margin-bottom:0;padding-top:var(--jk--preset--spacing--40);padding-right:var(--jk--preset--spacing--40);padding-bottom:var(--jk--preset--spacing--80);padding-left:var(--jk--preset--spacing--40)">
		<!-- jk:column {"width":"66.66%"} -->
		<div class="jk-block-column" style="flex-basis:66.66%">
			<!-- jk:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
			<div class="jk-block-group">
				<!-- jk:heading {"fontSize":"xx-large"} -->
				<h2 class="jk-block-heading has-xx-large-font-size">
					<?php
					echo jk_kses_post(
						/* translators: This string contains the word "Stories" in four different languages with the first item in the locale's language. */
						_x( '“Stories, <span lang="es">historias</span>, <span lang="uk">iсторії</span>, <span lang="el">iστορίες</span>”', 'Placeholder heading in four languages.', 'twentytwentyfive' )
					);
					?>
				</h2>
				<!-- /jk:heading -->

				<!-- jk:paragraph {"fontSize":"x-large"} -->
				<p class="has-x-large-font-size"><?php echo esc_html_x( 'Mon, Jan 1', 'Example event date in pattern.', 'twentytwentyfive' ); ?></p>
				<!-- /jk:paragraph -->

				<!-- jk:spacer {"height":"0px","style":{"layout":{"selfStretch":"fixed","flexSize":"140px"}}} -->
				<div style="height:0px" aria-hidden="true" class="jk-block-spacer"></div>
				<!-- /jk:spacer -->
			</div>
			<!-- /jk:group -->
		</div>
		<!-- /jk:column -->

		<!-- jk:column {"width":"12vw"} -->
		<div class="jk-block-column" style="flex-basis:12vw"></div>
		<!-- /jk:column -->

		<!-- jk:column -->
		<div class="jk-block-column">
			<!-- jk:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
			<div class="jk-block-group">
				<!-- jk:paragraph {"align":"left","style":{"typography":{"writingMode":"vertical-rl","textTransform":"uppercase","lineHeight":"0.6"}}} -->
				<p class="has-text-align-left" style="line-height:0.6;text-transform:uppercase;writing-mode:vertical-rl"><?php esc_html_e( 'Free Workshop', 'twentytwentyfive' ); ?></p>
				<!-- /jk:paragraph -->
			</div>
			<!-- /jk:group -->
		</div>
		<!-- /jk:column -->
	</div>
	<!-- /jk:columns -->

	<!-- jk:columns {"align":"full","className":"is-style-section-2","style":{"spacing":{"blockGap":{"top":"0","left":"0"},"padding":{"top":"0","bottom":"0"}}}} -->
	<div class="jk-block-columns alignfull is-style-section-2" style="padding-top:0;padding-bottom:0">
		<!-- jk:column {"width":"50%"} -->
		<div class="jk-block-column" style="flex-basis:50%">
			<!-- jk:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"dimensions":{"minHeight":"33vh"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
			<div class="jk-block-group" style="min-height:33vh;padding-top:var(--jk--preset--spacing--50);padding-right:var(--jk--preset--spacing--50);padding-bottom:var(--jk--preset--spacing--50);padding-left:var(--jk--preset--spacing--50)">
				<!-- jk:paragraph -->
				<p><?php esc_html_e( 'This immersive event celebrates the universal human experience through the lenses of history and ancestry, featuring a diverse array of photographers whose works capture the essence of different cultures and historical moments.', 'twentytwentyfive' ); ?></p>
				<!-- /jk:paragraph -->

				<!-- jk:spacer {"height":"0px","style":{"layout":{"flexSize":"100px","selfStretch":"fixed"}}} -->
				<div style="height:0px" aria-hidden="true" class="jk-block-spacer"></div>
				<!-- /jk:spacer -->

				<!-- jk:heading {"fontSize":"xx-large"} -->
				<h2 class="jk-block-heading has-xx-large-font-size"><a href="#"><?php echo esc_html_x( 'RSVP', 'Abbreviation for "Please respond".', 'twentytwentyfive' ); ?></a></h2>
				<!-- /jk:heading -->
			</div>
			<!-- /jk:group -->
		</div>
		<!-- /jk:column -->

		<!-- jk:column {"width":"50%"} -->
		<div class="jk-block-column" style="flex-basis:50%">
			<!-- jk:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/botany-flowers-closeup.webp","dimRatio":0,"isDark":false} -->
			<div class="jk-block-cover is-light"><span aria-hidden="true" class="jk-block-cover__background has-background-dim-0 has-background-dim"></span><img class="jk-block-cover__image-background" alt="<?php esc_attr_e( 'Close up photo of white flowers on a grey background', 'twentytwentyfive' ); ?>" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/botany-flowers-closeup.webp" data-object-fit="cover"/>
			<div class="jk-block-cover__inner-container">
				<!-- jk:spacer {"height":"var:preset|spacing|20"} -->
				<div style="height:var(--jk--preset--spacing--20)" aria-hidden="true" class="jk-block-spacer"></div>
				<!-- /jk:spacer -->
			</div></div>
			<!-- /jk:cover -->
		</div>
		<!-- /jk:column -->
	</div>
	<!-- /jk:columns -->
</div>
<!-- /jk:group -->
