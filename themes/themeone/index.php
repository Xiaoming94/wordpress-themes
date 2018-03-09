<?php
/**
 * The index file of ThemeOne - Wordpress theme by XiaoMing
 * This theme is developed using PureScript and Sass with Foundation
 *
 * @link https://github.com/Xiaoming94/wordpress-theme/themes/themeone
 * @version 0.1.0
 * @author XiaoMing
 */
get_header();

?>
<div class="grid-x grid-margin-x">
  <div class="cell medium-8 small-12">
    <?php
    if( have_posts() ):
      while( have_posts() ): the_post();?>
      <h2><a href=<?php the_permalink(); ?>><?php the_title(); ?></a></h2>
      <?php
        the_content();
      ?>
      <?php
      endwhile;
    endif;
    ?>

  </div>
  <div class="cell medium-4 small-12">
    <?php
    get_sidebar();
    ?>
  </div>

</div>
<?php
get_footer();
?>
