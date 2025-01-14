<?php
/**
 * Deprecated. Use rss.php instead.
 *
 * @package JKPress
 * @deprecated 2.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit();
}

_deprecated_file( basename( __FILE__ ), '2.1.0', JKINC . '/rss.php' );
require_once ABSPATH . JKINC . '/rss.php';
