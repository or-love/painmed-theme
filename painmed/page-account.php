<?php
/**
 * Template Name: Личный кабинет
 *
 * @package Painmed
 */

if ( ! is_user_logged_in() ) {
	wp_redirect( home_url( '/' ) );
	exit;
}

$user        = wp_get_current_user();
$user_id     = $user->ID;
$first_name  = $user->first_name;
$last_name   = $user->last_name;
$middle_name = get_user_meta( $user_id, 'middle_name', true );
$email       = $user->user_email;
$spec        = get_user_meta( $user_id, 'specialty', true );
$city        = get_user_meta( $user_id, 'city', true );
$szoib       = get_user_meta( $user_id, 'szoib_member', true );
$reg_date    = date_i18n( 'j F Y', strtotime( $user->user_registered ) );

$display_name  = trim( $last_name . ' ' . $first_name . ( $middle_name ? ' ' . $middle_name : '' ) ) ?: $user->display_name;
$short_name    = trim( $last_name . ( $first_name ? ' ' . mb_substr( $first_name, 0, 1 ) . '.' : '' ) . ( $middle_name ? ' ' . mb_substr( $middle_name, 0, 1 ) . '.' : '' ) ) ?: $user->display_name;
$avatar_letter = mb_strtoupper( mb_substr( $first_name ?: $display_name, 0, 1 ) );

// Ближайшие эфиры
$upcoming = new WP_Query( array(
	'post_type'      => 'efir',
	'posts_per_page' => 3,
	'meta_key'       => '_efir_datetime',
	'orderby'        => 'meta_value',
	'order'          => 'ASC',
	'meta_query'     => array(
		array( 'key' => '_efir_status', 'value' => array( 'upcoming', 'live' ), 'compare' => 'IN' ),
	),
) );

get_header();
?>

