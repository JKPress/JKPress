<?php
/**
 * Theme previews using the Site Editor for block themes.
 *
 * @package JKPress
 */

/**
 * Filters the blog option to return the path for the previewed theme.
 *
 * @since 6.3.0
 *
 * @param string $current_stylesheet The current theme's stylesheet or template path.
 * @return string The previewed theme's stylesheet or template path.
 */
function jk_get_theme_preview_path( $current_stylesheet = null ) {
	if ( ! current_user_can( 'switch_themes' ) ) {
		return $current_stylesheet;
	}

	$preview_stylesheet = ! empty( $_GET['jk_theme_preview'] ) ? sanitize_text_field( jk_unslash( $_GET['jk_theme_preview'] ) ) : null;
	$jk_theme           = jk_get_theme( $preview_stylesheet );
	if ( ! is_jk_error( $jk_theme->errors() ) ) {
		if ( current_filter() === 'template' ) {
			$theme_path = $jk_theme->get_template();
		} else {
			$theme_path = $jk_theme->get_stylesheet();
		}

		return sanitize_text_field( $theme_path );
	}

	return $current_stylesheet;
}

/**
 * Adds a middleware to `apiFetch` to set the theme for the preview.
 * This adds a `jk_theme_preview` URL parameter to API requests from the Site Editor, so they also respond as if the theme is set to the value of the parameter.
 *
 * @since 6.3.0
 */
function jk_attach_theme_preview_middleware() {
	// Don't allow non-admins to preview themes.
	if ( ! current_user_can( 'switch_themes' ) ) {
		return;
	}

	jk_add_inline_script(
		'jk-api-fetch',
		sprintf(
			'jk.apiFetch.use( jk.apiFetch.createThemePreviewMiddleware( %s ) );',
			jk_json_encode( sanitize_text_field( jk_unslash( $_GET['jk_theme_preview'] ) ) )
		),
		'after'
	);
}

/**
 * Set a JavaScript constant for theme activation.
 *
 * Sets the JavaScript global JK_BLOCK_THEME_ACTIVATE_NONCE containing the nonce
 * required to activate a theme. For use within the site editor.
 *
 * @see https://github.com/JKPress/gutenberg/pull/41836
 *
 * @since 6.3.0
 * @access private
 */
function jk_block_theme_activate_nonce() {
	$nonce_handle = 'switch-theme_' . jk_get_theme_preview_path();
	?>
	<script type="text/javascript">
		window.JK_BLOCK_THEME_ACTIVATE_NONCE = <?php echo jk_json_encode( jk_create_nonce( $nonce_handle ) ); ?>;
	</script>
	<?php
}

/**
 * Add filters and actions to enable Block Theme Previews in the Site Editor.
 *
 * The filters and actions should be added after `pluggable.php` is included as they may
 * trigger code that uses `current_user_can()` which requires functionality from `pluggable.php`.
 *
 * @since 6.3.2
 */
function jk_initialize_theme_preview_hooks() {
	if ( ! empty( $_GET['jk_theme_preview'] ) ) {
		add_filter( 'stylesheet', 'jk_get_theme_preview_path' );
		add_filter( 'template', 'jk_get_theme_preview_path' );
		add_action( 'init', 'jk_attach_theme_preview_middleware' );
		add_action( 'admin_head', 'jk_block_theme_activate_nonce' );
	}
}
