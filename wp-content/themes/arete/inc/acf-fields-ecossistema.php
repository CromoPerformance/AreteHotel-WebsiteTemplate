<?php
/**
 * Aretê Hotel - Campos ACF da página Ecossistema.
 *
 * @package AretêHotel
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function arete_register_ecossistema_acf() {
	$p            = get_page_by_path( 'ecossistema' );
	$ecossistema  = $p ? (int) $p->ID : 0;

	acf_add_local_field_group(
		array(
			'key'      => 'group_ecossistema',
			'title'    => 'Ecossistema - Conteúdo',
			'fields'   => array(

				// ---- Hero ----
				array(
					'key'        => 'field_eco_hero',
					'label'      => 'Hero',
					'name'       => 'ecossistema_hero',
					'type'       => 'group',
					'layout'     => 'block',
					'sub_fields' => array(
						array( 'key' => 'field_eco_hero_bg', 'label' => 'Imagem de fundo', 'name' => 'bg', 'type' => 'image', 'return_format' => 'array' ),
						array( 'key' => 'field_eco_hero_kicker', 'label' => 'Kicker', 'name' => 'kicker', 'type' => 'text', 'default_value' => 'Aretê Búzios' ),
						array( 'key' => 'field_eco_hero_title', 'label' => 'Título', 'name' => 'title', 'type' => 'text', 'default_value' => 'Ecossistema' ),
						array( 'key' => 'field_eco_hero_subtitle', 'label' => 'Subtítulo', 'name' => 'subtitle', 'type' => 'text', 'default_value' => 'Um novo jeito de viver Búzios' ),
						array( 'key' => 'field_eco_hero_scroll', 'label' => 'Texto do scroll (Descobrir)', 'name' => 'scroll', 'type' => 'text', 'default_value' => 'Descobrir' ),
					),
				),

				// ---- Manifesto ----
				array(
					'key'        => 'field_eco_manifesto',
					'label'      => 'Manifesto',
					'name'       => 'ecossistema_manifesto',
					'type'       => 'group',
					'layout'     => 'block',
					'sub_fields' => array(
						array( 'key' => 'field_eco_manifesto_text', 'label' => 'Texto', 'name' => 'text', 'type' => 'textarea', 'new_lines' => 'br', 'rows' => 4 ),
						array( 'key' => 'field_eco_manifesto_btn', 'label' => 'Texto do botão', 'name' => 'btn', 'type' => 'text', 'default_value' => 'Planeje sua estadia' ),
					),
				),

				// ---- Galeria 01 ----
				array(
					'key'          => 'field_eco_gallery1',
					'label'        => 'Galeria 01 (faixa de imagens)',
					'name'         => 'ecossistema_gallery1',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Adicionar imagem',
					'min'          => 0,
					'max'          => 0,
					'sub_fields'   => array(
						array( 'key' => 'field_eco_g1_img', 'label' => 'Imagem', 'name' => 'img', 'type' => 'image', 'return_format' => 'array' ),
					),
				),

				// ---- Ativos (eco-asset-section) ----
				array(
					'key'          => 'field_eco_assets',
					'label'        => 'Ativos do Ecossistema',
					'name'         => 'ecossistema_assets',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Adicionar ativo',
					'min'          => 0,
					'max'          => 0,
					'sub_fields'   => array(
						array( 'key' => 'field_eco_asset_img', 'label' => 'Imagem', 'name' => 'img', 'type' => 'image', 'return_format' => 'array' ),
						array( 'key' => 'field_eco_asset_subtitle', 'label' => 'Subtitle (categoria)', 'name' => 'subtitle', 'type' => 'text' ),
						array( 'key' => 'field_eco_asset_title', 'label' => 'Título', 'name' => 'title', 'type' => 'text' ),
						array( 'key' => 'field_eco_asset_km', 'label' => 'Distância (ex.: 1,3 km)', 'name' => 'km', 'type' => 'text' ),
						array( 'key' => 'field_eco_asset_text', 'label' => 'Texto', 'name' => 'text', 'type' => 'textarea', 'new_lines' => 'br', 'rows' => 4 ),
						array( 'key' => 'field_eco_asset_note', 'label' => 'Nota (opcional)', 'name' => 'note', 'type' => 'text' ),
					),
				),

				// ---- Galeria 02 ----
				array(
					'key'          => 'field_eco_gallery2',
					'label'        => 'Galeria 02 (faixa de imagens)',
					'name'         => 'ecossistema_gallery2',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Adicionar imagem',
					'min'          => 0,
					'max'          => 0,
					'sub_fields'   => array(
						array( 'key' => 'field_eco_g2_img', 'label' => 'Imagem', 'name' => 'img', 'type' => 'image', 'return_format' => 'array' ),
					),
				),

				// ---- Distâncias ----
				array(
					'key'        => 'field_eco_dist',
					'label'      => 'Distâncias',
					'name'       => 'ecossistema_dist',
					'type'       => 'group',
					'layout'     => 'block',
					'sub_fields' => array(
						array( 'key' => 'field_eco_dist_eyebrow', 'label' => 'Eyebrow', 'name' => 'eyebrow', 'type' => 'text', 'default_value' => 'Distâncias' ),
						array( 'key' => 'field_eco_dist_title', 'label' => 'Título', 'name' => 'title', 'type' => 'text', 'default_value' => 'Tudo ao alcance' ),
						array(
							'key'          => 'field_eco_dist_items',
							'label'        => 'Itens de distância',
							'name'         => 'items',
							'type'         => 'repeater',
							'layout'       => 'block',
							'button_label' => 'Adicionar item',
							'min'          => 0,
							'max'          => 0,
							'sub_fields'   => array(
								array( 'key' => 'field_eco_dist_num', 'label' => 'Número', 'name' => 'num', 'type' => 'text' ),
								array( 'key' => 'field_eco_dist_name', 'label' => 'Nome', 'name' => 'name', 'type' => 'text' ),
								array( 'key' => 'field_eco_dist_walk', 'label' => 'Tempo a pé', 'name' => 'walk', 'type' => 'text' ),
								array( 'key' => 'field_eco_dist_bike', 'label' => 'Tempo de bicicleta', 'name' => 'bike', 'type' => 'text' ),
								array( 'key' => 'field_eco_dist_car', 'label' => 'Tempo de carro', 'name' => 'car', 'type' => 'text' ),
							),
						),
					),
				),

				// ---- Mapa ----
				array(
					'key'        => 'field_eco_map',
					'label'      => 'Mapa',
					'name'       => 'ecossistema_map',
					'type'       => 'group',
					'layout'     => 'block',
					'sub_fields' => array(
						array( 'key' => 'field_eco_map_img', 'label' => 'Imagem do mapa', 'name' => 'img', 'type' => 'image', 'return_format' => 'array' ),
						array( 'key' => 'field_eco_map_alt', 'label' => 'Alt da imagem', 'name' => 'alt', 'type' => 'text', 'default_value' => 'Mapa de turismo do ecossistema Hotel Aretê' ),
					),
				),

				// ---- CTA ----
				array(
					'key'        => 'field_eco_cta',
					'label'      => 'CTA final',
					'name'       => 'ecossistema_cta',
					'type'       => 'group',
					'layout'     => 'block',
					'sub_fields' => array(
						array( 'key' => 'field_eco_cta_title', 'label' => 'Título', 'name' => 'title', 'type' => 'text', 'default_value' => 'Conheça o complexo' ),
						array( 'key' => 'field_eco_cta_subtitle', 'label' => 'Subtítulo', 'name' => 'subtitle', 'type' => 'text', 'default_value' => 'Entre em contato para saber mais sobre cada espaço' ),
						array( 'key' => 'field_eco_cta_btn', 'label' => 'Texto do botão', 'name' => 'btn', 'type' => 'text', 'default_value' => 'Fale conosco' ),
					),
				),

			),
			'location' => array(
				array(
					array(
						'param'    => 'page',
						'operator' => '==',
						'value'    => $ecossistema,
					),
				),
			),
			'menu_order' => 70,
		)
	);
}
add_action( 'acf/init', 'arete_register_ecossistema_acf' );
