<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div class="page-header">
    <div class="container">
      <header class="site-header">
        <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
        <h5><?php bloginfo('description'); ?></h5>
      </header>
    </div>
  </div>
  <div class="container">
    <nav>
      <?php
      $args = array(
        'menu_class' => 'nav nav-pills',
        'theme_location' => 'primary'
      );
      ?>
      <?php wp_nav_menu( $args );?>
    </nav>
  </div>
  <div class="container">
    <div class="row">
      <?php get_sidebar(); ?>
