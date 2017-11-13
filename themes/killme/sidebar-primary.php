<div id="sidebar-primary" class="sidebar">
  <?php if (is_active_sidebar( 'sidebar-1' ) ): ?>
    <?php dynamic_sidebar( 'sidebar-1' );?>
  <?php else:?>
    <!-- TODO: Think about default widgets later -->
  <?php endif; ?>

</div>
