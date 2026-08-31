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
 * Converte um valor de imagem para URL final.
 *
 * - Se já for URL absoluta (http/https), usa como está.
 * - Se for caminho relativo de asset do tema (ex.: "home/X.avif"), resolve com arete_asset().
 * - Se for um ID de anexo numérico, resolve com wp_get_attachment_image_url().
 *
 * @param string|int $value Imagem ACF (URL, ID) ou caminho relativo de asset.
 * @return string URL final ('' se nada).
 */
function arete_asset_or_url( $value ) {
	if ( empty( $value ) ) {
		return '';
	}
	if ( is_numeric( $value ) ) {
		$url = wp_get_attachment_image_url( (int) $value, 'full' );
		return $url ? $url : '';
	}
	if ( is_string( $value ) ) {
		if ( 0 === strpos( $value, 'http://' ) || 0 === strpos( $value, 'https://' ) ) {
			return $value;
		}
		// Caminho relativo ao theme assets.
		return arete_asset( ltrim( $value, '/' ) );
	}
	return '';
}

/**
 * Registro dos grupos de campos locais.
 */
function arete_register_acf_fields() {

	// A regra de localização por "página" compara com o ID do post (não o slug).
	// Resolve os IDs das páginas de forma dinâmica para funcionar em qualquer ambiente.
	$page_ids = array();
	foreach ( array( 'inicio', 'hotel', 'suites', 'restaurante', 'localizacao-buzios', 'ecossistema', 'experiencias', 'eventos', 'faq' ) as $slug ) {
		$p = get_page_by_path( $slug );
		$page_ids[ $slug ] = $p ? (int) $p->ID : 0;
	}
	extract( $page_ids ); // cria $inicio, $hotel, $suites, $restaurante, $localizacao_buzios, $ecossistema, $experiencias, $eventos, $faq

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
						'value'    => $inicio,
					),
				),
			),
			'menu_order' => 0,
		)
	);

	/* ------------------------------------------------------------------
	 * O HOTEL
	 * ---------------------------------------------------------------- */

	acf_add_local_field_group(
		array(
			'key'      => 'group_hotel',
			'title'    => 'O Hotel - Conteúdo',
			'fields'   => array(

				// ---- Hero ----
				array(
					'key'        => 'field_hotel_hero',
					'label'      => 'Hero',
					'name'       => 'hotel_hero',
					'type'       => 'group',
					'layout'     => 'block',
					'sub_fields' => array(
						array( 'key' => 'field_hotel_hero_kicker', 'label' => 'Kicker', 'name' => 'kicker', 'type' => 'text', 'default_value' => 'O Hotel' ),
						array( 'key' => 'field_hotel_hero_title', 'label' => 'Título', 'name' => 'title', 'type' => 'text', 'default_value' => 'Aretê' ),
						array( 'key' => 'field_hotel_hero_subtitle', 'label' => 'Subtítulo', 'name' => 'subtitle', 'type' => 'textarea', 'new_lines' => 'br', 'rows' => 3, 'default_value' => 'Um refúgio entre os canais navegáveis e a mata, onde cada detalhe foi pensado para o seu conforto.' ),
						array( 'key' => 'field_hotel_hero_bg', 'label' => 'Imagem de fundo', 'name' => 'bg', 'type' => 'image', 'return_format' => 'array' ),
					),
				),

				// ---- História ----
				array(
					'key'        => 'field_hotel_history',
					'label'      => 'História',
					'name'       => 'hotel_history',
					'type'       => 'group',
					'layout'     => 'block',
					'sub_fields' => array(
						array( 'key' => 'field_hotel_history_eyebrow', 'label' => 'Eyebrow', 'name' => 'eyebrow', 'type' => 'text', 'default_value' => 'História' ),
						array(
							'key' => 'field_hotel_history_heading1', 'label' => 'Título (primeira linha, antes do itálico)', 'name' => 'heading1', 'type' => 'text', 'default_value' => 'Nasceu de um',
						),
						array( 'key' => 'field_hotel_history_heading_em', 'label' => 'Título (parte em itálico)', 'name' => 'heading_em', 'type' => 'text', 'default_value' => 'olhar' ),
						array(
							'key' => 'field_hotel_history_text1', 'label' => 'Texto 1', 'name' => 'text1', 'type' => 'textarea', 'new_lines' => 'br', 'rows' => 4, 'default_value' => 'O Hotel Aretê nasceu da visão de que Búzios poderia ser vivido de outra forma. Não pela praia mais movimentada, mas pela escolha consciente de um lugar onde o tempo desacelera e a natureza conduz o ritmo dos dias.',
						),
						array(
							'key' => 'field_hotel_history_text2', 'label' => 'Texto 2', 'name' => 'text2', 'type' => 'textarea', 'new_lines' => 'br', 'rows' => 5, 'default_value' => 'O hotel integra o bairro Aretê, um refúgio de Búzios pensado para quem valoriza o mar, a natureza, o esporte e a tranquilidade. Aqui, a marina faz parte do cotidiano, o silêncio acompanha a paisagem e o cuidado está presente em cada detalhe.',
						),
						array( 'key' => 'field_hotel_history_btn', 'label' => 'Texto do botão', 'name' => 'btn', 'type' => 'text', 'default_value' => 'Reservar sua estadia' ),
					),
				),

				// ---- Galeria (quad) ----
				array(
					'key'          => 'field_hotel_gallery',
					'label'        => 'Galeria (4 fotos)',
					'name'         => 'hotel_gallery',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Adicionar foto',
					'min'          => 0,
					'max'          => 4,
					'sub_fields'   => array(
						array( 'key' => 'field_hotel_gallery_img', 'label' => 'Imagem', 'name' => 'img', 'type' => 'image', 'return_format' => 'array' ),
					),
				),

				// ---- Manifesto ----
				array(
					'key'        => 'field_hotel_manifesto',
					'label'      => 'Manifesto',
					'name'       => 'hotel_manifesto',
					'type'       => 'group',
					'layout'     => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_hotel_manifesto_text', 'label' => 'Texto', 'name' => 'text', 'type' => 'textarea', 'new_lines' => 'wpautop', 'rows' => 4, 'default_value' => 'Um novo jeito de viver Búzios: por inteiro, do amanhecer ao pôr do sol. Aqui, cada detalhe foi pensado para que você não precise escolher entre conforto e natureza, entre sossego e experiência.',
						),
					),
				),

				// ---- Pilares ----
				array(
					'key'          => 'field_hotel_pillars',
					'label'        => 'Pilares (3 blocos)',
					'name'         => 'hotel_pillars',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Adicionar pilar',
					'min'          => 0,
					'max'          => 0,
					'sub_fields'   => array(
						array( 'key' => 'field_hotel_pillar_label', 'label' => 'Rótulo', 'name' => 'label', 'type' => 'text' ),
						array( 'key' => 'field_hotel_pillar_desc', 'label' => 'Descrição', 'name' => 'desc', 'type' => 'textarea', 'new_lines' => 'br', 'rows' => 3 ),
					),
				),

				// ---- Diferenciais ----
				array(
					'key'        => 'field_hotel_differentials',
					'label'      => 'Diferenciais',
					'name'       => 'hotel_differentials',
					'type'       => 'group',
					'layout'     => 'block',
					'sub_fields' => array(
						array( 'key' => 'field_hotel_diff_eyebrow', 'label' => 'Eyebrow', 'name' => 'eyebrow', 'type' => 'text', 'default_value' => 'Exclusividade' ),
						array( 'key' => 'field_hotel_diff_title', 'label' => 'Título', 'name' => 'title', 'type' => 'text', 'default_value' => 'Diferenciais Aretê' ),
						array(
							'key'          => 'field_hotel_diff_repeater',
							'label'        => 'Itens',
							'name'         => 'items',
							'type'         => 'repeater',
							'layout'       => 'block',
							'button_label' => 'Adicionar diferencial',
							'min'          => 0,
							'max'          => 0,
							'sub_fields'   => array(
								array( 'key' => 'field_hotel_diff_heading', 'label' => 'Título', 'name' => 'heading', 'type' => 'text' ),
								array( 'key' => 'field_hotel_diff_text', 'label' => 'Texto', 'name' => 'text', 'type' => 'textarea', 'new_lines' => 'br', 'rows' => 4 ),
							),
						),
						array( 'key' => 'field_hotel_diff_btn', 'label' => 'Texto do botão', 'name' => 'btn', 'type' => 'text', 'default_value' => 'Reservar sua estadia' ),
					),
				),

				// ---- Natureza & Localização ----
				array(
					'key'        => 'field_hotel_nature',
					'label'      => 'Natureza & Localização',
					'name'       => 'hotel_nature',
					'type'       => 'group',
					'layout'     => 'block',
					'sub_fields' => array(
						array( 'key' => 'field_hotel_nature_eyebrow', 'label' => 'Eyebrow', 'name' => 'eyebrow', 'type' => 'text', 'default_value' => 'Natureza &amp; Localização' ),
						array(
							'key' => 'field_hotel_nature_title', 'label' => 'Título (uma linha por quebra)', 'name' => 'title', 'type' => 'textarea', 'new_lines' => 'br', 'rows' => 2, 'default_value' => "Aqui a natureza\né a anfitriã",
						),
						array( 'key' => 'field_hotel_nature_text1', 'label' => 'Texto 1', 'name' => 'text1', 'type' => 'textarea', 'new_lines' => 'br', 'rows' => 4, 'default_value' => 'A vista do quarto encontra os barcos ancorados no cais. O restaurante guarda o melhor lugar para o pôr do sol. E o deck convida a parar, nem que seja por um instante.' ),
						array( 'key' => 'field_hotel_nature_text2', 'label' => 'Texto 2', 'name' => 'text2', 'type' => 'textarea', 'new_lines' => 'br', 'rows' => 3, 'default_value' => 'A vegetação nativa chegou primeiro. O bairro Aretê nasceu ao redor dela. E o verde aparece em cada esquina.' ),
						array( 'key' => 'field_hotel_nature_img', 'label' => 'Imagem', 'name' => 'img', 'type' => 'image', 'return_format' => 'array' ),
					),
				),

				// ---- Sustentabilidade ----
				array(
					'key'        => 'field_hotel_sust',
					'label'      => 'Sustentabilidade',
					'name'       => 'hotel_sust',
					'type'       => 'group',
					'layout'     => 'block',
					'sub_fields' => array(
						array( 'key' => 'field_hotel_sust_eyebrow', 'label' => 'Eyebrow', 'name' => 'eyebrow', 'type' => 'text', 'default_value' => 'Sustentabilidade' ),
						array( 'key' => 'field_hotel_sust_title', 'label' => 'Título', 'name' => 'title', 'type' => 'textarea', 'new_lines' => 'br', 'rows' => 2, 'default_value' => "O destino final\nnos importa" ),
						array( 'key' => 'field_hotel_sust_text', 'label' => 'Texto', 'name' => 'text', 'type' => 'textarea', 'new_lines' => 'br', 'rows' => 3, 'default_value' => 'Acreditamos que cada escolha pode gerar um impacto positivo no meio ambiente. Por isso, fazemos:' ),
						array(
							'key'          => 'field_hotel_sust_items',
							'label'        => 'Itens de sustentabilidade',
							'name'         => 'items',
							'type'         => 'repeater',
							'layout'       => 'block',
							'button_label' => 'Adicionar item',
							'min'          => 0,
							'max'          => 0,
							'sub_fields'   => array(
								array( 'key' => 'field_hotel_sust_item_icon', 'label' => 'Ícone', 'name' => 'icon', 'type' => 'image', 'return_format' => 'array' ),
								array( 'key' => 'field_hotel_sust_item_label', 'label' => 'Rótulo', 'name' => 'label', 'type' => 'text' ),
							),
						),
						array( 'key' => 'field_hotel_sust_img', 'label' => 'Imagem', 'name' => 'img', 'type' => 'image', 'return_format' => 'array' ),
					),
				),

				// ---- Equipe & Bastidores ----
				array(
					'key'        => 'field_hotel_team',
					'label'      => 'Equipe & Bastidores',
					'name'       => 'hotel_team',
					'type'       => 'group',
					'layout'     => 'block',
					'sub_fields' => array(
						array( 'key' => 'field_hotel_team_eyebrow', 'label' => 'Eyebrow', 'name' => 'eyebrow', 'type' => 'text', 'default_value' => 'Equipe &amp; Bastidores' ),
						array( 'key' => 'field_hotel_team_title', 'label' => 'Título', 'name' => 'title', 'type' => 'text', 'default_value' => 'Um time que cuida' ),
						array( 'key' => 'field_hotel_team_text', 'label' => 'Texto', 'name' => 'text', 'type' => 'textarea', 'new_lines' => 'br', 'rows' => 4, 'default_value' => 'Que faz você se sentir em casa, mesmo longe dela. Antecipa o que você precisa e acolhe de verdade.' ),
						array( 'key' => 'field_hotel_team_img1', 'label' => 'Imagem 1', 'name' => 'img1', 'type' => 'image', 'return_format' => 'array' ),
						array( 'key' => 'field_hotel_team_img2', 'label' => 'Imagem 2', 'name' => 'img2', 'type' => 'image', 'return_format' => 'array' ),
					),
				),

				// ---- Dog Friendly ----
				array(
					'key'        => 'field_hotel_dog',
					'label'      => 'Dog Friendly',
					'name'       => 'hotel_dog',
					'type'       => 'group',
					'layout'     => 'block',
					'sub_fields' => array(
						array( 'key' => 'field_hotel_dog_eyebrow', 'label' => 'Eyebrow', 'name' => 'eyebrow', 'type' => 'text', 'default_value' => 'Dog Friendly' ),
						array( 'key' => 'field_hotel_dog_title', 'label' => 'Título', 'name' => 'title', 'type' => 'textarea', 'new_lines' => 'br', 'rows' => 2, 'default_value' => "Seu companheiro\né bem-vindo" ),
						array( 'key' => 'field_hotel_dog_text1', 'label' => 'Texto 1', 'name' => 'text1', 'type' => 'textarea', 'new_lines' => 'br', 'rows' => 4, 'default_value' => 'No Hotel Aretê, apoiamos a causa animal com ações de castração e adoção responsável. Sabemos que a experiência é mais completa quando todos estão juntos, por isso, somos dog friendly e oferecemos um ambiente preparado para hospedar seu companheiro de viagem.' ),
						array( 'key' => 'field_hotel_dog_text2', 'label' => 'Texto 2', 'name' => 'text2', 'type' => 'textarea', 'new_lines' => 'br', 'rows' => 3, 'default_value' => 'Consulte nossa recepção para verificar disponibilidade do seu pet e conhecer nosso Termo Pet com condições e regras.' ),
						array(
							'key'          => 'field_hotel_dog_gallery',
							'label'        => 'Galeria (3 fotos)',
							'name'         => 'gallery',
							'type'         => 'repeater',
							'layout'       => 'block',
							'button_label' => 'Adicionar foto',
							'min'          => 0,
							'max'          => 3,
							'sub_fields'   => array(
								array( 'key' => 'field_hotel_dog_gallery_img', 'label' => 'Imagem', 'name' => 'img', 'type' => 'image', 'return_format' => 'array' ),
							),
						),
					),
				),

				// ---- CTA ----
				array(
					'key'        => 'field_hotel_cta',
					'label'      => 'CTA final',
					'name'       => 'hotel_cta',
					'type'       => 'group',
					'layout'     => 'block',
					'sub_fields' => array(
						array( 'key' => 'field_hotel_cta_eyebrow', 'label' => 'Eyebrow', 'name' => 'eyebrow', 'type' => 'text', 'default_value' => 'Sua estadia começa aqui' ),
						array( 'key' => 'field_hotel_cta_title', 'label' => 'Título', 'name' => 'title', 'type' => 'text', 'default_value' => 'Reserve sua experiência' ),
						array( 'key' => 'field_hotel_cta_subtitle', 'label' => 'Subtítulo', 'name' => 'subtitle', 'type' => 'text', 'default_value' => 'Cada detalhe pensado para o seu conforto e bem-estar' ),
						array( 'key' => 'field_hotel_cta_btn', 'label' => 'Texto do botão', 'name' => 'btn', 'type' => 'text', 'default_value' => 'Verificar disponibilidade' ),
					),
				),

			),
			'location' => array(
				array(
					array(
						'param'    => 'page',
						'operator' => '==',
						'value'    => $hotel,
					),
				),
			),
			'menu_order' => 10,
		)
	);
}
add_action( 'acf/init', 'arete_register_acf_fields' );
