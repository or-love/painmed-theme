<!-- FOOTER -->
<footer class="site-footer">
  <div class="footer-inner">
    <div class="footer-top">
      <div class="footer-brand">
        <div class="footer-logo">
          <span class="footer-logo-mark" aria-hidden="true">
            <svg width="14" height="14" viewBox="0 0 22 22" fill="none">
              <path d="M5 11h4l1.5-4 2 8 1.5-4h3" stroke="#fff" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </span>
          <span class="footer-logo-text">Painmed</span>
        </div>
        <p>Современная образовательная платформа для практикующих врачей. При поддержке СЗОИБ и НЭСПРИМ.</p>
        <div class="footer-social">
          <a href="https://vk.com/protivboli" target="_blank" rel="noopener">VK ↗</a>
          <a href="https://www.youtube.com/@СЗОИБ" target="_blank" rel="noopener">YouTube ↗</a>
          <a href="https://vkvideo.ru/@protivboli" target="_blank" rel="noopener">VKvideo ↗</a>
          <a href="https://rutube.ru/channel/24339226" target="_blank" rel="noopener">RuTube ↗</a>
        </div>
      </div>

      <div class="footer-col">
        <h4>Мероприятия</h4>
        <?php
        wp_nav_menu( array(
          'theme_location' => 'footer_events',
          'container'      => false,
          'items_wrap'     => '<ul>%3$s</ul>',
          'depth'          => 1,
          'fallback_cb'    => 'painmed_fallback_footer_events',
        ) );
        ?>
      </div>

      <div class="footer-col">
        <h4>Сервисы</h4>
        <?php
        wp_nav_menu( array(
          'theme_location' => 'footer_services',
          'container'      => false,
          'items_wrap'     => '<ul>%3$s</ul>',
          'depth'          => 1,
          'fallback_cb'    => 'painmed_fallback_footer_services',
        ) );
        ?>
      </div>

      <div class="footer-col">
        <h4>Контакты</h4>
        <ul>
          <li><a href="tel:+78126405898">+7 (812) 640-58-98</a></li>
          <li><a href="mailto:info@painmed.ru">info@painmed.ru</a></li>
          <li><a href="https://нэсприм.рф" target="_blank" rel="noopener">нэсприм.рф</a></li>
          <li><a href="#">Санкт-Петербург</a></li>
        </ul>
      </div>
    </div>

    <div class="footer-bottom">
      <span>&copy; <?php echo date( 'Y' ); ?> painmed.ru &middot; Сезон IX &middot; Все права защищены</span>
      <span>
        <a href="<?php echo esc_url( get_privacy_policy_url() ); ?>">Политика конфиденциальности</a>
        &nbsp;&middot;&nbsp;
        <a href="#">Пользовательское соглашение</a>
      </span>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
