<?php
/**
 * Template Name: Главная страница
 * V5 Hybrid — редизайн главной страницы Painmed
 *
 * @package Painmed
 */

get_header();
?>

<!-- ══ HERO — тёмная сцена ══ -->
<section class="pm-hero">
  <svg class="pm-hero-bg" viewBox="0 0 800 800" aria-hidden="true">
    <defs>
      <radialGradient id="pmHeroGrad" cx="50%" cy="50%">
        <stop offset="0%" stop-color="var(--pm-teal-300)" stop-opacity="0.6"/>
        <stop offset="100%" stop-color="var(--pm-teal-300)" stop-opacity="0"/>
      </radialGradient>
    </defs>
    <circle cx="400" cy="400" r="380" fill="url(#pmHeroGrad)"/>
    <circle cx="400" cy="400" r="60"  fill="none" stroke="var(--pm-teal-400)" stroke-width="0.8" opacity="0.40"/>
    <circle cx="400" cy="400" r="108" fill="none" stroke="var(--pm-teal-400)" stroke-width="0.8" opacity="0.36"/>
    <circle cx="400" cy="400" r="156" fill="none" stroke="var(--pm-teal-400)" stroke-width="0.8" opacity="0.32"/>
    <circle cx="400" cy="400" r="204" fill="none" stroke="var(--pm-teal-400)" stroke-width="0.8" opacity="0.28"/>
    <circle cx="400" cy="400" r="252" fill="none" stroke="var(--pm-teal-400)" stroke-width="0.8" opacity="0.24"/>
    <circle cx="400" cy="400" r="300" fill="none" stroke="var(--pm-teal-400)" stroke-width="0.8" opacity="0.20"/>
    <circle cx="400" cy="400" r="348" fill="none" stroke="var(--pm-teal-400)" stroke-width="0.8" opacity="0.16"/>
  </svg>

  <div class="pm-hero-inner">

    <!-- Левая колонка: текст и кнопки -->
    <div>
      <div class="pm-hero-eyebrow">Сезон IX · 2026 · НЭСПРИМ × СЗОИБ</div>
      <h1>Painmed — современная<br>образовательная<br><em>платформа для врачей</em></h1>
      <p class="pm-hero-sub">Прямые эфиры с ведущими экспертами России, конференция NeuroRussia, школы коморбидной патологии и ИИ-консультант в одной образовательной программе.</p>
      <div class="pm-hero-actions">
        <a href="https://painmed.ru/online/" class="btn-primary">Смотреть эфиры</a>
        <a href="/meropriyatiya/" class="btn-ghost">
          <span class="btn-ghost-icon">▶</span>
          Все мероприятия
        </a>
      </div>
      <div class="pm-hero-partners">
        <span>Партнёры:</span>
        <span>НЭСПРИМ</span>
        <span>СЗОИБ</span>
        <span>Театр Монплезир</span>
      </div>
    </div>

    <!-- Правая колонка: карточка события с счётчиком -->
    <div class="pm-hero-card">
      <div class="pm-hero-card-poster">NeuroRussia · постер</div>
      <div class="pm-hero-card-body">
        <div class="pm-hero-card-meta-top">
          <span>● Следующий эфир</span>
          <span>Онлайн</span>
        </div>
        <h3>Современные подходы к лечению хронической боли</h3>
        <p>Живая дискуссия ведущих экспертов России. Модерирует проф. Д.А. Искра.</p>
        <div class="pm-hero-card-grid">
          <div>
            <div class="label">Когда</div>
            <div class="val">25 марта 2026</div>
          </div>
          <div>
            <div class="label">Время</div>
            <div class="val">19:00 МСК</div>
          </div>
        </div>
        <div class="pm-countdown">
          <div class="pm-countdown-block">
            <span class="pm-countdown-num" id="hcd-d">00</span>
            <span class="pm-countdown-label">дней</span>
          </div>
          <div class="pm-countdown-block">
            <span class="pm-countdown-num" id="hcd-h">00</span>
            <span class="pm-countdown-label">часов</span>
          </div>
          <div class="pm-countdown-block">
            <span class="pm-countdown-num" id="hcd-m">00</span>
            <span class="pm-countdown-label">минут</span>
          </div>
          <div class="pm-countdown-block">
            <span class="pm-countdown-num" id="hcd-s">00</span>
            <span class="pm-countdown-label">секунд</span>
          </div>
        </div>
        <a href="https://painmed.ru/online/" class="pm-hero-card-cta">▶ Смотреть онлайн →</a>
      </div>
    </div>

  </div>
</section>

