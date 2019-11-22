<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ith
 */

?>

<section <?php post_class( 'page-content' ); ?> id="post-<?php the_ID(); ?>">
  <div class="page-content__wrap">
    <?php the_content(); ?>
  </div>
</section>