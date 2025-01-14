<?php
/**
 * Title: Post navigation
 * Slug: twentytwentyfour/hidden-post-navigation
 * Inserter: no
 */
?>

<!-- jk:group {"tagName":"nav","ariaLabel":"<?php esc_attr_e( 'Posts', 'twentytwentyfour' ); ?>","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|40","top":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<nav class="jk-block-group" style="padding-top:var(--jk--preset--spacing--40);padding-bottom:var(--jk--preset--spacing--40)" aria-label="<?php esc_attr_e( 'Posts', 'twentytwentyfour' ); ?>">
	<!-- jk:post-navigation-link {"type":"previous","label":"<?php echo esc_html_x( 'Previous: ', 'Label before the title of the previous post. There is a space after the colon.', 'twentytwentyfour' ); ?>","showTitle":true,"linkLabel":true,"arrow":"arrow"} /-->
	<!-- jk:post-navigation-link {"label":"<?php echo esc_html_x( 'Next: ', 'Label before the title of the next post. There is a space after the colon.', 'twentytwentyfour' ); ?>","showTitle":true,"linkLabel":true,"arrow":"arrow"} /-->
</nav>
<!-- /jk:group -->
