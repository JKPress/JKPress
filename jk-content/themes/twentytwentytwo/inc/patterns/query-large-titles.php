<?php
/**
 * Large post titles block pattern
 */
return array(
	'title'      => __( 'Large post titles', 'twentytwentytwo' ),
	'categories' => array( 'query' ),
	'blockTypes' => array( 'core/query' ),
	'content'    => '<!-- jk:query {"query":{"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"perPage":8},"align":"wide"} -->
					<div class="jk-block-query alignwide"><!-- jk:post-template -->
					<!-- jk:columns -->
					<div class="jk-block-columns"><!-- jk:column {"verticalAlignment":"top","width":"4em"} -->
					<div class="jk-block-column is-vertically-aligned-top" style="flex-basis:4em"><!-- jk:post-date {"format":"M j","fontSize":"small"} /--></div>
					<!-- /jk:column -->

					<!-- jk:column {"verticalAlignment":"center","width":""} -->
					<div class="jk-block-column is-vertically-aligned-center"><!-- jk:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"typography":{"fontSize":"clamp(2.75rem, 6vw, 3.25rem)"}}} /--></div>
					<!-- /jk:column --></div>
					<!-- /jk:columns -->

					<!-- jk:separator {"className":"is-style-wide"} -->
					<hr class="jk-block-separator is-style-wide"/>
					<!-- /jk:separator -->
					<!-- /jk:post-template --></div>
					<!-- /jk:query -->',
);
