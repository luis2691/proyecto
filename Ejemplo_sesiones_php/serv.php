<?php
	$conect = @mysql_connect("ruta_servidor","usuario","contraseña") or die("No se encontró el servidor");
	mysql_select_db("base_de_datos",$conect)or die("No se encontró la base de datos");
?>