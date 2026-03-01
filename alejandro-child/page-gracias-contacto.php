<?php
/**
 * Template Name: Gracias - Contacto
 */
get_header(); ?>

<main style="padding: 150px 0; text-align: center; min-height: 70vh; display: flex; align-items: center;">
    <div class="container" data-aos="zoom-in">
        <div style="background: var(--bg-alt); padding: 4rem; border-radius: 12px; border: 1px solid var(--border-color); max-width: 700px; margin: 0 auto;">
            <div style="font-size: 4rem; margin-bottom: 2rem;">📩</div>
            <h1 class="section-title">¡MENSANE RECIBIDO!</h1>
            <p style="font-size: 1.2rem; color: var(--text-light); margin-bottom: 3rem;">Gracias por confiar en mi criterio. He recibido tus detalles y me pondré en contacto contigo en <strong>menos de 24 horas laborables</strong>.</p>
            
            <div style="border-top: 1px solid var(--border-color); pt: 3rem; margin-top: 2rem;">
                <p style="font-weight: 700; margin-bottom: 1.5rem;">¿Qué quieres hacer ahora?</p>
                <div style="display: flex; gap: 1.5rem; justify-content: center; flex-wrap: wrap;">
                    <a href="<?php echo home_url('/#portfolio'); ?>" class="btn btn-dark">Ver Casos de Éxito</a>
                    <a href="<?php echo home_url('/'); ?>" class="btn btn-primary">Volver al Inicio</a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
