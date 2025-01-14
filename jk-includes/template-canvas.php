<?php
/**
 * Template canvas file to render the current 'jk_template'.
 *
 * @package JKPress
 */

/*
 * Get the template HTML.
 * This needs to run before <head> so that blocks can add scripts and styles in jk_head().
 */
$template_html = get_the_block_template_html();
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<?php jk_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php jk_body_open(); ?>

<?php echo $template_html; ?>

<?php jk_footer(); ?>
</body>
</html>
