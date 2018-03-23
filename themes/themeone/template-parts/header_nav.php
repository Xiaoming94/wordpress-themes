<div class="title-bar" data-responsive-toggle="responsive-menu" data-hide-for="medium">
  <button class="menu-icon" type="button" data-toggle="responsive-menu"></button>
  <div class="title-bar-title">Menu</div>
</div>
<div class="top-bar uppercase" id="responsive-menu" data-animate="hinge-in-from-top hinge-out-from-top">
  <div class="top-bar-left">
    <ul class="dropdown vertical medium-horizontal menu" data-dropdown-menu>
      <li class="menu-text site-header-link">
        <a href=<?php bloginfo('url'); ?> > <?php bloginfo('name'); ?> </a>
        <?php echo bloginfo('description'); ?>
      </li>
      <?php
      if(has_nav_menu('primary')){
        $args = array(
          'theme_location' => 'primary',
          'items_wrap'     => '',
          'item_spacing'   => 'discard'
        );
        wp_nav_menu( $args );
      } else {

        show_default_nav();

      }
      ?>
    </ul>

  </div>
  <div class="top-bar-right">
    <ul class="menu">
      <li>

      </li>
    </ul>
  </div>
</div>
