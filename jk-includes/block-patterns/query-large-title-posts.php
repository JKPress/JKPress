<?php
/**
 * Query: Large title.
 *
 * @package JKPress
 */

return array(
	'title'      => _x( 'Large title', 'Block pattern title' ),
	'blockTypes' => array( 'core/query' ),
	'categories' => array( 'query' ),
	'content'    => '<!-- jk:group {"align":"full","style":{"spacing":{"padding":{"top":"100px","right":"100px","bottom":"100px","left":"100px"}},"color":{"text":"#ffffff","background":"#000000"}}} -->
					<div class="jk-block-group alignfull has-text-color has-background" style="background-color:#000000;color:#ffffff;padding-top:100px;padding-right:100px;padding-bottom:100px;padding-left:100px"><!-- jk:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
					<div class="jk-block-query"><!-- jk:post-template -->
					<!-- jk:separator {"customColor":"#ffffff","align":"wide","className":"is-style-wide"} -->
					<hr class="jk-block-separator alignwide has-text-color has-background is-style-wide" style="background-color:#ffffff;color:#ffffff"/>
					<!-- /jk:separator -->

					<!-- jk:columns {"verticalAlignment":"center","align":"wide"} -->
					<div class="jk-block-columns alignwide are-vertically-aligned-center"><!-- jk:column {"verticalAlignment":"center","width":"20%"} -->
					<div class="jk-block-column is-vertically-aligned-center" style="flex-basis:20%"><!-- jk:post-date {"style":{"color":{"text":"#ffffff"}},"fontSize":"extra-small"} /--></div>
					<!-- /jk:column -->

					<!-- jk:column {"verticalAlignment":"center","width":"80%"} -->
					<div class="jk-block-column is-vertically-aligned-center" style="flex-basis:80%"><!-- jk:post-title {"isLink":true,"style":{"typography":{"fontSize":"72px","lineHeight":"1.1"},"color":{"text":"#ffffff","link":"#ffffff"}}} /--></div>
					<!-- /jk:column --></div>
					<!-- /jk:columns -->
					<!-- /jk:post-template --></div>
					<!-- /jk:query --></div>
					<!-- /jk:group -->',
);
