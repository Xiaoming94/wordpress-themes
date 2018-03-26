<?php
/**
 * The page.php of ThemeOne - Wordpress theme by XiaoMing
 * The content of this is for rendering single pages
 *
 * @link https://github.com/Xiaoming94/wordpress-theme/themes/themeone
 * @version 0.1.0
 * @author XiaoMing
 */
  get_header();

    if( have_posts() ):
      while( have_posts() ): the_post();?>

        <h2 class="page-title"><?php the_title(); ?></h2>
        <?php
          the_content();
        ?>
    <?php
      endwhile;
    endif;

  get_footer();
?>
