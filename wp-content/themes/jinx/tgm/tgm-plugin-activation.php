<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

add_action( 'tgmpa_register', 'jinx_register_required_plugins' );

if(!function_exists('lasf_get_plugin_source')){
    function lasf_get_plugin_source( $new, $initial, $plugin_name, $type = 'source'){
        if(isset($new[$plugin_name], $new[$plugin_name][$type]) && version_compare($initial[$plugin_name]['version'], $new[$plugin_name]['version']) < 0 ){
            return $new[$plugin_name][$type];
        }
        else{
            return $initial[$plugin_name][$type];
        }
    }
}

if(!function_exists('jinx_register_required_plugins')){

	function jinx_register_required_plugins() {

        $initial_required = array(
            'revslider' => array(
                'source'    => 'https://la-studioweb.com/file-resouces/shared/plugins/revslider_v6.5.9.zip',
                'version'   => '6.5.9'
            ),
            'jinx-demo-data' => array(
                'source'    => 'https://la-studioweb.com/file-resouces/jinx/plugins/jinx-demo-data_v1.0.0.zip',
                'version'   => '1.0.0'
            )
        );

        $from_option = get_option('jinx_required_plugins_list', $initial_required);

		$plugins = array();

        $plugins[] = array(
            'name' 					=> esc_html_x('Elementor', 'admin-view', 'jinx'),
            'slug' 					=> 'elementor',
            'required' 				=> true,
            'version'				=> '3.4.4'
        );

        $plugins[] = array(
            'name'     				=> esc_html_x('LA-Studio Element Kit for Elementor', 'admin-view', 'jinx'),
            'slug'     				=> 'lastudio-element-kit',
            'source'   				=> 'https://la-studioweb.com/file-resouces/shared/plugins/lastudio-element-kit_v1.1.2.zip',
            'required' 				=> true,
            'version' 				=> '1.1.2'
        );

		$plugins[] = array(
			'name'     				=> esc_html_x('WooCommerce', 'admin-view', 'jinx'),
			'slug'     				=> 'woocommerce',
			'version'				=> '5.8.0',
			'required' 				=> false
		);
        
        $plugins[] = array(
			'name'     				=> esc_html_x('Jinx Package Demo Data', 'admin-view', 'jinx'),
			'slug'					=> 'jinx-demo-data',
            'source'				=> lasf_get_plugin_source($from_option, $initial_required, 'jinx-demo-data'),
            'required'				=> false,
            'version'				=> lasf_get_plugin_source($from_option, $initial_required, 'jinx-demo-data', 'version')
		);

		$plugins[] = array(
			'name'     				=> esc_html_x('Envato Market', 'admin-view', 'jinx'),
			'slug'     				=> 'envato-market',
			'source'   				=> 'https://envato.github.io/wp-envato-market/dist/envato-market.zip',
			'required' 				=> false,
			'version' 				=> '2.0.6'
		);

		$plugins[] = array(
			'name' 					=> esc_html_x('Contact Form 7', 'admin-view', 'jinx'),
			'slug' 					=> 'contact-form-7',
			'required' 				=> false
		);

		$plugins[] = array(
			'name'					=> esc_html_x('Slider Revolution', 'admin-view', 'jinx'),
			'slug'					=> 'revslider',
            'source'				=> lasf_get_plugin_source($from_option, $initial_required, 'revslider'),
            'required'				=> false,
            'version'				=> lasf_get_plugin_source($from_option, $initial_required, 'revslider', 'version')
		);

		$config = array(
			'id'           				=> 'jinx',
			'default_path' 				=> '',
			'menu'         				=> 'tgmpa-install-plugins',
			'has_notices'  				=> true,
			'dismissable'  				=> true,
			'dismiss_msg'  				=> '',
			'is_automatic' 				=> false,
			'message'      				=> ''
		);

		tgmpa( $plugins, $config );

	}

}
