<?php
/**
 * Template: Página FAQ
 *
 * Réplica exata da página faq.html.
 *
 * @package AretêHotel
 */
?>
<?php get_header(); ?>

    <section class="hero hero-subpage hero-faq">
      <div class="hero-inner">
        <div class="hero-kicker">Hotel Aretê</div>
        <h1 class="hero-title">Perguntas<br>Frequentes</h1>
        <p class="hero-subtitle">Tudo o que você precisa saber</p>
      </div>
      <div class="hero-scroll">
        <span class="hero-scroll-text">Descobrir</span>
        <div class="hero-scroll-line"></div>
      </div>
    </section>

    <!-- FAQ -->
    <section class="faq-section">
      <div class="faq-inner">
        <div class="faq-item">
          <h3 class="faq-question">Qual é o horário de check-in e check-out?</h3>
          <p class="faq-answer">Check-in a partir das 15h e check-out até as 12h. Consulte-nos sobre disponibilidade para late check-out ou early check-in.</p>
        </div>
        <div class="faq-item">
          <h3 class="faq-question">O café da manhã está incluído?</h3>
          <p class="faq-answer">Sim, todas as suítes incluem café da manhã servido das 07h30 às 10h30 no restaurante do hotel.</p>
        </div>
        <div class="faq-item">
          <h3 class="faq-question">Como funciona o acesso ao Clube de Praia?</h3>
          <p class="faq-answer">O Clube de Praia fica a 1,3 km do hotel e é para hóspedes. Inclui restaurante, piscina infantil e espaço kids com monitores.</p>
        </div>
        <div class="faq-item">
          <h3 class="faq-question">O hotel aceita cães?</h3>
          <p class="faq-answer">Consulte nossa recepção para verificar disponibilidade de suítes dog-friendly e condições aplicáveis.</p>
        </div>
        <div class="faq-item">
          <h3 class="faq-question">É possível realizar eventos no hotel?</h3>
          <p class="faq-answer">Sim! Oferecemos casamentos, mini weddings, aniversários e o Sunset Marina. A piscina também pode ser privatizada para eventos.</p>
        </div>
        <div class="faq-item">
          <h3 class="faq-question">O hotel oferece transfer do aeroporto?</h3>
          <p class="faq-answer">O Aeroporto Umberto Modiano fica a apenas 7 minutos do hotel. Consulte-nos para organizar seu transfer.</p>
        </div>
        <div class="faq-item">
          <h3 class="faq-question">Como funciona o apoio náutico?</h3>
          <p class="faq-answer">Em conjunto com a BR Marinas, oferecemos vagas para barcos de até 55 pés com infraestrutura de energia e água bem em frente ao hotel.</p>
        </div>
      </div>
    </section>

    <!-- CTA -->
    <section class="cta-section manifesto--wide" style="background: #004485;">
      <div class="cta-inner">
        <h2 class="cta-title">Ainda tem dúvidas?</h2>
        <p class="cta-subtitle">Nossa equipe está pronta para ajudar</p>
        <a class="cta-btn" href="<?php echo esc_url( arete_whatsapp_url() ); ?>" target="_blank" rel="noopener">Fale conosco</a>
      </div>
    </section>
<?php get_footer(); ?>
