<?php
/**
 * REST API: JK_REST_Template_Autosaves_Controller class.
 *
 * @package JKPress
 * @subpackage REST_API
 * @since 6.4.0
 */

/**
 * Core class used to access template autosaves via the REST API.
 *
 * @since 6.4.0
 *
 * @see JK_REST_Autosaves_Controller
 */
class JK_REST_Template_Autosaves_Controller extends JK_REST_Autosaves_Controller {
	/**
	 * Parent post type.
	 *
	 * @since 6.4.0
	 * @var string
	 */
	private $parent_post_type;

	/**
	 * Parent post controller.
	 *
	 * @since 6.4.0
	 * @var JK_REST_Controller
	 */
	private $parent_controller;

	/**
	 * Revision controller.
	 *
	 * @since 6.4.0
	 * @var JK_REST_Revisions_Controller
	 */
	private $revisions_controller;

	/**
	 * The base of the parent controller's route.
	 *
	 * @since 6.4.0
	 * @var string
	 */
	private $parent_base;

	/**
	 * Constructor.
	 *
	 * @since 6.4.0
	 *
	 * @param string $parent_post_type Post type of the parent.
	 */
	public function __construct( $parent_post_type ) {
		parent::__construct( $parent_post_type );
		$this->parent_post_type = $parent_post_type;
		$post_type_object       = get_post_type_object( $parent_post_type );
		$parent_controller      = $post_type_object->get_rest_controller();

		if ( ! $parent_controller ) {
			$parent_controller = new JK_REST_Templates_Controller( $parent_post_type );
		}

		$this->parent_controller = $parent_controller;

		$revisions_controller = $post_type_object->get_revisions_rest_controller();
		if ( ! $revisions_controller ) {
			$revisions_controller = new JK_REST_Revisions_Controller( $parent_post_type );
		}
		$this->revisions_controller = $revisions_controller;
		$this->rest_base            = 'autosaves';
		$this->parent_base          = ! empty( $post_type_object->rest_base ) ? $post_type_object->rest_base : $post_type_object->name;
		$this->namespace            = ! empty( $post_type_object->rest_namespace ) ? $post_type_object->rest_namespace : 'jk/v2';
	}

	/**
	 * Registers the routes for autosaves.
	 *
	 * @since 6.4.0
	 *
	 * @see register_rest_route()
	 */
	public function register_routes() {
		register_rest_route(
			$this->namespace,
			sprintf(
				'/%s/(?P<id>%s%s)/%s',
				$this->parent_base,
				/*
				 * Matches theme's directory: `/themes/<subdirectory>/<theme>/` or `/themes/<theme>/`.
				 * Excludes invalid directory name characters: `/:<>*?"|`.
				 */
				'([^\/:<>\*\?"\|]+(?:\/[^\/:<>\*\?"\|]+)?)',
				// Matches the template name.
				'[\/\w%-]+',
				$this->rest_base
			),
			array(
				'args'   => array(
					'id' => array(
						'description'       => __( 'The id of a template' ),
						'type'              => 'string',
						'sanitize_callback' => array( $this->parent_controller, '_sanitize_template_id' ),
					),
				),
				array(
					'methods'             => JK_REST_Server::READABLE,
					'callback'            => array( $this, 'get_items' ),
					'permission_callback' => array( $this, 'get_items_permissions_check' ),
					'args'                => $this->get_collection_params(),
				),
				array(
					'methods'             => JK_REST_Server::CREATABLE,
					'callback'            => array( $this, 'create_item' ),
					'permission_callback' => array( $this, 'create_item_permissions_check' ),
					'args'                => $this->parent_controller->get_endpoint_args_for_item_schema( JK_REST_Server::EDITABLE ),
				),
				'schema' => array( $this, 'get_public_item_schema' ),
			)
		);

		register_rest_route(
			$this->namespace,
			sprintf(
				'/%s/(?P<parent>%s%s)/%s/%s',
				$this->parent_base,
				/*
				 * Matches theme's directory: `/themes/<subdirectory>/<theme>/` or `/themes/<theme>/`.
				 * Excludes invalid directory name characters: `/:<>*?"|`.
				 */
				'([^\/:<>\*\?"\|]+(?:\/[^\/:<>\*\?"\|]+)?)',
				// Matches the template name.
				'[\/\w%-]+',
				$this->rest_base,
				'(?P<id>[\d]+)'
			),
			array(
				'args'   => array(
					'parent' => array(
						'description'       => __( 'The id of a template' ),
						'type'              => 'string',
						'sanitize_callback' => array( $this->parent_controller, '_sanitize_template_id' ),
					),
					'id'     => array(
						'description' => __( 'The ID for the autosave.' ),
						'type'        => 'integer',
					),
				),
				array(
					'methods'             => JK_REST_Server::READABLE,
					'callback'            => array( $this, 'get_item' ),
					'permission_callback' => array( $this->revisions_controller, 'get_item_permissions_check' ),
					'args'                => array(
						'context' => $this->get_context_param( array( 'default' => 'view' ) ),
					),
				),
				'schema' => array( $this, 'get_public_item_schema' ),
			)
		);
	}

