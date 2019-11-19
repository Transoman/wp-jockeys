<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="format-detection" content="telephone=no">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script>
  <![endif]-->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="wrapper">
  <header class="header">
    <div class="container">
      <div class="header__left">
        <div class="logo header__logo">
          <?php the_custom_logo(); ?>
        </div>
      </div>

      <div class="header__right">
        <div class="header__right-top">
          <div class="header-logos header__logos">
            <div class="header-logos__item">
              <img src="<?php echo THEME_URL; ?>/images/content/header-logo-1.png" alt="">
            </div>
            <div class="header-logos__item">
              <img src="<?php echo THEME_URL; ?>/images/content/header-logo-2.png" alt="">
            </div>
          </div><!-- /.header-logo -->

          <?php $phone = get_field( 'phone', 'option' );
          $social = get_field( 'social', 'option' );
          if ($social['facebook'] || $social['twitter'] || $social['instagram'] || $phone): ?>
            <ul class="social header__social">
              <?php if ($social['facebook']): ?>
                <li class="social__item">
                  <a href="<?php echo esc_url( $social['facebook'] ); ?>" class="social__link"><?php ith_the_icon( 'facebook', 'social__icon' ); ?></a>
                </li>
              <?php endif; ?>
              <?php if ($social['twitter']): ?>
                <li class="social__item">
                  <a href="<?php echo esc_url( $social['twitter'] ); ?>" class="social__link"><?php ith_the_icon( 'twitter', 'social__icon' ); ?></a>
                </li>
              <?php endif; ?>
              <?php if ($social['instagram']): ?>
                <li class="social__item">
                  <a href="<?php echo esc_url( $social['instagram'] ); ?>" class="social__link"><?php ith_the_icon( 'instagram', 'social__icon' ); ?></a>
                </li>
              <?php endif; ?>
              <?php if ($phone): ?>
                <li class="social__item">
                  <a href="tel:<?php echo preg_replace( '![^0-9/+]+!', '', $phone ); ?>" class="social__link"><?php ith_the_icon( 'phone', 'social__icon' ); ?></a>
                </li>
              <?php endif; ?>
            </ul>
          <?php endif; ?>

          <?php if ($phone): ?>
            <div class="phone header__phone">
              <p class="phone__descr">We’re here to help:</p>
              <a href="tel:<?php echo preg_replace( '![^0-9/+]+!', '', $phone ); ?>" class="phone__tel"><?php echo $phone; ?></a>
            </div>
          <?php endif; ?>
        </div>
        <div class="header__right-bottom">
          <nav class="nav header__nav">
            <button type="button" class="nav__close"></button>
            <?php
            wp_nav_menu( array(
              'theme_location' => 'primary',
              'menu'            => '',
              'container'       => '',
              'container_class' => '',
              'container_id'    => '',
              'menu_class'      => 'nav-list',
              'menu_id'         => '',
            ) );
            ?>

            <div class="nav__mobile">
              <div class="header-logos nav__logos">
                <div class="header-logos__item">
                  <img src="<?php echo THEME_URL; ?>/images/content/header-logo-1.png" alt="">
                </div>
                <div class="header-logos__item">
                  <img src="<?php echo THEME_URL; ?>/images/content/header-logo-2.png" alt="">
                </div>
              </div><!-- /.header-logo -->

              <?php $phone = get_field( 'phone', 'option' );
              $social = get_field( 'social', 'option' );
              if ($social['facebook'] || $social['twitter'] || $social['instagram'] || $phone): ?>
                <ul class="social nav__social">
                  <?php if ($social['facebook']): ?>
                    <li class="social__item">
                      <a href="<?php echo esc_url( $social['facebook'] ); ?>" class="social__link"><?php ith_the_icon( 'facebook', 'social__icon' ); ?></a>
                    </li>
                  <?php endif; ?>
                  <?php if ($social['twitter']): ?>
                    <li class="social__item">
                      <a href="<?php echo esc_url( $social['twitter'] ); ?>" class="social__link"><?php ith_the_icon( 'twitter', 'social__icon' ); ?></a>
                    </li>
                  <?php endif; ?>
                  <?php if ($social['instagram']): ?>
                    <li class="social__item">
                      <a href="<?php echo esc_url( $social['instagram'] ); ?>" class="social__link"><?php ith_the_icon( 'instagram', 'social__icon' ); ?></a>
                    </li>
                  <?php endif; ?>
                  <?php if ($phone): ?>
                    <li class="social__item">
                      <a href="tel:<?php echo preg_replace( '![^0-9/+]+!', '', $phone ); ?>" class="social__link"><?php ith_the_icon( 'phone', 'social__icon' ); ?></a>
                    </li>
                  <?php endif; ?>
                </ul>
              <?php endif; ?>

              <?php if ($phone): ?>
                <div class="phone nav__phone">
                  <p class="phone__descr">We’re here to help:</p>
                  <a href="tel:<?php echo preg_replace( '![^0-9/+]+!', '', $phone ); ?>" class="phone__tel"><?php echo $phone; ?></a>
                </div>
              <?php endif; ?>
            </div>
          </nav>

          <div class="nav-overlay"></div>
        </div>

        <button type="button" class="nav-toggle">
          <span class="nav-toggle__line"></span>
        </button>
      </div>

    </div>
  </header><!-- /.header-->

  <div class="content">