<?php
/**
 * Архив эфиров (CPT: efir)
 * URL: /efir/
 *
 * @package Painmed
 */

get_header();

// Текущий фильтр формата
$current_filter = isset( $_GET['fmt'] ) ? sanitize_text_field( $_GET['fmt'] ) : '';

$formats = array(
	''         => 'Все форматы',
	'webinar'  => '🎙 Советы экспертов',
	'game'     => '🎯 Телеигра',
	'pharmacy' => '💊 Аптека',
	'ai'       => '🤖 Диалоги с ИИ',
	'clinical' => '🔬 Клинический разбор',
	'master'   => '🎓 Мастер-класс',
	'conf'     => '🏛 Конференция',
);
?>

<!-- HERO -->
<section class="ef-hero">
  <div class="ef-hero-inner">
    <div class="hero-badge">Painmed · Прямые эфиры</div>
    <h1>Онлайн-<span>эфиры</span></h1>
    <p class="ef-hero-sub">Смотрите прямые трансляции с ведущими экспертами России или записи из архива — бесплатно после регистрации</p>
  </div>
</section>

<!-- FILTERS -->
<section class="section ef-archive-section">
  <div class="section-inner">

    <div class="ef-filters">
      <?php foreach ( $formats as $key => $label ) : ?>
        <a href="<?php echo esc_url( add_query_arg( 'fmt', $key, get_post_type_archive_link( 'efir' ) ) ); ?>"
           class="ef-filter-btn <?php echo $current_filter === $key ? 'active' : ''; ?>">
          <?php echo esc_html( $label ); ?>
        </a>
      <?php endforeach; ?>
    </div>

    <?php
    // ─── ПРЕДСТОЯЩИЕ + LIVE ───────────────────
    $upcoming_args = array(
      'post_type'      => 'efir',
      'posts_per_page' => 6,
      'meta_key'       => '_efir_datetime',
      'orderby'        => 'meta_value',
      'order'          => 'ASC',
      'meta_query'     => array(
        array(
          'key'   => '_efir_status',
          'value' => array( 'upcoming', 'live' ),
          'compare' => 'IN',
        ),
      ),
    );

    if ( $current_filter ) {
      $upcoming_args['meta_query'][] = array(
        'key'   => '_efir_format',
        'value' => $current_filter,
      );
    }

    $upcoming = new WP_Query( $upcoming_args );

    if ( $upcoming->have_posts() ) :
    ?>
    <div class="ef-section-label">
      <div class="section-label">Предстоящие</div>
      <h2 class="section-title">Ближайшие <em>эфиры</em></h2>
    </div>
    <div class="ef-grid">
      <?php while ( $upcoming->have_posts() ) : $upcoming->the_post();
        $status   = get_post_meta( get_the_ID(), '_efir_status', true );
        $format   = get_post_meta( get_the_ID(), '_efir_format', true );
        $datetime = get_post_meta( get_the_ID(), '_efir_datetime', true );
        $speaker  = get_post_meta( get_the_ID(), '_efir_speaker', true );
        $duration = get_post_meta( get_the_ID(), '_efir_duration', true );
        $stream   = get_post_meta( get_the_ID(), '_efir_stream_url', true );
      ?>
      <a href="<?php the_permalink(); ?>" class="ef-card ef-card-upcoming <?php if ( $status === 'live' ) echo 'ef-card-live'; ?>">
        <div class="ef-card-top-line"></div>
        <div class="ef-card-header">
          <span class="ef-card-emoji"><?php echo painmed_get_format_emoji( $format ); ?></span>
          <span class="ef-card-status <?php echo painmed_get_status_class( $status ); ?>">
            <?php if ( $status === 'live' ) : ?><span class="ef-pulse"></span><?php endif; ?>
            <?php echo esc_html( painmed_get_status_label( $status ) ); ?>
          </span>
        </div>
        <h3><?php the_title(); ?></h3>
        <?php if ( $speaker ) : ?>
          <div class="ef-card-speaker">👤 <?php echo esc_html( $speaker ); ?></div>
        <?php endif; ?>
        <div class="ef-card-meta">
          <?php if ( $datetime ) : ?>
            <span>📅 <?php echo esc_html( date_i18n( 'j M Y · H:i', strtotime( $datetime ) ) ); ?></span>
          <?php endif; ?>
          <?php if ( $duration ) : ?>
            <span>⏱ <?php echo esc_html( $duration ); ?> мин</span>
          <?php endif; ?>
        </div>
        <div class="ef-card-footer">
          <span class="ef-card-format"><?php echo esc_html( painmed_get_format_label( $format ) ); ?></span>
          <span class="btn-link">Подробнее</span>
        </div>
      </a>
      <?php endwhile; ?>
    </div>
    <?php
    wp_reset_postdata();
    endif;
    ?>

    <?php
    // ─── АРХИВ (прошедшие) ──────────────────
    $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

    $archive_args = array(
      'post_type'      => 'efir',
      'posts_per_page' => 9,
      'paged'          => $paged,
      'meta_key'       => '_efir_datetime',
      'orderby'        => 'meta_value',
      'order'          => 'DESC',
      'meta_query'     => array(
        array(
          'key'   => '_efir_status',
          'value' => 'archive',
        ),
      ),
    );

    if ( $current_filter ) {
      $archive_args['meta_query'][] = array(
        'key'   => '_efir_format',
        'value' => $current_filter,
      );
    }

    $archive_q = new WP_Query( $archive_args );

    if ( $archive_q->have_posts() ) :
    ?>
    <div class="ef-section-label" style="margin-top:48px;">
      <div class="section-label">Видеоархив</div>
      <h2 class="section-title">Записи <em>эфиров</em></h2>
    </div>
    <div class="ef-grid">
      <?php while ( $archive_q->have_posts() ) : $archive_q->the_post();
        $format   = get_post_meta( get_the_ID(), '_efir_format', true );
        $datetime = get_post_meta( get_the_ID(), '_efir_datetime', true );
        $speaker  = get_post_meta( get_the_ID(), '_efir_speaker', true );
        $duration = get_post_meta( get_the_ID(), '_efir_duration', true );
      ?>
      <a href="<?php the_permalink(); ?>" class="ef-card">
        <div class="ef-card-thumb" style="background: linear-gradient(135deg,#edf4ff,#e4f4f8);">
          <span><?php echo painmed_get_format_emoji( $format ); ?></span>
          <div class="ef-card-tag"><?php echo esc_html( painmed_get_format_label( $format ) ); ?></div>
        </div>
        <div class="ef-card-body">
          <h3><?php the_title(); ?></h3>
          <?php if ( $speaker ) : ?>
            <div class="ef-card-speaker">👤 <?php echo esc_html( $speaker ); ?></div>
          <?php endif; ?>
          <div class="ef-card-meta">
            <?php if ( $datetime ) : ?>
              <span>📅 <?php echo esc_html( date_i18n( 'j M Y', strtotime( $datetime ) ) ); ?></span>
            <?php endif; ?>
            <?php if ( $duration ) : ?>
              <span>⏱ <?php echo esc_html( $duration ); ?> мин</span>
            <?php endif; ?>
          </div>
        </div>
      </a>
      <?php endwhile; ?>
    </div>

    <?php
    // Пагинация
    $total_pages = $archive_q->max_num_pages;
    if ( $total_pages > 1 ) :
    ?>
    <div class="ef-pagination">
      <?php
      echo paginate_links( array(
        'total'     => $total_pages,
        'current'   => $paged,
        'prev_text' => '← Назад',
        'next_text' => 'Вперёд →',
        'type'      => 'list',
      ) );
      ?>
    </div>
    <?php
    endif;
    wp_reset_postdata();
    endif;
    ?>

    <?php if ( ! $upcoming->have_posts() && ! $archive_q->have_posts() ) : ?>
      <div class="ef-empty">
        <p>Эфиров пока нет. Скоро здесь появятся новые события — следите за обновлениями.</p>
      </div>
    <?php endif; ?>

  </div>
</section>

<?php get_footer(); ?>
