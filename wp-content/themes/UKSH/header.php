<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

 <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light topMenu">
          <div class="container">
		  <?php if (function_exists('the_custom_logo')) {
				the_custom_logo();
			} ?>
            <a class="navbar-brand" href="<?php bloginfo('url');?>">
           </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
            <?php 
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => 'false',
                'menu_class'=> 'navbar-nav ml-auto'
            ));
            ?>
             
            </div>
            <span class="topHeaderRightLogo">
            <img src="<?php bloginfo('template_url'); ?>/img/unilogo.png" alt="">
            <img class="top-right-logo-two" src="<?php bloginfo('template_url'); ?>/img/caulogo.svg" alt="">
            </span>
          </div>
        </nav>
      <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container mainMenu">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsiveTwo" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarResponsiveTwo">
            <?php 
            wp_nav_menu(array(
                'theme_location' => 'topMenu',
                'container' => 'false',
                'menu_class'=> 'navbar-nav'
            ));
            ?>
              <!-- <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home
                        <span class="sr-only">(current)</span>
                      </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="Preview" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="Preview">
                    <a class="dropdown-item" href="#">Dropdown Link 1</a>
                    <a class="dropdown-item" href="#">Dropdown Link 2</a>
                    <a class="dropdown-item" href="#">Dropdown Link 3</a>
                    </div>
                    </li>
              </ul> -->
            </div>
          </div>
        </nav>
       
    </div>
  </header>
	<div class="site-inner">

		<div id="content" class="site-content  container">
