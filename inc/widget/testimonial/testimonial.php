<?php
/**
 * Testimonial widget.
 *
 * @package boka
 */

class Boka_Testimonial_Widget extends SiteOrigin_Widget {

	function __construct() {

		parent::__construct(
			'boka-testimonial-widget',
			__( 'boka Testimonial Widget', 'boka' ),
			array(
				'description' => __( 'Testimonial Widget', 'boka' ),
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
					'label' => __( 'Title', 'boka' ),
				),

				'testimonial' => array(
					'type'       => 'repeater',
					'label'      => __( 'Testimonial', 'boka' ),
					'item_name'  => __( 'Item', 'boka' ),
					'item_label' => array(
						'selector'     => "[id*='prefix-boka-testimonial-']",
						'update_event' => 'change',
						'value_method' => 'val',
					),
					'fields' => array(
						'testimonial_name' => array(
							'type'  => 'text',
							'label' => __( 'Name', 'boka' ),
						),
						'testimonial_texteditor' => array(
							'type' => 'tinymce',
							'default' => '',
							'rows' => 10,
							'default_editor' => 'html',
							'button_filters' => array(
								'mce_buttons' => array( $this, 'filter_mce_buttons' ),
								'mce_buttons_2' => array( $this, 'filter_mce_buttons_2' ),
								'mce_buttons_3' => array( $this, 'filter_mce_buttons_3' ),
								'mce_buttons_4' => array( $this, 'filter_mce_buttons_5' ),
								'quicktags_settings' => array( $this, 'filter_quicktags_settings' ),
							),
						),
						'testimonial_profile_picture' => array(
							'type'     => 'media',
							'library'  => 'image',
							'label'    => __( 'Image', 'boka' ),
							'fallback' => true,
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

siteorigin_widget_register( 'boka-testimonial-widget', __FILE__, 'Boka_Testimonial_Widget' );
