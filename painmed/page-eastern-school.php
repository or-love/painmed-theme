<?php
/**
 * Template Name: Восточная школа
 * Description:  15-я Восточная школа коморбидной патологии
 */

get_header(); ?>

<!-- HERO -->
<section class="es-hero">
  <div class="es-hero-inner">
    <div class="es-hero-left">
      <div class="es-hero-badge">🌏 Офлайн · Сибирь и Дальний Восток</div>
      <h1 class="es-hero-h1"><em>15-я</em> Восточная школа<br>коморбидной патологии</h1>
      <div class="es-hero-dates">📅 16 – 21 февраля 2026</div>
      <div class="es-hero-duration">4 часа в каждом городе · Очный формат · Бесплатно</div>
      <div class="es-city-route">
        <span class="es-city-chip">Пермь</span><span class="es-city-arrow">→</span>
        <span class="es-city-chip">Челябинск</span><span class="es-city-arrow">→</span>
        <span class="es-city-chip">Тюмень</span><span class="es-city-arrow">→</span>
        <span class="es-city-chip">Иркутск</span><span class="es-city-arrow">→</span>
        <span class="es-city-chip">Хабаровск</span><span class="es-city-arrow">→</span>
        <span class="es-city-chip">Владивосток</span>
      </div>
      <div class="es-hero-actions">
        <a href="#es-reg" class="es-btn-cyan" id="esHeroRegBtn">Зарегистрироваться</a>
        <a href="#es-cities" class="es-btn-outline-w">Программы по городам</a>
      </div>
    </div>

    <div class="es-hero-right">
      <div class="es-cd-card" id="esCdCard">
        <div class="es-cd-card-top">
          <div class="es-cd-label" id="esCdLabel">До начала школы</div>
          <div class="es-cd-grid" id="esCdGrid">
            <div class="es-cd-block"><span class="es-cd-num" id="esCdD">--</span><span class="es-cd-unit">дней</span></div>
            <div class="es-cd-block"><span class="es-cd-num" id="esCdH">--</span><span class="es-cd-unit">часов</span></div>
            <div class="es-cd-block"><span class="es-cd-num" id="esCdM">--</span><span class="es-cd-unit">минут</span></div>
            <div class="es-cd-block"><span class="es-cd-num" id="esCdS">--</span><span class="es-cd-unit">секунд</span></div>
          </div>
          <div id="esCdOngoing" class="es-cd-ongoing">
            <span style="font-size:22px;">🟢</span>
            <div>
              <div style="font-size:14px;font-weight:700;color:#fff;">Школа проходит сейчас</div>
              <div style="font-size:12px;color:rgba(255,255,255,.45);">16–21 февраля 2026 · 6 городов</div>
            </div>
          </div>
        </div>
        <div class="es-cd-card-body">
          <div class="es-cd-edition">Школа №<span>15</span> · цикл 2026</div>
          <div class="es-cd-format">📍 6 городов · 6 дней подряд</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FORMAT -->
