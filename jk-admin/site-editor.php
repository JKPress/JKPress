<?php
/**
 * Site Editor administration screen.
 *
 * @package JKPress
 * @subpackage Administration
 */

global $editor_styles;

/** JKPress Administration Bootstrap */
require_once __DIR__ . '/admin.php';

if ( ! current_user_can( 'edit_theme_options' ) ) {
	jk_die(
		'<h1>' . __( 'You need a higher level of permission.' ) . '</h1>' .
		'<p>' . __( 'Sorry, you are not allowed to edit theme options on this site.' ) . '</p>',
		403
	);
}

$is_template_part        = isset( $_GET['postType'] ) && 'jk_template_part' === sanitize_key( $_GET['postType'] );
$is_template_part_path   = isset( $_GET['path'] ) && 'jk_template_partall' === sanitize_key( $_GET['path'] );
$is_template_part_editor = $is_template_part || $is_template_part_path;
$is_patterns             = isset( $_GET['postType'] ) && 'jk_block' === sanitize_key( $_GET['postType'] );
$is_patterns_path        = isset( $_GET['path'] ) && 'patterns' === sanitize_key( $_GET['path'] );
$is_patterns_editor      = $is_patterns || $is_patterns_path;

if ( ! jk_is_block_theme() ) {
	if ( ! current_theme_supports( 'block-template-parts' ) && $is_template_part_editor ) {
		jk_die( __( 'The theme you are currently using is not compatible with the Site Editor.' ) );
	} elseif ( ! $is_patterns_editor && ! $is_template_part_editor ) {
		jk_die( __( 'The theme you are currently using is not compatible with the Site Editor.' ) );
	}
}

// Used in the HTML title tag.
$title       = _x( 'Editor', 'site editor title tag' );
$parent_file = 'themes.php';

// Flag that we're loading the block editor.
$current_screen = get_current_screen();
$current_screen->is_block_editor( true );

// Default to is-fullscreen-mode to avoid jumps in the UI.
add_filter(
	'admin_body_class',
	static function ( $classes ) {
		return "$classes is-fullscreen-mode";
	}
);

$indexed_template_types = array();
foreach ( get_default_block_template_types() as $slug => $template_type ) {
	$template_type['slug']    = (string) $slug;
	$indexed_template_types[] = $template_type;
}

$block_editor_context = new JK_Block_Editor_Context( array( 'name' => 'core/edit-site' ) );
$custom_settings      = array(
	'siteUrl'                   => site_url(),
	'postsPerPage'              => get_option( 'posts_per_page' ),
	'styles'                    => get_block_editor_theme_styles(),
	'defaultTemplateTypes'      => $indexed_template_types,
	'defaultTemplatePartAreas'  => get_allowed_block_template_part_areas(),
	'supportsLayout'            => jk_theme_has_theme_json(),
	'supportsTemplatePartsMode' => ! jk_is_block_theme() && current_theme_supports( 'block-template-parts' ),
);

// Add additional back-compat patterns registered by `current_screen` et al.
$custom_settings['__experimentalAdditionalBlockPatterns']          = JK_Block_Patterns_Registry::get_instance()->get_all_registered( true );
$custom_settings['__experimentalAdditionalBlockPatternCategories'] = JK_Block_Pattern_Categories_Registry::get_instance()->get_all_registered( true );

$editor_settings = get_block_editor_settings( $custom_settings, $block_editor_context );

if ( isset( $_GET['postType'] ) && ! isset( $_GET['postId'] ) ) {
	$post_type = get_post_type_object( $_GET['postType'] );
	if ( ! $post_type ) {
		jk_die( __( 'Invalid post type.' ) );
	}
}

$active_global_styles_id = JK_Theme_JSON_Resolver::get_user_global_styles_post_id();
$active_theme            = get_stylesheet();

$navigation_rest_route = rest_get_route_for_post_type_items(
	'jk_navigation'
);

