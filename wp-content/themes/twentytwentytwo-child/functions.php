<?php
/**
 * Twenty Twenty-Two Child functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 */
 
if ( !function_exists( 'ine_enqueue_style' ) ):
    function ine_enqueue_style() {
        wp_enqueue_style( 'ine_child_theme', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css' );
    }
endif;
add_action( 'wp_enqueue_scripts', 'ine_enqueue_style' );