<?php
/**
 * Template Name: Онлайн-эфиры
 * Страница текущей/ближайшей онлайн-трансляции Painmed
 *
 * @package Painmed
 */

get_header();
?>

<!-- LIVE BAR (появляется только во время эфира) -->
<div class="ol-live-bar" id="liveBar">
  <div class="ol-live-bar-inner">
    <div class="ol-live-bar-left"><span class="ol-live-bar-dot"></span>ПРЯМОЙ ЭФИР</div>
    <div class="ol-live-bar-topic">Коморбидность боли и тревожных расстройств · Малый совет экспертов</div>
    <div class="ol-live-bar-right"><span class="ol-viewers-dot"></span>1 347 зрителей онлайн</div>
  </div>
</div>

<!-- ═══ HERO ═══════════════════════════════ -->
<section class="ol-hero">
  <div class="ol-hero-inner">
    <div class="ol-hero-left">
      <div class="ol-hero-format-tag">
        <span class="ol-live-dot" id="heroLiveDot"></span>
        <span id="heroFormatLabel">🎙 Малый совет экспертов</span>
      </div>
      <h1>Коморбидность боли<br>и <em>тревожных расстройств</em></h1>
      <div class="ol-hero-meta">
        <span>📅 1 апреля 2026</span>
        <span>⏰ 19:00 МСК</span>
        <span>👤 Искра Д.А. · Рачин А.П.</span>
      </div>
      <p class="ol-hero-desc">Перекрёстные механизмы боли и тревоги, современные стратегии лечения и разбор сложных клинических ситуаций в прямом эфире.</p>
      <div class="ol-hero-speakers">
        <div class="ol-hero-speaker">
          <div class="ol-hs-ava ol-hs-host">👨‍⚕️</div>
          <div>
            <div class="ol-hs-name">Искра Дмитрий Анатольевич</div>
            <div class="ol-hs-role">д.м.н., профессор · СЗОИБ · СПб</div>
            <span class="ol-hs-badge ol-badge-host">Ведущий</span>
          </div>
        </div>
        <div class="ol-hero-speaker">
          <div class="ol-hs-ava ol-hs-guest">👨‍⚕️</div>
          <div>
            <div class="ol-hs-name">Рачин Андрей Петрович</div>
            <div class="ol-hs-role">д.м.н., профессор · РНЦМР · Москва</div>
            <span class="ol-hs-badge ol-badge-guest">Гость</span>
          </div>
        </div>
      </div>
    </div>
    <div class="ol-hero-right">
      <div class="ol-hero-countdown" id="heroCountdown">
        <div class="ol-cd-label">До начала трансляции</div>
        <div class="ol-cd-grid">
          <div class="ol-cd-block"><span class="ol-cd-num" id="cdD">--</span><span class="ol-cd-unit">дней</span></div>
          <div class="ol-cd-block"><span class="ol-cd-num" id="cdH">--</span><span class="ol-cd-unit">часов</span></div>
          <div class="ol-cd-block"><span class="ol-cd-num" id="cdM">--</span><span class="ol-cd-unit">минут</span></div>
          <div class="ol-cd-block"><span class="ol-cd-num" id="cdS">--</span><span class="ol-cd-unit">секунд</span></div>
        </div>
      </div>
      <div class="ol-hero-actions">
        <button class="btn-primary" id="notifyBtn">🔔 Напомнить о начале</button>
        <button class="ol-btn-ghost-w">📅 В календарь</button>
      </div>
    </div>
  </div>
</section>

<!-- ═══ PLAYER ═════════════════════════════ -->
<section class="ol-player-section">
  <div class="section-inner" style="max-width:1200px">
    <div class="ol-player-wrap">
      <div class="ol-player-placeholder" id="playerPlaceholder">
        <div class="ol-pp-icon">📺</div>
        <h3>Трансляция начнётся через</h3>
        <p>Дождитесь начала или подпишитесь на напоминание</p>
        <div class="ol-pp-countdown">
          <div class="ol-pp-block"><span class="ol-pp-num" id="ppD">--</span><span class="ol-pp-unit">дн</span></div>
          <div class="ol-pp-block"><span class="ol-pp-num" id="ppH">--</span><span class="ol-pp-unit">ч</span></div>
          <div class="ol-pp-block"><span class="ol-pp-num" id="ppM">--</span><span class="ol-pp-unit">мин</span></div>
          <div class="ol-pp-block"><span class="ol-pp-num" id="ppS">--</span><span class="ol-pp-unit">сек</span></div>
        </div>
      </div>
      <!-- <iframe id="fcPlayer" src="https://facecast.net/w/XXXXXXXX" allowfullscreen allow="autoplay; fullscreen" style="display:none"></iframe> -->
      <div class="ol-player-live-badge" id="playerLiveBadge">LIVE</div>
    </div>

    <div class="ol-player-meta">
      <div class="ol-player-meta-left">
        <h2>Коморбидность боли и тревожных расстройств</h2>
        <div class="ol-player-meta-tags">
          <span>🎙 Малый совет экспертов</span>
          <span>📅 1 апреля 2026</span>
          <span>⏰ 19:00 МСК</span>
          <span id="viewersTag" class="ol-viewers-tag" style="display:none">👁 1 347 зрителей</span>
        </div>
      </div>
      <div class="ol-player-meta-right">
        <button class="ol-share-btn">🔗 Ссылка</button>
        <button class="ol-share-btn">📤 ВКонтакте</button>
        <button class="ol-share-btn">💬 Telegram</button>
      </div>
    </div>
  </div>
