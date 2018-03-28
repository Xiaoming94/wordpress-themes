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

  <!-- Begin background div -->
  <div class="background">
    <header id="header" class="siter-header">

      <?php

      get_template_part('template-parts/site_header');
      // Get header navigation bar
      get_template_part('template-parts/header_nav');

      ?>
    </header>

    <!-- Begin Site Content div -->
    <div class="content grid-container">
