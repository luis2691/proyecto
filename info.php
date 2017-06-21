<!DOCTYPE HTML>
<?php
session_start();
include 'conex.php';

if(isset($_SESSION['AdminName'])) {?>


<html>
	<head>
		<title>ConectiVerde</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Logo -->
						<h1><a href="index.html" id="logo">Conecti<em>Verde</em></a></h1>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="inicioAdmin.php">Inicio</a></li>
								<li class="current"><a href="info.php">Información</a></li>
								<li>
									<a href="#">Administrar</a>
									<ul>
										<li><a href="agregarauspiciador.php">Auspiciadores</a></li>
										<li><a href="agregarpuntos.php">Puntos Usuarios</a></li>
										<li><a href="agregarpremio.php">Premios</a></li>

										</ul>

						<li><a href="logout.php">Cerrar Sesión</a></li>
							</ul>
						</nav>

				</div>


        <center>
        <h2>Total Reciclado a la Fecha</h2>
        <form action='canjear.php' method='post'>
        <div class="datagrid"><table align="center" border="20px" cellpadding="2" cellspacing="2">
        <thead><th width='10' colspan="1" rowspan="1" align="center"></th><th width='10' colspan="1" rowspan="1" align="center">Papel</th><th width='10' colspan="1" rowspan="1" align="center">Plástico</th><th width='10' colspan="1" rowspan="1" align="center">Aluminio</th></thead>
        <center>
        <?php
        include 'conex.php';
            $mostrar =mysql_query("SELECT * FROM usuario");     // Esta linea hace la consulta

            $suma1=0;
            $suma2=0;
            $suma3=0;
            $suma4=0;
            while ($registro = mysql_fetch_array($mostrar)){
              $suma1=$registro['Papel']+$suma1;
              $suma2=$registro['Plastico']+$suma2;
              $suma3=$registro['Aluminio']+$suma3;
              $suma4=$suma1+$suma2+$suma3;
        }
        echo "

            <tr>
              <td  width='150' align='center'>Total</td>
              <td  width='150' align='center'>".$suma1."</td>
              <td  width='150' align='center'>".$suma2."</td>
              <td  width='150' align='center'>".$suma3."</td>


            </tr>

        ";

        ?>
      </center>
        <?php
        echo"
        <thead><th width='150' colspan='7' rowspan='7' align='center'>El Total reciclado es de: $suma4 gramos</th></thead>
        ";
        ?>
        </tbody>
           </table>
        </div> <br></form></center>



        <center>
        <h2>Productos más canjeados</h2>
        <form action='canjear.php' method='post'>
        <div class="datagrid"><table align="center" border="20px" cellpadding="2" cellspacing="2">
        <thead><th width='50%' colspan="1" rowspan="1" align="center">Producto</th><th width='10' colspan="1" rowspan="1" align="center">Número de Veces</th></thead>
        <center>
        <?php
        include 'conex.php';
            $mostrar =mysql_query("SELECT Descripcion,Canje FROM premio p,canje c WHERE p.CodigoPremio=c.CodigoPremio ORDER BY  Canje DESC");     // Esta linea hace la consulta


            while ($registro = mysql_fetch_array($mostrar)){
        echo "

            <tr>
              <td  width='150' align='center'>".$registro['Descripcion']."</td>
              <td width='25' align='center'>".$registro['Canje']."</td>

            </tr>

        ";
        }

        ?>
        </center>
        <?php
        $numero = mysql_num_rows($mostrar);

        echo"
        <thead><th width='150' colspan='7' rowspan='7' align='center'>El Total de Premios es de: $numero</th></thead>
        ";
        ?>
        </tbody>
           </table>
        </div><br></form></center>




        <!-- Footer -->
          <div id="footer">
            <div class="container">
              <div class="row">

              </div>
            </div>

            <!-- Icons -->
              <ul class="icons">
                <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
              </ul>

            <!-- Copyright -->
              <div class="copyright">
                <ul class="menu">
                  <li>&copy; ConectiVerde. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
                </ul>
              </div>

          </div>

      </div>

      <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.dropotron.min.js"></script>
        <script src="assets/js/skel.min.js"></script>
        <script src="assets/js/util.js"></script>
        <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
        <script src="assets/js/main.js"></script>

    </body>
  </html>
  <?php
  }else{
    echo '<script> window.location="ingresoadmin.php"; </script>';
  }
  ?>
