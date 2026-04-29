<?php
/**
 * Template Name: Мероприятия
 * Шаблон страницы «Мероприятия» — онлайн и офлайн форматы Painmed
 *
 * @package Painmed
 */

get_header();
?>

<!-- HERO -->
<section class="ev-hero">
  <div class="ev-hero-inner">
    <div class="hero-badge">Painmed · Образовательная платформа</div>
    <h1>Мероприятия<br><span>онлайн и офлайн</span></h1>
    <p class="ev-hero-sub">6 форматов профессионального обучения для практикующих врачей — от прямых эфиров до региональных очных школ</p>
    <div class="ev-hero-stats">
      <div class="stat-item"><span class="stat-num">4<span>+</span></span><span class="stat-label">онлайн-формата</span></div>
      <div class="stat-item"><span class="stat-num">5</span><span class="stat-label">офлайн-программ</span></div>
      <div class="stat-item"><span class="stat-num">30<span>+</span></span><span class="stat-label">специальностей врачей</span></div>
      <div class="stat-item"><span class="stat-num">∞</span><span class="stat-label">бесплатное участие</span></div>
    </div>
  </div>
</section>

<!-- UPCOMING -->
<section class="section ev-upcoming">
  <div class="section-inner">
    <div class="section-header">
      <div class="section-label">Ближайшие события</div>
      <h2 class="section-title">Предстоящие <em>мероприятия</em></h2>
      <p class="section-desc">Онлайн-эфиры доступны бесплатно. На офлайн-школах требуется предварительная регистрация.</p>
    </div>
    <div class="events-grid">

      <div class="event-card">
        <div class="event-card-top">
          <span class="event-format-tag tag-ev-online">🖥 Онлайн</span>
        </div>
        <h3>Малый совет экспертов: Коморбидность боли и тревожных расстройств</h3>
        <div class="event-card-meta"><span>🎙 Совет экспертов</span><span>⏱ ~90 мин</span></div>
        <a href="https://painmed.ru/online/" class="btn-outline">Страница эфира</a>
      </div>

      <div class="event-card">
        <div class="event-card-top">
          <span class="event-format-tag tag-ev-offline">📍 Офлайн</span>
        </div>
        <h3>6-я Южная школа коморбидной патологии — Волгоград, Ростов, Краснодар</h3>
        <div class="event-card-meta"><span>🌊 Южная школа</span><span>⏱ 4 часа</span></div>
        <a href="/southern-school/" class="btn-outline">Узнать даты и города</a>
      </div>

      <!-- СЛЕДУЮЩЕЕ МЕРОПРИЯТИЕ — countdown card -->
      <div class="event-card-next">
        <div class="next-label">Следующий эфир</div>
        <h3>Занимательная медицина: Дифференциальная диагностика нейрогенной боли</h3>
        <div class="next-datetime">📅 1 апреля · 19:00 МСК</div>
        <div class="ev-countdown">
          <div class="cd-block"><span class="cd-num" id="cd-d">00</span><span class="cd-label">дней</span></div>
          <div class="cd-block"><span class="cd-num" id="cd-h">00</span><span class="cd-label">часов</span></div>
          <div class="cd-block"><span class="cd-num" id="cd-m">00</span><span class="cd-label">минут</span></div>
          <div class="cd-block"><span class="cd-num" id="cd-s">00</span><span class="cd-label">секунд</span></div>
        </div>
        <div class="next-access-note">🔒 Полный доступ после регистрации</div>
        <a href="https://painmed.ru/online/" class="btn-watch">▶ Смотреть онлайн</a>
      </div>

    </div>
  </div>
</section>

