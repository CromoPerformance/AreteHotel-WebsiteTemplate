(function () {
  var header = document.querySelector('.site-header');
  if (!header) return;
  function update() {
    if (window.scrollY > 80) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  }
  window.addEventListener('scroll', update, { passive: true });
  update();
})();
