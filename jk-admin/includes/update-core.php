<?php
/**
 * JKPress core upgrade functionality.
 *
 * Note: Newly introduced functions and methods cannot be used here.
 * All functions must be present in the previous version being upgraded from
 * as this file is used there too.
 *
 * @package JKPress
 * @subpackage Administration
 * @since 2.7.0
 */

/**
 * Stores files to be deleted.
 *
 * Bundled theme files should not be included in this list.
 *
 * @since 2.7.0
 *
 * @global array $_old_files
 * @var array
 * @name $_old_files
 */
global $_old_files;

$_old_files = array(
	// 2.0
	'jk-admin/import-b2.php',
	'jk-admin/import-blogger.php',
	'jk-admin/import-greymatter.php',
	'jk-admin/import-livejournal.php',
	'jk-admin/import-mt.php',
	'jk-admin/import-rss.php',
	'jk-admin/import-textpattern.php',
	'jk-admin/quicktags.js',
	'jk-images/fade-butt.png',
	'jk-images/get-firefox.png',
	'jk-images/header-shadow.png',
	'jk-images/smilies',
	'jk-images/jk-small.png',
	'jk-images/wpminilogo.png',
	'jk.php',
	// 2.1
	'jk-admin/edit-form-ajax-cat.php',
	'jk-admin/execute-pings.php',
	'jk-admin/inline-uploading.php',
	'jk-admin/link-categories.php',
	'jk-admin/list-manipulation.js',
	'jk-admin/list-manipulation.php',
	'jk-includes/comment-functions.php',
	'jk-includes/feed-functions.php',
	'jk-includes/functions-compat.php',
	'jk-includes/functions-formatting.php',
	'jk-includes/functions-post.php',
	'jk-includes/js/dbx-key.js',
	'jk-includes/links.php',
	'jk-includes/pluggable-functions.php',
	'jk-includes/template-functions-author.php',
	'jk-includes/template-functions-category.php',
	'jk-includes/template-functions-general.php',
	'jk-includes/template-functions-links.php',
	'jk-includes/template-functions-post.php',
	'jk-includes/jk-l10n.php',
	// 2.2
	'jk-admin/cat-js.php',
	'jk-includes/js/autosave-js.php',
	'jk-includes/js/list-manipulation-js.php',
	'jk-includes/js/jk-ajax-js.php',
	// 2.3
	'jk-admin/admin-db.php',
	'jk-admin/cat.js',
	'jk-admin/categories.js',
	'jk-admin/custom-fields.js',
	'jk-admin/dbx-admin-key.js',
	'jk-admin/edit-comments.js',
	'jk-admin/install-rtl.css',
	'jk-admin/install.css',
	'jk-admin/upgrade-schema.php',
	'jk-admin/upload-functions.php',
	'jk-admin/upload-rtl.css',
	'jk-admin/upload.css',
	'jk-admin/upload.js',
	'jk-admin/users.js',
	'jk-admin/widgets-rtl.css',
	'jk-admin/widgets.css',
	'jk-admin/xfn.js',
	'jk-includes/js/tinymce/license.html',
	// 2.5
	'jk-admin/css/upload.css',
	'jk-admin/images/box-bg-left.gif',
	'jk-admin/images/box-bg-right.gif',
	'jk-admin/images/box-bg.gif',
	'jk-admin/images/box-butt-left.gif',
	'jk-admin/images/box-butt-right.gif',
	'jk-admin/images/box-butt.gif',
	'jk-admin/images/box-head-left.gif',
	'jk-admin/images/box-head-right.gif',
	'jk-admin/images/box-head.gif',
	'jk-admin/images/heading-bg.gif',
	'jk-admin/images/login-bkg-bottom.gif',
	'jk-admin/images/login-bkg-tile.gif',
	'jk-admin/images/notice.gif',
	'jk-admin/images/toggle.gif',
	'jk-admin/includes/upload.php',
	'jk-admin/js/dbx-admin-key.js',
	'jk-admin/js/link-cat.js',
	'jk-admin/profile-update.php',
	'jk-admin/templates.php',
	'jk-includes/js/dbx.js',
	'jk-includes/js/fat.js',
	'jk-includes/js/list-manipulation.js',
	'jk-includes/js/tinymce/langs/en.js',
	'jk-includes/js/tinymce/plugins/directionality/images',
	'jk-includes/js/tinymce/plugins/directionality/langs',
	'jk-includes/js/tinymce/plugins/paste/images',
	'jk-includes/js/tinymce/plugins/paste/jscripts',
	'jk-includes/js/tinymce/plugins/paste/langs',
	'jk-includes/js/tinymce/plugins/wordpress/images',
	'jk-includes/js/tinymce/plugins/wordpress/langs',
	'jk-includes/js/tinymce/plugins/wordpress/wordpress.css',
	'jk-includes/js/tinymce/plugins/wphelp',
	// 2.5.1
	'jk-includes/js/tinymce/tiny_mce_gzip.php',
	// 2.6
	'jk-admin/bookmarklet.php',
	'jk-includes/js/jquery/jquery.dimensions.min.js',
	'jk-includes/js/tinymce/plugins/wordpress/popups.css',
	'jk-includes/js/jk-ajax.js',
	// 2.7
	'jk-admin/css/press-this-ie-rtl.css',
	'jk-admin/css/press-this-ie.css',
	'jk-admin/css/upload-rtl.css',
	'jk-admin/edit-form.php',
	'jk-admin/images/comment-pill.gif',
	'jk-admin/images/comment-stalk-classic.gif',
	'jk-admin/images/comment-stalk-fresh.gif',
	'jk-admin/images/comment-stalk-rtl.gif',
	'jk-admin/images/del.png',
	'jk-admin/images/gear.png',
	'jk-admin/images/media-button-gallery.gif',
	'jk-admin/images/media-buttons.gif',
	'jk-admin/images/postbox-bg.gif',
	'jk-admin/images/tab.png',
	'jk-admin/images/tail.gif',
	'jk-admin/js/forms.js',
	'jk-admin/js/upload.js',
	'jk-admin/link-import.php',
	'jk-includes/images/audio.png',
	'jk-includes/images/css.png',
	'jk-includes/images/default.png',
	'jk-includes/images/doc.png',
	'jk-includes/images/exe.png',
	'jk-includes/images/html.png',
	'jk-includes/images/js.png',
	'jk-includes/images/pdf.png',
	'jk-includes/images/swf.png',
	'jk-includes/images/tar.png',
	'jk-includes/images/text.png',
	'jk-includes/images/video.png',
	'jk-includes/images/zip.png',
	'jk-includes/js/tinymce/tiny_mce_config.php',
	'jk-includes/js/tinymce/tiny_mce_ext.js',
	// 2.8
	'jk-admin/js/users.js',
	'jk-includes/js/swfupload/swfupload_f9.swf',
	'jk-includes/js/tinymce/plugins/autosave',
	'jk-includes/js/tinymce/plugins/paste/css',
	'jk-includes/js/tinymce/utils/mclayer.js',
	'jk-includes/js/tinymce/wordpress.css',
	// 2.9
	'jk-admin/js/page.dev.js',
	'jk-admin/js/page.js',
	'jk-admin/js/set-post-thumbnail-handler.dev.js',
	'jk-admin/js/set-post-thumbnail-handler.js',
	'jk-admin/js/slug.dev.js',
	'jk-admin/js/slug.js',
	'jk-includes/gettext.php',
	'jk-includes/js/tinymce/plugins/wordpress/js',
	'jk-includes/streams.php',
	// MU
	'README.txt',
	'htaccess.dist',
	'index-install.php',
	'jk-admin/css/mu-rtl.css',
	'jk-admin/css/mu.css',
	'jk-admin/images/site-admin.png',
	'jk-admin/includes/mu.php',
	'jk-admin/wpmu-admin.php',
	'jk-admin/wpmu-blogs.php',
	'jk-admin/wpmu-edit.php',
	'jk-admin/wpmu-options.php',
	'jk-admin/wpmu-themes.php',
	'jk-admin/wpmu-upgrade-site.php',
	'jk-admin/wpmu-users.php',
	'jk-includes/images/wordpress-mu.png',
	'jk-includes/wpmu-default-filters.php',
	'jk-includes/wpmu-functions.php',
	'wpmu-settings.php',
	// 3.0
	'jk-admin/categories.php',
	'jk-admin/edit-category-form.php',
	'jk-admin/edit-page-form.php',
	'jk-admin/edit-pages.php',
	'jk-admin/images/admin-header-footer.png',
	'jk-admin/images/browse-happy.gif',
	'jk-admin/images/ico-add.png',
	'jk-admin/images/ico-close.png',
	'jk-admin/images/ico-edit.png',
	'jk-admin/images/ico-viewpage.png',
	'jk-admin/images/fav-top.png',
	'jk-admin/images/screen-options-left.gif',
	'jk-admin/images/jk-logo-vs.gif',
	'jk-admin/images/jk-logo.gif',
	'jk-admin/import',
	'jk-admin/js/jk-gears.dev.js',
	'jk-admin/js/jk-gears.js',
	'jk-admin/options-misc.php',
	'jk-admin/page-new.php',
	'jk-admin/page.php',
	'jk-admin/rtl.css',
	'jk-admin/rtl.dev.css',
	'jk-admin/update-links.php',
	'jk-admin/jk-admin.css',
	'jk-admin/jk-admin.dev.css',
	'jk-includes/js/codepress',
	'jk-includes/js/jquery/autocomplete.dev.js',
	'jk-includes/js/jquery/autocomplete.js',
	'jk-includes/js/jquery/interface.js',
	// Following file added back in 5.1, see #45645.
	//'jk-includes/js/tinymce/jk-tinymce.js',
	// 3.1
	'jk-admin/edit-attachment-rows.php',
	'jk-admin/edit-link-categories.php',
	'jk-admin/edit-link-category-form.php',
	'jk-admin/edit-post-rows.php',
	'jk-admin/images/button-grad-active-vs.png',
	'jk-admin/images/button-grad-vs.png',
	'jk-admin/images/fav-arrow-vs-rtl.gif',
	'jk-admin/images/fav-arrow-vs.gif',
	'jk-admin/images/fav-top-vs.gif',
	'jk-admin/images/list-vs.png',
	'jk-admin/images/screen-options-right-up.gif',
	'jk-admin/images/screen-options-right.gif',
	'jk-admin/images/visit-site-button-grad-vs.gif',
	'jk-admin/images/visit-site-button-grad.gif',
	'jk-admin/link-category.php',
	'jk-admin/sidebar.php',
	'jk-includes/classes.php',
	'jk-includes/js/tinymce/blank.htm',
	'jk-includes/js/tinymce/plugins/media/img',
	'jk-includes/js/tinymce/plugins/safari',
	// 3.2
	'jk-admin/images/logo-login.gif',
	'jk-admin/images/star.gif',
	'jk-admin/js/list-table.dev.js',
	'jk-admin/js/list-table.js',
	'jk-includes/default-embeds.php',
	// 3.3
	'jk-admin/css/colors-classic-rtl.css',
	'jk-admin/css/colors-classic-rtl.dev.css',
	'jk-admin/css/colors-fresh-rtl.css',
	'jk-admin/css/colors-fresh-rtl.dev.css',
	'jk-admin/css/dashboard-rtl.dev.css',
	'jk-admin/css/dashboard.dev.css',
	'jk-admin/css/global-rtl.css',
	'jk-admin/css/global-rtl.dev.css',
	'jk-admin/css/global.css',
	'jk-admin/css/global.dev.css',
	'jk-admin/css/install-rtl.dev.css',
	'jk-admin/css/login-rtl.dev.css',
	'jk-admin/css/login.dev.css',
	'jk-admin/css/ms.css',
	'jk-admin/css/ms.dev.css',
	'jk-admin/css/nav-menu-rtl.css',
	'jk-admin/css/nav-menu-rtl.dev.css',
	'jk-admin/css/nav-menu.css',
	'jk-admin/css/nav-menu.dev.css',
	'jk-admin/css/plugin-install-rtl.css',
	'jk-admin/css/plugin-install-rtl.dev.css',
	'jk-admin/css/plugin-install.css',
	'jk-admin/css/plugin-install.dev.css',
	'jk-admin/css/press-this-rtl.dev.css',
	'jk-admin/css/press-this.dev.css',
	'jk-admin/css/theme-editor-rtl.css',
	'jk-admin/css/theme-editor-rtl.dev.css',
	'jk-admin/css/theme-editor.css',
	'jk-admin/css/theme-editor.dev.css',
	'jk-admin/css/theme-install-rtl.css',
	'jk-admin/css/theme-install-rtl.dev.css',
	'jk-admin/css/theme-install.css',
	'jk-admin/css/theme-install.dev.css',
	'jk-admin/css/widgets-rtl.dev.css',
	'jk-admin/css/widgets.dev.css',
	'jk-admin/includes/internal-linking.php',
	'jk-includes/images/admin-bar-sprite-rtl.png',
	'jk-includes/js/jquery/ui.button.js',
	'jk-includes/js/jquery/ui.core.js',
	'jk-includes/js/jquery/ui.dialog.js',
	'jk-includes/js/jquery/ui.draggable.js',
	'jk-includes/js/jquery/ui.droppable.js',
	'jk-includes/js/jquery/ui.mouse.js',
	'jk-includes/js/jquery/ui.position.js',
	'jk-includes/js/jquery/ui.resizable.js',
	'jk-includes/js/jquery/ui.selectable.js',
	'jk-includes/js/jquery/ui.sortable.js',
	'jk-includes/js/jquery/ui.tabs.js',
	'jk-includes/js/jquery/ui.widget.js',
	'jk-includes/js/l10n.dev.js',
	'jk-includes/js/l10n.js',
	'jk-includes/js/tinymce/plugins/wplink/css',
	'jk-includes/js/tinymce/plugins/wplink/img',
	'jk-includes/js/tinymce/plugins/wplink/js',
	// Don't delete, yet: 'jk-rss.php',
	// Don't delete, yet: 'jk-rdf.php',
	// Don't delete, yet: 'jk-rss2.php',
	// Don't delete, yet: 'jk-commentsrss2.php',
	// Don't delete, yet: 'jk-atom.php',
	// Don't delete, yet: 'jk-feed.php',
	// 3.4
	'jk-admin/images/gray-star.png',
	'jk-admin/images/logo-login.png',
	'jk-admin/images/star.png',
	'jk-admin/index-extra.php',
	'jk-admin/network/index-extra.php',
	'jk-admin/user/index-extra.php',
	'jk-includes/css/editor-buttons.css',
	'jk-includes/css/editor-buttons.dev.css',
	'jk-includes/js/tinymce/plugins/paste/blank.htm',
	'jk-includes/js/tinymce/plugins/wordpress/css',
	'jk-includes/js/tinymce/plugins/wordpress/editor_plugin.dev.js',
	'jk-includes/js/tinymce/plugins/wpdialogs/editor_plugin.dev.js',
	'jk-includes/js/tinymce/plugins/wpeditimage/editor_plugin.dev.js',
	'jk-includes/js/tinymce/plugins/wpgallery/editor_plugin.dev.js',
	'jk-includes/js/tinymce/plugins/wplink/editor_plugin.dev.js',
	// Don't delete, yet: 'jk-pass.php',
	// Don't delete, yet: 'jk-register.php',
	// 3.5
	'jk-admin/gears-manifest.php',
	'jk-admin/includes/manifest.php',
	'jk-admin/images/archive-link.png',
	'jk-admin/images/blue-grad.png',
	'jk-admin/images/button-grad-active.png',
	'jk-admin/images/button-grad.png',
	'jk-admin/images/ed-bg-vs.gif',
	'jk-admin/images/ed-bg.gif',
	'jk-admin/images/fade-butt.png',
	'jk-admin/images/fav-arrow-rtl.gif',
	'jk-admin/images/fav-arrow.gif',
	'jk-admin/images/fav-vs.png',
	'jk-admin/images/fav.png',
	'jk-admin/images/gray-grad.png',
	'jk-admin/images/loading-publish.gif',
	'jk-admin/images/logo-ghost.png',
	'jk-admin/images/logo.gif',
	'jk-admin/images/menu-arrow-frame-rtl.png',
	'jk-admin/images/menu-arrow-frame.png',
	'jk-admin/images/menu-arrows.gif',
	'jk-admin/images/menu-bits-rtl-vs.gif',
	'jk-admin/images/menu-bits-rtl.gif',
	'jk-admin/images/menu-bits-vs.gif',
	'jk-admin/images/menu-bits.gif',
	'jk-admin/images/menu-dark-rtl-vs.gif',
	'jk-admin/images/menu-dark-rtl.gif',
	'jk-admin/images/menu-dark-vs.gif',
	'jk-admin/images/menu-dark.gif',
	'jk-admin/images/required.gif',
	'jk-admin/images/screen-options-toggle-vs.gif',
	'jk-admin/images/screen-options-toggle.gif',
	'jk-admin/images/toggle-arrow-rtl.gif',
	'jk-admin/images/toggle-arrow.gif',
	'jk-admin/images/upload-classic.png',
	'jk-admin/images/upload-fresh.png',
	'jk-admin/images/white-grad-active.png',
	'jk-admin/images/white-grad.png',
	'jk-admin/images/widgets-arrow-vs.gif',
	'jk-admin/images/widgets-arrow.gif',
	'jk-admin/images/wpspin_dark.gif',
	'jk-includes/images/upload.png',
	'jk-includes/js/prototype.js',
	'jk-includes/js/scriptaculous',
	'jk-admin/css/jk-admin-rtl.dev.css',
	'jk-admin/css/jk-admin.dev.css',
	'jk-admin/css/media-rtl.dev.css',
	'jk-admin/css/media.dev.css',
	'jk-admin/css/colors-classic.dev.css',
	'jk-admin/css/customize-controls-rtl.dev.css',
	'jk-admin/css/customize-controls.dev.css',
	'jk-admin/css/ie-rtl.dev.css',
	'jk-admin/css/ie.dev.css',
	'jk-admin/css/install.dev.css',
	'jk-admin/css/colors-fresh.dev.css',
	'jk-includes/js/customize-base.dev.js',
	'jk-includes/js/json2.dev.js',
	'jk-includes/js/comment-reply.dev.js',
	'jk-includes/js/customize-preview.dev.js',
	'jk-includes/js/wplink.dev.js',
	'jk-includes/js/tw-sack.dev.js',
	'jk-includes/js/jk-list-revisions.dev.js',
	'jk-includes/js/autosave.dev.js',
	'jk-includes/js/admin-bar.dev.js',
	'jk-includes/js/quicktags.dev.js',
	'jk-includes/js/jk-ajax-response.dev.js',
	'jk-includes/js/jk-pointer.dev.js',
	'jk-includes/js/hoverIntent.dev.js',
	'jk-includes/js/colorpicker.dev.js',
	'jk-includes/js/jk-lists.dev.js',
	'jk-includes/js/customize-loader.dev.js',
	'jk-includes/js/jquery/jquery.table-hotkeys.dev.js',
	'jk-includes/js/jquery/jquery.color.dev.js',
	'jk-includes/js/jquery/jquery.color.js',
	'jk-includes/js/jquery/jquery.hotkeys.dev.js',
	'jk-includes/js/jquery/jquery.form.dev.js',
	'jk-includes/js/jquery/suggest.dev.js',
	'jk-admin/js/xfn.dev.js',
	'jk-admin/js/set-post-thumbnail.dev.js',
	'jk-admin/js/comment.dev.js',
	'jk-admin/js/theme.dev.js',
	'jk-admin/js/cat.dev.js',
	'jk-admin/js/password-strength-meter.dev.js',
	'jk-admin/js/user-profile.dev.js',
	'jk-admin/js/theme-preview.dev.js',
	'jk-admin/js/post.dev.js',
	'jk-admin/js/media-upload.dev.js',
	'jk-admin/js/word-count.dev.js',
	'jk-admin/js/plugin-install.dev.js',
	'jk-admin/js/edit-comments.dev.js',
	'jk-admin/js/media-gallery.dev.js',
	'jk-admin/js/custom-fields.dev.js',
	'jk-admin/js/custom-background.dev.js',
	'jk-admin/js/common.dev.js',
	'jk-admin/js/inline-edit-tax.dev.js',
	'jk-admin/js/gallery.dev.js',
	'jk-admin/js/utils.dev.js',
	'jk-admin/js/widgets.dev.js',
	'jk-admin/js/jk-fullscreen.dev.js',
	'jk-admin/js/nav-menu.dev.js',
	'jk-admin/js/dashboard.dev.js',
	'jk-admin/js/link.dev.js',
	'jk-admin/js/user-suggest.dev.js',
	'jk-admin/js/postbox.dev.js',
	'jk-admin/js/tags.dev.js',
	'jk-admin/js/image-edit.dev.js',
	'jk-admin/js/media.dev.js',
	'jk-admin/js/customize-controls.dev.js',
	'jk-admin/js/inline-edit-post.dev.js',
	'jk-admin/js/categories.dev.js',
	'jk-admin/js/editor.dev.js',
	'jk-includes/js/plupload/handlers.dev.js',
	'jk-includes/js/plupload/jk-plupload.dev.js',
	'jk-includes/js/swfupload/handlers.dev.js',
	'jk-includes/js/jcrop/jquery.Jcrop.dev.js',
	'jk-includes/js/jcrop/jquery.Jcrop.js',
	'jk-includes/js/jcrop/jquery.Jcrop.css',
	'jk-includes/js/imgareaselect/jquery.imgareaselect.dev.js',
	'jk-includes/css/jk-pointer.dev.css',
	'jk-includes/css/editor.dev.css',
	'jk-includes/css/jquery-ui-dialog.dev.css',
	'jk-includes/css/admin-bar-rtl.dev.css',
	'jk-includes/css/admin-bar.dev.css',
	'jk-includes/js/jquery/ui/jquery.effects.clip.min.js',
	'jk-includes/js/jquery/ui/jquery.effects.scale.min.js',
	'jk-includes/js/jquery/ui/jquery.effects.blind.min.js',
	'jk-includes/js/jquery/ui/jquery.effects.core.min.js',
	'jk-includes/js/jquery/ui/jquery.effects.shake.min.js',
	'jk-includes/js/jquery/ui/jquery.effects.fade.min.js',
	'jk-includes/js/jquery/ui/jquery.effects.explode.min.js',
	'jk-includes/js/jquery/ui/jquery.effects.slide.min.js',
	'jk-includes/js/jquery/ui/jquery.effects.drop.min.js',
	'jk-includes/js/jquery/ui/jquery.effects.highlight.min.js',
	'jk-includes/js/jquery/ui/jquery.effects.bounce.min.js',
	'jk-includes/js/jquery/ui/jquery.effects.pulsate.min.js',
	'jk-includes/js/jquery/ui/jquery.effects.transfer.min.js',
	'jk-includes/js/jquery/ui/jquery.effects.fold.min.js',
	'jk-admin/js/utils.js',
	// Added back in 5.3 [45448], see #43895.
	// 'jk-admin/options-privacy.php',
	'jk-app.php',
	'jk-includes/class-jk-atom-server.php',
	// 3.5.2
	'jk-includes/js/swfupload/swfupload-all.js',
	// 3.6
	'jk-admin/js/revisions-js.php',
	'jk-admin/images/screenshots',
	'jk-admin/js/categories.js',
	'jk-admin/js/categories.min.js',
	'jk-admin/js/custom-fields.js',
	'jk-admin/js/custom-fields.min.js',
	// 3.7
	'jk-admin/js/cat.js',
	'jk-admin/js/cat.min.js',
	// 3.8
	'jk-includes/js/thickbox/tb-close-2x.png',
	'jk-includes/js/thickbox/tb-close.png',
	'jk-includes/images/wpmini-blue-2x.png',
	'jk-includes/images/wpmini-blue.png',
	'jk-admin/css/colors-fresh.css',
	'jk-admin/css/colors-classic.css',
	'jk-admin/css/colors-fresh.min.css',
	'jk-admin/css/colors-classic.min.css',
	'jk-admin/js/about.min.js',
	'jk-admin/js/about.js',
	'jk-admin/images/arrows-dark-vs-2x.png',
	'jk-admin/images/jk-logo-vs.png',
	'jk-admin/images/arrows-dark-vs.png',
	'jk-admin/images/jk-logo.png',
	'jk-admin/images/arrows-pr.png',
	'jk-admin/images/arrows-dark.png',
	'jk-admin/images/press-this.png',
	'jk-admin/images/press-this-2x.png',
	'jk-admin/images/arrows-vs-2x.png',
	'jk-admin/images/welcome-icons.png',
	'jk-admin/images/jk-logo-2x.png',
	'jk-admin/images/stars-rtl-2x.png',
	'jk-admin/images/arrows-dark-2x.png',
	'jk-admin/images/arrows-pr-2x.png',
	'jk-admin/images/menu-shadow-rtl.png',
	'jk-admin/images/arrows-vs.png',
	'jk-admin/images/about-search-2x.png',
	'jk-admin/images/bubble_bg-rtl-2x.gif',
	'jk-admin/images/jk-badge-2x.png',
	'jk-admin/images/wordpress-logo-2x.png',
	'jk-admin/images/bubble_bg-rtl.gif',
	'jk-admin/images/jk-badge.png',
	'jk-admin/images/menu-shadow.png',
	'jk-admin/images/about-globe-2x.png',
	'jk-admin/images/welcome-icons-2x.png',
	'jk-admin/images/stars-rtl.png',
	'jk-admin/images/jk-logo-vs-2x.png',
	'jk-admin/images/about-updates-2x.png',
	// 3.9
	'jk-admin/css/colors.css',
	'jk-admin/css/colors.min.css',
	'jk-admin/css/colors-rtl.css',
	'jk-admin/css/colors-rtl.min.css',
	// Following files added back in 4.5, see #36083.
	// 'jk-admin/css/media-rtl.min.css',
	// 'jk-admin/css/media.min.css',
	// 'jk-admin/css/farbtastic-rtl.min.css',
	'jk-admin/images/lock-2x.png',
	'jk-admin/images/lock.png',
	'jk-admin/js/theme-preview.js',
	'jk-admin/js/theme-install.min.js',
	'jk-admin/js/theme-install.js',
	'jk-admin/js/theme-preview.min.js',
	'jk-includes/js/plupload/plupload.html4.js',
	'jk-includes/js/plupload/plupload.html5.js',
	'jk-includes/js/plupload/changelog.txt',
	'jk-includes/js/plupload/plupload.silverlight.js',
	'jk-includes/js/plupload/plupload.flash.js',
	// Added back in 4.9 [41328], see #41755.
	// 'jk-includes/js/plupload/plupload.js',
	'jk-includes/js/tinymce/plugins/spellchecker',
	'jk-includes/js/tinymce/plugins/inlinepopups',
	'jk-includes/js/tinymce/plugins/media/js',
	'jk-includes/js/tinymce/plugins/media/css',
	'jk-includes/js/tinymce/plugins/wordpress/img',
	'jk-includes/js/tinymce/plugins/wpdialogs/js',
	'jk-includes/js/tinymce/plugins/wpeditimage/img',
	'jk-includes/js/tinymce/plugins/wpeditimage/js',
	'jk-includes/js/tinymce/plugins/wpeditimage/css',
	'jk-includes/js/tinymce/plugins/wpgallery/img',
	'jk-includes/js/tinymce/plugins/paste/js',
	'jk-includes/js/tinymce/themes/advanced',
	'jk-includes/js/tinymce/tiny_mce.js',
	'jk-includes/js/tinymce/mark_loaded_src.js',
	'jk-includes/js/tinymce/jk-tinymce-schema.js',
	'jk-includes/js/tinymce/plugins/media/editor_plugin.js',
	'jk-includes/js/tinymce/plugins/media/editor_plugin_src.js',
	'jk-includes/js/tinymce/plugins/media/media.htm',
	'jk-includes/js/tinymce/plugins/wpview/editor_plugin_src.js',
	'jk-includes/js/tinymce/plugins/wpview/editor_plugin.js',
	'jk-includes/js/tinymce/plugins/directionality/editor_plugin.js',
	'jk-includes/js/tinymce/plugins/directionality/editor_plugin_src.js',
	'jk-includes/js/tinymce/plugins/wordpress/editor_plugin.js',
	'jk-includes/js/tinymce/plugins/wordpress/editor_plugin_src.js',
	'jk-includes/js/tinymce/plugins/wpdialogs/editor_plugin_src.js',
	'jk-includes/js/tinymce/plugins/wpdialogs/editor_plugin.js',
	'jk-includes/js/tinymce/plugins/wpeditimage/editimage.html',
	'jk-includes/js/tinymce/plugins/wpeditimage/editor_plugin.js',
	'jk-includes/js/tinymce/plugins/wpeditimage/editor_plugin_src.js',
	'jk-includes/js/tinymce/plugins/fullscreen/editor_plugin_src.js',
	'jk-includes/js/tinymce/plugins/fullscreen/fullscreen.htm',
	'jk-includes/js/tinymce/plugins/fullscreen/editor_plugin.js',
	'jk-includes/js/tinymce/plugins/wplink/editor_plugin_src.js',
	'jk-includes/js/tinymce/plugins/wplink/editor_plugin.js',
	'jk-includes/js/tinymce/plugins/wpgallery/editor_plugin_src.js',
	'jk-includes/js/tinymce/plugins/wpgallery/editor_plugin.js',
	'jk-includes/js/tinymce/plugins/tabfocus/editor_plugin.js',
	'jk-includes/js/tinymce/plugins/tabfocus/editor_plugin_src.js',
	'jk-includes/js/tinymce/plugins/paste/editor_plugin.js',
	'jk-includes/js/tinymce/plugins/paste/pasteword.htm',
	'jk-includes/js/tinymce/plugins/paste/editor_plugin_src.js',
	'jk-includes/js/tinymce/plugins/paste/pastetext.htm',
	'jk-includes/js/tinymce/langs/jk-langs.php',
	// 4.1
	'jk-includes/js/jquery/ui/jquery.ui.accordion.min.js',
	'jk-includes/js/jquery/ui/jquery.ui.autocomplete.min.js',
	'jk-includes/js/jquery/ui/jquery.ui.button.min.js',
	'jk-includes/js/jquery/ui/jquery.ui.core.min.js',
	'jk-includes/js/jquery/ui/jquery.ui.datepicker.min.js',
	'jk-includes/js/jquery/ui/jquery.ui.dialog.min.js',
	'jk-includes/js/jquery/ui/jquery.ui.draggable.min.js',
	'jk-includes/js/jquery/ui/jquery.ui.droppable.min.js',
	'jk-includes/js/jquery/ui/jquery.ui.effect-blind.min.js',
	'jk-includes/js/jquery/ui/jquery.ui.effect-bounce.min.js',
	'jk-includes/js/jquery/ui/jquery.ui.effect-clip.min.js',
	'jk-includes/js/jquery/ui/jquery.ui.effect-drop.min.js',
	'jk-includes/js/jquery/ui/jquery.ui.effect-explode.min.js',
	'jk-includes/js/jquery/ui/jquery.ui.effect-fade.min.js',
	'jk-includes/js/jquery/ui/jquery.ui.effect-fold.min.js',
	'jk-includes/js/jquery/ui/jquery.ui.effect-highlight.min.js',
	'jk-includes/js/jquery/ui/jquery.ui.effect-pulsate.min.js',
	'jk-includes/js/jquery/ui/jquery.ui.effect-scale.min.js',
	'jk-includes/js/jquery/ui/jquery.ui.effect-shake.min.js',
	'jk-includes/js/jquery/ui/jquery.ui.effect-slide.min.js',
	'jk-includes/js/jquery/ui/jquery.ui.effect-transfer.min.js',
	'jk-includes/js/jquery/ui/jquery.ui.effect.min.js',
	'jk-includes/js/jquery/ui/jquery.ui.menu.min.js',
	'jk-includes/js/jquery/ui/jquery.ui.mouse.min.js',
	'jk-includes/js/jquery/ui/jquery.ui.position.min.js',
	'jk-includes/js/jquery/ui/jquery.ui.progressbar.min.js',
	'jk-includes/js/jquery/ui/jquery.ui.resizable.min.js',
	'jk-includes/js/jquery/ui/jquery.ui.selectable.min.js',
	'jk-includes/js/jquery/ui/jquery.ui.slider.min.js',
	'jk-includes/js/jquery/ui/jquery.ui.sortable.min.js',
	'jk-includes/js/jquery/ui/jquery.ui.spinner.min.js',
	'jk-includes/js/jquery/ui/jquery.ui.tabs.min.js',
	'jk-includes/js/jquery/ui/jquery.ui.tooltip.min.js',
	'jk-includes/js/jquery/ui/jquery.ui.widget.min.js',
	'jk-includes/js/tinymce/skins/wordpress/images/dashicon-no-alt.png',
	// 4.3
	'jk-admin/js/jk-fullscreen.js',
	'jk-admin/js/jk-fullscreen.min.js',
	'jk-includes/js/tinymce/jk-mce-help.php',
	'jk-includes/js/tinymce/plugins/wpfullscreen',
	// 4.5
	'jk-includes/theme-compat/comments-popup.php',
	// 4.6
	'jk-admin/includes/class-jk-automatic-upgrader.php', // Wrong file name, see #37628.
	// 4.8
	'jk-includes/js/tinymce/plugins/wpembed',
	'jk-includes/js/tinymce/plugins/media/moxieplayer.swf',
	'jk-includes/js/tinymce/skins/lightgray/fonts/readme.md',
	'jk-includes/js/tinymce/skins/lightgray/fonts/tinymce-small.json',
	'jk-includes/js/tinymce/skins/lightgray/fonts/tinymce.json',
	'jk-includes/js/tinymce/skins/lightgray/skin.ie7.min.css',
	// 4.9
	'jk-admin/css/press-this-editor-rtl.css',
	'jk-admin/css/press-this-editor-rtl.min.css',
	'jk-admin/css/press-this-editor.css',
	'jk-admin/css/press-this-editor.min.css',
	'jk-admin/css/press-this-rtl.css',
	'jk-admin/css/press-this-rtl.min.css',
	'jk-admin/css/press-this.css',
	'jk-admin/css/press-this.min.css',
	'jk-admin/includes/class-jk-press-this.php',
	'jk-admin/js/bookmarklet.js',
	'jk-admin/js/bookmarklet.min.js',
	'jk-admin/js/press-this.js',
	'jk-admin/js/press-this.min.js',
	'jk-includes/js/mediaelement/background.png',
	'jk-includes/js/mediaelement/bigplay.png',
	'jk-includes/js/mediaelement/bigplay.svg',
	'jk-includes/js/mediaelement/controls.png',
	'jk-includes/js/mediaelement/controls.svg',
	'jk-includes/js/mediaelement/flashmediaelement.swf',
	'jk-includes/js/mediaelement/froogaloop.min.js',
	'jk-includes/js/mediaelement/jumpforward.png',
	'jk-includes/js/mediaelement/loading.gif',
	'jk-includes/js/mediaelement/silverlightmediaelement.xap',
	'jk-includes/js/mediaelement/skipback.png',
	'jk-includes/js/plupload/plupload.flash.swf',
	'jk-includes/js/plupload/plupload.full.min.js',
	'jk-includes/js/plupload/plupload.silverlight.xap',
	'jk-includes/js/swfupload/plugins',
	'jk-includes/js/swfupload/swfupload.swf',
	// 4.9.2
	'jk-includes/js/mediaelement/lang',
	'jk-includes/js/mediaelement/mediaelement-flash-audio-ogg.swf',
	'jk-includes/js/mediaelement/mediaelement-flash-audio.swf',
	'jk-includes/js/mediaelement/mediaelement-flash-video-hls.swf',
	'jk-includes/js/mediaelement/mediaelement-flash-video-mdash.swf',
	'jk-includes/js/mediaelement/mediaelement-flash-video.swf',
	'jk-includes/js/mediaelement/renderers/dailymotion.js',
	'jk-includes/js/mediaelement/renderers/dailymotion.min.js',
	'jk-includes/js/mediaelement/renderers/facebook.js',
	'jk-includes/js/mediaelement/renderers/facebook.min.js',
	'jk-includes/js/mediaelement/renderers/soundcloud.js',
	'jk-includes/js/mediaelement/renderers/soundcloud.min.js',
	'jk-includes/js/mediaelement/renderers/twitch.js',
	'jk-includes/js/mediaelement/renderers/twitch.min.js',
	// 5.0
	'jk-includes/js/codemirror/jshint.js',
	// 5.1
	'jk-includes/js/tinymce/jk-tinymce.js.gz',
	// 5.3
	'jk-includes/js/jk-a11y.js',     // Moved to: jk-includes/js/dist/a11y.js
	'jk-includes/js/jk-a11y.min.js', // Moved to: jk-includes/js/dist/a11y.min.js
	// 5.4
	'jk-admin/js/jk-fullscreen-stub.js',
	'jk-admin/js/jk-fullscreen-stub.min.js',
	// 5.5
	'jk-admin/css/ie.css',
	'jk-admin/css/ie.min.css',
	'jk-admin/css/ie-rtl.css',
	'jk-admin/css/ie-rtl.min.css',
	// 5.6
	'jk-includes/js/jquery/ui/position.min.js',
	'jk-includes/js/jquery/ui/widget.min.js',
	// 5.7
	'jk-includes/blocks/classic/block.json',
	// 5.8
	'jk-admin/images/freedoms.png',
	'jk-admin/images/privacy.png',
	'jk-admin/images/about-badge.svg',
	'jk-admin/images/about-color-palette.svg',
	'jk-admin/images/about-color-palette-vert.svg',
	'jk-admin/images/about-header-brushes.svg',
	'jk-includes/block-patterns/large-header.php',
	'jk-includes/block-patterns/heading-paragraph.php',
	'jk-includes/block-patterns/quote.php',
	'jk-includes/block-patterns/text-three-columns-buttons.php',
	'jk-includes/block-patterns/two-buttons.php',
	'jk-includes/block-patterns/two-images.php',
	'jk-includes/block-patterns/three-buttons.php',
	'jk-includes/block-patterns/text-two-columns-with-images.php',
	'jk-includes/block-patterns/text-two-columns.php',
	'jk-includes/block-patterns/large-header-button.php',
	'jk-includes/blocks/subhead',
	'jk-includes/css/dist/editor/editor-styles.css',
	'jk-includes/css/dist/editor/editor-styles.min.css',
	'jk-includes/css/dist/editor/editor-styles-rtl.css',
	'jk-includes/css/dist/editor/editor-styles-rtl.min.css',
	// 5.9
	'jk-includes/blocks/heading/editor.css',
	'jk-includes/blocks/heading/editor.min.css',
	'jk-includes/blocks/heading/editor-rtl.css',
	'jk-includes/blocks/heading/editor-rtl.min.css',
	'jk-includes/blocks/query-title/editor.css',
	'jk-includes/blocks/query-title/editor.min.css',
	'jk-includes/blocks/query-title/editor-rtl.css',
	'jk-includes/blocks/query-title/editor-rtl.min.css',
	/*
	 * Restored in JKPress 6.7
	 *
	 * 'jk-includes/blocks/tag-cloud/editor.css',
	 * 'jk-includes/blocks/tag-cloud/editor.min.css',
	 * 'jk-includes/blocks/tag-cloud/editor-rtl.css',
	 * 'jk-includes/blocks/tag-cloud/editor-rtl.min.css',
	 */
	// 6.1
	'jk-includes/blocks/post-comments.php',
	'jk-includes/blocks/post-comments',
	'jk-includes/blocks/comments-query-loop',
	// 6.3
	'jk-includes/images/wlw',
	'jk-includes/wlwmanifest.xml',
	'jk-includes/random_compat',
	// 6.4
	'jk-includes/navigation-fallback.php',
	'jk-includes/blocks/navigation/view-modal.min.js',
	'jk-includes/blocks/navigation/view-modal.js',
	// 6.5
	'jk-includes/ID3/license.commercial.txt',
	'jk-includes/blocks/query/style-rtl.min.css',
	'jk-includes/blocks/query/style.min.css',
	'jk-includes/blocks/query/style-rtl.css',
	'jk-includes/blocks/query/style.css',
	'jk-admin/images/about-header-privacy.svg',
	'jk-admin/images/about-header-about.svg',
	'jk-admin/images/about-header-credits.svg',
	'jk-admin/images/about-header-freedoms.svg',
	'jk-admin/images/about-header-contribute.svg',
	'jk-admin/images/about-header-background.svg',
	// 6.6
	'jk-includes/blocks/block/editor.css',
	'jk-includes/blocks/block/editor.min.css',
	'jk-includes/blocks/block/editor-rtl.css',
	'jk-includes/blocks/block/editor-rtl.min.css',
	/*
	 * 6.7
	 *
	 * JKPress 6.7 included a SimplePie upgrade that included a major
	 * refactoring of the file structure and library. The old files are
	 * split in to two sections to account for this: files and directories.
	 *
	 * See https://core.trac.wordpress.org/changeset/59141
	 */
	// 6.7 - files
	'jk-includes/js/dist/interactivity-router.asset.php',
	'jk-includes/js/dist/interactivity-router.js',
	'jk-includes/js/dist/interactivity-router.min.js',
	'jk-includes/js/dist/interactivity-router.min.asset.php',
	'jk-includes/js/dist/interactivity.js',
	'jk-includes/js/dist/interactivity.min.js',
	'jk-includes/js/dist/vendor/react-dom.min.js.LICENSE.txt',
	'jk-includes/js/dist/vendor/react.min.js.LICENSE.txt',
	'jk-includes/js/dist/vendor/jk-polyfill-importmap.js',
	'jk-includes/js/dist/vendor/jk-polyfill-importmap.min.js',
	'jk-includes/sodium_compat/src/Core/Base64/Common.php',
	'jk-includes/SimplePie/Author.php',
	'jk-includes/SimplePie/Cache.php',
	'jk-includes/SimplePie/Caption.php',
	'jk-includes/SimplePie/Category.php',
	'jk-includes/SimplePie/Copyright.php',
	'jk-includes/SimplePie/Core.php',
	'jk-includes/SimplePie/Credit.php',
	'jk-includes/SimplePie/Enclosure.php',
	'jk-includes/SimplePie/Exception.php',
	'jk-includes/SimplePie/File.php',
	'jk-includes/SimplePie/gzdecode.php',
	'jk-includes/SimplePie/IRI.php',
	'jk-includes/SimplePie/Item.php',
	'jk-includes/SimplePie/Locator.php',
	'jk-includes/SimplePie/Misc.php',
	'jk-includes/SimplePie/Parser.php',
	'jk-includes/SimplePie/Rating.php',
	'jk-includes/SimplePie/Registry.php',
	'jk-includes/SimplePie/Restriction.php',
	'jk-includes/SimplePie/Sanitize.php',
	'jk-includes/SimplePie/Source.php',
	// 6.7 - directories
	'jk-includes/SimplePie/Cache/',
	'jk-includes/SimplePie/Content/',
	'jk-includes/SimplePie/Decode/',
	'jk-includes/SimplePie/HTTP/',
	'jk-includes/SimplePie/Net/',
	'jk-includes/SimplePie/Parse/',
	'jk-includes/SimplePie/XML/',
);

