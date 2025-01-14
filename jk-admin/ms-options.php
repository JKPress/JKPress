<?php
/**
 * Multisite network settings administration panel.
 *
 * @package JKPress
 * @subpackage Multisite
 * @since 3.0.0
 */

require_once __DIR__ . '/admin.php';

jk_redirect( network_admin_url( 'settings.php' ) );
exit;