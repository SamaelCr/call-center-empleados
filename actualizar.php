<?php
    include("con_db.php");

    $id=$_GET['id'];

    $consulta = "SELECT * FROM datos WHERE id ='$id'";
    $resultado = mysqli_query($conex,$consulta);

    $row = $resultado->fetch_array();

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar datos</title>
    	<!-- Normalize V8.0.1 -->
	<link rel="stylesheet" href="./css/normalize.css">

    <!-- Bootstrap V4.3 -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">

    <!-- Bootstrap Material Design V4.0 -->
    <link rel="stylesheet" href="./css/bootstrap-material-design.min.css">

    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
  <div class="container mt-5">
    <form action="update.php" method="POST">

        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">

            <input type="text" class="form-control mb-3" placeholder="Nombre" name="nombre" value="<?php echo $row['nombre'] ?>">
            <input type="text" class="form-control mb-3" placeholder="Apellido" name="apellido" value="<?php echo $row['apellido'] ?>">
            <input type="text" class="form-control mb-3" placeholder="Cargo" name="cargo" value="<?php echo $row['cargo'] ?>">
            <input type="text" class="form-control mb-3" placeholder="Estado Laboral" name="estado_laboral" value="<?php echo $row['estado_laboral'] ?>">
            <input type="text" class="form-control mb-3" placeholder="Departamento" name="departamento" value="<?php echo $row['departamento'] ?>">
            <input type="text" class="form-control mb-3" placeholder="Direccion" name="direccion" value="<?php echo $row['direccion'] ?>">
            <label for="cliente_direccion" class="bmd-label-floating">Fecha de egreso</label>
            <input type="date" class="form-control mb-3" placeholder="Fecha de Egresado" name="fecha_eg" value="<?php echo $row['fecha_eg'] ?>">
        
        <input type="submit" value="actualizar" class="form-control mb-3">
    </form>
  </div> 
</body>
</html>