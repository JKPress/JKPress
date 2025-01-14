<?php
/**
 * Title: Text-only blog, search
 * Slug: twentytwentyfive/template-search-text-blog
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
	<!-- jk:group {"align":"wide","layout":{"type":"default"}} -->
	<div class="jk-block-group alignwide">
		<!-- jk:query-title {"type":"search","align":"wide","fontSize":"x-large"} /-->
		<!-- jk:pattern {"slug":"twentytwentyfive/hidden-search"} /-->
	</div>
	<!-- /jk:group -->
	<!-- jk:spacer {"height":"var:preset|spacing|50"} -->
	<div style="height:var(--jk--preset--spacing--50)" aria-hidden="true" class="jk-block-spacer"></div>
	<!-- /jk:spacer -->
	<!-- jk:pattern {"slug":"twentytwentyfive/template-query-loop-text-blog"} /-->
</main>
<!-- /jk:group -->

<!-- jk:template-part {"slug":"footer"} /-->