<div class="lk-page">

  <!-- SIDEBAR -->
  <aside class="lk-sidebar">

    <div class="lk-profile-card">
      <div class="lk-profile-header">
        <div class="lk-profile-avatar"><?php echo esc_html( $avatar_letter ); ?></div>
        <div>
          <div class="lk-profile-name"><?php echo esc_html( $display_name ); ?></div>
          <div class="lk-profile-email"><?php echo esc_html( $email ); ?></div>
          <div class="lk-profile-since">В сообществе с <?php echo esc_html( $reg_date ); ?></div>
        </div>
      </div>
      <div class="lk-profile-nav">
        <a href="#" class="lk-nav-item active" data-tab="profile">
          <span class="lk-nav-icon">👤</span> Личные данные
        </a>
        <a href="#" class="lk-nav-item" data-tab="activity">
          <span class="lk-nav-icon">📋</span> Активность
        </a>
        <a href="#" class="lk-nav-item" data-tab="archive">
          <span class="lk-nav-icon">🎬</span> Архив
        </a>
        <a href="#" class="lk-nav-item" data-tab="upcoming">
          <span class="lk-nav-icon">📅</span> Ближайшие эфиры
          <?php if ( $upcoming->found_posts ) : ?>
            <span class="lk-nav-badge"><?php echo (int) $upcoming->found_posts; ?></span>
          <?php endif; ?>
        </a>
        <a href="#" class="lk-nav-item" data-tab="membership">
          <span class="lk-nav-icon">🏛</span> Членство в СЗОИБ
        </a>
      </div>
    </div>

    <a href="<?php echo esc_url( wp_logout_url( home_url( '/' ) ) ); ?>" class="lk-logout-btn" id="lk-logout-btn">
      <span>🚪</span> Выйти из аккаунта
    </a>

  </aside>

  <!-- MAIN -->
  <main class="lk-main">

    <!-- ТАБ: ЛИЧНЫЕ ДАННЫЕ -->
    <div class="lk-tab-panel" id="tab-profile">
      <div class="lk-card">
        <div class="lk-card-head">
          <h2><span>👤</span> Личные данные</h2>
        </div>
        <div class="lk-card-body">

          <div id="lk-msg" class="lk-msg"></div>

          <div class="lk-form-grid">
            <div class="lk-field">
              <label class="lk-label">Фамилия</label>
              <input type="text" class="lk-input" id="lk-last-name" value="<?php echo esc_attr( $last_name ); ?>" placeholder="Иванов">
            </div>
            <div class="lk-field">
              <label class="lk-label">Имя</label>
              <input type="text" class="lk-input" id="lk-first-name" value="<?php echo esc_attr( $first_name ); ?>" placeholder="Иван">
            </div>
            <div class="lk-field">
              <label class="lk-label">Отчество <span class="lk-opt">(необязательно)</span></label>
              <input type="text" class="lk-input" id="lk-middle-name" value="<?php echo esc_attr( $middle_name ); ?>" placeholder="Иванович">
            </div>
            <div class="lk-field">
              <label class="lk-label">Email</label>
              <input type="email" class="lk-input" id="lk-email" value="<?php echo esc_attr( $email ); ?>">
            </div>
            <div class="lk-field">
              <label class="lk-label">Специальность <span class="lk-opt">(необязательно)</span></label>
              <input type="text" class="lk-input" id="lk-spec" value="<?php echo esc_attr( $spec ); ?>" placeholder="Невролог, терапевт...">
            </div>
            <div class="lk-field">
              <label class="lk-label">Город <span class="lk-opt">(необязательно)</span></label>
              <input type="text" class="lk-input" id="lk-city" value="<?php echo esc_attr( $city ); ?>" placeholder="Санкт-Петербург">
            </div>
            <div class="lk-field lk-field-full">
              <label class="lk-label">Членство в СЗОИБ</label>
              <label class="lk-checkbox-row">
                <input type="checkbox" id="lk-szoib" <?php checked( $szoib, '1' ); ?>>
                <span class="lk-checkbox-label"><strong>Я являюсь членом</strong> Северо-Западного общества по изучению боли (СЗОИБ)</span>
              </label>
            </div>
          </div>

          <hr class="lk-divider">

          <div class="lk-label" style="margin-bottom:12px">Смена пароля</div>
          <div class="lk-form-grid">
            <div class="lk-field">
              <label class="lk-label">Новый пароль</label>
              <input type="password" class="lk-input" id="lk-pass" placeholder="Оставьте пустым, если не меняете" autocomplete="new-password">
            </div>
            <div class="lk-field">
              <label class="lk-label">Повторите пароль</label>
              <input type="password" class="lk-input" id="lk-pass2" placeholder="Повторите новый пароль" autocomplete="new-password">
            </div>
          </div>

          <div class="lk-actions">
            <button class="lk-btn-primary" id="lk-save">Сохранить изменения</button>
            <button class="lk-btn-ghost" id="lk-cancel">Отмена</button>
            <span class="lk-save-ok" id="lk-save-ok">✓ Данные сохранены</span>
          </div>

        </div>
      </div>
    </div>

    <!-- ТАБ: АКТИВНОСТЬ -->
    <div class="lk-tab-panel" id="tab-activity" style="display:none">
      <div class="lk-card">
        <div class="lk-card-head">
          <h2><span>📋</span> Активность</h2>
        </div>
        <div class="lk-card-body">
          <div class="lk-activity-list">
            <div class="lk-activity-item">
              <div class="lk-act-icon lk-act-join">🏥</div>
              <div class="lk-act-body">
                <div class="lk-act-text">Регистрация на платформе Painmed.ru</div>
                <div class="lk-act-time"><?php echo esc_html( $reg_date ); ?></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ТАБ: АРХИВ -->
    <div class="lk-tab-panel" id="tab-archive" style="display:none">
      <div class="lk-card">
        <div class="lk-card-head">
          <h2><span>🎬</span> Архив трансляций</h2>
          <a href="/arhiv/" class="lk-card-link">Весь архив →</a>
        </div>
        <div class="lk-card-body">
          <p class="lk-card-desc">Быстрый доступ к разделам архива</p>
          <div class="lk-archive-grid">
            <a href="/arhiv/?cat=sovet" class="lk-archive-item">
              <div class="lk-arch-icon">🎙</div>
              <div>
                <div class="lk-arch-name">Советы экспертов</div>
                <div class="lk-arch-count">60+ выпусков</div>
              </div>
              <span class="lk-arch-arrow">→</span>
            </a>
            <a href="/arhiv/?cat=igra" class="lk-archive-item">
              <div class="lk-arch-icon">🎯</div>
              <div>
                <div class="lk-arch-name">Телеигра</div>
                <div class="lk-arch-count">20+ выпусков</div>
              </div>
              <span class="lk-arch-arrow">→</span>
            </a>
            <a href="/arhiv/?cat=apteka" class="lk-archive-item">
              <div class="lk-arch-icon">💊</div>
              <div>
                <div class="lk-arch-name">Аптека</div>
                <div class="lk-arch-count">15+ выпусков</div>
              </div>
              <span class="lk-arch-arrow">→</span>
            </a>
            <a href="/arhiv/?cat=dialogi" class="lk-archive-item">
              <div class="lk-arch-icon">🤖</div>
              <div>
                <div class="lk-arch-name">Диалоги с ИИ</div>
                <div class="lk-arch-count">10+ выпусков</div>
              </div>
              <span class="lk-arch-arrow">→</span>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- ТАБ: БЛИЖАЙШИЕ ЭФИРЫ -->
    <div class="lk-tab-panel" id="tab-upcoming" style="display:none">
      <div class="lk-card">
        <div class="lk-card-head">
          <h2><span>📅</span> Ближайшие эфиры</h2>
          <a href="/online/" class="lk-card-link">Смотреть онлайн →</a>
        </div>
        <div class="lk-card-body">
          <?php if ( $upcoming->have_posts() ) : ?>
            <div class="lk-upcoming-list">
              <?php while ( $upcoming->have_posts() ) : $upcoming->the_post();
                $dt     = get_post_meta( get_the_ID(), '_efir_datetime', true );
                $status = get_post_meta( get_the_ID(), '_efir_status', true );
                $color  = $status === 'live' ? 'var(--cyan)' : 'var(--accent)';
              ?>
              <div class="lk-upcoming-item">
                <div class="lk-upcoming-dot" style="background:<?php echo esc_attr($color); ?>"></div>
                <div>
                  <h4><?php the_title(); ?></h4>
                  <?php if ( $dt ) : ?>
                    <p>📅 <?php echo esc_html( date_i18n( 'j F Y · H:i МСК', strtotime( $dt ) ) ); ?></p>
                  <?php endif; ?>
                  <span class="lk-upcoming-tag <?php echo $status === 'live' ? 'lk-tag-live' : 'lk-tag-online'; ?>">
                    <?php echo $status === 'live' ? '🔴 Эфир' : '🖥 Онлайн'; ?>
                  </span>
                </div>
              </div>
              <?php endwhile; wp_reset_postdata(); ?>
            </div>
          <?php else : ?>
            <div class="lk-empty">Ближайшие эфиры не запланированы</div>
          <?php endif; ?>
        </div>
      </div>
    </div>

    <!-- ТАБ: ЧЛЕНСТВО В СЗОИБ -->
    <div class="lk-tab-panel" id="tab-membership" style="display:none">
      <div class="lk-card">
        <div class="lk-card-head">
          <h2><span>🏛</span> Членство в СЗОИБ</h2>
        </div>
        <div class="lk-card-body">

          <div class="lk-status-bar">
            <div class="lk-status-icon">🤝</div>
            <div class="lk-status-text">
              <strong>Статус участника</strong>
              <?php if ( $szoib ) : ?>
                Зарегистрированный член СЗОИБ
              <?php else : ?>
                Зарегистрированный пользователь Painmed.ru
              <?php endif; ?>
            </div>
            <span class="lk-status-badge <?php echo $szoib ? 'lk-badge-member' : 'lk-badge-guest'; ?>">
              <?php echo $szoib ? 'Член СЗОИБ' : 'Гость'; ?>
            </span>
          </div>

          <div class="lk-membership-block">
            <div class="lk-mb-icon">🏛</div>
            <div class="lk-mb-body">
              <h3>Стать членом СЗОИБ</h3>
              <p>Северо-Западное общество по изучению боли объединяет практикующих врачей, исследователей и специалистов в области болевой медицины. Членство даёт доступ к расширенным материалам, записям закрытых заседаний и профессиональному сообществу.</p>
              <button class="lk-btn-white">Подать заявку на членство</button>
            </div>
          </div>

        </div>
      </div>
    </div>

  </main>
</div>

<?php get_footer(); ?>
