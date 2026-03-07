<?php
/**
 * ARCHIVO: cpt-clients.php
 * DESCRIPCIÓN: Registro del Custom Post Type 'Cliente' y gestión de sus campos personalizados (metaboxes).
 * Incluye lógica de cálculo de rentabilidad, modo privacidad y automatización de leads.
 */

/**
 * 1. REGISTRO DEL CUSTOM POST TYPE (CPT)
 * Define cómo se verá y se comportará el tipo de post 'Cliente' en el menú de WordPress.
 */
function register_clients_cpt() {
    $labels = array(
        'name'                  => _x( 'Clientes', 'Post Type General Name', 'alejandro-child' ),
        'singular_name'         => _x( 'Cliente', 'Post Type Singular Name', 'alejandro-child' ),
        'menu_name'             => __( 'Clientes', 'alejandro-child' ),
        'name_admin_bar'        => __( 'Cliente', 'alejandro-child' ),
        'all_items'             => __( 'Todos los Clientes', 'alejandro-child' ),
        'add_new_item'          => __( 'Añadir Nuevo Cliente', 'alejandro-child' ),
        'add_new'               => __( 'Añadir Nuevo', 'alejandro-child' ),
        'new_item'              => __( 'Nuevo Cliente', 'alejandro-child' ),
        'edit_item'             => __( 'Editar Cliente', 'alejandro-child' ),
        'update_item'           => __( 'Actualizar Cliente', 'alejandro-child' ),
        'view_item'             => __( 'Ver Cliente', 'alejandro-child' ),
        'search_items'          => __( 'Buscar Cliente', 'alejandro-child' ),
        'not_found'             => __( 'No se encontraron clientes', 'alejandro-child' ),
        'featured_image'        => __( 'Logo del Cliente', 'alejandro-child' ),
    );
    $args = array(
        'label'                 => __( 'Cliente', 'alejandro-child' ),
        'description'           => __( 'Gestión de clientes de freelancer', 'alejandro-child' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'thumbnail', 'editor' ),
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-businessman', // Icono de maletín
        'capability_type'       => 'post',
        'show_in_rest'          => true, // Habilita Gutenberg y la API REST
    );
    register_post_type( 'cliente', $args );
}
add_action( 'init', 'register_clients_cpt', 0 );

/**
 * 2. REGISTRO DE METABOXES (CAMPOS PERSONALIZADOS)
 * Crea el panel 'Detalles del Cliente' en la pantalla de edición.
 */
