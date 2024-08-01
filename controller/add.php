<?php session_start();

include '../class/connection.php';
include '../class/crud.php';

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

$Crud = new Crud();
$respuesta = $Crud -> insertData($datos);

if ($respuesta ->getInsertedId() > 0) {
    $_SESSION['message_crud'] = 'insert';
    header ('location: ../index.php');
} else {
    echo 'Error al registrar los datos: '. $respuesta -> getError();
}
