<?php
/**
 * Template Name: Gracias - Diagnóstico
 */
get_header(); ?>

<main style="padding: 150px 0; text-align: center; min-height: 70vh; display: flex; align-items: center;">
    <div class="container" data-aos="zoom-in">
        <div style="background: var(--bg-alt); padding: 4rem; border-radius: 12px; border: 1px solid var(--border-color); max-width: 700px; margin: 0 auto;">
            <div style="font-size: 4rem; margin-bottom: 2rem;">🗓️</div>
            <h1 class="section-title">¡LLAMADA CONFIRMADA!</h1>
            <p style="font-size: 1.2rem; color: var(--text-light); margin-bottom: 2rem;">Tu diagnóstico técnico gratuito de 15 minutos ya está en mi agenda. Acabo de enviarte un email con el enlace para la videollamada.</p>
            
            <div style="background: var(--white); padding: 2rem; border-radius: 8px; margin-bottom: 3rem; text-align: left;">
                <p style="font-weight: 800; text-transform: uppercase; font-size: 0.8rem; color: var(--primary); margin-bottom: 1rem;">Próximos pasos:</p>
                <ul style="list-style: none; padding: 0; font-size: 0.95rem;">
                    <li style="margin-bottom: 0.5rem;">✓ Revisa tu bandeja de entrada (y spam por si acaso).</li>
                    <li style="margin-bottom: 0.5rem;">✓ Añade el evento a tu calendario personal.</li>
                    <li style="margin-bottom: 0.5rem;">✓ Ten preparada la URL de tu academia para la sesión.</li>
                </ul>
            </div>

            <a href="<?php echo home_url('/'); ?>" class="btn btn-primary">Volver a la Web</a>
        </div>
    </div>
</main>

<?php get_footer(); ?>
