<?php
session_start();
include 'conex.php';

if(isset($_SESSION['AdminName'])) {




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
      $nombre = $_POST['Nombre'];
 			$puntos = $_POST['Puntos'];

 			$addpuntos = mysql_query("INSERT INTO usuario ('puntos') VALUES ('" .$_POST['Puntos']. "') where Nombre = '".$nombre."'");
 			/*if (mysql_num_rows($log)>0) {
 			$row = mysql_fetch_array($log);
 			$_SESSION["AdminName"] = $row['AdminName'];
 				  	echo 'Iniciando sesión para '.$_SESSION['AdminName'].' <p>';
 					echo '<script> window.location="inicioadmin.php"; </script>';
 				}
 				else{
 					echo '<script> alert("Usuario o contraseña incorrectos.");</script>';
 					echo '<script> window.location="ingresoadmin.php"; </script>';
 				}
 			}*/
 		?>
 </body>
 </html>
