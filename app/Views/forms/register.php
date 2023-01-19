<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Crear cuenta </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
</head>
<body style="font-family: 'Lato', sans-serif;">
    <main>
        <section class="container">
            <div class="columns is-centered mt-6">
                <div class="column is-4 mt-6">
                    <h3 class="is-size-3" align="center"> Crea tu cuenta </h3>
                    <div class="card card-content m-4 p-5 has-background-light">
                        <form action="<?=base_url();?>/Registrar" method="POST" autocomplete="off" id="formulario">
                            <label class="label"> 
                                Nombre
                                <input type="text" name="nombre" id="Nombre" placeholder="Nombre" class="input control is-hovered" required title="Nombre">
                                <span></span>
                            </label>
                            <label class="label mt-3">
                                Apellido
                                <input type="text" name="apellido" id="Apellido" placeholder="Apellido" class="input control is-hovered" required title="Apellido">
                                <span></span>
                            </label>
                            <label class="label mt-3">
                                Usuario
                                <input type="text" name="user" id="Usuario" placeholder="Usuario" class="input control is-hovered" required title="Usuario">
                                <span></span>
                            </label>
                            <label class="label mt-3">
                                Contraseña
                                <input type="password" name="password" id="Contra" placeholder="Contraseña" class="input control is-hovered" required title="Contraseña">
                                <span></span>
                            </label>
                            <label class="label mt-3">
                                Correo
                                <input type="email" name="email" id="Correo" placeholder="Email" class="input control is-hovered" required title="Correo">
                                <span></span>
                            </label>
                            <input type="hidden" name="tipousuario" value="Usuario">
                            <div class="has-text-centered">
                                <input type="submit" value="Crear cuenta" class="button is-link is-outlined is-rounded mt-4">
                            </div>
                            <br>
                            <footer class="card-footer is-justify-content-center">
                                <p>
                                    Ya tienes una cuenta <a href="<?=base_url();?>/signIn"> , <b> Inicie sesión. </b></a>
                                </p>
                            </footer>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="<?=base_url();?>/public/assets/js/validarForm.js"></script>
</body>
</html>