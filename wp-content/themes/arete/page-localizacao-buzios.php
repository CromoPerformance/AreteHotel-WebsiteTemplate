<?php
/**
 * Template: Página Localização & Búzios
 *
 * Réplica exata da página localizacao.html, com conteúdo editável via ACF.
 *
 * @package AretêHotel
 */
?>
<?php get_header(); ?>

<?php
    $hero = (array) arete_field( 'localizacao_hero', array() );
    $hero_bg       = ( ! empty( $hero['bg'] ) && is_array( $hero['bg'] ) && ! empty( $hero['bg']['url'] ) ) ? $hero['bg']['url'] : arete_asset( 'new/DSCF5357.avif' );
    $hero_kicker   = ! empty( $hero['kicker'] )   ? $hero['kicker']   : 'Localização';
    $hero_title    = ! empty( $hero['title'] )    ? $hero['title']    : 'A Marina';
    $hero_subtitle = ! empty( $hero['subtitle'] ) ? $hero['subtitle'] : 'Náutico, silencioso e preservado';
    $hero_scroll   = ! empty( $hero['scroll'] )   ? $hero['scroll']   : 'Descobrir';
    ?>
    <!-- Hero -->
    <section class="hero hero-buzios hero-subpage" style="background-image:url('<?php echo esc_url( $hero_bg ); ?>')">
      <div class="hero-inner">
        <div class="hero-kicker"><?php echo esc_html( $hero_kicker ); ?></div>
        <h1 class="hero-title"><?php echo esc_html( $hero_title ); ?></h1>
        <p class="hero-subtitle"><?php echo esc_html( $hero_subtitle ); ?></p>
      </div>
      <div class="hero-scroll">
        <span class="hero-scroll-text"><?php echo esc_html( $hero_scroll ); ?></span>
        <div class="hero-scroll-line"></div>
      </div>
    </section>

    <?php
    $life = (array) arete_field( 'localizacao_lifestyle', array() );
    $life_eyebrow = ! empty( $life['eyebrow'] ) ? $life['eyebrow'] : 'Lifestyle Náutico';
    $life_title1  = ! empty( $life['title1'] )  ? $life['title1']  : 'Viva a marina';
    $life_title_em= ! empty( $life['title_em'] )? $life['title_em']: 'do seu jeito';
    $life_cols_defaults = array(
		array( 'name' => 'Passeios Privativos', 'desc' => 'Rotas personalizadas pelas praias e ilhas de Búzios, com tripulação exclusiva.' ),
		array( 'name' => 'Saída ao Amanhecer', 'desc' => 'Navegue com o nascer do sol, quando o mar está mais calmo e os tons de rosa pintam o céu.' ),
		array( 'name' => 'Off Búzios', 'desc' => 'Descubra praias desertas e enseadas secretas, longe dos roteiros tradicionais.' ),
    );
    $life_cols = array();
    if ( function_exists( 'have_rows' ) && have_rows( 'localizacao_lifestyle_columns' ) ) {
		while ( have_rows( 'localizacao_lifestyle_columns' ) ) { the_row(); $life_cols[] = array( 'name' => get_sub_field( 'name' ), 'desc' => get_sub_field( 'desc' ) ); }
    }
    if ( empty( $life_cols ) ) { $life_cols = $life_cols_defaults; }
    ?>
    <!-- Manifesto -->
    <section class="manifesto manifesto--spaced manifesto--no-lines">
      <div class="manifesto-inner">
        <div class="eyebrow" style="margin-bottom: 32px;"><?php echo esc_html( $life_eyebrow ); ?></div>
        <h2 class="section-heading" style="margin-bottom: 48px;"><?php echo esc_html( $life_title1 ); ?><br><em><?php echo esc_html( $life_title_em ); ?></em></h2>
        <div class="marina-columns">
          <?php foreach ( $life_cols as $col ) : ?>
          <div class="marina-column">
            <div class="marina-column-name"><?php echo esc_html( $col['name'] ); ?></div>
            <div class="marina-column-desc"><?php echo wp_kses_post( $col['desc'] ); ?></div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <?php
    $marina = (array) arete_field( 'localizacao_marina', array() );
    $marina_bg       = ( ! empty( $marina['bg'] ) && is_array( $marina['bg'] ) && ! empty( $marina['bg']['url'] ) ) ? $marina['bg']['url'] : arete_asset( 'new/23022022-IMG_3862.avif' );
    $marina_eyebrow  = ! empty( $marina['eyebrow'] )  ? $marina['eyebrow']  : 'Localização';
    $marina_title    = ! empty( $marina['title'] )    ? $marina['title']    : 'Equilíbrio e silêncio';
    $marina_subtitle = ! empty( $marina['subtitle'] ) ? $marina['subtitle'] : 'O Hotel Aretê está na Marina de Búzios, em um dos pontos mais preservados da região. Natureza, silêncio e sofisticação no mesmo lugar. É o refúgio ideal para quem busca uma experiência restauradora, sem abrir mão do conforto.';
    $marina_btn      = ! empty( $marina['btn'] )      ? $marina['btn']      : 'Conheça nossas suítes';
    ?>
    <!-- Localização -->
    <section class="marina-hero marina-hero--right">
      <div class="marina-hero-bg" style="background-image: url('<?php echo esc_url( $marina_bg ); ?>');"></div>
      <div class="marina-hero-overlay"></div>
      <div class="marina-hero-content">
        <div class="marina-eyebrow"><?php echo esc_html( $marina_eyebrow ); ?></div>
        <h2 class="marina-title"><?php echo esc_html( $marina_title ); ?></h2>
        <p class="marina-subtitle"><?php echo wp_kses_post( $marina_subtitle ); ?></p>
        <a class="cta-btn" href="<?php echo esc_url( arete_booking_url() ); ?>" target="_blank" rel="noopener" style="margin-top: 24px;"><?php echo esc_html( $marina_btn ); ?></a>
      </div>
    </section>

    <?php
    $guide = (array) arete_field( 'localizacao_guide', array() );
    $guide_embed    = ! empty( $guide['embed'] ) ? $guide['embed'] : 'https://www.google.com/maps/d/embed?mid=1-yidErlCwBpbFpTRUfENuZL7_s6BT2k&ehbc=2E312F&noprof=1';
    $guide_eyebrow = ! empty( $guide['eyebrow'] ) ? $guide['eyebrow'] : 'Guia Local';
    $guide_title   = ! empty( $guide['title'] )   ? $guide['title']   : 'Logo ali, perto do hotel';
    $guide_points_defaults = array(
		array( 'num' => '1', 'name' => 'BR Marinas', 'distance' => '80 m', 'text' => 'A marina em frente ao hotel, com infraestrutura para embarcações de até 55 pés.' ),
		array( 'num' => '2', 'name' => 'Mirante do Pai Vitório', 'distance' => '5,8 km', 'text' => 'Com uma vista deslumbrante, esse local é candidato a Geoparque Mundial da UNESCO.' ),
		array( 'num' => '3', 'name' => 'Mangue de Pedras', 'distance' => '5,5 km', 'text' => 'Um dos poucos manguezais de pedra do mundo, a poucos minutos do hotel.' ),
		array( 'num' => '4', 'name' => 'Praia Rasa', 'distance' => '1,2 km', 'text' => 'A praia mais próxima do hotel, ideal para kitesurf, windsurf e caminhadas na areia.' ),
		array( 'num' => '5', 'name' => 'Aeroporto Umberto', 'distance' => '3 km', 'text' => 'Apenas 7 minutos do hotel. Voos nacionais e internacionais.' ),
    );
    $guide_points = array();
    if ( function_exists( 'have_rows' ) && have_rows( 'localizacao_guide_points' ) ) {
		while ( have_rows( 'localizacao_guide_points' ) ) { the_row(); $guide_points[] = array( 'num' => get_sub_field( 'num' ), 'name' => get_sub_field( 'name' ), 'distance' => get_sub_field( 'distance' ), 'text' => get_sub_field( 'text' ) ); }
    }
    if ( empty( $guide_points ) ) { $guide_points = $guide_points_defaults; }
    ?>
    <!-- Guia Local -->
    <section class="eco-section">
      <div class="eco-map">
        <iframe
          src="<?php echo esc_url( $guide_embed ); ?>"
          width="640" height="480"
          loading="lazy"
          allowfullscreen
          referrerpolicy="no-referrer-when-downgrade"
          title="Mapa do ecossistema Hotel Aretê"></iframe>
      </div>
      <div class="eco-blank">
        <div class="eco-list-inner">
          <span class="eco-list-eyebrow"><?php echo esc_html( $guide_eyebrow ); ?></span>
          <h2 class="eco-list-title"><?php echo esc_html( $guide_title ); ?></h2>
          <ol class="eco-asset-list">
            <?php foreach ( $guide_points as $gp ) : ?>
            <li class="eco-asset-item">
              <span class="eco-asset-num"><?php echo esc_html( $gp['num'] ); ?></span>
              <div class="eco-asset-info">
                <div class="eco-asset-name"><?php echo esc_html( $gp['name'] ); ?> <span class="eco-asset-distance"><?php echo esc_html( $gp['distance'] ); ?></span></div>
                <div class="eco-asset-dist">
                  <span class="eco-asset-text" style="color: rgba(36,56,84,0.55); font-size: 15px;"><?php echo wp_kses_post( $gp['text'] ); ?></span>
                </div>
              </div>
            </li>
            <?php endforeach; ?>
          </ol>
        </div>
      </div>
    </section>

    <?php
    $pen = (array) arete_field( 'localizacao_peninsula', array() );
    $pen_eyebrow = ! empty( $pen['eyebrow'] ) ? $pen['eyebrow'] : 'A Península';
    $pen_title1  = ! empty( $pen['title1'] )  ? $pen['title1']  : 'Um destino que';
    $pen_title2  = ! empty( $pen['title2'] )  ? $pen['title2']  : 'nunca decepciona';
    $pen_text1   = ! empty( $pen['text1'] )   ? $pen['text1']   : 'Búzios é uma cidade com alma: cosmopolita e acolhedora ao mesmo tempo. Com 27 praias, cada uma com sua personalidade, do agito de Geribá à tranquilidade de João Fernandinho, há sempre um cenário para cada momento.';
    $pen_text2   = ! empty( $pen['text2'] )   ? $pen['text2']   : 'A atmosfera náutica, o pôr do sol inesquecível e a gastronomia mediterrânea fazem de Búzios um dos destinos mais desejados do Brasil.';
    $pen_carousel_defaults = array( 'buzios/BUZIOS-HERO.avif', 'buzios/BUZIOS-AZEDA.avif', 'buzios/BUZIOS-MARINA.avif', 'new/orla-bardot.avif', 'new/Rua-das-Pedras-Viva-Buzios-Flats.avif', 'buzios/BUZIOS-ARMACAO.avif' );
    $pen_carousel = array();
    if ( function_exists( 'have_rows' ) && have_rows( 'localizacao_peninsula_carousel' ) ) {
		while ( have_rows( 'localizacao_peninsula_carousel' ) ) { the_row(); $ci = get_sub_field( 'img' ); if ( is_array( $ci ) && ! empty( $ci['url'] ) ) { $pen_carousel[] = $ci['url']; } }
    }
    if ( empty( $pen_carousel ) ) { $pen_carousel = array_map( 'arete_asset', $pen_carousel_defaults ); }
    ?>
    <!-- A Península -->
    <section class="nature-split nature-split--small">
      <div class="nature-split-content">
        <div class="eyebrow"><?php echo esc_html( $pen_eyebrow ); ?></div>
        <h2 class="nature-split-title"><?php echo esc_html( $pen_title1 ); ?><br><?php echo esc_html( $pen_title2 ); ?></h2>
        <p class="nature-split-text"><?php echo wp_kses_post( $pen_text1 ); ?></p>
        <p class="nature-split-text"><?php echo wp_kses_post( $pen_text2 ); ?></p>
      </div>
      <div class="peninsula-carousel">
        <div class="peninsula-carousel-track">
          <?php foreach ( $pen_carousel as $pci => $pen_img ) : ?>
          <div class="peninsula-slide<?php echo 0 === $pci ? ' active' : ''; ?>" style="background-image:url('<?php echo esc_url( $pen_img ); ?>')"></div>
          <?php endforeach; ?>
        </div>
        <button class="peninsula-carousel-btn prev" aria-label="Anterior">
          <svg viewBox="0 0 24 24" width="24" height="24"><path d="M15 18l-6-6 6-6" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </button>
        <button class="peninsula-carousel-btn next" aria-label="Próximo">
          <svg viewBox="0 0 24 24" width="24" height="24"><path d="M9 18l6-6-6-6" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </button>
        <div class="peninsula-carousel-dots">
          <?php foreach ( $pen_carousel as $pdi => $pdot ) : ?>
          <button class="peninsula-dot<?php echo 0 === $pdi ? ' active' : ''; ?>" data-index="<?php echo esc_attr( $pdi ); ?>" aria-label="Imagem <?php echo esc_attr( $pdi + 1 ); ?>"></button>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <?php
    $stats = (array) arete_field( 'localizacao_stats', array() );
    $stats_defaults = array(
		array( 'number' => '27', 'label' => 'Praias', 'sub' => 'de águas cristalinas' ),
		array( 'number' => '168', 'label' => 'Km do Rio', 'sub' => 'uma escapada perfeita' ),
		array( 'number' => '28°', 'label' => 'Temperatura Média', 'sub' => 'clima ameno o ano todo' ),
    );
    $stats_items = array();
    if ( function_exists( 'have_rows' ) && have_rows( 'localizacao_stats_items' ) ) {
		while ( have_rows( 'localizacao_stats_items' ) ) { the_row(); $stats_items[] = array( 'number' => get_sub_field( 'number' ), 'label' => get_sub_field( 'label' ), 'sub' => get_sub_field( 'sub' ) ); }
    }
    if ( empty( $stats_items ) ) { $stats_items = $stats_defaults; }
    ?>
    <!-- Estatísticas -->
    <section class="stats-section stats-section--buzios">
      <div class="stats-inner">
        <?php foreach ( $stats_items as $si2 => $stat ) : if ( $si2 > 0 ) { echo '<div class="stat-divider"></div>'; } ?>
        <div class="stat-col">
          <div class="stat-number"><?php echo esc_html( $stat['number'] ); ?></div>
          <div class="stat-label"><?php echo esc_html( $stat['label'] ); ?></div>
          <div class="stat-sub"><?php echo esc_html( $stat['sub'] ); ?></div>
        </div>
        <?php endforeach; ?>
      </div>
    </section>

    <?php
    $events = (array) arete_field( 'localizacao_events', array() );
    $events_eyebrow = ! empty( $events['eyebrow'] ) ? $events['eyebrow'] : 'Calendário da Cidade';
    $events_title1  = ! empty( $events['title1'] )  ? $events['title1']  : 'O ano inteiro,';
    $events_title_em= ! empty( $events['title_em'] )? $events['title_em']: 'um evento acontecendo';
    $events_text    = ! empty( $events['text'] )    ? $events['text']    : 'Búzios se move o ano todo. Festivais musicais, corridas, regatas e degustações transformam a cidade em cada estação. As datas indicadas servem como referência e podem alterar ano a ano.';
    $events_defaults = array(
		array( 'name' => 'X-Run Búzios', 'desc' => 'Prova de corrida com percursos de 3 km, 6 km e 12 km por cenários icônicos da cidade, como Orla Bardot, Praia da Armação e Praia dos Ossos.' ),
		array( 'name' => 'Búzios Sailing Week', 'desc' => 'Uma das maiores regatas de vela oceânica do Brasil, realizada no Iate Clube Armação de Búzios com grandes nomes da vela nacional.' ),
		array( 'name' => 'Búzios Jazz Festival', 'desc' => 'Nove shows gratuitos de jazz, blues e música instrumental na Praça Santos Dumont durante o feriado do Dia do Trabalhador.' ),
		array( 'name' => 'Wine in Búzios', 'desc' => 'Maior festival de vinhos da Região dos Lagos. Feira com mais de 80 rótulos, shows ao vivo e o tradicional Wine Boat.' ),
		array( 'name' => 'Degusta Búzios', 'desc' => 'Celebrado festival gastronômico da Região dos Lagos. Pratos exclusivos de chefs nacionais e internacionais, música e cultura pelas ruas do centro.' ),
		array( 'name' => 'Hero SwimRun', 'desc' => 'Primeira prova de SwimRun do Brasil e uma das mais belas do mundo. Combina corrida e natação em águas abertas por praias e trilhas.' ),
		array( 'name' => 'Meia Maratona de Búzios', 'desc' => 'Prova de 21 km com percurso por praias, trilhas e pontos turísticos da cidade. Largada e chegada na Praça da Ferradura.' ),
    );
    $events_rows = array();
    if ( function_exists( 'have_rows' ) && have_rows( 'localizacao_events_rows' ) ) {
		while ( have_rows( 'localizacao_events_rows' ) ) { the_row(); $events_rows[] = array( 'name' => get_sub_field( 'name' ), 'desc' => get_sub_field( 'desc' ) ); }
    }
    if ( empty( $events_rows ) ) { $events_rows = $events_defaults; }
    ?>
    <!-- Programação da Cidade -->
    <section class="city-events" style="background: #fff; padding: 80px 10%;">
      <div class="city-events-inner">
        <div class="eyebrow"><?php echo esc_html( $events_eyebrow ); ?></div>
        <h2 class="section-heading"><?php echo esc_html( $events_title1 ); ?><br><em><?php echo esc_html( $events_title_em ); ?></em></h2>
        <p class="copy-text" style="max-width:640px;margin:0 auto 40px;text-align:center;"><?php echo wp_kses_post( $events_text ); ?></p>
        <div class="experiences-items">
          <?php foreach ( $events_rows as $ev ) : ?>
          <div class="experience-row">
            <h3 class="experience-name"><?php echo esc_html( $ev['name'] ); ?></h3>
            <p class="experience-desc"><?php echo wp_kses_post( $ev['desc'] ); ?></p>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <?php
    $seasons = (array) arete_field( 'localizacao_seasons', array() );
    $seasons_eyebrow = ! empty( $seasons['eyebrow'] ) ? $seasons['eyebrow'] : 'Búzios por Estações';
    $seasons_title   = ! empty( $seasons['title'] )   ? $seasons['title']   : 'Muito além do verão';
    $seasons_text    = ! empty( $seasons['text'] )    ? $seasons['text']    : 'Cada estação em Búzios carrega uma personalidade própria. Um destino que se reinventa, e que o Hotel Aretê conhece em cada detalhe.';
    $seasons_btn     = ! empty( $seasons['btn'] )     ? $seasons['btn']     : 'Planeje sua estadia';
    $seasons_defaults = array(
		array( 'key' => 'verao', 'name' => 'Verão', 'months' => 'Dez a Mar', 'desc' => 'Alta temporada com sol garantido. O mar ganha tons vibrantes de azul e verde, a cidade pulsa entre praias, festivais e vida noturna. Um convite a viver cada momento ao ar livre.', 'img' => 'buzios/BUZIOS-ARMACAO.avif' ),
		array( 'key' => 'outono', 'name' => 'Outono', 'months' => 'Mar a Mai', 'desc' => 'O mar se acalma e o céu ganha tons dourados. Fins de semana tranquilos com temperaturas agradáveis. Ótimo para caminhadas tranquilas, almoços demorados e praias mais serenas.', 'img' => 'new/barco atracado cais.avif' ),
		array( 'key' => 'inverno', 'name' => 'Inverno', 'months' => 'Jun a Ago', 'desc' => 'A luz mais bonita do ano que surpreende pelo clima ameno e dias ensolarados. Época ideal para explorar a gastronomia local no friozinho da noite e praticar seu esporte preferido.', 'img' => 'new/buzios inverno.avif' ),
		array( 'key' => 'primavera', 'name' => 'Primavera', 'months' => 'Set a Nov', 'desc' => 'Búzios floresce em todos os sentidos. A cidade recupera um ritmo mais movimentado, preservando a atmosfera leve e acolhedora que a torna especial durante todo o ano.', 'img' => 'new/marina vista do restaurante.avif' ),
    );
    $seasons_list = array();
    if ( function_exists( 'have_rows' ) && have_rows( 'localizacao_seasons_list' ) ) {
		while ( have_rows( 'localizacao_seasons_list' ) ) {
			the_row();
			$si = get_sub_field( 'img' );
			$seasons_list[] = array(
				'key' => get_sub_field( 'key' ), 'name' => get_sub_field( 'name' ), 'months' => get_sub_field( 'months' ), 'desc' => get_sub_field( 'desc' ),
				'img' => ( is_array( $si ) && ! empty( $si['url'] ) ) ? $si['url'] : '',
			);
		}
    }
    if ( empty( $seasons_list ) ) {
		foreach ( $seasons_defaults as $sd ) { $sd['img'] = arete_asset( $sd['img'] ); $seasons_list[] = $sd; }
    }
    ?>
    <!-- Estações do Ano -->
    <section class="seasons-section">
      <div class="seasons-header">
        <div class="eyebrow"><?php echo esc_html( $seasons_eyebrow ); ?></div>
        <h2 class="seasons-title"><?php echo esc_html( $seasons_title ); ?></h2>
        <p class="seasons-text"><?php echo esc_html( $seasons_text ); ?></p>
      </div>
      <div class="seasons-slider">
        <!-- Imagens -->
        <div class="seasons-track">
          <?php foreach ( $seasons_list as $sidx => $s ) : ?>
          <div class="season-slide<?php echo 0 === $sidx ? ' active' : ''; ?>" data-season="<?php echo esc_attr( $s['key'] ); ?>">
            <div class="season-slide-img" style="background-image:url('<?php echo esc_url( $s['img'] ); ?>')" aria-hidden="true"></div>
          </div>
          <?php endforeach; ?>
        </div>
        <!-- Texto + nav + CTA -->
        <div class="seasons-text-area">
          <?php foreach ( $seasons_list as $sidx => $s ) : ?>
          <div class="seasons-name" data-season="<?php echo esc_attr( $s['key'] ); ?>"<?php echo 0 !== $sidx ? ' style="display:none"' : ''; ?>><?php echo esc_html( $s['name'] ); ?></div>
          <?php endforeach; ?>
          <?php foreach ( $seasons_list as $sidx => $s ) : ?>
          <div class="seasons-months" data-season="<?php echo esc_attr( $s['key'] ); ?>"<?php echo 0 !== $sidx ? ' style="display:none"' : ''; ?>><?php echo esc_html( $s['months'] ); ?></div>
          <?php endforeach; ?>
          <?php foreach ( $seasons_list as $sidx => $s ) : ?>
          <div class="seasons-desc" data-season="<?php echo esc_attr( $s['key'] ); ?>"<?php echo 0 !== $sidx ? ' style="display:none"' : ''; ?>><?php echo wp_kses_post( $s['desc'] ); ?></div>
          <?php endforeach; ?>
          <div class="seasons-nav">
            <?php foreach ( $seasons_list as $sidx => $s ) : ?>
            <button class="seasons-nav-btn<?php echo 0 === $sidx ? ' active' : ''; ?>" data-target="<?php echo esc_attr( $s['key'] ); ?>"><?php echo esc_html( $s['name'] ); ?></button>
            <?php endforeach; ?>
          </div>
          <a class="btn-outline seasons-cta" href="<?php echo esc_url( arete_booking_url() ); ?>" target="_blank" rel="noopener"><?php echo esc_html( $seasons_btn ); ?></a>
        </div>
      </div>
    </section>

    <?php
    $arrive = (array) arete_field( 'localizacao_arrive', array() );
    $arrive_img      = ( ! empty( $arrive['img'] ) && is_array( $arrive['img'] ) && ! empty( $arrive['img']['url'] ) ) ? $arrive['img']['url'] : arete_asset( 'home/HOME-CARD-O-HOTEL.avif' );
    $arrive_eyebrow  = ! empty( $arrive['eyebrow'] )  ? $arrive['eyebrow']  : 'Como Chegar';
    $arrive_title1   = ! empty( $arrive['title1'] )   ? $arrive['title1']   : 'Chegue com';
    $arrive_title2   = ! empty( $arrive['title2'] )   ? $arrive['title2']   : 'tranquilidade';
    $arrive_maps_btn = ! empty( $arrive['maps_btn'] ) ? $arrive['maps_btn'] : 'Google Maps';
    $arrive_maps_url = ! empty( $arrive['maps_url'] ) ? $arrive['maps_url'] : 'https://www.google.com/maps?q=Hotel+Aret%C3%AA,+B%C3%BAzios';
    $arrive_waze_btn = ! empty( $arrive['waze_btn'] ) ? $arrive['waze_btn'] : 'Waze';
    $arrive_waze_url = ! empty( $arrive['waze_url'] ) ? $arrive['waze_url'] : 'https://waze.com/ul?q=Hotel+Aret%C3%AA,+B%C3%BAzios';
    $arrive_blocks_defaults = array(
		array( 'label' => 'De carro', 'value' => '170 km do Rio de Janeiro via BR-101 e RJ-124' ),
		array( 'label' => 'De avião', 'value' => 'Aeroporto Umberto Modiano, 7 min do hotel' ),
    );
    $arrive_blocks = array();
    if ( function_exists( 'have_rows' ) && have_rows( 'localizacao_arrive_blocks' ) ) {
		while ( have_rows( 'localizacao_arrive_blocks' ) ) { the_row(); $arrive_blocks[] = array( 'label' => get_sub_field( 'label' ), 'value' => get_sub_field( 'value' ) ); }
    }
    if ( empty( $arrive_blocks ) ) { $arrive_blocks = $arrive_blocks_defaults; }
    ?>
    <!-- Como Chegar -->
    <section class="nature-split nature-split--no-img-mobile">
      <div class="nature-split-image" style="background-image:url('<?php echo esc_url( $arrive_img ); ?>')" aria-hidden="true"></div>
      <div class="nature-split-content">
        <div class="eyebrow"><?php echo esc_html( $arrive_eyebrow ); ?></div>
        <h2 class="nature-split-title"><?php echo esc_html( $arrive_title1 ); ?><br><?php echo esc_html( $arrive_title2 ); ?></h2>
        <div class="info-blocks">
          <?php foreach ( $arrive_blocks as $ab ) : ?>
          <div class="info-block">
            <div class="info-label"><?php echo esc_html( $ab['label'] ); ?></div>
            <div class="info-value"><?php echo esc_html( $ab['value'] ); ?></div>
          </div>
          <?php endforeach; ?>
        </div>
        <div class="info-buttons">
          <a class="btn-primary" href="<?php echo esc_url( $arrive_maps_url ); ?>" target="_blank" rel="noopener"><?php echo esc_html( $arrive_maps_btn ); ?></a>
          <a class="btn-outline" href="<?php echo esc_url( $arrive_waze_url ); ?>" target="_blank" rel="noopener"><?php echo esc_html( $arrive_waze_btn ); ?></a>
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
