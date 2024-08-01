<?php

require_once 'C:/xampp/htdocs/Nazaret_Gold/vendor/autoload.php';

class Conexion{
    public function conectar(){
        try {
            $servidor = "127.0.0.1";
            $baseDatos = "nazaret_gold";
            $puerto = "27017";

            $cadenaConexoion = "mongodb://" .
                                $servidor . ":" .
                                $puerto . "/" . 
                                $baseDatos;
            $cliente = new MongoDB\Client($cadenaConexoion);
            return $cliente->selectDatabase($baseDatos);
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

}
