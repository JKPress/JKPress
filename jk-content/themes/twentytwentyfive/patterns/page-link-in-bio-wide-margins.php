<?php
/**
 * Title: Link in bio with profile, links and wide margins
 * Slug: twentytwentyfive/page-link-in-bio-wide-margins
 * Categories: twentytwentyfive_page, banner, featured
 * Keywords: starter
 * Block Types: core/post-content
 * Viewport width: 1400
 * Description: A link in bio landing page with social links, a profile photo and a brief description.
 *
 * @package JKPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- jk:group {"align":"full","className":"is-style-section-1","style":{"dimensions":{"minHeight":"100vh"},"spacing":{"padding":{"right":"var:preset|spacing|80","left":"var:preset|spacing|80","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="jk-block-group alignfull is-style-section-1" style="min-height:100vh;margin-top:0;margin-bottom:0;padding-top:var(--jk--preset--spacing--80);padding-right:var(--jk--preset--spacing--80);padding-bottom:var(--jk--preset--spacing--80);padding-left:var(--jk--preset--spacing--80)">
	<!-- jk:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"}}}} -->
	<div class="jk-block-columns alignwide are-vertically-aligned-center">
		<!-- jk:column {"verticalAlignment":"center"} -->
		<div class="jk-block-column is-vertically-aligned-center">
			<!-- jk:image {"scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":{"topLeft":"150px","bottomRight":"150px"}}}} -->
			<figure class="jk-block-image aligncenter size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/woman-splashing-water.webp" alt="<?php esc_attr_e( 'Woman on beach, splashing water.', 'twentytwentyfive' ); ?>" style="border-top-left-radius:150px;border-bottom-right-radius:150px;object-fit:cover"/></figure>
			<!-- /jk:image -->
		</div>
		<!-- /jk:column -->

		<!-- jk:column {"verticalAlignment":"center"} -->
		<div class="jk-block-column is-vertically-aligned-center">
			<!-- jk:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
			<div class="jk-block-group">
				<!-- jk:heading {"textAlign":"left"} -->
				<h2 class="jk-block-heading has-text-align-left"><?php esc_html_e( 'Nora Winslow Keene', 'twentytwentyfive' ); ?></h2>
				<!-- /jk:heading -->

				<!-- jk:paragraph -->
				<p><?php echo esc_html_x( 'I’m Nora, a dedicated public interest attorney based in Denver. I’m a graduate of Stanford University.', 'Pattern placeholder text.', 'twentytwentyfive' ); ?></p>
				<!-- /jk:paragraph -->

				<!-- jk:social-links {"iconColor":"currentColor","iconColorValue":"currentColor","className":"is-style-logos-only"} -->
				<ul class="jk-block-social-links has-icon-color is-style-logos-only">
					<!-- jk:social-link {"url":"#","service":"x"} /-->

					<!-- jk:social-link {"url":"#","service":"instagram"} /-->

					<!-- jk:social-link {"url":"#","service":"whatsapp"} /-->
				</ul>
				<!-- /jk:social-links -->
			</div>
			<!-- /jk:group -->
		</div>
		<!-- /jk:column -->
	</div>
	<!-- /jk:columns -->
</div>
<!-- /jk:group -->
