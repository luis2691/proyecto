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
                <li><a href="inicioAdmin.php">Inicio</a></li>
                <li><a href="info.php">Información</a></li>
                <li  class="current">
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
          <center>
      			<h2>Asignar Puntos</h2>

      				<form action="validapuntos.php" method="POST">

						Usuario:         <input type="text" name="Rut" placeholder="Rut"><br>

						Reciclado Plastico: <input type="number" name="plastico" placeholder="Peso plastico en gramos"><br>
						Reciclado Papel: <input type="number" name="papel" placeholder="Peso papel en gramos"><br>
						Reciclado Aluminio: <input type="number" name="aluminio" placeholder="Aluminio en gramos"><br>

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
