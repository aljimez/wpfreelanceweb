<?php
/**
 * Template Name: Página de Inicio - Desarrollador WordPress
 * Description: Homepage modularizada importando secciones desde la carpeta front-page.
 */

get_header(); ?>

<!-- Schema SEO for Professional Services - Specific to Home -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ProfessionalService",
  "name": "ALEJANDRO.DEV - Desarrollador WordPress Premium",
  "image": "<?php echo get_stylesheet_directory_uri(); ?>/assets/img/alejandro.webp",
  "@id": "<?php echo home_url(); ?>",
  "url": "<?php echo home_url(); ?>",
  "telephone": "+34664610640",
  "priceRange": "€€",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "[Tu Dirección]",
    "addressLocality": "Tarragona",
    "postalCode": "43720",
    "addressCountry": "ES"
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday"
    ],
    "opens": "09:00",
    "closes": "18:00"
  },
  "sameAs": [
    "https://www.linkedin.com/in/ajimeneza01"
  ]
}
</script>

<main id="primary" class="site-main">

        <?php
        /**
         * Importación de secciones desde la carpeta front-page/
         * Tal como solicitó el usuario.
         */
        
        // 1. HERO (Atención y Promesa)
        get_template_part('front-page/hero');

        // 1.5 LOGOS (Confianza Inmediata)
        get_template_part('front-page/logos');

        // 2. COMPARATIVA (Diferenciación y Autoridad)
        get_template_part('front-page/comparison');

        // 2.5 GARANTÍAS (Paz Mental)
        get_template_part('front-page/guarantees');

        // 3. SERVICIOS (La Solución Técnica)
        get_template_part('front-page/services');

        // 4. CALCULADORA (Impacto del problema - Dolor)
        get_template_part('front-page/calculator');

        // 5. PORTFOLIO (Prueba Social y Resultados)
        ?>
        <section class="py-5 bg-white text-center" style="border-top:1px solid var(--border-color);">
            <div class="container py-5" data-aos="fade-up">
                <h2 class="display-5 fw-bold mb-4 h3">CASOS DE ÉXITO REALES</h2>
                <p class="mb-5 text-muted opacity-75 lead" style="max-width:700px; margin-inline:auto;">Aprende cómo he ayudado a otras academias a escalar de 0 a 10.000+ sesiones mensuales sin caídas de servidor ni errores técnicos.</p>
                <div class="d-flex flex-wrap justify-content-center gap-3">
                    <a href="<?php echo esc_url( home_url( '/portfolio' ) ); ?>" class="btn btn-primary btn-lg px-5 py-3 shadow-sm fw-bold text-dark">VER TODOS LOS PROYECTOS</a>
                </div>
            </div>
        </section>
        <?php

        // 6. ROADMAP (Seguridad y Proceso)
        get_template_part('front-page/roadmap');

        // 7. PRICING (Claridad y Cualificación)
        get_template_part('front-page/pricing');

        // 8. FAQ (Resolución de Objeciones)
        get_template_part('front-page/faq');

        // 9. MÉTODO / SOBRE MÍ (Humanización final)
        get_template_part('front-page/method');

        // 10. CONTACTO (Cierre) - Cargado automáticamente por footer.php
        ?>

    </main><!-- #main -->

<?php get_footer(); ?>
