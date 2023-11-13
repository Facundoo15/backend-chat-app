<?php

include_once "api_usuarios.php";

session_start();

if (isset($_SESSION['id_unique'])) {
    $outgoing_id = $_POST['outgoing_id'];
    $incoming_id = $_POST['incoming_id'];
    $message = $_POST['message'];
    if (!empty($message)) {
        $resultado = API_USUARIO::enviarMensaje($outgoing_id, $incoming_id, $message);
    }
} else {
    header('../login.php');
}



?>