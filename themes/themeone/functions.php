<?php
/**
 * function.php of ThemeOne - Wordpress theme by XiaoMing
 * Contains actions made on the theme and codes for features
 * Probably the only file written in purely PHP
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
    'description'   => __('Widgets to be displayed in the footer', 'themeone')
  );
  register_sidebar($footer_widget_args);
}

function show_default_nav() {
  $pages = array_reverse(get_pages());
  foreach($pages as $page){
        $link = get_page_link( $page->ID );
        echo "<li><a href=$link>$page->post_title</a></li>";
  }
}
// Register Nav-menu
register_nav_menus(nav_menu_locations());

// Loading the assets
add_action('wp_enqueue_scripts', 'themeone_init_assets');

// Load the sidebar to the theme
add_action('widgets_init','create_sidebar');

add_action('widgets_init','create_footer_widgets');
// Let Wordpress manage document title
// This is literally to not use <title>
add_theme_support('title-tag');

?>
