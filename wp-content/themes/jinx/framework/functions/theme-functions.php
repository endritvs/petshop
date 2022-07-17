<?php
/**
 * This file includes helper functions used throughout the theme.
 *
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

if(!function_exists('jinx_add_meta_into_head_tag')){
    function jinx_add_meta_into_head_tag(){
        do_action('jinx/action/head');
    }
}

/**
 * Adds classes to the body tag
 *
 * @since 1.0.0
 */
if (!function_exists('jinx_body_classes')) {
    function jinx_body_classes($classes) {
        $classes[] = is_rtl() ? 'rtl' : 'ltr';
        $classes[] = 'jinx-body';
        $classes[] = 'lastudio-jinx';

        $sidebar = apply_filters('jinx/filter/sidebar_primary_name', 'sidebar');

        if(!is_active_sidebar($sidebar) || is_page_template(['templates/no-sidebar.php', 'templates/fullwidth.php'])){
            $classes[] = 'site-no-sidebar';
        }

        if (is_singular('page')) {
            global $post;
            if (strpos($post->post_content, 'la_wishlist') !== false) {
                $classes[] = 'woocommerce-page';
                $classes[] = 'woocommerce-page-wishlist';
            }
            if (strpos($post->post_content, 'la_compare') !== false) {
                $classes[] = 'woocommerce-page';
                $classes[] = 'woocommerce-compare';
            }
        }

        $classes[] = 'body-loading';
        if (jinx_get_option('page_loading_animation', 'off') == 'on') {
            $classes[] = 'site-loading';
            $classes[] = 'active_page_loading';
        }
        // Return classes
        return $classes;
    }
}


if(!function_exists('jinx_add_extra_data_into_head')){
    function jinx_add_extra_data_into_head(){
        if( $la_custom_css = jinx_get_option('la_custom_css') ){
            echo sprintf( '<%1$s id="jinx-custom-css">%2$s</%1$s>', 'style', $la_custom_css);
        }
        if( $header_js = jinx_get_option('header_js') ){
            echo sprintf( '<%1$s>%2$s</%1$s>', 'script', $header_js);
        }
    }
}

if(!function_exists('jinx_add_pageloader_icon')){
    function jinx_add_pageloader_icon(){
        if( jinx_string_to_bool( jinx_get_option('page_loading_animation', 'off') ) ){
            $loading_style = jinx_get_option('page_loading_style', 1);
            if($loading_style == 'custom'){
                if(($img = jinx_get_option('page_loading_custom')) && !empty($img['id']) && wp_attachment_is_image($img['id']) ){
                    add_filter('jinx/filter/enable_image_lazyload', '__return_false', 10000);
                    add_filter('wp_lazy_loading_enabled', '__return_false', 10000);
                    echo '<div class="la-image-loading spinner-custom"><div class="content"><div class="la-loader">'. wp_get_attachment_image($img['id'], 'full') .'</div><div class="la-loader-ss"></div></div></div>';
                    jinx_deactive_filter('jinx/filter/enable_image_lazyload', '__return_false', 10000);
                    jinx_deactive_filter('wp_lazy_loading_enabled', '__return_false', 10000);
                }
                else{
                    echo '<div class="la-image-loading"><div class="content"><div class="la-loader spinner1"></div><div class="la-loader-ss"></div></div></div>';
                }
            }
            else{
                echo '<div class="la-image-loading"><div class="content"><div class="la-loader spinner'.esc_attr($loading_style).'"><div class="dot1"></div><div class="dot2"></div><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div><div class="cube1"></div><div class="cube2"></div><div class="cube3"></div><div class="cube4"></div></div><div class="la-loader-ss"></div></div></div>';
            }
        }
    }
}

if(!function_exists('jinx_render_footer_custom_js')){
    function jinx_render_footer_custom_js(){
	    if( $footer_js = jinx_get_option('footer_js') ){
		    echo sprintf( '<%1$s>%2$s</%1$s>', 'script', $footer_js);
	    }
    }
}

if(!function_exists('jinx_change_excerpt_length')){
    function jinx_change_excerpt_length( $length ){
        $excerpt_length = absint(jinx_get_option('blog_excerpt_length', 25));
        if($excerpt_length > 0){
            return $excerpt_length;
        }
        return $length;
    }
}