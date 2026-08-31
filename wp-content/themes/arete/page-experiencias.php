<?php
/**
 * Template: Página Experiências
 *
 * Réplica exata da página experiencias.html, com todo texto e imagem
 * editáveis via ACF (helpers arete_field/is/arete_image/arete_asset).
 *
 * @package AretêHotel
 */

// Fallbacks padrão.
$f = array(
	'hero_kicker'   => 'Experiências',
	'hero_title'    => 'Vivenciar',
	'hero_subtitle' => 'Momentos que viram memórias',
	'hero_scroll'   => 'Descobrir',
);
?>
<?php get_header(); ?>

    <section class="hero hero-experiencias hero-subpage" style="background-image:url('<?php echo esc_url( arete_image( 'experiencias_hero_bg', 'shared/DSCF4486.avif' ) ); ?>')">
      <div class="hero-inner">
        <div class="hero-kicker"><?php echo esc_html( arete_field( 'experiencias_hero_kicker', $f['hero_kicker'] ) ); ?></div>
        <h1 class="hero-title"><?php echo esc_html( arete_field( 'experiencias_hero_title', $f['hero_title'] ) ); ?></h1>
        <p class="hero-subtitle"><?php echo esc_html( arete_field( 'experiencias_hero_subtitle', $f['hero_subtitle'] ) ); ?></p>
      </div>
      <div class="hero-scroll">
        <span class="hero-scroll-text"><?php echo esc_html( arete_field( 'experiencias_hero_scroll', $f['hero_scroll'] ) ); ?></span>
        <div class="hero-scroll-line"></div>
      </div>
    </section>

    <!-- Citação -->
    <section class="manifesto manifesto--spaced manifesto--no-lines">
      <div class="manifesto-inner">
        <p class="manifesto-text"><?php echo wp_kses_post( arete_field( 'experiencias_quote_text', 'Do wellness ao artesanato, do pôr do sol ao sabor da região. Experiências pensadas para quem busca algo além do comum, no seu próprio ritmo.' ) ); ?></p>
        <a class="btn-outline" href="<?php echo esc_url( arete_whatsapp_url() ); ?>" target="_blank" rel="noopener" style="margin-top: 32px;"><?php echo esc_html( arete_field( 'experiencias_quote_btn', 'Viva essa experiência' ) ); ?></a>
      </div>
    </section>

    <!-- Experiências Hub -->
    <section class="hub">
      <?php
      $hub = get_field( 'experiencias_hub' );
      if ( ! empty( $hub ) ) :
        foreach ( $hub as $panel ) :
          $bg  = ! empty( $panel['bg'] ) ? $panel['bg'] : '';
          $pos = ! empty( $panel['pos'] ) ? $panel['pos'] : 'center';
          ?>
          <div class="hub-panel">
            <div class="hub-panel-bg" style="background-image: url('<?php echo esc_url( arete_asset_or_url( $bg ) ); ?>'); background-position: <?php echo esc_attr( $pos ); ?>;"></div>
            <div class="hub-panel-overlay"></div>
            <div class="hub-panel-content">
              <h2 class="hub-title"><?php echo esc_html( $panel['title'] ); ?></h2>
              <p class="hub-subtitle"><?php echo esc_html( $panel['subtitle'] ); ?></p>
            </div>
          </div>
          <?php
        endforeach;
      else :
        $default_panels = array(
			array( 'img' => 'hotel/HOTEL-FILOSOFIA.avif', 'pos' => 'center', 'title' => 'Sala Wellness', 'subtitle' => 'Relaxamento e equilíbrio' ),
			array( 'img' => 'shared/DSCF4719.avif', 'pos' => 'center calc(50% - 100px)', 'title' => 'Sala de Treino', 'subtitle' => 'Saúde e disposição' ),
			array( 'img' => 'shared/DSCF4811.avif', 'pos' => 'center', 'title' => 'Piscina', 'subtitle' => 'Descanso ao ar livre' ),
			array( 'img' => 'new/_MG_3266.avif', 'pos' => 'center', 'title' => 'Restaurante', 'subtitle' => 'Sabores da região' ),
        );
        foreach ( $default_panels as $panel ) :
          ?>
          <div class="hub-panel">
            <div class="hub-panel-bg" style="background-image: url('<?php echo esc_url( arete_asset( $panel['img'] ) ); ?>'); background-position: <?php echo esc_attr( $panel['pos'] ); ?>;"></div>
            <div class="hub-panel-overlay"></div>
            <div class="hub-panel-content">
              <h2 class="hub-title"><?php echo esc_html( $panel['title'] ); ?></h2>
              <p class="hub-subtitle"><?php echo esc_html( $panel['subtitle'] ); ?></p>
            </div>
          </div>
          <?php
        endforeach;
      endif;
      ?>
    </section>

    <!-- Área de Lazer -->
    <section class="manifesto manifesto--spaced manifesto--no-lines" style="background: #077F8C;">
      <div class="manifesto-inner">
        <p class="manifesto-text" style="color: #fff;"><?php echo wp_kses_post( arete_field( 'experiencias_leisure_text', 'Tudo em um só lugar, com conforto, sofisticação e o padrão de excelência que define a experiência Aretê.' ) ); ?></p>
      </div>
    </section>

    <!-- Concierge -->
    <section class="nature-split">
      <div class="nature-split-image" style="background-image:url('<?php echo esc_url( arete_image( 'experiencias_concierge_img', 'shared/DSCF4917.avif' ) ); ?>');background-position:center;background-size:cover" aria-hidden="true"></div>
      <div class="nature-split-content">
        <div class="eyebrow"><?php echo esc_html( arete_field( 'experiencias_concierge_eyebrow', 'Concierge' ) ); ?></div>
        <h2 class="nature-split-title"><?php echo esc_html( arete_field( 'experiencias_concierge_title1', 'Criamos experiências' ) ); ?><br><?php echo esc_html( arete_field( 'experiencias_concierge_title2', 'únicas para você' ) ); ?></h2>
        <p class="nature-split-text"><?php echo wp_kses_post( arete_field( 'experiencias_concierge_text', 'Nossa concierge seleciona os melhores profissionais de Búzios para criar a experiência ideal. Consulte-nos antecipadamente para conhecer nossos pacotes de experiências, tudo personalizado de acordo com suas preferências, do pôr do sol à lua cheia.' ) ); ?></p>
        <a class="btn-outline" href="<?php echo esc_url( arete_whatsapp_url() ); ?>" target="_blank" rel="noopener"><?php echo esc_html( arete_field( 'experiencias_concierge_btn', 'Falar com o concierge' ) ); ?></a>
      </div>
    </section>

    <!-- Produtos Exclusivos -->
    <section class="nature-split nature-split-img-first">
      <div class="nature-split-content">
        <div class="eyebrow"><?php echo esc_html( arete_field( 'experiencias_crafts_eyebrow', 'Artesanato' ) ); ?></div>
        <h2 class="nature-split-title"><?php echo esc_html( arete_field( 'experiencias_crafts_title1', 'Produtos Exclusivos' ) ); ?><br><?php echo esc_html( arete_field( 'experiencias_crafts_title2', 'Aretê' ) ); ?></h2>
        <p class="nature-split-text"><?php echo wp_kses_post( arete_field( 'experiencias_crafts_text', 'Você estará cercado por itens desenvolvidos com exclusividade, por renomados artesãos. São diversos itens de cerâmica criados por Alice Felzenszwalb, Taciana Amorim, Ana Sanchez, Grupo Tupinambá e Cecília Cesário Alvim, que compõem os ambientes do Hotel e das suítes.' ) ); ?></p>
      </div>
      <div class="nature-split-image" style="background-image:url('<?php echo esc_url( arete_image( 'experiencias_crafts_img', 'shared/DSCF4040.avif' ) ); ?>')" aria-hidden="true"></div>
    </section>

    <!-- Picnic Arêtê -->
    <section class="nature-split nature-split-dark">
      <div class="nature-split-image" style="background-image:url('<?php echo esc_url( arete_image( 'experiencias_picnic_img', 'shared/DSCF4925.avif' ) ); ?>')" aria-hidden="true"></div>
      <div class="nature-split-content">
        <div class="eyebrow"><?php echo esc_html( arete_field( 'experiencias_picnic_eyebrow', 'Momento Exclusivo' ) ); ?></div>
        <h2 class="nature-split-title"><?php echo esc_html( arete_field( 'experiencias_picnic_title1', 'Picnic' ) ); ?><br><?php echo esc_html( arete_field( 'experiencias_picnic_title2', 'Aretê' ) ); ?></h2>
        <p class="nature-split-text"><?php echo wp_kses_post( arete_field( 'experiencias_picnic_text1', 'Um cesto personalizado, uma toalha no gramado e um cenário de Búzios. O Picnic Hotel Aretê é uma experiência de desaceleração, sem pressa, sem ruído, apenas o som da natureza e sabores selecionados pelo nosso restaurante.' ) ); ?></p>
        <p class="nature-split-text"><?php echo wp_kses_post( arete_field( 'experiencias_picnic_text2', 'Ideal para casais, famílias ou grupos de amigos que buscam um momento íntimo e memorável às margens dos canais navegáveis.' ) ); ?></p>
        <a class="btn-outline-light" href="<?php echo esc_url( arete_whatsapp_url() ); ?>" target="_blank" rel="noopener"><?php echo esc_html( arete_field( 'experiencias_picnic_btn', 'Reservar Picnic' ) ); ?></a>
      </div>
    </section>

    <!-- Experiências com Parceiros -->
    <section class="experiences-list">
      <div class="experiences-list-inner">
        <div class="eyebrow"><?php echo esc_html( arete_field( 'experiencias_partners_eyebrow', 'Curadoria' ) ); ?></div>
        <h2 class="section-heading"><?php echo esc_html( arete_field( 'experiencias_partners_title1', 'Experiências' ) ); ?><br><em><?php echo esc_html( arete_field( 'experiencias_partners_title_em', 'com parceiros' ) ); ?></em></h2>
        <p class="copy-text" style="max-width:640px;margin:0 auto 64px;text-align:center;"><?php echo wp_kses_post( arete_field( 'experiencias_partners_text', 'Trabalhamos com profissionais selecionados de Búzios para oferecer experiências personalizadas.' ) ); ?></p>
        <div class="experiences-items">
          <?php
          $partner_rows = get_field( 'experiencias_partners_rows' );
          if ( ! empty( $partner_rows ) ) :
            foreach ( $partner_rows as $row ) :
              ?>
              <div class="experience-row">
                <span class="experience-num"><?php echo esc_html( $row['num'] ); ?></span>
                <h3 class="experience-name"><?php echo esc_html( $row['name'] ); ?></h3>
                <p class="experience-desc"><?php echo wp_kses_post( $row['desc'] ); ?></p>
              </div>
              <?php
            endforeach;
          else :
            $partner_defaults = array(
				array( 'num' => '01', 'name' => 'Aula de Yoga', 'desc' => 'Sessões ao ar livre nos canais navegáveis, com instrutores especializados em meditação e movimento.' ),
				array( 'num' => '02', 'name' => 'Massagem', 'desc' => 'Terapeutas renomados de Búzios, com tratamentos personalizados no conforto da sua suíte ou ao ar livre.' ),
				array( 'num' => '03', 'name' => 'Aula de Wingfoil', 'desc' => 'Navegue com as asas do vento nas praias mais protegidas de Búzios com instrutores certificados.' ),
				array( 'num' => '04', 'name' => 'Mergulho', 'desc' => 'Explore os recifes e a vida marinha da Costa Verde com guias especializados em mergulho.' ),
				array( 'num' => '05', 'name' => 'Bicicleta', 'desc' => 'Percorra trilhas e caminhos pela mata e pelos canais com bikes disponíveis para os hóspedes.' ),
				array( 'num' => '06', 'name' => 'Beach Tênis', 'desc' => 'Quadras disponíveis nas praias de Búzios, com equipamento incluso para partida ou aula.' ),
            );
            foreach ( $partner_defaults as $row ) :
              ?>
              <div class="experience-row">
                <span class="experience-num"><?php echo esc_html( $row['num'] ); ?></span>
                <h3 class="experience-name"><?php echo esc_html( $row['name'] ); ?></h3>
                <p class="experience-desc"><?php echo esc_html( $row['desc'] ); ?></p>
              </div>
              <?php
            endforeach;
          endif;
          ?>
        </div>
      </div>
    </section>

    <!-- Programação da Cidade -->
    <section class="city-events" style="background: #fff; padding: 80px 10%;">
      <div class="city-events-inner">
        <div class="eyebrow"><?php echo esc_html( arete_field( 'experiencias_events_eyebrow', 'Calendário da Cidade' ) ); ?></div>
        <h2 class="section-heading"><?php echo esc_html( arete_field( 'experiencias_events_title1', 'O ano inteiro,' ) ); ?><br><em><?php echo esc_html( arete_field( 'experiencias_events_title_em', 'um evento acontecendo' ) ); ?></em></h2>
        <p class="copy-text" style="max-width:640px;margin:0 auto 40px;text-align:center;"><?php echo wp_kses_post( arete_field( 'experiencias_events_text', 'Búzios se move o ano todo. Festivais musicais, corridas, regatas e degustações transformam a cidade em cada estação. As datas indicadas servem como referência e podem alterar ano a ano.' ) ); ?></p>
        <div class="experiences-items">
          <?php
          $event_rows = get_field( 'experiencias_events_rows' );
          if ( ! empty( $event_rows ) ) :
            foreach ( $event_rows as $row ) :
              ?>
              <div class="experience-row">
                <h3 class="experience-name"><?php echo esc_html( $row['name'] ); ?></h3>
                <p class="experience-desc"><?php echo wp_kses_post( $row['desc'] ); ?></p>
              </div>
              <?php
            endforeach;
          else :
            $event_defaults = array(
				array( 'name' => 'X-Run Búzios', 'desc' => 'Prova de corrida com percursos de 3 km, 6 km e 12 km por cenários icônicos da cidade, como Orla Bardot, Praia da Armação e Praia dos Ossos.' ),
				array( 'name' => 'Búzios Sailing Week', 'desc' => 'Uma das maiores regatas de vela oceânica do Brasil, realizada no Iate Clube Armação de Búzios com grandes nomes da vela nacional.' ),
				array( 'name' => 'Búzios Jazz Festival', 'desc' => 'Nove shows gratuitos de jazz, blues e música instrumental na Praça Santos Dumont durante o feriado do Dia do Trabalhador.' ),
				array( 'name' => 'Wine in Búzios', 'desc' => 'Maior festival de vinhos da Região dos Lagos. Feira com mais de 80 rótulos, shows ao vivo e o tradicional Wine Boat.' ),
				array( 'name' => 'Degusta Búzios', 'desc' => 'Celebrado festival gastronômico da Região dos Lagos. Pratos exclusivos de chefs nacionais e internacionais, música e cultura pelas ruas do centro.' ),
				array( 'name' => 'Hero SwimRun', 'desc' => 'Primeira prova de SwimRun do Brasil e uma das mais belas do mundo. Combina corrida e natação em águas abertas por praias e trilhas.' ),
				array( 'name' => 'Meia Maratona de Búzios', 'desc' => 'Prova de 21 km com percurso por praias, trilhas e pontos turísticos da cidade. Largada e chegada na Praça da Ferradura.' ),
            );
            foreach ( $event_defaults as $row ) :
              ?>
              <div class="experience-row">
                <h3 class="experience-name"><?php echo esc_html( $row['name'] ); ?></h3>
                <p class="experience-desc"><?php echo esc_html( $row['desc'] ); ?></p>
              </div>
              <?php
            endforeach;
          endif;
          ?>
        </div>
      </div>
    </section>

    <!-- CTA Final -->
    <section class="cta-section manifesto--wide" style="background: #004485;">
      <div class="cta-inner">
        <h2 class="cta-title"><?php echo esc_html( arete_field( 'experiencias_cta_title', 'Pronto para descobrir?' ) ); ?></h2>
        <p class="cta-subtitle"><?php echo esc_html( arete_field( 'experiencias_cta_subtitle', 'Entre em contato e criamos juntos a experiência perfeita em Búzios' ) ); ?></p>
        <a class="cta-btn" href="<?php echo esc_url( arete_whatsapp_url() ); ?>" target="_blank" rel="noopener"><?php echo esc_html( arete_field( 'experiencias_cta_btn', 'Fale conosco' ) ); ?></a>
      </div>
    </section>
<?php get_footer(); ?>
