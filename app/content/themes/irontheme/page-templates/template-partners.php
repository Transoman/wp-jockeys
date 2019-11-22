<?php
/**
 * Template Name: Partners
 */
get_header(); ?>

  <section class="hero" style="background-image: url(<?php the_post_thumbnail_url( 'full' ); ?>);">
    <div class="container">
      <div class="hero__content">
        <h2 class="hero__title"><?php the_title(); ?></h2>
      </div>
    </div>
  </section>

  <div id="primary" class="content-area">
    <main id="main" class="site-main">

      <?php get_template_part( 'template-parts/breadcrumb' ); ?>

      <?php
      while ( have_posts() ) :
        the_post(); ?>

        <section class="page-content">

          <div class="page-content__wrap">
            <?php the_content(); ?>
          </div>

        </section>

        <section class="s-partners">
          <h2 class="section-title">Commercial Partners</h2>


          <?php $partners = get_any_post( 'partner', -1 );
          if ($partners->have_posts()): ?>
            <div class="partners partners--page">
              <?php while ($partners->have_posts()): $partners->the_post(); ?>
                <div class="partners__item">
                  <?php the_post_thumbnail('full'); ?>
                </div>
              <?php endwhile; wp_reset_postdata(); ?>
            </div>
          <?php endif; ?>
        </section>

        <?php get_template_part( 'template-parts/get-in-touch' ); ?>

      <?php
      endwhile; // End of the loop.
      ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer();