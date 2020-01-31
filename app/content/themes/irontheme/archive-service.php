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
        <?php get_template_part( 'template-parts/search', 'form' ); ?>
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
                <?php the_field( 'short_description', $cat ); ?>
              </div>
            </a>
          <?php endforeach; ?>
          <div class="services-card services-card--last">
            <?php get_template_part( 'template-parts/get-in-touch' ); ?>
          </div>
        </section>

      <?php endif; ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_footer();