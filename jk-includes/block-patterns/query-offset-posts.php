<?php
/**
 * Query: Offset.
 *
 * @package JKPress
 */

return array(
	'title'      => _x( 'Offset', 'Block pattern title' ),
	'blockTypes' => array( 'core/query' ),
	'categories' => array( 'query' ),
	'content'    => '<!-- jk:group {"style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}}},"layout":{"inherit":false}} -->
					<div class="jk-block-group" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- jk:columns -->
					<div class="jk-block-columns"><!-- jk:column {"width":"50%"} -->
					<div class="jk-block-column" style="flex-basis:50%"><!-- jk:query {"query":{"perPage":2,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"list"}} -->
					<div class="jk-block-query"><!-- jk:post-template -->
					<!-- jk:post-featured-image /-->
					<!-- jk:post-title /-->
					<!-- jk:post-date /-->
					<!-- jk:spacer {"height":200} -->
					<div style="height:200px" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer -->
					<!-- /jk:post-template --></div>
					<!-- /jk:query --></div>
					<!-- /jk:column -->
					<!-- jk:column {"width":"50%"} -->
					<div class="jk-block-column" style="flex-basis:50%"><!-- jk:query {"query":{"perPage":2,"pages":0,"offset":2,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"list"}} -->
					<div class="jk-block-query"><!-- jk:post-template -->
					<!-- jk:spacer {"height":200} -->
					<div style="height:200px" aria-hidden="true" class="jk-block-spacer"></div>
					<!-- /jk:spacer -->
					<!-- jk:post-featured-image /-->
					<!-- jk:post-title /-->
					<!-- jk:post-date /-->
					<!-- /jk:post-template --></div>
					<!-- /jk:query --></div>
					<!-- /jk:column --></div>
					<!-- /jk:columns --></div>
					<!-- /jk:group -->',
);
