/* Lazy-load background images via IntersectionObserver */
(function(){
  const io = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        const el = e.target;
        const bg = el.getAttribute('data-bg');
        if (bg) {
          el.style.backgroundImage = 'url(' + bg + ')';
          el.removeAttribute('data-bg');
        }
        io.unobserve(el);
      }
    });
  }, { rootMargin: '400px 0px' }); // load 400px before viewport

  document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('[data-bg]').forEach(el => io.observe(el));
  });
})();
