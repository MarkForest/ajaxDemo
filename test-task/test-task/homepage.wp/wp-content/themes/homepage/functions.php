<?php
add_action('wp_enqueue_scripts', 'homepage_styles');
add_action('wp_enqueue_scripts', 'homepage_scripts');
function homepage_styles(){
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/lib/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('owl-carousel', get_template_directory_uri().'/lib/OwlCarousel/css/owl.carousel.min.css');
    wp_enqueue_style('main-style', get_stylesheet_uri());
}
function homepage_scripts(){
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js');
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/lib/bootstrap/js/bootstrap.min.js', ['jquery'], null, true);
    wp_enqueue_script('carousel', get_template_directory_uri().'/lib/OwlCarousel/js/owl.carousel.min.js', ['bootstrap'], null, true);
    wp_enqueue_script('scripts', get_template_directory_uri().'/js/scripts.js',['carousel'], null, true);
}
add_theme_support('custom-logo');

add_filter( 'get_custom_logo', 'change_logo_class' );
function change_logo_class( $html ) {


    $html = str_replace( 'custom-logo-link', 'navbar-brand header__navbar-brand', $html );
    $html = str_replace( 'custom-logo', 'img-responsive', $html );
    return $html;
}

add_filter( 'nav_menu_css_class', 'add_my_class_to_nav_menu', 10, 2 );
function add_my_class_to_nav_menu( $classes, $item ){
    /* $classes содержит
    Array(
        [1] => menu-item
        [2] => menu-item-type-post_type
        [3] => menu-item-object-page
        [4] => menu-item-284
    )
    */
    $classes[] = 'header__menu-item';

    return $classes;
}

