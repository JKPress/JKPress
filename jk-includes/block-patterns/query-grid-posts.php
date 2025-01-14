<?php
/**
 * Query: Grid.
 *
 * @package JKPress
 */

return array(
	'title'      => _x( 'Grid', 'Block pattern title' ),
	'blockTypes' => array( 'core/query' ),
	'categories' => array( 'query' ),
	'content'    => '<!-- jk:query {"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":3}} -->
					<div class="jk-block-query">
					<!-- jk:post-template -->
					<!-- jk:group {"style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}}},"layout":{"inherit":false}} -->
					<div class="jk-block-group" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- jk:post-title {"isLink":true} /-->
					<!-- jk:post-excerpt /-->
					<!-- jk:post-date /--></div>
					<!-- /jk:group -->
					<!-- /jk:post-template -->
					</div>
					<!-- /jk:query -->',
);
