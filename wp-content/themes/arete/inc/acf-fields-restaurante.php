<?php
/**
 * Aretê Hotel - Campos ACF da página Restaurante.
 *
 * Registra o grupo de campos locais da página Restaurante via
 * acf_add_local_field_group(). Todo texto e toda imagem editáveis pelo painel.
 *
 * @package AretêHotel
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function arete_register_restaurante_acf() {
	$p           = get_page_by_path( 'restaurante' );
	$restaurante = $p ? (int) $p->ID : 0;

	acf_add_local_field_group(
		array(
			'key'      => 'group_restaurante',
			'title'    => 'Restaurante - Conteúdo',
			'fields'   => array(

				// ---- Hero ----
				array(
					'key'        => 'field_rest_hero',
					'label'      => 'Hero',
					'name'       => 'restaurante_hero',
					'type'       => 'group',
					'layout'     => 'block',
					'sub_fields' => array(
						array( 'key' => 'field_rest_hero_kicker', 'label' => 'Kicker', 'name' => 'kicker', 'type' => 'text', 'default_value' => 'Restaurante' ),
						array( 'key' => 'field_rest_hero_logo', 'label' => 'Logo Arê', 'name' => 'logo', 'type' => 'image', 'return_format' => 'array' ),
						array( 'key' => 'field_rest_hero_subtitle', 'label' => 'Subtítulo', 'name' => 'subtitle', 'type' => 'text', 'default_value' => 'Da horta à mesa, do mar ao prato' ),
						array( 'key' => 'field_rest_hero_bg', 'label' => 'Imagem de fundo', 'name' => 'bg', 'type' => 'image', 'return_format' => 'array' ),
						array( 'key' => 'field_rest_hero_scroll', 'label' => 'Texto do scroll (Descobrir)', 'name' => 'scroll_text', 'type' => 'text', 'default_value' => 'Descobrir' ),
					),
				),

				// ---- Lifestyle: Restaurante Arê ----
				array(
					'key'        => 'field_rest_lifestyle',
					'label'      => 'Lifestyle (Restaurante Arê)',
					'name'       => 'restaurante_lifestyle',
					'type'       => 'group',
					'layout'     => 'block',
					'sub_fields' => array(
						array( 'key' => 'field_rest_life_eyebrow', 'label' => 'Eyebrow', 'name' => 'eyebrow', 'type' => 'text', 'default_value' => 'Restaurante Arê' ),
						array( 'key' => 'field_rest_life_title1', 'label' => 'Título (antes do <br><em>)', 'name' => 'title1', 'type' => 'text', 'default_value' => 'Cozinha com' ),
						array( 'key' => 'field_rest_life_title_em', 'label' => 'Título (parte em itálico)', 'name' => 'title_em', 'type' => 'text', 'default_value' => 'identidade própria' ),
						array(
							'key'          => 'field_rest_life_columns',
							'label'        => 'Colunas (3)',
							'name'         => 'columns',
							'type'         => 'repeater',
							'layout'       => 'block',
							'button_label' => 'Adicionar coluna',
							'min'          => 0,
							'max'          => 0,
							'sub_fields'   => array(
								array( 'key' => 'field_rest_life_col_name', 'label' => 'Nome', 'name' => 'name', 'type' => 'text' ),
								array( 'key' => 'field_rest_life_col_desc', 'label' => 'Descrição', 'name' => 'desc', 'type' => 'textarea', 'new_lines' => 'br', 'rows' => 3 ),
							),
						),
					),
				),

				// ---- Equipe ----
				array(
					'key'        => 'field_rest_team',
					'label'      => 'Equipe',
					'name'       => 'restaurante_team',
					'type'       => 'group',
					'layout'     => 'block',
					'sub_fields' => array(
						array( 'key' => 'field_rest_team_img', 'label' => 'Imagem', 'name' => 'img', 'type' => 'image', 'return_format' => 'array' ),
						array( 'key' => 'field_rest_team_eyebrow', 'label' => 'Eyebrow', 'name' => 'eyebrow', 'type' => 'text', 'default_value' => 'A equipe' ),
						array( 'key' => 'field_rest_team_title', 'label' => 'Título', 'name' => 'title', 'type' => 'text', 'default_value' => 'Quem cozinha' ),
						array( 'key' => 'field_rest_team_text', 'label' => 'Texto', 'name' => 'text', 'type' => 'textarea', 'new_lines' => 'br', 'rows' => 5 ),
					),
				),

				// ---- A cozinha ----
				array(
					'key'        => 'field_rest_kitchen',
					'label'      => 'A Cozinha',
					'name'       => 'restaurante_kitchen',
					'type'       => 'group',
					'layout'     => 'block',
					'sub_fields' => array(
						array( 'key' => 'field_rest_kitchen_img', 'label' => 'Imagem', 'name' => 'img', 'type' => 'image', 'return_format' => 'array' ),
						array( 'key' => 'field_rest_kitchen_eyebrow', 'label' => 'Eyebrow', 'name' => 'eyebrow', 'type' => 'text', 'default_value' => 'A cozinha' ),
						array( 'key' => 'field_rest_kitchen_title1', 'label' => 'Título (antes do <br>)', 'name' => 'title1', 'type' => 'text', 'default_value' => 'Raízes &' ),
						array( 'key' => 'field_rest_kitchen_title2', 'label' => 'Título (linha 2)', 'name' => 'title2', 'type' => 'text', 'default_value' => 'Inovação' ),
						array( 'key' => 'field_rest_kitchen_text', 'label' => 'Texto', 'name' => 'text', 'type' => 'textarea', 'new_lines' => 'br', 'rows' => 5 ),
					),
				),

				// ---- CTA de reserva ----
				array(
					'key'        => 'field_rest_cta',
					'label'      => 'CTA de reserva',
					'name'       => 'restaurante_cta',
					'type'       => 'group',
					'layout'     => 'block',
					'sub_fields' => array(
						array( 'key' => 'field_rest_cta_btn', 'label' => 'Texto do botão', 'name' => 'btn', 'type' => 'text', 'default_value' => 'Fazer reserva' ),
					),
				),

				// ---- Cardápio ----
				array(
					'key'        => 'field_rest_menu',
					'label'      => 'Cardápio (Menu)',
					'name'       => 'restaurante_menu',
					'type'       => 'group',
					'layout'     => 'block',
					'sub_fields' => array(
						array( 'key' => 'field_rest_menu_eyebrow', 'label' => 'Eyebrow', 'name' => 'eyebrow', 'type' => 'text', 'default_value' => 'Cardápio' ),
						array( 'key' => 'field_rest_menu_title', 'label' => 'Título', 'name' => 'title', 'type' => 'text', 'default_value' => 'Menu' ),
						array( 'key' => 'field_rest_menu_vermais', 'label' => 'Texto do botão "Ver cardápio"', 'name' => 'vermais', 'type' => 'text', 'default_value' => 'Ver cardápio completo' ),
						array( 'key' => 'field_rest_menu_vermenos', 'label' => 'Texto do botão "Ver menos"', 'name' => 'vermenos', 'type' => 'text', 'default_value' => 'Ver menos' ),
						array(
							'key'          => 'field_rest_menu_gallery',
							'label'        => 'Galeria lateral (fotos)',
							'name'         => 'gallery',
							'type'         => 'repeater',
							'layout'       => 'block',
							'button_label' => 'Adicionar foto',
							'min'          => 0,
							'max'          => 0,
							'sub_fields'   => array(
								array( 'key' => 'field_rest_menu_gallery_img', 'label' => 'Imagem', 'name' => 'img', 'type' => 'image', 'return_format' => 'array' ),
							),
						),
						array(
							'key'          => 'field_rest_menu_categories',
							'label'        => 'Categorias do cardápio',
							'name'         => 'categories',
							'type'         => 'repeater',
							'layout'       => 'block',
							'button_label' => 'Adicionar categoria',
							'min'          => 0,
							'max'          => 0,
							'sub_fields'   => array(
								array( 'key' => 'field_rest_menu_cat_title', 'label' => 'Título da categoria', 'name' => 'title', 'type' => 'text' ),
								array( 'key' => 'field_rest_menu_cat_sub', 'label' => 'Subtítulo (ex.: Fermentação natural)', 'name' => 'sub', 'type' => 'text' ),
								array(
									'key'          => 'field_rest_menu_cat_items',
									'label'        => 'Itens do cardápio',
									'name'         => 'items',
									'type'         => 'repeater',
									'layout'       => 'block',
									'button_label' => 'Adicionar item',
									'min'          => 0,
									'max'          => 0,
									'sub_fields'   => array(
										array( 'key' => 'field_rest_menu_item_name', 'label' => 'Nome', 'name' => 'name', 'type' => 'text' ),
										array( 'key' => 'field_rest_menu_item_price', 'label' => 'Preço (ex.: R$ 71)', 'name' => 'price', 'type' => 'text' ),
										array( 'key' => 'field_rest_menu_item_desc', 'label' => 'Descrição', 'name' => 'desc', 'type' => 'textarea', 'new_lines' => 'br', 'rows' => 2 ),
									),
								),
							),
						),
					),
				),

				// ---- Horários ----
				array(
					'key'        => 'field_rest_hours',
					'label'      => 'Horários',
					'name'       => 'restaurante_hours',
					'type'       => 'group',
					'layout'     => 'block',
					'sub_fields' => array(
						array( 'key' => 'field_rest_hours_eyebrow', 'label' => 'Eyebrow', 'name' => 'eyebrow', 'type' => 'text', 'default_value' => 'Horários' ),
						array( 'key' => 'field_rest_hours_title', 'label' => 'Título', 'name' => 'title', 'type' => 'text', 'default_value' => 'Funcionamento' ),
						array(
							'key'          => 'field_rest_hours_blocks',
							'label'        => 'Blocos de horário',
							'name'         => 'blocks',
							'type'         => 'repeater',
							'layout'       => 'block',
							'button_label' => 'Adicionar bloco',
							'min'          => 0,
							'max'          => 0,
							'sub_fields'   => array(
								array( 'key' => 'field_rest_hours_label', 'label' => 'Rótulo', 'name' => 'label', 'type' => 'text' ),
								array( 'key' => 'field_rest_hours_time', 'label' => 'Horário', 'name' => 'time', 'type' => 'text' ),
								array( 'key' => 'field_rest_hours_note', 'label' => 'Nota', 'name' => 'note', 'type' => 'text' ),
							),
						),
						array( 'key' => 'field_rest_hours_cta1', 'label' => 'Texto do CTA (ex.: Para reservas, ligue)', 'name' => 'cta1', 'type' => 'text', 'default_value' => 'Para reservas, ligue' ),
						array( 'key' => 'field_rest_hours_phone', 'label' => 'Telefone (ex.: +55 (22) 2008-0155)', 'name' => 'phone', 'type' => 'text', 'default_value' => '+55 (22) 2008-0155' ),
						array( 'key' => 'field_rest_hours_tel', 'label' => 'Telefone para tel: (ex.: +552220080155)', 'name' => 'tel', 'type' => 'text', 'default_value' => '+552220080155' ),
					),
				),

			),
			'location' => array(
				array(
					array(
						'param'    => 'page',
						'operator' => '==',
						'value'    => $restaurante,
					),
				),
			),
			'menu_order' => 30,
		)
	);
}
add_action( 'acf/init', 'arete_register_restaurante_acf' );