<!-- ONLINE FORMATS -->
<section class="section">
  <div class="section-inner">
    <div class="section-header">
      <div class="section-label">🖥 Онлайн-форматы</div>
      <h2 class="section-title">Прямые <em>эфиры</em> и записи</h2>
      <p class="section-desc">Смотрите в прямом эфире или в записи — из любой точки России. Для полного доступа к архиву необходима регистрация.</p>
    </div>

    <div class="ev-formats-grid">

      <div class="ev-format-card">
        <div class="format-top-line line-cyan"></div>
        <div class="ev-format-head">
          <div class="format-icon fi-cyan">🎙</div>
          <div class="ev-format-head-text">
            <h3>Советы экспертов</h3>
            <p>Научные дискуссии в формате живого диалога — от двух специалистов до открытого круглого стола</p>
          </div>
        </div>
        <div class="ev-subformats">
          <a href="/arhiv/?cat=bolshoy-sovet" class="ev-subformat-item">
            <div class="sub-dot dc"></div>
            <div class="ev-subformat-body">
              <strong>Большой совет</strong>
              <span>4–6 спикеров, открытая полемика без купюр</span>
              <div class="ev-subformat-footer"><span></span><span class="sub-archive-link">Архив выпусков</span></div>
            </div>
          </a>
          <a href="/arhiv/?cat=malyy-sovet" class="ev-subformat-item">
            <div class="sub-dot dc"></div>
            <div class="ev-subformat-body">
              <strong>Малый совет</strong>
              <span>Диалог двух специалистов — синергия дисциплин 1+1=3</span>
              <div class="ev-subformat-footer"><span></span><span class="sub-archive-link">Архив выпусков</span></div>
            </div>
          </a>
          <a href="/arhiv/?cat=voprosy-ekspertu" class="ev-subformat-item">
            <div class="sub-dot dc"></div>
            <div class="ev-subformat-body">
              <strong>Вопросы эксперту</strong>
              <span>Реальные вопросы врачей — развёрнутые ответы экспертов</span>
              <div class="ev-subformat-footer"><span></span><span class="sub-archive-link">Архив выпусков</span></div>
            </div>
          </a>
        </div>
        <div class="ev-format-footer">
          <span class="format-count">Выпусков: <strong>60+</strong></span>
          <a href="/arhiv/" class="btn-link">Смотреть эфиры</a>
        </div>
      </div>

      <div class="ev-format-card">
        <div class="format-top-line line-amber"></div>
        <div class="ev-format-head">
          <div class="format-icon fi-amber">🎯</div>
          <div class="ev-format-head-text">
            <h3>Интеллектуальная телеигра</h3>
            <p>«Занимательная медицина» — знания в игровой форме. 5 вопросов высокой сложности, одна тема, ответы в прямом эфире</p>
          </div>
        </div>
        <div class="ev-subformats">
          <div class="ev-subformat-item">
            <div class="sub-dot da"></div>
            <div><strong>5 вопросов — 1 тема</strong><span>Дифдиагностика, клинические кейсы, разборы</span></div>
          </div>
          <div class="ev-subformat-item">
            <div class="sub-dot da"></div>
            <div><strong>Ответы в реальном времени</strong><span>Тестируйте знания и получайте клинические акценты сразу</span></div>
          </div>
        </div>
        <div class="ev-format-footer">
          <span class="format-count">Выпусков: <strong>20+</strong></span>
          <a href="/arhiv/" class="btn-link">Смотреть игры</a>
        </div>
      </div>

      <div class="ev-format-card">
        <div class="format-top-line line-green"></div>
        <div class="ev-format-head">
          <div class="format-icon fi-green">💊</div>
          <div class="ev-format-head-text">
            <h3>Аптека коморбидного пациента</h3>
            <p>Клинико-фармакологический разбор: кому, что и в каком порядке назначать при сочетанной патологии</p>
          </div>
        </div>
        <div class="ev-subformats">
          <div class="ev-subformat-item">
            <div class="sub-dot dg"></div>
            <div><strong>Полипрагмазия и безопасность</strong><span>Лекарственные взаимодействия, фармакокинетика</span></div>
          </div>
          <div class="ev-subformat-item">
            <div class="sub-dot dg"></div>
            <div><strong>Руководство к действию</strong><span>Практические алгоритмы для ежедневного приёма</span></div>
          </div>
        </div>
        <div class="ev-format-footer">
          <span class="format-count">Выпусков: <strong>15+</strong></span>
          <a href="/arhiv/" class="btn-link">Смотреть выпуски</a>
        </div>
      </div>

      <div class="ev-format-card">
        <div class="format-top-line line-indigo"></div>
        <div class="ev-format-head">
          <div class="format-icon fi-indigo">🤖</div>
          <div class="ev-format-head-text">
            <h3>Диалоги с нейросетью</h3>
            <p>Профессор Искра и ИИ-ассистент Эйболит обсуждают актуальные клинические вопросы через призму искусственного интеллекта</p>
          </div>
        </div>
        <div class="ev-subformats">
          <div class="ev-subformat-item">
            <div class="sub-dot di"></div>
            <div><strong>ИИ структурирует мышление</strong><span>Коморбидность, выбор миорелаксантов, старение и боль</span></div>
          </div>
          <div class="ev-subformat-item">
            <div class="sub-dot di"></div>
            <div><strong>Живой формат</strong><span>Эксперт проверяет, оспаривает и дополняет ответы ИИ</span></div>
          </div>
        </div>
        <div class="ev-format-footer">
          <span class="format-count">Выпусков: <strong>10+</strong></span>
          <a href="/arhiv/" class="btn-link">Смотреть диалоги</a>
        </div>
      </div>

    </div>

    <div class="ev-archive-banner">
      <div>
        <h3>📼 Архив всех трансляций</h3>
        <p>Все видео в одном месте — фильтры по формату, дате и теме. Более 100 выпусков в открытом доступе.</p>
      </div>
      <a href="/arhiv/" class="btn-primary">Перейти в архив</a>
    </div>
  </div>
</section>

