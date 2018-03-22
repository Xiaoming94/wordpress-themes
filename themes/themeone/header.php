<!DOCTYPE html>
<html  <?php language_attributes(); ?> >
<head>
  <!-- Index.php of ThemeOne -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="author" content="XiaoMing">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class="siter-header">

    <?php

    get_template_part('template-parts/site_header');
    // Get header navigation bar
    get_template_part('template-parts/header_nav');

    ?>
  </header>
  <!-- Begin background div -->
  <div class="background">
    <!-- Begin Site Content div -->
    <div class="content grid-container">
