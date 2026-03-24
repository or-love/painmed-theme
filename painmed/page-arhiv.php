<?php
/**
 * Template Name: Архив трансляций
 * /arhiv/ — фильтруемый архив эфиров (CPT efir, статус «archive»)
 *
 * @package Painmed
 */

get_header();

/* ── Статистика ───────────────────────────── */
$total_q = new WP_Query( array(
	'post_type' => 'efir', 'posts_per_page' => -1, 'fields' => 'ids',
	'meta_query' => array( array( 'key' => '_efir_status', 'value' => 'archive' ) ),
) );
$total_count = $total_q->found_posts;
wp_reset_postdata();

// Суммарная длительность + подсчёт по форматам + уникальные годы
$all_q = new WP_Query( array(
	'post_type' => 'efir', 'posts_per_page' => -1,
	'meta_query' => array( array( 'key' => '_efir_status', 'value' => 'archive' ) ),
) );
$total_minutes = 0;
$fmt_counts = array();
$years = array();
if ( $all_q->have_posts() ) {
	while ( $all_q->have_posts() ) {
		$all_q->the_post();
		$d = (int) get_post_meta( get_the_ID(), '_efir_duration', true );
		if ( $d ) $total_minutes += $d;
		$f = get_post_meta( get_the_ID(), '_efir_format', true );
		if ( $f ) {
			if ( ! isset( $fmt_counts[ $f ] ) ) $fmt_counts[ $f ] = 0;
			$fmt_counts[ $f ]++;
		}
		$dt = get_post_meta( get_the_ID(), '_efir_datetime', true );
		if ( $dt ) {
			$y = date( 'Y', strtotime( $dt ) );
			if ( ! in_array( $y, $years ) ) $years[] = $y;
		}
	}
	wp_reset_postdata();
}
$total_hours = round( $total_minutes / 60 );
rsort( $years ); // Новые сверху

$formats_list = array(
	'webinar'  => '🎙 Советы экспертов',
	'game'     => '🎯 Телеигра',
	'pharmacy' => '💊 Аптека',
	'ai'       => '🤖 Диалоги с ИИ',
	'clinical' => '🔬 Клинический разбор',
	'master'   => '🎓 Мастер-класс',
	'conf'     => '🏛 Конференция',
);

/* ── Первая порция (12) ──────────────────── */
$initial_q = new WP_Query( array(
	'post_type' => 'efir', 'posts_per_page' => 12,
	'meta_key' => '_efir_datetime', 'orderby' => 'meta_value', 'order' => 'DESC',
	'meta_query' => array( array( 'key' => '_efir_status', 'value' => 'archive' ) ),
) );
?>

<!-- ═══ HERO ═══════════════════════════════ -->
<section class="arh-hero">
  <div class="arh-hero-bg"></div>
  <div class="arh-hero-inner">
    <div class="arh-breadcrumbs">
      <a href="<?php echo esc_url( home_url('/') ); ?>">Главная</a>
      <span>›</span>
      <span>Архив трансляций</span>
    </div>
    <h1>Архив <span>трансляций</span></h1>
    <p class="arh-hero-sub">Все выпуски в одном месте — фильтруйте по формату, году, типу, ищите по теме. Бесплатно после регистрации.</p>
    <div class="arh-hero-stats">
      <div class="arh-stat"><span class="arh-stat-num"><?php echo $total_count; ?></span><span class="arh-stat-label">выпусков</span></div>
      <div class="arh-stat"><span class="arh-stat-num"><?php echo count( $fmt_counts ); ?></span><span class="arh-stat-label">форматов</span></div>
      <div class="arh-stat"><span class="arh-stat-num"><?php echo $total_hours; ?><small>ч</small></span><span class="arh-stat-label">контента</span></div>
      <div class="arh-stat"><span class="arh-stat-num"><?php echo count( $years ); ?></span><span class="arh-stat-label"><?php echo count( $years ) === 1 ? 'год' : 'года'; ?> в архиве</span></div>
    </div>
  </div>
</section>

<!-- ═══ FILTER BAR (sticky) ═══════════════ -->
<div class="arh-filterbar" id="arh-filterbar">
  <div class="arh-filterbar-inner">

    <!-- Табы форматов -->
    <div class="arh-tabs" id="arh-tabs">
      <button class="arh-tab active" data-fmt="">Все <span class="arh-tab-count"><?php echo $total_count; ?></span></button>
      <?php foreach ( $formats_list as $key => $label ) :
        $cnt = isset( $fmt_counts[ $key ] ) ? $fmt_counts[ $key ] : 0;
        if ( $cnt === 0 ) continue;
      ?>
      <button class="arh-tab" data-fmt="<?php echo esc_attr( $key ); ?>"><?php echo esc_html( $label ); ?> <span class="arh-tab-count"><?php echo $cnt; ?></span></button>
      <?php endforeach; ?>
    </div>

    <!-- Вторая строка: поиск, тип, год, сортировка -->
    <div class="arh-controls">
      <div class="arh-search-wrap">
        <span class="arh-search-icon">🔍</span>
        <input type="text" id="arh-search" class="arh-search" placeholder="Поиск по названию, теме, спикеру..." autocomplete="off">
        <button id="arh-search-clear" class="arh-search-clear" hidden>&times;</button>
      </div>

      <div class="arh-type-toggle" id="arh-type-toggle">
        <button class="arh-type-btn active" data-type="">Все</button>
        <button class="arh-type-btn" data-type="online">🖥 Онлайн</button>
        <button class="arh-type-btn" data-type="offline">📍 Офлайн</button>
      </div>

      <?php if ( count( $years ) > 1 ) : ?>
      <select id="arh-year" class="arh-select">
        <option value="">Все годы</option>
        <?php foreach ( $years as $y ) : ?>
          <option value="<?php echo esc_attr( $y ); ?>"><?php echo esc_html( $y ); ?></option>
        <?php endforeach; ?>
      </select>
      <?php endif; ?>

      <select id="arh-sort" class="arh-select">
        <option value="newest">Сначала новые</option>
        <option value="oldest">Сначала старые</option>
        <option value="popular">По популярности</option>
      </select>

      <button id="arh-reset" class="arh-reset-btn" hidden>✕ Сбросить фильтры</button>
    </div>

  </div>
