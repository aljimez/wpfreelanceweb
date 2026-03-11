<?php
/**
 * Template Name: Landing LinkedIn ADS - Auditoría Gratuita
 * Description: Landing page de alta conversión para tráfico de pago proveniente de LinkedIn Ads.
 *              Sin navbar ni footer con links para evitar fugas de conversión.
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Academia Lenta = Alumnos Perdidos | Diagnóstico Gratuito</title>
    <meta name="description" content="Analizo gratis tu campus virtual y te digo exactamente por qué estás perdiendo matrículas. Sin compromiso. Respuesta en 24h.">
    <meta name="robots" content="noindex, nofollow"><!-- Landing de pago: no indexar -->

    <?php wp_head(); ?>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;700;800;900&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">

    <style>
        :root {
            --primary: #ffb800;
            --dark: #0f172a;
            --subtle: #334155;
            --border: #cbd5e1;
            --text-on-dark: #e2e8f0;
            --text-muted-dark: #94a3b8;
        }
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: 'Inter', sans-serif;
            color: var(--dark);
            background: #fff;
            overflow-x: hidden;
        }
        h1, h2, h3, .font-heading { font-family: 'Outfit', sans-serif; font-weight: 800; }

        /* ---- HEADER MÍNIMO ---- */
        .lp-header {
            background: #fff;
            border-bottom: 2px solid var(--border);
            padding: 16px 0;
        }
        .lp-brand { font-family: 'Outfit', sans-serif; font-size: 1.4rem; font-weight: 900; }
        .lp-brand span { color: var(--primary); }

        /* ---- HERO ---- */
        .lp-hero {
            background: linear-gradient(135deg, #0a1628 0%, #1a2a45 60%, #0a1628 100%);
            color: #fff;
            padding: 80px 0 60px;
            position: relative;
            overflow: hidden;
        }
        .lp-hero::before {
            content: '';
            position: absolute;
            top: -100px; right: -100px;
            width: 500px; height: 500px;
            background: var(--primary);
            opacity: 0.08;
            border-radius: 50%;
            filter: blur(80px);
        }
        .ad-origin-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(255,255,255,0.12);
            border: 1px solid rgba(255,255,255,0.25);
            color: #e2e8f0;
            padding: 8px 16px;
            border-radius: 50px;
            font-size: 0.82rem;
            font-weight: 600;
            margin-bottom: 24px;
            backdrop-filter: blur(10px);
        }
        .lp-hero h1 {
            font-size: clamp(2rem, 5vw, 3.6rem);
            line-height: 1.1;
            margin-bottom: 20px;
            color: #ffffff;
        }
        .lp-hero h1 em {
            font-style: normal;
            color: var(--primary);
        }
        .lp-hero .lead {
            color: #c8d6e8 !important;
        }
        .lp-hero .stat-label {
            color: #94a3b8;
        }

        /* ---- FORM CARD ---- */
        .form-card {
            background: #fff;
            border-radius: 20px;
            padding: 40px 36px;
            box-shadow: 0 30px 80px rgba(0,0,0,0.25);
            border-top: 6px solid var(--primary);
        }
        .form-card .form-control {
            background: #f8fafc;
            border: 1px solid var(--border);
            border-radius: 10px;
            padding: 14px 16px;
            font-size: 0.95rem;
            transition: all 0.2s;
        }
        .form-card .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(255,184,0,0.15);
        }
        .btn-cta {
            background: var(--primary);
            color: #000;
            border: none;
            font-weight: 900;
            font-size: 1rem;
            padding: 18px 28px;
            border-radius: 12px;
            width: 100%;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            transition: all 0.2s;
            font-family: 'Outfit', sans-serif;
        }
        .btn-cta:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(255,184,0,0.4);
            background: #e6a600;
        }
        .scarcity-bar {
            background: rgba(255,184,0,0.12);
            border: 1px solid rgba(255,184,0,0.5);
            border-radius: 10px;
            padding: 12px 16px;
            margin-bottom: 24px;
            color: #7a4f00;
        }
        .scarcity-bar .dot {
            width: 10px; height: 10px;
            background: #059669;
            border-radius: 50%;
            animation: pulse 1.5s infinite;
            flex-shrink: 0;
        }

        /* ---- PAIN POINTS SECTION ---- */
        .pain-section {
            background: #f1f5f9;
            padding: 80px 0;
        }
        .pain-section h2, .pain-section h3 { color: #0f172a; }
        .pain-section p { color: #334155; }
        .pain-section .lead { color: #475569 !important; }
        .pain-card {
            background: #fff;
            border-radius: 16px;
            padding: 28px;
            border-left: 4px solid #dc2626;
            box-shadow: 0 4px 20px rgba(0,0,0,0.07);
            height: 100%;
        }
        .pain-card p { color: #374151; }
        .solution-card {
            background: #fff;
            border-radius: 16px;
            padding: 28px;
            border-left: 4px solid #d97706;
            box-shadow: 0 4px 20px rgba(0,0,0,0.07);
            height: 100%;
        }
        .solution-card p { color: #374151; }

        /* ---- SOCIAL PROOF ---- */
        .proof-section { padding: 80px 0; }
        .proof-section h2 { color: #0f172a; }
        .proof-section .text-muted { color: #475569 !important; }
        .proof-section .fst-italic { color: #1e293b !important; font-size: 0.95rem; }
        .stat-number {
            font-family: 'Outfit', sans-serif;
            font-size: 3rem;
            font-weight: 900;
            color: #b45309;
        }
        .bg-light.p-4 { background: #f8fafc !important; border-color: #cbd5e1 !important; }

        /* ---- CTA FINAL ---- */
        .final-cta {
            background: #0a1628;
            color: #fff;
            padding: 80px 0;
        }
        .final-cta h2 { color: #ffffff; }
        .final-cta .lead { color: #c8d6e8 !important; }
        .final-cta small { color: #94a3b8 !important; }

        /* ---- FOOTER MÍNIMO (Solo Legal) ---- */
        .lp-footer {
            background: #e2e8f0;
            padding: 24px 0;
            text-align: center;
            font-size: 0.82rem;
            color: #334155;
        }
        .lp-footer a { color: #1e40af; text-decoration: underline; }
        .lp-footer a:hover { color: #0f172a; }

        @keyframes pulse {
            0%, 100% { transform: scale(1); opacity: 1; }
            50% { transform: scale(1.5); opacity: 0.5; }
        }

        /* ---- STICKY MOBILE CTA ---- */
        .sticky-mobile-cta-lp {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            box-shadow: 0 -5px 20px rgba(0,0,0,0.15);
        }
    </style>
</head>

<body>

    <!-- HEADER MÍNIMO (Solo marca, sin links) -->
    <header class="lp-header">
        <div class="container d-flex align-items-center justify-content-between">
            <p class="lp-brand mb-0">ALEJANDRO<span>.DEV</span></p>
            <p class="mb-0 small text-muted d-none d-md-block">Especialista WordPress para Academias Online</p>
            <a href="#formulario" class="btn btn-sm fw-bold text-dark px-3 py-2 d-none d-md-inline-flex" style="background: var(--primary); border-radius: 8px;">AGENDAR DIAGNÓSTICO</a>
        </div>
    </header>

    <!-- HERO: MENSAJE DIRECTO DEL ANUNCIO -->
    <section class="lp-hero">
        <div class="container">
            <div class="row align-items-center g-5">

                <div class="col-lg-7">
                    <div class="ad-origin-badge">
                        <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6zM2 9h4v12H2z"/><circle cx="4" cy="4" r="2"/></svg>
                        Exclusivo para dueños de academias desde LinkedIn Ads
                    </div>
                    <h1>Tu academia pierde alumnos cada día que <em>no la optimizas</em></h1>
                    <p class="lead mt-4 mb-5" style="color: #c8d6e8; font-size: 1.15rem;">
                        He analizado más de 50 academias online. El 90% tiene problemas técnicos que le están costando entre <strong style="color:#ffffff;">500€ y 3.000€ al mes</strong> en ventas perdidas. ¿Sabes cómo está la tuya?
                    </p>

                    <div class="row g-3 mb-5">
                        <div class="col-sm-4 text-center">
                            <div style="font-size: 2.5rem; font-weight: 900; color: var(--primary); font-family: 'Outfit', sans-serif;">&lt;1s</div>
                            <p class="small stat-label">Tiempo de carga objetivo</p>
                        </div>
                        <div class="col-sm-4 text-center">
                            <div style="font-size: 2.5rem; font-weight: 900; color: var(--primary); font-family: 'Outfit', sans-serif;">99.9%</div>
                            <p class="small stat-label">Uptime garantizado</p>
                        </div>
                        <div class="col-sm-4 text-center">
                            <div style="font-size: 2.5rem; font-weight: 900; color: var(--primary); font-family: 'Outfit', sans-serif;">24h</div>
                            <p class="small stat-label">Respuesta del diagnóstico</p>
                        </div>
                    </div>
                </div>

                <!-- FORMULARIO ARRIBA DEL FOLD -->
                <div class="col-lg-5" id="formulario">
                    <div class="form-card">
                        <div class="scarcity-bar d-flex align-items-center gap-2 mb-4">
                            <div class="dot"></div>
                            <p class="mb-0 small fw-bold">Solo 3 diagnósticos gratuitos disponibles esta semana</p>
                        </div>
                        <h3 class="h5 fw-bold mb-2">Recibe tu Diagnóstico Técnico Gratis</h3>
                        <p class="small text-muted mb-4">Envíame tu URL y te grabo un vídeo de 5 min analizando todos los puntos de fuga de tu academia.</p>

                        <?php
                        // Intentar cargar el formulario de CF7 si está disponible
                        if ( function_exists('wpcf7_contact_form') ) {
                            echo do_shortcode('[contact-form-7 id="your-form-id" title="LinkedIn ADS"]');
                        } else { ?>
                        <form action="#" method="POST" class="needs-validation" novalidate>
                            <div class="mb-3">
                                <input type="text" name="nombre" class="form-control" placeholder="Tu nombre completo" required>
                            </div>
                            <div class="mb-3">
                                <input type="email" name="email" class="form-control" placeholder="Email profesional" required>
                            </div>
                            <div class="mb-3">
                                <input type="url" name="url" class="form-control" placeholder="URL de tu academia (https://...)" required>
                            </div>
                            <div class="mb-4">
                                <select name="problema" class="form-control form-select" required>
                                    <option value="">¿Cuál es tu mayor problema técnico?</option>
                                    <option value="lentitud">Mi web va muy lenta</option>
                                    <option value="caidas">El campus se cae en días de examen</option>
                                    <option value="seguridad">Temo que roben mi contenido</option>
                                    <option value="conversion">Los alumnos no completan el checkout</option>
                                    <option value="otro">Otro problema</option>
                                </select>
                            </div>
                            <button type="submit" class="btn-cta">
                                🎁 QUIERO MI DIAGNÓSTICO GRATIS
                            </button>
                            <p class="text-center text-muted mt-3 mb-0" style="font-size: 0.78rem;">Sin compromiso · Sin spam · Respuesta en 24h hábiles</p>
                            <input type="hidden" name="source" value="linkedin-ads">
                        </form>
                        <?php } ?>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- SECCIÓN DOLOR / SOLUCIÓN -->
    <section class="pain-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-6 fw-bold">¿TE SUENA ALGUNO DE ESTOS PROBLEMAS?</h2>
                <p class="lead text-muted mt-3">Los mismos errores que arruinan la experiencia de tus alumnos y tus ventas.</p>
            </div>

            <div class="row g-4 mb-5">
                <div class="col-md-4">
                    <div class="pain-card">
                        <div class="fs-2 mb-3">🐢</div>
                        <h3 class="h5 fw-bold mb-2">Campus ultra lento</h3>
                        <p class="small text-muted mb-0">Tus alumnos esperan 8-10 segundos para que cargue un vídeo. El 53% abandona si tarda más de 3 segundos.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pain-card">
                        <div class="fs-2 mb-3">💀</div>
                        <h3 class="h5 fw-bold mb-2">Caídas el día del examen</h3>
                        <p class="small text-muted mb-0">Tu servidor no aguanta el pico de tráfico cuando más te la juegas. Reputación destruida y devoluciones.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pain-card">
                        <div class="fs-2 mb-3">🔓</div>
                        <h3 class="h5 fw-bold mb-2">Contenido desprotegido</h3>
                        <p class="small text-muted mb-0">Tus vídeos y PDFs están expuestos. Cualquiera puede descargarlo y compartirlo sin pagar.</p>
                    </div>
                </div>
            </div>

            <div class="text-center mb-5">
                <h2 class="display-6 fw-bold">LO QUE TIENES CON <span style="color: var(--primary);">ALEJANDRO.DEV</span></h2>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="solution-card">
                        <div class="fs-2 mb-3">⚡</div>
                        <h3 class="h5 fw-bold mb-2">Carga en menos de 1 segundo</h3>
                        <p class="small text-muted mb-0">Código nativo sin constructores pesados. PageSpeed 90+/100 garantizado. Tus alumnos entran y se quedan.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="solution-card">
                        <div class="fs-2 mb-3">🛡️</div>
                        <h3 class="h5 fw-bold mb-2">Guardia técnica 24/7</h3>
                        <p class="small text-muted mb-0">Monitorización proactiva y escalado de servidor en días críticos. Tu campus nunca falla cuando más importa.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="solution-card">
                        <div class="fs-2 mb-3">🔒</div>
                        <h3 class="h5 fw-bold mb-2">Blindaje anti-piratería</h3>
                        <p class="small text-muted mb-0">Ofuscación de enlaces, restricción por dominio con Bunny.net y PDFs protegidos. Tu contenido, solo de tus alumnos.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PRUEBA SOCIAL RÁPIDA -->
    <section class="proof-section" style="background: #fff; border-top: 1px solid var(--border);">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h2 class="fw-bold mb-4">RESULTADOS REALES PARA ACADEMIAS REALES</h2>
                    <div class="row g-3 mb-4">
                        <div class="col-4 text-center">
                            <div class="stat-number">+50</div>
                            <p class="small text-muted">Academias optimizadas</p>
                        </div>
                        <div class="col-4 text-center">
                            <div class="stat-number">99%</div>
                            <p class="small text-muted">Uptime promedio</p>
                        </div>
                        <div class="col-4 text-center">
                            <div class="stat-number">-80%</div>
                            <p class="small text-muted">Tiempo de carga reducido</p>
                        </div>
                    </div>
                    <a href="#formulario" class="btn-cta d-inline-block text-center text-decoration-none" style="max-width: 380px;">QUIERO ESTE RESULTADO</a>
                </div>
                <div class="col-lg-6">
                    <div class="bg-light p-4 rounded-4 border">
                        <p class="fst-italic text-muted mb-3">"Pasamos de tener caídas cada vez que publicábamos un nuevo examen, a cero incidencias en los últimos 8 meses. El día de la última convocatoria tuvimos más de 2.000 conexiones simultáneas sin ningún problema."</p>
                        <div class="d-flex align-items-center gap-3">
                            <div style="width: 42px; height: 42px; background: var(--primary); border-radius: 50%; display:flex; align-items:center; justify-content:center; font-weight:900; font-size: 1.1rem;">M</div>
                            <div>
                                <p class="fw-bold mb-0 small">Marta S.</p>
                                <p class="text-muted mb-0 small">Directora — Academia de Oposiciones</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA FINAL -->
    <section class="final-cta">
        <div class="container text-center">
            <span class="badge bg-primary text-dark fw-bold px-3 py-2 rounded-pill mb-4" style="font-size: 0.8rem;">OFERTA LIMITADA — Solo 3 huecos esta semana</span>
            <h2 class="display-5 fw-bold mb-4" style="color:#ffffff;">¿Cuánto más vas a esperar para saber por qué pierdes matrículas?</h2>
            <p class="lead mb-5" style="color: #c8d6e8; max-width: 600px; margin: 0 auto 2rem;">El diagnóstico es gratis. El coste de no hacerlo, no.</p>
            <a href="#formulario" class="btn-cta d-inline-block text-decoration-none" style="max-width: 420px; font-size: 1.1rem;">
                🎁 QUIERO MI DIAGNÓSTICO GRATUITO
            </a>
            <p class="mt-4 small" style="color: #94a3b8;">Sin compromiso ni permanencia. Respuesta garantizada en 24 horas.</p>
        </div>
    </section>

    <!-- FOOTER MÍNIMO LEGAL -->
    <footer class="lp-footer">
        <div class="container">
            <p class="mb-1">© <?php echo date('Y'); ?> Alejandro Jiménez · ALEJANDRO.DEV · ajimenezal01@gmail.com</p>
            <p class="mb-0">
                <a href="<?php echo esc_url( home_url('/aviso-legal') ); ?>">Aviso Legal</a> ·
                <a href="<?php echo esc_url( home_url('/politica-de-privacidad') ); ?>">Privacidad</a> ·
                <a href="<?php echo esc_url( home_url('/politica-de-cookies') ); ?>">Cookies</a>
            </p>
        </div>
    </footer>

    <!-- Sticky CTA móvil -->
    <div class="sticky-mobile-cta-lp d-lg-none">
        <a href="#formulario" class="d-flex align-items-center justify-content-center py-3 fw-bold bg-primary text-dark text-decoration-none" style="font-family: 'Outfit', sans-serif;">
            🎁 QUIERO MI DIAGNÓSTICO GRATIS
        </a>
    </div>

    <?php wp_footer(); ?>
    <script>
    // Scroll suave al formulario en el mismo tab
    document.querySelectorAll('a[href="#formulario"]').forEach(a => {
        a.addEventListener('click', e => {
            e.preventDefault();
            document.getElementById('formulario').scrollIntoView({ behavior: 'smooth', block: 'center' });
        });
    });
    </script>
</body>
</html>
