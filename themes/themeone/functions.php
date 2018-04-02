<?php
/**
 * function.php of ThemeOne - Wordpress theme by XiaoMing
 * Contains actions made on the theme and codes for features
 * Probably the only file written in purely PHP
 *
 * Contains also useful helper utility functions that are used in the theme code
 */

// enqueing assets
function themeone_init_assets() {
  // Styles
  wp_enqueue_style('themeone-style', get_stylesheet_uri() );
  // Scripts
  wp_enqueue_script( 'script', get_template_directory_uri() . '/js/scripts.js', array ( 'jquery' ), 1.1, true );
}

// Register theme locations for Navigation menus
function nav_menu_locations() {
  $menu_location = array(
    'primary' => __( 'Primary Menu' ),
    'footer'  => __( 'Footer Menu' )
  );
  return $menu_location;
}

// Creating Sidebars for the theme.
function create_sidebar() {
  $sidebar_args = array (
    'name'          => __('Widgets Sidebar', 'themeone'),
    'id'            => 'sidebar-1',
    'description'   => __('Widgets to be displayed on the index page and posts','themeone')
  );
  register_sidebar($sidebar_args);
}

// Creating footer widget area
function create_footer_widgets() {
  $footer_widget_args = array (
    'name'          => __('Footer Widgets', 'themeone'),
    'id'            => 'footer-sidebar-1',
    'description'   => __('Widgets to be displayed in the footer', 'themeone'),
    'before_widget' => '<div class="cell medium-6 small-12 widget">',
    'after_widget'  => '</div>'
  );
  register_sidebar($footer_widget_args);
}

// Function for creating custom header images
function create_custom_header_img() {
  $header_image_args = array (
    'width'         => 1920,
    'height'        => 500,
    'flex-width'    => true,
    'flex-height'   => true,
    'default-image' => get_template_directory_uri() . '/assets/img/default-header.jpg',
  );

  add_theme_support( 'custom-header' , $header_image_args );
}

// Utility functions are below this line

// Function for showing a default nav_bar when navbar is not present
function show_default_nav() {
  $pages = array_reverse(get_pages());
  foreach($pages as $page){
        $link = get_page_link( $page->ID );
        echo "<li><a href=$link>$page->post_title</a></li>";
  }
}

// Function for generating and showing a preview
function show_post_content_preview( $content, $permalink, $preview_word_count=60 ) {

  $trimmed_content = wp_trim_words( $content, $preview_word_count, '...' );
  echo $trimmed_content;
  // if content got trimmed, add a button
  if (strlen($trimmed_content) < strlen($content)){
    echo "<div class='continue-button'>
            <a href=$permalink class='button button-shadow-glow'>Continue Reading</a>
          </div>";
  }
}


function post_have_image( $post_id ) {
  return (bool) retrieve_first_post_image( $post_id );
}



function retrieve_first_post_image( $post_id )
{
  $content = get_post( $post_id )->post_content;

  // This part is copied from http://wpforce.com/how-to-detect-if-a-post-has-at-least-one-image/
  $searchimages = '/<img.+src=[\'"]([^\'"]+)[\'"].*>/i';

  // Run preg_match_all to grab all the images and save the results in $pics
  preg_match_all( $searchimages, $content, $pics );
  return $pics[1] [0];
}



function show_post_image( $post_id ) {
  if( has_post_thumbnail( $post_id ) ) {
    echo get_the_post_thumbnail( $post_id );
  } else {
    $img_src = retrieve_first_post_image( $post_id );
    $post_title = get_the_title( $post_id );
    echo "<img src=$img_src class='thumbnail' alt='post thumbnail'/>";
  }
}

// Register Nav-menu
register_nav_menus(nav_menu_locations());

// Loading the assets
add_action('wp_enqueue_scripts', 'themeone_init_assets');

// Load the sidebar to the theme
add_action('widgets_init','create_sidebar');

add_action('widgets_init','create_footer_widgets');

add_action('after_setup_theme', 'create_custom_header_img');
// Let Wordpress manage document title
// This is literally to not use <title>
add_theme_support('title-tag');

// Post-thumbnails

add_theme_support( 'post-thumbnails' );

?>