<section class="section es-format-section">
  <div class="section-inner">
    <div class="es-s-label">Формат</div>
    <h2 class="es-s-title">Не лекции — <em>живой диалог</em></h2>
    <p class="es-s-desc">На Восточной школе нет скучных докладов. Четыре часа — это три насыщенных блока, которые держат внимание от начала до конца.</p>

    <div class="es-format-grid">
      <div class="es-fmt-card">
        <div class="es-fmt-top-line" style="background:linear-gradient(90deg,var(--cyan),#0ea5e9)"></div>
        <div class="es-fmt-icon">🎙</div>
        <div class="es-fmt-num">Блок 1 — 2 × 60 мин</div>
        <h3>Дискуссии с экспертами</h3>
        <p>Два тематических разбора с участием 2–3 спикеров. Участники вовлечены в обсуждение — это не монолог с экрана, а совместный поиск решений реальных клинических задач.</p>
      </div>
      <div class="es-fmt-card">
        <div class="es-fmt-top-line" style="background:linear-gradient(90deg,#f59e0b,#f97316)"></div>
        <div class="es-fmt-icon">🎯</div>
        <div class="es-fmt-num">Блок 2 — 40 мин</div>
        <h3>Интеллектуальная игра</h3>
        <p>5 клинических вопросов, 4 варианта ответа, 5 минут на размышление. Голосование прямо со смартфона. Тройка лидеров получает призы — и все получают разбор правильного ответа.</p>
      </div>
      <div class="es-fmt-card">
        <div class="es-fmt-top-line" style="background:linear-gradient(90deg,var(--indigo),#8b5cf6)"></div>
        <div class="es-fmt-icon">🗣</div>
        <div class="es-fmt-num">Блок 3 — Мастер-класс</div>
        <h3>Вербальное сопровождение</h3>
        <p>Как правильно мотивировать пациента к лечению. Практические техники вербального сопровождения назначений — то, чему не учат в учебниках, но что влияет на приверженность терапии.</p>
      </div>
    </div>

    <div class="es-facts-strip">
      <div class="es-fact-item"><div class="es-fact-num">4 <span>ч</span></div><div class="es-fact-label">длительность в каждом городе</div></div>
      <div class="es-fact-item"><div class="es-fact-num">6</div><div class="es-fact-label">городов за 6 дней</div></div>
      <div class="es-fact-item"><div class="es-fact-num">0 <span>₽</span></div><div class="es-fact-label">участие бесплатно</div></div>
      <div class="es-fact-item"><div class="es-fact-num">15<span>-я</span></div><div class="es-fact-label">школа — с 2017 года</div></div>
    </div>
  </div>
</section>

<!-- TOPICS -->
<section class="section es-topics-section">
  <div class="section-inner">
    <div class="es-s-label">Тематика</div>
    <h2 class="es-s-title">Что <em>обсуждаем</em></h2>
    <p class="es-s-desc">Темы выбираются из области наиболее частых коморбидных состояний в реальной клинической практике.</p>
    <div class="es-topics-grid">
      <span class="es-topic-tag">Болевые синдромы при коморбидности</span>
      <span class="es-topic-tag">Цереброваскулярные расстройства</span>
      <span class="es-topic-tag">Когнитивные нарушения</span>
      <span class="es-topic-tag">Головокружения: дифдиагностика</span>
      <span class="es-topic-tag">НПВП при сосудистых рисках</span>
      <span class="es-topic-tag">Полипрагмазия и безопасность</span>
      <span class="es-topic-tag">Психотерапия в практике нейронёвролога</span>
      <span class="es-topic-tag">Вербальная мотивация пациента</span>
      <span class="es-topic-tag">Здоровое старение и геропротекция</span>
      <span class="es-topic-tag">Боль в спине: современные алгоритмы</span>
    </div>
  </div>
</section>

<!-- WHO -->
<section class="section es-who-section">
  <div class="section-inner">
    <div class="es-s-label">Аудитория</div>
    <h2 class="es-s-title">К участию <em>приглашаются</em></h2>
    <p class="es-s-desc">Школа рассчитана на врачей любой специальности, которые сталкиваются с коморбидными пациентами — то есть практически на всех.</p>
    <div class="es-who-grid">
      <span class="es-who-tag">Неврологи</span>
      <span class="es-who-tag">Терапевты</span>
      <span class="es-who-tag">Врачи общей практики</span>
      <span class="es-who-tag">Кардиологи</span>
      <span class="es-who-tag">Ревматологи</span>
      <span class="es-who-tag">Эндокринологи</span>
      <span class="es-who-tag">Анестезиологи</span>
      <span class="es-who-tag">Нейрохирурги</span>
      <span class="es-who-tag">Физиотерапевты</span>
      <span class="es-who-tag">Реабилитологи</span>
      <span class="es-who-tag">Врачи ЛФК</span>
      <span class="es-who-tag">Педиатры</span>
      <span class="es-who-tag">Семейные врачи</span>
      <span class="es-who-tag">Хирурги</span>
    </div>
  </div>
</section>

