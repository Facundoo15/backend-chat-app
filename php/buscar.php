<?php

session_start();

include_once "api_usuarios.php";

$outgoing_msg_id = $_SESSION['id_unique'];
$searchTerm = $_POST['searchTerm'];

$usuarios = API_USUARIO::buscarPorNombreApellido($searchTerm, $outgoing_msg_id);
$result = "";

if ($usuarios != null) {
    include "data.php";
} else {
    $result .= "Usuario no encontrado o existente!";
}
echo $result;

?>