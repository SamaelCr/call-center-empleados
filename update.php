<?php

    include("con_db.php");

    $id=$_POST['id'];
    $nombrenuevo = $_POST['nombre'];
    $apellidonuevo = $_POST['apellido'];
    $nuevoCargo = $_POST['cargo'];
    $nuevoEstado_laboral = $_POST['estado_laboral'];
    $nuevDepartamento = $_POST['departamento'];
    $nuevoDireccion = $_POST['direccion'];
    $fecha_eg = $_POST['fecha_eg'];

    $actualizar = "UPDATE datos SET nombre='$nombrenuevo', apellido='$apellidonuevo', cargo='$nuevoCargo', estado_laboral='$nuevoEstado_laboral', departamento='$nuevDepartamento', direccion ='$nuevoDireccion', fecha_eg='$fecha_eg' WHERE id ='$id'";
    $resultado = mysqli_query($conex,$actualizar);

    if($resultado)
        {
            // echo "<strong>El registro ID ".$_POST['id']." con exito</strong>. <br>";
            header("Location: list.php");
        } else {
            echo "No se pudo actualizar el registro. <br>";
        }
?>