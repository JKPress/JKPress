<?php
/**
 * Header with centered logo and black background
 */
return array(
	'title'      => __( 'Header with centered logo and background', 'twentytwentytwo' ),
	'categories' => array( 'header' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- jk:group {"align":"full","style":{"spacing":{"padding":{"bottom":"var(--jk--custom--spacing--small, 1.25rem)","top":"var(--jk--custom--spacing--small, 1.25rem)"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"backgroundColor":"foreground","textColor":"background","layout":{"type":"flex","justifyContent":"center"}} -->
					<div class="jk-block-group alignfull has-background-color has-foreground-background-color has-text-color has-background has-link-color" style="padding-top:var(--jk--custom--spacing--small, 1.25rem);padding-bottom:var(--jk--custom--spacing--small, 1.25rem)"><!-- jk:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"}} -->
					<!-- jk:navigation-link {"isTopLevelLink":true} /-->

					<!-- jk:navigation-link {"isTopLevelLink":true} /-->

					<!-- jk:site-logo {"width":90} /-->

					<!-- jk:navigation-link {"isTopLevelLink":true} /-->

					<!-- jk:navigation-link {"isTopLevelLink":true} /-->
					<!-- /jk:navigation --></div>
					<!-- /jk:group -->',
);
