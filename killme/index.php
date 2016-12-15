<?php   get_header(); ?>

<div class="container">
  <?php
  if (have_posts()) :
    while (have_posts()) : the_post(); ?>
    <h2><a href='<?php the_permalink();?>'><?php the_title();?></a></h2>
    <p>
      <?php
        $content = get_the_content();
        $trimmed = wp_trim_words($content, 200, '...');
        echo $trimmed;
      ?>
    </p>
  <?php endwhile;
  else :
    echo '<p>no content found :(</p>';
  endif;

  ?>

</div>

<?php   get_footer(); ?>
