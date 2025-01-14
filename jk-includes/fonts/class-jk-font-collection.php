<?php
/**
 * Font Collection class.
 *
 * This file contains the Font Collection class definition.
 *
 * @package    JKPress
 * @subpackage Fonts
 * @since      6.5.0
 */

/**
 * Font Collection class.
 *
 * @since 6.5.0
 *
 * @see jk_register_font_collection()
 */
final class JK_Font_Collection {
	/**
	 * The unique slug for the font collection.
	 *
	 * @since 6.5.0
	 * @var string
	 */
	public $slug;

	/**
	 * Font collection data.
	 *
	 * @since 6.5.0
	 * @var array|JK_Error|null
	 */
	private $data;

	/**
	 * Font collection JSON file path or URL.
	 *
	 * @since 6.5.0
	 * @var string|null
	 */
	private $src;

	/**
	 * JK_Font_Collection constructor.
	 *
	 * @since 6.5.0
	 *
	 * @param string $slug Font collection slug. May only contain alphanumeric characters, dashes,
	 *                     and underscores. See sanitize_title().
	 * @param array  $args Font collection data. See jk_register_font_collection() for information on accepted arguments.
	 */
	public function __construct( string $slug, array $args ) {
		$this->slug = sanitize_title( $slug );
		if ( $this->slug !== $slug ) {
			_doing_it_wrong(
				__METHOD__,
				/* translators: %s: Font collection slug. */
				sprintf( __( 'Font collection slug "%s" is not valid. Slugs must use only alphanumeric characters, dashes, and underscores.' ), $slug ),
				'6.5.0'
			);
		}

		$required_properties = array( 'name', 'font_families' );

		if ( isset( $args['font_families'] ) && is_string( $args['font_families'] ) ) {
			// JSON data is lazy loaded by ::get_data().
			$this->src = $args['font_families'];
			unset( $args['font_families'] );

			$required_properties = array( 'name' );
		}

		$this->data = $this->sanitize_and_validate_data( $args, $required_properties );
	}

	/**
	 * Retrieves the font collection data.
	 *
	 * @since 6.5.0
	 *
	 * @return array|JK_Error An array containing the font collection data, or a JK_Error on failure.
	 */
	public function get_data() {
		if ( is_jk_error( $this->data ) ) {
			return $this->data;
		}

		// If the collection uses JSON data, load it and cache the data/error.
		if ( isset( $this->src ) ) {
			$this->data = $this->load_from_json( $this->src );
		}

		if ( is_jk_error( $this->data ) ) {
			return $this->data;
		}

		// Set defaults for optional properties.
		$defaults = array(
			'description' => '',
			'categories'  => array(),
		);

		return jk_parse_args( $this->data, $defaults );
	}

	/**
	 * Loads font collection data from a JSON file or URL.
	 *
	 * @since 6.5.0
	 *
	 * @param string $file_or_url File path or URL to a JSON file containing the font collection data.
	 * @return array|JK_Error An array containing the font collection data on success,
	 *                        else an instance of JK_Error on failure.
	 */
	private function load_from_json( $file_or_url ) {
		$url  = jk_http_validate_url( $file_or_url );
		$file = file_exists( $file_or_url ) ? jk_normalize_path( realpath( $file_or_url ) ) : false;

		if ( ! $url && ! $file ) {
			// translators: %s: File path or URL to font collection JSON file.
			$message = __( 'Font collection JSON file is invalid or does not exist.' );
			_doing_it_wrong( __METHOD__, $message, '6.5.0' );
			return new JK_Error( 'font_collection_json_missing', $message );
		}

		$data = $url ? $this->load_from_url( $url ) : $this->load_from_file( $file );

		if ( is_jk_error( $data ) ) {
			return $data;
		}

		$data = array(
			'name'          => $this->data['name'],
			'font_families' => $data['font_families'],
		);

		if ( isset( $this->data['description'] ) ) {
			$data['description'] = $this->data['description'];
		}

		if ( isset( $this->data['categories'] ) ) {
			$data['categories'] = $this->data['categories'];
		}

		return $data;
	}

	/**
	 * Loads the font collection data from a JSON file path.
	 *
	 * @since 6.5.0
	 *
	 * @param string $file File path to a JSON file containing the font collection data.
	 * @return array|JK_Error An array containing the font collection data on success,
	 *                        else an instance of JK_Error on failure.
	 */
	private function load_from_file( $file ) {
		$data = jk_json_file_decode( $file, array( 'associative' => true ) );
		if ( empty( $data ) ) {
			return new JK_Error( 'font_collection_decode_error', __( 'Error decoding the font collection JSON file contents.' ) );
		}

		return $this->sanitize_and_validate_data( $data, array( 'font_families' ) );
	}

