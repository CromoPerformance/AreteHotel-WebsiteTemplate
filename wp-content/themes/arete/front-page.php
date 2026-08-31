<?php
/**
 * Template: Front Page (Home)
 *
 * Réplica exata da home HTML (index.html).
 *
 * @package AretêHotel
 */
?>
<?php get_header(); ?>

    <?php
    $hero = (array) arete_field( 'home_hero', array() );
    $hero_kicker    = ! empty( $hero['kicker'] )    ? $hero['kicker']    : 'Búzios &middot; Rio de Janeiro';
    $hero_title     = ! empty( $hero['title'] )     ? $hero['title']     : 'Hotel ';
    $hero_title_em  = ! empty( $hero['title_em'] )  ? $hero['title_em']  : 'Aretê';
    $hero_subtitle  = ! empty( $hero['subtitle'] )  ? $hero['subtitle']  : 'Um refúgio entre o mar e a mata';
    $hero_bg        = ( ! empty( $hero['bg'] ) && is_array( $hero['bg'] ) && ! empty( $hero['bg']['url'] ) ) ? $hero['bg']['url'] : arete_asset( 'home/HERO-HOTEL.avif' );
    ?>
    <!-- Hero -->
    <section class="hero hero-home" id="hero" style="background-image:url('<?php echo esc_url( $hero_bg ); ?>')">
      <div class="hero-inner">
        <div class="hero-kicker"><?php echo esc_html( $hero_kicker ); ?></div>
        <h1 class="hero-title"><?php echo esc_html( $hero_title ); ?><em><?php echo esc_html( $hero_title_em ); ?></em></h1>
        <p class="hero-subtitle"><?php echo esc_html( $hero_subtitle ); ?></p>
      </div>

      <div class="booking-bar">
        <div class="booking-bar-inner">
          <div class="booking-field custom-select" id="checkinField">
            <label class="booking-label">Check-in</label>
            <div class="booking-display placeholder" id="checkinDisplay">Selecionar data</div>
            <div class="booking-dropdown booking-calendar" id="checkinDropdown">
              <div class="cal-header">
                <button class="cal-nav cal-prev" type="button">&lsaquo;</button>
                <span class="cal-month-label"></span>
                <button class="cal-nav cal-next" type="button">&rsaquo;</button>
              </div>
              <div class="cal-grid">
                <span class="cal-dow">dom</span><span class="cal-dow">seg</span><span class="cal-dow">ter</span><span class="cal-dow">qua</span><span class="cal-dow">qui</span><span class="cal-dow">sex</span><span class="cal-dow">sáb</span>
              </div>
              <div class="cal-days"></div>
            </div>
          </div>
          <div class="booking-field custom-select" id="checkoutField">
            <label class="booking-label">Check-out</label>
            <div class="booking-display placeholder" id="checkoutDisplay">Selecionar data</div>
            <div class="booking-dropdown booking-calendar" id="checkoutDropdown">
              <div class="cal-header">
                <button class="cal-nav cal-prev" type="button">&lsaquo;</button>
                <span class="cal-month-label"></span>
                <button class="cal-nav cal-next" type="button">&rsaquo;</button>
              </div>
              <div class="cal-grid">
                <span class="cal-dow">dom</span><span class="cal-dow">seg</span><span class="cal-dow">ter</span><span class="cal-dow">qua</span><span class="cal-dow">qui</span><span class="cal-dow">sex</span><span class="cal-dow">sáb</span>
              </div>
              <div class="cal-days"></div>
            </div>
          </div>
          <div class="booking-field custom-select" id="adultsField">
            <label class="booking-label">Adultos</label>
            <div class="booking-display" id="adultsDisplay">2 Adultos</div>
            <div class="booking-dropdown" id="adultsDropdown">
              <div class="booking-option selected" data-value="2">2 Adultos</div>
              <div class="booking-option" data-value="1">1 Adulto</div>
              <div class="booking-option" data-value="3">3 Adultos</div>
              <div class="booking-option" data-value="4">4 Adultos</div>
            </div>
          </div>
          <div class="booking-field custom-select" id="childrenField">
            <label class="booking-label">Crianças</label>
            <div class="booking-display" id="childrenDisplay">Nenhuma</div>
            <div class="booking-dropdown" id="childrenDropdown">
              <div class="booking-option selected" data-value="0">Nenhuma</div>
              <div class="booking-option" data-value="1">1 Criança</div>
              <div class="booking-option" data-value="2">2 Crianças</div>
            </div>
          </div>
          <button class="booking-btn" type="button">
            <svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
            Verificar
          </button>
        </div>
      </div>
    </section>

    <?php
    $manifesto = (array) arete_field( 'home_manifesto', array() );
    $manifesto_text = ! empty( $manifesto['text'] ) ? $manifesto['text'] : 'Aretê, palavra grega para excelência. Um hotel onde elegância, serviço e hospitalidade se encontram em cada detalhe. Um novo jeito de viver um novo Búzios.';
    ?>
    <section class="manifesto manifesto--spaced manifesto--no-lines" id="hotel">
      <div class="manifesto-ghost-bg" aria-hidden="true"></div>
      <div class="manifesto-inner">
        <p class="manifesto-text"><?php echo wp_kses_post( wpautop( $manifesto_text ) ); ?></p>
      </div>
    </section>

    <?php
    // Hub: usa repeater ACF se preenchido; senão usa os painéis originais.
    $hub_defaults = array(
		array( 'title' => 'O Hotel', 'subtitle' => 'Filosofia e identidade', 'image' => 'home/HOME-CARD-O-HOTEL.avif', 'link' => home_url( '/hotel/' ) ),
		array( 'title' => 'Ecossistema', 'subtitle' => 'O complexo completo', 'image' => 'home/arete-pista-ciclismo-mapafotografia%20001.avif', 'link' => home_url( '/ecossistema/' ) ),
		array( 'title' => 'Suítes', 'subtitle' => 'Refúgio e conforto', 'image' => 'home/HOME-CARD-SUITES.avif', 'link' => home_url( '/suites/' ) ),
		array( 'title' => 'Restaurante', 'subtitle' => 'Gastronomia autoral', 'image' => 'home/HOME-CARD-RESTAURANTE.avif', 'link' => home_url( '/restaurante/' ) ),
		array( 'title' => 'Experiências', 'subtitle' => 'Momentos inesquecíveis', 'image' => 'home/HOME-CARD-EXPERIENCIAS.avif', 'link' => home_url( '/experiencias/' ) ),
    );
    $hub_items = array();
    if ( function_exists( 'have_rows' ) && have_rows( 'home_hub' ) ) {
		while ( have_rows( 'home_hub' ) ) {
			the_row();
			$img  = get_sub_field( 'image' );
			$link = get_sub_field( 'link' );
			$hub_items[] = array(
				'title'      => get_sub_field( 'title' ),
				'subtitle'   => get_sub_field( 'subtitle' ),
				'image'      => ( is_array( $img ) && ! empty( $img['url'] ) ) ? $img['url'] : '',
				'link'       => is_array( $link ) ? ( $link['url'] ?? ( $link[0] ?? '#' ) ) : ( $link ? $link : '#' ),
				'link_label' => get_sub_field( 'link_label' ),
			);
		}
    }
    if ( empty( $hub_items ) ) {
		$hub_items = $hub_defaults;
		foreach ( $hub_items as &$h ) { $h['link_label'] = 'Explorar'; }
    }
    ?>
    <section class="hub">
      <?php foreach ( $hub_items as $i => $panel ) :
        $panel_img  = ! empty( $panel['image'] ) ? $panel['image'] : arete_asset( 'home/HOME-CARD-O-HOTEL.avif' );
        $panel_link = ! empty( $panel['link'] ) ? $panel['link'] : '#';
        $panel_label = ! empty( $panel['link_label'] ) ? $panel['link_label'] : 'Explorar';
      ?>
      <a href="<?php echo esc_url( $panel_link ); ?>" class="hub-panel">
        <div class="hub-panel-bg" style="background-image: url('<?php echo esc_url( $panel_img ); ?>');"></div>
        <div class="hub-panel-overlay"></div>
        <div class="hub-panel-content">
          <span class="hub-number"></span>
          <h2 class="hub-title"><?php echo esc_html( $panel['title'] ); ?></h2>
          <p class="hub-subtitle"><?php echo esc_html( $panel['subtitle'] ); ?></p>
          <span class="hub-link"><?php echo esc_html( $panel_label ); ?> <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor" fill="none" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></span>
        </div>
      </a>
      <?php endforeach; ?>
    </section>

    <?php
    $stats_defaults = array(
		array( 'number' => '8', 'label' => 'Categorias', 'desc' => 'de suítes pensadas para o seu conforto' ),
		array( 'number' => '1,3km', 'label' => 'Beach Club Aretê', 'desc' => 'pé na areia, tranquilidade e diversão' ),
		array( 'number' => '7 min', 'label' => 'do aeroporto', 'desc' => 'Aeroporto Umberto Modiano, 3 km' ),
    );
    $stats = array();
    if ( function_exists( 'have_rows' ) && have_rows( 'home_stats' ) ) {
		while ( have_rows( 'home_stats' ) ) {
			the_row();
			$stats[] = array(
				'number' => get_sub_field( 'number' ),
				'label'  => get_sub_field( 'label' ),
				'desc'   => get_sub_field( 'desc' ),
			);
		}
    }
    if ( empty( $stats ) ) { $stats = $stats_defaults; }
    ?>
    <?php if ( ! empty( $stats ) ) : ?>
    <section class="stats-section">
      <div class="stats-inner">
        <?php foreach ( $stats as $s ) : ?>
        <div class="stat-block">
          <div class="stat-number"><?php echo esc_html( $s['number'] ); ?></div>
          <div class="stat-label"><?php echo esc_html( $s['label'] ); ?></div>
          <div class="stat-desc"><?php echo esc_html( $s['desc'] ); ?></div>
        </div>
        <div class="stat-divider"></div>
        <?php endforeach; ?>
      </div>
    </section>
    <?php endif; ?>

    <?php
    $marina = (array) arete_field( 'home_marina', array() );
    $marina_eyebrow = ! empty( $marina['eyebrow'] ) ? $marina['eyebrow'] : 'Localização Exclusiva';
    $marina_title   = ! empty( $marina['title'] )   ? $marina['title']   : "A marina\ncomo seu\nquintal";
    $marina_sub     = ! empty( $marina['subtitle'] ) ? $marina['subtitle'] : 'Canais navegáveis, pôr do sol e acesso direto ao mar.';
    $marina_btn     = ! empty( $marina['btn_text'] ) ? $marina['btn_text'] : 'Conhecer o Hotel';
    $marina_link    = ! empty( $marina['btn_link'] ) ? ( is_array( $marina['btn_link'] ) ? ( $marina['btn_link']['url'] ?? $marina['btn_link'][0] ) : $marina['btn_link'] ) : home_url( '/hotel/' );
    $marina_bg      = ( ! empty( $marina['bg'] ) && is_array( $marina['bg'] ) && ! empty( $marina['bg']['url'] ) ) ? $marina['bg']['url'] : arete_asset( 'home/HOME-MARINA.avif' );
    ?>
    <section class="marina-hero">
      <div class="marina-hero-bg" style="background-image: url('<?php echo esc_url( $marina_bg ); ?>');"></div>
      <div class="marina-hero-overlay"></div>
      <div class="marina-hero-content">
        <div class="marina-eyebrow"><?php echo esc_html( $marina_eyebrow ); ?></div>
        <h2 class="marina-title"><?php echo nl2br( esc_html( $marina_title ) ); ?></h2>
        <p class="marina-subtitle"><?php echo esc_html( $marina_sub ); ?></p>
        <a href="<?php echo esc_url( $marina_link ); ?>" class="marina-btn"><?php echo esc_html( $marina_btn ); ?></a>
      </div>
    </section>

    <?php
    $tst = (array) arete_field( 'home_testimonials', array() );
    $tst_title   = ! empty( $tst['title'] )   ? $tst['title']   : 'Palavras de quem viveu';
    $tst_title_2 = ! empty( $tst['title_2'] ) ? $tst['title_2'] : 'a experiência do';
    $tst_brand   = ! empty( $tst['brand'] )   ? $tst['brand']   : 'Hotel Aretê';

    $testimonials_defaults = array(
		array(
			'text'    => 'Antes do Pórtico de entrada, existe um outro Búzios. Uma cidade mais rústica, mais natural, e com muito mais tranquilidade. O contato com a natureza é espetacular.',
			'author'  => 'Daniela',
			'via'     => 'Booking.com',
			'via_url' => 'https://www.booking.com/hotel/br/arete-buzios.pt-br.html',
			'icon'    => 'grafismos/icone-folha-azul.avif',
		),
		array(
			'text'    => 'Expectativas superadas. O Hotel é excepcional. Calmo, bem frequentado, limpo, organizado. Como arquiteto, parabenizo e aprecio as instalações. A vista da Marina, o café da manhã, a hidromassagem e a academia são pontos positivos à parte!',
			'author'  => 'João Siqueira',
			'via'     => 'TripAdvisor',
			'via_url' => 'https://www.tripadvisor.pt/Hotel_Review-g303492-d15302800-Reviews-or30-Hotel_Arete-Armacao_dos_Buzios_State_of_Rio_de_Janeiro.html#REVIEWS',
			'icon'    => 'grafismos/ICONE-ESPIRAL-AZUL.avif',
		),
		array(
			'text'    => 'Acomodações perfeitas. Quarto com cama maravilhosa, não dá vontade de sair, tudo limpo. Restaurante amplo, o café da manhã muito farto. Atendimentos do restaurante, da recepção, do bar da piscina, e camareiros, todos educados e prestativos. Voltarei.',
			'author'  => 'Helen Morgado',
			'via'     => 'Google',
			'via_url' => 'https://www.google.com/travel/search?q=hotel%20arete',
			'icon'    => 'grafismos/ICONE-SOL-AZUL.avif',
		),
    );
    $tst_items = array();
    if ( function_exists( 'have_rows' ) && have_rows( 'home_testimonials_slider' ) ) {
		while ( have_rows( 'home_testimonials_slider' ) ) {
			the_row();
			$icon = get_sub_field( 'icon' );
			$tst_items[] = array(
				'text'    => get_sub_field( 'text' ),
				'author'  => get_sub_field( 'author' ),
				'via'     => get_sub_field( 'via' ),
				'via_url' => get_sub_field( 'via_url' ),
				'icon'    => ( is_array( $icon ) && ! empty( $icon['url'] ) ) ? $icon['url'] : '',
			);
		}
    }
    if ( empty( $tst_items ) ) { $tst_items = $testimonials_defaults; }
    ?>
    <section class="testimonials">
      <h2 class="testimonials-title"><?php echo esc_html( $tst_title ); ?><br><?php echo esc_html( $tst_title_2 ); ?> <span class="testimonials-title-brand"><?php echo esc_html( $tst_brand ); ?></span></h2>
      <div class="testimonials-slider">
        <?php foreach ( $tst_items as $idx => $t ) : ?>
        <div class="testimonial<?php echo 0 === $idx ? ' active' : ''; ?>" data-index="<?php echo (int) $idx; ?>">
          <img class="quote-icon" src="<?php echo esc_url( ! empty( $t['icon'] ) ? $t['icon'] : arete_asset( 'grafismos/icone-folha-azul.avif' ) ); ?>" alt="" width="52" height="52">
          <p class="testimonial-text"><?php echo esc_html( $t['text'] ); ?></p>
          <div class="testimonial-author"><?php echo esc_html( $t['author'] ); ?> <span class="author-divider">|</span> via <a class="author-link" href="<?php echo esc_url( $t['via_url'] ); ?>" target="_blank" rel="noopener"><?php echo esc_html( $t['via'] ); ?></a></div>
        </div>
        <?php endforeach; ?>
      </div>
      <div class="testimonials-dots">
        <?php foreach ( $tst_items as $idx => $t ) : ?>
        <button class="dot<?php echo 0 === $idx ? ' active' : ''; ?>" data-index="<?php echo (int) $idx; ?>" aria-label="Depoimento <?php echo (int) ( $idx + 1 ); ?>"></button>
        <?php endforeach; ?>
      </div>
    </section>

    <?php
    $res = (array) arete_field( 'home_reservations', array() );
    $res_eyebrow = ! empty( $res['eyebrow'] ) ? $res['eyebrow'] : 'Reservas';
    $res_title   = ! empty( $res['title'] )   ? $res['title']   : "Reserve\nsua estadia";
    $res_desc    = ! empty( $res['desc'] )    ? $res['desc']    : 'Nossa equipe está disponível para criar uma experiência personalizada ao seu ritmo, desde a escolha da suíte ideal até a curadoria das experiências em Búzios.';
    ?>
    <section class="reservations">
      <div class="reservations-inner">
        <div class="reservations-content">
          <div class="reservations-eyebrow"><?php echo esc_html( $res_eyebrow ); ?></div>
          <h2 class="reservations-title"><?php echo nl2br( esc_html( $res_title ) ); ?></h2>
          <p class="reservations-desc"><?php echo esc_html( $res_desc ); ?></p>
        </div>
        <div class="reservations-form-wrap">
          <form class="reservations-form" id="resForm" novalidate>
            <div class="form-group">
              <label class="form-label">Nome <span class="required">*</span></label>
              <input type="text" class="form-input" name="nome" placeholder="Seu nome completo" required minlength="3">
              <span class="form-error">Por favor, informe seu nome (mínimo 3 caracteres).</span>
            </div>
            <div class="form-row">
              <div class="form-group">
                <label class="form-label">Telefone <span class="required">*</span></label>
                <input type="tel" class="form-input" name="telefone" placeholder="+55 (00) 00000-0000" required pattern="[\d\s\+\-\(\)]{10,}">
                <span class="form-error">Informe um telefone válido.</span>
              </div>
              <div class="form-group">
                <label class="form-label">E-mail <span class="required">*</span></label>
                <input type="email" class="form-input" name="email" placeholder="seu@email.com" required>
                <span class="form-error">Informe um e-mail válido.</span>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group">
                <label class="form-label">Check-in <span class="required">*</span></label>
                <div class="form-calendar-field" id="resCheckinField">
                  <div class="form-calendar-display placeholder" id="resCheckinDisplay">Selecionar data</div>
                  <svg class="form-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                  <div class="booking-dropdown booking-calendar" id="resCheckinDropdown">
                    <div class="cal-header">
                      <button class="cal-nav cal-prev" type="button">&lsaquo;</button>
                      <span class="cal-month-label"></span>
                      <button class="cal-nav cal-next" type="button">&rsaquo;</button>
                    </div>
                    <div class="cal-grid">
                      <span class="cal-dow">dom</span><span class="cal-dow">seg</span><span class="cal-dow">ter</span><span class="cal-dow">qua</span><span class="cal-dow">qui</span><span class="cal-dow">sex</span><span class="cal-dow">sáb</span>
                    </div>
                    <div class="cal-days"></div>
                  </div>
                </div>
                <span class="form-error">Selecione uma data de check-in.</span>
              </div>
              <div class="form-group">
                <label class="form-label">Check-out <span class="required">*</span></label>
                <div class="form-calendar-field" id="resCheckoutField">
                  <div class="form-calendar-display placeholder" id="resCheckoutDisplay">Selecionar data</div>
                  <svg class="form-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                  <div class="booking-dropdown booking-calendar" id="resCheckoutDropdown">
                    <div class="cal-header">
                      <button class="cal-nav cal-prev" type="button">&lsaquo;</button>
                      <span class="cal-month-label"></span>
                      <button class="cal-nav cal-next" type="button">&rsaquo;</button>
                    </div>
                    <div class="cal-grid">
                      <span class="cal-dow">dom</span><span class="cal-dow">seg</span><span class="cal-dow">ter</span><span class="cal-dow">qua</span><span class="cal-dow">qui</span><span class="cal-dow">sex</span><span class="cal-dow">sáb</span>
                    </div>
                    <div class="cal-days"></div>
                  </div>
                </div>
                <span class="form-error">Selecione uma data de check-out.</span>
              </div>
            </div>
            <div class="form-group">
              <label class="form-label">Mensagem</label>
              <textarea class="form-input form-textarea" name="mensagem" placeholder="Como podemos ajudar?" rows="4"></textarea>
            </div>
            <button type="submit" class="form-btn">Enviar Mensagem</button>
          </form>
          <div class="reservations-success" id="resSuccess" style="display:none;">
            <img class="success-anchor" src="<?php echo esc_url( arete_asset( 'grafismos/icone-ancora-azul.avif' ) ); ?>" alt="">
            <h3 class="success-title">Mensagem enviada!</h3>
            <p class="success-text">Obrigado pelo contato. Nossa equipe entrará em breve para conversarmos sobre sua experiência no Hotel Aretê.</p>
          </div>
        </div>
      </div>
    </section>

  <script>
    // Custom calendar date picker (home booking bar)
    const checkinDisplay = document.getElementById('checkinDisplay');
    const checkoutDisplay = document.getElementById('checkoutDisplay');
    const checkinDropdown = document.getElementById('checkinDropdown');
    const checkoutDropdown = document.getElementById('checkoutDropdown');
    let checkinValue = null;
    let checkoutValue = null;
    let activeCal = null; // { type: 'checkin'|'checkout', month, year }

    function formatDate(d) {
      if (!d) return '';
      const dd = String(d.getDate()).padStart(2, '0');
      const mm = String(d.getMonth() + 1).padStart(2, '0');
      return dd + '/' + mm + '/' + d.getFullYear();
    }

    function today() {
      const n = new Date();
      n.setHours(0, 0, 0, 0);
      return n;
    }

    function renderCalendar(container, type) {
      const now = today();
      if (!activeCal || activeCal.type !== type) {
        activeCal = { type: type, month: now.getMonth(), year: now.getFullYear() };
      }
      const m = activeCal.month;
      const y = activeCal.year;
      const monthNames = ['janeiro','fevereiro','março','abril','maio','junho','julho','agosto','setembro','outubro','novembro','dezembro'];

      container.querySelector('.cal-month-label').textContent = monthNames[m] + ' ' + y;

      const daysContainer = container.querySelector('.cal-days');
      daysContainer.innerHTML = '';

      const firstDay = new Date(y, m, 1).getDay();
      const daysInMonth = new Date(y, m + 1, 0).getDate();

      // Min date: today for checkin, checkin+1 for checkout
      let minDate = now;
      if (type === 'checkout' && checkinValue) {
        minDate = new Date(checkinValue);
        minDate.setDate(minDate.getDate() + 1);
      }

      // Empty cells before first day
      for (let i = 0; i < firstDay; i++) {
        const empty = document.createElement('div');
        empty.className = 'cal-day empty';
        daysContainer.appendChild(empty);
      }

      for (let d = 1; d <= daysInMonth; d++) {
        const btn = document.createElement('button');
        btn.type = 'button';
        btn.className = 'cal-day';
        btn.textContent = d;
        const thisDate = new Date(y, m, d);

        if (thisDate < minDate) {
          btn.classList.add('disabled');
        }
        if (thisDate.getTime() === now.getTime()) {
          btn.classList.add('today');
        }
        // Selected
        const selected = type === 'checkin' ? checkinValue : checkoutValue;
        if (selected && thisDate.getTime() === selected.getTime()) {
          btn.classList.add('selected');
        }
        // Range highlight
        if (checkinValue && checkoutValue) {
          if (thisDate > checkinValue && thisDate < checkoutValue) {
            btn.classList.add('in-range');
          }
          if (checkinValue.getTime() === thisDate.getTime()) btn.classList.add('range-start');
          if (checkoutValue.getTime() === thisDate.getTime()) btn.classList.add('range-end');
        }

        btn.addEventListener('click', function() {
          if (type === 'checkin') {
            checkinValue = thisDate;
            checkinDisplay.textContent = formatDate(checkinValue);
            checkinDisplay.classList.remove('placeholder');
            checkoutValue = null;
            checkoutDisplay.textContent = 'Selecionar data';
            checkoutDisplay.classList.add('placeholder');
          } else {
            checkoutValue = thisDate;
            checkoutDisplay.textContent = formatDate(checkoutValue);
            checkoutDisplay.classList.remove('placeholder');
          }
          checkinDropdown.classList.remove('open');
          checkoutDropdown.classList.remove('open');
        });

        daysContainer.appendChild(btn);
      }
    }

    // Nav buttons
    checkinDropdown.querySelector('.cal-prev').addEventListener('click', function(e) {
      e.stopPropagation();
      activeCal.month--;
      if (activeCal.month < 0) { activeCal.month = 11; activeCal.year--; }
      renderCalendar(checkinDropdown, 'checkin');
    });
    checkinDropdown.querySelector('.cal-next').addEventListener('click', function(e) {
      e.stopPropagation();
      activeCal.month++;
      if (activeCal.month > 11) { activeCal.month = 0; activeCal.year++; }
      renderCalendar(checkinDropdown, 'checkin');
    });
    checkoutDropdown.querySelector('.cal-prev').addEventListener('click', function(e) {
      e.stopPropagation();
      activeCal.month--;
      if (activeCal.month < 0) { activeCal.month = 11; activeCal.year--; }
      renderCalendar(checkoutDropdown, 'checkout');
    });
    checkoutDropdown.querySelector('.cal-next').addEventListener('click', function(e) {
      e.stopPropagation();
      activeCal.month++;
      if (activeCal.month > 11) { activeCal.month = 0; activeCal.year++; }
      renderCalendar(checkoutDropdown, 'checkout');
    });

    document.getElementById('checkinField').addEventListener('click', function(e) {
      if (e.target.closest('.booking-calendar')) return;
      document.querySelectorAll('.booking-dropdown.open').forEach(function(d) { d.classList.remove('open'); });
      renderCalendar(checkinDropdown, 'checkin');
      checkinDropdown.classList.add('open');
    });
    document.getElementById('checkoutField').addEventListener('click', function(e) {
      if (e.target.closest('.booking-calendar')) return;
      document.querySelectorAll('.booking-dropdown.open').forEach(function(d) { d.classList.remove('open'); });
      renderCalendar(checkoutDropdown, 'checkout');
      checkoutDropdown.classList.add('open');
    });

    // Custom select dropdowns (adults/children only)
    document.querySelectorAll('.booking-field.custom-select').forEach(function(field) {
      if (field.id === 'checkinField' || field.id === 'checkoutField') return;
      var display = field.querySelector('.booking-display');
      var dropdown = field.querySelector('.booking-dropdown');
      var options = dropdown.querySelectorAll('.booking-option');

      field.addEventListener('click', function(e) {
        var option = e.target.closest('.booking-option');
        if (option) {
          options.forEach(function(o) { o.classList.remove('selected'); });
          option.classList.add('selected');
          display.textContent = option.textContent;
          dropdown.classList.remove('open');
          return;
        }
        // Toggle dropdown
        document.querySelectorAll('.booking-dropdown.open').forEach(function(d) {
          if (d !== dropdown) d.classList.remove('open');
        });
        dropdown.classList.toggle('open');
      });
    });

    // Close dropdowns on outside click
    document.addEventListener('click', function(e) {
      if (!e.target.closest('.booking-field.custom-select') && !e.target.closest('.form-calendar-field')) {
        document.querySelectorAll('.booking-dropdown.open').forEach(function(d) {
          d.classList.remove('open');
        });
      }
    });

    // Booking button
    var selectedAdults = '2';
    var selectedChildren = '0';

    function fmtDate(d) {
      var day = d.getDate();
      var mon = d.getMonth() + 1;
      return (day < 10 ? '0' : '') + day + (mon < 10 ? '0' : '') + mon + d.getFullYear();
    }

    document.querySelector('.booking-btn').addEventListener('click', function() {
      var ci = checkinValue ? fmtDate(checkinValue) : '';
      var co = checkoutValue ? fmtDate(checkoutValue) : '';
      var ad = document.querySelector('#adultsDropdown .selected').dataset.value;
      var ch = document.querySelector('#childrenDropdown .selected').dataset.value;

      if (!ci || !co) {
        alert('Por favor, selecione as datas de check-in e check-out.');
        return;
      }

      var url = 'https://book.omnibees.com/hotelresults?c=11107&q=21102&currencyId=16&lang=pt-BR&hotel_folder=&NRooms=1&version=4'
        + '&CheckIn=' + ci + '&CheckOut=' + co
        + '&ad=' + ad + '&ch=' + ch + '&ag=0'
        + '&mobile=true&Code=&group_code=';
      window.location.href = url;
    });

    // Testimonials slider
    (function() {
      var testimonials = document.querySelectorAll('.testimonial');
      var dots = document.querySelectorAll('.dot');
      var current = 0;
      var interval = null;
      var delay = 5000;

      function goTo(index) {
        if (index === current) return;
        testimonials[current].classList.remove('active');
        dots[current].classList.remove('active');
        var prev = current;
        current = index;
        setTimeout(function() {
          testimonials[current].classList.add('active');
          dots[current].classList.add('active');
        }, 800);
      }

      function next() {
        goTo((current + 1) % testimonials.length);
      }

      function startTimer() {
        stopTimer();
        interval = setInterval(next, delay);
      }

      function stopTimer() {
        if (interval) clearInterval(interval);
      }

      dots.forEach(function(dot) {
        dot.addEventListener('click', function() {
          goTo(parseInt(this.dataset.index));
          startTimer();
        });
      });

      var slider = document.querySelector('.testimonials');
      slider.addEventListener('mouseenter', stopTimer);
      slider.addEventListener('mouseleave', startTimer);

      var touchStartX = 0;
      var touchEndX = 0;
      var swipeThreshold = 50;

      slider.addEventListener('touchstart', function(e) {
        touchStartX = e.changedTouches[0].screenX;
        stopTimer();
      }, { passive: true });

      slider.addEventListener('touchend', function(e) {
        touchEndX = e.changedTouches[0].screenX;
        var diff = touchStartX - touchEndX;
        if (Math.abs(diff) > swipeThreshold) {
          if (diff > 0) {
            goTo((current + 1) % testimonials.length);
          } else {
            goTo((current - 1 + testimonials.length) % testimonials.length);
          }
        }
        startTimer();
      }, { passive: true });

      startTimer();
    })();

    // Reservations form - custom calendar + validation
    (function() {
      var form = document.getElementById('resForm');
      var successMsg = document.getElementById('resSuccess');
      if (!form) return;

      // Custom calendar for form
      var resCheckinValue = null;
      var resCheckoutValue = null;
      var resCal = null;
      var months = ['jan','fev','mar','abr','mai','jun','jul','ago','set','out','nov','dez'];
      var fullMonths = ['janeiro','fevereiro','março','abril','maio','junho','julho','agosto','setembro','outubro','novembro','dezembro'];

      function formatResDate(d) {
        if (!d) return '';
        return d.getDate() + ' ' + months[d.getMonth()] + ' ' + d.getFullYear();
      }

      function renderResCalendar(container, type) {
        var now = new Date();
        now.setHours(0,0,0,0);
        if (!resCal || resCal.type !== type) {
          resCal = { type: type, month: now.getMonth(), year: now.getFullYear() };
        }
        var m = resCal.month;
        var y = resCal.year;
        container.querySelector('.cal-month-label').textContent = fullMonths[m] + ' ' + y;
        var daysContainer = container.querySelector('.cal-days');
        daysContainer.innerHTML = '';
        var firstDay = new Date(y, m, 1).getDay();
        var daysInMonth = new Date(y, m + 1, 0).getDate();
        var minDate = now;
        if (type === 'checkout' && resCheckinValue) {
          minDate = new Date(resCheckinValue);
          minDate.setDate(minDate.getDate() + 1);
        }
        for (var i = 0; i < firstDay; i++) {
          var empty = document.createElement('div');
          empty.className = 'cal-day empty';
          daysContainer.appendChild(empty);
        }
        for (var d = 1; d <= daysInMonth; d++) {
          var btn = document.createElement('button');
          btn.type = 'button';
          btn.className = 'cal-day';
          btn.textContent = d;
          var thisDate = new Date(y, m, d);
          if (thisDate < minDate) btn.classList.add('disabled');
          if (thisDate.getTime() === now.getTime()) btn.classList.add('today');
          var selected = type === 'checkin' ? resCheckinValue : resCheckoutValue;
          if (selected && thisDate.getTime() === selected.getTime()) btn.classList.add('selected');
          if (resCheckinValue && resCheckoutValue) {
            if (thisDate > resCheckinValue && thisDate < resCheckoutValue) btn.classList.add('in-range');
            if (resCheckinValue.getTime() === thisDate.getTime()) btn.classList.add('range-start');
            if (resCheckoutValue.getTime() === thisDate.getTime()) btn.classList.add('range-end');
          }
          (function(date, t) {
            btn.addEventListener('click', function() {
              if (t === 'checkin') {
                resCheckinValue = date;
                document.getElementById('resCheckinDisplay').textContent = formatResDate(date);
                document.getElementById('resCheckinDisplay').classList.remove('placeholder');
                resCheckoutValue = null;
                document.getElementById('resCheckoutDisplay').textContent = 'Selecionar data';
                document.getElementById('resCheckoutDisplay').classList.add('placeholder');
              } else {
                resCheckoutValue = date;
                document.getElementById('resCheckoutDisplay').textContent = formatResDate(date);
                document.getElementById('resCheckoutDisplay').classList.remove('placeholder');
              }
              document.getElementById('resCheckinDropdown').classList.remove('open');
              document.getElementById('resCheckoutDropdown').classList.remove('open');
              form.querySelectorAll('.form-group').forEach(function(g) {
                if (g.querySelector('.form-calendar-field')) g.classList.remove('invalid');
              });
            });
          })(thisDate, type);
          daysContainer.appendChild(btn);
        }
      }

      // nav for res calendars
      document.getElementById('resCheckinDropdown').querySelector('.cal-prev').addEventListener('click', function(e) {
        e.stopPropagation(); resCal.month--; if (resCal.month < 0) { resCal.month = 11; resCal.year--; } renderResCalendar(document.getElementById('resCheckinDropdown'), 'checkin');
      });
      document.getElementById('resCheckinDropdown').querySelector('.cal-next').addEventListener('click', function(e) {
        e.stopPropagation(); resCal.month++; if (resCal.month > 11) { resCal.month = 0; resCal.year++; } renderResCalendar(document.getElementById('resCheckinDropdown'), 'checkin');
      });
      document.getElementById('resCheckoutDropdown').querySelector('.cal-prev').addEventListener('click', function(e) {
        e.stopPropagation(); resCal.month--; if (resCal.month < 0) { resCal.month = 11; resCal.year--; } renderResCalendar(document.getElementById('resCheckoutDropdown'), 'checkout');
      });
      document.getElementById('resCheckoutDropdown').querySelector('.cal-next').addEventListener('click', function(e) {
        e.stopPropagation(); resCal.month++; if (resCal.month > 11) { resCal.month = 0; resCal.year++; } renderResCalendar(document.getElementById('resCheckoutDropdown'), 'checkout');
      });

      document.getElementById('resCheckinField').addEventListener('click', function(e) {
        if (e.target.closest('.booking-calendar')) return;
        document.querySelectorAll('.booking-dropdown.open').forEach(function(d) { d.classList.remove('open'); });
        renderResCalendar(document.getElementById('resCheckinDropdown'), 'checkin');
        document.getElementById('resCheckinDropdown').classList.add('open');
      });
      document.getElementById('resCheckoutField').addEventListener('click', function(e) {
        if (e.target.closest('.booking-calendar')) return;
        document.querySelectorAll('.booking-dropdown.open').forEach(function(d) { d.classList.remove('open'); });
        renderResCalendar(document.getElementById('resCheckoutDropdown'), 'checkout');
        document.getElementById('resCheckoutDropdown').classList.add('open');
      });

      // Phone formatter
      var phoneInput = form.querySelector('input[name="telefone"]');
      if (phoneInput) {
        phoneInput.addEventListener('input', function(e) {
          var val = this.value.replace(/\D/g, '');
          var formatted = '';
          if (val.length > 0) formatted = '+' + val.substring(0, 2);
          if (val.length > 2) formatted += ' (' + val.substring(2, 4);
          if (val.length > 4) formatted += ') ' + val.substring(4, 10);
          if (val.length > 10) formatted += '-' + val.substring(10, 15);
          this.value = formatted;
        });
      }

      // Auto-resize textarea
      var ta = form.querySelector('.form-textarea');
      if (ta) {
        ta.addEventListener('input', function() {
          this.style.height = 'auto';
          this.style.height = this.scrollHeight + 'px';
        });
      }

      // Clear error on input
      form.querySelectorAll('.form-input').forEach(function(input) {
        input.addEventListener('input', function() {
          this.closest('.form-group').classList.remove('invalid');
        });
        input.addEventListener('change', function() {
          this.closest('.form-group').classList.remove('invalid');
        });
      });

      // Validate + submit
      form.addEventListener('submit', function(e) {
        e.preventDefault();
        var valid = true;
        var groups = form.querySelectorAll('.form-group');

        groups.forEach(function(g) {
          var input = g.querySelector('.form-input');
          var calField = g.querySelector('.form-calendar-field');
          var ok = true;

          if (input) {
            var val = input.value.trim();
            if (input.required && !val) {
              ok = false;
            } else if (input.type === 'email' && val) {
              ok = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(val);
            } else if (input.name === 'telefone' && val) {
              ok = /[\d\s\+\-\(\)]{10,}/.test(val);
            } else if (input.name === 'nome' && val) {
              ok = val.length >= 3;
            }
          }

          if (calField) {
            if (calField.id === 'resCheckinField' && !resCheckinValue) ok = false;
            if (calField.id === 'resCheckoutField' && !resCheckoutValue) ok = false;
          }

          if (!ok) {
            g.classList.add('invalid');
            valid = false;
          } else {
            g.classList.remove('invalid');
          }
        });

        if (valid) {
          form.style.display = 'none';
          successMsg.style.display = 'block';
        }
      });
    })();
  </script>
<?php get_footer(); ?>
