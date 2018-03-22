<?php
/**
 * The single.php of ThemeOne - Wordpress theme by XiaoMing
 * The content of this file is for rendering post and so on
 * TODO: Needs to beautify the code
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
          <h2><?php the_title(); ?></h2>
          <?php
          // Displaying the content
          the_content();
          // Getting Comments
          if( comments_open() || get_comments_number() ) {
            comments_template();
          } else {
            echo "<h4>Sorry, Comments diabled for this post</h4>";
          }
          // Permalinks to next and previous posts
          ?>
          <div class="previous-next-pannel grid-x grid-margin-x">
            <div class="cell medium-6 small-12 text-left">
              <?php
              $previouspost = get_previous_post();
              if( !empty( $previouspost ) ): ?>
              <label>Previous post</label>
              <a href="<?php echo esc_url( get_permalink( $previouspost -> ID ) ); ?>" >
                Go to <?php echo $previouspost->post_title ?>
              </a>
            <?php endif?>
            </div>
            <div class="cell medium-6 small-12 text-right">
              <?php
              $nextpost = get_next_post();
              if( !empty( $nextpost ) ): ?>
              <label>Next Post</label>
              <a href="<?php echo esc_url( get_permalink( $nextpost -> ID ) ); ?> " >
                Go to <?php echo $nextpost->post_title ?>
              </a>
            <?php endif?>
            </div>
          </div>
        <?php
        endwhile;

      endif; ?>
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
