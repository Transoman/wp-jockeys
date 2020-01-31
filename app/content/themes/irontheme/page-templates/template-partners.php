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
                <?php $phone = get_field( 'phone' );
                  $url = get_field( 'url' );
                ?>
                <div class="partners-card">
                  <div class="partners-card__img">
                    <?php the_post_thumbnail('full'); ?>
                  </div>

                  <h3 class="partners-card__title">
	                  <?php if ($url): ?>
                      <a href="<?php echo esc_url($url); ?>" target="_blank"><?php the_title(); ?></a>
	                  <?php else: ?>
		                  <?php the_title(); ?>
	                  <?php endif; ?>
                  </h3>

                  <?php if ($phone): ?>
                    <p>
                      <a href="tel:<?php echo preg_replace( '![^0-9/+]+!', '', $phone ); ?>"><?php echo $phone; ?></a>
                    </p>
                  <?php endif; ?>

                  <p><a href="javascript:;" data-src="#partners-modal-<?php echo $id; ?>" class="partners-card__more">Read more ></a></p>

                  <div style="display: none;" class="partners-modal" id="partners-modal-<?php echo $id; ?>">
                    <div class="partners-card__img-wrap">
			                <?php the_post_thumbnail( 'thumbnail' ); ?>
                    </div>
                    <h3 class="partners-card__name"><?php the_title(); ?></h3>
                    <div class="partners-card__text">
			                <?php the_content(); ?>
                    </div>
                  </div>
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