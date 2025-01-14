<?php
/**
 * Title: News blog search results
 * Slug: twentytwentyfive/template-search-news-blog
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

<!-- jk:group {"tagName":"main","layout":{"type":"constrained"}} -->
<main class="jk-block-group">
	<!-- jk:group {"align":"wide","layout":{"type":"default"}} -->
	<div class="jk-block-group alignwide">
		<!-- jk:spacer {"height":"var:preset|spacing|80"} -->
		<div style="height:var(--jk--preset--spacing--80)" aria-hidden="true" class="jk-block-spacer"></div>
		<!-- /jk:spacer -->
		<!-- jk:query-title {"type":"search"} /-->
		<!-- jk:pattern {"slug":"twentytwentyfive/hidden-search"} /-->
		<!-- jk:spacer {"height":"var:preset|spacing|40"} -->
		<div style="height:var(--jk--preset--spacing--40)" aria-hidden="true" class="jk-block-spacer"></div>
		<!-- /jk:spacer -->
	</div>
	<!-- /jk:group -->
	<!-- jk:group {"align":"wide","layout":{"type":"default"}} -->
	<div class="jk-block-group alignwide">
		<!-- jk:pattern {"slug":"twentytwentyfive/template-query-loop-news-blog"} /-->
	</div>
	<!-- /jk:group -->
</main>
<!-- /jk:group -->

<!-- jk:template-part {"slug":"footer-newsletter"} /-->