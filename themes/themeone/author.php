<?php
/**
 * Author.php of ThemeOne - A wordpress theme by XiaoMing
 * This template is used to display the author homepage in wordpress
 *
 * @link https://github.com/Xiaoming94/wordpress-theme/themes/themeone
 * @version 0.1.0
 * @author XiaoMing
 */

  get_header();
?>
<h1 class="page-title authors-page">Author:
  <?php
    echo get_the_author();
  ?>
</h1>
<hr />


<?php
  if( get_the_author_meta( 'description' ) ) {
    get_template_part('template-parts/author_bio_card');
  }
?>

<?php
  get_template_part('template-parts/authors_posts');
?>


<?php
  get_footer();
?>