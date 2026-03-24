/**
 * Painmed — Countdown Timer for Hero Event Card
 * Обратный отсчёт до ближайшего эфира
 */
(function() {
  var target = new Date('2026-03-25T16:00:00Z'); // 25 мар 19:00 МСК

  function pad(n) {
    return n < 10 ? '0' + n : '' + n;
  }

  function tick() {
    var diff = target - new Date();
    if (diff <= 0) {
      ['hcd-d','hcd-h','hcd-m','hcd-s'].forEach(function(id) {
        var el = document.getElementById(id);
        if (el) el.textContent = '00';
      });
      return;
    }
    var el;
    el = document.getElementById('hcd-d'); if (el) el.textContent = pad(Math.floor(diff / 86400000));
    el = document.getElementById('hcd-h'); if (el) el.textContent = pad(Math.floor((diff % 86400000) / 3600000));
    el = document.getElementById('hcd-m'); if (el) el.textContent = pad(Math.floor((diff % 3600000) / 60000));
    el = document.getElementById('hcd-s'); if (el) el.textContent = pad(Math.floor((diff % 60000) / 1000));
  }

  tick();
  setInterval(tick, 1000);
})();
