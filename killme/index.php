<?php   get_header(); ?>

<div class="container">
  <?php
  if (have_posts()) :
    while (have_posts()) : the_post();?>
    <h2><a href='<?php the_permalink(); ?>'><?php the_title();?></a></h2>
    <p>
      <?php
        the_post_thumbnail('thumbnail');
        $content = get_the_content();
        if (str_word_count( strip_tags( $content ))>150){
          $trimmed = wp_trim_words($content, 150, '...');
          echo $trimmed . "\n";
      ?>
      <br />
      <a href='<?php the_permalink(); ?>'class="btn btn-default">Continue Reading</a>
        <?php
        } else {
          the_content();
        }
      ?>
    </p>
    <?php the_category();
    comments_number("0","1","%"); ?>
  <?php endwhile;
  else :
    echo '<p>no content found :(</p>';
  endif;

  ?>

</div>

<?php   get_footer(); ?>
