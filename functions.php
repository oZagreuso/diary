<?php 

function main_style() {
    wp_enqueue_style('style-principal', get_stylesheet_uri());   
    wp_enqueue_style('style-personnalise', get_template_directory_uri() . './assets/css/main-style.css', array(), '1.0.0', 'all');
    wp_enqueue_style('style-personnalise', get_template_directory_uri() . './assets/css/custom-colors.css', array(), '1.0.0', 'all');
}

add_action('wp_enqueue_scripts', 'main_style');

add_theme_support( 'title-tag' ); // Ajouter automatiquement le titre du site dans l'en-tête du site

