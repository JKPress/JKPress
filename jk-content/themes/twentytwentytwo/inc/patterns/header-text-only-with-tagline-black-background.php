<?php
/**
 * Text-only header with tagline and black background block pattern
 */
return array(
	'title'      => __( 'Text-only header with tagline and background', 'twentytwentytwo' ),
	'categories' => array( 'header' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- jk:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"spacing":{"padding":{"top":"var(--jk--custom--spacing--small, 1.25rem)","bottom":"var(--jk--custom--spacing--small, 1.25rem)"}}},"backgroundColor":"foreground","textColor":"secondary","layout":{"inherit":true}} -->
					<div class="jk-block-group alignfull has-secondary-color has-foreground-background-color has-text-color has-background has-link-color" style="padding-top:var(--jk--custom--spacing--small, 1.25rem);padding-bottom:var(--jk--custom--spacing--small, 1.25rem)"><!-- jk:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"0rem","top":"0px","right":"0px","left":"0px"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
					<div class="jk-block-group alignwide" style="padding-top:0px;padding-right:0px;padding-bottom:0rem;padding-left:0px"><!-- jk:group {"layout":{"type":"flex","justifyContent":"left"}} -->
					<div class="jk-block-group"><!-- jk:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} /-->

					<!-- jk:site-tagline {"style":{"typography":{"fontStyle":"italic","fontWeight":"400"}},"fontSize":"small"} /--></div>
					<!-- /jk:group -->

					<!-- jk:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"}} -->
					<!-- jk:page-list /-->
					<!-- /jk:navigation --></div>
					<!-- /jk:group --></div>
					<!-- /jk:group -->',
);
