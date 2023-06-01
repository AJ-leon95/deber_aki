<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deber AKI</title>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</head>
<body>
<br>
</head>

<body>
    <!-- hacemos para el encabesado -->
    <header>
        <!-- aqui creo el navbar -->
        <div class="container"><!-- esta clase nos permite usar las 12 filas de boostrap -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <div>
                        <!-- <img src="" alt=""  style="width: 10px ; height: 10 px; "> -->
                        <a class="navbar-brand" href="index.html"></a>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0"><!-- 1.permite visualizar la barra 2.(me hace referencaia al inicio)el margin es automatico 
                        y si le ponemos (ms hace referencia al start) -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Empleados
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="<?php echo site_url("/Empleados/index") ?>">Listado</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li> <!-- LINIA DE DIVIVION -->
                                    <li><a class="dropdown-item" href="<?php echo site_url("/Empleados/nuevo") ?>">Nuevo</a></li>
                                  
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Clientes
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="<?php echo site_url("/Clientes/index") ?>">Listado</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li> <!-- LINIA DE DIVIVION -->
                                    <li><a class="dropdown-item" href="<?php echo site_url("Clientes/nuevo") ?>">Nuevo</a></li>
                                  
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Productos
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="html.html">Listado</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li> <!-- LINIA DE DIVIVION -->
                                    <li><a class="dropdown-item" href="php.html">Nuevo</a></li>
                                  
                                </ul>
                            </li>
                            
                        </ul>

                    </div>
                </div>
            </nav>
        </div>
    </header>
