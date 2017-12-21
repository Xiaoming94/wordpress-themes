<?php

  // enqueing assets
  function themeone_init_assets() {
    wp_enqueue_style('themeone-style', get_stylesheet_uri() );
    wp_enqueue_script( 'script', get_template_directory_uri() .
                        '/js/scripts.js', array ( 'jquery' ), 1.1, true );
  }
  // Loading the assets
  add_action('wp_enqueue_scripts', 'themeone_init_assets');
  // Let Wordpress manage document title
  // This is literally to not use <title>
  add_theme_support('title-tag');
?>
