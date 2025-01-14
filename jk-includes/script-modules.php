<?php
/**
 * Script Modules API: Script Module functions
 *
 * @since 6.5.0
 *
 * @package JKPress
 * @subpackage Script Modules
 */

/**
 * Retrieves the main JK_Script_Modules instance.
 *
 * This function provides access to the JK_Script_Modules instance, creating one
 * if it doesn't exist yet.
 *
 * @since 6.5.0
 *
 * @global JK_Script_Modules $jk_script_modules
 *
 * @return JK_Script_Modules The main JK_Script_Modules instance.
 */
function jk_script_modules(): JK_Script_Modules {
	global $jk_script_modules;

	if ( ! ( $jk_script_modules instanceof JK_Script_Modules ) ) {
		$jk_script_modules = new JK_Script_Modules();
	}

	return $jk_script_modules;
}

/**
 * Registers the script module if no script module with that script module
 * identifier has already been registered.
 *
 * @since 6.5.0
 *
 * @param string            $id      The identifier of the script module. Should be unique. It will be used in the
 *                                   final import map.
 * @param string            $src     Optional. Full URL of the script module, or path of the script module relative
 *                                   to the JKPress root directory. If it is provided and the script module has
 *                                   not been registered yet, it will be registered.
 * @param array             $deps    {
 *                                       Optional. List of dependencies.
 *
 *                                       @type string|array ...$0 {
 *                                           An array of script module identifiers of the dependencies of this script
 *                                           module. The dependencies can be strings or arrays. If they are arrays,
 *                                           they need an `id` key with the script module identifier, and can contain
 *                                           an `import` key with either `static` or `dynamic`. By default,
 *                                           dependencies that don't contain an `import` key are considered static.
 *
 *                                           @type string $id     The script module identifier.
 *                                           @type string $import Optional. Import type. May be either `static` or
 *                                                                `dynamic`. Defaults to `static`.
 *                                       }
 *                                   }
 * @param string|false|null $version Optional. String specifying the script module version number. Defaults to false.
 *                                   It is added to the URL as a query string for cache busting purposes. If $version
 *                                   is set to false, the version number is the currently installed JKPress version.
 *                                   If $version is set to null, no version is added.
 */
function jk_register_script_module( string $id, string $src, array $deps = array(), $version = false ) {
	jk_script_modules()->register( $id, $src, $deps, $version );
}

/**
 * Marks the script module to be enqueued in the page.
 *
 * If a src is provided and the script module has not been registered yet, it
 * will be registered.
 *
 * @since 6.5.0
 *
 * @param string            $id      The identifier of the script module. Should be unique. It will be used in the
 *                                   final import map.
 * @param string            $src     Optional. Full URL of the script module, or path of the script module relative
 *                                   to the JKPress root directory. If it is provided and the script module has
 *                                   not been registered yet, it will be registered.
 * @param array             $deps    {
 *                                       Optional. List of dependencies.
 *
 *                                       @type string|array ...$0 {
 *                                           An array of script module identifiers of the dependencies of this script
 *                                           module. The dependencies can be strings or arrays. If they are arrays,
 *                                           they need an `id` key with the script module identifier, and can contain
 *                                           an `import` key with either `static` or `dynamic`. By default,
 *                                           dependencies that don't contain an `import` key are considered static.
 *
 *                                           @type string $id     The script module identifier.
 *                                           @type string $import Optional. Import type. May be either `static` or
 *                                                                `dynamic`. Defaults to `static`.
 *                                       }
 *                                   }
 * @param string|false|null $version Optional. String specifying the script module version number. Defaults to false.
 *                                   It is added to the URL as a query string for cache busting purposes. If $version
 *                                   is set to false, the version number is the currently installed JKPress version.
 *                                   If $version is set to null, no version is added.
 */
function jk_enqueue_script_module( string $id, string $src = '', array $deps = array(), $version = false ) {
	jk_script_modules()->enqueue( $id, $src, $deps, $version );
}

/**
 * Unmarks the script module so it is no longer enqueued in the page.
 *
 * @since 6.5.0
 *
 * @param string $id The identifier of the script module.
 */
function jk_dequeue_script_module( string $id ) {
	jk_script_modules()->dequeue( $id );
}

/**
 * Deregisters the script module.
 *
 * @since 6.5.0
 *
 * @param string $id The identifier of the script module.
 */
function jk_deregister_script_module( string $id ) {
	jk_script_modules()->deregister( $id );
}

/**
 * Registers all the default JKPress Script Modules.
 *
 * @since 6.7.0
 */
function jk_default_script_modules() {
	$suffix = defined( 'JK_RUN_CORE_TESTS' ) ? '.min' : jk_scripts_get_suffix();

	/*
	 * Expects multidimensional array like:
	 *
	 *     'interactivity/index.min.js' => array('dependencies' => array(…), 'version' => '…'),
	 *     'interactivity/debug.min.js' => array('dependencies' => array(…), 'version' => '…'),
	 *     'interactivity-router/index.min.js' => …
	 */
	$assets = include ABSPATH . JKINC . "/assets/script-modules-packages{$suffix}.php";

	foreach ( $assets as $file_name => $script_module_data ) {
		/*
		 * Build the JKPress Script Module ID from the file name.
		 * Prepend `@wordpress/` and remove extensions and `/index` if present:
		 *   - interactivity/index.min.js  => @wordpress/interactivity
		 *   - interactivity/debug.min.js  => @wordpress/interactivity/debug
		 *   - block-library/query/view.js => @wordpress/block-library/query/view
		 */
		$script_module_id = '@wordpress/' . preg_replace( '~(?:/index)?(?:\.min)?\.js$~D', '', $file_name, 1 );

		switch ( $script_module_id ) {
			/*
			 * Interactivity exposes two entrypoints, "/index" and "/debug".
			 * "/debug" should replace "/index" in development.
			 */
			case '@wordpress/interactivity/debug':
				if ( ! SCRIPT_DEBUG ) {
					continue 2;
				}
				$script_module_id = '@wordpress/interactivity';
				break;
			case '@wordpress/interactivity':
				if ( SCRIPT_DEBUG ) {
					continue 2;
				}
				break;
		}

		$path = includes_url( "js/dist/script-modules/{$file_name}" );
		jk_register_script_module( $script_module_id, $path, $script_module_data['dependencies'], $script_module_data['version'] );
	}
}
