<!DOCTYPE html>
<html>
<head>
	<title>Ver lista de empleados</title>
	<meta charset="utf-8">
	<!-- Normalize V8.0.1 -->
	<link rel="stylesheet" href="./css/normalize.css">

	<!-- Bootstrap V4.3 -->
	<link rel="stylesheet" href="./css/bootstrap.min.css">

	<!-- Bootstrap Material Design V4.0 -->
	<link rel="stylesheet" href="./css/bootstrap-material-design.min.css">

    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
    	<!-- Main container -->
	<main class="full-box main-container">
		<!-- Nav lateral -->
		<section class="full-box nav-lateral">
			<div class="full-box nav-lateral-bg show-nav-lateral"></div>
			<div class="full-box nav-lateral-content">
				<figure class="full-box nav-lateral-avatar">
					<i class="far fa-times-circle show-nav-lateral"></i>
					<img src="./assets/avatar/Avatar.png" class="img-fluid" alt="Avatar">
					<figcaption class="roboto-medium text-center">
						Administrador <br>
						<!-- <small class="roboto-condensed-light">Web Developer</small> -->
					</figcaption>
				</figure>
				<div class="full-box nav-lateral-bar"></div>
				<nav class="full-box nav-lateral-menu">
					<ul>
						<!-- <li>
							<a href="home.html"><i class="fab fa-dashcube fa-fw"></i> &nbsp; Dashboard</a>
						</li> -->

						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-users fa-fw"></i> &nbsp; Empleados <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="agregar.php"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar Empleado</a>
								</li>
								<li>
									<a href="list.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de empleados</a>
								</li>
								<!-- <li>
									<a href="client-search.html"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar empleados</a>
								</li> -->
							</ul>
						</li>

						<!-- <li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-pallet fa-fw"></i> &nbsp; Items <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="item-new.html"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar item</a>
								</li>
								<li>
									<a href="item-list.html"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de items</a>
								</li>
								<li>
									<a href="item-search.html"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar item</a>
								</li>
							</ul>
						</li>

				
						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas  fa-user-secret fa-fw"></i> &nbsp; Usuarios <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="user-new.html"><i class="fas fa-plus fa-fw"></i> &nbsp; Nuevo usuario</a>
								</li>
								<li>
									<a href="user-list.html"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de usuarios</a>
								</li>
								<li>
									<a href="user-search.html"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar usuario</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="company.html"><i class="fas fa-store-alt fa-fw"></i> &nbsp; Empresa</a>
						</li> -->
					</ul>
				</nav>
			</div>
		</section>

		<!-- Page content -->
		<section class="full-box page-content">
			<nav class="full-box navbar-info">
				<a href="#" class="float-left show-nav-lateral">
					<i class="fas fa-exchange-alt"></i>
				</a>
				<a href="user-update.html">
					<i class="fas fa-user-cog"></i>
				</a>
				<a href="#" class="btn-exit-system">
					<i class="fas fa-power-off"></i>
				</a>
			</nav>

			<!-- Page header -->
			<div class="full-box page-header">
				<h3 class="text-left">
					<i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE EMPLEADOS
				</h3>
				<!-- <p class="text-justify">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit nostrum rerum animi natus beatae ex. Culpa blanditiis tempore amet alias placeat, obcaecati quaerat ullam, sunt est, odio aut veniam ratione.
				</p> -->
			</div>

			<div class="container-fluid">
				<ul class="full-box list-unstyled page-nav-tabs">
					<li>
						<a href="agregar.php"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR EMPLEADO</a>
					</li>
					<li>
						<a class="active" href="list.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE EMPLEADOS</a>
					</li>
					<!-- <li>
						<a href="client-search.html"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR EMPLEADO</a>
					</li> -->
				</ul>	
			</div>
			
			<!-- Content here-->
			<div class="container-fluid">
				<div class="table-responsive">
                    <table class="table table-dark table-sm">
                        <thead>
                            <tr class="text-center roboto-medium">
                                <th>#</th>
                                <th>NOMBRE</th>
                                <th>APELLIDO</th>
                                <th>CEDULA</th>
                                <th>CARGO</th>
								<th>TELEFONO</th>
								<th>ESTADO LABORAL</th>
								<th>FECHA DE INGRESO</th>
								<th>FECHA DE EGRESO</th>
								<th>DEPARTAMENTO</th>
								<th>DIRECCION</th>
                                <th>ACTUALIZAR</th>
								<th>MOSTRAR</th>
                            </tr>
                        </thead>
                        <?php
                        $inc = include("con_db.php");
                        if ($inc) {
                            $consulta = "SELECT * FROM datos";
                            $resultado = mysqli_query($conex,$consulta);
                            if ($resultado) {
                                while($row = $resultado->fetch_array()){
                                    $id = $row['id'];
                                    $nombre = $row['nombre'];
                                    $apellido = $row['apellido'];
                                    $cedula = $row['cedula'];
                                    $cargo = $row['cargo'];
                                    $telefono = $row['telefono'];
                                    $estado_laboral = $row['estado_laboral'];
                                    $fecha_ing = $row['fecha_ing'];
                                    $fecha_eg = $row['fecha_eg'];
                                    $departamento = $row['departamento'];
                                    $direccion = $row['direccion']
                                    ?>
                                    <tbody>
                                        <tr class="text-center" >
                                            <td><?php echo $id; ?></td>
                                            <td><?php echo $nombre; ?></td>
                                            <td><?php echo $apellido; ?></td>
                                            <td><?php echo $cedula; ?></td>
                                            <td><?php echo $cargo; ?></td>
                                            <td><?php echo $telefono; ?></td>
											<td><?php echo $estado_laboral; ?></td>
											<td><?php echo $fecha_ing; ?></td>
											<td><?php echo $fecha_eg; ?></td>
											<td><?php echo $departamento; ?></td>
											<td><?php echo $direccion; ?></td>
                                            
                                            <td><a href="actualizar.php?id=<?php echo $row['id'] ?>"class="btn btn-info">Editar</a></td>
                                            <!-- <td><a href="delete.php?id=<?php echo $row['id'] ?>"class="btn btn-danger">eliminar</a></td> -->
											<td><a href="mostrar.php?id=<?php echo $row['id'] ?>"class="btn btn-success">Mostrar</a></td>
                                        </tr>

                                    <?php
                                }
                            }
                        }
                    ?>
                
                    </table>
				</div>
                <?php 
                    include("registrar.php");
                ?>
				<nav aria-label="Page navigation example">
					<ul class="pagination justify-content-center">
						<li class="page-item disabled">
							<a class="page-link" href="#" tabindex="-1">Previous</a>
						</li>
						<li class="page-item"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item">
							<a class="page-link" href="#">Next</a>
						</li>
					</ul>
				</nav>
			</div>

		</section>
	</main>
	
	
	<!--=============================================
	=            Include JavaScript files           =
	==============================================-->
	<!-- jQuery V3.4.1 -->
	<script src="./js/jquery-3.4.1.min.js" ></script>

	<!-- popper -->
	<script src="./js/popper.min.js" ></script>

	<!-- Bootstrap V4.3 -->
	<script src="./js/bootstrap.min.js" ></script>

	<!-- jQuery Custom Content Scroller V3.1.5 -->
	<script src="./js/jquery.mCustomScrollbar.concat.min.js" ></script>

	<!-- Bootstrap Material Design V4.0 -->
	<script src="./js/bootstrap-material-design.min.js" ></script>
	<script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>

	<script src="./js/main.js" ></script>
</body>
</html>