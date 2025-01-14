<?php
/**
 * Title: Blogging index template
 * Slug: twentytwentyfour/template-index-blogging
 * Template Types: index, home
 * Viewport width: 1400
 * Inserter: no
 */
?>

<!-- jk:template-part {"slug":"header","area":"header","tagName":"header"} /-->

<!-- jk:group {"tagName":"main","style":{"spacing":{"blockGap":"0","margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<main class="jk-block-group" style="margin-top:0">
	<!-- jk:heading {"level":1,"style":{"typography":{"lineHeight":"1"},"spacing":{"padding":{"top":"var:preset|spacing|50"}}}} -->
	<h1 class="jk-block-heading" style="padding-top:var(--jk--preset--spacing--50);line-height:1"><?php esc_html_e( 'Watch, Read, Listen', 'twentytwentyfour' ); ?></h1>
	<!-- /jk:heading -->

	<!-- jk:pattern {"slug":"twentytwentyfour/posts-1-col"} /-->
</main>
<!-- /jk:group -->

<!-- jk:template-part {"slug":"footer","area":"footer","tagName":"footer"} /-->
