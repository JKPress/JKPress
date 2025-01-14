<?php
/**
 * Used to set up and fix common variables and include
 * the JKPress procedural and class library.
 *
 * Allows for some configuration in jk-config.php (see default-constants.php)
 *
 * @package JKPress
 */

/**
 * Stores the location of the JKPress directory of functions, classes, and core content.
 *
 * @since 1.0.0
 */
define( 'JKINC', 'jk-includes' );

/**
 * Version information for the current JKPress release.
 *
 * These can't be directly globalized in version.php. When updating,
 * include version.php from another installation and don't override
 * these values if already set.
 *
 * @global string $jk_version             The JKPress version string.
 * @global int    $jk_db_version          JKPress database version.
 * @global string $tinymce_version        TinyMCE version.
 * @global string $required_php_version   The required PHP version string.
 * @global string $required_mysql_version The required MySQL version string.
 * @global string $jk_local_package       Locale code of the package.
 */
global $jk_version, $jk_db_version, $tinymce_version, $required_php_version, $required_mysql_version, $jk_local_package;
require ABSPATH . JKINC . '/version.php';
require ABSPATH . JKINC . '/compat.php';
require ABSPATH . JKINC . '/load.php';

// Check for the required PHP version and for the MySQL extension or a database drop-in.
jk_check_php_mysql_versions();

// Include files required for initialization.
require ABSPATH . JKINC . '/class-jk-paused-extensions-storage.php';
require ABSPATH . JKINC . '/class-jk-exception.php';
require ABSPATH . JKINC . '/class-jk-fatal-error-handler.php';
require ABSPATH . JKINC . '/class-jk-recovery-mode-cookie-service.php';
require ABSPATH . JKINC . '/class-jk-recovery-mode-key-service.php';
require ABSPATH . JKINC . '/class-jk-recovery-mode-link-service.php';
require ABSPATH . JKINC . '/class-jk-recovery-mode-email-service.php';
require ABSPATH . JKINC . '/class-jk-recovery-mode.php';
require ABSPATH . JKINC . '/error-protection.php';
require ABSPATH . JKINC . '/default-constants.php';
require_once ABSPATH . JKINC . '/plugin.php';

/**
 * If not already configured, `$blog_id` will default to 1 in a single site
 * configuration. In multisite, it will be overridden by default in ms-settings.php.
 *
 * @since 2.0.0
 *
 * @global int $blog_id
 */
global $blog_id;

// Set initial default constants including JK_MEMORY_LIMIT, JK_MAX_MEMORY_LIMIT, JK_DEBUG, SCRIPT_DEBUG, JK_CONTENT_DIR and JK_CACHE.
jk_initial_constants();

// Register the shutdown handler for fatal errors as soon as possible.
jk_register_fatal_error_handler();

// JKPress calculates offsets from UTC.
// phpcs:ignore JKPress.DateTime.RestrictedFunctions.timezone_change_date_default_timezone_set
date_default_timezone_set( 'UTC' );

// Standardize $_SERVER variables across setups.
jk_fix_server_vars();

// Check if the site is in maintenance mode.
jk_maintenance();

// Start loading timer.
timer_start();

// Check if JK_DEBUG mode is enabled.
jk_debug_mode();

/**
 * Filters whether to enable loading of the advanced-cache.php drop-in.
 *
 * This filter runs before it can be used by plugins. It is designed for non-web
 * run-times. If false is returned, advanced-cache.php will never be loaded.
 *
 * @since 4.6.0
 *
 * @param bool $enable_advanced_cache Whether to enable loading advanced-cache.php (if present).
 *                                    Default true.
 */
if ( JK_CACHE && apply_filters( 'enable_loading_advanced_cache_dropin', true ) && file_exists( JK_CONTENT_DIR . '/advanced-cache.php' ) ) {
	// For an advanced caching plugin to use. Uses a static drop-in because you would only want one.
	include JK_CONTENT_DIR . '/advanced-cache.php';

	// Re-initialize any hooks added manually by advanced-cache.php.
	if ( $jk_filter ) {
		$jk_filter = JK_Hook::build_preinitialized_hooks( $jk_filter );
	}
}

// Define JK_LANG_DIR if not set.
jk_set_lang_dir();