	/**
	 * Loads the font collection data from a JSON file URL.
	 *
	 * @since 6.5.0
	 *
	 * @param string $url URL to a JSON file containing the font collection data.
	 * @return array|JK_Error An array containing the font collection data on success,
	 *                        else an instance of JK_Error on failure.
	 */
	private function load_from_url( $url ) {
		// Limit key to 167 characters to avoid failure in the case of a long URL.
		$transient_key = substr( 'jk_font_collection_url_' . $url, 0, 167 );
		$data          = get_site_transient( $transient_key );

		if ( false === $data ) {
			$response = jk_safe_remote_get( $url );
			if ( is_jk_error( $response ) || 200 !== jk_remote_retrieve_response_code( $response ) ) {
				return new JK_Error(
					'font_collection_request_error',
					sprintf(
						// translators: %s: Font collection URL.
						__( 'Error fetching the font collection data from "%s".' ),
						$url
					)
				);
			}

			$data = json_decode( jk_remote_retrieve_body( $response ), true );
			if ( empty( $data ) ) {
				return new JK_Error( 'font_collection_decode_error', __( 'Error decoding the font collection data from the HTTP response JSON.' ) );
			}

			// Make sure the data is valid before storing it in a transient.
			$data = $this->sanitize_and_validate_data( $data, array( 'font_families' ) );
			if ( is_jk_error( $data ) ) {
				return $data;
			}

			set_site_transient( $transient_key, $data, DAY_IN_SECONDS );
		}

		return $data;
	}

	/**
	 * Sanitizes and validates the font collection data.
	 *
	 * @since 6.5.0
	 *
	 * @param array $data                Font collection data to sanitize and validate.
	 * @param array $required_properties Required properties that must exist in the passed data.
	 * @return array|JK_Error Sanitized data if valid, otherwise a JK_Error instance.
	 */
	private function sanitize_and_validate_data( $data, $required_properties = array() ) {
		$schema = self::get_sanitization_schema();
		$data   = JK_Font_Utils::sanitize_from_schema( $data, $schema );

		foreach ( $required_properties as $property ) {
			if ( empty( $data[ $property ] ) ) {
				$message = sprintf(
					// translators: 1: Font collection slug, 2: Missing property name, e.g. "font_families".
					__( 'Font collection "%1$s" has missing or empty property: "%2$s".' ),
					$this->slug,
					$property
				);
				_doing_it_wrong( __METHOD__, $message, '6.5.0' );
				return new JK_Error( 'font_collection_missing_property', $message );
			}
		}

		return $data;
	}

	/**
	 * Retrieves the font collection sanitization schema.
	 *
	 * @since 6.5.0
	 *
	 * @return array Font collection sanitization schema.
	 */
	private static function get_sanitization_schema() {
		return array(
			'name'          => 'sanitize_text_field',
			'description'   => 'sanitize_text_field',
			'font_families' => array(
				array(
					'font_family_settings' => array(
						'name'       => 'sanitize_text_field',
						'slug'       => static function ( $value ) {
							return _jk_to_kebab_case( sanitize_title( $value ) );
						},
						'fontFamily' => 'JK_Font_Utils::sanitize_font_family',
						'preview'    => 'sanitize_url',
						'fontFace'   => array(
							array(
								'fontFamily'            => 'sanitize_text_field',
								'fontStyle'             => 'sanitize_text_field',
								'fontWeight'            => 'sanitize_text_field',
								'src'                   => static function ( $value ) {
									return is_array( $value )
										? array_map( 'sanitize_text_field', $value )
										: sanitize_text_field( $value );
								},
								'preview'               => 'sanitize_url',
								'fontDisplay'           => 'sanitize_text_field',
								'fontStretch'           => 'sanitize_text_field',
								'ascentOverride'        => 'sanitize_text_field',
								'descentOverride'       => 'sanitize_text_field',
								'fontVariant'           => 'sanitize_text_field',
								'fontFeatureSettings'   => 'sanitize_text_field',
								'fontVariationSettings' => 'sanitize_text_field',
								'lineGapOverride'       => 'sanitize_text_field',
								'sizeAdjust'            => 'sanitize_text_field',
								'unicodeRange'          => 'sanitize_text_field',
							),
						),
					),
					'categories'           => array( 'sanitize_title' ),
				),
			),
			'categories'    => array(
				array(
					'name' => 'sanitize_text_field',
					'slug' => 'sanitize_title',
				),
			),
		);
	}
}
