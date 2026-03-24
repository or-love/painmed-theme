/**
 * Painmed — Архив трансляций: AJAX-фильтрация
 * Фильтры: формат, поиск (debounce), тип, год, сортировка
 * Загрузить ещё (AJAX), pushState URL, сброс фильтров
 *
 * @package Painmed
 */
(function() {
  'use strict';

  /* ── Elements ──────────────────────────── */
  var grid        = document.getElementById('arh-grid');
  var loadWrap    = document.getElementById('arh-loadmore-wrap');
  var loadBtn     = document.getElementById('arh-loadmore');
  var loadPlus    = document.getElementById('arh-loadmore-plus');
  var spinner     = document.getElementById('arh-spinner');
  var emptyEl     = document.getElementById('arh-empty');
  var countEl     = document.getElementById('arh-count');
  var shownEl     = document.getElementById('arh-shown');
  var searchInput = document.getElementById('arh-search');
  var searchClear = document.getElementById('arh-search-clear');
  var sortSelect  = document.getElementById('arh-sort');
  var yearSelect  = document.getElementById('arh-year');
  var resetBtn    = document.getElementById('arh-reset');
  var emptyReset  = document.getElementById('arh-empty-reset');
  var filterbar   = document.getElementById('arh-filterbar');
  var fmtTabs     = document.querySelectorAll('.arh-tab');
  var typeBtns    = document.querySelectorAll('.arh-type-btn');

  /* ── State ─────────────────────────────── */
  var state = {
    page:    1,
    maxPage: loadBtn ? parseInt(loadBtn.getAttribute('data-max')) : 1,
    format:  '',
    search:  '',
    sort:    'newest',
    year:    '',
    type:    '',
    loading: false,
    totalFound: 0,
    totalShown: grid ? grid.children.length : 0
  };

  /* ── Helpers ───────────────────────────── */
  function debounce(fn, ms) {
    var t;
    return function() {
      var ctx = this, a = arguments;
      clearTimeout(t);
      t = setTimeout(function() { fn.apply(ctx, a); }, ms);
    };
  }

  function updateResetVisibility() {
    var active = state.format || state.search || state.year || state.type || state.sort !== 'newest';
    if (resetBtn) resetBtn.hidden = !active;
  }

  function pushURL() {
    var params = new URLSearchParams();
    if (state.format) params.set('fmt', state.format);
    if (state.search) params.set('q', state.search);
    if (state.year)   params.set('year', state.year);
    if (state.type)   params.set('type', state.type);
    if (state.sort !== 'newest') params.set('sort', state.sort);
    var qs = params.toString();
    var url = window.location.pathname + (qs ? '?' + qs : '');
    history.pushState(null, '', url);
  }

  function readURL() {
    var params = new URLSearchParams(window.location.search);
    state.format = params.get('fmt') || '';
    state.search = params.get('q') || '';
    state.year   = params.get('year') || '';
    state.type   = params.get('type') || '';
    state.sort   = params.get('sort') || 'newest';

    // Sync UI
    fmtTabs.forEach(function(t) { t.classList.toggle('active', t.getAttribute('data-fmt') === state.format); });
    typeBtns.forEach(function(b) { b.classList.toggle('active', b.getAttribute('data-type') === state.type); });
    if (searchInput) searchInput.value = state.search;
    if (searchClear) searchClear.hidden = !state.search;
    if (sortSelect) sortSelect.value = state.sort;
    if (yearSelect) yearSelect.value = state.year;
    updateResetVisibility();
  }

  function updateCounters(found, shown) {
    state.totalFound = found;
    state.totalShown = shown;
    if (countEl) countEl.innerHTML = 'Найдено: <strong>' + found + '</strong> выпусков';
    if (shownEl) shownEl.innerHTML = 'Показано: <strong>' + shown + '</strong> из <strong>' + found + '</strong>';
  }

  /* ── AJAX Request ──────────────────────── */
  function loadCards(append) {
    if (state.loading) return;
    state.loading = true;

    if (loadBtn) loadBtn.disabled = true;
    if (spinner) spinner.hidden = false;

    var fd = new FormData();
    fd.append('action', 'painmed_arhiv_load');
    fd.append('nonce',  painmedArhiv.nonce);
    fd.append('page',   state.page);
    fd.append('format', state.format);
    fd.append('search', state.search);
    fd.append('sort',   state.sort);
    fd.append('year',   state.year);
    fd.append('type',   state.type);

    fetch(painmedArhiv.ajaxurl, { method: 'POST', body: fd })
      .then(function(r) { return r.json(); })
      .then(function(res) {
        state.loading = false;
        if (spinner) spinner.hidden = true;

        if (!res.success) return;
        var data = res.data;

        if (!append) {
          grid.innerHTML = '';
          state.totalShown = 0;
        }

        if (data.html) {
          var temp = document.createElement('div');
          temp.innerHTML = data.html;
          var cards = temp.children;
          while (cards.length) {
            grid.appendChild(cards[0]);
          }
          // Count children
          state.totalShown = grid.children.length;
        }

        state.maxPage = data.max_pages;
        updateCounters(data.found, state.totalShown);

        // Load more button
        if (loadWrap) {
          loadWrap.hidden = (state.page >= state.maxPage);
        }
        if (loadBtn) {
          loadBtn.disabled = false;
          loadBtn.setAttribute('data-page', state.page);
          loadBtn.setAttribute('data-max', state.maxPage);
        }
        if (loadPlus) {
          var remaining = data.found - state.totalShown;
          loadPlus.textContent = remaining > 0 ? '+' + remaining : '';
          if (remaining <= 0 && loadWrap) loadWrap.hidden = true;
        }

        // Empty state
        if (emptyEl) emptyEl.hidden = (data.found > 0);
        if (grid) grid.style.display = data.found > 0 ? '' : 'none';
      })
      .catch(function() {
        state.loading = false;
        if (spinner) spinner.hidden = true;
        if (loadBtn) loadBtn.disabled = false;
      });
  }

  function resetAndLoad() {
    state.page = 1;
    pushURL();
    loadCards(false);
    updateResetVisibility();
  }

  /* ── Event: Format tabs ────────────────── */
  fmtTabs.forEach(function(tab) {
    tab.addEventListener('click', function() {
      fmtTabs.forEach(function(t) { t.classList.remove('active'); });
      this.classList.add('active');
      state.format = this.getAttribute('data-fmt');
      resetAndLoad();
    });
  });

  /* ── Event: Type toggle ────────────────── */
  typeBtns.forEach(function(btn) {
    btn.addEventListener('click', function() {
      typeBtns.forEach(function(b) { b.classList.remove('active'); });
      this.classList.add('active');
      state.type = this.getAttribute('data-type');
      resetAndLoad();
    });
  });

  /* ── Event: Search ─────────────────────── */
  if (searchInput) {
    searchInput.addEventListener('input', debounce(function() {
      state.search = this.value.trim();
      if (searchClear) searchClear.hidden = !state.search;
      resetAndLoad();
    }, 300));
  }
  if (searchClear) {
    searchClear.addEventListener('click', function() {
      searchInput.value = '';
      state.search = '';
      this.hidden = true;
      resetAndLoad();
    });
  }

  /* ── Event: Year select ────────────────── */
  if (yearSelect) {
    yearSelect.addEventListener('change', function() {
      state.year = this.value;
      resetAndLoad();
    });
  }

  /* ── Event: Sort select ────────────────── */
  if (sortSelect) {
    sortSelect.addEventListener('change', function() {
      state.sort = this.value;
      resetAndLoad();
    });
  }

  /* ── Event: Load More ──────────────────── */
  if (loadBtn) {
    loadBtn.addEventListener('click', function() {
      state.page++;
      loadCards(true);
    });
  }

  /* ── Event: Reset ──────────────────────── */
  function doReset() {
    state.format = '';
    state.search = '';
    state.year = '';
    state.type = '';
    state.sort = 'newest';
    fmtTabs.forEach(function(t) { t.classList.toggle('active', !t.getAttribute('data-fmt')); });
    typeBtns.forEach(function(b) { b.classList.toggle('active', !b.getAttribute('data-type')); });
    if (searchInput) searchInput.value = '';
    if (searchClear) searchClear.hidden = true;
    if (sortSelect) sortSelect.value = 'newest';
    if (yearSelect) yearSelect.value = '';
    resetAndLoad();
  }
  if (resetBtn)    resetBtn.addEventListener('click', doReset);
  if (emptyReset)  emptyReset.addEventListener('click', doReset);

  /* ── Sticky shadow on filterbar ────────── */
  if (filterbar) {
    window.addEventListener('scroll', function() {
      filterbar.classList.toggle('scrolled', window.scrollY > 200);
    }, { passive: true });
  }

  /* ── Back/Forward navigation ───────────── */
  window.addEventListener('popstate', function() {
    readURL();
    state.page = 1;
    loadCards(false);
  });

  /* ── Init: read URL on load ────────────── */
  var params = new URLSearchParams(window.location.search);
  if (params.toString()) {
    readURL();
    state.page = 1;
    loadCards(false);
  }

})();
