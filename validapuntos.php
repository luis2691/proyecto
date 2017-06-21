<?php
session_start();
include 'conex.php';

if(isset($_SESSION['AdminName']))
 ?>
 <html>
 <head>
 <head>
 	<title>Validando...</title>
 	<meta charset="utf-8">
 </head>
 </head>
	<body>
			<?php
				include 'conex.php';
				$rut = $_POST['Rut'];
				$plastico = $_POST['plastico'];
				$papel = $_POST['papel'];
				$aluminio = $_POST['aluminio'];
				$puntos = $plastico*4+$papel*3+$aluminio*8   ;

				$addplastico = mysql_query("UPDATE usuario SET `Plastico` = `Plastico` + '".$plastico."' WHERE Rut = '".$rut."'");
				$addpapel = mysql_query("UPDATE usuario SET `Papel` = `Papel` + '".$papel."' WHERE Rut = '".$rut."'");
				$addaluminio = mysql_query("UPDATE usuario SET `Aluminio` = `Aluminio` + '".$aluminio."' WHERE Rut = '".$rut."'");

				$addpuntos = mysql_query("UPDATE usuario SET `Puntos` = `Puntos` + '".$puntos."' WHERE Rut = '".$rut."'");
				echo '<script> alert("Puntos agregados con éxito");</script>';
				echo'<script> window.location="agregarpuntos.php"; </script>';


				/*if (mysql_num_rows($log)>0) {
				$row = mysql_fetch_array($log);
				$_SESSION["AdminName"] = $row['AdminName'];
						echo 'Iniciando sesión para '.$_SESSION['AdminName'].' <p>';
						echo '<script> window.location="inicioadmin.php"; </script>';
					}
					else{
						echo '<script> alert("Usuario o contraseña incorrectos.");</script>';
						echo '<script> window.location="ingresoadmin.php"; </script>';

 			}*/
			?>
	</body>
</html>
