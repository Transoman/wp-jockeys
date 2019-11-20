<?php get_header(); ?>

  <section class="hero" style="background-image: url(<?php echo THEME_URL; ?>/images/content/news-bg.jpg);">
    <div class="container">
      <div class="hero__content">
        <h2 class="hero__title">News</h2>
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

    <?php $args = array(
      'post_type' => 'news',
      'posts_per_page' => 3,
      'post_status' => 'publish',
      'order' => 'ASC',
      'post__not_in' => array( get_the_ID() )
    );

    $similar = new WP_Query( $args );

    if ($similar->have_posts()): ?>

    <div class="similar-post">
      <?php while ($similar->have_posts()): $similar->the_post();
        get_template_part( 'template-parts/news', 'card' );
      endwhile; wp_reset_postdata(); ?>
    </div>

    <?php get_template_part( 'template-parts/get-in-touch' ); ?>

    <?php endif;
    endwhile; // End of the loop.
    ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer();