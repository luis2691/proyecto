<?php
	session_start();
?>
<!DOCTYPE html>
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
			if(isset($_POST['login'])){
				$correo = $_POST['Correo'];
				$pw = $_POST['Password'];
				$log = mysql_query("SELECT * FROM usuario WHERE Correo='$correo' AND Password='$pw'");
				if (mysql_num_rows($log)>0) {
					$row = mysql_fetch_array($log);
					$_SESSION["Correo"] = $row['Correo'];
				  	echo 'Iniciando sesión para '.$_SESSION['Correo'].' <p>';
					echo '<script> window.location="inicioUser.php"; </script>';
				}
				else{
					echo '<script> alert("Usuario o contraseña incorrectos.");</script>';
					echo '<script> window.location="registro_usuario.php"; </script>';
				}
			}
		?>
</body>
</html>
