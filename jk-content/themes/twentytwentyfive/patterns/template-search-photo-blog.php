<?php
/**
 * Title: Photo blog search results
 * Slug: twentytwentyfive/template-search-photo-blog
 * Template Types: search
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
	<!-- jk:query-title {"type":"search","textAlign":"center","align":"wide"} /-->
	<!-- jk:group {"align":"wide","layout":{"type":"default"}} -->
	<div class="jk-block-group alignwide">
		<!-- jk:pattern {"slug":"twentytwentyfive/hidden-search"} /-->
	</div>
	<!-- /jk:group -->
	<!-- jk:pattern {"slug":"twentytwentyfive/template-query-loop-photo-blog"} /-->
</main>
<!-- /jk:group -->

<!-- jk:template-part {"slug":"footer"} /-->