	/**
	 * Prepares the item for the REST response.
	 *
	 * @since 6.4.0
	 *
	 * @param JK_Post         $item    Post revision object.
	 * @param JK_REST_Request $request Request object.
	 * @return JK_REST_Response Response object.
	 */
	public function prepare_item_for_response( $item, $request ) {
		$template = _build_block_template_result_from_post( $item );
		$response = $this->parent_controller->prepare_item_for_response( $template, $request );

		$fields = $this->get_fields_for_response( $request );
		$data   = $response->get_data();

		if ( in_array( 'parent', $fields, true ) ) {
			$data['parent'] = (int) $item->post_parent;
		}

		$context = ! empty( $request['context'] ) ? $request['context'] : 'view';
		$data    = $this->filter_response_by_context( $data, $context );

		// Wrap the data in a response object.
		$response = new JK_REST_Response( $data );

		if ( rest_is_field_included( '_links', $fields ) || rest_is_field_included( '_embedded', $fields ) ) {
			$links = $this->prepare_links( $template );
			$response->add_links( $links );
		}

		return $response;
	}

	/**
	 * Gets the autosave, if the ID is valid.
	 *
	 * @since 6.4.0
	 *
	 * @param JK_REST_Request $request Full details about the request.
	 * @return JK_Post|JK_Error Autosave post object if ID is valid, JK_Error otherwise.
	 */
	public function get_item( $request ) {
		$parent = $this->get_parent( $request['parent'] );
		if ( is_jk_error( $parent ) ) {
			return $parent;
		}

		$autosave = jk_get_post_autosave( $parent->ID );

		if ( ! $autosave ) {
			return new JK_Error(
				'rest_post_no_autosave',
				__( 'There is no autosave revision for this template.' ),
				array( 'status' => 404 )
			);
		}

		$response = $this->prepare_item_for_response( $autosave, $request );
		return $response;
	}

	/**
	 * Get the parent post.
	 *
	 * @since 6.4.0
	 *
	 * @param int $parent_id Supplied ID.
	 * @return JK_Post|JK_Error Post object if ID is valid, JK_Error otherwise.
	 */
	protected function get_parent( $parent_id ) {
		return $this->revisions_controller->get_parent( $parent_id );
	}

	/**
	 * Prepares links for the request.
	 *
	 * @since 6.4.0
	 *
	 * @param JK_Block_Template $template Template.
	 * @return array Links for the given post.
	 */
	protected function prepare_links( $template ) {
		$links = array(
			'self'   => array(
				'href' => rest_url( sprintf( '/%s/%s/%s/%s/%d', $this->namespace, $this->parent_base, $template->id, $this->rest_base, $template->jk_id ) ),
			),
			'parent' => array(
				'href' => rest_url( sprintf( '/%s/%s/%s', $this->namespace, $this->parent_base, $template->id ) ),
			),
		);

		return $links;
	}

	/**
	 * Retrieves the autosave's schema, conforming to JSON Schema.
	 *
	 * @since 6.4.0
	 *
	 * @return array Item schema data.
	 */
	public function get_item_schema() {
		if ( $this->schema ) {
			return $this->add_additional_fields_schema( $this->schema );
		}

		$this->schema = $this->revisions_controller->get_item_schema();

		return $this->add_additional_fields_schema( $this->schema );
	}
}
