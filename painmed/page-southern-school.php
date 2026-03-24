<?php
/**
 * Template Name: Южная школа
 * Description:  6-я Южная школа коморбидной патологии
 */
get_header(); ?>

<!-- ── HERO ─────────────────────────────────────────────── -->
<section class="ss-hero">
  <div class="ss-hero-inner">
    <div class="ss-hero-left">
      <div class="ss-hero-badge">🌊 Офлайн · Юг России</div>
      <h1 class="ss-hero-title"><em>6-я</em> Южная школа<br>коморбидной патологии</h1>
      <div class="ss-hero-dates">📅 23 – 28 марта 2026</div>
      <div class="ss-hero-duration">2,5 часа в каждом городе · Очный формат · Бесплатно</div>
      <div class="ss-city-route">
        <span class="ss-city-chip">Ставрополь</span><span class="ss-city-arrow">→</span>
        <span class="ss-city-chip">Краснодар</span><span class="ss-city-arrow">→</span>
        <span class="ss-city-chip">Воронеж</span><span class="ss-city-arrow">→</span>
        <span class="ss-city-chip">Липецк</span><span class="ss-city-arrow">→</span>
        <span class="ss-city-chip">Ростов-на-Дону</span><span class="ss-city-arrow">→</span>
        <span class="ss-city-chip">Сочи</span>
      </div>
      <div class="ss-hero-actions">
        <a href="#ss-reg" class="ss-btn-cyan" id="ssHeroRegBtn">Зарегистрироваться</a>
        <a href="#ss-cities" class="ss-btn-outline-w">Программы по городам</a>
      </div>
    </div>

    <div class="ss-hero-right">
      <div class="ss-cd-card" id="ssCdCard">
        <div class="ss-cd-card-top">
          <div class="ss-cd-label" id="ssCdLabel">До начала школы</div>
          <div class="ss-cd-grid" id="ssCdGrid">
            <div class="ss-cd-block"><span class="ss-cd-num" id="ssCdD">--</span><span class="ss-cd-unit">дней</span></div>
            <div class="ss-cd-block"><span class="ss-cd-num" id="ssCdH">--</span><span class="ss-cd-unit">часов</span></div>
            <div class="ss-cd-block"><span class="ss-cd-num" id="ssCdM">--</span><span class="ss-cd-unit">минут</span></div>
            <div class="ss-cd-block"><span class="ss-cd-num" id="ssCdS">--</span><span class="ss-cd-unit">секунд</span></div>
          </div>
          <div id="ssCdOngoing" style="display:none;align-items:center;gap:10px;padding:6px 0;">
            <span style="font-size:22px;">🟢</span>
            <div>
              <div style="font-size:14px;font-weight:700;color:#fff;">Школа проходит сейчас</div>
              <div style="font-size:12px;color:rgba(255,255,255,.45);">23–28 марта 2026 · 6 городов</div>
            </div>
          </div>
        </div>
        <div class="ss-cd-card-body">
          <div class="ss-cd-edition">Школа №<span>6</span> · цикл 2026</div>
          <div class="ss-cd-format">📍 6 городов · 6 дней подряд</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ── FORMAT ────────────────────────────────────────────── -->
