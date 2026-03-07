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

    // AOS (Animaciones)
    wp_enqueue_style( 'aos-css', 'https://unpkg.com/aos@2.3.1/dist/aos.css' );
    wp_enqueue_script( 'aos-js', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), null, true );

    // Estilos de la marca (Diseño global)
    wp_enqueue_style( 'alejandro-design', get_stylesheet_directory_uri() . '/assets/css/front-page.css', array('bootstrap-css', 'aos-css'), '1.0.2' );
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
 * 6. DETECTOR DE LEADS FRÍOS (AUTOMATIZACIÓN)
 * Marca a los alumnos que no han avanzado en el curso por más de 3 días.
 */
function identify_cold_leads() {
    $args = array(
        'post_type'  => 'cliente',
        'meta_query' => array(
            array(
                'key'     => '_client_user_id',
                'compare' => 'EXISTS',
            ),
        ),
    );
    $clients = get_posts($args);

    foreach ($clients as $client) {
        $user_id = get_post_meta($client->ID, '_client_user_id', true);
        if ($user_id) {
            // En un sistema real, aquí consultaríamos el último log de Tutor LMS.
            // Por simplicidad, este hook se puede expandir con una tarea CRON.
        }
    }
}
// Este hook podría engancharse a un cron diario.

/**
 * CPT Clientes y Automatizaciones
 * Los mantenemos en el Child Theme para limpieza.
 */
require get_stylesheet_directory() . '/inc/cpt-clients.php';
/**
 * 7. CHATBOT INTELIGENTE (WEB MCP / GEMINI)
 * Proxy seguro para consultas a la IA sin exponer la API Key.
 */
/*
function aj_gemini_chat_handler() {
    check_ajax_referer('aj_chat_nonce', 'nonce');

    $user_message = sanitize_text_field($_POST['message']);
    $api_key = 'AIzaSyAdfeNCw6-sLAHD5ZHBgLP4rgOjB8jmAjc';
    
    $system_context = "Eres el asistente experto de ALEJANDRO.DEV. Tu misión es ayudar a dueños de ACADEMIAS ONLINE (Oposiciones, Idiomas, Formación). 
    INFO CLAVE:
    - Servicios: Desarrollo WordPress artesanal, Automatización de pagos, Seguridad 'antidoma' de material, Optimizacion para alto tráfico (miles de alumnos).
    - Diferencial: No usas constructores pesados, programas a medida para que la web sea rápida y no se caiga el día del examen.
    - Academia: Hay un curso gratuito 'Academia Inmune' para dueños de academia.
    - Precios: Se dan bajo diagnóstico previo.
    - Contacto: Agendar en Calendly o WhatsApp.
    REGLA DE ORO: Responde siempre en español, de forma profesional pero cercana. Si no sabes algo, invita a agendar un diagnóstico gratuito.";

    $payload = [
        "contents" => [
            ["role" => "user", "parts" => [["text" => $system_context . "\n\nPregunta del cliente: " . $user_message]]]
        ]
    ];

    $response = wp_remote_post("https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash:generateContent?key=" . $api_key, [
        'body'    => json_encode($payload),
        'headers' => ['Content-Type' => 'application/json'],
        'timeout' => 30
    ]);

    if (is_wp_error($response)) {
        wp_send_json_error('Error de red: ' . $response->get_error_message());
    }

    $http_code = wp_remote_retrieve_response_code($response);
    $body_text = wp_remote_retrieve_body($response);
    $body = json_decode($body_text, true);

    if ($http_code !== 200) {
        $error_msg = $body['error']['message'] ?? 'Error de Google (Cód: ' . $http_code . ')';
        wp_send_json_error($error_msg);
    }

    $reply = $body['candidates'][0]['content']['parts'][0]['text'] ?? 'Lo siento, no he podido procesar la respuesta. Inténtalo en un momento.';

    wp_send_json_success($reply);
}
add_action('wp_ajax_aj_chat_message', 'aj_gemini_chat_handler');
add_action('wp_ajax_nopriv_aj_chat_message', 'aj_gemini_chat_handler');

function aj_localize_chat_script() {
    wp_localize_script('bootstrap-js', 'aj_chat_config', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce'    => wp_create_nonce('aj_chat_nonce')
    ));
}
add_action('wp_enqueue_scripts', 'aj_localize_chat_script', 20);
*/
