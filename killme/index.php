<?php   get_header(); ?>

<div class="container">
  <div class="row">
    <?php
    if (have_posts()) :
      while (have_posts()) : the_post();?>
      <h2><a href='<?php the_permalink(); ?>'><?php the_title();?></a></h2>

        <?php if (has_post_thumbnail()) : ?>
          <div class="col-sm-2">
            <?php
            $attr = array( 'class' => 'alignleft', 'align' => 'left');
            the_post_thumbnail('thumbnail',$attr); ?>
          </div>
        <?php endif; ?>
        <p>
          <?php
          $content = get_the_content();
          if (str_word_count( strip_tags( $content ))>100):
            $trimmed = wp_trim_words($content, 100, '...');
            echo $trimmed . "\n"; ?>
            <br />
            <a href='<?php the_permalink(); ?>'class="btn btn-default">Continue Reading</a>
          <?php
          else :
            the_content();
          endif;
          ?>
        </p>
        <?php the_category(); ?>
        <span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
        <?php comments_number("0","1","%"); ?>
      <?php endwhile;
      else :
        echo '<p>no content found :(</p>';
      endif;

      ?>
  </div>
</div>

<?php   get_footer(); ?>
