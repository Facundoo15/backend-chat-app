<?php

foreach ($usuarios as $usuario) {
    $result .= '<a href="chat.php?id_usuario='.$usuario['id_unique'].'">
    <div class="content">
        <img src="php/img/' . $usuario['img'] . '" alt="">
        <div class="details">
            <span>' . $usuario['nombre'] . " " . $usuario['apellidos'] . '</span>
            <p>Este es un mensaje</p>
        </div>
    </div>

    <div class="status-dot"><i class="fa fa-circle"></i></div>
</a>';
}

?>