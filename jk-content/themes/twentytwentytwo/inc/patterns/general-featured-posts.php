<?php
/**
 * Featured posts block pattern
 */
return array(
	'title'      => __( 'Featured posts', 'twentytwentytwo' ),
	'categories' => array( 'featured', 'query' ),
	'content'    => '<!-- jk:group {"align":"wide","layout":{"inherit":false}} -->
					<div class="jk-block-group alignwide"><!-- jk:paragraph {"style":{"typography":{"textTransform":"uppercase"}}} -->
					<p style="text-transform:uppercase">' . esc_html__( 'Latest posts', 'twentytwentytwo' ) . '</p>
					<!-- /jk:paragraph -->

					<!-- jk:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3}} -->
					<div class="jk-block-query"><!-- jk:post-template -->
					<!-- jk:post-featured-image {"isLink":true,"width":"","height":"310px"} /-->

					<!-- jk:post-title {"isLink":true,"fontSize":"large"} /-->

					<!-- jk:post-excerpt /-->

					<!-- jk:post-date {"fontSize":"small"} /-->
					<!-- /jk:post-template --></div>
					<!-- /jk:query --></div>
					<!-- /jk:group -->',
);
