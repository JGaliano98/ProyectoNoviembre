<?php

class Conexion {
    private static $conexion=null;

    public static function AbreConexion(){

        if (Conexion::$conexion==null){
            $conexion= new PDO("mysql:host=localhost;dbname=autoescuela","root","root");
        }

        return $conexion;
    }

}

?>
