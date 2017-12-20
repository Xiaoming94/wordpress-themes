<!DOCTYPE html>
<html>
<head>
  <!-- Index.php of ThemeOne -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="author" content="XiaoMing">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title(); ?> - <?php bloginfo( 'name' ); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class="siter-header">
    <div class="header-image">
      <div class="row">
        <h1 id="header">
          <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
        </h1>
      </div>
    </div>
  </header>
  <!-- Begin background div -->
  <div class="background">
    <!-- Begin Site Content div -->
    <div class="row">