<!-- CITIES -->
<section class="section es-cities-section" id="es-cities">
  <div class="section-inner">
    <div class="es-s-label">Расписание</div>
    <h2 class="es-s-title">Города <em>цикла</em></h2>
    <p class="es-s-desc">Каждый день — новый город. Нажмите на карточку, чтобы скачать программу мероприятия.</p>
    <div class="es-cities-grid">

      <div class="es-city-card">
        <div class="es-city-card-top">
          <div class="es-city-day">День 1 · понедельник</div>
          <div class="es-city-date">16 февраля 2026</div>
          <div class="es-city-name"><em>Пермь</em></div>
          <div class="es-city-region">Пермский край</div>
        </div>
        <div class="es-city-card-footer">
          <span class="es-city-status es-st-upcoming">📅 Ожидается</span>
          <a href="#" class="es-city-prog-link">Программа</a>
        </div>
      </div>

      <div class="es-city-card">
        <div class="es-city-card-top">
          <div class="es-city-day">День 2 · вторник</div>
          <div class="es-city-date">17 февраля 2026</div>
          <div class="es-city-name"><em>Челябинск</em></div>
          <div class="es-city-region">Челябинская область</div>
        </div>
        <div class="es-city-card-footer">
          <span class="es-city-status es-st-upcoming">📅 Ожидается</span>
          <a href="#" class="es-city-prog-link">Программа</a>
        </div>
      </div>

      <div class="es-city-card">
        <div class="es-city-card-top">
          <div class="es-city-day">День 3 · среда</div>
          <div class="es-city-date">18 февраля 2026</div>
          <div class="es-city-name"><em>Тюмень</em></div>
          <div class="es-city-region">Тюменская область</div>
        </div>
        <div class="es-city-card-footer">
          <span class="es-city-status es-st-upcoming">📅 Ожидается</span>
          <a href="#" class="es-city-prog-link">Программа</a>
        </div>
      </div>

      <div class="es-city-card">
        <div class="es-city-card-top">
          <div class="es-city-day">День 4 · четверг</div>
          <div class="es-city-date">19 февраля 2026</div>
          <div class="es-city-name"><em>Иркутск</em></div>
          <div class="es-city-region">Иркутская область</div>
        </div>
        <div class="es-city-card-footer">
          <span class="es-city-status es-st-upcoming">📅 Ожидается</span>
          <a href="#" class="es-city-prog-link">Программа</a>
        </div>
      </div>

      <div class="es-city-card">
        <div class="es-city-card-top">
          <div class="es-city-day">День 5 · пятница</div>
          <div class="es-city-date">20 февраля 2026</div>
          <div class="es-city-name"><em>Хабаровск</em></div>
          <div class="es-city-region">Хабаровский край</div>
        </div>
        <div class="es-city-card-footer">
          <span class="es-city-status es-st-upcoming">📅 Ожидается</span>
          <a href="#" class="es-city-prog-link">Программа</a>
        </div>
      </div>

      <div class="es-city-card">
        <div class="es-city-card-top">
          <div class="es-city-day">День 6 · суббота</div>
          <div class="es-city-date">21 февраля 2026</div>
          <div class="es-city-name"><em>Владивосток</em></div>
          <div class="es-city-region">Приморский край</div>
        </div>
        <div class="es-city-card-footer">
          <span class="es-city-status es-st-upcoming">📅 Ожидается</span>
          <a href="#" class="es-city-prog-link">Программа</a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- REGISTRATION -->
