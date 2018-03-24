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