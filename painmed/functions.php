<?php
/**
 * Painmed — functions and definitions
 *
 * @package Painmed
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'PAINMED_VERSION', '1.0.0' );

/* ──────────────────────────────────────────
   1. THEME SETUP
   ────────────────────────────────────────── */
function painmed_setup() {
	// Перевод (при необходимости)
	load_theme_textdomain( 'painmed', get_template_directory() . '/languages' );

	// <title> через WordPress
	add_theme_support( 'title-tag' );

	// HTML5
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script',
	) );

	// Миниатюры записей
	add_theme_support( 'post-thumbnails' );

	// Кастомный логотип (на будущее)
	add_theme_support( 'custom-logo', array(
		'height'      => 34,
		'width'       => 34,
		'flex-height' => true,
		'flex-width'  => true,
	) );

	// Регистрация меню
	register_nav_menus( array(
		'primary'         => __( 'Главное меню', 'painmed' ),
		'footer_events'   => __( 'Футер — Мероприятия', 'painmed' ),
		'footer_services' => __( 'Футер — Сервисы', 'painmed' ),
	) );
}
add_action( 'after_setup_theme', 'painmed_setup' );


/* ──────────────────────────────────────────
   2. STYLES & SCRIPTS
   ────────────────────────────────────────── */
function painmed_enqueue_assets() {
	// Google Fonts: Manrope + Playfair Display
	wp_enqueue_style(
		'painmed-google-fonts',
		'https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,700;1,500&display=swap',
		array(),
		null // null — не добавлять версию к URL Google Fonts
	);

	// Основной CSS темы (style.css)
	wp_enqueue_style(
		'painmed-style',
		get_stylesheet_uri(),
		array( 'painmed-google-fonts' ),
		PAINMED_VERSION
	);

	// Countdown-скрипт для hero-карточки (только на главной)
	if ( is_front_page() ) {
		wp_enqueue_script(
			'painmed-countdown',
			get_template_directory_uri() . '/assets/js/countdown.js',
			array(),
			PAINMED_VERSION,
			true
		);
	}

	// CSS и JS для страницы «Мероприятия» (шаблон page-meropriyatiya.php)
	if ( is_page_template( 'page-meropriyatiya.php' ) ) {
		wp_enqueue_style(
			'painmed-events',
			get_template_directory_uri() . '/assets/css/style-events.css',
			array( 'painmed-style' ),
			PAINMED_VERSION
		);
		wp_enqueue_script(
			'painmed-countdown-events',
			get_template_directory_uri() . '/assets/js/countdown-events.js',
			array(),
			PAINMED_VERSION,
			true
		);
	}

	// CSS для архива и карточки эфира (CPT efir)
	if ( is_post_type_archive( 'efir' ) || is_singular( 'efir' ) ) {
		wp_enqueue_style(
			'painmed-efiry',
			get_template_directory_uri() . '/assets/css/style-efiry.css',
			array( 'painmed-style' ),
			PAINMED_VERSION
		);
	}

	// CSS и JS для страницы «Архив трансляций» (шаблон page-arhiv.php)
	if ( is_page_template( 'page-arhiv.php' ) ) {
		wp_enqueue_style(
			'painmed-arhiv',
			get_template_directory_uri() . '/assets/css/style-arhiv.css',
			array( 'painmed-style' ),
			PAINMED_VERSION
		);
		wp_enqueue_script(
			'painmed-arhiv-filter',
			get_template_directory_uri() . '/assets/js/arhiv-filter.js',
			array(),
			PAINMED_VERSION,
			true
		);
		wp_localize_script( 'painmed-arhiv-filter', 'painmedArhiv', array(
			'ajaxurl' => admin_url( 'admin-ajax.php' ),
			'nonce'   => wp_create_nonce( 'painmed_arhiv_nonce' ),
		) );
	}

	// CSS для страницы «О проекте» (шаблон page-about.php)
	if ( is_page_template( 'page-about.php' ) ) {
		wp_enqueue_style(
			'painmed-about',
			get_template_directory_uri() . '/assets/css/style-about.css',
			array( 'painmed-style' ),
			PAINMED_VERSION
		);
	}

	// CSS и JS для страницы «ИИ-Консультант» (шаблон page-ai-consultant.php)
	if ( is_page_template( 'page-ai-consultant.php' ) ) {
		wp_enqueue_style(
			'painmed-ai-consultant',
			get_template_directory_uri() . '/assets/css/style-ai-consultant.css',
			array( 'painmed-style' ),
			PAINMED_VERSION
		);
		wp_enqueue_script(
			'painmed-ai-chat',
			get_template_directory_uri() . '/assets/js/ai-chat.js',
			array(),
			PAINMED_VERSION,
			true
		);
	}
}
add_action( 'wp_enqueue_scripts', 'painmed_enqueue_assets' );