<section class="section ss-format-section">
  <div class="section-inner">
    <div class="ss-label">Формат</div>
    <h2 class="ss-title">Не лекции — <em>живой диалог</em></h2>
    <p class="ss-desc">На Южной школе нет скучных докладов. 2,5 часа — два насыщенных блока, которые держат внимание от начала до конца.</p>

    <div class="ss-format-grid">
      <div class="ss-fmt-card">
        <div class="ss-fmt-top-line" style="background:linear-gradient(90deg,var(--cyan),#0ea5e9)"></div>
        <div class="ss-fmt-icon">🎙</div>
        <div class="ss-fmt-num">Блок 1 — 2 дискуссии</div>
        <h3>Открытые дискуссии</h3>
        <p>Два тематических разбора с участием 2 спикеров. Участники вовлечены в обсуждение напрямую — это живой диалог, а не монолог с экрана. Каждая тема разбирается со всех практических сторон: клиника, диагностика, лечение.</p>
      </div>
      <div class="ss-fmt-card">
        <div class="ss-fmt-top-line" style="background:linear-gradient(90deg,#f59e0b,#f97316)"></div>
        <div class="ss-fmt-icon">🎯</div>
        <div class="ss-fmt-num">Блок 2 — Интеллектуальная игра</div>
        <h3>Викторина для врачей</h3>
        <p>6 клинических вопросов, 4 варианта ответа, 5 минут на размышление. Голосование прямо со смартфона на специальной платформе. После каждого вопроса — разбор правильного ответа. Тройка лидеров получает ценные подарки.</p>
      </div>
    </div>

    <div class="ss-facts-strip">
      <div class="ss-fact-item">
        <div class="ss-fact-num">2,5 <span>ч</span></div>
        <div class="ss-fact-label">длительность в каждом городе</div>
      </div>
      <div class="ss-fact-item">
        <div class="ss-fact-num">6</div>
        <div class="ss-fact-label">городов за 6 дней</div>
      </div>
      <div class="ss-fact-item">
        <div class="ss-fact-num">0 <span>₽</span></div>
        <div class="ss-fact-label">участие бесплатно</div>
      </div>
      <div class="ss-fact-item">
        <div class="ss-fact-num">6<span>-я</span></div>
        <div class="ss-fact-label">школа — с 2022 года</div>
      </div>
    </div>
  </div>
</section>

<!-- ── TOPICS ────────────────────────────────────────────── -->
<section class="section">
  <div class="section-inner">
    <div class="ss-label">Тематика</div>
    <h2 class="ss-title">Что <em>обсуждаем</em></h2>
    <p class="ss-desc">Темы выбираются из области наиболее частых коморбидных состояний в реальной клинической практике.</p>
    <div class="ss-topics-grid">
      <span class="ss-topic-tag">Болевые синдромы при коморбидности</span>
      <span class="ss-topic-tag">Цереброваскулярные расстройства</span>
      <span class="ss-topic-tag">Когнитивные нарушения</span>
      <span class="ss-topic-tag">Головокружения: дифдиагностика</span>
      <span class="ss-topic-tag">НПВП при сосудистых рисках</span>
      <span class="ss-topic-tag">Полипрагмазия и безопасность</span>
      <span class="ss-topic-tag">Психотерапия в практике нейронёвролога</span>
      <span class="ss-topic-tag">Вербальная мотивация пациента</span>
      <span class="ss-topic-tag">Здоровое старение и геропротекция</span>
      <span class="ss-topic-tag">Боль в спине: современные алгоритмы</span>
    </div>
  </div>
</section>

<!-- ── WHO ───────────────────────────────────────────────── -->
<section class="section ss-who-section">
  <div class="section-inner">
    <div class="ss-label">Аудитория</div>
    <h2 class="ss-title">К участию <em>приглашаются</em></h2>
    <p class="ss-desc">Школа рассчитана на врачей любой специальности, которые сталкиваются с коморбидными пациентами — то есть практически на всех.</p>
    <div class="ss-who-grid">
      <span class="ss-who-tag">Неврологи</span>
      <span class="ss-who-tag">Терапевты</span>
      <span class="ss-who-tag">Врачи общей практики</span>
      <span class="ss-who-tag">Кардиологи</span>
      <span class="ss-who-tag">Ревматологи</span>
      <span class="ss-who-tag">Эндокринологи</span>
      <span class="ss-who-tag">Анестезиологи</span>
      <span class="ss-who-tag">Нейрохирурги</span>
      <span class="ss-who-tag">Физиотерапевты</span>
      <span class="ss-who-tag">Реабилитологи</span>
      <span class="ss-who-tag">Врачи ЛФК</span>
      <span class="ss-who-tag">Педиатры</span>
      <span class="ss-who-tag">Семейные врачи</span>
      <span class="ss-who-tag">Хирурги</span>
    </div>
  </div>
</section>