<!-- ══ LIVE RIBBON ══ -->
<section class="pm-live">
  <div class="pm-live-inner">
    <div class="pm-live-bar">
      <span class="pm-live-tag">LIVE</span>
      <span class="pm-live-text">Малый совет экспертов: <strong>дифференциальная диагностика ишиаса</strong> · 2 спикера</span>
      <span class="pm-live-watchers">1 247 врачей смотрят</span>
      <a href="https://painmed.ru/online/" class="btn-primary">Подключиться</a>
    </div>
  </div>
</section>

<!-- ══ PROGRAMS — журнальная editorial-сетка 3×2 ══ -->
<section class="pm-programs">
  <div class="section-inner">
    <div class="pm-sec-head">
      <div class="pm-sec-label">
        <span>§ 01</span>
        <span class="pm-sec-label-line"></span>
        <span>Программы</span>
      </div>
      <div class="pm-sec-head-right">
        <h2 class="pm-sec-title">
          Шесть форматов обучения, <em>построенных вокруг практики, а не лекций.</em>
        </h2>
        <a href="/meropriyatiya/" class="pm-sec-link">Все программы</a>
      </div>
    </div>

    <div class="pm-programs-grid">

      <a href="/meropriyatiya/#neurorussia" class="pm-program is-accent">
        <div class="pm-program-meta-top"><span>01</span><span>оффлайн</span></div>
        <h3>NeuroRussia</h3>
        <p>Всероссийская конференция в Санкт-Петербурге. Союз медицины и искусства. Наука, мастер-классы, театр «Монплезир».</p>
        <div class="pm-program-footer"><span>Ежегодно · СПб</span><span>подробнее →</span></div>
      </a>

      <a href="/meropriyatiya/#shkoly" class="pm-program">
        <div class="pm-program-meta-top"><span>02</span><span>оффлайн</span></div>
        <h3>Школы коморбидной патологии</h3>
        <p>Южная и Восточная школы, Петербургские вечера, Вечерняя Москва — очные встречи без скучных лекций.</p>
        <div class="pm-program-footer"><span>2× в год · 4 региона</span><span>подробнее →</span></div>
      </a>

      <a href="/meropriyatiya/#sovety" class="pm-program">
        <div class="pm-program-meta-top"><span>03</span><span>онлайн</span></div>
        <h3>Врач — уровень Эксперт</h3>
        <p>Еженедельные эфиры в ТВ-формате. Большой и Малый совет экспертов. Живые дискуссии ведущих специалистов России.</p>
        <div class="pm-program-footer"><span>Еженедельно</span><span>смотреть →</span></div>
      </a>

      <a href="/meropriyatiya/#igra" class="pm-program">
        <div class="pm-program-meta-top"><span>04</span><span>онлайн</span></div>
        <h3>Занимательная медицина</h3>
        <p>Интеллектуальная телеигра. 5 клинических вопросов высокого уровня сложности в игровом формате.</p>
        <div class="pm-program-footer"><span>Игровой формат</span><span>смотреть →</span></div>
      </a>

      <a href="/meropriyatiya/#apteka" class="pm-program">
        <div class="pm-program-meta-top"><span>05</span><span>онлайн</span></div>
        <h3>Аптека коморбидного пациента</h3>
        <p>Клинико-фармакологический разбор — дозировки, взаимодействия и безопасные схемы применения препаратов.</p>
        <div class="pm-program-footer"><span>Руководство к действию</span><span>смотреть →</span></div>
      </a>

      <a href="/meropriyatiya/#dialogi" class="pm-program">
        <div class="pm-program-meta-top"><span>06</span><span>онлайн</span></div>
        <h3>Диалоги с нейросетью</h3>
        <p>Профессор Искра и ИИ-ассистент Эйболит — клинические вопросы через призму искусственного интеллекта.</p>
        <div class="pm-program-footer"><span>AI-формат</span><span>смотреть →</span></div>
      </a>

    </div>
  </div>
</section>

<!-- ══ AI CONSULTANT — тёмный тил с терминалом ══ -->
<section class="pm-ai">
  <div class="pm-ai-inner">

    <div>
      <div class="pm-ai-eyebrow">§ 02 · ИИ-Консультант</div>
      <h2>Коллега, который<br><em>не спит</em> и читал всё.</h2>
      <p class="pm-ai-sub">ИИ-Консультант Painmed обучен на актуальных клинических рекомендациях и материалах эфиров «Малого совета экспертов». Отвечает на медицинские вопросы 24/7, цитирует источники.</p>
      <a href="/ai-consultant/" class="btn-primary">Открыть консультанта →</a>
    </div>

    <div class="pm-ai-terminal">
      <div class="pm-ai-term-head">painmed.ai · сессия открыта</div>
      <div class="pm-ai-term-q">
        <span class="pm-ai-term-q-text">Является ли нестабильная боль в спине показанием к МРТ поясничного отдела?</span>
      </div>
      <div class="pm-ai-term-a">
        Да, при наличии «красных флагов» — нестабильность, радикулопатия, травма в анамнезе — МРТ поясничного отдела показана. Также МРТ рекомендована при боли длительностью более 6 недель без положительной динамики на фоне консервативной терапии<span class="pm-ai-term-cursor">▌</span>
        <div class="pm-ai-term-source">src: Клинические рекомендации МЗ РФ · Малый совет №38</div>
      </div>
    </div>

  </div>
