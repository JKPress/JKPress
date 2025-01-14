<?php
/**
 * Title: Heading and search form
 * Slug: twentytwentyfive/cta-heading-search
 * Categories: call-to-action
 * Description: Large heading with a search form for quick navigation.
 *
 * @package JKPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- jk:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="jk-block-group alignwide" style="padding-top:var(--jk--preset--spacing--80);padding-bottom:var(--jk--preset--spacing--80)"><!-- jk:group {"align":"wide","layout":{"type":"default"}} -->
	<div class="jk-block-group alignwide">
		<!-- jk:heading {"fontSize":"xx-large"} -->
		<h2 class="jk-block-heading has-xx-large-font-size"><?php esc_html_e( 'What are you looking for?', 'twentytwentyfive' ); ?></h2>
		<!-- /jk:heading -->

		<!-- jk:search {"label":"<?php echo esc_html_x( 'Search', 'Search form label.', 'twentytwentyfive' ); ?>","showLabel":false,"placeholder":"<?php echo esc_attr_x( 'Type here...', 'Search input field placeholder text.', 'twentytwentyfive' ); ?>","buttonText":"<?php echo esc_attr_x( 'Search', 'Button text. Verb.', 'twentytwentyfive' ); ?>"} /-->
	</div>
	<!-- /jk:group -->
</div>
<!-- /jk:group -->
