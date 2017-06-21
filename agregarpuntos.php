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
  								<li><a href="index.html">Inicio</a></li>
  								<li>
  									<a href="#">Administrar</a>
  									<ul>
  										<li><a href="#">Auspiciadores</a></li>
  										<li><a href="#">Usuarios</a></li>
  										<li><a href="#">Productos</a></li>
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
  								<li><a href="registraradmin.html">Agregar Admin</a></li>
  						<li><a href="logout.php">Cerrar Sesión</a></li>
  							</ul>
  						</nav>

  				</div>
          <center>
      			<h2>Asignar Puntos</h2>
      				<form action="validapuntos.php" method="POST">
                
						Usuario:<input type="text" name="rut" placeholder="Rut"><br>
                
      					Ingresar puntos: <input type="number" name="Puntos" placeholder="puntos"><br>
                <br>
      			<!--		Contraseña: <input type="password" name="Password" placeholder="Ingresa tu contraseña"><br>-->
      					<input type="submit" name="guardar" value="Aceptar">
      				</form>
      				<br><br>






      			</center>


        </body>
        </html>
<?php
  }else{
  echo '<script> window.location="ingresoadmin.php"; </script>';
  }
?>
