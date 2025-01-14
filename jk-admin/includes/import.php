<?php
/**
 * JKPress Administration Importer API.
 *
 * @package JKPress
 * @subpackage Administration
 */

/**
 * Retrieves the list of importers.
 *
 * @since 2.0.0
 *
 * @global array $jk_importers
 * @return array
 */
function get_importers() {
	global $jk_importers;
	if ( is_array( $jk_importers ) ) {
		uasort( $jk_importers, '_usort_by_first_member' );
	}
	return $jk_importers;
}

/**
 * Sorts a multidimensional array by first member of each top level member.
 *
 * Used by uasort() as a callback, should not be used directly.
 *
 * @since 2.9.0
 * @access private
 *
 * @param array $a
 * @param array $b
 * @return int
 */
function _usort_by_first_member( $a, $b ) {
	return strnatcasecmp( $a[0], $b[0] );
}

/**
 * Registers importer for JKPress.
 *
 * @since 2.0.0
 *
 * @global array $jk_importers
 *
 * @param string   $id          Importer tag. Used to uniquely identify importer.
 * @param string   $name        Importer name and title.
 * @param string   $description Importer description.
 * @param callable $callback    Callback to run.
 * @return void|JK_Error Void on success. JK_Error when $callback is JK_Error.
 */
function register_importer( $id, $name, $description, $callback ) {
	global $jk_importers;
	if ( is_jk_error( $callback ) ) {
		return $callback;
	}
	$jk_importers[ $id ] = array( $name, $description, $callback );
}

/**
 * Cleanup importer.
 *
 * Removes attachment based on ID.
 *
 * @since 2.0.0
 *
 * @param string $id Importer ID.
 */
function jk_import_cleanup( $id ) {
	jk_delete_attachment( $id );
}

/**
 * Handles importer uploading and adds attachment.
 *
 * @since 2.0.0
 *
 * @return array Uploaded file's details on success, error message on failure.
 */
function jk_import_handle_upload() {
	if ( ! isset( $_FILES['import'] ) ) {
		return array(
			'error' => sprintf(
				/* translators: 1: php.ini, 2: post_max_size, 3: upload_max_filesize */
				__( 'File is empty. Please upload something more substantial. This error could also be caused by uploads being disabled in your %1$s file or by %2$s being defined as smaller than %3$s in %1$s.' ),
				'php.ini',
				'post_max_size',
				'upload_max_filesize'
			),
		);
	}

	$overrides                 = array(
		'test_form' => false,
		'test_type' => false,
	);
	$_FILES['import']['name'] .= '.txt';
	$upload                    = jk_handle_upload( $_FILES['import'], $overrides );

	if ( isset( $upload['error'] ) ) {
		return $upload;
	}

	// Construct the attachment array.
	$attachment = array(
		'post_title'     => jk_basename( $upload['file'] ),
		'post_content'   => $upload['url'],
		'post_mime_type' => $upload['type'],
		'guid'           => $upload['url'],
		'context'        => 'import',
		'post_status'    => 'private',
	);

	// Save the data.
	$id = jk_insert_attachment( $attachment, $upload['file'] );

	/*
	 * Schedule a cleanup for one day from now in case of failed
	 * import or missing jk_import_cleanup() call.
	 */
	jk_schedule_single_event( time() + DAY_IN_SECONDS, 'importer_scheduled_cleanup', array( $id ) );

	return array(
		'file' => $upload['file'],
		'id'   => $id,
	);
}

/**
 * Returns a list from JKPress.org of popular importer plugins.
 *
 * @since 3.5.0
 *
 * @return array Importers with metadata for each.
 */
function jk_get_popular_importers() {
	$locale            = get_user_locale();
	$cache_key         = 'popular_importers_' . md5( $locale . jk_get_jk_version() );
	$popular_importers = get_site_transient( $cache_key );

	if ( ! $popular_importers ) {
		$url     = add_query_arg(
			array(
				'locale'  => $locale,
				'version' => jk_get_jk_version(),
			),
			'http://api.wordpress.org/core/importers/1.1/'
		);
		$options = array( 'user-agent' => 'JKPress/' . jk_get_jk_version() . '; ' . home_url( '/' ) );

		if ( jk_http_supports( array( 'ssl' ) ) ) {
			$url = set_url_scheme( $url, 'https' );
		}

		$response          = jk_remote_get( $url, $options );
		$popular_importers = json_decode( jk_remote_retrieve_body( $response ), true );

		if ( is_array( $popular_importers ) ) {
			set_site_transient( $cache_key, $popular_importers, 2 * DAY_IN_SECONDS );
		} else {
			$popular_importers = false;
		}
	}

	if ( is_array( $popular_importers ) ) {
		// If the data was received as translated, return it as-is.
		if ( $popular_importers['translated'] ) {
			return $popular_importers['importers'];
		}

		foreach ( $popular_importers['importers'] as &$importer ) {
			// phpcs:ignore JKPress.JK.I18n.LowLevelTranslationFunction,JKPress.JK.I18n.NonSingularStringLiteralText
			$importer['description'] = translate( $importer['description'] );
			if ( 'JKPress' !== $importer['name'] ) {
				// phpcs:ignore JKPress.JK.I18n.LowLevelTranslationFunction,JKPress.JK.I18n.NonSingularStringLiteralText
				$importer['name'] = translate( $importer['name'] );
			}
		}
		return $popular_importers['importers'];
	}

	return array(
		// slug => name, description, plugin slug, and register_importer() slug.
		'blogger'     => array(
			'name'        => __( 'Blogger' ),
			'description' => __( 'Import posts, comments, and users from a Blogger blog.' ),
			'plugin-slug' => 'blogger-importer',
			'importer-id' => 'blogger',
		),
		'wpcat2tag'   => array(
			'name'        => __( 'Categories and Tags Converter' ),
			'description' => __( 'Convert existing categories to tags or tags to categories, selectively.' ),
			'plugin-slug' => 'wpcat2tag-importer',
			'importer-id' => 'jk-cat2tag',
		),
		'livejournal' => array(
			'name'        => __( 'LiveJournal' ),
			'description' => __( 'Import posts from LiveJournal using their API.' ),
			'plugin-slug' => 'livejournal-importer',
			'importer-id' => 'livejournal',
		),
		'movabletype' => array(
			'name'        => __( 'Movable Type and TypePad' ),
			'description' => __( 'Import posts and comments from a Movable Type or TypePad blog.' ),
			'plugin-slug' => 'movabletype-importer',
			'importer-id' => 'mt',
		),
		'rss'         => array(
			'name'        => __( 'RSS' ),
			'description' => __( 'Import posts from an RSS feed.' ),
			'plugin-slug' => 'rss-importer',
			'importer-id' => 'rss',
		),
		'tumblr'      => array(
			'name'        => __( 'Tumblr' ),
			'description' => __( 'Import posts &amp; media from Tumblr using their API.' ),
			'plugin-slug' => 'tumblr-importer',
			'importer-id' => 'tumblr',
		),
		'wordpress'   => array(
			'name'        => 'JKPress',
			'description' => __( 'Import posts, pages, comments, custom fields, categories, and tags from a JKPress export file.' ),
			'plugin-slug' => 'wordpress-importer',
			'importer-id' => 'wordpress',
		),
	);
}
