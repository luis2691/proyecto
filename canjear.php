<?php
session_start();
include 'conex.php';

if(isset($_SESSION['Correo']))
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
			//include 'conex.php';
				$codigo = $_POST['cod'];//AQUI ESTA EL PROBLEMA!!!

				//$correo=$_SESSION['Correo'];
				//$usuario =mysql_query("SELECT Puntos FROM usuario where Correo='".$correo."'");
				//$data=mysql_fetch_assoc($usuario);
				$valor =mysql_query("SELECT Puntos FROM premio where CodigoPremio='$codigo'");
        include 'conex.php';
				$correo=$_SESSION['Correo'];
				$usuario =mysql_query("SELECT Puntos FROM usuario where Correo='$correo'");
        if ($usuario) {
					$data2=mysql_fetch_assoc($valor);
					echo '<br>	Puntos del premio:  '  .$data2['Puntos']. '<p>';

					}
        /*  $usuario2 =mysql_query("SELECT Rut FROM usuario where Correo='$correo'");
          if ($usuario2) {
            $data3=mysql_fetch_assoc($usuario2);
            echo '<br>	Tus rut:  '  .$data3['Rut']. '<p>';

          }*/

				if ($usuario) {
					$data=mysql_fetch_assoc($usuario);
					echo '	Tus puntos acumulados son:  '  .$data['Puntos']. '<p>';

					}
				//echo "$codigo";
        $data3=$data['Puntos'];
        $data4=$data2['Puntos'];
				if($data['Puntos']<$data2['Puntos'] ){
					echo '<script> alert("No tienes los suficientes puntos");</script>';
          echo '<a href="canjear.php" title="Volver a la página anterior">Volver</a>';
        }else {
			  $sql1=mysql_query("UPDATE usuario SET `Puntos`='$data3'-'$data4'   WHERE Correo='$correo'");
				$sql2=mysql_query("UPDATE premio SET `Stock`=`Stock` - 1  where CodigoPremio='$codigo'");
				$sql3=mysql_query("INSERT INTO canje (`CodigoPremio`) values ('$codigo')");
				$sql4=mysql_query("UPDATE canje SET `Canje`=`Canje` + 1 where CodigoPremio='$codigo'");
        echo '<script> alert("Producto canjeado con éxito, te enviaremos un correo con los datos para el canje");</script>';
        echo '<a href="canjear.php" title="Volver a la página anterior">Volver</a>';

      }
//echo'<script> window.location="canjear.php"; </script>';

				//echo'<script> window.location="canjear.php"; </script>';


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
