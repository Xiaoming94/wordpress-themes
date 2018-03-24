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
  if( get_the_author_meta( 'description' ) ) :
?>
    <div class="author-bio card">
      <div class="card-section">
        <div class="grid-x grid-margin-x">
          <div class="cell medium-2 small-2">
            <?php echo get_avatar( get_the_author_meta('ID') ); ?>
          </div>
          <div class="cell medium-10 small-10">
            <h2 class="author-bio-title">Author's bio</h2>
            <?php the_author_meta( 'description' ); ?>
            <hr />
            <h3>Contact information:</h3>
            <ul class="contact-info-list">
              <li>
                <b>Email:</b> <?php the_author_meta( 'user_email' ); ?>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
<?php
  endif;
?>

<?php
  get_template_part('template-parts/authors_posts');
?>


<?php
  get_footer();
?>