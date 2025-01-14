<?php
/**
 * JKPress Diff bastard child of old MediaWiki Diff Formatter.
 *
 * Basically all that remains is the table structure and some method names.
 *
 * @package JKPress
 * @subpackage Diff
 */

if ( ! class_exists( 'Text_Diff', false ) ) {
	/** Text_Diff class */
	require ABSPATH . JKINC . '/Text/Diff.php';
	/** Text_Diff_Renderer class */
	require ABSPATH . JKINC . '/Text/Diff/Renderer.php';
	/** Text_Diff_Renderer_inline class */
	require ABSPATH . JKINC . '/Text/Diff/Renderer/inline.php';
	/** Text_Exception class */
	require ABSPATH . JKINC . '/Text/Exception.php';
}

require ABSPATH . JKINC . '/class-jk-text-diff-renderer-table.php';
require ABSPATH . JKINC . '/class-jk-text-diff-renderer-inline.php';
