<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>
      <?php
        echo wp_title('|', false, 'right');
        bloginfo( 'name' );
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) )
        echo " | $site_description";
      ?>
    </title>
    <meta name="description" content="<?php echo $site_description; ?>">
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <?php wp_head(); ?>
    <script>
  var global = {
      baseUrl: '<?php echo home_url('/'); ?>',
      themeUrl: '<?php bloginfo('template_directory'); ?>'
  };
  var page = {};
    </script>
</head>
<body id="body">

<header>
  <div id="header">
    <!-- <img id="logo" src="<?php bloginfo('template_directory')?>/images/stoned-ape-logo-b.png" /> -->
    <div class="container" id="header-container">
      <div class="row">
        <div id="header-logo" class="">
          <a href="<?php echo home_url(''); ?>">
            <i aria-hidden="true" role="presentation" aria-label="StonedApe Logo" id="logo"></i>
          </a>
        </div>
        <div id="social-media-btns">
          <a href="https://www.facebook.com/astonedape"><img class="social-media-icons" src="<?php bloginfo('template_directory')?>/images/icons/facebook-icon.png"></a>
          <a href="https://twitter.com/_stonedape"><img class="social-media-icons" src="<?php bloginfo('template_directory')?>/images/icons/twitter-icon.png"></a>
          <!-- <img class="social-media-icons" src="<?php bloginfo('template_directory')?>/images/icons/google+-icon.png">
          <img class="social-media-icons" src="<?php bloginfo('template_directory')?>/images/icons/youtube-icon.png"> -->
        </div>
      </div>
    </div>
  </div>
  <div id="header-menu">
    <a href="<?php echo home_url(''); ?>">
      <img id="hidden-logo" src="<?php bloginfo('template_directory')?>/images/stoned-ape-logo-b.png" />
    </a>
    <div class="container">
      <div class="row">
       
          <!-- <h1 id="hidden-text">Stoned Ape</h1> -->
          <?php
            wp_nav_menu(
            array(
              'theme_location'  => 'header-menu'
            )
          );
          ?>
      </div>
      
    </div>
  </div>
  
</header>
<div id="main-content">

