<?php
/**
 * The Header for our theme.
 *
 * @package Jinx WordPress theme
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?><?php jinx_schema_markup( 'html' ); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <link rel="profile" href="//gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php

if(function_exists('wp_body_open')) {
    wp_body_open();
}

if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'header' ) ) {
    get_template_part('partials/default/header');
}