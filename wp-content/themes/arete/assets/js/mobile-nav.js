/* ========================================
   MOBILE NAV — Hamburger menu
   ======================================== */
(function () {
  'use strict';

  function initMobileNav() {
    var header = document.querySelector('.site-header');
    var nav = document.querySelector('.site-nav');
    if (!header || !nav) return;

    /* ── Build hamburger button ── */
    var btn = document.createElement('button');
    btn.className = 'nav-hamburger';
    btn.setAttribute('aria-label', 'Abrir menu');
    btn.setAttribute('aria-expanded', 'false');
    btn.innerHTML =
      '<span class="ham-line"></span>' +
      '<span class="ham-line"></span>' +
      '<span class="ham-line"></span>';
    nav.appendChild(btn);

    /* ── Build fullscreen overlay ── */
    var overlay = document.createElement('div');
    overlay.className = 'mobile-nav-overlay';
    overlay.setAttribute('aria-hidden', 'true');

    /* Logo inside overlay */
    var logoWrap = document.createElement('div');
    logoWrap.className = 'mobile-nav-logo';
    logoWrap.innerHTML = '<img src="assets/logos/191010_Marca_Hotel_Arete_Buzios_Vert_Mono.png" alt="Hotel Aretê">';
    overlay.appendChild(logoWrap);

    /* Clone nav links into overlay */
    var links = document.querySelectorAll('.site-nav .nav-link');
    var ul = document.createElement('nav');
    ul.className = 'mobile-nav-links';
    links.forEach(function (link) {
      var a = document.createElement('a');
      a.href = link.href;
      a.textContent = link.textContent;
      a.className = 'mobile-nav-link';
      if (link.getAttribute('aria-current')) {
        a.setAttribute('aria-current', link.getAttribute('aria-current'));
      }
      ul.appendChild(a);
    });

    /* Clone Reservar button into overlay */
    var reservarBtn = document.querySelector('.nav-btn-reservar');
    if (reservarBtn) {
      var rb = document.createElement('a');
      rb.href = reservarBtn.href;
      rb.textContent = reservarBtn.textContent;
      rb.className = 'mobile-nav-reservar';
      ul.appendChild(rb);
    }

    /* Close button inside overlay */
    var closeBtn = document.createElement('button');
    closeBtn.className = 'mobile-nav-close';
    closeBtn.setAttribute('aria-label', 'Fechar menu');
    closeBtn.innerHTML = '&times;';

    overlay.appendChild(closeBtn);
    overlay.appendChild(ul);
    document.body.appendChild(overlay);

    /* ── State ── */
    var isOpen = false;

    function openMenu() {
      isOpen = true;
      overlay.classList.add('is-open');
      overlay.setAttribute('aria-hidden', 'false');
      btn.classList.add('is-active');
      btn.setAttribute('aria-expanded', 'true');
      document.body.style.overflow = 'hidden';
    }

    function closeMenu() {
      isOpen = false;
      overlay.classList.remove('is-open');
      overlay.setAttribute('aria-hidden', 'true');
      btn.classList.remove('is-active');
      btn.setAttribute('aria-expanded', 'false');
      document.body.style.overflow = '';
    }

    btn.addEventListener('click', function () {
      isOpen ? closeMenu() : openMenu();
    });

    closeBtn.addEventListener('click', closeMenu);

    /* Close on ESC */
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && isOpen) closeMenu();
    });

    /* Close on link click (same-page nav) */
    ul.querySelectorAll('.mobile-nav-link').forEach(function (a) {
      a.addEventListener('click', closeMenu);
    });
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initMobileNav);
  } else {
    initMobileNav();
  }
})();