</section>

<!-- ═══ CONTENT: CHAT + SIDEBAR ═══════════ -->
<section class="ol-content-section">
  <div class="ol-content-inner">

    <!-- Chat / Q&A -->
    <div class="ol-chat-box">
      <div class="ol-chat-tabs">
        <div class="ol-chat-tab active" data-panel="chat">💬 Чат трансляции</div>
        <div class="ol-chat-tab" data-panel="qa">❓ Вопросы спикерам</div>
      </div>

      <!-- CHAT PANEL -->
      <div class="ol-chat-panel active" id="panelChat">
        <div class="ol-chat-msgs" id="chatMsgs">
          <div id="chatEmpty" class="ol-chat-empty">
            <div class="ol-chat-empty-icon">💬</div>
            <div>Чат откроется с началом трансляции</div>
          </div>
          <div id="chatMessages" style="display:none;flex-direction:column;gap:10px"></div>
        </div>
        <div class="ol-chat-input-area" id="chatInputArea">
          <input class="ol-chat-inp" id="chatInp" placeholder="Написать в чат...">
          <button class="ol-chat-send" id="chatSendBtn">➤</button>
        </div>
      </div>

      <!-- Q&A PANEL -->
      <div class="ol-chat-panel" id="panelQa">
        <div class="ol-qa-list" id="qaList">
          <div class="ol-qa-hint">Вопросы проходят модерацию. Лучшие разбирает профессор Искра. Голосуйте 👍</div>
          <div class="ol-qa-item ol-qa-answered">
            <div class="ol-qa-head"><span class="ol-qa-author">Елена К., Краснодар</span><span class="ol-qa-vote">👍 14</span></div>
            <div class="ol-qa-text">Как разграничить первичную тревогу и вторичную при хронической боли?</div>
            <div class="ol-qa-answer"><b>В эфире</b> — разбирается в блоке диагностики</div>
          </div>
          <div class="ol-qa-item">
            <div class="ol-qa-head"><span class="ol-qa-author">Игорь Р., Пермь</span><span class="ol-qa-vote">👍 9</span></div>
            <div class="ol-qa-text">Можно ли сочетать прегабалин и дулоксетин при коморбидном ХБС + ГТР?</div>
          </div>
          <div class="ol-qa-item">
            <div class="ol-qa-head"><span class="ol-qa-author">Мария Т., Казань</span><span class="ol-qa-vote">👍 6</span></div>
            <div class="ol-qa-text">Какую шкалу тревоги предпочитаете в рутинной практике?</div>
          </div>
        </div>
        <div class="ol-qa-form">
          <textarea class="ol-qa-inp" rows="2" placeholder="Задайте вопрос спикерам..."></textarea>
          <button class="ol-qa-submit">Отправить вопрос</button>
        </div>
      </div>
    </div>

    <!-- SIDEBAR -->
    <div class="ol-sidebar">

      <!-- Спикеры -->
      <div class="ol-sidebar-card">
        <div class="ol-sc-header"><span class="ol-sc-title">Спикеры</span></div>
        <div class="ol-sc-body">
          <div class="ol-speaker-row">
            <div class="ol-sp-ava ol-sp-h">👨‍⚕️</div>
            <div>
              <div class="ol-sp-name">Искра Д.А.</div>
              <div class="ol-sp-role">д.м.н., профессор · СЗОИБ</div>
              <span class="ol-sp-badge ol-sp-badge-host">Ведущий</span>
            </div>
          </div>
          <div class="ol-speaker-row">
            <div class="ol-sp-ava ol-sp-g">👨‍⚕️</div>
            <div>
              <div class="ol-sp-name">Рачин А.П.</div>
              <div class="ol-sp-role">д.м.н., профессор · РНЦМР</div>
              <span class="ol-sp-badge ol-sp-badge-guest">Гость</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Программа -->
      <div class="ol-sidebar-card">
        <div class="ol-sc-header"><span class="ol-sc-title">Программа</span></div>
        <div class="ol-sc-body">
          <div class="ol-prog-item">
            <div class="ol-prog-time">19:00</div>
            <div class="ol-prog-dot"></div>
            <div><div class="ol-prog-h">Открытие, приветствие</div><div class="ol-prog-p">Искра Д.А.</div></div>
          </div>
          <div class="ol-prog-item">
            <div class="ol-prog-time">19:10</div>
            <div class="ol-prog-dot"></div>
            <div><div class="ol-prog-h">Перекрёстные механизмы боли и тревоги</div><div class="ol-prog-p">Искра Д.А., Рачин А.П.</div></div>
          </div>
          <div class="ol-prog-item">
            <div class="ol-prog-time">19:35</div>
            <div class="ol-prog-dot"></div>
            <div><div class="ol-prog-h">Стратегии фармакотерапии</div><div class="ol-prog-p">Рачин А.П.</div></div>
          </div>
          <div class="ol-prog-item">
            <div class="ol-prog-time">19:55</div>
            <div class="ol-prog-dot"></div>
            <div><div class="ol-prog-h">Разбор вопросов из чата</div><div class="ol-prog-p">Оба спикера</div></div>
          </div>
          <div class="ol-prog-item">
            <div class="ol-prog-time">20:10</div>
            <div class="ol-prog-dot"></div>
            <div><div class="ol-prog-h">Завершение</div></div>
          </div>
        </div>
      </div>

      <!-- Тех. примечание -->
      <div class="ol-tech-note">
        ℹ️ Трансляция ведётся через Facecast. Для просмотра достаточно браузера, установка приложений не требуется.
      </div>

      <!-- Предварительный вопрос -->
      <div class="ol-prequestion">
        <div class="ol-pq-label">Задать вопрос заранее</div>
        <textarea class="ol-pq-inp" rows="3" placeholder="Ваш вопрос спикерам..."></textarea>
        <button class="ol-pq-submit">Отправить вопрос</button>
      </div>

    </div>

  </div>