/* ──────────────────────────────────────────
   3. PRECONNECT FOR GOOGLE FONTS
   ────────────────────────────────────────── */
function painmed_resource_hints( $urls, $relation_type ) {
	if ( 'preconnect' === $relation_type ) {
		$urls[] = array(
			'href' => 'https://fonts.googleapis.com',
			'crossorigin' => 'anonymous',
		);
		$urls[] = array(
			'href' => 'https://fonts.gstatic.com',
			'crossorigin' => 'anonymous',
		);
	}
	return $urls;
}
add_filter( 'wp_resource_hints', 'painmed_resource_hints', 10, 2 );


/* ──────────────────────────────────────────
   4. FALLBACK MENUS (если меню не назначено)
   ────────────────────────────────────────── */
function painmed_fallback_menu() {
	echo '<ul class="nav-links">';
	echo '<li><a href="/meropriyatiya/">Мероприятия</a></li>';
	echo '<li><a href="/efir/">Онлайн-эфиры</a></li>';
	echo '<li><a href="/arhiv/">Архив</a></li>';
	echo '<li><a href="#">О нас</a></li>';
	echo '<li><a href="/ai-consultant/">ИИ-Консультант</a></li>';
	echo '<li><a href="#">Календарь</a></li>';
	echo '</ul>';
}

function painmed_fallback_footer_events() {
	echo '<ul>';
	echo '<li><a href="/efir/">Онлайн-эфиры</a></li>';
	echo '<li><a href="/arhiv/">Архив трансляций</a></li>';
	echo '<li><a href="#">Южная школа</a></li>';
	echo '<li><a href="#">Восточная школа</a></li>';
	echo '<li><a href="#">Петербуржские вечера</a></li>';
	echo '<li><a href="#">Вечерняя Москва</a></li>';
	echo '<li><a href="#">NeuroRussia</a></li>';
	echo '</ul>';
}

function painmed_fallback_footer_services() {
	echo '<ul>';
	echo '<li><a href="/ai-consultant/">ИИ-Консультант</a></li>';
	echo '<li><a href="#">Личный кабинет</a></li>';
	echo '<li><a href="#">Членство в СЗОИБ</a></li>';
	echo '<li><a href="#">Календарь событий</a></li>';
	echo '<li><a href="#">Поддержка</a></li>';
	echo '</ul>';
}


/* ──────────────────────────────────────────
   5. CLEANUP <head>
   ────────────────────────────────────────── */
// Убираем лишнее из <head> для чистоты и безопасности
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wp_shortlink_wp_head' );


/* ──────────────────────────────────────────
   6. CUSTOM POST TYPE — ЭФИРЫ
   ────────────────────────────────────────── */
function painmed_register_efir_cpt() {
	$labels = array(
		'name'               => 'Эфиры',
		'singular_name'      => 'Эфир',
		'add_new'            => 'Добавить эфир',
		'add_new_item'       => 'Добавить новый эфир',
		'edit_item'          => 'Редактировать эфир',
		'new_item'           => 'Новый эфир',
		'view_item'          => 'Просмотр эфира',
		'search_items'       => 'Поиск эфиров',
		'not_found'          => 'Эфиров не найдено',
		'not_found_in_trash' => 'В корзине эфиров нет',
		'all_items'          => 'Все эфиры',
		'menu_name'          => 'Эфиры',
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'has_archive'        => true,
		'rewrite'            => array( 'slug' => 'efir', 'with_front' => false ),
		'menu_icon'          => 'dashicons-video-alt3',
		'menu_position'      => 5,
		'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
		'show_in_rest'       => true, // Гутенберг-совместимость
	);

	register_post_type( 'efir', $args );
}
add_action( 'init', 'painmed_register_efir_cpt' );

/**
 * Перечитать правила rewrite после активации темы
 */
function painmed_rewrite_flush() {
	painmed_register_efir_cpt();
	flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'painmed_rewrite_flush' );


/* ──────────────────────────────────────────
   7. METABOX — ПАРАМЕТРЫ ЭФИРА
   ────────────────────────────────────────── */
function painmed_efir_add_metabox() {
	add_meta_box(
		'painmed_efir_details',
		'Параметры эфира',
		'painmed_efir_metabox_html',
		'efir',
		'normal',
		'high'
	);
}
add_action( 'add_meta_boxes', 'painmed_efir_add_metabox' );

