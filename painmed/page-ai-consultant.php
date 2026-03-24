<?php
/**
 * Template Name: ИИ-Консультант
 * Страница AI-Болит — медицинский ИИ-ассистент Painmed
 *
 * @package Painmed
 */

get_header();
?>

<!-- ═══ HERO + АВАТАР ═════════════════════════ -->
<section class="aic-hero">
  <div class="aic-hero-dots"></div>
  <div class="aic-hero-inner">

    <div class="aic-crumbs">
      <a href="<?php echo esc_url( home_url('/') ); ?>">Главная</a><span>›</span><span>ИИ-Консультант</span>
    </div>

    <div class="aic-hero-layout">

      <!-- Левая часть -->
      <div class="aic-hero-left">
        <div class="aic-badge-live"><span class="aic-dot-green"></span>Медицинский ИИ-ассистент</div>
        <h1>Привет, я AI-Болит —<br>ваш цифровой <em>коллега</em></h1>
        <p class="aic-hero-desc">Медицинский ИИ, созданный командой Painmed, помогает врачам находить ответы на клинические вопросы — быстро, структурированно и на русском языке.</p>
        <div class="aic-hero-tags">
          <span class="aic-htag">🕐 Доступен 24/7</span>
          <span class="aic-htag">🇷🇺 На русском языке</span>
          <span class="aic-htag">📋 На основе клинрекомендаций</span>
          <span class="aic-htag">🆓 Бесплатно</span>
        </div>
      </div>

      <!-- Аватар -->
      <div class="aic-hero-right">
        <div class="aic-avatar-wrap">
          <div class="aic-avatar-ring"></div>
          <div class="aic-avatar">🤖</div>
        </div>
        <div class="aic-avatar-name">AI-Болит</div>
        <div class="aic-avatar-sub">Медицинский ИИ-ассистент Painmed<br>при поддержке СЗОИБ и НЭСПРИМ</div>
        <div class="aic-avatar-status"><span class="aic-dot-green"></span> онлайн и готов помочь</div>
      </div>

    </div>
  </div>
</section>

<!-- ═══ КТО Я ТАКОЙ ══════════════════════════ -->
<section class="section aic-whois">
  <div class="section-inner">
    <div class="aic-whois-card">
      <div class="aic-whois-avatar">🤖</div>
      <div class="aic-whois-body">
        <div class="aic-whois-label">От первого лица</div>
        <p>Меня зовут AI-Болит — и да, это игра слов. Как доктор Айболит, я всегда рядом и готов помочь. Но в отличие от него, я не лечу — я думаю вместе с вами.</p>
        <p>Я обучен на актуальных клинических рекомендациях, руководствах и материалах доказательной медицины. Умею быстро структурировать информацию, напомнить о критериях диагностики, подсказать дифференциальный ряд или разобрать вопрос фармакотерапии — особенно там, где пересекаются несколько патологий.</p>
        <p>Коморбидность — моя специализация. Я создан командой Painmed, и эта тема красной нитью проходит через всё, чему я учился.</p>
        <p>Если у вас вопрос, на который я не могу ответить хорошо — я скажу об этом честно и предложу передать его команде Painmed.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══ КОМУ Я ПОЛЕЗЕН ═══════════════════════ -->
<section class="section aic-audience">
  <div class="section-inner">
    <div class="section-label">Кому я полезен</div>
    <h2 class="section-title">Для кого создан <em>AI-Болит</em></h2>

    <div class="aic-audience-grid">
      <div class="aic-aud-card">
        <div class="aic-aud-icon">👩‍⚕️</div>
        <h4>Практикующим врачам</h4>
        <p>Быстрый ответ между пациентами — без копания в методичках и Google</p>
      </div>
      <div class="aic-aud-card">
        <div class="aic-aud-icon">🎓</div>
        <h4>Ординаторам и студентам</h4>
        <p>Разбор тем, подготовка к обходам, структурирование знаний</p>
      </div>
      <div class="aic-aud-card">
        <div class="aic-aud-icon">🏥</div>
        <h4>Врачам смежных специальностей</h4>
        <p>Неврологические нюансы для терапевтов, хирургов, ревматологов</p>
      </div>
      <div class="aic-aud-card">
        <div class="aic-aud-icon">🌙</div>
        <h4>В любое время суток</h4>
        <p>Ночная смена, выходные — без очередей и ожидания</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══ ЧТО УМЕЮ / ГДЕ ГРАНИЦЫ ══════════════ -->
<section class="section aic-capabilities">
  <div class="section-inner">
    <div class="section-label">Возможности и границы</div>
    <h2 class="section-title">Что я <em>умею</em> и где мои границы</h2>

    <div class="aic-cap-grid">
      <div class="aic-cap-col aic-cap-can">
        <h4><span class="aic-cap-check">✅</span> Могу помочь</h4>
        <ul>
          <li>Дифференциальная диагностика</li>
          <li>Фармакотерапия и лекарственные взаимодействия</li>
          <li>Клинические алгоритмы и критерии</li>
          <li>Коморбидные состояния и полипрагмазия</li>
        </ul>
      </div>
      <div class="aic-cap-col aic-cap-cant">
        <h4><span class="aic-cap-cross">🚫</span> Не делаю</h4>
        <ul>
          <li>Не ставлю диагноз пациенту</li>
          <li>Не даю назначений и рецептов</li>
          <li>Не консультирую пациентов напрямую</li>
          <li>Не заменяю эксперта и консилиум</li>
          <li>Могу ошибаться — проверяйте</li>
          <li>Не знаю всё — у меня есть пробелы</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ═══ ДЕМО-ЧАТ ═════════════════════════════ -->
