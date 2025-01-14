<?php
/**
 * Title: Portfolio index template
 * Slug: twentytwentyfour/template-index-portfolio
 * Template Types: index
 * Viewport width: 1400
 * Inserter: no
 */
?>

<!-- jk:template-part {"slug":"header","area":"header","tagName":"header"} /-->

<!-- jk:group {"tagName":"main","align":"full","layout":{"type":"constrained"}} -->
<main class="jk-block-group alignfull">
	<!-- jk:heading {"level":1,"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50"}}}} -->
	<h1 class="jk-block-heading alignwide" style="padding-top:var(--jk--preset--spacing--50)"><?php esc_html_e( 'Posts', 'twentytwentyfour' ); ?></h1>
	<!-- /jk:heading -->

	<!-- jk:pattern {"slug":"twentytwentyfour/posts-images-only-offset-4-col"} /-->

</main>
<!-- /jk:group -->

<!-- jk:template-part {"slug":"footer","area":"footer","tagName":"footer"} /-->
