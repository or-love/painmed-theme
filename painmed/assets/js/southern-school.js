(function(){
  'use strict';

  /* ── Countdown ────────────────────────── */
  var cdStart = new Date('2026-03-23T06:00:00Z');
  var cdEnd   = new Date('2026-03-28T20:00:00Z');

  function pad(n){ return n < 10 ? '0'+n : ''+n; }

  function tick(){
    var now  = new Date();
    var card = document.getElementById('ssCdCard');
    if (!card) return;

    if (now >= cdEnd) {
      card.style.display = 'none';
      return;
    }
    if (now >= cdStart) {
      var lbl  = document.getElementById('ssCdLabel');
      var grid = document.getElementById('ssCdGrid');
      var msg  = document.getElementById('ssCdOngoing');
      if (lbl)  lbl.textContent    = '🟢 Школа проходит сейчас';
      if (grid) grid.style.display = 'none';
      if (msg)  msg.style.display  = 'flex';
      return;
    }
    var diff = cdStart - now;
    var elD = document.getElementById('ssCdD');
    var elH = document.getElementById('ssCdH');
    var elM = document.getElementById('ssCdM');
    var elS = document.getElementById('ssCdS');
    if (elD) elD.textContent = pad(Math.floor(diff / 86400000));
    if (elH) elH.textContent = pad(Math.floor((diff % 86400000) / 3600000));
    if (elM) elM.textContent = pad(Math.floor((diff % 3600000)  / 60000));
    if (elS) elS.textContent = pad(Math.floor((diff % 60000)    / 1000));
  }
  tick();
  setInterval(tick, 1000);

  /* ── Hide registration after event ────── */
  if (new Date() >= cdEnd) {
    ['ss-reg','ssHeroRegBtn'].forEach(function(id){
      var el = document.getElementById(id);
      if (el) el.style.display = 'none';
    });
    // Also hide nav CTA if present
    var navCta = document.querySelector('.ss-btn-cyan[href="#ss-reg"]');
    if (navCta) navCta.style.display = 'none';
  }

  /* ── FAQ accordion ────────────────────── */
  document.querySelectorAll('.ss-faq-q').forEach(function(q){
    q.addEventListener('click', function(){
      this.parentElement.classList.toggle('ss-open');
    });
  });

  /* ── Form submit ──────────────────────── */
  var submitBtn = document.getElementById('ssFormSubmit');
  if (submitBtn) {
    submitBtn.addEventListener('click', function(){
      var form = this.closest('.ss-reg-form');
      if (!form) return;
      var fio  = form.querySelector('input[type=text]').value.trim();
      var tel  = form.querySelector('input[type=tel]').value.trim();
      var city = form.querySelector('select').value;
      if (!fio || !tel || !city) {
        this.textContent = '⚠ Заполните все обязательные поля';
        this.style.background = '#e07c1a';
        var btn = this;
        setTimeout(function(){ btn.textContent = 'Подать заявку →'; btn.style.background = ''; }, 2500);
        return;
      }
      this.textContent = '✓ Заявка отправлена!';
      this.style.background = '#0ea87a';
      this.disabled = true;
    });
  }
})();
