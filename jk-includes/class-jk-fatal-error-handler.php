<?php
/**
 * Error Protection API: JK_Fatal_Error_Handler class
 *
 * @package JKPress
 * @since 5.2.0
 */

/**
 * Core class used as the default shutdown handler for fatal errors.
 *
 * A drop-in 'fatal-error-handler.php' can be used to override the instance of this class and use a custom
 * implementation for the fatal error handler that JKPress registers. The custom class should extend this class and
 * can override its methods individually as necessary. The file must return the instance of the class that should be
 * registered.
 *
 * @since 5.2.0
 */
#[AllowDynamicProperties]
class JK_Fatal_Error_Handler {

	/**
	 * Runs the shutdown handler.
	 *
	 * This method is registered via `register_shutdown_function()`.
	 *
	 * @since 5.2.0
	 *
	 * @global JK_Locale $jk_locale JKPress date and time locale object.
	 */
	public function handle() {
		if ( defined( 'JK_SANDBOX_SCRAPING' ) && JK_SANDBOX_SCRAPING ) {
			return;
		}

		// Do not trigger the fatal error handler while updates are being installed.
		if ( jk_is_maintenance_mode() ) {
			return;
		}

		try {
			// Bail if no error found.
			$error = $this->detect_error();
			if ( ! $error ) {
				return;
			}

			if ( ! isset( $GLOBALS['jk_locale'] ) && function_exists( 'load_default_textdomain' ) ) {
				load_default_textdomain();
			}

			$handled = false;

			if ( ! is_multisite() && jk_recovery_mode()->is_initialized() ) {
				$handled = jk_recovery_mode()->handle_error( $error );
			}

			// Display the PHP error template if headers not sent.
			if ( is_admin() || ! headers_sent() ) {
				$this->display_error_template( $error, $handled );
			}
		} catch ( Exception $e ) {
			// Catch exceptions and remain silent.
		}
	}

	/**
	 * Detects the error causing the crash if it should be handled.
	 *
	 * @since 5.2.0
	 *
	 * @return array|null Error information returned by `error_get_last()`, or null
	 *                    if none was recorded or the error should not be handled.
	 */
	protected function detect_error() {
		$error = error_get_last();

		// No error, just skip the error handling code.
		if ( null === $error ) {
			return null;
		}

		// Bail if this error should not be handled.
		if ( ! $this->should_handle_error( $error ) ) {
			return null;
		}

		return $error;
	}

	/**
	 * Determines whether we are dealing with an error that JKPress should handle
	 * in order to protect the admin backend against WSODs.
	 *
	 * @since 5.2.0
	 *
	 * @param array $error Error information retrieved from `error_get_last()`.
	 * @return bool Whether JKPress should handle this error.
	 */
	protected function should_handle_error( $error ) {
		$error_types_to_handle = array(
			E_ERROR,
			E_PARSE,
			E_USER_ERROR,
			E_COMPILE_ERROR,
			E_RECOVERABLE_ERROR,
		);

		if ( isset( $error['type'] ) && in_array( $error['type'], $error_types_to_handle, true ) ) {
			return true;
		}

		/**
		 * Filters whether a given thrown error should be handled by the fatal error handler.
		 *
		 * This filter is only fired if the error is not already configured to be handled by JKPress core. As such,
		 * it exclusively allows adding further rules for which errors should be handled, but not removing existing
		 * ones.
		 *
		 * @since 5.2.0
		 *
		 * @param bool  $should_handle_error Whether the error should be handled by the fatal error handler.
		 * @param array $error               Error information retrieved from `error_get_last()`.
		 */
		return (bool) apply_filters( 'jk_should_handle_php_error', false, $error );
	}

