<?php
/**
 * Template: Header
 *
 * Cabeçalho global replicando o <header> do template HTML.
 *
 * @package AretêHotel
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <header class="site-header">
    <nav class="site-nav" aria-label="Principal">
      <div class="nav-group left">
        <a class="nav-link<?php echo is_page( 'hotel' ) ? ' current' : ''; ?>" href="<?php echo esc_url( get_permalink( get_page_by_path( 'hotel' ) ) ?: home_url( '/hotel/' ) ); ?>">O Hotel</a>
        <a class="nav-link" href="<?php echo esc_url( get_permalink( get_page_by_path( 'ecossistema' ) ) ?: home_url( '/ecossistema/' ) ); ?>">Ecossistema</a>
        <a class="nav-link" href="<?php echo esc_url( get_permalink( get_page_by_path( 'localizacao' ) ) ?: home_url( '/localizacao-buzios/' ) ); ?>">Localização & Búzios</a>
        <a class="nav-link" href="<?php echo esc_url( get_permalink( get_page_by_path( 'suites' ) ) ?: home_url( '/suites/' ) ); ?>">Suítes</a>
      </div>

      <a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="Hotel Aretê Búzios">
        <img class="brand-logo brand-logo-white" src="<?php echo esc_url( arete_asset( 'logos/191010_Marca_Hotel_Arete_Buzios_Vert_Mono.avif' ) ); ?>" alt="Hotel Aretê Búzios">
        <img class="brand-logo brand-logo-blue" src="<?php echo esc_url( arete_asset( 'logos/191010_Marca_Hotel_Arete_Buzios_Vert_RGB.avif' ) ); ?>" alt="Hotel Aretê Búzios">
      </a>

      <div class="nav-group right">
        <a class="nav-link" href="<?php echo esc_url( get_permalink( get_page_by_path( 'restaurante' ) ) ?: home_url( '/restaurante/' ) ); ?>">Restaurante</a>
        <a class="nav-link" href="<?php echo esc_url( get_permalink( get_page_by_path( 'experiencias' ) ) ?: home_url( '/experiencias/' ) ); ?>">Experiências</a>
        <a class="nav-link" href="<?php echo esc_url( get_permalink( get_page_by_path( 'eventos' ) ) ?: home_url( '/eventos/' ) ); ?>">Eventos</a>
        <a class="nav-btn-reservar" href="<?php echo esc_url( arete_booking_url() ); ?>" target="_blank" rel="noopener">Reservar</a>
      </div>
    </nav>
  </header>

  <main>
