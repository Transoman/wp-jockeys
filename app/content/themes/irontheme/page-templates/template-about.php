<?php
/**
 * Template Name: About
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

        <?php

        if ( have_rows('about_layout') ):

          while ( have_rows('about_layout') ) : the_row();

            if ( get_row_layout() == 'advantages' ): ?>

            <?php if (have_rows( 'list' )): ?>
              <section class="advantages">
                <?php while (have_rows( 'list' )): the_row(); ?>
                  <div class="advantages__item">
                    <h2 class="advantages__title"><?php the_sub_field( 'title' ); ?></h2>
                    <?php the_sub_field( 'text' ); ?>
                  </div>
                <?php endwhile; ?>
              </section>
            <?php endif; ?>

            <?php elseif ( get_row_layout() == 'cta' ): ?>

              <div class="get-in-touch">
                <h2><?php the_sub_field( 'title' ); ?></h2>
                <h3><?php the_sub_field( 'subtitle' ); ?></h3>
                <?php $btn = get_sub_field( 'btn' );
                if ($btn): ?>
                  <a href="<?php echo esc_url( $btn['url'] ); ?>" class="btn btn--red"><?php echo $btn['title']; ?></a>
                <?php endif; ?>
              </div>

            <?php elseif ( get_row_layout() == 'team' ): ?>

              <section class="s-team">
                <?php $title = get_sub_field( 'title' );
                if ($title): ?>
                  <h2 class="section-title"><?php echo $title; ?></h2>
                <?php endif; ?>

                <?php if (have_rows( 'list' )): ?>
                  <div class="team swiper-container">
                    <div class="swiper-wrapper">
                      <?php while (have_rows( 'list' )): the_row(); ?>
                        <div class="team__item swiper-slide">
                          <div class="team__img-wrap">
                            <?php echo wp_get_attachment_image( get_sub_field( 'photo' ), 'medium' ); ?>
                          </div>
                          <h3 class="team__name"><?php the_sub_field( 'name' ); ?></h3>
                          <p class="team__position"><?php the_sub_field( 'position' ); ?></p>
                          <a href="#" class="team__more">read bio ></a>
                        </div>
                      <?php endwhile; ?>
                    </div>
                    <div class="swiper-pagination"></div>
                  </div>
                <?php endif; ?>
              </section>

            <?php endif;

          endwhile;
        endif; ?>

      <?php
      endwhile; // End of the loop.
      ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer();