/**
 * Stores Requests files to be preloaded and deleted.
 *
 * For classes/interfaces, use the class/interface name
 * as the array key.
 *
 * All other files/directories should not have a key.
 *
 * @since 6.2.0
 *
 * @global array $_old_requests_files
 * @var array
 * @name $_old_requests_files
 */
global $_old_requests_files;

$_old_requests_files = array(
	// Interfaces.
	'Requests_Auth'                              => 'jk-includes/Requests/Auth.php',
	'Requests_Hooker'                            => 'jk-includes/Requests/Hooker.php',
	'Requests_Proxy'                             => 'jk-includes/Requests/Proxy.php',
	'Requests_Transport'                         => 'jk-includes/Requests/Transport.php',

	// Classes.
	'Requests_Auth_Basic'                        => 'jk-includes/Requests/Auth/Basic.php',
	'Requests_Cookie_Jar'                        => 'jk-includes/Requests/Cookie/Jar.php',
	'Requests_Exception_HTTP'                    => 'jk-includes/Requests/Exception/HTTP.php',
	'Requests_Exception_Transport'               => 'jk-includes/Requests/Exception/Transport.php',
	'Requests_Exception_HTTP_304'                => 'jk-includes/Requests/Exception/HTTP/304.php',
	'Requests_Exception_HTTP_305'                => 'jk-includes/Requests/Exception/HTTP/305.php',
	'Requests_Exception_HTTP_306'                => 'jk-includes/Requests/Exception/HTTP/306.php',
	'Requests_Exception_HTTP_400'                => 'jk-includes/Requests/Exception/HTTP/400.php',
	'Requests_Exception_HTTP_401'                => 'jk-includes/Requests/Exception/HTTP/401.php',
	'Requests_Exception_HTTP_402'                => 'jk-includes/Requests/Exception/HTTP/402.php',
	'Requests_Exception_HTTP_403'                => 'jk-includes/Requests/Exception/HTTP/403.php',
	'Requests_Exception_HTTP_404'                => 'jk-includes/Requests/Exception/HTTP/404.php',
	'Requests_Exception_HTTP_405'                => 'jk-includes/Requests/Exception/HTTP/405.php',
	'Requests_Exception_HTTP_406'                => 'jk-includes/Requests/Exception/HTTP/406.php',
	'Requests_Exception_HTTP_407'                => 'jk-includes/Requests/Exception/HTTP/407.php',
	'Requests_Exception_HTTP_408'                => 'jk-includes/Requests/Exception/HTTP/408.php',
	'Requests_Exception_HTTP_409'                => 'jk-includes/Requests/Exception/HTTP/409.php',
	'Requests_Exception_HTTP_410'                => 'jk-includes/Requests/Exception/HTTP/410.php',
	'Requests_Exception_HTTP_411'                => 'jk-includes/Requests/Exception/HTTP/411.php',
	'Requests_Exception_HTTP_412'                => 'jk-includes/Requests/Exception/HTTP/412.php',
	'Requests_Exception_HTTP_413'                => 'jk-includes/Requests/Exception/HTTP/413.php',
	'Requests_Exception_HTTP_414'                => 'jk-includes/Requests/Exception/HTTP/414.php',
	'Requests_Exception_HTTP_415'                => 'jk-includes/Requests/Exception/HTTP/415.php',
	'Requests_Exception_HTTP_416'                => 'jk-includes/Requests/Exception/HTTP/416.php',
	'Requests_Exception_HTTP_417'                => 'jk-includes/Requests/Exception/HTTP/417.php',
	'Requests_Exception_HTTP_418'                => 'jk-includes/Requests/Exception/HTTP/418.php',
	'Requests_Exception_HTTP_428'                => 'jk-includes/Requests/Exception/HTTP/428.php',
	'Requests_Exception_HTTP_429'                => 'jk-includes/Requests/Exception/HTTP/429.php',
	'Requests_Exception_HTTP_431'                => 'jk-includes/Requests/Exception/HTTP/431.php',
	'Requests_Exception_HTTP_500'                => 'jk-includes/Requests/Exception/HTTP/500.php',
	'Requests_Exception_HTTP_501'                => 'jk-includes/Requests/Exception/HTTP/501.php',
	'Requests_Exception_HTTP_502'                => 'jk-includes/Requests/Exception/HTTP/502.php',
	'Requests_Exception_HTTP_503'                => 'jk-includes/Requests/Exception/HTTP/503.php',
	'Requests_Exception_HTTP_504'                => 'jk-includes/Requests/Exception/HTTP/504.php',
	'Requests_Exception_HTTP_505'                => 'jk-includes/Requests/Exception/HTTP/505.php',
	'Requests_Exception_HTTP_511'                => 'jk-includes/Requests/Exception/HTTP/511.php',
	'Requests_Exception_HTTP_Unknown'            => 'jk-includes/Requests/Exception/HTTP/Unknown.php',
	'Requests_Exception_Transport_cURL'          => 'jk-includes/Requests/Exception/Transport/cURL.php',
	'Requests_Proxy_HTTP'                        => 'jk-includes/Requests/Proxy/HTTP.php',
	'Requests_Response_Headers'                  => 'jk-includes/Requests/Response/Headers.php',
	'Requests_Transport_cURL'                    => 'jk-includes/Requests/Transport/cURL.php',
	'Requests_Transport_fsockopen'               => 'jk-includes/Requests/Transport/fsockopen.php',
	'Requests_Utility_CaseInsensitiveDictionary' => 'jk-includes/Requests/Utility/CaseInsensitiveDictionary.php',
	'Requests_Utility_FilteredIterator'          => 'jk-includes/Requests/Utility/FilteredIterator.php',
	'Requests_Cookie'                            => 'jk-includes/Requests/Cookie.php',
	'Requests_Exception'                         => 'jk-includes/Requests/Exception.php',
	'Requests_Hooks'                             => 'jk-includes/Requests/Hooks.php',
	'Requests_IDNAEncoder'                       => 'jk-includes/Requests/IDNAEncoder.php',
	'Requests_IPv6'                              => 'jk-includes/Requests/IPv6.php',
	'Requests_IRI'                               => 'jk-includes/Requests/IRI.php',
	'Requests_Response'                          => 'jk-includes/Requests/Response.php',
	'Requests_SSL'                               => 'jk-includes/Requests/SSL.php',
	'Requests_Session'                           => 'jk-includes/Requests/Session.php',

	// Directories.
	'jk-includes/Requests/Auth/',
	'jk-includes/Requests/Cookie/',
	'jk-includes/Requests/Exception/HTTP/',
	'jk-includes/Requests/Exception/Transport/',
	'jk-includes/Requests/Exception/',
	'jk-includes/Requests/Proxy/',
	'jk-includes/Requests/Response/',
	'jk-includes/Requests/Transport/',
	'jk-includes/Requests/Utility/',
);

