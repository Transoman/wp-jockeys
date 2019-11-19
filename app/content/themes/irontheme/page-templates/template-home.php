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

    <?php elseif( get_row_layout() == 'about' ): ?>

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

    <?php elseif( get_row_layout() == 'news' ): ?>

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
                <div class="news-card">
                  <div class="news-card__img-wrap">
                    <a href="<?php the_permalink(); ?>">
                      <?php the_post_thumbnail( 'medium' ); ?>
                    </a>
                  </div>
                  <h3 class="news-card__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                  <time class="news-card__publish"><?php echo get_the_date(); ?></time>
                  <a href="<?php the_permalink(); ?>" class="btn">read more ></a>
                </div>
              <?php endwhile; ?>
            </div>
          <?php endif; ?>

        </div>
      </section>

    <?php endif;

  endwhile;
endif; ?>

<?php get_footer();