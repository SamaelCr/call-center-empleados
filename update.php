<?php

    include("con_db.php");

    $id=$_POST['id'];
    $nombrenuevo = $_POST['nombre'];
    $apellidonuevo = $_POST['apellido'];
    $cedula = $_POST['cedula'];

    $actualizar = "UPDATE datos SET nombre='$nombrenuevo', apellido='$apellidonuevo', cedula ='$cedula' WHERE id ='$id'";
    $resultado = mysqli_query($conex,$actualizar);

    if($resultado)
        {
            echo "<strong>El registro ID ".$_POST['id']." con exito</strong>. <br>";
        } else {
            echo "No se pudo actualizar el registro. <br>";
        }
?>