<?php
/**
 * Title: Header with columns
 * Slug: twentytwentyfive/header-columns
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Header with site title and navigation in columns.
 *
 * @package JKPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- jk:group {"layout":{"type":"constrained"}} -->
<div class="jk-block-group">
	<!-- jk:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|60"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
	<div class="jk-block-group alignwide" style="padding-top:var(--jk--preset--spacing--40);padding-bottom:var(--jk--preset--spacing--60)">
		<!-- jk:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained"}} -->
		<div class="jk-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
			<!-- jk:site-title {"level":0} /-->
			<!-- jk:site-tagline /-->
		</div>
		<!-- /jk:group -->
		<!-- jk:group {"layout":{"type":"constrained","justifyContent":"left"}} -->
		<div class="jk-block-group">
			<!-- jk:navigation {"overlayBackgroundColor":"base","overlayTextColor":"contrast","layout":{"type":"flex","orientation":"vertical"}} /-->
		</div>
		<!-- /jk:group -->
		<!-- jk:site-logo /-->
	</div>
	<!-- /jk:group -->
</div>
<!-- /jk:group -->
