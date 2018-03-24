<!-- Header Link file -->

<div class="header-image">
  <?php
    if ( get_header_image() ) :

      $custom_header = get_custom_header();
      $img_alt = get_bloginfo( 'name', 'display' );
      ?>
      <img src="<?php header_image(); ?>"
           alt="<?php echo esc_attr( $img_alt ); ?>"' />
    <?php
  endif; ?>
</div>
