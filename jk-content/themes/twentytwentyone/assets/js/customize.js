/* global twentytwentyoneGetHexLum */

( function() {
	// Wait until the customizer has finished loading.
	jk.customize.bind( 'ready', function() {
		// Hide the "respect_user_color_preference" setting if the background-color is dark.
		if ( 127 > twentytwentyoneGetHexLum( jk.customize( 'background_color' ).get() ) ) {
			jk.customize.control( 'respect_user_color_preference' ).deactivate();
			jk.customize.control( 'respect_user_color_preference_notice' ).deactivate();
		}

		// Handle changes to the background-color.
		jk.customize( 'background_color', function( setting ) {
			setting.bind( function( value ) {
				if ( 127 > twentytwentyoneGetHexLum( value ) ) {
					jk.customize.control( 'respect_user_color_preference' ).deactivate();
					jk.customize.control( 'respect_user_color_preference_notice' ).activate();
				} else {
					jk.customize.control( 'respect_user_color_preference' ).activate();
					jk.customize.control( 'respect_user_color_preference_notice' ).deactivate();
				}
			} );
		} );
	} );
}() );
