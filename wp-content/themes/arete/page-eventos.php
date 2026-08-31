<?php
/**
 * Template: Página Eventos
 *
 * Réplica exata da página eventos.html.
 *
 * @package AretêHotel
 */
?>
<?php get_header(); ?>

    <section class="hero hero-events hero-subpage" style="background-image:url('<?php echo esc_url( arete_asset( 'new/piscina hotel drone.avif' ) ); ?>')">
      <div class="hero-inner">
        <div class="hero-kicker">Hotel Aretê</div>
        <h1 class="hero-title">Eventos</h1>
        <p class="hero-subtitle">Seu momento, nosso cuidado</p>
      </div>
      <div class="hero-scroll">
        <span class="hero-scroll-text">Descobrir</span>
        <div class="hero-scroll-line"></div>
      </div>
    </section>

    <!-- Tipos de evento -->
    <section class="events-showcase">
      <div class="events-showcase-header">
        <div class="eyebrow">Espaços</div>
        <h2 class="section-heading">Tipos de <em>evento</em></h2>
        <p class="copy-text" style="max-width:640px;margin:20px auto 0;text-align:center;">Cenários exclusivos e ambientes versáteis para casamentos, celebrações íntimas e momentos inesquecíveis.</p>
      </div>
      <div class="events-showcase-grid">
        <div class="events-showcase-item" style="background-image:url('<?php echo esc_url( arete_asset( 'shared/Cópia de M-116.jpg' ) ); ?>')">
          <div class="events-showcase-overlay"></div>
          <div class="events-showcase-content">
            <h3 class="events-showcase-name">Casamentos</h3>
            <p class="events-showcase-desc">Cerimônias e recepções com vista para a marina e pôr do sol.</p>
          </div>
        </div>
        <div class="events-showcase-item" style="background-image:url('<?php echo esc_url( arete_asset( 'shared/DSCF4957.avif' ) ); ?>')">
          <div class="events-showcase-overlay"></div>
          <div class="events-showcase-content">
            <h3 class="events-showcase-name">Mini Weddings</h3>
            <p class="events-showcase-desc">Celebrações íntimas com até 50 convidados em espaços selecionados.</p>
          </div>
        </div>
        <div class="events-showcase-item" style="background-image:url('<?php echo esc_url( arete_asset( 'new/_MG_2434.avif' ) ); ?>')">
          <div class="events-showcase-overlay"></div>
          <div class="events-showcase-content">
            <h3 class="events-showcase-name">Aniversários</h3>
            <p class="events-showcase-desc">O Hotel Aretê como sua casa. Receba seus convidados e celebre essa data com serviço de excelência e gastronomia.</p>
          </div>
        </div>
      </div>
      <div style="text-align: center; margin-top: 40px;">
        <a class="btn-outline" href="<?php echo esc_url( arete_whatsapp_url() ); ?>" target="_blank" rel="noopener">Solicitar orçamento</a>
      </div>
    </section>

    <!-- Manifesto -->
    <section class="manifesto manifesto--spaced manifesto--no-lines" style="padding-top: 40px;">
      <div class="manifesto-inner">
        <p class="manifesto-text">No Hotel Aretê, oferecemos pacotes flexíveis e atendimento personalizado para garantir que seu evento tenha a atenção que merece.</p>
      </div>
    </section>

    <!-- Citação -->
    <section class="stats-section stats-section--quote" style="background: #077F8C;">
      <div class="stats-inner" style="gap: 72px; align-items: flex-start;">
        <div class="stat-block">
          <div class="stat-label">Exclusividade</div>
          <div class="stat-desc" style="max-width: 360px; font-size: 17px; text-align: left; font-style: normal; color: #fff;">Espaços reservados, atenção dedicada. Cada detalhe pensado para que seu evento seja tão único quanto a ocasião que o inspirou.</div>
        </div>
        <div class="stat-block">
          <div class="stat-label">Calma</div>
          <div class="stat-desc" style="max-width: 360px; font-size: 17px; text-align: left; font-style: normal; color: #fff;">Longe do agito, perto do que importa. Uma atmosfera náutica e silenciosa que transforma cada celebração em um momento genuíno.</div>
        </div>
        <div class="stat-block">
          <div class="stat-label">Personalização</div>
          <div class="stat-desc" style="max-width: 360px; font-size: 17px; text-align: left; font-style: normal; color: #fff;">Do layout à iluminação, cada escolha é sua. Nossa equipe traduz a sua visão em uma experiência sob medida.</div>
        </div>
      </div>
    </section>

    <!-- Privatização da Piscina -->
    <section class="nature-split nature-split--img-first-mobile">
      <div class="nature-split-content">
        <div class="eyebrow">Exclusividade</div>
        <h2 class="nature-split-title">Privatização<br>da Piscina</h2>
        <p class="nature-split-text">A área da piscina do Hotel Aretê não é apenas um espaço de lazer, também é uma opção para privatização e realização de eventos. Indicada para celebrações íntimas, encontros corporativos e festas. Um ambiente elegante e confortável.</p>
      </div>
      <div class="nature-split-image" style="background-image:url('<?php echo esc_url( arete_asset( 'shared/DSCF4160.avif' ) ); ?>')" aria-hidden="true"></div>
    </section>

    <!-- Restaurante como Espaço de Eventos -->
    <section class="nature-split">
      <div class="nature-split-gallery">
        <div class="nature-split-gallery-item" style="background-image:url('<?php echo esc_url( arete_asset( 'shared/M-114.jpg' ) ); ?>')" aria-hidden="true"></div>
        <div class="nature-split-gallery-item" style="background-image:url('<?php echo esc_url( arete_asset( 'shared/M-201.jpg' ) ); ?>')" aria-hidden="true"></div>
        <div class="nature-split-gallery-item" style="background-image:url('<?php echo esc_url( arete_asset( 'shared/M-91.jpg' ) ); ?>')" aria-hidden="true"></div>
      </div>
      <div class="nature-split-content">
        <div class="eyebrow">Restaurante</div>
        <h2 class="nature-split-title">Um salão de<br>eventos autoral</h2>
        <p class="nature-split-text">O restaurante do Hotel Aretê se transforma em um sofisticado espaço para eventos. Com vista privilegiada para a marina, cardápio autoral e ambientação versátil, é o cenário ideal para celebrações, jantares corporativos e encontros especiais.</p>
        <p class="nature-split-text">Menus personalizados, carta de vinhos curada e uma equipe dedicada para cuidar de cada detalhe da sua experiência.</p>
      </div>
    </section>

    <!-- CTA -->
    <section class="cta-section manifesto--wide" style="background: #004485;">
      <div class="cta-inner">
        <h2 class="cta-title">Planeje seu evento</h2>
        <p class="cta-subtitle">Nossa equipe está pronta para criar a experiência perfeita</p>
        <a class="cta-btn" href="<?php echo esc_url( arete_whatsapp_url() ); ?>" target="_blank" rel="noopener">Fale conosco</a>
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
    </script>
<?php get_footer(); ?>
