<?php
/**
 * Template Name: Landing LinkedIn - Auditoría Gratis
 * Description: Página optimizada para tráfico proveniente de LinkedIn.
 */

get_header(); ?>

<style>
    .linkedin-hero {
        background: radial-gradient(circle at 10% 20%, rgba(30, 41, 59, 1) 0%, rgba(15, 23, 42, 1) 100%);
        color: white;
        padding: 100px 0 80px;
    }
    .linkedin-hero h1 {
        font-size: clamp(2.2rem, 5vw, 3.8rem);
        line-height: 1.1;
    }
    .video-placeholder {
        background: #000;
        aspect-ratio: 16 / 9;
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 30px 60px rgba(0,0,0,0.5);
        border: 1px solid rgba(255,255,255,0.1);
        cursor: pointer;
        position: relative;
        overflow: hidden;
    }
    .video-placeholder:hover .play-btn {
        transform: scale(1.1);
        background: var(--primary);
        color: #000;
    }
    .play-btn {
        width: 80px;
        height: 80px;
        background: rgba(255,255,255,0.1);
        backdrop-filter: blur(10px);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        font-size: 1.5rem;
    }
    .audit-card {
        margin-top: -60px;
        z-index: 10;
        position: relative;
    }
    .icon-box-small {
        width: 40px;
        height: 40px;
        background: rgba(255,184,0,0.1);
        color: var(--primary);
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }
    @media (max-width: 991px) {
        .audit-card { margin-top: 30px; }
    }
</style>

<main id="linkedin-landing">
    <!-- HERO SECTION -->
    <section class="linkedin-hero">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <span class="badge bg-primary text-dark px-3 py-2 rounded-pill fw-bold text-uppercase mb-4" data-aos="fade-down">Exclusivo para contactos de LinkedIn</span>
                    <h1 class="fw-bold mb-4" data-aos="fade-up">TE GRABO UN VÍDEO ANALIZANDO TU ACADEMIA (GRATIS)</h1>
                    <p class="lead text-white-50 mb-5 mx-auto" style="max-width: 800px;" data-aos="fade-up" data-aos-delay="100">
                        Deja de adivinar por qué tu web va lenta o por qué tus alumnos se quejan. Envíame tu URL y te enviaré un diagnóstico técnico personalizado en menos de 24 horas.
                    </p>
                </div>
            </div>
            
            <div class="row justify-content-center mt-4" data-aos="zoom-in" data-aos-delay="200">
                <div class="col-lg-8">
                    <div class="video-placeholder">
                        <div class="play-btn">▶</div>
                        <p class="position-absolute bottom-0 w-100 p-3 mb-0 small opacity-50">Haz clic para ver un ejemplo de cómo analizo tu academia</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FORM SECTION -->
    <section class="py-5 bg-light">
        <div class="container pb-5">
            <div class="row g-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="pe-lg-5">
                        <h2 class="fw-bold mb-4">¿QUÉ INCLUYE ESTE VÍDEO-DIAGNÓSTICO?</h2>
                        <ul class="list-unstyled">
                            <li class="mb-4 d-flex gap-3">
                                <div class="icon-box-small">✓</div>
                                <div>
                                    <strong class="d-block text-dark">Prueba de Stress de Carga</strong>
                                    <span class="text-muted">Análisis real de cuánto tardan tus cursos en cargar para un alumno.</span>
                                </div>
                            </li>
                            <li class="mb-4 d-flex gap-3">
                                <div class="icon-box-small">✓</div>
                                <div>
                                    <strong class="d-block text-dark">Auditoría de Seguridad Crítica</strong>
                                    <span class="text-muted">Compruebo si tus vídeos y PDFs están expuestos a descargas externas.</span>
                                </div>
                            </li>
                            <li class="mb-4 d-flex gap-3">
                                <div class="icon-box-small">✓</div>
                                <div>
                                    <strong class="d-block text-dark">Puntos de Fuga en el Checkout</strong>
                                    <span class="text-muted">Detecto por qué los alumnos abandonan el carrito antes de pagar.</span>
                                </div>
                            </li>
                        </ul>
                        
                        <div class="alert alert-warning border-0 shadow-sm rounded-4 p-4 mt-5">
                            <p class="mb-0 fw-bold small text-uppercase">⚠️ Solo grabo 3 vídeos al día para asegurar la máxima calidad. Pide el tuyo ahora.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-left">
                    <div class="audit-card bg-white p-4 p-md-5 rounded-4 shadow-xl border border-primary border-4">
                        <h3 class="h4 fw-bold mb-4">Solicita tu Vídeo-Diagnóstico</h3>
                        <p class="small text-muted mb-4">Dime tu URL y a qué email quieres que te envíe el vídeo de Loom analizando tu academia.</p>
                        
                        <!-- Formulario simplificado para LinkedIn -->
                        <form action="#" method="POST" class="row g-3">
                            <div class="col-12">
                                <label class="form-label small fw-bold">Nombre Completo</label>
                                <input type="text" class="form-control form-control-lg bg-light border-0" placeholder="Ej. Juan Pérez" required>
                            </div>
                            <div class="col-12">
                                <label class="form-label small fw-bold">URL de tu Academia / Web</label>
                                <input type="url" class="form-control form-control-lg bg-light border-0" placeholder="https://miacademia.com" required>
                            </div>
                            <div class="col-12">
                                <label class="form-label small fw-bold">Email donde recibir el vídeo</label>
                                <input type="email" class="form-control form-control-lg bg-light border-0" placeholder="tu@email.com" required>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-primary btn-lg w-100 fw-bold py-3 shadow">ENVIARME MI VÍDEO GRATIS</button>
                            </div>
                            <div class="col-12 text-center mt-3">
                                <p class="x-small text-muted mb-0">Sin compromiso. Sin spam. Solo valor técnico puro.</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TESTIMONIAL PREVIEW (Reutilizando autoridad) -->
    <?php get_template_part('front-page/logos'); ?>
</main>

<?php get_footer(); ?>
