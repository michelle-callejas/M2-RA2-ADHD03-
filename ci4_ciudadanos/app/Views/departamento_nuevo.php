<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Departamento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body class="bg-info">

    <div class="container">



        <div class="jumbotron jumbotron-fluid animate__animated animate__wobble">
            <div class="container">
                <nav class="navbar navbar-expand-lg bg-body-tertiary border  border-dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Ciudadanía</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url('ver_ciudadanos'); ?>">Ciudadanos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url('ver_regiones'); ?>">Regiones</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="<?php echo base_url('ver_departamentos'); ?>">Departamentos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url('ver_municipios'); ?>">Municipios</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url('ver_niveles'); ?>">Niveles
                                        Académicos</a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </nav><br><br>


                <h1>Nuevo Departamento</h1><br>
                <form action="agregar_departamento" method="post">
                    <div class="mb-8">
                        <label for="txtId" class="form-label">Código de departamento</label>
                        <input type="number" id="txtId" name="txtId" class="form-control"
                            placeholder="Ingrese el código de departamento">
                    </div>

                    <div class="mb-8">
                        <label for="txtNombre" class="form-label">Nombre del departamento</label>
                        <input type="text" id="txtNombre" class="form-control" name="txtNombre"
                            placeholder="Ingrese el nombre">
                    </div>

                    <div class="mb-8">
                        <label for="txtCodRegion" class="form-label">Código de región</label>
                        <input type="number" id="txtCodRegion" class="form-control" name="txtCodRegion"
                            placeholder="Ingrese su código de región">
                    </div>
                    <br><br>

                    <input type="submit" id="btnEnviar" name="btnEnviar" class="btn btn-dark" value="Enviar">

                </form>
            </div>
        </div>



    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>