/* global tinymce */
/**
 * Included for back-compat.
 * The default WindowManager in TinyMCE 4.0 supports three types of dialogs:
 *	- With HTML created from JS.
 *	- With inline HTML (like JKWindowManager).
 *	- Old type iframe based dialogs.
 * For examples see the default plugins: https://github.com/tinymce/tinymce/tree/master/js/tinymce/plugins
 */
tinymce.JKWindowManager = tinymce.InlineWindowManager = function( editor ) {
	if ( this.jk ) {
		return this;
	}

	this.jk = {};
	this.parent = editor.windowManager;
	this.editor = editor;

	tinymce.extend( this, this.parent );

	this.open = function( args, params ) {
		var $element,
			self = this,
			jk = this.jk;

		if ( ! args.jkDialog ) {
			return this.parent.open.apply( this, arguments );
		} else if ( ! args.id ) {
			return;
		}

		if ( typeof jQuery === 'undefined' || ! jQuery.jk || ! jQuery.jk.wpdialog ) {
			// wpdialog.js is not loaded.
			if ( window.console && window.console.error ) {
				window.console.error('wpdialog.js is not loaded. Please set "wpdialogs" as dependency for your script when calling jk_enqueue_script(). You may also want to enqueue the "jk-jquery-ui-dialog" stylesheet.');
			}

			return;
		}

		jk.$element = $element = jQuery( '#' + args.id );

		if ( ! $element.length ) {
			return;
		}

		if ( window.console && window.console.log ) {
			window.console.log('tinymce.JKWindowManager is deprecated. Use the default editor.windowManager to open dialogs with inline HTML.');
		}

		jk.features = args;
		jk.params = params;

		// Store selection. Takes a snapshot in the FocusManager of the selection before focus is moved to the dialog.
		editor.nodeChanged();

		// Create the dialog if necessary.
		if ( ! $element.data('wpdialog') ) {
			$element.wpdialog({
				title: args.title,
				width: args.width,
				height: args.height,
				modal: true,
				dialogClass: 'jk-dialog',
				zIndex: 300000
			});
		}

		$element.wpdialog('open');

		$element.on( 'wpdialogclose', function() {
			if ( self.jk.$element ) {
				self.jk = {};
			}
		});
	};

	this.close = function() {
		if ( ! this.jk.features || ! this.jk.features.jkDialog ) {
			return this.parent.close.apply( this, arguments );
		}

		this.jk.$element.wpdialog('close');
	};
};

tinymce.PluginManager.add( 'wpdialogs', function( editor ) {
	// Replace window manager.
	editor.on( 'init', function() {
		editor.windowManager = new tinymce.JKWindowManager( editor );
	});
});