</section>

<!-- ══ BENEFITS ══ -->
<section class="section benefits">
  <div class="section-inner">
    <div class="section-header">
      <div class="section-label">§ 03 ── Преимущества</div>
      <h2 class="section-title">Бесплатно для <em>врачей</em> при условии регистрации</h2>
      <p class="section-desc">Доступ к эфирам, архиву и членству в СЗОИБ — без платы, навсегда</p>
    </div>
    <div class="benefits-grid">
      <div class="benefit-card">
        <div class="benefit-icon">👥</div>
        <h3>Членство в СЗОИБ</h3>
        <p>Присоединяйтесь к профессиональному сообществу специалистов Северо-Западного общества по изучению боли</p>
      </div>
      <div class="benefit-card">
        <div class="benefit-icon">📋</div>
        <h3>Полный доступ к эфирам</h3>
        <p>Участвуйте в прямых трансляциях, задавайте вопросы экспертам в чате и получайте уведомления о новых событиях</p>
      </div>
      <div class="benefit-card">
        <div class="benefit-icon">🎬</div>
        <h3>Архив трансляций</h3>
        <p>Полный доступ ко всем записям мероприятий — более 100 выпусков с фильтрацией по теме и формату</p>
      </div>
    </div>
  </div>
</section>

<!-- ══ RECENT — последние эфиры ══ -->
<?php
$recent_efirs = new WP_Query( array(
	'post_type'      => 'efir',
	'posts_per_page' => 3,
	'meta_key'       => '_efir_datetime',
	'orderby'        => 'meta_value',
	'order'          => 'DESC',
	'meta_query'     => array(
		array( 'key' => '_efir_status', 'value' => 'archive' ),
	),
) );
?>
<section class="section">
  <div class="section-inner">
    <div class="section-header-row">
      <div>
        <div class="section-label">§ 04 ── Видеоархив</div>
        <h2 class="section-title">Последние <em>трансляции</em></h2>
      </div>
      <a href="/arhiv/" class="btn-link">Весь архив</a>
    </div>
    <div class="recent-grid">

      <?php if ( $recent_efirs->have_posts() ) : ?>
        <?php while ( $recent_efirs->have_posts() ) : $recent_efirs->the_post(); ?>
          <?php
          $format   = get_post_meta( get_the_ID(), '_efir_format', true );
          $datetime = get_post_meta( get_the_ID(), '_efir_datetime', true );
          $duration = get_post_meta( get_the_ID(), '_efir_duration', true );
          $emoji    = painmed_get_format_emoji( $format );
          $label    = painmed_get_format_label( $format );
          ?>
          <a href="<?php the_permalink(); ?>" class="recent-card">
            <div class="recent-thumb">
              <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail( 'medium' ); ?>
              <?php else : ?>
                <span><?php echo $emoji; ?></span>
              <?php endif; ?>
              <div class="recent-tag"><?php echo esc_html( $label ); ?></div>
            </div>
            <div class="recent-body">
              <h3><?php the_title(); ?></h3>
              <div class="recent-meta">
                <?php if ( $datetime ) : ?><span>📅 <?php echo esc_html( date_i18n( 'j M Y', strtotime( $datetime ) ) ); ?></span><?php endif; ?>
                <?php if ( $duration ) : ?><span>⏱ <?php echo esc_html( $duration ); ?> мин</span><?php endif; ?>
              </div>
            </div>
          </a>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>

      <?php else : ?>
        <!-- Статические заглушки если эфиров ещё нет -->
        <a href="#" class="recent-card">
          <div class="recent-thumb" style="background:linear-gradient(135deg,#edf4ff,#e4f4f8);">
            <span>🤖</span>
            <div class="recent-tag">Диалоги с ИИ</div>
          </div>
          <div class="recent-body">
            <h3>Инновационные методы лечения мигрени</h3>
            <div class="recent-meta">
              <span>📅 11 мар 2026</span>
              <span>⏱ 90 мин</span>
            </div>
          </div>
        </a>
        <a href="#" class="recent-card">
          <div class="recent-thumb" style="background:linear-gradient(135deg,#f0f4ff,#e8f0fb);">
            <span>🎙</span>
            <div class="recent-tag">Совет экспертов</div>
          </div>
          <div class="recent-body">
            <h3>Междисциплинарный подход к лечению боли</h3>
            <div class="recent-meta">
              <span>📅 12 мар 2026</span>
              <span>⏱ 90 мин</span>
            </div>
          </div>
        </a>
        <a href="#" class="recent-card">
          <div class="recent-thumb" style="background:linear-gradient(135deg,#edfaf3,#e4f4ee);">
            <span>💊</span>
            <div class="recent-tag">Аптека</div>
          </div>
          <div class="recent-body">
            <h3>Фармакотерапия хронической боли: новые рекомендации</h3>
            <div class="recent-meta">
              <span>📅 8 мар 2026</span>
              <span>⏱ 90 мин</span>
            </div>
          </div>
        </a>
      <?php endif; ?>

    </div>
  </div>
