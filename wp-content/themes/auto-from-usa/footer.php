<footer class="footer">
  <div class="container">
    <div class="footer__inner">
    <?php the_custom_logo(); ?>
      <div class="social footer__social">
        <a href="<?php the_field('instagram-link'); ?>" class="social__link"><img src="<?php bloginfo('template_url');?>/assets/images/instagram.svg" alt="иконка инстаграма." class="social__img"></a>
        <a href="<?php the_field('telegram-link'); ?>" class="social__link"><img src="<?php bloginfo('template_url');?>/assets/images/telegram.svg" alt="иконка телеграма." class="social__img"></a>
        <a href="<?php the_field('whatsapp-link'); ?>" class="social__link"><img src="<?php bloginfo('template_url');?>/assets/images/whatsapp.svg" alt="иконка ватсапа." class="social__img"></a>
        <a href="<?php the_field('facebook-link'); ?>" class="social__link"><img src="<?php bloginfo('template_url');?>/assets/images/facebook.svg" alt="иконка файсбука." class="social__img"></a>
      </div>
      <a href="<?php echo get_page_link(77); ?>" class="footer__copy">Политика конфиденциальности</a>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
  
</body>
</html>