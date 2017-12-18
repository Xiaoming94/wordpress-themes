<?php

  // enqueing assets
  function themeone_init_assets() {
    wp_enqueue_style('themeone-style', get_stylesheet_uri() );
  }
  add_action('wp_enqueue_scripts', 'themeone_init_assets');
?>
