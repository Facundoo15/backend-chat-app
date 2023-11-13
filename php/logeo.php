<?php

include_once "api_usuarios.php";
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

if (!empty($email) && !empty($password)) {
    $usuario = API_USUARIO::autenticarUsuario($email, $password);
    if ($usuario != null) {
        $_SESSION['id_unique'] = $usuario['id_unique'];
        echo "success";
    } else {
        echo "Correo o contraseña inválidos";
    }
} else {
    echo "Campos incompletos";
}

?>