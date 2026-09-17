<?php
/**
 * Template: Página Ecossistema
 *
 * Réplica exata da página ecossistema.html, com todo texto e imagem
 * editáveis via ACF (helpers arete_field/arete_image/arete_asset).
 *
 * @package AretêHotel
 */
?>
<?php get_header(); ?>

    <section class="hero hero-subpage hero-ecossistema" style="background-image:url('<?php echo esc_url( arete_image( 'ecossistema_hero_bg', 'new/22062023-dronedjisamt0-8.avif' ) ); ?>'); background-position: center top;">
      <div class="hero-inner">
        <div class="hero-kicker"><?php echo esc_html( arete_field( 'ecossistema_hero_kicker', 'Aretê Búzios' ) ); ?></div>
        <h1 class="hero-title"><?php echo esc_html( arete_field( 'ecossistema_hero_title', 'Ecossistema' ) ); ?></h1>
        <p class="hero-subtitle"><?php echo esc_html( arete_field( 'ecossistema_hero_subtitle', 'Um novo jeito de viver Búzios' ) ); ?></p>
      </div>
      <div class="hero-scroll">
        <span class="hero-scroll-text"><?php echo esc_html( arete_field( 'ecossistema_hero_scroll', 'Descobrir' ) ); ?></span>
        <div class="hero-scroll-line"></div>
      </div>
    </section>

    <!-- Manifesto -->
    <section class="manifesto manifesto--spaced manifesto--no-lines">
      <div class="manifesto-inner">
        <p class="manifesto-text"><?php echo wp_kses_post( arete_field( 'ecossistema_manifesto_text', 'O Hotel Aretê faz parte de um complexo urbanístico que reúne diferentes experiências em um mesmo destino. Condomínio residencial, clube esportivo, opções gastronômicas e áreas dedicadas ao lazer e ao esporte.' ) ); ?></p>
        <a class="btn-outline" href="<?php echo esc_url( arete_whatsapp_url() ); ?>" target="_blank" rel="noopener" style="margin-top: 32px;"><?php echo esc_html( arete_field( 'ecossistema_manifesto_btn', 'Planeje sua estadia' ) ); ?></a>
      </div>
    </section>

    <!-- Galeria 01 -->
    <?php
    $gallery1 = get_field( 'ecossistema_gallery1' );
    $g1_fb    = array( 'new/arete-clube-sede-social-mapafotografia 018.avif', 'new/arete-clube-sede-social-mapafotografia 026.avif', 'new/arete-clube-golfe-mapafotografia 023.avif', 'new/arete-clube-golfe-mapafotografia 012.avif' );
    if ( ! empty( $gallery1 ) ) :
      ?>
      <div class="image-strip">
        <?php foreach ( $gallery1 as $img ) : ?>
          <div class="image-strip-item" style="background-image:url('<?php echo esc_url( arete_asset_or_url( $img['img'] ) ); ?>')" aria-hidden="true"></div>
        <?php endforeach; ?>
      </div>
    <?php else : ?>
      <div class="image-strip">
        <?php foreach ( $g1_fb as $img ) : ?>
          <div class="image-strip-item" style="background-image:url('<?php echo esc_url( arete_asset( $img ) ); ?>')" aria-hidden="true"></div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

    <!-- Ativos -->
    <?php
    $assets    = get_field( 'ecossistema_assets' );
    $asset_fb  = array(
		array( 'img' => 'new/arete-clube-sede-praia.avif', 'subtitle' => 'Beach Club', 'title' => 'Beach Club Aretê', 'km' => '1,3 km', 'text' => 'Pé na areia, restaurante com deck, sauna a vapor, área kids, e exclusividade.', 'note' => 'Acesso liberado ao hóspede' ),
		array( 'img' => 'new/arete-clube-golfe-mapafotografia 007.avif', 'subtitle' => 'Campo de Golfe', 'title' => 'Sede Golf', 'km' => '4 km', 'text' => 'Prazeroso e divertido, o golfe proporciona momentos de descontração com os amigos. O Búzios Golf Club, projetado pelos arquitetos Pete e Perry Dye, é uma das referências da América Latina.', 'note' => 'Day use mediante consulta de disponibilidade e valores' ),
		array( 'img' => 'new/arete-clube-sede-social-mapafotografia 016.avif', 'subtitle' => 'Esporte & Lazer', 'title' => 'Sede Esportiva', 'km' => '3,5 km', 'text' => 'Quadras de beach tênis para jogar ao ar livre. Um lugar completo para quem curte manter a rotina ativa, mesmo em férias.', 'note' => '' ),
		array( 'img' => 'new/arete-pista-ciclismo-mapafotografia 014.avif', 'subtitle' => 'Ao Ar Livre', 'title' => 'Pista de Bike', 'km' => '4 km', 'text' => 'Um circuito que atravessa a vegetação nativa, com vistas para o mar e a marina. Ideal para pedalar no amanhecer ou no fim da tarde, em qualquer nível.', 'note' => 'Day use mediante consulta de disponibilidade e valores' ),
		array( 'img' => 'new/cervejaria-buzios.avif', 'subtitle' => 'Gastronomia', 'title' => 'Cervejaria Búzios', 'km' => '3 km', 'text' => 'Produção artesanal, rótulos próprios e um espaço que combina bem com qualquer momento do dia. A cerveja é feita ali, ao lado, e a experiência é única.', 'note' => '' ),
    );
    $use_assets = ! empty( $assets ) ? $assets : $asset_fb;
    foreach ( $use_assets as $a ) :
      $a_img  = ! empty( $assets ) ? arete_asset_or_url( $a['img'] ) : arete_asset( $a['img'] );
      $a_sub  = isset( $a['subtitle'] ) ? $a['subtitle'] : '';
      $a_note = isset( $a['note'] ) ? $a['note'] : '';
      ?>
      <section class="eco-asset-section">
        <div class="eco-asset-content">
          <div class="eco-asset-subtitle"><?php echo esc_html( $a_sub ); ?></div>
          <h3 class="eco-asset-title"><?php echo esc_html( $a['title'] ); ?></h3>
          <p class="eco-asset-dist-km"><?php echo esc_html( $a['km'] ); ?></p>
          <p class="eco-asset-text"><?php echo wp_kses_post( $a['text'] ); ?></p>
          <?php if ( '' !== $a_note ) : ?>
            <p class="eco-asset-note"><?php echo esc_html( $a_note ); ?></p>
          <?php endif; ?>
        </div>
        <div class="eco-asset-image" style="background-image:url('<?php echo esc_url( $a_img ); ?>')" aria-hidden="true"></div>
      </section>
    <?php endforeach; ?>

    <!-- Galeria 02 -->
    <?php
    $gallery2 = get_field( 'ecossistema_gallery2' );
    $g2_fb    = array( 'new/arete-clube-sede-social-mapafotografia 023.avif', 'new/arete-clube-sede-social-mapafotografia 003.avif', 'new/arete-clube-golfe-mapafotografia 004.avif', 'new/arete-clube-golfe-mapafotografia 014.avif' );
    if ( ! empty( $gallery2 ) ) :
      ?>
      <div class="image-strip image-strip--gallery-02">
        <?php foreach ( $gallery2 as $img ) : ?>
          <div class="image-strip-item" style="background-image:url('<?php echo esc_url( arete_asset_or_url( $img['img'] ) ); ?>')" aria-hidden="true"></div>
        <?php endforeach; ?>
      </div>
    <?php else : ?>
      <div class="image-strip image-strip--gallery-02">
        <?php foreach ( $g2_fb as $img ) : ?>
          <div class="image-strip-item" style="background-image:url('<?php echo esc_url( arete_asset( $img ) ); ?>')" aria-hidden="true"></div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

    <!-- Ecossistema — Distâncias -->
    <section class="eco-section">

      <!-- LADO ESQUERDO — Lista de ativos -->
      <div class="eco-blank">
        <div class="eco-list-inner">
          <span class="eco-list-eyebrow"><?php echo esc_html( arete_field( 'ecossistema_dist_eyebrow', 'Distâncias' ) ); ?></span>
          <h2 class="eco-list-title"><?php echo esc_html( arete_field( 'ecossistema_dist_title', 'Tudo ao alcance' ) ); ?></h2>

          <ol class="eco-asset-list">
            <?php
            $dist_items = get_field( 'ecossistema_dist_items' );
            $dist_fb    = array(
				array( 'num' => '1', 'name' => 'Beach Club Aretê', 'walk' => '26 min', 'bike' => '5 min', 'car' => '5 min' ),
				array( 'num' => '2', 'name' => 'Sede Golf', 'walk' => '51 min', 'bike' => '10 min', 'car' => '10 min' ),
				array( 'num' => '3', 'name' => 'Sede Esportiva', 'walk' => '49 min', 'bike' => '11 min', 'car' => '10 min' ),
				array( 'num' => '4', 'name' => 'Pista de Bike', 'walk' => '49 min', 'bike' => '12 min', 'car' => '10 min' ),
				array( 'num' => '5', 'name' => 'Cervejaria Búzios', 'walk' => '38 min', 'bike' => '10 min', 'car' => '8 min' ),
            );
            $use_dist  = ! empty( $dist_items ) ? $dist_items : $dist_fb;
            foreach ( $use_dist as $d ) :
              ?>
              <li class="eco-asset-item">
                <span class="eco-asset-num"><?php echo esc_html( $d['num'] ); ?></span>
                <div class="eco-asset-info">
                  <div class="eco-asset-name"><?php echo esc_html( $d['name'] ); ?></div>
                  <div class="eco-asset-distances">
                    <span class="eco-asset-dist">
                      <img class="eco-icon-png" src="<?php echo esc_url( arete_asset( 'logos/icons8-walking-50.avif' ) ); ?>" alt="">
                      <?php echo esc_html( $d['walk'] ); ?>
                    </span>
                    <span class="eco-asset-dist">
                      <img class="eco-icon-png" src="<?php echo esc_url( arete_asset( 'logos/icons8-bicicleta-50.avif' ) ); ?>" alt="">
                      <?php echo esc_html( $d['bike'] ); ?>
                    </span>
                    <span class="eco-asset-dist">
                      <img class="eco-icon-png" src="<?php echo esc_url( arete_asset( 'logos/icons8-car-50.avif' ) ); ?>" alt="">
                      <?php echo esc_html( $d['car'] ); ?>
                    </span>
                  </div>
                </div>
              </li>
            <?php endforeach; ?>
          </ol>
        </div>
      </div>

      <!-- MAPA — Direita -->
      <div class="eco-map">
        <iframe
          src="<?php echo esc_url( arete_field( 'ecossistema_map_embed', 'https://www.google.com/maps/d/embed?mid=1VLyK-nvs4FKyy6BHsp2sLlb2A8_5iu4&ehbc=2E312F&noprof=1' ) ); ?>"
          width="640" height="480"
          loading="lazy"
          allowfullscreen
          referrerpolicy="no-referrer-when-downgrade"
          title="Mapa do ecossistema Hotel Aretê"></iframe>
      </div>

    </section>

    <!-- CTA -->
    <section class="cta-section manifesto--wide eco-cta" style="background: #004485;">
      <div class="cta-inner">
        <h2 class="cta-title"><?php echo esc_html( arete_field( 'ecossistema_cta_title', 'Conheça o complexo' ) ); ?></h2>
        <p class="cta-subtitle"><?php echo esc_html( arete_field( 'ecossistema_cta_subtitle', 'Entre em contato para saber mais sobre cada espaço' ) ); ?></p>
        <a class="cta-btn" href="<?php echo esc_url( arete_whatsapp_url() ); ?>" target="_blank" rel="noopener"><?php echo esc_html( arete_field( 'ecossistema_cta_btn', 'Fale conosco' ) ); ?></a>
      </div>
    </section>
<?php get_footer(); ?>
