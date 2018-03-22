<?php
/**
 * comments.php file of ThemeOne - Wordpress theme by Xiaoming94
 * Template file for displaying comments in this theme
 *
 * @link https://github.com/Xiaoming94/wordpress-theme/themes/themeone
 * @version 0.1.0
 * @author XiaoMing
 */

 /**
  * Test For password
  */

if ( post_password_required() ){
  return;
}
?>
<div id="comments" class="comments-area">
  <?php
  if ( have_comments() ):
  ?>
    <ol class="comment-list">
      <?php
        $comment_args = array(
          'avatar_size' => 80,
          'style'       => 'ol',
          'short_ping'  => true,
          'reply_text'  => '<i class="fas fa-reply"></i> Reply'
        );

        wp_list_comments( $comment_args );
      ?>
    </ol>
  <?php
  endif;
  ?>
<?php
  $comment_form_args = array (
    'class_submit'  => 'button text-right'
  );
  comment_form( $comment_form_args );
?>

</div>
