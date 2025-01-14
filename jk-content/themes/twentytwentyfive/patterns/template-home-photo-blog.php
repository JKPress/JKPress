<?php
/**
 * Title: Photo blog home
 * Slug: twentytwentyfive/template-home-photo-blog
 * Template Types: front-page, index, home
 * Viewport width: 1400
 * Inserter: no
 *
 * @package JKPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- jk:template-part {"slug":"header"} /-->

<!-- jk:group {"tagName":"main","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<main class="jk-block-group" style="margin-top:var(--jk--preset--spacing--60)">
	<!-- jk:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
	<div class="jk-block-group">
		<!-- jk:heading {"textAlign":"center","level":1,"className":"is-style-text-annotation"} -->
		<h1 class="jk-block-heading has-text-align-center is-style-text-annotation"><?php esc_html_e( 'Stories', 'twentytwentyfive' ); ?></h1>
		<!-- /jk:heading -->
	</div>
	<!-- /jk:group -->
	<!-- jk:heading {"textAlign":"center","align":"wide","fontSize":"xx-large"} -->
	<h2 class="jk-block-heading alignwide has-text-align-center has-xx-large-font-size"><?php esc_html_e( 'Tell your story', 'twentytwentyfive' ); ?></h2>
	<!-- /jk:heading -->
	<!-- jk:pattern {"slug":"twentytwentyfive/template-query-loop-photo-blog"} /-->
</main>
<!-- /jk:group -->

<!-- jk:template-part {"slug":"footer"} /-->
