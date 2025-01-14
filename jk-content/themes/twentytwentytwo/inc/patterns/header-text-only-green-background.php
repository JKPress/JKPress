<?php
/**
 * Text-only header with green background block pattern
 */
return array(
	'title'      => __( 'Text-only header with background', 'twentytwentytwo' ),
	'categories' => array( 'header' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- jk:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"padding":{"top":"var(--jk--custom--spacing--small, 1.25rem)","bottom":"var(--jk--custom--spacing--small, 1.25rem)"}}},"backgroundColor":"primary","textColor":"background","layout":{"inherit":true}} -->
					<div class="jk-block-group alignfull has-background-color has-primary-background-color has-text-color has-background has-link-color" style="padding-top:var(--jk--custom--spacing--small, 1.25rem);padding-bottom:var(--jk--custom--spacing--small, 1.25rem)"><!-- jk:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
					<div class="jk-block-group alignwide"><!-- jk:group -->
					<div class="jk-block-group"><!-- jk:site-title {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"typography":{"fontStyle":"normal","fontWeight":"700"}}} /-->

					<!-- jk:site-tagline {"style":{"spacing":{"margin":{"top":"0.25em","bottom":"0px"}},"typography":{"fontStyle":"italic","fontWeight":"400"}},"fontSize":"small"} /--></div>
					<!-- /jk:group -->

					<!-- jk:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"}} -->
					<!-- jk:page-list /-->
					<!-- /jk:navigation --></div>
					<!-- /jk:group --></div>
					<!-- /jk:group -->',
);
