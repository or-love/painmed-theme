/**
 * Painmed — Онлайн-эфиры
 * Countdown, chat, tabs, live toggle
 *
 * @package Painmed
 */
(function() {
  'use strict';

  var isLive = false;

  /* ── Helpers ───────────────────────────── */
  function pad(n) { return n < 10 ? '0' + n : '' + n; }
  function $(id) { return document.getElementById(id); }

  /* ── COUNTDOWN ─────────────────────────── */
  var target = new Date('2026-04-01T16:00:00Z');

  function tick() {
    var diff = target - new Date();
    if (diff <= 0) diff = 0;
    var d = Math.floor(diff / 86400000),
        h = Math.floor((diff % 86400000) / 3600000),
        m = Math.floor((diff % 3600000) / 60000),
        s = Math.floor((diff % 60000) / 1000);
    ['D','H','M','S'].forEach(function(u, i) {
      var v = [d, h, m, s][i];
      var a = $('cd' + u); if (a) a.textContent = pad(v);
      var b = $('pp' + u); if (b) b.textContent = pad(v);
    });
  }
  tick();
  setInterval(tick, 1000);

  /* ── TABS ──────────────────────────────── */
  var tabs = document.querySelectorAll('.ol-chat-tab');
  tabs.forEach(function(tab) {
    tab.addEventListener('click', function() {
      tabs.forEach(function(t) { t.classList.remove('active'); });
      document.querySelectorAll('.ol-chat-panel').forEach(function(p) { p.classList.remove('active'); });
      tab.classList.add('active');
      var panel = tab.getAttribute('data-panel');
      var el = $('panel' + panel.charAt(0).toUpperCase() + panel.slice(1));
      if (el) el.classList.add('active');
    });
  });

  /* ── Q&A VOTE ──────────────────────────── */
  document.querySelectorAll('.ol-qa-vote').forEach(function(btn) {
    btn.addEventListener('click', function() {
      var text = btn.textContent;
      var match = text.match(/(\d+)/);
      if (match) {
        var num = parseInt(match[1]) + 1;
        btn.textContent = '👍 ' + num;
      }
    });
  });

  /* ── LIVE TOGGLE ───────────────────────── */
  var devBtn = $('devBtn');
  if (devBtn) {
    devBtn.addEventListener('click', toggleLive);
  }

  function toggleLive() {
    isLive = !isLive;

    // Live bar
    var lb = $('liveBar');
    if (lb) lb.classList.toggle('on', isLive);

    // Hero live dot
    var hd = $('heroLiveDot');
    if (hd) hd.classList.toggle('on', isLive);

    // Countdown
    var hc = $('heroCountdown');
    if (hc) hc.style.display = isLive ? 'none' : 'block';
    var nb = $('notifyBtn');
    if (nb) nb.style.display = isLive ? 'none' : 'flex';

    // Player
    var pp = $('playerPlaceholder');
    if (pp) pp.style.display = isLive ? 'none' : 'flex';
    var plb = $('playerLiveBadge');
    if (plb) plb.classList.toggle('on', isLive);

    // Viewers tag
    var vt = $('viewersTag');
    if (vt) vt.style.display = isLive ? 'flex' : 'none';

    // Chat
    var ce = $('chatEmpty');
    if (ce) ce.style.display = isLive ? 'none' : 'flex';
    var cm = $('chatMessages');
    if (cm) cm.style.display = isLive ? 'flex' : 'none';

    if (isLive) {
      seedChatMessages();
      startAutoMessages();
    }

    if (devBtn) {
      devBtn.textContent = isLive ? '⏸ Режим ОЖИДАНИЯ' : '▶ Включить режим ЭФИРА';
    }
  }

  /* ── CHAT ──────────────────────────────── */
  var sampleMsgs = [
    {n:'Painmed', t:'Добро пожаловать на эфир! 🎙', mod:true},
    {n:'Наталья В., Новосибирск', t:'Отличная тема, давно ждала!'},
    {n:'Алексей М., Москва', t:'Добрый вечер из Москвы 👋'},
    {n:'Елена К., Краснодар', t:'Спасибо за эфир, очень актуально'},
    {n:'Игорь Р., Пермь', t:'Когда дойдём до фармакотерапии?'},
    {n:'Ольга С., Екатеринбург', t:'Профессор Искра как всегда 🔥'},
    {n:'Виктор Л., Казань', t:'Очень полезный разбор!'},
    {n:'Painmed', t:'Вопросы из чата разбираем в конце ✅', mod:true}
  ];

  function seedChatMessages() {
    var box = $('chatMessages');
    if (!box) return;
    box.innerHTML = '';
    sampleMsgs.slice(0, 4).forEach(function(m) { appendChatMsg(m.n, m.t, m.mod); });
  }

  function appendChatMsg(name, text, isMod) {
    var box = $('chatMessages');
    if (!box) return;
    var row = document.createElement('div');
    row.className = 'ol-chat-msg';
    var ini = name.split(' ').map(function(w) { return w[0] || ''; }).join('').substring(0, 2).toUpperCase();
    var now = new Date();
    var time = pad(now.getHours()) + ':' + pad(now.getMinutes());
    row.innerHTML =
      '<div class="ol-c-ava' + (isMod ? ' mod' : '') + '">' + ini + '</div>' +
      '<div><span class="ol-c-name' + (isMod ? ' mod' : '') + '">' + name + '</span>' +
      '<span class="ol-c-time">' + time + '</span>' +
      '<div class="ol-c-text">' + text + '</div></div>';
    box.appendChild(row);
    var msgs = $('chatMsgs');
    if (msgs) msgs.scrollTop = msgs.scrollHeight;
  }

  function sendChat() {
    var inp = $('chatInp');
    if (!inp) return;
    var txt = inp.value.trim();
    if (!txt) return;
    appendChatMsg('Вы', txt, false);
    inp.value = '';
  }

  // Chat send button
  var sendBtn = $('chatSendBtn');
  if (sendBtn) sendBtn.addEventListener('click', sendChat);
  var chatInp = $('chatInp');
  if (chatInp) {
    chatInp.addEventListener('keydown', function(e) {
      if (e.key === 'Enter') { e.preventDefault(); sendChat(); }
    });
  }

  // Auto messages
  var autoIdx = 4, autoTimer = null;
  function startAutoMessages() {
    clearInterval(autoTimer);
    autoTimer = setInterval(function() {
      if (!isLive || autoIdx >= sampleMsgs.length) return;
      var m = sampleMsgs[autoIdx++];
      appendChatMsg(m.n, m.t, m.mod);
    }, 4500);
  }

})();
