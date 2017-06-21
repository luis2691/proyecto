
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
				include 'conex.php';
				$codigo = $_POST['cod'];
				$correo=$_SESSION['Correo'];
				$usuario =mysql_query("SELECT puntos FROM usuario where Correo='$correo'");
				$data=mysql_fetch_assoc($usuario);
				$valor =mysql_query("SELECT puntos FROM premio where CodigoPremio='$codigo'");	
				
												
				
				if($data<$valor ){
					echo"No tienes los suficientes puntos";
				}else if($data>=$valor){
			    $sql1=mysql_query("UPDATE puntos SET `Puntos`=`Puntos` - '".$valor."' FROM usuario where Correo='".$correo."'");
				$sql2=mysql_query("UPDATE premio SET `Stock`=`Stock` - 1 FROM usuario where CodigoPremio='".$codigo."'");
				$sql3=mysql_query("INSERT INTO canje (`CodigoPremio`) values ('".$codigo."')");
				$sql4=mysql_query("UPDATE canje SET `Canje`=`Canje` + 1 FROM canje where CodigoPremio='".$codigo."'");
				}
			
				
				
				
				echo'<script> window.location="canjear.php"; </script>';
				
				
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