<?php
include_once('../clases/Administracion.php');


        $admin = new Administracion();
        
        // Asignar valores a los atributos
        $admin->asignarNombre($_POST['txtNombre']);
        $admin->apellido = $_POST['txtApellido'];
        $admin->direccion = $_POST['txtDireccion'];
        $admin->telefono = $_POST['txtTelefono'];
        $admin->codigo = $_POST['txtCodigo'];
        $admin->nivelAcademico = $_POST['txtNivelAcademico'];
        $admin->sueldoBase = $_POST['txtSueldoBase'];
        $admin->bonificacion =250;
        
        echo "<br>Sueldo líquido: " . $admin->calcularSueldoLiquido();
        echo $admin->verDatos();
   
?>
