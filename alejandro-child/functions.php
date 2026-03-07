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
    
    // Bootstrap 5
    wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' );
    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'alejandro_child_enqueue_styles' );

/**
 * Filtro para corregir el contenedor de Tutor LMS y que no se pegue a los bordes
 */
add_filter('tutor_course_container_classes', function($classes) {
    $classes .= ' container my-5 pt-5';
    return $classes;
});

/**
 * 5. INTEGRACIÓN TUTOR LMS -> CPT CLIENTES
 * Crea un Lead automáticamente cuando alguien se registra en la academia.
 * Evita duplicados basándose en el email.
 */
function integrate_tutor_with_clients_cpt($user_id) {
    $user = get_userdata($user_id);
    if (!$user) return;

    $user_email = $user->user_email;
    $user_name = $user->display_name;

    // Verificar si ya existe un cliente con este email para no duplicar leads
    $existing_clients = get_posts(array(
        'post_type'  => 'cliente',
        'meta_query' => array(
            array(
                'key'   => '_client_email',
                'value' => $user_email,
            ),
        ),
    ));

    if (!empty($existing_clients)) {
        return; // Ya existe, no creamos otro lead
    }

    // Crear el nuevo cliente como Lead
    $client_id = wp_insert_post(array(
        'post_title'   => $user_name,
        'post_status'  => 'publish',
        'post_type'    => 'cliente',
    ));

    if ($client_id) {
        update_post_meta($client_id, '_client_email', $user_email);
        update_post_meta($client_id, '_client_user_id', $user_id); // Guardamos el ID de usuario para rastrear progreso
        update_post_meta($client_id, '_client_status', 'lead');
        update_post_meta($client_id, '_client_service', 'formacion');
        update_post_meta($client_id, '_client_considerations', "Registrado automáticamente desde la Academia LMS al crear su cuenta.");
    }
}
add_action('tutor_after_registration_finished', 'integrate_tutor_with_clients_cpt');

/**
 * CPT Clientes y Automatizaciones
 * Los mantenemos en el Child Theme para limpieza.
 */
require get_stylesheet_directory() . '/inc/cpt-clients.php';
