<?php
/**
 * Dependencies API: Scripts functions
 *
 * @since 2.6.0
 *
 * @package JKPress
 * @subpackage Dependencies
 */

/**
 * Initializes $jk_scripts if it has not been set.
 *
 * @since 4.2.0
 *
 * @global JK_Scripts $jk_scripts
 *
 * @return JK_Scripts JK_Scripts instance.
 */
function jk_scripts() {
	global $jk_scripts;

	if ( ! ( $jk_scripts instanceof JK_Scripts ) ) {
		$jk_scripts = new JK_Scripts();
	}

	return $jk_scripts;
}

/**
 * Helper function to output a _doing_it_wrong message when applicable.
 *
 * @ignore
 * @since 4.2.0
 * @since 5.5.0 Added the `$handle` parameter.
 *
 * @param string $function_name Function name.
 * @param string $handle        Optional. Name of the script or stylesheet that was
 *                              registered or enqueued too early. Default empty.
 */
function _jk_scripts_maybe_doing_it_wrong( $function_name, $handle = '' ) {
	if ( did_action( 'init' ) || did_action( 'jk_enqueue_scripts' )
		|| did_action( 'admin_enqueue_scripts' ) || did_action( 'login_enqueue_scripts' )
	) {
		return;
	}

	$message = sprintf(
		/* translators: 1: jk_enqueue_scripts, 2: admin_enqueue_scripts, 3: login_enqueue_scripts */
		__( 'Scripts and styles should not be registered or enqueued until the %1$s, %2$s, or %3$s hooks.' ),
		'<code>jk_enqueue_scripts</code>',
		'<code>admin_enqueue_scripts</code>',
		'<code>login_enqueue_scripts</code>'
	);

	if ( $handle ) {
		$message .= ' ' . sprintf(
			/* translators: %s: Name of the script or stylesheet. */
			__( 'This notice was triggered by the %s handle.' ),
			'<code>' . $handle . '</code>'
		);
	}

	_doing_it_wrong(
		$function_name,
		$message,
		'3.3.0'
	);
}

/**
 * Prints scripts in document head that are in the $handles queue.
 *
 * Called by admin-header.php and {@see 'jk_head'} hook. Since it is called by jk_head on every page load,
 * the function does not instantiate the JK_Scripts object unless script names are explicitly passed.
 * Makes use of already-instantiated `$jk_scripts` global if present. Use provided {@see 'jk_print_scripts'}
 * hook to register/enqueue new scripts.
 *
 * @see JK_Scripts::do_item()
 * @since 2.1.0
 *
 * @global JK_Scripts $jk_scripts The JK_Scripts object for printing scripts.
 *
 * @param string|string[]|false $handles Optional. Scripts to be printed. Default 'false'.
 * @return string[] On success, an array of handles of processed JK_Dependencies items; otherwise, an empty array.
 */
function jk_print_scripts( $handles = false ) {
	global $jk_scripts;

	/**
	 * Fires before scripts in the $handles queue are printed.
	 *
	 * @since 2.1.0
	 */
	do_action( 'jk_print_scripts' );

	if ( '' === $handles ) { // For 'jk_head'.
		$handles = false;
	}

	_jk_scripts_maybe_doing_it_wrong( __FUNCTION__ );

	if ( ! ( $jk_scripts instanceof JK_Scripts ) ) {
		if ( ! $handles ) {
			return array(); // No need to instantiate if nothing is there.
		}
	}

	return jk_scripts()->do_items( $handles );
}

/**
 * Adds extra code to a registered script.
 *
 * Code will only be added if the script is already in the queue.
 * Accepts a string `$data` containing the code. If two or more code blocks
 * are added to the same script `$handle`, they will be printed in the order
 * they were added, i.e. the latter added code can redeclare the previous.
 *
 * @since 4.5.0
 *
 * @see JK_Scripts::add_inline_script()
 *
 * @param string $handle   Name of the script to add the inline script to.
 * @param string $data     String containing the JavaScript to be added.
 * @param string $position Optional. Whether to add the inline script before the handle
 *                         or after. Default 'after'.
 * @return bool True on success, false on failure.
 */
