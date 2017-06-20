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
				$usuario = $_POST['AdminName'];
				$pw = $_POST['Password'];
				$log = mysql_query("SELECT * FROM administrador WHERE AdminName='$usuario' AND Password='$pw'");
				if (mysql_num_rows($log)>0) {
					$row = mysql_fetch_array($log);
					$_SESSION["AdminName"] = $row['AdminName'];
				  	echo 'Iniciando sesión para '.$_SESSION['AdminName'].' <p>';
					echo '<script> window.location="inicioadmin.php"; </script>';
				}
				else{
					echo '<script> alert("Usuario o contraseña incorrectos.");</script>';
					echo '<script> window.location="ingresoadmin.php"; </script>';
				}
			}
		?>
</body>
</html>
