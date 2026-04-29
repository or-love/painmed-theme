<?php
/**
 * Template Name: Московская школа
 * Description:  Вечерняя Москва — 1-я Школа коморбидной патологии
 */

get_header(); ?>

<!-- HERO -->
<section class="ms-hero">
  <div class="ms-hero-inner">
    <div class="ms-hero-left">
      <div class="ms-hero-badge">🏙 Офлайн · Москва</div>
      <h1 class="ms-hero-h1">Вечерняя <em>Москва</em></h1>
      <div class="ms-hero-subtitle">1-я Школа коморбидной патологии</div>
      <div class="ms-hero-tagline">Дискуссии, интеллектуальная игра и медицинский стендап</div>
      <div class="ms-hero-pills">
        <span class="ms-hero-pill">📅 12 марта 2026</span>
        <span class="ms-hero-pill">🕓 16:30 – 20:00</span>
        <span class="ms-hero-pill">📍 Лесная, 15</span>
        <span class="ms-hero-pill">⏱ 4 часа</span>
        <span class="ms-hero-pill">✓ Бесплатно</span>
      </div>
      <div class="ms-hero-actions">
        <a href="#ms-reg" class="ms-btn-cyan" id="msHeroRegBtn">Зарегистрироваться</a>
        <a href="#ms-program" class="ms-btn-outline-w">Программа</a>
      </div>
    </div>

    <div class="ms-hero-right">
      <div class="ms-hero-info-card" id="msCdCard">
        <div class="ms-hic-top">
          <!-- Countdown -->
          <div id="msCdCountdownBlock">
            <div class="ms-cd-label" id="msCdLabel">До начала школы</div>
            <div id="msCdGrid" class="ms-cd-grid">
              <div class="ms-cd-cell"><span class="ms-cd-num" id="msCdD">--</span><span class="ms-cd-unit">дней</span></div>
              <div class="ms-cd-cell"><span class="ms-cd-num" id="msCdH">--</span><span class="ms-cd-unit">часов</span></div>
              <div class="ms-cd-cell"><span class="ms-cd-num" id="msCdM">--</span><span class="ms-cd-unit">минут</span></div>
              <div class="ms-cd-cell"><span class="ms-cd-num" id="msCdS">--</span><span class="ms-cd-unit">секунд</span></div>
            </div>
            <div id="msCdOngoing" class="ms-cd-ongoing">
              <span style="font-size:22px;">🟢</span>
              <div>
                <div style="font-size:14px;font-weight:700;color:#fff;">Школа проходит сейчас</div>
                <div style="font-size:12px;color:rgba(255,255,255,.45);">12 марта 2026 · Москва</div>
              </div>
            </div>
          </div>
        </div>
        <div class="ms-hic-bottom">
          <div class="ms-hic-row" style="margin-bottom:10px;">
            <div class="ms-hic-icon">📍</div>
            <div>
              <span class="ms-hic-label">Адрес</span>
              <span class="ms-hic-val">Лесная ул., 15</span>
              <span class="ms-hic-sub">Отель «Лесная Сафмар», Москва</span>
            </div>
          </div>
          <div class="ms-hic-row">
            <div class="ms-hic-icon">☕</div>
            <div>
              <span class="ms-hic-label">Включено</span>
              <span class="ms-hic-sub">Кофе-брейк · Нетворкинг · Интерактив</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FORMAT -->