function jk_add_inline_script( $handle, $data, $position = 'after' ) {
	_jk_scripts_maybe_doing_it_wrong( __FUNCTION__, $handle );

	if ( false !== stripos( $data, '</script>' ) ) {
		_doing_it_wrong(
			__FUNCTION__,
			sprintf(
				/* translators: 1: <script>, 2: jk_add_inline_script() */
				__( 'Do not pass %1$s tags to %2$s.' ),
				'<code>&lt;script&gt;</code>',
				'<code>jk_add_inline_script()</code>'
			),
			'4.5.0'
		);
		$data = trim( preg_replace( '#<script[^>]*>(.*)</script>#is', '$1', $data ) );
	}

	return jk_scripts()->add_inline_script( $handle, $data, $position );
}

/**
 * Registers a new script.
 *
 * Registers a script to be enqueued later using the jk_enqueue_script() function.
 *
 * @see JK_Dependencies::add()
 * @see JK_Dependencies::add_data()
 *
 * @since 2.1.0
 * @since 4.3.0 A return value was added.
 * @since 6.3.0 The $in_footer parameter of type boolean was overloaded to be an $args parameter of type array.
 *
 * @param string           $handle    Name of the script. Should be unique.
 * @param string|false     $src       Full URL of the script, or path of the script relative to the JKPress root directory.
 *                                    If source is set to false, script is an alias of other scripts it depends on.
 * @param string[]         $deps      Optional. An array of registered script handles this script depends on. Default empty array.
 * @param string|bool|null $ver       Optional. String specifying script version number, if it has one, which is added to the URL
 *                                    as a query string for cache busting purposes. If version is set to false, a version
 *                                    number is automatically added equal to current installed JKPress version.
 *                                    If set to null, no version is added.
 * @param array|bool       $args     {
 *     Optional. An array of additional script loading strategies. Default empty array.
 *     Otherwise, it may be a boolean in which case it determines whether the script is printed in the footer. Default false.
 *
 *     @type string    $strategy     Optional. If provided, may be either 'defer' or 'async'.
 *     @type bool      $in_footer    Optional. Whether to print the script in the footer. Default 'false'.
 * }
 * @return bool Whether the script has been registered. True on success, false on failure.
 */
function jk_register_script( $handle, $src, $deps = array(), $ver = false, $args = array() ) {
	if ( ! is_array( $args ) ) {
		$args = array(
			'in_footer' => (bool) $args,
		);
	}
	_jk_scripts_maybe_doing_it_wrong( __FUNCTION__, $handle );

	$jk_scripts = jk_scripts();

	$registered = $jk_scripts->add( $handle, $src, $deps, $ver );
	if ( ! empty( $args['in_footer'] ) ) {
		$jk_scripts->add_data( $handle, 'group', 1 );
	}
	if ( ! empty( $args['strategy'] ) ) {
		$jk_scripts->add_data( $handle, 'strategy', $args['strategy'] );
	}
	return $registered;
}

/**
 * Localizes a script.
 *
 * Works only if the script has already been registered.
 *
 * Accepts an associative array `$l10n` and creates a JavaScript object:
 *
 *     "$object_name": {
 *         key: value,
 *         key: value,
 *         ...
 *     }
 *
 * @see JK_Scripts::localize()
 * @link https://core.trac.wordpress.org/ticket/11520
 *
 * @since 2.2.0
 *
 * @todo Documentation cleanup
 *
 * @param string $handle      Script handle the data will be attached to.
 * @param string $object_name Name for the JavaScript object. Passed directly, so it should be qualified JS variable.
 *                            Example: '/[a-zA-Z0-9_]+/'.
 * @param array  $l10n        The data itself. The data can be either a single or multi-dimensional array.
 * @return bool True if the script was successfully localized, false otherwise.
 */
