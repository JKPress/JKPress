/* global _jkmejsSettings, mejsL10n */
(function( window, $ ) {

	window.jk = window.jk || {};

	function jkMediaElement() {
		var settings = {};

		/**
		 * Initialize media elements.
		 *
		 * Ensures media elements that have already been initialized won't be
		 * processed again.
		 *
		 * @memberOf jk.mediaelement
		 *
		 * @since 4.4.0
		 *
		 * @return {void}
		 */
		function initialize() {
			var selectors = [];

			if ( typeof _jkmejsSettings !== 'undefined' ) {
				settings = $.extend( true, {}, _jkmejsSettings );
			}
			settings.classPrefix = 'mejs-';
			settings.success = settings.success || function ( mejs ) {
				var autoplay, loop;

				if ( mejs.rendererName && -1 !== mejs.rendererName.indexOf( 'flash' ) ) {
					autoplay = mejs.attributes.autoplay && 'false' !== mejs.attributes.autoplay;
					loop = mejs.attributes.loop && 'false' !== mejs.attributes.loop;

					if ( autoplay ) {
						mejs.addEventListener( 'canplay', function() {
							mejs.play();
						}, false );
					}

					if ( loop ) {
						mejs.addEventListener( 'ended', function() {
							mejs.play();
						}, false );
					}
				}
			};

			/**
			 * Custom error handler.
			 *
			 * Sets up a custom error handler in case a video render fails, and provides a download
			 * link as the fallback.
			 *
			 * @since 4.9.3
			 *
			 * @param {object} media The wrapper that mimics all the native events/properties/methods for all renderers.
			 * @param {object} node  The original HTML video, audio, or iframe tag where the media was loaded.
			 * @return {string}
			 */
			settings.customError = function ( media, node ) {
				// Make sure we only fall back to a download link for flash files.
				if ( -1 !== media.rendererName.indexOf( 'flash' ) || -1 !== media.rendererName.indexOf( 'flv' ) ) {
					return '<a href="' + node.src + '">' + mejsL10n.strings['mejs.download-file'] + '</a>';
				}
			};

			if ( 'undefined' === typeof settings.videoShortcodeLibrary || 'mediaelement' === settings.videoShortcodeLibrary ) {
				selectors.push( '.jk-video-shortcode' );
			}
			if ( 'undefined' === typeof settings.audioShortcodeLibrary || 'mediaelement' === settings.audioShortcodeLibrary ) {
				selectors.push( '.jk-audio-shortcode' );
			}
			if ( ! selectors.length ) {
				return;
			}

			// Only initialize new media elements.
			$( selectors.join( ', ' ) )
				.not( '.mejs-container' )
				.filter(function () {
					return ! $( this ).parent().hasClass( 'mejs-mediaelement' );
				})
				.mediaelementplayer( settings );
		}

		return {
			initialize: initialize
		};
	}

	/**
	 * @namespace jk.mediaelement
	 * @memberOf jk
	 */
	window.jk.mediaelement = new jkMediaElement();

	$( window.jk.mediaelement.initialize );

})( window, jQuery );
