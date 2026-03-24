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
  <div class="aic-hero-orb1"></div>
  <div class="aic-hero-orb2"></div>
  <div class="aic-hero-dots"></div>
  <div class="aic-hero-inner">
    <div class="aic-hero-layout">

      <!-- Левая часть -->
      <div class="aic-hero-left">
        <div class="aic-crumbs">
          <a href="<?php echo esc_url( home_url('/') ); ?>">Главная</a><span>›</span><span>ИИ-Консультант</span>
        </div>
        <div class="aic-badge-live"><span class="aic-dot-blink"></span>Медицинский ИИ-ассистент</div>
        <h1>Привет, я <em>AI-Болит</em> —<br>ваш цифровой коллега</h1>
        <p class="aic-hero-desc">Я медицинский искусственный интеллект, созданный командой Painmed. Помогаю врачам быстро находить ответы на клинические вопросы, разбираться в сложных ситуациях и готовиться к трудным случаям на приёме.</p>
        <div class="aic-hero-tags">
          <span class="aic-htag">🕐 Доступен 24/7</span>
          <span class="aic-htag">🇷🇺 На русском языке</span>
          <span class="aic-htag">📚 На основе клинрекомендаций</span>
          <span class="aic-htag">🆓 Бесплатно</span>
        </div>
      </div>

      <!-- Аватар-карточка -->
      <div class="aic-hero-right">
        <div class="aic-avatar-card">
          <div class="aic-avatar-wrap">
            <div class="aic-avatar">🤖</div>
          </div>
          <div class="aic-avatar-name"><em>AI</em>-Болит</div>
          <div class="aic-avatar-sub">Медицинский ИИ-ассистент Painmed<br>при поддержке СЗОИБ и НЭСПРИМ</div>
          <div class="aic-avatar-status"><span class="aic-dot-green"></span> онлайн и готов помочь</div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ═══ КТО Я + КОМУ ПОЛЕЗЕН ═════════════════ -->
<section class="section aic-intro">
  <div class="section-inner">
    <div class="aic-intro-grid">
      <div>
        <div class="section-label">Кто я такой</div>
        <div class="aic-speech">
          <div class="aic-speech-text">
            <p>Меня зовут <strong>AI-Болит</strong> — и да, это игра слов. Как доктор Айболит, я всегда рядом и готов помочь. Но в отличие от него, я не лечу — я <em>думаю вместе с вами</em>.</p>
            <p>Я обучен на актуальных клинических рекомендациях, руководствах и материалах доказательной медицины. Умею быстро структурировать информацию, напомнить о критериях диагностики, подсказать дифференциальный ряд или разобрать вопрос фармакотерапии — особенно там, где пересекаются несколько патологий.</p>
            <p><strong>Коморбидность — моя специализация.</strong> Я создан командой Painmed, и эта тема красной нитью проходит через всё, чему я учился.</p>
            <p>Если у вас вопрос, на который я не могу ответить хорошо — я скажу об этом честно и предложу передать его команде Painmed.</p>
          </div>
        </div>
      </div>

      <div>
        <p class="aic-for-whom-title">Кому я полезен</p>
        <div class="aic-for-whom-list">
          <div class="aic-for-card">
            <div class="aic-for-icon">👨‍⚕️</div>
            <div>
              <h4>Практикующим врачам</h4>
              <p>Быстрый ответ на клинический вопрос между пациентами. Не нужно листать руководства — спросите меня.</p>
            </div>
          </div>
          <div class="aic-for-card">
            <div class="aic-for-icon">👩‍🎓</div>
            <div>
              <h4>Ординаторам и студентам</h4>
              <p>Разбор сложных тем, объяснение механизмов, подготовка к обходам и клиническим разборам.</p>
            </div>
          </div>
          <div class="aic-for-card">
            <div class="aic-for-icon">🏥</div>
            <div>
              <h4>Врачам смежных специальностей</h4>
              <p>Терапевт, кардиолог, эндокринолог — если пациент с болью, я помогу разобраться в неврологических нюансах.</p>
            </div>
          </div>
          <div class="aic-for-card">
            <div class="aic-for-icon">🌙</div>
            <div>
              <h4>В любое время суток</h4>
              <p>Трудный случай в ночную смену? Я здесь. Без очередей, без ожидания.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ ЧТО УМЕЮ / ГДЕ ГРАНИЦЫ ══════════════ -->
