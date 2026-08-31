<?php
/**
 * Template: Página Ecossistema
 *
 * Réplica exata da página ecossistema.html.
 *
 * @package AretêHotel
 */
?>
<?php get_header(); ?>

    <section class="hero hero-subpage hero-ecossistema" style="background-image:url('<?php echo esc_url( arete_asset( 'new/22062023-dronedjisamt0-8.avif' ) ); ?>'); background-position: center top;">
      <div class="hero-inner">
        <div class="hero-kicker">Aretê Búzios</div>
        <h1 class="hero-title">Ecossistema</h1>
        <p class="hero-subtitle">Um novo jeito de viver Búzios</p>
      </div>
      <div class="hero-scroll">
        <span class="hero-scroll-text">Descobrir</span>
        <div class="hero-scroll-line"></div>
      </div>
    </section>

    <!-- Manifesto -->
    <section class="manifesto manifesto--spaced manifesto--no-lines">
      <div class="manifesto-inner">
        <p class="manifesto-text">O Hotel Aretê faz parte de um complexo urbanístico que reúne diferentes experiências em um mesmo destino. Condomínio residencial, clube esportivo, opções gastronômicas e áreas dedicadas ao lazer e ao esporte.</p>
        <a class="btn-outline" href="<?php echo esc_url( arete_whatsapp_url() ); ?>" target="_blank" rel="noopener" style="margin-top: 32px;">Planeje sua estadia</a>
      </div>
    </section>

    <!-- Galeria 01 -->
    <div class="image-strip">
      <div class="image-strip-item" style="background-image:url('<?php echo esc_url( arete_asset( 'new/arete-clube-sede-social-mapafotografia 018.avif' ) ); ?>')" aria-hidden="true"></div>
      <div class="image-strip-item" style="background-image:url('<?php echo esc_url( arete_asset( 'new/arete-clube-sede-social-mapafotografia 026.avif' ) ); ?>')" aria-hidden="true"></div>
      <div class="image-strip-item" style="background-image:url('<?php echo esc_url( arete_asset( 'new/arete-clube-golfe-mapafotografia 023.avif' ) ); ?>')" aria-hidden="true"></div>
      <div class="image-strip-item" style="background-image:url('<?php echo esc_url( arete_asset( 'new/arete-clube-golfe-mapafotografia 012.avif' ) ); ?>')" aria-hidden="true"></div>
    </div>

    <!-- Ativo 01 — Beach Club Aretê -->
    <section class="eco-asset-section">
      <div class="eco-asset-content">
        <div class="eco-asset-subtitle">Beach Club</div>
        <h3 class="eco-asset-title">Beach Club Aretê</h3>
        <p class="eco-asset-dist-km">1,3 km</p>
        <p class="eco-asset-text">Pé na areia, restaurante com deck, sauna seca e a vapor, área kids, e exclusividade.</p>
        <p class="eco-asset-note">Acesso liberado ao hóspede</p>
      </div>
      <div class="eco-asset-image" style="background-image:url('<?php echo esc_url( arete_asset( 'new/arete-clube-sede-praia.avif' ) ); ?>')" aria-hidden="true"></div>
    </section>

    <!-- Ativo 02 — Sede Golf -->
    <section class="eco-asset-section">
      <div class="eco-asset-content">
        <div class="eco-asset-subtitle">Campo de Golfe</div>
        <h3 class="eco-asset-title">Sede Golf</h3>
        <p class="eco-asset-dist-km">4 km</p>
        <p class="eco-asset-text">Prazeroso e divertido, o golfe proporciona momentos de descontração com os amigos. O Búzios Golf Club, projetado pelos arquitetos Pete e Perry Dye, é uma das referências da América Latina.</p>
        <p class="eco-asset-note">Day use mediante consulta de disponibilidade e valores</p>
      </div>
      <div class="eco-asset-image" style="background-image:url('<?php echo esc_url( arete_asset( 'new/arete-clube-golfe-mapafotografia 007.avif' ) ); ?>')" aria-hidden="true"></div>
    </section>

    <!-- Ativo 03 — Sede Esportiva -->
    <section class="eco-asset-section">
      <div class="eco-asset-content">
        <div class="eco-asset-subtitle">Esporte &amp; Lazer</div>
        <h3 class="eco-asset-title">Sede Esportiva</h3>
        <p class="eco-asset-dist-km">3,5 km</p>
        <p class="eco-asset-text">Quadras de beach tênis para jogar ao ar livre. Um lugar completo para quem curte manter a rotina ativa, mesmo em férias.</p>
      </div>
      <div class="eco-asset-image" style="background-image:url('<?php echo esc_url( arete_asset( 'new/arete-clube-sede-social-mapafotografia 016.avif' ) ); ?>')" aria-hidden="true"></div>
    </section>

    <!-- Ativo 04 — Pista de Bike -->
    <section class="eco-asset-section">
      <div class="eco-asset-content">
        <div class="eco-asset-subtitle">Ao Ar Livre</div>
        <h3 class="eco-asset-title">Pista de Bike</h3>
        <p class="eco-asset-dist-km">4 km</p>
        <p class="eco-asset-text">Um circuito que atravessa a vegetação nativa, com vistas para o mar e a marina. Ideal para pedalar no amanhecer ou no fim da tarde, em qualquer nível.</p>
        <p class="eco-asset-note">Day use mediante consulta de disponibilidade e valores</p>
      </div>
      <div class="eco-asset-image" style="background-image:url('<?php echo esc_url( arete_asset( 'new/arete-pista-ciclismo-mapafotografia 014.avif' ) ); ?>')" aria-hidden="true"></div>
    </section>

    <!-- Ativo 05 — Cervejaria Búzios -->
    <section class="eco-asset-section">
      <div class="eco-asset-content">
        <div class="eco-asset-subtitle">Gastronomia</div>
        <h3 class="eco-asset-title">Cervejaria Búzios</h3>
        <p class="eco-asset-dist-km">3 km</p>
        <p class="eco-asset-text">Produção artesanal, rótulos próprios e um espaço que combina bem com qualquer momento do dia. A cerveja é feita ali, ao lado, e a experiência é única.</p>
      </div>
      <div class="eco-asset-image" style="background-image:url('<?php echo esc_url( arete_asset( 'new/cervejaria-buzios.avif' ) ); ?>')" aria-hidden="true"></div>
    </section>

    <!-- Galeria 02 -->
    <div class="image-strip image-strip--gallery-02">
      <div class="image-strip-item" style="background-image:url('<?php echo esc_url( arete_asset( 'new/arete-clube-sede-social-mapafotografia 023.avif' ) ); ?>')" aria-hidden="true"></div>
      <div class="image-strip-item" style="background-image:url('<?php echo esc_url( arete_asset( 'new/arete-clube-sede-social-mapafotografia 003.avif' ) ); ?>')" aria-hidden="true"></div>
      <div class="image-strip-item" style="background-image:url('<?php echo esc_url( arete_asset( 'new/arete-clube-golfe-mapafotografia 004.avif' ) ); ?>')" aria-hidden="true"></div>
      <div class="image-strip-item" style="background-image:url('<?php echo esc_url( arete_asset( 'new/arete-clube-golfe-mapafotografia 014.avif' ) ); ?>')" aria-hidden="true"></div>
    </div>

    <!-- Ecossistema — Distâncias -->
    <section class="eco-section">

      <!-- LADO ESQUERDO — Lista de ativos -->
      <div class="eco-blank">
        <div class="eco-list-inner">
          <span class="eco-list-eyebrow">Distâncias</span>
          <h2 class="eco-list-title">Tudo ao alcance</h2>

          <ol class="eco-asset-list">
            <li class="eco-asset-item">
              <span class="eco-asset-num">1</span>
              <div class="eco-asset-info">
                <div class="eco-asset-name">Beach Club Aretê</div>
                <div class="eco-asset-distances">
                  <span class="eco-asset-dist">
                    <img class="eco-icon-png" src="<?php echo esc_url( arete_asset( 'logos/icons8-walking-50.avif' ) ); ?>" alt="">
                    3 min
                  </span>
                  <span class="eco-asset-dist">
                    <img class="eco-icon-png" src="<?php echo esc_url( arete_asset( 'logos/icons8-bicicleta-50.avif' ) ); ?>" alt="">
                    5 min
                  </span>
                  <span class="eco-asset-dist">
                    <img class="eco-icon-png" src="<?php echo esc_url( arete_asset( 'logos/icons8-car-50.avif' ) ); ?>" alt="">
                    3 min
                  </span>
                </div>
              </div>
            </li>

            <li class="eco-asset-item">
              <span class="eco-asset-num">2</span>
              <div class="eco-asset-info">
                <div class="eco-asset-name">Sede Golf</div>
                <div class="eco-asset-distances">
                  <span class="eco-asset-dist">
                    <img class="eco-icon-png" src="<?php echo esc_url( arete_asset( 'logos/icons8-walking-50.avif' ) ); ?>" alt="">
                    45 min
                  </span>
                  <span class="eco-asset-dist">
                    <img class="eco-icon-png" src="<?php echo esc_url( arete_asset( 'logos/icons8-bicicleta-50.avif' ) ); ?>" alt="">
                    12 min
                  </span>
                  <span class="eco-asset-dist">
                    <img class="eco-icon-png" src="<?php echo esc_url( arete_asset( 'logos/icons8-car-50.avif' ) ); ?>" alt="">
                    10 min
                  </span>
                </div>
              </div>
            </li>

            <li class="eco-asset-item">
              <span class="eco-asset-num">3</span>
              <div class="eco-asset-info">
                <div class="eco-asset-name">Sede Esportiva</div>
                <div class="eco-asset-distances">
                  <span class="eco-asset-dist">
                    <img class="eco-icon-png" src="<?php echo esc_url( arete_asset( 'logos/icons8-walking-50.avif' ) ); ?>" alt="">
                    8 min
                  </span>
                  <span class="eco-asset-dist">
                    <img class="eco-icon-png" src="<?php echo esc_url( arete_asset( 'logos/icons8-bicicleta-50.avif' ) ); ?>" alt="">
                    8 min
                  </span>
                  <span class="eco-asset-dist">
                    <img class="eco-icon-png" src="<?php echo esc_url( arete_asset( 'logos/icons8-car-50.avif' ) ); ?>" alt="">
                    4 min
                  </span>
                </div>
              </div>
            </li>

            <li class="eco-asset-item">
              <span class="eco-asset-num">4</span>
              <div class="eco-asset-info">
                <div class="eco-asset-name">Pista de Bike</div>
                <div class="eco-asset-distances">
                  <span class="eco-asset-dist">
                    <img class="eco-icon-png" src="<?php echo esc_url( arete_asset( 'logos/icons8-walking-50.avif' ) ); ?>" alt="">
                    45 min
                  </span>
                  <span class="eco-asset-dist">
                    <img class="eco-icon-png" src="<?php echo esc_url( arete_asset( 'logos/icons8-bicicleta-50.avif' ) ); ?>" alt="">
                    12 min
                  </span>
                  <span class="eco-asset-dist">
                    <img class="eco-icon-png" src="<?php echo esc_url( arete_asset( 'logos/icons8-car-50.avif' ) ); ?>" alt="">
                    10 min
                  </span>
                </div>
              </div>
            </li>

            <li class="eco-asset-item">
              <span class="eco-asset-num">5</span>
              <div class="eco-asset-info">
                <div class="eco-asset-name">Cervejaria Búzios</div>
                <div class="eco-asset-distances">
                  <span class="eco-asset-dist">
                    <img class="eco-icon-png" src="<?php echo esc_url( arete_asset( 'logos/icons8-walking-50.avif' ) ); ?>" alt="">
                    30 min
                  </span>
                  <span class="eco-asset-dist">
                    <img class="eco-icon-png" src="<?php echo esc_url( arete_asset( 'logos/icons8-bicicleta-50.avif' ) ); ?>" alt="">
                    8 min
                  </span>
                  <span class="eco-asset-dist">
                    <img class="eco-icon-png" src="<?php echo esc_url( arete_asset( 'logos/icons8-car-50.avif' ) ); ?>" alt="">
                    5 min
                  </span>
                </div>
              </div>
            </li>
          </ol>
        </div>
      </div>

      <!-- MAPA — Direita -->
      <div class="eco-map">
        <img
          src="<?php echo esc_url( arete_asset( 'mapa/equipamentos.avif' ) ); ?>"
          alt="Mapa de turismo do ecossistema Hotel Aretê">
      </div>

    </section>

    <!-- CTA -->
    <section class="cta-section manifesto--wide eco-cta" style="background: #004485;">
      <div class="cta-inner">
        <h2 class="cta-title">Conheça o complexo</h2>
        <p class="cta-subtitle">Entre em contato para saber mais sobre cada espaço</p>
        <a class="cta-btn" href="<?php echo esc_url( arete_whatsapp_url() ); ?>" target="_blank" rel="noopener">Fale conosco</a>
      </div>
    </section>
<?php get_footer(); ?>
