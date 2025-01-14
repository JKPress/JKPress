<?php
/**
 * Title: Project details
 * Slug: twentytwentyfour/text-project-details
 * Categories: text, portfolio
 * Viewport width: 1400
 * Description: A text-only section for project details.
 */
?>

<!-- jk:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="jk-block-group alignfull has-base-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--jk--preset--spacing--50);padding-right:var(--jk--preset--spacing--50);padding-bottom:var(--jk--preset--spacing--50);padding-left:var(--jk--preset--spacing--50)">
	<!-- jk:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|30"}}}} -->
	<div class="jk-block-columns alignwide">
		<!-- jk:column {"width":"40%","layout":{"type":"constrained","contentSize":"260px","justifyContent":"left"}} -->
		<div class="jk-block-column" style="flex-basis:40%">
			<!-- jk:paragraph -->
			<p><?php echo esc_html_x( 'The revitalized art gallery is set to redefine cultural landscape.', 'Title text for the feature area', 'twentytwentyfour' ); ?></p>
			<!-- /jk:paragraph -->
		</div>
		<!-- /jk:column -->

		<!-- jk:column {"width":"60%","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
		<div class="jk-block-column" style="flex-basis:60%">

			<!-- jk:paragraph {"style":{"typography":{"lineHeight":"1.2"}},"fontSize":"x-large","fontFamily":"heading"} -->
			<p class="has-heading-font-family has-x-large-font-size" style="line-height:1.2"><?php echo esc_html_x( 'With meticulous attention to detail and a commitment to excellence, we create spaces that inspire, elevate, and enrich the lives of those who inhabit them.', 'Descriptive title for the feature area', 'twentytwentyfour' ); ?></p>
			<!-- /jk:paragraph -->

			<!-- jk:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} -->
			<div class="jk-block-columns">
				<!-- jk:column -->
				<div class="jk-block-column">
					<!-- jk:paragraph {"style":{"layout":{"selfStretch":"fill","flexSize":null}}} -->
					<p><?php echo esc_html_x( 'The revitalized Art Gallery is set to redefine the cultural landscape of Toronto, serving as a nexus of artistic expression, community engagement, and architectural marvel. The expansion and renovation project pay homage to the Art Gallery\'s rich history while embracing the future, ensuring that the gallery remains a beacon of inspiration.', 'Descriptive text for the feature area', 'twentytwentyfour' ); ?></p>
					<!-- /jk:paragraph -->
				</div>
				<!-- /jk:column -->

				<!-- jk:column -->
				<div class="jk-block-column">
					<!-- jk:paragraph -->
					<p><?php echo esc_html_x( 'The revitalized Art Gallery is set to redefine the cultural landscape of Toronto, serving as a nexus of artistic expression, community engagement, and architectural marvel. The expansion and renovation project pay homage to the Art Gallery\'s rich history while embracing the future, ensuring that the gallery remains a beacon of inspiration.', 'Descriptive text for the feature area', 'twentytwentyfour' ); ?></p>
					<!-- /jk:paragraph -->
				</div>
				<!-- /jk:column -->
			</div>
			<!-- /jk:columns -->
		</div>
		<!-- /jk:column -->
	</div>
	<!-- /jk:columns -->
</div>
<!-- /jk:group -->
