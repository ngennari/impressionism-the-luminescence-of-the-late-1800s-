<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Impressionism:_the_luminescence_of_the_late_1800\'s
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?> 

<header> 

  <a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/F-impressionism-logo.png" alt="logo"></a> 

 

    <button class="toggle-overlay"><h2>ALL ARTWORKS</h2></button>

  </header> 

<?php get_template_part( 'template-parts/main-menu' ); ?>



