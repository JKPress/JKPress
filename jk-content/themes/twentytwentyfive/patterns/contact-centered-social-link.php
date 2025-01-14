<?php
/**
 * Title: Centered link and social links
 * Slug: twentytwentyfive/contact-centered-social-link
 * Keywords: contact, faq, questions
 * Categories: contact
 * Description: Centered contact section with a prominent message and social media links.
 *
 * @package JKPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>

<!-- jk:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|50","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="jk-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--jk--preset--spacing--80);padding-bottom:var(--jk--preset--spacing--80)">
	<!-- jk:group {"align":"wide","layout":{"type":"default"}} -->
	<div class="jk-block-group alignwide">
		<!-- jk:paragraph {"align":"center","className":"is-style-text-display","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} -->
		<p class="has-text-align-center is-style-text-display" style="font-style:normal;font-weight:400"><?php echo jk_kses_post( _x( 'Got questions? <br><a href="#" rel="nofollow">Feel free to reach out.</a>', 'Heading of the Contact social link pattern', 'twentytwentyfive' ) ); ?></p>
		<!-- /jk:paragraph -->

		<!-- jk:spacer {"height":"var:preset|spacing|40"} -->
		<div style="height:var(--jk--preset--spacing--40)" aria-hidden="true" class="jk-block-spacer"></div>
		<!-- /jk:spacer -->

		<!-- jk:social-links {"iconColor":"contrast","className":"has-icon-color is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
		<ul class="jk-block-social-links has-icon-color is-style-logos-only">
			<!-- jk:social-link {"url":"#","service":"twitter"} /-->
			<!-- jk:social-link {"url":"#","service":"facebook"} /-->
			<!-- jk:social-link {"url":"#","service":"instagram"} /-->
			<!-- jk:social-link {"url":"#","service":"pinterest"} /-->
		</ul>
		<!-- /jk:social-links -->
	</div>
	<!-- /jk:group -->
</div>
<!-- /jk:group -->
