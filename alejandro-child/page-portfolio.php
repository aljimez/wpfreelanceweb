<?php
/**
 * Template Name: Página de Proyectos (Portfolio)
 */
get_header(); ?>

<main id="primary" class="site-main">
    <section class="page-header py-5 bg-dark text-white text-center">
        <div class="container py-5">
            <h1 class="display-3 fw-bold mb-3 text-white">CASOS DE ÉXITO</h1>
            <p class="lead opacity-75">Demostración técnica de resultados reales para clientes reales.</p>
        </div>
    </section>

    <?php
    get_template_part('front-page/portfolio');
    get_template_part('front-page/logos'); // Para que vean que trabajamos con stacks serios de nuevo
    get_template_part('front-page/contact-testimonials');
    ?>
</main>

<?php get_footer(); ?>