// Load early JKPress files.
require ABSPATH . JKINC . '/class-jk-list-util.php';
require ABSPATH . JKINC . '/class-jk-token-map.php';
require ABSPATH . JKINC . '/formatting.php';
require ABSPATH . JKINC . '/meta.php';
require ABSPATH . JKINC . '/functions.php';
require ABSPATH . JKINC . '/class-jk-meta-query.php';
require ABSPATH . JKINC . '/class-jk-matchesmapregex.php';
require ABSPATH . JKINC . '/class-jk.php';
require ABSPATH . JKINC . '/class-jk-error.php';
require ABSPATH . JKINC . '/pomo/mo.php';
require ABSPATH . JKINC . '/l10n/class-jk-translation-controller.php';
require ABSPATH . JKINC . '/l10n/class-jk-translations.php';
require ABSPATH . JKINC . '/l10n/class-jk-translation-file.php';
require ABSPATH . JKINC . '/l10n/class-jk-translation-file-mo.php';
require ABSPATH . JKINC . '/l10n/class-jk-translation-file-php.php';

/**
 * @since 0.71
 *
 * @global jkdb $jkdb JKPress database abstraction object.
 */
global $jkdb;
// Include the jkdb class and, if present, a db.php database drop-in.
require_jk_db();

/**
 * @since 3.3.0
 *
 * @global string $table_prefix The database table prefix.
 */
$GLOBALS['table_prefix'] = $table_prefix;

// Set the database table prefix and the format specifiers for database table columns.
jk_set_wpdb_vars();

// Start the JKPress object cache, or an external object cache if the drop-in is present.
jk_start_object_cache();

// Attach the default filters.
require ABSPATH . JKINC . '/default-filters.php';

// Initialize multisite if enabled.
if ( is_multisite() ) {
	require ABSPATH . JKINC . '/class-jk-site-query.php';
	require ABSPATH . JKINC . '/class-jk-network-query.php';
	require ABSPATH . JKINC . '/ms-blogs.php';
	require ABSPATH . JKINC . '/ms-settings.php';
} elseif ( ! defined( 'MULTISITE' ) ) {
	define( 'MULTISITE', false );
}

register_shutdown_function( 'shutdown_action_hook' );

// Stop most of JKPress from being loaded if SHORTINIT is enabled.
if ( SHORTINIT ) {
	return false;
}

// Load the L10n library.
require_once ABSPATH . JKINC . '/l10n.php';
require_once ABSPATH . JKINC . '/class-jk-textdomain-registry.php';
require_once ABSPATH . JKINC . '/class-jk-locale.php';
require_once ABSPATH . JKINC . '/class-jk-locale-switcher.php';

// Run the installer if JKPress is not installed.
jk_not_installed();

