<!DOCTYPE html>
<?php
include("misfunciones.php");
$conexion=Conectarse();     
$sql = "SELECT * FROM auspiciador"; 
$resultado=mysql_query($sql ,$conexion);
?>

<html>
<head>
        <meta charset="UTF-8">
        <h2 style= "text-align:center; color:white;font-family:fantasy" >Nuestros colabores y sus respectivos premios:</h2>

    </head>
    <body>
         
<?php

   $numResults = mysql_num_rows($resultado);
     if ($numResults == 0) {
   		echo " No hay auspiciadores ni premios para mostrar ";
		mysql_close($conexion); 
     } else if( $numResults != 0) {
	$sql2 = "select a.Codigo, a.Descripcion,  p.CodigoPremio, p.Descripcion, p.Puntos from auspiciador a , premio p WHERE a.CodigoPremio=p.CodigoPremio"; 
    $resultado2=mysql_query($sql2 ,$conexion);
	echo "Encontrados";
?>
		 
<br>		

 
		 
    <center>
                
        <table border="1">
        <tr>
       	     <td>Codigo Auspiciador</td>
        	<td>Nombre de Auspiciador</td>
        	<td>Codigo Premio </td>
        	<td>Descripcion de Premio </td>
        	<td>Puntos</td>
        
        </tr>

<?php
 	while($row = mysql_fetch_array($resultado2) ) { 
      echo "<tr><td>" . $row[0] . "</td>" ;
	  echo "<td>" . $row[1] . "</td>";
	  echo "<td>" . $row[2] . "</td>";
	  echo "<td>" . $row[3] . "</td>";
	  echo "<td>" . $row[4] . "</td></tr>";
	  
	}
		
   	mysql_free_result($resultado2); 
   	mysql_close($conexion); 

?>
       
        </table>
        </center>>
    <a href="index.html" class="volver">Inicio <a/>
    </body>
</html>
