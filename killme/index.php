<?php   get_header(); ?>

<div class="container">
  <div class="row">
    <?php
    if (have_posts()) :
      while (have_posts()) : the_post();?>
      <h2><a href='<?php the_permalink(); ?>'><?php the_title();?></a></h2>
        <p>
          <?php
          $attr = array( 'class' => 'alignleft thumbnail', 'align' => 'left');
          the_post_thumbnail('thumbnail',$attr); ?>

          <?php
          $content = get_the_content();
          if (str_word_count( strip_tags( $content ))>140):
            $trimmed = wp_trim_words($content, 140, '...');
            echo $trimmed . "\n"; ?>
            <div class="continue-button-div">
              <a href='<?php the_permalink(); ?>'class="btn btn-default continue-btn">Continue Reading</a>
            </div>
          <?php
          else :
            the_content();
          endif;
          ?>
        </p>
        <div class="post-data">
          <nav>
            <ul>
              <li><?php the_category(); ?></li>
              <li>
                <span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
                <?php comments_number("0","1","%"); ?>
              </li>
            </ul>
        </div>
      <?php endwhile;
      else :
        echo '<p>no content found :(</p>';
      endif;

      ?>
  </div>
</div>

<?php   get_footer(); ?>
