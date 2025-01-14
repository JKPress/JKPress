<?php
/**
 * Title: Call to action
 * Slug: twentytwentythree/cta
 * Categories: featured
 * Keywords: Call to action
 * Block Types: core/buttons
 * Description: Left-aligned text with a CTA button and a separator.
 */
?>
<!-- jk:columns {"align":"wide"} -->
<div class="jk-block-columns alignwide">
	<!-- jk:column -->
	<div class="jk-block-column">
		<!-- jk:paragraph {"style":{"typography":{"lineHeight":"1.2"}},"fontSize":"x-large"} -->
		<p class="has-x-large-font-size" style="line-height:1.2"><?php echo esc_html_x( 'Got any book recommendations?', 'sample content for call to action', 'twentytwentythree' ); ?>
		</p>
		<!-- /jk:paragraph -->

		<!-- jk:buttons -->
		<div class="jk-block-buttons">
			<!-- jk:button {"fontSize":"small"} -->
			<div class="jk-block-button has-custom-font-size has-small-font-size">
				<a class="jk-block-button__link jk-element-button">
				<?php echo esc_html_x( 'Get In Touch', 'sample content for call to action button', 'twentytwentythree' ); ?>
				</a>
			</div>
			<!-- /jk:button -->
		</div>
		<!-- /jk:buttons -->
	</div>
	<!-- /jk:column -->

	<!-- jk:column -->
	<div class="jk-block-column">
		<!-- jk:separator {"className":"is-style-wide"} -->
		<hr class="jk-block-separator has-alpha-channel-opacity is-style-wide"/>
		<!-- /jk:separator -->
	</div>
	<!-- /jk:column -->
</div>
<!-- /jk:columns -->
