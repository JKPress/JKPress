<?php
/**
 * Front to the JKPress application. This file doesn't do anything, but loads
 * jk-blog-header.php which does and tells JKPress to load the theme.
 *
 * @package JKPress
 */

/**
 * Tells JKPress to load the JKPress theme and output it.
 *
 * @var bool
 */
define( 'JK_USE_THEMES', true );

/** Loads the JKPress Environment and Template */
require __DIR__ . '/jk-blog-header.php';
