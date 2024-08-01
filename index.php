<?php session_start();

require_once "./class/crud.php";
require_once "./class/connection.php";  
$crud = new Crud();
$datos = $crud->showData();

$mensaje = '';

if(isset($_SESSION['message_crud'])) {
    $mensaje = $crud -> messageCrud($_SESSION['message_crud']);
    unset($_SESSION['message_crud']);
}

?>

<?php include "./header.php"; ?>

<div class="card mt-4 mx-2">
    <div class="card-body">
        <div class="container">
            <div class="row ">
                <div class="col">
                    <h2>Listado de usuarios
                        <a href="./add.php" class="btn btn-primary float-end"><i class="fa-solid fa-person-circle-plus"></i> Nuevo usuario</a>
                    </h2>
                    <hr>
                    <table class="table table-lg table-hover">
                        <thead class="text-center">
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Identificacion</th>
                            <th>Telefono</th>
                            <th>Fecha Nacimiento</th>
                            <th>Direccion</th>
                            <th>Fecha Registro</th>
                            <th>Archivo</th>
                            <th>Acciones</th>
                        </thead>
                        <tbody>

                        <?php    
                            foreach ($datos as $item) {
                        ?>
                       
                            <div>
                            
                            <td> <?php echo $item -> Nombres ?> </td>
                            <td> <?php echo $item -> Apellidos ?> </td>
                            <td> <?php echo $item -> Identificacion ?> </td>
                            <td> <?php echo $item -> Telefono ?> </td>
                            <td> <?php echo $item -> Fecha_Nacimiento ?> </td>
                            <td> <?php echo $item -> Direccion ?> </td>
                            <td> <?php echo $item -> Fecha_Registro ?> </td>
                            <td> <?php echo $item -> Archivo ?> </td>
                            
                            <td>

                            <div class="d-flex">
                                <form action="./update.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $item -> _id?>" name="id">
                                   <button class="btn btn-warning mx-1"><i class="fa-solid fa-pen-to-square"></i></button>
                                </form>

                                <form action="./delete.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $item -> _id?>" name="id">
                                    <button class="btn btn-danger mx-1" ><i class="fa-solid fa-trash"></i></button>
                                </form>
                            </div>
                            </td>
                            </tr>

                            <?php }  
                            ?>

                        </tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "./footer.php"; ?>

<script>
    let mensaje = <?php echo $mensaje ?>;
</script>