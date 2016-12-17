<?php

function load_killMe_resources(){

  $depsJS = array( 'jquery' );
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_script('main',
                    get_template_directory_uri() . '/js/main.js',
                    $depsJS,1.1,true);
  wp_enqueue_script('bootstrap',
                    get_template_directory_uri() . '/bower_components/bootstrap-sass/assets/javascripts/bootstrap.js',
                    $depsJS,1.1,true);

}

add_action('wp_enqueue_scripts','load_killMe_resources');

register_nav_menus(array(
  'primary' => __( 'Primary Menu' ),
  'footer' => __( 'Footer Menu' ),
));

add_theme_support( 'post-thumbnails' );
?>
