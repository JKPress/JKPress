<?php
/**
 * Logo, navigation, and offset tagline Header block pattern
 */
return array(
	'title'      => __( 'Logo, navigation, and offset tagline Header', 'twentytwentytwo' ),
	'categories' => array( 'header' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- jk:group {"align":"full","layout":{"inherit":true}} -->
					<div class="jk-block-group alignfull"><!-- jk:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"var(--jk--custom--spacing--large, 8rem)"}}}} -->
					<div class="jk-block-group alignwide" style="padding-bottom:var(--jk--custom--spacing--large, 8rem)"><!-- jk:group {"align":"wide","style":{"spacing":{"padding":{"top":"var(--jk--custom--spacing--small, 1.25rem)"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
					<div class="jk-block-group alignwide" style="padding-top:var(--jk--custom--spacing--small, 1.25rem)"><!-- jk:site-logo {"width":64} /-->

					<!-- jk:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"}} -->
					<!-- jk:page-list {"isNavigationChild":true,"showSubmenuIcon":true,"openSubmenusOnClick":false} /-->
					<!-- /jk:navigation --></div>
					<!-- /jk:group -->

					<!-- jk:columns {"isStackedOnMobile":false,"align":"wide"} -->
					<div class="jk-block-columns alignwide is-not-stacked-on-mobile"><!-- jk:column {"width":"64px"} -->
					<div class="jk-block-column" style="flex-basis:64px"></div>
					<!-- /jk:column -->

					<!-- jk:column {"width":"380px"} -->
					<div class="jk-block-column" style="flex-basis:380px"><!-- jk:site-tagline {"fontSize":"small"} /--></div>
					<!-- /jk:column --></div>
					<!-- /jk:columns --></div>
					<!-- /jk:group --></div>
					<!-- /jk:group -->',
);
