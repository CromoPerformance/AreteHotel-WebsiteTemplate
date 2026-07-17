// ── NAV SCROLL
const nav = document.getElementById('mainNav');
let ticking = false;
window.addEventListener('scroll', () => {
  if (!ticking) {
    window.requestAnimationFrame(() => {
      nav.classList.toggle('scrolled', window.scrollY > 60);
      ticking = false;
    });
    ticking = true;
  }
}, { passive: true });

// ── SCROLL REVEAL
const observer = new IntersectionObserver(entries => {
  entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('visible'); });
}, { threshold: 0.08, rootMargin: '0px 0px -40px 0px' });
document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

// ── TESTIMONIALS
const testimonials = [
  { text: "O Aretê não é simplesmente um hotel — é uma sensação. O tipo de lugar ao qual você retorna na memória muito depois de tê-lo deixado, perguntando-se quando poderá voltar.", author: "— Isabela M., São Paulo · Estadia Outubro 2024" },
  { text: "Fiquei em hotéis espalhados por cinco continentes, e o Aretê ocupa um lugar singular na minha memória. O silêncio do lugar é uma espécie de música.", author: "— Charles D., Paris · Estadia Agosto 2024" },
  { text: "Do primeiro sopro de ar do mar na chegada até o último café na varanda, cada momento no Aretê foi um lembrete do que viajar deveria significar.", author: "— Ana & Marco R., Buenos Aires · Estadia Dezembro 2024" }
];
const testiText   = document.getElementById('testiText');
const testiAuthor = document.getElementById('testiAuthor');
const testiDots   = document.querySelectorAll('.testi-dot');
let currentTesti = 0;
function setTesti(idx) {
  currentTesti = idx;
  testiText.style.opacity = 0;
  setTimeout(() => {
    testiText.textContent   = testimonials[idx].text;
    testiAuthor.textContent = testimonials[idx].author;
    testiText.style.opacity = 1;
  }, 300);
  testiDots.forEach((d, i) => d.classList.toggle('active', i === idx));
}
testiDots.forEach(d => d.addEventListener('click', () => setTesti(parseInt(d.dataset.index))));
setInterval(() => setTesti((currentTesti + 1) % testimonials.length), 6000);

// ── GALLERY SLIDER (drag)
const galleryTrack = document.getElementById('galleryTrack');
let isGDragging = false, startGX = 0, startGScroll = 0;

galleryTrack.addEventListener('mousedown', e => {
  isGDragging = true; startGX = e.pageX;
  startGScroll = galleryTrack.scrollLeft;
  galleryTrack.classList.add('is-dragging');
});
document.addEventListener('mouseup', () => { isGDragging = false; galleryTrack.classList.remove('is-dragging'); });
galleryTrack.addEventListener('mousemove', e => {
  if (!isGDragging) return;
  galleryTrack.scrollLeft = startGScroll - (e.pageX - startGX) * 1.4;
});
galleryTrack.addEventListener('touchstart', e => { startGX = e.touches[0].pageX; startGScroll = galleryTrack.scrollLeft; }, { passive: true });
galleryTrack.addEventListener('touchmove',  e => { galleryTrack.scrollLeft = startGScroll - (e.touches[0].pageX - startGX) * 1.4; }, { passive: true });


// ── ROOMS SLIDER (drag + nav)
const slider   = document.getElementById('roomsSlider');
const prevBtn  = document.getElementById('roomsPrev');
const nextBtn  = document.getElementById('roomsNext');
const rdots    = document.querySelectorAll('.rooms-dot');
let isDragging = false, startX = 0, startScroll = 0;

slider.addEventListener('mousedown', e => {
  isDragging = true; startX = e.pageX;
  startScroll = slider.scrollLeft;
  slider.classList.add('is-dragging');
});
document.addEventListener('mouseup',   () => { isDragging = false; slider.classList.remove('is-dragging'); });
slider.addEventListener('mousemove', e => {
  if (!isDragging) return;
  slider.scrollLeft = startScroll - (e.pageX - startX) * 1.4;
  updateRoomDots();
});
slider.addEventListener('scroll', updateRoomDots, { passive: true });
// Touch support
slider.addEventListener('touchstart', e => { startX = e.touches[0].pageX; startScroll = slider.scrollLeft; }, { passive: true });
slider.addEventListener('touchmove',  e => { slider.scrollLeft = startScroll - (e.touches[0].pageX - startX) * 1.4; updateRoomDots(); }, { passive: true });

/* width 400px + 32px gap */
const CARD_W = 432;
prevBtn.addEventListener('click', () => { slider.scrollBy({ left: -CARD_W, behavior: 'smooth' }); });
nextBtn.addEventListener('click', () => { slider.scrollBy({ left:  CARD_W, behavior: 'smooth' }); });
rdots.forEach(d => d.addEventListener('click', () => {
  slider.scrollTo({ left: parseInt(d.dataset.idx) * CARD_W, behavior: 'smooth' });
}));
function updateRoomDots() {
  const idx = Math.round(slider.scrollLeft / CARD_W);
  rdots.forEach((d, i) => d.classList.toggle('active', i === idx));
}

// ── PAGE PROGRESS
const sections = ['hero','hotel','awards','gallery','accommodations','testimonials','contact','restaurante','vivencias','destino','localizacao'];
const progressDots = document.querySelectorAll('.progress-dot');

const progressObserver = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      const idx = sections.indexOf(entry.target.id);
      if (idx !== -1 && progressDots[idx]) {
        progressDots.forEach(d => d.classList.remove('active'));
        progressDots[idx].classList.add('active');
      }
    }
  });
}, { rootMargin: '-40% 0px -40% 0px' });

sections.forEach(id => {
  const el = document.getElementById(id);
  if (el) progressObserver.observe(el);
});

// ── SMOOTH ANCHOR SCROLL
document.querySelectorAll('a[href^="#"]').forEach(a => {
  a.addEventListener('click', e => {
    const target = document.querySelector(a.getAttribute('href'));
    if (target) { e.preventDefault(); target.scrollIntoView({ behavior: 'smooth' }); }
  });
});