<!-- ── CITIES ────────────────────────────────────────────── -->
<section class="section" id="ss-cities">
  <div class="section-inner">
    <div class="ss-label">Расписание</div>
    <h2 class="ss-title">Города <em>цикла</em></h2>
    <p class="ss-desc">Каждый день — новый город. Нажмите на карточку, чтобы скачать программу мероприятия.</p>
    <div class="ss-cities-grid">

      <div class="ss-city-card">
        <div class="ss-city-card-top">
          <div class="ss-city-day">День 1 · понедельник</div>
          <div class="ss-city-date">23 марта 2026</div>
          <div class="ss-city-name"><em>Ставрополь</em></div>
          <div class="ss-city-region">Ставропольский край</div>
        </div>
        <div class="ss-city-card-footer">
          <span class="ss-city-status ss-st-upcoming">📅 Ожидается</span>
          <a href="#" class="ss-city-prog-link">Программа</a>
        </div>
      </div>

      <div class="ss-city-card">
        <div class="ss-city-card-top">
          <div class="ss-city-day">День 2 · вторник</div>
          <div class="ss-city-date">24 марта 2026</div>
          <div class="ss-city-name"><em>Краснодар</em></div>
          <div class="ss-city-region">Краснодарский край</div>
        </div>
        <div class="ss-city-card-footer">
          <span class="ss-city-status ss-st-upcoming">📅 Ожидается</span>
          <a href="#" class="ss-city-prog-link">Программа</a>
        </div>
      </div>

      <div class="ss-city-card">
        <div class="ss-city-card-top">
          <div class="ss-city-day">День 3 · среда</div>
          <div class="ss-city-date">25 марта 2026</div>
          <div class="ss-city-name"><em>Воронеж</em></div>
          <div class="ss-city-region">Воронежская область</div>
        </div>
        <div class="ss-city-card-footer">
          <span class="ss-city-status ss-st-upcoming">📅 Ожидается</span>
          <a href="#" class="ss-city-prog-link">Программа</a>
        </div>
      </div>

      <div class="ss-city-card">
        <div class="ss-city-card-top">
          <div class="ss-city-day">День 4 · четверг</div>
          <div class="ss-city-date">26 марта 2026</div>
          <div class="ss-city-name"><em>Липецк</em></div>
          <div class="ss-city-region">Липецкая область</div>
        </div>
        <div class="ss-city-card-footer">
          <span class="ss-city-status ss-st-upcoming">📅 Ожидается</span>
          <a href="#" class="ss-city-prog-link">Программа</a>
        </div>
      </div>

      <div class="ss-city-card">
        <div class="ss-city-card-top">
          <div class="ss-city-day">День 5 · пятница</div>
          <div class="ss-city-date">27 марта 2026</div>
          <div class="ss-city-name"><em>Ростов-на-Дону</em></div>
          <div class="ss-city-region">Ростовская область</div>
        </div>
        <div class="ss-city-card-footer">
          <span class="ss-city-status ss-st-upcoming">📅 Ожидается</span>
          <a href="#" class="ss-city-prog-link">Программа</a>
        </div>
      </div>

      <div class="ss-city-card">
        <div class="ss-city-card-top">
          <div class="ss-city-day">День 6 · суббота</div>
          <div class="ss-city-date">28 марта 2026</div>
          <div class="ss-city-name"><em>Сочи</em></div>
          <div class="ss-city-region">Краснодарский край</div>
        </div>
        <div class="ss-city-card-footer">
          <span class="ss-city-status ss-st-upcoming">📅 Ожидается</span>
          <a href="#" class="ss-city-prog-link">Программа</a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ── REGISTRATION ──────────────────────────────────────── -->
