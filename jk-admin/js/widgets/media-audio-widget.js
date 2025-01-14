/**
 * @output jk-admin/js/widgets/media-audio-widget.js
 */

/* eslint consistent-this: [ "error", "control" ] */
(function( component ) {
	'use strict';

	var AudioWidgetModel, AudioWidgetControl, AudioDetailsMediaFrame;

	/**
	 * Custom audio details frame that removes the replace-audio state.
	 *
	 * @class    jk.mediaWidgets.controlConstructors~AudioDetailsMediaFrame
	 * @augments jk.media.view.MediaFrame.AudioDetails
	 */
	AudioDetailsMediaFrame = jk.media.view.MediaFrame.AudioDetails.extend(/** @lends jk.mediaWidgets.controlConstructors~AudioDetailsMediaFrame.prototype */{

		/**
		 * Create the default states.
		 *
		 * @return {void}
		 */
		createStates: function createStates() {
			this.states.add([
				new jk.media.controller.AudioDetails({
					media: this.media
				}),

				new jk.media.controller.MediaLibrary({
					type: 'audio',
					id: 'add-audio-source',
					title: jk.media.view.l10n.audioAddSourceTitle,
					toolbar: 'add-audio-source',
					media: this.media,
					menu: false
				})
			]);
		}
	});

	/**
	 * Audio widget model.
	 *
	 * See JK_Widget_Audio::enqueue_admin_scripts() for amending prototype from PHP exports.
	 *
	 * @class    jk.mediaWidgets.modelConstructors.media_audio
	 * @augments jk.mediaWidgets.MediaWidgetModel
	 */
	AudioWidgetModel = component.MediaWidgetModel.extend({});

	/**
	 * Audio widget control.
	 *
	 * See JK_Widget_Audio::enqueue_admin_scripts() for amending prototype from PHP exports.
	 *
	 * @class    jk.mediaWidgets.controlConstructors.media_audio
	 * @augments jk.mediaWidgets.MediaWidgetControl
	 */
	AudioWidgetControl = component.MediaWidgetControl.extend(/** @lends jk.mediaWidgets.controlConstructors.media_audio.prototype */{

		/**
		 * Show display settings.
		 *
		 * @type {boolean}
		 */
		showDisplaySettings: false,

		/**
		 * Map model props to media frame props.
		 *
		 * @param {Object} modelProps - Model props.
		 * @return {Object} Media frame props.
		 */
		mapModelToMediaFrameProps: function mapModelToMediaFrameProps( modelProps ) {
			var control = this, mediaFrameProps;
			mediaFrameProps = component.MediaWidgetControl.prototype.mapModelToMediaFrameProps.call( control, modelProps );
			mediaFrameProps.link = 'embed';
			return mediaFrameProps;
		},

		/**
		 * Render preview.
		 *
		 * @return {void}
		 */
		renderPreview: function renderPreview() {
			var control = this, previewContainer, previewTemplate, attachmentId, attachmentUrl;
			attachmentId = control.model.get( 'attachment_id' );
			attachmentUrl = control.model.get( 'url' );

			if ( ! attachmentId && ! attachmentUrl ) {
				return;
			}

			previewContainer = control.$el.find( '.media-widget-preview' );
			previewTemplate = jk.template( 'jk-media-widget-audio-preview' );

			previewContainer.html( previewTemplate({
				model: {
					attachment_id: control.model.get( 'attachment_id' ),
					src: attachmentUrl
				},
				error: control.model.get( 'error' )
			}));
			jk.mediaelement.initialize();
		},

		/**
		 * Open the media audio-edit frame to modify the selected item.
		 *
		 * @return {void}
		 */
		editMedia: function editMedia() {
			var control = this, mediaFrame, metadata, updateCallback;

			metadata = control.mapModelToMediaFrameProps( control.model.toJSON() );

			// Set up the media frame.
			mediaFrame = new AudioDetailsMediaFrame({
				frame: 'audio',
				state: 'audio-details',
				metadata: metadata
			});
			jk.media.frame = mediaFrame;
			mediaFrame.$el.addClass( 'media-widget' );

			updateCallback = function( mediaFrameProps ) {

				// Update cached attachment object to avoid having to re-fetch. This also triggers re-rendering of preview.
				control.selectedAttachment.set( mediaFrameProps );

				control.model.set( _.extend(
					control.model.defaults(),
					control.mapMediaToModelProps( mediaFrameProps ),
					{ error: false }
				) );
			};

			mediaFrame.state( 'audio-details' ).on( 'update', updateCallback );
			mediaFrame.state( 'replace-audio' ).on( 'replace', updateCallback );
			mediaFrame.on( 'close', function() {
				mediaFrame.detach();
			});

			mediaFrame.open();
		}
	});

	// Exports.
	component.controlConstructors.media_audio = AudioWidgetControl;
	component.modelConstructors.media_audio = AudioWidgetModel;

})( jk.mediaWidgets );
