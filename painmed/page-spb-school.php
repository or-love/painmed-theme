<?php
/**
 * Template Name: Петербуржские вечера
 * Description:  Петербуржские вечера — 2-я Школа коморбидной патологии
 */

get_header(); ?>

<!-- HERO -->
<section class="pv-hero">
  <div class="pv-hero-inner">
    <div class="pv-hero-left">
      <div class="pv-hero-badge">🌙 Офлайн · Санкт-Петербург</div>
      <h1 class="pv-hero-h1">Петербуржские <em>вечера</em></h1>
      <div class="pv-hero-subtitle">2-я Школа коморбидной патологии</div>
      <div class="pv-hero-tagline">Камерные встречи, клинические разборы и культурная программа</div>
      <div class="pv-hero-pills">
        <span class="pv-hero-pill">📅 12 февраля 2026</span>
        <span class="pv-hero-pill">🕕 18:00 – 22:00</span>
        <span class="pv-hero-pill">📍 Санкт-Петербург</span>
        <span class="pv-hero-pill">⏱ 4 часа</span>
        <span class="pv-hero-pill">✓ Бесплатно</span>
      </div>
      <div class="pv-hero-actions">
        <a href="#pv-reg" class="pv-btn-cyan" id="pvHeroRegBtn" style="display:none">Зарегистрироваться</a>
        <a href="#pv-program" class="pv-btn-outline-w">Программа</a>
      </div>
    </div>

    <div class="pv-hero-right">
      <div class="pv-hero-info-card" id="pvCdCard" style="display:none">
        <div class="pv-hic-top">
          <div class="pv-cd-label" id="pvCdLabel">До начала школы</div>
          <div id="pvCdGrid" class="pv-cd-grid">
            <div class="pv-cd-cell"><span class="pv-cd-num" id="pvCdD">--</span><span class="pv-cd-unit">дней</span></div>
            <div class="pv-cd-cell"><span class="pv-cd-num" id="pvCdH">--</span><span class="pv-cd-unit">часов</span></div>
            <div class="pv-cd-cell"><span class="pv-cd-num" id="pvCdM">--</span><span class="pv-cd-unit">минут</span></div>
            <div class="pv-cd-cell"><span class="pv-cd-num" id="pvCdS">--</span><span class="pv-cd-unit">секунд</span></div>
          </div>
          <div id="pvCdOngoing" class="pv-cd-ongoing">
            <span style="font-size:22px;">🟢</span>
            <div>
              <div style="font-size:14px;font-weight:700;color:#fff;">Школа проходит сейчас</div>
              <div style="font-size:12px;color:rgba(255,255,255,.45);">12 февраля 2026 · Санкт-Петербург</div>
            </div>
          </div>
        </div>
        <div class="pv-hic-bottom">
          <div class="pv-hic-row">
            <div class="pv-hic-icon">📍</div>
            <div>
              <span class="pv-hic-label">Адрес</span>
              <span class="pv-hic-val"><!-- АДРЕС ПЛОЩАДКИ --></span>
              <span class="pv-hic-sub">Санкт-Петербург</span>
            </div>
          </div>
          <div class="pv-hic-row">
            <div class="pv-hic-icon">☕</div>
            <div>
              <span class="pv-hic-label">Включено</span>
              <span class="pv-hic-sub">Кофе-брейк · Культурная программа · Нетворкинг</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FORMAT -->
