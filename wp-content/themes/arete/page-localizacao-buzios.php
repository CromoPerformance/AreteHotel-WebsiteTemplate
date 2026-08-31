<?php
/**
 * Template: Página Localização & Búzios
 *
 * Réplica exata da página localizacao.html.
 *
 * @package AretêHotel
 */
?>
<?php get_header(); ?>

    <!-- Hero -->
    <section class="hero hero-buzios hero-subpage" style="background-image:url('<?php echo esc_url( arete_asset( 'new/DSCF5357.avif' ) ); ?>')">
      <div class="hero-inner">
        <div class="hero-kicker">Localização</div>
        <h1 class="hero-title">A Marina</h1>
        <p class="hero-subtitle">Náutico, silencioso e preservado</p>
      </div>
      <div class="hero-scroll">
        <span class="hero-scroll-text">Descobrir</span>
        <div class="hero-scroll-line"></div>
      </div>
    </section>

    <!-- Manifesto -->
    <section class="manifesto manifesto--spaced manifesto--no-lines">
      <div class="manifesto-inner">
        <div class="eyebrow" style="margin-bottom: 32px;">Lifestyle Náutico</div>
        <h2 class="section-heading" style="margin-bottom: 48px;">Viva a marina<br><em>do seu jeito</em></h2>
        <div class="marina-columns">
          <div class="marina-column">
            <div class="marina-column-name">Passeios Privativos</div>
            <div class="marina-column-desc">Rotas personalizadas pelas praias e ilhas de Búzios, com tripulação exclusiva.</div>
          </div>
          <div class="marina-column">
            <div class="marina-column-name">Saída ao Amanhecer</div>
            <div class="marina-column-desc">Navegue com o nascer do sol, quando o mar está mais calmo e os tons de rosa pintam o céu.</div>
          </div>
          <div class="marina-column">
            <div class="marina-column-name">Off Búzios</div>
            <div class="marina-column-desc">Descubra praias desertas e enseadas secretas, longe dos roteiros tradicionais.</div>
          </div>
        </div>
      </div>
    </section>

    <!-- Localização -->
    <section class="marina-hero marina-hero--right">
      <div class="marina-hero-bg" style="background-image: url('<?php echo esc_url( arete_asset( 'new/23022022-IMG_3862.avif' ) ); ?>');"></div>
      <div class="marina-hero-overlay"></div>
      <div class="marina-hero-content">
        <div class="marina-eyebrow">Localização</div>
        <h2 class="marina-title">Equilíbrio e silêncio</h2>
        <p class="marina-subtitle">O Hotel Aretê está na Marina de Búzios, em um dos pontos mais preservados da região. Natureza, silêncio e sofisticação no mesmo lugar. É o refúgio ideal para quem busca uma experiência restauradora, sem abrir mão do conforto.</p>
        <a class="cta-btn" href="<?php echo esc_url( arete_booking_url() ); ?>" target="_blank" rel="noopener" style="margin-top: 24px;">Conheça nossas suítes</a>
      </div>
    </section>

    <!-- Guia Local -->
    <section class="eco-section">

      <div class="eco-map">
        <img src="<?php echo esc_url( arete_asset( 'mapa/turismo.avif' ) ); ?>" alt="Mapa do ecossistema Hotel Aretê" class="eco-map-img">
      </div>

      <div class="eco-blank">
        <div class="eco-list-inner">
          <span class="eco-list-eyebrow">Guia Local</span>
          <h2 class="eco-list-title">Logo ali, perto do hotel</h2>

          <ol class="eco-asset-list">
            <li class="eco-asset-item">
              <span class="eco-asset-num">1</span>
              <div class="eco-asset-info">
                <div class="eco-asset-name">BR Marinas <span class="eco-asset-distance">80 m</span></div>
                <div class="eco-asset-dist">
                  <span class="eco-asset-text" style="color: rgba(36,56,84,0.55); font-size: 15px;">A marina em frente ao hotel, com infraestrutura para embarcações de até 55 pés.</span>
                </div>
              </div>
            </li>

            <li class="eco-asset-item">
              <span class="eco-asset-num">2</span>
              <div class="eco-asset-info">
                <div class="eco-asset-name">Mirante do Pai Vitório <span class="eco-asset-distance">5,8 km</span></div>
                <div class="eco-asset-dist">
                  <span class="eco-asset-text" style="color: rgba(36,56,84,0.55); font-size: 15px;">Com uma vista deslumbrante, esse local é candidato a Geoparque Mundial da UNESCO.</span>
                </div>
              </div>
            </li>

            <li class="eco-asset-item">
              <span class="eco-asset-num">3</span>
              <div class="eco-asset-info">
                <div class="eco-asset-name">Mangue de Pedras <span class="eco-asset-distance">5,5 km</span></div>
                <div class="eco-asset-dist">
                  <span class="eco-asset-text" style="color: rgba(36,56,84,0.55); font-size: 15px;">Um dos poucos manguezais de pedra do mundo, a poucos minutos do hotel.</span>
                </div>
              </div>
            </li>

            <li class="eco-asset-item">
              <span class="eco-asset-num">4</span>
              <div class="eco-asset-info">
                <div class="eco-asset-name">Praia Rasa <span class="eco-asset-distance">1,2 km</span></div>
                <div class="eco-asset-dist">
                  <span class="eco-asset-text" style="color: rgba(36,56,84,0.55); font-size: 15px;">A praia mais próxima do hotel, ideal para kitesurf, windsurf e caminhadas na areia.</span>
                </div>
              </div>
            </li>

            <li class="eco-asset-item">
              <span class="eco-asset-num">5</span>
              <div class="eco-asset-info">
                <div class="eco-asset-name">Aeroporto Umberto <span class="eco-asset-distance">3 km</span></div>
                <div class="eco-asset-dist">
                  <span class="eco-asset-text" style="color: rgba(36,56,84,0.55); font-size: 15px;">Apenas 7 minutos do hotel. Voos nacionais e internacionais.</span>
                </div>
              </div>
            </li>
          </ol>
        </div>
      </div>

    </section>

    <!-- A Península -->
    <section class="nature-split nature-split--small">
      <div class="nature-split-content">
        <div class="eyebrow">A Península</div>
        <h2 class="nature-split-title">Um destino que<br>nunca decepciona</h2>
        <p class="nature-split-text">Búzios é uma cidade com alma: cosmopolita e acolhedora ao mesmo tempo. Com 27 praias, cada uma com sua personalidade, do agito de Geribá à tranquilidade de João Fernandinho, há sempre um cenário para cada momento.</p>
        <p class="nature-split-text">A atmosfera náutica, o pôr do sol inesquecível e a gastronomia mediterrânea fazem de Búzios um dos destinos mais desejados do Brasil.</p>
      </div>
      <div class="peninsula-carousel">
        <div class="peninsula-carousel-track">
          <div class="peninsula-slide active" style="background-image:url('<?php echo esc_url( arete_asset( 'buzios/BUZIOS-HERO.avif' ) ); ?>')"></div>
          <div class="peninsula-slide" style="background-image:url('<?php echo esc_url( arete_asset( 'buzios/BUZIOS-AZEDA.avif' ) ); ?>')"></div>
          <div class="peninsula-slide" style="background-image:url('<?php echo esc_url( arete_asset( 'buzios/BUZIOS-MARINA.avif' ) ); ?>')"></div>
          <div class="peninsula-slide" style="background-image:url('<?php echo esc_url( arete_asset( 'new/orla-bardot.avif' ) ); ?>')"></div>
          <div class="peninsula-slide" style="background-image:url('<?php echo esc_url( arete_asset( 'new/Rua-das-Pedras-Viva-Buzios-Flats.avif' ) ); ?>')"></div>
          <div class="peninsula-slide" style="background-image:url('<?php echo esc_url( arete_asset( 'buzios/BUZIOS-ARMACAO.avif' ) ); ?>')"></div>
        </div>
        <button class="peninsula-carousel-btn prev" aria-label="Anterior">
          <svg viewBox="0 0 24 24" width="24" height="24"><path d="M15 18l-6-6 6-6" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </button>
        <button class="peninsula-carousel-btn next" aria-label="Próximo">
          <svg viewBox="0 0 24 24" width="24" height="24"><path d="M9 18l6-6-6-6" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </button>
        <div class="peninsula-carousel-dots">
          <button class="peninsula-dot active" data-index="0" aria-label="Imagem 1"></button>
          <button class="peninsula-dot" data-index="1" aria-label="Imagem 2"></button>
          <button class="peninsula-dot" data-index="2" aria-label="Imagem 3"></button>
          <button class="peninsula-dot" data-index="3" aria-label="Imagem 4"></button>
          <button class="peninsula-dot" data-index="4" aria-label="Imagem 5"></button>
          <button class="peninsula-dot" data-index="5" aria-label="Imagem 6"></button>
        </div>
      </div>
    </section>

    <!-- Estatísticas -->
    <section class="stats-section stats-section--buzios">
      <div class="stats-inner">
        <div class="stat-col">
          <div class="stat-number">27</div>
          <div class="stat-label">Praias</div>
          <div class="stat-sub">de águas cristalinas</div>
        </div>
        <div class="stat-divider"></div>
        <div class="stat-col">
          <div class="stat-number">168</div>
          <div class="stat-label">Km do Rio</div>
          <div class="stat-sub">uma escapada perfeita</div>
        </div>
        <div class="stat-divider"></div>
        <div class="stat-col">
          <div class="stat-number">28°</div>
          <div class="stat-label">Temperatura Média</div>
          <div class="stat-sub">clima ameno o ano todo</div>
        </div>
      </div>
    </section>

    <!-- Programação da Cidade -->
    <section class="city-events" style="background: #fff; padding: 80px 10%;">
      <div class="city-events-inner">
        <div class="eyebrow">Calendário da Cidade</div>
        <h2 class="section-heading">O ano inteiro,<br><em>um evento acontecendo</em></h2>
        <p class="copy-text" style="max-width:640px;margin:0 auto 40px;text-align:center;">Búzios se move o ano todo. Festivais musicais, corridas, regatas e degustações transformam a cidade em cada estação. As datas indicadas servem como referência e podem alterar ano a ano.</p>
        <div class="experiences-items">
          <div class="experience-row">
            <h3 class="experience-name">X-Run Búzios</h3>
            <p class="experience-desc">Prova de corrida com percursos de 3 km, 6 km e 12 km por cenários icônicos da cidade, como Orla Bardot, Praia da Armação e Praia dos Ossos.</p>
          </div>
          <div class="experience-row">
            <h3 class="experience-name">Búzios Sailing Week</h3>
            <p class="experience-desc">Uma das maiores regatas de vela oceânica do Brasil, realizada no Iate Clube Armação de Búzios com grandes nomes da vela nacional.</p>
          </div>
          <div class="experience-row">
            <h3 class="experience-name">Búzios Jazz Festival</h3>
            <p class="experience-desc">Nove shows gratuitos de jazz, blues e música instrumental na Praça Santos Dumont durante o feriado do Dia do Trabalhador.</p>
          </div>
          <div class="experience-row">
            <h3 class="experience-name">Wine in Búzios</h3>
            <p class="experience-desc">Maior festival de vinhos da Região dos Lagos. Feira com mais de 80 rótulos, shows ao vivo e o tradicional Wine Boat.</p>
          </div>
          <div class="experience-row">
            <h3 class="experience-name">Degusta Búzios</h3>
            <p class="experience-desc">Celebrado festival gastronômico da Região dos Lagos. Pratos exclusivos de chefs nacionais e internacionais, música e cultura pelas ruas do centro.</p>
          </div>
          <div class="experience-row">
            <h3 class="experience-name">Hero SwimRun</h3>
            <p class="experience-desc">Primeira prova de SwimRun do Brasil e uma das mais belas do mundo. Combina corrida e natação em águas abertas por praias e trilhas.</p>
          </div>
          <div class="experience-row">
            <h3 class="experience-name">Meia Maratona de Búzios</h3>
            <p class="experience-desc">Prova de 21 km com percurso por praias, trilhas e pontos turísticos da cidade. Largada e chegada na Praça da Ferradura.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Estações do Ano -->
    <section class="seasons-section">
      <div class="seasons-header">
        <div class="eyebrow">Búzios por Estações</div>
        <h2 class="seasons-title">Muito além do verão</h2>
        <p class="seasons-text">Cada estação em Búzios carrega uma personalidade própria. Um destino que se reinventa, e que o Hotel Aretê conhece em cada detalhe.</p>
      </div>
      <div class="seasons-slider">
        <!-- Imagens -->
        <div class="seasons-track">
          <div class="season-slide active" data-season="verao">
            <div class="season-slide-img" style="background-image:url('<?php echo esc_url( arete_asset( 'buzios/BUZIOS-ARMACAO.avif' ) ); ?>')" aria-hidden="true"></div>
          </div>
          <div class="season-slide" data-season="outono">
            <div class="season-slide-img" style="background-image:url('<?php echo esc_url( arete_asset( 'new/barco atracado cais.avif' ) ); ?>')" aria-hidden="true"></div>
          </div>
          <div class="season-slide" data-season="inverno">
            <div class="season-slide-img" style="background-image:url('<?php echo esc_url( arete_asset( 'new/buzios inverno.avif' ) ); ?>')" aria-hidden="true"></div>
          </div>
          <div class="season-slide" data-season="primavera">
            <div class="season-slide-img" style="background-image:url('<?php echo esc_url( arete_asset( 'new/marina vista do restaurante.avif' ) ); ?>')" aria-hidden="true"></div>
          </div>
        </div>
        <!-- Texto + nav + CTA -->
        <div class="seasons-text-area">
          <div class="seasons-name" data-season="verao">Verão</div>
          <div class="seasons-name" data-season="outono" style="display:none">Outono</div>
          <div class="seasons-name" data-season="inverno" style="display:none">Inverno</div>
          <div class="seasons-name" data-season="primavera" style="display:none">Primavera</div>
          <div class="seasons-months" data-season="verao">Dez a Mar</div>
          <div class="seasons-months" data-season="outono" style="display:none">Mar a Mai</div>
          <div class="seasons-months" data-season="inverno" style="display:none">Jun a Ago</div>
          <div class="seasons-months" data-season="primavera" style="display:none">Set a Nov</div>
          <div class="seasons-desc" data-season="verao">Alta temporada com sol garantido. O mar ganha tons vibrantes de azul e verde, a cidade pulsa entre praias, festivais e vida noturna. Um convite a viver cada momento ao ar livre.</div>
          <div class="seasons-desc" data-season="outono" style="display:none">O mar se acalma e o céu ganha tons dourados. Fins de semana tranquilos com temperaturas agradáveis. Ótimo para caminhadas tranquilas, almoços demorados e praias mais serenas.</div>
          <div class="seasons-desc" data-season="inverno" style="display:none">A luz mais bonita do ano que surpreende pelo clima ameno e dias ensolarados. Época ideal para explorar a gastronomia local no friozinho da noite e praticar seu esporte preferido.</div>
          <div class="seasons-desc" data-season="primavera" style="display:none">Búzios floresce em todos os sentidos. A cidade recupera um ritmo mais movimentado, preservando a atmosfera leve e acolhedora que a torna especial durante todo o ano.</div>
          <div class="seasons-nav">
            <button class="seasons-nav-btn active" data-target="verao">Verão</button>
            <button class="seasons-nav-btn" data-target="outono">Outono</button>
            <button class="seasons-nav-btn" data-target="inverno">Inverno</button>
            <button class="seasons-nav-btn" data-target="primavera">Primavera</button>
          </div>
          <a class="btn-outline seasons-cta" href="<?php echo esc_url( arete_booking_url() ); ?>" target="_blank" rel="noopener">Planeje sua estadia</a>
        </div>
      </div>
    </section>

    <!-- Como Chegar -->
    <section class="nature-split nature-split--no-img-mobile">
      <div class="nature-split-image" style="background-image:url('<?php echo esc_url( arete_asset( 'home/HOME-CARD-O-HOTEL.avif' ) ); ?>')" aria-hidden="true"></div>
      <div class="nature-split-content">
        <div class="eyebrow">Como Chegar</div>
        <h2 class="nature-split-title">Chegue com<br>tranquilidade</h2>
        <div class="info-blocks">
          <div class="info-block">
            <div class="info-label">De carro</div>
            <div class="info-value">170 km do Rio de Janeiro via BR-101 e RJ-124</div>
          </div>
          <div class="info-block">
            <div class="info-label">De avião</div>
            <div class="info-value">Aeroporto Umberto Modiano, 7 min do hotel</div>
          </div>
        </div>
        <div class="info-buttons">
          <a class="btn-primary" href="https://www.google.com/maps?q=Hotel+Aret%C3%AA,+B%C3%BAzios" target="_blank" rel="noopener">Google Maps</a>
          <a class="btn-outline" href="https://waze.com/ul?q=Hotel+Aret%C3%AA,+B%C3%BAzios" target="_blank" rel="noopener">Waze</a>
        </div>
      </div>
    </section>

  <script>
    // Scroll animation for differential items
    const diffItems = document.querySelectorAll('.diff-item');
    const observer = new IntersectionObserver(function(entries) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
        }
      });
    }, { threshold: 0.15 });
    diffItems.forEach(function(item) { observer.observe(item); });

    // Seasons slider
    var slides = document.querySelectorAll('.season-slide');
    var navBtns = document.querySelectorAll('.seasons-nav-btn');
    var currentSeason = 0;
    var seasonOrder = ['verao', 'outono', 'inverno', 'primavera'];

    function showText(season) {
      document.querySelectorAll('.seasons-name, .seasons-months, .seasons-desc').forEach(function(el) {
        el.style.display = el.dataset.season === season ? '' : 'none';
      });
    }

    function goToSeason(target) {
      var targetIndex = seasonOrder.indexOf(target);
      if (targetIndex === currentSeason) return;

      var prev = currentSeason;
      currentSeason = targetIndex;

      // Crossfade images
      slides[currentSeason].classList.add('active');
      navBtns[currentSeason].classList.add('active');
      setTimeout(function() {
        slides[prev].classList.remove('active');
        navBtns[prev].classList.remove('active');
      }, 600);

      // Switch text immediately
      showText(target);
    }

    showText('verao');

    navBtns.forEach(function(btn) {
      btn.addEventListener('click', function() {
        goToSeason(btn.dataset.target);
      });
    });
  </script>
  <script>
    /* Peninsula Carousel */
    (function() {
      var track = document.querySelector('.peninsula-carousel-track');
      if (!track) return;
      var slides = track.querySelectorAll('.peninsula-slide');
      var dots = document.querySelectorAll('.peninsula-dot');
      var prevBtn = document.querySelector('.peninsula-carousel-btn.prev');
      var nextBtn = document.querySelector('.peninsula-carousel-btn.next');
      var current = 0;
      var total = slides.length;
      var autoplayTimer;

      function goTo(index) {
        slides[current].classList.remove('active');
        dots[current].classList.remove('active');
        current = (index + total) % total;
        slides[current].classList.add('active');
        dots[current].classList.add('active');
      }

      function next() { goTo(current + 1); }
      function prev() { goTo(current - 1); }

      function startAutoplay() {
        autoplayTimer = setInterval(next, 4000);
      }
      function stopAutoplay() {
        clearInterval(autoplayTimer);
      }

      if (nextBtn) nextBtn.addEventListener('click', function() { stopAutoplay(); next(); startAutoplay(); });
      if (prevBtn) prevBtn.addEventListener('click', function() { stopAutoplay(); prev(); startAutoplay(); });
      dots.forEach(function(dot) {
        dot.addEventListener('click', function() {
          stopAutoplay();
          goTo(parseInt(this.dataset.index));
          startAutoplay();
        });
      });

    startAutoplay();
  })();
  </script>
<?php get_footer(); ?>
