<?php
/**
 * Course Preview Section - Promoting the free course
 */

// Intentamos obtener el último curso publicado en Tutor LMS
$args = array(
    'post_type'      => 'courses',
    'posts_per_page' => 1,
    'post_status'    => 'publish'
);
$course_query = new WP_Query($args);
$course_found = $course_query->have_posts();
?>

<section id="academia" class="course-section py-5" style="background: var(--bg-alt); border-top: 1px solid var(--border-color);">
    <div class="container py-4">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <span class="badge bg-primary text-dark px-3 py-2 rounded-pill fw-bold text-uppercase mb-4">Academia Gratuita</span>
                <h2 class="display-5 fw-bold mb-4">DOMINA EL "BACKSTAGE" DE TU ACADEMIA</h2>
                <p class="lead text-secondary mb-5">
                    He creado un curso **100% basado en texto y casos reales** para dueños de formación que no quieren depender de un informático para lo básico, pero quieren saber exactamente cuándo delegar lo complejo.
                </p>
                
                <div class="course-features mb-5">
                    <div class="d-flex align-items-start mb-4">
                        <div class="feature-icon bg-white shadow-sm rounded-3 p-3 text-primary me-4">
                            <span class="dashicons dashicons-media-text fs-4" style="width:auto; height:auto;"></span>
                        </div>
                        <div>
                            <h4 class="h5 fw-bold">Sin Vídeos Infinitos</h4>
                            <p class="text-muted mb-0">Contenido directo al grano, escaneable y listo para aplicar en 5 minutos.</p>
                        </div>
                    </div>
                    
                    <div class="d-flex align-items-start mb-4">
                        <div class="feature-icon bg-white shadow-sm rounded-3 p-3 text-primary me-4">
                            <span class="dashicons dashicons-shield fs-4" style="width:auto; height:auto;"></span>
                        </div>
                        <div>
                            <h4 class="h5 fw-bold">Blindaje Real</h4>
                            <p class="text-muted mb-0">Aprende a proteger tu contenido para que no lo compartan ilegalmente.</p>
                        </div>
                    </div>
                </div>

                <a href="<?php echo $course_found ? get_permalink($course_query->posts[0]->ID) : home_url('/cursos'); ?>" class="btn btn-dark btn-lg px-5 py-3 shadow-sm fw-bold">
                    ACCEDER GRATIS AL CURSO
                </a>
            </div>

            <div class="col-lg-6" data-aos="fade-left">
                <div class="course-card-preview bg-white rounded-4 shadow-xl overflow-hidden position-relative">
                    <?php if ($course_found && has_post_thumbnail($course_query->posts[0]->ID)): ?>
                        <?php echo get_the_post_thumbnail($course_query->posts[0]->ID, 'large', array('class' => 'img-fluid w-100')); ?>
                    <?php else: ?>
                        <div style="height: 350px; background: var(--secondary); display: flex; align-items: center; justify-content: center;" class="text-white text-center p-5">
                            <div>
                                <h3 class="h2 fw-bold text-primary mb-3">ALEJANDRO<span>.LMS</span></h3>
                                <p class="opacity-75">El cimiento técnico perfecto para tu formación online</p>
                            </div>
                        </div>
                    <?php endif; ?>
                    
                    <div class="p-4 p-md-5">
                        <h3 class="h4 fw-bold mb-3"><?php echo $course_found ? get_the_title($course_query->posts[0]->ID) : 'Academia Inmune: Cimientos Técnicos'; ?></h3>
                        <div class="d-flex align-items-center mb-4 text-muted small">
                            <span class="me-3"><span class="dashicons dashicons-clock me-1"></span> 1 hora de lectura</span>
                            <span class="me-3"><span class="dashicons dashicons-admin-users me-1"></span> Acceso de por vida</span>
                            <span><span class="dashicons dashicons-awards me-1"></span> Certificado</span>
                        </div>
                        <div class="progress mb-2" style="height: 8px;">
                            <div class="progress-bar bg-primary" style="width: 0%"></div>
                        </div>
                        <p class="small text-muted mb-0">0% completado (Empieza hoy mismo)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php wp_reset_postdata(); ?>
