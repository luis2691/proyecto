<!DOCTYPE html>
<?php
session_start();
 ?>

<?php /*
include("misfunciones.php");
$conexion=Conectarse();
$codigo =  $_POST['nam'];
$codigo2 =  $_POST['pass'];
$sql = "select * from administrador where AdminName = '" . $codigo . "' && Password = '" . $codigo2 . "'";
$resultado=mysql_query( $sql ,$conexion);
*/?>

<!--<html>
	<head>

	<title>Registrate en ConectiVerde</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="stylesheet" href="assets/css/main.css" />

</head>


<body>
<h1 class="titulo"> Administrador </h1>

<?php/*

   $numResults = mysql_num_rows($resultado);
     if ($numResults == 0) {
   		echo " El Usuario no existe o contraseña incorrecta ";
		mysql_close($conexion);
     }
*/
?>

		<a href="inicioadmin.html" class="volver">Menu <a/>
</body>
</html>-->



<?php

include("misfunciones.php");
//$host_db = "localhost";
//$user_db = "root";
//$pass_db = "";
//$db_name = "conectiverde";
//$tbl_name = "administrador";

//$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
$conexion=Conectarse();
//if ($conexion->connect_error) {
// die("La conexion falló: " . $conexion->connect_error);
//}

$username = $_POST['nam'];
$password = $_POST['pass'];

$sql = "SELECT * FROM administrador WHERE AdminName = '".$username."'";

$resultado=mysql_query( $sql ,$conexion);


if (is_null($resultado)==false/*->num_rows > 0*/) {
 }
 //$row = $resultado->fetch_array(MYSQLI_ASSOC);
 if (password_verify($password,'Password' )) {//$row['Password']

    $_SESSION['loggedin'] = true;
    $_SESSION['nam'] = $username;
    $_SESSION['start'] = time();
  //  $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);

    echo "Bienvenido! " . $_SESSION['nam'];
    echo "<br><br><a href=panel-control.php>Panel de Control</a>";

 } else {
   echo "Username o Password estan incorrectos.";

   echo "<br><a href='ingresoadmin.html'>Volver a Intentarlo</a>";
 }
// mysqli_close($conexion);
mysql_close($conexion);
 ?>