function painmed_efir_metabox_html( $post ) {
	wp_nonce_field( 'painmed_efir_save', 'painmed_efir_nonce' );

	$datetime  = get_post_meta( $post->ID, '_efir_datetime', true );
	$speaker   = get_post_meta( $post->ID, '_efir_speaker', true );
	$format    = get_post_meta( $post->ID, '_efir_format', true );
	$stream    = get_post_meta( $post->ID, '_efir_stream_url', true );
	$video     = get_post_meta( $post->ID, '_efir_video_url', true );
	$status    = get_post_meta( $post->ID, '_efir_status', true );
	$duration  = get_post_meta( $post->ID, '_efir_duration', true );
	$efir_type = get_post_meta( $post->ID, '_efir_type', true );
	$views     = get_post_meta( $post->ID, '_efir_views', true );

	if ( ! $status ) $status = 'upcoming';
	if ( ! $format ) $format = 'webinar';
	if ( ! $efir_type ) $efir_type = 'online';
	if ( ! $views ) $views = 0;

	$formats = array(
		'webinar'   => 'Вебинар / Совет экспертов',
		'master'    => 'Мастер-класс',
		'conf'      => 'Конференция',
		'clinical'  => 'Клинический разбор',
		'game'      => 'Интеллектуальная телеигра',
		'ai'        => 'Диалоги с нейросетью',
		'pharmacy'  => 'Аптека коморбидного пациента',
	);

	$statuses = array(
		'upcoming' => '🟡 Предстоящий',
		'live'     => '🔴 Идёт сейчас',
		'archive'  => '🟢 Запись доступна',
	);

	?>
	<style>
		.pm-meta-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 16px 24px; }
		.pm-meta-field { display: flex; flex-direction: column; gap: 4px; }
		.pm-meta-field label { font-weight: 600; font-size: 13px; color: #1d2327; }
		.pm-meta-field input,
		.pm-meta-field select { padding: 8px 10px; border: 1px solid #8c8f94; border-radius: 4px; font-size: 14px; }
		.pm-meta-field input:focus,
		.pm-meta-field select:focus { border-color: #2271b1; box-shadow: 0 0 0 1px #2271b1; outline: none; }
		.pm-meta-full { grid-column: 1 / -1; }
		.pm-meta-hint { font-size: 12px; color: #646970; margin-top: 2px; }
	</style>
	<div class="pm-meta-grid">
		<div class="pm-meta-field">
			<label for="efir_datetime">📅 Дата и время эфира (МСК)</label>
			<input type="datetime-local" id="efir_datetime" name="efir_datetime" value="<?php echo esc_attr( $datetime ); ?>">
		</div>
		<div class="pm-meta-field">
			<label for="efir_duration">⏱ Длительность (мин)</label>
			<input type="number" id="efir_duration" name="efir_duration" value="<?php echo esc_attr( $duration ); ?>" placeholder="90" min="1" max="480">
		</div>
		<div class="pm-meta-field">
			<label for="efir_speaker">👤 Спикер(ы)</label>
			<input type="text" id="efir_speaker" name="efir_speaker" value="<?php echo esc_attr( $speaker ); ?>" placeholder="Проф. Д.А. Искра, к.м.н. Е.В. Волкова">
		</div>
		<div class="pm-meta-field">
			<label for="efir_format">🎬 Формат</label>
			<select id="efir_format" name="efir_format">
				<?php foreach ( $formats as $key => $label ) : ?>
					<option value="<?php echo $key; ?>" <?php selected( $format, $key ); ?>><?php echo $label; ?></option>
				<?php endforeach; ?>
			</select>
		</div>
		<div class="pm-meta-field">
			<label for="efir_status">📡 Статус</label>
			<select id="efir_status" name="efir_status">
				<?php foreach ( $statuses as $key => $label ) : ?>
					<option value="<?php echo $key; ?>" <?php selected( $status, $key ); ?>><?php echo $label; ?></option>
				<?php endforeach; ?>
			</select>
		</div>
		<div class="pm-meta-field">
			<label for="efir_stream_url">📡 Ссылка на трансляцию</label>
			<input type="url" id="efir_stream_url" name="efir_stream_url" value="<?php echo esc_url( $stream ); ?>" placeholder="https://painmed.ru/online/...">
			<span class="pm-meta-hint">Для статуса «Идёт сейчас» — кнопка «Смотреть»</span>
		</div>
		<div class="pm-meta-field pm-meta-full">
			<label for="efir_video_url">🎥 Ссылка на видеозапись (YouTube / RuTube / VK Video)</label>
			<input type="url" id="efir_video_url" name="efir_video_url" value="<?php echo esc_url( $video ); ?>" placeholder="https://www.youtube.com/watch?v=... или https://rutube.ru/video/...">
			<span class="pm-meta-hint">Для статуса «Запись доступна» — встроенный плеер</span>
		</div>
		<div class="pm-meta-field">
			<label for="efir_type">🌐 Тип мероприятия</label>
			<select id="efir_type" name="efir_type">
				<option value="online" <?php selected( $efir_type, 'online' ); ?>>Онлайн</option>
				<option value="offline" <?php selected( $efir_type, 'offline' ); ?>>Офлайн</option>
			</select>
		</div>
		<div class="pm-meta-field">
			<label for="efir_views">👁 Просмотры</label>
			<input type="number" id="efir_views" name="efir_views" value="<?php echo esc_attr( $views ); ?>" min="0">
			<span class="pm-meta-hint">Автоинкремент при каждом просмотре страницы эфира</span>
		</div>
	</div>
	<?php
}

/**
 * Сохранение мета-полей
 */
function painmed_efir_save_meta( $post_id ) {
	// Проверки безопасности
	if ( ! isset( $_POST['painmed_efir_nonce'] ) ) return;
	if ( ! wp_verify_nonce( $_POST['painmed_efir_nonce'], 'painmed_efir_save' ) ) return;
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if ( ! current_user_can( 'edit_post', $post_id ) ) return;

	$fields = array(
		'efir_datetime'   => '_efir_datetime',
		'efir_speaker'    => '_efir_speaker',
		'efir_format'     => '_efir_format',
		'efir_stream_url' => '_efir_stream_url',
		'efir_video_url'  => '_efir_video_url',
		'efir_status'     => '_efir_status',
		'efir_duration'   => '_efir_duration',
		'efir_type'       => '_efir_type',
		'efir_views'      => '_efir_views',
	);

	foreach ( $fields as $field => $meta_key ) {
		if ( isset( $_POST[ $field ] ) ) {
			$value = sanitize_text_field( $_POST[ $field ] );
			// URL-поля — дополнительная санитизация
			if ( strpos( $meta_key, '_url' ) !== false ) {
				$value = esc_url_raw( $_POST[ $field ] );
			}
			update_post_meta( $post_id, $meta_key, $value );
		}
	}
}
add_action( 'save_post_efir', 'painmed_efir_save_meta' );


/* ──────────────────────────────────────────
   8. HELPER: ФОРМАТ ЭФИРА → ЧЕЛОВЕКОЧИТАЕМОЕ
   ────────────────────────────────────────── */
function painmed_get_format_label( $format ) {
	$map = array(
		'webinar'  => 'Совет экспертов',
		'master'   => 'Мастер-класс',
		'conf'     => 'Конференция',
		'clinical' => 'Клинический разбор',
		'game'     => 'Телеигра',
		'ai'       => 'Диалоги с ИИ',
		'pharmacy' => 'Аптека',
	);
	return isset( $map[ $format ] ) ? $map[ $format ] : $format;
}

function painmed_get_format_emoji( $format ) {
	$map = array(
		'webinar'  => '🎙',
		'master'   => '🎓',
		'conf'     => '🏛',
		'clinical' => '🔬',
		'game'     => '🎯',
		'ai'       => '🤖',
		'pharmacy' => '💊',
	);
	return isset( $map[ $format ] ) ? $map[ $format ] : '📺';
}

function painmed_get_status_label( $status ) {
	$map = array(
		'upcoming' => 'Предстоящий',
		'live'     => 'Идёт сейчас',
		'archive'  => 'Запись доступна',
	);
	return isset( $map[ $status ] ) ? $map[ $status ] : $status;
}

function painmed_get_status_class( $status ) {
	$map = array(
		'upcoming' => 'status-upcoming',
		'live'     => 'status-live',
		'archive'  => 'status-archive',
	);
	return isset( $map[ $status ] ) ? $map[ $status ] : '';
}

/**
 * Конвертация YouTube/RuTube/VK URL в embed URL
 */
function painmed_get_embed_url( $url ) {
	// YouTube
	if ( preg_match( '/youtube\.com\/watch\?v=([a-zA-Z0-9_-]+)/', $url, $m ) ) {
		return 'https://www.youtube.com/embed/' . $m[1];
	}
	if ( preg_match( '/youtu\.be\/([a-zA-Z0-9_-]+)/', $url, $m ) ) {
		return 'https://www.youtube.com/embed/' . $m[1];
	}
	// RuTube
	if ( preg_match( '/rutube\.ru\/video\/([a-zA-Z0-9]+)/', $url, $m ) ) {
		return 'https://rutube.ru/play/embed/' . $m[1];
	}
	// VK Video
	if ( preg_match( '/vkvideo\.ru/', $url ) || preg_match( '/vk\.com\/video/', $url ) ) {
		return $url; // VK embed нужно формировать вручную через oid_id
	}
	return $url;
}


/* ──────────────────────────────────────────
   9. AJAX — АРХИВ ТРАНСЛЯЦИЙ (фильтрация + load more)
   ────────────────────────────────────────── */
function painmed_arhiv_load_more() {
	check_ajax_referer( 'painmed_arhiv_nonce', 'nonce' );

	$paged  = isset( $_POST['page'] )    ? absint( $_POST['page'] )                 : 1;
	$fmt    = isset( $_POST['format'] )   ? sanitize_text_field( $_POST['format'] )  : '';
	$search = isset( $_POST['search'] )   ? sanitize_text_field( $_POST['search'] )  : '';
	$sort   = isset( $_POST['sort'] )     ? sanitize_text_field( $_POST['sort'] )    : 'newest';
	$year   = isset( $_POST['year'] )     ? sanitize_text_field( $_POST['year'] )    : '';
	$type   = isset( $_POST['type'] )     ? sanitize_text_field( $_POST['type'] )    : '';

	$meta_query = array(
		array( 'key' => '_efir_status', 'value' => 'archive' ),
	);

	if ( $fmt ) {
		$meta_query[] = array( 'key' => '_efir_format', 'value' => $fmt );
	}
	if ( $type ) {
		$meta_query[] = array( 'key' => '_efir_type', 'value' => $type );
	}

	// Сортировка
	$orderby = 'meta_value';
	$meta_key = '_efir_datetime';
	$order = 'DESC';
	if ( $sort === 'oldest' ) {
		$order = 'ASC';
	} elseif ( $sort === 'popular' ) {
		$meta_key = '_efir_views';
		$orderby = 'meta_value_num';
		$order = 'DESC';
	}

	$args = array(
		'post_type'      => 'efir',
		'posts_per_page' => 12,
		'paged'          => $paged,
		'meta_key'       => $meta_key,
		'orderby'        => $orderby,
		'order'          => $order,
		'meta_query'     => $meta_query,
	);

	if ( $search ) {
		$args['s'] = $search;
	}

	// Фильтр по году (через _efir_datetime LIKE 'YYYY%')
	if ( $year && is_numeric( $year ) ) {
		$meta_query[] = array(
			'key'     => '_efir_datetime',
			'value'   => $year,
			'compare' => 'LIKE',
		);
		$args['meta_query'] = $meta_query;
	}

	$query = new WP_Query( $args );
	$html  = '';

	if ( $query->have_posts() ) {
		ob_start();
		while ( $query->have_posts() ) {
			$query->the_post();
			$format   = get_post_meta( get_the_ID(), '_efir_format', true );
			$datetime = get_post_meta( get_the_ID(), '_efir_datetime', true );
			$speaker  = get_post_meta( get_the_ID(), '_efir_speaker', true );
			$duration = get_post_meta( get_the_ID(), '_efir_duration', true );
			$views    = get_post_meta( get_the_ID(), '_efir_views', true );
			if ( ! $views ) $views = 0;
			?>
			<a href="<?php the_permalink(); ?>" class="arh-card arh-fade-in">
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
						<span>👁 <?php echo esc_html( $views ); ?></span>
					</div>
				</div>
			</a>
			<?php
		}
		$html = ob_get_clean();
		wp_reset_postdata();
	}

	wp_send_json_success( array(
		'html'       => $html,
		'found'      => $query->found_posts,
		'max_pages'  => $query->max_num_pages,
	) );
}
add_action( 'wp_ajax_painmed_arhiv_load',        'painmed_arhiv_load_more' );
add_action( 'wp_ajax_nopriv_painmed_arhiv_load',  'painmed_arhiv_load_more' );


/* ──────────────────────────────────────────
   10. СЧЁТЧИК ПРОСМОТРОВ ЭФИРА
   ────────────────────────────────────────── */
function painmed_increment_efir_views() {
	if ( is_singular( 'efir' ) && ! is_admin() ) {
		$id    = get_the_ID();
		$views = (int) get_post_meta( $id, '_efir_views', true );
		update_post_meta( $id, '_efir_views', $views + 1 );
	}
}
add_action( 'wp', 'painmed_increment_efir_views' );