// Load most of JKPress.
require ABSPATH . JKINC . '/class-jk-walker.php';
require ABSPATH . JKINC . '/class-jk-ajax-response.php';
require ABSPATH . JKINC . '/capabilities.php';
require ABSPATH . JKINC . '/class-jk-roles.php';
require ABSPATH . JKINC . '/class-jk-role.php';
require ABSPATH . JKINC . '/class-jk-user.php';
require ABSPATH . JKINC . '/class-jk-query.php';
require ABSPATH . JKINC . '/query.php';
require ABSPATH . JKINC . '/class-jk-date-query.php';
require ABSPATH . JKINC . '/theme.php';
require ABSPATH . JKINC . '/class-jk-theme.php';
require ABSPATH . JKINC . '/class-jk-theme-json-schema.php';
require ABSPATH . JKINC . '/class-jk-theme-json-data.php';
require ABSPATH . JKINC . '/class-jk-theme-json.php';
require ABSPATH . JKINC . '/class-jk-theme-json-resolver.php';
require ABSPATH . JKINC . '/class-jk-duotone.php';
require ABSPATH . JKINC . '/global-styles-and-settings.php';
require ABSPATH . JKINC . '/class-jk-block-template.php';
require ABSPATH . JKINC . '/class-jk-block-templates-registry.php';
require ABSPATH . JKINC . '/block-template-utils.php';
require ABSPATH . JKINC . '/block-template.php';
require ABSPATH . JKINC . '/theme-templates.php';
require ABSPATH . JKINC . '/theme-previews.php';
require ABSPATH . JKINC . '/template.php';
require ABSPATH . JKINC . '/https-detection.php';
require ABSPATH . JKINC . '/https-migration.php';
require ABSPATH . JKINC . '/class-jk-user-request.php';
require ABSPATH . JKINC . '/user.php';
require ABSPATH . JKINC . '/class-jk-user-query.php';
require ABSPATH . JKINC . '/class-jk-session-tokens.php';
require ABSPATH . JKINC . '/class-jk-user-meta-session-tokens.php';
require ABSPATH . JKINC . '/general-template.php';
require ABSPATH . JKINC . '/link-template.php';
require ABSPATH . JKINC . '/author-template.php';
require ABSPATH . JKINC . '/robots-template.php';
require ABSPATH . JKINC . '/post.php';
require ABSPATH . JKINC . '/class-walker-page.php';
require ABSPATH . JKINC . '/class-walker-page-dropdown.php';
require ABSPATH . JKINC . '/class-jk-post-type.php';
require ABSPATH . JKINC . '/class-jk-post.php';
require ABSPATH . JKINC . '/post-template.php';
require ABSPATH . JKINC . '/revision.php';
require ABSPATH . JKINC . '/post-formats.php';
require ABSPATH . JKINC . '/post-thumbnail-template.php';
require ABSPATH . JKINC . '/category.php';
require ABSPATH . JKINC . '/class-walker-category.php';
require ABSPATH . JKINC . '/class-walker-category-dropdown.php';
require ABSPATH . JKINC . '/category-template.php';
require ABSPATH . JKINC . '/comment.php';
require ABSPATH . JKINC . '/class-jk-comment.php';
require ABSPATH . JKINC . '/class-jk-comment-query.php';
require ABSPATH . JKINC . '/class-walker-comment.php';
require ABSPATH . JKINC . '/comment-template.php';
require ABSPATH . JKINC . '/rewrite.php';
require ABSPATH . JKINC . '/class-jk-rewrite.php';
require ABSPATH . JKINC . '/feed.php';
require ABSPATH . JKINC . '/bookmark.php';
require ABSPATH . JKINC . '/bookmark-template.php';
require ABSPATH . JKINC . '/kses.php';
require ABSPATH . JKINC . '/cron.php';
require ABSPATH . JKINC . '/deprecated.php';
require ABSPATH . JKINC . '/script-loader.php';
require ABSPATH . JKINC . '/taxonomy.php';
require ABSPATH . JKINC . '/class-jk-taxonomy.php';
require ABSPATH . JKINC . '/class-jk-term.php';
require ABSPATH . JKINC . '/class-jk-term-query.php';
require ABSPATH . JKINC . '/class-jk-tax-query.php';
require ABSPATH . JKINC . '/update.php';
require ABSPATH . JKINC . '/canonical.php';
require ABSPATH . JKINC . '/shortcodes.php';
require ABSPATH . JKINC . '/embed.php';
require ABSPATH . JKINC . '/class-jk-embed.php';
require ABSPATH . JKINC . '/class-jk-oembed.php';
require ABSPATH . JKINC . '/class-jk-oembed-controller.php';
require ABSPATH . JKINC . '/media.php';
require ABSPATH . JKINC . '/http.php';
require ABSPATH . JKINC . '/html-api/html5-named-character-references.php';
require ABSPATH . JKINC . '/html-api/class-jk-html-attribute-token.php';
require ABSPATH . JKINC . '/html-api/class-jk-html-span.php';
require ABSPATH . JKINC . '/html-api/class-jk-html-doctype-info.php';
require ABSPATH . JKINC . '/html-api/class-jk-html-text-replacement.php';
require ABSPATH . JKINC . '/html-api/class-jk-html-decoder.php';
require ABSPATH . JKINC . '/html-api/class-jk-html-tag-processor.php';
require ABSPATH . JKINC . '/html-api/class-jk-html-unsupported-exception.php';
require ABSPATH . JKINC . '/html-api/class-jk-html-active-formatting-elements.php';
require ABSPATH . JKINC . '/html-api/class-jk-html-open-elements.php';
require ABSPATH . JKINC . '/html-api/class-jk-html-token.php';
require ABSPATH . JKINC . '/html-api/class-jk-html-stack-event.php';
require ABSPATH . JKINC . '/html-api/class-jk-html-processor-state.php';
require ABSPATH . JKINC . '/html-api/class-jk-html-processor.php';
require ABSPATH . JKINC . '/class-jk-http.php';
require ABSPATH . JKINC . '/class-jk-http-streams.php';
require ABSPATH . JKINC . '/class-jk-http-curl.php';
require ABSPATH . JKINC . '/class-jk-http-proxy.php';
require ABSPATH . JKINC . '/class-jk-http-cookie.php';
require ABSPATH . JKINC . '/class-jk-http-encoding.php';
require ABSPATH . JKINC . '/class-jk-http-response.php';
require ABSPATH . JKINC . '/class-jk-http-requests-response.php';
require ABSPATH . JKINC . '/class-jk-http-requests-hooks.php';
require ABSPATH . JKINC . '/widgets.php';
require ABSPATH . JKINC . '/class-jk-widget.php';
require ABSPATH . JKINC . '/class-jk-widget-factory.php';
require ABSPATH . JKINC . '/nav-menu-template.php';
require ABSPATH . JKINC . '/nav-menu.php';
require ABSPATH . JKINC . '/admin-bar.php';
require ABSPATH . JKINC . '/class-jk-application-passwords.php';
require ABSPATH . JKINC . '/rest-api.php';
require ABSPATH . JKINC . '/rest-api/class-jk-rest-server.php';
require ABSPATH . JKINC . '/rest-api/class-jk-rest-response.php';
require ABSPATH . JKINC . '/rest-api/class-jk-rest-request.php';
require ABSPATH . JKINC . '/rest-api/endpoints/class-jk-rest-controller.php';
require ABSPATH . JKINC . '/rest-api/endpoints/class-jk-rest-posts-controller.php';
require ABSPATH . JKINC . '/rest-api/endpoints/class-jk-rest-attachments-controller.php';
require ABSPATH . JKINC . '/rest-api/endpoints/class-jk-rest-global-styles-controller.php';
require ABSPATH . JKINC . '/rest-api/endpoints/class-jk-rest-post-types-controller.php';
require ABSPATH . JKINC . '/rest-api/endpoints/class-jk-rest-post-statuses-controller.php';
require ABSPATH . JKINC . '/rest-api/endpoints/class-jk-rest-revisions-controller.php';
require ABSPATH . JKINC . '/rest-api/endpoints/class-jk-rest-global-styles-revisions-controller.php';
require ABSPATH . JKINC . '/rest-api/endpoints/class-jk-rest-template-revisions-controller.php';
require ABSPATH . JKINC . '/rest-api/endpoints/class-jk-rest-autosaves-controller.php';
require ABSPATH . JKINC . '/rest-api/endpoints/class-jk-rest-template-autosaves-controller.php';
require ABSPATH . JKINC . '/rest-api/endpoints/class-jk-rest-taxonomies-controller.php';
require ABSPATH . JKINC . '/rest-api/endpoints/class-jk-rest-terms-controller.php';
require ABSPATH . JKINC . '/rest-api/endpoints/class-jk-rest-menu-items-controller.php';
require ABSPATH . JKINC . '/rest-api/endpoints/class-jk-rest-menus-controller.php';
require ABSPATH . JKINC . '/rest-api/endpoints/class-jk-rest-menu-locations-controller.php';
require ABSPATH . JKINC . '/rest-api/endpoints/class-jk-rest-users-controller.php';
require ABSPATH . JKINC . '/rest-api/endpoints/class-jk-rest-comments-controller.php';
require ABSPATH . JKINC . '/rest-api/endpoints/class-jk-rest-search-controller.php';
require ABSPATH . JKINC . '/rest-api/endpoints/class-jk-rest-blocks-controller.php';
require ABSPATH . JKINC . '/rest-api/endpoints/class-jk-rest-block-types-controller.php';
require ABSPATH . JKINC . '/rest-api/endpoints/class-jk-rest-block-renderer-controller.php';
require ABSPATH . JKINC . '/rest-api/endpoints/class-jk-rest-settings-controller.php';
require ABSPATH . JKINC . '/rest-api/endpoints/class-jk-rest-themes-controller.php';
require ABSPATH . JKINC . '/rest-api/endpoints/class-jk-rest-plugins-controller.php';
require ABSPATH . JKINC . '/rest-api/endpoints/class-jk-rest-block-directory-controller.php';
require ABSPATH . JKINC . '/rest-api/endpoints/class-jk-rest-edit-site-export-controller.php';
require ABSPATH . JKINC . '/rest-api/endpoints/class-jk-rest-pattern-directory-controller.php';
require ABSPATH . JKINC . '/rest-api/endpoints/class-jk-rest-block-patterns-controller.php';
require ABSPATH . JKINC . '/rest-api/endpoints/class-jk-rest-block-pattern-categories-controller.php';
require ABSPATH . JKINC . '/rest-api/endpoints/class-jk-rest-application-passwords-controller.php';
require ABSPATH . JKINC . '/rest-api/endpoints/class-jk-rest-site-health-controller.php';
require ABSPATH . JKINC . '/rest-api/endpoints/class-jk-rest-sidebars-controller.php';
require ABSPATH . JKINC . '/rest-api/endpoints/class-jk-rest-widget-types-controller.php';
require ABSPATH . JKINC . '/rest-api/endpoints/class-jk-rest-widgets-controller.php';
require ABSPATH . JKINC . '/rest-api/endpoints/class-jk-rest-templates-controller.php';
require ABSPATH . JKINC . '/rest-api/endpoints/class-jk-rest-url-details-controller.php';
require ABSPATH . JKINC . '/rest-api/endpoints/class-jk-rest-navigation-fallback-controller.php';
require ABSPATH . JKINC . '/rest-api/endpoints/class-jk-rest-font-families-controller.php';
require ABSPATH . JKINC . '/rest-api/endpoints/class-jk-rest-font-faces-controller.php';
require ABSPATH . JKINC . '/rest-api/endpoints/class-jk-rest-font-collections-controller.php';
require ABSPATH . JKINC . '/rest-api/fields/class-jk-rest-meta-fields.php';
require ABSPATH . JKINC . '/rest-api/fields/class-jk-rest-comment-meta-fields.php';
require ABSPATH . JKINC . '/rest-api/fields/class-jk-rest-post-meta-fields.php';
require ABSPATH . JKINC . '/rest-api/fields/class-jk-rest-term-meta-fields.php';
require ABSPATH . JKINC . '/rest-api/fields/class-jk-rest-user-meta-fields.php';
require ABSPATH . JKINC . '/rest-api/search/class-jk-rest-search-handler.php';
require ABSPATH . JKINC . '/rest-api/search/class-jk-rest-post-search-handler.php';
require ABSPATH . JKINC . '/rest-api/search/class-jk-rest-term-search-handler.php';
require ABSPATH . JKINC . '/rest-api/search/class-jk-rest-post-format-search-handler.php';
require ABSPATH . JKINC . '/sitemaps.php';
require ABSPATH . JKINC . '/sitemaps/class-jk-sitemaps.php';
require ABSPATH . JKINC . '/sitemaps/class-jk-sitemaps-index.php';
require ABSPATH . JKINC . '/sitemaps/class-jk-sitemaps-provider.php';
require ABSPATH . JKINC . '/sitemaps/class-jk-sitemaps-registry.php';
require ABSPATH . JKINC . '/sitemaps/class-jk-sitemaps-renderer.php';
require ABSPATH . JKINC . '/sitemaps/class-jk-sitemaps-stylesheet.php';
require ABSPATH . JKINC . '/sitemaps/providers/class-jk-sitemaps-posts.php';
require ABSPATH . JKINC . '/sitemaps/providers/class-jk-sitemaps-taxonomies.php';
require ABSPATH . JKINC . '/sitemaps/providers/class-jk-sitemaps-users.php';
require ABSPATH . JKINC . '/class-jk-block-bindings-source.php';
require ABSPATH . JKINC . '/class-jk-block-bindings-registry.php';
require ABSPATH . JKINC . '/class-jk-block-editor-context.php';
require ABSPATH . JKINC . '/class-jk-block-type.php';
require ABSPATH . JKINC . '/class-jk-block-pattern-categories-registry.php';
require ABSPATH . JKINC . '/class-jk-block-patterns-registry.php';
require ABSPATH . JKINC . '/class-jk-block-styles-registry.php';
require ABSPATH . JKINC . '/class-jk-block-type-registry.php';
require ABSPATH . JKINC . '/class-jk-block.php';
require ABSPATH . JKINC . '/class-jk-block-list.php';
require ABSPATH . JKINC . '/class-jk-block-metadata-registry.php';
require ABSPATH . JKINC . '/class-jk-block-parser-block.php';
require ABSPATH . JKINC . '/class-jk-block-parser-frame.php';
require ABSPATH . JKINC . '/class-jk-block-parser.php';
require ABSPATH . JKINC . '/class-jk-classic-to-block-menu-converter.php';
require ABSPATH . JKINC . '/class-jk-navigation-fallback.php';
require ABSPATH . JKINC . '/block-bindings.php';
require ABSPATH . JKINC . '/block-bindings/pattern-overrides.php';
require ABSPATH . JKINC . '/block-bindings/post-meta.php';
require ABSPATH . JKINC . '/blocks.php';
require ABSPATH . JKINC . '/blocks/index.php';
require ABSPATH . JKINC . '/block-editor.php';
require ABSPATH . JKINC . '/block-patterns.php';
require ABSPATH . JKINC . '/class-jk-block-supports.php';
require ABSPATH . JKINC . '/block-supports/utils.php';
require ABSPATH . JKINC . '/block-supports/align.php';
require ABSPATH . JKINC . '/block-supports/custom-classname.php';
require ABSPATH . JKINC . '/block-supports/generated-classname.php';
require ABSPATH . JKINC . '/block-supports/settings.php';
require ABSPATH . JKINC . '/block-supports/elements.php';
require ABSPATH . JKINC . '/block-supports/colors.php';
require ABSPATH . JKINC . '/block-supports/typography.php';
require ABSPATH . JKINC . '/block-supports/border.php';
require ABSPATH . JKINC . '/block-supports/layout.php';
require ABSPATH . JKINC . '/block-supports/position.php';
require ABSPATH . JKINC . '/block-supports/spacing.php';
require ABSPATH . JKINC . '/block-supports/dimensions.php';
require ABSPATH . JKINC . '/block-supports/duotone.php';
require ABSPATH . JKINC . '/block-supports/shadow.php';
require ABSPATH . JKINC . '/block-supports/background.php';
require ABSPATH . JKINC . '/block-supports/block-style-variations.php';
require ABSPATH . JKINC . '/style-engine.php';
require ABSPATH . JKINC . '/style-engine/class-jk-style-engine.php';
require ABSPATH . JKINC . '/style-engine/class-jk-style-engine-css-declarations.php';
require ABSPATH . JKINC . '/style-engine/class-jk-style-engine-css-rule.php';
require ABSPATH . JKINC . '/style-engine/class-jk-style-engine-css-rules-store.php';
require ABSPATH . JKINC . '/style-engine/class-jk-style-engine-processor.php';
require ABSPATH . JKINC . '/fonts/class-jk-font-face-resolver.php';
require ABSPATH . JKINC . '/fonts/class-jk-font-collection.php';
require ABSPATH . JKINC . '/fonts/class-jk-font-face.php';
require ABSPATH . JKINC . '/fonts/class-jk-font-library.php';
require ABSPATH . JKINC . '/fonts/class-jk-font-utils.php';
require ABSPATH . JKINC . '/fonts.php';
require ABSPATH . JKINC . '/class-jk-script-modules.php';
require ABSPATH . JKINC . '/script-modules.php';
require ABSPATH . JKINC . '/interactivity-api/class-jk-interactivity-api.php';
require ABSPATH . JKINC . '/interactivity-api/class-jk-interactivity-api-directives-processor.php';
require ABSPATH . JKINC . '/interactivity-api/interactivity-api.php';
require ABSPATH . JKINC . '/class-jk-plugin-dependencies.php';

