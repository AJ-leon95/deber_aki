<br><br><br>

<div class="container">
    <div class="card">
        <center>
            <h1><b>FORMULARIO NUEVO EMPLEADO</b></h1>
        </center>
        <div class="card-body">
            <form action="<?php echo site_url("/Empleados/guardarEmpleados") ?>" method="post">
    
                <div class="row">
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="cedula_emp" class="form-label">Cedula:</label>
                            <input type="text" class="form-control" name="cedula_emp" id="cedula_emp" aria-describedby="helpId" placeholder="">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="primer_apellido_emp" class="form-label">Primer Apellido</label>
                            <input type="text" class="form-control" name="primer_apellido_emp" id="primer_apellido_emp" aria-describedby="helpId" placeholder="">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="segundo_apellido_emp" class="form-label">Segundo Apellido</label>
                            <input type="text" class="form-control" name="segundo_apellido_emp" id="segundo_apellido_emp" aria-describedby="helpId" placeholder="">
                        </div>
                    </div>
                </div>
    
                <div class="row">
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="cargo_emp" class="form-label">Cargo:</label>
                            <input type="text" class="form-control" name="cargo_emp" id="cargo_emp" aria-describedby="helpId" placeholder="">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="fecha_nacimiento_emp" class="form-label">fecha de nacimiento</label>
                            <input type="date" class="form-control" name="fecha_nacimiento_emp" id="fecha_nacimiento_emp" aria-describedby="helpId" placeholder="">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="correo_emp" class="form-label">Correo</label>
                            <input type="text" class="form-control" name="correo_emp" id="correo_emp" aria-describedby="helpId" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <center>
                        <button type="submit" class="btn btn-primary" >Guardar</button>
                        <a name="" id="" class="btn btn-dark" href="<?php echo site_url("/Empleados/index") ?>" role="button">Cancelar</a>
                    </center>
                </div>
    
            </form>
        </div>
    </div>
</div>