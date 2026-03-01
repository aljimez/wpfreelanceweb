<?php
/**
 * Template Name: Legal Page
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aviso Legal - Alejandro Freelancer</title>
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
            <h1>Aviso Legal</h1>
            
            <h2>1. Datos Identificativos</h2>
            <p>En cumplimiento con el deber de información recogido en artículo 10 de la Ley 34/2002, de 11 de julio, de Servicios de la Sociedad de la Información y del Comercio Electrónico, a continuación se detallan los siguientes datos:</p>
            <ul>
                <li><strong>Titular:</strong> Alejandro Freelancer</li>
                <li><strong>NIF/CIF:</strong> [Tu NIF]</li>
                <li><strong>Domicilio:</strong> [Tu Dirección]</li>
                <li><strong>Correo electrónico:</strong> hola@alejandro.com</li>
            </ul>

            <h2>2. Usuarios</h2>
            <p>El acceso y/o uso de este portal atribuye la condición de USUARIO, que acepta, desde dicho acceso y/o uso, las Condiciones Generales de Uso aquí reflejadas.</p>

            <h2>3. Uso del Portal</h2>
            <p>Este sitio web proporciona el acceso a multitud de informaciones, servicios, programas o datos (en adelante, "los contenidos") en Internet pertenecientes a Alejandro Freelancer.</p>
            
            <h2>4. Propiedad Intelectual e Industrial</h2>
            <p>Alejandro Freelancer por sí o como cesionaria, es titular de todos los derechos de propiedad intelectual e industrial de su página web, así como de los elementos contenidos en la misma.</p>

            <h2>5. Limitación de Responsabilidad</h2>
            <p>Alejandro Freelancer no se hace responsable, en ningún caso, de los daños y perjuicios de cualquier naturaleza que pudieran ocasionar, a título enunciativo: errores u omisiones en los contenidos, falta de disponibilidad del portal o la transmisión de virus o programas maliciosos o lesivos en los contenidos.</p>
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