<section class="aic-demo-section">
  <div class="aic-demo-inner">
    <div class="section-label" style="color:var(--cyan);">Демонстрация</div>
    <h2 class="aic-demo-title">Попробуйте <em>прямо сейчас</em></h2>

    <div class="aic-demo-examples">
      <button class="aic-example-btn" data-q="Выбор НПВП при АГ и хронической боли">Выбор НПВП при АГ и хронической боли</button>
      <button class="aic-example-btn" data-q="Критерии нейропатической боли">Критерии нейропатической боли</button>
      <button class="aic-example-btn" data-q="Чем отличается центральная сенситизация от нейропатии?">Центральная сенситизация vs нейропатия</button>
      <button class="aic-example-btn" data-q="Дулоксетин при хронической боли — показания, дозы, противопоказания">Дулоксетин при хронической боли</button>
    </div>

    <div class="aic-chat-widget" id="chatWidget">
      <div class="aic-chat-header">
        <div class="aic-chat-header-avatar">🤖</div>
        <div>
          <div class="aic-chat-header-name">AI-Болит</div>
          <div class="aic-chat-header-status"><span class="aic-dot-green"></span> онлайн</div>
        </div>
      </div>

      <div class="aic-chat-messages" id="chatMessages">
        <div class="aic-msg aic-msg-bot">
          <div class="aic-msg-avatar">🤖</div>
          <div class="aic-msg-bubble">Здравствуйте, коллега! Я AI-Болит — медицинский ИИ-ассистент Painmed. Задайте мне клинический вопрос, и я постараюсь помочь.</div>
        </div>
      </div>

      <div class="aic-chat-typing" id="chatTyping" hidden>
        <div class="aic-msg-avatar">🤖</div>
        <div class="aic-typing-dots"><span></span><span></span><span></span></div>
      </div>

      <div class="aic-chat-input-wrap">
        <textarea id="chatInput" class="aic-chat-input" placeholder="Задайте клинический вопрос..." rows="1"></textarea>
        <button id="chatSend" class="aic-chat-send">→</button>
      </div>
    </div>

    <p class="aic-demo-note">Это демо-версия. Для полного доступа к ИИ-Консультанту — <a href="#">зарегистрируйтесь</a> на платформе.</p>
  </div>
</section>

<!-- ═══ ДИСКЛЕЙМЕР ════════════════════════════ -->
<section class="aic-disclaimer">
  <div class="aic-disclaimer-inner">
    <div class="aic-disclaimer-icon">⚠️</div>
    <div class="aic-disclaimer-body">
      <h4>Важно — прочитайте, пожалуйста</h4>
      <ul class="aic-disclaimer-list">
        <li>AI-Болит — инструмент поддержки принятия решений, не источник абсолютной истины</li>
        <li>Ответственность за клинические решения всегда остаётся за лечащим врачом</li>
        <li>ИИ может ошибаться — всегда проверяйте информацию по первоисточникам</li>
        <li>Ответы AI-Болит не являются медицинскими назначениями</li>
        <li>Платформа предназначена для врачей, а не для пациентов</li>
      </ul>
    </div>
  </div>
</section>

<!-- ═══ ФОРМА КОМАНДЕ ════════════════════════ -->
<section class="section aic-team-section" id="teamSection">
  <div class="section-inner">
    <div class="aic-team-layout">
      <div class="aic-team-text">
        <div class="section-label">Связь с экспертами</div>
        <h2 class="section-title">Нужен реальный ответ<br>от <em>специалиста</em>?</h2>
        <p class="aic-team-desc">Если AI-Болит не смог помочь или вопрос требует мнения живого эксперта — напишите нам. Ваш вопрос может стать темой эфира «Вопросы эксперту» и помочь тысячам коллег.</p>
        <div class="aic-team-features">
          <div class="aic-team-feat">📡 Ответ от эксперта в течение 48 часов</div>
          <div class="aic-team-feat">🎙 Вопрос может стать темой эфира</div>
          <div class="aic-team-feat">🔒 Конфиденциальность гарантирована</div>
        </div>
      </div>
      <div class="aic-team-form-wrap">
        <div class="aic-team-form-card">
          <div class="aic-form-field">
            <label for="aic-name">Ваше имя</label>
            <input type="text" id="aic-name" placeholder="Иван Петрович">
          </div>
          <div class="aic-form-field">
            <label for="aic-email">Email</label>
            <input type="email" id="aic-email" placeholder="doctor@clinic.ru">
          </div>
          <div class="aic-form-field">
            <label for="aic-question">Ваш вопрос</label>
            <textarea id="aic-question" rows="4" placeholder="Опишите клиническую ситуацию или вопрос, который хотели бы разобрать с экспертом..."></textarea>
          </div>
          <button class="btn-primary aic-form-submit" onclick="alert('Спасибо! Ваш вопрос отправлен команде Painmed.')">Отправить вопрос</button>
          <p class="aic-form-hint">Нажимая кнопку, вы соглашаетесь с политикой конфиденциальности</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="membership-cta">
  <div class="membership-inner">
    <div class="membership-left">
      <h2>Попробуйте AI-Болит <em>бесплатно</em></h2>
      <p>Зарегистрируйтесь и получите полный доступ к ИИ-Консультанту и всем материалам платформы</p>
    </div>
    <div class="membership-actions">
      <a href="#" class="btn-white">Зарегистрироваться</a>
      <span class="membership-note">Бесплатно для практикующих врачей</span>
    </div>
  </div>
</section>

<?php get_footer(); ?>
