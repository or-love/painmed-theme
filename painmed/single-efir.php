<?php
/**
 * Шаблон одного эфира (CPT: efir)
 *
 * @package Painmed
 */

get_header();

while ( have_posts() ) : the_post();

$status   = get_post_meta( get_the_ID(), '_efir_status', true );
$format   = get_post_meta( get_the_ID(), '_efir_format', true );
$datetime = get_post_meta( get_the_ID(), '_efir_datetime', true );
$speaker  = get_post_meta( get_the_ID(), '_efir_speaker', true );
$duration = get_post_meta( get_the_ID(), '_efir_duration', true );
$stream   = get_post_meta( get_the_ID(), '_efir_stream_url', true );
$video    = get_post_meta( get_the_ID(), '_efir_video_url', true );

$format_label = painmed_get_format_label( $format );
$format_emoji = painmed_get_format_emoji( $format );
$status_label = painmed_get_status_label( $status );
$status_class = painmed_get_status_class( $status );
?>

<!-- BREADCRUMBS -->
<div class="ef-breadcrumbs">
  <div class="ef-breadcrumbs-inner">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Главная</a>
    <span>›</span>
    <a href="<?php echo esc_url( get_post_type_archive_link( 'efir' ) ); ?>">Эфиры</a>
    <span>›</span>
    <span class="ef-bc-current"><?php the_title(); ?></span>
  </div>
</div>