<div class="es-reg-section" id="es-reg">
  <div class="es-reg-inner">
    <div class="es-reg-left">
      <div class="es-s-label" style="color:var(--cyan)">Регистрация</div>
      <h2>Зарегистрируйтесь,<br>чтобы участвовать <em>очно</em></h2>
      <p>Участие в Восточной школе бесплатно для всех практикующих врачей. Заполните форму — мы свяжемся с вами и подтвердим участие в вашем городе.</p>
      <div class="es-reg-features">
        <div class="es-reg-feat">Бесплатное участие для врачей</div>
        <div class="es-reg-feat">Подтверждение за 1–2 рабочих дня</div>
        <div class="es-reg-feat">Напомним о мероприятии накануне</div>
        <div class="es-reg-feat">Материалы эфира после события</div>
      </div>
    </div>

    <div class="es-reg-form">
      <h3>Заявка на участие</h3>
      <div class="es-reg-form-note">15-я Восточная школа · 16–21 февраля 2026</div>

      <div class="es-form-field">
        <label class="es-form-label">ФИО</label>
        <input type="text" class="es-form-input" placeholder="Иванов Иван Иванович">
      </div>
      <div class="es-form-field">
        <label class="es-form-label">Телефон</label>
        <input type="tel" class="es-form-input" placeholder="+7 (___) ___-__-__">
      </div>
      <div class="es-form-field">
        <label class="es-form-label">Город участия</label>
        <select class="es-form-input">
          <option value="" disabled selected>Выберите город</option>
          <option>Пермь — 16 февраля</option>
          <option>Челябинск — 17 февраля</option>
          <option>Тюмень — 18 февраля</option>
          <option>Иркутск — 19 февраля</option>
          <option>Хабаровск — 20 февраля</option>
          <option>Владивосток — 21 февраля</option>
        </select>
      </div>
      <div class="es-form-field">
        <label class="es-form-label">Специальность <span class="es-opt">(по желанию)</span></label>
        <input type="text" class="es-form-input" placeholder="Невролог, терапевт...">
      </div>

      <button class="es-form-submit" id="esFormSubmit">Подать заявку →</button>
      <div class="es-form-privacy">Нажимая кнопку, вы соглашаетесь с политикой обработки персональных данных</div>
    </div>
  </div>
</div>

<!-- FAQ -->
<section class="section es-faq-section">
  <div class="section-inner">
    <div class="es-s-label">Вопросы и ответы</div>
    <h2 class="es-s-title">Часто <em>спрашивают</em></h2>
    <div class="es-faq-list">

      <div class="es-faq-item">
        <div class="es-faq-q"><span class="es-faq-q-text">Участие платное?</span><span class="es-faq-icon">+</span></div>
        <div class="es-faq-a">Нет. Участие во всех мероприятиях Painmed бесплатно для практикующих врачей. Единственное условие — предварительная регистрация.</div>
      </div>

      <div class="es-faq-item">
        <div class="es-faq-q"><span class="es-faq-q-text">Обязательно ли регистрироваться заранее?</span><span class="es-faq-icon">+</span></div>
        <div class="es-faq-a">Да, регистрация обязательна — это помогает нам подготовить нужное количество мест и раздаточных материалов. Зарегистрируйтесь через форму на этой странице, и мы свяжемся с вами для подтверждения.</div>
      </div>

      <div class="es-faq-item">
        <div class="es-faq-q"><span class="es-faq-q-text">Можно ли участвовать не врачу, а студенту-медику?</span><span class="es-faq-icon">+</span></div>
        <div class="es-faq-a">Школа ориентирована прежде всего на практикующих врачей, однако ординаторы и студенты старших курсов также могут зарегистрироваться. Уточните это при подаче заявки.</div>
      </div>

      <div class="es-faq-item">
        <div class="es-faq-q"><span class="es-faq-q-text">Будет ли онлайн-трансляция?</span><span class="es-faq-icon">+</span></div>
        <div class="es-faq-a">Очные школы проходят только в офлайн-формате — живое общение с экспертами и коллегами является ключевой ценностью мероприятия. Онлайн-эфиры представлены в других форматах Painmed.</div>
      </div>

      <div class="es-faq-item">
        <div class="es-faq-q"><span class="es-faq-q-text">Где узнать точный адрес и время в моём городе?</span><span class="es-faq-icon">+</span></div>
        <div class="es-faq-a">Подробная программа с адресом площадки для каждого города доступна по ссылкам в блоке «Города цикла» выше. Также мы пришлём все детали после подтверждения вашей регистрации.</div>
      </div>

    </div>
  </div>
</section>

<?php get_footer(); ?>
