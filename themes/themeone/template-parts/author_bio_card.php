<div class="author-bio card">
  <div class="card-section">
    <div class="grid-x grid-margin-x">
      <div class="cell medium-2 small-2">
        <?php echo get_avatar( get_the_author_meta('ID') ); ?>
      </div>
      <div class="cell medium-10 small-10">
        <h2 class="author-bio-title">Author's bio</h2>
        <?php the_author_meta( 'description' ); ?>
        <hr />
        <h2 class="author-bio-title">Contact information:</h3>
        <ul class="contact-info-list">
          <li>
            <b>Email:</b> <?php the_author_meta( 'user_email' ); ?>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>