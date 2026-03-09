<?php
/**
 * Roadmap Section - Detailed project lifecycle
 */
?>
<section id="roadmap" class="section-pad bg-light overflow-hidden">
    <div class="container">
        <div class="section-header text-center mb-5" data-aos="fade-up">
            <span class="badge bg-primary text-dark px-3 py-2 rounded-pill fw-bold text-uppercase mb-3">Roadmap</span>
            <h2 class="display-5 fw-bold mb-4 font-heading">EL CAMINO HACIA TU ACADEMIA DE ÉLITE</h2>
            <p class="lead opacity-75 mx-auto" style="max-width: 700px;">Un proceso transparente y metódico diseñado para que tú te centres en tus alumnos mientras yo me ocupo de la tecnología.</p>
        </div>

        <div class="roadmap-wrapper position-relative mt-5">
            <!-- Línea central decorativa (solo para desktop) -->
            <div class="roadmap-line d-none d-lg-block"></div>

            <div class="row g-5">
                <!-- Paso 1 -->
                <div class="col-lg-12 mb-5" data-aos="fade-up">
                    <div class="roadmap-item d-flex flex-column flex-lg-row align-items-center gap-4">
                        <div class="roadmap-number shadow-lg">01</div>
                        <div class="roadmap-card flex-grow-1 p-4 p-md-5 bg-white rounded-4 shadow-sm border-start border-primary border-5">
                            <h3 class="h4 fw-bold mb-3">Diagnóstico y Auditoría de Stress</h3>
                            <p class="mb-0 text-muted">Analizamos el estado actual de tu servidor, la velocidad de carga (WPO) y detectamos los puntos de fuga donde estás perdiendo dinero por una mala experiencia de usuario.</p>
                        </div>
                    </div>
                </div>

                <!-- Paso 2 -->
                <div class="col-lg-12 mb-5" data-aos="fade-up">
                    <div class="roadmap-item d-flex flex-column flex-lg-row-reverse align-items-center gap-4 text-lg-end">
                        <div class="roadmap-number shadow-lg">02</div>
                        <div class="roadmap-card flex-grow-1 p-4 p-md-5 bg-white rounded-4 shadow-sm border-end-lg-primary border-5-lg">
                            <h3 class="h4 fw-bold mb-3">Diseño de Arquitectura y Seguridad</h3>
                            <p class="mb-0 text-muted">Configuramos el blindaje de contenido (Vimeo/Bunny), el sistema de pagos automatizado y la estructura de cursos para garantizar que el campus sea intuitivo y seguro.</p>
                        </div>
                    </div>
                </div>

                <!-- Paso 3 -->
                <div class="col-lg-12 mb-5" data-aos="fade-up">
                    <div class="roadmap-item d-flex flex-column flex-lg-row align-items-center gap-4">
                        <div class="roadmap-number shadow-lg">03</div>
                        <div class="roadmap-card flex-grow-1 p-4 p-md-5 bg-white rounded-4 shadow-sm border-start border-primary border-5">
                            <h3 class="h4 fw-bold mb-3">Desarrollo y Migración "Zero Downtime"</h3>
                            <p class="mb-0 text-muted">Programamos el tema desde cero y migramos tus datos sin que tu academia deje de funcionar ni un segundo. Tus alumnos no notarán nada hasta que vean la nueva plataforma volando.</p>
                        </div>
                    </div>
                </div>

                <!-- Paso 4 -->
                <div class="col-lg-12" data-aos="fade-up">
                    <div class="roadmap-item d-flex flex-column flex-lg-row-reverse align-items-center gap-4 text-lg-end">
                        <div class="roadmap-number shadow-lg text-white" style="background: var(--dark);">04</div>
                        <div class="roadmap-card flex-grow-1 p-4 p-md-5 bg-white rounded-4 shadow-sm border-end-lg-dark border-5-lg">
                            <h3 class="h4 fw-bold mb-3">Lanzamiento Monitorizado 24/7</h3>
                            <p class="mb-0 text-muted">No te suelto la mano. Durante los primeros días monitorizamos picos de tráfico reales y ajustamos la potencia del servidor para asegurar una estabilidad del 100%.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.roadmap-wrapper {
    z-index: 1;
}

.roadmap-line {
    position: absolute;
    left: 50%;
    top: 0;
    bottom: 0;
    width: 2px;
    background: var(--border);
    margin-left: -1px;
    z-index: -1;
}

.roadmap-number {
    width: 80px;
    height: 80px;
    background: var(--primary);
    color: var(--dark);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.8rem;
    font-weight: 800;
    border-radius: 50%;
    flex-shrink: 0;
    border: 6px solid #fff;
}

.roadmap-card {
    transition: var(--transition);
}

.roadmap-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(0,0,0,0.1) !important;
}

@media (min-width: 992px) {
    .border-end-lg-primary { border-right: 5px solid var(--primary) !important; border-left: 0 !important; }
    .border-end-lg-dark { border-right: 5px solid var(--dark) !important; border-left: 0 !important; }
    .border-5-lg { border-width: 5px !important; }
}
</style>
