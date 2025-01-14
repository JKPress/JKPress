<?php
/**
 * Title: Team members, 4 columns
 * Slug: twentytwentyfour/team-4-col
 * Categories: team, about
 * Viewport width: 1400
 * Description: A team section, with a heading, a paragraph, and 4 columns for team members.
 */
?>

<!-- jk:group {"metadata":{"name":"<?php echo esc_html_x( 'Team members', 'Name of team pattern', 'twentytwentyfour' ); ?>"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="jk-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--jk--preset--spacing--50);padding-right:var(--jk--preset--spacing--50);padding-bottom:var(--jk--preset--spacing--50);padding-left:var(--jk--preset--spacing--50)">
	<!-- jk:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
	<div class="jk-block-group">
		<!-- jk:heading {"textAlign":"center","fontSize":"xx-large"} -->
		<h2 class="jk-block-heading has-text-align-center has-xx-large-font-size"><?php echo esc_html_x( 'Meet our team', 'Sample heading for the team pattern', 'twentytwentyfour' ); ?></h2>
		<!-- /jk:heading -->

		<!-- jk:paragraph {"align":"center"} -->
		<p class="has-text-align-center"><?php echo esc_html_x( 'Our comprehensive suite of professionals caters to a diverse team, ranging from seasoned architects to renowned engineers.', 'Sample descriptive text of the team pattern', 'twentytwentyfour' ); ?></p>
		<!-- /jk:paragraph -->
	</div>
	<!-- /jk:group -->

	<!-- jk:spacer {"height":"var:preset|spacing|30"} -->
	<div style="height:var(--jk--preset--spacing--30)" aria-hidden="true" class="jk-block-spacer">
	</div>
	<!-- /jk:spacer -->

	<!-- jk:columns {"align":"wide","style":{"spacing":{"padding":{"right":"0","left":"0"},"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|30"}}}} -->
	<div class="jk-block-columns alignwide" style="padding-right:0;padding-left:0">
		<!-- jk:column {"layout":{"type":"default"}} -->
		<div class="jk-block-column">
			<!-- jk:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
			<figure class="jk-block-image size-full is-style-rounded">
				<img alt="" style="aspect-ratio:1;object-fit:cover" />
			</figure>
			<!-- /jk:image -->

			<!-- jk:group {"style":{"spacing":{"blockGap":"var:preset|spacing|0"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap","justifyContent":"center"}} -->
			<div class="jk-block-group">
				<!-- jk:paragraph {"align":"center","fontSize":"small"} -->
				<p class="has-text-align-center has-small-font-size">
					<strong><?php echo esc_html_x( 'Francesca Piovani', 'Sample name of a team member', 'twentytwentyfour' ); ?></strong>
				</p>
				<!-- /jk:paragraph -->

				<!-- jk:paragraph {"align":"center","fontSize":"small"} -->
				<p class="has-text-align-center has-small-font-size"><?php echo esc_html_x( 'Founder, CEO & Architect', 'Sample role of a team member', 'twentytwentyfour' ); ?></p>
				<!-- /jk:paragraph -->
			</div>
			<!-- /jk:group -->
		</div>
		<!-- /jk:column -->

		<!-- jk:column {"layout":{"type":"default"}} -->
		<div class="jk-block-column">
			<!-- jk:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
			<figure class="jk-block-image size-full is-style-rounded">
				<img alt="" style="aspect-ratio:1;object-fit:cover" />
			</figure>
			<!-- /jk:image -->

			<!-- jk:group {"style":{"spacing":{"blockGap":"var:preset|spacing|0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","flexWrap":"nowrap"}} -->
			<div class="jk-block-group">
				<!-- jk:paragraph {"align":"center","fontSize":"small"} -->
				<p class="has-text-align-center has-small-font-size">
					<strong><?php echo esc_html_x( 'Rhye Moore', 'Sample name of a team member', 'twentytwentyfour' ); ?></strong>
				</p>
				<!-- /jk:paragraph -->

				<!-- jk:paragraph {"align":"center","fontSize":"small"} -->
				<p class="has-text-align-center has-small-font-size"><?php echo esc_html_x( 'Engineering Manager', 'Sample role of a team member', 'twentytwentyfour' ); ?></p>
				<!-- /jk:paragraph -->
			</div>
			<!-- /jk:group -->
		</div>
		<!-- /jk:column -->

		<!-- jk:column {"layout":{"type":"default"}} -->
		<div class="jk-block-column">
			<!-- jk:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
			<figure class="jk-block-image size-full is-style-rounded">
				<img alt="" style="aspect-ratio:1;object-fit:cover" />
			</figure>
			<!-- /jk:image -->

			<!-- jk:group {"style":{"spacing":{"blockGap":"var:preset|spacing|0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","flexWrap":"nowrap"}} -->
			<div class="jk-block-group">
				<!-- jk:paragraph {"align":"center","fontSize":"small"} -->
				<p class="has-text-align-center has-small-font-size">
					<strong><?php echo esc_html_x( 'Helga Steiner', 'Sample name of a team member', 'twentytwentyfour' ); ?></strong>
				</p>
				<!-- /jk:paragraph -->

				<!-- jk:paragraph {"align":"center","fontSize":"small"} -->
				<p class="has-text-align-center has-small-font-size"><?php echo esc_html_x( 'Architect', 'Sample role of a team member', 'twentytwentyfour' ); ?></p>
				<!-- /jk:paragraph -->
			</div>
			<!-- /jk:group -->
		</div>
		<!-- /jk:column -->

		<!-- jk:column {"layout":{"type":"default"}} -->
		<div class="jk-block-column">
			<!-- jk:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
			<figure class="jk-block-image size-full is-style-rounded">
				<img alt="" style="aspect-ratio:1;object-fit:cover" />
			</figure>
			<!-- /jk:image -->

			<!-- jk:group {"style":{"spacing":{"blockGap":"var:preset|spacing|0"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap","justifyContent":"center"}} -->
			<div class="jk-block-group">
				<!-- jk:paragraph {"align":"center","fontSize":"small"} -->
				<p class="has-text-align-center has-small-font-size">
					<strong><?php echo esc_html_x( 'Ivan Lawrence', 'Sample name of a team member', 'twentytwentyfour' ); ?></strong>
				</p>
				<!-- /jk:paragraph -->

				<!-- jk:paragraph {"align":"center","fontSize":"small"} -->
				<p class="has-text-align-center has-small-font-size"><?php echo esc_html_x( 'Project Manager', 'Sample role of a team member', 'twentytwentyfour' ); ?></p>
				<!-- /jk:paragraph -->
			</div>
			<!-- /jk:group -->
		</div>
		<!-- /jk:column -->
	</div>
	<!-- /jk:columns -->
</div>
<!-- /jk:group -->
