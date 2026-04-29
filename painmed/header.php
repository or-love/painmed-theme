<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- TOPBAR -->
<div class="pm-topbar">
  <div class="pm-topbar-inner">
    <a href="mailto:info@painmed.ru" class="pm-topbar-link">info@painmed.ru</a>
    <div class="pm-topbar-right">
      <a href="tel:+78126405898" class="pm-topbar-link">+7 (812) 640-58-98</a>
      <div class="pm-topbar-social">
        <a href="https://vk.com/protivboli" title="ВКонтакте" target="_blank" rel="noopener">VK</a>
        <a href="https://www.youtube.com/@СЗОИБ" title="YouTube" target="_blank" rel="noopener">YT</a>
        <a href="https://rutube.ru/channel/24339226" title="RuTube" target="_blank" rel="noopener">RT</a>
      </div>
    </div>
  </div>
</div>

<!-- NAV -->
<nav class="site-nav">
  <div class="site-nav-inner">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-logo">
      <span class="nav-logo-mark" aria-hidden="true">
        <svg width="14" height="14" viewBox="0 0 22 22" fill="none">
          <path d="M5 11h4l1.5-4 2 8 1.5-4h3" stroke="#fff" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </span>
      <span class="nav-logo-text">Painmed</span>
    </a>

    <?php
    wp_nav_menu( array(
      'theme_location' => 'primary',
      'container'      => false,
      'menu_class'     => 'nav-links',
      'items_wrap'     => '<ul class="%2$s">%3$s</ul>',
      'depth'          => 1,
      'fallback_cb'    => 'painmed_fallback_menu',
    ) );
    ?>

    <div class="nav-actions">
      <span class="nav-badge">Сезон IX · 2026</span>
      <a href="#" class="nav-login">Войти</a>
      <a href="#" class="nav-cta">Регистрация</a>
    </div>
  </div>
</nav>
