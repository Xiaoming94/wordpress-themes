<?php

function load_killMe_resources(){

  $depsJS = array( 'jquery' );
  wp_enqueue_script('bootstrap',
  get_template_directory_uri() . '/bower_components/bootstrap-sass/assets/javascripts/bootstrap.js',
  $depsJS);
  wp_enqueue_script('main',
  get_template_directory_uri() . '/js/main.js',
  $depsJS);
  wp_enqueue_style('style', get_stylesheet_uri());

}

function killMe_widgets_init(){
  register_sidebar( array(
    'name'            => __( 'Primary Sidebar', 'killMe' ),
    'id'              => 'sidebar-1',
    'before_widget'   => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'    => '</aside>',
    'before_title'    => '<h1 class="widget-title">',
    'after_title'     => '</h1>'
  ) );
}

add_action('wp_enqueue_scripts','load_killMe_resources','killMe_widgets_init');

register_nav_menus(array(
  'primary' => __( 'Primary Menu' ),
  'footer' => __( 'Footer Menu' ),
));

add_theme_support( 'post-thumbnails' );
?>