</section>

<!-- ══ COMMUNITY CTA — тёмный тил с формой регистрации ══ -->
<section class="pm-cta">
  <div class="pm-cta-inner">

    <div>
      <div class="pm-cta-eyebrow">Сообщество</div>
      <h2>Регистрация — 90 секунд.<br><em>Доступ — навсегда.</em></h2>
      <p class="pm-cta-sub">Подтвердите специальность, выберите интересные форматы — и получите доступ к эфирам, архиву и ИИ-консультанту. Записи всех эфиров доступны на наших платформах.</p>
      <div class="pm-cta-socials">
        <a href="https://vk.com/protivboli" target="_blank" rel="noopener">VK ↗</a>
        <a href="https://vkvideo.ru/@protivboli" target="_blank" rel="noopener">VKvideo ↗</a>
        <a href="https://rutube.ru/channel/24339226" target="_blank" rel="noopener">RuTube ↗</a>
        <a href="https://www.youtube.com/@СЗОИБ" target="_blank" rel="noopener">YouTube ↗</a>
      </div>
    </div>

    <div class="pm-cta-form">
      <div class="pm-cta-form-step">Шаг 1 из 3 — Укажите почту</div>
      <input type="email" placeholder="Email или телефон" />
      <button type="button">Начать регистрацию →</button>
      <div class="pm-cta-form-note">Бесплатно. Только для практикующих врачей.</div>
    </div>

  </div>
</section>

<!-- ══ TESTIMONIALS ══ -->
<section class="section testimonials">
  <div class="section-inner">
    <div class="section-header">
      <div class="section-label">§ 05 ── Отзывы коллег</div>
      <h2 class="section-title">Что говорят <em>врачи</em></h2>
    </div>
    <div class="testimonials-grid">
      <div class="testimonial-card">
        <div class="testimonial-quote">Платформа PAINMED.RU стала незаменимым инструментом для повышения квалификации. Качество лекций и практических занятий на высшем уровне.</div>
        <div class="testimonial-author">
          <div class="testimonial-avatar">👩‍⚕️</div>
          <div>
            <div class="testimonial-name">Доктор Елена Волкова</div>
            <div class="testimonial-role">Невролог, к.м.н.</div>
          </div>
        </div>
      </div>
      <div class="testimonial-card">
        <div class="testimonial-quote">ИИ-Консультант помогает в сложных клинических ситуациях. Это будущее медицинского образования и практики. Рекомендую всем коллегам.</div>
        <div class="testimonial-author">
          <div class="testimonial-avatar">👨‍⚕️</div>
          <div>
            <div class="testimonial-name">Профессор Михаил Кузнецов</div>
            <div class="testimonial-role">Анестезиолог-реаниматолог</div>
          </div>
        </div>
      </div>
      <div class="testimonial-card">
        <div class="testimonial-quote">Благодаря участию в мероприятиях СЗОИБ я значительно расширила компетенции в области лечения хронической боли и коморбидной патологии.</div>
        <div class="testimonial-author">
          <div class="testimonial-avatar">👩‍⚕️</div>
          <div>
            <div class="testimonial-name">Доктор Анна Петрова</div>
            <div class="testimonial-role">Ревматолог</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══ SUPPORTERS ══ -->
<section class="section">
  <div class="section-inner">
    <div class="section-header">
      <div class="section-label">§ 06 ── При поддержке</div>
      <h2 class="section-title">Наши <em>партнёры</em></h2>
    </div>
    <div class="supporters-grid">
      <div class="supporter-card">
        <div class="supporter-icon">🏛</div>
        <div>
          <div class="supporter-abbr">СЗОИБ</div>
          <div class="supporter-name">Северо-западное общество по изучению боли</div>
          <div class="supporter-desc">Региональная общественная организация, объединяющая специалистов в области изучения и лечения болевых синдромов</div>
        </div>
      </div>
      <div class="supporter-card">
        <div class="supporter-icon">🔬</div>
        <div>
          <div class="supporter-abbr">НЭСПРИМ</div>
          <div class="supporter-name">Национальный экспертный совет по развитию инновационной медицины</div>
          <div class="supporter-desc">Организация, способствующая развитию и внедрению инновационных медицинских технологий и методов лечения</div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
