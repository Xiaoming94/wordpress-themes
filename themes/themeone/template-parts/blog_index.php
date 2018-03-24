<h2>Blogposts</h2>
<hr />
<div class="grid-x grid-margin-x">
  <div class="cell medium-8 small-12">
    <?php
    if( have_posts() ):
      ?>
      <?php
      while( have_posts() ): the_post();?>
      <h3><a href=<?php the_permalink(); ?>><?php the_title(); ?></a></h3>
      <?php
        show_post_content_preview( get_the_content(), get_the_ID() );
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