add_action( 'after_setup_theme', array( jk_script_modules(), 'add_hooks' ) );
add_action( 'after_setup_theme', array( jk_interactivity(), 'add_hooks' ) );

/**
 * @since 3.3.0
 *
 * @global JK_Embed $jk_embed JKPress Embed object.
 */
$GLOBALS['jk_embed'] = new JK_Embed();

/**
 * JKPress Textdomain Registry object.
 *
 * Used to support just-in-time translations for manually loaded text domains.
 *
 * @since 6.1.0
 *
 * @global JK_Textdomain_Registry $jk_textdomain_registry JKPress Textdomain Registry.
 */
$GLOBALS['jk_textdomain_registry'] = new JK_Textdomain_Registry();
$GLOBALS['jk_textdomain_registry']->init();

// Load multisite-specific files.
if ( is_multisite() ) {
	require ABSPATH . JKINC . '/ms-functions.php';
	require ABSPATH . JKINC . '/ms-default-filters.php';
	require ABSPATH . JKINC . '/ms-deprecated.php';
}

// Define constants that rely on the API to obtain the default value.
// Define must-use plugin directory constants, which may be overridden in the sunrise.php drop-in.
jk_plugin_directory_constants();

/**
 * @since 3.9.0
 *
 * @global array $jk_plugin_paths
 */
