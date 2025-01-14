<?php
/**
 * Title: 404
 * Slug: twentytwentyfive/hidden-404
 * Inserter: no
 *
 * @package JKPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- jk:group {"style":{"spacing":{"padding":{"right":"0","left":"0"}}},"layout":{"type":"constrained"}} -->
<div class="jk-block-group" style="padding-right:0;padding-left:0">
	<!-- jk:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
	<div class="jk-block-columns alignwide">
		<!-- jk:column -->
		<div class="jk-block-column">
			<!-- jk:image {"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="jk-block-image size-full">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/404-image.webp" alt="<?php echo esc_attr_x( 'Small totara tree on ridge above Long Point', 'image description', 'twentytwentyfive' ); ?>" style="object-fit:cover"/>
			</figure>
			<!-- /jk:image -->
		</div>
		<!-- /jk:column -->
		<!-- jk:column {"verticalAlignment":"bottom"} -->
		<div class="jk-block-column is-vertically-aligned-bottom">
			<!-- jk:group {"layout":{"type":"default"}} -->
			<div class="jk-block-group">
				<!-- jk:heading {"level":1} -->
				<h1 class="jk-block-heading">
					<?php echo esc_html_x( 'Page not found', '404 error message', 'twentytwentyfive' ); ?>
				</h1>
				<!-- /jk:heading -->
				<!-- jk:paragraph -->
				<p><?php echo esc_html_x( 'The page you are looking for doesn\'t exist, or it has been moved. Please try searching using the form below.', '404 error message', 'twentytwentyfive' ); ?></p>
				<!-- /jk:paragraph -->
				<!-- jk:pattern {"slug":"twentytwentyfive/hidden-search"} /-->
			</div>
			<!-- /jk:group -->
		</div>
		<!-- /jk:column -->
	</div>
	<!-- /jk:columns -->
</div>
<!-- /jk:group -->