<section class="section ms-format-section">
  <div class="section-inner">
    <div class="ms-s-label">Формат</div>
    <h2 class="ms-s-title">Не лекции — <em>живой разговор</em></h2>
    <p class="ms-s-desc">Четыре часа без единого скучного момента. Три разных формата, которые держат внимание — и разряжают его в нужный момент.</p>

    <div class="ms-format-grid">
      <div class="ms-fmt-card">
        <div class="ms-fmt-top-line" style="background:linear-gradient(90deg,var(--cyan),#0ea5e9)"></div>
        <div class="ms-fmt-icon">🎙</div>
        <div class="ms-fmt-badge">2 дискуссии</div>
        <h3>Открытые дискуссии</h3>
        <p>Два клинических разбора с вовлечением участников. Темы — практические: внесуставные источники боли при остеоартрите и патология шейного отдела позвоночника. Не монолог — диалог.</p>
      </div>
      <div class="ms-fmt-card">
        <div class="ms-fmt-top-line" style="background:linear-gradient(90deg,#f59e0b,#f97316)"></div>
        <div class="ms-fmt-icon">🎯</div>
        <div class="ms-fmt-badge">5 вопросов · интерактив со смартфона</div>
        <h3>Интеллектуальная игра</h3>
        <p>5 вопросов о коморбидности скелетно-мышечных болей, 4 варианта ответа, 5 минут на размышление. Голосование со смартфона. После каждого вопроса — разбор и объяснение.</p>
      </div>
      <div class="ms-fmt-card">
        <div class="ms-fmt-top-line" style="background:linear-gradient(90deg,var(--teal),#0ea5e9)"></div>
        <div class="ms-fmt-icon">🎭</div>
        <div class="ms-fmt-badge">2 паузы · уникальный элемент</div>
        <h3>Стендап-паузы</h3>
        <p>Между блоками — две творческие паузы с медицинским юмором. Помогают переключиться, сохранить концентрацию и не дать усталости взять верх. Впервые в формате российской медшколы.</p>
      </div>
    </div>

    <div class="ms-facts-strip">
      <div class="ms-fact-item"><div class="ms-fact-num">4 <span>ч</span></div><div class="ms-fact-label">длительность школы</div></div>
      <div class="ms-fact-item"><div class="ms-fact-num">2</div><div class="ms-fact-label">клинических дискуссии</div></div>
      <div class="ms-fact-item"><div class="ms-fact-num">0 <span>₽</span></div><div class="ms-fact-label">участие бесплатно</div></div>
      <div class="ms-fact-item"><div class="ms-fact-num">1<span>-я</span></div><div class="ms-fact-label">школа в Москве</div></div>
    </div>
  </div>
</section>

<!-- PROGRAM -->
<section class="section ms-program-section" id="ms-program">
  <div class="section-inner">
    <div class="ms-program-header">
      <div>
        <div class="ms-s-label">Расписание</div>
        <h2 class="ms-s-title">Программа <em>школы</em></h2>
      </div>
      <a href="https://msk.school.painmed.ru/program.pdf" class="ms-btn-pdf" target="_blank">📄 Скачать PDF</a>
    </div>
    <div class="ms-program-timeline">
      <div class="ms-prog-item">
        <div class="ms-prog-time">16:30–17:00</div>
        <div class="ms-prog-dot"></div>
        <div>
          <div class="ms-prog-h">Регистрация участников</div>
          <div class="ms-prog-p">Приветственный кофе-брейк</div>
        </div>
      </div>
      <div class="ms-prog-item">
        <div class="ms-prog-time">17:00–17:30</div>
        <div class="ms-prog-dot ms-prog-dot-cyan"></div>
        <div>
          <div class="ms-prog-h">Интеллектуальная игра для врачей</div>
          <div class="ms-prog-p">5 вопросов о коморбидности скелетно-мышечных болей и соматической патологии. Интерактив со смартфона.</div>
          <span class="ms-prog-tag ms-pt-game">🎯 Игра</span>
        </div>
      </div>
      <div class="ms-prog-item">
        <div class="ms-prog-time">17:30–18:20</div>
        <div class="ms-prog-dot ms-prog-dot-cyan"></div>
        <div>
          <div class="ms-prog-h">Открытая дискуссия №1</div>
          <div class="ms-prog-p">Внесуставные источники боли при остеоартрите. Консенсус врачей ревматологического и неревматологического профиля.</div>
          <span class="ms-prog-tag ms-pt-discuss">🎙 Дискуссия</span>
        </div>
      </div>
      <div class="ms-prog-item ms-special">
        <div class="ms-prog-time">18:20–18:40</div>
        <div class="ms-prog-dot"></div>
        <div>
          <div class="ms-prog-h">Стендап-пауза медицинского юмора</div>
          <div class="ms-prog-p">Творческая пауза — переключение и перезарядка перед второй дискуссией.</div>
          <span class="ms-prog-tag ms-pt-standup">🎭 Стендап</span>
        </div>
      </div>
      <div class="ms-prog-item">
        <div class="ms-prog-time">18:40–19:40</div>
        <div class="ms-prog-dot ms-prog-dot-cyan"></div>
        <div>
          <div class="ms-prog-h">Открытая дискуссия №2</div>
          <div class="ms-prog-p">Зона патологии — шея. Головокружения, боли, недостаточность кровообращения в вертебрально-базилярном бассейне. Разбираемся вместе.</div>
          <span class="ms-prog-tag ms-pt-discuss">🎙 Дискуссия</span>
        </div>
      </div>
      <div class="ms-prog-item ms-special">
        <div class="ms-prog-time">19:40–20:00</div>
        <div class="ms-prog-dot"></div>
        <div>
          <div class="ms-prog-h">Стендап-пауза · Завершение</div>
          <div class="ms-prog-p">Финальная пауза медицинского юмора. Нетворкинг и ужин.</div>
          <span class="ms-prog-tag ms-pt-standup">🎭 Стендап</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SPEAKERS -->