</section>

<!-- ═══ ПОСЛЕДНИЕ ТРАНСЛЯЦИИ ═══════════════ -->
<section class="ol-recent-section">
  <div class="ol-recent-inner">
    <div class="ol-recent-header">
      <h2>Последние <em>трансляции</em></h2>
      <a href="<?php echo esc_url( home_url('/arhiv/') ); ?>" class="ol-btn-link">Весь архив</a>
    </div>
    <div class="ol-recent-grid">
      <a href="#" class="ol-rec-card">
        <div class="ol-rec-thumb" style="background:linear-gradient(135deg,#eef4ff,#e4eeff)">
          🎙
          <div class="ol-rec-overlay"><div class="ol-play-btn">▶</div></div>
          <div class="ol-rec-tag">Большой совет</div>
          <div class="ol-rec-dur">⏱ 1:45</div>
        </div>
        <div class="ol-rec-body">
          <div class="ol-rec-title">Хроническая боль при онкологии: мультидисциплинарный подход</div>
          <div class="ol-rec-meta"><span>📅 12 мар 2026</span><span>👁 3 240</span></div>
        </div>
      </a>
      <a href="#" class="ol-rec-card">
        <div class="ol-rec-thumb" style="background:linear-gradient(135deg,#fffbeb,#fef3c7)">
          🎯
          <div class="ol-rec-overlay"><div class="ol-play-btn">▶</div></div>
          <div class="ol-rec-tag">Телеигра</div>
          <div class="ol-rec-dur">⏱ 58 мин</div>
        </div>
        <div class="ol-rec-body">
          <div class="ol-rec-title">Занимательная медицина: Дифдиагностика нейрогенной боли</div>
          <div class="ol-rec-meta"><span>📅 8 мар 2026</span><span>👁 2 780</span></div>
        </div>
      </a>
      <a href="#" class="ol-rec-card">
        <div class="ol-rec-thumb" style="background:linear-gradient(135deg,#f0fdf4,#dcfce7)">
          💊
          <div class="ol-rec-overlay"><div class="ol-play-btn">▶</div></div>
          <div class="ol-rec-tag">Аптека</div>
          <div class="ol-rec-dur">⏱ 1:10</div>
        </div>
        <div class="ol-rec-body">
          <div class="ol-rec-title">Безопасная схема при сочетании боли и артериальной гипертензии</div>
          <div class="ol-rec-meta"><span>📅 2 мар 2026</span><span>👁 1 640</span></div>
        </div>
      </a>
    </div>
  </div>
</section>

<!-- DEV TOGGLE — убрать на продакшне -->
<button class="ol-dev-btn" id="devBtn">▶ Включить режим ЭФИРА</button>

<?php get_footer(); ?>
