( function( $ ){
	jk.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '#site-title a' ).text( to );
		} );
	} );
	jk.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '#site-description' ).text( to );
		} );
	} );

	// Header text color.
	jk.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '#site-title, #site-title a, #site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '#site-title, #site-title a, #site-description' ).css( {
					'clip': 'auto',
					'color': to,
					'position': 'relative'
				} );
			}
		} );
	} );
} )( jQuery );