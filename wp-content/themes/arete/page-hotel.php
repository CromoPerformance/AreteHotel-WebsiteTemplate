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

<?php
    $hero = (array) arete_field( 'hotel_hero', array() );
    $hero_kicker    = ! empty( $hero['kicker'] )   ? $hero['kicker']   : 'O Hotel';
    $hero_title     = ! empty( $hero['title'] )    ? $hero['title']    : 'Aretê';
    $hero_subtitle  = ! empty( $hero['subtitle'] ) ? $hero['subtitle'] : 'Um refúgio entre os canais navegáveis e a mata, onde cada detalhe foi pensado para o seu conforto.';
    $hero_bg        = ( ! empty( $hero['bg'] ) && is_array( $hero['bg'] ) && ! empty( $hero['bg']['url'] ) ) ? $hero['bg']['url'] : arete_asset( 'shared/DSCF4556.avif' );
    ?>
    <!-- Hero -->
    <section class="hero hero-hotel hero-subpage" id="hero" style="background-image:url('<?php echo esc_url( $hero_bg ); ?>')">
      <div class="hero-inner">
        <div class="hero-kicker"><?php echo esc_html( $hero_kicker ); ?></div>
        <h1 class="hero-title"><?php echo esc_html( $hero_title ); ?></h1>
        <p class="hero-subtitle"><?php echo nl2br( esc_html( $hero_subtitle ) ); ?></p>
      </div>
      <div class="hero-scroll">
        <span class="hero-scroll-text">Descobrir</span>
        <div class="hero-scroll-line"></div>
      </div>
    </section>

    <?php
    $hist = (array) arete_field( 'hotel_history', array() );
    $hist_eyebrow = ! empty( $hist['eyebrow'] )     ? $hist['eyebrow']     : 'História';
    $hist_h1      = ! empty( $hist['heading1'] )    ? $hist['heading1']    : 'Nasceu de um';
    $hist_em      = ! empty( $hist['heading_em'] )  ? $hist['heading_em']  : 'olhar';
    $hist_text1   = ! empty( $hist['text1'] )       ? $hist['text1']       : 'O Hotel Aretê nasceu da visão de que Búzios poderia ser vivido de outra forma. Não pela praia mais movimentada, mas pela escolha consciente de um lugar onde o tempo desacelera e a natureza conduz o ritmo dos dias.';
    $hist_text2   = ! empty( $hist['text2'] )       ? $hist['text2']       : 'O hotel integra o bairro Aretê, um refúgio de Búzios pensado para quem valoriza o mar, a natureza, o esporte e a tranquilidade. Aqui, a marina faz parte do cotidiano, o silêncio acompanha a paisagem e o cuidado está presente em cada detalhe.';
    $hist_btn     = ! empty( $hist['btn'] )         ? $hist['btn']         : 'Reservar sua estadia';
    ?>
    <!-- História -->
    <section class="manifesto manifesto--spaced manifesto--no-lines">
      <div class="manifesto-inner">
        <div class="eyebrow" style="margin-bottom: 32px;"><?php echo esc_html( $hist_eyebrow ); ?></div>
        <h2 class="section-heading" style="margin-bottom: 32px;"><?php echo esc_html( $hist_h1 ); ?><br><em><?php echo esc_html( $hist_em ); ?></em></h2>
        <p class="manifesto-text" style="font-size: clamp(16px, 1.8vw, 24px); font-style: normal; max-width: 880px;"><?php echo wp_kses_post( $hist_text1 ); ?></p>
        <p class="manifesto-text" style="font-size: clamp(16px, 1.8vw, 24px); font-style: normal; max-width: 880px; margin-top: 16px;"><?php echo wp_kses_post( $hist_text2 ); ?></p>
        <a class="btn-outline" href="<?php echo esc_url( arete_booking_url() ); ?>" target="_blank" rel="noopener" style="margin-top: 32px;"><?php echo esc_html( $hist_btn ); ?></a>
      </div>
    </section>

    <?php
    // Galeria: usa repeater ACF se preenchido; senão as 4 fotos originais.
    $gallery_defaults = array( 'new/DSCF4028.avif', 'new/DSCF4130.avif', 'new/DSCF4152.avif', 'new/DSCF4147.avif' );
    $gallery = array();
    if ( function_exists( 'have_rows' ) && have_rows( 'hotel_gallery' ) ) {
		while ( have_rows( 'hotel_gallery' ) ) {
			the_row();
			$img = get_sub_field( 'img' );
			if ( is_array( $img ) && ! empty( $img['url'] ) ) {
				$gallery[] = $img['url'];
			}
		}
    }
    if ( empty( $gallery ) ) { $gallery = array_map( 'arete_asset', $gallery_defaults ); }
    ?>
    <!-- Galeria -->
    <section class="quad-gallery">
      <?php foreach ( $gallery as $g ) : ?>
      <div class="quad-gallery-img" style="background-image:url('<?php echo esc_url( $g ); ?>')" aria-hidden="true"></div>
      <?php endforeach; ?>
    </section>

    <?php
    $manifesto = (array) arete_field( 'hotel_manifesto', array() );
    $manifesto_text = ! empty( $manifesto['text'] ) ? $manifesto['text'] : 'Um novo jeito de viver Búzios: por inteiro, do amanhecer ao pôr do sol. Aqui, cada detalhe foi pensado para que você não precise escolher entre conforto e natureza, entre sossego e experiência.';
    ?>
    <!-- Manifesto -->
    <section class="manifesto manifesto--spaced manifesto--no-lines" id="hotel">
      <div class="manifesto-inner">
        <p class="manifesto-text"><?php echo wp_kses_post( $manifesto_text ); ?></p>
      </div>
    </section>

    <?php
    $pillars_defaults = array(
		array( 'label' => 'Viver', 'desc' => 'Longe do agito, perto de tudo que importa.' ),
		array( 'label' => 'Sentir', 'desc' => 'O cheiro do café da manhã, o conforto da suíte, a luz da marina no fim da tarde.' ),
		array( 'label' => 'Pertencer', 'desc' => 'Seu tempo, seu ritmo, seu lugar.' ),
    );
    $pillars = array();
    if ( function_exists( 'have_rows' ) && have_rows( 'hotel_pillars' ) ) {
		while ( have_rows( 'hotel_pillars' ) ) {
			the_row();
			$pillars[] = array( 'label' => get_sub_field( 'label' ), 'desc' => get_sub_field( 'desc' ) );
		}
    }
    if ( empty( $pillars ) ) { $pillars = $pillars_defaults; }
    ?>
    <!-- Pilares -->
    <section class="stats-section hotel-pillars">
      <div class="stats-inner">
        <?php foreach ( $pillars as $p ) : ?>
        <div class="stat-block">
          <div class="stat-label"><?php echo esc_html( $p['label'] ); ?></div>
          <div class="stat-desc"><?php echo esc_html( $p['desc'] ); ?></div>
        </div>
        <?php endforeach; ?>
      </div>
    </section>

    <?php
    $diff = (array) arete_field( 'hotel_differentials', array() );
    $diff_eyebrow = ! empty( $diff['eyebrow'] ) ? $diff['eyebrow'] : 'Exclusividade';
    $diff_title   = ! empty( $diff['title'] )   ? $diff['title']   : 'Diferenciais Aretê';
    $diff_btn     = ! empty( $diff['btn'] )     ? $diff['btn']     : 'Reservar sua estadia';
    $diff_defaults = array(
		array( 'heading' => 'Completo Apoio Náutico', 'text' => 'O Hotel Aretê em conjunto com a BR Marinas Búzios proporcionam a comodidade de ancorar seu barco bem em frente ao Hotel. Vagas para barcos de até 55 pés.' ),
		array( 'heading' => 'Aeroporto Umberto Modiano', 'text' => 'Com o aeroporto a apenas 7 minutos da recepção do Hotel Aretê, você chega mais rápido e aproveita as delícias de Búzios sem pressa.' ),
		array( 'heading' => 'Beach Club Aretê', 'text' => 'O Beach Club Aretê fica a 2 minutos de carro, com acesso liberado para hóspedes. Restaurante com deck, piscina, sauna seca e a vapor, spa e área kids, pé na areia, sem multidão.' ),
		array( 'heading' => 'Gastronomia Autoral', 'text' => 'Horta própria, produção artesanal, culinária local, e o melhor lugar da marina para ver o sol se pôr.' ),
    );
    $diff_items = array();
    if ( function_exists( 'have_rows' ) && have_rows( 'hotel_differentials_items' ) ) {
		while ( have_rows( 'hotel_differentials_items' ) ) {
			the_row();
			$diff_items[] = array( 'heading' => get_sub_field( 'heading' ), 'text' => get_sub_field( 'text' ) );
		}
    }
    if ( empty( $diff_items ) ) { $diff_items = $diff_defaults; }
    ?>
    <!-- Diferenciais -->
    <section class="differentials">
      <div class="differentials-header">
        <div class="eyebrow"><?php echo esc_html( $diff_eyebrow ); ?></div>
        <h2 class="differentials-title"><?php echo esc_html( $diff_title ); ?></h2>
      </div>
      <div class="differentials-list">
        <?php foreach ( $diff_items as $di => $item ) : ?>
        <div class="diff-item">
          <div class="diff-numeral"><?php echo esc_html( str_pad( (string) ( $di + 1 ), 2, '0', STR_PAD_LEFT ) ); ?></div>
          <div class="diff-content">
            <h3 class="diff-heading"><?php echo esc_html( $item['heading'] ); ?></h3>
            <p class="diff-text"><?php echo wp_kses_post( $item['text'] ); ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
      <div style="text-align: center; margin-top: 48px;">
        <a class="btn-outline" href="<?php echo esc_url( arete_booking_url() ); ?>" target="_blank" rel="noopener"><?php echo esc_html( $diff_btn ); ?></a>
      </div>
    </section>

    <?php
    $nat = (array) arete_field( 'hotel_nature', array() );
    $nat_eyebrow = ! empty( $nat['eyebrow'] ) ? $nat['eyebrow'] : 'Natureza &amp; Localização';
    $nat_title   = ! empty( $nat['title'] )   ? $nat['title']   : "Aqui a natureza\né a anfitriã";
    $nat_text1   = ! empty( $nat['text1'] )   ? $nat['text1']   : 'A vista do quarto encontra os barcos ancorados no cais. O restaurante guarda o melhor lugar para o pôr do sol. E o deck convida a parar, nem que seja por um instante.';
    $nat_text2   = ! empty( $nat['text2'] )   ? $nat['text2']   : 'A vegetação nativa chegou primeiro. O bairro Aretê nasceu ao redor dela. E o verde aparece em cada esquina.';
    $nat_img     = ( ! empty( $nat['img'] ) && is_array( $nat['img'] ) && ! empty( $nat['img']['url'] ) ) ? $nat['img']['url'] : '';
    ?>
    <!-- Natureza & Localização -->
    <section class="nature-split nature-split-reverse nature-split--img-bottom">
      <div class="nature-split-content">
        <div class="eyebrow"><?php echo esc_html( $nat_eyebrow ); ?></div>
        <h2 class="nature-split-title"><?php echo nl2br( esc_html( $nat_title ) ); ?></h2>
        <p class="nature-split-text"><?php echo wp_kses_post( $nat_text1 ); ?></p>
        <p class="nature-split-text"><?php echo wp_kses_post( $nat_text2 ); ?></p>
      </div>
      <div class="nature-split-image"<?php if ( $nat_img ) { echo ' style="background-image:url(\'' . esc_url( $nat_img ) . '\');background-size:cover;background-position:center;"'; } ?> aria-hidden="true"></div>
    </section>

    <?php
    $sust = (array) arete_field( 'hotel_sust', array() );
    $sust_eyebrow = ! empty( $sust['eyebrow'] ) ? $sust['eyebrow'] : 'Sustentabilidade';
    $sust_title   = ! empty( $sust['title'] )   ? $sust['title']   : "O destino final\nnos importa";
    $sust_text    = ! empty( $sust['text'] )    ? $sust['text']    : 'Acreditamos que cada escolha pode gerar um impacto positivo no meio ambiente. Por isso, fazemos:';
    $sust_img     = ( ! empty( $sust['img'] ) && is_array( $sust['img'] ) && ! empty( $sust['img']['url'] ) ) ? $sust['img']['url'] : arete_asset( 'new/DSCF4020.jpg' );
    $sust_img_inline = 'background: url(\'' . esc_url( $sust_img ) . '\') center center / cover no-repeat;';
    $sust_defaults = array(
		array( 'icon' => 'grafismos/compostagem.png', 'label' => '<strong>Compostagem</strong> de resíduos orgânicos' ),
		array( 'icon' => 'grafismos/reciclagem.png', 'label' => '<strong>Reciclagem</strong> através de ecopontos para separação' ),
		array( 'icon' => 'grafismos/ammenities.png', 'label' => '<strong>Amenities Sustentáveis</strong> em embalagens permanentes e recarregáveis' ),
		array( 'icon' => 'grafismos/gimba.png', 'label' => '<strong>Reciclagem de Guimbas</strong> em parceria com a Poiato' ),
		array( 'icon' => 'grafismos/reaproveitamento.png', 'label' => '<strong>Reaproveitamento</strong> de enxovais que ganham nova vida' ),
    );
    $sust_items = array();
    if ( function_exists( 'have_rows' ) && have_rows( 'hotel_sust_items' ) ) {
		while ( have_rows( 'hotel_sust_items' ) ) {
			the_row();
			$icon = get_sub_field( 'icon' );
			$sust_items[] = array(
				'icon'  => ( is_array( $icon ) && ! empty( $icon['url'] ) ) ? $icon['url'] : '',
				'label' => get_sub_field( 'label' ),
			);
		}
    }
    if ( empty( $sust_items ) ) { $sust_items = $sust_defaults; }
    ?>
    <!-- Sustentabilidade -->
    <section class="nature-split">
      <div class="nature-split-content" style="background-color: white;">
        <div class="eyebrow"><?php echo esc_html( $sust_eyebrow ); ?></div>
        <h2 class="nature-split-title"><?php echo nl2br( esc_html( $sust_title ) ); ?></h2>
        <p class="nature-split-text"><?php echo wp_kses_post( $sust_text ); ?></p>
        <ul class="sust-list">
          <?php foreach ( $sust_items as $si ) : $sust_icon = arete_asset_or_url( $si['icon'] ); if ( ! $sust_icon ) { $sust_icon = arete_asset( 'grafismos/compostagem.png' ); } ?>
          <li class="sust-item">
            <span class="sust-item-icon" style="background-image:url('<?php echo esc_url( $sust_icon ); ?>')"></span>
            <span class="sust-item-label"><?php echo wp_kses_post( $si['label'] ); ?></span>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="nature-split-image" style="<?php echo $sust_img_inline; ?>" aria-hidden="true"></div>
    </section>

    <?php
    $team = (array) arete_field( 'hotel_team', array() );
    $team_eyebrow = ! empty( $team['eyebrow'] ) ? $team['eyebrow'] : 'Equipe &amp; Bastidores';
    $team_title   = ! empty( $team['title'] )   ? $team['title']   : 'Um time que cuida';
    $team_text    = ! empty( $team['text'] )    ? $team['text']    : 'Que faz você se sentir em casa, mesmo longe dela. Antecipa o que você precisa e acolhe de verdade.';
    $team_imgs = array(
		( ! empty( $team['img1'] ) && is_array( $team['img1'] ) && ! empty( $team['img1']['url'] ) ) ? $team['img1']['url'] : arete_asset( 'shared/DSCF4153.avif' ),
		( ! empty( $team['img2'] ) && is_array( $team['img2'] ) && ! empty( $team['img2']['url'] ) ) ? $team['img2']['url'] : arete_asset( 'shared/DSCF4104.avif' ),
    );
    ?>
    <!-- Equipe & Bastidores -->
    <section class="nature-split nature-split-reverse">
      <div class="nature-split-content">
        <div class="eyebrow"><?php echo esc_html( $team_eyebrow ); ?></div>
        <h2 class="nature-split-title"><?php echo esc_html( $team_title ); ?></h2>
        <p class="nature-split-text"><?php echo wp_kses_post( $team_text ); ?></p>
      </div>
      <div class="nature-split-image nature-split-dual">
        <div class="nature-split-dual-item" style="background-image:url('<?php echo esc_url( $team_imgs[0] ); ?>')" aria-hidden="true"></div>
        <div class="nature-split-dual-item" style="background-image:url('<?php echo esc_url( $team_imgs[1] ); ?>')" aria-hidden="true"></div>
      </div>
    </section>

    <?php
    $dog = (array) arete_field( 'hotel_dog', array() );
    $dog_eyebrow = ! empty( $dog['eyebrow'] ) ? $dog['eyebrow'] : 'Dog Friendly';
    $dog_title   = ! empty( $dog['title'] )   ? $dog['title']   : "Seu companheiro\né bem-vindo";
    $dog_text1   = ! empty( $dog['text1'] )   ? $dog['text1']   : 'No Hotel Aretê, apoiamos a causa animal com ações de castração e adoção responsável. Sabemos que a experiência é mais completa quando todos estão juntos, por isso, somos dog friendly e oferecemos um ambiente preparado para hospedar seu companheiro de viagem.';
    $dog_text2   = ! empty( $dog['text2'] )   ? $dog['text2']   : 'Consulte nossa recepção para verificar disponibilidade do seu pet e conhecer nosso Termo Pet com condições e regras.';
    $dog_gallery_defaults = array( 'shared/DSCF4776.avif', 'shared/DSCF4735.avif', 'shared/DSCF4103.jpg' );
    // background-position é específico por foto no original; preserva via defaults abaixo.
    $dog_gallery_pos = array( '', 'bottom', 'center' );
    $dog_gallery = array();
    if ( function_exists( 'have_rows' ) && have_rows( 'hotel_dog_gallery' ) ) {
		while ( have_rows( 'hotel_dog_gallery' ) ) {
			the_row();
			$img = get_sub_field( 'img' );
			if ( is_array( $img ) && ! empty( $img['url'] ) ) {
				$dog_gallery[] = $img['url'];
			}
		}
    }
    if ( empty( $dog_gallery ) ) { $dog_gallery = array_map( 'arete_asset', $dog_gallery_defaults ); }
    ?>
    <!-- Dog Friendly -->
    <section class="nature-split nature-split-reverse">
      <div class="nature-split-content">
        <div class="eyebrow"><?php echo esc_html( $dog_eyebrow ); ?></div>
        <h2 class="nature-split-title"><?php echo nl2br( esc_html( $dog_title ) ); ?></h2>
        <p class="nature-split-text"><?php echo wp_kses_post( $dog_text1 ); ?></p>
        <p class="nature-split-text"><?php echo wp_kses_post( $dog_text2 ); ?></p>
      </div>
      <div class="nature-split-gallery">
        <?php foreach ( $dog_gallery as $dgi => $dog_img ) : $pos = isset( $dog_gallery_pos[ $dgi ] ) ? $dog_gallery_pos[ $dgi ] : ''; ?>
        <div class="nature-split-gallery-item" style="background-image:url('<?php echo esc_url( $dog_img ); ?>');<?php echo $pos ? 'background-position:' . esc_attr( $pos ) . ';' : ''; ?>" aria-hidden="true"></div>
        <?php endforeach; ?>
      </div>
    </section>

    <?php
    $cta = (array) arete_field( 'hotel_cta', array() );
    $cta_eyebrow = ! empty( $cta['eyebrow'] ) ? $cta['eyebrow'] : 'Sua estadia começa aqui';
    $cta_title   = ! empty( $cta['title'] )   ? $cta['title']   : 'Reserve sua experiência';
    $cta_subtitle = ! empty( $cta['subtitle'] ) ? $cta['subtitle'] : 'Cada detalhe pensado para o seu conforto e bem-estar';
    $cta_btn     = ! empty( $cta['btn'] )     ? $cta['btn']     : 'Verificar disponibilidade';
    ?>
    <!-- CTA -->
    <section class="cta-section cta-compact">
      <div class="cta-inner">
        <div class="cta-eyebrow"><?php echo esc_html( $cta_eyebrow ); ?></div>
        <h2 class="cta-title"><?php echo esc_html( $cta_title ); ?></h2>
        <p class="cta-subtitle"><?php echo esc_html( $cta_subtitle ); ?></p>
        <a class="cta-btn" href="<?php echo esc_url( arete_booking_url() ); ?>" target="_blank" rel="noopener"><?php echo esc_html( $cta_btn ); ?></a>
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