<div class="ms-speakers-section" id="ms-speakers">
  <div class="ms-speakers-inner">
    <div class="ms-speakers-label">Эксперты</div>
    <h2 class="ms-speakers-title">Спикеры <em>школы</em></h2>
    <div class="ms-speakers-grid">

      <div class="ms-speaker-card">
        <div class="ms-sp-ava ms-sp-ava-host">👨‍⚕️</div>
        <div class="ms-sp-body">
          <div class="ms-sp-name">Искра Дмитрий Анатольевич</div>
          <div class="ms-sp-degree">д.м.н., профессор · Президент РОО «СЗОИБ»<br>ВМА им. С.М. Кирова, Санкт-Петербург</div>
          <div class="ms-sp-desc">Ведущий российский специалист по клинической неврологии и болевой медицине. Создатель и бессменный организатор образовательных программ Painmed. Разрабатывает алгоритмы ведения коморбидных пациентов для врачей различных специальностей.</div>
          <div class="ms-sp-tags">
            <span class="ms-sp-tag">Неврология</span>
            <span class="ms-sp-tag">Боль</span>
            <span class="ms-sp-tag">Алгоритмы</span>
          </div>
          <span class="ms-sp-badge ms-sp-badge-host">Ведущий</span>
        </div>
      </div>

      <div class="ms-speaker-card">
        <div class="ms-sp-ava ms-sp-ava-guest">👩‍⚕️</div>
        <div class="ms-sp-body">
          <div class="ms-sp-name">Линченко Татьяна Ивановна</div>
          <div class="ms-sp-degree">к.м.н., врач-невролог · Москва</div>
          <div class="ms-sp-desc">Специалист в области неврологии с акцентом на патологию шейного отдела позвоночника и цервикогенные головокружения. Ведёт практику в Москве, активно участвует в разработке обучающих программ для врачей первичного звена.</div>
          <div class="ms-sp-tags">
            <span class="ms-sp-tag">Неврология</span>
            <span class="ms-sp-tag">Шейный отдел</span>
            <span class="ms-sp-tag">Головокружения</span>
          </div>
          <span class="ms-sp-badge ms-sp-badge-guest">Гость</span>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- VENUE -->
