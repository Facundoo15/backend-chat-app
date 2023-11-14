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

    public static function autenticarUsuario($email, $password)
    {
        $conexion = DATABASE::crearInstancia();
        $sql = "SELECT * FROM usuarios WHERE email = '{$email}' AND password = '{$password}'";
        $consulta = $conexion->prepare($sql);
        $consulta->execute();
        $result = $consulta->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public static function buscarUsuario($id_unique)
    {
        $conexion = DATABASE::crearInstancia();
        $sql = "SELECT * FROM usuarios WHERE id_unique = {$id_unique}";
        $consulta = $conexion->prepare($sql);
        $consulta->execute();
        $result = $consulta->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public static function listarUsuarios($id_unique)
    {
        $conexion = DATABASE::crearInstancia();
        $sql = "SELECT * FROM usuarios WHERE id_unique != {$id_unique} ";
        $consulta = $conexion->prepare($sql);
        $consulta->execute();
        $result = $consulta->fetchAll();
        return $result;
    }

    public static function buscarPorNombreApellido($iniciales)
    {
        $conexion = DATABASE::crearInstancia();
        $sql = "SELECT * FROM usuarios WHERE nombre LIKE '%{$iniciales}%' OR apellidos LIKE '%{$iniciales}%'";
        $consulta = $conexion->prepare($sql);
        $consulta->execute();
        $result = $consulta->fetchAll();
        return $result;
    }

    public static function enviarMensaje($outgoing_id, $incoming_id, $message)
    {
        $conexion = DATABASE::crearInstancia();
        $sql = "INSERT INTO mensajes (incoming_msg_id, outgoing_msg_id, mensaje) VALUES ({$incoming_id}, {$outgoing_id}, '{$message}')";
        $consulta = $conexion->prepare($sql);
        $result = $consulta->execute();
        return $result;
    }

    public static function obtenerChat($outgoing_msg_id, $incoming_msg_id)
    {
        $conexion = DATABASE::crearInstancia();
        $sql = "SELECT * FROM mensajes 
        LEFT JOIN usuarios ON usuarios.id_unique = mensajes.outgoing_msg_id
        WHERE (outgoing_msg_id = {$outgoing_msg_id} AND incoming_msg_id = {$incoming_msg_id}) OR (outgoing_msg_id = {$incoming_msg_id} AND incoming_msg_id = {$outgoing_msg_id}) ORDER BY id_mensaje";
        $consulta = $conexion->prepare($sql);
        $consulta->execute();
        $result = $consulta->fetchAll();
        return $result;
    }

}


?>