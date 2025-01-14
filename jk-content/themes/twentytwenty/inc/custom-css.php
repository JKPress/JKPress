<?php
/**
 * Twenty Twenty Custom CSS
 *
 * @package JKPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

if ( ! function_exists( 'twentytwenty_generate_css' ) ) {

	/**
	 * Generate CSS.
	 *
	 * @since Twenty Twenty 1.0
	 *
	 * @param string $selector The CSS selector.
	 * @param string $style    The CSS style.
	 * @param string $value    The CSS value.
	 * @param string $prefix   The CSS prefix.
	 * @param string $suffix   The CSS suffix.
	 * @param bool   $display  Print the styles.
	 */
	function twentytwenty_generate_css( $selector, $style, $value, $prefix = '', $suffix = '', $display = true ) {

		$return = '';

		/*
		 * Bail early if we have no $selector elements or properties and $value.
		 */
		if ( ! $value || ! $selector ) {

			return;
		}

		$return = sprintf( '%s { %s: %s; }', $selector, $style, $prefix . $value . $suffix );

		if ( $display ) {

			echo $return; // phpcs:ignore JKPress.Security.EscapeOutput.OutputNotEscaped -- We need to double check this, but for now, we want to pass PHPCS ;)

		}

		return $return;
	}
}

if ( ! function_exists( 'twentytwenty_get_customizer_css' ) ) {

	/**
	 * Get CSS Built from Customizer Options.
	 * Build CSS reflecting colors, fonts and other options set in the Customizer, and return them for output.
	 *
	 * @since Twenty Twenty 1.0
	 *
	 * @param string $type Whether to return CSS for the "front-end", "block-editor", or "classic-editor".
	 */
	function twentytwenty_get_customizer_css( $type = 'front-end' ) {

		// Get variables.
		$body              = sanitize_hex_color( twentytwenty_get_color_for_area( 'content', 'text' ) );
		$body_default      = '#000000';
		$secondary         = sanitize_hex_color( twentytwenty_get_color_for_area( 'content', 'secondary' ) );
		$secondary_default = '#6d6d6d';
		$borders           = sanitize_hex_color( twentytwenty_get_color_for_area( 'content', 'borders' ) );
		$borders_default   = '#dcd7ca';
		$accent            = sanitize_hex_color( twentytwenty_get_color_for_area( 'content', 'accent' ) );
		$accent_default    = '#cd2653';

		// Header.
		$header_footer_background         = sanitize_hex_color( twentytwenty_get_color_for_area( 'header-footer', 'background' ) );
		$header_footer_background_default = '#ffffff';

		// Cover.
		$cover         = sanitize_hex_color( get_theme_mod( 'cover_template_overlay_text_color' ) );
		$cover_default = '#ffffff';

		// Background.
		$background         = sanitize_hex_color_no_hash( get_theme_mod( 'background_color' ) );
		$background_default = 'f5efe0';

		ob_start();

		/*
		 * Note – Styles are applied in this order:
		 * 1. Element specific
		 * 2. Helper classes
		 *
		 * This enables all helper classes to overwrite base element styles,
		 * meaning that any color classes applied in the block editor will
		 * have a higher priority than the base element styles.
		 */

		// Front-End Styles.
		if ( 'front-end' === $type ) {

			// Auto-calculated colors.
			$elements_definitions = twentytwenty_get_elements_array();
			foreach ( $elements_definitions as $context => $props ) {
				foreach ( $props as $key => $definitions ) {
					foreach ( $definitions as $property => $elements ) {
						/*
						 * If we don't have an elements array or it is empty
						 * then skip this iteration early;
						 */
						if ( ! is_array( $elements ) || empty( $elements ) ) {
							continue;
						}
						$val = twentytwenty_get_color_for_area( $context, $key );
						if ( $val ) {
							twentytwenty_generate_css( implode( ',', $elements ), $property, $val );
						}
					}
				}
			}

			if ( $cover && $cover !== $cover_default ) {
				twentytwenty_generate_css( '.overlay-header .header-inner', 'color', $cover );
				twentytwenty_generate_css( '.cover-header .entry-header *', 'color', $cover );
			}

			// Block Editor Styles.
		} elseif ( 'block-editor' === $type ) {

			// Colors.
			// Accent color.
			if ( $accent && $accent !== $accent_default ) {
				twentytwenty_generate_css( ':root .has-accent-color, .editor-styles-wrapper a, .editor-styles-wrapper .has-drop-cap:not(:focus)::first-letter, .editor-styles-wrapper .jk-block-button.is-style-outline .jk-block-button__link, .editor-styles-wrapper .jk-block-pullquote::before, .editor-styles-wrapper .jk-block-file .jk-block-file__textlink', 'color', $accent );
				twentytwenty_generate_css( '.editor-styles-wrapper .jk-block-quote', 'border-color', $accent, '' );
				twentytwenty_generate_css( '.has-accent-background-color, .editor-styles-wrapper .jk-block-button__link, .editor-styles-wrapper .jk-block-file__button', 'background-color', $accent );
			}

			// Background color.
			if ( $background && $background !== $background_default ) {
				twentytwenty_generate_css( '.editor-styles-wrapper', 'background-color', '#' . $background );
				twentytwenty_generate_css( '.has-background.has-primary-background-color:not(.has-text-color),.has-background.has-primary-background-color *:not(.has-text-color),.has-background.has-accent-background-color:not(.has-text-color),.has-background.has-accent-background-color *:not(.has-text-color)', 'color', '#' . $background );
			}

			// Borders color.
			if ( $borders && $borders !== $borders_default ) {
				twentytwenty_generate_css( '.editor-styles-wrapper .jk-block-code, .editor-styles-wrapper pre, .editor-styles-wrapper .jk-block-preformatted pre, .editor-styles-wrapper .jk-block-verse pre, .editor-styles-wrapper fieldset, .editor-styles-wrapper .jk-block-table, .editor-styles-wrapper .jk-block-table *, .editor-styles-wrapper .jk-block-table.is-style-stripes, .editor-styles-wrapper .jk-block-latest-posts.is-grid li', 'border-color', $borders );
				twentytwenty_generate_css( '.editor-styles-wrapper .jk-block-table caption, .editor-styles-wrapper .jk-block-table.is-style-stripes tbody tr:nth-child(odd)', 'background-color', $borders );
			}

			// Text color.
			if ( $body && $body !== $body_default ) {
				twentytwenty_generate_css( 'html .editor-styles-wrapper, .editor-post-title__block .editor-post-title__input, .editor-post-title__block .editor-post-title__input:focus', 'color', $body );
			}

			// Secondary color.
			if ( $secondary && $secondary !== $secondary_default ) {
				twentytwenty_generate_css( '.editor-styles-wrapper figcaption, .editor-styles-wrapper cite, .editor-styles-wrapper .jk-block-quote__citation, .editor-styles-wrapper .jk-block-quote cite, .editor-styles-wrapper .jk-block-quote footer, .editor-styles-wrapper .jk-block-pullquote__citation, .editor-styles-wrapper .jk-block-pullquote cite, .editor-styles-wrapper .jk-block-pullquote footer, .editor-styles-wrapper ul.jk-block-archives li, .editor-styles-wrapper ul.jk-block-categories li, .editor-styles-wrapper ul.jk-block-latest-posts li, .editor-styles-wrapper ul.jk-block-categories__list li, .editor-styles-wrapper .jk-block-latest-comments time, .editor-styles-wrapper .jk-block-latest-posts time', 'color', $secondary );
			}

			// Header Footer Background Color.
			if ( $header_footer_background && $header_footer_background !== $header_footer_background_default ) {
				twentytwenty_generate_css( '.editor-styles-wrapper .jk-block-pullquote::before', 'background-color', $header_footer_background );
			}
		} elseif ( 'classic-editor' === $type ) {

			// Colors.
			// Accent color.
			if ( $accent && $accent !== $accent_default ) {
				twentytwenty_generate_css( 'body#tinymce.jk-editor.content a, body#tinymce.jk-editor.content a:focus, body#tinymce.jk-editor.content a:hover', 'color', $accent );
				twentytwenty_generate_css( 'body#tinymce.jk-editor.content blockquote, body#tinymce.jk-editor.content .jk-block-quote', 'border-color', $accent, '', ' !important' );
				twentytwenty_generate_css( 'body#tinymce.jk-editor.content button, body#tinymce.jk-editor.content .faux-button, body#tinymce.jk-editor.content .jk-block-button__link, body#tinymce.jk-editor.content .jk-block-file__button, body#tinymce.jk-editor.content input[type=\'button\'], body#tinymce.jk-editor.content input[type=\'reset\'], body#tinymce.jk-editor.content input[type=\'submit\']', 'background-color', $accent );
			}

			// Background color.
			if ( $background && $background !== $background_default ) {
				twentytwenty_generate_css( 'body#tinymce.jk-editor.content', 'background-color', '#' . $background );
			}

			// Text color.
			if ( $body && $body !== $body_default ) {
				twentytwenty_generate_css( 'body#tinymce.jk-editor.content', 'color', $body );
			}

			// Secondary color.
			if ( $secondary && $secondary !== $secondary_default ) {
				twentytwenty_generate_css( 'body#tinymce.jk-editor.content hr:not(.is-style-dots), body#tinymce.jk-editor.content cite, body#tinymce.jk-editor.content figcaption, body#tinymce.jk-editor.content .jk-caption-text, body#tinymce.jk-editor.content .jk-caption-dd, body#tinymce.jk-editor.content .gallery-caption', 'color', $secondary );
			}

			// Borders color.
			if ( $borders && $borders !== $borders_default ) {
				twentytwenty_generate_css( 'body#tinymce.jk-editor.content pre, body#tinymce.jk-editor.content hr, body#tinymce.jk-editor.content fieldset,body#tinymce.jk-editor.content input, body#tinymce.jk-editor.content textarea', 'border-color', $borders );
			}
		}

		// Return the results.
		return ob_get_clean();
	}
}
