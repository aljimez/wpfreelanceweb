<?php
/**
 * Template Name: Privacity Page
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Política de Privacidad - Alejandro Jiménez</title>
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
            <h1>Política de Privacidad</h1>
            
            <p>La presente Política de Privacidad describe cómo se recogen, utilizan y comparten sus datos personales cuando visita este sitio web.</p>

            <h2>1. Responsable del Tratamiento</h2>
            <p><strong>Identidad:</strong> Alejandro Jiménez</p>
            <p><strong>Correo electrónico:</strong> ajimenezal01@gmail.com</p>

            <h2>2. Finalidad del Tratamiento de Datos</h2>
            <p>Tratamos la información que nos facilitan las personas interesadas con el fin de:</p>
            <ul>
                <li>Gestionar las peticiones de información enviadas a través del formulario de contacto.</li>
                <li>Prestar los servicios contratados relacionados con el desarrollo web y formación online.</li>
            </ul>

            <h2>3. Legitimación</h2>
            <p>El tratamiento de sus datos se basa en su consentimiento expreso al rellenar y enviar los formularios de contacto o al contratar nuestros servicios.</p>

            <h2>4. Plazo de Conservación</h2>
            <p>Los datos se conservarán mientras se mantenga la relación comercial o durante los años necesarios para cumplir con las obligaciones legales.</p>

            <h2>5. Destinatarios</h2>
            <p>Sus datos no se cederán a terceros salvo en los casos en que exista una obligación legal o sea necesario para la prestación del servicio.</p>

            <h2>6. Sus Derechos</h2>
            <p>Usted tiene derecho a obtener confirmación sobre si estamos tratando sus datos personales, por tanto tiene derecho a acceder a sus datos personales, rectificar los datos inexactos o solicitar su supresión cuando los datos ya no sean necesarios.</p>
        </article>
    </main>

    <?php get_template_part('front-page/contact-testimonials'); ?>

    <footer class="site-footer" style="padding: 60px 0; text-align: center; border-top: 1px solid var(--border-color); background: var(--bg-alt);">
        <div class="container">
            <p style="font-weight: 700; margin-bottom: 1rem;">ALEJANDRO<span>.DEV</span></p>
            <div class="legal-links" style="margin-bottom: 2rem; display: flex; justify-content: center; gap: 2rem; flex-wrap: wrap;">
                <a href="/aviso-legal" style="text-decoration: none; color: var(--text-light); font-size: 0.85rem;">Aviso Legal</a>
                <a href="/politica-de-privacidad" style="text-decoration: none; color: var(--text-light); font-size: 0.85rem;">Política de Privacidad</a>
                <a href="/politica-de-cookies" style="text-decoration: none; color: var(--text-light); font-size: 0.85rem;">Política de Cookies</a>
            </div>
            <p style="color: var(--text-light); font-size: 0.85rem;">&copy; <?php echo date('Y'); ?> Alejandro Jiménez. Todos los derechos reservados.</p>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>
