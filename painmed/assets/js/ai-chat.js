/**
 * Painmed — AI-Болит демо-чат v2
 * Чистый JS. Side-by-side layout с примерами вопросов.
 *
 * @package Painmed
 */
(function() {
  'use strict';

  /* ── DOM ───────────────────────────────── */
  var messagesEl   = document.getElementById('chatMessages');
  var inputEl      = document.getElementById('chatInput');
  var sendBtnEl    = document.getElementById('chatSend');
  var typingEl     = document.getElementById('chatTyping');
  var exampleBtns  = document.querySelectorAll('.aic-example-btn');
  var eqItems      = document.querySelectorAll('.aic-eq-item');
  var teamBtn      = document.getElementById('scrollToTeam');

  if (!messagesEl || !inputEl || !sendBtnEl) return;

  /* ── Демо-ответы (профессиональный медконтент) ── */
  var demoAnswers = {

    'нпвп': 'При сочетании АГ + СД2 + хроническая боль в спине выбор НПВП требует тщательного баланса рисков.\n\n' +
      '**Предпочтительные варианты:**\n' +
      '• Напроксен — лучший кардиобезопасный профиль среди НПВП (данные PRECISION, SCOT)\n' +
      '• Целекоксиб в минимальной дозе — меньше ЖКТ-риска, но умеренный сосудистый риск\n\n' +
      '**Обязательно:** + ИПП при любом НПВП. Контроль АД и почечной функции.\n\n' +
      '⚠️ Это общие принципы — конкретное решение принимаете вы с учётом всей клинической картины.',

    'нейропат': '**Критерии нейропатической боли (NeuPSIG, 2016):**\n\n' +
      '1. Боль в анатомически обоснованной зоне иннервации\n' +
      '2. Соответствующий анамнез повреждения/заболевания НС\n' +
      '3. Позитивные сенсорные симптомы (жжение, «электрический ток», аллодиния)\n' +
      '4. Подтверждение поражения НС тестами (ЭНМГ, количественное сенсорное тестирование)\n\n' +
      'Для скрининга используйте DN4 (≥4 из 10 баллов) или PainDETECT.',

    'сенситиз': 'Центральная сенситизация и нейропатия — два разных механизма, но могут сосуществовать.\n\n' +
      '**Центральная сенситизация:**\n' +
      '• Повышение возбудимости нейронов ЦНС\n' +
      '• Нет конкретного поражения нерва\n' +
      '• Широкая диффузная гипералгезия\n' +
      '• Часто — аллодиния, усиление от стресса, нарушения сна\n' +
      '• Характерна для фибромиалгии, хронической боли в спине\n\n' +
      '**Нейропатическая боль:**\n' +
      '• Прямое повреждение соматосенсорной НС\n' +
      '• Боль строго в дерматоме/зоне иннервации\n' +
      '• Верифицируемое поражение (ЭНМГ, МРТ)\n\n' +
      'На практике: при нейропатии есть топический дефицит, при центральной сенситизации — нет.',

    'дулоксетин': '**Дулоксетин при хронической боли:**\n\n' +
      'Начальная доза — 30 мг/сут утром, 2 недели, затем увеличение до **60 мг/сут** (целевая терапевтическая доза).\n\n' +
      'Максимум — 120 мг/сут (дополнительный эффект ограничен, токсичность растёт).\n\n' +
      '**Ограничения:**\n' +
      '• СКФ < 30 — с осторожностью\n' +
      '• Цирроз — противопоказан\n' +
      '• Неконтролируемая глаукома\n' +
      '• Сочетание с ИМАО — абсолютно\n\n' +
      '⚠️ Назначения для конкретного пациента — только после вашей оценки.'
  };

  var defaultAnswer = 'Понял ваш вопрос. Дайте мне секунду структурировать ответ...\n\n' +
    'Это демо-режим — в полной версии я обращаюсь к базе клинических рекомендаций и даю развёрнутый ответ с источниками. Попробуйте один из примеров слева или нажмите «Задать вопрос эксперту» для консультации у специалиста Painmed.';

  /* ── Получение демо-ответа по ключевым словам ── */
  function getDemo(question) {
    var q = question.toLowerCase();
    if (q.indexOf('нпвп') !== -1 || q.indexOf('нсаид') !== -1 || q.indexOf('боль в спине') !== -1 || q.indexOf('ибупрофен') !== -1 || q.indexOf('напроксен') !== -1 || q.indexOf('целекоксиб') !== -1 || q.indexOf('диклофенак') !== -1) {
      return demoAnswers['нпвп'];
    }
    if (q.indexOf('нейропат') !== -1 || q.indexOf('диагностик') !== -1 || q.indexOf('критер') !== -1 || q.indexOf('dn4') !== -1 || q.indexOf('paindetect') !== -1) {
      return demoAnswers['нейропат'];
    }
    if (q.indexOf('сенсит') !== -1 || q.indexOf('центральн') !== -1 || q.indexOf('фибромиалг') !== -1) {
      return demoAnswers['сенситиз'];
    }
    if (q.indexOf('дулокс') !== -1 || q.indexOf('симбалта') !== -1 || q.indexOf('сиозсн') !== -1) {
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
    var html = text
      .replace(/&/g, '&amp;').replace(/</g, '&lt;')
      .replace(/\*\*(.+?)\*\*/g, '<strong>$1</strong>')
      .replace(/\n/g, '<br>');
    bubble.innerHTML = html;

    if (type === 'user') {
      msg.appendChild(bubble);
      msg.appendChild(avatar);
    } else {
      msg.appendChild(avatar);
      var wrap = document.createElement('div');
      wrap.appendChild(bubble);
      // Disclaimer under bot messages
      var disc = document.createElement('div');
      disc.className = 'aic-msg-disclaimer';
      disc.textContent = 'ℹ️ Носит информационный характер. Клиническое решение — за вами.';
      wrap.appendChild(disc);
      msg.appendChild(wrap);
    }

    messagesEl.appendChild(msg);
    messagesEl.scrollTop = messagesEl.scrollHeight;
  }

  /* ── Typing indicator ─────────────────── */
  function showTyping() {
    if (typingEl) typingEl.hidden = false;
    messagesEl.scrollTop = messagesEl.scrollHeight;
  }

  function removeTyping() {
    if (typingEl) typingEl.hidden = true;
  }

  /* ── Отправка сообщения ────────────────── */
  function sendMessage(text) {
    text = text.trim();
    if (!text) return;

    appendMsg(text, 'user');
    inputEl.value = '';
    inputEl.style.height = '';
    sendBtnEl.disabled = true;

    showTyping();

    var response = getDemo(text);
    var delay = 1200 + Math.floor(Math.random() * 600);

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
    inputEl.style.height = '';
    inputEl.style.height = Math.min(inputEl.scrollHeight, 100) + 'px';
  }

  /* ── Отправка примера (кнопки или eq-items) ── */
  function sendExampleFromAttr() {
    var q = this.getAttribute('data-q');
    if (q) {
      inputEl.value = q;
      inputEl.focus();
      var widget = document.getElementById('chatWidget');
      if (widget) widget.scrollIntoView({ behavior: 'smooth', block: 'center' });
      setTimeout(function() { sendMessage(q); }, 300);
    }
  }

  /* ── Скролл к форме команды ──────────── */
  function scrollToTeam() {
    var section = document.getElementById('teamSection');
    if (section) section.scrollIntoView({ behavior: 'smooth' });
  }

  /* ── Привязка событий ──────────────────── */
  sendBtnEl.addEventListener('click', function() { sendMessage(inputEl.value); });
  inputEl.addEventListener('keydown', handleKey);
  inputEl.addEventListener('input', autoResize);

  // Example buttons (old style)
  exampleBtns.forEach(function(btn) {
    btn.addEventListener('click', sendExampleFromAttr);
  });

  // Example question items (new style)
  eqItems.forEach(function(item) {
    item.addEventListener('click', sendExampleFromAttr);
  });

  // Scroll to team button
  if (teamBtn) {
    teamBtn.addEventListener('click', scrollToTeam);
  }

})();
