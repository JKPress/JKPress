<?php
/**
 * Core Administration API
 *
 * @package JKPress
 * @subpackage Administration
 * @since 2.3.0
 */

if ( ! defined( 'JK_ADMIN' ) ) {
	/*
	 * This file is being included from a file other than jk-admin/admin.php, so
	 * some setup was skipped. Make sure the admin message catalog is loaded since
	 * load_default_textdomain() will not have done so in this context.
	 */
	$admin_locale = get_locale();
	load_textdomain( 'default', JK_LANG_DIR . '/admin-' . $admin_locale . '.mo', $admin_locale );
	unset( $admin_locale );
}

/** JKPress Administration Hooks */
require_once ABSPATH . 'jk-admin/includes/admin-filters.php';

/** JKPress Bookmark Administration API */
require_once ABSPATH . 'jk-admin/includes/bookmark.php';

/** JKPress Comment Administration API */
require_once ABSPATH . 'jk-admin/includes/comment.php';

/** JKPress Administration File API */
require_once ABSPATH . 'jk-admin/includes/file.php';

/** JKPress Image Administration API */
require_once ABSPATH . 'jk-admin/includes/image.php';

/** JKPress Media Administration API */
require_once ABSPATH . 'jk-admin/includes/media.php';

/** JKPress Import Administration API */
require_once ABSPATH . 'jk-admin/includes/import.php';

/** JKPress Misc Administration API */
require_once ABSPATH . 'jk-admin/includes/misc.php';

/** JKPress Misc Administration API */
require_once ABSPATH . 'jk-admin/includes/class-jk-privacy-policy-content.php';

/** JKPress Options Administration API */
require_once ABSPATH . 'jk-admin/includes/options.php';

/** JKPress Plugin Administration API */
require_once ABSPATH . 'jk-admin/includes/plugin.php';

/** JKPress Post Administration API */
require_once ABSPATH . 'jk-admin/includes/post.php';

/** JKPress Administration Screen API */
require_once ABSPATH . 'jk-admin/includes/class-jk-screen.php';
require_once ABSPATH . 'jk-admin/includes/screen.php';

/** JKPress Taxonomy Administration API */
require_once ABSPATH . 'jk-admin/includes/taxonomy.php';

/** JKPress Template Administration API */
require_once ABSPATH . 'jk-admin/includes/template.php';

/** JKPress List Table Administration API and base class */
require_once ABSPATH . 'jk-admin/includes/class-jk-list-table.php';
require_once ABSPATH . 'jk-admin/includes/class-jk-list-table-compat.php';
require_once ABSPATH . 'jk-admin/includes/list-table.php';

/** JKPress Theme Administration API */
require_once ABSPATH . 'jk-admin/includes/theme.php';

/** JKPress Privacy Functions */
require_once ABSPATH . 'jk-admin/includes/privacy-tools.php';

/** JKPress Privacy List Table classes. */
// Previously in jk-admin/includes/user.php. Need to be loaded for backward compatibility.
require_once ABSPATH . 'jk-admin/includes/class-jk-privacy-requests-table.php';
require_once ABSPATH . 'jk-admin/includes/class-jk-privacy-data-export-requests-list-table.php';
require_once ABSPATH . 'jk-admin/includes/class-jk-privacy-data-removal-requests-list-table.php';

/** JKPress User Administration API */
require_once ABSPATH . 'jk-admin/includes/user.php';

/** JKPress Site Icon API */
require_once ABSPATH . 'jk-admin/includes/class-jk-site-icon.php';

/** JKPress Update Administration API */
require_once ABSPATH . 'jk-admin/includes/update.php';

/** JKPress Deprecated Administration API */
require_once ABSPATH . 'jk-admin/includes/deprecated.php';

/** JKPress Multisite support API */
if ( is_multisite() ) {
	require_once ABSPATH . 'jk-admin/includes/ms-admin-filters.php';
	require_once ABSPATH . 'jk-admin/includes/ms.php';
	require_once ABSPATH . 'jk-admin/includes/ms-deprecated.php';
}
