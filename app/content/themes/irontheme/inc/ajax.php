<?php
function resource_filter() {
  if ( isset( $_POST['id'] ) && $_POST['id'] != '' ): ?>

    <?php $res_video_args = array(
      'post_type' => 'resource',
      'post_status' => 'publish',
      'posts_per_page' => -1,
      'order' => 'ASC',
      'orderby' => 'post_type',
      'tax_query' => array(
        array(
          'taxonomy' => 'resource_cat',
          'field' => 'term_id',
          'terms' => array( $_POST['id'] )
        )
      ),
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
      'tax_query' => array(
        array(
          'taxonomy' => 'resource_cat',
          'field' => 'term_id',
          'terms' => array( $_POST['id'] )
        )
      ),
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

    <?php if (!$res_video->have_posts() && !$res_file->have_posts()) { ?>
      <h3><?php esc_html_e( 'Nothing Found', 'ith' ); ?></h3>
    <?php } ?>

    <?php $resource_term = get_field( 'external_links', 'term_' . $_POST['id'] );
    if ($resource_term):
      ?>
      <div class="resource-links">
        <h3>External links:</h3>

        <?php foreach ($resource_term as $link): ?>
          <div class="resource-links__item">
            <a href="<?php echo esc_url( $link['url'] ); ?>" target="_blank">
              <span class="resource-links__title"><?php echo $link['title']; ?></span>
              <span class="resource-links__url"><?php echo $link['url']; ?></span>
            </a>
          </div>
        <?php
        endforeach; ?>
      </div>
    <?php endif; ?>

  <?php endif;
  die();
}
add_action('wp_ajax_resource_filter', 'resource_filter');
add_action('wp_ajax_nopriv_resource_filter', 'resource_filter');