$GLOBALS['jk_plugin_paths'] = array();

// Load must-use plugins.
foreach ( jk_get_mu_plugins() as $mu_plugin ) {
	$_jk_plugin_file = $mu_plugin;
	include_once $mu_plugin;
	$mu_plugin = $_jk_plugin_file; // Avoid stomping of the $mu_plugin variable in a plugin.

	/**
	 * Fires once a single must-use plugin has loaded.
	 *
	 * @since 5.1.0
	 *
	 * @param string $mu_plugin Full path to the plugin's main file.
	 */
	do_action( 'mu_plugin_loaded', $mu_plugin );
}
unset( $mu_plugin, $_jk_plugin_file );

// Load network activated plugins.
if ( is_multisite() ) {
	foreach ( jk_get_active_network_plugins() as $network_plugin ) {
		jk_register_plugin_realpath( $network_plugin );

		$_jk_plugin_file = $network_plugin;
		include_once $network_plugin;
		$network_plugin = $_jk_plugin_file; // Avoid stomping of the $network_plugin variable in a plugin.

		/**
		 * Fires once a single network-activated plugin has loaded.
		 *
		 * @since 5.1.0
		 *
		 * @param string $network_plugin Full path to the plugin's main file.
		 */
		do_action( 'network_plugin_loaded', $network_plugin );
	}
	unset( $network_plugin, $_jk_plugin_file );
}

/**
 * Fires once all must-use and network-activated plugins have loaded.
 *
 * @since 2.8.0
 */
do_action( 'muplugins_loaded' );

if ( is_multisite() ) {
	ms_cookie_constants();
}

// Define constants after multisite is loaded.
jk_cookie_constants();

// Define and enforce our SSL constants.
jk_ssl_constants();

// Create common globals.
require ABSPATH . JKINC . '/vars.php';

// Make taxonomies and posts available to plugins and themes.
// @plugin authors: warning: these get registered again on the init hook.
create_initial_taxonomies();
create_initial_post_types();

jk_start_scraping_edited_file_errors();

// Register the default theme directory root.
register_theme_directory( get_theme_root() );

if ( ! is_multisite() && jk_is_fatal_error_handler_enabled() ) {
	// Handle users requesting a recovery mode link and initiating recovery mode.
	jk_recovery_mode()->initialize();
}

// To make get_plugin_data() available in a way that's compatible with plugins also loading this file, see #62244.
require_once ABSPATH . 'jk-admin/includes/plugin.php';

// Load active plugins.
foreach ( jk_get_active_and_valid_plugins() as $plugin ) {
	jk_register_plugin_realpath( $plugin );

	$_jk_plugin_file = $plugin;
	include_once $plugin;
	$plugin = $_jk_plugin_file; // Avoid stomping of the $plugin variable in a plugin.

	/**
	 * Fires once a single activated plugin has loaded.
	 *
	 * @since 5.1.0
	 *
	 * @param string $plugin Full path to the plugin's main file.
	 */
	do_action( 'plugin_loaded', $plugin );

	$plugin_data = get_plugin_data( $plugin, false, false );

	$textdomain = $plugin_data['TextDomain'];
	if ( $textdomain ) {
		if ( $plugin_data['DomainPath'] ) {
			$GLOBALS['jk_textdomain_registry']->set_custom_path( $textdomain, dirname( $plugin ) . $plugin_data['DomainPath'] );
		} else {
			$GLOBALS['jk_textdomain_registry']->set_custom_path( $textdomain, dirname( $plugin ) );
		}
	}
}
unset( $plugin, $_jk_plugin_file, $plugin_data, $textdomain );

// Load pluggable functions.
require ABSPATH . JKINC . '/pluggable.php';
require ABSPATH . JKINC . '/pluggable-deprecated.php';

// Set internal encoding.
jk_set_internal_encoding();

// Run jk_cache_postload() if object cache is enabled and the function exists.
if ( JK_CACHE && function_exists( 'jk_cache_postload' ) ) {
	jk_cache_postload();
}

/**
 * Fires once activated plugins have loaded.
 *
 * Pluggable functions are also available at this point in the loading order.
 *
 * @since 1.5.0
 */
do_action( 'plugins_loaded' );

// Define constants which affect functionality if not already defined.
jk_functionality_constants();

// Add magic quotes and set up $_REQUEST ( $_GET + $_POST ).
jk_magic_quotes();

/**
 * Fires when comment cookies are sanitized.
 *
 * @since 2.0.11
 */
do_action( 'sanitize_comment_cookies' );

/**
 * JKPress Query object
 *
 * @since 2.0.0
 *
 * @global JK_Query $jk_the_query JKPress Query object.
 */
$GLOBALS['jk_the_query'] = new JK_Query();

/**
 * Holds the reference to {@see $jk_the_query}.
 * Use this global for JKPress queries
 *
 * @since 1.5.0
 *
 * @global JK_Query $jk_query JKPress Query object.
 */
