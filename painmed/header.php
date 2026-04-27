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
    <?php if ( is_user_logged_in() ) : ?>
      <a href="<?php echo esc_url( home_url( '/account/' ) ); ?>" class="nav-cta">Личный кабинет</a>
    <?php else : ?>
      <a href="#" class="nav-login" id="nav-login-btn">Вход</a>
      <a href="#" class="nav-cta"   id="nav-register-btn">Регистрация</a>
    <?php endif; ?>
  </div>
</nav>

<?php if ( ! is_user_logged_in() ) : ?>

<!-- AUTH OVERLAY -->
<div class="auth-overlay" id="auth-overlay"></div>

<!-- MODAL: ВХОД -->
<div class="auth-modal" id="modal-login">
  <div class="auth-modal-head">
    <h3>Вход в аккаунт</h3>
    <button class="auth-close" aria-label="Закрыть">×</button>
  </div>
  <div class="auth-modal-body">
    <div class="auth-field">
      <label for="login-email">Email</label>
      <input type="email" id="login-email" placeholder="doctor@example.com" autocomplete="email">
    </div>
    <div class="auth-field">
      <label for="login-password">Пароль</label>
      <input type="password" id="login-password" placeholder="••••••••" autocomplete="current-password">
    </div>
    <div class="auth-msg" id="login-msg"></div>
    <button class="auth-submit" id="login-submit">Войти</button>
    <div class="auth-switch">Нет аккаунта? <a href="#" id="switch-to-register">Зарегистрироваться</a></div>
  </div>
</div>

<!-- MODAL: РЕГИСТРАЦИЯ -->
<div class="auth-modal" id="modal-register">
  <div class="auth-modal-head">
    <h3>Регистрация</h3>
    <button class="auth-close" aria-label="Закрыть">×</button>
  </div>
  <div class="auth-modal-body">
    <div class="auth-field">
      <label for="reg-last-name">Фамилия <span class="auth-req">*</span></label>
      <input type="text" id="reg-last-name" placeholder="Иванов" autocomplete="family-name">
    </div>
    <div class="auth-field">
      <label for="reg-first-name">Имя <span class="auth-req">*</span></label>
      <input type="text" id="reg-first-name" placeholder="Иван" autocomplete="given-name">
    </div>
    <div class="auth-field">
      <label for="reg-middle-name">Отчество</label>
      <input type="text" id="reg-middle-name" placeholder="Иванович (необязательно)">
    </div>
    <div class="auth-field">
      <label for="reg-email">Email <span class="auth-req">*</span></label>
      <input type="email" id="reg-email" placeholder="doctor@example.com" autocomplete="email">
    </div>
    <div class="auth-field">
      <label for="reg-spec">Специальность</label>
      <input type="text" id="reg-spec" placeholder="Невролог, терапевт... (необязательно)">
    </div>
    <div class="auth-field">
      <label for="reg-city">Город</label>
      <input type="text" id="reg-city" placeholder="Санкт-Петербург (необязательно)">
    </div>
    <div class="auth-field">
      <label for="reg-password">Пароль <span class="auth-req">*</span></label>
      <input type="password" id="reg-password" placeholder="Минимум 6 символов" autocomplete="new-password">
    </div>
    <div class="auth-field">
      <label for="reg-password2">Повторите пароль <span class="auth-req">*</span></label>
      <input type="password" id="reg-password2" placeholder="••••••••" autocomplete="new-password">
    </div>
    <div class="auth-msg" id="reg-msg"></div>
    <button class="auth-submit" id="reg-submit">Зарегистрироваться</button>
    <div class="auth-switch">Уже есть аккаунт? <a href="#" id="switch-to-login">Войти</a></div>
  </div>
</div>

<?php endif; ?>
