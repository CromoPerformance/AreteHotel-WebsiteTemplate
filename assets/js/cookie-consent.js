(function () {
  var KEY = 'arete_cookie_consent';
  if (localStorage.getItem(KEY) === 'accepted') return;

  var bar = document.createElement('div');
  bar.className = 'cc-overlay';
  bar.innerHTML = '<div class="cc-modal">' +
    '<p class="cc-text">Utilizamos cookies para melhorar sua experiência em nosso site. Ao continuar navegando, você concorda com o uso de cookies, em conformidade com a <a href="https://www.google.com.br" class="cc-link" target="_blank" rel="noopener">Política de Privacidade</a>.</p>' +
    '<button class="cc-btn-accept" id="ccAccept">Aceitar</button>' +
    '</div>';

  document.body.appendChild(bar);

  document.getElementById('ccAccept').addEventListener('click', function () {
    localStorage.setItem(KEY, 'accepted');
    bar.classList.add('cc-hiding');
    setTimeout(function () { bar.remove(); }, 350);
  });
})();
