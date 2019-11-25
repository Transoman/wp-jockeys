<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package mytheme
 */

get_header();
?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main">

      <section class="error-404 not-found">
        <header class="page-header">
          <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'mytheme' ); ?></h1>
        </header><!-- .page-header -->

        <div class="page-content">
          <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'mytheme' ); ?></p>
        </div><!-- .page-content -->

        <div class="form-search">
          <h2>Search our articles and resources:</h2>
          <?php get_template_part( 'template-parts/search', 'form' ); ?>
        </div>

        <?php get_template_part( 'template-parts/get-in-touch' ); ?>

      </section><!-- .error-404 -->

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_footer();