/**
 * Stores new files in jk-content to copy
 *
 * The contents of this array indicate any new bundled plugins/themes which
 * should be installed with the JKPress Upgrade. These items will not be
 * re-installed in future upgrades, this behavior is controlled by the
 * introduced version present here being older than the current installed version.
 *
 * The content of this array should follow the following format:
 * Filename (relative to jk-content) => Introduced version
 * Directories should be noted by suffixing it with a trailing slash (/)
 *
 * @since 3.2.0
 * @since 4.7.0 New themes were not automatically installed for 4.4-4.6 on
 *              upgrade. New themes are now installed again. To disable new
 *              themes from being installed on upgrade, explicitly define
 *              CORE_UPGRADE_SKIP_NEW_BUNDLED as true.
 * @global array $_new_bundled_files
 * @var array
 * @name $_new_bundled_files
 */
global $_new_bundled_files;

$_new_bundled_files = array(
	'plugins/akismet/'          => '2.0',
	'themes/twentyten/'         => '3.0',
	'themes/twentyeleven/'      => '3.2',
	'themes/twentytwelve/'      => '3.5',
	'themes/twentythirteen/'    => '3.6',
	'themes/twentyfourteen/'    => '3.8',
	'themes/twentyfifteen/'     => '4.1',
	'themes/twentysixteen/'     => '4.4',
	'themes/twentyseventeen/'   => '4.7',
	'themes/twentynineteen/'    => '5.0',
	'themes/twentytwenty/'      => '5.3',
	'themes/twentytwentyone/'   => '5.6',
	'themes/twentytwentytwo/'   => '5.9',
	'themes/twentytwentythree/' => '6.1',
	'themes/twentytwentyfour/'  => '6.4',
	'themes/twentytwentyfive/'  => '6.7',
);

