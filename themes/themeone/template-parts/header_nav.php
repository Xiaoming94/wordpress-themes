<div class="title-bar" data-responsive-toggle="responsive-menu" data-hide-for="medium">
  <button class="menu-icon" type="button" data-toggle="responsive-menu"></button>
  <div class="title-bar-title">Menu</div>
</div>
<div class="top-bar-bg" id="responsive-menu">
  <div class="grid-container">
    <nav class="top-bar">
      <?php
      if(has_nav_menu('primary')){
        $args = array(
          'theme_location' => 'primary',
          'menu_class'     => 'dropdown vertical medium-horizontal menu',
          'items_wrap'     => '<ul id="%1$s" class="%2$s" data-dropdown-menu>%3$s</ul>'
        );
        wp_nav_menu( $args );
      } else {

        ?>
        <ul id="menu" class="dropdown vertical medium-horizontal menu" data-dropdown-menu>
        <?php
        show_default_nav();
        ?>
        </ul>
      <?php
      }
      ?>
    </nav>
  </div>
</div>
