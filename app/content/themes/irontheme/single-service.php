<?php get_header(); ?>

  <section class="hero" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
    <div class="container">
      <div class="hero__content">
        <h2 class="hero__title"><?php echo get_the_terms(get_the_ID(), 'service_cat')[0]->name; ?></h2>
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
      $posts = get_field( 'resource_key' );

      if ($posts): ?>

        <h2 class="section-title">Key resources</h2>

        <div class="resources-file-list">
	      <?php foreach( $posts as $post): ?>
		      <?php setup_postdata($post); ?>
		      <?php $type = get_field( 'post_type' ); ?>
            <div class="resources-file-list__item">
              <div class="resources-file-list__img-wrap">
					      <?php echo wp_get_attachment_image( get_field( 'thumbnail' ), 'post-card' ); ?>
                <div class="resources-file-list__icon">
	                <?php if ($type == 'file'): ?>
		                <?php ith_the_icon( 'document' ); ?>
	                <?php elseif ($type == 'link'): ?>
		                <?php ith_the_icon( 'foreign' ); ?>
	                <?php endif; ?>
                </div>
              </div>

	            <?php
	            $url = null;
	            if ($type == 'file' && get_field( 'file' )) {
		            $url = get_field( 'file' )['url'];
	            }
              elseif ($type == 'link' && get_field( 'link' )) {
		            $url = get_field( 'link' );
	            }
	            ?>

              <h3 class="resources-file-list__title"><a href="<?php echo $url; ?>" target="_blank"><?php the_title(); ?></a></h3>
            </div>
		      <?php endforeach; wp_reset_postdata(); ?>
        </div>

    <?php endif;

      get_template_part( 'template-parts/get-in-touch' ); ?>

      <div class="form-search">
        <h2>Search our articles and resources:</h2>
        <?php get_template_part( 'template-parts/search', 'form' ); ?>
      </div>

    <?php endwhile; // End of the loop.
    ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer();