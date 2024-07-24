<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-success p-2 text-white bg-opacity-75">
    <div class="container">
        <h1>Modificar datos del cliente</h1>
        <br><br>
        <form action="<?= base_url('modificar_cliente') ?>" method="post">
            <div class="mb-3">
                <br><label for="txtId" class="form-label">Código de cliente</label>
                <br><input type="number" class="form-control" id="txtId" name="txtId" value="<?= $datos['cliente_id']; ?>"
                    readonly>
            </div>
            <div class="mb-3">
                <br><label for="txtApellido" class="form-label">Apellido</label>
                <br><input type="text" class="form-control" id="txtApellido" name="txtApellido"
                    value="<?= $datos['apellido']; ?>">
            </div>
            <div class="mb-3">
                <br><label for="txtNombre" class="form-label">Nombre</label>
                <br><input type="text" class="form-control" id="txtNombre" name="txtNombre"
                    value="<?= $datos['nombre']; ?>">
            </div>
            <div class="mb-3">
                <br><label for="txtCorreo" class="form-label">Correo electrónico</label>
                <br><input type="email" class="form-control" id="txtCorreo" name="txtCorreo"
                    value="<?= $datos['correo_electronico']; ?>">
            </div>
            <div class="mb-3">
                <br><label for="txtCalleAvenida" class="form-label">Calle o avenida</label>
                <br><input type="text" class="form-control" id="txtCalleAvenida" name="txtCalleAvenida"
                    value="<?= $datos['calle_avenida']; ?>">
            </div>

            <div class="mb-3">
                <br><label for="txtNoCasa" class="form-label">Número de casa</label>
                <br><input type="text" class="form-control" id="txtNoCasa" name="txtNoCasa"
                    value="<?= $datos['no_casa']; ?>">
            </div>

            <div class="mb-3">
                <br><label for="txtZona" class="form-label">Zona</label>
                <br><input type="text" class="form-control" id="txtZona" name="txtZona"
                    value="<?= $datos['zona']; ?>">
            </div>

            <input type="submit" id="btnEnviar" name="btnEnviar" class="btn btn-dark" value="Enviar">

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>