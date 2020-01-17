<?php get_header(); ?>

  <section class="hero" style="background-image: url(<?php echo THEME_URL; ?>/images/content/news-bg.jpg);">
    <div class="container">
      <div class="hero__content">
        <h1 class="hero__title">News</h1>
      </div>
    </div>
  </section>

  <div id="primary" class="content-area">
    <main id="main" class="site-main">

      <?php get_template_part( 'template-parts/breadcrumb' ); ?>

      <?php if ( have_posts() ) : ?>
        <section class="last-news">
          <h2 class="section-title">Latest news</h2>

          <div class="filter-dropdown filter-news">
            <div class="filter-dropdown__head">News Type</div>
            <div class="filter-dropdown__body">
              <a href="#" data-news-type="general">General News</a>
              <a href="#" data-news-type="statement">Statements/Reports</a>
              <a href="#" data-news-type="pja">PJA Newsletters</a>
            </div>
          </div>

          <div class="last-news__list" id="response">
            <?php
            while ( have_posts() ):
              the_post();
              get_template_part( 'template-parts/news', 'card' );
            endwhile; ?>
          </div>

          <?php the_posts_navigation(); ?>
        </section>

      <?php else :

        get_template_part( 'template-parts/content', 'none' ); ?>
      <?php endif; ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_footer();