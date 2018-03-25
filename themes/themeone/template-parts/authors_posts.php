<?php
if( have_posts() ):

  $preview_word_count = 120;
  ?>
  <h3>Posts written by <?php the_author(); ?></h3>
  <hr />
  <?php
  while( have_posts() ): the_post();?>
  <h3>
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
        <div class="cell">
          <?php show_post_content_preview( get_the_content(), get_the_permalink(), $preview_word_count ); ?>
        </div>
      <?php endif; ?>

  </div>
  <div class="post-meta-bar card">
    <div class="card-section grid-x grid-margin-x">
      <div class="cell medium-6 small-12">
        <i class="fas fa-pencil-alt"></i>
        Posted on <?php echo get_the_date(); ?>
      </div>
      <div class="cell medium-6 small-12 text-right">
        <?php get_template_part('template-parts/comments_and_cat'); ?>
      </div>
    </div>
  </div>
  <?php
  endwhile;
endif;
?>