<section class="section pv-format-section">
  <div class="section-inner">
    <div class="pv-s-label">Формат</div>
    <h2 class="pv-s-title">Камерно, глубоко, <em>по-петербуржски</em></h2>
    <p class="pv-s-desc">«Петербуржские вечера» — это не конференция и не лекция. Это встреча коллег в неформальной обстановке, где главное — живой профессиональный разговор и возможность задать вопрос напрямую.</p>

    <div class="pv-format-grid">
      <div class="pv-fmt-card">
        <div class="pv-fmt-top-line" style="background:linear-gradient(90deg,var(--cyan),#0ea5e9)"></div>
        <div class="pv-fmt-icon">🎙</div>
        <div class="pv-fmt-badge">2 дискуссии</div>
        <h3>Открытые дискуссии</h3>
        <p>Два клинических разбора с участием 2–3 спикеров. Участники вовлечены в обсуждение напрямую. Разбираем коморбидные случаи из реальной практики — не теорию, а то, что встречается на приёме.</p>
      </div>
      <div class="pv-fmt-card">
        <div class="pv-fmt-top-line" style="background:linear-gradient(90deg,#f59e0b,#f97316)"></div>
        <div class="pv-fmt-icon">🎯</div>
        <div class="pv-fmt-badge">Интерактив со смартфона</div>
        <h3>Интеллектуальная игра</h3>
        <p>Вопросы высокой клинической сложности, 4 варианта ответа, голосование со смартфона через специальную платформу СЗОИБ. После каждого вопроса — развёрнутый разбор со спикером. Три лучших получают призы.</p>
      </div>
      <div class="pv-fmt-card">
        <div class="pv-fmt-top-line" style="background:linear-gradient(90deg,var(--gold),#f59e0b)"></div>
        <div class="pv-fmt-icon">🎭</div>
        <div class="pv-fmt-badge">Уникальная особенность</div>
        <h3>Культурная программа</h3>
        <p>Петербуржские вечера — единственная школа Painmed с культурным элементом. Небольшой творческий блок между дискуссиями: разрядка, впечатления и настоящая атмосфера северной столицы.</p>
      </div>
    </div>

    <div class="pv-culture-banner">
      <div class="pv-culture-banner-icon">🏛</div>
      <div>
        <h3>Неформальная обстановка — главный принцип</h3>
        <p>«Петербуржские вечера» создавались как антипод академическим конференциям. Небольшой зал, возможность свободно задать вопрос, общение с коллегами и спикерами за пределами программы — это и делает этот формат особенным. Здесь врачи общаются как равные.</p>
      </div>
    </div>

    <!-- ТЕАТР МОНПЛЕЗИР -->
    <div class="pv-monplezir-block">
      <div class="pv-monplezir-inner">
        <div class="pv-monplezir-left">
          <div class="pv-monplezir-label">Медицина + Театр</div>
          <h3 class="pv-monplezir-title">Театр <em>«Монплезир»</em></h3>
          <p class="pv-monplezir-desc">«Петербуржские вечера» — единственная из школ Painmed, где медицинская программа встречается с театральным искусством. Партнёр вечеров — петербургский камерный театр «Монплезир», один из самых самобытных театральных проектов Северной столицы.</p>
          <p class="pv-monplezir-desc">Театр основан в 1989 году актёром и режиссёром Игорем Лариным. Лауреат всероссийских и международных театральных фестивалей, обладатель Золотой Пушкинской медали и диплома Российского фонда культуры. Репертуар — моноспектакли по классике русской литературы: Пушкин, Достоевский, Чехов, Булгаков, Гоголь.</p>
          <p class="pv-monplezir-desc">В рамках «Петербуржских вечеров» артисты «Монплезира» представляют специальные театральные миниатюры между клиническими дискуссиями. Это не просто пауза — это смена угла зрения: из языка диагнозов в язык человеческих состояний.</p>
          <a href="https://teatrmonplezir.ru/" target="_blank" class="pv-monplezir-link">Сайт театра «Монплезир» →</a>
        </div>
        <div class="pv-monplezir-right">
          <div class="pv-monplezir-quote-block">
            <div class="pv-monplezir-quote-icon">🎭</div>
            <blockquote class="pv-monplezir-quote">
              Театр учит видеть человека — не симптомы, не диагноз, а человека. Именно это нужно врачу каждый день.
            </blockquote>
            <div class="pv-monplezir-quote-author">— Из концепции «Петербуржских вечеров»</div>
          </div>
          <div class="pv-monplezir-facts">
            <div class="pv-mf-item">
              <span class="pv-mf-num">1989</span>
              <span class="pv-mf-label">год основания театра</span>
            </div>
            <div class="pv-mf-item">
              <span class="pv-mf-num">40</span>
              <span class="pv-mf-label">мест в камерном зале</span>
            </div>
            <div class="pv-mf-item">
              <span class="pv-mf-num">30<span style="font-size:14px">+</span></span>
              <span class="pv-mf-label">лет на сцене</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="pv-facts-strip">
      <div class="pv-fact-item"><div class="pv-fact-num">4 <span>ч</span></div><div class="pv-fact-label">длительность школы</div></div>
      <div class="pv-fact-item"><div class="pv-fact-num">2</div><div class="pv-fact-label">клинических дискуссии</div></div>
      <div class="pv-fact-item"><div class="pv-fact-num">0 <span>₽</span></div><div class="pv-fact-label">участие бесплатно</div></div>
      <div class="pv-fact-item"><div class="pv-fact-num">2<span>-я</span></div><div class="pv-fact-label">встреча в Петербурге</div></div>
    </div>
  </div>
</section>