function jk_localize_script( $handle, $object_name, $l10n ) {
	$jk_scripts = jk_scripts();

	return $jk_scripts->localize( $handle, $object_name, $l10n );
}

/**
 * Sets translated strings for a script.
 *
 * Works only if the script has already been registered.
 *
 * @see JK_Scripts::set_translations()
 * @since 5.0.0
 * @since 5.1.0 The `$domain` parameter was made optional.
 *
 * @global JK_Scripts $jk_scripts The JK_Scripts object for printing scripts.
 *
 * @param string $handle Script handle the textdomain will be attached to.
 * @param string $domain Optional. Text domain. Default 'default'.
 * @param string $path   Optional. The full file path to the directory containing translation files.
 * @return bool True if the text domain was successfully localized, false otherwise.
 */
function jk_set_script_translations( $handle, $domain = 'default', $path = '' ) {
	global $jk_scripts;

	if ( ! ( $jk_scripts instanceof JK_Scripts ) ) {
		_jk_scripts_maybe_doing_it_wrong( __FUNCTION__, $handle );
		return false;
	}

	return $jk_scripts->set_translations( $handle, $domain, $path );
}

/**
 * Removes a registered script.
 *
 * Note: there are intentional safeguards in place to prevent critical admin scripts,
 * such as jQuery core, from being unregistered.
 *
 * @see JK_Dependencies::remove()
 *
 * @since 2.1.0
 *
 * @global string $pagenow The filename of the current screen.
 *
 * @param string $handle Name of the script to be removed.
 */
function jk_deregister_script( $handle ) {
	global $pagenow;

	_jk_scripts_maybe_doing_it_wrong( __FUNCTION__, $handle );

	/**
	 * Do not allow accidental or negligent de-registering of critical scripts in the admin.
	 * Show minimal remorse if the correct hook is used.
	 */
	$current_filter = current_filter();
	if ( ( is_admin() && 'admin_enqueue_scripts' !== $current_filter ) ||
		( 'jk-login.php' === $pagenow && 'login_enqueue_scripts' !== $current_filter )
	) {
		$not_allowed = array(
			'jquery',
			'jquery-core',
			'jquery-migrate',
			'jquery-ui-core',
			'jquery-ui-accordion',
			'jquery-ui-autocomplete',
			'jquery-ui-button',
			'jquery-ui-datepicker',
			'jquery-ui-dialog',
			'jquery-ui-draggable',
			'jquery-ui-droppable',
			'jquery-ui-menu',
			'jquery-ui-mouse',
			'jquery-ui-position',
			'jquery-ui-progressbar',
			'jquery-ui-resizable',
			'jquery-ui-selectable',
			'jquery-ui-slider',
			'jquery-ui-sortable',
			'jquery-ui-spinner',
			'jquery-ui-tabs',
			'jquery-ui-tooltip',
			'jquery-ui-widget',
			'underscore',
			'backbone',
		);

		if ( in_array( $handle, $not_allowed, true ) ) {
			_doing_it_wrong(
				__FUNCTION__,
				sprintf(
					/* translators: 1: Script name, 2: jk_enqueue_scripts */
					__( 'Do not deregister the %1$s script in the administration area. To target the front-end theme, use the %2$s hook.' ),
					"<code>$handle</code>",
					'<code>jk_enqueue_scripts</code>'
				),
				'3.6.0'
			);
			return;
		}
	}

	jk_scripts()->remove( $handle );
}

