<?php
/**
 * Template: Página Suítes
 *
 * Réplica exata da página suites.html.
 *
 * @package AretêHotel
 */
?>
<?php get_header(); ?>

    <!-- Hero -->
    <section class="hero hero-rooms hero-subpage" style="background-image:url('<?php echo esc_url( arete_asset( 'new/DSCF4496.avif' ) ); ?>')">
      <div class="hero-inner">
        <div class="hero-kicker">Sossego</div>
        <h1 class="hero-title">Suítes</h1>
        <p class="hero-subtitle">Acordar com o som dos pássaros e sentir que cada detalhe foi pensado para você.</p>
      </div>
      <div class="hero-scroll">
        <span class="hero-scroll-text">Descobrir</span>
        <div class="hero-scroll-line"></div>
      </div>
    </section>

    <!-- Menu de Categorias -->
    <section class="suites-menu" style="padding: 100px 20px; text-align: center; background: #f8f8f8;">
      <div class="suites-menu-inner" style="max-width: 1200px; margin: 0 auto;">
        <div class="eyebrow" style="margin-bottom: 15px;">Conheça nossas opções</div>
        <h2 class="section-heading" style="margin-bottom: 40px;">Categorias de Suítes</h2>
        <div class="suites-menu-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
          <a href="#suites-detail" data-tab="luxo" class="suites-menu-item" style="padding: 20px; background: white; border-radius: 0; text-decoration: none; color: inherit; transition: all 0.3s;">
            <h3 style="margin: 0; font-size: 18px; font-weight: 600;">Suíte Luxo</h3>
            <p style="margin: 10px 0 0 0; color: #666; font-size: 14px;">22 m² | Decoração contemporânea</p>
          </a>
          <a href="#suites-detail" data-tab="luxo-marina" class="suites-menu-item" style="padding: 20px; background: white; border-radius: 0; text-decoration: none; color: inherit; transition: all 0.3s;">
            <h3 style="margin: 0; font-size: 18px; font-weight: 600;">Suíte Luxo Marina</h3>
            <p style="margin: 10px 0 0 0; color: #666; font-size: 14px;">22 m² | Vista para a Marina</p>
          </a>
          <a href="#suites-detail" data-tab="master" class="suites-menu-item" style="padding: 20px; background: white; border-radius: 0; text-decoration: none; color: inherit; transition: all 0.3s;">
            <h3 style="margin: 0; font-size: 18px; font-weight: 600;">Suíte Master</h3>
            <p style="margin: 10px 0 0 0; color: #666; font-size: 14px;">30 m² | Varanda com jardim</p>
          </a>
          <a href="#suites-detail" data-tab="master-familia" class="suites-menu-item" style="padding: 20px; background: white; border-radius: 0; text-decoration: none; color: inherit; transition: all 0.3s;">
            <h3 style="margin: 0; font-size: 18px; font-weight: 600;">Suíte Master Família</h3>
            <p style="margin: 10px 0 0 0; color: #666; font-size: 14px;">Duas camas de casal</p>
          </a>
          <a href="#suites-detail" data-tab="master-marina" class="suites-menu-item" style="padding: 20px; background: white; border-radius: 0; text-decoration: none; color: inherit; transition: all 0.3s;">
            <h3 style="margin: 0; font-size: 18px; font-weight: 600;">Suíte Master Marina</h3>
            <p style="margin: 10px 0 0 0; color: #666; font-size: 14px;">30 m² | Vista Marina</p>
          </a>
          <a href="#suites-detail" data-tab="master-marina-familia" class="suites-menu-item" style="padding: 20px; background: white; border-radius: 0; text-decoration: none; color: inherit; transition: all 0.3s;">
            <h3 style="margin: 0; font-size: 18px; font-weight: 600;">Suíte Master Marina Família</h3>
            <p style="margin: 10px 0 0 0; color: #666; font-size: 14px;">Duas camas & Vista Marina</p>
          </a>
          <a href="#suites-detail" data-tab="arete" class="suites-menu-item" style="padding: 20px; background: white; border-radius: 0; text-decoration: none; color: inherit; transition: all 0.3s;">
            <h3 style="margin: 0; font-size: 18px; font-weight: 600;">Suíte Aretê</h3>
            <p style="margin: 10px 0 0 0; color: #666; font-size: 14px;">A assinatura do Hotel</p>
          </a>
          <a href="#suites-detail" data-tab="ygara" class="suites-menu-item" style="padding: 20px; background: white; border-radius: 0; text-decoration: none; color: inherit; transition: all 0.3s;">
            <h3 style="margin: 0; font-size: 18px; font-weight: 600;">Suíte Ygará</h3>
            <p style="margin: 10px 0 0 0; color: #666; font-size: 14px;">70 m² | A Mais Exclusiva</p>
          </a>
        </div>
      </div>
    </section>

    <!-- Detalhes das Suítes (Tabs + Carousel) -->
    <section class="suites-detail" id="suites-detail">
      <div class="suites-detail-inner">

        <!-- Suíte Luxo -->
        <div class="suites-tab-panel active" data-tab="luxo">
          <div class="suites-carousel">
            <div class="suites-carousel-track">
              <div class="suites-carousel-slide" style="background-image:url('<?php echo esc_url( arete_asset( 'suites/luxo/1.avif' ) ); ?>')"></div>
              <div class="suites-carousel-slide" style="background-image:url('<?php echo esc_url( arete_asset( 'suites/luxo/2.avif' ) ); ?>')"></div>
              <div class="suites-carousel-slide" style="background-image:url('<?php echo esc_url( arete_asset( 'suites/luxo/3.avif' ) ); ?>')"></div>
              <div class="suites-carousel-slide" style="background-image:url('<?php echo esc_url( arete_asset( 'suites/luxo/4.avif' ) ); ?>')"></div>
            </div>
            <button class="suites-carousel-btn suites-carousel-prev" aria-label="Foto anterior">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 18l-6-6 6-6"/></svg>
            </button>
            <button class="suites-carousel-btn suites-carousel-next" aria-label="Próxima foto">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
            </button>
          </div>
          <div class="suites-info">
            <div class="suites-info-main">
              <h3 class="suites-info-title">Suíte Luxo</h3>
              <p class="suites-info-text">Funcional, confortável e bem resolvida. A Suíte Luxo oferece um ambiente acolhedor, com bom aproveitamento de espaço e decoração contemporânea. Ideal para quem busca conforto e praticidade para desfrutar os dias em Búzios, com a qualidade e o cuidado característicos do Hotel Aretê.</p>
              <div class="suites-info-badges">
                <span>22 m²</span>
                <span>Smart TV 40" 4K</span>
                <span>Ar-condicionado Split</span>
                <span>Cofre eletrônico</span>
                <span>Máquina de café</span>
                <span>Minicopa com frigobar</span>
              </div>
              <a class="suites-info-btn" href="<?php echo esc_url( arete_booking_url() ); ?>" target="_blank" rel="noopener">Reservar</a>
            </div>
            <div class="suites-info-amenities">
              <h4>Comodidades</h4>
              <ul>
                <li>Wi-fi de alta velocidade</li>
                <li>Smart TV 40" 4K</li>
                <li>Ar-condicionado Split</li>
                <li>Cofre eletrônico</li>
                <li>Máquina de café expresso</li>
                <li>Minicopa com frigobar</li>
                <li>Lençóis Trussardi 300 fios</li>
                <li>Chuveiro alta pressão</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Suíte Luxo Marina -->
        <div class="suites-tab-panel" data-tab="luxo-marina">
          <div class="suites-carousel">
            <div class="suites-carousel-track">
              <div class="suites-carousel-slide" style="background-image:url('<?php echo esc_url( arete_asset( 'suites/luxo-marina/1.avif' ) ); ?>')"></div>
              <div class="suites-carousel-slide" style="background-image:url('<?php echo esc_url( arete_asset( 'suites/luxo-marina/2.avif' ) ); ?>')"></div>
              <div class="suites-carousel-slide" style="background-image:url('<?php echo esc_url( arete_asset( 'suites/luxo-marina/3.avif' ) ); ?>')"></div>
            </div>
            <button class="suites-carousel-btn suites-carousel-prev" aria-label="Foto anterior">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 18l-6-6 6-6"/></svg>
            </button>
            <button class="suites-carousel-btn suites-carousel-next" aria-label="Próxima foto">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
            </button>
          </div>
          <div class="suites-info">
            <div class="suites-info-main">
              <div class="suites-info-eyebrow">Conforto com Vista</div>
              <h3 class="suites-info-title">Suíte Luxo Marina</h3>
              <p class="suites-info-text">Conforto com vista privilegiada. A Suíte Luxo Marina une a mesma atmosfera aconchegante da categoria Luxo ao diferencial da vista para a marina. Um convite para acompanhar o ritmo tranquilo das embarcações e aproveitar a paisagem como parte da experiência da estadia.</p>
              <div class="suites-info-badges">
                <span>22 m²</span>
                <span>Vista Marina</span>
                <span>Smart TV 40" 4K</span>
                <span>Ar-condicionado Split</span>
                <span>Cofre eletrônico</span>
                <span>Máquina de café</span>
              </div>
              <a class="suites-info-btn" href="<?php echo esc_url( arete_booking_url() ); ?>" target="_blank" rel="noopener">Reservar</a>
            </div>
            <div class="suites-info-amenities">
              <h4>Comodidades</h4>
              <ul>
                <li>Wi-fi de alta velocidade</li>
                <li>Smart TV 40" 4K</li>
                <li>Ar-condicionado Split</li>
                <li>Cofre eletrônico</li>
                <li>Máquina de café expresso</li>
                <li>Vista Marina</li>
                <li>Lençóis Trussardi 300 fios</li>
                <li>Chuveiro alta pressão</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Suíte Master -->
        <div class="suites-tab-panel" data-tab="master">
          <div class="suites-carousel">
            <div class="suites-carousel-track">
              <div class="suites-carousel-slide" style="background-image:url('<?php echo esc_url( arete_asset( 'suites/master/1.avif' ) ); ?>')"></div>
              <div class="suites-carousel-slide" style="background-image:url('<?php echo esc_url( arete_asset( 'suites/master/2.avif' ) ); ?>')"></div>
              <div class="suites-carousel-slide" style="background-image:url('<?php echo esc_url( arete_asset( 'suites/master/3.avif' ) ); ?>')"></div>
              <div class="suites-carousel-slide" style="background-image:url('<?php echo esc_url( arete_asset( 'suites/master/4.avif' ) ); ?>')"></div>
            </div>
            <button class="suites-carousel-btn suites-carousel-prev" aria-label="Foto anterior">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 18l-6-6 6-6"/></svg>
            </button>
            <button class="suites-carousel-btn suites-carousel-next" aria-label="Próxima foto">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
            </button>
          </div>
          <div class="suites-info">
            <div class="suites-info-main">
              <div class="suites-info-eyebrow">Mais Espaço, Mais Conforto</div>
              <h3 class="suites-info-title">Suíte Master</h3>
              <p class="suites-info-text">Mais espaço, mais conforto, mais tempo para relaxar. A Suíte Master se destaca pela amplitude e pela sensação de conforto prolongado. Com layout generoso e ambiente elegante, é ideal para quem valoriza espaço, tranquilidade e uma estadia mais completa.</p>
              <div class="suites-info-badges">
                <span>30 m²</span>
                <span>Varanda com jardim</span>
                <span>Smart TV 40" 4K</span>
                <span>Ar-condicionado Split</span>
                <span>Cama Queen-Size</span>
                <span>Cofre eletrônico</span>
              </div>
              <a class="suites-info-btn" href="<?php echo esc_url( arete_booking_url() ); ?>" target="_blank" rel="noopener">Reservar</a>
            </div>
            <div class="suites-info-amenities">
              <h4>Comodidades</h4>
              <ul>
                <li>Wi-fi de alta velocidade</li>
                <li>Smart TV 40" 4K</li>
                <li>Ar-condicionado Split</li>
                <li>Varanda com jardim</li>
                <li>Cama Queen-Size</li>
                <li>Cofre eletrônico</li>
                <li>Lençóis Trussardi 300 fios</li>
                <li>Chuveiro alta pressão</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Suíte Master Família -->
        <div class="suites-tab-panel" data-tab="master-familia">
          <div class="suites-carousel">
            <div class="suites-carousel-track">
              <div class="suites-carousel-slide" style="background-image:url('<?php echo esc_url( arete_asset( 'suites/master-familia/1.avif' ) ); ?>')"></div>
              <div class="suites-carousel-slide" style="background-image:url('<?php echo esc_url( arete_asset( 'suites/master-familia/2.avif' ) ); ?>')"></div>
              <div class="suites-carousel-slide" style="background-image:url('<?php echo esc_url( arete_asset( 'suites/master-familia/3.avif' ) ); ?>')"></div>
              <div class="suites-carousel-slide" style="background-image:url('<?php echo esc_url( arete_asset( 'suites/master-familia/4.avif' ) ); ?>')"></div>
            </div>
            <button class="suites-carousel-btn suites-carousel-prev" aria-label="Foto anterior">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 18l-6-6 6-6"/></svg>
            </button>
            <button class="suites-carousel-btn suites-carousel-next" aria-label="Próxima foto">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
            </button>
          </div>
          <div class="suites-info">
            <div class="suites-info-main">
              <div class="suites-info-eyebrow">Conforto para Famílias</div>
              <h3 class="suites-info-title">Suíte Master Família</h3>
              <p class="suites-info-text">Conforto pensado para compartilhar. Projetada para receber famílias com comodidade, a Suíte Master Família oferece duas camas de casal e um ambiente amplo, que acomoda todos com conforto e fluidez. Ideal para quem deseja viajar junto sem abrir mão de espaço e bem-estar.</p>
              <div class="suites-info-badges">
                <span>Duas camas de casal</span>
                <span>Layout amplo</span>
                <span>Elegante</span>
                <span>Ideal para famílias</span>
              </div>
              <a class="suites-info-btn" href="<?php echo esc_url( arete_booking_url() ); ?>" target="_blank" rel="noopener">Reservar</a>
            </div>
            <div class="suites-info-amenities">
              <h4>Comodidades</h4>
              <ul>
                <li>Wi-fi de alta velocidade</li>
                <li>Smart TV 40" 4K</li>
                <li>Ar-condicionado Split</li>
                <li>Duas camas de casal</li>
                <li>Cofre eletrônico</li>
                <li>Máquina de café expresso</li>
                <li>Lençóis Trussardi 300 fios</li>
                <li>Chuveiro alta pressão</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Suíte Master Marina -->
        <div class="suites-tab-panel" data-tab="master-marina">
          <div class="suites-carousel">
            <div class="suites-carousel-track">
              <div class="suites-carousel-slide" style="background-image:url('<?php echo esc_url( arete_asset( 'suites/master-marina/1.avif' ) ); ?>')"></div>
              <div class="suites-carousel-slide" style="background-image:url('<?php echo esc_url( arete_asset( 'suites/master-marina/2.avif' ) ); ?>')"></div>
              <div class="suites-carousel-slide" style="background-image:url('<?php echo esc_url( arete_asset( 'suites/master-marina/3.avif' ) ); ?>')"></div>
              <div class="suites-carousel-slide" style="background-image:url('<?php echo esc_url( arete_asset( 'suites/master-marina/4.avif' ) ); ?>')"></div>
            </div>
            <button class="suites-carousel-btn suites-carousel-prev" aria-label="Foto anterior">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 18l-6-6 6-6"/></svg>
            </button>
            <button class="suites-carousel-btn suites-carousel-next" aria-label="Próxima foto">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
            </button>
          </div>
          <div class="suites-info">
            <div class="suites-info-main">
              <div class="suites-info-eyebrow">Amplitude & Vista</div>
              <h3 class="suites-info-title">Suíte Master Marina</h3>
              <p class="suites-info-text">Amplitude e vista como protagonistas. A Suíte Master Marina combina espaços amplos com uma vista direta para a marina, criando uma experiência marcada pela luz natural, pôr do sol e pela conexão com o entorno náutico. Um refúgio elegante para quem aprecia conforto aliado a uma paisagem calma e inspiradora.</p>
              <div class="suites-info-badges">
                <span>30 m²</span>
                <span>Vista Marina</span>
                <span>Varanda com jardim</span>
                <span>Smart TV 40" 4K</span>
                <span>Ar-condicionado Split</span>
                <span>2 Camas Queen-Size</span>
              </div>
              <a class="suites-info-btn" href="<?php echo esc_url( arete_booking_url() ); ?>" target="_blank" rel="noopener">Reservar</a>
            </div>
            <div class="suites-info-amenities">
              <h4>Comodidades</h4>
              <ul>
                <li>Wi-fi de alta velocidade</li>
                <li>Smart TV 40" 4K</li>
                <li>Ar-condicionado Split</li>
                <li>Varanda com jardim</li>
                <li>Vista Marina</li>
                <li>Cofre eletrônico</li>
                <li>Lençóis Trussardi 300 fios</li>
                <li>Chuveiro alta pressão</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Suíte Master Marina Família -->
        <div class="suites-tab-panel" data-tab="master-marina-familia">
          <div class="suites-carousel">
            <div class="suites-carousel-track">
              <div class="suites-carousel-slide" style="background-image:url('<?php echo esc_url( arete_asset( 'suites/master-marina-familia/1.avif' ) ); ?>')"></div>
              <div class="suites-carousel-slide" style="background-image:url('<?php echo esc_url( arete_asset( 'suites/master-marina-familia/2.avif' ) ); ?>')"></div>
              <div class="suites-carousel-slide" style="background-image:url('<?php echo esc_url( arete_asset( 'suites/master-marina-familia/3.avif' ) ); ?>')"></div>
            </div>
            <button class="suites-carousel-btn suites-carousel-prev" aria-label="Foto anterior">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 18l-6-6 6-6"/></svg>
            </button>
            <button class="suites-carousel-btn suites-carousel-next" aria-label="Próxima foto">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
            </button>
          </div>
          <div class="suites-info">
            <div class="suites-info-main">
              <div class="suites-info-eyebrow">Espaço, Vista & Família</div>
              <h3 class="suites-info-title">Suíte Master Marina Família</h3>
              <p class="suites-info-text">Espaço, vista e praticidade para toda a família. Com duas camas de casal e vista para a marina, esta categoria une conforto, funcionalidade e uma paisagem privilegiada. Perfeita para famílias que desejam vivenciar Búzios com tranquilidade e mais espaço para estar juntos.</p>
              <div class="suites-info-badges">
                <span>Duas camas de casal</span>
                <span>Vista Marina</span>
                <span>Layout amplo</span>
                <span>Ideal para famílias</span>
              </div>
              <a class="suites-info-btn" href="<?php echo esc_url( arete_booking_url() ); ?>" target="_blank" rel="noopener">Reservar</a>
            </div>
            <div class="suites-info-amenities">
              <h4>Comodidades</h4>
              <ul>
                <li>Wi-fi de alta velocidade</li>
                <li>Smart TV 40" 4K</li>
                <li>Ar-condicionado Split</li>
                <li>Duas camas de casal</li>
                <li>Vista Marina</li>
                <li>Cofre eletrônico</li>
                <li>Lençóis Trussardi 300 fios</li>
                <li>Chuveiro alta pressão</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Suíte Aretê -->
        <div class="suites-tab-panel" data-tab="arete">
          <div class="suites-carousel">
            <div class="suites-carousel-track">
              <div class="suites-carousel-slide" style="background-image:url('<?php echo esc_url( arete_asset( 'suites/arete/1.avif' ) ); ?>')"></div>
              <div class="suites-carousel-slide" style="background-image:url('<?php echo esc_url( arete_asset( 'suites/arete/240013143.avif' ) ); ?>')"></div>
              <div class="suites-carousel-slide" style="background-image:url('<?php echo esc_url( arete_asset( 'suites/arete/3.avif' ) ); ?>')"></div>
              <div class="suites-carousel-slide" style="background-image:url('<?php echo esc_url( arete_asset( 'suites/arete/4.avif' ) ); ?>')"></div>
            </div>
            <button class="suites-carousel-btn suites-carousel-prev" aria-label="Foto anterior">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 18l-6-6 6-6"/></svg>
            </button>
            <button class="suites-carousel-btn suites-carousel-next" aria-label="Próxima foto">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
            </button>
          </div>
          <div class="suites-info">
            <div class="suites-info-main">
              <div class="suites-info-eyebrow">A Assinatura do Hotel</div>
              <h3 class="suites-info-title">Suíte Aretê</h3>
              <p class="suites-info-text">A Suíte Aretê é a assinatura do Hotel Aretê. Com ante sala e varanda com vista para a marina e pôr do sol, equilibra sofisticação e contemplação.</p>
              <div class="suites-info-badges">
                <span>Ante sala</span>
                <span>Varanda</span>
                <span>Vista Marina</span>
                <span>Pôr do sol</span>
              </div>
              <a class="suites-info-btn" href="<?php echo esc_url( arete_booking_url() ); ?>" target="_blank" rel="noopener">Reservar</a>
            </div>
            <div class="suites-info-amenities">
              <h4>Comodidades</h4>
              <ul>
                <li>Wi-fi de alta velocidade</li>
                <li>Smart TV 40" 4K</li>
                <li>Ar-condicionado Split</li>
                <li>Ante sala</li>
                <li>Varanda com vista Marina</li>
                <li>Cofre eletrônico</li>
                <li>Lençóis Trussardi 300 fios</li>
                <li>Chuveiro alta pressão</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Suíte Ygará -->
        <div class="suites-tab-panel" data-tab="ygara">
          <div class="suites-carousel">
            <div class="suites-carousel-track">
              <div class="suites-carousel-slide" style="background-image:url('<?php echo esc_url( arete_asset( 'suites/ygara/1.avif' ) ); ?>')"></div>
              <div class="suites-carousel-slide" style="background-image:url('<?php echo esc_url( arete_asset( 'suites/ygara/2.avif' ) ); ?>')"></div>
              <div class="suites-carousel-slide" style="background-image:url('<?php echo esc_url( arete_asset( 'suites/ygara/3.avif' ) ); ?>')"></div>
              <div class="suites-carousel-slide" style="background-image:url('<?php echo esc_url( arete_asset( 'suites/ygara/4.avif' ) ); ?>')"></div>
              <div class="suites-carousel-slide" style="background-image:url('<?php echo esc_url( arete_asset( 'suites/ygara/5.avif' ) ); ?>')"></div>
            </div>
            <button class="suites-carousel-btn suites-carousel-prev" aria-label="Foto anterior">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 18l-6-6 6-6"/></svg>
            </button>
            <button class="suites-carousel-btn suites-carousel-next" aria-label="Próxima foto">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
            </button>
          </div>
          <div class="suites-info">
            <div class="suites-info-main">
              <div class="suites-info-eyebrow">A Mais Exclusiva</div>
              <h3 class="suites-info-title">Suíte Ygará</h3>
              <p class="suites-info-text">A Suíte Ygará é a experiência mais marcante do Hotel Aretê. Com 70 m², é a mais reservada da casa, varanda ampla no quarto e no banheiro com vista direta para os barquinhos. Um refúgio íntimo.</p>
              <div class="suites-info-badges">
                <span>70 m²</span>
                <span>Varanda ampla</span>
                <span>Vista barcos</span>
                <span>Exclusiva</span>
              </div>
              <a class="suites-info-btn" href="<?php echo esc_url( arete_booking_url() ); ?>" target="_blank" rel="noopener">Reservar</a>
            </div>
            <div class="suites-info-amenities">
              <h4>Comodidades</h4>
              <ul>
                <li>Wi-fi de alta velocidade</li>
                <li>Smart TV 40" 4K</li>
                <li>Ar-condicionado Split</li>
                <li>Varanda ampla no quarto</li>
                <li>Varanda no banheiro</li>
                <li>Vista direta para barcos</li>
                <li>Lençóis Trussardi 300 fios</li>
                <li>Chuveiro alta pressão</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- Todas as suítes incluem -->
    <section class="amenities-section">
      <div class="amenities-inner">
        <h3 class="amenities-title">Todas as suítes incluem</h3>
        <div class="amenities-list">
          <span>Wi-fi de alta velocidade</span>
          <span class="amenities-sep">◆</span>
          <span>Smart TV</span>
          <span class="amenities-sep">◆</span>
          <span>Ar-condicionado Split</span>
          <span class="amenities-sep">◆</span>
          <span>Minicopa com frigobar</span>
          <span class="amenities-sep">◆</span>
          <span>Máquina de café expresso</span>
          <span class="amenities-sep">◆</span>
          <span>Cofre eletrônico</span>
          <span class="amenities-sep">◆</span>
          <span>Lençóis Trussardi 300 fios</span>
          <span class="amenities-sep">◆</span>
          <span>Chuveiro alta pressão</span>
        </div>
      </div>
    </section>

    <!-- Escolha sua suíte -->
    <section class="cta-section">
      <div class="cta-inner">
        <div class="cta-eyebrow">Disponibilidade</div>
        <p class="cta-subtitle">Reserve diretamente pelo site e garanta boas condições</p>
        <a class="cta-btn" href="<?php echo esc_url( arete_booking_url() ); ?>" target="_blank" rel="noopener">Verificar disponibilidade</a>
      </div>
    </section>

  <!-- Suites: Tabs + Carousel -->
  <script>
    (function() {
      const panels = document.querySelectorAll('.suites-tab-panel');
      const menuCards = document.querySelectorAll('.suites-menu-item[data-tab]');
      const detailSection = document.getElementById('suites-detail');

      // Tab switching
      function activateTab(tabName) {
        panels.forEach(p => p.classList.remove('active'));
        const target = document.querySelector('.suites-tab-panel[data-tab="' + tabName + '"]');
        if (target) target.classList.add('active');
      }

      // Menu card click → scroll + activate tab
      menuCards.forEach(card => {
        card.addEventListener('click', function(e) {
          e.preventDefault();
          const tab = this.getAttribute('data-tab');
          activateTab(tab);
          const headerH = document.querySelector('.site-header').offsetHeight;
          const top = detailSection.getBoundingClientRect().top + window.pageYOffset - headerH - 20;
          window.scrollTo({ top: top, behavior: 'smooth' });
        });
      });

      // Carousel
      document.querySelectorAll('.suites-carousel').forEach(carousel => {
        const track = carousel.querySelector('.suites-carousel-track');
        const slides = Array.from(track.querySelectorAll('.suites-carousel-slide'));
        const total = slides.length;
        const prevBtn = carousel.querySelector('.suites-carousel-prev');
        const nextBtn = carousel.querySelector('.suites-carousel-next');
        let current = 0;
        let locked = false;

        function getOffset(index) {
          const slideW = slides[0].offsetWidth;
          const isMobile = window.innerWidth <= 640;
          if (isMobile) {
            return -(index * slideW);
          }
          const containerW = carousel.offsetWidth;
          const stride = slideW + 16;
          return (containerW * 0.1) - (index * stride);
        }

        function goTo(index) {
          if (locked) return;
          if (index < 0) index = total - 1;
          if (index >= total) index = 0;

          // Wrap-around: instant snap to virtual position, then animate
          if ((current === total - 1 && index === 0) || (current === 0 && index === total - 1)) {
            locked = true;
            var virtual = (current === total - 1) ? total : -1;
            track.style.transition = 'none';
            track.style.transform = 'translateX(' + getOffset(virtual) + 'px)';
            track.offsetHeight;
            current = index;
            track.style.transition = 'transform 0.6s cubic-bezier(0.25, 0.1, 0.25, 1)';
            track.style.transform = 'translateX(' + getOffset(current) + 'px)';
            setTimeout(function() { locked = false; }, 650);
          } else {
            locked = true;
            current = index;
            track.style.transition = 'transform 0.6s cubic-bezier(0.25, 0.1, 0.25, 1)';
            track.style.transform = 'translateX(' + getOffset(current) + 'px)';
            setTimeout(function() { locked = false; }, 650);
          }
        }

        prevBtn.addEventListener('click', function() { goTo(current - 1); });
        nextBtn.addEventListener('click', function() { goTo(current + 1); });

        // Touch swipe
        var startX = 0;
        var swiping = false;
        carousel.addEventListener('touchstart', function(e) {
          startX = e.touches[0].clientX;
          swiping = true;
          track.style.transition = 'none';
        }, { passive: true });

        carousel.addEventListener('touchmove', function(e) {
          if (!swiping) return;
          var diff = e.touches[0].clientX - startX;
          track.style.transform = 'translateX(' + (getOffset(current) + diff) + 'px)';
        }, { passive: true });

        carousel.addEventListener('touchend', function(e) {
          if (!swiping) return;
          swiping = false;
          var diff = e.changedTouches[0].clientX - startX;
          if (Math.abs(diff) > 50) {
            goTo(diff < 0 ? current + 1 : current - 1);
          } else {
            goTo(current);
          }
        });

        // Initial position
        goTo(0);
      });

      // Handle URL hash on load
      if (window.location.hash) {
        const hash = window.location.hash.replace('#', '');
        if (hash === 'suites-detail') return;
        activateTab(hash);
        setTimeout(() => {
          const headerH = document.querySelector('.site-header').offsetHeight;
          const top = detailSection.getBoundingClientRect().top + window.pageYOffset - headerH - 20;
          window.scrollTo({ top: top, behavior: 'smooth' });
        }, 100);
  }
  })();
  </script>
<?php get_footer(); ?>
