<?php   get_header(); ?>

<div class="container">
  <?php
  if (have_posts()) :
    while (have_posts()) : the_post();?>
    <h2><a href='<?php $permalink ?>'><?php the_title();?></a></h2>
    <p>
      <?php
        $content = get_the_content();
        if (str_word_count( strip_tags( $content ))>150){
          $trimmed = wp_trim_words($content, 150, '...');
          echo $trimmed;
      ?>

        <?php
        } else {
          the_content();
        }
      ?>
    </p>
  <?php endwhile;
  else :
    echo '<p>no content found :(</p>';
  endif;

  ?>

</div>

<?php   get_footer(); ?>
