
<?php
    require_once 'C:/xampp/htdocs/Nazaret_Gold/class/connection.php'; 

class Crud extends Conexion{
    public function showData() {
        try {
            $conexion = parent::conectar();
            $collection = $conexion -> users;
            $datos = $collection -> find();
            return $datos;

        } catch (\Throwable $th) {

            return $th -> getMessage();
        }

    }

    public function getData($id) {
        try {
            $conexion = parent::conectar();
            $collection = $conexion -> users;
            $datos = $collection -> findOne(['_id' => new MongoDB\BSON\ObjectId($id)]);
            return $datos;
            
        }catch (\Throwable $th) {

            return $th -> getMessage();
        }

    }

    public function insertData($datos) {
        try {
            $conexion = parent::conectar();
            $collection = $conexion -> users;
            $resultado = $collection -> insertOne($datos);
            return $resultado;

        } catch (\Throwable $th) {
            return $th -> getMessage();
        }
    }

    public function updateData($id, $datos) {
        try {
            $conexion = parent::conectar();
            $collection = $conexion -> users;
            $datos = $collection -> updateOne(
                ['_id' => new MongoDB\BSON\ObjectId($id)],
                ['$set' => $datos]
            );
            return $datos;
            
        }catch (\Throwable $th) {
            return $th -> getMessage();
        }
    }

    public function deleteData($id) {
        try {
            $conexion = parent::conectar();
            $collection = $conexion -> users;
            $datos = $collection -> deleteOne(['_id' => new MongoDB\BSON\ObjectId($id)]);
            return $datos;
            
        }catch (\Throwable $th) {
            return $th -> getMessage();
    
        }
    }

    public function messageCrud($mensaje) {
        $msg = '';
        if($mensaje=='insert'){
            $msg = 'swal("Excelente", "Usuario agregado con exito", "success");';
        }else if($mensaje=='update'){
            $msg = 'swal("Excelente", "Usuario actualizado con exito", "success");';
        }else if($mensaje=='delete'){
            $msg = 'swal("Excelente", "Usuario eliminado con exito", "warning");';
        }
        return $msg;
    }
}