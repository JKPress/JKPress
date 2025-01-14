<?php
/**
 * Title: Banner with book description
 * Slug: twentytwentyfive/banner-about-book
 * Categories: banner
 * Description: Banner with book description and accompanying image for promotion.
 *
 * @package JKPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>

<!-- jk:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="jk-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--jk--preset--spacing--50);padding-bottom:var(--jk--preset--spacing--50)">
	<!-- jk:columns {"verticalAlignment":null,"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|70"}}}} -->
	<div class="jk-block-columns alignwide">
		<!-- jk:column {"verticalAlignment":"center","width":""} -->
		<div class="jk-block-column is-vertically-aligned-center">
			<!-- jk:heading {"className":"jk-block-heading","fontSize":"xx-large"} -->
			<h2 class="jk-block-heading has-xx-large-font-size"><?php esc_html_e( 'About the book', 'twentytwentyfive' ); ?></h2>
			<!-- /jk:heading -->

			<!-- jk:paragraph {"fontSize":"medium"} -->
			<p class="has-medium-font-size"><?php echo esc_html_x( 'This exquisite compilation showcases a diverse array of photographs that capture the essence of different eras and cultures, reflecting the unique styles and perspectives of each artist. Fleckenstein’s evocative imagery, Strand’s groundbreaking modernist approach, and Kōno’s meticulous documentation of Japanese life come together in a harmonious blend that celebrates the art of photography. Each image in “The Stories Book” is accompanied by insightful commentary, providing historical context and revealing the stories behind the photographs. This collection is not only a visual feast but also a tribute to the power of photography to preserve and narrate the multifaceted experiences of humanity.', 'Pattern placeholder text.', 'twentytwentyfive' ); ?></p>
			<!-- /jk:paragraph -->
		</div>
		<!-- /jk:column -->

		<!-- jk:column {"verticalAlignment":"center","width":"","layout":{"type":"default"}} -->
		<div class="jk-block-column is-vertically-aligned-center">
			<!-- jk:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="jk-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/book-image-landing.webp" alt="<?php esc_attr_e( 'Image of a book', 'twentytwentyfive' ); ?>" style="aspect-ratio:1;object-fit:cover"/></figure>
			<!-- /jk:image -->
		</div>
		<!-- /jk:column -->
	</div>
	<!-- /jk:columns -->
</div>
<!-- /jk:group -->
