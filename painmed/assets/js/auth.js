(function () {
  var overlay    = document.getElementById('auth-overlay');
  var modalLogin = document.getElementById('modal-login');
  var modalReg   = document.getElementById('modal-register');

  function openModal(modal) {
    if (!modal || !overlay) return;
    overlay.classList.add('active');
    modal.classList.add('active');
    document.body.style.overflow = 'hidden';
  }

  function closeAll() {
    if (overlay)    overlay.classList.remove('active');
    if (modalLogin) modalLogin.classList.remove('active');
    if (modalReg)   modalReg.classList.remove('active');
    document.body.style.overflow = '';
  }

  // Открытие через кнопки в nav
  var btnLogin = document.getElementById('nav-login-btn');
  var btnReg   = document.getElementById('nav-register-btn');
  if (btnLogin) btnLogin.addEventListener('click', function (e) { e.preventDefault(); openModal(modalLogin); });
  if (btnReg)   btnReg.addEventListener('click',   function (e) { e.preventDefault(); openModal(modalReg); });

  // Закрытие по оверлею
  if (overlay) overlay.addEventListener('click', closeAll);

  // Закрытие по крестику
  document.querySelectorAll('.auth-close').forEach(function (btn) {
    btn.addEventListener('click', closeAll);
  });

  // Переключение между формами
  var switchToReg   = document.getElementById('switch-to-register');
  var switchToLogin = document.getElementById('switch-to-login');
  if (switchToReg)   switchToReg.addEventListener('click',   function (e) { e.preventDefault(); closeAll(); openModal(modalReg); });
  if (switchToLogin) switchToLogin.addEventListener('click', function (e) { e.preventDefault(); closeAll(); openModal(modalLogin); });

  // AJAX вход
  var loginSubmit = document.getElementById('login-submit');
  if (loginSubmit) {
    loginSubmit.addEventListener('click', function () {
      var email = document.getElementById('login-email').value.trim();
      var pass  = document.getElementById('login-password').value;
      var msg   = document.getElementById('login-msg');
      msg.className = 'auth-msg';
      msg.textContent = '';

      if (!email || !pass) { msg.textContent = 'Заполните все поля'; return; }

      loginSubmit.disabled = true;
      loginSubmit.textContent = 'Вход...';

      var fd = new FormData();
      fd.append('action',   'painmed_login');
      fd.append('nonce',    painmedAuth.nonce);
      fd.append('email',    email);
      fd.append('password', pass);

      fetch(painmedAuth.ajaxurl, { method: 'POST', body: fd })
        .then(function (r) { return r.json(); })
        .then(function (res) {
          if (res.success) {
            msg.className = 'auth-msg success';
            msg.textContent = 'Добро пожаловать!';
            setTimeout(function () { location.reload(); }, 800);
          } else {
            msg.textContent = res.data || 'Неверный email или пароль';
            loginSubmit.disabled = false;
            loginSubmit.textContent = 'Войти';
          }
        });
    });
  }

  // AJAX регистрация
  var regSubmit = document.getElementById('reg-submit');
  if (regSubmit) {
    regSubmit.addEventListener('click', function () {
      var lastName   = document.getElementById('reg-last-name').value.trim();
      var firstName  = document.getElementById('reg-first-name').value.trim();
      var middleName = document.getElementById('reg-middle-name').value.trim();
      var email      = document.getElementById('reg-email').value.trim();
      var spec       = document.getElementById('reg-spec').value.trim();
      var city       = document.getElementById('reg-city').value.trim();
      var pass       = document.getElementById('reg-password').value;
      var pass2      = document.getElementById('reg-password2').value;
      var msg        = document.getElementById('reg-msg');
      msg.className = 'auth-msg';
      msg.textContent = '';

      if (!lastName || !firstName || !email || !pass || !pass2) { msg.textContent = 'Заполните обязательные поля'; return; }
      if (pass.length < 6) { msg.textContent = 'Пароль — минимум 6 символов'; return; }
      if (pass !== pass2) { msg.textContent = 'Пароли не совпадают'; return; }

      regSubmit.disabled = true;
      regSubmit.textContent = 'Регистрация...';

      var fd = new FormData();
      fd.append('action',      'painmed_register');
      fd.append('nonce',       painmedAuth.nonce);
      fd.append('last_name',   lastName);
      fd.append('first_name',  firstName);
      fd.append('middle_name', middleName);
      fd.append('email',       email);
      fd.append('spec',        spec);
      fd.append('city',        city);
      fd.append('password',    pass);

      fetch(painmedAuth.ajaxurl, { method: 'POST', body: fd })
        .then(function (r) { return r.json(); })
        .then(function (res) {
          if (res.success) {
            msg.className = 'auth-msg success';
            msg.textContent = 'Аккаунт создан! Выполняем вход...';
            setTimeout(function () { location.reload(); }, 1000);
          } else {
            msg.textContent = res.data || 'Ошибка регистрации';
            regSubmit.disabled = false;
            regSubmit.textContent = 'Зарегистрироваться';
          }
        });
    });
  }
})();
