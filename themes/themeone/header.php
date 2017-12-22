<!DOCTYPE html>
<html  <?php language_attributes(); ?> >
<head>
  <!-- Index.php of ThemeOne -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="author" content="XiaoMing">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class="siter-header">
    <div class="header-image">
      <div class="grid-container">
        <h1 id="header">
          <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
        </h1>
        <h5><?php bloginfo('description'); ?></h5>
      </div>
    </div>
    <nav class="top-bar" id="top-bar">
        <div class="top-bar-left">
          <?php
          $args = array(
            'theme_location' => 'primary',
            'menu_class' => 'dropdown vertical medium-horizontal menu'
          );
          wp_nav_menu( $args );
          ?>
        </div>
    </nav>
  </header>
  <!-- Begin background div -->
  <div class="background">
    <!-- Begin Site Content div -->
    <div class="content grid-container">
