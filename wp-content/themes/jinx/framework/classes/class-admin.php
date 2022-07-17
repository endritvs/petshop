<?php

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
    exit( 'Direct script access denied.' );
}

class Jinx_Admin {

    public function __construct(){
        $this->load_config();
        add_action( 'admin_enqueue_scripts', array( $this, 'admin_scripts') );
        add_action( 'customize_controls_enqueue_scripts', array( $this, 'customize_scripts') );
        add_action( 'customize_preview_init', array( $this, 'customize_preview_init' ) );
    }

    private function load_config(){
        require_once get_theme_file_path('/framework/configs/options.php');
        require_once get_theme_file_path('/framework/configs/metaboxes.php');
    }

    public function admin_scripts( $hook ){
        $ext = defined('WP_DEBUG') && WP_DEBUG ? '' : '.min';
        wp_enqueue_style('jinx-admin-css', get_theme_file_uri( '/assets/css/admin'.$ext.'.css' ));
        wp_enqueue_script('jinx-admin-theme', get_theme_file_uri( '/assets/js/admin'.$ext.'.js' ), array( 'jquery'), false, true );

        if(!class_exists('LASF', false)) {
            wp_enqueue_style( 'jinx-fonts', Jinx_Theme_Class::enqueue_google_fonts_url() , array(), null );
        }

        $body_font_family = jinx_get_option('body_font_family');
        if(!empty($body_font_family['font-family'])){
            wp_add_inline_style('jinx-admin-css', '.block-editor .editor-styles-wrapper .editor-block-list__block{ font-family: "'. esc_attr($body_font_family['font-family']) .'" }');
        }

        wp_localize_script( 'jinx-admin-theme', 'jinx_admin_vars', array(
            'ajaxurl'       => admin_url( 'admin-ajax.php' ),
            'admin_load_nonce' => wp_create_nonce( 'admin_load_nonce' ),
            'widget_info'   => sprintf( '<div id="la_pb_widget_area_create"><p>%1$s.</p><p><label>%2$s <input id="la_pb_new_widget_area_name" value="" /></label><button class="button button-primary la_pb_create_widget_area">%3$s</button></p><p class="la_pb_widget_area_result"></p></div>',
                esc_html__( 'Here you can create new widget areas for use in the Sidebar module', 'jinx' ),
                esc_html__( 'Widget Name', 'jinx' ),
                esc_html__( 'Create', 'jinx' )
            ),
            'confirm_delete_string' => esc_html__( 'Are you sure?', 'jinx' ),
            'delete_string' => esc_html__( 'Delete', 'jinx' ),
            'edit_post_link' => admin_url('post.php?post={post_id}&action=elementor')
        ) );
    }

    public function customize_scripts(){
        $theme_version = defined('WP_DEBUG') && WP_DEBUG ? time() : JINX_THEME_VERSION;
        $dependency = array(
            'jquery',
            'customize-base',
            'customize-controls',
        );
        wp_enqueue_script( 'jinx-customize-admin', get_theme_file_uri('/assets/js/customizer.js'), $dependency, $theme_version, true );
    }

    public function customize_preview_init(){
        $theme_version = defined('WP_DEBUG') && WP_DEBUG ? time() : JINX_THEME_VERSION;
        $dependency = array(
            'jquery',
            'customize-preview',
        );
        wp_enqueue_script('jinx-customize-preview', get_theme_file_uri( '/assets/js/customizer-preview.js' ), $dependency, $theme_version, true);
    }

}