<section class="section ms-venue-section" id="ms-venue">
  <div class="section-inner">
    <div class="ms-s-label">Локация</div>
    <h2 class="ms-s-title">Место <em>проведения</em></h2>
    <div class="ms-venue-grid">
      <div class="ms-venue-info">
        <h3>Москва, 12 марта 2026</h3>
        <div class="ms-venue-row">
          <div class="ms-venue-row-icon">📍</div>
          <div class="ms-venue-row-text">
            <strong>Адрес</strong>
            г. Москва, Лесная ул., д. 15<br>Отель «Лесная Сафмар»
          </div>
        </div>
        <div class="ms-venue-row">
          <div class="ms-venue-row-icon">🕓</div>
          <div class="ms-venue-row-text">
            <strong>Время</strong>
            16:30 – 20:00 (регистрация с 16:30)
          </div>
        </div>
        <div class="ms-venue-row">
          <div class="ms-venue-row-icon">🚇</div>
          <div class="ms-venue-row-text">
            <strong>Как добраться</strong>
            10–15 минут от метро. Рекомендуем прийти заранее — будет кофе и настройка интерактива.
          </div>
        </div>
        <div class="ms-venue-row">
          <div class="ms-venue-row-icon">☕</div>
          <div class="ms-venue-row-text">
            <strong>Включено</strong>
            Кофе-брейк в начале и заключительный ужин для участников
          </div>
        </div>
      </div>
      <div class="ms-venue-map">
        <div class="ms-venue-map-icon">🗺</div>
        <div class="ms-venue-map-text">Москва, Лесная ул., 15<br>Отель «Лесная Сафмар»</div>
        <a href="https://yandex.ru/maps/?text=Москва%20Лесная%2015%20отель%20Лесная%20Сафмар" target="_blank" class="ms-venue-map-link">Открыть на Яндекс.Картах →</a>
      </div>
    </div>
  </div>
</section>

<!-- WHO -->
<section class="section ms-who-section">
  <div class="section-inner">
    <div class="ms-s-label">Аудитория</div>
    <h2 class="ms-s-title">К участию <em>приглашаются</em></h2>
    <div class="ms-who-grid">
      <span class="ms-who-tag">Неврологи</span>
      <span class="ms-who-tag">Терапевты</span>
      <span class="ms-who-tag">Врачи общей практики</span>
      <span class="ms-who-tag">Кардиологи</span>
      <span class="ms-who-tag">Ревматологи</span>
      <span class="ms-who-tag">Эндокринологи</span>
      <span class="ms-who-tag">Анестезиологи</span>
      <span class="ms-who-tag">Нейрохирурги</span>
      <span class="ms-who-tag">Физиотерапевты</span>
      <span class="ms-who-tag">Реабилитологи</span>
      <span class="ms-who-tag">Врачи ЛФК</span>
      <span class="ms-who-tag">Педиатры</span>
      <span class="ms-who-tag">Семейные врачи</span>
      <span class="ms-who-tag">Хирурги</span>
    </div>
    <p class="ms-who-note">Если вы регулярно видите пациентов с болью при остеоартрите, головокружениями и патологией шейного отдела — этот формат даст именно прикладные решения.</p>
  </div>
</section>

<!-- REVIEWS -->
<section class="section ms-reviews-section">
  <div class="section-inner">
    <div class="ms-s-label">Обратная связь</div>
    <h2 class="ms-s-title">Отзывы о мероприятиях <em>Painmed</em></h2>
    <div class="ms-reviews-grid">
      <div class="ms-review-card">
        <div class="ms-review-stars">★★★★★</div>
        <div class="ms-review-text">Впервые на медицинском мероприятии не хотелось уйти раньше. Формат — супер.</div>
        <div class="ms-review-author">Марина К., терапевт</div>
      </div>
      <div class="ms-review-card">
        <div class="ms-review-stars">★★★★★</div>
        <div class="ms-review-text">Прекрасные спикеры, актуальные темы. Важнейшая информация — как вы её разложили по полочкам, спасибо!</div>
        <div class="ms-review-author">Андрей, невролог</div>
      </div>
      <div class="ms-review-card">
        <div class="ms-review-stars">★★★★★</div>
        <div class="ms-review-text">Лучшая группа, много полезной информации. Некоторые выпуски смотрим по два раза.</div>
        <div class="ms-review-author">Елена, участница эфиров Painmed</div>
      </div>
    </div>
  </div>
</section>

