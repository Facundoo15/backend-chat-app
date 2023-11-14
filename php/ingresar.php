<?php

// Código para validar el registro del usuario

include_once "api_usuarios.php";

session_start();


//Obtienen los inputs
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$password = $_POST['password'];


//Verifican que no estén vacios
if (!empty($nombre) && !empty($apellidos) && !empty($email) && !empty($password)) {

    //Valida que sea un email correcto
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailResult = API_USUARIO::buscarEmail($email); // Busca para ver si ya está registrado o no
        if ($emailResult != null) {
            echo "¡Este correo ya está registrado!";
        } else {
            if (isset($_FILES['perfil'])) { // Se le asigna un nombre a la imagen
                $img_name = $_FILES['perfil']['name'];
                $img_type = $_FILES['perfil']['type'];
                $tmp_name = $_FILES['perfil']['tmp_name'];
                $img_explode = explode('.', $img_name);
                $img_ext = end($img_explode);
                $extensions = ['png', 'jpeg', 'jpg']; // Formato permitido de la imagen
                if (in_array($img_ext, $extensions)) { // Se registra el usuario
                    $time = time();
                    $new_img_name = $time . $img_name;
                    if (move_uploaded_file($tmp_name, "img/" . $new_img_name)) {
                        $status = "Activo ahora";
                        $random_id = rand(time(), 10000000);
                        $result = API_USUARIO::registrarUsuario($random_id, $nombre, $apellidos, $email, $password, $new_img_name, $status);
                        if ($result != null) {
                            $result = API_USUARIO::listarEmails($email);
                            if ($result != null) {
                                $_SESSION['id_unique'] = $result[0]['id_unique'];
                                echo "success";
                            }
                        }
                    }
                } else {
                    echo "Selecciona imagen con PNG - JPEG - JPG";
                }

            } else {
                echo "¡Selecciona una imagen para tu perfil!";
            }
        }
    } else {
        echo "Ingresa un email correcto!";
    }
} else {
    echo "Campos incompletos";
}


?>