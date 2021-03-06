<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package naja
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

</head>

<body>
	<?php do_action( 'before' ); ?>
	
	<header class="main-header">
        <div class="row">
        
          <div class="six columns">
            <a class="skull" href="/"><img src="<?php echo get_stylesheet_directory_uri() ?>/css/images/Skull-bones.jpg"></a>
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
          <!-- <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2> -->
          </div>
       
        <a href="#" class="menu-link">&#9776;</a>
          
          <div class="nav">		
            <nav id="menu" class="hide" role="navigation">
                
                <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
            </nav><!-- #site-navigation -->	
          </div>
        
        </div><!-- #row -->
	</header><!-- #masthead -->

	<div class="wrapper">
