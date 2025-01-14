/**
 * Script for our custom colorpicker control.
 *
 * This is copied from jk-admin/js/customize-controls.js
 * with a few tweaks:
 * 		Removed the hue picker script because we don't use it here
 * 		Added the "palettes" argument in jkColorPicker().
 *
 * @since Twenty Twenty-One 1.0
 */
jk.customize.controlConstructor['twenty-twenty-one-color'] = jk.customize.Control.extend( {
	ready: function() {
		var control = this,
			updating = false,
			picker;

		picker = this.container.find( '.color-picker-hex' );
		picker.val( control.setting() ).jkColorPicker( {
			palettes: control.params.palette,
			change: function() {
				updating = true;
				control.setting.set( picker.jkColorPicker( 'color' ) );
				updating = false;
			},
			clear: function() {
				updating = true;
				control.setting.set( '' );
				updating = false;
			}
		} );

		control.setting.bind( function( value ) {
			// Bail if the update came from the control itself.
			if ( updating ) {
				return;
			}
			picker.val( value );
			picker.jkColorPicker( 'color', value );
		} );

		// Collapse color picker when hitting Esc instead of collapsing the current section.
		control.container.on( 'keydown', function( event ) {
			var pickerContainer;
			if ( 27 !== event.which ) { // Esc.
				return;
			}
			pickerContainer = control.container.find( '.jk-picker-container' );
			if ( pickerContainer.hasClass( 'jk-picker-active' ) ) {
				picker.jkColorPicker( 'close' );
				control.container.find( '.jk-color-result' ).focus();
				event.stopPropagation(); // Prevent section from being collapsed.
			}
		} );
	}
} );
