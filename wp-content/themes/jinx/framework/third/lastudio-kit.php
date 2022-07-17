<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

add_filter('lastudio-kit/branding/name', 'jinx_lakit_branding_name');
if(!function_exists('jinx_lakit_branding_name')){
    function jinx_lakit_branding_name( $name ){
        $name = esc_html__('Theme Options', 'jinx');
        return $name;
    }
}

add_filter('lastudio-kit/branding/logo', 'jinx_lakit_branding_logo');
if(!function_exists('jinx_lakit_branding_logo')){
    function jinx_lakit_branding_logo( $logo ){
        $logo = '';
        return $logo;
    }
}

add_filter('lastudio-kit/logo/attr/src', 'jinx_lakit_logo_attr_src');
if(!function_exists('jinx_lakit_logo_attr_src')){
    function jinx_lakit_logo_attr_src( $src ){
        if(!$src){
            $src = get_theme_file_uri('/assets/images/logo.svg');
        }
        return $src;
    }
}

add_filter('lastudio-kit/logo/attr/width', 'jinx_lakit_logo_attr_width');
if(!function_exists('jinx_lakit_logo_attr_width')){
    function jinx_lakit_logo_attr_width( $value ){
        if(!$value){
            $value = 102;
        }
        return $value;
    }
}

add_filter('lastudio-kit/logo/attr/height', 'jinx_lakit_logo_attr_height');
if(!function_exists('jinx_lakit_logo_attr_height')){
    function jinx_lakit_logo_attr_height( $value ){
        if(!$value){
            $value = 22;
        }
        return $value;
    }
}

add_action('elementor/frontend/widget/before_render', 'jinx_lakit_add_class_into_sidebar_widget');
if(!function_exists('jinx_lakit_add_class_into_sidebar_widget')){
    function jinx_lakit_add_class_into_sidebar_widget( $widget ){
        if('sidebar' == $widget->get_name()){
            $widget->add_render_attribute('_wrapper', 'class' , 'widget-area');
        }

    }
}

add_filter('lastudio-kit/products/control/grid_style', 'jinx_lakit_add_product_grid_style');
if(!function_exists('jinx_lakit_add_product_grid_style')){
    function jinx_lakit_add_product_grid_style(){
        return [
            '1' => esc_html__('Type 1', 'jinx'),
            '2' => esc_html__('Type 2', 'jinx'),
            '3' => esc_html__('Type 3', 'jinx'),
            '4' => esc_html__('Type 4', 'jinx'),
            '5' => esc_html__('Type 5', 'jinx'),
            '6' => esc_html__('Type 6', 'jinx'),
            '7' => esc_html__('Type 7', 'jinx'),
            '8' => esc_html__('Type 8', 'jinx'),
        ];
    }
}
add_filter('lastudio-kit/products/control/list_style', 'jinx_lakit_add_product_list_style');
if(!function_exists('jinx_lakit_add_product_list_style')){
    function jinx_lakit_add_product_list_style(){
        return [
            '1' => esc_html__('Type 1', 'jinx'),
            'mini' => esc_html__('Mini', 'jinx'),
        ];
    }
}

add_filter('lastudio-kit/products/box_selector', 'jinx_lakit_product_change_box_selector');
if(!function_exists('jinx_lakit_product_change_box_selector')){
    function jinx_lakit_product_change_box_selector(){
        return '{{WRAPPER}} ul.products .product_item--inner';
    }
}

add_filter('lastudio-kit/posts/format-icon', 'bakerfreh_lakit_change_postformat_icon', 10, 2);
if(!function_exists('bakerfreh_lakit_change_postformat_icon')){
    function bakerfreh_lakit_change_postformat_icon( $icon, $type ){
        return $icon;
    }
}

/**
 * Modify Divider - Weight control
 */
add_action('elementor/element/lakit-portfolio/section_settings/before_section_end', function( $element ){
	$element->add_control(
		'enable_portfolio_lightbox',
		[
            'label'     => esc_html__( 'Enable Lightbox', 'jinx' ),
            'type'      => \Elementor\Controls_Manager::SWITCHER,
            'label_on'  => esc_html__( 'Yes', 'jinx' ),
            'label_off' => esc_html__( 'No', 'jinx' ),
			'default'   => '',
			'return_value' => 'enable-pf-lightbox',
			'prefix_class' => '',
		]
	);
}, 10 );

add_filter('lastudio-kit/posts/control/preset', 'jinx_lakit_add_posts_style');
if(!function_exists('jinx_lakit_add_posts_style')){
    function jinx_lakit_add_posts_style( $styles ){
        $styles['grid-3'] = esc_html__( 'Grid 3', 'jinx' );
        return $styles;
    }
}
add_filter('lastudio-kit/team-member/control/preset', 'jinx_lakit_add_team_member_style');
if(!function_exists('jinx_lakit_add_team_member_style')){
    function jinx_lakit_add_team_member_style( $styles ){
        $styles['type-10'] = esc_html__( 'Type 10', 'jinx' );
        return $styles;
    }
}

add_action('elementor/element/section/section_layout/before_section_end', 'jinx_elementor_section_html_tag');
if(!function_exists('jinx_elementor_section_html_tag')){
    function jinx_elementor_section_html_tag( $element ){
        $element->update_control(
            'html_tag',
            [
                'default' => 'div'
            ]
        );
    }
}