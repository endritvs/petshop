<?php
/**
 * This file includes helper functions used throughout the theme.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * ACTIONS
 */
add_action( 'wp_head',          'jinx_add_extra_data_into_head', 100 );
add_action( 'wp_body_open',     'jinx_add_pageloader_icon', 1);
add_action( 'wp_footer',        'jinx_render_footer_custom_js', 100 );
/**
 * FILTERS
 */
add_filter( 'body_class',       'jinx_body_classes' );
add_filter( 'excerpt_length',   'jinx_change_excerpt_length');
