<?php
/**
 * Footer with title, tagline, and social links on a dark background
 */
return array(
	'title'      => __( 'Footer with title, tagline, and social links on a dark background', 'twentytwentytwo' ),
	'categories' => array( 'footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- jk:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"backgroundColor":"foreground","textColor":"background","layout":{"inherit":true}} -->
					<div class="jk-block-group alignfull has-background-color has-foreground-background-color has-text-color has-background has-link-color"><!-- jk:group {"align":"wide","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
					<div class="jk-block-group alignwide" style="padding-top:4rem;padding-bottom:4rem"><!-- jk:group -->
					<div class="jk-block-group"><!-- jk:site-title {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"typography":{"textTransform":"uppercase"}}} /-->

					<!-- jk:site-tagline {"style":{"spacing":{"margin":{"top":"0.25em","bottom":"0px"}},"typography":{"fontStyle":"italic","fontWeight":"400"}},"fontSize":"small"} /--></div>
					<!-- /jk:group -->

					<!-- jk:social-links {"iconBackgroundColor":"foreground","iconBackgroundColorValue":"var(--jk--preset--color--foreground)","layout":{"type":"flex","justifyContent":"right"}} -->
					<ul class="jk-block-social-links has-icon-background-color"><!-- jk:social-link {"url":"#","service":"facebook"} /-->

					<!-- jk:social-link {"url":"#","service":"twitter"} /-->

					<!-- jk:social-link {"url":"#","service":"instagram"} /--></ul>
					<!-- /jk:social-links --></div>
					<!-- /jk:group --></div>
					<!-- /jk:group -->',
);