$GLOBALS['jk_query'] = $GLOBALS['jk_the_query'];

/**
 * Holds the JKPress Rewrite object for creating pretty URLs
 *
 * @since 1.5.0
 *
 * @global JK_Rewrite $jk_rewrite JKPress rewrite component.
 */
$GLOBALS['jk_rewrite'] = new JK_Rewrite();

/**
 * JKPress Object
 *
 * @since 2.0.0
 *
 * @global JK $jk Current JKPress environment instance.
 */
$GLOBALS['jk'] = new JK();

/**
 * JKPress Widget Factory Object
 *
 * @since 2.8.0
 *
 * @global JK_Widget_Factory $jk_widget_factory
 */
$GLOBALS['jk_widget_factory'] = new JK_Widget_Factory();

/**
 * JKPress User Roles
 *
 * @since 2.0.0
 *
 * @global JK_Roles $jk_roles JKPress role management object.
 */
$GLOBALS['jk_roles'] = new JK_Roles();

/**
 * Fires before the theme is loaded.
 *
 * @since 2.6.0
 */
do_action( 'setup_theme' );

// Define the template related constants and globals.
jk_templating_constants();
jk_set_template_globals();

// Load the default text localization domain.
load_default_textdomain();

$locale      = get_locale();
$locale_file = JK_LANG_DIR . "/$locale.php";
if ( ( 0 === validate_file( $locale ) ) && is_readable( $locale_file ) ) {
	require $locale_file;
}
unset( $locale_file );

/**
 * JKPress Locale object for loading locale domain date and various strings.
 *
 * @since 2.1.0
 *
 * @global JK_Locale $jk_locale JKPress date and time locale object.
 */
$GLOBALS['jk_locale'] = new JK_Locale();

/**
 * JKPress Locale Switcher object for switching locales.
 *
 * @since 4.7.0
 *
 * @global JK_Locale_Switcher $jk_locale_switcher JKPress locale switcher object.
 */
$GLOBALS['jk_locale_switcher'] = new JK_Locale_Switcher();
$GLOBALS['jk_locale_switcher']->init();

// Load the functions for the active theme, for both parent and child theme if applicable.
foreach ( jk_get_active_and_valid_themes() as $theme ) {
	$jk_theme = jk_get_theme( basename( $theme ) );

	if ( file_exists( $theme . '/functions.php' ) ) {
		include $theme . '/functions.php';
	}

	$jk_theme->load_textdomain();
}
unset( $theme, $jk_theme );

/**
 * Fires after the theme is loaded.
 *
 * @since 3.0.0
 */
do_action( 'after_setup_theme' );

// Create an instance of JK_Site_Health so that Cron events may fire.
if ( ! class_exists( 'JK_Site_Health' ) ) {
	require_once ABSPATH . 'jk-admin/includes/class-jk-site-health.php';
}
JK_Site_Health::get_instance();

// Set up current user.
$GLOBALS['jk']->init();

/**
 * Fires after JKPress has finished loading but before any headers are sent.
 *
 * Most of JK is loaded at this stage, and the user is authenticated. JK continues
 * to load on the {@see 'init'} hook that follows (e.g. widgets), and many plugins instantiate
 * themselves on it for all sorts of reasons (e.g. they need a user, a taxonomy, etc.).
 *
 * If you wish to plug an action once JK is loaded, use the {@see 'jk_loaded'} hook below.
 *
 * @since 1.5.0
 */
do_action( 'init' );

// Check site status.
if ( is_multisite() ) {
	$file = ms_site_check();
	if ( true !== $file ) {
		require $file;
		die();
	}
	unset( $file );
}

/**
 * This hook is fired once JK, all plugins, and the theme are fully loaded and instantiated.
 *
 * Ajax requests should use jk-admin/admin-ajax.php. admin-ajax.php can handle requests for
 * users not logged in.
 *
 * @link https://developer.wordpress.org/plugins/javascript/ajax
 *
 * @since 3.0.0
 */
do_action( 'jk_loaded' );