<section class="section aic-capabilities">
  <div class="section-inner">
    <div class="section-label">Возможности</div>
    <h2 class="section-title" style="margin-bottom:32px">Что я <em>умею</em> — и где мои границы</h2>
    <div class="aic-cap-grid">

      <div class="aic-cap-col">
        <div class="aic-cap-header aic-cap-header-can">✅ &nbsp;Что я делаю хорошо</div>
        <div class="aic-cap-list">
          <div class="aic-cap-item aic-cap-item-can">
            <div class="aic-cap-mark">🔍</div>
            <div class="aic-cap-text"><strong>Дифференциальная диагностика</strong>Помогу выстроить дифференциальный ряд по симптомам, предложу «красные флаги» для исключения опасных состояний.</div>
          </div>
          <div class="aic-cap-item aic-cap-item-can">
            <div class="aic-cap-mark">💊</div>
            <div class="aic-cap-text"><strong>Вопросы фармакотерапии</strong>Лекарственные взаимодействия, нюансы применения при коморбидности, сравнение препаратов по доказательной базе.</div>
          </div>
          <div class="aic-cap-item aic-cap-item-can">
            <div class="aic-cap-mark">📋</div>
            <div class="aic-cap-text"><strong>Клинические алгоритмы</strong>Напомню критерии диагностики, шкалы оценки, протоколы из актуальных клинических рекомендаций.</div>
          </div>
          <div class="aic-cap-item aic-cap-item-can">
            <div class="aic-cap-mark">🧠</div>
            <div class="aic-cap-text"><strong>Коморбидные состояния</strong>Мой «конёк» — пациент с болью, когнитивными нарушениями, метаболическими и сосудистыми рисками одновременно.</div>
          </div>
          <div class="aic-cap-item aic-cap-item-can">
            <div class="aic-cap-mark">📖</div>
            <div class="aic-cap-text"><strong>Объяснение механизмов</strong>Патофизиология, механизмы действия препаратов — объясню понятно и по существу.</div>
          </div>
          <div class="aic-cap-item aic-cap-item-can">
            <div class="aic-cap-mark">📡</div>
            <div class="aic-cap-text"><strong>Передать вопрос команде</strong>Если ответ требует экспертизы — отправлю ваш вопрос напрямую специалистам Painmed.</div>
          </div>
        </div>
      </div>

      <div class="aic-cap-col">
        <div class="aic-cap-header aic-cap-header-cant">⛔ &nbsp;Чего я не делаю</div>
        <div class="aic-cap-list">
          <div class="aic-cap-item aic-cap-item-cant">
            <div class="aic-cap-mark">🚫</div>
            <div class="aic-cap-text"><strong>Не ставлю диагноз конкретному пациенту</strong>Я не знаю вашего пациента. Диагноз — это ваша ответственность, не моя.</div>
          </div>
          <div class="aic-cap-item aic-cap-item-cant">
            <div class="aic-cap-mark">🚫</div>
            <div class="aic-cap-text"><strong>Не даю назначения</strong>Конкретные дозировки для конкретного человека — только лечащий врач. Я могу обсудить принципы — но не «напишите ему 500 мг».</div>
          </div>
          <div class="aic-cap-item aic-cap-item-cant">
            <div class="aic-cap-mark">🚫</div>
            <div class="aic-cap-text"><strong>Не консультирую пациентов напрямую</strong>Painmed — платформа для врачей. Если вы пациент — обратитесь к своему доктору.</div>
          </div>
          <div class="aic-cap-item aic-cap-item-cant">
            <div class="aic-cap-mark">🚫</div>
            <div class="aic-cap-text"><strong>Не заменяю живого эксперта</strong>Сложный случай требует реального консилиума. Я — помощник на этапе размышления, не замена.</div>
          </div>
          <div class="aic-cap-item aic-cap-item-cant">
            <div class="aic-cap-mark">🚫</div>
            <div class="aic-cap-text"><strong>Могу ошибаться</strong>Я — не оракул. Медицина развивается, мои данные имеют дату. Всегда проверяйте критически.</div>
          </div>
          <div class="aic-cap-item aic-cap-item-cant">
            <div class="aic-cap-mark">🚫</div>
            <div class="aic-cap-text"><strong>Не знаю всё</strong>Узкие, редкие или только что опубликованные данные могут быть мне недоступны. Я скажу, когда не уверен.</div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ═══ ДЕМО-ЧАТ ═════════════════════════════ -->
