<?php
/**
 * Query: Standard.
 *
 * @package JKPress
 */

return array(
	'title'      => _x( 'Standard', 'Block pattern title' ),
	'blockTypes' => array( 'core/query' ),
	'categories' => array( 'query' ),
	'content'    => '<!-- jk:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
					<div class="jk-block-query">
					<!-- jk:post-template -->
					<!-- jk:post-title {"isLink":true} /-->
					<!-- jk:post-featured-image  {"isLink":true,"align":"wide"} /-->
					<!-- jk:post-excerpt /-->
					<!-- jk:separator -->
					<hr class="jk-block-separator"/>
					<!-- /jk:separator -->
					<!-- jk:post-date /-->
					<!-- /jk:post-template -->
					</div>
					<!-- /jk:query -->',
);