<!-- REGISTRATION -->
<div class="ms-reg-section" id="ms-reg">
  <div class="ms-reg-inner">
    <div class="ms-reg-left">
      <div class="ms-s-label" style="color:var(--cyan)">Регистрация</div>
      <h2>Участие <em>бесплатное</em></h2>
      <p>Зарегистрируйтесь, чтобы гарантировать себе место. Мы планируем рассадку, кофе-паузы и заключительный ужин по числу участников.</p>
      <div class="ms-reg-features">
        <div class="ms-reg-feat">Бесплатное участие</div>
        <div class="ms-reg-feat">Кофе-брейк и нетворкинг</div>
        <div class="ms-reg-feat">Заключительный ужин</div>
        <div class="ms-reg-feat">Подтверждение за 1–2 рабочих дня</div>
      </div>
    </div>
    <div class="ms-reg-form">
      <h3>Заявка на участие</h3>
      <div class="ms-reg-form-note">1-я Вечерняя Москва · 12 марта 2026</div>
      <div class="ms-form-field">
        <label class="ms-form-label">ФИО</label>
        <input type="text" class="ms-form-input" placeholder="Иванов Иван Иванович">
      </div>
      <div class="ms-form-field">
        <label class="ms-form-label">Телефон</label>
        <input type="tel" class="ms-form-input" placeholder="+7 (___) ___-__-__">
      </div>
      <div class="ms-form-field">
        <label class="ms-form-label">Специальность <span class="ms-opt">(по желанию)</span></label>
        <input type="text" class="ms-form-input" placeholder="Невролог, терапевт...">
      </div>
      <button class="ms-form-submit" id="msFormSubmit">Зарегистрироваться →</button>
      <div class="ms-form-privacy">Нажимая кнопку, вы соглашаетесь с политикой обработки персональных данных</div>
    </div>
  </div>
</div>

<!-- FAQ -->
<section class="section ms-faq-section">
  <div class="section-inner">
    <div class="ms-s-label">Вопросы и ответы</div>
    <h2 class="ms-s-title">Часто <em>спрашивают</em></h2>
    <div class="ms-faq-list">
      <div class="ms-faq-item">
        <div class="ms-faq-q"><span class="ms-faq-q-text">Это бесплатно?</span><span class="ms-faq-icon">+</span></div>
        <div class="ms-faq-a">Да, участие бесплатное. Необходима предварительная регистрация.</div>
      </div>
      <div class="ms-faq-item">
        <div class="ms-faq-q"><span class="ms-faq-q-text">Будет ли онлайн-трансляция?</span><span class="ms-faq-icon">+</span></div>
        <div class="ms-faq-a">Нет, формат — строго очный. Именно поэтому важно зарегистрироваться и прийти лично. По итогам возможно появление материалов в проектах Painmed.</div>
      </div>
      <div class="ms-faq-item">
        <div class="ms-faq-q"><span class="ms-faq-q-text">Нужен ли смартфон?</span><span class="ms-faq-icon">+</span></div>
        <div class="ms-faq-a">Да, для интеллектуальной игры — голосование и ответы проходят со смартфона через специальную платформу. Рекомендуем зарядить его заранее.</div>
      </div>
      <div class="ms-faq-item">
        <div class="ms-faq-q"><span class="ms-faq-q-text">Можно ли прийти без регистрации?</span><span class="ms-faq-icon">+</span></div>
        <div class="ms-faq-a">Рекомендуем обязательно зарегистрироваться — по числу участников мы планируем рассадку, материалы и кофе-паузы.</div>
      </div>
      <div class="ms-faq-item">
        <div class="ms-faq-q"><span class="ms-faq-q-text">Что такое стендап-паузы?</span><span class="ms-faq-icon">+</span></div>
        <div class="ms-faq-a">Это уникальный элемент Вечерней Москвы — между клиническими дискуссиями проходят две короткие паузы с медицинским юмором. Они помогают переключиться и сохранить концентрацию на протяжении всей школы.</div>
      </div>
    </div>
    <div class="ms-faq-cta" id="msFaqCta">
      <div>
        <strong>Готовы присоединиться?</strong>
        <p>Регистрация занимает 30 секунд. Количество мест ограничено.</p>
      </div>
      <a href="#ms-reg" class="ms-btn-cyan" id="msFaqRegBtn">Зарегистрироваться →</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
