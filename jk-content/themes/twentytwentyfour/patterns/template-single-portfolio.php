<?php
/**
 * Title: Portfolio single post template
 * Slug: twentytwentyfour/template-single-portfolio
 * Template Types: posts, single
 * Viewport width: 1400
 * Inserter: no
 */
?>

<!-- jk:template-part {"slug":"header","area":"header","tagName":"header"} /-->

<!-- jk:group {"tagName":"main","align":"full","layout":{"type":"constrained"}} -->
<main class="jk-block-group alignfull">
	<!-- jk:spacer {"height":"var:preset|spacing|40"} -->
	<div style="height:var(--jk--preset--spacing--40)" aria-hidden="true" class="jk-block-spacer">
	</div>
	<!-- /jk:spacer -->

	<!-- jk:post-featured-image {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} /-->

	<!-- jk:group {"align":"wide","layout":{"type":"constrained","justifyContent":"left"}} -->
	<div class="jk-block-group alignwide">
		<!-- jk:template-part {"slug":"post-meta"} /-->
	</div>
	<!-- /jk:group -->

	<!-- jk:spacer {"height":"var:preset|spacing|40"} -->
	<div style="height:var(--jk--preset--spacing--40)" aria-hidden="true" class="jk-block-spacer">
	</div>
	<!-- /jk:spacer -->

</main>
<!-- /jk:group -->

<!-- jk:template-part {"slug":"footer","area":"footer","tagName":"footer"} /-->
