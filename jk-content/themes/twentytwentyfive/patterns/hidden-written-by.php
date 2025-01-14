<?php
/**
 * Title: Written by
 * Slug: twentytwentyfive/hidden-written-by
 * Inserter: no
 *
 * @package    JKPress
 * @subpackage Twenty_Twenty_Five
 * @since      Twenty Twenty-Five 1.0
 */

?>
<!-- jk:group {"style":{"spacing":{"blockGap":"0.2em","margin":{"bottom":"var:preset|spacing|60"}}},"textColor":"accent-4","fontSize":"small","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="jk-block-group has-accent-4-color has-text-color has-link-color has-small-font-size" style="margin-bottom:var(--jk--preset--spacing--60)">
	<!-- jk:paragraph -->
	<p><?php esc_html_e( 'Written by ', 'twentytwentyfive' ); ?></p>
	<!-- /jk:paragraph -->
	<!-- jk:post-author-name {"isLink":true} /-->
	<!-- jk:paragraph -->
	<p><?php esc_html_e( 'in', 'twentytwentyfive' ); ?></p>
	<!-- /jk:paragraph -->
	<!-- jk:post-terms {"term":"category","style":{"typography":{"fontWeight":"300"}}} /-->
</div>
<!-- /jk:group -->
