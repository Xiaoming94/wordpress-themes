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

function add_search_to_nav($items,$args){
  if( $args->theme_location == 'primary' )
      $items .= '<li>' . get_search_form( false ) . '</li>';
  return $items;
}

function custom_header_defaults(){
  $args = array(
    'default-image' => get_template_directory_uri() . '/images/default-Header.jpg',
  );
  add_theme_support('custom-header', $args );
}

add_action('wp_enqueue_scripts','load_killMe_resources');
add_action('widgets_init','killMe_widgets_init');
add_filter('wp_nav_menu_items','add_search_to_nav',10,2);

register_nav_menus(array(
  'primary' => __( 'Primary Menu' ),
  'footer' => __( 'Footer Menu' ),
));


add_theme_support( 'post-thumbnails' );
add_action('after_setup_theme','custom_header_defaults');
?>
