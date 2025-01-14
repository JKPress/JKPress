<?php
/**
 * Small header with dark background block pattern
 */
return array(
	'title'      => __( 'Small header with dark background', 'twentytwentytwo' ),
	'categories' => array( 'header' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- jk:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"padding":{"top":"0px","bottom":"0px"}}},"backgroundColor":"foreground","textColor":"background","layout":{"inherit":true}} -->
					<div class="jk-block-group alignfull has-background-color has-foreground-background-color has-text-color has-background has-link-color" style="padding-top:0px;padding-bottom:0px;"><!-- jk:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","bottom":"0px"}}},"layout":{"inherit":true}} -->
					<div class="jk-block-group alignfull" style="padding-top:0px;padding-bottom:0px;"><!-- jk:group {"align":"wide","style":{"spacing":{"padding":{"top":"var(--jk--custom--spacing--small, 1.25rem)","bottom":"var(--jk--custom--spacing--large, 8rem)"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
					<div class="jk-block-group alignwide" style="padding-top:var(--jk--custom--spacing--small, 1.25rem);padding-bottom:var(--jk--custom--spacing--large, 8rem)"><!-- jk:group {"layout":{"type":"flex"}} -->
					<div class="jk-block-group"><!-- jk:site-logo {"width":64} /-->

					<!-- jk:site-title {"style":{"typography":{"fontStyle":"italic","fontWeight":"400"}}} /--></div>
					<!-- /jk:group -->

					<!-- jk:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"}} -->
					<!-- jk:page-list /-->
					<!-- /jk:navigation --></div>
					<!-- /jk:group --></div>
					<!-- /jk:group -->

					<!-- jk:image {"align":"wide","width":2000,"height":474,"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="jk-block-image alignwide size-full is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/flight-path-on-transparent-d.png" alt="' . esc_attr__( 'Illustration of a bird flying.', 'twentytwentytwo' ) . '" width="2000" height="474"/></figure>
					<!-- /jk:image --></div>
					<!-- /jk:group -->
					<!-- jk:spacer {"height":66} -->
					<div style="height:66px" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer -->',
);
