<?php
/**
 * Logo and navigation header block pattern
 */
return array(
	'title'      => __( 'Logo and navigation header', 'twentytwentytwo' ),
	'categories' => array( 'header' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- jk:group {"align":"full","layout":{"inherit":true}} -->
					<div class="jk-block-group alignfull"><!-- jk:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"var(--jk--custom--spacing--large, 8rem)","top":"var(--jk--custom--spacing--small, 1.25rem)"}}}} -->
					<div class="jk-block-group alignwide" style="padding-top:var(--jk--custom--spacing--small, 1.25rem);padding-bottom:var(--jk--custom--spacing--large, 8rem)"><!-- jk:site-logo {"align":"center","width":128} /-->

					<!-- jk:spacer {"height":10} -->
					<div style="height:10px" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer -->

					<!-- jk:site-title {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase"}}} /-->

					<!-- jk:spacer {"height":10} -->
					<div style="height:10px" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer -->

					<!-- jk:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"center"}} -->
					<!-- jk:page-list {"isNavigationChild":true,"showSubmenuIcon":true,"openSubmenusOnClick":false} /-->
					<!-- /jk:navigation --></div>
					<!-- /jk:group --></div>
					<!-- /jk:group -->',
);