<section class="section aic-chat-section">
  <div class="section-inner">
    <div class="aic-chat-layout">
      <div class="aic-chat-description">
        <div class="section-label">Попробуйте прямо сейчас</div>
        <h2 class="section-title">Спросите меня о <em>чём угодно клиническом</em></h2>
        <p class="aic-chat-desc-text">Задайте вопрос в свободной форме — как спрашивают коллегу. Не нужно подбирать специальные формулировки.</p>
        <div class="aic-chat-features">
          <div class="aic-chat-feat"><span class="aic-chat-feat-icon">💬</span><div><strong>Свободная форма</strong> — пишите как думаете, я разберусь</div></div>
          <div class="aic-chat-feat"><span class="aic-chat-feat-icon">⚡</span><div><strong>Быстро</strong> — ответ за несколько секунд</div></div>
          <div class="aic-chat-feat"><span class="aic-chat-feat-icon">🔗</span><div><strong>Со ссылками</strong> — на источники и клинрекомендации, когда это важно</div></div>
          <div class="aic-chat-feat"><span class="aic-chat-feat-icon">📤</span><div><strong>Передать вопрос</strong> — если нужен реальный эксперт, я отправлю команде Painmed</div></div>
        </div>

        <div class="aic-example-qs">
          <div class="aic-eq-label">Примеры вопросов</div>
          <div class="aic-eq-item" data-q="Пациент 68 лет, АГ + СД2 + хроническая боль в спине. Какие НПВП безопаснее?">Пациент 68 лет, АГ + СД2 + хроническая боль в спине. Какие НПВП безопаснее?</div>
          <div class="aic-eq-item" data-q="Критерии диагностики нейропатической боли — напомните основные">Критерии диагностики нейропатической боли — напомните основные</div>
          <div class="aic-eq-item" data-q="Чем отличается центральная сенситизация от нейропатии?">Чем отличается центральная сенситизация от нейропатии?</div>
          <div class="aic-eq-item" data-q="Дулоксетин при хронической боли: дозировки и ограничения">Дулоксетин при хронической боли: дозировки и ограничения</div>
        </div>
      </div>

      <div class="aic-chat-widget" id="chatWidget">
        <div class="aic-chat-header">
          <div class="aic-chat-header-avatar">🤖</div>
          <div>
            <div class="aic-chat-header-name">AI-Болит</div>
            <div class="aic-chat-header-status"><span class="aic-dot-green"></span> онлайн</div>
          </div>
          <div class="aic-chat-header-note">Только для врачей<br>Не заменяет клиническое решение</div>
        </div>

        <div class="aic-chat-messages" id="chatMessages">
          <div class="aic-msg aic-msg-bot">
            <div class="aic-msg-avatar">🤖</div>
            <div>
              <div class="aic-msg-bubble">
                Здравствуйте, коллега! 👋<br><br>
                Я AI-Болит — готов обсудить клинический вопрос, разобрать дифференциальный ряд или помочь с фармакотерапией при коморбидности.<br><br>
                <strong>Спрашивайте — я слушаю.</strong>
              </div>
            </div>
          </div>
        </div>

        <div class="aic-chat-typing" id="chatTyping" hidden>
          <div class="aic-msg-avatar">🤖</div>
          <div class="aic-typing-dots"><span></span><span></span><span></span></div>
        </div>

        <div class="aic-chat-input-wrap">
          <div class="aic-chat-input-row">
            <textarea id="chatInput" class="aic-chat-input" placeholder="Задайте клинический вопрос..." rows="1"></textarea>
            <button id="chatSend" class="aic-chat-send" title="Отправить">➤</button>
          </div>
          <div class="aic-chat-team-btn" id="scrollToTeam">
            📨 Задать вопрос реальному эксперту Painmed
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ ДИСКЛЕЙМЕР ════════════════════════════ -->
<section class="section aic-disclaimer-section">
  <div class="section-inner">
    <div class="aic-disclaimer-card">
      <div class="aic-disclaimer-icon">⚠️</div>
      <div class="aic-disclaimer-content">
        <h3>Важно — прочитайте, пожалуйста</h3>
        <div class="aic-disclaimer-items">
          <div class="aic-di-item"><span>AI-Болит — <strong>вспомогательный инструмент</strong>, а не источник истины. Я помогаю думать, а не думаю вместо вас.</span></div>
          <div class="aic-di-item"><span><strong>Ответственность за клиническое решение всегда остаётся за врачом.</strong> Никакой ИИ не снимает с вас профессиональную и юридическую ответственность.</span></div>
          <div class="aic-di-item"><span>Я <strong>могу ошибаться</strong> — в деталях, в нюансах, в редких случаях. Медицинская информация меняется. Всегда проверяйте по актуальным источникам.</span></div>
          <div class="aic-di-item"><span>Мои ответы <strong>не являются медицинскими назначениями</strong> и не могут использоваться как основание для лечения конкретного пациента без верификации врачом.</span></div>
          <div class="aic-di-item"><span>Painmed — платформа <strong>для врачей</strong>. Если вы пациент — пожалуйста, обратитесь к своему лечащему врачу.</span></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ ФОРМА КОМАНДЕ ════════════════════════ -->
