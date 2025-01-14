<?php
/**
 * Title: Intro with left-aligned description
 * Slug: twentytwentyfive/banner-intro
 * Categories: banner
 * Description: A large left-aligned heading with a brand name emphasized in bold.
 *
 * @package JKPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- jk:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="jk-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--jk--preset--spacing--80);padding-bottom:var(--jk--preset--spacing--80)">
	<!-- jk:heading {"align":"wide","fontSize":"x-large"} -->
	<h2 class="jk-block-heading alignwide has-x-large-font-size">
		<?php
			printf(
				/* translators: %s is the brand name, e.g., 'Fleurs'. */
				esc_html_x( 'We\'re %s, our mission is to deliver exquisite flower arrangements that not only adorn living spaces but also inspire a deeper appreciation for natural beauty.', 'Pattern placeholder text.', 'twentytwentyfive' ),
				'<strong>' . esc_html_x( 'Fleurs', 'Example brand name.', 'twentytwentyfive' ) . '</strong>'
			);
			?>
	</h2>
	<!-- /jk:heading -->
</div>
<!-- /jk:group -->
