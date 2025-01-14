/**
 * @output jk-includes/js/jk-ajax-response.js
 */

 /* global jkAjax */

window.jkAjax = jQuery.extend( {
	unserialize: function( s ) {
		var r = {}, q, pp, i, p;
		if ( !s ) { return r; }
		q = s.split('?'); if ( q[1] ) { s = q[1]; }
		pp = s.split('&');
		for ( i in pp ) {
			if ( typeof pp.hasOwnProperty === 'function' && !pp.hasOwnProperty(i) ) { continue; }
			p = pp[i].split('=');
			r[p[0]] = p[1];
		}
		return r;
	},
	parseAjaxResponse: function( x, r, e ) { // 1 = good, 0 = strange (bad data?), -1 = you lack permission.
		var parsed = {}, re = jQuery('#' + r).empty(), err = '', noticeMessage = '';

		if ( x && typeof x === 'object' && x.getElementsByTagName('jk_ajax') ) {
			parsed.responses = [];
			parsed.errors = false;
			jQuery('response', x).each( function() {
				var th = jQuery(this), child = jQuery(this.firstChild), response;
				response = { action: th.attr('action'), what: child.get(0).nodeName, id: child.attr('id'), oldId: child.attr('old_id'), position: child.attr('position') };
				response.data = jQuery( 'response_data', child ).text();
				response.supplemental = {};
				if ( !jQuery( 'supplemental', child ).children().each( function() {

					if ( this.nodeName === 'notice' ) {
						noticeMessage += jQuery(this).text();
						return;
					}

					response.supplemental[this.nodeName] = jQuery(this).text();
				} ).length ) { response.supplemental = false; }
				response.errors = [];
				if ( !jQuery('jk_error', child).each( function() {
					var code = jQuery(this).attr('code'), anError, errorData, formField;
					anError = { code: code, message: this.firstChild.nodeValue, data: false };
					errorData = jQuery('jk_error_data[code="' + code + '"]', x);
					if ( errorData ) { anError.data = errorData.get(); }
					formField = jQuery( 'form-field', errorData ).text();
					if ( formField ) { code = formField; }
					if ( e ) { jkAjax.invalidateForm( jQuery('#' + e + ' :input[name="' + code + '"]' ).parents('.form-field:first') ); }
					err += '<p>' + anError.message + '</p>';
					response.errors.push( anError );
					parsed.errors = true;
				} ).length ) { response.errors = false; }
				parsed.responses.push( response );
			} );
			if ( err.length ) {
				re.html( '<div class="notice notice-error" role="alert">' + err + '</div>' );
				jk.a11y.speak( err );
			} else if ( noticeMessage.length ) {
				re.html( '<div class="notice notice-success is-dismissible" role="alert"><p>' + noticeMessage + '</p></div>');
				jQuery(document).trigger( 'jk-updates-notice-added' );
				jk.a11y.speak( noticeMessage );
			}
			return parsed;
		}
		if ( isNaN( x ) ) {
			jk.a11y.speak( x );
			return ! re.html( '<div class="notice notice-error" role="alert"><p>' + x + '</p></div>' );
		}
		x = parseInt( x, 10 );
		if ( -1 === x ) {
			jk.a11y.speak( jkAjax.noPerm );
			return ! re.html( '<div class="notice notice-error" role="alert"><p>' + jkAjax.noPerm + '</p></div>' );
		} else if ( 0 === x ) {
			jk.a11y.speak( jkAjax.broken );
			return ! re.html( '<div class="notice notice-error" role="alert"><p>' + jkAjax.broken  + '</p></div>' );
		}
		return true;
	},
	invalidateForm: function ( selector ) {
		return jQuery( selector ).addClass( 'form-invalid' ).find('input').one( 'change jk-check-valid-field', function() { jQuery(this).closest('.form-invalid').removeClass( 'form-invalid' ); } );
	},
	validateForm: function( selector ) {
		selector = jQuery( selector );
		return !jkAjax.invalidateForm( selector.find('.form-required').filter( function() { return jQuery('input:visible', this).val() === ''; } ) ).length;
	}
}, jkAjax || { noPerm: 'Sorry, you are not allowed to do that.', broken: 'Something went wrong.' } );

// Basic form validation.
jQuery( function($){
	$('form.validate').on( 'submit', function() { return jkAjax.validateForm( $(this) ); } );
});
