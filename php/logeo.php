<?php

include_once "api_usuarios.php";
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

if (!empty($email) && !empty($password)) {
    $usuario = API_USUARIO::autenticarUsuario($email, $password);
    if ($usuario != null) {
        $status = "Activo ahora";
        $id_unique = $usuario['id_unique'];
        $result = API_USUARIO::actualizarEstado($status, $usuario['id_unique']);
        if ($result != null) {
            $_SESSION['id_unique'] = $usuario['id_unique'];
            echo "success";
        }

    } else {
        echo "Correo o contraseña inválidos";
    }
} else {
    echo "Campos incompletos";
}

?>