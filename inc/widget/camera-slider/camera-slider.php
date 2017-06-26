<?php
/**
 * Camera Slider widget.
 *
 * @package boka
 */

class Boka_CameraSlider_Widget extends SiteOrigin_Widget {

	function __construct() {

		parent::__construct(
			'boka-camera-slider-widget',
			__( 'boka Camera Slider Widget', 'boka' ),
			array(
				'description' => __( 'Camera Slider Widget', 'boka' ),
			),
			array(),

			array(
				'CameraSlider' => array(
					'type'       => 'repeater',
					'label'      => __( 'Camera Slider', 'boka' ),
					'item_name'  => __( 'Item', 'boka' ),
					'item_label' => array(
						'selector'     => "[id*='prefix-boka-camera-slider-']",
						'update_event' => 'change',
						'value_method' => 'val',
					),
					'fields' => array(
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
						'text_position' => array(
							'type' => 'select',
							'label' => __( 'Text Position', 'boka' ),
							'default' => '0 auto',
							'options' => array(
								'auto auto auto 0' => __( 'Text Left', 'boka' ),
								'0 auto' => __( 'Text Center', 'boka' ),
								'auto 0 auto auto' => __( 'Text Right', 'boka' ),
							)
						),
						'CameraSlider_title' => array(
							'type'  => 'text',
							'label' => __( 'Title', 'boka' ),
						),
						'CameraSlider_title_color' => array(
							'type' => 'color',
							'label' => __( 'Title Color', 'boka' ),
							'default' => '#000'
						),
						'CameraSlider_subtitle' => array(
							'type'  => 'text',
							'label' => __( 'Sub Title', 'boka' ),
						),
						'CameraSlider_subtitle_color' => array(
							'type' => 'color',
							'label' => __( 'Sub Title Color', 'boka' ),
							'default' => '#000'
						),
						'CameraSlider_image' => array(
							'type'     => 'media',
							'library'  => 'image',
							'label'    => __( 'Slide Image', 'boka' ),
							'fallback' => true,
						),
						'CameraSlider_texteditor' => array(
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
						'CameraSlider_button_text' => array(
							'type' => 'text',
							'label' => __('Button Title', 'boka'),
							'default' => ''
						),
						'CameraSlider_button_style' => array(
							'type' => 'select',
							'label' => __( 'Button Style', 'boka' ),
							'default' => 'btn-default',
							'options' => array(
								'btn-default' => __( 'Default', 'boka' ),
								'btn-primary' => __( 'Primary', 'boka' ),
								'btn-success' => __( 'Success', 'boka' ),
							)
						),
						'CameraSlider_button_url' => array(
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

siteorigin_widget_register( 'boka-camera-slider-widget', __FILE__, 'Boka_CameraSlider_Widget' );
