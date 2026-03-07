<?php
/**
 * Template Name: Página de Inicio - Desarrollador WordPress
 * Description: Homepage modularizada importando secciones desde la carpeta front-page.
 */

// Si no queremos usar el sistema de bloques para esta página, podemos definir el layout manualmente.
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    
    <?php wp_head(); ?>
    
    <!-- Schema SEO for Professional Services -->
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

    
    <!-- Importamos el CSS específico de la Front Page -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/front-page.css">
    
    <!-- Animaciones AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body <?php body_class(); ?>>

    <header class="site-header">
        <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm">
            <div class="container">
                <a class="navbar-brand logo" href="#">ALEJANDRO<span>.DEV</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto align-items-center">
                        <li class="nav-item">
                            <a class="nav-link" href="#servicios">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#portfolio">Proyectos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#metodo">Metodología</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#precios">Precios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#testimonios">Testimonios</a>
                        </li>
                        <li class="nav-item ms-lg-3">
                            <a class="btn btn-dark nav-cta py-2 px-4 shadow-sm" href="#contacto">Solicitar Presupuesto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


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

        // 2. Comparativa Técnica (Diferenciación)
        get_template_part('front-page/comparison');

        // 3. Sobre Mí (Autoridad y Humanización)
        get_template_part('front-page/about');

        // 4. Metodología (Empatía con el Dolor)
        get_template_part('front-page/method');

        // 5. Sección Lead Magnet (Captación de Emails)
        get_template_part('front-page/lead-magnet');

        // 6. Sección Servicios (La Solución)
        get_template_part('front-page/services');
        
        // 7. El Proceso (Cómo lo hacemos)
        get_template_part('front-page/process');

        // 8. Sección Portfolio (Prueba Social) - Actualizado con resultados
        get_template_part('front-page/portfolio');

        // 9. Garantías (Confianza adicional)
        get_template_part('front-page/guarantees');

        // 10. Preguntas Frecuentes (Destrucción de Objeciones)
        get_template_part('front-page/faq');

        // 11. Sección Precios (Inversión)
        get_template_part('front-page/pricing');

        // 12. Sección Testimonios y Contacto (Cierre)
        get_template_part('front-page/contact-testimonials');

        
        ?>

    </main><!-- #main -->


    <footer class="site-footer" style="padding: 60px 0; text-align: center; border-top: 1px solid var(--border-color); background: var(--bg-alt);">
        <div class="container">
            <p style="font-weight: 700; margin-bottom: 1rem;">ALEJANDRO<span>.DEV</span></p>
            <div class="legal-links" style="margin-bottom: 2rem; display: flex; justify-content: center; gap: 2rem; flex-wrap: wrap;">
                <a href="/aviso-legal" style="text-decoration: none; color: var(--text-light); font-size: 0.85rem;">Aviso Legal</a>
                <a href="/politica-de-privacidad" style="text-decoration: none; color: var(--text-light); font-size: 0.85rem;">Política de Privacidad</a>
                <a href="/politica-de-cookies" style="text-decoration: none; color: var(--text-light); font-size: 0.85rem;">Política de Cookies</a>
            </div>
            <p style="color: var(--text-light); font-size: 0.85rem;">&copy; <?php echo date('Y'); ?> Alejandro Freelancer. Todos los derechos reservados.</p>
        </div>
    </footer>

    <!-- WhatsApp Floating Button con Mensaje Personalizado -->
    <a href="https://wa.me/34664610640?text=Hola%20Alejandro,%20he%20visto%20tu%20web%20y%20me%20gustaría%20agendar%20un%20diagnóstico%20para%20mi%20academia." class="whatsapp-float" target="_blank" rel="noopener noreferrer">
        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
    </a>

    <!-- WhatsApp Bubble -->
    <div id="whatsapp-bubble" class="whatsapp-bubble">
        ¿Tienes dudas? ¡Pregúntame! 👋
    </div>

    <!-- Exit Intent Popup -->
    <div id="exit-popup" class="exit-popup">
        <div class="exit-popup-content">
            <span class="exit-popup-close">&times;</span>
            <h2>¡ESPERA UN MOMENTO! 🛑</h2>
            <p>Antes de irte, no pierdas la oportunidad de automatizar tu academia. He reservado 2 huecos esta semana para diagnósticos gratuitos.</p>
            <a href="#contacto" id="exit-popup-cta" class="btn btn-primary">AGENDAR MI DIAGNÓSTICO AHORA</a>
            <p style="margin-top: 1.5rem; font-size: 0.8rem;">Solo tardas 30 segundos.</p>
        </div>
    </div>

    <!-- Cookie Banner -->
    <div id="cookie-banner" class="cookie-banner">
        <div class="container container-cookie">
            <div class="cookie-content">
                <p>Este sitio web utiliza cookies propias y de terceros para mejorar su experiencia de usuario y realizar tareas de análisis. Al continuar navegando, entendemos que acepta nuestra <a href="/politica-de-cookies" target="_blank">política de cookies</a>.</p>
            </div>
            <div class="cookie-actions">
                <button id="accept-cookies" class="btn-cookie">Aceptar</button>
            </div>
        </div>
    </div>

    <!-- Scripts de animación y funcionalidades -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Gestión de Cookies
            const cookieBanner = document.getElementById('cookie-banner');
            const acceptBtn = document.getElementById('accept-cookies');

            if (!localStorage.getItem('cookies-accepted')) {
                cookieBanner.classList.add('show');
            }

            acceptBtn.addEventListener('click', function() {
                localStorage.setItem('cookies-accepted', 'true');
                cookieBanner.classList.remove('show');
            });

            // Inicializar animaciones de scroll (AOS)
            AOS.init({
                duration: 800,
                once: true,
                offset: 50,
                easing: 'ease-out'
            });

            // Scroll suave para todos los enlaces internos
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href');
                    const targetElement = document.querySelector(targetId);
                    
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 50,
                            behavior: 'smooth'
                        });
                    }

                    // Cerrar popup si se hace clic en el CTA
                    if (this.id === 'exit-popup-cta') {
                        document.getElementById('exit-popup').classList.remove('active');
                    }
                });
            });

            // --- EXIT INTENT POPUP ---
            let popupShown = false;
            let timeOnPage = 0;
            
            // Contador de tiempo en página
            setInterval(() => { timeOnPage++; }, 1000);

            document.addEventListener('mouseleave', function(e) {
                // Aparece si: sale por arriba, no se ha mostrado, no ha sido descartado Y lleva +15 segundos
                if (e.clientY < 0 && !popupShown && !localStorage.getItem('popup-dismissed') && timeOnPage >= 15) {
                    document.getElementById('exit-popup').classList.add('active');
                    popupShown = true;
                }
            });

            document.querySelector('.exit-popup-close').addEventListener('click', function() {
                document.getElementById('exit-popup').classList.remove('active');
                localStorage.setItem('popup-dismissed', 'true');
            });

            // --- WHATSAPP DYNAMIC BUBBLE ---
            setTimeout(() => {
                const bubble = document.getElementById('whatsapp-bubble');
                if (bubble) bubble.style.display = 'block';
            }, 6000); // Aparece a los 6 segundos

            // --- MOBILE MENU BEHAVIOR (Auto-close on click) ---
            const navLinks = document.querySelectorAll('.navbar-nav .nav-link, .nav-cta');
            const menuCollapse = document.getElementById('navbarNav');

            navLinks.forEach(link => {
                link.addEventListener('click', function() {
                    if (menuCollapse.classList.contains('show')) {
                        const bsCollapse = new bootstrap.Collapse(menuCollapse);
                        bsCollapse.hide();
                    }
                });
            });


        });
    </script>



    <?php wp_footer(); ?>
</body>
</html>
