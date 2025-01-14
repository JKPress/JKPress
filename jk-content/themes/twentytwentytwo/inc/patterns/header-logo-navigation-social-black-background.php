<?php
/**
 * Logo, navigation, and social links header with black background block pattern
 */
return array(
	'title'      => __( 'Logo, navigation, and social links header with background', 'twentytwentytwo' ),
	'categories' => array( 'header' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- jk:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"padding":{"top":"var(--jk--custom--spacing--small, 1.25rem)","bottom":"var(--jk--custom--spacing--small, 1.25rem)"}}},"backgroundColor":"foreground","textColor":"background","layout":{"inherit":true}} -->
					<div class="jk-block-group alignfull has-background-color has-foreground-background-color has-text-color has-background has-link-color" style="padding-top:var(--jk--custom--spacing--small, 1.25rem);padding-bottom:var(--jk--custom--spacing--small, 1.25rem)"><!-- jk:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"0rem","top":"0px","right":"0px","left":"0px"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
					<div class="jk-block-group alignwide" style="padding-top:0px;padding-right:0px;padding-bottom:0rem;padding-left:0px"><!-- jk:site-logo {"width":64} /-->

					<!-- jk:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"}} -->
					<!-- jk:page-list {"isNavigationChild":true,"showSubmenuIcon":true,"openSubmenusOnClick":false} /-->

					<!-- jk:social-links {"iconColor":"background","iconColorValue":"var(--jk--preset--color--background)","className":"is-style-logos-only"} -->
					<ul class="jk-block-social-links has-icon-color is-style-logos-only"><!-- jk:social-link {"url":"#","service":"instagram"} /-->

					<!-- jk:social-link {"url":"#","service":"twitter"} /--></ul>
					<!-- /jk:social-links -->
					<!-- /jk:navigation --></div>
					<!-- /jk:group --></div>
					<!-- /jk:group -->',
);
