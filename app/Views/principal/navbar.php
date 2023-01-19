<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Inicio | Farmacias Dr. Simi </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="<?=base_url(); ?>/public/assets/css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
</head>
<body style="font-family: 'Lato', sans-serif;">
    <header>
        <nav class="navbar is-transparent">
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
                            <a href="<?=base_url();?>/signIn" class="button is-link is-inverted is-rounded">
                                <strong> Iniciar sesión </strong>
                            </a>
                            <a href="<?=base_url();?>/register" class="button is-link is-inverted is-rounded">
                                <strong> Registrarse </strong>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>