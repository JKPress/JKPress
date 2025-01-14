<?php
/**
 * Upgrade API: File_Upload_Upgrader class
 *
 * @package JKPress
 * @subpackage Upgrader
 * @since 4.6.0
 */

/**
 * Core class used for handling file uploads.
 *
 * This class handles the upload process and passes it as if it's a local file
 * to the Upgrade/Installer functions.
 *
 * @since 2.8.0
 * @since 4.6.0 Moved to its own file from jk-admin/includes/class-jk-upgrader.php.
 */
#[AllowDynamicProperties]
class File_Upload_Upgrader {

	/**
	 * The full path to the file package.
	 *
	 * @since 2.8.0
	 * @var string $package
	 */
	public $package;

	/**
	 * The name of the file.
	 *
	 * @since 2.8.0
	 * @var string $filename
	 */
	public $filename;

	/**
	 * The ID of the attachment post for this file.
	 *
	 * @since 3.3.0
	 * @var int $id
	 */
	public $id = 0;

	/**
	 * Construct the upgrader for a form.
	 *
	 * @since 2.8.0
	 *
	 * @param string $form      The name of the form the file was uploaded from.
	 * @param string $urlholder The name of the `GET` parameter that holds the filename.
	 */
	public function __construct( $form, $urlholder ) {

		if ( empty( $_FILES[ $form ]['name'] ) && empty( $_GET[ $urlholder ] ) ) {
			jk_die( __( 'Please select a file' ) );
		}

		// Handle a newly uploaded file. Else, assume it's already been uploaded.
		if ( ! empty( $_FILES ) ) {
			$overrides = array(
				'test_form' => false,
				'test_type' => false,
			);
			$file      = jk_handle_upload( $_FILES[ $form ], $overrides );

			if ( isset( $file['error'] ) ) {
				jk_die( $file['error'] );
			}

			if ( 'pluginzip' === $form || 'themezip' === $form ) {
				if ( ! jk_zip_file_is_valid( $file['file'] ) ) {
					jk_delete_file( $file['file'] );

					if ( 'pluginzip' === $form ) {
						$plugins_page = sprintf(
							'<a href="%s">%s</a>',
							self_admin_url( 'plugin-install.php' ),
							__( 'Return to the Plugin Installer' )
						);
						jk_die( __( 'Incompatible Archive.' ) . '<br />' . $plugins_page );
					}

					if ( 'themezip' === $form ) {
						$themes_page = sprintf(
							'<a href="%s" target="_parent">%s</a>',
							self_admin_url( 'theme-install.php' ),
							__( 'Return to the Theme Installer' )
						);
						jk_die( __( 'Incompatible Archive.' ) . '<br />' . $themes_page );
					}
				}
			}

			$this->filename = $_FILES[ $form ]['name'];
			$this->package  = $file['file'];

			// Construct the attachment array.
			$attachment = array(
				'post_title'     => $this->filename,
				'post_content'   => $file['url'],
				'post_mime_type' => $file['type'],
				'guid'           => $file['url'],
				'context'        => 'upgrader',
				'post_status'    => 'private',
			);

			// Save the data.
			$this->id = jk_insert_attachment( $attachment, $file['file'] );

			// Schedule a cleanup for 2 hours from now in case of failed installation.
			jk_schedule_single_event( time() + 2 * HOUR_IN_SECONDS, 'upgrader_scheduled_cleanup', array( $this->id ) );

		} elseif ( is_numeric( $_GET[ $urlholder ] ) ) {
			// Numeric Package = previously uploaded file, see above.
			$this->id   = (int) $_GET[ $urlholder ];
			$attachment = get_post( $this->id );
			if ( empty( $attachment ) ) {
				jk_die( __( 'Please select a file' ) );
			}

			$this->filename = $attachment->post_title;
			$this->package  = get_attached_file( $attachment->ID );
		} else {
			// Else, It's set to something, Back compat for plugins using the old (pre-3.3) File_Uploader handler.
			$uploads = jk_upload_dir();
			if ( ! ( $uploads && false === $uploads['error'] ) ) {
				jk_die( $uploads['error'] );
			}

			$this->filename = sanitize_file_name( $_GET[ $urlholder ] );
			$this->package  = $uploads['basedir'] . '/' . $this->filename;

			if ( ! str_starts_with( realpath( $this->package ), realpath( $uploads['basedir'] ) ) ) {
				jk_die( __( 'Please select a file' ) );
			}
		}
	}

	/**
	 * Deletes the attachment/uploaded file.
	 *
	 * @since 3.2.2
	 *
	 * @return bool Whether the cleanup was successful.
	 */
	public function cleanup() {
		if ( $this->id ) {
			jk_delete_attachment( $this->id );

		} elseif ( file_exists( $this->package ) ) {
			return @unlink( $this->package );
		}

		return true;
	}
}
