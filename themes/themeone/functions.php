<?php

  // enqueing assets
  function themeone_init_assets() {
    wp_enqueue_style('themeone-style', get_stylesheet_uri() );
    wp_enqueue_script( 'script', get_template_directory_uri() .
                        '/js/scripts.js', array ( 'jquery' ), 1.1, true );
  }
  add_action('wp_enqueue_scripts', 'themeone_init_assets');
?>
