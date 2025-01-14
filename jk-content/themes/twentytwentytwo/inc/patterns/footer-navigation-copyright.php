<?php
/**
 * Footer with navigation and copyright
 */
return array(
	'title'      => __( 'Footer with navigation and copyright', 'twentytwentytwo' ),
	'categories' => array( 'footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- jk:group {"align":"full","layout":{"inherit":true}} -->
					<div class="jk-block-group alignfull"><!-- jk:group {"align":"wide","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}}}} -->
					<div class="jk-block-group alignwide" style="padding-top:4rem;padding-bottom:4rem"><!-- jk:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"center"}} -->
					<!-- jk:page-list {"isNavigationChild":true,"showSubmenuIcon":true,"openSubmenusOnClick":false} /-->
					<!-- /jk:navigation -->

					<!-- jk:spacer {"height":50} -->
					<div style="height:50px" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer -->

					<!-- jk:paragraph {"align":"center","style":{"typography":{"fontSize":"16px"}}} -->
					<p class="has-text-align-center" style="font-size:16px">' . esc_html__( '© Site Title', 'twentytwentytwo' ) . '</p>
					<!-- /jk:paragraph --></div>
					<!-- /jk:group --></div>
					<!-- /jk:group -->',
);
