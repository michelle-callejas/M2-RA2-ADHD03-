<?php 
include_once('../clases/Persona.php');

        $persona = new Persona();
        
        $persona->apellido = $_POST['txtApellido'];
        $persona->telefono = $_POST['txtTelefono'];
        $persona->direccion = $_POST['txtDireccion'];
        $persona->asignarNombre($_POST['txtNombre']);
        
        echo "<br>Apellido: " . $persona->apellido;
        echo "<br>Nombre: " . $persona->verNombre();
        echo "<br>" . $persona->nombreCompleto();
        echo "<br>" . $persona->verDatos();
   

?>