/**
 * Upgrades the core of JKPress.
 *
 * This will create a .maintenance file at the base of the JKPress directory
 * to ensure that people can not access the website, when the files are being
 * copied to their locations.
 *
 * The files in the `$_old_files` list will be removed and the new files
 * copied from the zip file after the database is upgraded.
 *
 * The files in the `$_new_bundled_files` list will be added to the installation
 * if the version is greater than or equal to the old version being upgraded.
 *
 * The steps for the upgrader for after the new release is downloaded and
 * unzipped is:
 *   1. Test unzipped location for select files to ensure that unzipped worked.
 *   2. Create the .maintenance file in current JKPress base.
 *   3. Copy new JKPress directory over old JKPress files.
 *   4. Upgrade JKPress to new version.
 *     4.1. Copy all files/folders other than jk-content
 *     4.2. Copy any language files to JK_LANG_DIR (which may differ from JK_CONTENT_DIR
 *     4.3. Copy any new bundled themes/plugins to their respective locations
 *   5. Delete new JKPress directory path.
 *   6. Delete .maintenance file.
 *   7. Remove old files.
 *   8. Delete 'update_core' option.
 *
 * There are several areas of failure. For instance if PHP times out before step
 * 6, then you will not be able to access any portion of your site. Also, since
 * the upgrade will not continue where it left off, you will not be able to
 * automatically remove old files and remove the 'update_core' option. This
 * isn't that bad.
 *
 * If the copy of the new JKPress over the old fails, then the worse is that
 * the new JKPress directory will remain.
 *
 * If it is assumed that every file will be copied over, including plugins and
 * themes, then if you edit the default theme, you should rename it, so that
 * your changes remain.
 *
 * @since 2.7.0
 *
 * @global JK_Filesystem_Base $jk_filesystem          JKPress filesystem subclass.
 * @global array              $_old_files
 * @global array              $_old_requests_files
 * @global array              $_new_bundled_files
 * @global jkdb               $jkdb                   JKPress database abstraction object.
 * @global string             $jk_version
 * @global string             $required_php_version
 * @global string             $required_mysql_version
 *
 * @param string $from New release unzipped path.
 * @param string $to   Path to old JKPress installation.
 * @return string|JK_Error New JKPress version on success, JK_Error on failure.
 */
