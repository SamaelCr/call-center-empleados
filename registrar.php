<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['apellido']) >= 1 &&
        strlen($_POST['cedula']) >= 1 && 
        strlen($_POST['cargo']) >= 1 && 
        strlen($_POST['telefono']) >= 1 &&
        strlen($_POST['estado_laboral']) >= 1 &&
        strlen($_POST['fecha_ing']) >= 1 && 
     //    strlen($_POST['fecha_eg']) >= 1 &&
        strlen($_POST['departamento']) >= 1 &&
        strlen($_POST['direccion']) >= 1) {
        $nombre = trim($_POST['nombre']);
        $apellido = trim($_POST['apellido']);
        $cedula = trim($_POST['cedula']);
        $cargo = trim($_POST['cargo']);
        $telefono = trim($_POST['telefono']);
        $estado_laboral = trim($_POST['estado_laboral']);
        $fecha_ing = trim($_POST['fecha_ing']);
     //    $fecha_eg = trim($_POST['fecha_eg']);
        $departamento = trim($_POST['departamento']);
        $direccion = trim($_POST['direccion']);

     //    $consulta = "INSERT INTO datos(nombre, email, fecha_reg) VALUES ('$name', '$email', '$fechareg')";
        $consulta  = "INSERT INTO datos(nombre, apellido, cedula, cargo, telefono, estado_laboral, fecha_ing, departamento, direccion) VALUES ('$nombre', '$apellido', '$cedula', '$cargo', '$telefono', '$estado_laboral', '$fecha_ing', '$departamento', '$direccion')";

        $resultado = mysqli_query($conex,$consulta);
        if ($resultado) {
             ?>
             <h3 class="ok">Te has inscrito correctamente!</h3>
             <?php
        } else {
            ?>
             <h3 class="ok">Ups ha ocurrido un error</h3>
             <?php
        }
     }
}

?>