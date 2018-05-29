<?php
if( have_posts() ):

  ?>
  <?php
  while( have_posts() ): the_post();
    $preview_word_count = 120;?>
    <h3 class="post-title">
      <a href=<?php the_permalink(); ?>><?php the_title(); ?></a>
      <?php
        edit_post_link( __("[Edit Post]"),"  ","  ",get_the_ID(),"edit-post-link" );
        ?>
    </h3>
    <div class="post-content-preview grid-x grid-margin-x">

      <?php
      if ( has_post_thumbnail() || post_have_image( get_the_ID() ) ):
        ?>
        <div class="post-thumbnail-container cell medium-4 small-12">
          <?php show_post_image( get_the_ID() ) ?>
        </div>
        <div class="cell medium-8 small-12 post-preview-margin">
          <?php show_post_content_preview( get_the_content(), get_the_permalink(), $preview_word_count ); ?>
        </div>
        <?php
      else:
        ?>
        <div class="cell small-up-12">
          <?php
          $preview_word_count = 150;
          show_post_content_preview( get_the_content(), get_the_permalink(), $preview_word_count );
          ?>
        </div>
      <?php endif; ?>

    </div>
    <?php get_template_part("template-parts/meta_bar")?>
    <?php
  endwhile;
endif;
?>
