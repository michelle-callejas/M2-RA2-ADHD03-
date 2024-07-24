<?php
include_once('../clases/Cliente.php');

        $cliente = new Cliente();
        
        $cliente->nombre = $_POST['txtNombre'];
        $cliente->apellido = $_POST['txtApellido'];
        $cliente->telefono = $_POST['txtTelefono'];
        $cliente->direccion = $_POST['txtDireccion'];
        $cliente->nit = $_POST['txtNit'];
        echo $cliente->verDatos();
 

?>