<!-- OFFLINE -->
<section class="section ev-offline">
  <div class="section-inner">
    <div class="section-header">
      <div class="section-label">📍 Офлайн-форматы</div>
      <h2 class="section-title">Очные <em>встречи</em> по всей России</h2>
      <p class="section-desc">Принципиально без скучных лекций — дискуссии, интеллектуальные игры, клинические разборы и нетворкинг с коллегами. Все мероприятия бесплатны.</p>
    </div>

    <div class="ev-schools-grid">

      <div class="ev-school-card sc-south">
        <div class="sc-stripe str-south"></div>
        <div class="sc-body">
          <div class="sc-emoji">🌊</div>
          <h3>Южная школа</h3>
          <p>Региональный цикл для врачей юга России. Коморбидность, болевые синдромы, полипрагмазия — в форматах, которые работают.</p>
          <div class="ev-city-chips">
            <span class="ev-chip">Волгоград</span><span class="ev-chip">Ростов-на-Дону</span>
            <span class="ev-chip">Краснодар</span><span class="ev-chip">Воронеж</span>
            <span class="ev-chip">Липецк</span><span class="ev-chip">Ставрополь</span>
          </div>
          <div class="sc-footer">
            <span class="sc-next">Следующий цикл: <strong>апрель 2026</strong></span>
            <a href="/southern-school/" class="btn-link">Подробнее</a>
          </div>
        </div>
      </div>

      <div class="ev-school-card sc-east">
        <div class="sc-stripe str-east"></div>
        <div class="sc-body">
          <div class="sc-emoji">🌏</div>
          <h3>Восточная школа</h3>
          <p>Цикл для врачей Сибири и Дальнего Востока. Те же высокие стандарты Painmed — в каждом городе региона.</p>
          <div class="ev-city-chips">
            <span class="ev-chip">Пермь</span><span class="ev-chip">Челябинск</span>
            <span class="ev-chip">Тюмень</span><span class="ev-chip">Иркутск</span>
            <span class="ev-chip">Хабаровск</span><span class="ev-chip">Владивосток</span>
          </div>
          <div class="sc-footer">
            <span class="sc-next">Следующий цикл: <strong>осень 2026</strong></span>
            <a href="/eastern-school/" class="btn-link">Подробнее</a>
          </div>
        </div>
      </div>

      <div class="ev-school-card sc-spb">
        <div class="sc-stripe str-spb"></div>
        <div class="sc-body">
          <div class="sc-emoji">🌙</div>
          <h3>Петербуржские вечера</h3>
          <p>Камерные встречи в Санкт-Петербурге. Неформальная обстановка, культурная программа, глубокий разбор клинических случаев.</p>
          <div class="ev-city-chips"><span class="ev-chip">Санкт-Петербург</span></div>
          <div class="sc-footer">
            <span class="sc-next">Ближайшая встреча: <strong>уточняется</strong></span>
            <a href="/spb-school/" class="btn-link">Подробнее</a>
          </div>
        </div>
      </div>

      <div class="ev-school-card sc-msk">
        <div class="sc-stripe str-msk"></div>
        <div class="sc-body">
          <div class="sc-emoji">🏙</div>
          <h3>Вечерняя Москва</h3>
          <p>Новый цикл очных встреч в Москве. Тот же формат «Школы» — без лекций, с живым диалогом и практическими разборами.</p>
          <div class="ev-city-chips">
            <span class="ev-chip">Москва</span>
            <span class="ev-chip ev-chip-new">Новый цикл</span>
          </div>
          <div class="sc-footer">
            <span class="sc-next">Ближайшая встреча: <strong>2026</strong></span>
            <a href="/moscow-school/" class="btn-link">Подробнее</a>
          </div>
        </div>
      </div>

      <div class="ev-school-card sc-neuro">
        <div class="sc-stripe str-neuro" style="width:4px;height:auto;flex-shrink:0;"></div>
        <div class="ev-neuro-panel">
          <div style="font-size:38px">🏛</div>
          <div class="ev-neuro-title">Neuro<em>Russia</em></div>
          <div class="ev-neuro-sub">Ежегодная конференция</div>
          <div class="ev-neuro-tag">Санкт-Петербург + Онлайн</div>
        </div>
        <div class="sc-body">
          <h3>Всероссийская конференция NeuroRussia</h3>
          <p>Флагманское ежегодное мероприятие Painmed — союз медицины и искусства. Научные дискуссии, мастер-классы «бери и делай», театральные постановки театра «Монплезир».</p>
          <p>Очно в Санкт-Петербурге и онлайн. Участие врачей более 30 специальностей. Бесплатно при регистрации.</p>
          <div class="ev-city-chips">
            <span class="ev-chip">МКБ-11</span><span class="ev-chip">Мультидисциплинарность</span>
            <span class="ev-chip">Мастер-классы</span><span class="ev-chip">Театр «Монплезир»</span>
          </div>
          <div class="sc-footer">
            <span class="sc-next">Следующая конференция: <strong>2026, дата уточняется</strong></span>
            <a href="#" class="btn-link">Страница конференции</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<?php get_footer(); ?>
