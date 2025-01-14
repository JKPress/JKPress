<?php
/**
 * Subscribe callout block pattern
 */
return array(
	'title'      => __( 'Subscribe callout', 'twentytwentytwo' ),
	'categories' => array( 'featured', 'buttons' ),
	'content'    => '<!-- jk:columns {"verticalAlignment":"center","align":"wide"} -->
					<div class="jk-block-columns alignwide are-vertically-aligned-center"><!-- jk:column {"verticalAlignment":"center"} -->
					<div class="jk-block-column is-vertically-aligned-center"><!-- jk:heading -->
					<h2>' . jk_kses_post( __( 'Watch birds<br>from your inbox', 'twentytwentytwo' ) ) . '</h2>
					<!-- /jk:heading -->

					<!-- jk:buttons -->
					<div class="jk-block-buttons"><!-- jk:button {"fontSize":"medium"} -->
					<div class="jk-block-button has-custom-font-size has-medium-font-size"><a class="jk-block-button__link">' . esc_html__( 'Join our mailing list', 'twentytwentytwo' ) . '</a></div>
					<!-- /jk:button --></div>
					<!-- /jk:buttons --></div>
					<!-- /jk:column -->

					<!-- jk:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem"}}}} -->
					<div class="jk-block-column is-vertically-aligned-center" style="padding-top:2rem;padding-bottom:2rem"><!-- jk:separator {"color":"primary","className":"is-style-wide"} -->
					<hr class="jk-block-separator has-text-color has-background has-primary-background-color has-primary-color is-style-wide"/>
					<!-- /jk:separator --></div>
					<!-- /jk:column --></div>
					<!-- /jk:columns -->',
);
