/**
 * @output jk-includes/js/jk-util.js
 */

/* global _jkUtilSettings */

/** @namespace jk */
window.jk = window.jk || {};

(function ($) {
	// Check for the utility settings.
	var settings = typeof _jkUtilSettings === 'undefined' ? {} : _jkUtilSettings;

	/**
	 * jk.template( id )
	 *
	 * Fetch a JavaScript template for an id, and return a templating function for it.
	 *
	 * @param {string} id A string that corresponds to a DOM element with an id prefixed with "tmpl-".
	 *                    For example, "attachment" maps to "tmpl-attachment".
	 * @return {function} A function that lazily-compiles the template requested.
	 */
	jk.template = _.memoize(function ( id ) {
		var compiled,
			/*
			 * Underscore's default ERB-style templates are incompatible with PHP
			 * when asp_tags is enabled, so JKPress uses Mustache-inspired templating syntax.
			 *
			 * @see trac ticket #22344.
			 */
			options = {
				evaluate:    /<#([\s\S]+?)#>/g,
				interpolate: /\{\{\{([\s\S]+?)\}\}\}/g,
				escape:      /\{\{([^\}]+?)\}\}(?!\})/g,
				variable:    'data'
			};

		return function ( data ) {
			if ( ! document.getElementById( 'tmpl-' + id ) ) {
				throw new Error( 'Template not found: ' + '#tmpl-' + id );
			}
			compiled = compiled || _.template( $( '#tmpl-' + id ).html(),  options );
			return compiled( data );
		};
	});

	/*
	 * jk.ajax
	 * ------
	 *
	 * Tools for sending ajax requests with JSON responses and built in error handling.
	 * Mirrors and wraps jQuery's ajax APIs.
	 */
	jk.ajax = {
		settings: settings.ajax || {},

		/**
		 * jk.ajax.post( [action], [data] )
		 *
		 * Sends a POST request to JKPress.
		 *
		 * @param {(string|Object)} action The slug of the action to fire in JKPress or options passed
		 *                                 to jQuery.ajax.
		 * @param {Object=}         data   Optional. The data to populate $_POST with.
		 * @return {$.promise} A jQuery promise that represents the request,
		 *                     decorated with an abort() method.
		 */
		post: function( action, data ) {
			return jk.ajax.send({
				data: _.isObject( action ) ? action : _.extend( data || {}, { action: action })
			});
		},

		/**
		 * jk.ajax.send( [action], [options] )
		 *
		 * Sends a POST request to JKPress.
		 *
		 * @param {(string|Object)} action  The slug of the action to fire in JKPress or options passed
		 *                                  to jQuery.ajax.
		 * @param {Object=}         options Optional. The options passed to jQuery.ajax.
		 * @return {$.promise} A jQuery promise that represents the request,
		 *                     decorated with an abort() method.
		 */
		send: function( action, options ) {
			var promise, deferred;
			if ( _.isObject( action ) ) {
				options = action;
			} else {
				options = options || {};
				options.data = _.extend( options.data || {}, { action: action });
			}

			options = _.defaults( options || {}, {
				type:    'POST',
				url:     jk.ajax.settings.url,
				context: this
			});

			deferred = $.Deferred( function( deferred ) {
				// Transfer success/error callbacks.
				if ( options.success ) {
					deferred.done( options.success );
				}

				if ( options.error ) {
					deferred.fail( options.error );
				}

				delete options.success;
				delete options.error;

				// Use with PHP's jk_send_json_success() and jk_send_json_error().
				deferred.jqXHR = $.ajax( options ).done( function( response ) {
					// Treat a response of 1 as successful for backward compatibility with existing handlers.
					if ( response === '1' || response === 1 ) {
						response = { success: true };
					}

					if ( _.isObject( response ) && ! _.isUndefined( response.success ) ) {

						// When handling a media attachments request, get the total attachments from response headers.
						var context = this;
						deferred.done( function() {
							if (
								action &&
								action.data &&
								'query-attachments' === action.data.action &&
								deferred.jqXHR.hasOwnProperty( 'getResponseHeader' ) &&
								deferred.jqXHR.getResponseHeader( 'X-JK-Total' )
							) {
								context.totalAttachments = parseInt( deferred.jqXHR.getResponseHeader( 'X-JK-Total' ), 10 );
							} else {
								context.totalAttachments = 0;
							}
						} );
						deferred[ response.success ? 'resolveWith' : 'rejectWith' ]( this, [response.data] );
					} else {
						deferred.rejectWith( this, [response] );
					}
				}).fail( function() {
					deferred.rejectWith( this, arguments );
				});
			});

			promise = deferred.promise();
			promise.abort = function() {
				deferred.jqXHR.abort();
				return this;
			};

			return promise;
		}
	};

}(jQuery));
