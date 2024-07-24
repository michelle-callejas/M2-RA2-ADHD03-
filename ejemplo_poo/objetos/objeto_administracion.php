<?php
    include_once('../clases/Administracion.php');
    //crear un objeto
    $admin = new Administracion();
    //atributos heredados de persona
    $admin->asignarNombre($_POST['txtNombre']);
    $admin->apellido=$_POST['txtApellido'];
    $admin->direccion=$_POST['txtDireccion'];
    $admin->telefono=$_POST['txtTelefono'];
    //atributos heredados de empleado
    $admin->codigo=$_POST['txtCodigo'];
    $admin->sueldoBase=$_POST['txtSueldoBase'];
    $admin->nivelAcademico=$_POST['txtNivelAcademico'];
    //atributos de la clase
    $admin->bonificacion=$_POST['txtBonificacion'];
    echo "<br>Sueldo liquido:".$admin->calcularSueldoLiquido();
    echo $admin->verDatos();
    

?>