<!-- PROGRAM -->
<section class="section pv-program-section" id="pv-program">
  <div class="section-inner">
    <div class="pv-program-header">
      <div>
        <div class="pv-s-label">Расписание</div>
        <h2 class="pv-s-title">Программа <em>вечера</em></h2>
      </div>
      <a href="#" class="pv-btn-pdf" target="_blank">📄 Скачать PDF</a>
    </div>
    <div class="pv-program-timeline">
      <div class="pv-prog-item">
        <div class="pv-prog-time">18:00–18:30</div>
        <div class="pv-prog-dot"></div>
        <div>
          <div class="pv-prog-h">Регистрация участников</div>
          <div class="pv-prog-p">Приветственный кофе-брейк, общение с коллегами</div>
        </div>
      </div>
      <div class="pv-prog-item">
        <div class="pv-prog-time">18:30–19:00</div>
        <div class="pv-prog-dot pv-prog-dot-cyan"></div>
        <div>
          <div class="pv-prog-h">Интеллектуальная игра для врачей</div>
          <div class="pv-prog-p">Вопросы о коморбидности. Голосование со смартфона — 5 вопросов с разбором.</div>
          <span class="pv-prog-tag pv-pt-game">🎯 Игра</span>
        </div>
      </div>
      <div class="pv-prog-item">
        <div class="pv-prog-time">19:00–20:00</div>
        <div class="pv-prog-dot pv-prog-dot-cyan"></div>
        <div>
          <div class="pv-prog-h">Открытая дискуссия №1</div>
          <div class="pv-prog-p"><!-- ТЕМА ДИСКУССИИ 1 — уточнить --></div>
          <span class="pv-prog-tag pv-pt-discuss">🎙 Дискуссия</span>
        </div>
      </div>
      <div class="pv-prog-item pv-special">
        <div class="pv-prog-time">20:00–20:20</div>
        <div class="pv-prog-dot pv-prog-dot-gold"></div>
        <div>
          <div class="pv-prog-h">Культурная пауза</div>
          <div class="pv-prog-p">Творческий перерыв — особенность петербуржского формата</div>
          <span class="pv-prog-tag pv-pt-culture">🎭 Культура</span>
        </div>
      </div>
      <div class="pv-prog-item">
        <div class="pv-prog-time">20:20–21:20</div>
        <div class="pv-prog-dot pv-prog-dot-cyan"></div>
        <div>
          <div class="pv-prog-h">Открытая дискуссия №2</div>
          <div class="pv-prog-p"><!-- ТЕМА ДИСКУССИИ 2 — уточнить --></div>
          <span class="pv-prog-tag pv-pt-discuss">🎙 Дискуссия</span>
        </div>
      </div>
      <div class="pv-prog-item">
        <div class="pv-prog-time">21:20–22:00</div>
        <div class="pv-prog-dot"></div>
        <div>
          <div class="pv-prog-h">Завершение · Нетворкинг</div>
          <div class="pv-prog-p">Свободное общение с коллегами и спикерами</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SPEAKERS -->
<div class="pv-speakers-section" id="pv-speakers">
  <div class="pv-speakers-inner">
    <div class="pv-speakers-label">Эксперты</div>
    <h2 class="pv-speakers-title">Спикеры <em>вечера</em></h2>
    <div class="pv-speakers-grid">

      <div class="pv-speaker-card">
        <div class="pv-sp-ava pv-sp-ava-host">👨‍⚕️</div>
        <div class="pv-sp-body">
          <div class="pv-sp-name">Искра Дмитрий Анатольевич</div>
          <div class="pv-sp-degree">д.м.н., профессор · Президент РОО «СЗОИБ»<br>ВМА им. С.М. Кирова, Санкт-Петербург</div>
          <div class="pv-sp-desc">Организатор и бессменный ведущий «Петербуржских вечеров». Ведущий российский специалист по клинической неврологии и болевой медицине, создатель образовательных программ Painmed.</div>
          <div class="pv-sp-tags">
            <span class="pv-sp-tag">Неврология</span>
            <span class="pv-sp-tag">Боль</span>
            <span class="pv-sp-tag">Коморбидность</span>
          </div>
          <span class="pv-sp-badge pv-sp-badge-host">Ведущий</span>
        </div>
      </div>

      <div class="pv-speaker-card">
        <div class="pv-sp-ava pv-sp-ava-guest">👤</div>
        <div class="pv-sp-body">
          <div class="pv-sp-name"><!-- ИМЯ ВТОРОГО СПИКЕРА --></div>
          <div class="pv-sp-degree"><!-- СТЕПЕНЬ, ДОЛЖНОСТЬ, ОРГАНИЗАЦИЯ --></div>
          <div class="pv-sp-desc"><!-- КРАТКОЕ ОПИСАНИЕ ЭКСПЕРТА И ЕГО СПЕЦИАЛИЗАЦИИ --></div>
          <div class="pv-sp-tags">
            <span class="pv-sp-tag"><!-- Тег 1 --></span>
            <span class="pv-sp-tag"><!-- Тег 2 --></span>
          </div>
          <span class="pv-sp-badge pv-sp-badge-guest">Гость</span>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- VENUE -->
