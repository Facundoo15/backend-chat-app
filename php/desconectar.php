<?php
// Porción de código para cerrar la sesión del programa
session_start();

if(isset($_SESSION['id_unique'])){
    include_once "api_usuarios.php";

    $logout_id = $_GET['logout_id'];
    if(isset($logout_id)){
        $status = "Desconectado";
        $result = API_USUARIO::actualizarEstado($status, $logout_id);
        if($result){
            session_unset();
            session_destroy();
            header("location: ../login.php");
        }
    }else{
        header('location: ../usuarios.php');
    }

}else{
    header('location: ../login.php');
}

?>