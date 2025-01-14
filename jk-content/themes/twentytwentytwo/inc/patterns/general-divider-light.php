<?php
/**
 * Divider with image and color (light) block pattern
 */
return array(
	'title'      => __( 'Divider with image and color (light)', 'twentytwentytwo' ),
	'categories' => array( 'featured' ),
	'content'    => '<!-- jk:group {"align":"full","style":{"spacing":{"padding":{"top":"1rem","right":"0px","bottom":"1rem","left":"0px"}}},"backgroundColor":"secondary"} -->
					<div class="jk-block-group alignfull has-secondary-background-color has-background" style="padding-top:1rem;padding-right:0px;padding-bottom:1rem;padding-left:0px"><!-- jk:image {"id":473,"width":3001,"height":246,"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="jk-block-image size-full is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/divider-black.png" alt="" class="jk-image-473" width="3001" height="246"/></figure>
					<!-- /jk:image --></div>
					<!-- /jk:group -->',
);
