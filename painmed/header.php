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
<div class="topbar">
  <a href="mailto:info@painmed.ru">info@painmed.ru</a>
  <div class="topbar-right">
    <span>+7 (812) 640-58-98</span>
    <div class="topbar-social">
      <a href="https://vk.com/protivboli" title="ВКонтакте" target="_blank" rel="noopener">ВК</a>
      <a href="https://www.youtube.com/@СЗОИБ" title="YouTube" target="_blank" rel="noopener">YT</a>
      <a href="https://rutube.ru/channel/24339226" title="RuTube" target="_blank" rel="noopener">RT</a>
    </div>
  </div>
</div>

<!-- NAV -->
<nav class="site-nav">
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-logo">
    <div class="nav-logo-mark">P</div>
    <span class="nav-logo-text">PAINMED.RU</span>
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
    <a href="#" class="nav-login">Вход</a>
    <a href="#" class="nav-cta">Регистрация</a>
  </div>
</nav>
