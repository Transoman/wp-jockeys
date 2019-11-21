<?php get_header(); ?>

  <section class="hero" style="background-image: url(<?php echo THEME_URL; ?>/images/content/event-bg.jpg);">
    <div class="container">
      <div class="hero__content">
        <h1 class="hero__title">Events</h1>
      </div>
    </div>
  </section>

  <div id="primary" class="content-area">
    <main id="main" class="site-main">

      <?php get_template_part( 'template-parts/breadcrumb' ); ?>

      <?php
      $args_up = array(
        'post_type' => 'event',
        'posts_per_page' => -1,
        'post_status' => 'publish',
        'order' => 'ASC',
        'orderby' => 'date',
        'meta_query' => array(
          array(
            'key' => 'date',
            'value' => date( 'Ymd', time() ),
            'compare' => '>='
          )
        )
      );

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

      <?php
      $args_past = array(
        'post_type' => 'event',
        'posts_per_page' => -1,
        'post_status' => 'publish',
        'order' => 'ASC',
        'orderby' => 'date',
        'meta_query' => array(
          array(
            'key' => 'date',
            'value' => date( 'Ymd', time() ),
            'compare' => '<'
          )
        )
      );

      $past_events = new WP_Query( $args_past );

      if ( $past_events->have_posts() ) : ?>
        <section class="last-news">
          <h2 class="section-title">Past events</h2>

          <div class="last-news__list">
            <?php
            while ( $past_events->have_posts() ):
              $past_events->the_post();
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