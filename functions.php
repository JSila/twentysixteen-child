<?php

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',get_stylesheet_directory_uri() . '/style.css', [$parent_style], wp_get_theme()->get('Version'));
}

add_action( 'wp_enqueue_scripts', 'bg_load_google_fonts' );
function bg_load_google_fonts() {
	wp_enqueue_style( 'twentysixteen-fonts', 'https://fonts.googleapis.com/css?family=Merriweather:400,700,900,400italic,700italic,900italic|Montserrat:400,700,900|Inconsolata:400&subset=latin,latin-ext');
}