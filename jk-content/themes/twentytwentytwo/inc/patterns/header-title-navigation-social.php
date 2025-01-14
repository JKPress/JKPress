<?php
/**
 * Title, navigation, and social links header block pattern
 */
return array(
	'title'      => __( 'Title, navigation, and social links header', 'twentytwentytwo' ),
	'categories' => array( 'header' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- jk:group {"align":"full","layout":{"inherit":true}} -->
					<div class="jk-block-group alignfull"><!-- jk:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"var(--jk--custom--spacing--large, 8rem)","top":"var(--jk--custom--spacing--small, 1.25rem)"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
					<div class="jk-block-group alignwide" style="padding-top:var(--jk--custom--spacing--small, 1.25rem);padding-bottom:var(--jk--custom--spacing--large, 8rem)"><!-- jk:site-title {"style":{"typography":{"fontStyle":"italic","fontWeight":"400"}}} /-->

					<!-- jk:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"}} -->
					<!-- jk:page-list {"isNavigationChild":true,"showSubmenuIcon":true,"openSubmenusOnClick":false} /-->

					<!-- jk:social-links {"iconColor":"foreground","iconColorValue":"var(--jk--preset--color--foreground)","className":"is-style-logos-only"} -->
					<ul class="jk-block-social-links has-icon-color is-style-logos-only"><!-- jk:social-link {"url":"#","service":"instagram"} /-->

					<!-- jk:social-link {"url":"#","service":"twitter"} /--></ul>
					<!-- /jk:social-links -->
					<!-- /jk:navigation --></div>
					<!-- /jk:group --></div>
					<!-- /jk:group -->',
);
