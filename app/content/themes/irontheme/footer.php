  </div><!-- /.content -->

  <footer class="footer">
    <div class="container">
      <div class="footer__left">
        <p>Copyright The Professional Jockeys Association 2013</p>

        <?php if (has_nav_menu( 'footer' )) {
          wp_nav_menu( array(
            'theme_location' => 'footer',
            'menu'            => '',
            'container'       => '',
            'container_class' => '',
            'container_id'    => '',
            'menu_class'      => 'footer__menu',
            'menu_id'         => '',
          ) );
        } ?>
      </div>
      <div class="footer__right">
        <?php $address = get_field( 'address', 'option' );
        $phone = get_field( 'phone', 'option' );
        $email = get_field( 'email', 'option' );

        if ($address): ?>
          <div class="footer__address">
            <?php echo $address; ?>
          </div>
        <?php endif; ?>

        <div class="footer__contact">
          <?php if ($phone): ?>
            <a href="tel:<?php echo preg_replace( '![^0-9/+]+!', '', $phone ); ?>" class="footer__phone"><?php echo $phone; ?></a>
            <br>
          <?php endif; ?>

          <?php if ($email): ?>
            <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </footer><!-- #colophon -->

</div><!-- /.wrapper -->

<?php wp_footer(); ?>

</body>
</html>
