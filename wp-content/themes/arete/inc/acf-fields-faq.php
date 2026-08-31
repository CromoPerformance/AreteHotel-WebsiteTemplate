<?php
/**
 * Aretê Hotel - Campos ACF da página FAQ.
 *
 * Registra o grupo de campos locais da página FAQ via acf_add_local_field_group().
 *
 * @package AretêHotel
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function arete_register_faq_acf() {
	$p   = get_page_by_path( 'faq' );
	$faq = $p ? (int) $p->ID : 0;

	acf_add_local_field_group(
		array(
			'key'      => 'group_faq',
			'title'    => 'FAQ - Conteúdo',
			'fields'   => array(

				// ---- Hero ----
				array(
					'key'        => 'field_faq_hero',
					'label'      => 'Hero',
					'name'       => 'faq_hero',
					'type'       => 'group',
					'layout'     => 'block',
					'sub_fields' => array(
						array( 'key' => 'field_faq_hero_kicker', 'label' => 'Kicker', 'name' => 'kicker', 'type' => 'text', 'default_value' => 'Hotel Aretê' ),
						array( 'key' => 'field_faq_hero_title1', 'label' => 'Título (linha 1)', 'name' => 'title1', 'type' => 'text', 'default_value' => 'Perguntas' ),
						array( 'key' => 'field_faq_hero_title2', 'label' => 'Título (linha 2)', 'name' => 'title2', 'type' => 'text', 'default_value' => 'Frequentes' ),
						array( 'key' => 'field_faq_hero_subtitle', 'label' => 'Subtítulo', 'name' => 'subtitle', 'type' => 'text', 'default_value' => 'Tudo o que você precisa saber' ),
						array( 'key' => 'field_faq_hero_scroll', 'label' => 'Texto do scroll (Descobrir)', 'name' => 'scroll', 'type' => 'text', 'default_value' => 'Descobrir' ),
					),
				),

				// ---- Itens do FAQ ----
				array(
					'key'          => 'field_faq_items',
					'label'        => 'Perguntas e Respostas',
					'name'         => 'faq_items',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Adicionar pergunta',
					'min'          => 0,
					'max'          => 0,
					'sub_fields'   => array(
						array( 'key' => 'field_faq_q', 'label' => 'Pergunta', 'name' => 'question', 'type' => 'text' ),
						array( 'key' => 'field_faq_a', 'label' => 'Resposta', 'name' => 'answer', 'type' => 'textarea', 'new_lines' => 'br', 'rows' => 4 ),
					),
				),

				// ---- CTA ----
				array(
					'key'        => 'field_faq_cta',
					'label'      => 'CTA final',
					'name'       => 'faq_cta',
					'type'       => 'group',
					'layout'     => 'block',
					'sub_fields' => array(
						array( 'key' => 'field_faq_cta_title', 'label' => 'Título', 'name' => 'title', 'type' => 'text', 'default_value' => 'Ainda tem dúvidas?' ),
						array( 'key' => 'field_faq_cta_subtitle', 'label' => 'Subtítulo', 'name' => 'subtitle', 'type' => 'text', 'default_value' => 'Nossa equipe está pronta para ajudar' ),
						array( 'key' => 'field_faq_cta_btn', 'label' => 'Texto do botão', 'name' => 'btn', 'type' => 'text', 'default_value' => 'Fale conosco' ),
					),
				),

			),
			'location' => array(
				array(
					array(
						'param'    => 'page',
						'operator' => '==',
						'value'    => $faq,
					),
				),
			),
			'menu_order' => 80,
		)
	);
}
add_action( 'acf/init', 'arete_register_faq_acf' );
