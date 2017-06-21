<!DOCTYPE html>
<?php
include("misfunciones.php");
$conexion=Conectarse();
$codigo =  $_POST['corr'];
$codigo2 = $_POST['ru'];
$sql = "select * from usuario where Correo = '" . $codigo . "' OR Rut = '".$codigo2."'";
$resultado=mysql_query( $sql ,$conexion);
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
   		//echo " El Usuario que desea ingresar ya existe ";
			echo '<script> alert("El Usuario que desea ingresar ya existe");</script>';
	 	 echo '<script> window.location="registro_usuario.php"; </script>';
		mysql_close($conexion);
     } else if( $numResults == 0)		 {
		$contra=$_POST['pass'];
		$contra2=$_POST['pass2'];
     if($contra==$contra2){
	  $agregar = mysql_query("insert into usuario (`Nombre`, `Rut`, `Sexo`, `Correo`, `Password`) values ('" .$_POST['nom']. "','" .$_POST['ru']."','" .$_POST['sex']."','" .$_POST['corr']."','" .$_POST['pass']. "')", $conexion);

	 //echo "Usuario agregado con éxito";}
	 echo '<script> alert("Usuario agregado con éxito.");</script>';
	 echo '<script> window.location="registro_usuario.php"; </script>';}
	 else{
		//echo"Contraseña NO coinciden";
		echo '<script> alert("Constraseñas no coinciden.");</script>';
		echo '<script> window.location="registro_usuario.php"; </script>';
	 }
	 }
?>

		<a href="index.html" class="volver">Inicio <a/>
</body>
</html>
