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
  document.body.classList.add('has-cookie-bar');

  /* ── Privacy modal ── */
  var modal = document.createElement('div');
  modal.className = 'cc-pp-overlay';
  modal.innerHTML = '<div class="cc-pp-modal">' +
    '<div class="cc-pp-header">' +
    '<h3 class="cc-pp-title">Política de Privacidade</h3>' +
    '<button class="cc-pp-close" id="ccClosePolicy">&times;</button>' +
    '</div>' +
    '<div class="cc-pp-body">' +
    '<p>O Hotel Aretê valoriza a privacidade e a proteção dos dados pessoais de seus hóspedes, clientes e visitantes, comprometendo-se a tratá-los em conformidade com a Lei Geral de Proteção de Dados (LGPD).</p>' +
    '<h4>Coleta de Dados</h4>' +
    '<p>Algumas informações poderão ser exigidas por força da legislação aplicável à atividade de hospedagem, incluindo registros obrigatórios de hóspedes.</p>' +
    '<p>Podemos coletar dados pessoais fornecidos diretamente por você, como nome, telefone, e-mail e informações necessárias para reservas, hospedagem e atendimento. Também coletamos informações de navegação em nosso site, como endereço IP, tipo de navegador, cookies e dados de acesso.</p>' +
    '<p>Além disso, poderemos receber informações de parceiros e plataformas de reservas utilizadas por você, observadas as autorizações e consentimentos exigidos pela legislação.</p>' +
    '<p>Durante a hospedagem, poderão ser registrados dados relacionados às suas preferências e informações necessárias para prestação e personalização dos serviços.</p>' +
    '<p>Para acesso à rede Wi-Fi, poderão ser solicitados dados necessários à identificação e conexão.</p>' +
    '<h4>Utilização dos Dados</h4>' +
    '<p>Os dados coletados são utilizados para:</p>' +
    '<ul>' +
    '<li>Realizar reservas, hospedagens e demais serviços contratados;</li>' +
    '<li>Processar pagamentos e atender solicitações dos hóspedes;</li>' +
    '<li>Personalizar e aprimorar a experiência de hospedagem;</li>' +
    '<li>Enviar comunicações relacionadas aos serviços contratados;</li>' +
    '<li>Poderemos utilizar o seu e-mail e demais meios de contato para envio de ofertas, novidades, eventos e comunicações promocionais relacionadas ao Hotel Aretê. O titular poderá solicitar o cancelamento dessas comunicações a qualquer momento;</li>' +
    '<li>Garantir a segurança de hóspedes, colaboradores e patrimônio;</li>' +
    '<li>Cumprir obrigações legais e regulatórias;</li>' +
    '<li>Prevenir fraudes e atividades ilícitas.</li>' +
    '</ul>' +
    '<h4>Compartilhamento de Dados</h4>' +
    '<p>Os dados poderão ser compartilhados com operadores de reservas, sistema de gestão hoteleira, plataformas de pagamento, provedores de tecnologia, ferramentas de marketing e autoridades públicas quando exigido por lei.</p>' +
    '<h4>Base Legal</h4>' +
    '<p>O tratamento dos dados pessoais poderá ocorrer com base na execução de contrato, cumprimento de obrigação legal, legítimo interesse ou consentimento do titular, conforme aplicável.</p>' +
    '<h4>Cookies e Tecnologias de Navegação</h4>' +
    '<p>Utilizamos cookies e tecnologias semelhantes para melhorar a experiência de navegação, personalizar conteúdos e analisar o desempenho do site. O usuário pode configurar seu navegador para bloquear ou excluir cookies, ciente de que algumas funcionalidades poderão ser afetadas.</p>' +
    '<h4>Segurança e Armazenamento</h4>' +
    '<p>Adotamos medidas técnicas e administrativas adequadas para proteger os dados pessoais contra acessos não autorizados, perdas, alterações ou divulgações indevidas. Os dados serão mantidos pelo período necessário para cumprimento das finalidades descritas nesta política ou conforme exigido por lei.</p>' +
    '<h4>Direitos do Titular</h4>' +
    '<p>Você poderá, a qualquer momento, solicitar:</p>' +
    '<ul>' +
    '<li>Confirmação da existência de tratamento de seus dados;</li>' +
    '<li>Acesso, correção ou atualização de informações;</li>' +
    '<li>Anonimização, bloqueio ou eliminação de dados, quando aplicável;</li>' +
    '<li>Revogação do consentimento concedido;</li>' +
    '<li>Informações sobre compartilhamento e tratamento dos dados.</li>' +
    '</ul>' +
    '<h4>Aplicações de Terceiros</h4>' +
    '<p>Nosso site pode conter links para sites e serviços de terceiros. O Hotel Aretê não é responsável pelas práticas de privacidade desses ambientes, recomendando a leitura de suas respectivas políticas.</p>' +
    '<h4>Alterações desta Política</h4>' +
    '<p>Esta Política de Privacidade poderá ser atualizada periodicamente. A versão mais recente estará sempre disponível em nossos canais oficiais.</p>' +
    '<h4>Contato</h4>' +
    '<p>Em caso de dúvidas, solicitações ou para exercer seus direitos relacionados à proteção de dados pessoais, entre em contato pelo e-mail: <a href="mailto:reservas@hotelarete.com.br">reservas@hotelarete.com.br</a>.</p>' +
    '</div>' +
    '</div>';

  document.body.appendChild(modal);

  /* ── Events ── */
  function dismiss(value) {
    localStorage.setItem(KEY, value);
    bar.classList.add('cc-hiding');
    document.body.classList.remove('has-cookie-bar');
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
