<?php
/**
 * Edit post administration panel.
 *
 * Manage Post actions: post, edit, delete, etc.
 *
 * @package JKPress
 * @subpackage Administration
 */

/** JKPress Administration Bootstrap */
require_once __DIR__ . '/admin.php';

$parent_file  = 'edit.php';
$submenu_file = 'edit.php';

$action = ! empty( $_REQUEST['action'] ) ? sanitize_text_field( $_REQUEST['action'] ) : '';

if ( isset( $_GET['post'] ) && isset( $_POST['post_ID'] ) && (int) $_GET['post'] !== (int) $_POST['post_ID'] ) {
	jk_die( __( 'A post ID mismatch has been detected.' ), __( 'Sorry, you are not allowed to edit this item.' ), 400 );
} elseif ( isset( $_GET['post'] ) ) {
	$post_id = (int) $_GET['post'];
} elseif ( isset( $_POST['post_ID'] ) ) {
	$post_id = (int) $_POST['post_ID'];
} else {
	$post_id = 0;
}
$post_ID = $post_id;

/**
 * @global string       $post_type        Global post type.
 * @global JK_Post_Type $post_type_object Global post type object.
 * @global JK_Post      $post             Global post object.
 */
global $post_type, $post_type_object, $post;

if ( $post_id ) {
	$post = get_post( $post_id );
}

if ( $post ) {
	$post_type        = $post->post_type;
	$post_type_object = get_post_type_object( $post_type );
}

if ( isset( $_POST['post_type'] ) && $post && $post_type !== $_POST['post_type'] ) {
	jk_die( __( 'A post type mismatch has been detected.' ), __( 'Sorry, you are not allowed to edit this item.' ), 400 );
}

if ( isset( $_POST['deletepost'] ) ) {
	$action = 'delete';
} elseif ( isset( $_POST['jk-preview'] ) && 'dopreview' === $_POST['jk-preview'] ) {
	$action = 'preview';
}

$sendback = jk_get_referer();
if ( ! $sendback ||
	str_contains( $sendback, 'post.php' ) ||
	str_contains( $sendback, 'post-new.php' ) ) {
	if ( 'attachment' === $post_type ) {
		$sendback = admin_url( 'upload.php' );
	} else {
		$sendback = admin_url( 'edit.php' );
		if ( ! empty( $post_type ) ) {
			$sendback = add_query_arg( 'post_type', $post_type, $sendback );
		}
	}
} else {
	$sendback = remove_query_arg( array( 'trashed', 'untrashed', 'deleted', 'ids' ), $sendback );
}

