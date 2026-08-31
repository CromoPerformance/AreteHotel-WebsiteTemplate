<?php
/**
 * Template: Página O Hotel
 *
 * Réplica exata da página hotel.html.
 *
 * @package AretêHotel
 */
?>
<?php get_header(); ?>

    <!-- Hero -->
    <section class="hero hero-hotel hero-subpage" id="hero" style="background-image:url('<?php echo esc_url( arete_asset( 'shared/DSCF4556.avif' ) ); ?>')">
      <div class="hero-inner">
        <div class="hero-kicker">O Hotel</div>
        <h1 class="hero-title">Aretê</h1>
        <p class="hero-subtitle">Um refúgio entre os canais navegáveis e a mata, onde cada detalhe foi pensado para o seu conforto.</p>
      </div>
      <div class="hero-scroll">
        <span class="hero-scroll-text">Descobrir</span>
        <div class="hero-scroll-line"></div>
      </div>
    </section>

    <!-- História -->
    <section class="manifesto manifesto--spaced manifesto--no-lines">
      <div class="manifesto-inner">
        <div class="eyebrow" style="margin-bottom: 32px;">História</div>
        <h2 class="section-heading" style="margin-bottom: 32px;">Nasceu de um<br><em>olhar</em></h2>
        <p class="manifesto-text" style="font-size: clamp(16px, 1.8vw, 24px); font-style: normal; max-width: 880px;">O Hotel Aretê nasceu da visão de que Búzios poderia ser vivido de outra forma. Não pela praia mais movimentada, mas pela escolha consciente de um lugar onde o tempo desacelera e a natureza conduz o ritmo dos dias.</p>
        <p class="manifesto-text" style="font-size: clamp(16px, 1.8vw, 24px); font-style: normal; max-width: 880px; margin-top: 16px;">O hotel integra o bairro Aretê, um refúgio de Búzios pensado para quem valoriza o mar, a natureza, o esporte e a tranquilidade. Aqui, a marina faz parte do cotidiano, o silêncio acompanha a paisagem e o cuidado está presente em cada detalhe.</p>
        <a class="btn-outline" href="<?php echo esc_url( arete_booking_url() ); ?>" target="_blank" rel="noopener" style="margin-top: 32px;">Reservar sua estadia</a>
      </div>
    </section>

    <!-- Galeria -->
    <section class="quad-gallery">
      <div class="quad-gallery-img" style="background-image:url('<?php echo esc_url( arete_asset( 'new/DSCF4028.avif' ) ); ?>')" aria-hidden="true"></div>
      <div class="quad-gallery-img" style="background-image:url('<?php echo esc_url( arete_asset( 'new/DSCF4130.avif' ) ); ?>')" aria-hidden="true"></div>
      <div class="quad-gallery-img" style="background-image:url('<?php echo esc_url( arete_asset( 'new/DSCF4152.avif' ) ); ?>')" aria-hidden="true"></div>
      <div class="quad-gallery-img" style="background-image:url('<?php echo esc_url( arete_asset( 'new/DSCF4147.avif' ) ); ?>')" aria-hidden="true"></div>
    </section>

    <!-- Manifesto -->
    <section class="manifesto manifesto--spaced manifesto--no-lines" id="hotel">
      <div class="manifesto-inner">
        <p class="manifesto-text">Um novo jeito de viver Búzios: por inteiro, do amanhecer ao pôr do sol. Aqui, cada detalhe foi pensado para que você não precise escolher entre conforto e natureza, entre sossego e experiência.</p>
      </div>
    </section>

    <!-- Pilares -->
    <section class="stats-section hotel-pillars">
      <div class="stats-inner">
        <div class="stat-block">
          <div class="stat-label">Viver</div>
          <div class="stat-desc">Longe do agito, perto de tudo que importa.</div>
        </div>
        <div class="stat-block">
          <div class="stat-label">Sentir</div>
          <div class="stat-desc">O cheiro do café da manhã, o conforto da suíte, a luz da marina no fim da tarde.</div>
        </div>
        <div class="stat-block">
          <div class="stat-label">Pertencer</div>
          <div class="stat-desc">Seu tempo, seu ritmo, seu lugar.</div>
        </div>
      </div>
    </section>

    <!-- Diferenciais -->
    <section class="differentials">
      <div class="differentials-header">
        <div class="eyebrow">Exclusividade</div>
        <h2 class="differentials-title">Diferenciais Aretê</h2>
      </div>
      <div class="differentials-list">
        <div class="diff-item">
          <div class="diff-numeral">01</div>
          <div class="diff-content">
            <h3 class="diff-heading">Completo Apoio Náutico</h3>
            <p class="diff-text">O Hotel Aretê em conjunto com a BR Marinas Búzios proporcionam a comodidade de ancorar seu barco bem em frente ao Hotel. Vagas para barcos de até 55 pés.</p>
          </div>
        </div>
        <div class="diff-item">
          <div class="diff-numeral">02</div>
          <div class="diff-content">
            <h3 class="diff-heading">Aeroporto Umberto Modiano</h3>
            <p class="diff-text">Com o aeroporto a apenas 7 minutos da recepção do Hotel Aretê, você chega mais rápido e aproveita as delícias de Búzios sem pressa.</p>
          </div>
        </div>
        <div class="diff-item">
          <div class="diff-numeral">03</div>
          <div class="diff-content">
            <h3 class="diff-heading">Beach Club Aretê</h3>
            <p class="diff-text">O Beach Club Aretê fica a 2 minutos de carro, com acesso liberado para hóspedes. Restaurante com deck, piscina, sauna seca e a vapor, spa e área kids, pé na areia, sem multidão.</p>
          </div>
        </div>
        <div class="diff-item">
          <div class="diff-numeral">04</div>
          <div class="diff-content">
            <h3 class="diff-heading">Gastronomia Autoral</h3>
            <p class="diff-text">Horta própria, produção artesanal, culinária local, e o melhor lugar da marina para ver o sol se pôr.</p>
          </div>
        </div>
      </div>
      <div style="text-align: center; margin-top: 48px;">
        <a class="btn-outline" href="<?php echo esc_url( arete_booking_url() ); ?>" target="_blank" rel="noopener">Reservar sua estadia</a>
      </div>
    </section>

    <!-- Natureza & Localização -->
    <section class="nature-split nature-split-reverse nature-split--img-bottom">
      <div class="nature-split-content">
        <div class="eyebrow">Natureza &amp; Localização</div>
        <h2 class="nature-split-title">Aqui a natureza<br>é a anfitriã</h2>
        <p class="nature-split-text">A vista do quarto encontra os barcos ancorados no cais. O restaurante guarda o melhor lugar para o pôr do sol. E o deck convida a parar, nem que seja por um instante.</p>
        <p class="nature-split-text">A vegetação nativa chegou primeiro. O bairro Aretê nasceu ao redor dela. E o verde aparece em cada esquina.</p>
      </div>
      <div class="nature-split-image" aria-hidden="true"></div>
    </section>

    <!-- Sustentabilidade -->
    <section class="nature-split">
      <div class="nature-split-content" style="background-color: white;">
        <div class="eyebrow">Sustentabilidade</div>
        <h2 class="nature-split-title">O destino final<br>nos importa</h2>
        <p class="nature-split-text">Acreditamos que cada escolha pode gerar um impacto positivo no meio ambiente. Por isso, fazemos:</p>
        <ul class="sust-list">
          <li class="sust-item">
            <span class="sust-item-icon" style="background-image:url('<?php echo esc_url( arete_asset( 'grafismos/compostagem.png' ) ); ?>')"></span>
            <span class="sust-item-label"><strong>Compostagem</strong> de resíduos orgânicos</span>
          </li>
          <li class="sust-item">
            <span class="sust-item-icon" style="background-image:url('<?php echo esc_url( arete_asset( 'grafismos/reciclagem.png' ) ); ?>')"></span>
            <span class="sust-item-label"><strong>Reciclagem</strong> através de ecopontos para separação</span>
          </li>
          <li class="sust-item">
            <span class="sust-item-icon" style="background-image:url('<?php echo esc_url( arete_asset( 'grafismos/ammenities.png' ) ); ?>')"></span>
            <span class="sust-item-label"><strong>Amenities Sustentáveis</strong> em embalagens permanentes e recarregáveis</span>
          </li>
          <li class="sust-item">
            <span class="sust-item-icon" style="background-image:url('<?php echo esc_url( arete_asset( 'grafismos/gimba.png' ) ); ?>')"></span>
            <span class="sust-item-label"><strong>Reciclagem de Guimbas</strong> em parceria com a Poiato</span>
          </li>
          <li class="sust-item">
            <span class="sust-item-icon" style="background-image:url('<?php echo esc_url( arete_asset( 'grafismos/reaproveitamento.png' ) ); ?>')"></span>
            <span class="sust-item-label"><strong>Reaproveitamento</strong> de enxovais que ganham nova vida</span>
          </li>
        </ul>
      </div>
      <div class="nature-split-image" style="background: url('<?php echo esc_url( arete_asset( 'new/DSCF4020.jpg' ) ); ?>') center center / cover no-repeat;" aria-hidden="true"></div>
    </section>

    <!-- Equipe & Bastidores -->
    <section class="nature-split nature-split-reverse">
      <div class="nature-split-content">
        <div class="eyebrow">Equipe &amp; Bastidores</div>
        <h2 class="nature-split-title">Um time que cuida</h2>
        <p class="nature-split-text">Que faz você se sentir em casa, mesmo longe dela. Antecipa o que você precisa e acolhe de verdade.</p>
      </div>
      <div class="nature-split-image nature-split-dual">
        <div class="nature-split-dual-item" style="background-image:url('<?php echo esc_url( arete_asset( 'shared/DSCF4153.avif' ) ); ?>')" aria-hidden="true"></div>
        <div class="nature-split-dual-item" style="background-image:url('<?php echo esc_url( arete_asset( 'shared/DSCF4104.avif' ) ); ?>')" aria-hidden="true"></div>
      </div>
    </section>

    <!-- Dog Friendly -->
    <section class="nature-split nature-split-reverse">
      <div class="nature-split-content">
        <div class="eyebrow">Dog Friendly</div>
        <h2 class="nature-split-title">Seu companheiro<br>é bem-vindo</h2>
        <p class="nature-split-text">No Hotel Aretê, apoiamos a causa animal com ações de castração e adoção responsável. Sabemos que a experiência é mais completa quando todos estão juntos, por isso, somos dog friendly e oferecemos um ambiente preparado para hospedar seu companheiro de viagem.</p>
        <p class="nature-split-text">Consulte nossa recepção para verificar disponibilidade do seu pet e conhecer nosso Termo Pet com condições e regras.</p>
      </div>
      <div class="nature-split-gallery">
        <div class="nature-split-gallery-item" style="background-image:url('<?php echo esc_url( arete_asset( 'shared/DSCF4776.avif' ) ); ?>')" aria-hidden="true"></div>
        <div class="nature-split-gallery-item" style="background-image:url('<?php echo esc_url( arete_asset( 'shared/DSCF4735.avif' ) ); ?>');background-position:bottom" aria-hidden="true"></div>
        <div class="nature-split-gallery-item" style="background-image:url('<?php echo esc_url( arete_asset( 'shared/DSCF4103.jpg' ) ); ?>');background-position:center" aria-hidden="true"></div>
      </div>
    </section>

    <!-- CTA -->
    <section class="cta-section cta-compact">
      <div class="cta-inner">
        <div class="cta-eyebrow">Sua estadia começa aqui</div>
        <h2 class="cta-title">Reserve sua experiência</h2>
        <p class="cta-subtitle">Cada detalhe pensado para o seu conforto e bem-estar</p>
        <a class="cta-btn" href="<?php echo esc_url( arete_booking_url() ); ?>" target="_blank" rel="noopener">Verificar disponibilidade</a>
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