function update_core( $from, $to ) {
	global $jk_filesystem, $_old_files, $_old_requests_files, $_new_bundled_files, $jkdb;

	/*
	 * Give core update script an additional 300 seconds (5 minutes)
	 * to finish updating large files when running on slower servers.
	 */
	if ( function_exists( 'set_time_limit' ) ) {
		set_time_limit( 300 );
	}

	/*
	 * Merge the old Requests files and directories into the `$_old_files`.
	 * Then preload these Requests files first, before the files are deleted
	 * and replaced to ensure the code is in memory if needed.
	 */
	$_old_files = array_merge( $_old_files, array_values( $_old_requests_files ) );
	_preload_old_requests_classes_and_interfaces( $to );

	/**
	 * Filters feedback messages displayed during the core update process.
	 *
	 * The filter is first evaluated after the zip file for the latest version
	 * has been downloaded and unzipped. It is evaluated five more times during
	 * the process:
	 *
	 * 1. Before JKPress begins the core upgrade process.
	 * 2. Before Maintenance Mode is enabled.
	 * 3. Before JKPress begins copying over the necessary files.
	 * 4. Before Maintenance Mode is disabled.
	 * 5. Before the database is upgraded.
	 *
	 * @since 2.5.0
	 *
	 * @param string $feedback The core update feedback messages.
	 */
	apply_filters( 'update_feedback', __( 'Verifying the unpacked files&#8230;' ) );

	// Confidence check the unzipped distribution.
	$distro = '';
	$roots  = array( '/wordpress/', '/wordpress-mu/' );

	foreach ( $roots as $root ) {
		if ( $jk_filesystem->exists( $from . $root . 'readme.html' )
			&& $jk_filesystem->exists( $from . $root . 'jk-includes/version.php' )
		) {
			$distro = $root;
			break;
		}
	}

	if ( ! $distro ) {
		$jk_filesystem->delete( $from, true );

		return new JK_Error( 'insane_distro', __( 'The update could not be unpacked' ) );
	}

	/*
	 * Import $jk_version, $required_php_version, and $required_mysql_version from the new version.
	 * DO NOT globalize any variables imported from `version-current.php` in this function.
	 *
	 * BC Note: $jk_filesystem->jk_content_dir() returned unslashed pre-2.8.
	 */
	$versions_file = trailingslashit( $jk_filesystem->jk_content_dir() ) . 'upgrade/version-current.php';

	if ( ! $jk_filesystem->copy( $from . $distro . 'jk-includes/version.php', $versions_file ) ) {
		$jk_filesystem->delete( $from, true );

		return new JK_Error(
			'copy_failed_for_version_file',
			__( 'The update cannot be installed because some files could not be copied. This is usually due to inconsistent file permissions.' ),
			'jk-includes/version.php'
		);
	}

	$jk_filesystem->chmod( $versions_file, FS_CHMOD_FILE );

	/*
	 * `jk_opcache_invalidate()` only exists in JKPress 5.5 or later,
	 * so don't run it when upgrading from older versions.
	 */
	if ( function_exists( 'jk_opcache_invalidate' ) ) {
		jk_opcache_invalidate( $versions_file );
	}

	require JK_CONTENT_DIR . '/upgrade/version-current.php';
	$jk_filesystem->delete( $versions_file );

	$php_version    = PHP_VERSION;
	$mysql_version  = $jkdb->db_version();
	$old_jk_version = $GLOBALS['jk_version']; // The version of JKPress we're updating from.
	/*
	 * Note: str_contains() is not used here, as this file is included
	 * when updating from older JKPress versions, in which case
	 * the polyfills from jk-includes/compat.php may not be available.
	 */
	$development_build = ( false !== strpos( $old_jk_version . $jk_version, '-' ) ); // A dash in the version indicates a development release.
	$php_compat        = version_compare( $php_version, $required_php_version, '>=' );

	if ( file_exists( JK_CONTENT_DIR . '/db.php' ) && empty( $jkdb->is_mysql ) ) {
		$mysql_compat = true;
	} else {
		$mysql_compat = version_compare( $mysql_version, $required_mysql_version, '>=' );
	}

	if ( ! $mysql_compat || ! $php_compat ) {
		$jk_filesystem->delete( $from, true );
	}

	$php_update_message = '';

	if ( function_exists( 'jk_get_update_php_url' ) ) {
		$php_update_message = '</p><p>' . sprintf(
			/* translators: %s: URL to Update PHP page. */
			__( '<a href="%s">Learn more about updating PHP</a>.' ),
			esc_url( jk_get_update_php_url() )
		);

		if ( function_exists( 'jk_get_update_php_annotation' ) ) {
			$annotation = jk_get_update_php_annotation();

			if ( $annotation ) {
				$php_update_message .= '</p><p><em>' . $annotation . '</em>';
			}
		}
	}

	if ( ! $mysql_compat && ! $php_compat ) {
		return new JK_Error(
			'php_mysql_not_compatible',
			sprintf(
				/* translators: 1: JKPress version number, 2: Minimum required PHP version number, 3: Minimum required MySQL version number, 4: Current PHP version number, 5: Current MySQL version number. */
				__( 'The update cannot be installed because JKPress %1$s requires PHP version %2$s or higher and MySQL version %3$s or higher. You are running PHP version %4$s and MySQL version %5$s.' ),
				$jk_version,
				$required_php_version,
				$required_mysql_version,
				$php_version,
				$mysql_version
			) . $php_update_message
		);
	} elseif ( ! $php_compat ) {
		return new JK_Error(
			'php_not_compatible',
			sprintf(
				/* translators: 1: JKPress version number, 2: Minimum required PHP version number, 3: Current PHP version number. */
				__( 'The update cannot be installed because JKPress %1$s requires PHP version %2$s or higher. You are running version %3$s.' ),
				$jk_version,
				$required_php_version,
				$php_version
			) . $php_update_message
		);
	} elseif ( ! $mysql_compat ) {
		return new JK_Error(
			'mysql_not_compatible',
			sprintf(
				/* translators: 1: JKPress version number, 2: Minimum required MySQL version number, 3: Current MySQL version number. */
				__( 'The update cannot be installed because JKPress %1$s requires MySQL version %2$s or higher. You are running version %3$s.' ),
				$jk_version,
				$required_mysql_version,
				$mysql_version
			)
		);
	}

	// Add a warning when the JSON PHP extension is missing.
	if ( ! extension_loaded( 'json' ) ) {
		return new JK_Error(
			'php_not_compatible_json',
			sprintf(
				/* translators: 1: JKPress version number, 2: The PHP extension name needed. */
				__( 'The update cannot be installed because JKPress %1$s requires the %2$s PHP extension.' ),
				$jk_version,
				'JSON'
			)
		);
	}

	/** This filter is documented in jk-admin/includes/update-core.php */
	apply_filters( 'update_feedback', __( 'Preparing to install the latest version&#8230;' ) );

	/*
	 * Don't copy jk-content, we'll deal with that below.
	 * We also copy version.php last so failed updates report their old version.
	 */
	$skip              = array( 'jk-content', 'jk-includes/version.php' );
	$check_is_writable = array();

	// Check to see which files don't really need updating - only available for 3.7 and higher.
	if ( function_exists( 'get_core_checksums' ) ) {
		// Find the local version of the working directory.
		$working_dir_local = JK_CONTENT_DIR . '/upgrade/' . basename( $from ) . $distro;

		$checksums = get_core_checksums( $jk_version, isset( $jk_local_package ) ? $jk_local_package : 'en_US' );

		if ( is_array( $checksums ) && isset( $checksums[ $jk_version ] ) ) {
			$checksums = $checksums[ $jk_version ]; // Compat code for 3.7-beta2.
		}

		if ( is_array( $checksums ) ) {
			foreach ( $checksums as $file => $checksum ) {
				/*
				 * Note: str_starts_with() is not used here, as this file is included
				 * when updating from older JKPress versions, in which case
				 * the polyfills from jk-includes/compat.php may not be available.
				 */
				if ( 'jk-content' === substr( $file, 0, 10 ) ) {
					continue;
				}

				if ( ! file_exists( ABSPATH . $file ) ) {
					continue;
				}

				if ( ! file_exists( $working_dir_local . $file ) ) {
					continue;
				}

				if ( '.' === dirname( $file )
					&& in_array( pathinfo( $file, PATHINFO_EXTENSION ), array( 'html', 'txt' ), true )
				) {
					continue;
				}

				if ( md5_file( ABSPATH . $file ) === $checksum ) {
					$skip[] = $file;
				} else {
					$check_is_writable[ $file ] = ABSPATH . $file;
				}
			}
		}
	}

	// If we're using the direct method, we can predict write failures that are due to permissions.
	if ( $check_is_writable && 'direct' === $jk_filesystem->method ) {
		$files_writable = array_filter( $check_is_writable, array( $jk_filesystem, 'is_writable' ) );

		if ( $files_writable !== $check_is_writable ) {
			$files_not_writable = array_diff_key( $check_is_writable, $files_writable );

			foreach ( $files_not_writable as $relative_file_not_writable => $file_not_writable ) {
				// If the writable check failed, chmod file to 0644 and try again, same as copy_dir().
				$jk_filesystem->chmod( $file_not_writable, FS_CHMOD_FILE );

				if ( $jk_filesystem->is_writable( $file_not_writable ) ) {
					unset( $files_not_writable[ $relative_file_not_writable ] );
				}
			}

			// Store package-relative paths (the key) of non-writable files in the JK_Error object.
			$error_data = version_compare( $old_jk_version, '3.7-beta2', '>' ) ? array_keys( $files_not_writable ) : '';

			if ( $files_not_writable ) {
				return new JK_Error(
					'files_not_writable',
					__( 'The update cannot be installed because your site is unable to copy some files. This is usually due to inconsistent file permissions.' ),
					implode( ', ', $error_data )
				);
			}
		}
	}

	/** This filter is documented in jk-admin/includes/update-core.php */
	apply_filters( 'update_feedback', __( 'Enabling Maintenance mode&#8230;' ) );

	// Create maintenance file to signal that we are upgrading.
	$maintenance_string = '<?php $upgrading = ' . time() . '; ?>';
	$maintenance_file   = $to . '.maintenance';
	$jk_filesystem->delete( $maintenance_file );
	$jk_filesystem->put_contents( $maintenance_file, $maintenance_string, FS_CHMOD_FILE );

	/** This filter is documented in jk-admin/includes/update-core.php */
	apply_filters( 'update_feedback', __( 'Copying the required files&#8230;' ) );

	// Copy new versions of JK files into place.
	$result = copy_dir( $from . $distro, $to, $skip );

	if ( is_jk_error( $result ) ) {
		$result = new JK_Error(
			$result->get_error_code(),
			$result->get_error_message(),
			substr( $result->get_error_data(), strlen( $to ) )
		);
	}

	// Since we know the core files have copied over, we can now copy the version file.
	if ( ! is_jk_error( $result ) ) {
		if ( ! $jk_filesystem->copy( $from . $distro . 'jk-includes/version.php', $to . 'jk-includes/version.php', true /* overwrite */ ) ) {
			$jk_filesystem->delete( $from, true );
			$result = new JK_Error(
				'copy_failed_for_version_file',
				__( 'The update cannot be installed because your site is unable to copy some files. This is usually due to inconsistent file permissions.' ),
				'jk-includes/version.php'
			);
		}

		$jk_filesystem->chmod( $to . 'jk-includes/version.php', FS_CHMOD_FILE );

		/*
		 * `jk_opcache_invalidate()` only exists in JKPress 5.5 or later,
		 * so don't run it when upgrading from older versions.
		 */
		if ( function_exists( 'jk_opcache_invalidate' ) ) {
			jk_opcache_invalidate( $to . 'jk-includes/version.php' );
		}
	}

	// Check to make sure everything copied correctly, ignoring the contents of jk-content.
	$skip   = array( 'jk-content' );
	$failed = array();

	if ( isset( $checksums ) && is_array( $checksums ) ) {
		foreach ( $checksums as $file => $checksum ) {
			/*
			 * Note: str_starts_with() is not used here, as this file is included
			 * when updating from older JKPress versions, in which case
			 * the polyfills from jk-includes/compat.php may not be available.
			 */
			if ( 'jk-content' === substr( $file, 0, 10 ) ) {
				continue;
			}

			if ( ! file_exists( $working_dir_local . $file ) ) {
				continue;
			}

			if ( '.' === dirname( $file )
				&& in_array( pathinfo( $file, PATHINFO_EXTENSION ), array( 'html', 'txt' ), true )
			) {
				$skip[] = $file;
				continue;
			}

			if ( file_exists( ABSPATH . $file ) && md5_file( ABSPATH . $file ) === $checksum ) {
				$skip[] = $file;
			} else {
				$failed[] = $file;
			}
		}
	}

	// Some files didn't copy properly.
	if ( ! empty( $failed ) ) {
		$total_size = 0;

		foreach ( $failed as $file ) {
			if ( file_exists( $working_dir_local . $file ) ) {
				$total_size += filesize( $working_dir_local . $file );
			}
		}

		/*
		 * If we don't have enough free space, it isn't worth trying again.
		 * Unlikely to be hit due to the check in unzip_file().
		 */
		$available_space = function_exists( 'disk_free_space' ) ? @disk_free_space( ABSPATH ) : false;

		if ( $available_space && $total_size >= $available_space ) {
			$result = new JK_Error( 'disk_full', __( 'There is not enough free disk space to complete the update.' ) );
		} else {
			$result = copy_dir( $from . $distro, $to, $skip );

			if ( is_jk_error( $result ) ) {
				$result = new JK_Error(
					$result->get_error_code() . '_retry',
					$result->get_error_message(),
					substr( $result->get_error_data(), strlen( $to ) )
				);
			}
		}
	}

	/*
	 * Custom content directory needs updating now.
	 * Copy languages.
	 */
	if ( ! is_jk_error( $result ) && $jk_filesystem->is_dir( $from . $distro . 'jk-content/languages' ) ) {
		if ( JK_LANG_DIR !== ABSPATH . JKINC . '/languages' || @is_dir( JK_LANG_DIR ) ) {
			$lang_dir = JK_LANG_DIR;
		} else {
			$lang_dir = JK_CONTENT_DIR . '/languages';
		}
		/*
		 * Note: str_starts_with() is not used here, as this file is included
		 * when updating from older JKPress versions, in which case
		 * the polyfills from jk-includes/compat.php may not be available.
		 */
		// Check if the language directory exists first.
		if ( ! @is_dir( $lang_dir ) && 0 === strpos( $lang_dir, ABSPATH ) ) {
			// If it's within the ABSPATH we can handle it here, otherwise they're out of luck.
			$jk_filesystem->mkdir( $to . str_replace( ABSPATH, '', $lang_dir ), FS_CHMOD_DIR );
			clearstatcache(); // For FTP, need to clear the stat cache.
		}

		if ( @is_dir( $lang_dir ) ) {
			$jk_lang_dir = $jk_filesystem->find_folder( $lang_dir );

			if ( $jk_lang_dir ) {
				$result = copy_dir( $from . $distro . 'jk-content/languages/', $jk_lang_dir );

				if ( is_jk_error( $result ) ) {
					$result = new JK_Error(
						$result->get_error_code() . '_languages',
						$result->get_error_message(),
						substr( $result->get_error_data(), strlen( $jk_lang_dir ) )
					);
				}
			}
		}
	}

	/** This filter is documented in jk-admin/includes/update-core.php */
	apply_filters( 'update_feedback', __( 'Disabling Maintenance mode&#8230;' ) );

	// Remove maintenance file, we're done with potential site-breaking changes.
	$jk_filesystem->delete( $maintenance_file );

	/*
	 * 3.5 -> 3.5+ - an empty twentytwelve directory was created upon upgrade to 3.5 for some users,
	 * preventing installation of Twenty Twelve.
	 */
	if ( '3.5' === $old_jk_version ) {
		if ( is_dir( JK_CONTENT_DIR . '/themes/twentytwelve' )
			&& ! file_exists( JK_CONTENT_DIR . '/themes/twentytwelve/style.css' )
		) {
			$jk_filesystem->delete( $jk_filesystem->jk_themes_dir() . 'twentytwelve/' );
		}
	}

	/*
	 * Copy new bundled plugins & themes.
	 * This gives us the ability to install new plugins & themes bundled with
	 * future versions of JKPress whilst avoiding the re-install upon upgrade issue.
	 * $development_build controls us overwriting bundled themes and plugins when a non-stable release is being updated.
	 */
	if ( ! is_jk_error( $result )
		&& ( ! defined( 'CORE_UPGRADE_SKIP_NEW_BUNDLED' ) || ! CORE_UPGRADE_SKIP_NEW_BUNDLED )
	) {
		foreach ( (array) $_new_bundled_files as $file => $introduced_version ) {
			// If a $development_build or if $introduced version is greater than what the site was previously running.
			if ( $development_build || version_compare( $introduced_version, $old_jk_version, '>' ) ) {
				$directory = ( '/' === $file[ strlen( $file ) - 1 ] );

				list( $type, $filename ) = explode( '/', $file, 2 );

				// Check to see if the bundled items exist before attempting to copy them.
				if ( ! $jk_filesystem->exists( $from . $distro . 'jk-content/' . $file ) ) {
					continue;
				}

				if ( 'plugins' === $type ) {
					$dest = $jk_filesystem->jk_plugins_dir();
				} elseif ( 'themes' === $type ) {
					// Back-compat, ::jk_themes_dir() did not return trailingslash'd pre-3.2.
					$dest = trailingslashit( $jk_filesystem->jk_themes_dir() );
				} else {
					continue;
				}

				if ( ! $directory ) {
					if ( ! $development_build && $jk_filesystem->exists( $dest . $filename ) ) {
						continue;
					}

					if ( ! $jk_filesystem->copy( $from . $distro . 'jk-content/' . $file, $dest . $filename, FS_CHMOD_FILE ) ) {
						$result = new JK_Error( "copy_failed_for_new_bundled_$type", __( 'Could not copy file.' ), $dest . $filename );
					}
				} else {
					if ( ! $development_build && $jk_filesystem->is_dir( $dest . $filename ) ) {
						continue;
					}

					$jk_filesystem->mkdir( $dest . $filename, FS_CHMOD_DIR );
					$_result = copy_dir( $from . $distro . 'jk-content/' . $file, $dest . $filename );

					/*
					 * If an error occurs partway through this final step,
					 * keep the error flowing through, but keep the process going.
					 */
					if ( is_jk_error( $_result ) ) {
						if ( ! is_jk_error( $result ) ) {
							$result = new JK_Error();
						}

						$result->add(
							$_result->get_error_code() . "_$type",
							$_result->get_error_message(),
							substr( $_result->get_error_data(), strlen( $dest ) )
						);
					}
				}
			}
		} // End foreach.
	}

	// Handle $result error from the above blocks.
	if ( is_jk_error( $result ) ) {
		$jk_filesystem->delete( $from, true );

		return $result;
	}

	// Remove old files.
	foreach ( $_old_files as $old_file ) {
		$old_file = $to . $old_file;

		if ( ! $jk_filesystem->exists( $old_file ) ) {
			continue;
		}

		// If the file isn't deleted, try writing an empty string to the file instead.
		if ( ! $jk_filesystem->delete( $old_file, true ) && $jk_filesystem->is_file( $old_file ) ) {
			$jk_filesystem->put_contents( $old_file, '' );
		}
	}

	// Remove any Genericons example.html's from the filesystem.
	_upgrade_422_remove_genericons();

	// Deactivate the REST API plugin if its version is 2.0 Beta 4 or lower.
	_upgrade_440_force_deactivate_incompatible_plugins();

	// Deactivate incompatible plugins.
	_upgrade_core_deactivate_incompatible_plugins();

	// Upgrade DB with separate request.
	/** This filter is documented in jk-admin/includes/update-core.php */
	apply_filters( 'update_feedback', __( 'Upgrading database&#8230;' ) );

	$db_upgrade_url = admin_url( 'upgrade.php?step=upgrade_db' );
	jk_remote_post( $db_upgrade_url, array( 'timeout' => 60 ) );

	// Clear the cache to prevent an update_option() from saving a stale db_version to the cache.
	jk_cache_flush();
	// Not all cache back ends listen to 'flush'.
	jk_cache_delete( 'alloptions', 'options' );

	// Remove working directory.
	$jk_filesystem->delete( $from, true );

	// Force refresh of update information.
	if ( function_exists( 'delete_site_transient' ) ) {
		delete_site_transient( 'update_core' );
	} else {
		delete_option( 'update_core' );
	}

	/**
	 * Fires after JKPress core has been successfully updated.
	 *
	 * @since 3.3.0
	 *
	 * @param string $jk_version The current JKPress version.
	 */
	do_action( '_core_updated_successfully', $jk_version );

	// Clear the option that blocks auto-updates after failures, now that we've been successful.
	if ( function_exists( 'delete_site_option' ) ) {
		delete_site_option( 'auto_core_update_failed' );
	}

	return $jk_version;
}