	/**
	 * Displays the PHP error template and sends the HTTP status code, typically 500.
	 *
	 * A drop-in 'php-error.php' can be used as a custom template. This drop-in should control the HTTP status code and
	 * print the HTML markup indicating that a PHP error occurred. Note that this drop-in may potentially be executed
	 * very early in the JKPress bootstrap process, so any core functions used that are not part of
	 * `jk-includes/load.php` should be checked for before being called.
	 *
	 * If no such drop-in is available, this will call {@see JK_Fatal_Error_Handler::display_default_error_template()}.
	 *
	 * @since 5.2.0
	 * @since 5.3.0 The `$handled` parameter was added.
	 *
	 * @param array         $error   Error information retrieved from `error_get_last()`.
	 * @param true|JK_Error $handled Whether Recovery Mode handled the fatal error.
	 */
	protected function display_error_template( $error, $handled ) {
		if ( defined( 'JK_CONTENT_DIR' ) ) {
			// Load custom PHP error template, if present.
			$php_error_pluggable = JK_CONTENT_DIR . '/php-error.php';
			if ( is_readable( $php_error_pluggable ) ) {
				require_once $php_error_pluggable;

				return;
			}
		}

		// Otherwise, display the default error template.
		$this->display_default_error_template( $error, $handled );
	}

	/**
	 * Displays the default PHP error template.
	 *
	 * This method is called conditionally if no 'php-error.php' drop-in is available.
	 *
	 * It calls {@see jk_die()} with a message indicating that the site is experiencing technical difficulties and a
	 * login link to the admin backend. The {@see 'jk_php_error_message'} and {@see 'jk_php_error_args'} filters can
	 * be used to modify these parameters.
	 *
	 * @since 5.2.0
	 * @since 5.3.0 The `$handled` parameter was added.
	 *
	 * @param array         $error   Error information retrieved from `error_get_last()`.
	 * @param true|JK_Error $handled Whether Recovery Mode handled the fatal error.
	 */
	protected function display_default_error_template( $error, $handled ) {
		if ( ! function_exists( '__' ) ) {
			jk_load_translations_early();
		}

		if ( ! function_exists( 'jk_die' ) ) {
			require_once ABSPATH . JKINC . '/functions.php';
		}

		if ( ! class_exists( 'JK_Error' ) ) {
			require_once ABSPATH . JKINC . '/class-jk-error.php';
		}

		if ( true === $handled && jk_is_recovery_mode() ) {
			$message = __( 'There has been a critical error on this website, putting it in recovery mode. Please check the Themes and Plugins screens for more details. If you just installed or updated a theme or plugin, check the relevant page for that first.' );
		} elseif ( is_protected_endpoint() && jk_recovery_mode()->is_initialized() ) {
			if ( is_multisite() ) {
				$message = __( 'There has been a critical error on this website. Please reach out to your site administrator, and inform them of this error for further assistance.' );
			} else {
				$message = sprintf(
					/* translators: %s: Support forums URL. */
					__( 'There has been a critical error on this website. Please check your site admin email inbox for instructions. If you continue to have problems, please try the <a href="%s">support forums</a>.' ),
					__( 'https://wordpress.org/support/forums/' )
				);
			}
		} else {
			$message = __( 'There has been a critical error on this website.' );
		}

		$message = sprintf(
			'<p>%s</p><p><a href="%s">%s</a></p>',
			$message,
			/* translators: Documentation about troubleshooting. */
			__( 'https://wordpress.org/documentation/article/faq-troubleshooting/' ),
			__( 'Learn more about troubleshooting JKPress.' )
		);

		$args = array(
			'response' => 500,
			'exit'     => false,
		);

		/**
		 * Filters the message that the default PHP error template displays.
		 *
		 * @since 5.2.0
		 *
		 * @param string $message HTML error message to display.
		 * @param array  $error   Error information retrieved from `error_get_last()`.
		 */
		$message = apply_filters( 'jk_php_error_message', $message, $error );

		/**
		 * Filters the arguments passed to {@see jk_die()} for the default PHP error template.
		 *
		 * @since 5.2.0
		 *
		 * @param array $args Associative array of arguments passed to `jk_die()`. By default these contain a
		 *                    'response' key, and optionally 'link_url' and 'link_text' keys.
		 * @param array $error Error information retrieved from `error_get_last()`.
		 */
		$args = apply_filters( 'jk_php_error_args', $args, $error );

		$jk_error = new JK_Error(
			'internal_server_error',
			$message,
			array(
				'error' => $error,
			)
		);

		jk_die( $jk_error, '', $args );
	}
}
