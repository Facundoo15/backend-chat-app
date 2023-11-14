<?php

include_once "api_usuarios.php";

session_start();


if (isset($_SESSION['id_unique'])) {
    $outgoing_id = $_POST['outgoing_id'];
    $incoming_id = $_POST['incoming_id'];
    $output = "";
    $mensajes = API_USUARIO::obtenerChat($outgoing_id, $incoming_id);
    if($mensajes != null){
        foreach ($mensajes as $mensaje) {
            if($mensaje['outgoing_msg_id'] == $outgoing_id){
                $output .= '<div class="chat outgoing">
                                <div class="details">
                                    <p>'.$mensaje['mensaje'].'</p>
                                </div>
                            </div>';
            }else{
                $output .= '  <div class="chat incoming">
                                <img src="php/img/'.$mensaje['img'].'" alt="img.jpg">
                                    <div class="details">
                                        <p>'.$mensaje['mensaje'].'</p>
                                    </div>
                            </div>';
            }
        }
        echo $output;
    }


} else {
    header('../login.php');
}



?>