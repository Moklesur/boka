<?php

/**
 * Boka Typography & Color Settings
 *
 */

function boka_typography_color($color) {

    $color = '';
    /*
     * General Section
     */
    $body_text_color = get_theme_mod( 'bg_text_color', '#000' );
    $body_font_size = get_theme_mod( 'body_font_size', '15' );
    $body_font_family = get_theme_mod( 'body_font_family', 'Source Sans Pro' );
    $body_font_weight = get_theme_mod( 'body_font_weight', '400' );

    $color .= "body { color:" . esc_attr($body_text_color) . ";font-weight:" . esc_attr($body_font_weight) ."; font-size: " . esc_attr($body_font_size) . "px; font-family: ". esc_attr(str_replace('+', ' ', $body_font_family)) ."} ";

    $heading_color = get_theme_mod( 'heading_color', '#000' );
    $heading_font_weight = get_theme_mod( 'heading_font_weight', '700' );
    $heading_font_family = get_theme_mod( 'heading_font_family', 'Source Sans Pro' );
    $color .= "h1, h2, h3, h4, h5, h6 { font-weight:" . esc_attr($heading_font_weight) .";font-family: ". esc_attr(str_replace('+', ' ', $heading_font_family)) ."} ";
    $color .= "h1, h2, h3, h4, h5, h6,h1 a, h2 a, h3 a, h4 a, h5 a, h6 a{ color:" . esc_attr($heading_color) . ";} ";

    $link_color = get_theme_mod( 'link_color', '#f93759' );
    $color .= "a,.header-social a:hover,.navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:focus, .navbar-default .navbar-nav>.active>a:hover,.logo a:hover,.service-url:hover,.team-social a:hover,.link-fix a:hover ,.footer-top a:hover,.woo-widget a:hover,.woocommerce-MyAccount-navigation a:hover,.widget-area a:hover,h1 a:hover, h2 a:hover, h3 a:hover, h4 a:hover, h5 a:hover, h6 a:hover{ color:" . esc_attr($link_color) . "} ";

    $link_hover_color = get_theme_mod( 'link_hover_color', '#000' );
    $color .= "a:hover,a:focus,.header-social a,.navbar-default .navbar-nav>li>a,.logo a,.service-url,.link-fix a,.site-info a:hover,.woocommerce ul.products li.product .price,.woo-widget a,.woocommerce-MyAccount-navigation a,.widget-area a{ color:" . esc_attr($link_hover_color) . "} ";
    /*
     * Header Section
     */
    $header_bg_color = get_theme_mod( 'header_bg_color', '#fff' );
    $header_text_color = get_theme_mod( 'header_text_color', '#000' );
    $color .= ".header { background:" . esc_attr($header_bg_color) . "; color: ". esc_attr($header_text_color) .";} ";
    /*
     * Footer Section
     */
    $footer_bg_color = get_theme_mod( 'footer_bg_color', '#000' );
    $footer_text_color = get_theme_mod( 'footer_text_color', '#fff' );
    $color .= ".footer-main { background:" . esc_attr($footer_bg_color) . ";} ";
    $color .= ".footer-main ,.footer-main p,.footer-main a,.footer-main h4{  color: ". esc_attr($footer_text_color) .";} ";
    /*
     * Default Button
     */
    $btn_default_bg = get_theme_mod( 'btn_default_bg', '#f93759' );
    $btn_default_text = get_theme_mod( 'btn_default_text', '#fff' );
    $btn_default_border = get_theme_mod( 'btn_default_border', '#f93759' );

    $color .= ".camera_wrap .slider-button .btn-default,.btn-default, .btn-default.disabled,.woocommerce ul.products li.product .button,.widget-area .search-form .search-submit,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce nav.woocommerce-pagination ul li a, .woocommerce nav.woocommerce-pagination ul li span,.woocommerce div.product form.cart .button,.woocommerce #review_form #respond .form-submit input,.woocommerce input.button , .woocommerce-cart .wc-proceed-to-checkout a.checkout-button,.woocommerce #payment #place_order ,.wpcf7-submit{ background-color:" . esc_attr($btn_default_bg) . "; color: " . esc_attr($btn_default_text) . ";border-color: " . esc_attr($btn_default_border) . "; } ";

    $btn_default_bg_hover = get_theme_mod( 'btn_default_bg_hover', '#000' );
    $btn_default_text_hover = get_theme_mod( 'btn_default_text_hover', '#fff' );
    $btn_default_border_hover = get_theme_mod( 'btn_default_border_hover', '#000' );

    $color .= ".camera_wrap .slider-button .btn-default:hover,.btn-default.active, .btn-default.focus, .btn-default:active, .btn-default:focus, .btn-default:hover, .open>.dropdown-toggle.btn-default,.woocommerce ul.products li.product .button:hover,.widget-area .search-form .search-submit:hover,.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current,.woocommerce div.product form.cart .button:hover ,.woocommerce #review_form #respond .form-submit input:hover,.woocommerce input.button:hover, .woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover, .woocommerce #payment #place_order:hover,.wpcf7-submit:hover{ background-color:" . esc_attr($btn_default_bg_hover) . "; color: " . esc_attr($btn_default_text_hover) . ";border-color: " . esc_attr($btn_default_border_hover) . "; } ";
    /*
     * Primary Button
     */
    $btn_primary_bg = get_theme_mod( 'btn_primary_bg', '#000' );
    $btn_primary_text = get_theme_mod( 'btn_primary_text', '#fff' );
    $btn_primary_border = get_theme_mod( 'btn_primary_border', '#000' );

    $color .= ".camera_wrap .slider-button .btn-primary,.btn-primary, .btn-primary.disabled{ background-color:" . esc_attr($btn_primary_bg) . "; color: " . esc_attr($btn_primary_text) . ";border-color: " . esc_attr($btn_primary_border) . "; } ";

    $btn_primary_bg_hover = get_theme_mod( 'btn_primary_bg_hover', '#f93759' );
    $btn_primary_text_hover = get_theme_mod( 'btn_primary_text_hover', '#fff' );
    $btn_primary_border_hover = get_theme_mod( 'btn_primary_border_hover', '#f93759' );

    $color .= ".camera_wrap .slider-button .btn-primary:hover,.btn-primary.active, .btn-primary.focus, .btn-primary:active, .btn-primary:focus, .btn-primary:hover, .open>.dropdown-toggle.btn-primary{ background-color:" . esc_attr($btn_primary_bg_hover) . "; color: " . esc_attr($btn_primary_text_hover) . ";border-color: " . esc_attr($btn_primary_border_hover) . "; } ";
    /*
     * Success Button
     */
    $btn_success_bg = get_theme_mod( 'btn_success_bg', '#fff' );
    $btn_success_text = get_theme_mod( 'btn_success_text', '#000' );
    $btn_success_border = get_theme_mod( 'btn_success_border', '#fff' );

    $color .= ".camera_wrap .slider-button .btn-success,.btn-success,.btn-success.disabled{ background-color:" . esc_attr($btn_success_bg) . "; color: " . esc_attr($btn_success_text) . ";border-color: " . esc_attr($btn_success_border) . "; } ";

    $btn_success_bg_hover = get_theme_mod( 'btn_success_bg_hover', '#000' );
    $btn_success_text_hover = get_theme_mod( 'btn_success_text_hover', '#fff' );
    $btn_success_border_hover = get_theme_mod( 'btn_success_border_hover', '#000' );

    $color .= ".camera_wrap .slider-button .btn-success:hover,.btn-success.active, .btn-success.focus, .btn-success:active, .btn-success:focus, .btn-success:hover, .open>.dropdown-toggle.btn-success{ background-color:" . esc_attr($btn_success_bg_hover) . "; color: " . esc_attr($btn_success_text_hover) . ";border-color: " . esc_attr($btn_success_border_hover) . "; } ";
    /*
     * Extra Text Color
     */
    $text_color_1 = get_theme_mod( 'text_color_1', '#000' );
    $text_color_2 = get_theme_mod( 'text_color_2', '#ccc' );

    $color .= ".text-color-1{ color: " . esc_attr($text_color_1) . "; } ";
    $color .= ".text-color-2{ color: " . esc_attr($text_color_2) . "; } ";
    /*
     * Extra Background Color
     */
    $bg_color_1 = get_theme_mod( 'bg_color_1', '#000' );
    $bg_color_2 = get_theme_mod( 'bg_color_2', '#ccc' );

    $color .= ".background-1{ background-color: " . esc_attr($bg_color_1) . "; } ";
    $color .= ".background-1{ background-color: " . esc_attr($bg_color_2) . "; } ";
    /*
     * Typography & Color Inline
     */
    wp_add_inline_style( 'boka-style', $color );
}
add_action( 'wp_enqueue_scripts', 'boka_typography_color' );