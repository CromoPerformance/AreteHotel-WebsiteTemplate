<?php
/**
 * Template: Página FAQ
 *
 * Réplica exata da página faq.html, com conteúdo editável via ACF.
 *
 * @package AretêHotel
 */
?>
<?php get_header(); ?>

<?php
    $hero = (array) arete_field( 'faq_hero', array() );
    $hero_kicker   = ! empty( $hero['kicker'] )   ? $hero['kicker']   : 'Hotel Aretê';
    $hero_title1   = ! empty( $hero['title1'] )   ? $hero['title1']   : 'Perguntas';
    $hero_title2   = ! empty( $hero['title2'] )   ? $hero['title2']   : 'Frequentes';
    $hero_subtitle = ! empty( $hero['subtitle'] ) ? $hero['subtitle'] : 'Tudo o que você precisa saber';
    $hero_scroll   = ! empty( $hero['scroll'] )   ? $hero['scroll']   : 'Descobrir';
    ?>
    <section class="hero hero-subpage hero-faq">
      <div class="hero-inner">
        <div class="hero-kicker"><?php echo esc_html( $hero_kicker ); ?></div>
        <h1 class="hero-title"><?php echo esc_html( $hero_title1 ); ?><br><?php echo esc_html( $hero_title2 ); ?></h1>
        <p class="hero-subtitle"><?php echo esc_html( $hero_subtitle ); ?></p>
      </div>
      <div class="hero-scroll">
        <span class="hero-scroll-text"><?php echo esc_html( $hero_scroll ); ?></span>
        <div class="hero-scroll-line"></div>
      </div>
    </section>

    <?php
    $faq_defaults = array(
		array( 'question' => 'Qual é o horário de check-in e check-out?', 'answer' => 'Check-in a partir das 15h e check-out até as 12h. Consulte-nos sobre disponibilidade para late check-out ou early check-in.' ),
		array( 'question' => 'O café da manhã está incluído?', 'answer' => 'Sim, todas as suítes incluem café da manhã servido das 07h30 às 10h30 no restaurante do hotel.' ),
		array( 'question' => 'Como funciona o acesso ao Clube de Praia?', 'answer' => 'O Clube de Praia fica a 1,3 km do hotel e é para hóspedes. Inclui restaurante, piscina infantil e espaço kids com monitores.' ),
		array( 'question' => 'O hotel aceita cães?', 'answer' => 'Consulte nossa recepção para verificar disponibilidade de suítes dog-friendly e condições aplicáveis.' ),
		array( 'question' => 'É possível realizar eventos no hotel?', 'answer' => 'Sim! Oferecemos casamentos, mini weddings, aniversários e o Sunset Marina. A piscina também pode ser privatizada para eventos.' ),
		array( 'question' => 'O hotel oferece transfer do aeroporto?', 'answer' => 'O Aeroporto Umberto Modiano fica a apenas 7 minutos do hotel. Consulte-nos para organizar seu transfer.' ),
		array( 'question' => 'Como funciona o apoio náutico?', 'answer' => 'Em conjunto com a BR Marinas, oferecemos vagas para barcos de até 55 pés com infraestrutura de energia e água bem em frente ao hotel.' ),
    );
    $faq_items = array();
    if ( function_exists( 'have_rows' ) && have_rows( 'faq_items' ) ) {
		while ( have_rows( 'faq_items' ) ) {
			the_row();
			$faq_items[] = array( 'question' => get_sub_field( 'question' ), 'answer' => get_sub_field( 'answer' ) );
		}
    }
    if ( empty( $faq_items ) ) { $faq_items = $faq_defaults; }
    ?>
    <!-- FAQ -->
    <section class="faq-section">
      <div class="faq-inner">
        <?php foreach ( $faq_items as $item ) : ?>
        <div class="faq-item">
          <h3 class="faq-question"><?php echo esc_html( $item['question'] ); ?></h3>
          <p class="faq-answer"><?php echo wp_kses_post( $item['answer'] ); ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </section>

    <?php
    $cta = (array) arete_field( 'faq_cta', array() );
    $cta_title    = ! empty( $cta['title'] )    ? $cta['title']    : 'Ainda tem dúvidas?';
    $cta_subtitle = ! empty( $cta['subtitle'] ) ? $cta['subtitle'] : 'Nossa equipe está pronta para ajudar';
    $cta_btn      = ! empty( $cta['btn'] )      ? $cta['btn']      : 'Fale conosco';
    ?>
    <!-- CTA -->
    <section class="cta-section manifesto--wide" style="background: #004485;">
      <div class="cta-inner">
        <h2 class="cta-title"><?php echo esc_html( $cta_title ); ?></h2>
        <p class="cta-subtitle"><?php echo esc_html( $cta_subtitle ); ?></p>
        <a class="cta-btn" href="<?php echo esc_url( arete_whatsapp_url() ); ?>" target="_blank" rel="noopener"><?php echo esc_html( $cta_btn ); ?></a>
      </div>
    </section>
<?php get_footer(); ?>
