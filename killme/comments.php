<?php if(!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) : ?>
	<?php die('You can not access this page directly!'); ?>
<?php endif; ?>
<div id="comments" class="comments-area">
  <?php if (have_comments() ) :?>
    <h2>
      <span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
      <?php comments_number("0","1","%"); ?>
      Comments:
    </h2>
    <ol class="Comments-list">
      <?php
        $args = array(
          'style' => 'ol',
          'short_ping' => true,
          'avatar_size' => 60
        );
        wp_list_comments($args);
      ?>
    </ol>
  <?php endif; ?>
  <?php comment_form(); ?>
</div>
