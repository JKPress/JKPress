<?php
/**
 * Query: Small image and title.
 *
 * @package JKPress
 */

return array(
	'title'      => _x( 'Small image and title', 'Block pattern title' ),
	'blockTypes' => array( 'core/query' ),
	'categories' => array( 'query' ),
	'content'    => '<!-- jk:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
					<div class="jk-block-query">
					<!-- jk:post-template -->
					<!-- jk:columns {"verticalAlignment":"center"} -->
					<div class="jk-block-columns are-vertically-aligned-center"><!-- jk:column {"verticalAlignment":"center","width":"25%"} -->
					<div class="jk-block-column is-vertically-aligned-center" style="flex-basis:25%"><!-- jk:post-featured-image {"isLink":true} /--></div>
					<!-- /jk:column -->
					<!-- jk:column {"verticalAlignment":"center","width":"75%"} -->
					<div class="jk-block-column is-vertically-aligned-center" style="flex-basis:75%"><!-- jk:post-title {"isLink":true} /--></div>
					<!-- /jk:column --></div>
					<!-- /jk:columns -->
					<!-- /jk:post-template -->
					</div>
					<!-- /jk:query -->',
);