switch ( $action ) {
	case 'post-quickdraft-save':
		// Check nonce and capabilities.
		$nonce     = $_REQUEST['_jknonce'];
		$error_msg = false;

		// For output of the Quick Draft dashboard widget.
		require_once ABSPATH . 'jk-admin/includes/dashboard.php';

		if ( ! jk_verify_nonce( $nonce, 'add-post' ) ) {
			$error_msg = __( 'Unable to submit this form, please refresh and try again.' );
		}

		if ( ! current_user_can( get_post_type_object( 'post' )->cap->create_posts ) ) {
			exit;
		}

		if ( $error_msg ) {
			return jk_dashboard_quick_press( $error_msg );
		}

		$post = get_post( $_REQUEST['post_ID'] );
		check_admin_referer( 'add-' . $post->post_type );

		$_POST['comment_status'] = get_default_comment_status( $post->post_type );
		$_POST['ping_status']    = get_default_comment_status( $post->post_type, 'pingback' );

		// Wrap Quick Draft content in the Paragraph block.
		if ( ! str_contains( $_POST['content'], '<!-- jk:paragraph -->' ) ) {
			$_POST['content'] = sprintf(
				'<!-- jk:paragraph -->%s<!-- /jk:paragraph -->',
				str_replace( array( "\r\n", "\r", "\n" ), '<br />', $_POST['content'] )
			);
		}

		edit_post();
		jk_dashboard_quick_press();
		exit;

	case 'postajaxpost':
	case 'post':
		check_admin_referer( 'add-' . $post_type );
		$post_id = 'postajaxpost' === $action ? edit_post() : write_post();
		redirect_post( $post_id );
		exit;

	case 'edit':
		$editing = true;

		if ( empty( $post_id ) ) {
			jk_redirect( admin_url( 'post.php' ) );
			exit;
		}

		if ( ! $post ) {
			jk_die( __( 'You attempted to edit an item that does not exist. Perhaps it was deleted?' ) );
		}

		if ( ! $post_type_object ) {
			jk_die( __( 'Invalid post type.' ) );
		}

		if ( ! in_array( $typenow, get_post_types( array( 'show_ui' => true ) ), true ) ) {
			jk_die( __( 'Sorry, you are not allowed to edit posts in this post type.' ) );
		}

		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			jk_die( __( 'Sorry, you are not allowed to edit this item.' ) );
		}

		if ( 'trash' === $post->post_status ) {
			jk_die( __( 'You cannot edit this item because it is in the Trash. Please restore it and try again.' ) );
		}

		if ( ! empty( $_GET['get-post-lock'] ) ) {
			check_admin_referer( 'lock-post_' . $post_id );
			jk_set_post_lock( $post_id );
			jk_redirect( get_edit_post_link( $post_id, 'url' ) );
			exit;
		}

		$post_type = $post->post_type;
		if ( 'post' === $post_type ) {
			$parent_file   = 'edit.php';
			$submenu_file  = 'edit.php';
			$post_new_file = 'post-new.php';
		} elseif ( 'attachment' === $post_type ) {
			$parent_file   = 'upload.php';
			$submenu_file  = 'upload.php';
			$post_new_file = 'media-new.php';
		} else {
			if ( isset( $post_type_object ) && $post_type_object->show_in_menu && true !== $post_type_object->show_in_menu ) {
				$parent_file = $post_type_object->show_in_menu;
			} else {
				$parent_file = "edit.php?post_type=$post_type";
			}
			$submenu_file  = "edit.php?post_type=$post_type";
			$post_new_file = "post-new.php?post_type=$post_type";
		}

		$title = $post_type_object->labels->edit_item;

		/**
		 * Allows replacement of the editor.
		 *
		 * @since 4.9.0
		 *
		 * @param bool    $replace Whether to replace the editor. Default false.
		 * @param JK_Post $post    Post object.
		 */
		if ( true === apply_filters( 'replace_editor', false, $post ) ) {
			break;
		}

		if ( use_block_editor_for_post( $post ) ) {
			require ABSPATH . 'jk-admin/edit-form-blocks.php';
			break;
		}

		if ( ! jk_check_post_lock( $post->ID ) ) {
			$active_post_lock = jk_set_post_lock( $post->ID );

			if ( 'attachment' !== $post_type ) {
				jk_enqueue_script( 'autosave' );
			}
		}

		$post = get_post( $post_id, OBJECT, 'edit' );

		if ( post_type_supports( $post_type, 'comments' ) ) {
			jk_enqueue_script( 'admin-comments' );
			enqueue_comment_hotkeys_js();
		}

		require ABSPATH . 'jk-admin/edit-form-advanced.php';

		break;

	case 'editattachment':
		check_admin_referer( 'update-post_' . $post_id );

		// Don't let these be changed.
		unset( $_POST['guid'] );
		$_POST['post_type'] = 'attachment';

		// Update the thumbnail filename.
		$newmeta          = jk_get_attachment_metadata( $post_id, true );
		$newmeta['thumb'] = jk_basename( $_POST['thumb'] );

		jk_update_attachment_metadata( $post_id, $newmeta );

		// Intentional fall-through to trigger the edit_post() call.
	case 'editpost':
		check_admin_referer( 'update-post_' . $post_id );

		$post_id = edit_post();

		// Session cookie flag that the post was saved.
		if ( isset( $_COOKIE['jk-saving-post'] ) && $_COOKIE['jk-saving-post'] === $post_id . '-check' ) {
			setcookie( 'jk-saving-post', $post_id . '-saved', time() + DAY_IN_SECONDS, ADMIN_COOKIE_PATH, COOKIE_DOMAIN, is_ssl() );
		}

		redirect_post( $post_id ); // Send user on their way while we keep working.

		exit;

	case 'trash':
		check_admin_referer( 'trash-post_' . $post_id );

		if ( ! $post ) {
			jk_die( __( 'The item you are trying to move to the Trash no longer exists.' ) );
		}

		if ( ! $post_type_object ) {
			jk_die( __( 'Invalid post type.' ) );
		}

		if ( ! current_user_can( 'delete_post', $post_id ) ) {
			jk_die( __( 'Sorry, you are not allowed to move this item to the Trash.' ) );
		}

		$user_id = jk_check_post_lock( $post_id );
		if ( $user_id ) {
			$user = get_userdata( $user_id );
			/* translators: %s: User's display name. */
			jk_die( sprintf( __( 'You cannot move this item to the Trash. %s is currently editing.' ), $user->display_name ) );
		}

		if ( ! jk_trash_post( $post_id ) ) {
			jk_die( __( 'Error in moving the item to Trash.' ) );
		}

		jk_redirect(
			add_query_arg(
				array(
					'trashed' => 1,
					'ids'     => $post_id,
				),
				$sendback
			)
		);
		exit;

	case 'untrash':
		check_admin_referer( 'untrash-post_' . $post_id );

		if ( ! $post ) {
			jk_die( __( 'The item you are trying to restore from the Trash no longer exists.' ) );
		}

		if ( ! $post_type_object ) {
			jk_die( __( 'Invalid post type.' ) );
		}

		if ( ! current_user_can( 'delete_post', $post_id ) ) {
			jk_die( __( 'Sorry, you are not allowed to restore this item from the Trash.' ) );
		}

		if ( ! jk_untrash_post( $post_id ) ) {
			jk_die( __( 'Error in restoring the item from Trash.' ) );
		}

		$sendback = add_query_arg(
			array(
				'untrashed' => 1,
				'ids'       => $post_id,
			),
			$sendback
		);
		jk_redirect( $sendback );
		exit;

	case 'delete':
		check_admin_referer( 'delete-post_' . $post_id );

		if ( ! $post ) {
			jk_die( __( 'This item has already been deleted.' ) );
		}

		if ( ! $post_type_object ) {
			jk_die( __( 'Invalid post type.' ) );
		}

		if ( ! current_user_can( 'delete_post', $post_id ) ) {
			jk_die( __( 'Sorry, you are not allowed to delete this item.' ) );
		}

		if ( 'attachment' === $post->post_type ) {
			$force = ( ! MEDIA_TRASH );
			if ( ! jk_delete_attachment( $post_id, $force ) ) {
				jk_die( __( 'Error in deleting the attachment.' ) );
			}
		} else {
			if ( ! jk_delete_post( $post_id, true ) ) {
				jk_die( __( 'Error in deleting the item.' ) );
			}
		}

		jk_redirect( add_query_arg( 'deleted', 1, $sendback ) );
		exit;

	case 'preview':
		check_admin_referer( 'update-post_' . $post_id );

		$url = post_preview();

		jk_redirect( $url );
		exit;

	case 'toggle-custom-fields':
		check_admin_referer( 'toggle-custom-fields', 'toggle-custom-fields-nonce' );

		$current_user_id = get_current_user_id();
		if ( $current_user_id ) {
			$enable_custom_fields = (bool) get_user_meta( $current_user_id, 'enable_custom_fields', true );
			update_user_meta( $current_user_id, 'enable_custom_fields', ! $enable_custom_fields );
		}

		jk_safe_redirect( jk_get_referer() );
		exit;

	default:
		/**
		 * Fires for a given custom post action request.
		 *
		 * The dynamic portion of the hook name, `$action`, refers to the custom post action.
		 *
		 * @since 4.6.0
		 *
		 * @param int $post_id Post ID sent with the request.
		 */
		do_action( "post_action_{$action}", $post_id );

		jk_redirect( admin_url( 'edit.php' ) );
		exit;
} // End switch.

require_once ABSPATH . 'jk-admin/admin-footer.php';
