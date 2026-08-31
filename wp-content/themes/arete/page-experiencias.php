<?php
/**
 * Template: Página Experiências
 *
 * Réplica exata da página experiencias.html.
 *
 * @package AretêHotel
 */
?>
<?php get_header(); ?>

    <section class="hero hero-experiencias hero-subpage" style="background-image:url('<?php echo esc_url( arete_asset( 'shared/DSCF4486.avif' ) ); ?>')">
      <div class="hero-inner">
        <div class="hero-kicker">Experiências</div>
        <h1 class="hero-title">Vivenciar</h1>
        <p class="hero-subtitle">Momentos que viram memórias</p>
      </div>
      <div class="hero-scroll">
        <span class="hero-scroll-text">Descobrir</span>
        <div class="hero-scroll-line"></div>
      </div>
    </section>

    <!-- Citação -->
    <section class="manifesto manifesto--spaced manifesto--no-lines">
      <div class="manifesto-inner">
        <p class="manifesto-text">Do wellness ao artesanato, do pôr do sol ao sabor da região. Experiências pensadas para quem busca algo além do comum, no seu próprio ritmo.</p>
        <a class="btn-outline" href="<?php echo esc_url( arete_whatsapp_url() ); ?>" target="_blank" rel="noopener" style="margin-top: 32px;">Viva essa experiência</a>
      </div>
    </section>

    <!-- Experiências Hub -->
    <section class="hub">
      <div class="hub-panel">
        <div class="hub-panel-bg" style="background-image: url('<?php echo esc_url( arete_asset( 'hotel/HOTEL-FILOSOFIA.avif' ) ); ?>');"></div>
        <div class="hub-panel-overlay"></div>
        <div class="hub-panel-content">
          <h2 class="hub-title">Sala Wellness</h2>
          <p class="hub-subtitle">Relaxamento e equilíbrio</p>
        </div>
      </div>
      <div class="hub-panel">
        <div class="hub-panel-bg" style="background-image: url('<?php echo esc_url( arete_asset( 'shared/DSCF4719.avif' ) ); ?>'); background-position: center calc(50% - 100px);"></div>
        <div class="hub-panel-overlay"></div>
        <div class="hub-panel-content">
          <h2 class="hub-title">Sala de Treino</h2>
          <p class="hub-subtitle">Saúde e disposição</p>
        </div>
      </div>
      <div class="hub-panel">
        <div class="hub-panel-bg" style="background-image: url('<?php echo esc_url( arete_asset( 'shared/DSCF4811.avif' ) ); ?>'); background-position: center"></div>
        <div class="hub-panel-overlay"></div>
        <div class="hub-panel-content">
          <h2 class="hub-title">Piscina</h2>
          <p class="hub-subtitle">Descanso ao ar livre</p>
        </div>
      </div>
      <div class="hub-panel">
        <div class="hub-panel-bg" style="background-image: url('<?php echo esc_url( arete_asset( 'new/_MG_3266.avif' ) ); ?>'); background-position: center"></div>
        <div class="hub-panel-overlay"></div>
        <div class="hub-panel-content">
          <h2 class="hub-title">Restaurante</h2>
          <p class="hub-subtitle">Sabores da região</p>
        </div>
      </div>
    </section>

    <!-- Área de Lazer -->
    <section class="manifesto manifesto--spaced manifesto--no-lines" style="background: #077F8C;">
      <div class="manifesto-inner">
        <p class="manifesto-text" style="color: #fff;">Tudo em um só lugar, com conforto, sofisticação e o padrão de excelência que define a experiência Aretê.</p>
      </div>
    </section>

    <!-- Concierge -->
    <section class="nature-split">
      <div class="nature-split-image" style="background-image:url('<?php echo esc_url( arete_asset( 'shared/DSCF4917.avif' ) ); ?>');background-position:center;background-size:cover" aria-hidden="true"></div>
      <div class="nature-split-content">
        <div class="eyebrow">Concierge</div>
        <h2 class="nature-split-title">Criamos experiências<br>únicas para você</h2>
        <p class="nature-split-text">Nossa concierge seleciona os melhores profissionais de Búzios para criar a experiência ideal. Consulte-nos antecipadamente para conhecer nossos pacotes de experiências, tudo personalizado de acordo com suas preferências, do pôr do sol à lua cheia.</p>
        <a class="btn-outline" href="#">Falar com o concierge</a>
      </div>
    </section>

    <!-- Produtos Exclusivos -->
    <section class="nature-split nature-split-img-first">
      <div class="nature-split-content">
        <div class="eyebrow">Artesanato</div>
        <h2 class="nature-split-title">Produtos Exclusivos<br>Aretê</h2>
        <p class="nature-split-text">Você estará cercado por itens desenvolvidos com exclusividade, por renomados artesãos. São diversos itens de cerâmica criados por Alice Felzenszwalb, Taciana Amorim, Ana Sanchez, Grupo Tupinambá e Cecília Cesário Alvim, que compõem os ambientes do Hotel e das suítes.</p>
      </div>
      <div class="nature-split-image" style="background-image:url('<?php echo esc_url( arete_asset( 'shared/DSCF4040.avif' ) ); ?>')" aria-hidden="true"></div>
    </section>

    <!-- Picnic Arêtê -->
    <section class="nature-split nature-split-dark">
      <div class="nature-split-image" style="background-image:url('<?php echo esc_url( arete_asset( 'shared/DSCF4925.avif' ) ); ?>')" aria-hidden="true"></div>
      <div class="nature-split-content">
        <div class="eyebrow">Momento Exclusivo</div>
        <h2 class="nature-split-title">Picnic<br>Aretê</h2>
        <p class="nature-split-text">Um cesto personalizado, uma toalha no gramado e um cenário de Búzios. O Picnic Hotel Aretê é uma experiência de desaceleração, sem pressa, sem ruído, apenas o som da natureza e sabores selecionados pelo nosso restaurante.</p>
        <p class="nature-split-text">Ideal para casais, famílias ou grupos de amigos que buscam um momento íntimo e memorável às margens dos canais navegáveis.</p>
        <a class="btn-outline-light" href="<?php echo esc_url( arete_whatsapp_url() ); ?>" target="_blank" rel="noopener">Reservar Picnic</a>
      </div>
    </section>

    <!-- Experiências -->
    <section class="experiences-list">
      <div class="experiences-list-inner">
        <div class="eyebrow">Curadoria</div>
        <h2 class="section-heading">Experiências<br><em>com parceiros</em></h2>
        <p class="copy-text" style="max-width:640px;margin:0 auto 64px;text-align:center;">Trabalhamos com profissionais selecionados de Búzios para oferecer experiências personalizadas.</p>
        <div class="experiences-items">
          <div class="experience-row">
            <span class="experience-num">01</span>
            <h3 class="experience-name">Aula de Yoga</h3>
            <p class="experience-desc">Sessões ao ar livre nos canais navegáveis, com instrutores especializados em meditação e movimento.</p>
          </div>
          <div class="experience-row">
            <span class="experience-num">02</span>
            <h3 class="experience-name">Massagem</h3>
            <p class="experience-desc">Terapeutas renomados de Búzios, com tratamentos personalizados no conforto da sua suíte ou ao ar livre.</p>
          </div>
          <div class="experience-row">
            <span class="experience-num">03</span>
            <h3 class="experience-name">Aula de Wingfoil</h3>
            <p class="experience-desc">Navegue com as asas do vento nas praias mais protegidas de Búzios com instrutores certificados.</p>
          </div>
          <div class="experience-row">
            <span class="experience-num">04</span>
            <h3 class="experience-name">Mergulho</h3>
            <p class="experience-desc">Explore os recifes e a vida marinha da Costa Verde com guias especializados em mergulho.</p>
          </div>
          <div class="experience-row">
            <span class="experience-num">05</span>
            <h3 class="experience-name">Bicicleta</h3>
            <p class="experience-desc">Percorra trilhas e caminhos pela mata e pelos canais com bikes disponíveis para os hóspedes.</p>
          </div>
          <div class="experience-row">
            <span class="experience-num">06</span>
            <h3 class="experience-name">Beach Tênis</h3>
            <p class="experience-desc">Quadras disponíveis nas praias de Búzios, com equipamento incluso para partida ou aula.</p>
          </div>
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

    <!-- CTA Final -->
    <section class="cta-section manifesto--wide" style="background: #004485;">
      <div class="cta-inner">
        <h2 class="cta-title">Pronto para descobrir?</h2>
        <p class="cta-subtitle">Entre em contato e criamos juntos a experiência perfeita em Búzios</p>
        <a class="cta-btn" href="<?php echo esc_url( arete_whatsapp_url() ); ?>" target="_blank" rel="noopener">Fale conosco</a>
      </div>
    </section>
<?php get_footer(); ?>
