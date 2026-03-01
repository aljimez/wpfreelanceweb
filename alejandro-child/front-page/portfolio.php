<?php
/**
 * Portfolio Section
 */
?>
<section id="portfolio" class="portfolio-section" style="background: var(--white); padding: 100px 0;">
    <div class="container">
        <div class="section-header" style="text-align: center; margin-bottom: 5rem;" data-aos="fade-up">
            <p style="color: var(--primary); font-weight: 800; text-transform: uppercase;">Mis trabajos recientes</p>
            <h2 class="section-title">PORTFOLIO DE PROYECTOS</h2>
            <p style="max-width: 700px; margin: 0 auto; color: var(--text-light);">Echa un vistazo a algunos de los sitios web que he desarrollado recientemente. Proyectos reales con resultados reales.</p>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            
            <!-- Proyecto 1: AulaCat -->
            <div class="col" data-aos="fade-up" data-aos-delay="100">
                <div class="portfolio-item h-100 shadow-sm border rounded-3 overflow-hidden bg-white transition-hover">
                    <div class="portfolio-image position-relative overflow-hidden" style="height: 250px; background: #e2e8f0; display: flex; align-items: center; justify-content: center;">
                        <span class="h4 fw-bold text-muted opacity-50">AULACAT.CAT</span>
                        <div class="portfolio-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center opacity-0 transition-300" style="background: rgba(0,0,0,0.7);">
                            <a href="https://www.aulacat.cat" target="_blank" class="btn btn-primary">VISITAR WEB</a>
                        </div>
                    </div>
                    <div class="portfolio-info p-4">
                        <span class="badge bg-warning text-dark mb-2">HECHO DESDE CERO</span>
                        <h3 class="h5 fw-bold mb-2">AulaCat</h3>
                        <p class="text-muted small mb-3">Integración de campus virtual (LMS) a medida y pagos recurrentes para 1.500+ alumnos.</p>
                        <div class="portfolio-results fw-bold border-top pt-3 small">
                            🚀 Resultado: +40% en matrículas automáticas.
                        </div>
                    </div>
                    <div class="px-4 pb-4">
                        <button class="btn btn-dark w-100 open-modal" data-target="modal-aulacat">VER CASO DE ÉXITO</button>
                    </div>
                </div>
            </div>

            <!-- Proyecto 2: AulaCatala -->
            <div class="col" data-aos="fade-up" data-aos-delay="200">
                <div class="portfolio-item h-100 shadow-sm border rounded-3 overflow-hidden bg-white transition-hover">
                    <div class="portfolio-image position-relative overflow-hidden" style="height: 250px; background: #cbd5e1; display: flex; align-items: center; justify-content: center;">
                        <span class="h4 fw-bold text-muted opacity-50">AULACATALA.CAT</span>
                        <div class="portfolio-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center opacity-0 transition-300" style="background: rgba(0,0,0,0.7);">
                            <a href="https://www.aulacatala.cat" target="_blank" class="btn btn-primary">VISITAR WEB</a>
                        </div>
                    </div>
                    <div class="portfolio-info p-4">
                        <span class="badge bg-warning text-dark mb-2">HECHO DESDE CERO</span>
                        <h3 class="h5 fw-bold mb-2">Aula Català</h3>
                        <p class="text-muted small mb-3">Optimización técnia WPO y arquitectura SEO para dominar búsquedas de formación en catalán.</p>
                        <div class="portfolio-results fw-bold border-top pt-3 small">
                            ⚡ Resultado: Carga en < 0.8s y Top 3 en Google.
                        </div>
                    </div>
                    <div class="px-4 pb-4">
                        <button class="btn btn-dark w-100 open-modal" data-target="modal-aulacatala">VER CASO DE ÉXITO</button>
                    </div>
                </div>
            </div>

            <!-- Proyecto 3: Aprobatus -->
            <div class="col" data-aos="fade-up" data-aos-delay="300">
                <div class="portfolio-item h-100 shadow-sm border rounded-3 overflow-hidden bg-white transition-hover">
                    <div class="portfolio-image position-relative overflow-hidden" style="height: 250px; background: #94a3b8; display: flex; align-items: center; justify-content: center;">
                        <span class="h4 fw-bold text-muted opacity-50">APROBATUS.ES</span>
                        <div class="portfolio-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center opacity-0 transition-300" style="background: rgba(0,0,0,0.7);">
                            <a href="https://www.aprobatus.es" target="_blank" class="btn btn-primary">VISITAR WEB</a>
                        </div>
                    </div>
                    <div class="portfolio-info p-4">
                        <span class="badge bg-warning text-dark mb-2">HECHO DESDE CERO</span>
                        <h3 class="h5 fw-bold mb-2">Aprobatus</h3>
                        <p class="text-muted small mb-3">Desarrollo de plataforma de test para opositores con corrección automática y dashboard.</p>
                        <div class="portfolio-results fw-bold border-top pt-3 small">
                            🏆 Resultado: 10.000+ sesiones mensuales sin caídas.
                        </div>
                    </div>
                    <div class="px-4 pb-4">
                        <button class="btn btn-dark w-100 open-modal" data-target="modal-aprobatus">VER CASO DE ÉXITO</button>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- Portfolio Modals -->
