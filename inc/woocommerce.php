<?php

/**
 * Removed breadcrumbs
 */
add_action( 'init', 'boka_remove_wc_breadcrumbs' );
function boka_remove_wc_breadcrumbs() {
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
}

/**
 * boka_hide_page_title
 *
 * Removes the "shop" title on the main shop page
 */
add_filter( 'woocommerce_show_page_title' , 'boka_hide_page_title' );
function boka_hide_page_title() {
    return false;
}

/**
 * Change number or products per row to 3
 */
add_filter('loop_shop_columns', 'loop_columns');
if (!function_exists('loop_columns')) {
    function loop_columns() {
        return 3; // 3 products per row
    }
}