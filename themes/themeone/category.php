<?php
/**
 * Category.php of ThemeOne - A wordpress theme by XiaoMing
 * Template for listing the post in a certain category
 * At present this displays the author bio as a card (if present)
 * Followed by the said authors posts
 *
 * @link https://github.com/Xiaoming94/wordpress-theme/themes/themeone
 * @version 0.1.0
 * @author XiaoMing
 */

  get_header();
?>
<h2="page-title">
  Category: <?php single_cat_title('',true); ?>
  <hr />
</h2>
<div class="grid-x grid-margin-x">
  <div class="cell medium-8 small-12">
    <?php get_template_part( 'template-parts/standard_index_loop' ); ?>
  </div>
  <div class="cell medium-4 small-12">
    <?php get_sidebar(); ?>
  </div>
</div>
<?php
  get_footer();
?>