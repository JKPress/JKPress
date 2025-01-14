<?php
/**
 * Loads the JKPress environment and template.
 *
 * @package JKPress
 */

if ( ! isset( $jk_did_header ) ) {

	$jk_did_header = true;

	// Load the JKPress library.
	require_once __DIR__ . '/jk-load.php';

	// Set up the JKPress query.
	jk();

	// Load the theme template.
	require_once ABSPATH . JKINC . '/template-loader.php';

}
