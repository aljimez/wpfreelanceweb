<?php
/**
 * Template Name: Página Academia
 */
get_header(); ?>

<main id="primary" class="site-main">
    <section class="page-header py-5 bg-dark text-white text-center">
        <div class="container py-5">
            <h1 class="display-3 fw-bold mb-3">CONVIERTETE EN CEO</h1>
            <p class="lead opacity-75">Domina los cimientos técnicos para que tu LMS deje de ser un juguete y sea un negocio.</p>
        </div>
    </section>

    <?php
    get_template_part('front-page/course-preview');
    get_template_part('front-page/lead-magnet');
    ?>

    <section class="py-5 bg-white text-center">
        <div class="container py-5">
            <h2 class="fw-bold mb-4 h3">¿Ya tienes tu diagnóstico agendado?</h2>
            <p class="mb-5 text-muted">Aprovecha el 100% del curso agendando una llamada de 15 minutos para auditar tu setup.</p>
            <a href="<?php echo esc_url( home_url( '#contacto' ) ); ?>" class="btn btn-dark btn-lg py-3 px-5">QUIERO MI SESIÓN DE AUDITORÍA</a>
        </div>
    </section>
</main>

<?php get_footer(); ?>
