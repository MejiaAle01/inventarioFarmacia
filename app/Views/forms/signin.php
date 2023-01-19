<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Iniciar sesión </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
</head>
<body style="font-family: 'Lato', sans-serif;">
    <main>
        <section class="container">
            <div class="columns is-centered mt-6">
                <div class="column is-4 mt-6">
                    <h3 class="is-size-3" align="center"> Iniciar Sesión </h3>
                    <div class="card card-content m-4 p-5 has-background-light">
                        <form action="<?=base_url();?>/validar" method="POST" id="validForm">
                            <label class="label">
                                Usuario
                                <input type="text" name="user" id="Usuario" placeholder="Usuario" class="input control is-hovered" required title="Usuario">
                            </label>
                            <label class="label mt-4">
                                Contraseña
                                <input type="password" name="password" id="Contra" placeholder="Contraseña" class="input control is-hovered" required title="Contraseña" maxlength="12">
                            </label>
                            <div class="has-text-centered">
                                <input type="submit" value="Iniciar Sesión" class="button is-link is-outlined is-rounded mt-4">
                            </div>
                            <br>
                            <footer class="card-footer is-justify-content-center">
                                <p>
                                    Eres nuevo <a href="<?=base_url();?>/register"> , <b> Crea una cuenta. </b></a>
                                </p>
                            </footer>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>