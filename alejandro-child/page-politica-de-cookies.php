<?php
/**
 * Template Name: Cookies Page
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Política de Cookies - Alejandro Freelancer</title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/front-page.css">
    <style>
        .legal-content {
            padding: 180px 0 100px;
            max-width: 800px;
            margin: 0 auto;
        }
        .legal-content h1 {
            margin-bottom: 2rem;
            font-size: 2.5rem;
        }
        .legal-content h2 {
            margin: 2rem 0 1rem;
            font-size: 1.5rem;
        }
        .legal-content p {
            margin-bottom: 1.2rem;
            color: var(--text-dark);
        }
        .legal-content ul {
            margin-bottom: 1.2rem;
            padding-left: 1.5rem;
        }
    </style>
</head>
<body <?php body_class(); ?>>
    <header class="site-header">
        <div class="container">
            <a href="<?php echo home_url(); ?>" class="logo">ALEJANDRO<span>.DEV</span></a>
            <nav class="main-navigation">
                <ul>
                    <li><a href="<?php echo home_url(); ?>">Volver al Inicio</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container">
        <article class="legal-content">
            <h1>Política de Cookies</h1>
            
            <p>Este sitio web utiliza cookies propias y de terceros para ofrecerle una mejor experiencia y servicio. Al navegar o utilizar nuestros servicios el usuario acepta el uso que hacemos de las cookies.</p>

            <h2>1. ¿Qué es una cookie?</h2>
            <p>Las cookies son pequeños ficheros que se descargan en su dispositivo al acceder a determinadas páginas web. Permiten a una página web, entre otras cosas, almacenar y recuperar información sobre los hábitos de navegación de un usuario o de su equipo.</p>

            <h2>2. Tipos de cookies utilizadas</h2>
            <ul>
                <li><strong>Cookies Técnicas:</strong> Son aquellas necesarias para el funcionamiento del sitio web (por ejemplo, el banner de cookies).</li>
                <li><strong>Cookies de Análisis:</strong> Permiten cuantificar el número de usuarios y realizar la medición y análisis estadístico de la utilización que hacen los usuarios del servicio ofertado.</li>
            </ul>

            <h2>3. Gestión de cookies</h2>
            <p>Usted puede bloquear o eliminar las cookies instaladas en su equipo mediante la configuración de las opciones del navegador instalado en su ordenador:</p>
            <ul>
                <li>Google Chrome</li>
                <li>Mozilla Firefox</li>
                <li>Internet Explorer/Edge</li>
                <li>Safari</li>
            </ul>
            <p>Tenga en cuenta que si bloquea las cookies técnicas, es posible que algunas funciones del sitio web dejen de estar operativas.</p>
        </article>
    </main>

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

    <?php wp_footer(); ?>
</body>
</html>