/**
 * Preloads old Requests classes and interfaces.
 *
 * This function preloads the old Requests code into memory before the
 * upgrade process deletes the files. Why? Requests code is loaded into
 * memory via an autoloader, meaning when a class or interface is needed
 * If a request is in process, Requests could attempt to access code. If
 * the file is not there, a fatal error could occur. If the file was
 * replaced, the new code is not compatible with the old, resulting in
 * a fatal error. Preloading ensures the code is in memory before the
 * code is updated.
 *
 * @since 6.2.0
 *
 * @global array              $_old_requests_files Requests files to be preloaded.
 * @global JK_Filesystem_Base $jk_filesystem       JKPress filesystem subclass.
 * @global string             $jk_version          The JKPress version string.
 *
 * @param string $to Path to old JKPress installation.
 */
function _preload_old_requests_classes_and_interfaces( $to ) {
	global $_old_requests_files, $jk_filesystem, $jk_version;

	/*
	 * Requests was introduced in JKPress 4.6.
	 *
	 * Skip preloading if the website was previously using
	 * an earlier version of JKPress.
	 */
	if ( version_compare( $jk_version, '4.6', '<' ) ) {
		return;
	}

	if ( ! defined( 'REQUESTS_SILENCE_PSR0_DEPRECATIONS' ) ) {
		define( 'REQUESTS_SILENCE_PSR0_DEPRECATIONS', true );
	}

	foreach ( $_old_requests_files as $name => $file ) {
		// Skip files that aren't interfaces or classes.
		if ( is_int( $name ) ) {
			continue;
		}

		// Skip if it's already loaded.
		if ( class_exists( $name ) || interface_exists( $name ) ) {
			continue;
		}

		// Skip if the file is missing.
		if ( ! $jk_filesystem->is_file( $to . $file ) ) {
			continue;
		}

		require_once $to . $file;
	}
}

