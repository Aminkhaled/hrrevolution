<?php
function zox_news_child_enqueue_styles() {

    $parent_style = 'mvp-custom-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'fontawesome-child', get_stylesheet_directory_uri() . '/font-awesome/css/font-awesome.css' );
    wp_enqueue_style( 'mvp-custom-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'zox_news_child_enqueue_styles' );
//load file
require_once dirname(__FILE__) .'/inc/inc.php';
add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
function wpdocs_theme_setup() {
    add_image_size( 'advert-728-90', 728,90 ); // 300 pixels wide (and unlimited height)
}
?>