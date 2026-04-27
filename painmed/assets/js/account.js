(function () {

  /* ── ТАБЫ ──────────────────────────────── */
  document.querySelectorAll('.lk-nav-item').forEach(function (link) {
    link.addEventListener('click', function (e) {
      e.preventDefault();
      var tab = this.getAttribute('data-tab');

      document.querySelectorAll('.lk-tab-panel').forEach(function (p) { p.style.display = 'none'; });
      document.querySelectorAll('.lk-nav-item').forEach(function (l) { l.classList.remove('active'); });

      var panel = document.getElementById('tab-' + tab);
      if (panel) panel.style.display = 'block';
      this.classList.add('active');
    });
  });

  /* ── КНОПКА ОТМЕНА ─────────────────────── */
  var cancelBtn = document.getElementById('lk-cancel');
  if (cancelBtn) {
    cancelBtn.addEventListener('click', function () {
      document.querySelectorAll('.lk-input').forEach(function (inp) {
        inp.value = inp.defaultValue;
      });
      var szoib = document.getElementById('lk-szoib');
      if (szoib) szoib.checked = szoib.defaultChecked;
      document.getElementById('lk-msg').textContent = '';
    });
  }

  /* ── СОХРАНЕНИЕ ────────────────────────── */
  var saveBtn = document.getElementById('lk-save');
  if (!saveBtn) return;

  saveBtn.addEventListener('click', function () {
    var lastName   = document.getElementById('lk-last-name').value.trim();
    var firstName  = document.getElementById('lk-first-name').value.trim();
    var middleName = document.getElementById('lk-middle-name').value.trim();
    var email      = document.getElementById('lk-email').value.trim();
    var spec       = document.getElementById('lk-spec').value.trim();
    var city       = document.getElementById('lk-city').value.trim();
    var szoib      = document.getElementById('lk-szoib').checked ? '1' : '0';
    var pass       = document.getElementById('lk-pass').value;
    var pass2      = document.getElementById('lk-pass2').value;
    var msg        = document.getElementById('lk-msg');
    var saveOk     = document.getElementById('lk-save-ok');

    msg.className = 'lk-msg';
    msg.textContent = '';
    saveOk.classList.remove('visible');

    if (!lastName || !firstName || !email) { msg.textContent = 'Фамилия, имя и email обязательны'; return; }
    if (pass && pass.length < 6) { msg.textContent = 'Пароль — минимум 6 символов'; return; }
    if (pass && pass !== pass2)  { msg.textContent = 'Пароли не совпадают'; return; }

    saveBtn.disabled = true;
    saveBtn.textContent = 'Сохраняем...';

    var fd = new FormData();
    fd.append('action',      'painmed_save_profile');
    fd.append('nonce',       painmedAccount.nonce);
    fd.append('last_name',   lastName);
    fd.append('first_name',  firstName);
    fd.append('middle_name', middleName);
    fd.append('email',       email);
    fd.append('spec',        spec);
    fd.append('city',        city);
    fd.append('szoib',       szoib);
    fd.append('password',    pass);

    fetch(painmedAccount.ajaxurl, { method: 'POST', body: fd })
      .then(function (r) { return r.json(); })
      .then(function (res) {
        if (res.success) {
          saveOk.classList.add('visible');
          setTimeout(function () { saveOk.classList.remove('visible'); }, 3000);
          document.getElementById('lk-pass').value  = '';
          document.getElementById('lk-pass2').value = '';
        } else {
          msg.textContent = res.data || 'Ошибка сохранения';
        }
        saveBtn.disabled = false;
        saveBtn.textContent = 'Сохранить изменения';
      });
  });

})();
