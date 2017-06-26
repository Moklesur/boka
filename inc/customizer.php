<?php
/**
 * Boka Customizer.
 *
 * @package boka
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function boka_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	$wp_customize->get_section( 'title_tagline' )->title = __('Header', 'boka');

	/**
	 * Class Boka Divider
	 */
	class boka_divider extends WP_Customize_Control {
		public $type = 'divider';
		public $label = '';
		public function render_content() { ?>
			<h3 style="margin-top:15px; margin-bottom:0;background:#2cde9a;padding:9px 5px;color:#fff;text-transform:uppercase; text-align: center;letter-spacing: 2px;"><?php echo esc_html( $this->label ); ?></h3>
			<?php
		}
	}

	/*********************************************
	 * General
	 *********************************************/

	/*********************************************
	 * Social Links
	 *********************************************/
	$wp_customize->add_section( 'social_settings', array(
		'title' => __( 'Social Media', 'boka' ),
		'priority' => 60,
	) );
	/**
	 * Boka Divider
	 */
	$wp_customize->add_setting('boka_options[divider]', array(
			'type'              => 'divider_control',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'esc_attr',
		)
	);
	$wp_customize->add_control( new boka_divider( $wp_customize, 'header_social', array(
			'label' => __('Header Social', 'boka'),
			'section' => 'social_settings',
			'settings' => 'boka_options[divider]'
		) )
	);
	/********************* Header Social ************************/
	$wp_customize->add_setting( 'header_fb', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'header_fb', array(
		'label' => __( 'Facebook', 'boka' ),
		'type' => 'text',
		'section' => 'social_settings',
		'settings' => 'header_fb'
	) );
	$wp_customize->add_setting( 'header_tw', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'header_tw', array(
		'label' => __( 'Twitter', 'boka' ),
		'type' => 'text',
		'section' => 'social_settings',
		'settings' => 'header_tw'
	) );
	$wp_customize->add_setting( 'header_li', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'header_li', array(
		'label' => __( 'Linkedin', 'boka' ),
		'type' => 'text',
		'section' => 'social_settings',
		'settings' => 'header_li'
	) );
	$wp_customize->add_setting( 'header_pint', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'header_pint', array(
		'label' => __( 'Pinterest', 'boka' ),
		'type' => 'text',
		'section' => 'social_settings',
		'settings' => 'header_pint'
	) );
	$wp_customize->add_setting( 'header_ins', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'header_ins', array(
		'label' => __( 'Instagram', 'boka' ),
		'type' => 'text',
		'section' => 'social_settings',
		'settings' => 'header_ins'
	) );
	$wp_customize->add_setting( 'header_dri', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'header_dri', array(
		'label' => __( 'Dribbble', 'boka' ),
		'type' => 'text',
		'section' => 'social_settings',
		'settings' => 'header_dri'
	) );
	$wp_customize->add_setting( 'header_plus', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'header_plus', array(
		'label' => __( 'Plus Google', 'boka' ),
		'type' => 'text',
		'section' => 'social_settings',
		'settings' => 'header_plus'
	) );
	$wp_customize->add_setting( 'header_you', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'header_you', array(
		'label' => __( 'YouTube', 'boka' ),
		'type' => 'text',
		'section' => 'social_settings',
		'settings' => 'header_you'
	) );

	/**
	 * Boka Divider
	 */
	$wp_customize->add_setting('boka_options[divider]', array(
			'type'              => 'divider_control',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'esc_attr',
		)
	);
	$wp_customize->add_control( new boka_divider( $wp_customize, 'footer_social', array(
			'label' => __('Widget Social', 'boka'),
			'section' => 'social_settings',
			'settings' => 'boka_options[divider]'
		) )
	);
	/********************* Footer Social ************************/
	$wp_customize->add_setting( 'footer_fb', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'footer_fb', array(
		'label' => __( 'Facebook', 'boka' ),
		'type' => 'text',
		'section' => 'social_settings',
		'settings' => 'footer_fb'
	) );
	$wp_customize->add_setting( 'footer_tw', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'footer_tw', array(
		'label' => __( 'Twitter', 'boka' ),
		'type' => 'text',
		'section' => 'social_settings',
		'settings' => 'footer_tw'
	) );
	$wp_customize->add_setting( 'footer_li', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'footer_li', array(
		'label' => __( 'Linkedin', 'boka' ),
		'type' => 'text',
		'section' => 'social_settings',
		'settings' => 'footer_li'
	) );
	$wp_customize->add_setting( 'footer_pint', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'footer_pint', array(
		'label' => __( 'Pinterest', 'boka' ),
		'type' => 'text',
		'section' => 'social_settings',
		'settings' => 'footer_pint'
	) );
	$wp_customize->add_setting( 'footer_ins', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'footer_ins', array(
		'label' => __( 'Instagram', 'boka' ),
		'type' => 'text',
		'section' => 'social_settings',
		'settings' => 'footer_ins'
	) );
	$wp_customize->add_setting( 'footer_dri', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'footer_dri', array(
		'label' => __( 'Dribbble', 'boka' ),
		'type' => 'text',
		'section' => 'social_settings',
		'settings' => 'footer_dri'
	) );
	$wp_customize->add_setting( 'footer_plus', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'footer_plus', array(
		'label' => __( 'Plus Google', 'boka' ),
		'type' => 'text',
		'section' => 'social_settings',
		'settings' => 'footer_plus'
	) );
	$wp_customize->add_setting( 'footer_you', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'footer_you', array(
		'label' => __( 'YouTube', 'boka' ),
		'type' => 'text',
		'section' => 'social_settings',
		'settings' => 'footer_you'
	) );

	/*********************************************
	 * Header
	 *********************************************/
	/**
	 * Boka Divider
	 */
	$wp_customize->add_setting('boka_options[divider]', array(
			'type'              => 'divider_control',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'esc_attr',
		)
	);
	$wp_customize->add_control( new boka_divider( $wp_customize, 'header_logo', array(
			'label' => __('Logo', 'boka'),
			'section' => 'title_tagline',
			'settings' => 'boka_options[divider]',
			'priority'      => 5
		) )
	);
	/**
	 * Boka Divider
	 */
	$wp_customize->add_control( new boka_divider( $wp_customize, 'header_top', array(
			'label' => __('Header Top', 'boka'),
			'section' => 'title_tagline',
			'settings' => 'boka_options[divider]'
		) )
	);
	/********************* Top Header ************************/
	$wp_customize->add_setting( 'social_header_enable', array(
		'default'           => '',
		'sanitize_callback' => 'boka_sanitize_checkbox',
	) );
	$wp_customize->add_control( 'social_header_enable', array(
		'label' => __( 'Enable Header Social', 'boka' ),
		'type' => 'checkbox',
		'description'   => __('## Please Go Back To Social Media Settings For Social Links ##', 'boka'),
		'section' => 'title_tagline',
		'settings' => 'social_header_enable'
	) );

	$wp_customize->add_setting( 'bottom_header_search', array(
		'default'           => '',
		'sanitize_callback' => 'boka_sanitize_checkbox',
	) );
	$wp_customize->add_control( 'bottom_header_search', array(
		'label' => __( 'Enable Search', 'boka' ),
		'type' => 'checkbox',
		'section' => 'title_tagline',
		'settings' => 'bottom_header_search'
	) );
	/**
	 * Boka Divider
	 */
	$wp_customize->add_setting('boka_options[divider]', array(
			'type'              => 'divider_control',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'esc_attr',
		)
	);
	$wp_customize->add_control( new boka_divider( $wp_customize, 'header_favicon', array(
			'label' => __('Favicon', 'boka'),
			'section' => 'title_tagline',
			'settings' => 'boka_options[divider]'
		) )
	);
	/*********************************************
	 * Blog
	 *********************************************/
	$wp_customize->add_section( 'blog_settings', array(
		'title' => __( 'Blog', 'boka' ),
		'priority' => 81,
	) );
	/**
	 * Boka Divider
	 */
	$wp_customize->add_setting('boka_options[divider]', array(
			'type'              => 'divider_control',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'esc_attr',
		)
	);
	$wp_customize->add_control( new boka_divider( $wp_customize, 'blog', array(
			'label' => __('Blog Section', 'boka'),
			'section' => 'blog_settings',
			'settings' => 'boka_options[divider]'
		) )
	);
	$wp_customize->add_setting( 'blog_sidebar_enable', array(
		'default'           => '1',
		'sanitize_callback' => 'boka_sanitize_checkbox',
	) );
	$wp_customize->add_control( 'blog_sidebar_enable', array(
		'label' => __( 'Enable Sidebar', 'boka' ),
		'type' => 'checkbox',
		'section' => 'blog_settings',
		'settings' => 'blog_sidebar_enable'
	) );
	$wp_customize->add_setting( 'excerpt_lenght', array(
		'default'           => '60',
		'sanitize_callback' => 'absint',
	) );
	$wp_customize->add_control( 'excerpt_lenght', array(
		'type'        => 'number',
		'section'     => 'blog_settings',
		'settings' => 'excerpt_lenght',
		'label'       => __('Excerpt length', 'boka'),
		'description' => __('Excerpt length Default: 60 words', 'boka'),
		'input_attrs' => array(
			'min'   => 10,
			'max'   => 200,
			'step'  => 5,
		),
	) );
	/*********************************************
	 * Color
	 *********************************************/
	$wp_customize->add_setting(
		'bg_text_color',
		array(
			'default'           => '#000',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'bg_text_color',
			array(
				'label'         => __('Body Text Color', 'boka'),
				'section'       => 'colors',
				'settings'      => 'bg_text_color'
			)
		)
	);
	$wp_customize->add_setting(
		'heading_color',
		array(
			'default'           => '#000',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'heading_color',
			array(
				'label'         => __('Heading Color', 'boka'),
				'section'       => 'colors',
				'settings'      => 'heading_color'
			)
		)
	);
	$wp_customize->add_setting(
		'link_color',
		array(
			'default'           => '#f93759',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'link_color',
			array(
				'label'         => __('Link Color', 'boka'),
				'section'       => 'colors',
				'settings'      => 'link_color'
			)
		)
	);
	$wp_customize->add_setting(
		'link_hover_color',
		array(
			'default'           => '#000',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'link_hover_color',
			array(
				'label'         => __('Link Hover Color', 'boka'),
				'section'       => 'colors',
				'settings'      => 'link_hover_color'
			)
		)
	);
	/**
	 * Boka Divider
	 */
	$wp_customize->add_setting('boka_options[divider]', array(
			'type'              => 'divider_control',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'esc_attr',
		)
	);
	$wp_customize->add_control( new boka_divider( $wp_customize, 'header_color', array(
			'label' => __('Header Color', 'boka'),
			'section' => 'colors',
			'settings' => 'boka_options[divider]'
		) )
	);

	$wp_customize->add_setting(
		'header_bg_color',
		array(
			'default'           => '#fff',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'header_bg_color',
			array(
				'label'         => __('Header Background', 'boka'),
				'section'       => 'colors',
				'settings'      => 'header_bg_color'
			)
		)
	);
	$wp_customize->add_setting(
		'header_text_color',
		array(
			'default'           => '#000',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'header_text_color',
			array(
				'label'         => __('Header Text Color', 'boka'),
				'section'       => 'colors',
				'settings'      => 'header_text_color'
			)
		)
	);

	/**
	 * Boka Divider
	 */
	$wp_customize->add_setting('boka_options[divider]', array(
			'type'              => 'divider_control',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'esc_attr',
		)
	);
	$wp_customize->add_control( new boka_divider( $wp_customize, 'footer_color', array(
			'label' => __('Footer Color', 'boka'),
			'section' => 'colors',
			'settings' => 'boka_options[divider]'
		) )
	);

	$wp_customize->add_setting(
		'footer_bg_color',
		array(
			'default'           => '#000',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'footer_bg_color',
			array(
				'label'         => __('Footer Background', 'boka'),
				'section'       => 'colors',
				'settings'      => 'footer_bg_color'
			)
		)
	);
	$wp_customize->add_setting(
		'footer_text_color',
		array(
			'default'           => '#fff',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'footer_text_color',
			array(
				'label'         => __('Footer Text Color', 'boka'),
				'section'       => 'colors',
				'settings'      => 'footer_text_color'
			)
		)
	);
	/**
	 * Boka Divider
	 */
	$wp_customize->add_setting('boka_options[divider]', array(
			'type'              => 'divider_control',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'esc_attr',
		)
	);
	$wp_customize->add_control( new boka_divider( $wp_customize, 'default', array(
			'label' => __('Default Button', 'boka'),
			'section' => 'colors',
			'settings' => 'boka_options[divider]'
		) )
	);

	$wp_customize->add_setting(
		'btn_default_bg',
		array(
			'default'           => '#f93759',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'btn_default_bg',
			array(
				'label'         => __('Default BG Color', 'boka'),
				'section'       => 'colors',
				'settings'      => 'btn_default_bg'
			)
		)
	);

	$wp_customize->add_setting(
		'btn_default_text',
		array(
			'default'           => '#fff',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'btn_default_text',
			array(
				'label'         => __('Default Text Color', 'boka'),
				'section'       => 'colors',
				'settings'      => 'btn_default_text'
			)
		)
	);
	$wp_customize->add_setting(
		'btn_default_border',
		array(
			'default'           => '#f93759',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'btn_default_border',
			array(
				'label'         => __('Default Border Color', 'boka'),
				'section'       => 'colors',
				'settings'      => 'btn_default_border'
			)
		)
	);

	$wp_customize->add_setting(
		'btn_default_bg_hover',
		array(
			'default'           => '#000',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'btn_default_bg_hover',
			array(
				'label'         => __('Default BG Hover Color', 'boka'),
				'section'       => 'colors',
				'settings'      => 'btn_default_bg_hover'
			)
		)
	);
	$wp_customize->add_setting(
		'btn_default_text_hover',
		array(
			'default'           => '#fff',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'btn_default_text_hover',
			array(
				'label'         => __('Default Text Hover Color', 'boka'),
				'section'       => 'colors',
				'settings'      => 'btn_default_text_hover'
			)
		)
	);
	$wp_customize->add_setting(
		'btn_default_border_hover',
		array(
			'default'           => '#000',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'btn_default_border_hover',
			array(
				'label'         => __('Default Border Hover Color', 'boka'),
				'section'       => 'colors',
				'settings'      => 'btn_default_border_hover'
			)
		)
	);
	/**
	 * Boka Divider
	 */
	$wp_customize->add_setting('boka_options[divider]', array(
			'type'              => 'divider_control',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'esc_attr',
		)
	);
	$wp_customize->add_control( new boka_divider( $wp_customize, 'primary', array(
			'label' => __('Primary Button', 'boka'),
			'section' => 'colors',
			'settings' => 'boka_options[divider]'
		) )
	);

	$wp_customize->add_setting(
		'btn_primary_bg',
		array(
			'default'           => '#000',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'btn_primary_bg',
			array(
				'label'         => __('Primary BG Color', 'boka'),
				'section'       => 'colors',
				'settings'      => 'btn_primary_bg'
			)
		)
	);
	$wp_customize->add_setting(
		'btn_primary_text',
		array(
			'default'           => '#fff',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'btn_primary_text',
			array(
				'label'         => __('Primary Text Color', 'boka'),
				'section'       => 'colors',
				'settings'      => 'btn_primary_text'
			)
		)
	);
	$wp_customize->add_setting(
		'btn_primary_border',
		array(
			'default'           => '#000',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'btn_primary_border',
			array(
				'label'         => __('Primary Border Color', 'boka'),
				'section'       => 'colors',
				'settings'      => 'btn_primary_border'
			)
		)
	);
	$wp_customize->add_setting(
		'btn_primary_bg_hover',
		array(
			'default'           => '#f93759',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'btn_primary_bg_hover',
			array(
				'label'         => __('Primary BG Hover Color', 'boka'),
				'section'       => 'colors',
				'settings'      => 'btn_primary_bg_hover'
			)
		)
	);
	$wp_customize->add_setting(
		'btn_primary_text_hover',
		array(
			'default'           => '#fff',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'btn_primary_text_hover',
			array(
				'label'         => __('Primary Text Hover Color', 'boka'),
				'section'       => 'colors',
				'settings'      => 'btn_primary_text_hover'
			)
		)
	);
	$wp_customize->add_setting(
		'btn_primary_border_hover',
		array(
			'default'           => '#f93759',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'btn_primary_border_hover',
			array(
				'label'         => __('Primary Border Hover Color', 'boka'),
				'section'       => 'colors',
				'settings'      => 'btn_primary_border_hover'
			)
		)
	);
	/**
	 * Boka Divider
	 */
	$wp_customize->add_setting('boka_options[divider]', array(
			'type'              => 'divider_control',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'esc_attr',
		)
	);
	$wp_customize->add_control( new boka_divider( $wp_customize, 'success', array(
			'label' => __('Primary Button', 'boka'),
			'section' => 'colors',
			'settings' => 'boka_options[divider]'
		) )
	);

	$wp_customize->add_setting(
		'btn_success_bg',
		array(
			'default'           => '#fff',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'btn_success_bg',
			array(
				'label'         => __('Success BG Color', 'boka'),
				'section'       => 'colors',
				'settings'      => 'btn_success_bg'
			)
		)
	);
	$wp_customize->add_setting(
		'btn_success_text',
		array(
			'default'           => '#000',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'btn_success_text',
			array(
				'label'         => __('Success Text Color', 'boka'),
				'section'       => 'colors',
				'settings'      => 'btn_success_text'
			)
		)
	);
	$wp_customize->add_setting(
		'btn_success_border',
		array(
			'default'           => '#fff',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'btn_success_border',
			array(
				'label'         => __('Success Border Color', 'boka'),
				'section'       => 'colors',
				'settings'      => 'btn_success_border'
			)
		)
	);
	$wp_customize->add_setting(
		'btn_success_bg_hover',
		array(
			'default'           => '#000',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'btn_success_bg_hover',
			array(
				'label'         => __('Success BG Hover Color', 'boka'),
				'section'       => 'colors',
				'settings'      => 'btn_success_bg_hover'
			)
		)
	);
	$wp_customize->add_setting(
		'btn_success_text_hover',
		array(
			'default'           => '#fff',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'btn_success_text_hover',
			array(
				'label'         => __('Success Text Hover Color', 'boka'),
				'section'       => 'colors',
				'settings'      => 'btn_success_text_hover'
			)
		)
	);
	$wp_customize->add_setting(
		'btn_success_border_hover',
		array(
			'default'           => '#000',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'btn_success_border_hover',
			array(
				'label'         => __('Success Border Hover Color', 'boka'),
				'section'       => 'colors',
				'settings'      => 'btn_success_border_hover'
			)
		)
	);

	/**
	 * Boka Divider
	 */
	$wp_customize->add_setting('boka_options[divider]', array(
			'type'              => 'divider_control',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'esc_attr',
		)
	);
	$wp_customize->add_control( new boka_divider( $wp_customize, 'extracolor', array(
			'label' => __('Extra Color', 'boka'),
			'section' => 'colors',
			'settings' => 'boka_options[divider]'
		) )
	);
	$wp_customize->add_setting(
		'text_color_1',
		array(
			'default'           => '#000',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'text_color_1',
			array(
				'label'         => __('Text Color 1', 'boka'),
				'section'       => 'colors',
				'settings'      => 'text_color_1'
			)
		)
	);
	$wp_customize->add_setting(
		'text_color_2',
		array(
			'default'           => '#ccc',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'text_color_2',
			array(
				'label'         => __('Text Color 2', 'boka'),
				'section'       => 'colors',
				'settings'      => 'text_color_2'
			)
		)
	);
	/**
	 * Boka Divider
	 */
	$wp_customize->add_setting('boka_options[divider]', array(
			'type'              => 'divider_control',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'esc_attr',
		)
	);
	$wp_customize->add_control( new boka_divider( $wp_customize, 'extrabg', array(
			'label' => __('Extra BG', 'boka'),
			'section' => 'colors',
			'settings' => 'boka_options[divider]'
		) )
	);
	$wp_customize->add_setting(
		'bg_color_1',
		array(
			'default'           => '#fff',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'bg_color_1',
			array(
				'label'         => __('BG Color 1', 'boka'),
				'section'       => 'colors',
				'settings'      => 'bg_color_1'
			)
		)
	);
	$wp_customize->add_setting(
		'bg_color_2',
		array(
			'default'           => '#ccc',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'bg_color_2',
			array(
				'label'         => __('BG Color 2', 'boka'),
				'section'       => 'colors',
				'settings'      => 'bg_color_2'
			)
		)
	);

	/*********************************************
	 * Typography
	 *********************************************/
	$wp_customize->add_section( 'typography', array(
		'title' => __( 'Typography', 'boka' ),
		'priority' => 40,
	) );

	$wp_customize->add_setting(
		'body_font_family',
		array(
			'default' => 'Source+Sans+Pro',
			'sanitize_callback'     => 'boka_sanitize_text',
		)
	);
	$wp_customize->add_control(
		'body_font_family',
		array(
			'type' => 'text',
			'label' => __('Body Font', 'boka'),
			'section' => 'typography'
		)
	);
	$wp_customize->add_setting( 'body_font_size', array(
		'default'           => '15',
		'sanitize_callback' => 'absint',
	) );
	$wp_customize->add_control( 'body_font_size', array(
		'label' => __( 'Body Font Size', 'boka' ),
		'type' => 'number',
		'section' => 'typography',
		'settings' => 'body_font_size',
	) );
	$wp_customize->add_setting( 'body_font_weight', array(
		'default'           => '400',
		'sanitize_callback' => 'absint',
	) );
	$wp_customize->add_control( 'body_font_weight', array(
		'label' => __( 'Font Weight', 'boka' ),
		'type' => 'text',
		'section' => 'typography',
		'settings' => 'body_font_weight'
	) );
	$wp_customize->add_setting('heading_font_family', array(
		'default'        => 'Source+Sans+Pro',
		'sanitize_callback'     => 'boka_sanitize_text',
	));
	$wp_customize->add_control( 'heading_font_family', array(
		'label'   => __('Heading Font', 'boka'),
		'section' => 'typography',
		'type'    => 'text'

	));
	$wp_customize->add_setting( 'heading_font_weight', array(
		'default'           => '700',
		'sanitize_callback' => 'absint',
	) );
	$wp_customize->add_control( 'heading_font_weight', array(
		'label' => __( 'Font Weight', 'boka' ),
		'type' => 'text',
		'section' => 'typography',
		'settings' => 'heading_font_weight'
	) );
}
add_action( 'customize_register', 'boka_customize_register' );

/**
 * Text
 * @param $input
 * @return string
 */

function boka_sanitize_text( $input ) {
	return wp_kses_post( force_balance_tags( $input ) );
}

/**
 * Checkbox
 * @param $input
 * @return int|string
 */
function boka_sanitize_checkbox( $input ) {
	if ( $input == 1 ) {
		return 1;
	} else {
		return '';
	}
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function boka_customize_preview_js() {
	wp_enqueue_script( 'boka_customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'boka_customize_preview_js' );


