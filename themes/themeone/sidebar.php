<?php
/**
 * Sidebar.php of ThemeOne - A wordpress theme by XiaoMing
 * Template file for the sidebars of the theme
 *
 * @link https://github.com/Xiaoming94/wordpress-theme/themes/themeone
 * @version 0.1.0
 * @author XiaoMing
 */
?>

<div id="sidebar" class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Widgets Sidebar', 'themeone' ); ?>">
  <?php dynamic_sidebar( 'sidebar-1' ); ?>
</div>
