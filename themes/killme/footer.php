        <div class="col-md-3 col-sm-4 col-xs-12 sidebar">
          <div class="container-fluid">
            <?php get_sidebar('primary'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-container">
    <div class="container">
      <footer class="site-footer">
        <?php
        $args = array(
          'theme_location' => 'footer'
        );
        ?>
        <?php wp_nav_menu( $args ); ?>
        <p><?php bloginfo('name'); ?> - &copy;<?php echo date('Y'); ?></p>
      </footer>
    </div>
  </div>
</div>
<?php wp_footer();?>
</body>
</html>