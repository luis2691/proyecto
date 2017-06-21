<?php
session_start();
include 'conex.php';

if(isset($_SESSION['AdminName'])) 
?>


<?php
include 'conex.php';

$codigo =  $_POST['Codigo'];

$sql = "select * from auspiciador where Codigo = '" . $codigo . "' ";
$resultado=mysql_query( $sql);
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
<h1 class="titulo"> 	Nuevo Auspciador </h1>

<?php
	include 'conex.php';
	$numResults = mysql_num_rows($resultado);
     if ($numResults != 0){
		 echo "El auspiciador que intenta ingresar ya se encuentra en la Base de Datos";
		 		 
		 }else if( $numResults == 0){
	
	$addpremio = mysql_query("INSERT INTO auspiciador (`Codigo`,`Descripcion`, `Direccion`, `CodigoPremio`) VALUES ( '" .$_POST['Codigo']. "','" .$_POST['Descrip']. "','" .$_POST['Direc']. "','" .$_POST['CodigoPremio']. "')");
	
	echo "Auspiciador agregado con éxito";                                                     
	echo '<script> window.location="agregarauspiciador.php"; </script>';
	 }
	 
	 
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

	<!--	<a href="index.html" class="volver">Inicio <a/>-->
</body>
</html>
