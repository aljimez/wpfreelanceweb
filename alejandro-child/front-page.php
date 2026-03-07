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
  "name": "Alejandro Freelancer - Desarrollador WordPress Premium",
  "image": "<?php echo get_stylesheet_directory_uri(); ?>/assets/img/alejandro.webp",
  "@id": "<?php echo home_url(); ?>",
  "url": "<?php echo home_url(); ?>",
  "telephone": "+34664610640",
  "priceRange": "€€",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "[Tu Dirección]",
    "addressLocality": "[Tu Ciudad]",
    "postalCode": "[Tu CP]",
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
        
        // 1. Sección Hero (Promesa)
        get_template_part('front-page/hero');

        // 1.5 Sección Logos (Confianza inmediata)
        get_template_part('front-page/logos');

        // 2. Teaser del Curso (Autoridad ràpida)
        get_template_part('front-page/course-preview');

        // 3. SECCIÓN SOBRE MÍ / MÉTODO (Humanización)
        get_template_part('front-page/about');
        get_template_part('front-page/method');

        // 4. PORTFOLIO RESUMIDO (Teaser de resultados)
        // Podríamos añadir una versión short del portfolio o solo un CTA potente
        ?>
        <section class="py-5 bg-white text-center" style="border-top:1px solid var(--border-color);">
            <div class="container py-5" data-aos="fade-up">
                <h2 class="display-5 fw-bold mb-4 h3">CASOS DE ÉXITO REALES</h2>
                <p class="mb-5 text-muted opacity-75 lead" style="max-width:700px; margin-inline:auto;">Aprende cómo he ayudado a otras academias a escalar de 0 a 10.000+ sesiones mensuales sin caídas de servidor ni errores técnicos.</p>
                <a href="<?php echo esc_url( home_url( '/portfolio' ) ); ?>" class="btn btn-primary btn-lg px-5 py-3 shadow-sm fw-bold">VER TODOS LOS PROYECTOS</a>
            </div>
        </section>
        <?php

        // 5. SECCIÓN SERVICIOS (Teaser de la solución)
        ?>
        <section class="py-5 text-center" style="background: var(--bg-alt); border-top:1px solid var(--border-color);">
            <div class="container py-5" data-aos="fade-up">
                <span class="badge bg-dark text-white mb-3">CONSTRUYE TU PLATAFORMA</span>
                <h2 class="display-6 fw-bold mb-4">¿BUSCAS UNA ACADEMIA PROFESIONAL?</h2>
                <p class="mb-5 text-muted opacity-75" style="max-width:700px; margin-inline:auto;">Desde el diseño nativo hasta el blindaje de seguridad extremo. Descubre mis planes de desarrollo y mantenimiento.</p>
                <div class="d-flex flex-wrap justify-content-center gap-3">
                    <a href="<?php echo esc_url( home_url( '/servicios' ) ); ?>" class="btn btn-dark btn-lg px-4 py-3 shadow-sm fw-bold">MIS SERVICIOS TÉCNICOS</a>
                    <a href="<?php echo esc_url( home_url( '/servicios#calculadora' ) ); ?>" class="btn btn-outline-dark btn-lg px-4 py-3 fw-bold">CALCULAR MI PÉRDIDA</a>
                </div>
            </div>
        </section>
        <?php


        // 6. Sección Testimonios y Contacto (Cierre Obligatorio en Home)
        get_template_part('front-page/contact-testimonials');
        
        ?>

    </main><!-- #main -->

<?php get_footer(); ?>
