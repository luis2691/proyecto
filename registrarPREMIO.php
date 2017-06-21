<?php
session_start();
include 'conex.php';

if(isset($_SESSION['AdminName'])) {
?>


<?php
include 'conex.php';

$codigo =  $_POST['CodigoPremios'];
$descripcion = $_POST['Descripcion'];
$puntos = $_POST['Puntos']

$sql = "select * from premio where CodigoPremio = '" . $codigo . "' ";
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
<h1 class="titulo"> Usuario </h1>

<?php

   $numResults = mysql_num_rows($resultado);
     if ($numResults != 0) {
   		echo " El Usuario que desea ingresar ya existe ";
		mysql_close($conexion);
     } else if( $numResults == 0)		 {
		$contra=$_POST['pass'];
		$contra2=$_POST['pass2'];
     if($contra==$contra2){
	  $agregar = mysql_query("insert into usuario (`Nombre`, `Rut`, `Sexo`, `Correo`, `Password`) values ('" .$_POST['nom']. "','" .$_POST['ru']."','" .$_POST['sex']."','" .$_POST['corr']."','" .$_POST['pass']. "')", $conexion);

	 echo "Usuario agregado con éxito";}
	 else{
		echo"Contraseña NO coinciden";
	 }
	 }
?>

		<a href="index.html" class="volver">Inicio <a/>
</body>
</html>
