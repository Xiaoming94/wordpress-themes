<!-- Header Link file -->

<div class="custom-site-header">
  <div class="header-image-media">
    <?php
    if ( get_header_image() ) :

      $custom_header = get_custom_header();
      $img_alt = get_bloginfo( 'name', 'display' );
      ?>
      <img src="<?php header_image(); ?>"
      alt="<?php echo esc_attr( $img_alt ); ?>"
      sizes="100vw"
      width="<?php echo absint( $custom_header->width )?>"
      height="<?php echo absint( $custom_header->height )?>"/>
      <?php
    endif; ?>
  </div>
</div>