<section class="section ef-single-section">
  <div class="section-inner">
    <div class="ef-single-layout">

      <!-- ОСНОВНОЙ КОНТЕНТ -->
      <div class="ef-single-main">

        <!-- Статус-бейдж -->
        <div class="ef-single-status <?php echo esc_attr( $status_class ); ?>">
          <?php if ( $status === 'live' ) : ?><span class="ef-pulse"></span><?php endif; ?>
          <?php echo esc_html( $status_label ); ?>
        </div>

        <h1 class="ef-single-title"><?php the_title(); ?></h1>

        <!-- Мета-информация -->
        <div class="ef-single-meta-grid">
          <?php if ( $datetime ) : ?>
          <div class="ef-smeta">
            <span class="ef-smeta-label">Дата и время</span>
            <span class="ef-smeta-value">📅 <?php echo esc_html( date_i18n( 'j F Y · H:i', strtotime( $datetime ) ) ); ?> МСК</span>
          </div>
          <?php endif; ?>
          <div class="ef-smeta">
            <span class="ef-smeta-label">Формат</span>
            <span class="ef-smeta-value"><?php echo $format_emoji . ' ' . esc_html( $format_label ); ?></span>
          </div>
          <?php if ( $speaker ) : ?>
          <div class="ef-smeta">
            <span class="ef-smeta-label">Спикер(ы)</span>
            <span class="ef-smeta-value">👤 <?php echo esc_html( $speaker ); ?></span>
          </div>
          <?php endif; ?>
          <?php if ( $duration ) : ?>
          <div class="ef-smeta">
            <span class="ef-smeta-label">Длительность</span>
            <span class="ef-smeta-value">⏱ <?php echo esc_html( $duration ); ?> мин</span>
          </div>
          <?php endif; ?>
        </div>

        <?php
        // ── LIVE: Кнопка «Смотреть трансляцию» ──
        if ( $status === 'live' && $stream ) :
        ?>
        <div class="ef-live-banner">
          <div class="ef-live-indicator"><span class="ef-pulse"></span> Эфир идёт прямо сейчас</div>
          <a href="<?php echo esc_url( $stream ); ?>" class="btn-primary ef-btn-watch" target="_blank" rel="noopener">▶ Смотреть трансляцию</a>
        </div>
        <?php endif; ?>

        <?php
        // ── ARCHIVE: Видеоплеер ──
        if ( $status === 'archive' && $video ) :
          $embed_url = painmed_get_embed_url( $video );
        ?>
        <div class="ef-video-wrap">
          <iframe src="<?php echo esc_url( $embed_url ); ?>" frameborder="0" allowfullscreen allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>
        </div>
        <?php endif; ?>

        <?php
        // ── UPCOMING: Обратный отсчёт ──
        if ( $status === 'upcoming' && $datetime ) :
          $iso_date = date( 'c', strtotime( $datetime ) );
        ?>
        <div class="ef-upcoming-banner">
          <div class="ef-upcoming-label">До начала эфира</div>
          <div class="ef-upcoming-countdown" data-target="<?php echo esc_attr( $iso_date ); ?>">
            <div class="efc-block"><span class="efc-num" data-unit="d">00</span><span class="efc-label">дней</span></div>
            <div class="efc-block"><span class="efc-num" data-unit="h">00</span><span class="efc-label">часов</span></div>
            <div class="efc-block"><span class="efc-num" data-unit="m">00</span><span class="efc-label">минут</span></div>
            <div class="efc-block"><span class="efc-num" data-unit="s">00</span><span class="efc-label">секунд</span></div>
          </div>
          <?php if ( $stream ) : ?>
            <a href="<?php echo esc_url( $stream ); ?>" class="btn-primary">🔔 Напомнить / Смотреть</a>
          <?php endif; ?>
        </div>
        <?php endif; ?>

        <!-- Описание эфира -->
        <div class="ef-single-content">
          <?php the_content(); ?>
        </div>

      </div>

      <!-- БОКОВАЯ ПАНЕЛЬ -->
      <aside class="ef-sidebar">
        <div class="ef-sidebar-block">
          <h4>Ближайшие эфиры</h4>
          <?php
          $sidebar_q = new WP_Query( array(
            'post_type'      => 'efir',
            'posts_per_page' => 5,
            'post__not_in'   => array( get_the_ID() ),
            'meta_key'       => '_efir_datetime',
            'orderby'        => 'meta_value',
            'order'          => 'ASC',
            'meta_query'     => array(
              array(
                'key'     => '_efir_status',
                'value'   => array( 'upcoming', 'live' ),
                'compare' => 'IN',
              ),
            ),
          ) );

          if ( $sidebar_q->have_posts() ) :
            while ( $sidebar_q->have_posts() ) : $sidebar_q->the_post();
              $sb_format   = get_post_meta( get_the_ID(), '_efir_format', true );
              $sb_datetime = get_post_meta( get_the_ID(), '_efir_datetime', true );
              $sb_status   = get_post_meta( get_the_ID(), '_efir_status', true );
          ?>
          <a href="<?php the_permalink(); ?>" class="ef-sidebar-item">
            <span class="ef-sidebar-emoji"><?php echo painmed_get_format_emoji( $sb_format ); ?></span>
            <div class="ef-sidebar-item-body">
              <strong><?php the_title(); ?></strong>
              <span>
                <?php if ( $sb_datetime ) echo esc_html( date_i18n( 'j M · H:i', strtotime( $sb_datetime ) ) ); ?>
                <?php if ( $sb_status === 'live' ) : ?><span class="ef-sidebar-live">LIVE</span><?php endif; ?>
              </span>
            </div>
          </a>
          <?php
            endwhile;
            wp_reset_postdata();
          else :
          ?>
          <p class="ef-sidebar-empty">Предстоящих эфиров пока нет</p>
          <?php endif; ?>
        </div>

        <div class="ef-sidebar-block">
          <h4>Быстрые ссылки</h4>
          <a href="<?php echo esc_url( get_post_type_archive_link( 'efir' ) ); ?>" class="ef-sidebar-link">📋 Все эфиры</a>
          <a href="/meropriyatiya/" class="ef-sidebar-link">📍 Мероприятия</a>
          <a href="#" class="ef-sidebar-link">🤖 ИИ-Консультант</a>
        </div>
      </aside>

    </div>
  </div>
</section>

<?php endwhile; ?>

<!-- Dynamic countdown for single efir -->
<script>
(function(){
  var el = document.querySelector('.ef-upcoming-countdown');
  if (!el) return;
  var target = new Date(el.getAttribute('data-target'));
  function pad(n){ return n < 10 ? '0'+n : ''+n; }
  function tick(){
    var diff = target - new Date();
    if(diff<=0){ el.querySelectorAll('.efc-num').forEach(function(e){e.textContent='00';}); return; }
    var d=Math.floor(diff/864e5), h=Math.floor((diff%864e5)/36e5), m=Math.floor((diff%36e5)/6e4), s=Math.floor((diff%6e4)/1e3);
    el.querySelector('[data-unit="d"]').textContent=pad(d);
    el.querySelector('[data-unit="h"]').textContent=pad(h);
    el.querySelector('[data-unit="m"]').textContent=pad(m);
    el.querySelector('[data-unit="s"]').textContent=pad(s);
  }
  tick(); setInterval(tick,1000);
})();
</script>

<?php get_footer(); ?>
