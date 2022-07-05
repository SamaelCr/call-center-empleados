<!DOCTYPE html>
<html>
<head>
	<title>Registrar empleado</title>
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
									<a href="agregar.php"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar Empleados</a>
								</li>
								<li>
									<a href="list.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de empleados</a>
								</li>
								<!-- <li>
									<a href="client-search.html"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar Empleados</a>
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
							<a href="#" class="nav-btn-submenu"><i class="fas fa-file-invoice-dollar fa-fw"></i> &nbsp; Préstamos <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="reservation-new.html"><i class="fas fa-plus fa-fw"></i> &nbsp; Nuevo préstamo</a>
								</li>
								<li>
									<a href="reservation-list.html"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de préstamos</a>
								</li>
								<li>
									<a href="reservation-search.html"><i class="fas fa-search-dollar fa-fw"></i> &nbsp; Buscar préstamos</a>
								</li>
								<li>
									<a href="reservation-pending.html"><i class="fas fa-hand-holding-usd fa-fw"></i> &nbsp; Préstamos pendientes</a>
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
					<i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR EMPLEADO
				</h3>
				<!-- <p class="text-justify">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem odit amet asperiores quis minus, dolorem repellendus optio doloremque error a omnis soluta quae magnam dignissimos, ipsam, temporibus sequi, commodi accusantium!
				</p> -->
			</div>

			<div class="container-fluid">
				<ul class="full-box list-unstyled page-nav-tabs">
					<li>
						<a class="active" href="client-new.html"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR EMPLEADOS</a>
					</li>
					<li>
						<a href="list.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE EMPLEADOS</a>
					</li>
					<!-- <li>
						<a href="client-search.html"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR EMPLEADOS</a>
					</li> -->
				</ul>	
			</div>
			
			<!-- Content here-->
			<div class="container-fluid">
				<form class="form-neon" autocomplete="on" method="post">
					<fieldset>
						<legend><i class="fas fa-user"></i> &nbsp; Información básica </legend>
						<div class="container-fluid">
							<div class="row">
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="cliente_dni" class="bmd-label-floating">Nombres</label>
										<input type="text" class="form-control" name="nombre">
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="cliente_nombre" class="bmd-label-floating">Apellidos</label>
										<input type="text" class="form-control" name="apellido">
									</div>
								</div>
								<div class="col-12 col-md-4">
										<div class="form-group">
											<label for="cliente_nombre" class="">Cargo</label>
											<select class="custom-select" name="cargo">
												<option value=""></option>
												<option value="atencion al cliente">atencion al cliente</option>
												<option value="Gerente">Gerente</option>
											</select>

										</div>
									</div>
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="cliente_nombre" class="bmd-label-floating">Cedula </label>
										<input type="number" class="form-control" name="cedula">
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="cliente_apellido" class="bmd-label-floating">Teléfono</label>
										<input type="number" class="form-control" name="telefono">
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="cliente_nombre" class="">Estado laboral</label>
										<select class="custom-select" name="estado_laboral">
											<option value="Empleado">Empleado</option>
										</select>

									</div>
								</div>
								<div class="col-12 col-md-8">
									<div class="form-group">
										<label for="cliente_telefono" class="bmd-label-floating">Fecha de ingreso</label>
										<input class="form-control" type="datetime-local" name="fecha_ing" value="<?php echo date('Y-m-d\TH:i:s'); ?>" id="fecha_ing" required readonly>
									</div>
								</div>
								<!-- <div class="col-12 col-md-4">
									<div class="form-group">
										<label for="cliente_direccion" class="bmd-label-floating">Fecha de egreso</label>
										<input type="date" class="form-control" name="fecha_eg">
									</div>
								</div> -->
								<div class="col-12 col-md-4">
										<div class="form-group">
											<label for="cliente_nombre" class="">Departamento</label>
											<select class="custom-select" name="departamento">
												<option value=""></option>
												<option value="departamento-1">departamento-1</option>
												<option value="departamento-2">departamento-2</option>
												
										</select>
									</div>
								</div>
								<div class="col-12 col-md-12">
										<div class="form-group">
											<label for="cliente_nombre" class="">Direccion</label>
											<input type="text" class="form-control" name="direccion">
										</div>
									</div>
							</div>
						</div>
					</fieldset>
					<input type="submit" name="register">
					<!-- <button type="submit" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp; REGISTRAR</button> -->
					<br>
					<!-- <p class="text-center" style="margin-top: 40px;">
						<button type="reset" class="btn btn-raised btn-secondary btn-sm"><i class="fas fa-paint-roller"></i> &nbsp; LIMPIAR</button>
						&nbsp; &nbsp;
					</p> -->
				</form>
				<?php 
				include("registrar.php");
				?>
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