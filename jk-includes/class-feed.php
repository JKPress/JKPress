<?php
/**
 * Feed API
 *
 * @package JKPress
 * @subpackage Feed
 * @deprecated 4.7.0
 */

_deprecated_file( basename( __FILE__ ), '4.7.0', 'fetch_feed()' );

if ( ! class_exists( 'SimplePie\SimplePie', false ) ) {
	require_once ABSPATH . JKINC . '/class-simplepie.php';
}

require_once ABSPATH . JKINC . '/class-jk-feed-cache.php';
require_once ABSPATH . JKINC . '/class-jk-feed-cache-transient.php';
require_once ABSPATH . JKINC . '/class-jk-simplepie-file.php';
require_once ABSPATH . JKINC . '/class-jk-simplepie-sanitize-kses.php';
