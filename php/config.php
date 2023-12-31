<?php
// Clase para la configuración de la base de datos
class DATABASE
{

    // SE IMPLEMENTO EL PATRON DE DISEÑO SINGLETON
    // PARA MANEJAR LA INSTANCIA DE LA CONEXIÓN A LA BD 

    public static $instancia = null;
    public static function crearInstancia()
    {
        if (!isset(self::$instancia)) {
            $opciones[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            self::$instancia = new PDO('mysql:host=localhost;dbname=chatapp', 'root', 'root1', $opciones);
        }
        return self::$instancia; // RETORNAMOS LA INSTANCIA
    }

}