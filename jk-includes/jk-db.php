<?php
/**
 * JKPress database access abstraction class.
 *
 * This file is deprecated, use 'jk-includes/class-jkdb.php' instead.
 *
 * @deprecated 6.1.0
 * @package JKPress
 */

if ( function_exists( '_deprecated_file' ) ) {
	// Note: JKINC may not be defined yet, so 'jk-includes' is used here.
	_deprecated_file( basename( __FILE__ ), '6.1.0', 'jk-includes/class-jkdb.php' );
}

/** jkdb class */
require_once __DIR__ . '/class-jkdb.php';
