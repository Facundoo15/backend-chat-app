<?php

include_once "api_usuarios.php";
session_start();

$outgoing_msg_id = $_SESSION["id_unique"];
$usuarios = API_USUARIO::listarUsuarios($_SESSION['id_unique']);
$result = "";

if (count($usuarios) == 0) {
    $result = "No hay usuarios registrados";
} else if (count($usuarios) > 0) {
    include "data.php";
}

echo $result;


?>