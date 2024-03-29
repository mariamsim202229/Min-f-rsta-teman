<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package my-first-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')">
<?php wp_body_open(); ?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'my-first-theme' ); ?></a>
<!-- MATTIAS -->
<!-- <div id="top-banner">
		<marquee>
		Fraktfritt för kofeinbereonde - vid köp av 5 st produkter
		</marquee>
	</div> -->
	<header id="masthead" class="site-header container">
        <div class="site-branding">
           
        <nav id="site-navigation" class="main-navigation left-nav">
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'my-first-theme' ); ?></button>
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'menu-1',
                    'menu_id'        => 'left-menu',
                )
            );
            ?>
        </nav><!-- #site-navigation -->
        <div id="logo">
            <?php
                the_custom_logo();
            ?>
        </div>
        <nav class="main-navigation right-nav">
        <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'menu-2',
                    'menu_id'        => 'right-menu',
                )
            );
            ?>
        </nav>
        </div><!-- .site-branding -->
    </header><!-- #masthead -->
