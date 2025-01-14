<?php
/**
 * Title: Vertical header
 * Slug: twentytwentyfive/vertical-header
 * Categories: header
 * Block Types: core/template-part/vertical-header
 * Description: Vertical Header with site title and navigation
 * Viewport width: 300
 *
 * @package JKPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- jk:group {"align":"wide","style":{"position":{"type":"sticky","top":"0px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
<div class="jk-block-group alignwide" style="padding-top:var(--jk--preset--spacing--40);padding-bottom:var(--jk--preset--spacing--40)">
	<!-- jk:group {"align":"wide","style":{"dimensions":{"minHeight":"100vh"}},"layout":{"type":"constrained","justifyContent":"center"}} -->
	<div class="jk-block-group alignwide" style="min-height:100vh;">
		<!-- jk:group {"align":"full","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
		<div class="jk-block-group alignfull">
			<!-- jk:navigation {"overlayBackgroundColor":"base","overlayTextColor":"contrast","overlayMenu":"always","style":{"spacing":{"margin":{"top":"0"},"blockGap":"var:preset|spacing|20"},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","justifyContent":"right","orientation":"horizontal","flexWrap":"wrap"}} /-->
			<!-- jk:site-title {"level":0,"style":{"typography":{"writingMode":"vertical-rl"}},"fontSize":"large"} /-->
		</div>
		<!-- /jk:group -->
	</div>
	<!-- /jk:group -->
</div>
<!-- /jk:group -->
