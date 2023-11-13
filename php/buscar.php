<?php

include_once "api_usuarios.php";

$searchTerm = $_POST['searchTerm'];

$usuarios = API_USUARIO::buscarPorNombreApellido($searchTerm);
$result = "";

if ($usuarios != null) {
    include "data.php";
} else {
    $result .= "Usuario no encontrado o existente!";
}
echo $result;

?>