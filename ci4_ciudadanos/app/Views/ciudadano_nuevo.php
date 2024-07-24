<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Ciudadano</title>
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


                <h1>Nuevo Ciudadano</h1><br>
                <form action="agregar_ciudadano" method="post">
                    <div class="mb-8">
                        <label for="txtId" class="form-label">No. de DPI</label>
                        <input type="number" id="txtId" name="txtId" class="form-control">
                    </div>

                    <label for="txtApellido" class="form-label">Apellido</label>
                    <input type="text" id="txtApellido" class="form-control" name="txtApellido"
                        placeholder=" Ingrese su apellido">

                    <label for="txtNombre" class="form-label">Nombre</label>
                    <input type="text" id="txtNombre" class="form-control" name="txtNombre"
                        placeholder="Ingrese su nombre">

                    

                    <label for="txtDireccion" class="form-label">Dirección</label>
                    <input type="text" id="txtDireccion" class="form-control" name="txtDireccion"
                        placeholder="Ingrese su dirección">


                    <div class="mb-8">
                        <label for="txtTelCasa" class="form-label">Teléfono de Casa</label>
                        <input type="number" id="txtTelCasa" name="txtTelCasa" class="form-control">
                    </div>
                    <div class="mb-8">
                        <label for="txtTelMovil" class="form-label">Teléfono Móvil</label>
                        <input type="number" id="txtTelMovil" name="txtTelMovil" class="form-control">
                    </div>
                    <div class="mb-8">
                        <label for="txtEmail" class="form-label">Correo electrónico</label>
                        <input type="email" id="txtEmail" name="txtEmail" class="form-control">
                    </div>
                    
                    <div class="mb-8">
                        <label for="txtFechaNac" class="form-label">Fecha de nacimiento</label>
                        <input type="date" id="txtFechaNac" name="txtFechaNac" class="form-control">
                    </div>

                    <div class="mb-8">
                        <label for="txtCodNivel" class="form-label">Código Nivel Académico</label>
                        <input type="number" id="txtCodNivel" name="txtCodNivel" class="form-control">
                    </div>

                    <div class="mb-8">
                        <label for="txtCodMuni" class="form-label">Código Municipio</label>
                        <input type="number" id="txtCodMuni" name="txtCodMuni" class="form-control">
                    </div>
                    <div class="mb-8">
                        <label for="txtContrasena" class="form-label">Contraseña</label>
                        <input type="text" id="txtContrasena" name="txtContrasena" class="form-control">
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