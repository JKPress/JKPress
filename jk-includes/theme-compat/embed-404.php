<?php
/**
 * Contains the post embed content template part
 *
 * When a post is embedded in an iframe, this file is used to create the content template part
 * output if the active theme does not include an embed-404.php template.
 *
 * @package JKPress
 * @subpackage Theme_Compat
 * @since 4.5.0
 */
?>
<div class="jk-embed">
	<p class="jk-embed-heading"><?php _e( 'Oops! That embed cannot be found.' ); ?></p>

	<div class="jk-embed-excerpt">
		<p>
			<?php
			printf(
				/* translators: %s: A link to the embedded site. */
				__( 'It looks like nothing was found at this location. Maybe try visiting %s directly?' ),
				'<strong><a href="' . esc_url( home_url() ) . '">' . esc_html( get_bloginfo( 'name' ) ) . '</a></strong>'
			);
			?>
		</p>
	</div>

	<?php
	/** This filter is documented in jk-includes/theme-compat/embed-content.php */
	do_action( 'embed_content' );
	?>

	<div class="jk-embed-footer">
		<?php the_embed_site_title(); ?>
	</div>
</div>
