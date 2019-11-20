<div class="news-card">
  <div class="news-card__img-wrap">
    <a href="<?php the_permalink(); ?>">
      <?php the_post_thumbnail( 'medium' ); ?>
    </a>
  </div>
  <h3 class="news-card__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
  <time class="news-card__publish"><?php echo get_the_date(); ?></time>
  <a href="<?php the_permalink(); ?>" class="btn">read more ></a>
</div>