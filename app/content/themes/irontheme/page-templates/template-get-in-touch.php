<?php
/**
 * Template Name: Get In Touch
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

				<?php if (have_rows( 'useful_contacts' )): ?>
					<div class="useful-list">
						<?php while (have_rows( 'useful_contacts' )): the_row(); ?>
							<div class="useful-list__item">
								<h3 class="useful-list__title"><?php the_sub_field( 'title' ); ?></h3>

                <?php $url = get_sub_field( 'url' );

                if ($url): ?>
								<a href="<?php echo esc_url(get_sub_field( 'url' )); ?>" class="useful-list__img"><?php echo wp_get_attachment_image( get_sub_field( 'logo' ), 'full' ); ?></a>
                <?php else: ?>
                  <div class="useful-list__img"><?php echo wp_get_attachment_image( get_sub_field( 'logo' ), 'full' ); ?></div>
                <?php endif; ?>

								<?php $phone = get_sub_field( 'phone' );

								if ($phone): ?>
									<a href="tel:<?php echo $phone; ?>" class="useful-list__tel">TEL: <?php echo $phone; ?></a>
								<?php endif; ?>
							</div>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>

			<?php
			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();
