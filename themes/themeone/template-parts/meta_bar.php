<div class="post-meta-bar card">
  <div class="card-section">
      <i class="fas fa-pencil-alt"></i>
      : Posted by
      <?php the_author_posts_link();?>
      on
      <?php echo get_the_date("d-m-y") ?><span class="meta-bar-separator"></span>
      <?php get_template_part('template-parts/comments_and_cat'); ?>
      <?php $tags=get_the_tags();
      if($tags):?>
      <span class="meta-bar-separator"></span>
      <i class="fas fa-tags"></i> :
      <?php
      foreach ($tags as $tag) {
        echo $tag->name . ',';
      }?>
    <?php endif; ?>
  </div>
</div>