<!--
  This is a partial template for displaying a header navigation
-->

<!-- Initiate a sticky data container -->
<div data-sticky-container data-hide-for="small">
  <div data-sticky data-sticky-on="small" data-margin-top='0' data-top-anchor="banner:bottom">

    <!-- Setup Responsive vertical menu for use on mobile devices -->
    <div class="title-bar title-bar-sticky" data-responsive-toggle="responsive-menu" data-hide-for="medium">
      <button class="menu-icon" type="button" data-toggle="responsive-menu"></button>
      <div class="title-bar-title"><a href=<?php bloginfo('url'); ?> > <?php bloginfo('name'); ?> </a></div>
    </div>

    <!-- Setting Up the Navigation topbar -->
    <div class="top-bar uppercase topbar-sticky-shrink" id="responsive-menu" data-animate="hinge-in-from-top hinge-out-from-top">
      <div class="top-bar-left">

        <ul class="dropdown vertical medium-horizontal menu" data-dropdown-menu>

          <!-- First element to the left is the Site link, i.e. The link that goes to index page -->
          <li class="menu-text site-header-link hide-for-small-only">
            <a href=<?php bloginfo('url'); ?> > <?php bloginfo('name'); ?> </a>
            <span class="site-moto">
              <?php echo bloginfo('description'); ?>
            </span>

          </li>

          <!-- Loading Navigation menu from wordpress -->
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
    </div>

  </div>
</div>

<!-- End of File -->