<div id="modal-aulacat" class="portfolio-modal">
    <div class="portfolio-modal-content">
        <span class="modal-close">&times;</span>
        <div class="modal-tag">CASO DE ÉXITO: AULACAT</div>
        <h2>Escalando la formación online de 1.500 alumnos</h2>
        <div class="modal-grid">
            <div>
                <img src="https://via.placeholder.com/600x400?text=AulaCat+Case+Study" alt="AulaCat Case Study" style="width: 100%; border-radius: 8px;">
            </div>
            <div>
                <h4 style="margin-bottom: 1rem;">EL RETO</h4>
                <p style="font-size: 0.9rem; color: var(--text-light);">El cliente tenía una web lenta basada en plugins excesivos que impedía el crecimiento. Los alumnos sufrían caídas constantes en el campus virtual.</p>
                
                <h4 style="margin: 1.5rem 0 1rem;">LA SOLUCIÓN</h4>
                <p style="font-size: 0.9rem; color: var(--text-light);">Desarrollo de un tema 100% a medida sin constructores visuales e integración directa con Stripe y su sistema interno de gestión.</p>

                <div class="modal-result-box">
                    <strong>EL RESULTADO:</strong>
                    <p style="margin: 0.5rem 0 0; font-weight: 700; color: var(--secondary);">+40% de ingresos automáticos y carga en 0.6s.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="modal-aulacatala" class="portfolio-modal">
    <div class="portfolio-modal-content">
        <span class="modal-close">&times;</span>
        <div class="modal-tag">CASO DE ÉXITO: AULA CATALÀ</div>
        <h2>Dominando Google con una arquitectura técnica WPO</h2>
        <div class="modal-grid">
            <div>
                <img src="https://via.placeholder.com/600x400?text=Aula+Catala+Case+Study" alt="Aula Catala Case Study" style="width: 100%; border-radius: 8px;">
            </div>
            <div>
                <h4 style="margin-bottom: 1rem;">EL RETO</h4>
                <p style="font-size: 0.9rem; color: var(--text-light);">Posicionar en un nicho competitivo requería una web extremadamente rápida y con una estructura SEO impecable que las plantillas no daban.</p>
                
                <h4 style="margin: 1.5rem 0 1rem;">LA SOLUCIÓN</h4>
                <p style="font-size: 0.9rem; color: var(--text-light);">Arquitectura de Silos nativa en WordPress y optimización de base de datos para manejar miles de entradas de blog cargando al instante.</p>

                <div class="modal-result-box">
                    <strong>EL RESULTADO:</strong>
                    <p style="margin: 0.5rem 0 0; font-weight: 700; color: var(--secondary);">Top 3 en Google por palabras clave principales y 0.8s LCP.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="modal-aprobatus" class="portfolio-modal">
    <div class="portfolio-modal-content">
        <span class="modal-close">&times;</span>
        <div class="modal-tag">CASO DE ÉXITO: APROBATUS</div>
        <h2>Sistema de tests robusto para 10.000 opositores</h2>
        <div class="modal-grid">
            <div>
                <img src="https://via.placeholder.com/600x400?text=Aprobatus+Case+Study" alt="Aprobatus Case Study" style="width: 100%; border-radius: 8px;">
            </div>
            <div>
                <h4 style="margin-bottom: 1rem;">EL RETO</h4>
                <p style="font-size: 0.9rem; color: var(--text-light);">Un sistema de tests que requería una capacidad de respuesta inmediata y seguridad absoluta en el manejo de datos de usuarios.</p>
                
                <h4 style="margin: 1.5rem 0 1rem;">LA SOLUCIÓN</h4>
                <p style="font-size: 0.9rem; color: var(--text-light);">Uso de la REST API de WordPress y una base de datos optimizada para realizar miles de peticiones por segundo sin latencia.</p>

                <div class="modal-result-box">
                    <strong>EL RESULTADO:</strong>
                    <p style="margin: 0.5rem 0 0; font-weight: 700; color: var(--secondary);">Plataforma estable con 10.000+ sesiones mensuales concurrentes.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const openBtns = document.querySelectorAll('.open-modal');
    const closeBtns = document.querySelectorAll('.modal-close');
    const modals = document.querySelectorAll('.portfolio-modal');

    openBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const target = btn.getAttribute('data-target');
            document.getElementById(target).classList.add('active');
            document.body.style.overflow = 'hidden'; // Evitar scroll
        });
    });

    closeBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            modals.forEach(m => m.classList.remove('active'));
            document.body.style.overflow = 'auto';
        });
    });

    // Cerrar al hacer clic fuera
    window.addEventListener('click', (e) => {
        modals.forEach(m => {
            if (e.target === m) {
                m.classList.remove('active');
                document.body.style.overflow = 'auto';
            }
        });
    });
});
</script>


<style>
.portfolio-item:hover {
    transform: translateY(-10px);
}
.portfolio-item:hover .portfolio-overlay {
    opacity: 1 !important;
}
</style>
