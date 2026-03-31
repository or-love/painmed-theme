(function(){
  'use strict';

  /* ── Countdown ────────────────────────── */
  var cdStart = new Date('2026-02-12T15:00:00Z'); // 12 фев 18:00 МСК
  var cdEnd   = new Date('2026-02-12T19:00:00Z'); // 12 фев 22:00 МСК

  function pad(n){ return n < 10 ? '0'+n : ''+n; }

  /* Show registration / countdown only if event hasn't ended */
  if (new Date() < cdEnd) {
    ['pvCdCard','pv-reg','pvHeroRegBtn','pvFaqRegBtn','pvFaqCta'].forEach(function(id){
      var el = document.getElementById(id);
      if (el) el.style.display = '';
    });
  }

  function tick(){
    var now  = new Date();
    var card = document.getElementById('pvCdCard');
    if (!card) return;

    if (now >= cdEnd) {
      card.style.display = 'none';
      return;
    }
    if (now >= cdStart) {
      var lbl  = document.getElementById('pvCdLabel');
      var grid = document.getElementById('pvCdGrid');
      var msg  = document.getElementById('pvCdOngoing');
      if (lbl)  lbl.textContent    = '🟢 Школа проходит сейчас';
      if (grid) grid.style.display = 'none';
      if (msg)  msg.style.display  = 'flex';
      return;
    }
    var diff = cdStart - now;
    var elD = document.getElementById('pvCdD');
    var elH = document.getElementById('pvCdH');
    var elM = document.getElementById('pvCdM');
    var elS = document.getElementById('pvCdS');
    if (elD) elD.textContent = pad(Math.floor(diff / 86400000));
    if (elH) elH.textContent = pad(Math.floor((diff % 86400000) / 3600000));
    if (elM) elM.textContent = pad(Math.floor((diff % 3600000)  / 60000));
    if (elS) elS.textContent = pad(Math.floor((diff % 60000)    / 1000));
  }
  tick();
  setInterval(tick, 1000);

  /* ── FAQ accordion ────────────────────── */
  document.querySelectorAll('.pv-faq-q').forEach(function(q){
    q.addEventListener('click', function(){
      this.parentElement.classList.toggle('pv-open');
    });
  });

  /* ── Form submit ──────────────────────── */
  var submitBtn = document.getElementById('pvFormSubmit');
  if (submitBtn) {
    submitBtn.addEventListener('click', function(){
      var form = this.closest('.pv-reg-form');
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
