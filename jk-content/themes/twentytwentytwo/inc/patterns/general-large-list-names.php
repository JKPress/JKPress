<?php
/**
 * Large list of names block pattern
 */
return array(
	'title'      => __( 'Large list of names', 'twentytwentytwo' ),
	'categories' => array( 'featured', 'text' ),
	'content'    => '<!-- jk:group {"align":"full","style":{"spacing":{"padding":{"top":"6rem","bottom":"6rem"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"backgroundColor":"tertiary","textColor":"primary","layout":{"inherit":true}} -->
					<div class="jk-block-group alignfull has-primary-color has-tertiary-background-color has-text-color has-background has-link-color" style="padding-top:6rem;padding-bottom:6rem"><!-- jk:group {"align":"wide"} -->
					<div class="jk-block-group alignwide"><!-- jk:image {"width":175,"height":82,"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="jk-block-image size-full is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/icon-binoculars.png" alt="' . esc_attr__( 'An icon representing binoculars.', 'twentytwentytwo' ) . '" width="175" height="82"/></figure>
					<!-- /jk:image --></div>
					<!-- /jk:group -->

					<!-- jk:group {"align":"wide"} -->
					<div class="jk-block-group alignwide"><!-- jk:spacer {"height":32} -->
					<div style="height:32px" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer -->

					<!-- jk:paragraph {"style":{"typography":{"fontWeight":"300"}},"fontSize":"x-large"} -->
					<p class="has-x-large-font-size" style="font-weight:300">' . esc_html__( 'Jesús Rodriguez, Doug Stilton, Emery Driscoll, Megan Perry, Rowan Price, Angelo Tso, Edward Stilton, Amy Jensen, Boston Bell, Shay Ford, Lee Cunningham, Evelynn Ray, Landen Reese, Ewan Hart, Jenna Chan, Phoenix Murray, Mel Saunders, Aldo Davidson, Zain Hall.', 'twentytwentytwo' ) . '</p>
					<!-- /jk:paragraph -->

					<!-- jk:spacer {"height":32} -->
					<div style="height:32px" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer -->

					<!-- jk:buttons -->
					<div class="jk-block-buttons"><!-- jk:button {"backgroundColor":"primary","textColor":"background"} -->
					<div class="jk-block-button"><a class="jk-block-button__link has-background-color has-primary-background-color has-text-color has-background">' . esc_html__( 'Read more', 'twentytwentytwo' ) . '</a></div>
					<!-- /jk:button --></div>
					<!-- /jk:buttons --></div>
					<!-- /jk:group --></div>
					<!-- /jk:group -->',
);
