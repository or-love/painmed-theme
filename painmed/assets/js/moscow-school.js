(function(){
  'use strict';

  /* ── Countdown ────────────────────────── */
  var cdStart = new Date('2026-03-12T13:30:00Z'); // 12 мар 16:30 МСК
  var cdEnd   = new Date('2026-03-12T17:00:00Z'); // 12 мар 20:00 МСК

  function pad(n){ return n < 10 ? '0'+n : ''+n; }

  function tick(){
    var now  = new Date();
    var card = document.getElementById('msCdCard');
    if (!card) return;

    if (now >= cdEnd) {
      card.style.display = 'none';
      return;
    }
    if (now >= cdStart) {
      var lbl  = document.getElementById('msCdLabel');
      var grid = document.getElementById('msCdGrid');
      var msg  = document.getElementById('msCdOngoing');
      if (lbl)  lbl.textContent    = '🟢 Школа проходит сейчас';
      if (grid) grid.style.display = 'none';
      if (msg)  msg.style.display  = 'flex';
      return;
    }
    var diff = cdStart - now;
    var elD = document.getElementById('msCdD');
    var elH = document.getElementById('msCdH');
    var elM = document.getElementById('msCdM');
    var elS = document.getElementById('msCdS');
    if (elD) elD.textContent = pad(Math.floor(diff / 86400000));
    if (elH) elH.textContent = pad(Math.floor((diff % 86400000) / 3600000));
    if (elM) elM.textContent = pad(Math.floor((diff % 3600000)  / 60000));
    if (elS) elS.textContent = pad(Math.floor((diff % 60000)    / 1000));
  }
  tick();
  setInterval(tick, 1000);

  /* ── Hide registration after event ────── */
  if (new Date() >= cdEnd) {
    ['ms-reg','msNavRegBtn','msHeroRegBtn','msFaqRegBtn','msFaqCta'].forEach(function(id){
      var el = document.getElementById(id);
      if (el) el.style.display = 'none';
    });
  }

  /* ── FAQ accordion ────────────────────── */
  document.querySelectorAll('.ms-faq-q').forEach(function(q){
    q.addEventListener('click', function(){
      this.parentElement.classList.toggle('ms-open');
    });
  });

  /* ── Form submit ──────────────────────── */
  var submitBtn = document.getElementById('msFormSubmit');
  if (submitBtn) {
    submitBtn.addEventListener('click', function(){
      var form = this.closest('.ms-reg-form');
      if (!form) return;
      var fio = form.querySelector('input[type=text]').value.trim();
      var tel = form.querySelector('input[type=tel]').value.trim();
      if (!fio || !tel) {
        this.textContent = '⚠ Заполните все обязательные поля';
        this.style.background = '#e07c1a';
        var btn = this;
        setTimeout(function(){ btn.textContent = 'Зарегистрироваться →'; btn.style.background = ''; }, 2500);
        return;
      }
      this.textContent = '✓ Заявка отправлена!';
      this.style.background = 'var(--green)';
      this.disabled = true;
    });
  }
})();
