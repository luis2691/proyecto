<!DOCTYPE HTML>
<?php
session_start();
include 'conex.php';

if(isset($_SESSION['Correo'])) {
	echo 'Bienvenido '.$_SESSION['Correo'].'<p>';//opcional?>


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
						<!--		<li><a href="index.html">Inicio</a></li>-->

<!--								</li>
								<li><a href="left-sidebar.html">Left Sidebar</a></li>
								<li><a href="right-sidebar.html">Right Sidebar</a></li>
								<li><a href="two-sidebar.html">Two Sidebar</a></li>-->

						<li><a href="logout.php">Cerrar Sesión</a></li>
							</ul>
						</nav>

				</div>




			<!-- Banner
				<section id="banner">
					<header>
						<h2>Arcana: <em>A responsive site template freebie by <a href="http://html5up.net">HTML5 UP</a></em></h2>
						<a href="#" class="button">Learn More</a>
					</header>
				</section> -->

			<!-- Highlights -->
	<!--			<section class="wrapper style1">
					<div class="container">
						<div class="row 200%">
							<section class="4u 12u(narrower)">
								<div class="box highlight">
								<a href="#">	<i  class="icon major fa-paper-plane"></i></a>
									<h3><a href="#">Auspiciadores</a></h3>
									<p>Agrega auspiciadores aquí.</p>
								</div>
							</section>
							<section class="4u 12u(narrower)">
								<div class="box highlight">
								<a href="#">	<i class="icon major fa-pencil"></i></a>
									<h3><a href="#">Usuarios</a></h3>
									<p>Asigna puntos a usuarios aquí.</p>
								</div>
							</section>
							<section class="4u 12u(narrower)">
								<div class="box highlight">
								<a href="#">	<i class="icon major fa-wrench"></i></a>
									<h3><a href="#">Productos</a></h3>
									<p>Aquí puedes agregar los productos de cada auspiciador</p>
								</div>
							</section>
						</div>
					</div>
				</section>-->

				<h2><?php
				include 'conex.php';
				$correo=$_SESSION['Correo'];
				$usuario =mysql_query("SELECT puntos FROM usuario where Correo='$correo'");
				if ($usuario) {
					$data=mysql_fetch_assoc($usuario);
					echo '<br>	Tus puntos acumulados son:  '  .$data['puntos']. '<p>';

					}



				?></h2>
				<center>
				<form action="canjear.php" method="post">
				<div class="datagrid"><table align="center" border="20px" cellpadding="2" cellspacing="2">
				<thead><th width='10' colspan="1" rowspan="1" align="center">Selección</th><th width='50%' colspan="1" rowspan="1" align="center">Descripción</th><th width='10' colspan="1" rowspan="1" align="center">Puntos</th></thead>
				<center>
				<?php
				include 'conex.php';
				    $mostrar =mysql_query("SELECT * FROM premio");     // Esta linea hace la consulta


				    while ($registro = mysql_fetch_array($mostrar)){
				echo "

				    <tr>
							<td width='25' align='center'>".$registro['CodigoPremio']."</td>
							<td  width='150' align='center'>".$registro['Descripcion']."</td>
				      <td width='25' align='center'>".$registro['Puntos']."</td>

						</tr>

				";
				}

				?>
			</center>
				<?php
				$numero = mysql_num_rows($mostrar);

				echo"
				<thead><th width='150' colspan='7' rowspan='7' align='center'>El Total de Premios es de: $numero</th></thead>
				";

				?>
				</tbody>
				   </table>
					 </div>
					 <input type="text" name="cod" placeholder="Escriba Código"><br>
					 <input type='submit' value='Canjear'> <br></form></center>



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
	echo '<script> window.location="registro_usuario.php"; </script>';
}
?>
