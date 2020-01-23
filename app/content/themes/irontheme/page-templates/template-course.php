<?php
/**
 * Template Name: Course
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

				<section>
					<?php $terms = get_terms(array(
						'taxonomy' => 'course_category'
					));

					if ($terms):
						?>
						<div class="course">
							<?php foreach ($terms as $term): ?>
								<?php $args = array(
									'post_type'   => 'courses',
									'numberposts' => -1,
									'orderby' => 'meta_value',
									'meta_key' => 'date',
									'order' => 'ASC',
									'tax_query'   => array(
										array(
											'taxonomy' => 'course_category',
											'field' => 'term_id',
											'terms' => $term->term_id
										)
									)
								);

								$posts = get_posts( $args );

								if ($posts): ?>
                  <div class="course__item">
                    <h3 class="course__title"><?php echo $term->name; ?></h3>

                    <?php if (term_description($term)): ?>
                      <div class="course__descr">
                        <?php echo term_description($term); ?>
                      </div>
                    <?php endif; ?>

                      <ul class="course-list">
                        <?php foreach ( $posts as $post ): setup_postdata($post); ?>
                          <?php $now_time = time();
                          $time = strtotime(get_field( 'date' ));
                          $end_time = strtotime( "tomorrow", $time ) - 1;

                          if ($now_time >= $end_time) {
                            wp_delete_post(get_the_ID());
                            continue;
                          }

                          ?>
                          <li class="course-list__item">
                            <span class="course-list__date">
                              <?php
                              echo date( 'M j', $time ); ?>
                            </span>
                            <span class="course-list__title"><?php the_title(); ?></span>
                          </li>
                        <?php endforeach; wp_reset_postdata(); ?>
                      </ul>
                  </div>
								<?php endif; ?>
							<?php endforeach; ?>
						</div>
					<?php endif; ?>
				</section>

			<?php
			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();