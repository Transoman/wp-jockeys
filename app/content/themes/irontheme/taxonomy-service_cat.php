<?php get_header();
$term_obj = get_queried_object(); ?>

  <section class="hero" style="background-image: url(<?php the_field( 'bg', $term_obj ); ?>);">
    <div class="container">
      <div class="hero__content">
        <h1 class="hero__title"><?php single_term_title(); ?></h1>
      </div>
    </div>
  </section>

  <div id="primary" class="content-area">
    <main id="main" class="site-main">

      <?php get_template_part( 'template-parts/breadcrumb' ); ?>

      <div class="page-content page-content--tax">
        <div class="page-content__wrap">
          <?php echo term_description(); ?>
        </div>
      </div>

      <div class="form-search">
        <h2>Search our articles and resources:</h2>
        <?php get_template_part( 'template-parts/search', 'form' ); ?>
      </div>

      <div class="services-tabs">
        <ul class="services-tabs-list">
          <li>
            <a href="#services">Services</a>
          </li>
          <li>
            <a href="#resources">Resources</a>
          </li>
        </ul>

        <div class="services-tabs__item services-tabs__item--services" id="services">
          <?php $services = get_any_post( 'service', -1, 'service_cat', $term_obj->term_id );
          if ($services->have_posts()): ?>
            <div class="services-list">
              <?php while ($services->have_posts()): $services->the_post(); ?>
                <div class="news-card">
                  <div class="news-card__img-wrap">
                    <a href="<?php the_permalink(); ?>">
                      <?php the_post_thumbnail( 'post-card' ); ?>
                    </a>
                  </div>
                  <h3 class="news-card__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                  <a href="<?php the_permalink(); ?>" class="btn">read more ></a>
                </div>
              <?php endwhile; wp_reset_postdata(); ?>
            </div>
          <?php else: ?>
            <h3><?php esc_html_e( 'Nothing Found', 'ith' ); ?></h3>
          <?php endif; ?>
        </div>

        <div class="services-tabs__item services-tabs__item--resources" id="resources">

          <?php $resource_term = get_terms( array(
            'taxonomy' => 'resource_cat',
            'hide_empty' => false
          ) );

          if ($resource_term): ?>
            <div class="resource-dropdown">
              <div class="resource-dropdown__head">Refine resources</div>
              <div class="resource-dropdown__body">
                <?php foreach ($resource_term as $item): ?>
                  <a href="#" data-term-id="<?php echo $item->term_id; ?>"><?php echo $item->name; ?></a>
                <?php endforeach; ?>
              </div>
            </div>
          <?php endif; ?>

          <div id="response" class="services-tabs__response">
            <?php $res_video_args = array(
              'post_type' => 'resource',
              'post_status' => 'publish',
              'posts_per_page' => -1,
              'order' => 'ASC',
              'orderby' => 'post_type',
              'meta_query' => array(
                array(
                  'key' => 'post_type',
                  'value' => 'video',
                  'compare' => '='
                )
              )
            );

            $res_video = new WP_Query( $res_video_args );

            if ($res_video->have_posts()): ?>

            <div class="resources-video-list">
              <?php while ($res_video->have_posts()): $res_video->the_post(); ?>
                <div class="resources-video-list__item">
                  <div class="embed-container">
                    <?php the_field( 'video_link' ); ?>
                  </div>
                  <h3 class="resources-video-list__title"><?php the_title(); ?></h3>
                </div>
              <?php endwhile; wp_reset_postdata(); ?>
            </div>
            <?php endif; ?>

            <?php $res_file_args = array(
              'post_type' => 'resource',
              'post_status' => 'publish',
              'posts_per_page' => -1,
              'order' => 'ASC',
              'orderby' => 'post_type',
              'meta_query' => array(
                array(
                  'key' => 'post_type',
                  'value' => 'file',
                  'compare' => '='
                )
              )
            );

            $res_file = new WP_Query( $res_file_args );

            if ($res_file->have_posts()): ?>

              <div class="resources-file-list">
                <?php while ($res_file->have_posts()): $res_file->the_post(); ?>
                  <div class="resources-file-list__item">
                    <div class="resources-file-list__img-wrap">
                      <?php echo wp_get_attachment_image( get_field( 'thumbnail' ), 'post-card' ); ?>
                      <div class="resources-file-list__icon">
                        <?php ith_the_icon( 'document' ); ?>
                      </div>
                    </div>
                    <h3 class="resources-file-list__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <a href="<?php the_permalink(); ?>" class="btn">read more ></a>
                  </div>
                <?php endwhile; wp_reset_postdata(); ?>
              </div>
            <?php endif; ?>

            <?php if ($resource_term):
              $list_links = [];
              foreach ($resource_term as $item) {
                $list_links[] = get_field( 'external_links', $item );
              }
             ?>
              <div class="resource-links">
                <h3>External links:</h3>

                <?php foreach ($list_links as $link_item):
                  if ($link_item != NULL):
                  foreach ($link_item as $link): ?>
                  <div class="resource-links__item">
                    <a href="<?php echo esc_url( $link['url'] ); ?>" target="_blank">
                      <span class="resource-links__title"><?php echo $link['title']; ?></span>
                      <span class="resource-links__url"><?php echo $link['url']; ?></span>
                    </a>
                  </div>
                <?php endforeach;
                  endif;
                endforeach; ?>
              </div>
            <?php endif; ?>
          </div>

        </div><!-- /.services-tabs__item -->
      </div>

      <?php get_template_part( 'template-parts/get-in-touch' ); ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer();