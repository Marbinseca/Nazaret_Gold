<?php include "./header.php"; ?>

<div class="card mt-4 mx-1">
    <div class="card-body">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="p-2">Agregar nuevo usuario</h2>
                    <hr>

                    <form action="./controller/add.php" method="POST">

                        <div class="mb-3">
                            <label for="control1" class="form-label">Nombres</label>
                            <input type="text" class="form-control" id="Nombres" name="Nombres" require>
                        </div>

                        <div class="mb-3">
                            <label for="control2" class="form-label">Apellidos</label>
                            <input type="text" class="form-control" id="Apellidos" name="Apellidos" require>
                        </div>

                        <div class="mb-3">
                            <label for="control3" class="form-label">Identificacion</label>
                            <input type="number" class="form-control" id="Identificacion" name="Identificacion" require>
                        </div>

                        <div class="mb-3">
                            <label for="control4" class="form-label">Telefono</label>
                            <input type="phone" class="form-control" id="Telefono" name="Telefono" require>
                        </div>

                        <div class="mb-3">
                            <label for="control5" class="form-label">Fecha Nacimiento</label>
                            <input type="date" class="form-control" id="Nacimiento" name="Nacimiento" require>
                        </div>


                        <div class="mb-3">
                            <label for="control6" class="form-label">Direccion</label>
                            <input type="text" class="form-control" id="Direccion" name="Direccion" require>
                        </div>

                        <div class="mb-3">
                            <label for="control7" class="form-label">Fecha Registro</label>
                            <input type="date" class="form-control" id="Registro" name="Registro" require>
                        </div>

                        <div class="mb-3">
                            <label for="control8" class="form-label">Archivo</label>
                            <input class="form-control" type="file" id="Archivo" name="Archivo" require multiple>
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="btn btn-success me-md-2"><i class="fa-solid fa-box-archive"></i> Agregar</button>
                            <a class="btn btn-secondary" type="button" href="./index.php">Cancelar</a>
                        </div>

                    </form>



                </div>
            </div>
        </div>
    </div>
</div>





<?php include "./footer.php"; ?>