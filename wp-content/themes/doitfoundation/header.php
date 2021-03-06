<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package doitfoundation
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,900" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="header">
          <!-- <div class="header-top">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="header-top-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-horizontal.jpg" alt="Do it Foundation"></a>
          </div> -->
          
          <div class="header-container ">
              
              <a href="<?php echo esc_url(home_url('/')); ?>" class="header-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-horizontal2.jpg" alt="Do it Foundation"></a>
              <a href="<?php echo esc_url(home_url('/')); ?>" class="header-logo-mobile"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" alt="Do it Foundation"></a>
             
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'header-menu',
                    'menu_id' => 'header-menu',
                    'container' => 'nav',
                    'container_class' => 'header-menu',
                    'container_id' => '',
                    'menu_class' => 'header-menu-ul',
                ));
                ?>

               
              <div class="header-right flex-container-sb">
                <div class="header-lang">
                    <a href="<?php echo esc_url(home_url('/en')); ?>">EN</a> | 
                    <a href="<?php echo esc_url(home_url('/es')); ?>">ES</a>
                </div>
                <div class="header-links">
                   <?php if(get_locale() == 'es_ES') : ?>
                        <a href="<?php echo esc_url(home_url('/donar')); ?>" class="btn btn-donate"><?php pll_e('Donate'); ?></a>
                    <?php else: ?>
                        <a href="<?php echo esc_url(home_url('/donate')); ?>" class="btn btn-donate"><?php pll_e('Donate'); ?></a>
                    <?php endif; ?>
                </div>
                <div class="header-btn-menu">
                   <button id="btn-menu" class="nav-btn-menu">
                       <i class="fa fa-bars"></i>
                   </button>
                </div>
              </div>
              
          </div>
          
      </header>
      <div class="nav-container">
         <?php
            wp_nav_menu(array(
                'theme_location' => 'nav-menu',
                'menu_id' => 'nav-menu',
                'container' => 'nav',
                'container_class' => 'nav-menu',
                'container_id' => '',
                'menu_class' => 'nav-menu-ul',
            ));
        ?>
         <div class="nav-social">
              <a href="https://www.facebook.com/DoItFoundation/" target="_blank"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-google-plus"></i></a>
              <a href="#"><i class="fa fa-youtube"></i></a>
            </div>
        
    </div>