<?php get_header();
$object = get_queried_object(); ?>

  <section class="hero" style="background-image: url(<?php the_field( 'hero_image', $object->name ); ?>);">
    <div class="container">
      <div class="hero__content">
        <h2 class="hero__title">Championships</h2>
      </div>
    </div>
  </section>

  <div id="primary" class="content-area">
    <main id="main" class="site-main">

      <?php get_template_part( 'template-parts/breadcrumb' ); ?>

      <section class="page-content">

        <div class="page-content__wrap">
          <?php the_field( 'text', $object->name ); ?>
        </div>

        <div class="championship">
          <h3 class="championship__title">Championships</h3>

          <?php $cshs = get_any_post( 'championships', -1 );

          if ($cshs->have_posts()):
          ?>
          <div class="filter-dropdown">
            <div class="filter-dropdown__head">Choose your championship</div>
            <div class="filter-dropdown__body">
              <?php while ($cshs->have_posts()): $cshs->the_post(); ?>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              <?php endwhile; wp_reset_postdata(); ?>
            </div>
          </div>
          <?php endif; ?>

          <?php $table = get_field( 'default_table', $object->name );

          if ($table['title']): ?>
            <h2 class="section-title"><?php echo $table['title']; ?></h2>
          <?php endif; ?>

          <?php if ($table['table']): ?>
            <div class="championship-table">
              <?php echo $table['table']; ?>
            </div>
          <?php endif; ?>

        </div>

      </section>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer();