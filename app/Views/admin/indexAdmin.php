<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Inicio </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
</head>
<body style="font-family: 'Lato', sans-serif;">
    <header>
        <nav class="container is-fluid navbar is-light">
            <div class="navbar-brand">
                <div class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarExampleTransparent">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div id="navbarExampleTransparent" class="navbar-menu">
                <div class="navbar-end">
                    <div class="navbar-item">
                        <div class="buttons">
                            <div class="dropdown has-text-left">
                                <div class="dropdown-trigger">
                                    <button class="button is-rounded" aria-haspopup="true" aria-controls="dropdown-menu3">
                                        <i class="bi-person-circle"></i>
                                        <span class="icon is-small">
                                            <i class="bi-caret-down-fill" aria-hidden="true"></i>
                                        </span>
                                    </button>
                                </div>
                                <div class="dropdown-menu" id="dropdown-menu3" role="menu">
                                    <div class="dropdown-content">
                                        <span class="dropdown-item"> Alejandro Mejía </span>
                                        <hr class="dropdown-divider">
                                        <a href="<?=base_url();?>/cerrarSesion" class="dropdown-item">
                                            <i class="bi-door-open"></i>
                                            <b> Cerrar Sesión </b>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="navbar-item">
                                <button id="lightDarkMode" class="button is-rounded is-inverted" title="Modo Claro/Oscuro">
                                    <i class="bi-sun"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="container">
            <div class="columns m-6 is-centered">
                <div class="column has-text-centered">
                    <a href="#" class="has-text-info">
                        <figure class="image is-96x96 is-inline-block">
                            <i class="bi-person-fill-gear is-size-1"></i>
                        </figure>
                        <br>
                        <span class="is-size-5"> Usuarios </span>
                    </a>
                </div>
                <div class="column has-text-centered">
                    <a href="#" class="has-text-info">
                        <figure class="image is-96x96 is-inline-block">
                            <i class="bi-box2 is-size-1"></i>
                        </figure>
                        <br>
                        <span class="is-size-5"> Productos </span>
                    </a>
                </div>
                <div class="column has-text-centered">
                    <a href="#" class="has-text-info">
                        <figure class="image is-96x96 is-inline-block">
                            <i class="bi-receipt is-size-1"></i>
                        </figure>
                        <br>
                        <span class="is-size-5"> Facturas </span>
                    </a>
                </div>
                <div class="column has-text-centered">
                    <a href="#" class="has-text-info">
                        <figure class="image is-96x96 is-inline-block">
                            <i class="bi-person-lines-fill is-size-1"></i>
                        </figure>
                        <br>
                        <span class="is-size-5"> Proveedores </span>
                    </a>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer has-background-light">
        <hr class="is-divider has-background-dark">
        <div class="content has-text-centered">
            <p> ©<?=date("Y");?> Creado por Alejandro Mejia. Derechos reservados. </p>
            <p> Powered by <b> Codeigniter. </b></p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <script src="<?php echo base_url();?>/public/assets/js/menu.js"></script>
    <script src="<?php echo base_url();?>/public/assets/js/dropdown-menu.js"></script>
    <script src="<?php echo base_url();?>/public/assets/js/dark-lightMode.js"></script>
</body>
</html>