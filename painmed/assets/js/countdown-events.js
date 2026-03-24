/**
 * Painmed — Countdown Timer for Events Page
 * Обратный отсчёт до ближайшего эфира (страница Мероприятия)
 */
(function() {
  'use strict';
  var target = new Date('2026-04-01T16:00:00Z'); // 1 апр 19:00 МСК

  function pad(n) {
    return n < 10 ? '0' + n : '' + n;
  }

  function tick() {
    var diff = target - new Date();
    if (diff <= 0) {
      ['cd-d','cd-h','cd-m','cd-s'].forEach(function(id) {
        var el = document.getElementById(id);
        if (el) el.textContent = '00';
      });
      return;
    }
    var el;
    el = document.getElementById('cd-d'); if (el) el.textContent = pad(Math.floor(diff / 86400000));
    el = document.getElementById('cd-h'); if (el) el.textContent = pad(Math.floor((diff % 86400000) / 3600000));
    el = document.getElementById('cd-m'); if (el) el.textContent = pad(Math.floor((diff % 3600000) / 60000));
    el = document.getElementById('cd-s'); if (el) el.textContent = pad(Math.floor((diff % 60000) / 1000));
  }

  tick();
  setInterval(tick, 1000);
})();
