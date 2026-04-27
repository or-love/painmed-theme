<?php
/**
 * Template Name: Главная страница
 * Шаблон главной страницы Painmed.ru
 *
 * @package Painmed
 */

get_header();
?>

<!-- HERO -->
<section class="hero">
  <div class="hero-bg-circle"></div>
  <div class="hero-bg-dots"></div>
  <div class="hero-inner">
    <div class="hero-left">
      <div class="hero-badge">Новый совет экспертов</div>
      <h1>PAINMED — Современная<br>образовательная платформа<br>для <em>врачей</em></h1>
      <p class="hero-sub">Образовательная платформа для практикующих врачей. Прямые эфиры с ведущими экспертами России, архив трансляций и клинические разборы.</p>
      <div class="hero-actions">
        <a href="https://painmed.ru/online/" class="btn-primary">Смотреть эфиры</a>
        <a href="/meropriyatiya/" class="btn-ghost">Все мероприятия</a>
      </div>
      <div class="hero-stats">
        <div class="hero-stat"><span class="hero-stat-num">100<span>+</span></span><span class="hero-stat-label">выпусков в архиве</span></div>
        <div class="hero-stat"><span class="hero-stat-num">30<span>+</span></span><span class="hero-stat-label">специальностей врачей</span></div>
        <div class="hero-stat"><span class="hero-stat-num">∞</span><span class="hero-stat-label">бесплатное участие</span></div>
      </div>
    </div>

    <div class="hero-right">
      <div class="hero-event-card">
        <div class="hero-event-stripe"></div>
        <div class="hero-event-body">
          <div class="hero-event-label">Следующий эфир</div>
          <h3>Современные подходы к лечению хронической боли</h3>
          <div class="hero-event-meta">📅 25 марта 2026 · 19:00 МСК</div>
          <div class="hero-countdown">
            <div class="hcd-block"><span class="hcd-num" id="hcd-d">00</span><span class="hcd-label">дней</span></div>
            <div class="hcd-block"><span class="hcd-num" id="hcd-h">00</span><span class="hcd-label">часов</span></div>
            <div class="hcd-block"><span class="hcd-num" id="hcd-m">00</span><span class="hcd-label">минут</span></div>
            <div class="hcd-block"><span class="hcd-num" id="hcd-s">00</span><span class="hcd-label">секунд</span></div>
          </div>
          <div class="hero-event-note">🔒 Полный доступ после регистрации</div>
          <a href="https://painmed.ru/online/" class="hero-event-cta">▶ Смотреть онлайн</a>
        </div>
        <div class="hero-event-card-footer">Добавить в календарь →</div>
      </div>
    </div>
  </div>
</section>

<!-- FORMATS -->
<section class="section formats">
  <div class="section-inner">
    <div class="section-header-row">
      <div>
        <div class="section-label">Форматы</div>
        <h2 class="section-title">Наши <em>мероприятия</em></h2>
        <p class="section-desc">Онлайн-эфиры и очные школы — 6 форматов для профессионального роста</p>
      </div>
      <a href="/meropriyatiya/" class="btn-link">Все мероприятия</a>
    </div>
    <div class="formats-grid">

      <a href="/meropriyatiya/#sovety" class="format-card">
        <div class="format-top-line line-cyan"></div>
        <div class="format-icon-wrap">
          <div class="format-icon fi-cyan">🎙</div>
          <span class="format-badge badge-online">Онлайн</span>
        </div>
        <h3>Советы экспертов</h3>
        <p>Большой совет, Малый совет, Вопросы эксперту — живые дискуссии ведущих специалистов России</p>
        <div class="format-card-footer">
          <span class="format-count">Выпусков: <strong>60+</strong></span>
          <span class="btn-link">Смотреть</span>
        </div>
      </a>

      <a href="/meropriyatiya/#igra" class="format-card">
        <div class="format-top-line line-amber"></div>
        <div class="format-icon-wrap">
          <div class="format-icon fi-amber">🎯</div>
          <span class="format-badge badge-online">Онлайн</span>
        </div>
        <h3>Интеллектуальная телеигра</h3>
        <p>«Занимательная медицина» — 5 клинических вопросов высокой сложности в игровом формате</p>
        <div class="format-card-footer">
          <span class="format-count">Выпусков: <strong>20+</strong></span>
          <span class="btn-link">Смотреть</span>
        </div>
      </a>

      <a href="/meropriyatiya/#apteka" class="format-card">
        <div class="format-top-line line-green"></div>
        <div class="format-icon-wrap">
          <div class="format-icon fi-green">💊</div>
          <span class="format-badge badge-online">Онлайн</span>
        </div>
        <h3>Аптека коморбидного пациента</h3>
        <p>Клинико-фармакологический разбор — полипрагмазия, взаимодействия и безопасные схемы</p>
        <div class="format-card-footer">
          <span class="format-count">Выпусков: <strong>15+</strong></span>
          <span class="btn-link">Смотреть</span>
        </div>
      </a>

      <a href="/meropriyatiya/#dialogi" class="format-card">
        <div class="format-top-line line-indigo"></div>
        <div class="format-icon-wrap">
          <div class="format-icon fi-indigo">🤖</div>
          <span class="format-badge badge-online">Онлайн</span>
        </div>
        <h3>Диалоги с нейросетью</h3>
        <p>Профессор Искра и ИИ-ассистент Эйболит — клинические вопросы через призму искусственного интеллекта</p>
        <div class="format-card-footer">
          <span class="format-count">Выпусков: <strong>10+</strong></span>
          <span class="btn-link">Смотреть</span>
        </div>
      </a>

      <a href="/meropriyatiya/#shkoly" class="format-card">
        <div class="format-top-line line-rose"></div>
        <div class="format-icon-wrap">
          <div class="format-icon fi-rose">🏫</div>
          <span class="format-badge badge-offline">Офлайн</span>
        </div>
        <h3>Школы коморбидной патологии</h3>
        <p>Южная, Восточная, Петербуржские вечера, Вечерняя Москва — очные встречи без скучных лекций</p>
        <div class="format-card-footer">
          <span class="format-count">4 региональных цикла</span>
          <span class="btn-link">Подробнее</span>
        </div>
      </a>

      <a href="/meropriyatiya/#neurorussia" class="format-card">
        <div class="format-top-line line-sky"></div>
        <div class="format-icon-wrap">
          <div class="format-icon fi-sky">🏛</div>
          <span class="format-badge badge-offline">СПб + Онлайн</span>
        </div>
        <h3>Конференция NeuroRussia</h3>
        <p>Флагманское ежегодное событие — союз медицины и искусства. Наука, мастер-классы, театр «Монплезир»</p>
        <div class="format-card-footer">
          <span class="format-count">Ежегодно</span>
          <span class="btn-link">Подробнее</span>
        </div>
      </a>

    </div>
  </div>
