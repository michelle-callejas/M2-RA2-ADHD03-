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

<body class="bg bg-success p-2 text-dark bg-opacity-25">
    <div class="container">
        <h1>Modificar región</h1>
        <br><br>
        <form action="<?= base_url('modificar_region')?>" method="post">
            <div class="mb-3">
                <label for="txtCodRegion" class="form-label">Código de la región</label>
                <input type="number" id="txtCodRegion" name="txtCodRegion" class="form-control"
                    placeholder="Ingrese el código de la región" value="<?=$datos['cod_region']; ?>" readonly>
            </div>

            <div class="mb-8">
                <label for="txtNombre" class="form-label">Nombre de la Región</label>
                <input type="text" id="txtNombre" class="form-control" name="txtNombre" value="<?=$datos['nombre']; ?>" >
            </div>

            <div class="mb-8">
                <label for="txtDescripcion" class="form-label">Descripción</label>
                <input type="text" id="txtDescripcion" class="form-control" name="txtDescripcion" value="<?=$datos['descripcion']; ?>">
            </div>
            <br><br>

            <input type="submit" id="btnEnviar" name="btnEnviar" class="btn btn-dark  btn-outline-info" value="Guardar cambios">
    </div>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>