<!DOCTYPE HTML>
<?php
session_start();
include 'conex.php';

if(isset($_SESSION['AdminName'])) {?>


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
								<li><a href="info.php">Información</a></li>
								<li>
									<a href="#">Administrar</a>
									<ul>
										<li><a href="agregarauspiciador.php">Auspiciadores</a></li>
										<li><a href="agregarpuntos.php">Puntos Usuarios</a></li>
										<li><a href="agregarpremio.php">Premios</a></li>
<!--										<li>
											<a href="#">Submenu</a>
											<ul>
												<li><a href="#">Lorem dolor</a></li>
												<li><a href="#">Phasellus magna</a></li>
												<li><a href="#">Magna phasellus</a></li>
												<li><a href="#">Etiam nisl</a></li>
												<li><a href="#">Veroeros feugiat</a></li>
											</ul>
										</li>
										<li><a href="#">Veroeros feugiat</a></li>		-->
										</ul>
<!--								</li>
								<li><a href="left-sidebar.html">Left Sidebar</a></li>
								<li><a href="right-sidebar.html">Right Sidebar</a></li>
								<li><a href="two-sidebar.html">Two Sidebar</a></li>-->

						<li><a href="logout.php">Cerrar Sesión</a></li>
							</ul>
						</nav>

				</div>


			<!-- Highlights -->
				<section class="wrapper style1">
					<div class="container">
						<div class="row 200%">
							<section class="4u 12u(narrower)">
								<div class="box highlight">
								<a href="agregarauspiciador.php">	<i  class="icon major fa-paper-plane"></i></a>
									<h3><a href="agregarauspiciador.php">Auspiciadores</a></h3>
									<p>Agrega auspiciadores aquí.</p>
								</div>
							</section>
							<section class="4u 12u(narrower)">
								<div class="box highlight">
								<a href="agregarpuntos.php">	<i class="icon major fa-pencil"></i></a>
									<h3><a href="agregarpuntos.php">Usuarios</a></h3>
									<p>Asigna puntos a usuarios aquí.</p>
								</div>
							</section>
							<section class="4u 12u(narrower)">
								<div class="box highlight">
								<a href="agregarpremio.php">	<i class="icon major fa-wrench"></i></a>
									<h3><a href="agregarpremio.php">Premios</a></h3>
									<p>Aquí puedes agregar los premios de cada auspiciador</p>
								</div>
							</section>
						</div>
					</div>
				</section>

			<!-- Gigantic Heading
				<section class="wrapper style2">
					<div class="container">
						<header class="major">
							<h2>A gigantic heading you can use for whatever</h2>
							<p>With a much smaller subtitle hanging out just below it</p>
						</header>
					</div>
				</section> -->

			<!-- Posts
				<section class="wrapper style1">
					<div class="container">
						<div class="row">
							<section class="6u 12u(narrower)">
								<div class="box post">
									<a href="#" class="image left"><img src="images/pic01.jpg" alt="" /></a>
									<div class="inner">
										<h3>The First Thing</h3>
										<p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
									</div>
								</div>
							</section>
							<section class="6u 12u(narrower)">
								<div class="box post">
									<a href="#" class="image left"><img src="images/pic02.jpg" alt="" /></a>
									<div class="inner">
										<h3>The Second Thing</h3>
										<p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
									</div>
								</div>
							</section>
						</div>
						<div class="row">
							<section class="6u 12u(narrower)">
								<div class="box post">
									<a href="#" class="image left"><img src="images/pic03.jpg" alt="" /></a>
									<div class="inner">
										<h3>The Third Thing</h3>
										<p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
									</div>
								</div>
							</section>
							<section class="6u 12u(narrower)">
								<div class="box post">
									<a href="#" class="image left"><img src="images/pic04.jpg" alt="" /></a>
									<div class="inner">
										<h3>The Fourth Thing</h3>
										<p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
									</div>
								</div>
							</section>
						</div>
					</div>
				</section>-->


			<!-- Footer -->
				<div id="footer">
					<div class="container">
						<div class="row">

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
<?php
}else{
	echo '<script> window.location="ingresoadmin.php"; </script>';
}
?>