</section>

<!-- AI CONSULTANT -->
<section class="ai-section">
  <div class="ai-inner">
    <div class="ai-left">
      <div class="ai-label">🤖 Медицинский ИИ-Консультант</div>
      <h2>Клинические решения<br>с поддержкой <em>искусственного интеллекта</em></h2>
      <p>ИИ-Консультант Painmed обучен на актуальных клинических рекомендациях и помогает врачам в сложных клинических ситуациях — 24/7, на русском языке.</p>
      <div class="ai-features">
        <div class="ai-feat">Ответы на медицинские вопросы из клинических рекомендаций</div>
        <div class="ai-feat">Анализ клинических данных и симптомов пациента</div>
        <div class="ai-feat">Помощь в принятии обоснованных клинических решений</div>
        <div class="ai-feat">Мультиязычная поддержка, доступна 24/7</div>
      </div>
      <a href="/ai-consultant/" class="btn-primary-outline">Попробовать ИИ-Консультант</a>
    </div>
    <div class="ai-right">
      <div class="ai-chat">
        <div class="ai-chat-header">
          <div class="ai-chat-avatar">🤖</div>
          <div>
            <div class="ai-chat-name">Консультант ИИ</div>
            <div class="ai-chat-status">● онлайн</div>
          </div>
        </div>
        <div class="ai-messages">
          <div class="msg msg-user">Является ли нестабильная боль в спине показанием к МРТ поясничного отдела?</div>
          <div class="msg msg-bot">Да, при наличии «красных флагов» — нестабильность, радикулопатия, травма в анамнезе — МРТ поясничного отдела показана. Также МРТ рекомендована при боли длительностью более 6 недель без положительной динамики на фоне консервативной терапии...</div>
        </div>
        <div class="ai-chat-input">
          <span>Задайте вопрос консультанту...</span>
          <div class="ai-send">→</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- BENEFITS -->
<section class="section benefits">
  <div class="section-inner">
    <div class="section-header">
      <div class="section-label">Для зарегистрированных врачей</div>
      <h2 class="section-title">Преимущества <em>регистрации</em></h2>
      <p class="section-desc">Бесплатно для всех врачей при условии регистрации</p>
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

<!-- RECENT -->
<section class="section">
  <div class="section-inner">
    <div class="section-header-row">
      <div>
        <div class="section-label">Видеоархив</div>
        <h2 class="section-title">Последние <em>трансляции</em></h2>
      </div>
      <a href="/arhiv/" class="btn-link">Весь архив</a>
    </div>
    <div class="recent-grid">

      <a href="#" class="recent-card">
        <div class="recent-thumb" style="background: linear-gradient(135deg,#edf4ff,#e4f4f8);">
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
        <div class="recent-thumb" style="background: linear-gradient(135deg,#f0f4ff,#e8f0fb);">
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
        <div class="recent-thumb" style="background: linear-gradient(135deg,#edfaf3,#e4f4ee);">
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

    </div>
  </div>
</section>

<!-- MEMBERSHIP CTA -->
<section class="membership-cta">
  <div class="membership-inner">
    <div class="membership-left">
      <h2>Станьте членом <em>СЗОИБ</em></h2>
      <p>Присоединяйтесь к профессиональному сообществу врачей и получите доступ ко всем образовательным материалам платформы Painmed</p>
    </div>
    <div class="membership-actions">
      <a href="#" class="btn-white">Подать заявку на членство</a>
      <span class="membership-note">Бесплатно для практикующих врачей</span>
    </div>
  </div>
</section>

<!-- TESTIMONIALS -->
<section class="section testimonials">
  <div class="section-inner">
    <div class="section-header">
      <div class="section-label">Отзывы коллег</div>
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

<!-- SUPPORTERS -->
<section class="section">
  <div class="section-inner">
    <div class="section-header">
      <div class="section-label">При поддержке</div>
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
