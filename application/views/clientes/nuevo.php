<br><br><br>
<div class="container">
    <div class="card">
        <center>
            <h1><b>Formulario nuevo Cliente</b></h1>
        </center>
        <div class="card-body">
            <form action="<?php echo site_url("/Clientes/guardarCli") ?>" method="post">
                <div class="row justify-content-center align-items-center g-2">

                    <div class="col-4">
                        <div class="mb-3">
                            <label for="primer_apellido_cli" class="form-label">Primer Apellido</label>
                            <input type="text" class="form-control" name="primer_apellido_cli" id="primer_apellido_cli" aria-describedby="helpId" placeholder="">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="segundo_apellido_cli" class="form-label">Segundo Apellido</label>
                            <input type="text" class="form-control" name="segundo_apellido_cli" id="segundo_apellido_cli" aria-describedby="helpId" placeholder="">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="nombres_cli" class="form-label">Nombres</label>
                            <input type="text" class="form-control" name="nombres_cli" id="nombres_cli" aria-describedby="helpId" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center align-items-center g-2">
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="fecha_nacimiento_cli" class="form-label">Fecha de nacimiento</label>
                            <input type="date" class="form-control" name="fecha_nacimiento_cli" id="fecha_nacimiento_cli" aria-describedby="helpId" placeholder="">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="cedula" class="form-label">Cedula</label>
                            <input type="text" class="form-control" name="cedula" id="cedula" aria-describedby="helpId" placeholder="">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="saldo_cli" class="form-label">saldo del cliente</label>
                            <input type="text" class="form-control" name="saldo_cli" id="saldo_cli" aria-describedby="helpId" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center align-items-center g-2">
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="cuidad_cli" class="form-label">Cuidad</label>
                            <input type="text" class="form-control" name="cuidad_cli" id="cuidad_cli" aria-describedby="helpId" placeholder="">
                        </div>
                    </div>

                </div>
                <center>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <a name="" id="" class="btn btn-dark" href="<?php echo site_url("/Clientes/index") ?>" role="button">Cancelar</a>
                </center>
            </form>
        </div>
    </div>

</div>