<section class="section pv-venue-section" id="pv-venue">
  <div class="section-inner">
    <div class="pv-s-label">Локация</div>
    <h2 class="pv-s-title">Место <em>проведения</em></h2>
    <div class="pv-venue-grid">
      <div class="pv-venue-info">
        <h3>Санкт-Петербург, 12 февраля 2026</h3>
        <div class="pv-venue-row">
          <div class="pv-venue-row-icon">📍</div>
          <div class="pv-venue-row-text">
            <strong>Адрес</strong>
            <!-- АДРЕС ПЛОЩАДКИ -->
          </div>
        </div>
        <div class="pv-venue-row">
          <div class="pv-venue-row-icon">🕕</div>
          <div class="pv-venue-row-text">
            <strong>Время</strong>
            18:00 – 22:00 (регистрация с 18:00)
          </div>
        </div>
        <div class="pv-venue-row">
          <div class="pv-venue-row-icon">🚇</div>
          <div class="pv-venue-row-text">
            <strong>Как добраться</strong>
            <!-- ОРИЕНТИРЫ, БЛИЖАЙШЕЕ МЕТРО -->
          </div>
        </div>
        <div class="pv-venue-row">
          <div class="pv-venue-row-icon">☕</div>
          <div class="pv-venue-row-text">
            <strong>Включено</strong>
            Кофе-брейк, культурная программа и завершающий нетворкинг
          </div>
        </div>
      </div>
      <div class="pv-venue-map">
        <div class="pv-venue-map-icon">🗺</div>
        <div class="pv-venue-map-text">Санкт-Петербург<br><!-- АДРЕС --></div>
        <a href="https://yandex.ru/maps/?text=Санкт-Петербург" target="_blank" class="pv-venue-map-link">Открыть на Яндекс.Картах →</a>
      </div>
    </div>
  </div>
</section>

<!-- WHO -->
<section class="section pv-who-section">
  <div class="section-inner">
    <div class="pv-s-label">Аудитория</div>
    <h2 class="pv-s-title">К участию <em>приглашаются</em></h2>
    <div class="pv-who-grid">
      <span class="pv-who-tag">Неврологи</span>
      <span class="pv-who-tag">Терапевты</span>
      <span class="pv-who-tag">Врачи общей практики</span>
      <span class="pv-who-tag">Кардиологи</span>
      <span class="pv-who-tag">Ревматологи</span>
      <span class="pv-who-tag">Эндокринологи</span>
      <span class="pv-who-tag">Анестезиологи</span>
      <span class="pv-who-tag">Нейрохирурги</span>
      <span class="pv-who-tag">Физиотерапевты</span>
      <span class="pv-who-tag">Реабилитологи</span>
      <span class="pv-who-tag">Врачи ЛФК</span>
      <span class="pv-who-tag">Педиатры</span>
      <span class="pv-who-tag">Семейные врачи</span>
      <span class="pv-who-tag">Хирурги</span>
    </div>
  </div>
</section>

<!-- REVIEWS -->
<section class="section pv-reviews-section">
  <div class="section-inner">
    <div class="pv-s-label">Обратная связь</div>
    <h2 class="pv-s-title">Отзывы о мероприятиях <em>Painmed</em></h2>
    <div class="pv-reviews-grid">
      <div class="pv-review-card">
        <div class="pv-review-stars">★★★★★</div>
        <div class="pv-review-text">Впервые на медицинском мероприятии не хотелось уйти раньше. Формат — супер.</div>
        <div class="pv-review-author">Марина К., терапевт</div>
      </div>
      <div class="pv-review-card">
        <div class="pv-review-stars">★★★★★</div>
        <div class="pv-review-text">Прекрасные спикеры, актуальные темы. Важнейшая информация — как вы её разложили по полочкам, спасибо!</div>
        <div class="pv-review-author">Андрей, невролог</div>
      </div>
      <div class="pv-review-card">
        <div class="pv-review-stars">★★★★★</div>
        <div class="pv-review-text">Коротко, доступно и ясно. Молодцы. Лучшая группа, много полезной информации.</div>
        <div class="pv-review-author">Елена, участница Painmed</div>
      </div>
    </div>
  </div>
