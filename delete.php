<?php 
include "./class/connection.php";
include "./class/crud.php";
include "./header.php"; 

// Obtener los datos del usuario a eliminar por el id ubicado en el query string
$crud = new Crud();
$id = $_POST['id'];

$datos = $crud->getData($id);

?>



<div class="card mt-4 mx-1">
    <div class="card-body delete">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="p-2">Eliminar usuario</h2>
                    <hr>

                    <table class="table table-sm">
                        <thead>
                            
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Identificacion</th>
                            <th>Telefono</th>
                            <th>Fecha Nacimiento</th>
                            <th>Direccion</th>
                            <th>Fecha Registro</th>
                            <th>Archivo</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td> <?php echo $datos ->Nombres ?></td>
                                <td> <?php echo $datos ->Apellidos ?></td>
                                <td> <?php echo $datos ->Identificacion ?></td>
                                <td> <?php echo $datos ->Telefono ?></td>
                                <td> <?php echo $datos ->Fecha_Nacimiento ?></td>
                                <td> <?php echo $datos ->Direccion ?></td>
                                <td> <?php echo $datos ->Fecha_Registro ?></td>
                                <td> <?php echo $datos ->Archivo ?></td>
                                
                            </tr>
                        </tbody>
                    </table>
                    <hr>
                    <div class="alert alert-danger" role="alert">
                        <p>¿Estas seguro de eliminar este usuario? No se puede revertir este proceso!</p>
                    </div>
                    <form action="./controller/delete.php" method="POST">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-danger me-md-2"><i class="fa-solid fa-user-slash"></i> Eliminar</button>
                        <input type="hidden" name="id" value="<?php echo $datos -> _id ?>" />
                        <a class="btn btn-secondary" type="button" href="./index.php">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>





<?php include "./footer.php"; ?>