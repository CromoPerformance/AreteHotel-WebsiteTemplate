(function () {
  var bar = document.getElementById('stickyBooking');
  if (!bar) return;

  var hero = document.getElementById('hero');
  var lastScroll = 0;

  /* ── Show/hide on scroll ── */
  function onScroll() {
    var scrollY = window.scrollY || window.pageYOffset;
    var heroBottom = hero ? hero.offsetTop + hero.offsetHeight : 0;

    if (scrollY > heroBottom - 100) {
      bar.classList.add('is-visible');
    } else {
      bar.classList.remove('is-visible');
    }

    /* ── Push up when cookie bar is present ── */
    if (document.body.classList.contains('has-cookie-bar')) {
      bar.classList.add('is-above-cookie');
    } else {
      bar.classList.remove('is-above-cookie');
    }

    lastScroll = scrollY;
  }

  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();

  /* ── Dropdowns ── */
  bar.querySelectorAll('.booking-field.custom-select').forEach(function (field) {
    var display = field.querySelector('.booking-display');
    var dropdown = field.querySelector('.booking-dropdown');
    if (!dropdown) return;
    var options = dropdown.querySelectorAll('.booking-option');

    field.addEventListener('click', function (e) {
      if (e.target.closest('.booking-calendar')) return;
      var wasOpen = dropdown.classList.contains('open');
      document.querySelectorAll('.sticky-booking .booking-dropdown.open').forEach(function (d) { d.classList.remove('open'); });
      if (!wasOpen) dropdown.classList.add('open');
    });

    options.forEach(function (opt) {
      opt.addEventListener('click', function (e) {
        e.stopPropagation();
        options.forEach(function (o) { o.classList.remove('selected'); });
        opt.classList.add('selected');
        display.textContent = opt.textContent;
        dropdown.classList.remove('open');
      });
    });
  });

  /* ── Close dropdowns on outside click ── */
  document.addEventListener('click', function (e) {
    if (!e.target.closest('.sticky-booking')) {
      document.querySelectorAll('.sticky-booking .booking-dropdown.open').forEach(function (d) { d.classList.remove('open'); });
    }
  });

  /* ── Calendar placeholders (show alert) ── */
  bar.querySelectorAll('.booking-calendar').forEach(function (cal) {
    cal.addEventListener('click', function (e) {
      e.stopPropagation();
    });
  });
})();
