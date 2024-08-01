<?php session_start();

include '../class/connection.php';
include '../class/crud.php';

$crud = new Crud();
$id = $_POST['id'];

$respuesta = $crud -> deleteData($id);

if($respuesta ->getDeletedCount() > 0){
    $_SESSION['message_crud'] = 'delete';
    header('location: ../index.php');
}else{
    echo 'Error al eliminar los datos: '. $respuesta -> getError();  // En caso de error, muestra el error en consola.
}

?>