function add_clients_meta_boxes() {
    add_meta_box(
        'client_details',
        __( 'Detalles del Cliente', 'alejandro-child' ),
        'render_client_details_meta_box',
        'cliente',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'add_clients_meta_boxes' );

/**
 * 3. RENDERIZADO DEL PANEL DE DETALLES (HTML)
 * Dibuja el formulario donde se introducen los datos del cliente.
 */
function render_client_details_meta_box( $post ) {
    // Campo de seguridad para prevenir ataques CSRF
    wp_nonce_field( 'client_details_nonce', 'client_details_nonce' );

    // Recuperamos los valores guardados anteriormente en la base de datos
    $website = get_post_meta( $post->ID, '_client_website', true );
    $email = get_post_meta( $post->ID, '_client_email', true );
    $phone = get_post_meta( $post->ID, '_client_phone', true );
    $city = get_post_meta( $post->ID, '_client_city', true );
    $project_status = get_post_meta( $post->ID, '_client_status', true );
    $service = get_post_meta( $post->ID, '_client_service', true );
    $budget = get_post_meta( $post->ID, '_client_budget', true );
    $hours = get_post_meta( $post->ID, '_client_hours', true );
    $start_date = get_post_meta( $post->ID, '_client_start_date', true );
    $considerations = get_post_meta( $post->ID, '_client_considerations', true );
    $user_id        = get_post_meta( $post->ID, '_client_user_id', true );

    // Si no tenemos user_id pero sí email, intentamos vincularlo ahora
    if ( empty($user_id) && !empty($email) ) {
        $user = get_user_by('email', $email);
        if ($user) {
            $user_id = $user->ID;
            update_post_meta($post->ID, '_client_user_id', $user_id);
        }
    }

    // CÁLCULO DE RENTABILIDAD: Limpiamos los valores de presupuesto y horas para evitar errores
    $clean_budget = floatval(preg_replace('/[^0-9.]/', '', str_replace(',', '.', (string)$budget)));
    $clean_hours = floatval(preg_replace('/[^0-9.]/', '', str_replace(',', '.', (string)$hours)));
    
    $profitability = 0;
    if ( $clean_hours > 0 ) {
        $profitability = $clean_budget / $clean_hours; // División simple: € / horas
    }

    ?>
    <!-- Cabecera del panel con botón de privacidad -->
    <div style="background: #f0f0f1; padding: 10px; border-bottom: 1px solid #ccd0d4; margin: -12px -12px 12px -12px; display: flex; justify-content: flex-end;">
        <button type="button" id="toggle-client-privacy" class="button">
            <span class="dashicons dashicons-visibility" style="vertical-align: middle; margin-top: -2px;"></span>
            <span id="privacy-btn-text"><?php _e( 'Ocultar Datos', 'alejandro-child' ); ?></span>
        </button>
    </div>

    <!-- Tabla con los campos del formulario -->
    <table class="form-table" id="client-details-table">
        <tr class="client-info-row">
            <th><label for="client_website"><?php _e( 'Sitio Web', 'alejandro-child' ); ?></label></th>
            <td><input type="url" id="client_website" name="client_website" value="<?php echo esc_url( $website ); ?>" class="regular-text"></td>
        </tr>
        <tr class="client-info-row">
            <th><label for="client_email"><?php _e( 'Correo Electrónico', 'alejandro-child' ); ?></label></th>
            <td><input type="email" id="client_email" name="client_email" value="<?php echo esc_attr( $email ); ?>" class="regular-text"></td>
        </tr>
        <tr class="client-info-row">
            <th><label for="client_phone"><?php _e( 'Teléfono', 'alejandro-child' ); ?></label></th>
            <td><input type="text" id="client_phone" name="client_phone" value="<?php echo esc_attr( $phone ); ?>" class="regular-text"></td>
        </tr>
        <tr class="client-info-row">
            <th><label for="client_city"><?php _e( 'Ciudad', 'alejandro-child' ); ?></label></th>
            <td><input type="text" id="client_city" name="client_city" value="<?php echo esc_attr( $city ); ?>" class="regular-text"></td>
        </tr>
        <tr class="client-info-row">
            <th><label for="client_status"><?php _e( 'Estado del Proyecto', 'alejandro-child' ); ?></label></th>
            <td>
                <select id="client_status" name="client_status">
                    <option value="lead" <?php selected( $project_status, 'lead' ); ?>>Potencial (Lead)</option>
                    <option value="active" <?php selected( $project_status, 'active' ); ?>>Activo</option>
                    <option value="on_hold" <?php selected( $project_status, 'on_hold' ); ?>>En pausa</option>
                    <option value="completed" <?php selected( $project_status, 'completed' ); ?>>Completado</option>
                </select>
            </td>
        </tr>
        <tr class="client-info-row">
            <th><label for="client_service"><?php _e( 'Servicio Contratado', 'alejandro-child' ); ?></label></th>
            <td>
                <select id="client_service" name="client_service">
                    <option value="diseno_web" <?php selected( $service, 'diseno_web' ); ?>>Diseño Web</option>
                    <option value="desarrollo_web" <?php selected( $service, 'desarrollo_web' ); ?>>Desarrollo Web</option>
                    <option value="mantenimiento" <?php selected( $service, 'mantenimiento' ); ?>>Mantenimiento</option>
                    <option value="formacion" <?php selected( $service, 'formacion' ); ?>>Formación / Academia</option>
                    <option value="otros" <?php selected( $service, 'otros' ); ?>>Otros</option>
                </select>
            </td>
        </tr>
        <tr class="client-info-row">
            <th><label for="client_budget"><?php _e( 'Presupuesto (€)', 'alejandro-child' ); ?></label></th>
            <td><input type="number" id="client_budget" name="client_budget" value="<?php echo esc_attr( $budget ); ?>" class="regular-text" step="0.01"></td>
        </tr>
        <tr class="client-info-row">
            <th><label for="client_hours"><?php _e( 'Horas Mensuales', 'alejandro-child' ); ?></label></th>
            <td><input type="number" id="client_hours" name="client_hours" value="<?php echo esc_attr( $hours ); ?>" class="regular-text" step="0.1"></td>
        </tr>
        <tr class="client-info-row">
            <th><label><?php _e( 'Rentabilidad Real', 'alejandro-child' ); ?></label></th>
            <td>
                <!-- Mostramos el color verde si la rentabilidad es > 50€/h, si no naranja -->
                <span style="font-weight: bold; font-size: 1.2em; color: <?php echo $profitability > 50 ? '#27ae60' : '#e67e22'; ?>;">
                    <?php echo number_format( $profitability, 2 ); ?> €/h
                </span>
                <p class="description"><?php _e( 'Calculado automáticamente (Presupuesto / Horas)', 'alejandro-child' ); ?></p>
            </td>
        </tr>
        <tr class="client-info-row">
            <th><label for="client_start_date"><?php _e( 'Fecha de Inicio', 'alejandro-child' ); ?></label></th>
            <td><input type="date" id="client_start_date" name="client_start_date" value="<?php echo esc_attr( $start_date ); ?>" class="regular-text"></td>
        </tr>
        <tr class="client-info-row">
            <th><label><?php _e( 'Progreso Academia', 'alejandro-child' ); ?></label></th>
            <td>
                <?php 
                if ( $user_id && function_exists('tutor_utils') ) {
                    $enrolled_courses = tutor_utils()->get_enrolled_courses_by_user($user_id);
                    
                    if ( $enrolled_courses && $enrolled_courses->have_posts() ) {
                        echo '<ul style="margin:0; padding:0; list-style:none;">';
                        while ( $enrolled_courses->have_posts() ) {
                            $enrolled_courses->the_post();
                            $course_id = get_the_ID();
                            $completed_percent = tutor_utils()->get_course_completed_percent($course_id, $user_id);
                            
                            echo '<li style="margin-bottom:8px;">';
                            echo '<strong>' . get_the_title() . ':</strong> ';
                            echo '<div style="background:#eee; border-radius:10px; height:12px; width:200px; display:inline-block; vertical-align:middle; margin:0 10px; position:relative; overflow:hidden;">';
                            echo '<div style="background:var(--primary, #ffb800); height:100%; width:' . $completed_percent . '%; transition: width 0.5s;"></div>';
                            echo '</div>';
                            echo '<span>' . $completed_percent . '%</span>';
                            echo '</li>';
                        }
                        echo '</ul>';
                        wp_reset_postdata();
                    } else {
                        echo '<span style="color:#666; font-style:italic;">No se han encontrado cursos iniciados.</span>';
                    }
                } else if ( !$user_id ) {
                    echo '<span style="color:#d63031;">Cliente no vinculado a ningún usuario de la academia.</span>';
                } else {
                    echo '<span style="color:#666;">Tutor LMS no está activo.</span>';
                }
                ?>
            </td>
        </tr>
        <tr class="client-info-row">
            <th><label for="client_considerations"><?php _e( 'Anotaciones', 'alejandro-child' ); ?></label></th>
            <td><textarea id="client_considerations" name="client_considerations" rows="5" class="large-text"><?php echo esc_textarea( $considerations ); ?></textarea></td>
        </tr>
    </table>

    <script>
    /**
     * LÓGICA DE PRIVACIDAD (JavaScript/jQuery)
     * Permite ocultar visualmente los datos para trabajar en público sin mostrar cifras sensibles.
     */
    (function($) {
        $('#toggle-client-privacy').on('click', function() {
            var btn = $(this);
            var btnText = $('#privacy-btn-text');
            var icon = btn.find('.dashicons');
            var inputs = $('#client-details-table').find('input, select, textarea');
            var isHidden = btn.data('hidden') || false;

            if (!isHidden) {
                // MODO OCULTO: Usamos filtros visuales y texto transparente
                // IMPORTANTE: No vaciamos el valor (.val('')) para evitar que se guarde vacío en la DB.
                inputs.each(function() {
                    var input = $(this);
                    if (input.is('select')) {
                        input.css('opacity', '0.1'); // Los select no admiten texto transparente bien
                    } else {
                        input.css({
                            'color': 'transparent',
                            'text-shadow': '0 0 8px rgba(0,0,0,0.5)', // Crea un efecto de difuminado
                            'user-select': 'none'
                        });
                    }
                    input.prop('readonly', true);
                });

                btnText.text('<?php _e( 'Mostrar Datos', 'alejandro-child' ); ?>');
                icon.removeClass('dashicons-visibility').addClass('dashicons-hidden');
                btn.data('hidden', true);
            } else {
                // MODO VISIBLE: Restauramos los estilos originales
                inputs.each(function() {
                    var input = $(this);
                    if (input.is('select')) {
                        input.css('opacity', '1');
                    } else {
                        input.css({
                            'color': '',
                            'text-shadow': 'none',
                            'user-select': 'auto'
                        });
                    }
                    input.prop('readonly', false);
                });

                btnText.text('<?php _e( 'Ocultar Datos', 'alejandro-child' ); ?>');
                icon.removeClass('dashicons-hidden').addClass('dashicons-visibility');
                btn.data('hidden', false);
            }
        });
    })(jQuery);
    </script>
    <?php
}

/**
 * 4. GUARDADO DE DATOS (SAVE_POST)
 * Procesa el formulario cuando el usuario pulsa "Actualizar" o "Publicar".
 */
function save_client_details_meta( $post_id ) {
    // Verificaciones de seguridad (Nonce, Autosave y Permisos)
    if ( ! isset( $_POST['client_details_nonce'] ) || ! wp_verify_nonce( $_POST['client_details_nonce'], 'client_details_nonce' ) ) return;
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    if ( ! current_user_can( 'edit_post', $post_id ) ) return;

    // Guardamos cada campo saneando la información para evitar inyecciones de código
    if ( isset( $_POST['client_website'] ) ) update_post_meta( $post_id, '_client_website', sanitize_url( $_POST['client_website'] ) );
    if ( isset( $_POST['client_email'] ) ) update_post_meta( $post_id, '_client_email', sanitize_email( $_POST['client_email'] ) );
    if ( isset( $_POST['client_phone'] ) ) update_post_meta( $post_id, '_client_phone', sanitize_text_field( $_POST['client_phone'] ) );
    if ( isset( $_POST['client_city'] ) ) update_post_meta( $post_id, '_client_city', sanitize_text_field( $_POST['client_city'] ) );
    if ( isset( $_POST['client_status'] ) ) update_post_meta( $post_id, '_client_status', sanitize_text_field( $_POST['client_status'] ) );
    if ( isset( $_POST['client_service'] ) ) update_post_meta( $post_id, '_client_service', sanitize_text_field( $_POST['client_service'] ) );
    if ( isset( $_POST['client_budget'] ) ) update_post_meta( $post_id, '_client_budget', sanitize_text_field( $_POST['client_budget'] ) );
    if ( isset( $_POST['client_hours'] ) ) update_post_meta( $post_id, '_client_hours', sanitize_text_field( $_POST['client_hours'] ) );
    if ( isset( $_POST['client_start_date'] ) ) update_post_meta( $post_id, '_client_start_date', sanitize_text_field( $_POST['client_start_date'] ) );
    if ( isset( $_POST['client_considerations'] ) ) update_post_meta( $post_id, '_client_considerations', sanitize_textarea_field( $_POST['client_considerations'] ) );
}
add_action( 'save_post', 'save_client_details_meta' );

/**
 * 5. PERSONALIZACIÓN DE COLUMNAS EN EL LISTADO ADMIN
 * Añade campos extra (Servicio, Ciudad, Rentabilidad...) a la tabla general de Clientes.
 */
function set_custom_edit_cliente_columns($columns) {
    $columns['client_service'] = __( 'Servicio', 'alejandro-child' );
    $columns['client_city'] = __( 'Ciudad', 'alejandro-child' );
    $columns['client_status'] = __( 'Estado', 'alejandro-child' );
    $columns['client_progress'] = __( 'Progreso LMS', 'alejandro-child' ); // Nueva columna
    $columns['client_profitability'] = __( '€/h', 'alejandro-child' );
    $columns['client_considerations'] = __( 'Anotaciones', 'alejandro-child' );
    return $columns;
}
add_filter( 'manage_cliente_posts_columns', 'set_custom_edit_cliente_columns' );

/**
 * 6. CONTENIDO DE LAS COLUMNAS PERSONALIZADAS
 * Define qué se muestra exactamente en cada columna nueva de la lista.
 */
function custom_cliente_column( $column, $post_id ) {
    switch ( $column ) {
        case 'client_city' :
            echo get_post_meta( $post_id , '_client_city' , true ); 
            break;

        case 'client_service' :
            $service = get_post_meta( $post_id , '_client_service' , true );
            $labels = array(
                'diseno_web' => 'Diseño Web', 
                'desarrollo_web' => 'Desarrollo Web', 
                'mantenimiento' => 'Mantenimiento',
                'formacion' => 'Academia'
            );
            echo isset($labels[$service]) ? $labels[$service] : 'Otros';
            break;

        case 'client_status' :
            $status = get_post_meta( $post_id , '_client_status' , true );
            $labels = array('lead' => 'Potencial', 'active' => 'Activo', 'on_hold' => 'Pausa', 'completed' => 'Listo');
            echo isset($labels[$status]) ? $labels[$status] : $status;
            break;

        case 'client_progress' :
            $user_id = get_post_meta( $post_id, '_client_user_id', true );
            if ( $user_id && function_exists('tutor_utils') ) {
                $enrolled_courses = tutor_utils()->get_enrolled_courses_by_user($user_id);
                if ( $enrolled_courses && $enrolled_courses->have_posts() ) {
                    $total_progress = 0;
                    $count = 0;
                    while ( $enrolled_courses->have_posts() ) {
                        $enrolled_courses->the_post();
                        $total_progress += tutor_utils()->get_course_completed_percent(get_the_ID(), $user_id);
                        $count++;
                    }
                    wp_reset_postdata();
                    $avg = round($total_progress / $count);
                    echo "<div style='background:#eee; height:8px; border-radius:4px; overflow:hidden; width:100%; margin-top:5px;'>
                            <div style='background:var(--primary, #ffb800); width:{$avg}%; height:100%;'></div>
                          </div>";
                    echo "<small>{$avg}% medio en {$count} cursos</small>";
                } else {
                    echo "-";
                }
            } else {
                echo "-";
            }
            break;

        case 'client_profitability' :
            // Recuperamos y calculamos de nuevo para la columna (€/h)
            $b_val = get_post_meta( $post_id , '_client_budget' , true );
            $h_val = get_post_meta( $post_id , '_client_hours' , true );
            $b = floatval(preg_replace('/[^0-9.]/', '', str_replace(',', '.', (string)$b_val)));
            $h = floatval(preg_replace('/[^0-9.]/', '', str_replace(',', '.', (string)$h_val)));
            if ( $h > 0 ) {
                $prof = $b / $h;
                echo '<strong style="color:' . ($prof > 50 ? '#27ae60' : '#e67e22') . ';">' . number_format( $prof, 2 ) . ' €/h</strong>';
            } else {
                echo '-';
            }
            break;

        case 'client_considerations' :
            $cons = get_post_meta( $post_id , '_client_considerations' , true );
            echo $cons ? wp_trim_words( $cons, 8, '...' ) : '-';
            break;
    }
}
add_action( 'manage_cliente_posts_custom_column' , 'custom_cliente_column', 10, 2 );

/**
 * 7. AUTOMATIZACIÓN DE LEADS (CONTACT FORM 7)
 * Captura los envíos del formulario de contacto y crea automáticamente una ficha de Cliente tipo 'Lead'.
 */
function create_client_from_cf7( $contact_form ) {
    $submission = WPCF7_Submission::get_instance();
    if ( $submission ) {
        $data = $submission->get_posted_data();
        $name = isset($data['your-name']) ? sanitize_text_field($data['your-name']) : 'Nuevo Lead';
        
        // Creamos el Borrador del Cliente
        $client_id = wp_insert_post( array(
            'post_title'   => $name,
            'post_content' => isset($data['your-message']) ? sanitize_textarea_field($data['your-message']) : '',
            'post_status'  => 'publish',
            'post_type'    => 'cliente',
        ) );

        if ( $client_id ) {
            // Rellenamos los campos automáticamente
            update_post_meta( $client_id, '_client_email', sanitize_email($data['your-email']) );
            update_post_meta( $client_id, '_client_phone', sanitize_text_field($data['your-tel']) );
            update_post_meta( $client_id, '_client_status', 'lead' );
            update_post_meta( $client_id, '_client_considerations', "Motivo: " . sanitize_text_field($data['your-subject']) );
        }
    }
}
add_action( 'wpcf7_mail_sent', 'create_client_from_cf7' );
