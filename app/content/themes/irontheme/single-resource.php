<?php get_header(); ?>

  <section class="hero" style="background-image: url(<?php echo THEME_URL; ?>/images/content/service-bg.jpg);">
    <div class="container">
      <div class="hero__content">
        <h1 class="hero__title"><?php the_title(); ?></h1>
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

          <?php
          $post_type = get_field( 'post_type' );
          $video = get_field( 'video_link' );
          $file = get_field( 'file' );

          if ($post_type == 'video'):
            the_field( 'video_link' );
          elseif ($post_type == 'file'): ?>
            <div class="file-block">
              <h4>Download</h4>
              <a href="<?php echo $file['url']; ?>" target="_blank" download><?php echo $file['title']; ?> <span><?php echo formatSizeUnits($file['filesize']); ?></span></a>
            </div>
          <?php endif; ?>
        </div>

      </section>

    <?php get_template_part( 'template-parts/get-in-touch' );

    endwhile; // End of the loop.
    ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer();