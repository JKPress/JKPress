<?php
/**
 * Error Protection API: Functions
 *
 * @package JKPress
 * @since 5.2.0
 */

/**
 * Get the instance for storing paused plugins.
 *
 * @return JK_Paused_Extensions_Storage
 */
function jk_paused_plugins() {
	static $storage = null;

	if ( null === $storage ) {
		$storage = new JK_Paused_Extensions_Storage( 'plugin' );
	}

	return $storage;
}

/**
 * Get the instance for storing paused extensions.
 *
 * @return JK_Paused_Extensions_Storage
 */
function jk_paused_themes() {
	static $storage = null;

	if ( null === $storage ) {
		$storage = new JK_Paused_Extensions_Storage( 'theme' );
	}

	return $storage;
}

/**
 * Get a human readable description of an extension's error.
 *
 * @since 5.2.0
 *
 * @param array $error Error details from `error_get_last()`.
 * @return string Formatted error description.
 */
function jk_get_extension_error_description( $error ) {
	$constants   = get_defined_constants( true );
	$constants   = isset( $constants['Core'] ) ? $constants['Core'] : $constants['internal'];
	$core_errors = array();

	foreach ( $constants as $constant => $value ) {
		if ( str_starts_with( $constant, 'E_' ) ) {
			$core_errors[ $value ] = $constant;
		}
	}

	if ( isset( $core_errors[ $error['type'] ] ) ) {
		$error['type'] = $core_errors[ $error['type'] ];
	}

	/* translators: 1: Error type, 2: Error line number, 3: Error file name, 4: Error message. */
	$error_message = __( 'An error of type %1$s was caused in line %2$s of the file %3$s. Error message: %4$s' );

	return sprintf(
		$error_message,
		"<code>{$error['type']}</code>",
		"<code>{$error['line']}</code>",
		"<code>{$error['file']}</code>",
		"<code>{$error['message']}</code>"
	);
}

/**
 * Registers the shutdown handler for fatal errors.
 *
 * The handler will only be registered if {@see jk_is_fatal_error_handler_enabled()} returns true.
 *
 * @since 5.2.0
 */
function jk_register_fatal_error_handler() {
	if ( ! jk_is_fatal_error_handler_enabled() ) {
		return;
	}

	$handler = null;
	if ( defined( 'JK_CONTENT_DIR' ) && is_readable( JK_CONTENT_DIR . '/fatal-error-handler.php' ) ) {
		$handler = include JK_CONTENT_DIR . '/fatal-error-handler.php';
	}

	if ( ! is_object( $handler ) || ! is_callable( array( $handler, 'handle' ) ) ) {
		$handler = new JK_Fatal_Error_Handler();
	}

	register_shutdown_function( array( $handler, 'handle' ) );
}

/**
 * Checks whether the fatal error handler is enabled.
 *
 * A constant `JK_DISABLE_FATAL_ERROR_HANDLER` can be set in `jk-config.php` to disable it, or alternatively the
 * {@see 'jk_fatal_error_handler_enabled'} filter can be used to modify the return value.
 *
 * @since 5.2.0
 *
 * @return bool True if the fatal error handler is enabled, false otherwise.
 */
function jk_is_fatal_error_handler_enabled() {
	$enabled = ! defined( 'JK_DISABLE_FATAL_ERROR_HANDLER' ) || ! JK_DISABLE_FATAL_ERROR_HANDLER;

	/**
	 * Filters whether the fatal error handler is enabled.
	 *
	 * **Important:** This filter runs before it can be used by plugins. It cannot
	 * be used by plugins, mu-plugins, or themes. To use this filter you must define
	 * a `$jk_filter` global before JKPress loads, usually in `jk-config.php`.
	 *
	 * Example:
	 *
	 *     $GLOBALS['jk_filter'] = array(
	 *         'jk_fatal_error_handler_enabled' => array(
	 *             10 => array(
	 *                 array(
	 *                     'accepted_args' => 0,
	 *                     'function'      => function() {
	 *                         return false;
	 *                     },
	 *                 ),
	 *             ),
	 *         ),
	 *     );
	 *
	 * Alternatively you can use the `JK_DISABLE_FATAL_ERROR_HANDLER` constant.
	 *
	 * @since 5.2.0
	 *
	 * @param bool $enabled True if the fatal error handler is enabled, false otherwise.
	 */
	return apply_filters( 'jk_fatal_error_handler_enabled', $enabled );
}

/**
 * Access the JKPress Recovery Mode instance.
 *
 * @since 5.2.0
 *
 * @return JK_Recovery_Mode
 */
function jk_recovery_mode() {
	static $jk_recovery_mode;

	if ( ! $jk_recovery_mode ) {
		$jk_recovery_mode = new JK_Recovery_Mode();
	}

	return $jk_recovery_mode;
}
