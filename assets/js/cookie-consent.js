(function () {
  var KEY = 'arete_cookie_consent';
  if (localStorage.getItem(KEY) === 'accepted') return;

  var overlay = document.createElement('div');
  overlay.className = 'cc-overlay';
  overlay.innerHTML = '<div class="cc-modal">' +
    '<h3 class="cc-title">Política de Privacidade e Cookies</h3>' +
    '<p class="cc-text">Utilizamos cookies para melhorar sua experiência em nosso site, personalizar conteúdo e analisar nosso tráfego. Ao continuar navegando, você concorda com o uso de cookies, em conformidade com a Lei Geral de Proteção de Dados (LGPD).</p>' +
    '<p class="cc-text">Para mais informações, consulte nossa <a href="https://www.google.com.br" class="cc-link" target="_blank" rel="noopener">Política de Privacidade</a>.</p>' +
    '<div class="cc-actions">' +
    '<button class="cc-btn cc-btn-accept" id="ccAccept">Aceitar e continuar</button>' +
    '</div>' +
    '</div>';

  document.body.appendChild(overlay);

  document.getElementById('ccAccept').addEventListener('click', function () {
    localStorage.setItem(KEY, 'accepted');
    overlay.classList.add('cc-hiding');
    setTimeout(function () { overlay.remove(); }, 350);
  });
})();
