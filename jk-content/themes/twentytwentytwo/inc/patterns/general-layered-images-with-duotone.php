<?php
/**
 * Layered images with duotone block pattern
 */
return array(
	'title'      => __( 'Layered images with duotone', 'twentytwentytwo' ),
	'categories' => array( 'featured', 'gallery' ),
	'content'    => '<!-- jk:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/images/ducks.jpg","dimRatio":0,"minHeight":666,"contentPosition":"center center","isDark":false,"align":"wide","style":{"spacing":{"padding":{"top":"1em","right":"1em","bottom":"1em","left":"1em"}},"color":{"duotone":["#000000","#FFFFFF"]}}} -->
					<div class="jk-block-cover alignwide is-light" style="padding-top:1em;padding-right:1em;padding-bottom:1em;padding-left:1em;min-height:666px"><span aria-hidden="true" class="has-background-dim-0 jk-block-cover__gradient-background has-background-dim"></span><img class="jk-block-cover__image-background" alt="' . esc_attr__( 'Painting of ducks in the water.', 'twentytwentytwo' ) . '" src="' . esc_url( get_template_directory_uri() ) . '/assets/images/ducks.jpg" data-object-fit="cover"/><div class="jk-block-cover__inner-container"><!-- jk:image {"align":"center","width":384,"height":580,"sizeSlug":"large"} -->
					<div class="jk-block-image"><figure class="aligncenter size-large is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/flight-path-on-salmon.jpg" alt="' . esc_attr__( 'Illustration of a flying bird.', 'twentytwentytwo' ) . '" width="384" height="580"/></figure></div>
					<!-- /jk:image --></div></div>
					<!-- /jk:cover -->',
);
