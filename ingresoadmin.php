﻿<!DOCTYPE HTML>
<?php
	session_start();
	include 'conex.php';
	if(isset($_SESSION['AdminName'])){
	echo '<script> window.location="inicioadmin.php"; </script>';
	}
?>

<html>
<head>
	<title>Ingreso Administrador</title>
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
							<li><a href="registro_usuario.html">Ingresa</a></li>
							<li class="current"><a href="ingresoadmin.html">Ingresa Administrador</a></li>
						</ul>
					</nav>

				</div>
<!-- aqui registro e ingreso de usuario -->
		<center>
			<h2>Ingresa a tu cuenta</h2>
				<form action="inicioAdmin1.php" method="POST">
					Email: <input type="text" name="AdminName" placeholder="Administrator!!!" maxlength="25" size="10"><br>
					Contraseña: <input type="password" name="Password" placeholder="Ingresa tu contraseña"><br>
					<input type="submit" name="login" value="Entrar">
				</form>
				<br><br>


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