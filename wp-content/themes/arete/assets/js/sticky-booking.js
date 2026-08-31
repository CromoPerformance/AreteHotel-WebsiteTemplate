(function () {
  var bar = document.getElementById('stickyBooking');
  if (!bar) return;

  var hero = document.getElementById('hero');

  /* ── Show/hide on scroll ── */
  function onScroll() {
    var scrollY = window.scrollY || window.pageYOffset;
    var threshold = 200;

    if (hero) {
      threshold = hero.offsetTop + hero.offsetHeight - 100;
    }

    if (scrollY > threshold && !bar.dataset.dismissed) {
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
  }

  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();

  /* ── Close button ── */
  var closeBtn = bar.querySelector('.sticky-booking-close');
  if (closeBtn) {
    closeBtn.addEventListener('click', function(e) {
      e.stopPropagation();
      bar.classList.remove('is-visible');
      bar.dataset.dismissed = '1';
    });
  }

  /* ── Calendar state ── */
  var checkinDisplay = document.getElementById('stickyCheckinDisplay');
  var checkoutDisplay = document.getElementById('stickyCheckoutDisplay');
  var checkinDropdown = document.getElementById('stickyCheckinDropdown');
  var checkoutDropdown = document.getElementById('stickyCheckoutDropdown');
  var checkinField = document.getElementById('stickyCheckinField');
  var checkoutField = document.getElementById('stickyCheckoutField');
  var checkinValue = null;
  var checkoutValue = null;
  var activeCal = null;

  function today() {
    var n = new Date();
    n.setHours(0, 0, 0, 0);
    return n;
  }

  function formatDate(d) {
    if (!d) return '';
    var dd = String(d.getDate()).padStart(2, '0');
    var mm = String(d.getMonth() + 1).padStart(2, '0');
    return dd + '/' + mm + '/' + d.getFullYear();
  }

  function renderCalendar(container, type) {
    var now = today();
    if (!activeCal || activeCal.type !== type) {
      activeCal = { type: type, month: now.getMonth(), year: now.getFullYear() };
    }
    var m = activeCal.month;
    var y = activeCal.year;
    var monthNames = ['janeiro','fevereiro','março','abril','maio','junho','julho','agosto','setembro','outubro','novembro','dezembro'];

    container.querySelector('.cal-month-label').textContent = monthNames[m] + ' ' + y;

    var daysContainer = container.querySelector('.cal-days');
    daysContainer.innerHTML = '';

    var firstDay = new Date(y, m, 1).getDay();
    var daysInMonth = new Date(y, m + 1, 0).getDate();

    var minDate = now;
    if (type === 'checkout' && checkinValue) {
      minDate = new Date(checkinValue);
      minDate.setDate(minDate.getDate() + 1);
    }

    for (var i = 0; i < firstDay; i++) {
      var empty = document.createElement('div');
      empty.className = 'cal-day empty';
      daysContainer.appendChild(empty);
    }

    for (var d = 1; d <= daysInMonth; d++) {
      var btn = document.createElement('button');
      btn.type = 'button';
      btn.className = 'cal-day';
      btn.textContent = d;
      var thisDate = new Date(y, m, d);

      if (thisDate < minDate) btn.classList.add('disabled');
      if (thisDate.getTime() === now.getTime()) btn.classList.add('today');

      var selected = type === 'checkin' ? checkinValue : checkoutValue;
      if (selected && thisDate.getTime() === selected.getTime()) btn.classList.add('selected');

      if (checkinValue && checkoutValue) {
        if (thisDate > checkinValue && thisDate < checkoutValue) btn.classList.add('in-range');
        if (checkinValue.getTime() === thisDate.getTime()) btn.classList.add('range-start');
        if (checkoutValue.getTime() === thisDate.getTime()) btn.classList.add('range-end');
      }

      (function(date, calType) {
        btn.addEventListener('click', function() {
          if (calType === 'checkin') {
            checkinValue = date;
            checkinDisplay.textContent = formatDate(checkinValue);
            checkinDisplay.classList.remove('placeholder');
            checkoutValue = null;
            checkoutDisplay.textContent = 'Selecionar data';
            checkoutDisplay.classList.add('placeholder');
          } else {
            checkoutValue = date;
            checkoutDisplay.textContent = formatDate(checkoutValue);
            checkoutDisplay.classList.remove('placeholder');
          }
          checkinDropdown.classList.remove('open');
          checkoutDropdown.classList.remove('open');
        });
      })(thisDate, type);

      daysContainer.appendChild(btn);
    }
  }

  /* ── Nav buttons ── */
  checkinDropdown.querySelector('.cal-prev').addEventListener('click', function(e) {
    e.stopPropagation();
    activeCal.month--;
    if (activeCal.month < 0) { activeCal.month = 11; activeCal.year--; }
    renderCalendar(checkinDropdown, 'checkin');
  });
  checkinDropdown.querySelector('.cal-next').addEventListener('click', function(e) {
    e.stopPropagation();
    activeCal.month++;
    if (activeCal.month > 11) { activeCal.month = 0; activeCal.year++; }
    renderCalendar(checkinDropdown, 'checkin');
  });
  checkoutDropdown.querySelector('.cal-prev').addEventListener('click', function(e) {
    e.stopPropagation();
    activeCal.month--;
    if (activeCal.month < 0) { activeCal.month = 11; activeCal.year--; }
    renderCalendar(checkoutDropdown, 'checkout');
  });
  checkoutDropdown.querySelector('.cal-next').addEventListener('click', function(e) {
    e.stopPropagation();
    activeCal.month++;
    if (activeCal.month > 11) { activeCal.month = 0; activeCal.year++; }
    renderCalendar(checkoutDropdown, 'checkout');
  });

  /* ── Open calendars ── */
  checkinField.addEventListener('click', function(e) {
    if (e.target.closest('.booking-calendar')) return;
    document.querySelectorAll('.sticky-booking .booking-dropdown.open').forEach(function(d) { d.classList.remove('open'); });
    renderCalendar(checkinDropdown, 'checkin');
    checkinDropdown.classList.add('open');
  });
  checkoutField.addEventListener('click', function(e) {
    if (e.target.closest('.booking-calendar')) return;
    document.querySelectorAll('.sticky-booking .booking-dropdown.open').forEach(function(d) { d.classList.remove('open'); });
    renderCalendar(checkoutDropdown, 'checkout');
    checkoutDropdown.classList.add('open');
  });

  /* ── Adults/Children dropdowns ── */
  bar.querySelectorAll('.booking-field.custom-select').forEach(function (field) {
    if (field.id === 'stickyCheckinField' || field.id === 'stickyCheckoutField') return;
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

  /* ── Reservar button → OmniBees booking engine ── */
  function fmtDate(d) {
    var day = d.getDate();
    var mon = d.getMonth() + 1;
    return (day < 10 ? '0' : '') + day + (mon < 10 ? '0' : '') + mon + d.getFullYear();
  }

  var reservarBtn = bar.querySelector('.booking-btn');
  if (reservarBtn) {
    reservarBtn.addEventListener('click', function(e) {
      e.preventDefault();
      var ci = checkinValue ? fmtDate(checkinValue) : '';
      var co = checkoutValue ? fmtDate(checkoutValue) : '';
      var ad = document.getElementById('stickyAdultsDisplay');
      var ch = document.getElementById('stickyChildrenDisplay');
      var adCount = ad ? (ad.textContent.match(/\d+/) || ['2'])[0] : '2';
      var chCount = ch ? (ch.textContent.match(/\d+/) || ['0'])[0] : '0';

      if (!ci || !co) {
        alert('Por favor, selecione as datas de check-in e check-out.');
        return;
      }

      var url = 'https://book.omnibees.com/hotelresults?c=11107&q=21102&currencyId=16&lang=pt-BR&hotel_folder=&NRooms=1&version=4'
        + '&CheckIn=' + ci + '&CheckOut=' + co
        + '&ad=' + adCount + '&ch=' + chCount + '&ag=0'
        + '&mobile=true&Code=&group_code=';
      window.location.href = url;
    });
  }
})();
