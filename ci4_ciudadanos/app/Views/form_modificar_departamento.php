<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar departamento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg bg-success p-2 text-dark bg-opacity-25">
    <div class="container">
        <h1>Modificar datos del departamento</h1>
        <br><br>
        <form action="<?= base_url('modificar_departamento') ?>" method="post">
            <div class="mb-3">
                <br><label for="txtCodDepto" class="form-label">Código de departamento</label>
                <br><input type="number" class="form-control" id="txtCodDepto" name="txtCodDepto" value="<?= $datos['cod_depto']; ?>"
                    readonly>
            </div>
            <div class="mb-3">
                <br><label for="txtNombre" class="form-label">Nombre del departamento</label>
                <br><input type="text" class="form-control" id="txtNombre" name="txtNombre"
                    value="<?= $datos['nombre_depto']; ?>">
            </div>
            <div class="mb-3">
                <br><label for="txtCodRegion" class="form-label">Código de la región</label>
                <br><input type="text" class="form-control" id="txtCodRegion" name="txtCodRegion"
                    value="<?= $datos['cod_region']; ?>">
            </div>

            <input type="submit" id="btnEnviar" name="btnEnviar" class="btn btn-dark" value="Enviar">

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>