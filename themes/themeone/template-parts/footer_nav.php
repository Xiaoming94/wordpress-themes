<nav>
  <?php
    if(has_nav_menu('footer')){

      // Load Footer nav
      $args = array(
        'theme_location' => 'footer',
        'menu_class'     => 'vertical menu'
      );
      wp_nav_menu( $args );
    } else {
    ?>
    <ul class="vertical menu">
      <?php
        show_default_nav();
      ?>
    </ul>
    <?php
    }
  ?>
</nav>
