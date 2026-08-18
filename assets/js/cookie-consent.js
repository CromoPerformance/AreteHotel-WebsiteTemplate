(function () {
  var KEY = 'arete_cookie_consent';
  if (localStorage.getItem(KEY)) return;

  /* ── Cookie bar ── */
  var bar = document.createElement('div');
  bar.className = 'cc-overlay';
  bar.innerHTML = '<div class="cc-modal">' +
    '<p class="cc-text">Utilizamos cookies para melhorar sua experiência em nosso site. Ao continuar navegando, você concorda com o uso de cookies, em conformidade com a <a href="#" class="cc-link" id="ccOpenPolicy">Política de Privacidade</a>.</p>' +
    '<div class="cc-actions">' +
    '<button class="cc-btn-accept" id="ccAccept">Aceitar</button>' +
    '<button class="cc-btn-reject" id="ccReject">Recusar</button>' +
    '</div>' +
    '</div>';

  document.body.appendChild(bar);

  /* ── Privacy modal ── */
  var modal = document.createElement('div');
  modal.className = 'cc-pp-overlay';
  modal.innerHTML = '<div class="cc-pp-modal">' +
    '<div class="cc-pp-header">' +
    '<h3 class="cc-pp-title">Política de Privacidade</h3>' +
    '<button class="cc-pp-close" id="ccClosePolicy">&times;</button>' +
    '</div>' +
    '<div class="cc-pp-body">' +
    '<h4>1. Informações Coletadas</h4>' +
    '<p>Podemos coletar informações pessoais fornecidas voluntariamente, como nome, e-mail e telefone, quando você preenche formulários em nosso site. Também coletamos automaticamente dados de navegação, como endereço IP, páginas visitadas e tempo de permanência, por meio de cookies e tecnologias semelhantes.</p>' +
    '<h4>2. Uso das Informações</h4>' +
    '<p>As informações coletadas são utilizadas para: responder a solicitações e mensagens enviadas pelo site; melhorar a experiência de navegação; enviar comunicações sobre serviços, eventos e novidades, quando autorizado; e gerar estatísticas de uso para aprimoramento do site.</p>' +
    '<h4>3. Cookies</h4>' +
    '<p>Utilizamos cookies para personalizar conteúdo, analisar tráfego e facilitar o uso do site. Você pode configurar seu navegador para recusar cookies, mas isso pode afetar a funcionalidade do site. ao continuar navegando e aceitar nossa política de cookies, você concorda com o uso de cookies conforme descrito.</p>' +
    '<h4>4. Compartilhamento de Dados</h4>' +
    '<p>Não vendemos, alugamos ou compartilhamos suas informações pessoais com terceiros para fins de marketing. Podemos compartilhar dados apenas quando exigido por lei, ou com prestadores de serviços que auxiliam na operação do site, sob acordos de confidencialidade.</p>' +
    '<h4>5. Segurança</h4>' +
    '<p>Adotamos medidas de segurança para proteger suas informações contra acesso não autorizado, alteração, divulgação ou destruição. No entanto, nenhum método de transmissão pela internet é totalmente seguro, e não podemos garantir segurança absoluta.</p>' +
    '<h4>6. Seus Direitos</h4>' +
    '<p>Em conformidade com a Lei Geral de Proteção de Dados (LGPD), você tem direito de acessar, corrigir ou solicitar a exclusão dos seus dados pessoais. Para exercer esses entre em contato conosco.</p>' +
    '<h4>7. Alterações nesta Política</h4>' +
    '<p>Esta política pode ser atualizada periodicamente. Recomendamos que consulte esta página regularmente para se manter informado sobre como protegemos suas informações.</p>' +
    '<h4>8. Contato</h4>' +
    '<p>Em caso de dúvidas sobre esta política de privacidade, entre em contato conosco pelo formulário disponível em nosso site.</p>' +
    '</div>' +
    '</div>';

  document.body.appendChild(modal);

  /* ── Events ── */
  function dismiss(value) {
    localStorage.setItem(KEY, value);
    bar.classList.add('cc-hiding');
    setTimeout(function () { bar.remove(); }, 350);
  }

  document.getElementById('ccAccept').addEventListener('click', function () { dismiss('accepted'); });
  document.getElementById('ccReject').addEventListener('click', function () { dismiss('rejected'); });

  document.getElementById('ccOpenPolicy').addEventListener('click', function (e) {
    e.preventDefault();
    modal.classList.add('cc-pp-open');
  });

  document.getElementById('ccClosePolicy').addEventListener('click', function () {
    modal.classList.remove('cc-pp-open');
  });

  modal.addEventListener('click', function (e) {
    if (e.target === modal) modal.classList.remove('cc-pp-open');
  });
})();
