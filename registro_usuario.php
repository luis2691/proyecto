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
							<li><a href="nosotros.html">Nosotros</a></li>
							<li><a href="auspiciadores.php">Nuestros Auspiciadores</a></li>
							<li class="current"><a href="registro_usuario.php">Ingresa</a></li>
							<li><a href="ingresoadmin.php">Ingresa Administrador</a></li>
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

					Nombre Completo: <input type="text" name="nom" placeholder="Juanito Pérez" maxlength="25" size="25" required><br>

					Rut: <input type="text" name="ru" placeholder="12345678-9" maxlength="10" size="10"required><br>

					E-mail: <input type="text" name="corr" placeholder="ejemplo@mail.com"required><br>

					Contraseña: <input type="password" name="pass" placeholder="Ingresa tu contraseña"required><br>

					Repetir Contraseña: <input type="password" name="pass2" placeholder="Repite tu contraseña"required><br>

					Sexo: <input type="radio" name="sex" value="masculino"> Masculino
					      <input type="radio" name="sex" value="femenino"> Femenino
					      <input type="radio" name="sex" value="otro"> Otro<br>
						<!--		<input type="checkbox" name="vehicle1" value="Bike"> I have a bike<br>-->
								<br>
					<input type="submit" value="Aceptar"> <br>
					<input type="checkbox" name="terminos" value="tyc" required> Acepto los términos y condiciones<br>
					<textarea name="message" rows="10" cols="30" disabled>
					Condiciones de uso de conectiVerde

1. Introducción
Las presentes condiciones generales de uso de la página web, regulan los términos y condiciones de acceso y uso de www.conectiVerde.esy.es, propiedad de conectiVerde, con domicilio en Brasil 2567 y con Código de Identificación Fiscal número 10468734, en adelante, el usuario del Sitio Web deberá de leer y aceptar para usar todos los servicios e información que se facilitan desde el Sitio Web. El mero acceso y/o utilización del Sitio Web, de todos o parte de sus contenidos y/o servicios significa la plena aceptación de las presentes condiciones generales de uso.
2. Condiciones de uso
Las presentes condiciones generales de uso del Sitio Web regulan el acceso y la utilización del Sitio Web, incluyendo los contenidos y los servicios puestos a disposición de los usuarios en y/o a través del Sitio Web, bien por el Sitio Web, bien por sus usuarios, bien por terceros.
3.   Modificaciones
La empresa se reserva la facultad de modificar en cualquier momento las condiciones generales de uso del Sitio Web. En todo caso, se recomienda que consulte periódicamente los presentes términos de uso del Sitio Web, ya que pueden ser modificados.
4. Obligaciones del Usuario
El usuario deberá respetar en todo momento los términos y condiciones, de forma diligente y asumiendo cualquier responsabilidad que pudiera derivarse del incumplimiento de las normas. Así mismo, el usuario no podrá utilizar el Sitio Web para transmitir, almacenar, divulgar promover o distribuir datos o contenidos que sean portadores de virus o cualquier otro código informático, archivos o programas diseñados para interrumpir, destruir o perjudicar el funcionamiento de cualquier programa o equipo informático o de telecomunicaciones.
5. Responsabilidad del Sitio Web
El usuario conoce y acepta que el Sitio Web no otorga ninguna garantía de cualquier naturaleza, ya sea expresa o implícita, sobre los datos, contenidos, información y servicios que se incorporan y ofrecen desde el Sitio Web, toda responsabilidad será del tercero ya sea proveedor o colaborador.
6. Propiedad intelectual e industrial
Todos los contenidos, marcas, logos, dibujos, documentación, programas informáticos o cualquier otro elemento susceptible de protección por la legislación de propiedad intelectual o industrial, que sean accesibles en el Sitio Web corresponden exclusivamente a la empresa o a sus legítimos titulares y quedan expresamente reservados todos los derechos sobre los mismos. En cualquier caso, el Sitio Web se reserva todos los derechos sobre los contenidos, información datos y servicios que ostente sobre los mismos. El Sitio Web no concede ninguna licencia o autorización de uso al usuario sobre sus contenidos, datos o servicios, distinta de la que expresamente se detalle en las presentes condiciones generales de uso del Sitio Web.
7. Legislación aplicable, jurisdicción competente y notificaciones
Las presentes condiciones se rigen y se interpretan de acuerdo con las Leyes de Chile. Para cualquier reclamación serán competentes los juzgados y tribunales de Valparaíso. Todas las notificaciones, requerimientos, peticiones y otras comunicaciones que el Usuario desee efectuar a la organización titular del Sitio Web deberán realizarse por escrito y se entenderá que han sido correctamente realizadas cuando hayan sido recibidas en la siguiente dirección Brasil 2567.

</textarea>
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
