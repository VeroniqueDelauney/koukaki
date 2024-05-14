<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); // get_template_directory_uri est pour thème parent
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/assets/css/theme.css' ); // get_stylesheet_directory_uri pour thème enfant
    wp_enqueue_script( 'skrollr', 'https://prinzhorn.github.io/skrollr/dist/skrollr.min.js');
    wp_enqueue_style( 'swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
    wp_enqueue_script( 'swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js');
    
    // wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'app-script', get_stylesheet_directory_uri() . '/assets/js/app.js', array('skrollr', 'swiper-js') ); // On indique que c'est dépendant de skrollr
 }

 $path = '/js/app.js';
//  wp_register_script('someName-'.$entry, get_template_directory_uri() . $path, [], false, true);  
 
// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}