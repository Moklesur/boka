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
						'team_text' => array(
							'type'  => 'text',
							'label' => __( 'Text', 'boka' ),
						),
						'profile_picture' => array(
							'type'     => 'media',
							'library'  => 'image',
							'label'    => __( 'Image', 'boka' ),
							'fallback' => true,
						),
						'facebook' => array(
							'type'  => 'link',
							'label' => __( 'Facebook URL', 'boka' ),
						),
						'linkedin' => array(
							'type'  => 'link',
							'label' => __( 'Linkedin URL', 'boka' ),
						),
						'twitter' => array(
							'type'  => 'link',
							'label' => __( 'Twitter URL', 'boka' ),
						),
					),
				),
				'per_row' => array(
					'type'    => 'select',
					'label'   => __( 'Per row', 'boka' ),
					'default' => 3,
					'options' => array(
						'12' => 1,
						'6' => 2,
						'4' => 3,
						'3' => 4,
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
