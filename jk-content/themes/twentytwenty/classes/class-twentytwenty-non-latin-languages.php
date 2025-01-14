<?php
/**
 * Non-latin language handling.
 *
 * Handle non-latin language styles.
 *
 * @package JKPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

if ( ! class_exists( 'TwentyTwenty_Non_Latin_Languages' ) ) {
	/**
	 * Language handling.
	 *
	 * @since Twenty Twenty 1.0
	 */
	class TwentyTwenty_Non_Latin_Languages {

		/**
		 * Get custom CSS.
		 *
		 * Return CSS for non-latin language, if available, or null
		 *
		 * @since Twenty Twenty 1.0
		 *
		 * @param string $type Whether to return CSS for the "front-end", "block-editor", or "classic-editor".
		 * @return string|null Custom CSS, or null if not applicable.
		 */
		public static function get_non_latin_css( $type = 'front-end' ) {

			// Fetch site locale.
			$locale = get_bloginfo( 'language' );

			/**
			 * Filters the fallback fonts for non-latin languages.
			 *
			 * @since Twenty Twenty 1.0
			 *
			 * @param array $font_family An array of locales and font families.
			 */
			$font_family = apply_filters(
				'twentytwenty_get_localized_font_family_types',
				array(

					// Arabic.
					'ar'    => array( 'Tahoma', 'Arial', 'sans-serif' ),
					'ary'   => array( 'Tahoma', 'Arial', 'sans-serif' ),
					'azb'   => array( 'Tahoma', 'Arial', 'sans-serif' ),
					'ckb'   => array( 'Tahoma', 'Arial', 'sans-serif' ),
					'fa-IR' => array( 'Tahoma', 'Arial', 'sans-serif' ),
					'haz'   => array( 'Tahoma', 'Arial', 'sans-serif' ),
					'ps'    => array( 'Tahoma', 'Arial', 'sans-serif' ),

					// Chinese Simplified (China) - Noto Sans SC.
					'zh-CN' => array( '\'PingFang SC\'', '\'Helvetica Neue\'', '\'Microsoft YaHei New\'', '\'STHeiti Light\'', 'sans-serif' ),

					// Chinese Traditional (Taiwan) - Noto Sans TC.
					'zh-TW' => array( '\'PingFang TC\'', '\'Helvetica Neue\'', '\'Microsoft YaHei New\'', '\'STHeiti Light\'', 'sans-serif' ),

					// Chinese (Hong Kong) - Noto Sans HK.
					'zh-HK' => array( '\'PingFang HK\'', '\'Helvetica Neue\'', '\'Microsoft YaHei New\'', '\'STHeiti Light\'', 'sans-serif' ),

					// Cyrillic.
					'bel'   => array( '\'Helvetica Neue\'', 'Helvetica', '\'Segoe UI\'', 'Arial', 'sans-serif' ),
					'bg-BG' => array( '\'Helvetica Neue\'', 'Helvetica', '\'Segoe UI\'', 'Arial', 'sans-serif' ),
					'kk'    => array( '\'Helvetica Neue\'', 'Helvetica', '\'Segoe UI\'', 'Arial', 'sans-serif' ),
					'mk-MK' => array( '\'Helvetica Neue\'', 'Helvetica', '\'Segoe UI\'', 'Arial', 'sans-serif' ),
					'mn'    => array( '\'Helvetica Neue\'', 'Helvetica', '\'Segoe UI\'', 'Arial', 'sans-serif' ),
					'ru-RU' => array( '\'Helvetica Neue\'', 'Helvetica', '\'Segoe UI\'', 'Arial', 'sans-serif' ),
					'sah'   => array( '\'Helvetica Neue\'', 'Helvetica', '\'Segoe UI\'', 'Arial', 'sans-serif' ),
					'sr-RS' => array( '\'Helvetica Neue\'', 'Helvetica', '\'Segoe UI\'', 'Arial', 'sans-serif' ),
					'tt-RU' => array( '\'Helvetica Neue\'', 'Helvetica', '\'Segoe UI\'', 'Arial', 'sans-serif' ),
					'uk'    => array( '\'Helvetica Neue\'', 'Helvetica', '\'Segoe UI\'', 'Arial', 'sans-serif' ),

					// Devanagari.
					'bn-BD' => array( 'Arial', 'sans-serif' ),
					'hi-IN' => array( 'Arial', 'sans-serif' ),
					'mr'    => array( 'Arial', 'sans-serif' ),
					'ne-NP' => array( 'Arial', 'sans-serif' ),

					// Greek.
					'el'    => array( '\'Helvetica Neue\', Helvetica, Arial, sans-serif' ),

					// Gujarati.
					'gu'    => array( 'Arial', 'sans-serif' ),

					// Hebrew.
					'he-IL' => array( '\'Arial Hebrew\'', 'Arial', 'sans-serif' ),

					// Japanese.
					'ja'    => array( 'sans-serif' ),

					// Korean.
					'ko-KR' => array( '\'Apple SD Gothic Neo\'', '\'Malgun Gothic\'', '\'Nanum Gothic\'', 'Dotum', 'sans-serif' ),

					// Thai.
					'th'    => array( '\'Sukhumvit Set\'', '\'Helvetica Neue\'', 'Helvetica', 'Arial', 'sans-serif' ),

					// Vietnamese.
					'vi'    => array( '\'Libre Franklin\'', 'sans-serif' ),

				)
			);

			// Return if the selected language has no fallback fonts.
			if ( empty( $font_family[ $locale ] ) ) {
				return null;
			}

			/**
			 * Filters the elements to apply fallback fonts to.
			 *
			 * @since Twenty Twenty 1.0
			 *
			 * @param array $elements An array of elements for "front-end", "block-editor", or "classic-editor".
			 */
			$elements = apply_filters(
				'twentytwenty_get_localized_font_family_elements',
				array(
					'front-end'      => array( 'body', 'input', 'textarea', 'button', '.button', '.faux-button', '.faux-button.more-link', '.jk-block-button__link', '.jk-block-file__button', '.has-drop-cap:not(:focus)::first-letter', '.entry-content .jk-block-archives', '.entry-content .jk-block-categories', '.entry-content .jk-block-cover-image', '.entry-content .jk-block-cover-image p', '.entry-content .jk-block-latest-comments', '.entry-content .jk-block-latest-posts', '.entry-content .jk-block-pullquote', '.entry-content .jk-block-quote.is-large', '.entry-content .jk-block-quote.is-style-large', '.entry-content .jk-block-archives *', '.entry-content .jk-block-categories *', '.entry-content .jk-block-latest-posts *', '.entry-content .jk-block-latest-comments *', '.entry-content', '.entry-content h1', '.entry-content h2', '.entry-content h3', '.entry-content h4', '.entry-content h5', '.entry-content h6', '.entry-content p', '.entry-content ol', '.entry-content ul', '.entry-content dl', '.entry-content dt', '.entry-content cite', '.entry-content figcaption', '.entry-content table', '.entry-content address', '.entry-content .jk-caption-text', '.entry-content .jk-block-file', '.comment-content p', '.comment-content ol', '.comment-content ul', '.comment-content dl', '.comment-content dt', '.comment-content cite', '.comment-content figcaption', '.comment-content .jk-caption-text', '.widget_text p', '.widget_text ol', '.widget_text ul', '.widget_text dl', '.widget_text dt', '.widget-content .rssSummary', '.widget-content cite', '.widget-content figcaption', '.widget-content .jk-caption-text' ),
					'block-editor'   => array( '.editor-styles-wrapper > *', '.editor-styles-wrapper p', '.editor-styles-wrapper ol', '.editor-styles-wrapper ul', '.editor-styles-wrapper dl', '.editor-styles-wrapper dt', '.editor-post-title__block .editor-post-title__input', '.editor-styles-wrapper .jk-block-post-title', '.editor-styles-wrapper h1', '.editor-styles-wrapper h2', '.editor-styles-wrapper h3', '.editor-styles-wrapper h4', '.editor-styles-wrapper h5', '.editor-styles-wrapper h6', '.editor-styles-wrapper .has-drop-cap:not(:focus)::first-letter', '.editor-styles-wrapper cite', '.editor-styles-wrapper figcaption', '.editor-styles-wrapper .jk-caption-text' ),
					'classic-editor' => array( 'body#tinymce.jk-editor', 'body#tinymce.jk-editor p', 'body#tinymce.jk-editor ol', 'body#tinymce.jk-editor ul', 'body#tinymce.jk-editor dl', 'body#tinymce.jk-editor dt', 'body#tinymce.jk-editor figcaption', 'body#tinymce.jk-editor .jk-caption-text', 'body#tinymce.jk-editor .jk-caption-dd', 'body#tinymce.jk-editor cite', 'body#tinymce.jk-editor table' ),
				)
			);

			// Return if the specified type doesn't exist.
			if ( empty( $elements[ $type ] ) ) {
				return null;
			}

			// Return the specified styles.
			return twentytwenty_generate_css( implode( ',', $elements[ $type ] ), 'font-family', implode( ',', $font_family[ $locale ] ), null, null, false );
		}
	}
}
