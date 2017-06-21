<?php
session_start();
include 'conex.php';

if(isset($_SESSION['AdminName'])) ?>

	<html>
		<head>
			<title>ConectiVerde</title>
			<meta charset="utf-8" />
			<meta name="viewport" content="width=device-width, initial-scale=1" />
			<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
			<link rel="stylesheet" href="assets/css/main.css" />
			<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
			<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		</head>
		<body>
			<div id="page-wrapper">

				<!-- Header -->
					<div id="header">

						<!-- Logo -->
							<h1><a href="index.html" id="logo">Conecti<em>Verde</em></a></h1>

						<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="inicioAdmin.php">Inicio</a></li>
								<li><a href="info.php">Información</a></li>
								<li class="current">
									<a href="#">Administrar</a>
									<ul>
										<li><a href="agregarauspiciador.php">Auspiciadores</a></li>
										<li><a href="agregarpuntos.php">Puntos Usuarios</a></li>
										<li><a href="agregarpremio.php">Premios</a></li>

										</ul>

						<li><a href="logout.php">Cerrar Sesión</a></li>
							</ul>
						</nav>

					</div>

<!-- aqui registro e ingreso de usuario -->
		<center>
				<h2>Agregar Auspiciador</h2>

				<form action="registrarAUSPICIADOR.php" method="post" >

					Código de Auspiciador: <input type="text" name="Codigo" placeholder="#####" maxlength="25" size="25" required><br>

					Descripcion: <input type="text" name="DescripA" placeholder="Describa aqui el auspiciador" maxlength="140" size="25" required><br>

					Direccion: <input type="text" name="Direc" placeholder="Direccion fisica" maxlength="100" size="25" required><br>

					Codigo Premio: <input type="number" name="CodigoPremio" placeholder="0000" maxlength="10" size="25"required><br>

					Descripcion Premio: <input type="text" name="DescripP" placeholder="Describa aqui el premio" maxlength="250" size="25" required><br>

					Stock:: <input type="number" name="Stock" placeholder="Ingresa Stock" maxlength="10" size="25"required><br>

					Puntos: <input type="number" name="Puntos" placeholder="0000" maxlength="10" size="25"required><br>

					<input type="submit" value="Agregar"> <br>


				</form>
			</center>
</html>
