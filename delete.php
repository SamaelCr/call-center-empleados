<?php

    include("con_db.php");

    $id_empleado=$_GET['id'];

    $consulta = "DELETE FROM datos WHERE id ='$id_empleado'";
    $resultado = mysqli_query($conex,$consulta);

        if($resultado){
            Header("Location: list.php");
        }
?>