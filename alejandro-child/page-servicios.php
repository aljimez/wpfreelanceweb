<?php
/**
 * Template Name: Página de Servicios
 */
get_header(); ?>

<main id="primary" class="site-main">
    <section class="page-header py-5 bg-dark text-white text-center">
        <div class="container py-5">
            <h1 class="display-3 fw-bold mb-3 text-white">SERVICIOS DE ÉLITE</h1>
            <p class="lead opacity-75">Infraestructura técnica para academias que escalan sin límites.</p>
        </div>
    </section>

    <?php
    // Reutilizamos las secciones preparadas
    get_template_part('front-page/services');
    get_template_part('front-page/process');
    get_template_part('front-page/calculator');
    get_template_part('front-page/pricing');
    get_template_part('front-page/faq');
    ?>
</main>

<?php get_footer(); ?>
