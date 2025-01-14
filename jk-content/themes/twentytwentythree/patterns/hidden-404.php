<?php
/**
 * Title: Hidden 404
 * Slug: twentytwentythree/hidden-404
 * Inserter: no
 */
?>
<!-- jk:spacer {"height":"var(--jk--preset--spacing--30)"} -->
<div style="height:var(--jk--preset--spacing--30)" aria-hidden="true" class="jk-block-spacer"></div>
<!-- /jk:spacer -->

<!-- jk:heading {"level":1,"align":"wide"} -->
<h1 class="alignwide"><?php echo esc_html_x( '404', 'Error code for a webpage that is not found.', 'twentytwentythree' ); ?></h1>
<!-- /jk:heading -->

<!-- jk:group {"align":"wide","layout":{"type":"default"},"style":{"spacing":{"margin":{"top":"5px"}}}} -->
<div class="jk-block-group alignwide" style="margin-top:5px">
	<!-- jk:paragraph -->
	<p><?php echo esc_html_x( 'This page could not be found.', 'Message to convey that a webpage could not be found', 'twentytwentythree' ); ?></p>
	<!-- /jk:paragraph -->

	<!-- jk:search {"label":"<?php echo esc_html_x( 'Search', 'label', 'twentytwentythree' ); ?>","placeholder":"<?php echo esc_attr_x( 'Search...', 'placeholder for search field', 'twentytwentythree' ); ?>","showLabel":false,"width":100,"widthUnit":"%","buttonText":"<?php esc_attr_e( 'Search', 'twentytwentythree' ); ?>","buttonUseIcon":true,"align":"center"} /-->
</div>
<!-- /jk:group -->

<!-- jk:spacer {"height":"var(--jk--preset--spacing--70)"} -->
<div style="height:var(--jk--preset--spacing--70)" aria-hidden="true" class="jk-block-spacer"></div>
<!-- /jk:spacer -->
