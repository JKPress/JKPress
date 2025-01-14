<?php
/**
 * Interactivity API: Functions and hooks
 *
 * @package JKPress
 * @subpackage Interactivity API
 * @since 6.5.0
 */

/**
 * Retrieves the main JK_Interactivity_API instance.
 *
 * It provides access to the JK_Interactivity_API instance, creating one if it
 * doesn't exist yet.
 *
 * @since 6.5.0
 *
 * @global JK_Interactivity_API $jk_interactivity
 *
 * @return JK_Interactivity_API The main JK_Interactivity_API instance.
 */
function jk_interactivity(): JK_Interactivity_API {
	global $jk_interactivity;
	if ( ! ( $jk_interactivity instanceof JK_Interactivity_API ) ) {
		$jk_interactivity = new JK_Interactivity_API();
	}
	return $jk_interactivity;
}

/**
 * Processes the interactivity directives contained within the HTML content
 * and updates the markup accordingly.
 *
 * @since 6.5.0
 *
 * @param string $html The HTML content to process.
 * @return string The processed HTML content. It returns the original content when the HTML contains unbalanced tags.
 */
function jk_interactivity_process_directives( string $html ): string {
	return jk_interactivity()->process_directives( $html );
}

/**
 * Gets and/or sets the initial state of an Interactivity API store for a
 * given namespace.
 *
 * If state for that store namespace already exists, it merges the new
 * provided state with the existing one.
 *
 * The namespace can be omitted inside derived state getters, using the
 * namespace where the getter is defined.
 *
 * @since 6.5.0
 * @since 6.6.0 The namespace can be omitted when called inside derived state getters.
 *
 * @param string $store_namespace The unique store namespace identifier.
 * @param array  $state           Optional. The array that will be merged with the existing state for the specified
 *                                store namespace.
 * @return array The state for the specified store namespace. This will be the updated state if a $state argument was
 *               provided.
 */
function jk_interactivity_state( ?string $store_namespace = null, array $state = array() ): array {
	return jk_interactivity()->state( $store_namespace, $state );
}

/**
 * Gets and/or sets the configuration of the Interactivity API for a given
 * store namespace.
 *
 * If configuration for that store namespace exists, it merges the new
 * provided configuration with the existing one.
 *
 * @since 6.5.0
 *
 * @param string $store_namespace The unique store namespace identifier.
 * @param array  $config          Optional. The array that will be merged with the existing configuration for the
 *                                specified store namespace.
 * @return array The configuration for the specified store namespace. This will be the updated configuration if a
 *               $config argument was provided.
 */
function jk_interactivity_config( string $store_namespace, array $config = array() ): array {
	return jk_interactivity()->config( $store_namespace, $config );
}

/**
 * Generates a `data-jk-context` directive attribute by encoding a context
 * array.
 *
 * This helper function simplifies the creation of `data-jk-context` directives
 * by providing a way to pass an array of data, which encodes into a JSON string
 * safe for direct use as a HTML attribute value.
 *
 * Example:
 *
 *     <div <?php echo jk_interactivity_data_jk_context( array( 'isOpen' => true, 'count' => 0 ) ); ?>>
 *
 * @since 6.5.0
 *
 * @param array  $context         The array of context data to encode.
 * @param string $store_namespace Optional. The unique store namespace identifier.
 * @return string A complete `data-jk-context` directive with a JSON encoded value representing the context array and
 *                the store namespace if specified.
 */
function jk_interactivity_data_jk_context( array $context, string $store_namespace = '' ): string {
	return 'data-jk-context=\'' .
		( $store_namespace ? $store_namespace . '::' : '' ) .
		( empty( $context ) ? '{}' : jk_json_encode( $context, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP ) ) .
		'\'';
}

/**
 * Gets the current Interactivity API context for a given namespace.
 *
 * The function should be used only during directive processing. If the
 * `$store_namespace` parameter is omitted, it uses the current namespace value
 * on the internal namespace stack.
 *
 * It returns an empty array when the specified namespace is not defined.
 *
 * @since 6.6.0
 *
 * @param string $store_namespace Optional. The unique store namespace identifier.
 * @return array The context for the specified store namespace.
 */
function jk_interactivity_get_context( ?string $store_namespace = null ): array {
	return jk_interactivity()->get_context( $store_namespace );
}

/**
 * Returns an array representation of the current element being processed.
 *
 * The function should be used only during directive processing.
 *
 * @since 6.7.0
 *
 * @return array{attributes: array<string, string|bool>}|null Current element.
 */
function jk_interactivity_get_element(): ?array {
	return jk_interactivity()->get_element();
}
