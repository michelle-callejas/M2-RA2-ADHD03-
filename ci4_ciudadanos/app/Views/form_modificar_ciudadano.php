<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar a un ciudadano</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg bg-success p-2 text-dark bg-opacity-25">
    <div class="container">
        <h1>Modificar datos del ciudadano</h1>
        <br><br>
        <form action="<?= base_url('modificar_ciudadano') ?>" method="post">
            <div class="mb-3">
                <br><label for="txtId" class="form-label">DPI</label>
                <br><input type="number" class="form-control" id="txtId" name="txtId" value="<?= $datos['dpi']; ?>"
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
                <br><label for="txtDireccion" class="form-label">Dirección</label>
                <br><input type="text" class="form-control" id="txtDireccion" name="txtDireccion"
                    value="<?= $datos['direccion']; ?>">
            </div>
            <div class="mb-3">
                <br><label for="txtTelCasa" class="form-label">Teléfono de casa</label>
                <br><input type="number" class="form-control" id="txtTelCasa" name="txtTelCasa"
                    value="<?= $datos['tel_casa']; ?>">
            </div>
            <div class="mb-3">
                <br><label for="txtTelMovil" class="form-label">Teléfono personal</label>
                <br><input type="number" class="form-control" id="txtTelMovil" name="txtTelMovil"
                    value="<?= $datos['tel_movil']; ?>">
            </div>
            <div class="mb-3">
                <br><label for="txtEmail" class="form-label">Email</label>
                <br><input type="email" class="form-control" id="txtEmail" name="txtEmail"
                    value="<?= $datos['email']; ?>">
            </div>
            <div class="mb-3">
                <br><label for="txtFechaNac" class="form-label">Fecha de nacimiento</label>
                <br><input type="text" class="form-control" id="" name="" value="<?= $datos['fechanac']; ?>">
            </div>
            <div class="mb-3">
                <br><label for="txtCodNivel" class="form-label">Cod Nivel Académico</label>
                <br><input type="text" class="form-control" id="txtCodNivel" name="txtCodNivel"
                    value="<?= $datos['cod_nivel_acad']; ?>">
            </div>
            <div class="mb-3">
                <br><label for="txtCodMuni" class="form-label">Cod municipio</label>
                <br><input type="text" class="form-control" id="txtCodMuni" name="txtCodMuni"
                    value="<?= $datos['cod_muni']; ?>">
            </div>
            <div class="mb-3">
                <br><label for="txtContrasena" class="form-label">Contraseña</label>
                <br><input type="text" class="form-control" id="txtContrasena" name="txtContrasena"
                    value="<?= $datos['contra']; ?>">
            </div>

            <input type="submit" id="btnEnviar" name="btnEnviar" class="btn btn-dark" value="Enviar">

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>