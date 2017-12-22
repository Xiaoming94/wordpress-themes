<!-- End Site Content div -->
</div>
<footer class="site-footer">

  <div class="grid-container">
    <nav>
      <?php
        $args = array(
          'theme_location' => 'footer'
        );

        wp_nav_menu( $args );
      ?>
    </nav>
    <ul>
      <li>E-Mail: <a href="mailto:mail@xiaoming.se">mail@xiaoming.se</a></li>
      <li>Source code can be found in <a href="https://github.com/Xiaoming94/wordpress-theme"></a> </li>
    </ul>
    Wordpress theme by XiaoMing
    &copy; Henry Yang <a href="https://xiaoming.se">(XiaoMing)</a> - 2017
  </div>
</footer>
<!-- End background div -->
</div>
<?php wp_footer(); ?>
</body>
</html>
