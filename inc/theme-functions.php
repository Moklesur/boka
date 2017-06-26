<?php

/********************************************************
 * Header
 ********************************************************/
/**
 *  Header Social
 */
function boka_header_social_widget() {

    if(get_theme_mod('social_header_enable')) :
        ?>
        <ul class="list-inline text-right">
            <?php
            if(get_theme_mod('header_fb')) {
                echo '<li><a href="'.esc_url(get_theme_mod('header_fb')).'"  target="_blank"><i class="fa fa-facebook"></i></a></li>';
            }
            if(get_theme_mod('header_tw')) {
                echo '<li><a href="'.esc_url(get_theme_mod('header_tw')).'" target="_blank"><i class="fa fa-twitter"></i></a></li>';
            }
            if(get_theme_mod('header_li')) {
                echo '<li><a href="'.esc_url(get_theme_mod('header_li')).'" target="_blank"><i class="fa fa-linkedin"></i></a></li>';
            }
            if(get_theme_mod('header_pint')) {
                echo '<li><a href="'.esc_url(get_theme_mod('header_pint')).'" target="_blank"><i class="fa fa-pinterest"></i></a></li>';
            }
            if(get_theme_mod('header_ins')) {
                echo '<li><a href="'.esc_url(get_theme_mod('header_ins')).'" target="_blank"><i class="fa fa-linkedin"></i></a></li>';
            }
            if(get_theme_mod('header_dri')) {
                echo '<li><a href="'.esc_url(get_theme_mod('header_dri')).'" target="_blank"><i class="fa fa-dribbble"></i></a></li>';
            }
            if(get_theme_mod('header_plus')) {
                echo '<li><a href="'.esc_url(get_theme_mod('header_plus')).'" target="_blank"><i class="fa fa-google-plus"></i></a></li>';
            }
            if(get_theme_mod('header_you')) {
                echo '<li><a href="'.esc_url(get_theme_mod('header_you')).'" target="_blank"><i class="fa fa-youtube"></i></a></li>';
            }
            ?>
        </ul>
        <?php
    endif;
}
add_action( 'boka_header_social', 'boka_header_social_widget' );

/********************************************************
 * Footer
 ********************************************************/
/**
 * Bottom Footer Copyright
 */
function boka_bottom_footer_copyright(){
    ?>
    <div class="col-md-12 col-sm-12 col-xs-12 site-info text-center">
        <p><a href="<?php echo esc_url( __( 'https://wordpress.org/', 'boka' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'boka' ), 'WordPress' ); ?></a> | <a href="<?php echo esc_url( __( 'http://themetim.com', 'boka' ) ); ?>"><?php printf( esc_html__( 'Boka By %1$s', 'boka' ), 'ThemeTim' ); ?></a></p>
    </div>
    <?php
}
add_action( 'boka_bottom_footer_copyright', 'boka_bottom_footer_copyright' );