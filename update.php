<?php 
include "./class/connection.php";
include "./class/crud.php";
include "./header.php"; 

$crud = new Crud();
$id = $_POST['id'];
$datos = $crud->getData($id);
$idM = $datos -> _id;
?>

<div class="card mt-4 mx-1">
    <div class="card-body">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="p-2">Actualizar usuario</h2>
                    <hr>

                    <form action="./controller/update.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $idM ?>" name="id">
                        <div class="mb-3">
                            <label for="control1" class="form-label">Nombres</label>
                            <input type="text" class="form-control" id="Nombres" name="Nombres" value="<?php echo $datos->Nombres ?>" require>
                        </div>

                        <div class="mb-3">
                            <label for="control2" class="form-label">Apellidos</label>
                            <input type="text" class="form-control" id="Apellidos" name="Apellidos" value="<?php echo $datos->Apellidos ?>" require>
                        </div>

                        <div class="mb-3">
                            <label for="control3" class="form-label">Identificacion</label>
                            <input type="number" class="form-control" id="Identificacion" name="Identificacion" value="<?php echo $datos->Identificacion ?>" require>
                        </div>

                        <div class="mb-3">
                            <label for="control4" class="form-label">Telefono</label>
                            <input type="phone" class="form-control" id="Telefono" name="Telefono" value="<?php echo $datos->Telefono ?>" require>
                        </div>

                        <div class="mb-3">
                            <label for="control5" class="form-label">Fecha Nacimiento</label>
                            <input type="date" class="form-control" id="Nacimiento" name="Nacimiento" value="<?php echo $datos->Fecha_Nacimiento ?>" require>
                        </div>


                        <div class="mb-3">
                            <label for="control6" class="form-label">Dirrecion</label>
                            <input type="city" class="form-control" id="Direccion" name="Direccion" value="<?php echo $datos->Direccion ?>" require>
                        </div>

                        <div class="mb-3">
                            <label for="control7" class="form-label">Fecha Registro</label>
                            <input type="date" class="form-control" id="Registro" name="Registro" value="<?php echo $datos->Fecha_Registro ?>" require>
                        </div>

                        <div class="mb-3">
                            <label for="control8" class="form-label">Archivo</label>
                            <input class="form-control" type="file" id="Archivo" name="Archivo" value="<?php echo $datos->Archivo ?>" require multiple>
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="btn btn-warning me-md-2"><i class="fa-solid fa-square-pen"></i> Actualizar</button>
                            <a class="btn btn-secondary" type="button" href="./index.php">Cancelar</a>
                        </div>

                    </form>



                </div>
            </div>
        </div>
    </div>
</div>





<?php include "./footer.php"; ?>