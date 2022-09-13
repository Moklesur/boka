<?phpnamespace Elementor;if ( ! defined( 'ABSPATH' ) ) {    exit; // Exit if accessed directly.}/** * * @since 1.0.0 */class Boka_Main_Slider extends Widget_Base {    /**     * Get widget name.     *     * Retrieve oEmbed widget name.     *     * @since 1.0.0     * @access public     *     * @return string Widget name.     */    public function get_name() {        return 'Slider';    }    /**     * Get widget title.     *     * Retrieve oEmbed widget title.     *     * @since 1.0.0     * @access public     *     * @return string Widget title.     */    public function get_title() {        return __( 'Slider', 'boka' );    }    /**     * Get widget icon.     *     * Retrieve oEmbed widget icon.     *     * @since 1.0.0     * @access public     *     * @return string Widget icon.     */    public function get_icon() {        return 'fa fa-sliders';    }    /**     * Get widget categories.     *     * Retrieve the list of categories the oEmbed widget belongs to.     *     * @since 1.0.0     * @access public     *     * @return array Widget categories.     */    public function get_categories() {        return [ 'boka' ];    }    /**     * Register oEmbed widget controls.     *     * Adds different input fields to allow the user to change and customize the widget settings.     *     * @since 1.0.0     * @access protected     */    protected function _register_controls() {        $this->start_controls_section(            'boka_slider_section_id',            [                'label' => __( 'Setting', 'boka' ),                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,            ]        );        $repeater = new \Elementor\Repeater();        $repeater->add_control(            'heading_alignment',            [                'label' => __( 'Text Alignment', 'boka' ),                'type' => \Elementor\Controls_Manager::CHOOSE,                'options' => [                    'left' => [                        'title' => __( 'Left', 'boka' ),                        'icon' => 'fa fa-align-left',                    ],                    'center' => [                        'title' => __( 'Center', 'boka' ),                        'icon' => 'fa fa-align-center',                    ],                    'right' => [                        'title' => __( 'Right', 'boka' ),                        'icon' => 'fa fa-align-right',                    ],                ],                'default' => 'center',                'toggle' => true,            ]        );        $repeater->add_control(            'text_position', [                'label' => __( 'Text Position', 'boka' ),                'type' => \Elementor\Controls_Manager::SELECT,                'default' => '0 auto',                'options' => array(                    'auto auto auto 0' => __( 'Text Left', 'boka' ),                    '0 auto' => __( 'Text Center', 'boka' ),                    'auto 0 auto auto' => __( 'Text Right', 'boka' ),                )            ]        );        $repeater->add_control(            'CameraSlider_image', [                'label'    => __( 'Slide Image', 'boka' ),                'type' => \Elementor\Controls_Manager::MEDIA,                'default' => [                    'url' => \Elementor\Utils::get_placeholder_image_src(),                ]            ]        );        $repeater->add_control(            'CameraSlider_title_color', [                'label' => __( 'Title Color', 'boka' ),                'type' => \Elementor\Controls_Manager::COLOR,                'scheme' => [                    'type' => \Elementor\Scheme_Color::get_type(),                    'value' => \Elementor\Scheme_Color::COLOR_1,                ],                'selectors' => [                    '{{WRAPPER}} .camera-slider-inner h1' => 'color: {{VALUE}}',                ],            ]        );        $repeater->add_control(            'title_animation',            [                'label' => __( 'Title Animation', 'boka' ),                'type' => \Elementor\Controls_Manager::TEXT,                'default' => __( 'slideInUp', 'boka' ),                'description' => __( 'Take an <a href="https://daneden.github.io/animate.css/">Animation</a> code and put in field', 'boka' )            ]        );        $repeater->add_control(            'CameraSlider_title',            [                'label' => __( 'Title', 'boka' ),                'type' => \Elementor\Controls_Manager::TEXT            ]        );        $repeater->add_control(            'CameraSlider_subtitle_color', [                'label' => __( 'Content Color', 'boka' ),                'type' => \Elementor\Controls_Manager::COLOR,                'scheme' => [                    'type' => \Elementor\Scheme_Color::get_type(),                    'value' => \Elementor\Scheme_Color::COLOR_1,                ],                'selectors' => [                    '{{WRAPPER}} .camera-slider-inner p' => 'color: {{VALUE}}',                ],            ]        );        $repeater->add_control(            'content_animation',            [                'label' => __( 'Content Animation', 'boka' ),                'type' => \Elementor\Controls_Manager::TEXT,                'default' => __( 'slideInUp', 'boka' ),                'description' => __( 'Take an <a href="https://daneden.github.io/animate.css/">Animation</a> code and put in field', 'boka' )            ]        );        $repeater->add_control(            'CameraSlider_subtitle',            [                'label' => __( 'Content', 'boka' ),                'type' => \Elementor\Controls_Manager::TEXTAREA            ]        );        $repeater->add_control(            'color', [                'label' => __( 'Button Text Color', 'boka' ),                'type' => \Elementor\Controls_Manager::COLOR,                'scheme' => [                    'type' => \Elementor\Scheme_Color::get_type(),                    'value' => \Elementor\Scheme_Color::COLOR_1,                ],                'selectors' => [                    '{{WRAPPER}} .camera-slider-inner .btn' => 'color: {{VALUE}}',                ],            ]        );        $repeater->add_control(            'bgColor', [                'label' => __( 'Button BG Color', 'boka' ),                'type' => \Elementor\Controls_Manager::COLOR,                'scheme' => [                    'type' => \Elementor\Scheme_Color::get_type(),                    'value' => \Elementor\Scheme_Color::COLOR_1,                ],                'selectors' => [                    '{{WRAPPER}} .camera-slider-inner .btn' => 'color: {{VALUE}}',                ],            ]        );        $repeater->add_control(            'btn_animation',            [                'label' => __( 'Button Animation', 'boka' ),                'type' => \Elementor\Controls_Manager::TEXT,                'default' => __( 'slideInUp', 'boka' ),                'description' => __( 'Take an <a href="https://daneden.github.io/animate.css/">Animation</a> code and put in field', 'boka' )            ]        );        $repeater->add_control(            'CameraSlider_button_text',            [                'label' => __( 'Button Text', 'boka' ),                'type' => \Elementor\Controls_Manager::TEXT            ]        );        $repeater->add_control(            'CameraSlider_button_url',            [                'label' => __( 'Button URL', 'boka' ),                'type' => \Elementor\Controls_Manager::URL,                'placeholder' => __( 'https://your-link.com', 'boka' ),                'show_external' => true,                'default' => [                    'url' => '#',                    'is_external' => true,                    'nofollow' => true,                ],            ]        );        $this->add_control(            'list',            [                'label' => __( 'SLIDER ITEMS', 'boka' ),                'type' => \Elementor\Controls_Manager::REPEATER,                'fields' => $repeater->get_controls(),                'default' => [                    [                        'CameraSlider_title' => __( 'Slider Header', 'boka' )                    ]                ],                'title_field' => '{{{ CameraSlider_title }}}',            ]        );        $this->add_control(            'slider_settings_divider',            [                'label' => __( 'SETTINGS', 'boka' ),                'type' => \Elementor\Controls_Manager::HEADING,                'separator' => 'before',            ]        );        $this->add_control(            'height',            [                'label' => __( 'Slider Height', 'boka' ),                'type' => Controls_Manager::SLIDER,                'size_units' => [ '%' ],                'range' => [                    '%' => [                        'min' => 10,                        'max' => 100,                    ],                ],                'default' => [                    'unit' => '%',                    'size' => 50,                ],                'selectors' => [                    '{{WRAPPER}} .boka-camera-slider' => 'height: {{SIZE}}{{UNIT}};',                ],            ]        );        $this->add_control(            'loader', [                'type' => \Elementor\Controls_Manager::SELECT,                'label' => __( 'Loader', 'boka' ),                'default' => __( 'bar' , 'boka' ),                'options' => array(                    'none' => __( 'none', 'boka' ),                    'bar' => __( 'bar', 'boka' ),                    'pie' => __( 'pie', 'boka' ),                ),                'label_block' => true,            ]        );        $this->add_control(            'barPosition', [                'type' => \Elementor\Controls_Manager::SELECT,                'label' => __( 'Bar Position', 'boka' ),                'default' => __( 'bottom' , 'boka' ),                'options' => array(                    'left' => __( 'left', 'boka' ),                    'right' => __( 'right', 'boka' ),                    'top' => __( 'top', 'boka' ),                    'bottom' => __( 'bottom', 'boka' ),                ),                'label_block' => true,            ]        );                $this->end_controls_section();    }    /**     * Render oEmbed widget output on the frontend.     *     * Written in PHP and used to generate the final HTML.     *     * @since 1.0.0     * @access protected     */    protected function render() {        $settings = $this->get_settings_for_display();        ?>        <div class="boka-camera-slider-widget camera-slider">            <div class="boka-camera-slider camera_wrap">                <?php                foreach( $settings['list'] as $CameraSlider ) :                    ?>                    <div data-src="<?php echo esc_url( $CameraSlider['CameraSlider_image']['url'] ); ?>">                        <div class="container">                            <div class="camera-slider-inner text-<?php echo esc_attr( $CameraSlider['heading_alignment'] ); ?>" style="margin:<?php echo esc_attr( $CameraSlider['text_position'] ); ?>">                                <?php if ( $CameraSlider['CameraSlider_title'] != '' ) : ?>                                    <h1 style="color:<?php echo esc_attr( $CameraSlider['CameraSlider_title_color'] ); ?>" class="animated <?php echo esc_attr( $CameraSlider['title_animation'] )?>"><?php echo esc_html( $CameraSlider['CameraSlider_title'] ); ?></h1>                                <?php endif ?>                                <?php if ( $CameraSlider['CameraSlider_subtitle'] != '' ) : ?>                                    <p class="animated <?php echo esc_attr( $CameraSlider['content_animation'] )?>" style="color:<?php echo esc_attr( $CameraSlider['CameraSlider_subtitle_color'] ); ?>"><?php echo esc_html( $CameraSlider['CameraSlider_subtitle'] ); ?></p>                                <?php endif ?>                                <?php if ( $CameraSlider['CameraSlider_button_text'] != '' ) : ?>                                    <div class="slider-button"><a href="<?php echo esc_url( $CameraSlider['CameraSlider_button_url']['url'] );  ?>"  class="btn animated <?php echo esc_attr( $CameraSlider['btn_animation'] )?>"><?php esc_html( $CameraSlider['CameraSlider_button_text'] ); ?></a></div>                                <?php endif ?>                            </div>                        </div>                    </div>                <?php                endforeach; ?>            </div>            <?php            /**             * Primary Color             */            $primary_color = get_theme_mod( 'primary_color', '#1488cc' );            ?>            <script>                jQuery( window ).ready(function() {                    jQuery( '.boka-camera-slider' ).each( function() {                        jQuery('.boka-camera-slider').camera({                            height: '<?php echo absint( $settings['height']['size'] ); ?>%',                            loader: '<?php echo esc_attr( $settings['loader'] ); ?>',                            margin:'',                            alignment: 'center',                            barPosition: '<?php echo esc_attr( $settings['barPosition'] ); ?>',                            thumbnails: false,                            playPause: false,                            loaderColor: '<?php esc_attr( $primary_color );?>',                            hover: true,                            opacityOnGrid: true,                            pagination: false                        });                    });                });            </script>        </div>        <?php    }    protected function _content_template() {        ?>        <# if ( settings.list.length ) { #>        <div class="boka-camera-slider-widget camera-slider">            <div class="boka-camera-slider camera_wrap">                <# _.each( settings.list, function( item ) { #>                <#                var image = {                id: item.CameraSlider_image.id,                url: item.CameraSlider_image.url,                size: item.thumbnail_size,                dimension: item.thumbnail_custom_dimension,                model: view.getEditModel()                };                var image_url = elementor.imagesManager.getImageUrl( image );                #>                <div data-src="{{{image_url}}}">                        <div class="container">                            <div class="camera-slider-inner text-{{ item.heading_alignment }}" style="margin:{{ item.text_position }}">                                <# if ( item.CameraSlider_title ) { #>                                <h1 style="color:{{ item.CameraSlider_title_color }}" class="animated {{ item.title_animation }}">{{ item.CameraSlider_title }}</h1>                                <# } #>                                <# if ( item.CameraSlider_subtitle ) { #>                                <p style="color:{{ item.CameraSlider_subtitle_color }}" class="animated {{ item.content_animation }}">{{ item.CameraSlider_subtitle }}</p>                                <# } #>                                <# if ( item.CameraSlider_button_text ) { #>                                <#                                var target = item.CameraSlider_button_url.is_external ? ' target="_blank"' : '';                                var nofollow = item.CameraSlider_button_url.nofollow ? ' rel="nofollow"' : '';                                #>                                <div class="slider-button"><a href="{{ item.CameraSlider_button_url.url }}" {{ target }}{{ nofollow }} class="btn animated {{ item.btn_animation }}">{{ item.CameraSlider_button_text }}</a></div>                                <# } #>                            </div>                        </div>                    </div>                <# }); #>            </div>        </div>        <# } #>        <?php    }}Plugin::instance()->widgets_manager->register_widget_type( new Boka_Main_Slider() );