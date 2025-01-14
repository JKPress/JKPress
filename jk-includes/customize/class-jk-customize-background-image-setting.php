<?php
/**
 * Customize API: JK_Customize_Background_Image_Setting class
 *
 * @package JKPress
 * @subpackage Customize
 * @since 4.4.0
 */

/**
 * Customizer Background Image Setting class.
 *
 * @since 3.4.0
 *
 * @see JK_Customize_Setting
 */
final class JK_Customize_Background_Image_Setting extends JK_Customize_Setting {

	/**
	 * Unique string identifier for the setting.
	 *
	 * @since 3.4.0
	 * @var string
	 */
	public $id = 'background_image_thumb';

	/**
	 * @since 3.4.0
	 *
	 * @param mixed $value The value to update. Not used.
	 */
	public function update( $value ) {
		remove_theme_mod( 'background_image_thumb' );
	}
}