<div class="ss-reg-section" id="ss-reg" data-hide-after-event="true">
  <div class="ss-reg-inner">
    <div class="ss-reg-left">
      <div class="ss-label" style="color:var(--cyan)">Регистрация</div>
      <h2>Зарегистрируйтесь,<br>чтобы участвовать <em>очно</em></h2>
      <p>Участие в Южной школе бесплатно для всех практикующих врачей. Заполните форму — мы свяжемся с вами и подтвердим участие в вашем городе.</p>
      <div class="ss-reg-features">
        <div class="ss-reg-feat">Бесплатное участие для врачей</div>
        <div class="ss-reg-feat">Подтверждение за 1–2 рабочих дня</div>
        <div class="ss-reg-feat">Напомним о мероприятии накануне</div>
        <div class="ss-reg-feat">Материалы эфира после события</div>
      </div>
    </div>

    <div class="ss-reg-form">
      <h3>Заявка на участие</h3>
      <div class="ss-reg-form-note">6-я Южная школа · 23–28 марта 2026</div>

      <div class="ss-form-field">
        <label class="ss-form-label">ФИО</label>
        <input type="text" class="ss-form-input" placeholder="Иванов Иван Иванович">
      </div>
      <div class="ss-form-field">
        <label class="ss-form-label">Телефон</label>
        <input type="tel" class="ss-form-input" placeholder="+7 (___) ___-__-__">
      </div>
      <div class="ss-form-field">
        <label class="ss-form-label">Город участия</label>
        <select class="ss-form-input">
          <option value="" disabled selected>Выберите город</option>
          <option>Ставрополь — 23 марта</option>
          <option>Краснодар — 24 марта</option>
          <option>Воронеж — 25 марта</option>
          <option>Липецк — 26 марта</option>
          <option>Ростов-на-Дону — 27 марта</option>
          <option>Сочи — 28 марта</option>
        </select>
      </div>
      <div class="ss-form-field">
        <label class="ss-form-label">Специальность <span class="ss-opt">(по желанию)</span></label>
        <input type="text" class="ss-form-input" placeholder="Невролог, терапевт...">
      </div>

      <button class="ss-form-submit" id="ssFormSubmit">Подать заявку →</button>
      <div class="ss-form-privacy">Нажимая кнопку, вы соглашаетесь с политикой обработки персональных данных</div>
    </div>
  </div>
</div>

<!-- ── FAQ ───────────────────────────────────────────────── -->
<section class="section ss-faq-section">
  <div class="section-inner">
    <div class="ss-label">Вопросы и ответы</div>
    <h2 class="ss-title">Часто <em>спрашивают</em></h2>
    <div class="ss-faq-list">

      <div class="ss-faq-item">
        <div class="ss-faq-q">
          <span class="ss-faq-q-text">Участие платное?</span>
          <span class="ss-faq-icon">+</span>
        </div>
        <div class="ss-faq-a">Нет. Участие во всех мероприятиях Painmed бесплатно для практикующих врачей. Единственное условие — предварительная регистрация.</div>
      </div>

      <div class="ss-faq-item">
        <div class="ss-faq-q">
          <span class="ss-faq-q-text">Обязательно ли регистрироваться заранее?</span>
          <span class="ss-faq-icon">+</span>
        </div>
        <div class="ss-faq-a">Да, регистрация обязательна — это помогает нам подготовить нужное количество мест и раздаточных материалов. Зарегистрируйтесь через форму на этой странице, и мы свяжемся с вами для подтверждения.</div>
      </div>

      <div class="ss-faq-item">
        <div class="ss-faq-q">
          <span class="ss-faq-q-text">Можно ли участвовать не врачу, а студенту-медику?</span>
          <span class="ss-faq-icon">+</span>
        </div>
        <div class="ss-faq-a">Школа ориентирована прежде всего на практикующих врачей, однако ординаторы и студенты старших курсов также могут зарегистрироваться. Уточните это при подаче заявки.</div>
      </div>

      <div class="ss-faq-item">
        <div class="ss-faq-q">
          <span class="ss-faq-q-text">Будет ли онлайн-трансляция?</span>
          <span class="ss-faq-icon">+</span>
        </div>
        <div class="ss-faq-a">Очные школы проходят только в офлайн-формате — живое общение с экспертами и коллегами является ключевой ценностью мероприятия. Онлайн-эфиры представлены в других форматах Painmed.</div>
      </div>

      <div class="ss-faq-item">
        <div class="ss-faq-q">
          <span class="ss-faq-q-text">Где узнать точный адрес и время в моём городе?</span>
          <span class="ss-faq-icon">+</span>
        </div>
        <div class="ss-faq-a">Подробная программа с адресом площадки для каждого города доступна по ссылкам в блоке «Города цикла» выше. Также мы пришлём все детали после подтверждения вашей регистрации.</div>
      </div>

    </div>
  </div>
</section>

<?php get_footer(); ?>
