<?php
/**
 * Team widget.
 *
 * @package boka
 */

class Boka_Team_Widget extends SiteOrigin_Widget {

	function __construct() {

		parent::__construct(
			'boka-team-widget',
			__( 'boka Team Widget', 'boka' ),
			array(
				'description' => __( 'Team Widget', 'boka' ),
			),
			array(),
			array(
				'title' => array(
					'type'  => 'text',
					'label' => __( 'Title', 'boka' ),
				),
				'sub_title' => array(
					'type' => 'text',
					'label' => __( 'Sub Title', 'boka' ),
				),
				'team' => array(
					'type'       => 'repeater',
					'label'      => __( 'Team', 'boka' ),
					'item_name'  => __( 'Item', 'boka' ),
					'item_label' => array(
						'selector'     => "[id*='prefix-boka-team-']",
						'update_event' => 'change',
						'value_method' => 'val',
					),
					'fields' => array(
						'team_title' => array(
							'type'  => 'text',
							'label' => __( 'Title', 'boka' ),
						),
						'team_price' => array(
							'type'  => 'text',
							'label' => __( 'Team', 'boka' ),
						),
						'texteditor' => array(
							'type' => 'tinymce',
							'label' => __( '', 'boka' ),
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
						'profile_picture' => array(
							'type'     => 'media',
							'library'  => 'image',
							'label'    => __( 'Image', 'boka' ),
							'fallback' => true,
						),
					),
				),
				'per_row' => array(
					'type'    => 'select',
					'label'   => __( 'Menus per row', 'boka' ),
					'default' => 3,
					'options' => array(
						'12' => 1,
						'6' => 2,
						'3' => 4,
						'4' => 3,
					),
				),
			)
		);
	}

	function get_template_name( $instance ) {
		return 'default';
	}
}

siteorigin_widget_register( 'boka-team-widget', __FILE__, 'Boka_Team_Widget' );
