<?php
/**
 * Used to set up all core blocks used with the block editor.
 *
 * @package JKPress
 */

// Don't load directly.
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

define( 'BLOCKS_PATH', ABSPATH . JKINC . '/blocks/' );

// Include files required for core blocks registration.
require BLOCKS_PATH . 'legacy-widget.php';
require BLOCKS_PATH . 'widget-group.php';
require BLOCKS_PATH . 'require-dynamic-blocks.php';

/**
 * Registers core block style handles.
 *
 * While {@see register_block_style_handle()} is typically used for that, the way it is
 * implemented is inefficient for core block styles. Registering those style handles here
 * avoids unnecessary logic and filesystem lookups in the other function.
 *
 * @since 6.3.0
 */
function register_core_block_style_handles() {
	$jk_version = jk_get_jk_version();

	if ( ! jk_should_load_separate_core_block_assets() ) {
		return;
	}

	$blocks_url   = includes_url( 'blocks/' );
	$suffix       = jk_scripts_get_suffix();
	$jk_styles    = jk_styles();
	$style_fields = array(
		'style'       => 'style',
		'editorStyle' => 'editor',
	);

	static $core_blocks_meta;
	if ( ! $core_blocks_meta ) {
		$core_blocks_meta = require BLOCKS_PATH . 'blocks-json.php';
	}

	$files          = false;
	$transient_name = 'jk_core_block_css_files';

	/*
	 * Ignore transient cache when the development mode is set to 'core'. Why? To avoid interfering with
	 * the core developer's workflow.
	 */
	$can_use_cached = ! jk_is_development_mode( 'core' );

	if ( $can_use_cached ) {
		$cached_files = get_transient( $transient_name );

		// Check the validity of cached values by checking against the current JKPress version.
		if (
			is_array( $cached_files )
			&& isset( $cached_files['version'] )
			&& $cached_files['version'] === $jk_version
			&& isset( $cached_files['files'] )
		) {
			$files = $cached_files['files'];
		}
	}

	if ( ! $files ) {
		$files = glob( jk_normalize_path( BLOCKS_PATH . '**/**.css' ) );

		// Normalize BLOCKS_PATH prior to substitution for Windows environments.
		$normalized_blocks_path = jk_normalize_path( BLOCKS_PATH );

		$files = array_map(
			static function ( $file ) use ( $normalized_blocks_path ) {
				return str_replace( $normalized_blocks_path, '', $file );
			},
			$files
		);

		// Save core block style paths in cache when not in development mode.
		if ( $can_use_cached ) {
			set_transient(
				$transient_name,
				array(
					'version' => $jk_version,
					'files'   => $files,
				)
			);
		}
	}

	$register_style = static function ( $name, $filename, $style_handle ) use ( $blocks_url, $suffix, $jk_styles, $files ) {
		$style_path = "{$name}/{$filename}{$suffix}.css";
		$path       = jk_normalize_path( BLOCKS_PATH . $style_path );

		if ( ! in_array( $style_path, $files, true ) ) {
			$jk_styles->add(
				$style_handle,
				false
			);
			return;
		}

		$jk_styles->add( $style_handle, $blocks_url . $style_path );
		$jk_styles->add_data( $style_handle, 'path', $path );

		$rtl_file = "{$name}/{$filename}-rtl{$suffix}.css";
		if ( is_rtl() && in_array( $rtl_file, $files, true ) ) {
			$jk_styles->add_data( $style_handle, 'rtl', 'replace' );
			$jk_styles->add_data( $style_handle, 'suffix', $suffix );
			$jk_styles->add_data( $style_handle, 'path', str_replace( "{$suffix}.css", "-rtl{$suffix}.css", $path ) );
		}
	};

	foreach ( $core_blocks_meta as $name => $schema ) {
		/** This filter is documented in jk-includes/blocks.php */
		$schema = apply_filters( 'block_type_metadata', $schema );

		// Backfill these properties similar to `register_block_type_from_metadata()`.
		if ( ! isset( $schema['style'] ) ) {
			$schema['style'] = "jk-block-{$name}";
		}
		if ( ! isset( $schema['editorStyle'] ) ) {
			$schema['editorStyle'] = "jk-block-{$name}-editor";
		}

		// Register block theme styles.
		$register_style( $name, 'theme', "jk-block-{$name}-theme" );

		foreach ( $style_fields as $style_field => $filename ) {
			$style_handle = $schema[ $style_field ];
			if ( is_array( $style_handle ) ) {
				continue;
			}
			$register_style( $name, $filename, $style_handle );
		}
	}
}
add_action( 'init', 'register_core_block_style_handles', 9 );

/**
 * Registers core block types using metadata files.
 * Dynamic core blocks are registered separately.
 *
 * @since 5.5.0
 */
function register_core_block_types_from_metadata() {
	$block_folders = require BLOCKS_PATH . 'require-static-blocks.php';
	foreach ( $block_folders as $block_folder ) {
		register_block_type_from_metadata(
			BLOCKS_PATH . $block_folder
		);
	}
}
add_action( 'init', 'register_core_block_types_from_metadata' );

/**
 * Registers the core block metadata collection.
 *
 * This function is hooked into the 'init' action with a priority of 9,
 * ensuring that the core block metadata is registered before the regular
 * block initialization that happens at priority 10.
 *
 * @since 6.7.0
 */
function jk_register_core_block_metadata_collection() {
	jk_register_block_metadata_collection(
		BLOCKS_PATH,
		BLOCKS_PATH . 'blocks-json.php'
	);
}
add_action( 'init', 'jk_register_core_block_metadata_collection', 9 );
