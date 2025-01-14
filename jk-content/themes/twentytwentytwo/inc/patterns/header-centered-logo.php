<?php
/**
 * Header with centered logo block pattern
 */
return array(
	'title'      => __( 'Header with centered logo', 'twentytwentytwo' ),
	'categories' => array( 'header' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- jk:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"padding":{"top":"var(--jk--custom--spacing--small, 1.25rem)","bottom":"var(--jk--custom--spacing--small, 1.25rem)"}}},"backgroundColor":"primary","textColor":"background","layout":{"inherit":true}} -->
					<div class="jk-block-group alignfull has-background-color has-primary-background-color has-text-color has-background has-link-color" style="padding-top:var(--jk--custom--spacing--small, 1.25rem);padding-bottom:var(--jk--custom--spacing--small, 1.25rem);"><!-- jk:columns {"verticalAlignment":"center","align":"wide"} -->
					<div class="jk-block-columns alignwide are-vertically-aligned-center"><!-- jk:column {"verticalAlignment":"center"} -->
					<div class="jk-block-column is-vertically-aligned-center"><!-- jk:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase"}}} /--></div>
					<!-- /jk:column -->

					<!-- jk:column {"width":"64px"} -->
					<div class="jk-block-column" style="flex-basis:64px"><!-- jk:site-logo {"width":64} /--></div>
					<!-- /jk:column -->

					<!-- jk:column {"verticalAlignment":"center"} -->
					<div class="jk-block-column is-vertically-aligned-center"><!-- jk:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"}} -->
					<!-- jk:page-list {"isNavigationChild":true,"showSubmenuIcon":true,"openSubmenusOnClick":false} /-->
					<!-- /jk:navigation --></div>
					<!-- /jk:column --></div>
					<!-- /jk:columns --></div>
					<!-- /jk:group -->',
);
