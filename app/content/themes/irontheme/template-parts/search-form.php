<form action="<?php echo home_url( '/' );?>" method="get" class="form-search__form">
  <div class="form-group">
    <input type="text" name="s" class="form-field" placeholder="search">
    <button type="submit" class="form-search__btn">
      <?php ith_the_icon( 'search', 'form-search__btn-icon' ); ?>
    </button>
  </div>
</form>