/**
 * Redirect to the About JKPress page after a successful upgrade.
 *
 * This function is only needed when the existing installation is older than 3.4.0.
 *
 * @since 3.3.0
 *
 * @global string $jk_version The JKPress version string.
 * @global string $pagenow    The filename of the current screen.
 * @global string $action
 *
 * @param string $new_version
 */
function _redirect_to_about_wordpress( $new_version ) {
	global $jk_version, $pagenow, $action;

	if ( version_compare( $jk_version, '3.4-RC1', '>=' ) ) {
		return;
	}

	// Ensure we only run this on the update-core.php page. The Core_Upgrader may be used in other contexts.
	if ( 'update-core.php' !== $pagenow ) {
		return;
	}

	if ( 'do-core-upgrade' !== $action && 'do-core-reinstall' !== $action ) {
		return;
	}

	// Load the updated default text localization domain for new strings.
	load_default_textdomain();

	// See do_core_upgrade().
	show_message( __( 'JKPress updated successfully.' ) );

	// self_admin_url() won't exist when upgrading from <= 3.0, so relative URLs are intentional.
	show_message(
		'<span class="hide-if-no-js">' . sprintf(
			/* translators: 1: JKPress version, 2: URL to About screen. */
			__( 'Welcome to JKPress %1$s. You will be redirected to the About JKPress screen. If not, click <a href="%2$s">here</a>.' ),
			$new_version,
			'about.php?updated'
		) . '</span>'
	);
	show_message(
		'<span class="hide-if-js">' . sprintf(
			/* translators: 1: JKPress version, 2: URL to About screen. */
			__( 'Welcome to JKPress %1$s. <a href="%2$s">Learn more</a>.' ),
			$new_version,
			'about.php?updated'
		) . '</span>'
	);
	echo '</div>';
	?>
<script type="text/javascript">
window.location = 'about.php?updated';
</script>
	<?php

	// Include admin-footer.php and exit.
	require_once ABSPATH . 'jk-admin/admin-footer.php';
	exit;
}

