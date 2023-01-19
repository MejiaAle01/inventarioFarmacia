<?php

namespace App\Controllers;

use App\Models\UserModel;

class Forms extends BaseController {
    public function validarUsuario() {
        $model = new UserModel();

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            if (isset($_POST['user']) && isset($_POST['password'])) {
                $usuario = $_POST['user'];
                //2da forma: $usuario = $this->request->getPost('user');
                $contra = $_POST['password'];

                $exec = $model->validarUser(['usuario' => $usuario]);
                if (count($exec) > 0 && password_verify($contra, $exec[0]['password'])) {
                    $_SESSION['usuario']     = $exec[0]['usuario'];
                    $_SESSION['nombre']      = $exec[0]['nombre'];
                    $_SESSION['tipousuario'] = $exec[0]['tipo_usuario'];

                    switch ($_SESSION['tipousuario']) {
                        case "Administrador":
                            echo 
                                '<script>
                                    alert("Iniciando sesión...");
                                    window.location.assign("'.base_url('indexAdmin').'");
                                </script>'
                            ;
                            break;
                        case "Empleado":
                            echo 
                                '<script>
                                    alert("Iniciando sesión...");
                                    window.location.assign("'.base_url().'");
                                </script>'
                            ;
                            break;
                        case "Usuario":
                            echo 
                                '<script>
                                    alert("Iniciando sesión...");
                                    window.location.assign("'.base_url().'");
                                </script>'
                            ;
                            break;
                    }
                } else {
                    echo 
                        '<script>
                            alert("Usuario y contraseña incorrectos!");
                            window.history.go(-1);
                        </script>'
                    ;
                }
            } else {
                echo 
                    '<script>
                        alert("Contraseña incorrecta!");
                        window.history.go(-1);
                    </script>'
                ;
            }
        }
    }

    public function registroUsuario() {
        
        $model = new UserModel();

        $name = $_POST['nombre'];
        $ape = $_POST['apellido'];
        $user = $_POST['user'];
        $pass = $_POST['password'];
        $correo = $_POST['email'];
        $tipoUsuario = $_POST['tipousuario'];

        $pwd_hash = password_hash($pass, PASSWORD_DEFAULT);

        $datosUser = [
            'nombre' => $name,
            'apellido' => $ape,
            'usuario' => $user,
            'password' => $pwd_hash,
            'correo' => $correo,
            'tipo_usuario' => $tipoUsuario
        ];

        $model->insertUser($datosUser);
    }

    public function cerrarSesion() {
        session_start();

        session_destroy();

        echo 
            '<script>
                alert("Cerrando sesión...");
                window.location.href = "'.base_url().'";
            </script>'
        ;
    }
}