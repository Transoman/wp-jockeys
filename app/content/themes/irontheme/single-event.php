<?php get_header(); ?>

  <section class="hero" style="background-image: url(<?php echo THEME_URL; ?>/images/content/event-bg.jpg);">
    <div class="container">
      <div class="hero__content">
        <h2 class="hero__title">Events</h2>
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

        <h1 class="section-title"><?php the_title(); ?></h1>

        <div class="page-content__wrap">
          <?php the_content(); ?>
        </div>

      </section>

    <?php
    endwhile; // End of the loop.
    ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer();