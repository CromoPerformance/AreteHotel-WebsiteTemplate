<?php
/**
 * Aretê Hotel - Campos ACF da página Localização & Búzios.
 *
 * Registra o grupo de campos locais da página Localização via
 * acf_add_local_field_group().
 *
 * @package AretêHotel
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function arete_register_localizacao_acf() {
	$p           = get_page_by_path( 'localizacao-buzios' );
	$localizacao = $p ? (int) $p->ID : 0;

	acf_add_local_field_group(
		array(
			'key'      => 'group_localizacao',
			'title'    => 'Localização - Conteúdo',
			'fields'   => array(

				// ---- Hero ----
				array(
					'key'        => 'field_loc_hero',
					'label'      => 'Hero',
					'name'       => 'localizacao_hero',
					'type'       => 'group',
					'layout'     => 'block',
					'sub_fields' => array(
						array( 'key' => 'field_loc_hero_bg', 'label' => 'Imagem de fundo', 'name' => 'bg', 'type' => 'image', 'return_format' => 'array' ),
						array( 'key' => 'field_loc_hero_kicker', 'label' => 'Kicker', 'name' => 'kicker', 'type' => 'text', 'default_value' => 'Localização' ),
						array( 'key' => 'field_loc_hero_title', 'label' => 'Título', 'name' => 'title', 'type' => 'text', 'default_value' => 'A Marina' ),
						array( 'key' => 'field_loc_hero_subtitle', 'label' => 'Subtítulo', 'name' => 'subtitle', 'type' => 'text', 'default_value' => 'Náutico, silencioso e preservado' ),
						array( 'key' => 'field_loc_hero_scroll', 'label' => 'Texto do scroll (Descobrir)', 'name' => 'scroll', 'type' => 'text', 'default_value' => 'Descobrir' ),
					),
				),

				// ---- Lifestyle Náutico (manifesto) ----
				array(
					'key'        => 'field_loc_lifestyle',
					'label'      => 'Lifestyle Náutico',
					'name'       => 'localizacao_lifestyle',
					'type'       => 'group',
					'layout'     => 'block',
					'sub_fields' => array(
						array( 'key' => 'field_loc_life_eyebrow', 'label' => 'Eyebrow', 'name' => 'eyebrow', 'type' => 'text', 'default_value' => 'Lifestyle Náutico' ),
						array( 'key' => 'field_loc_life_title1', 'label' => 'Título (linha 1)', 'name' => 'title1', 'type' => 'text', 'default_value' => 'Viva a marina' ),
						array( 'key' => 'field_loc_life_title_em', 'label' => 'Título (parte em itálico)', 'name' => 'title_em', 'type' => 'text', 'default_value' => 'do seu jeito' ),
						array(
							'key'          => 'field_loc_life_columns',
							'label'        => 'Colunas (3)',
							'name'         => 'columns',
							'type'         => 'repeater',
							'layout'       => 'block',
							'button_label' => 'Adicionar coluna',
							'min'          => 0,
							'max'          => 0,
							'sub_fields'   => array(
								array( 'key' => 'field_loc_life_col_name', 'label' => 'Nome', 'name' => 'name', 'type' => 'text' ),
								array( 'key' => 'field_loc_life_col_desc', 'label' => 'Descrição', 'name' => 'desc', 'type' => 'textarea', 'new_lines' => 'br', 'rows' => 3 ),
							),
						),
					),
				),

				// ---- Marina (hero - right) ----
				array(
					'key'        => 'field_loc_marina',
					'label'      => 'Marina (Localização)',
					'name'       => 'localizacao_marina',
					'type'       => 'group',
					'layout'     => 'block',
					'sub_fields' => array(
						array( 'key' => 'field_loc_marina_bg', 'label' => 'Imagem de fundo', 'name' => 'bg', 'type' => 'image', 'return_format' => 'array' ),
						array( 'key' => 'field_loc_marina_eyebrow', 'label' => 'Eyebrow', 'name' => 'eyebrow', 'type' => 'text', 'default_value' => 'Localização' ),
						array( 'key' => 'field_loc_marina_title', 'label' => 'Título', 'name' => 'title', 'type' => 'text', 'default_value' => 'Equilíbrio e silêncio' ),
						array( 'key' => 'field_loc_marina_subtitle', 'label' => 'Subtítulo', 'name' => 'subtitle', 'type' => 'textarea', 'new_lines' => 'br', 'rows' => 5 ),
						array( 'key' => 'field_loc_marina_btn', 'label' => 'Texto do botão', 'name' => 'btn', 'type' => 'text', 'default_value' => 'Conheça nossas suítes' ),
					),
				),

				// ---- Guia Local ----
				array(
					'key'        => 'field_loc_guide',
					'label'      => 'Guia Local',
					'name'       => 'localizacao_guide',
					'type'       => 'group',
					'layout'     => 'block',
					'sub_fields' => array(
						array( 'key' => 'field_loc_guide_map', 'label' => 'Imagem do mapa', 'name' => 'map', 'type' => 'image', 'return_format' => 'array' ),
						array( 'key' => 'field_loc_guide_eyebrow', 'label' => 'Eyebrow', 'name' => 'eyebrow', 'type' => 'text', 'default_value' => 'Guia Local' ),
						array( 'key' => 'field_loc_guide_title', 'label' => 'Título', 'name' => 'title', 'type' => 'text', 'default_value' => 'Logo ali, perto do hotel' ),
						array(
							'key'          => 'field_loc_guide_points',
							'label'        => 'Pontos de interesse',
							'name'         => 'points',
							'type'         => 'repeater',
							'layout'       => 'block',
							'button_label' => 'Adicionar ponto',
							'min'          => 0,
							'max'          => 0,
							'sub_fields'   => array(
								array( 'key' => 'field_loc_guide_point_num', 'label' => 'Número', 'name' => 'num', 'type' => 'text' ),
								array( 'key' => 'field_loc_guide_point_name', 'label' => 'Nome', 'name' => 'name', 'type' => 'text' ),
								array( 'key' => 'field_loc_guide_point_dist', 'label' => 'Distância (ex.: 80 m)', 'name' => 'distance', 'type' => 'text' ),
								array( 'key' => 'field_loc_guide_point_text', 'label' => 'Texto', 'name' => 'text', 'type' => 'textarea', 'new_lines' => 'br', 'rows' => 3 ),
							),
						),
					),
				),

				// ---- A Península ----
				array(
					'key'        => 'field_loc_peninsula',
					'label'      => 'A Península',
					'name'       => 'localizacao_peninsula',
					'type'       => 'group',
					'layout'     => 'block',
					'sub_fields' => array(
						array( 'key' => 'field_loc_pen_eyebrow', 'label' => 'Eyebrow', 'name' => 'eyebrow', 'type' => 'text', 'default_value' => 'A Península' ),
						array( 'key' => 'field_loc_pen_title1', 'label' => 'Título (linha 1)', 'name' => 'title1', 'type' => 'text', 'default_value' => 'Um destino que' ),
						array( 'key' => 'field_loc_pen_title2', 'label' => 'Título (linha 2)', 'name' => 'title2', 'type' => 'text', 'default_value' => 'nunca decepciona' ),
						array( 'key' => 'field_loc_pen_text1', 'label' => 'Texto 1', 'name' => 'text1', 'type' => 'textarea', 'new_lines' => 'br', 'rows' => 5 ),
						array( 'key' => 'field_loc_pen_text2', 'label' => 'Texto 2', 'name' => 'text2', 'type' => 'textarea', 'new_lines' => 'br', 'rows' => 4 ),
						array(
							'key'          => 'field_loc_pen_carousel',
							'label'        => 'Carrossel (fotos)',
							'name'         => 'carousel',
							'type'         => 'repeater',
							'layout'       => 'block',
							'button_label' => 'Adicionar foto',
							'min'          => 0,
							'max'          => 0,
							'sub_fields'   => array(
								array( 'key' => 'field_loc_pen_carousel_img', 'label' => 'Imagem', 'name' => 'img', 'type' => 'image', 'return_format' => 'array' ),
							),
						),
					),
				),

				// ---- Estatísticas ----
				array(
					'key'        => 'field_loc_stats',
					'label'      => 'Estatísticas',
					'name'       => 'localizacao_stats',
					'type'       => 'group',
					'layout'     => 'block',
					'sub_fields' => array(
						array(
							'key'          => 'field_loc_stats_items',
							'label'        => 'Itens (3)',
							'name'         => 'items',
							'type'         => 'repeater',
							'layout'       => 'block',
							'button_label' => 'Adicionar item',
							'min'          => 0,
							'max'          => 0,
							'sub_fields'   => array(
								array( 'key' => 'field_loc_stat_number', 'label' => 'Número', 'name' => 'number', 'type' => 'text' ),
								array( 'key' => 'field_loc_stat_label', 'label' => 'Rótulo', 'name' => 'label', 'type' => 'text' ),
								array( 'key' => 'field_loc_stat_sub', 'label' => 'Sub (ex.: de águas cristalinas)', 'name' => 'sub', 'type' => 'text' ),
							),
						),
					),
				),

				// ---- Programação da Cidade ----
				array(
					'key'        => 'field_loc_events',
					'label'      => 'Programação da Cidade',
					'name'       => 'localizacao_events',
					'type'       => 'group',
					'layout'     => 'block',
					'sub_fields' => array(
						array( 'key' => 'field_loc_events_eyebrow', 'label' => 'Eyebrow', 'name' => 'eyebrow', 'type' => 'text', 'default_value' => 'Calendário da Cidade' ),
						array( 'key' => 'field_loc_events_title1', 'label' => 'Título (linha 1)', 'name' => 'title1', 'type' => 'text', 'default_value' => 'O ano inteiro,' ),
						array( 'key' => 'field_loc_events_title_em', 'label' => 'Título (parte em itálico)', 'name' => 'title_em', 'type' => 'text', 'default_value' => 'um evento acontecendo' ),
						array( 'key' => 'field_loc_events_text', 'label' => 'Texto', 'name' => 'text', 'type' => 'textarea', 'new_lines' => 'br', 'rows' => 4 ),
						array(
							'key'          => 'field_loc_events_rows',
							'label'        => 'Eventos',
							'name'         => 'rows',
							'type'         => 'repeater',
							'layout'       => 'block',
							'button_label' => 'Adicionar evento',
							'min'          => 0,
							'max'          => 0,
							'sub_fields'   => array(
								array( 'key' => 'field_loc_event_name', 'label' => 'Nome', 'name' => 'name', 'type' => 'text' ),
								array( 'key' => 'field_loc_event_desc', 'label' => 'Descrição', 'name' => 'desc', 'type' => 'textarea', 'new_lines' => 'br', 'rows' => 3 ),
							),
						),
					),
				),

				// ---- Estações do Ano ----
				array(
					'key'        => 'field_loc_seasons',
					'label'      => 'Estações do Ano',
					'name'       => 'localizacao_seasons',
					'type'       => 'group',
					'layout'     => 'block',
					'sub_fields' => array(
						array( 'key' => 'field_loc_seasons_eyebrow', 'label' => 'Eyebrow', 'name' => 'eyebrow', 'type' => 'text', 'default_value' => 'Búzios por Estações' ),
						array( 'key' => 'field_loc_seasons_title', 'label' => 'Título', 'name' => 'title', 'type' => 'text', 'default_value' => 'Muito além do verão' ),
						array( 'key' => 'field_loc_seasons_text', 'label' => 'Texto', 'name' => 'text', 'type' => 'textarea', 'new_lines' => 'br', 'rows' => 3 ),
						array( 'key' => 'field_loc_seasons_btn', 'label' => 'Texto do botão', 'name' => 'btn', 'type' => 'text', 'default_value' => 'Planeje sua estadia' ),
						array(
							'key'          => 'field_loc_seasons_list',
							'label'        => 'Estações',
							'name'         => 'list',
							'type'         => 'repeater',
							'layout'       => 'block',
							'button_label' => 'Adicionar estação',
							'min'          => 0,
							'max'          => 0,
							'sub_fields'   => array(
								array( 'key' => 'field_loc_season_key', 'label' => 'Identificador (verao/outono/inverno/primavera)', 'name' => 'key', 'type' => 'text' ),
								array( 'key' => 'field_loc_season_name', 'label' => 'Nome (ex.: Verão)', 'name' => 'name', 'type' => 'text' ),
								array( 'key' => 'field_loc_season_months', 'label' => 'Meses (ex.: Dez a Mar)', 'name' => 'months', 'type' => 'text' ),
								array( 'key' => 'field_loc_season_desc', 'label' => 'Descrição', 'name' => 'desc', 'type' => 'textarea', 'new_lines' => 'br', 'rows' => 4 ),
								array( 'key' => 'field_loc_season_img', 'label' => 'Imagem', 'name' => 'img', 'type' => 'image', 'return_format' => 'array' ),
							),
						),
					),
				),

				// ---- Como Chegar ----
				array(
					'key'        => 'field_loc_arrive',
					'label'      => 'Como Chegar',
					'name'       => 'localizacao_arrive',
					'type'       => 'group',
					'layout'     => 'block',
					'sub_fields' => array(
						array( 'key' => 'field_loc_arrive_img', 'label' => 'Imagem', 'name' => 'img', 'type' => 'image', 'return_format' => 'array' ),
						array( 'key' => 'field_loc_arrive_eyebrow', 'label' => 'Eyebrow', 'name' => 'eyebrow', 'type' => 'text', 'default_value' => 'Como Chegar' ),
						array( 'key' => 'field_loc_arrive_title1', 'label' => 'Título (linha 1)', 'name' => 'title1', 'type' => 'text', 'default_value' => 'Chegue com' ),
						array( 'key' => 'field_loc_arrive_title2', 'label' => 'Título (linha 2)', 'name' => 'title2', 'type' => 'text', 'default_value' => 'tranquilidade' ),
						array(
							'key'          => 'field_loc_arrive_blocks',
							'label'        => 'Blocos de transporte',
							'name'         => 'blocks',
							'type'         => 'repeater',
							'layout'       => 'block',
							'button_label' => 'Adicionar bloco',
							'min'          => 0,
							'max'          => 0,
							'sub_fields'   => array(
								array( 'key' => 'field_loc_arrive_label', 'label' => 'Rótulo (ex.: De carro)', 'name' => 'label', 'type' => 'text' ),
								array( 'key' => 'field_loc_arrive_value', 'label' => 'Valor (ex.: 170 km do Rio)', 'name' => 'value', 'type' => 'text' ),
							),
						),
						array( 'key' => 'field_loc_arrive_maps', 'label' => 'Texto botão Google Maps', 'name' => 'maps_btn', 'type' => 'text', 'default_value' => 'Google Maps' ),
						array( 'key' => 'field_loc_arrive_maps_url', 'label' => 'URL Google Maps', 'name' => 'maps_url', 'type' => 'url', 'default_value' => 'https://www.google.com/maps?q=Hotel+Aret%C3%AA,+B%C3%BAzios' ),
						array( 'key' => 'field_loc_arrive_waze', 'label' => 'Texto botão Waze', 'name' => 'waze_btn', 'type' => 'text', 'default_value' => 'Waze' ),
						array( 'key' => 'field_loc_arrive_waze_url', 'label' => 'URL Waze', 'name' => 'waze_url', 'type' => 'url', 'default_value' => 'https://waze.com/ul?q=Hotel+Aret%C3%AA,+B%C3%BAzios' ),
					),
				),

			),
			'location' => array(
				array(
					array(
						'param'    => 'page',
						'operator' => '==',
						'value'    => $localizacao,
					),
				),
			),
			'menu_order' => 40,
		)
	);
}
add_action( 'acf/init', 'arete_register_localizacao_acf' );
