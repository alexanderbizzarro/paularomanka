<?php
/**
 * Theme Functions
 *
 * @package ThemeName
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Theme setup.
if ( ! function_exists( 'theme_setup' ) ) {
    function theme_setup() {
        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        // Let WordPress manage the document title.
        add_theme_support( 'title-tag' );

        // Enable support for Post Thumbnails on posts and pages.
        add_theme_support( 'post-thumbnails' );

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(
            array(
                'primary' => esc_html__( 'Primary', 'theme-name' ),
            )
        );  
    }
}
add_action( 'after_setup_theme', 'theme_setup' );