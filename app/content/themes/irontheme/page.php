<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mytheme
 */

get_header();
?>

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
      the_post();

      get_template_part( 'template-parts/content', 'page' );

      // If comments are open or we have at least one comment, load up the comment template.
      if ( comments_open() || get_comments_number() ) :
        comments_template();
      endif;

    endwhile; // End of the loop.
    ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_footer();
