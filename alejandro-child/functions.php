<?php
/**
 * Alejandro Child Theme functions and definitions
 */

function alejandro_child_enqueue_styles() {
    // Encola el estilo del tema padre
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    
    // Encola el estilo del tema hijo (este archivo style.css)
    wp_enqueue_style( 'child-style', get_stylesheet_uri(), array( 'parent-style' ) );
    
    // Activos de Calendly (centralizados en el Child Theme)
    wp_enqueue_style( 'calendly-widget', 'https://assets.calendly.com/assets/external/widget.css' );
    wp_enqueue_script( 'calendly-script', 'https://assets.calendly.com/assets/external/widget.js', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'alejandro_child_enqueue_styles' );

/**
 * CPT Clientes y Automatizaciones
 * Los mantenemos en el Child Theme para limpieza.
 */
require get_stylesheet_directory() . '/inc/cpt-clients.php';
