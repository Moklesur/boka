<?php
/**
 * Pricing widget.
 *
 * @package boka
 */

class Boka_Pricing_Widget extends SiteOrigin_Widget {

	function __construct() {

		parent::__construct(
			'boka-pricing-widget',
			__( 'boka Pricing Table Widget', 'boka' ),
			array(
				'description' => __( 'Pricing Table Widget', 'boka' ),
			),
			array(),

			array(
				'heading_alignment' => array(
					'type' => 'select',
					'label' => __( 'Text Alignment', 'boka' ),
					'default' => 'text-center',
					'options' => array(
						'text-left' => __( 'Text Left', 'boka' ),
						'text-center' => __( 'Text Center', 'boka' ),
						'text-right' => __( 'Text Right', 'boka' ),
					)
				),
				'title' => array(
					'type'  => 'text',
					'label' => __( 'Heading', 'boka' ),
				),

				'pricing' => array(
					'type'       => 'repeater',
					'label'      => __( 'Pricing', 'boka' ),
					'item_name'  => __( 'Item', 'boka' ),
					'item_label' => array(
						'selector'     => "[id*='prefix-boka-pricing-']",
						'update_event' => 'change',
						'value_method' => 'val',
					),
					'fields' => array(
						'pricing_icon' => array(
							'type' => 'icon',
							'label' => __('Select an icon', 'boka'),
						),
						'pricing_icon_size' => array(
							'type' => 'number',
							'label' => __( 'Icon Size', 'boka' ),
							'default' => '40'
						),
						'pricing_icon_color' => array(
							'type' => 'color',
							'label' => __( 'Icon Color', 'boka' ),
							'default' => '#000'
						),
						'pricing_title' => array(
							'type'  => 'text',
							'label' => __( 'Title', 'boka' ),
						),
						'pricing_price' => array(
							'type'  => 'text',
							'label' => __( 'Price', 'boka' ),
						),
						'pricing_texteditor' => array(
							'type' => 'tinymce',
							'default' => '',
							'rows' => 7,
							'default_editor' => 'html',
							'button_filters' => array(
								'mce_buttons' => array( $this, 'filter_mce_buttons' ),
								'mce_buttons_2' => array( $this, 'filter_mce_buttons_2' ),
								'mce_buttons_3' => array( $this, 'filter_mce_buttons_3' ),
								'mce_buttons_4' => array( $this, 'filter_mce_buttons_5' ),
								'quicktags_settings' => array( $this, 'filter_quicktags_settings' ),
							),
						),
						'pricing_button_text' => array(
							'type' => 'text',
							'label' => __('Button Title', 'boka'),
							'default' => ''
						),
						'pricing_button_style' => array(
							'type' => 'select',
							'label' => __( 'Button Style', 'boka' ),
							'default' => 'btn-default',
							'options' => array(
								'btn-default' => __( 'Default', 'boka' ),
								'btn-primary' => __( 'Primary', 'boka' ),
								'btn-success' => __( 'Success', 'boka' ),
							)
						),
						'pricing_button_url' => array(
							'type' => 'link',
							'label' => __('Button URL', 'boka'),
							'default' => ''
						),
					),
				),
			)

		);
	}

	function get_template_name( $instance ) {
		return 'default';
	}
}

siteorigin_widget_register( 'boka-pricing-widget', __FILE__, 'Boka_Pricing_Widget' );
