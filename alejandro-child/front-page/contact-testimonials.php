<?php
/**
 * Testimonials Section - Based on Image 3
 */
?>
<section id="testimonios" class="testimonials-section">
    <div class="container">
        <div class="section-header">
            <p style="color: var(--primary); font-weight: 800; text-transform: uppercase;">Qué dicen de mí</p>
            <h2 class="section-title">CLIENTES TRANQUILOS CON SU NEGOCIO</h2>
        </div>

        <div class="row g-4">
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="testimonial-card h-100 p-4 p-md-5 bg-white border rounded-4 shadow-sm">
                    <blockquote class="italic text-muted mb-4">"Alejandro transformó nuestra academia de idiomas. Antes perdíamos horas con las matrículas, ahora todo es automático y la web vuela. Es nuestro socio de confianza."</blockquote>
                    <div class="d-flex align-items-center gap-3">
                        <div class="author-info">
                            <h4 class="h6 fw-bold mb-0">María García</h4>
                            <p class="small text-muted mb-0">Directora, London Academy</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="testimonial-card h-100 p-4 p-md-5 bg-white border rounded-4 shadow-sm">
                    <blockquote class="italic text-muted mb-4">"Lo mejor de trabajar con él es que entiende el sector educativo. No solo arregló los fallos del campus virtual, sino que nos ayudó a mejorar el SEO de captación."</blockquote>
                    <div class="d-flex align-items-center gap-3">
                        <div class="author-info">
                            <h4 class="h6 fw-bold mb-0">Juan Pérez</h4>
                            <p class="small text-muted mb-0">Fundador, Centro Oposiciones Justicia</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="testimonial-card h-100 p-4 p-md-5 bg-white border rounded-4 shadow-sm">
                    <blockquote class="italic text-muted mb-4">"Teníamos pánico a los hackeos y a las caídas del servidor en época de exámenes. Con su mantenimiento premium dormimos tranquilos. Su soporte técnico es de 10."</blockquote>
                    <div class="d-flex align-items-center gap-3">
                        <div class="author-info">
                            <h4 class="h6 fw-bold mb-0">Elena Ruiz</h4>
                            <p class="small text-muted mb-0">Responsable IT, Grupo Formación Pro</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form Section -->
<section id="contacto" class="py-5 bg-light">
    <div class="container py-lg-5" data-aos="zoom-in">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-10">
                <h2 class="display-6 fw-bold mb-3">¿QUIERES QUE TU ACADEMIA FUNCIONE POR FIN DE FORMA AUTOMÁTICA?</h2>
                <p class="lead text-muted">Solicita un diagnóstico gratuito de 15 minutos para analizar el estado técnico de tu web.</p>
            </div>
        </div>
        
        <div class="text-center mb-5">
            <a href="#" 
               onclick="Calendly.initPopupWidget({url: 'https://calendly.com/ajimenezal01/diagnostico-tecnico-gratuito?primary_color=ffb800&text_color=000000&hide_event_type_details=1'});return false;" 
               class="btn btn-primary btn-lg px-5 py-3 shadow fw-bold">
                <span class="dashicons dashicons-calendar-alt me-2"></span>
                AGENDAR LLAMADA DE DIAGNÓSTICO
            </a>
            <p class="mt-3 small text-muted">¿Prefieres escribir? Usa el formulario de abajo.</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="bg-white p-4 p-md-5 border rounded-4 shadow-sm">
                    <?php 
                    // Formulario de Contact Form 7
                    echo do_shortcode('[contact-form-7 id="5" title="Formulario de contacto"]'); 
                    ?>

                    <!-- Información Básica sobre Protección de Datos -->
                    <div class="mt-5 pt-4 border-top border-light x-small text-muted">
                        <p class="mb-1"><strong>Responsable:</strong> Alejandro Freelancer.</p>
                        <p class="mb-1"><strong>Finalidad:</strong> Gestión y resolución de su consulta.</p>
                        <p class="mb-1"><strong>Legitimación:</strong> Consentimiento del interesado.</p>
                        <p class="mb-1"><strong>Destinatarios:</strong> No se cederán datos a terceros.</p>
                        <p class="mb-0"><strong>Derechos:</strong> Acceso, rectificación y supresión. +Info en <a href="/politica-de-privacidad" target="_blank" class="text-primary text-decoration-none">privacidad</a>.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row justify-content-center mt-5 text-center g-4">
            <div class="col-md-4">
                <p class="text-primary fw-bold text-uppercase small mb-1">Email</p>
                <p class="h6 mb-0">ajimeneza01@gmail.com</p>
            </div>
            <div class="col-md-4">
                <p class="text-primary fw-bold text-uppercase small mb-1">Teléfono</p>
                <p class="h6 mb-0">+34 664 610 640</p>
            </div>
        </div>
    </div>
</section>