</section>

<!-- REGISTRATION -->
<div class="pv-reg-section" id="pv-reg" style="display:none">
  <div class="pv-reg-inner">
    <div class="pv-reg-left">
      <div class="pv-s-label" style="color:var(--cyan)">Регистрация</div>
      <h2>Участие <em>бесплатное</em></h2>
      <p>Зарегистрируйтесь, чтобы гарантировать себе место. Количество участников ограничено — камерный формат.</p>
      <div class="pv-reg-features">
        <div class="pv-reg-feat">Бесплатное участие</div>
        <div class="pv-reg-feat">Кофе-брейк и культурная программа</div>
        <div class="pv-reg-feat">Нетворкинг с коллегами</div>
        <div class="pv-reg-feat">Подтверждение за 1–2 рабочих дня</div>
      </div>
    </div>
    <div class="pv-reg-form">
      <h3>Заявка на участие</h3>
      <div class="pv-reg-form-note">2-е Петербуржские вечера · 12 февраля 2026</div>
      <div class="pv-form-field">
        <label class="pv-form-label">ФИО</label>
        <input type="text" class="pv-form-input" placeholder="Иванов Иван Иванович">
      </div>
      <div class="pv-form-field">
        <label class="pv-form-label">Телефон</label>
        <input type="tel" class="pv-form-input" placeholder="+7 (___) ___-__-__">
      </div>
      <div class="pv-form-field">
        <label class="pv-form-label">Специальность <span class="pv-opt">(по желанию)</span></label>
        <input type="text" class="pv-form-input" placeholder="Невролог, терапевт...">
      </div>
      <button class="pv-form-submit" id="pvFormSubmit">Зарегистрироваться →</button>
      <div class="pv-form-privacy">Нажимая кнопку, вы соглашаетесь с политикой обработки персональных данных</div>
    </div>
  </div>
</div>

<!-- FAQ -->
<section class="section pv-faq-section">
  <div class="section-inner">
    <div class="pv-s-label">Вопросы и ответы</div>
    <h2 class="pv-s-title">Часто <em>спрашивают</em></h2>
    <div class="pv-faq-list">
      <div class="pv-faq-item">
        <div class="pv-faq-q"><span class="pv-faq-q-text">Участие платное?</span><span class="pv-faq-icon">+</span></div>
        <div class="pv-faq-a">Нет, участие бесплатное для всех практикующих врачей. Необходима предварительная регистрация.</div>
      </div>
      <div class="pv-faq-item">
        <div class="pv-faq-q"><span class="pv-faq-q-text">Чем «Петербуржские вечера» отличаются от других школ?</span><span class="pv-faq-icon">+</span></div>
        <div class="pv-faq-a">Это камерный формат с неформальной обстановкой — небольшой зал, близкий контакт со спикерами и культурный элемент между дискуссиями. Проходит в Санкт-Петербурге дважды в год: в феврале и октябре.</div>
      </div>
      <div class="pv-faq-item">
        <div class="pv-faq-q"><span class="pv-faq-q-text">Будет ли онлайн-трансляция?</span><span class="pv-faq-icon">+</span></div>
        <div class="pv-faq-a">Нет, формат строго очный. Живое общение — ключевая ценность «Петербуржских вечеров».</div>
      </div>
      <div class="pv-faq-item">
        <div class="pv-faq-q"><span class="pv-faq-q-text">Нужен ли смартфон?</span><span class="pv-faq-icon">+</span></div>
        <div class="pv-faq-a">Да, для интеллектуальной игры — голосование проходит со смартфона через платформу СЗОИБ. Зарядите его заранее.</div>
      </div>
      <div class="pv-faq-item">
        <div class="pv-faq-q"><span class="pv-faq-q-text">Как часто проходят «Петербуржские вечера»?</span><span class="pv-faq-icon">+</span></div>
        <div class="pv-faq-a">Два раза в год — в феврале и октябре. Следите за анонсами в сообществе Painmed ВКонтакте.</div>
      </div>
    </div>
    <div class="pv-faq-cta" id="pvFaqCta" style="display:none">
      <div>
        <strong>Хотите участвовать?</strong>
        <p>Камерный формат — количество мест ограничено. Регистрация займёт 30 секунд.</p>
      </div>
      <a href="#pv-reg" class="pv-btn-cyan" id="pvFaqRegBtn" style="display:none">Зарегистрироваться →</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
