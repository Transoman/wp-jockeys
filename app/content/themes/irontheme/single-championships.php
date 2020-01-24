<?php
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

					<h2 class="section-title"><?php the_title(); ?></h2>

					<div class="page-content__wrap">
						<?php the_content(); ?>
					</div>

				</section>

			<?php
			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();