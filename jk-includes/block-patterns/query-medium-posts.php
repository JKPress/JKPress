<?php
/**
 * Query: Image at left.
 *
 * @package JKPress
 */

return array(
	'title'      => _x( 'Image at left', 'Block pattern title' ),
	'blockTypes' => array( 'core/query' ),
	'categories' => array( 'query' ),
	'content'    => '<!-- jk:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
					<div class="jk-block-query">
					<!-- jk:post-template -->
					<!-- jk:columns {"align":"wide"} -->
					<div class="jk-block-columns alignwide"><!-- jk:column {"width":"66.66%"} -->
					<div class="jk-block-column" style="flex-basis:66.66%"><!-- jk:post-featured-image {"isLink":true} /--></div>
					<!-- /jk:column -->
					<!-- jk:column {"width":"33.33%"} -->
					<div class="jk-block-column" style="flex-basis:33.33%"><!-- jk:post-title {"isLink":true} /-->
					<!-- jk:post-excerpt /--></div>
					<!-- /jk:column --></div>
					<!-- /jk:columns -->
					<!-- /jk:post-template -->
					</div>
					<!-- /jk:query -->',
);
