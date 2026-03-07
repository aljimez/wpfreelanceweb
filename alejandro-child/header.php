<?php
/**
 * The header for our theme
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <header class="site-header">
        <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm">
            <div class="container">
                <a class="navbar-brand logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">ALEJANDRO<span>.DEV</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto align-items-center">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo esc_url( home_url( '/#servicios' ) ); ?>">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo esc_url( home_url( '/#portfolio' ) ); ?>">Proyectos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo esc_url( home_url( '/#metodo' ) ); ?>">Metodología</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo esc_url( home_url( '/#precios' ) ); ?>">Precios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo esc_url( home_url( '/#testimonios' ) ); ?>">Testimonios</a>
                        </li>
                        <li class="nav-item ms-lg-3">
                            <a class="btn btn-dark nav-cta py-2 px-4 shadow-sm" href="<?php echo esc_url( home_url( '/#contacto' ) ); ?>">Solicitar Presupuesto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div id="content" class="site-content">
