<?php
/**
 * Template Name: Team
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

        <section class="page-team">
          <?php $terms = get_terms(array(
            'taxonomy' => 'team_category'
          ));

          if ($terms):
            ?>
            <p><b>Filter by:</b></p>
            <div class="team-filter">
              <?php $i = 0; foreach ($terms as $term): ?>
                <button class="team-filter__btn btn <?php echo $i++ == 0 ? 'is-checked' : ''; ?>" data-filter=".<?= $term->slug; ?>"><?php echo $term->name; ?></button>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>

          <?php if ( $terms ): ?>
            <div class="team-list">

              <?php foreach ( $terms as $term ):

                $args = array(
                  'post_type'   => 'teams',
                  'numberposts' => -1,
                  'order' => 'ASC',
                  'tax_query'   => array(
                    array(
                      'taxonomy' => 'team_category',
                      'field' => 'term_id',
                      'terms' => $term->term_id
                    )
                  )
                );

                $posts = get_posts( $args );

                if ( $posts ):
                  foreach ( $posts as $post ): setup_postdata($post);
                    ?>
                    <div class="team-card <?php echo $term->slug; ?>">
                      <div class="team-card__img-wrap">
                        <?php the_post_thumbnail( 'medium' ); ?>
                      </div>
                      <h3 class="team-card__name"><?php the_title(); ?></h3>
                      <p class="team-card__position"><?php the_field( 'position' ); ?></p>
                      <a href="javascript:;" data-src="#team-modal-<?php echo $id; ?>" class="team-card__more">read bio ></a>

                      <div style="display: none;" class="team-modal" id="team-modal-<?php echo $id; ?>">
                        <div class="team-card__img-wrap">
                          <?php the_post_thumbnail( 'medium' ); ?>
                        </div>
                        <h3 class="team-card__name"><?php the_title(); ?></h3>
                        <p class="team-card__position"><?php the_field( 'position' ); ?></p>
                        <div class="team-card__text">
                          <?php the_content(); ?>
                        </div>
                      </div>
                    </div>
                  <?php endforeach; wp_reset_postdata(); endif; endforeach; ?>

            </div>
          <?php endif; ?>
        </section>

			<?php
			endwhile; // End of the loop.
			?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer();