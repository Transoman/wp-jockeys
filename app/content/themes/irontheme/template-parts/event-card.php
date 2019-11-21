<div class="news-card">
  <div class="news-card__img-wrap">
    <a href="<?php the_permalink(); ?>">
      <?php the_post_thumbnail( 'post-card' ); ?>
    </a>
  </div>
  <h3 class="news-card__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
  <?php $date = get_field( 'date' );
  $timestamp = strtotime( $date ); ?>
  <time class="news-card__publish" datetime="<?php echo date( 'Y-m-d', $timestamp ); ?>"><?php echo date ('d/m/Y', $timestamp); ?></time>
  <a href="<?php the_permalink(); ?>" class="btn">read more ></a>
</div>