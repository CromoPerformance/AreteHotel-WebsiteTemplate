<?php
/**
 * Aretê Hotel - Campos ACF (Advanced Custom Fields)
 *
 * Registra os grupos de campos locais do tema via acf_add_local_field_group().
 * Assim os campos ficam versionados no tema (não dependem da UI do ACF para
 * existir no Hostinger). Os VALORES são editados pelo painel em
 * "Campos personalizados" nas páginas (aba ACF ou localizada no editor).
 *
 * Convenção de nomes: prefixo por página (home_*, etc.).
 *
 * @package AretêHotel
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Helpers de leitura amigável usados nas templates.
 */

/**
 * Retorna um campo ACF com fallback para o valor default (hardcoded original).
 *
 * @param string $name     Nome do campo.
 * @param mixed  $fallback Valor default (usado quando ACF não retorna nada).
 * @return mixed Valor (default se vazio).
 */
function arete_field( $name, $fallback = '' ) {
	$value = function_exists( 'get_field' ) ? get_field( $name, get_the_ID() ) : null;
	if ( null === $value || '' === $value || false === $value ) {
		return $fallback;
	}
	return $value;
}

/**
 * Retorna a URL de uma imagem ACF (campo tipo imagem), com fallback para um asset do tema.
 *
 * @param string $name     Nome do campo de imagem ACF.
 * @param string $fallback Caminho relativo do asset default (ex.: "home/HERO-HOTEL.avif").
 * @return string URL da imagem.
 */
function arete_image( $name, $fallback = '' ) {
	$attachment = arete_field( $name );
	if ( is_array( $attachment ) && ! empty( $attachment['url'] ) ) {
		return $attachment['url'];
	}
	if ( is_numeric( $attachment ) ) {
		$url = wp_get_attachment_image_url( (int) $attachment, 'full' );
		if ( $url ) {
			return $url;
		}
	}
	if ( $fallback ) {
		return arete_asset( $fallback );
	}
	return '';
}

/**
 * Registro dos grupos de campos locais.
 */
function arete_register_acf_fields() {

	// A regra de localização por "página" compara com o ID do post (não o slug).
	// Resolve o ID da página Início de forma dinâmica para funcionar em qualquer ambiente.
	$inicio = get_page_by_path( 'inicio' );
	$inicio_id = $inicio ? (int) $inicio->ID : 0;

	/* ------------------------------------------------------------------
	 * HOME
	 * ---------------------------------------------------------------- */

	acf_add_local_field_group(
		array(
			'key'      => 'group_home',
			'title'    => 'Home - Conteúdo',
			'fields'   => array(

				// ---- Hero ----
				array(
					'key'        => 'field_home_hero',
					'label'      => 'Hero',
					'name'       => 'home_hero',
					'type'       => 'group',
					'layout'     => 'block',
					'sub_fields' => array(
						array(
							'key'           => 'field_home_hero_kicker',
							'label'         => 'Kicker (linha superior)',
							'name'          => 'kicker',
							'type'          => 'text',
							'default_value' => 'Búzios · Rio de Janeiro',
						),
						array(
							'key'           => 'field_home_hero_title',
							'label'         => 'Título (parte antes do itálico)',
							'name'          => 'title',
							'type'          => 'text',
							'default_value' => 'Hotel ',
						),
						array(
							'key'           => 'field_home_hero_title_em',
							'label'         => 'Título (parte em itálico)',
							'name'          => 'title_em',
							'type'          => 'text',
							'default_value' => 'Aretê',
						),
						array(
							'key'           => 'field_home_hero_subtitle',
							'label'         => 'Subtítulo',
							'name'          => 'subtitle',
							'type'          => 'text',
							'default_value' => 'Um refúgio entre o mar e a mata',
						),
						array(
							'key'   => 'field_home_hero_bg',
							'label' => 'Imagem de fundo',
							'name'  => 'bg',
							'type'  => 'image',
							'return_format' => 'array',
						),
					),
				),

				// ---- Manifesto ----
				array(
					'key'           => 'field_home_manifesto',
					'label'         => 'Manifesto',
					'name'          => 'home_manifesto',
					'type'          => 'group',
					'layout'        => 'block',
					'sub_fields'    => array(
						array(
							'key'           => 'field_home_manifesto_text',
							'label'         => 'Texto do manifesto',
							'name'          => 'text',
							'type'          => 'textarea',
							'new_lines'     => 'br',
							'rows'          => 4,
							'default_value' => 'Aretê, palavra grega para excelência. Um hotel onde elegância, serviço e hospitalidade se encontram em cada detalhe. Um novo jeito de viver um novo Búzios.',
							'instructions'  => 'Use <em>Aretê</em> se quiser destacar a palavra em itálico.',
						),
					),
				),

				// ---- Hub (5 painéis) ----
				array(
					'key'          => 'field_home_hub',
					'label'        => 'Hub - Painéis de navegação',
					'name'         => 'home_hub',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Adicionar painel',
					'min'          => 0,
					'max'          => 0,
					'sub_fields'   => array(
						array(
							'key'   => 'field_home_hub_title',
							'label' => 'Título',
							'name'  => 'title',
							'type'  => 'text',
						),
						array(
							'key'   => 'field_home_hub_subtitle',
							'label' => 'Subtítulo',
							'name'  => 'subtitle',
							'type'  => 'text',
						),
						array(
							'key'           => 'field_home_hub_image',
							'label'         => 'Imagem',
							'name'          => 'image',
							'type'          => 'image',
							'return_format' => 'array',
						),
						array(
							'key'           => 'field_home_hub_link',
							'label'         => 'Link (página)',
							'name'          => 'link',
							'type'          => 'page_link',
							'return_format' => 'array',
							'allow_null'    => 1,
						),
						array(
							'key'   => 'field_home_hub_link_label',
							'label' => 'Texto do link (ex.: Explorar)',
							'name'  => 'link_label',
							'type'  => 'text',
						),
					),
				),

				// ---- Stats ----
				array(
					'key'          => 'field_home_stats',
					'label'        => 'Estatísticas (blocos)',
					'name'         => 'home_stats',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Adicionar estatística',
					'min'          => 0,
					'max'          => 0,
					'sub_fields'   => array(
						array(
							'key'   => 'field_home_stats_number',
							'label' => 'Número',
							'name'  => 'number',
							'type'  => 'text',
						),
						array(
							'key'   => 'field_home_stats_label',
							'label' => 'Rótulo',
							'name'  => 'label',
							'type'  => 'text',
						),
						array(
							'key'   => 'field_home_stats_desc',
							'label' => 'Descrição',
							'name'  => 'desc',
							'type'  => 'text',
						),
					),
				),

				// ---- Marina ----
				array(
					'key'        => 'field_home_marina',
					'label'      => 'Marina (Localização Exclusiva)',
					'name'       => 'home_marina',
					'type'       => 'group',
					'layout'     => 'block',
					'sub_fields' => array(
						array(
							'key'   => 'field_home_marina_eyebrow',
							'label' => 'Eyebrow',
							'name'  => 'eyebrow',
							'type'  => 'text',
							'default_value' => 'Localização Exclusiva',
						),
						array(
							'key'           => 'field_home_marina_title',
							'label'         => 'Título (uma linha por quebra)',
							'name'          => 'title',
							'type'          => 'textarea',
							'new_lines'     => 'br',
							'rows'          => 3,
							'default_value' => "A marina\ncomo seu\nquintal",
							'instructions'  => 'Cada quebra de linha vira um <br> no título.',
						),
						array(
							'key'   => 'field_home_marina_subtitle',
							'label' => 'Subtítulo',
							'name'  => 'subtitle',
							'type'  => 'text',
							'default_value' => 'Canais navegáveis, pôr do sol e acesso direto ao mar.',
						),
						array(
							'key'           => 'field_home_marina_btn_text',
							'label'         => 'Texto do botão',
							'name'          => 'btn_text',
							'type'          => 'text',
							'default_value' => 'Conhecer o Hotel',
						),
						array(
							'key'           => 'field_home_marina_btn_link',
							'label'         => 'Link do botão (página)',
							'name'          => 'btn_link',
							'type'          => 'page_link',
							'return_format' => 'array',
							'allow_null'    => 1,
						),
						array(
							'key'   => 'field_home_marina_bg',
							'label' => 'Imagem de fundo',
							'name'  => 'bg',
							'type'  => 'image',
							'return_format' => 'array',
						),
					),
				),

				// ---- Testimonials ----
				array(
					'key'        => 'field_home_testimonials',
					'label'      => 'Depoimentos',
					'name'       => 'home_testimonials',
					'type'       => 'group',
					'layout'     => 'block',
					'sub_fields' => array(
						array(
							'key'           => 'field_home_testimonials_title',
							'label'         => 'Título (linha 1)',
							'name'          => 'title',
							'type'          => 'text',
							'default_value' => 'Palavras de quem viveu',
						),
						array(
							'key'           => 'field_home_testimonials_title_2',
							'label'         => 'Título (linha 2)',
							'name'          => 'title_2',
							'type'          => 'text',
							'default_value' => 'a experiência do',
						),
						array(
							'key'           => 'field_home_testimonials_brand',
							'label'         => 'Título (marca, itálico)',
							'name'          => 'brand',
							'type'          => 'text',
							'default_value' => 'Hotel Aretê',
						),
						array(
							'key'          => 'field_home_testimonials_slider',
							'label'        => 'Depoimentos (slider)',
							'name'         => 'slider',
							'type'         => 'repeater',
							'layout'       => 'block',
							'button_label' => 'Adicionar depoimento',
							'min'          => 0,
							'max'          => 0,
							'sub_fields'   => array(
								array(
									'key'   => 'field_home_testimonial_text',
									'label' => 'Texto',
									'name'  => 'text',
									'type'  => 'textarea',
									'new_lines' => 'br',
									'rows'  => 4,
								),
								array(
									'key'   => 'field_home_testimonial_author',
									'label' => 'Autor',
									'name'  => 'author',
									'type'  => 'text',
								),
								array(
									'key'   => 'field_home_testimonial_via',
									'label' => 'Fonte (ex.: Booking.com)',
									'name'  => 'via',
									'type'  => 'text',
								),
								array(
									'key'   => 'field_home_testimonial_via_url',
									'label' => 'Link da fonte',
									'name'  => 'via_url',
									'type'  => 'url',
								),
								array(
									'key'   => 'field_home_testimonial_icon',
									'label' => 'Ícone (grafismo)',
									'name'  => 'icon',
									'type'  => 'image',
									'return_format' => 'array',
								),
							),
						),
					),
				),

				// ---- Reservations (títulos) ----
				array(
					'key'        => 'field_home_reservations',
					'label'      => 'Reservas - Títulos',
					'name'       => 'home_reservations',
					'type'       => 'group',
					'layout'     => 'block',
					'sub_fields' => array(
						array(
							'key'   => 'field_home_res_eyebrow',
							'label' => 'Eyebrow',
							'name'  => 'eyebrow',
							'type'  => 'text',
							'default_value' => 'Reservas',
						),
						array(
							'key'           => 'field_home_res_title',
							'label'         => 'Título (uma linha por quebra)',
							'name'          => 'title',
							'type'          => 'textarea',
							'new_lines'     => 'br',
							'rows'          => 2,
							'default_value' => "Reserve\nsua estadia",
						),
						array(
							'key'           => 'field_home_res_desc',
							'label'         => 'Descrição',
							'name'          => 'desc',
							'type'          => 'textarea',
							'new_lines'     => 'br',
							'rows'          => 4,
							'default_value' => 'Nossa equipe está disponível para criar uma experiência personalizada ao seu ritmo, desde a escolha da suíte ideal até a curadoria das experiências em Búzios.',
						),
					),
				),

			),
			'location' => array(
				array(
					array(
						'param'    => 'page',
						'operator' => '==',
						'value'    => $inicio_id,
					),
				),
			),
			'menu_order' => 0,
		)
	);
}
add_action( 'acf/init', 'arete_register_acf_fields' );
