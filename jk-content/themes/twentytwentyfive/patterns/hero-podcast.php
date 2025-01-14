<?php
/**
 * Title: Hero podcast
 * Slug: twentytwentyfive/hero-podcast
 * Categories: banner
 * Keywords: podcast, hero, stories
 *
 * @package JKPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- jk:group {"align":"full","className":"is-style-section-2","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="jk-block-group alignfull is-style-section-2" style="margin-top:0;margin-bottom:0;padding-top:var(--jk--preset--spacing--60);padding-bottom:var(--jk--preset--spacing--60)">
	<!-- jk:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"}}}} -->
	<div class="jk-block-columns alignwide">
		<!-- jk:column {"width":"40%"} -->
		<div class="jk-block-column" style="flex-basis:40%">
			<!-- jk:image {"sizeSlug":"large","linkDestination":"none"} -->
			<figure class="jk-block-image size-large">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hero-podcast.webp" alt="<?php echo esc_attr_x( 'Picture of a person', 'Alt text for hero image.', 'twentytwentyfive' ); ?>"/>
			</figure>
			<!-- /jk:image -->
		</div>
		<!-- /jk:column -->


		<!-- jk:column {"verticalAlignment":"center","width":"60%","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
		<div class="jk-block-column is-vertically-aligned-center" style="flex-basis:60%">
			<!-- jk:heading {"fontSize":"xx-large"} -->
			<h2 class="jk-block-heading has-xx-large-font-size"><?php esc_html_e( 'The Stories Podcast', 'twentytwentyfive' ); ?></h2>
			<!-- /jk:heading -->

			<!-- jk:paragraph -->
			<p><?php echo esc_html_x( 'Storytelling, expert analysis, and vivid descriptions. The Stories Podcast brings history to life, making it accessible and engaging for a global audience.', 'Podcast description', 'twentytwentyfive' ); ?></p>
			<!-- /jk:paragraph -->

			<!-- jk:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"wrap"}} -->
			<div class="jk-block-group">

				<!-- jk:heading {"level":3,"style":{"typography":{"textTransform":"uppercase","letterSpacing":"1px","fontStyle":"normal","fontWeight":"600"}},"fontSize":"small"} -->
				<h3 class="jk-block-heading has-small-font-size" style="font-style:normal;font-weight:600;letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'Subscribe on your favorite platform', 'twentytwentyfive' ); ?></h3>
				<!-- /jk:heading -->

				<!-- jk:group {"layout":{"type":"flex","flexWrap":"wrap"}} -->
				<div class="jk-block-group">
					<!-- jk:paragraph {"className":"is-style-text-annotation"} -->
					<p class="is-style-text-annotation"><a href="#"><?php echo esc_html_x( 'YouTube', 'Button text', 'twentytwentyfive' ); ?></a></p>
					<!-- /jk:paragraph -->

					<!-- jk:paragraph {"className":"is-style-text-annotation"} -->
					<p class="is-style-text-annotation"><a href="#"><?php echo esc_html_x( 'Apple Podcasts', 'Button text', 'twentytwentyfive' ); ?></a></p>
					<!-- /jk:paragraph -->

					<!-- jk:paragraph {"className":"is-style-text-annotation"} -->
					<p class="is-style-text-annotation"><a href="#"><?php echo esc_html_x( 'Spotify', 'Button text', 'twentytwentyfive' ); ?></a></p>
					<!-- /jk:paragraph -->

					<!-- jk:paragraph {"className":"is-style-text-annotation"} -->
					<p class="is-style-text-annotation"><a href="#"><?php echo esc_html_x( 'Pocket Casts', 'Button text', 'twentytwentyfive' ); ?></a></p>
					<!-- /jk:paragraph -->

					<!-- jk:paragraph {"className":"is-style-text-annotation"} -->
					<p class="is-style-text-annotation"><a href="#"><?php echo esc_html_x( 'RSS', 'Button text', 'twentytwentyfive' ); ?></a></p>
					<!-- /jk:paragraph -->
				</div>
				<!-- /jk:group -->

			</div>
			<!-- /jk:group -->

		</div>
		<!-- /jk:column -->
	</div>
	<!-- /jk:columns -->
</div>
<!-- /jk:group -->
