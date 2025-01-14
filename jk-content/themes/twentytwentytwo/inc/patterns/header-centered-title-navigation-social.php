<?php
/**
 * Centered header with navigation, social links, and salmon background block pattern
 */
return array(
	'title'      => __( 'Centered header with navigation, social links, and background', 'twentytwentytwo' ),
	'categories' => array( 'header' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- jk:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"padding":{"top":"var(--jk--custom--spacing--small, 1.25rem)","bottom":"var(--jk--custom--spacing--small, 1.25rem)"}}},"backgroundColor":"secondary","textColor":"primary","layout":{"inherit":true}} -->
					<div class="jk-block-group alignfull has-primary-color has-secondary-background-color has-text-color has-background has-link-color" style="padding-top:var(--jk--custom--spacing--small, 1.25rem);padding-bottom:var(--jk--custom--spacing--small, 1.25rem);"><!-- jk:columns {"verticalAlignment":"center","align":"wide"} -->
					<div class="jk-block-columns alignwide are-vertically-aligned-center"><!-- jk:column {"verticalAlignment":"center"} -->
					<div class="jk-block-column is-vertically-aligned-center"><!-- jk:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"left"}} -->
					<!-- jk:page-list /-->
					<!-- /jk:navigation --></div>
					<!-- /jk:column -->

					<!-- jk:column {"width":""} -->
					<div class="jk-block-column"><!-- jk:site-title {"textAlign":"center","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}}} /--></div>
					<!-- /jk:column -->

					<!-- jk:column {"verticalAlignment":"center"} -->
					<div class="jk-block-column is-vertically-aligned-center"><!-- jk:social-links {"iconColor":"primary","iconColorValue":"var(--jk--custom--color--primary)","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"right"}} -->
					<ul class="jk-block-social-links has-icon-color is-style-logos-only"><!-- jk:social-link {"url":"#","service":"twitter"} /-->

					<!-- jk:social-link {"url":"#","service":"instagram"} /--></ul>
					<!-- /jk:social-links --></div>
					<!-- /jk:column --></div>
					<!-- /jk:columns --></div>
					<!-- /jk:group -->',
);
