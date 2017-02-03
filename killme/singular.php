<?php   get_header(); ?>
<?php if (have_posts()) :
  while (have_posts()) : the_post();?>
  <div class="col-md-9 col-sm-8 col-xs-12 content">
    <div class="container-fluid">
      <h2><?php the_title(); ?></h2>
      <p>
        <?php the_content();?>
      </p>
      <p>
        <div id="comment-div">
          <?php
          comments_template();
          ?>
        </div>
      </p>
    </div>
  </div>
<?php
  endwhile;
else : echo "<p>No content found</p>";
endif;

?>

<?php   get_footer(); ?>
