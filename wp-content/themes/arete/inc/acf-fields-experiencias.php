<?php
/**
 * Aretê Hotel - Campos ACF da página Experiências.
 *
 * @package AretêHotel
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function arete_register_experiencias_acf() {
	$p            = get_page_by_path( 'experiencias' );
	$experiencias = $p ? (int) $p->ID : 0;

	acf_add_local_field_group(
		array(
			'key'      => 'group_experiencias',
			'title'    => 'Experiências - Conteúdo',
			'fields'   => array(

				// ---- Hero ----
				array(
					'key'        => 'field_exp_hero',
					'label'      => 'Hero',
					'name'       => 'experiencias_hero',
					'type'       => 'group',
					'layout'     => 'block',
					'sub_fields' => array(
						array( 'key' => 'field_exp_hero_bg', 'label' => 'Imagem de fundo', 'name' => 'bg', 'type' => 'image', 'return_format' => 'array' ),
						array( 'key' => 'field_exp_hero_kicker', 'label' => 'Kicker', 'name' => 'kicker', 'type' => 'text', 'default_value' => 'Experiências' ),
						array( 'key' => 'field_exp_hero_title', 'label' => 'Título', 'name' => 'title', 'type' => 'text', 'default_value' => 'Vivenciar' ),
						array( 'key' => 'field_exp_hero_subtitle', 'label' => 'Subtítulo', 'name' => 'subtitle', 'type' => 'text', 'default_value' => 'Momentos que viram memórias' ),
						array( 'key' => 'field_exp_hero_scroll', 'label' => 'Texto do scroll (Descobrir)', 'name' => 'scroll', 'type' => 'text', 'default_value' => 'Descobrir' ),
					),
				),

				// ---- Citação ----
				array(
					'key'        => 'field_exp_quote',
					'label'      => 'Citação',
					'name'       => 'experiencias_quote',
					'type'       => 'group',
					'layout'     => 'block',
					'sub_fields' => array(
						array( 'key' => 'field_exp_quote_text', 'label' => 'Texto', 'name' => 'text', 'type' => 'textarea', 'new_lines' => 'br', 'rows' => 4 ),
						array( 'key' => 'field_exp_quote_btn', 'label' => 'Texto do botão', 'name' => 'btn', 'type' => 'text', 'default_value' => 'Viva essa experiência' ),
					),
				),

				// ---- Hub (4 painéis) ----
				array(
					'key'          => 'field_exp_hub',
					'label'        => 'Hub (painéis de lazer)',
					'name'         => 'experiencias_hub',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Adicionar painel',
					'min'          => 0,
					'max'          => 0,
					'sub_fields'   => array(
						array( 'key' => 'field_exp_hub_bg', 'label' => 'Imagem de fundo', 'name' => 'bg', 'type' => 'image', 'return_format' => 'array' ),
						array( 'key' => 'field_exp_hub_pos', 'label' => 'Posição do fundo (ex.: center calc(50% - 100px))', 'name' => 'pos', 'type' => 'text' ),
						array( 'key' => 'field_exp_hub_title', 'label' => 'Título', 'name' => 'title', 'type' => 'text' ),
						array( 'key' => 'field_exp_hub_subtitle', 'label' => 'Subtítulo', 'name' => 'subtitle', 'type' => 'text' ),
					),
				),

				// ---- Área de Lazer ----
				array(
					'key'        => 'field_exp_leisure',
					'label'      => 'Área de Lazer',
					'name'       => 'experiencias_leisure',
					'type'       => 'group',
					'layout'     => 'block',
					'sub_fields' => array(
						array( 'key' => 'field_exp_leisure_text', 'label' => 'Texto', 'name' => 'text', 'type' => 'textarea', 'new_lines' => 'br', 'rows' => 3 ),
					),
				),

				// ---- Concierge ----
				array(
					'key'        => 'field_exp_concierge',
					'label'      => 'Concierge',
					'name'       => 'experiencias_concierge',
					'type'       => 'group',
					'layout'     => 'block',
					'sub_fields' => array(
						array( 'key' => 'field_exp_concierge_img', 'label' => 'Imagem', 'name' => 'img', 'type' => 'image', 'return_format' => 'array' ),
						array( 'key' => 'field_exp_concierge_eyebrow', 'label' => 'Eyebrow', 'name' => 'eyebrow', 'type' => 'text', 'default_value' => 'Concierge' ),
						array( 'key' => 'field_exp_concierge_title1', 'label' => 'Título (linha 1)', 'name' => 'title1', 'type' => 'text', 'default_value' => 'Criamos experiências' ),
						array( 'key' => 'field_exp_concierge_title2', 'label' => 'Título (linha 2)', 'name' => 'title2', 'type' => 'text', 'default_value' => 'únicas para você' ),
						array( 'key' => 'field_exp_concierge_text', 'label' => 'Texto', 'name' => 'text', 'type' => 'textarea', 'new_lines' => 'br', 'rows' => 5 ),
						array( 'key' => 'field_exp_concierge_btn', 'label' => 'Texto do botão', 'name' => 'btn', 'type' => 'text', 'default_value' => 'Falar com o concierge' ),
					),
				),

				// ---- Produtos Exclusivos (Artesanato) ----
				array(
					'key'        => 'field_exp_crafts',
					'label'      => 'Artesanato (Produtos Exclusivos)',
					'name'       => 'experiencias_crafts',
					'type'       => 'group',
					'layout'     => 'block',
					'sub_fields' => array(
						array( 'key' => 'field_exp_crafts_img', 'label' => 'Imagem', 'name' => 'img', 'type' => 'image', 'return_format' => 'array' ),
						array( 'key' => 'field_exp_crafts_eyebrow', 'label' => 'Eyebrow', 'name' => 'eyebrow', 'type' => 'text', 'default_value' => 'Artesanato' ),
						array( 'key' => 'field_exp_crafts_title1', 'label' => 'Título (linha 1)', 'name' => 'title1', 'type' => 'text', 'default_value' => 'Produtos Exclusivos' ),
						array( 'key' => 'field_exp_crafts_title2', 'label' => 'Título (linha 2)', 'name' => 'title2', 'type' => 'text', 'default_value' => 'Aretê' ),
						array( 'key' => 'field_exp_crafts_text', 'label' => 'Texto', 'name' => 'text', 'type' => 'textarea', 'new_lines' => 'br', 'rows' => 5 ),
					),
				),

				// ---- Picnic Aretê ----
				array(
					'key'        => 'field_exp_picnic',
					'label'      => 'Picnic Aretê',
					'name'       => 'experiencias_picnic',
					'type'       => 'group',
					'layout'     => 'block',
					'sub_fields' => array(
						array( 'key' => 'field_exp_picnic_img', 'label' => 'Imagem', 'name' => 'img', 'type' => 'image', 'return_format' => 'array' ),
						array( 'key' => 'field_exp_picnic_eyebrow', 'label' => 'Eyebrow', 'name' => 'eyebrow', 'type' => 'text', 'default_value' => 'Momento Exclusivo' ),
						array( 'key' => 'field_exp_picnic_title1', 'label' => 'Título (linha 1)', 'name' => 'title1', 'type' => 'text', 'default_value' => 'Picnic' ),
						array( 'key' => 'field_exp_picnic_title2', 'label' => 'Título (linha 2)', 'name' => 'title2', 'type' => 'text', 'default_value' => 'Aretê' ),
						array( 'key' => 'field_exp_picnic_text1', 'label' => 'Texto 1', 'name' => 'text1', 'type' => 'textarea', 'new_lines' => 'br', 'rows' => 5 ),
						array( 'key' => 'field_exp_picnic_text2', 'label' => 'Texto 2', 'name' => 'text2', 'type' => 'textarea', 'new_lines' => 'br', 'rows' => 4 ),
						array( 'key' => 'field_exp_picnic_btn', 'label' => 'Texto do botão', 'name' => 'btn', 'type' => 'text', 'default_value' => 'Reservar Picnic' ),
					),
				),

				// ---- Experiências com Parceiros ----
				array(
					'key'        => 'field_exp_partners',
					'label'      => 'Experiências com Parceiros',
					'name'       => 'experiencias_partners',
					'type'       => 'group',
					'layout'     => 'block',
					'sub_fields' => array(
						array( 'key' => 'field_exp_partners_eyebrow', 'label' => 'Eyebrow', 'name' => 'eyebrow', 'type' => 'text', 'default_value' => 'Curadoria' ),
						array( 'key' => 'field_exp_partners_title1', 'label' => 'Título (linha 1)', 'name' => 'title1', 'type' => 'text', 'default_value' => 'Experiências' ),
						array( 'key' => 'field_exp_partners_title_em', 'label' => 'Título (parte em itálico)', 'name' => 'title_em', 'type' => 'text', 'default_value' => 'com parceiros' ),
						array( 'key' => 'field_exp_partners_text', 'label' => 'Texto', 'name' => 'text', 'type' => 'textarea', 'new_lines' => 'br', 'rows' => 3 ),
						array(
							'key'          => 'field_exp_partners_rows',
							'label'        => 'Itens de experiência',
							'name'         => 'rows',
							'type'         => 'repeater',
							'layout'       => 'block',
							'button_label' => 'Adicionar experiência',
							'min'          => 0,
							'max'          => 0,
							'sub_fields'   => array(
								array( 'key' => 'field_exp_partner_num', 'label' => 'Número (ex.: 01)', 'name' => 'num', 'type' => 'text' ),
								array( 'key' => 'field_exp_partner_name', 'label' => 'Nome', 'name' => 'name', 'type' => 'text' ),
								array( 'key' => 'field_exp_partner_desc', 'label' => 'Descrição', 'name' => 'desc', 'type' => 'textarea', 'new_lines' => 'br', 'rows' => 3 ),
							),
						),
					),
				),

				// ---- Programação da Cidade ----
				array(
					'key'        => 'field_exp_events',
					'label'      => 'Programação da Cidade',
					'name'       => 'experiencias_events',
					'type'       => 'group',
					'layout'     => 'block',
					'sub_fields' => array(
						array( 'key' => 'field_exp_events_eyebrow', 'label' => 'Eyebrow', 'name' => 'eyebrow', 'type' => 'text', 'default_value' => 'Calendário da Cidade' ),
						array( 'key' => 'field_exp_events_title1', 'label' => 'Título (linha 1)', 'name' => 'title1', 'type' => 'text', 'default_value' => 'O ano inteiro,' ),
						array( 'key' => 'field_exp_events_title_em', 'label' => 'Título (parte em itálico)', 'name' => 'title_em', 'type' => 'text', 'default_value' => 'um evento acontecendo' ),
						array( 'key' => 'field_exp_events_text', 'label' => 'Texto', 'name' => 'text', 'type' => 'textarea', 'new_lines' => 'br', 'rows' => 4 ),
						array(
							'key'          => 'field_exp_events_rows',
							'label'        => 'Eventos',
							'name'         => 'rows',
							'type'         => 'repeater',
							'layout'       => 'block',
							'button_label' => 'Adicionar evento',
							'min'          => 0,
							'max'          => 0,
							'sub_fields'   => array(
								array( 'key' => 'field_exp_event_name', 'label' => 'Nome', 'name' => 'name', 'type' => 'text' ),
								array( 'key' => 'field_exp_event_desc', 'label' => 'Descrição', 'name' => 'desc', 'type' => 'textarea', 'new_lines' => 'br', 'rows' => 3 ),
							),
						),
					),
				),

				// ---- CTA ----
				array(
					'key'        => 'field_exp_cta',
					'label'      => 'CTA final',
					'name'       => 'experiencias_cta',
					'type'       => 'group',
					'layout'     => 'block',
					'sub_fields' => array(
						array( 'key' => 'field_exp_cta_title', 'label' => 'Título', 'name' => 'title', 'type' => 'text', 'default_value' => 'Pronto para descobrir?' ),
						array( 'key' => 'field_exp_cta_subtitle', 'label' => 'Subtítulo', 'name' => 'subtitle', 'type' => 'text', 'default_value' => 'Entre em contato e criamos juntos a experiência perfeita em Búzios' ),
						array( 'key' => 'field_exp_cta_btn', 'label' => 'Texto do botão', 'name' => 'btn', 'type' => 'text', 'default_value' => 'Fale conosco' ),
					),
				),

			),
			'location' => array(
				array(
					array(
						'param'    => 'page',
						'operator' => '==',
						'value'    => $experiencias,
					),
				),
			),
			'menu_order' => 60,
		)
	);
}
add_action( 'acf/init', 'arete_register_experiencias_acf' );
