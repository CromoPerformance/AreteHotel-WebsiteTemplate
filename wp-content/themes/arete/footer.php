<?php
/**
 * Template: Footer
 *
 * Rodapé global + barra de reserva fixa + botão WhatsApp,
 * replicando o template HTML.
 *
 * @package AretêHotel
 */
?>
    <section class="footer foot-note">
      <div class="footer-inner">
        <div class="footer-top">
          <div class="footer-brand">
            <a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="Hotel Aretê Búzios">
              <img class="brand-logo" src="<?php echo esc_url( arete_asset( 'logos/191010_Marca_Hotel_Arete_Buzios_Vert_Mono.avif' ) ); ?>" alt="Hotel Aretê Búzios">
            </a>
            <p class="footer-text">Localizado às margens dos canais navegáveis de Búzios, o Hotel Aretê é uma expressão da arte de viver bem, em permanente conexão com a natureza e a paisagem costeira do Rio de Janeiro.</p>
            <div class="socials" aria-label="Redes sociais">
              <a class="social" href="<?php echo esc_url( arete_whatsapp_url() ); ?>" target="_blank" rel="noopener" aria-label="WhatsApp"><svg viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"></path><path d="M12 2C6.477 2 2 6.477 2 12c0 1.89.525 3.66 1.438 5.168L2 22l4.832-1.438A9.955 9.955 0 0 0 12 22c5.523 0 10-4.477 10-10S17.523 2 12 2z"></path></svg></a>
            </div>
          </div>

          <div>
            <div class="footer-title">O Hotel</div>
            <div class="footer-links">
              <a href="<?php echo esc_url( home_url( '/hotel/' ) ); ?>">O Hotel</a>
              <a href="<?php echo esc_url( home_url( '/ecossistema/' ) ); ?>">Ecossistema</a>
              <a href="<?php echo esc_url( home_url( '/localizacao-buzios/' ) ); ?>">Localização & Búzios</a>
              <a href="<?php echo esc_url( home_url( '/suites/' ) ); ?>">Suítes</a>
              <a href="<?php echo esc_url( home_url( '/restaurante/' ) ); ?>">Restaurante</a>
              <a href="<?php echo esc_url( home_url( '/experiencias/' ) ); ?>">Experiências</a>
              <a href="<?php echo esc_url( home_url( '/eventos/' ) ); ?>">Eventos</a>
              <a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>">FAQ</a>
            </div>
          </div>

          <div>
            <div class="footer-title">Contato</div>
            <div class="footer-links">
              <a class="footer-link" href="tel:+552220080155">+55 (22) 2008-0155</a>
              <a class="footer-link" href="mailto:reservas@hotelarete.com.br">reservas@hotelarete.com.br</a>
              <a class="footer-link" href="<?php echo esc_url( arete_booking_url() ); ?>" target="_blank" rel="noopener">Fazer reserva</a>
            </div>
          </div>

          <div>
            <div class="footer-title">Como chegar</div>
            <div class="footer-links">
              <a class="footer-link" href="https://www.google.com/maps/dir//hotel+arete/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x97ab7cbd61aba7:0x5c3fff09eeb1c714?sa=X&amp;ved=1t:155782&amp;ictx=111" target="_blank" rel="noopener">Google Maps</a>
              <a class="footer-link" href="https://waze.com/ul?q=Hotel+Aretê+Búzios" target="_blank" rel="noopener">Waze</a>
              <a class="footer-link" href="https://www.google.com/maps/dir/Hotel+Aret%C3%AA,+Alameda+Andorinhas+-+Lot.+Praia+Baia+Formosa,+Arma%C3%A7%C3%A3o+dos+B%C3%BAzios+-+RJ,+28950-000/Aeroporto+Umberto+Modiano+-+(B%C3%BAzios),+Avenida+Umberto+Modiano,+s%2Fn%C2%B0,+Lote:+13+-+Golfe,+Arma%C3%A7%C3%A3o+dos+B%C3%BAzios+-+RJ,+28958-100/@-22.75636,-41.964345,3630m/data=!3m2!1e3!4b1!4m13!4m12!1m5!1m1!1s0x97ab7cbd61aba7:0x5c3fff09eeb1c714!2m2!1d-41.9563427!2d-22.7490866!1m5!1m1!1s0x97008addd704ad:0xc8fc518f67d72671!2m2!1d-41.9614485!2d-22.7666058?entry=ttu" target="_blank" rel="noopener">Aeroporto</a>
            </div>
          </div>
        </div>

        <div class="footer-divider"></div>

        <div class="footer-bottom">
          <span>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> Hotel Aretê &middot; Búzios, Rio de Janeiro</span>
        </div>
      </div>
    </section>

  </main>

  <!-- Sticky Booking Bar -->
  <div class="sticky-booking" id="stickyBooking"><button type="button" class="sticky-booking-close" aria-label="Fechar barra de reserva">&times;</button>
    <div class="sticky-booking-inner">
      <div class="booking-field custom-select" id="stickyCheckinField">
        <label class="booking-label">Check-in</label>
        <div class="booking-display placeholder" id="stickyCheckinDisplay">Selecionar data</div>
        <div class="booking-dropdown booking-calendar" id="stickyCheckinDropdown">
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
      <div class="booking-field custom-select" id="stickyCheckoutField">
        <label class="booking-label">Check-out</label>
        <div class="booking-display placeholder" id="stickyCheckoutDisplay">Selecionar data</div>
        <div class="booking-dropdown booking-calendar" id="stickyCheckoutDropdown">
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
      <div class="booking-field custom-select" id="stickyAdultsField">
        <label class="booking-label">Adultos</label>
        <div class="booking-display" id="stickyAdultsDisplay">2 Adultos</div>
        <div class="booking-dropdown" id="stickyAdultsDropdown">
          <div class="booking-option selected" data-value="2">2 Adultos</div>
          <div class="booking-option" data-value="1">1 Adulto</div>
          <div class="booking-option" data-value="3">3 Adultos</div>
          <div class="booking-option" data-value="4">4 Adultos</div>
        </div>
      </div>
      <div class="booking-field custom-select" id="stickyChildrenField">
        <label class="booking-label">Crianças</label>
        <div class="booking-display" id="stickyChildrenDisplay">Nenhuma</div>
        <div class="booking-dropdown" id="stickyChildrenDropdown">
          <div class="booking-option selected" data-value="0">Nenhuma</div>
          <div class="booking-option" data-value="1">1 Criança</div>
          <div class="booking-option" data-value="2">2 Crianças</div>
        </div>
      </div>
      <button type="button" class="booking-btn">
        <svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
        Reservar</button>
    </div>
  </div>

  <!-- WhatsApp Float -->
  <a href="<?php echo esc_url( arete_whatsapp_url() ); ?>" target="_blank" rel="noopener" class="whatsapp-float" aria-label="Fale conosco pelo WhatsApp">
    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path d="M16.004 0h-.008C7.174 0 0 7.176 0 16c0 3.5 1.132 6.744 3.058 9.374L1.054 31.29l6.118-1.988A15.907 15.907 0 0016.004 32C24.826 32 32 24.822 32 16S24.826 0 16.004 0zm9.31 22.6c-.39 1.1-1.932 2.014-3.158 2.28-.84.18-1.936.322-5.636-1.21-4.74-1.962-7.79-6.79-8.024-7.106-.226-.316-1.86-2.476-1.86-4.722 0-2.246 1.18-3.348 1.6-3.804.39-.456.924-.57 1.23-.57.314 0 .628.002.904.016.29.014.68-.11 1.062.81.39.95 1.33 3.242 1.446 3.48.116.238.194.514.038.83-.154.316-.23.512-.458.79-.228.238-.48.62-.686.832-.228.238-.466.494-.198.97.268.476 1.192 1.97 2.56 3.19 1.762 1.57 3.242 2.056 3.718 2.284.476.228.754.19 1.032-.116.278-.306 1.19-1.386 1.506-1.862.316-.476.632-.394 1.074-.238.444.156 2.812 1.326 3.296 1.568.484.242.806.364.926.566.12.202.12 1.168-.272 2.268z"/></svg>
  </a>

<?php wp_footer(); ?>
</body>
</html>
