(function(){
  'use strict';

  /* ── Countdown ────────────────────────── */
  var cdStart = new Date('2026-02-16T06:00:00Z'); // 16 фев, первый город
  var cdEnd   = new Date('2026-02-21T20:00:00Z'); // 21 фев, конец Владивостока

  function pad(n){ return n < 10 ? '0'+n : ''+n; }

  function tick(){
    var now  = new Date();
    var card = document.getElementById('esCdCard');
    if (!card) return;

    if (now >= cdEnd) {
      card.style.display = 'none';
      return;
    }
    if (now >= cdStart) {
      var lbl  = document.getElementById('esCdLabel');
      var grid = document.getElementById('esCdGrid');
      var msg  = document.getElementById('esCdOngoing');
      if (lbl)  lbl.textContent    = '🟢 Школа проходит сейчас';
      if (grid) grid.style.display = 'none';
      if (msg)  msg.style.display  = 'flex';
      return;
    }
    var diff = cdStart - now;
    var elD = document.getElementById('esCdD');
    var elH = document.getElementById('esCdH');
    var elM = document.getElementById('esCdM');
    var elS = document.getElementById('esCdS');
    if (elD) elD.textContent = pad(Math.floor(diff / 86400000));
    if (elH) elH.textContent = pad(Math.floor((diff % 86400000) / 3600000));
    if (elM) elM.textContent = pad(Math.floor((diff % 3600000)  / 60000));
    if (elS) elS.textContent = pad(Math.floor((diff % 60000)    / 1000));
  }
  tick();
  setInterval(tick, 1000);

  /* ── Hide registration after event ────── */
  if (new Date() >= cdEnd) {
    ['es-reg','esHeroRegBtn'].forEach(function(id){
      var el = document.getElementById(id);
      if (el) el.style.display = 'none';
    });
  }

  /* ── FAQ accordion ────────────────────── */
  document.querySelectorAll('.es-faq-q').forEach(function(q){
    q.addEventListener('click', function(){
      this.parentElement.classList.toggle('es-open');
    });
  });

  /* ── Form submit ──────────────────────── */
  var submitBtn = document.getElementById('esFormSubmit');
  if (submitBtn) {
    submitBtn.addEventListener('click', function(){
      var form = this.closest('.es-reg-form');
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
      this.style.background = 'var(--green)';
      this.disabled = true;
    });
  }
})();
