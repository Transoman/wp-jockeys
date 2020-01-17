<div class="news-card">
  <?php $news_type = get_field( 'news_type' );

  $link = get_permalink();
  $target = false;

  if ($news_type) {
    switch ($news_type) {
      case 'statement':
        if (get_field( 'statements' )) {
          $link = get_field( 'statements' );
          $target = true;
        }
        break;
      case 'pja':
        if (get_field( 'pja_newsletters' )) {
          $link = get_field( 'pja_newsletters' );
          $target = true;
        }
        break;
      default:
        $link = get_permalink();
    }
  }
  ?>

  <div class="news-card__img-wrap">
    <a href="<?php echo $link; ?>"<?php echo $target ? ' target="_blank"' : ''; ?>>
      <?php the_post_thumbnail( 'post-card' ); ?>
    </a>
  </div>
  <h3 class="news-card__title"><a href="<?php echo $link; ?>"<?php echo $target ? ' target="_blank"' : ''; ?>><?php the_title(); ?></a></h3>
  <time class="news-card__publish" datetime="<?php echo get_the_time( 'Y-m-d' ); ?>"><?php echo get_the_date(); ?></time>
  <a href="<?php echo $link; ?>"<?php echo $target ? ' target="_blank"' : ''; ?> class="btn">read more ></a>
</div>