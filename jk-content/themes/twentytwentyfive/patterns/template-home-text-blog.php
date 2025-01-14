<?php
/**
 * Title: Text-only blog, home
 * Slug: twentytwentyfive/template-home-text-blog
 * Template Types: front-page, home
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
	<!-- jk:heading {"level":1,"align":"wide","fontSize":"x-large"} -->
	<h1 class="jk-block-heading alignwide has-x-large-font-size"><?php esc_html_e( 'Blog', 'twentytwentyfive' ); ?></h1>
	<!-- /jk:heading -->
	<!-- jk:spacer {"height":"var:preset|spacing|50"} -->
	<div style="height:var(--jk--preset--spacing--50)" aria-hidden="true" class="jk-block-spacer"></div>
	<!-- /jk:spacer -->
	<!-- jk:pattern {"slug":"twentytwentyfive/template-query-loop-text-blog"} /-->
</main>
<!-- /jk:group -->

<!-- jk:template-part {"slug":"footer"} /-->
