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

function prepare_nav_bar($items,$args){
  if( $args->theme_location == 'primary' ){
      $items = '<li><a href='. home_url() .'>Home</a></li>' . $items;
      $items .= '<li>' . get_header_search_form() . '</li>';
  }
  return $items;
}

function get_header_search_form() { //Same as get_search_form() but for another .php file
    do_action('pre_get_search_form');
    $format = current_theme_supports('html5','search-form') ? 'html5' : 'xhtml';
    $format = apply_filters('search_form_format',$format);
    $search_form = locate_template('header-searchform.php');
    ob_start();
    require($search_form);
    $form = ob_get_clean();
// For results, these are mostly copied from wordpress
    $result = apply_filters( 'get_search_form', $form );

    if ( null === $result )
        $result = $form;

    if ( $echo )
        echo $result;
    else
        return $result;

}

function custom_header_defaults(){
  $args = array(
    'default-image' => get_template_directory_uri() . '/images/default-Header.jpg',
    'height'        => 200,
  );
  add_theme_support('custom-header', $args );
}

add_action('wp_enqueue_scripts','load_killMe_resources');
add_action('widgets_init','killMe_widgets_init');
add_filter('wp_nav_menu_items','prepare_nav_bar',10,2);

register_nav_menus(array(
  'primary' => __( 'Primary Menu' ),
  'footer' => __( 'Footer Menu' ),
));


add_theme_support( 'post-thumbnails' );
add_action('after_setup_theme','custom_header_defaults');
