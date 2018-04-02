<div id="footer-sidebar" class="secondary widget-area">
  <?php
    if( is_active_sidebar( 'footer-sidebar-1' ) ):
    ?>
    <div class="grid-x grid-margin-x">
      <?php dynamic_sidebar('footer-sidebar-1'); ?>
    </div>

    <?php
    endif;
  ?>
</div>