<?php
/**
 * Wide image with introduction and buttons block pattern
 */
return array(
	'title'      => __( 'Wide image with introduction and buttons', 'twentytwentytwo' ),
	'categories' => array( 'featured', 'columns' ),
	'content'    => '<!-- jk:group {"align":"wide"} -->
				<div class="jk-block-group alignwide"><!-- jk:image {"width":2100,"height":994,"sizeSlug":"large"} -->
				<figure class="jk-block-image size-large is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/flight-path-on-gray-a.jpg" alt="' . esc_attr__( 'Illustration of a bird flying.', 'twentytwentytwo' ) . '" width="2100" height="994"/></figure>
				<!-- /jk:image -->

				<!-- jk:columns {"verticalAlignment":null} -->
				<div class="jk-block-columns"><!-- jk:column {"verticalAlignment":"bottom"} -->
				<div class="jk-block-column is-vertically-aligned-bottom"><!-- jk:heading {"style":{"typography":{"fontSize":"clamp(3.25rem, 8vw, 6.25rem)","lineHeight":"1.15"}}} -->
				<h2 style="font-size:clamp(3.25rem, 8vw, 6.25rem);line-height:1.15"><em>' . jk_kses_post( __( 'Welcome to<br>the Aviary', 'twentytwentytwo' ) ) . '</em></h2>
				<!-- /jk:heading --></div>
				<!-- /jk:column -->

				<!-- jk:column {"verticalAlignment":"bottom","style":{"spacing":{"padding":{"bottom":"6rem"}}}} -->
				<div class="jk-block-column is-vertically-aligned-bottom" style="padding-bottom:6rem"><!-- jk:paragraph -->
				<p>' . esc_html__( 'A film about hobbyist bird watchers, a catalog of different birds, paired with the noises they make. Each bird is listed by their scientific name so things seem more official.', 'twentytwentytwo' ) . '</p>
				<!-- /jk:paragraph -->

				<!-- jk:spacer {"height":20} -->
				<div style="height:20px" aria-hidden="true" class="jk-block-spacer"></div>
				<!-- /jk:spacer -->

				<!-- jk:buttons -->
				<div class="jk-block-buttons"><!-- jk:button {"className":"is-style-outline"} -->
				<div class="jk-block-button is-style-outline"><a class="jk-block-button__link">' . esc_html__( 'Learn More', 'twentytwentytwo' ) . '</a></div>
				<!-- /jk:button -->

				<!-- jk:button {"className":"is-style-outline"} -->
				<div class="jk-block-button is-style-outline"><a class="jk-block-button__link">' . esc_html__( 'Buy Tickets', 'twentytwentytwo' ) . '</a></div>
				<!-- /jk:button --></div>
				<!-- /jk:buttons --></div>
				<!-- /jk:column --></div>
				<!-- /jk:columns --></div>
				<!-- /jk:group -->',
);
