<?php   get_header(); ?>
<?php if (have_posts()) :
  while (have_posts()) : the_post();?>
<div class="container">
  <h2><?php the_title(); ?></h2>
    <p>
        <?php the_content();?>
    </p>
    <p>
      <ol class="commentlist">
        <?php
        comments_template();
        ?>
      </ol>
    </p>
</div>
<?php
  endwhile;
else : echo "<p>No content found</p>";
endif;

?>

<?php   get_footer(); ?>
