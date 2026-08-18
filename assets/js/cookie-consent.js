(function () {
  var KEY = 'arete_cookie_consent';
  if (localStorage.getItem(KEY)) return;

  var bar = document.createElement('div');
  bar.className = 'cc-overlay';
  bar.innerHTML = '<div class="cc-modal">' +
    '<p class="cc-text">Utilizamos cookies para melhorar sua experiência em nosso site. Ao continuar navegando, você concorda com o uso de cookies, em conformidade com a <a href="https://www.google.com.br" class="cc-link" target="_blank" rel="noopener">Política de Privacidade</a>.</p>' +
    '<div class="cc-actions">' +
    '<button class="cc-btn-accept" id="ccAccept">Aceitar</button>' +
    '<button class="cc-btn-reject" id="ccReject">Recusar</button>' +
    '</div>' +
    '</div>';

  document.body.appendChild(bar);

  function dismiss(value) {
    localStorage.setItem(KEY, value);
    bar.classList.add('cc-hiding');
    setTimeout(function () { bar.remove(); }, 350);
  }

  document.getElementById('ccAccept').addEventListener('click', function () { dismiss('accepted'); });
  document.getElementById('ccReject').addEventListener('click', function () { dismiss('rejected'); });
})();
