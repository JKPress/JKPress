<?php
/**
 * Title: Centered header
 * Slug: twentytwentyfive/header-centered
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Header with centered site title and navigation.
 *
 * @package JKPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- jk:group {"layout":{"type":"constrained"}} -->
<div class="jk-block-group">
	<!-- jk:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
	<div class="jk-block-group alignwide" style="padding-top:var(--jk--preset--spacing--60);padding-bottom:var(--jk--preset--spacing--30)">
		<!-- jk:site-title {"level":0,"textAlign":"center","align":"wide","fontSize":"x-large"} /-->
		<!-- jk:group {"align":"wide","layout":{"type":"constrained"}} -->
		<div class="jk-block-group alignwide">
			<!-- jk:navigation {"overlayBackgroundColor":"base","overlayTextColor":"contrast","layout":{"type":"flex","justifyContent":"center"}} /-->
		</div>
		<!-- /jk:group -->
	</div>
	<!-- /jk:group -->
</div>
<!-- /jk:group -->
