<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model {
    public function insertUser($datosUser) {

        /*$name = $_POST['nombre'];
        $ape = $_POST['apellido'];
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $correo = $_POST['email'];

        $pwd_hash = password_hash($pass, PASSWORD_DEFAULT);

        $query = 'INSERT INTO users (nombre, apellido, usuario, pass, correo) VALUES (?, ?, ?, ?, ?)';
        $exec = $db->query($query, [$datosUser]);
        if (!$exec) {
            $message = '<script> alert("Error al registrar el usuario"); <script>';
            return $message;
        } else {
            $message = '<script> alert("Usuario registrado correctamente"); <script>';
            return redirect()->route('Register');
        }*/

        $users = $this->db->table('users');
        $exec = $users->insert($datosUser);
        if (!$exec) {
            echo '<script>
                    alert("Error al registrar el usuario!");
                    window.history.go(-1);
                </script>'
            ;
        } else {
            echo 
                '<script>
                    alert("Usuario registrado correctamente!");
                    window.location.href = "'.base_url('/Register').'";
                </script>'
            ;
        }

        $this->db->close();
    }

    public function validarUser($validarUser) {
        $verifyUser = $this->db->table('users');
        $verifyUser->where($validarUser);
        return $verifyUser->get()->getResultArray();
        //$query = $validarUser->get();
        /*$verifyUser->select();
        $verifyUser->from('users');
        $verifyUser->where('usuario', $validarUser);
        $query = $validarUser->get();*/

        /*if (password_verify($verifyUser, $validarUser["pass"])) {
            $_SESSION["usuario"] = $rowData['Usuario'];
            $_SESSION["nombre"] = $rowData['Nombre'];
            
            switch ($_SESSION["tipousuario"]) {
                case "Administrador":
                    echo
                        '<script>
                            alert("Iniciando sesión...");
                            window.location.assign("../roles/admin/index_admin.php");
                        </script>'
                    ;
                break;
                case "Empleado":
                    echo 
                        '<script>
                            alert("Iniciando sesión...");
                            window.location.assign("../roles/empleado/index_empleados.php");
                        </script>'
                    ;
                break;
                case "Usuario":
                    echo
                        '<script>
                            alert("Iniciando sesión...");
                            window.location.assign("../roles/usuario/index_user.php");
                        </script>'
                    ;
                break;
            }
        } else {
            echo 
                '<script>
                    alert("Usuario o contraseña incorrectos!");
                    window.history.go(-1);
                </script>'
            ;
        }*/
    }
}