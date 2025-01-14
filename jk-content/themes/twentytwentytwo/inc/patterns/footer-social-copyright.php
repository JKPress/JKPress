<?php
/**
 * Footer with social links and copyright
 */
return array(
	'title'      => __( 'Footer with social links and copyright', 'twentytwentytwo' ),
	'categories' => array( 'footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- jk:group {"align":"full","layout":{"inherit":true}} -->
					<div class="jk-block-group alignfull"><!-- jk:group {"align":"wide","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}}}} -->
					<div class="jk-block-group alignwide" style="padding-top:4rem;padding-bottom:4rem"><!-- jk:social-links {"iconColor":"foreground","iconColorValue":"var(--jk--preset--color--foreground)","iconBackgroundColor":"background","iconBackgroundColorValue":"var(--jk--preset--color--background)","layout":{"type":"flex","justifyContent":"center"}} -->
					<ul class="jk-block-social-links has-icon-color has-icon-background-color"><!-- jk:social-link {"url":"#","service":"facebook"} /-->

					<!-- jk:social-link {"url":"#","service":"twitter"} /-->

					<!-- jk:social-link {"url":"#","service":"instagram"} /--></ul>
					<!-- /jk:social-links -->

					<!-- jk:spacer {"height":50} -->
					<div style="height:50px" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer -->

					<!-- jk:paragraph {"align":"center","style":{"typography":{"fontSize":"16px"}}} -->
					<p class="has-text-align-center" style="font-size:16px">' . esc_html__( '© Site Title', 'twentytwentytwo' ) . '</p>
					<!-- /jk:paragraph --></div>
					<!-- /jk:group --></div>
					<!-- /jk:group -->',
);
