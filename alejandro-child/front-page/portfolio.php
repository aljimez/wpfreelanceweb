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

        <div class="portfolio-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 2.5rem;">
            
            <!-- Proyecto 1: AulaCat -->
            <div class="portfolio-item" data-aos="fade-up" data-aos-delay="100" style="background: var(--bg-alt); border-radius: 12px; overflow: hidden; border: 1px solid var(--border-color); transition: transform 0.3s ease;">
                <div class="portfolio-image" style="height: 250px; background: #e2e8f0; display: flex; align-items: center; justify-content: center; position: relative; overflow: hidden;">
                    <span style="font-weight: 800; color: #94a3b8; font-size: 1.5rem;">AULACAT.CAT</span>
                    <div class="portfolio-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.7); display: flex; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.3s ease;">
                        <a href="https://www.aulacat.cat" target="_blank" class="btn btn-primary" style="padding: 0.8rem 1.5rem; font-size: 0.8rem;">VISITAR WEB</a>
                    </div>
                </div>
                <div class="portfolio-info" style="padding: 2rem;">
                    <div style="background: var(--primary); color: #000; padding: 2px 8px; border-radius: 4px; font-size: 0.7rem; font-weight: 800; display: inline-block; margin-bottom: 1rem;">HECHO DESDE CERO</div>
                    <h3 style="font-size: 1.4rem; margin-bottom: 0.5rem;">AulaCat</h3>
                    <p style="color: var(--text-light); font-size: 0.9rem;">Integración de campus virtual (LMS) a medida y sistema de pagos recurrentes para más de 1.500 alumnos activos.</p>
                </div>
            </div>

            <!-- Proyecto 2: AulaCatala -->
            <div class="portfolio-item" data-aos="fade-up" data-aos-delay="200" style="background: var(--bg-alt); border-radius: 12px; overflow: hidden; border: 1px solid var(--border-color); transition: transform 0.3s ease;">
                <div class="portfolio-image" style="height: 250px; background: #cbd5e1; display: flex; align-items: center; justify-content: center; position: relative; overflow: hidden;">
                    <span style="font-weight: 800; color: #64748b; font-size: 1.5rem;">AULACATALA.CAT</span>
                    <div class="portfolio-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.7); display: flex; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.3s ease;">
                        <a href="https://www.aulacatala.cat" target="_blank" class="btn btn-primary" style="padding: 0.8rem 1.5rem; font-size: 0.8rem;">VISITAR WEB</a>
                    </div>
                </div>
                <div class="portfolio-info" style="padding: 2rem;">
                    <div style="background: var(--primary); color: #000; padding: 2px 8px; border-radius: 4px; font-size: 0.7rem; font-weight: 800; display: inline-block; margin-bottom: 1rem;">HECHO DESDE CERO</div>
                    <h3 style="font-size: 1.4rem; margin-bottom: 0.5rem;">Aula Català</h3>
                    <p style="color: var(--text-light); font-size: 0.9rem;">Optimización técnica WPO (PageSpeed >95) y arquitectura SEO para dominar las búsquedas de formación en catalán.</p>
                </div>
            </div>

            <!-- Proyecto 3: Aprobatus -->
            <div class="portfolio-item" data-aos="fade-up" data-aos-delay="300" style="background: var(--bg-alt); border-radius: 12px; overflow: hidden; border: 1px solid var(--border-color); transition: transform 0.3s ease;">
                <div class="portfolio-image" style="height: 250px; background: #94a3b8; display: flex; align-items: center; justify-content: center; position: relative; overflow: hidden;">
                    <span style="font-weight: 800; color: #f1f5f9; font-size: 1.5rem;">APROBATUS.ES</span>
                    <div class="portfolio-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.7); display: flex; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.3s ease;">
                        <a href="https://www.aprobatus.es" target="_blank" class="btn btn-primary" style="padding: 0.8rem 1.5rem; font-size: 0.8rem;">VISITAR WEB</a>
                    </div>
                </div>
                <div class="portfolio-info" style="padding: 2rem;">
                    <div style="background: var(--primary); color: #000; padding: 2px 8px; border-radius: 4px; font-size: 0.7rem; font-weight: 800; display: inline-block; margin-bottom: 1rem;">HECHO DESDE CERO</div>
                    <h3 style="font-size: 1.4rem; margin-bottom: 0.5rem;">Aprobatus</h3>
                    <p style="color: var(--text-light); font-size: 0.9rem;">Desarrollo de plataforma de test para opositores con corrección automática y dashboard de progreso para alumnos.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
.portfolio-item:hover {
    transform: translateY(-10px);
}
.portfolio-item:hover .portfolio-overlay {
    opacity: 1 !important;
}
</style>
