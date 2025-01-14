<?php
/**
 * Title: Photo blog archive
 * Slug: twentytwentyfive/template-archive-photo-blog
 * Template Types: archive
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
	<!-- jk:query-title {"type":"archive","textAlign":"center"} /-->
	<!-- jk:term-description {"textAlign":"center"} /-->
	<!-- jk:pattern {"slug":"twentytwentyfive/template-query-loop-photo-blog"} /-->
</main>
<!-- /jk:group -->

<!-- jk:template-part {"slug":"footer"} /-->
