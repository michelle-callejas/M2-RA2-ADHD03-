<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regiones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body class="bg-danger-subtle">
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
                            <a class="nav-link" href="<?php echo base_url('ver_departamentos'); ?>">Departamentos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('ver_municipios'); ?>">Municipios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('ver_niveles'); ?>">Niveles Académicos</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
        <br><br>
        <h1>Regiones</h1>
        <br><br>
        <a href="nueva_region" class="btn btn-dark">Nueva Región</a>
        <br><br>
        <table class="table table-border table-striped">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Opciones</th>

                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($datos as $region):
                    ?>
                    <tr>
                        <td> <?php echo $region['cod_region']; ?></td>
                        <td> <?php echo $region['nombre']; ?></td>
                        <td> <?php echo $region['descripcion']; ?></td>
                        <td>
                            <a href="<?= base_url('buscar_region/').$region['cod_region']?>" class="btn btn-success ">  <i class="bi bi-pencil-square">Actualizar</i></a>
                            <a href="<?= base_url('eliminar_region/').$region['cod_region']?>" class="btn btn-danger "><i class="bi bi-trash">Eliminar</i></a>
                        </td>

                    </tr>
                    <?php
                endforeach
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>