<section class="section aic-team-section" id="teamSection">
  <div class="section-inner">
    <div class="aic-team-layout">
      <div class="aic-team-text">
        <div class="section-label">Живые эксперты</div>
        <h2 class="section-title" style="margin-bottom:16px">Нужен <em>реальный ответ</em> от специалиста?</h2>
        <p class="aic-team-desc">Иногда вопрос требует не алгоритма, а человека. Если ваш случай выходит за рамки того, с чем я справляюсь — отправьте его команде Painmed.</p>
        <p class="aic-team-desc">Профессор Искра Д.А. и коллеги разбирают сложные клинические вопросы в рубрике <strong>«Вопросы эксперту»</strong> — реальные ответы на реальные ситуации из практики.</p>
        <p class="aic-team-desc">Ваш вопрос может стать темой следующего эфира — и помочь тысячам коллег, которые сталкиваются с тем же.</p>
      </div>

      <div class="aic-team-form-wrap">
        <div class="aic-team-form-card">
          <h3>Написать команде Painmed</h3>
          <div class="aic-team-form-note">Ответим на почту или разберём в эфире</div>
          <div class="aic-form-field">
            <label for="aic-name">Ваше имя и специальность</label>
            <input type="text" id="aic-name" placeholder="Иванов И.И., невролог">
          </div>
          <div class="aic-form-field">
            <label for="aic-email">Email для ответа</label>
            <input type="email" id="aic-email" placeholder="doctor@clinic.ru">
          </div>
          <div class="aic-form-field">
            <label for="aic-question">Ваш вопрос</label>
            <textarea id="aic-question" rows="4" placeholder="Опишите клиническую ситуацию или задайте вопрос..."></textarea>
          </div>
          <button class="btn-primary aic-form-submit" onclick="alert('Спасибо! Ваш вопрос отправлен команде Painmed.')">📨 Отправить вопрос</button>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
