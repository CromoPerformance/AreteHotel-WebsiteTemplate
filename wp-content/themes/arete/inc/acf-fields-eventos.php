<?php
/**
 * Aretê Hotel - Campos ACF da página Eventos.
 *
 * @package AretêHotel
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function arete_register_eventos_acf() {
	$p       = get_page_by_path( 'eventos' );
	$eventos = $p ? (int) $p->ID : 0;

	acf_add_local_field_group(
		array(
			'key'      => 'group_eventos',
			'title'    => 'Eventos - Conteúdo',
			'fields'   => array(

				// ---- Hero ----
				array(
					'key'        => 'field_eve_hero',
					'label'      => 'Hero',
					'name'       => 'eventos_hero',
					'type'       => 'group',
					'layout'     => 'block',
					'sub_fields' => array(
						array( 'key' => 'field_eve_hero_bg', 'label' => 'Imagem de fundo', 'name' => 'bg', 'type' => 'image', 'return_format' => 'array' ),
						array( 'key' => 'field_eve_hero_kicker', 'label' => 'Kicker', 'name' => 'kicker', 'type' => 'text', 'default_value' => 'Hotel Aretê' ),
						array( 'key' => 'field_eve_hero_title', 'label' => 'Título', 'name' => 'title', 'type' => 'text', 'default_value' => 'Eventos' ),
						array( 'key' => 'field_eve_hero_subtitle', 'label' => 'Subtítulo', 'name' => 'subtitle', 'type' => 'text', 'default_value' => 'Seu momento, nosso cuidado' ),
						array( 'key' => 'field_eve_hero_scroll', 'label' => 'Texto do scroll (Descobrir)', 'name' => 'scroll', 'type' => 'text', 'default_value' => 'Descobrir' ),
					),
				),

				// ---- Tipos de evento (showcase) ----
				array(
					'key'        => 'field_eve_showcase',
					'label'      => 'Tipos de Evento',
					'name'       => 'eventos_showcase',
					'type'       => 'group',
					'layout'     => 'block',
					'sub_fields' => array(
						array( 'key' => 'field_eve_showcase_eyebrow', 'label' => 'Eyebrow', 'name' => 'eyebrow', 'type' => 'text', 'default_value' => 'Espaços' ),
						array( 'key' => 'field_eve_showcase_title1', 'label' => 'Título (linha 1)', 'name' => 'title1', 'type' => 'text', 'default_value' => 'Tipos de' ),
						array( 'key' => 'field_eve_showcase_title_em', 'label' => 'Título (parte em itálico)', 'name' => 'title_em', 'type' => 'text', 'default_value' => 'evento' ),
						array( 'key' => 'field_eve_showcase_text', 'label' => 'Texto', 'name' => 'text', 'type' => 'textarea', 'new_lines' => 'br', 'rows' => 3 ),
						array(
							'key'          => 'field_eve_showcase_items',
							'label'        => 'Tipos de evento',
							'name'         => 'items',
							'type'         => 'repeater',
							'layout'       => 'block',
							'button_label' => 'Adicionar tipo',
							'min'          => 0,
							'max'          => 0,
							'sub_fields'   => array(
								array( 'key' => 'field_eve_showcase_img', 'label' => 'Imagem', 'name' => 'img', 'type' => 'image', 'return_format' => 'array' ),
								array( 'key' => 'field_eve_showcase_name', 'label' => 'Nome', 'name' => 'name', 'type' => 'text' ),
								array( 'key' => 'field_eve_showcase_desc', 'label' => 'Descrição', 'name' => 'desc', 'type' => 'textarea', 'new_lines' => 'br', 'rows' => 3 ),
							),
						),
						array( 'key' => 'field_eve_showcase_btn', 'label' => 'Texto do botão', 'name' => 'btn', 'type' => 'text', 'default_value' => 'Solicitar orçamento' ),
					),
				),

				// ---- Manifesto ----
				array(
					'key'        => 'field_eve_manifesto',
					'label'      => 'Manifesto',
					'name'       => 'eventos_manifesto',
					'type'       => 'group',
					'layout'     => 'block',
					'sub_fields' => array(
						array( 'key' => 'field_eve_manifesto_text', 'label' => 'Texto', 'name' => 'text', 'type' => 'textarea', 'new_lines' => 'br', 'rows' => 3 ),
					),
				),

				// ---- Valores (citação 3 colunas) ----
				array(
					'key'          => 'field_eve_values',
					'label'        => 'Valores (3 colunas)',
					'name'         => 'eventos_values',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Adicionar valor',
					'min'          => 0,
					'max'          => 0,
					'sub_fields'   => array(
						array( 'key' => 'field_eve_value_label', 'label' => 'Título', 'name' => 'label', 'type' => 'text' ),
						array( 'key' => 'field_eve_value_desc', 'label' => 'Descrição', 'name' => 'desc', 'type' => 'textarea', 'new_lines' => 'br', 'rows' => 4 ),
					),
				),

				// ---- Privatização da Piscina ----
				array(
					'key'        => 'field_eve_pool',
					'label'      => 'Privatização da Piscina',
					'name'       => 'eventos_pool',
					'type'       => 'group',
					'layout'     => 'block',
					'sub_fields' => array(
						array( 'key' => 'field_eve_pool_img', 'label' => 'Imagem', 'name' => 'img', 'type' => 'image', 'return_format' => 'array' ),
						array( 'key' => 'field_eve_pool_eyebrow', 'label' => 'Eyebrow', 'name' => 'eyebrow', 'type' => 'text', 'default_value' => 'Exclusividade' ),
						array( 'key' => 'field_eve_pool_title1', 'label' => 'Título (linha 1)', 'name' => 'title1', 'type' => 'text', 'default_value' => 'Privatização' ),
						array( 'key' => 'field_eve_pool_title2', 'label' => 'Título (linha 2)', 'name' => 'title2', 'type' => 'text', 'default_value' => 'da Piscina' ),
						array( 'key' => 'field_eve_pool_text', 'label' => 'Texto', 'name' => 'text', 'type' => 'textarea', 'new_lines' => 'br', 'rows' => 5 ),
					),
				),

				// ---- Restaurante como Espaço ----
				array(
					'key'        => 'field_eve_rest',
					'label'      => 'Restaurante como Espaço',
					'name'       => 'eventos_rest',
					'type'       => 'group',
					'layout'     => 'block',
					'sub_fields' => array(
						array(
							'key'          => 'field_eve_rest_gallery',
							'label'        => 'Galeria (3 imagens)',
							'name'         => 'gallery',
							'type'         => 'repeater',
							'layout'       => 'block',
							'button_label' => 'Adicionar imagem',
							'min'          => 0,
							'max'          => 0,
							'sub_fields'   => array(
								array( 'key' => 'field_eve_rest_g_img', 'label' => 'Imagem', 'name' => 'img', 'type' => 'image', 'return_format' => 'array' ),
							),
						),
						array( 'key' => 'field_eve_rest_eyebrow', 'label' => 'Eyebrow', 'name' => 'eyebrow', 'type' => 'text', 'default_value' => 'Restaurante' ),
						array( 'key' => 'field_eve_rest_title1', 'label' => 'Título (linha 1)', 'name' => 'title1', 'type' => 'text', 'default_value' => 'Um salão de' ),
						array( 'key' => 'field_eve_rest_title2', 'label' => 'Título (linha 2)', 'name' => 'title2', 'type' => 'text', 'default_value' => 'eventos autoral' ),
						array( 'key' => 'field_eve_rest_text1', 'label' => 'Texto 1', 'name' => 'text1', 'type' => 'textarea', 'new_lines' => 'br', 'rows' => 4 ),
						array( 'key' => 'field_eve_rest_text2', 'label' => 'Texto 2', 'name' => 'text2', 'type' => 'textarea', 'new_lines' => 'br', 'rows' => 3 ),
					),
				),

				// ---- CTA ----
				array(
					'key'        => 'field_eve_cta',
					'label'      => 'CTA final',
					'name'       => 'eventos_cta',
					'type'       => 'group',
					'layout'     => 'block',
					'sub_fields' => array(
						array( 'key' => 'field_eve_cta_title', 'label' => 'Título', 'name' => 'title', 'type' => 'text', 'default_value' => 'Planeje seu evento' ),
						array( 'key' => 'field_eve_cta_subtitle', 'label' => 'Subtítulo', 'name' => 'subtitle', 'type' => 'text', 'default_value' => 'Nossa equipe está pronta para criar a experiência perfeita' ),
						array( 'key' => 'field_eve_cta_btn', 'label' => 'Texto do botão', 'name' => 'btn', 'type' => 'text', 'default_value' => 'Fale conosco' ),
					),
				),

			),
			'location' => array(
				array(
					array(
						'param'    => 'page',
						'operator' => '==',
						'value'    => $eventos,
					),
				),
			),
			'menu_order' => 80,
		)
	);
}
add_action( 'acf/init', 'arete_register_eventos_acf' );