$preload_paths = array(
	array( rest_get_route_for_post_type_items( 'attachment' ), 'OPTIONS' ),
	array( rest_get_route_for_post_type_items( 'page' ), 'OPTIONS' ),
	'/jk/v2/types?context=view',
	'/jk/v2/types/jk_template?context=edit',
	'/jk/v2/types/jk_template_part?context=edit',
	'/jk/v2/templates?context=edit&per_page=-1',
	'/jk/v2/template-parts?context=edit&per_page=-1',
	'/jk/v2/themes?context=edit&status=active',
	'/jk/v2/global-styles/' . $active_global_styles_id . '?context=edit',
	array( '/jk/v2/global-styles/' . $active_global_styles_id, 'OPTIONS' ),
	'/jk/v2/global-styles/themes/' . $active_theme . '?context=view',
	'/jk/v2/global-styles/themes/' . $active_theme . '/variations?context=view',
	array( $navigation_rest_route, 'OPTIONS' ),
	array(
		add_query_arg(
			array(
				'context'   => 'edit',
				'per_page'  => 100,
				'order'     => 'desc',
				'orderby'   => 'date',
				// array indices are required to avoid query being encoded and not matching in cache.
				'status[0]' => 'publish',
				'status[1]' => 'draft',
			),
			$navigation_rest_route
		),
		'GET',
	),
);

block_editor_rest_api_preload( $preload_paths, $block_editor_context );

jk_add_inline_script(
	'jk-edit-site',
	sprintf(
		'jk.domReady( function() {
			jk.editSite.initializeEditor( "site-editor", %s );
		} );',
		jk_json_encode( $editor_settings )
	)
);

// Preload server-registered block schemas.
jk_add_inline_script(
	'jk-blocks',
	'jk.blocks.unstable__bootstrapServerSideBlockDefinitions(' . jk_json_encode( get_block_editor_server_block_settings() ) . ');'
);

// Preload server-registered block bindings sources.
$registered_sources = get_all_registered_block_bindings_sources();
if ( ! empty( $registered_sources ) ) {
	$filtered_sources = array();
	foreach ( $registered_sources as $source ) {
		$filtered_sources[] = array(
			'name'        => $source->name,
			'label'       => $source->label,
			'usesContext' => $source->uses_context,
		);
	}
	$script = sprintf( 'for ( const source of %s ) { jk.blocks.registerBlockBindingsSource( source ); }', jk_json_encode( $filtered_sources ) );
	jk_add_inline_script(
		'jk-blocks',
		$script
	);
}

jk_add_inline_script(
	'jk-blocks',
	sprintf( 'jk.blocks.setCategories( %s );', jk_json_encode( isset( $editor_settings['blockCategories'] ) ? $editor_settings['blockCategories'] : array() ) ),
	'after'
);

jk_enqueue_script( 'jk-edit-site' );
jk_enqueue_script( 'jk-format-library' );
jk_enqueue_style( 'jk-edit-site' );
jk_enqueue_style( 'jk-format-library' );
jk_enqueue_media();

if (
	current_theme_supports( 'jk-block-styles' ) &&
	( ! is_array( $editor_styles ) || count( $editor_styles ) === 0 )
) {
	jk_enqueue_style( 'jk-block-library-theme' );
}

/** This action is documented in jk-admin/edit-form-blocks.php */
do_action( 'enqueue_block_editor_assets' );

require_once ABSPATH . 'jk-admin/admin-header.php';
?>

<div class="edit-site" id="site-editor">
	<?php // JavaScript is disabled. ?>
	<div class="wrap hide-if-js site-editor-no-js">
		<h1 class="jk-heading-inline"><?php _e( 'Edit site' ); ?></h1>
		<?php
		/**
		 * Filters the message displayed in the site editor interface when JavaScript is
		 * not enabled in the browser.
		 *
		 * @since 6.3.0
		 *
		 * @param string  $message The message being displayed.
		 * @param JK_Post $post    The post being edited.
		 */
		$message = apply_filters( 'site_editor_no_javascript_message', __( 'The site editor requires JavaScript. Please enable JavaScript in your browser settings.' ), $post );
		jk_admin_notice(
			$message,
			array(
				'type'               => 'error',
				'additional_classes' => array( 'hide-if-js' ),
			)
		);
		?>
	</div>
</div>

<?php

require_once ABSPATH . 'jk-admin/admin-footer.php';