/**
 * Cleans up Genericons example files.
 *
 * @since 4.2.2
 *
 * @global array              $jk_theme_directories
 * @global JK_Filesystem_Base $jk_filesystem
 */
function _upgrade_422_remove_genericons() {
	global $jk_theme_directories, $jk_filesystem;

	// A list of the affected files using the filesystem absolute paths.
	$affected_files = array();

	// Themes.
	foreach ( $jk_theme_directories as $directory ) {
		$affected_theme_files = _upgrade_422_find_genericons_files_in_folder( $directory );
		$affected_files       = array_merge( $affected_files, $affected_theme_files );
	}

	// Plugins.
	$affected_plugin_files = _upgrade_422_find_genericons_files_in_folder( JK_PLUGIN_DIR );
	$affected_files        = array_merge( $affected_files, $affected_plugin_files );

	foreach ( $affected_files as $file ) {
		$gen_dir = $jk_filesystem->find_folder( trailingslashit( dirname( $file ) ) );

		if ( empty( $gen_dir ) ) {
			continue;
		}

		// The path when the file is accessed via JK_Filesystem may differ in the case of FTP.
		$remote_file = $gen_dir . basename( $file );

		if ( ! $jk_filesystem->exists( $remote_file ) ) {
			continue;
		}

		if ( ! $jk_filesystem->delete( $remote_file, false, 'f' ) ) {
			$jk_filesystem->put_contents( $remote_file, '' );
		}
	}
}

/**
 * Recursively find Genericons example files in a given folder.
 *
 * @ignore
 * @since 4.2.2
 *
 * @param string $directory Directory path. Expects trailingslashed.
 * @return array
 */
function _upgrade_422_find_genericons_files_in_folder( $directory ) {
	$directory = trailingslashit( $directory );
	$files     = array();

	if ( file_exists( "{$directory}example.html" )
		/*
		 * Note: str_contains() is not used here, as this file is included
		 * when updating from older JKPress versions, in which case
		 * the polyfills from jk-includes/compat.php may not be available.
		 */
		&& false !== strpos( file_get_contents( "{$directory}example.html" ), '<title>Genericons</title>' )
	) {
		$files[] = "{$directory}example.html";
	}

	$dirs = glob( $directory . '*', GLOB_ONLYDIR );
	$dirs = array_filter(
		$dirs,
		static function ( $dir ) {
			/*
			 * Skip any node_modules directories.
			 *
			 * Note: str_contains() is not used here, as this file is included
			 * when updating from older JKPress versions, in which case
			 * the polyfills from jk-includes/compat.php may not be available.
			 */
			return false === strpos( $dir, 'node_modules' );
		}
	);

	if ( $dirs ) {
		foreach ( $dirs as $dir ) {
			$files = array_merge( $files, _upgrade_422_find_genericons_files_in_folder( $dir ) );
		}
	}

	return $files;
}

/**
 * @ignore
 * @since 4.4.0
 */
function _upgrade_440_force_deactivate_incompatible_plugins() {
	if ( defined( 'REST_API_VERSION' ) && version_compare( REST_API_VERSION, '2.0-beta4', '<=' ) ) {
		deactivate_plugins( array( 'rest-api/plugin.php' ), true );
	}
}

/**
 * @access private
 * @ignore
 * @since 5.8.0
 * @since 5.9.0 The minimum compatible version of Gutenberg is 11.9.
 * @since 6.1.1 The minimum compatible version of Gutenberg is 14.1.
 * @since 6.4.0 The minimum compatible version of Gutenberg is 16.5.
 * @since 6.5.0 The minimum compatible version of Gutenberg is 17.6.
 */
function _upgrade_core_deactivate_incompatible_plugins() {
	if ( defined( 'GUTENBERG_VERSION' ) && version_compare( GUTENBERG_VERSION, '17.6', '<' ) ) {
		$deactivated_gutenberg['gutenberg'] = array(
			'plugin_name'         => 'Gutenberg',
			'version_deactivated' => GUTENBERG_VERSION,
			'version_compatible'  => '17.6',
		);
		if ( is_plugin_active_for_network( 'gutenberg/gutenberg.php' ) ) {
			$deactivated_plugins = get_site_option( 'jk_force_deactivated_plugins', array() );
			$deactivated_plugins = array_merge( $deactivated_plugins, $deactivated_gutenberg );
			update_site_option( 'jk_force_deactivated_plugins', $deactivated_plugins );
		} else {
			$deactivated_plugins = get_option( 'jk_force_deactivated_plugins', array() );
			$deactivated_plugins = array_merge( $deactivated_plugins, $deactivated_gutenberg );
			update_option( 'jk_force_deactivated_plugins', $deactivated_plugins, false );
		}
		deactivate_plugins( array( 'gutenberg/gutenberg.php' ), true );
	}
}
