<?php
/**
 * Template Name: Gracias - Guía
 */
get_header(); ?>

<main style="padding: 150px 0; text-align: center; min-height: 70vh; display: flex; align-items: center;">
    <div class="container" data-aos="zoom-in">
        <div style="background: var(--secondary); color: #fff; padding: 5rem; border-radius: 20px; max-width: 800px; margin: 0 auto; box-shadow: 0 30px 60px rgba(0,0,0,0.1);">
            <div style="font-size: 4rem; margin-bottom: 2rem;">🚀</div>
            <h1 class="section-title" style="color: #fff;">¡LA GUÍA ESTÁ EN CAMINO!</h1>
            <p style="font-size: 1.3rem; color: rgba(255,255,255,0.8); margin-bottom: 3rem;">En unos minutos recibirás en tu correo los <strong>"7 Errores Técnicos que frenan tu Academia"</strong>.</p>
            
            <div style="background: rgba(255,255,255,0.05); padding: 2rem; border-radius: 12px; border: 1px solid rgba(255,255,255,0.1); margin-bottom: 3rem;">
                <p style="font-weight: 600;">⚠️ Importante: Si no lo ves en 5 minutos, revisa tu carpeta de "Promociones" o "Spam". Marca mi correo como seguro para no perderte las próximas auditorías gratuitas que envíe.</p>
            </div>

            <div style="display: flex; gap: 1.5rem; justify-content: center; flex-wrap: wrap;">
                <a href="<?php echo home_url('/#precios'); ?>" class="btn btn-primary">Ver Planes de Mantenimiento</a>
                <a href="<?php echo home_url('/'); ?>" style="color: #fff; text-decoration: underline; line-height: 3.5;">Volver al inicio</a>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
