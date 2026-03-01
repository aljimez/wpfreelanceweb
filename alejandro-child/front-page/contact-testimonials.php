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

        <div class="testimonial-grid">
            <div class="testimonial-card" data-aos="fade-up" data-aos-delay="100">
                <blockquote>"Alejandro transformó nuestra academia de idiomas. Antes perdíamos horas con las matrículas, ahora todo es automático y la web vuela. Es nuestro socio de confianza."</blockquote>
                <div class="testimonial-author">María García</div>
                <p style="font-size: 0.8rem; color: var(--text-light);">Directora, London Academy</p>
            </div>

            <div class="testimonial-card" data-aos="fade-up" data-aos-delay="200">
                <blockquote>"Lo mejor de trabajar con él es que entiende el sector educativo. No solo arregló los fallos del campus virtual, sino que nos ayudó a mejorar el SEO de captación."</blockquote>
                <div class="testimonial-author">Juan Pérez</div>
                <p style="font-size: 0.8rem; color: var(--text-light);">Fundador, Centro Oposiciones Justicia</p>
            </div>

            <div class="testimonial-card" data-aos="fade-up" data-aos-delay="300">
                <blockquote>"Teníamos pánico a los hackeos y a las caídas del servidor en época de exámenes. Con su mantenimiento premium dormimos tranquilos. Su soporte técnico es de 10."</blockquote>
                <div class="testimonial-author">Elena Ruiz</div>
                <p style="font-size: 0.8rem; color: var(--text-light);">Responsable IT, Grupo Formación Pro</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form Section placeholder based on Image 1/4 -->
<section id="contacto" style="background: var(--bg-alt); text-align: center;">
    <div class="container" data-aos="zoom-in">
        <h2 class="section-title">¿QUIERES QUE TU ACADEMIA FUNCIONE POR FIN DE FORMA AUTOMÁTICA?</h2>
        <p style="margin-bottom: 2rem; color: var(--text-light);">Solicita un diagnóstico gratuito de 15 minutos para analizar el estado técnico de tu web.</p>
        
        <div style="margin-bottom: 4rem;">
          <a href="" 
   onclick="Calendly.initPopupWidget({url: 'https://calendly.com/ajimenezal01/diagnostico-tecnico-gratuito?primary_color=ffb800&text_color=000000&hide_event_type_details=1'});return false;" 
   class="btn btn-primary" 
   style="padding: 1.2rem 2.5rem; font-size: 1.1rem; box-shadow: 0 10px 20px rgba(var(--primary-rgb), 0.3);">
    <span class="dashicons dashicons-calendar-alt" style="margin-right: 10px;"></span>
    AGENDAR LLAMADA DE DIAGNÓSTICO
</a>

            <p style="margin-top: 1rem; font-size: 0.85rem; color: var(--text-light);">¿Prefieres escribir? Usa el formulario de abajo.</p>
        </div>

        <div class="contact-form-container" style="max-width: 600px; margin: 0 auto; background: var(--white); padding: 3rem; border: 1px solid var(--border-color); border-radius: 8px;">
            <?php 
            // Mostramos el formulario de Contact Form 7
            // Nota: El ID "5" es un ejemplo, asegúrate de poner el ID correcto de tu formulario
            echo do_shortcode('[contact-form-7 id="5" title="Formulario de contacto"]'); 
            ?>

            <!-- Información Básica sobre Protección de Datos -->
            <div class="gdpr-info" style="margin-top: 2rem; text-align: left; padding-top: 2rem; border-top: 1px solid var(--border-color); font-size: 0.75rem; color: var(--text-light); line-height: 1.4;">
                <p><strong>Responsable:</strong> Alejandro Freelancer.</p>
                <p><strong>Finalidad:</strong> Gestión y resolución de su consulta.</p>
                <p><strong>Legitimación:</strong> Consentimiento del interesado.</p>
                <p><strong>Destinatarios:</strong> No se cederán datos a terceros, salvo obligación legal.</p>
                <p><strong>Derechos:</strong> Acceder, rectificar y suprimir los datos, así como otros derechos explicados en la <a href="/politica-de-privacidad" target="_blank" style="color: var(--primary); text-decoration: none;">política de privacidad</a>.</p>
            </div>
        </div>
        
        <div style="margin-top: 4rem; display: flex; justify-content: center; gap: 3rem; flex-wrap: wrap;">
            <div>
                <p style="font-weight: 800; text-transform: uppercase; font-size: 0.8rem; color: var(--primary);">Email</p>
                <p>ajimeneza01@gmail.com</p>
            </div>
            <div>
                <p style="font-weight: 800; text-transform: uppercase; font-size: 0.8rem; color: var(--primary);">Teléfono</p>
                <p>+34 664 610 640</p>
            </div>
        </div>
    </div>
</section>
