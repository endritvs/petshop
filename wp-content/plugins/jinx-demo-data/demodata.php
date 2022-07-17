<?php

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
    exit( 'Direct script access denied.' );
}

function la_jinx_get_demo_array($dir_url, $dir_path){

    $demo_items = array(
        'pet-home-01' => array(
            'link'          => 'https://jinx.la-studioweb.com/pet-home-01/',
            'title'         => 'Pet Home 01',
            'data_sample'   => 'demo-data.json',
            'data_product'  => 'products.csv',
            'data_widget'   => 'widget-data.json',
            'data_elementor'=> [
                'header'       => [
                    'location' => 'header',
                    'value' => [
                        'jinx-header-09' => 'include/general',
                    ],
                ],
                'footer'       => [
                    'location' => 'footer',
                    'value' => [
                        'jinx-footer-07' => 'include/general',
                    ],
                ],
            ],
            'category'      => array(
                'Demo',
            )
        ),
        'pet-home-02' => array(
            'link'          => 'https://jinx.la-studioweb.com/pet-home-02/',
            'title'         => 'Pet Home 02',
            'data_sample'   => 'demo-data.json',
            'data_product'  => 'products.csv',
            'data_widget'   => 'widget-data.json',
            'data_elementor'=> [
                'header'       => [
                    'location' => 'header',
                    'value' => [
                        'jinx-header-07' => 'include/general',
                    ],
                ],
                'footer'       => [
                    'location' => 'footer',
                    'value' => [
                        'jinx-footer-08' => 'include/general',
                    ],
                ],
            ],
            'category'      => array(
                'Demo',
            )
        ),
        'pet-care' => array(
            'link'          => 'https://jinx.la-studioweb.com/pet-care/',
            'title'         => 'Pet Care',
            'data_sample'   => 'demo-data.json',
            'data_product'  => 'products.csv',
            'data_widget'   => 'widget-data.json',
            'data_slider'   => 'pet_care_01.zip',
            'data_elementor'=> [
                'header'       => [
                    'location' => 'header',
                    'value' => [
                        'jinx-header-01' => 'include/general',
                    ],
                ],
                'footer'       => [
                    'location' => 'footer',
                    'value' => [
                        'jinx-footer-01' => 'include/general',
                    ],
                ],
            ],
            'category'      => array(
                'Demo',
            )
        ),
        'pet-rescue' => array(
            'link'          => 'https://jinx.la-studioweb.com/pet-rescue/',
            'title'         => 'Pet Rescue',
            'data_sample'   => 'demo-data.json',
            'data_product'  => 'products.csv',
            'data_widget'   => 'widget-data.json',
            'data_slider'   => 'pet-rescue.zip',
            'data_elementor'=> [
                'header'       => [
                    'location' => 'header',
                    'value' => [
                        'jinx-header-08' => 'include/general',
                    ],
                ],
                'footer'       => [
                    'location' => 'footer',
                    'value' => [
                        'jinx-footer-03' => 'include/general',
                    ],
                ],
            ],
            'category'      => array(
                'Demo',
            )
        ),
        'pet-shop' => array(
            'link'          => 'https://jinx.la-studioweb.com/pet-shop/',
            'title'         => 'Pet Shop 01',
            'data_sample'   => 'demo-data.json',
            'data_product'  => 'products.csv',
            'data_widget'   => 'widget-data.json',
            'data_slider'   => 'pet_shop.zip',
            'data_elementor'=> [
                'header'       => [
                    'location' => 'header',
                    'value' => [
                        'jinx-header-02' => 'include/general',
                    ],
                ],
                'footer'       => [
                    'location' => 'footer',
                    'value' => [
                        'jinx-footer-02' => 'include/general',
                    ],
                ],
            ],
            'category'      => array(
                'Demo',
            )
        ),
        'pet-shop-02' => array(
            'link'          => 'https://jinx.la-studioweb.com/pet-shop-02/',
            'title'         => 'Pet Shop 02',
            'data_sample'   => 'demo-data.json',
            'data_product'  => 'products.csv',
            'data_widget'   => 'widget-data.json',
            'data_elementor'=> [
                'header'       => [
                    'location' => 'header',
                    'value' => [
                        'jinx-header-03' => 'include/general',
                    ],
                ],
                'footer'       => [
                    'location' => 'footer',
                    'value' => [
                        'jinx-footer-03' => 'include/general',
                    ],
                ],
            ],
            'category'      => array(
                'Demo',
            )
        ),
        'pet-shop-03' => array(
            'link'          => 'https://jinx.la-studioweb.com/pet-shop-03/',
            'title'         => 'Pet Shop 01',
            'data_sample'   => 'demo-data.json',
            'data_product'  => 'products.csv',
            'data_widget'   => 'widget-data.json',
            'data_slider'   => 'pet_shop_03.zip',
            'data_elementor'=> [
                'header'       => [
                    'location' => 'header',
                    'value' => [
                        'jinx-header-04' => 'include/general',
                    ],
                ],
                'footer'       => [
                    'location' => 'footer',
                    'value' => [
                        'jinx-footer-04' => 'include/general',
                    ],
                ],
            ],
            'category'      => array(
                'Demo',
            )
        ),
        'veterinary' => array(
            'link'          => 'https://jinx.la-studioweb.com/veterinary/',
            'title'         => 'Pet Shop 01',
            'data_sample'   => 'demo-data.json',
            'data_product'  => 'products.csv',
            'data_widget'   => 'widget-data.json',
            'data_slider'   => 'veterinary.zip',
            'data_elementor'=> [
                'header'       => [
                    'location' => 'header',
                    'value' => [
                        'jinx-header-05' => 'include/general',
                    ],
                ],
                'footer'       => [
                    'location' => 'footer',
                    'value' => [
                        'jinx-footer-05' => 'include/general',
                    ],
                ],
            ],
            'category'      => array(
                'Demo',
            )
        ),
    );

    $default_image_setting = array(
        'woocommerce_single_image_width' => 800,
        'woocommerce_thumbnail_image_width' => 400,
        'woocommerce_thumbnail_cropping' => 'custom',
        'woocommerce_thumbnail_cropping_custom_width' => 4,
        'woocommerce_thumbnail_cropping_custom_height' => 5,
        'thumbnail_size_w' => 370,
        'thumbnail_size_h' => 350,
        'medium_size_w' => 0,
        'medium_size_h' => 0,
        'medium_large_size_w' => 0,
        'medium_large_size_h' => 0,
        'large_size_w' => 0,
        'large_size_h' => 0,
    );

    $default_menu = array(
        'main-nav'              => 'Menu Primary'
    );

    $default_page = array(
        'page_for_posts' 	            => 'Blog',
        'woocommerce_shop_page_id'      => 'Shop',
        'woocommerce_cart_page_id'      => 'Cart',
        'woocommerce_checkout_page_id'  => 'Checkout',
        'woocommerce_myaccount_page_id' => 'My Account'
    );

    $slider = $dir_path . 'Slider/';
    $content = $dir_path . 'Content/';
    $product = $dir_path . 'Product/';
    $widget = $dir_path . 'Widget/';
    $setting = $dir_path . 'Setting/';
    $preview = $dir_url;

    $default_elementor = [
        'single-post'       => [
            'location' => 'single',
            'value' => [
                'jinx-single-post-sidebar' => 'include/singular/post',
            ],
        ],
        'single-page'       => [
            'location' => 'single',
            'value' => [
                'jinx-woocommerce-page' => [
                    'include/singular/page/wishlist',
                    'include/singular/page/compare',
                    'include/singular/page/cart',
                    'include/singular/page/checkout'
                ],
            ]
        ],
        'archive'           => [
            'location' => 'archive',
            'value' => [
                'jinx-blog' => 'include/archive'
            ]
        ],
        'search-results'    => [
            'location' => 'archive',
            'value'    => '',
            'default' => [
                'name' => 'include/archive/search'
            ],
        ],
        'error-404'         => [
            'location' => 'single',
            'value' => [
                'jinx-404-not-found' => 'include/singular/not_found404'
            ],
        ],
        'product'           => [
            'location' => 'single',
            'value' => [
                'jinx-single-product-01' => 'include/product'
            ]
        ],
        'product-archive'   => [
            'location' => 'archive',
            'value' => [
                'jinx-shop' => 'include/product_archive'
            ]
        ],
    ];

    $elementor_kit_settings = json_decode('{"system_colors":[{"_id":"primary","title":"Primary"},{"_id":"secondary","title":"Secondary"},{"_id":"text","title":"Text"},{"_id":"accent","title":"Accent"}],"custom_colors":[{"_id":"65d94bc","title":"JinxColor1","color":"#FF7844"},{"_id":"8edc439","title":"JinxColor2","color":"#212121"}],"system_typography":[{"_id":"primary","title":"Primary"},{"_id":"secondary","title":"Secondary"},{"_id":"text","title":"Text"},{"_id":"accent","title":"Accent"}],"custom_typography":[],"default_generic_fonts":"Sans-serif","page_title_selector":"h1.entry-title","active_breakpoints":["viewport_mobile","viewport_mobile_extra","viewport_tablet","viewport_laptop"],"viewport_mobile":767,"viewport_mobile_extra":991,"viewport_md":768,"viewport_lg":1280,"viewport_tablet":1279,"viewport_tablet_extra":1279,"viewport_laptop":1599}', true);

    $data_return = array();

    foreach ($demo_items as $demo_key => $demo_detail){
	    $value = array();

	    $value['title']             = $demo_detail['title'];
	    $value['category']          = !empty($demo_detail['category']) ? $demo_detail['category'] : array('Demo');
	    $value['demo_preset']       = $demo_key;
	    $value['demo_url']          = $demo_detail['link'];
	    $value['preview']           = !empty($demo_detail['preview']) ? $demo_detail['preview'] : ($preview . $demo_key . '.jpg');
	    $value['option']            = $setting . $demo_key . '.json';
	    $value['content']           = !empty($demo_detail['data_sample']) ? $content . $demo_detail['data_sample'] : $content . 'demo-data.json';
	    $value['product']           = !empty($demo_detail['data_product']) ? $product . $demo_detail['data_product'] : $product . 'sample-product.json';
	    $value['widget']            = !empty($demo_detail['data_widget']) ? $widget . $demo_detail['data_widget'] : $widget . 'widget-data.json';
	    $value['pages']             = array_merge( $default_page, array( 'page_on_front' => $demo_detail['title'] ));
	    $value['menu-locations']    = array_merge( $default_menu, isset($demo_detail['menu-locations']) ? $demo_detail['menu-locations'] : array());
	    $value['other_setting']     = array_merge( $default_image_setting, isset($demo_detail['other_setting']) ? $demo_detail['other_setting'] : array());
	    if(!empty($demo_detail['data_slider'])){
		    $value['slider'] = $slider . $demo_detail['data_slider'];
	    }
        $value['elementor']         = array_merge( $default_elementor, isset($demo_detail['data_elementor']) ? $demo_detail['data_elementor'] : array());
        $value['elementor_kit_settings']         = array_merge( $elementor_kit_settings, isset($demo_detail['elementor_kit_settings']) ? $demo_detail['elementor_kit_settings'] : array());
	    $data_return[$demo_key] = $value;
    }

    return $data_return;
}