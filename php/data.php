<?php

foreach ($usuarios as $usuario) {


    

    $ultimoMensaje = API_USUARIO::ultimoMensaje($usuario['id_unique'], $outgoing_msg_id);
    if($ultimoMensaje != null){
        $out = $ultimoMensaje['mensaje'];
    }else{
        $out = 'No hay último mensaje';
    }
    

    (strlen($out) > 28) ? $msg = substr($out,0,28).'...' : $msg = $out;
    if($outgoing_msg_id == $out){
        $you = "Tu: ";
    }else{
        $you = "";
    }

    if($usuario['status'] == "Desconectado"){
        $offline = "Desconectado";
    }else{
        $offline = "";
    }


    $result .= '<a href="chat.php?id_usuario='.$usuario['id_unique'].'">
    <div class="content">
        <img src="php/img/' . $usuario['img'] . '" alt="">
        <div class="details">
            <span>' . $usuario['nombre'] . " " . $usuario['apellidos'] . '</span>
            <p>'. $you . $msg .'</p>
        </div>
    </div>

    <div class="status-dot" '.$offline.' ><i class="fa fa-circle"></i></div>
</a>';
}

?>