</div>

<!-- ═══ RESULTS ═══════════════════════════════ -->
<section class="section arh-results-section">
  <div class="section-inner">

    <!-- Счётчик -->
    <div class="arh-results-bar">
      <span id="arh-count">Найдено: <strong><?php echo $total_count; ?></strong> выпусков</span>
      <span id="arh-shown">Показано: <strong>
        <?php echo min( 12, $total_count ); ?></strong> из <strong><?php echo $total_count; ?></strong>
      </span>
    </div>

    <!-- Сетка карточек -->
    <div class="arh-grid" id="arh-grid">
      <?php if ( $initial_q->have_posts() ) :
        while ( $initial_q->have_posts() ) : $initial_q->the_post();
          $format   = get_post_meta( get_the_ID(), '_efir_format', true );
          $datetime = get_post_meta( get_the_ID(), '_efir_datetime', true );
          $speaker  = get_post_meta( get_the_ID(), '_efir_speaker', true );
          $duration = get_post_meta( get_the_ID(), '_efir_duration', true );
          $views    = (int) get_post_meta( get_the_ID(), '_efir_views', true );
      ?>
      <a href="<?php the_permalink(); ?>" class="arh-card">
        <div class="arh-card-thumb">
          <?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail( 'medium', array( 'class' => 'arh-card-img' ) ); ?>
          <?php else : ?>
            <div class="arh-card-placeholder">
              <span><?php echo painmed_get_format_emoji( $format ); ?></span>
            </div>
          <?php endif; ?>
          <div class="arh-card-tag"><?php echo esc_html( painmed_get_format_label( $format ) ); ?></div>
          <?php if ( $duration ) : ?>
            <div class="arh-card-duration">⏱ <?php echo esc_html( $duration ); ?> мин</div>
          <?php endif; ?>
          <div class="arh-card-play">▶</div>
        </div>
        <div class="arh-card-body">
          <h3><?php the_title(); ?></h3>
          <?php if ( $speaker ) : ?>
            <div class="arh-card-speaker">👤 <?php echo esc_html( $speaker ); ?></div>
          <?php endif; ?>
          <div class="arh-card-meta">
            <?php if ( $datetime ) : ?>
              <span>📅 <?php echo esc_html( date_i18n( 'j M Y', strtotime( $datetime ) ) ); ?></span>
            <?php endif; ?>
            <span>👁 <?php echo $views; ?></span>
          </div>
        </div>
      </a>
      <?php endwhile; wp_reset_postdata(); endif; ?>
    </div>

    <!-- Load More -->
    <div class="arh-loadmore-wrap" id="arh-loadmore-wrap" <?php if ( $initial_q->max_num_pages <= 1 ) echo 'hidden'; ?>>
      <button class="arh-loadmore-btn" id="arh-loadmore"
              data-page="1"
              data-max="<?php echo $initial_q->max_num_pages; ?>">
        Загрузить ещё
        <span id="arh-loadmore-plus">+<?php echo max( 0, $total_count - 12 ); ?></span>
      </button>
      <div class="arh-spinner" id="arh-spinner" hidden>
        <span></span><span></span><span></span>
      </div>
    </div>

    <!-- Пустое состояние -->
    <div class="arh-empty" id="arh-empty" hidden>
      <div class="arh-empty-icon">📭</div>
      <p>По вашему запросу ничего не найдено</p>
      <button class="arh-empty-reset" id="arh-empty-reset">Сбросить фильтры</button>
    </div>

  </div>
</section>

<!-- CTA -->
<section class="membership-cta">
  <div class="membership-inner">
    <div class="membership-left">
      <h2>Смотрите эфиры <em>бесплатно</em></h2>
      <p>Зарегистрируйтесь и получите полный доступ к архиву и прямым трансляциям</p>
    </div>
    <div class="membership-actions">
      <a href="#" class="btn-white">Зарегистрироваться</a>
      <span class="membership-note">Бесплатно для практикующих врачей</span>
    </div>
  </div>
</section>

<?php get_footer(); ?>
