<?php
/**
 * Title: Grid with categories
 * Slug: twentytwentyfive/grid-with-categories
 * Categories: banner
 * Viewport width: 1400
 * Description: A grid section with different categories.
 *
 * @package JKPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- jk:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="jk-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--jk--preset--spacing--50);padding-bottom:var(--jk--preset--spacing--50)">
	<!-- jk:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","minimumColumnWidth":"16rem"}} -->
	<div class="jk-block-group alignwide">
		<!-- jk:group {"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center"}} -->
		<div class="jk-block-group">
			<!-- jk:heading {"fontSize":"x-large"} -->
			<h2 class="jk-block-heading has-x-large-font-size"><?php esc_html_e( 'Top Categories', 'twentytwentyfive' ); ?></h2>
			<!-- /jk:heading -->
		</div>
		<!-- /jk:group -->
		<!-- jk:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
		<div class="jk-block-group">
			<!-- jk:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/category-anthuriums.webp","alt":"Close up of a red anthurium.","dimRatio":0,"customOverlayColor":"#833d3a","isUserOverlayColor":true,"layout":{"type":"constrained"}} -->
			<div class="jk-block-cover"><span aria-hidden="true" class="jk-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#833d3a"></span><img class="jk-block-cover__image-background" alt="<?php esc_attr_e( 'Close up of a red anthurium.', 'twentytwentyfive' ); ?>" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/category-anthuriums.webp" data-object-fit="cover"/><div class="jk-block-cover__inner-container">
				<!-- jk:spacer {"height":"var:preset|spacing|20"} -->
				<div style="height:var(--jk--preset--spacing--20)" aria-hidden="true" class="jk-block-spacer"></div>
				<!-- /jk:spacer -->
			</div></div>
			<!-- /jk:cover -->
			<!-- jk:paragraph {"align":"center"} -->
			<p class="has-text-align-center"><?php esc_html_e( 'Anthuriums', 'twentytwentyfive' ); ?></p>
			<!-- /jk:paragraph -->
		</div>
		<!-- /jk:group -->
		<!-- jk:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
		<div class="jk-block-group">
			<!-- jk:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/category-cactus.webp","dimRatio":0,"customOverlayColor":"#828282","isUserOverlayColor":true,"isDark":false,"layout":{"type":"constrained"}} -->
			<div class="jk-block-cover is-light"><span aria-hidden="true" class="jk-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#828282"></span><img class="jk-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/category-cactus.webp" data-object-fit="cover"/><div class="jk-block-cover__inner-container">
				<!-- jk:spacer {"height":"var:preset|spacing|20"} -->
				<div style="height:var(--jk--preset--spacing--20)" aria-hidden="true" class="jk-block-spacer"></div>
				<!-- /jk:spacer -->
			</div></div>
			<!-- /jk:cover -->
			<!-- jk:paragraph {"align":"center"} -->
			<p class="has-text-align-center"><?php esc_html_e( 'Cactus', 'twentytwentyfive' ); ?></p>
			<!-- /jk:paragraph -->
		</div>
		<!-- /jk:group -->
		<!-- jk:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
		<div class="jk-block-group">
			<!-- jk:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/category-sunflowers.webp","dimRatio":0,"customOverlayColor":"#d6bc98","isUserOverlayColor":true,"isDark":false,"layout":{"type":"constrained"}} -->
			<div class="jk-block-cover is-light"><span aria-hidden="true" class="jk-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#d6bc98"></span><img class="jk-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/category-sunflowers.webp" data-object-fit="cover"/><div class="jk-block-cover__inner-container">
				<!-- jk:spacer {"height":"var:preset|spacing|20"} -->
				<div style="height:var(--jk--preset--spacing--20)" aria-hidden="true" class="jk-block-spacer"></div>
				<!-- /jk:spacer -->
			</div></div>
			<!-- /jk:cover -->
			<!-- jk:paragraph {"align":"center"} -->
			<p class="has-text-align-center"><?php esc_html_e( 'Sunflowers', 'twentytwentyfive' ); ?></p>
			<!-- /jk:paragraph -->
		</div>
		<!-- /jk:group -->
	</div>
	<!-- /jk:group -->
</div>
<!-- /jk:group -->
