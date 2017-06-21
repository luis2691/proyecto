<?php
session_start();
include 'conex.php';

if(isset($_SESSION['Correo'])) {
?>

<?php 
$codigo=$_POST['cod'];


 ?>


<?php
}else{
	echo '<script> window.location="registro_usuario.php"; </script>';
}
?>
