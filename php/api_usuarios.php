<?php

include_once "config.php";

class API_USUARIO
{

    public static function buscarEmail($email)
    {

        $conexion = DATABASE::crearInstancia();
        $sql = "SELECT email FROM usuarios WHERE email = '{$email}'";
        $consulta = $conexion->prepare($sql);
        $consulta->execute();
        $result = $consulta->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public static function registrarUsuario($random_id, $nombre, $apellidos, $email, $password, $img, $status)
    {
        $conexion = DATABASE::crearInstancia();
        $sql = "INSERT INTO usuarios(id_unique, nombre,apellidos,email,password,img,status) VALUES ({$random_id}, '{$nombre}','{$apellidos}','{$email}','{$password}','{$img}','{$status}')";
        $consulta = $conexion->prepare($sql);
        $result = $consulta->execute();
        return $result;
    }

    public static function listarEmails($email)
    {
        $conexion = DATABASE::crearInstancia();
        $sql = "SELECT * FROM usuarios WHERE email = '{$email}'";
        $consulta = $conexion->prepare($sql);
        $consulta->execute();
        return $consulta->fetchAll();
    }


}


?>