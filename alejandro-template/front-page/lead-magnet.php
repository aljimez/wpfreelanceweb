<?php
/**
 * Lead Magnet Section - Capturing emails with a free resource
 */
?>
<section id="lead-magnet" class="lead-magnet-section" style="padding: 100px 0; background: var(--secondary); color: #fff; overflow: hidden; position: relative;">
    <!-- Elementos decorativos de fondo -->
    <div style="position: absolute; top: -50px; right: -50px; width: 300px; height: 300px; background: var(--primary); opacity: 0.1; border-radius: 50%; filter: blur(50px);"></div>
    <div style="position: absolute; bottom: -50px; left: -50px; width: 200px; height: 200px; background: var(--primary); opacity: 0.05; border-radius: 50%; filter: blur(40px);"></div>

    <div class="container" style="position: relative; z-index: 2;">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 4rem; align-items: center;">
            <div data-aos="fade-right">
                <span style="display: inline-block; background: var(--primary); color: #000; padding: 5px 15px; border-radius: 20px; font-size: 0.75rem; font-weight: 800; text-transform: uppercase; margin-bottom: 1.5rem;">Recurso Gratuito</span>
                <h2 style="color: #fff; font-size: 2.5rem; line-height: 1.2; margin-bottom: 1.5rem;">LOS 7 ERRORES TÉCNICOS QUE FRENAN LAS INSCRIPCIONES EN TU ACADEMIA</h2>
                <p style="font-size: 1.1rem; color: rgba(255,255,255,0.8); margin-bottom: 2rem;">Descarga esta checklist técnica y descubre si tu campus virtual está optimizado para convertir visitas en alumnos o si estás perdiendo dinero por fallos invisibles.</p>
                
                <ul style="list-style: none; padding: 0; margin-bottom: 2.5rem;">
                    <li style="margin-bottom: 1rem; display: flex; gap: 1rem; align-items: center;">
                        <span style="color: var(--primary); font-size: 1.2rem;">★</span>
                        <span>Cómo evitar caídas en días de máxima afluencia.</span>
                    </li>
                    <li style="margin-bottom: 1rem; display: flex; gap: 1rem; align-items: center;">
                        <span style="color: var(--primary); font-size: 1.2rem;">★</span>
                        <span>El truco para que tus vídeos no se carguen lentos.</span>
                    </li>
                    <li style="margin-bottom: 1rem; display: flex; gap: 1rem; align-items: center;">
                        <span style="color: var(--primary); font-size: 1.2rem;">★</span>
                        <span>La configuración de seguridad mínima para evitar hackeos.</span>
                    </li>
                </ul>
            </div>

            <div data-aos="fade-left">
                <div style="background: var(--white); padding: 3rem; border-radius: 12px; box-shadow: 0 30px 60px rgba(0,0,0,0.3); color: var(--text-main);">
                    <h3 style="margin-bottom: 1.5rem; text-align: center;">¿Dónde te envío la guía?</h3>
                    <!-- Formulario simplificado para el Lead Magnet (puedes usar otro CF7 aquí) -->
                    <form action="#" method="POST" style="display: flex; flex-direction: column; gap: 1rem;">
                        <!-- Honeypot Field (Antispam) -->
                        <div style="display:none !important; visibility:hidden !important;" class="akismet-honeypot">
                            <label>No rellenar este campo: <input type="text" name="ak_hp_textarea" value="" tabindex="-1" autocomplete="off"></label>
                        </div>

                        <input type="text" placeholder="Tu nombre" required style="padding: 1rem; border: 1px solid var(--border-color); border-radius: 4px; font-size: 1rem;">
                        <input type="email" placeholder="Tu email profesional" required style="padding: 1rem; border: 1px solid var(--border-color); border-radius: 4px; font-size: 1rem;">
                        <button type="submit" class="btn btn-primary" style="padding: 1.2rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">ENVIARME LA GUÍA AHORA</button>
                        <p style="font-size: 0.7rem; color: var(--text-light); text-align: center; margin-top: 1rem;">Odiamos el spam tanto como tú. Tus datos están seguros.</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