/**
 * Enqueues a script.
 *
 * Registers the script if `$src` provided (does NOT overwrite), and enqueues it.
 *
 * @see JK_Dependencies::add()
 * @see JK_Dependencies::add_data()
 * @see JK_Dependencies::enqueue()
 *
 * @since 2.1.0
 * @since 6.3.0 The $in_footer parameter of type boolean was overloaded to be an $args parameter of type array.
 *
 * @param string           $handle    Name of the script. Should be unique.
 * @param string           $src       Full URL of the script, or path of the script relative to the JKPress root directory.
 *                                    Default empty.
 * @param string[]         $deps      Optional. An array of registered script handles this script depends on. Default empty array.
 * @param string|bool|null $ver       Optional. String specifying script version number, if it has one, which is added to the URL
 *                                    as a query string for cache busting purposes. If version is set to false, a version
 *                                    number is automatically added equal to current installed JKPress version.
 *                                    If set to null, no version is added.
 * @param array|bool       $args     {
 *     Optional. An array of additional script loading strategies. Default empty array.
 *     Otherwise, it may be a boolean in which case it determines whether the script is printed in the footer. Default false.
 *
 *     @type string    $strategy     Optional. If provided, may be either 'defer' or 'async'.
 *     @type bool      $in_footer    Optional. Whether to print the script in the footer. Default 'false'.
 * }
 */
function jk_enqueue_script( $handle, $src = '', $deps = array(), $ver = false, $args = array() ) {
	_jk_scripts_maybe_doing_it_wrong( __FUNCTION__, $handle );

	$jk_scripts = jk_scripts();

	if ( $src || ! empty( $args ) ) {
		$_handle = explode( '?', $handle );
		if ( ! is_array( $args ) ) {
			$args = array(
				'in_footer' => (bool) $args,
			);
		}

		if ( $src ) {
			$jk_scripts->add( $_handle[0], $src, $deps, $ver );
		}
		if ( ! empty( $args['in_footer'] ) ) {
			$jk_scripts->add_data( $_handle[0], 'group', 1 );
		}
		if ( ! empty( $args['strategy'] ) ) {
			$jk_scripts->add_data( $_handle[0], 'strategy', $args['strategy'] );
		}
	}

	$jk_scripts->enqueue( $handle );
}

/**
 * Removes a previously enqueued script.
 *
 * @see JK_Dependencies::dequeue()
 *
 * @since 3.1.0
 *
 * @param string $handle Name of the script to be removed.
 */
function jk_dequeue_script( $handle ) {
	_jk_scripts_maybe_doing_it_wrong( __FUNCTION__, $handle );

	jk_scripts()->dequeue( $handle );
}

/**
 * Determines whether a script has been added to the queue.
 *
 * For more information on this and similar theme functions, check out
 * the {@link https://developer.wordpress.org/themes/basics/conditional-tags/
 * Conditional Tags} article in the Theme Developer Handbook.
 *
 * @since 2.8.0
 * @since 3.5.0 'enqueued' added as an alias of the 'queue' list.
 *
 * @param string $handle Name of the script.
 * @param string $status Optional. Status of the script to check. Default 'enqueued'.
 *                       Accepts 'enqueued', 'registered', 'queue', 'to_do', and 'done'.
 * @return bool Whether the script is queued.
 */
function jk_script_is( $handle, $status = 'enqueued' ) {
	_jk_scripts_maybe_doing_it_wrong( __FUNCTION__, $handle );

	return (bool) jk_scripts()->query( $handle, $status );
}

/**
 * Adds metadata to a script.
 *
 * Works only if the script has already been registered.
 *
 * Possible values for $key and $value:
 * 'conditional' string Comments for IE 6, lte IE 7, etc.
 *
 * @since 4.2.0
 *
 * @see JK_Dependencies::add_data()
 *
 * @param string $handle Name of the script.
 * @param string $key    Name of data point for which we're storing a value.
 * @param mixed  $value  String containing the data to be added.
 * @return bool True on success, false on failure.
 */
function jk_script_add_data( $handle, $key, $value ) {
	return jk_scripts()->add_data( $handle, $key, $value );
}
