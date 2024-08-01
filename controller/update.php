<?php session_start();

include '../class/connection.php';
include '../class/crud.php';

$Crud = new Crud();
$id = $_POST['id'];


$datos = array(
    
    'Nombres' => $_POST['Nombres'],
    'Apellidos' => $_POST['Apellidos'],
    'Identificacion' => $_POST['Identificacion'],
    'Telefono' => $_POST['Telefono'],
    'Fecha_Nacimiento' => $_POST['Nacimiento'],
    'Direccion' => $_POST['Direccion'],
    'Fecha_Registro' => $_POST['Registro'],
    'Archivo' => $_POST['Archivo']
    
);

$respuesta = $Crud -> updateData($id, $datos);

if($respuesta ->getModifiedCount() > 0 || $respuesta ->getMatchedCount() > 0){
    $_SESSION['message_crud'] = 'update';
    header('location:../index.php');
}else{
    echo 'Error al actualizar los datos: '. $respuesta->getError();
}

