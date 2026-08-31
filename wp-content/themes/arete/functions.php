<?php
/**
 * Aretê Hotel - functions & setup
 *
 * Carrega assets, registra menus, suporta recursos do tema e
 * configura o front page como réplica da home HTML.
 *
 * @package AretêHotel
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'ARETE_VERSION', '1.0.0' );
define( 'ARETE_URI', get_template_directory_uri() );

// Campos ACF (Advanced Custom Fields) locais do tema.
require get_template_directory() . '/inc/acf-fields.php';

/**
 * Theme setup.
 */
function arete_setup() {
	// Menus
	register_nav_menus(
		array(
			'primary_left'  => __( 'Menu Esquerdo', 'aretehotel' ),
			'primary_right' => __( 'Menu Direito', 'aretehotel' ),
		)
	);

	// Básicos
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'custom-logo' );

	// Imagem hero da home via Customizer
	add_theme_support( 'custom-header' );
}
add_action( 'after_setup_theme', 'arete_setup' );

/**
 * Enfileira estilos e scripts.
 */
function arete_enqueue_assets() {
	// CSS principal (contém @font-face relativos a ../fonts/ e imagens)
	wp_enqueue_style( 'arete-site', ARETE_URI . '/assets/css/site.css', array(), ARETE_VERSION );

	// Scripts compartilhados
	wp_enqueue_script( 'arete-lazy-bg', ARETE_URI . '/assets/js/lazy-bg.js', array(), ARETE_VERSION, true );
	wp_enqueue_script( 'arete-mobile-nav', ARETE_URI . '/assets/js/mobile-nav.js', array(), ARETE_VERSION, true );
	wp_enqueue_script( 'arete-cookie-consent', ARETE_URI . '/assets/js/cookie-consent.js', array(), ARETE_VERSION, true );
	wp_enqueue_script( 'arete-sticky-booking', ARETE_URI . '/assets/js/sticky-booking.js', array(), ARETE_VERSION, true );
	wp_enqueue_script( 'arete-header-scroll', ARETE_URI . '/assets/js/header-scroll.js', array(), ARETE_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'arete_enqueue_assets' );

/**
 * Helper: URL de um asset do tema.
 *
 * Ex.: arete_asset('home/HERO-HOTEL.avif') -> https://site/wp-content/themes/arete/assets/home/HERO-HOTEL.avif
 *
 * @param string $rel Caminho relativo dentro de assets/ (ex.: "home/HERO-HOTEL.avif").
 * @return string URL completa do asset.
 */
function arete_asset( $rel ) {
	return ARETE_URI . '/assets/' . ltrim( $rel, '/' );
}

/**
 * Helper: caminho absoluto de um asset (para inline background link).
 *
 * @param string $rel Caminho relativo.
 * @return string|null Caminho absoluto no disco.
 */
function arete_asset_path( $rel ) {
	$path = get_template_directory() . '/assets/' . ltrim( $rel, '/' );
	return file_exists( $path ) ? $path : null;
}

/**
 * Pacote para data e URL do booking OmniBees (centralizado).
 */
function arete_booking_url() {
	return 'https://book.omnibees.com/hotel/21102';
}
function arete_whatsapp_url() {
	return 'https://wa.me/552220080155';
}

/**
 * Páginas obrigatórias do site (slug => título).
 *
 * Cada slug casa com um template de hierarquia page-{slug}.php,
 * exceto 'inicio' que é a página inicial estática (front-page.php).
 */
function arete_pages_definition() {
	return array(
		'inicio'             => 'Início',
		'hotel'              => 'O Hotel',
		'ecossistema'        => 'Ecossistema',
		'localizacao-buzios' => 'Localização & Búzios',
		'suites'             => 'Suítes',
		'restaurante'        => 'Restaurante',
		'experiencias'       => 'Experiências',
		'eventos'            => 'Eventos',
		'faq'                => 'FAQ',
	);
}

/**
 * Provisiona (cria se não existirem) todas as páginas do site e define
 * a página inicial estática na primeira ativação do tema.
 */
function arete_default_home() {
	// Só aplica defaults na primeira ativação.
	if ( get_option( 'arete_theme_activated' ) ) {
		return;
	}

	$pages = arete_pages_definition();
	foreach ( $pages as $slug => $title ) {
		if ( ! get_page_by_path( $slug ) ) {
			wp_insert_post(
				array(
					'post_type'    => 'page',
					'post_status'  => 'publish',
					'post_title'   => $title,
					'post_name'    => $slug,
					'post_content' => '',
				)
			);
		}
	}

	// Front page: página "Início".
	$home    = get_page_by_path( 'inicio' );
	$home_id = $home ? $home->ID : 0;
	if ( $home_id ) {
		update_option( 'show_on_front', 'page' );
		update_option( 'page_on_front', $home_id );
	}

	update_option( 'arete_theme_activated', 1 );
}
add_action( 'after_switch_theme', 'arete_default_home' );

/**
 * Garante que as páginas existam mesmo se o gancho after_switch_theme
 * não tiver disparado (ex.: ativação feita por outro meio). Idempotente,
 * pois arete_default_home() só age na primeira vez (arete_theme_activated).
 */
function arete_ensure_pages() {
	arete_default_home();
}
add_action( 'wp_loaded', 'arete_ensure_pages' );

/**
 * Remove o wrapper automático de shortcodes que poderia adicionar <p> desnecessários.
 */
// (implementado conforme necessário nas páginas)
