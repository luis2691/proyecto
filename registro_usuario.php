<!DOCTYPE HTML>
<?php
	session_start();
	include 'conex.php';
	if(isset($_SESSION['Correo'])){
	echo '<script> window.location="inicioUser.php"; </script>';
	}
?>
<html>
<head>
	<title>Registrate en ConectiVerde</title>
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
							<li><a href="index.html">Inicio</a></li>
							<li>
								<a href="#">Dropdown</a>
								<ul>
									<li><a href="#">Lorem dolor</a></li>
									<li><a href="#">Magna phasellus</a></li>
									<li><a href="#">Etiam sed tempus</a></li>
									<li>
										<a href="#">Submenu</a>
										<ul>
											<li><a href="#">Lorem dolor</a></li>
											<li><a href="#">Phasellus magna</a></li>
											<li><a href="#">Magna phasellus</a></li>
											<li><a href="#">Etiam nisl</a></li>
											<li><a href="#">Veroeros feugiat</a></li>
										</ul>
									</li>
									<li><a href="#">Veroeros feugiat</a></li>
								</ul>
							</li>
							<li><a href="left-sidebar.html">Left Sidebar</a></li>
							<li><a href="right-sidebar.html">Right Sidebar</a></li>
							<li><a href="two-sidebar.html">Two Sidebar</a></li>
							<li><a href="nosotros.html">Nosotros</a></li>
							<li class="current"><a href="registro_usuario.html">Ingresa</a></li>
						</ul>
					</nav>

				</div>
<!-- aqui registro e ingreso de usuario -->
		<center>
			<h2>Ingresa a tu cuenta</h2>
				<form action="validaruser.php" method="post">
					Email: <input type="text" name="Correo" placeholder="ejemplo@mail.com" maxlength="25" size="10" required><br>
					Contraseña: <input type="password" name="Password" placeholder="Ingresa tu contraseña" required><br>
					<input type="submit" name="login" value="Entrar">
				</form>
				<br><br>

		<h2>Crear cuenta nueva</h2>

				<form action="registrarBD.php" method="post" >

					Nombre: <input type="text" name="nom" placeholder="Juanito Pérez" maxlength="25" size="25" required><br>

					Rut: <input type="text" name="ru" placeholder="12345678-9" maxlength="10" size="10"required><br>

					E-mail: <input type="text" name="corr" placeholder="ejemplo@mail.com"required><br>

					Contraseña: <input type="password" name="pass" placeholder="Ingresa tu contraseña"required><br>

					Repetir Contraseña: <input type="password" name="pass2" placeholder="Repite tu contraseña"required><br>

					Sexo: <input type="radio" name="sex" value="masculino"> Masculino
					      <input type="radio" name="sex" value="femenino"> Femenino
					      <input type="radio" name="sex" value="otro"> Otro<br>
						<!--		<input type="checkbox" name="vehicle1" value="Bike"> I have a bike<br>-->
								<br>
					<input type="submit" value="Aceptar">
				</form>
			</center>
			<!-- Main -->
				<section class="wrapper style1">
					<div class="container">
						<div id="content">

		<!-- Footer -->
				<div id="footer">
 					<div class="container">
						<div class="row">
							<section class="3u 6u(narrower) 12u$(mobilep)">

							</section>
							<section class="3u 6u$(narrower) 12u$(mobilep)">

							</section>
							<section class="6u 12u(narrower)">

							</section>
						</div>
				</div>

					<!-- Icons -->
						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
							<li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
							<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
						</ul>

					<!-- Copyright -->
						<div class="copyright">
							<ul class="menu">
								<li>&copy; ConectiVerde. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>

				</div>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
