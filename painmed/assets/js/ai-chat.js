/**
 * Painmed — AI-Болит демо-чат
 * Чистый JS. Функции: sendMessage, appendMsg, getDemo,
 * showTyping, removeTyping, handleKey, autoResize, sendExample
 *
 * @package Painmed
 */
(function() {
  'use strict';

  /* ── DOM ───────────────────────────────── */
  var messagesEl  = document.getElementById('chatMessages');
  var inputEl     = document.getElementById('chatInput');
  var sendBtnEl   = document.getElementById('chatSend');
  var typingEl    = document.getElementById('chatTyping');
  var exampleBtns = document.querySelectorAll('.aic-example-btn');

  if (!messagesEl || !inputEl || !sendBtnEl) return;

  /* ── Демо-ответы (профессиональный медконтент) ── */
  var demoAnswers = {

    'нпвп': 'Выбор НПВП при сочетании АГ и хронической боли — одна из ключевых задач коморбидного ведения.\n\n' +
      '**Наименьший кардиоваскулярный риск:**\n' +
      '• Напроксен 500 мг 2 р/сут — данные PRECISION (2016): сопоставимый КВ-профиль с целекоксибом\n' +
      '• Целекоксиб 100–200 мг/сут — допустим при контролируемой АГ (PRECISION, SCOT)\n\n' +
      '**Следует избегать:**\n' +
      '• Индометацин, пироксикам — высокий КВ-риск\n' +
      '• Диклофенак > 100 мг/сут — повышение риска инфаркта на 40% (Lancet, 2013)\n\n' +
      '**Обязательно:**\n' +
      '• ИПП-прикрытие (омепразол 20 мг) при любом НПВП\n' +
      '• Контроль АД в первые 2 недели\n' +
      '• Мониторинг СКФ и калия\n' +
      '• При СД2 — дополнительный контроль гликемии (НПВП могут снижать эффективность иАПФ/БРА)',

    'нейропат': 'Диагностика нейропатической боли основана на критериях NeuPSIG 2016.\n\n' +
      '**4 этапа диагностики:**\n' +
      '1. Анамнез боли в нейроанатомически обоснованной зоне\n' +
      '2. Выявление соответствующего повреждения/заболевания нервной системы\n' +
      '3. Подтверждение нейроанатомического соответствия (боль в дерматоме)\n' +
      '4. Инструментальное подтверждение поражения (ЭНМГ, МРТ, количественное сенсорное тестирование)\n\n' +
      '**Скрининговые инструменты:**\n' +
      '• DN4 — ≥4 из 10 баллов → вероятна нейропатическая боль (чувствительность 83%, специфичность 90%)\n' +
      '• PainDETECT — ≥19 баллов → вероятна, 13–18 → возможна\n' +
      '• LANSS — ≥12 из 24 баллов\n\n' +
      '**Характерные дескрипторы:** жжение, «электрические прострелы», аллодиния, гиперестезия, онемение в зоне боли.',

    'сенситиз': 'Центральная сенситизация и нейропатия — два разных механизма, но могут сосуществовать.\n\n' +
      '**Центральная сенситизация:**\n' +
      '• Повышение возбудимости нейронов ЦНС (задний рог, таламус, кора)\n' +
      '• Нет структурного повреждения периферического нерва\n' +
      '• Диффузная, полисегментарная боль\n' +
      '• Коморбидность: фибромиалгия, СРК, ХГБН, ВНЧС\n' +
      '• Нарушения сна, когнитивные жалобы, катастрофизация\n' +
      '• ЭНМГ — норма\n\n' +
      '**Нейропатическая боль:**\n' +
      '• Прямое повреждение соматосенсорной нервной системы\n' +
      '• Боль строго в дерматоме/зоне иннервации\n' +
      '• Чёткая неврологическая топика\n' +
      '• Верифицируемое поражение (ЭНМГ, МРТ)\n' +
      '• Примеры: диабетическая полинейропатия, тригеминальная невралгия, постгерпетическая невралгия\n\n' +
      '**Терапевтическое различие:** при сенситизации — дулоксетин, прегабалин, КПТ; при нейропатии — прегабалин/габапентин, амитриптилин, местные формы (лидокаин 5%, капсаицин 8%).',

    'дулоксетин': 'Дулоксетин — селективный ингибитор обратного захвата серотонина и норадреналина (СИОЗСН).\n\n' +
      '**Механизм при боли:**\n' +
      'Усиление нисходящего серотонинергического и норадренергического торможения в задних рогах спинного мозга → подавление болевой трансмиссии на сегментарном уровне.\n\n' +
      '**Одобренные показания при боли:**\n' +
      '• Диабетическая полинейропатия (FDA 2004)\n' +
      '• Фибромиалгия (FDA 2008)\n' +
      '• Хроническая мышечно-скелетная боль (FDA 2010)\n\n' +
      '**Дозировки:**\n' +
      '• Старт: 30 мг/сут × 1 неделя (снижение ЖКТ-побочки)\n' +
      '• Целевая: 60 мг/сут\n' +
      '• Максимальная: 120 мг/сут (некоторые руководства)\n' +
      '• Отмена: постепенно, снижение на 50% каждую неделю\n\n' +
      '**Противопоказания:**\n' +
      '• Одновременный приём ИМАО (интервал ≥14 дней)\n' +
      '• Тяжёлая печёночная недостаточность (CYP1A2, CYP2D6)\n' +
      '• СКФ < 30 мл/мин\n' +
      '• Неконтролируемая закрытоугольная глаукома\n\n' +
      '**Побочные эффекты:** тошнота (уменьшается к 2-й неделе приёма), головокружение, сухость во рту, запор, повышение АД (контроль!).'
  };

  var defaultAnswer = 'Это демо-режим AI-Болит. В полной версии я отвечу подробнее, опираясь на актуальные клинические рекомендации и данные доказательной медицины.\n\n' +
    'Попробуйте один из готовых примеров выше — или зарегистрируйтесь на платформе для доступа к полной версии ИИ-Консультанта.';

  /* ── Получение демо-ответа по ключевым словам ── */
  function getDemo(question) {
    var q = question.toLowerCase();
    if (q.indexOf('нпвп') !== -1 || q.indexOf('нпвс') !== -1 || q.indexOf('ибупрофен') !== -1 || q.indexOf('напроксен') !== -1 || q.indexOf('целекоксиб') !== -1 || q.indexOf('диклофенак') !== -1) {
      return demoAnswers['нпвп'];
    }
    if (q.indexOf('нейропат') !== -1 || q.indexOf('dn4') !== -1 || q.indexOf('paindetect') !== -1 || q.indexOf('neupsi') !== -1) {
      return demoAnswers['нейропат'];
    }
    if (q.indexOf('сенситиз') !== -1 || q.indexOf('фибромиалг') !== -1 || q.indexOf('центральн') !== -1) {
      return demoAnswers['сенситиз'];
    }
    if (q.indexOf('дулоксетин') !== -1 || q.indexOf('симбалта') !== -1 || q.indexOf('сиозсн') !== -1) {
      return demoAnswers['дулоксетин'];
    }
    return defaultAnswer;
  }

  /* ── Добавить сообщение в чат ──────────── */
  function appendMsg(text, type) {
    var msg = document.createElement('div');
    msg.className = 'aic-msg aic-msg-' + type;

    var avatar = document.createElement('div');
    avatar.className = 'aic-msg-avatar';
    avatar.textContent = type === 'bot' ? '🤖' : '👤';

    var bubble = document.createElement('div');
    bubble.className = 'aic-msg-bubble';
    // Поддержка простого форматирования **bold** и \n
    var html = text
      .replace(/&/g, '&amp;').replace(/</g, '&lt;')
      .replace(/\*\*(.+?)\*\*/g, '<strong>$1</strong>')
      .replace(/\n/g, '<br>');
    bubble.innerHTML = html;

    msg.appendChild(avatar);
    msg.appendChild(bubble);
    messagesEl.appendChild(msg);
    messagesEl.scrollTop = messagesEl.scrollHeight;
  }

  /* ── Typing indicator ─────────────────── */
  function showTyping() {
    typingEl.hidden = false;
    messagesEl.scrollTop = messagesEl.scrollHeight;
  }

  function removeTyping() {
    typingEl.hidden = true;
  }

  /* ── Отправка сообщения ────────────────── */
  function sendMessage(text) {
    text = text.trim();
    if (!text) return;

    appendMsg(text, 'user');
    inputEl.value = '';
    inputEl.style.height = 'auto';
    sendBtnEl.disabled = true;

    showTyping();

    var response = getDemo(text);
    // Задержка пропорциональна длине ответа (минимум 800ms, максимум 2500ms)
    var delay = Math.min(800 + response.length * 2, 2500);

    setTimeout(function() {
      removeTyping();
      appendMsg(response, 'bot');
      sendBtnEl.disabled = false;
      inputEl.focus();
    }, delay);
  }

  /* ── Обработка клавиш ──────────────────── */
  function handleKey(e) {
    if (e.key === 'Enter' && !e.shiftKey) {
      e.preventDefault();
      sendMessage(inputEl.value);
    }
  }

  /* ── Авторесайз textarea ───────────────── */
  function autoResize() {
    inputEl.style.height = 'auto';
    inputEl.style.height = Math.min(inputEl.scrollHeight, 100) + 'px';
  }

  /* ── Отправка примера ──────────────────── */
  function sendExample(e) {
    var q = this.getAttribute('data-q');
    if (q) {
      sendMessage(q);
      // Скролл к чату
      var widget = document.getElementById('chatWidget');
      if (widget) widget.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }
  }

  /* ── Привязка событий ──────────────────── */
  sendBtnEl.addEventListener('click', function() { sendMessage(inputEl.value); });
  inputEl.addEventListener('keydown', handleKey);
  inputEl.addEventListener('input', autoResize);

  exampleBtns.forEach(function(btn) {
    btn.addEventListener('click', sendExample);
  });

})();
