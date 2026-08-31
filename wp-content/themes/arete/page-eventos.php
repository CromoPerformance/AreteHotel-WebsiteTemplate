<?php
/**
 * Template: Página Eventos
 *
 * Réplica exata da página eventos.html, com todo texto e imagem
 * editáveis via ACF (helpers arete_field/arete_image/arete_asset).
 *
 * @package AretêHotel
 */
?>
<?php get_header(); ?>

    <section class="hero hero-events hero-subpage" style="background-image:url('<?php echo esc_url( arete_image( 'eventos_hero_bg', 'new/piscina hotel drone.avif' ) ); ?>')">
      <div class="hero-inner">
        <div class="hero-kicker"><?php echo esc_html( arete_field( 'eventos_hero_kicker', 'Hotel Aretê' ) ); ?></div>
        <h1 class="hero-title"><?php echo esc_html( arete_field( 'eventos_hero_title', 'Eventos' ) ); ?></h1>
        <p class="hero-subtitle"><?php echo esc_html( arete_field( 'eventos_hero_subtitle', 'Seu momento, nosso cuidado' ) ); ?></p>
      </div>
      <div class="hero-scroll">
        <span class="hero-scroll-text"><?php echo esc_html( arete_field( 'eventos_hero_scroll', 'Descobrir' ) ); ?></span>
        <div class="hero-scroll-line"></div>
      </div>
    </section>

    <!-- Tipos de evento -->
    <section class="events-showcase">
      <div class="events-showcase-header">
        <div class="eyebrow"><?php echo esc_html( arete_field( 'eventos_showcase_eyebrow', 'Espaços' ) ); ?></div>
        <h2 class="section-heading"><?php echo esc_html( arete_field( 'eventos_showcase_title1', 'Tipos de' ) ); ?> <em><?php echo esc_html( arete_field( 'eventos_showcase_title_em', 'evento' ) ); ?></em></h2>
        <p class="copy-text" style="max-width:640px;margin:20px auto 0;text-align:center;"><?php echo wp_kses_post( arete_field( 'eventos_showcase_text', 'Cenários exclusivos e ambientes versáteis para casamentos, celebrações íntimas e momentos inesquecíveis.' ) ); ?></p>
      </div>
      <div class="events-showcase-grid">
        <?php
        $showcase_items = get_field( 'eventos_showcase_items' );
        $showcase_fb    = array(
			array( 'img' => 'shared/Cópia de M-116.jpg', 'name' => 'Casamentos', 'desc' => 'Cerimônias e recepções com vista para a marina e pôr do sol.' ),
			array( 'img' => 'shared/DSCF4957.avif', 'name' => 'Mini Weddings', 'desc' => 'Celebrações íntimas com até 50 convidados em espaços selecionados.' ),
			array( 'img' => 'new/_MG_2434.avif', 'name' => 'Aniversários', 'desc' => 'O Hotel Aretê como sua casa. Receba seus convidados e celebre essa data com serviço de excelência e gastronomia.' ),
        );
        $use_showcase   = ! empty( $showcase_items ) ? $showcase_items : $showcase_fb;
        foreach ( $use_showcase as $item ) :
          $item_img = ! empty( $showcase_items ) ? arete_asset_or_url( $item['img'] ) : arete_asset( $item['img'] );
          ?>
          <div class="events-showcase-item" style="background-image:url('<?php echo esc_url( $item_img ); ?>')">
            <div class="events-showcase-overlay"></div>
            <div class="events-showcase-content">
              <h3 class="events-showcase-name"><?php echo esc_html( $item['name'] ); ?></h3>
              <p class="events-showcase-desc"><?php echo wp_kses_post( $item['desc'] ); ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <div style="text-align: center; margin-top: 40px;">
        <a class="btn-outline" href="<?php echo esc_url( arete_whatsapp_url() ); ?>" target="_blank" rel="noopener"><?php echo esc_html( arete_field( 'eventos_showcase_btn', 'Solicitar orçamento' ) ); ?></a>
      </div>
    </section>

    <!-- Manifesto -->
    <section class="manifesto manifesto--spaced manifesto--no-lines" style="padding-top: 40px;">
      <div class="manifesto-inner">
        <p class="manifesto-text"><?php echo wp_kses_post( arete_field( 'eventos_manifesto_text', 'No Hotel Aretê, oferecemos pacotes flexíveis e atendimento personalizado para garantir que seu evento tenha a atenção que merece.' ) ); ?></p>
      </div>
    </section>

    <!-- Citação / Valores -->
    <section class="stats-section stats-section--quote" style="background: #077F8C;">
      <div class="stats-inner" style="gap: 72px; align-items: flex-start;">
        <?php
        $values    = get_field( 'eventos_values' );
        $values_fb = array(
			array( 'label' => 'Exclusividade', 'desc' => 'Espaços reservados, atenção dedicada. Cada detalhe pensado para que seu evento seja tão único quanto a ocasião que o inspirou.' ),
			array( 'label' => 'Calma', 'desc' => 'Longe do agito, perto do que importa. Uma atmosfera náutica e silenciosa que transforma cada celebração em um momento genuíno.' ),
			array( 'label' => 'Personalização', 'desc' => 'Do layout à iluminação, cada escolha é sua. Nossa equipe traduz a sua visão em uma experiência sob medida.' ),
        );
        $use_values = ! empty( $values ) ? $values : $values_fb;
        foreach ( $use_values as $v ) :
          ?>
          <div class="stat-block">
            <div class="stat-label"><?php echo esc_html( $v['label'] ); ?></div>
            <div class="stat-desc" style="max-width: 360px; font-size: 17px; text-align: left; font-style: normal; color: #fff;"><?php echo wp_kses_post( $v['desc'] ); ?></div>
          </div>
        <?php endforeach; ?>
      </div>
    </section>

    <!-- Privatização da Piscina -->
    <section class="nature-split nature-split--img-first-mobile">
      <div class="nature-split-content">
        <div class="eyebrow"><?php echo esc_html( arete_field( 'eventos_pool_eyebrow', 'Exclusividade' ) ); ?></div>
        <h2 class="nature-split-title"><?php echo esc_html( arete_field( 'eventos_pool_title1', 'Privatização' ) ); ?><br><?php echo esc_html( arete_field( 'eventos_pool_title2', 'da Piscina' ) ); ?></h2>
        <p class="nature-split-text"><?php echo wp_kses_post( arete_field( 'eventos_pool_text', 'A área da piscina do Hotel Aretê não é apenas um espaço de lazer, também é uma opção para privatização e realização de eventos. Indicada para celebrações íntimas, encontros corporativos e festas. Um ambiente elegante e confortável.' ) ); ?></p>
      </div>
      <div class="nature-split-image" style="background-image:url('<?php echo esc_url( arete_image( 'eventos_pool_img', 'shared/DSCF4160.avif' ) ); ?>')" aria-hidden="true"></div>
    </section>

    <!-- Restaurante como Espaço de Eventos -->
    <section class="nature-split">
      <?php
      $rest_gallery = get_field( 'eventos_rest_gallery' );
      $rest_fb      = array( 'shared/M-114.jpg', 'shared/M-201.jpg', 'shared/M-91.jpg' );
      if ( ! empty( $rest_gallery ) ) :
        ?>
        <div class="nature-split-gallery">
          <?php foreach ( $rest_gallery as $gi ) : ?>
            <div class="nature-split-gallery-item" style="background-image:url('<?php echo esc_url( arete_asset_or_url( $gi['img'] ) ); ?>')" aria-hidden="true"></div>
          <?php endforeach; ?>
        </div>
      <?php else : ?>
        <div class="nature-split-gallery">
          <?php foreach ( $rest_fb as $gi ) : ?>
            <div class="nature-split-gallery-item" style="background-image:url('<?php echo esc_url( arete_asset( $gi ) ); ?>')" aria-hidden="true"></div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
      <div class="nature-split-content">
        <div class="eyebrow"><?php echo esc_html( arete_field( 'eventos_rest_eyebrow', 'Restaurante' ) ); ?></div>
        <h2 class="nature-split-title"><?php echo esc_html( arete_field( 'eventos_rest_title1', 'Um salão de' ) ); ?><br><?php echo esc_html( arete_field( 'eventos_rest_title2', 'eventos autoral' ) ); ?></h2>
        <p class="nature-split-text"><?php echo wp_kses_post( arete_field( 'eventos_rest_text1', 'O restaurante do Hotel Aretê se transforma em um sofisticado espaço para eventos. Com vista privilegiada para a marina, cardápio autoral e ambientação versátil, é o cenário ideal para celebrações, jantares corporativos e encontros especiais.' ) ); ?></p>
        <p class="nature-split-text"><?php echo wp_kses_post( arete_field( 'eventos_rest_text2', 'Menus personalizados, carta de vinhos curada e uma equipe dedicada para cuidar de cada detalhe da sua experiência.' ) ); ?></p>
      </div>
    </section>

    <!-- CTA -->
    <section class="cta-section manifesto--wide" style="background: #004485;">
      <div class="cta-inner">
        <h2 class="cta-title"><?php echo esc_html( arete_field( 'eventos_cta_title', 'Planeje seu evento' ) ); ?></h2>
        <p class="cta-subtitle"><?php echo esc_html( arete_field( 'eventos_cta_subtitle', 'Nossa equipe está pronta para criar a experiência perfeita' ) ); ?></p>
        <a class="cta-btn" href="<?php echo esc_url( arete_whatsapp_url() ); ?>" target="_blank" rel="noopener"><?php echo esc_html( arete_field( 'eventos_cta_btn', 'Fale conosco' ) ); ?></a>
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
