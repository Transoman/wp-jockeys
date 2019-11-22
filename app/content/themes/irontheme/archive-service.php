<?php get_header(); ?>

  <section class="hero" style="background-image: url(<?php echo THEME_URL; ?>/images/content/service-bg.jpg);">
    <div class="container">
      <div class="hero__content">
        <h1 class="hero__title">Member <br>services & <br>resources</h1>
      </div>
    </div>
  </section>

  <div id="primary" class="content-area">
    <main id="main" class="site-main">

      <?php get_template_part( 'template-parts/breadcrumb' ); ?>

      <div class="form-search">
        <h2>How can we help?</h2>
        <form action="<?php echo home_url( '/' );?>" method="get" class="form-search__form">
          <div class="form-group">
            <input type="text" name="s" class="form-field" placeholder="search">
            <button type="submit" class="form-search__btn">
              <?php ith_the_icon( 'search', 'form-search__btn-icon' ); ?>
            </button>
          </div>
        </form>
      </div>

      <?php
      $cats = get_terms( array(
        'taxonomy' => 'service_cat',
        'hide_empty' => false
      ) );

      if ($cats): ?>
        <section class="services-cat">
          <?php foreach ($cats as $cat): ?>
            <a href="<?php echo get_term_link($cat->term_id); ?>" class="services-card">
              <?php echo wp_get_attachment_image( get_field( 'img', $cat ), 'cat-card' ); ?>

              <div class="services-card__info" style="background-color: <?php the_field( 'color', $cat ); ?>;">
                <h3 class="services-card__title"><?php echo $cat->name; ?></h3>
                <?php if ($cat->description): ?>
                  <?php echo apply_filters( 'the_content', $cat->description ); ?>
                <?php endif; ?>
              </div>
            </a>
          <?php endforeach; ?>
          <div class="services-card services-card--last">
            <?php get_template_part( 'template-parts/get-in-touch' ); ?>
          </div>
        </section>

      <?php endif;

      $up_events = new WP_Query( $args_up );

      if ( $up_events->have_posts() ) : ?>
        <section class="last-news">
          <h2 class="section-title">Upcoming events</h2>

          <div class="last-news__list">
            <?php
            while ( $up_events->have_posts() ):
              $up_events->the_post();
              get_template_part( 'template-parts/event', 'card' );
            endwhile; wp_reset_postdata(); ?>
          </div>

          <?php the_posts_navigation(); ?>
        </section>
      <?php endif; ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_footer();