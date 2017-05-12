<?php

/********************************************************
 * Header
 ********************************************************/
/**
 *  Header Social
 */
function header_social() {

    if(get_theme_mod('social_header_enable')) :
        ?>
        <ul class="list-inline text-right">
            <?php
            if(get_theme_mod('header_fb') ) {
                echo '<li><a href="'.get_theme_mod('header_fb').'"  target="_blank"><i class="fa fa-facebook"></i></a></li>';
            }
            if(get_theme_mod('header_tw')) {
                echo '<li><a href="'.get_theme_mod('header_tw', 'https://twitter.com ').'" target="_blank"><i class="fa fa-twitter"></i></a></li>';
            }
            if(get_theme_mod('header_li')) {
                echo '<li><a href="'.get_theme_mod('header_li', 'https://linkedin.com').'" target="_blank"><i class="fa fa-linkedin"></i></a></li>';
            }
            if(get_theme_mod('header_pint')) {
                echo '<li><a href="'.get_theme_mod('header_pint', 'https://pinterest.com').'" target="_blank"><i class="fa fa-pinterest"></i></a></li>';
            }
            if(get_theme_mod('header_ins')) {
                echo '<li><a href="'.get_theme_mod('header_ins', 'https://instagram.com').'" target="_blank"><i class="fa fa-linkedin"></i></a></li>';
            }
            if(get_theme_mod('header_dri')) {
                echo '<li><a href="'.get_theme_mod('header_dri', 'https://dribbble.com').'" target="_blank"><i class="fa fa-dribbble"></i></a></li>';
            }
            if(get_theme_mod('header_plus')) {
                echo '<li><a href="'.get_theme_mod('header_plus', 'https://plus.google.com').'" target="_blank"><i class="fa fa-google-plus"></i></a></li>';
            }
            if(get_theme_mod('header_you')) {
                echo '<li><a href="'.get_theme_mod('header_you', 'https://youtube.com').'" target="_blank"><i class="fa fa-youtube"></i></a></li>';
            }
            ?>
        </ul>
        <?php
    endif;
}
add_action( 'boka_header_social', 'header_social' );

/********************************************************
 * Footer
 ********************************************************/
/**
 * Bottom Footer Copyright
 */
function bottom_footer_copyright(){
    ?>
    <div class="col-md-12 col-sm-12 col-xs-12 site-info text-center">
        <p><a href="https://wordpress.org"><?php echo get_theme_mod('bottom_footer_copyright','Proudly powered by WordPress'); ?></a> | <a href="http://themetim.com">Boka By ThemeTim</a></p>
    </div>
    <?php
}
add_action( 'boka_bottom_footer_copyright', 'bottom_footer_copyright' );