<?php
/**
 * Template: Página Suítes
 *
 * Réplica exata da página suites.html, com conteúdo editável via ACF.
 *
 * @package AretêHotel
 */
?>
<?php get_header(); ?>

    <?php
    $hero = (array) arete_field( 'suites_hero', array() );
    $hero_kicker    = ! empty( $hero['kicker'] )   ? $hero['kicker']   : 'Sossego';
    $hero_title     = ! empty( $hero['title'] )    ? $hero['title']    : 'Suítes';
    $hero_subtitle  = ! empty( $hero['subtitle'] ) ? $hero['subtitle'] : 'Acordar com o som dos pássaros e sentir que cada detalhe foi pensado para você.';
    $hero_bg        = ( ! empty( $hero['bg'] ) && is_array( $hero['bg'] ) && ! empty( $hero['bg']['url'] ) ) ? $hero['bg']['url'] : arete_asset( 'new/DSCF4496.avif' );
    $hero_scroll    = ! empty( $hero['scroll'] ) ? $hero['scroll'] : 'Descobrir';
    ?>
    <!-- Hero -->
    <section class="hero hero-rooms hero-subpage" style="background-image:url('<?php echo esc_url( $hero_bg ); ?>')">
      <div class="hero-inner">
        <div class="hero-kicker"><?php echo esc_html( $hero_kicker ); ?></div>
        <h1 class="hero-title"><?php echo esc_html( $hero_title ); ?></h1>
        <p class="hero-subtitle"><?php echo nl2br( esc_html( $hero_subtitle ) ); ?></p>
      </div>
      <div class="hero-scroll">
        <span class="hero-scroll-text"><?php echo esc_html( $hero_scroll ); ?></span>
        <div class="hero-scroll-line"></div>
      </div>
    </section>

    <?php
    // Fallback: dados originais das 8 suítes (para quando o ACF estiver vazio).
    $suites_fallback = array(
		'luxo' => array(
			'tab'      => 'luxo',
			'eyebrow'  => '',
			'title'    => 'Suíte Luxo',
			'text'     => 'Funcional, confortável e bem resolvida. A Suíte Luxo oferece um ambiente acolhedor, com bom aproveitamento de espaço e decoração contemporânea. Ideal para quem busca conforto e praticidade para desfrutar os dias em Búzios, com a qualidade e o cuidado característicos do Hotel Aretê.',
			'badges'   => array( '22 m²', 'Smart TV 40" 4K', 'Ar-condicionado Split', 'Cofre eletrônico', 'Máquina de café', 'Minicopa com frigobar' ),
			'amenities'=> array( 'Wi-fi de alta velocidade', 'Smart TV 40" 4K', 'Ar-condicionado Split', 'Cofre eletrônico', 'Máquina de café expresso', 'Minicopa com frigobar', 'Lençóis Trussardi 300 fios', 'Chuveiro alta pressão' ),
			'gallery'  => array( 'suites/luxo/1.avif', 'suites/luxo/2.avif', 'suites/luxo/3.avif', 'suites/luxo/4.avif' ),
			'menu'     => array( 'title' => 'Suíte Luxo', 'subtitle' => '22 m² | Decoração contemporânea' ),
		),
		'luxo-marina' => array(
			'tab'      => 'luxo-marina',
			'eyebrow'  => 'Conforto com Vista',
			'title'    => 'Suíte Luxo Marina',
			'text'     => 'Conforto com vista privilegiada. A Suíte Luxo Marina une a mesma atmosfera aconchegante da categoria Luxo ao diferencial da vista para a marina. Um convite para acompanhar o ritmo tranquilo das embarcações e aproveitar a paisagem como parte da experiência da estadia.',
			'badges'   => array( '22 m²', 'Vista Marina', 'Smart TV 40" 4K', 'Ar-condicionado Split', 'Cofre eletrônico', 'Máquina de café' ),
			'amenities'=> array( 'Wi-fi de alta velocidade', 'Smart TV 40" 4K', 'Ar-condicionado Split', 'Cofre eletrônico', 'Máquina de café expresso', 'Vista Marina', 'Lençóis Trussardi 300 fios', 'Chuveiro alta pressão' ),
			'gallery'  => array( 'suites/luxo-marina/1.avif', 'suites/luxo-marina/2.avif', 'suites/luxo-marina/3.avif' ),
			'menu'     => array( 'title' => 'Suíte Luxo Marina', 'subtitle' => '22 m² | Vista para a Marina' ),
		),
		'master' => array(
			'tab'      => 'master',
			'eyebrow'  => 'Mais Espaço, Mais Conforto',
			'title'    => 'Suíte Master',
			'text'     => 'Mais espaço, mais conforto, mais tempo para relaxar. A Suíte Master se destaca pela amplitude e pela sensação de conforto prolongado. Com layout generoso e ambiente elegante, é ideal para quem valoriza espaço, tranquilidade e uma estadia mais completa.',
			'badges'   => array( '30 m²', 'Varanda com jardim', 'Smart TV 40" 4K', 'Ar-condicionado Split', 'Cama Queen-Size', 'Cofre eletrônico' ),
			'amenities'=> array( 'Wi-fi de alta velocidade', 'Smart TV 40" 4K', 'Ar-condicionado Split', 'Varanda com jardim', 'Cama Queen-Size', 'Cofre eletrônico', 'Lençóis Trussardi 300 fios', 'Chuveiro alta pressão' ),
			'gallery'  => array( 'suites/master/1.avif', 'suites/master/2.avif', 'suites/master/3.avif', 'suites/master/4.avif' ),
			'menu'     => array( 'title' => 'Suíte Master', 'subtitle' => '30 m² | Varanda com jardim' ),
		),
		'master-familia' => array(
			'tab'      => 'master-familia',
			'eyebrow'  => 'Conforto para Famílias',
			'title'    => 'Suíte Master Família',
			'text'     => 'Conforto pensado para compartilhar. Projetada para receber famílias com comodidade, a Suíte Master Família oferece duas camas de casal e um ambiente amplo, que acomoda todos com conforto e fluidez. Ideal para quem deseja viajar junto sem abrir mão de espaço e bem-estar.',
			'badges'   => array( 'Duas camas de casal', 'Layout amplo', 'Elegante', 'Ideal para famílias' ),
			'amenities'=> array( 'Wi-fi de alta velocidade', 'Smart TV 40" 4K', 'Ar-condicionado Split', 'Duas camas de casal', 'Cofre eletrônico', 'Máquina de café expresso', 'Lençóis Trussardi 300 fios', 'Chuveiro alta pressão' ),
			'gallery'  => array( 'suites/master-familia/1.avif', 'suites/master-familia/2.avif', 'suites/master-familia/3.avif', 'suites/master-familia/4.avif' ),
			'menu'     => array( 'title' => 'Suíte Master Família', 'subtitle' => 'Duas camas de casal' ),
		),
		'master-marina' => array(
			'tab'      => 'master-marina',
			'eyebrow'  => 'Amplitude & Vista',
			'title'    => 'Suíte Master Marina',
			'text'     => 'Amplitude e vista como protagonistas. A Suíte Master Marina combina espaços amplos com uma vista direta para a marina, criando uma experiência marcada pela luz natural, pôr do sol e pela conexão com o entorno náutico. Um refúgio elegante para quem aprecia conforto aliado a uma paisagem calma e inspiradora.',
			'badges'   => array( '30 m²', 'Vista Marina', 'Varanda com jardim', 'Smart TV 40" 4K', 'Ar-condicionado Split', '2 Camas Queen-Size' ),
			'amenities'=> array( 'Wi-fi de alta velocidade', 'Smart TV 40" 4K', 'Ar-condicionado Split', 'Varanda com jardim', 'Vista Marina', 'Cofre eletrônico', 'Lençóis Trussardi 300 fios', 'Chuveiro alta pressão' ),
			'gallery'  => array( 'suites/master-marina/1.avif', 'suites/master-marina/2.avif', 'suites/master-marina/3.avif', 'suites/master-marina/4.avif' ),
			'menu'     => array( 'title' => 'Suíte Master Marina', 'subtitle' => '30 m² | Vista Marina' ),
		),
		'master-marina-familia' => array(
			'tab'      => 'master-marina-familia',
			'eyebrow'  => 'Espaço, Vista & Família',
			'title'    => 'Suíte Master Marina Família',
			'text'     => 'Espaço, vista e praticidade para toda a família. Com duas camas de casal e vista para a marina, esta categoria une conforto, funcionalidade e uma paisagem privilegiada. Perfeita para famílias que desejam vivenciar Búzios com tranquilidade e mais espaço para estar juntos.',
			'badges'   => array( 'Duas camas de casal', 'Vista Marina', 'Layout amplo', 'Ideal para famílias' ),
			'amenities'=> array( 'Wi-fi de alta velocidade', 'Smart TV 40" 4K', 'Ar-condicionado Split', 'Duas camas de casal', 'Vista Marina', 'Cofre eletrônico', 'Lençóis Trussardi 300 fios', 'Chuveiro alta pressão' ),
			'gallery'  => array( 'suites/master-marina-familia/1.avif', 'suites/master-marina-familia/2.avif', 'suites/master-marina-familia/3.avif' ),
			'menu'     => array( 'title' => 'Suíte Master Marina Família', 'subtitle' => 'Duas camas & Vista Marina' ),
		),
		'arete' => array(
			'tab'      => 'arete',
			'eyebrow'  => 'A Assinatura do Hotel',
			'title'    => 'Suíte Aretê',
			'text'     => 'A Suíte Aretê é a assinatura do Hotel Aretê. Com ante sala e varanda com vista para a marina e pôr do sol, equilibra sofisticação e contemplação.',
			'badges'   => array( 'Ante sala', 'Varanda', 'Vista Marina', 'Pôr do sol' ),
			'amenities'=> array( 'Wi-fi de alta velocidade', 'Smart TV 40" 4K', 'Ar-condicionado Split', 'Ante sala', 'Varanda com vista Marina', 'Cofre eletrônico', 'Lençóis Trussardi 300 fios', 'Chuveiro alta pressão' ),
			'gallery'  => array( 'suites/arete/1.avif', 'suites/arete/240013143.avif', 'suites/arete/3.avif', 'suites/arete/4.avif' ),
			'menu'     => array( 'title' => 'Suíte Aretê', 'subtitle' => 'A assinatura do Hotel' ),
		),
		'ygara' => array(
			'tab'      => 'ygara',
			'eyebrow'  => 'A Mais Exclusiva',
			'title'    => 'Suíte Ygará',
			'text'     => 'A Suíte Ygará é a experiência mais marcante do Hotel Aretê. Com 70 m², é a mais reservada da casa, varanda ampla no quarto e no banheiro com vista direta para os barquinhos. Um refúgio íntimo.',
			'badges'   => array( '70 m²', 'Varanda ampla', 'Vista barcos', 'Exclusiva' ),
			'amenities'=> array( 'Wi-fi de alta velocidade', 'Smart TV 40" 4K', 'Ar-condicionado Split', 'Varanda ampla no quarto', 'Varanda no banheiro', 'Vista direta para barcos', 'Lençóis Trussardi 300 fios', 'Chuveiro alta pressão' ),
			'gallery'  => array( 'suites/ygara/1.avif', 'suites/ygara/2.avif', 'suites/ygara/3.avif', 'suites/ygara/4.avif', 'suites/ygara/5.avif' ),
			'menu'     => array( 'title' => 'Suíte Ygará', 'subtitle' => '70 m² | A Mais Exclusiva' ),
		),
    );

    // Monta a lista de suítes: ACF se preenchido, senão fallback.
    $suites = array();
    if ( function_exists( 'have_rows' ) && have_rows( 'suites_details' ) ) {
		$i = 0;
		while ( have_rows( 'suites_details' ) ) {
			the_row();
			$tab = get_sub_field( 'tab' );

			// badges
			$badges = array();
			if ( have_rows( 'badges' ) ) { while ( have_rows( 'badges' ) ) { the_row(); $badges[] = get_sub_field( 'badge' ); } }
			// amenities
			$amenities = array();
			if ( have_rows( 'amenities' ) ) { while ( have_rows( 'amenities' ) ) { the_row(); $amenities[] = get_sub_field( 'amenity' ); } }
			// gallery
			$gallery = array();
			if ( have_rows( 'gallery' ) ) { while ( have_rows( 'gallery' ) ) { the_row(); $gi = get_sub_field( 'img' ); if ( is_array( $gi ) && ! empty( $gi['url'] ) ) { $gallery[] = $gi['url']; } } }

			$suites[] = array(
				'tab'       => $tab,
				'eyebrow'   => get_sub_field( 'eyebrow' ),
				'title'     => get_sub_field( 'title' ),
				'text'      => get_sub_field( 'text' ),
				'badges'    => $badges,
				'amenities' => $amenities,
				'gallery'   => $gallery,
			);
		}
    }
    if ( empty( $suites ) ) {
		$suites = array_values( $suites_fallback );
        // Converte a galeria do fallback (caminhos relativos) em URLs de assets.
        foreach ( $suites as $k => $s ) {
            $suites[ $k ]['gallery'] = array_map( 'arete_asset', $s['gallery'] );
        }
    }

    $menu_eyebrow = 'Conheça nossas opções';
    $menu_title   = 'Categorias de Suítes';
    ?>
    <!-- Menu de Categorias -->
    <section class="suites-menu" style="padding: 100px 20px; text-align: center; background: #f8f8f8;">
      <div class="suites-menu-inner" style="max-width: 1200px; margin: 0 auto;">
        <div class="eyebrow" style="margin-bottom: 15px;"><?php echo esc_html( $menu_eyebrow ); ?></div>
        <h2 class="section-heading" style="margin-bottom: 40px;"><?php echo esc_html( $menu_title ); ?></h2>
        <div class="suites-menu-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
          <?php foreach ( $suites as $s ) : ?>
          <a href="#suites-detail" data-tab="<?php echo esc_attr( $s['tab'] ); ?>" class="suites-menu-item" style="padding: 20px; background: white; border-radius: 0; text-decoration: none; color: inherit; transition: all 0.3s;">
            <h3 style="margin: 0; font-size: 18px; font-weight: 600;"><?php echo esc_html( $s['title'] ); ?></h3>
            <?php $menu_sub = ( isset( $s['menu'] ) && ! empty( $s['menu']['subtitle'] ) ) ? $s['menu']['subtitle'] : ( ! empty( $suites_fallback[ $s['tab'] ]['menu']['subtitle'] ) ? $suites_fallback[ $s['tab'] ]['menu']['subtitle'] : '' ); ?>
            <p style="margin: 10px 0 0 0; color: #666; font-size: 14px;"><?php echo esc_html( $menu_sub ); ?></p>
          </a>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- Detalhes das Suítes (Tabs + Carousel) -->
    <section class="suites-detail" id="suites-detail">
      <div class="suites-detail-inner">

        <?php foreach ( $suites as $si => $s ) :
          $fallback = $suites_fallback[ $s['tab'] ] ?? $suites_fallback[ array_keys( $suites_fallback )[ $si ] ] ?? array( 'gallery' => array( '', '', '' ) );
          $gal      = $s['gallery'];
          if ( empty( $gal ) ) { $gal = array_map( 'arete_asset', $fallback['gallery'] ); }
          $badges   = ! empty( $s['badges'] ) ? $s['badges'] : ( $fallback['badges'] ?? array() );
          $amens    = ! empty( $s['amenities'] ) ? $s['amenities'] : ( $fallback['amenities'] ?? array() );
          $eyebrow  = ! empty( $s['eyebrow'] ) ? $s['eyebrow'] : ( $fallback['eyebrow'] ?? '' );
          $title    = ! empty( $s['title'] ) ? $s['title'] : ( $fallback['title'] ?? '' );
          $text     = ! empty( $s['text'] ) ? $s['text'] : ( $fallback['text'] ?? '' );
        ?>
        <div class="suites-tab-panel<?php echo 0 === $si ? ' active' : ''; ?>" data-tab="<?php echo esc_attr( $s['tab'] ); ?>">
          <div class="suites-carousel">
            <div class="suites-carousel-track">
              <?php foreach ( $gal as $g ) : ?>
              <div class="suites-carousel-slide" style="background-image:url('<?php echo esc_url( $g ); ?>')"></div>
              <?php endforeach; ?>
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
              <?php if ( $eyebrow ) : ?><div class="suites-info-eyebrow"><?php echo esc_html( $eyebrow ); ?></div><?php endif; ?>
              <h3 class="suites-info-title"><?php echo esc_html( $title ); ?></h3>
              <p class="suites-info-text"><?php echo wp_kses_post( $text ); ?></p>
              <?php if ( ! empty( $badges ) ) : ?>
              <div class="suites-info-badges">
                <?php foreach ( $badges as $b ) : ?><span><?php echo esc_html( $b ); ?></span><?php endforeach; ?>
              </div>
              <?php endif; ?>
              <a class="suites-info-btn" href="<?php echo esc_url( arete_booking_url() ); ?>" target="_blank" rel="noopener">Reservar</a>
            </div>
            <div class="suites-info-amenities">
              <h4>Comodidades</h4>
              <ul>
                <?php foreach ( $amens as $a ) : ?><li><?php echo esc_html( $a ); ?></li><?php endforeach; ?>
              </ul>
            </div>
          </div>
        </div>
        <?php endforeach; ?>

      </div>
    </section>

    <?php
    $amsec = (array) arete_field( 'suites_amenities_section', array() );
    $amsec_title = ! empty( $amsec['title'] ) ? $amsec['title'] : 'Todas as suítes incluem';
    $amsec_defaults = array( 'Wi-fi de alta velocidade', 'Smart TV', 'Ar-condicionado Split', 'Minicopa com frigobar', 'Máquina de café expresso', 'Cofre eletrônico', 'Lençóis Trussardi 300 fios', 'Chuveiro alta pressão' );
    $amsec_list = array();
    if ( function_exists( 'have_rows' ) && have_rows( 'suites_amenities_section_list' ) ) {
		while ( have_rows( 'suites_amenities_section_list' ) ) { the_row(); $amsec_list[] = get_sub_field( 'item' ); }
    }
    if ( empty( $amsec_list ) ) { $amsec_list = $amsec_defaults; }
    ?>
    <!-- Todas as suítes incluem -->
    <section class="amenities-section">
      <div class="amenities-inner">
        <h3 class="amenities-title"><?php echo esc_html( $amsec_title ); ?></h3>
        <div class="amenities-list">
          <?php foreach ( $amsec_list as $ai => $a ) : if ( $ai > 0 ) { echo '<span class="amenities-sep">◆</span>'; } ?>
          <span><?php echo esc_html( $a ); ?></span>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <?php
    $cta = (array) arete_field( 'suites_cta', array() );
    $cta_eyebrow = ! empty( $cta['eyebrow'] ) ? $cta['eyebrow'] : 'Disponibilidade';
    $cta_subtitle = ! empty( $cta['subtitle'] ) ? $cta['subtitle'] : 'Reserve diretamente pelo site e garanta boas condições';
    $cta_btn     = ! empty( $cta['btn'] )     ? $cta['btn']     : 'Verificar disponibilidade';
    ?>
    <!-- Escolha sua suíte -->
    <section class="cta-section">
      <div class="cta-inner">
        <div class="cta-eyebrow"><?php echo esc_html( $cta_eyebrow ); ?></div>
        <p class="cta-subtitle"><?php echo esc_html( $cta_subtitle ); ?></p>
        <a class="cta-btn" href="<?php echo esc_url( arete_booking_url() ); ?>" target="_blank" rel="noopener"><?php echo esc_html( $cta_btn ); ?></a>
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
          const slideW = slides[0] ? slides[0].offsetWidth : 0;
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
