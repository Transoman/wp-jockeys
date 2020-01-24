<?php
/**
 * Template Name: Home
 */
get_header(); ?>

<?php

if ( have_rows('home_layout') ):

  while ( have_rows('home_layout') ) : the_row();

    if ( get_row_layout() == 'hero' ): ?>

      <section class="hero" style="background-image: url(<?php the_sub_field( 'bg' ); ?>);">
        <div class="container">

          <div class="hero__content">
            <?php $title = get_sub_field( 'title' );
            $subtitle = get_sub_field( 'subtitle' );

            if ($title): ?>
              <h1 class="hero__title"><?php echo $title; ?></h1>
            <?php endif; ?>
            <?php if ($subtitle): ?>
              <p class="hero__subtitle"><?php echo $subtitle; ?></p>
            <?php endif; ?>

            <?php ith_the_icon( 'arrow-down', 'hero__icon' ); ?>
          </div>

        </div>
      </section>

    <?php elseif ( get_row_layout() == 'about' ): ?>

      <section class="about">
        <div class="container">
          <div class="about__content">
            <?php the_sub_field( 'text' ); ?>

            <?php $btn = get_sub_field( 'btn' );
            if ($btn): ?>
              <a href="<?php echo esc_url($btn['url']);?>" class="btn"><?php echo $btn['title']; ?></a>
            <?php endif; ?>
          </div>
        </div>
      </section>

    <?php elseif ( get_row_layout() == 'news' ): ?>

      <section class="last-news">
        <div class="container">
          <?php $title = get_sub_field( 'title' );
          if ($title): ?>
            <h2 class="section-title"><?php echo $title; ?></h2>
          <?php endif; ?>

          <?php $news = get_any_post( 'news', 3, '', '', 'date' );
          if ($news->have_posts()): ?>
            <div class="last-news__list">
              <?php while ($news->have_posts()): $news->the_post(); ?>
                <?php get_template_part( 'template-parts/news', 'card' ); ?>
              <?php endwhile; wp_reset_postdata(); ?>
            </div>
          <?php endif; ?>

        </div>
      </section>

    <?php elseif ( get_row_layout() == 'championship_table' ): ?>

      <section>
        <div class="container">
          <?php $title = get_sub_field( 'title' );
          if ($title): ?>
            <h2 class="section-title"><?php echo $title; ?></h2>
          <?php endif; ?>

          <?php if (have_rows( 'tables_list' )): ?>
            <div class="championship-slider swiper-container">
              <div class="swiper-wrapper">
                <?php while (have_rows( 'tables_list' )): the_row(); ?>
                  <div class="swiper-slide">
                    <div class="championship-table">
                      <?php the_sub_field( 'table' ); ?>
                    </div>
                  </div>
                <?php endwhile; ?>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          <?php endif; ?>

        </div>
      </section>

    <?php elseif ( get_row_layout() == 'partners' ): ?>

      <section class="s-partners">
        <div class="container">
          <?php $title = get_sub_field( 'title' );
          if ($title): ?>
            <h2 class="section-title"><?php echo $title; ?></h2>
          <?php endif; ?>

          <?php $partners = get_any_post( 'partner', -1 );
          if ($partners->have_posts()): ?>
            <div class="partners">
              <?php while ($partners->have_posts()): $partners->the_post(); ?>
                <div class="partners__item">
                  <?php the_post_thumbnail('full'); ?>
                </div>
            <?php endwhile; wp_reset_postdata(); ?>
            </div>
          <?php endif; ?>
        </div>
      </section>

    <?php endif;

  endwhile;
endif; ?>

<?php get_footer();