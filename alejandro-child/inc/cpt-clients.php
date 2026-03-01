<?php
/**
 * Custom Post Type for Clients
 */

function register_clients_cpt() {
    $labels = array(
        'name'                  => _x( 'Clientes', 'Post Type General Name', 'alejandro-child' ),
        'singular_name'         => _x( 'Cliente', 'Post Type Singular Name', 'alejandro-child' ),
        'menu_name'             => __( 'Clientes', 'alejandro-child' ),
        'name_admin_bar'        => __( 'Cliente', 'alejandro-child' ),
        'archives'              => __( 'Archivo de Clientes', 'alejandro-child' ),
        'attributes'            => __( 'Atributos de Cliente', 'alejandro-child' ),
        'parent_item_colon'     => __( 'Cliente Padre:', 'alejandro-child' ),
        'all_items'             => __( 'Todos los Clientes', 'alejandro-child' ),
        'add_new_item'          => __( 'Añadir Nuevo Cliente', 'alejandro-child' ),
        'add_new'               => __( 'Añadir Nuevo', 'alejandro-child' ),
        'new_item'              => __( 'Nuevo Cliente', 'alejandro-child' ),
        'edit_item'             => __( 'Editar Cliente', 'alejandro-child' ),
        'update_item'           => __( 'Actualizar Cliente', 'alejandro-child' ),
        'view_item'             => __( 'Ver Cliente', 'alejandro-child' ),
        'view_items'            => __( 'Ver Clientes', 'alejandro-child' ),
        'search_items'          => __( 'Buscar Cliente', 'alejandro-child' ),
        'not_found'             => __( 'No se encontraron clientes', 'alejandro-child' ),
        'not_found_in_trash'    => __( 'No se encontraron clientes en la papelera', 'alejandro-child' ),
        'featured_image'        => __( 'Logo del Cliente', 'alejandro-child' ),
        'set_featured_image'    => __( 'Establecer logo del cliente', 'alejandro-child' ),
        'remove_featured_image' => __( 'Eliminar logo del cliente', 'alejandro-child' ),
        'use_featured_image'    => __( 'Usar como logo del cliente', 'alejandro-child' ),
        'insert_into_item'      => __( 'Insertar en el cliente', 'alejandro-child' ),
        'uploaded_to_this_item' => __( 'Subido a este cliente', 'alejandro-child' ),
        'items_list'            => __( 'Lista de clientes', 'alejandro-child' ),
        'items_list_navigation' => __( 'Navegación de lista de clientes', 'alejandro-child' ),
        'filter_items_list'     => __( 'Filtrar lista de clientes', 'alejandro-child' ),
    );
    $args = array(
        'label'                 => __( 'Cliente', 'alejandro-child' ),
        'description'           => __( 'Gestión de clientes de freelancer', 'alejandro-child' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'thumbnail', 'editor' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-businessman',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
    );
    register_post_type( 'cliente', $args );
}
add_action( 'init', 'register_clients_cpt', 0 );

/**
 * Meta Boxes for Clients
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

function render_client_details_meta_box( $post ) {
    // Add a nonce field so we can check for it later.
    wp_nonce_field( 'client_details_nonce', 'client_details_nonce' );

    $website = get_post_meta( $post->ID, '_client_website', true );
    $email = get_post_meta( $post->ID, '_client_email', true );
    $phone = get_post_meta( $post->ID, '_client_phone', true );
    $city = get_post_meta( $post->ID, '_client_city', true );
    $project_status = get_post_meta( $post->ID, '_client_status', true );
    $service = get_post_meta( $post->ID, '_client_service', true );
    $budget = get_post_meta( $post->ID, '_client_budget', true );
    $start_date = get_post_meta( $post->ID, '_client_start_date', true );
    $considerations = get_post_meta( $post->ID, '_client_considerations', true );

    ?>
    <div style="background: #f0f0f1; padding: 10px; border-bottom: 1px solid #ccd0d4; margin: -12px -12px 12px -12px; display: flex; justify-content: flex-end;">
        <button type="button" id="toggle-client-privacy" class="button">
            <span class="dashicons dashicons-visibility" style="vertical-align: middle; margin-top: -2px;"></span>
            <span id="privacy-btn-text"><?php _e( 'Ocultar Datos', 'alejandro-child' ); ?></span>
        </button>
    </div>

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
                    <option value="lead" <?php selected( $project_status, 'lead' ); ?>><?php _e( 'Potencial (Lead)', 'alejandro-child' ); ?></option>
                    <option value="active" <?php selected( $project_status, 'active' ); ?>><?php _e( 'Activo', 'alejandro-child' ); ?></option>
                    <option value="on_hold" <?php selected( $project_status, 'on_hold' ); ?>><?php _e( 'En pausa', 'alejandro-child' ); ?></option>
                    <option value="completed" <?php selected( $project_status, 'completed' ); ?>><?php _e( 'Completado', 'alejandro-child' ); ?></option>
                    <option value="cancelled" <?php selected( $project_status, 'cancelled' ); ?>><?php _e( 'Cancelado', 'alejandro-child' ); ?></option>
                </select>
            </td>
        </tr>
        <tr class="client-info-row">
            <th><label for="client_service"><?php _e( 'Servicio Contratado', 'alejandro-child' ); ?></label></th>
            <td>
                <select id="client_service" name="client_service">
                    <option value="diseno_web" <?php selected( $service, 'diseno_web' ); ?>><?php _e( 'Diseño Web', 'alejandro-child' ); ?></option>
                    <option value="desarrollo_web" <?php selected( $service, 'desarrollo_web' ); ?>><?php _e( 'Desarrollo Web', 'alejandro-child' ); ?></option>
                    <option value="seo_sem" <?php selected( $service, 'seo_sem' ); ?>><?php _e( 'SEO / SEM', 'alejandro-child' ); ?></option>
                    <option value="mantenimiento" <?php selected( $service, 'mantenimiento' ); ?>><?php _e( 'Mantenimiento', 'alejandro-child' ); ?></option>
                    <option value="consultoria" <?php selected( $service, 'consultoria' ); ?>><?php _e( 'Consultoría', 'alejandro-child' ); ?></option>
                    <option value="otros" <?php selected( $service, 'otros' ); ?>><?php _e( 'Otros', 'alejandro-child' ); ?></option>
                </select>
            </td>
        </tr>
        <tr class="client-info-row">
            <th><label for="client_budget"><?php _e( 'Presupuesto (€)', 'alejandro-child' ); ?></label></th>
            <td><input type="number" id="client_budget" name="client_budget" value="<?php echo esc_attr( $budget ); ?>" class="regular-text" step="0.01"></td>
        </tr>
        <tr class="client-info-row">
            <th><label for="client_start_date"><?php _e( 'Fecha de Inicio', 'alejandro-child' ); ?></label></th>
            <td><input type="date" id="client_start_date" name="client_start_date" value="<?php echo esc_attr( $start_date ); ?>" class="regular-text"></td>
        </tr>
        <tr class="client-info-row">
            <th><label for="client_considerations"><?php _e( 'Consideraciones', 'alejandro-child' ); ?></label></th>
            <td><textarea id="client_considerations" name="client_considerations" rows="5" class="large-text"><?php echo esc_textarea( $considerations ); ?></textarea></td>
        </tr>
    </table>

    <script>
    (function($) {
        // Objeto para guardar temporalmente los valores
        var originalValues = {};

        $('#toggle-client-privacy').on('click', function() {
            var btn = $(this);
            var btnText = $('#privacy-btn-text');
            var icon = btn.find('.dashicons');
            var inputs = $('#client-details-table').find('input, select, textarea');
            
            var isHidden = btn.data('hidden') || false;

            if (!isHidden) {
                // OCULTAR: Guardar valores y vaciar campos
                inputs.each(function() {
                    var input = $(this);
                    originalValues[input.attr('id')] = input.val();
                    
                    if (input.is('select')) {
                        // Para select, podemos poner una opción vacía o simplemente deshabilitar visualmente
                        input.css('opacity', '0');
                    } else {
                        input.val('');
                        input.attr('placeholder', '********');
                    }
                    input.prop('readonly', true);
                    input.css('filter', 'blur(3px)');
                });

                btnText.text('<?php _e( 'Mostrar Datos', 'alejandro-child' ); ?>');
                icon.removeClass('dashicons-visibility').addClass('dashicons-hidden');
                btn.data('hidden', true);
            } else {
                // MOSTRAR: Restaurar valores
                inputs.each(function() {
                    var input = $(this);
                    var originalVal = originalValues[input.attr('id')];
                    
                    if (input.is('select')) {
                        input.css('opacity', '1');
                    } else {
                        input.val(originalVal);
                        input.attr('placeholder', '');
                    }
                    input.prop('readonly', false);
                    input.css('filter', 'none');
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

function save_client_details_meta( $post_id ) {
    // Check if our nonce is set.
    if ( ! isset( $_POST['client_details_nonce'] ) ) {
        return;
    }

    // Verify that the nonce is valid.
    if ( ! wp_verify_nonce( $_POST['client_details_nonce'], 'client_details_nonce' ) ) {
        return;
    }

    // If this is an autosave, our form has not been submitted, so we don't want to do anything.
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    // Check the user's permissions.
    if ( isset( $_POST['post_type'] ) && 'cliente' == $_POST['post_type'] ) {
        if ( ! current_user_can( 'edit_post', $post_id ) ) {
            return;
        }
    }

    // Update the meta field in the database.
    if ( isset( $_POST['client_website'] ) ) {
        update_post_meta( $post_id, '_client_website', sanitize_url( $_POST['client_website'] ) );
    }
    if ( isset( $_POST['client_email'] ) ) {
        update_post_meta( $post_id, '_client_email', sanitize_email( $_POST['client_email'] ) );
    }
    if ( isset( $_POST['client_phone'] ) ) {
        update_post_meta( $post_id, '_client_phone', sanitize_text_field( $_POST['client_phone'] ) );
    }
    if ( isset( $_POST['client_city'] ) ) {
        update_post_meta( $post_id, '_client_city', sanitize_text_field( $_POST['client_city'] ) );
    }
    if ( isset( $_POST['client_status'] ) ) {
        update_post_meta( $post_id, '_client_status', sanitize_text_field( $_POST['client_status'] ) );
    }
    if ( isset( $_POST['client_service'] ) ) {
        update_post_meta( $post_id, '_client_service', sanitize_text_field( $_POST['client_service'] ) );
    }
    if ( isset( $_POST['client_budget'] ) ) {
        update_post_meta( $post_id, '_client_budget', sanitize_text_field( $_POST['client_budget'] ) );
    }
    if ( isset( $_POST['client_start_date'] ) ) {
        update_post_meta( $post_id, '_client_start_date', sanitize_text_field( $_POST['client_start_date'] ) );
    }
    if ( isset( $_POST['client_considerations'] ) ) {
        update_post_meta( $post_id, '_client_considerations', sanitize_textarea_field( $_POST['client_considerations'] ) );
    }
}
add_action( 'save_post', 'save_client_details_meta' );

/**
 * Custom Columns for Clients List
 */
function set_custom_edit_cliente_columns($columns) {
    $columns['client_service'] = __( 'Servicio', 'alejandro-child' );
    $columns['client_city'] = __( 'Ciudad', 'alejandro-child' );
    $columns['client_email'] = __( 'Email', 'alejandro-child' );
    $columns['client_status'] = __( 'Estado', 'alejandro-child' );
    $columns['client_considerations'] = __( 'Anotaciones', 'alejandro-child' );
    return $columns;
}
add_filter( 'manage_cliente_posts_columns', 'set_custom_edit_cliente_columns' );

function custom_cliente_column( $column, $post_id ) {
    switch ( $column ) {
        case 'client_email' :
            echo get_post_meta( $post_id , '_client_email' , true ); 
            break;

        case 'client_city' :
            echo get_post_meta( $post_id , '_client_city' , true ); 
            break;

        case 'client_service' :
            $service = get_post_meta( $post_id , '_client_service' , true );
            $service_labels = array(
                'diseno_web' => 'Diseño Web',
                'desarrollo_web' => 'Desarrollo Web',
                'seo_sem' => 'SEO / SEM',
                'mantenimiento' => 'Mantenimiento',
                'consultoria' => 'Consultoría',
                'otros' => 'Otros'
            );
            echo isset($service_labels[$service]) ? $service_labels[$service] : '-';
            break;

        case 'client_status' :
            $status = get_post_meta( $post_id , '_client_status' , true );
            $labels = array(
                'lead' => 'Potencial',
                'active' => 'Activo',
                'on_hold' => 'En pausa',
                'completed' => 'Completado',
                'cancelled' => 'Cancelado'
            );
            echo isset($labels[$status]) ? $labels[$status] : $status;
            break;

        case 'client_considerations' :
            $considerations = get_post_meta( $post_id , '_client_considerations' , true );
            echo $considerations ? wp_trim_words( $considerations, 10, '...' ) : '-';
            break;
    }
}
add_action( 'manage_cliente_posts_custom_column' , 'custom_cliente_column', 10, 2 );

/**
 * Automate Lead Creation from Contact Form 7
 */
function create_client_from_cf7( $contact_form ) {
    // Get the submission instance
    $submission = WPCF7_Submission::get_instance();

    if ( $submission ) {
        $posted_data = $submission->get_posted_data();

        // Extract data (using standard CF7 field names)
        $name    = isset( $posted_data['your-name'] ) ? sanitize_text_field( $posted_data['your-name'] ) : 'Lead desde Web';
        $email   = isset( $posted_data['your-email'] ) ? sanitize_email( $posted_data['your-email'] ) : '';
        $phone   = isset( $posted_data['your-tel'] ) ? sanitize_text_field( $posted_data['your-tel'] ) : '';
        $message = isset( $posted_data['your-message'] ) ? sanitize_textarea_field( $posted_data['your-message'] ) : '';
        $subject = isset( $posted_data['your-subject'] ) ? sanitize_text_field( $posted_data['your-subject'] ) : '';

        // Determine service if provided
        $service = 'otros';
        if ( stripos( $message, 'diseño' ) !== false || stripos( $subject, 'diseño' ) !== false ) $service = 'diseno_web';
        if ( stripos( $message, 'desarrollo' ) !== false || stripos( $subject, 'desarrollo' ) !== false ) $service = 'desarrollo_web';
        if ( stripos( $message, 'mantenimiento' ) !== false || stripos( $subject, 'mantenimiento' ) !== false ) $service = 'mantenimiento';
        if ( stripos( $message, 'seo' ) !== false || stripos( $subject, 'seo' ) !== false ) $service = 'seo_sem';

        // Create the post
        $client_id = wp_insert_post( array(
            'post_title'   => $name,
            'post_content' => $message,
            'post_status'  => 'publish',
            'post_type'    => 'cliente',
        ) );

        if ( $client_id ) {
            // Update meta fields
            update_post_meta( $client_id, '_client_email', $email );
            update_post_meta( $client_id, '_client_phone', $phone );
            update_post_meta( $client_id, '_client_status', 'lead' );
            update_post_meta( $client_id, '_client_service', $service );
            update_post_meta( $client_id, '_client_considerations', "Asunto: $subject\n\n$message" );
        }
    }
}
add_action( 'wpcf7_mail_sent', 'create_client_from_cf7' );
