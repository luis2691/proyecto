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
								<li>
									<a href="#">Administrar</a>
									<ul>
										<li><a href="agregarauspiciador.php">Auspiciadores</a></li>
										<li><a href="agregarpuntos.php">Puntos Usuarios</a></li>
										<li><a href="agregarpremio.php">Premios</a></li>
<!--										<li>
											<a href="#">Submenu</a>
											<ul>
												<li><a href="#">Lorem dolor</a></li>
												<li><a href="#">Phasellus magna</a></li>
												<li><a href="#">Magna phasellus</a></li>
												<li><a href="#">Etiam nisl</a></li>
												<li><a href="#">Veroeros feugiat</a></li>
											</ul>
										</li>
										<li><a href="#">Veroeros feugiat</a></li>		-->
										</ul>
<!--								</li>
								<li><a href="left-sidebar.html">Left Sidebar</a></li>
								<li><a href="right-sidebar.html">Right Sidebar</a></li>
								<li><a href="two-sidebar.html">Two Sidebar</a></li>-->

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
        </div><input type='submit' value='Canjear'> <br></form></center>

        <!-- Gigantic Heading
          <section class="wrapper style2">
            <div class="container">
              <header class="major">
                <h2>A gigantic heading you can use for whatever</h2>
                <p>With a much smaller subtitle hanging out just below it</p>
              </header>
            </div>
          </section> -->

        <!-- Posts -->
          <section class="wrapper style1">
            <div class="container">
              <div class="row">
                <section class="6u 12u(narrower)">
                  <div class="box post">
                    <a href="#" class="image left"><img src="images/pic01.jpg" alt="" /></a>
                    <div class="inner">
                      <h3>The First Thing</h3>
                      <p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
                    </div>
                  </div>
                </section>
                <section class="6u 12u(narrower)">
                  <div class="box post">
                    <a href="#" class="image left"><img src="images/pic02.jpg" alt="" /></a>
                    <div class="inner">
                      <h3>The Second Thing</h3>
                      <p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
                    </div>
                  </div>
                </section>
              </div>
              <div class="row">
                <section class="6u 12u(narrower)">
                  <div class="box post">
                    <a href="#" class="image left"><img src="images/pic03.jpg" alt="" /></a>
                    <div class="inner">
                      <h3>The Third Thing</h3>
                      <p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
                    </div>
                  </div>
                </section>
                <section class="6u 12u(narrower)">
                  <div class="box post">
                    <a href="#" class="image left"><img src="images/pic04.jpg" alt="" /></a>
                    <div class="inner">
                      <h3>The Fourth Thing</h3>
                      <p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
                    </div>
                  </div>
                </section>
              </div>
            </div>
          </section>

        <!-- CTA -->
          <section id="cta" class="wrapper style3">
            <div class="container">
              <header>
                <h2>Are you ready to continue your quest?</h2>
                <a href="#" class="button">Insert Coin</a>
              </header>
            </div>
          </section>

        <!-- Footer -->
          <div id="footer">
            <div class="container">
              <div class="row">
                <section class="3u 6u(narrower) 12u$(mobilep)">
                  <h3>Links to Stuff</h3>
                  <ul class="links">
                    <li><a href="#">Mattis et quis rutrum</a></li>
                    <li><a href="#">Suspendisse amet varius</a></li>
                    <li><a href="#">Sed et dapibus quis</a></li>
                    <li><a href="#">Rutrum accumsan dolor</a></li>
                    <li><a href="#">Mattis rutrum accumsan</a></li>
                    <li><a href="#">Suspendisse varius nibh</a></li>
                    <li><a href="#">Sed et dapibus mattis</a></li>
                  </ul>
                </section>
                <section class="3u 6u$(narrower) 12u$(mobilep)">
                  <h3>More Links to Stuff</h3>
                  <ul class="links">
                    <li><a href="#">Duis neque nisi dapibus</a></li>
                    <li><a href="#">Sed et dapibus quis</a></li>
                    <li><a href="#">Rutrum accumsan sed</a></li>
                    <li><a href="#">Mattis et sed accumsan</a></li>
                    <li><a href="#">Duis neque nisi sed</a></li>
                    <li><a href="#">Sed et dapibus quis</a></li>
                    <li><a href="#">Rutrum amet varius</a></li>
                  </ul>
                </section>
                <section class="6u 12u(narrower)">
                  <h3>Get In Touch</h3>
                  <form>
                    <div class="row 50%">
                      <div class="6u 12u(mobilep)">
                        <input type="text" name="name" id="name" placeholder="Name" />
                      </div>
                      <div class="6u 12u(mobilep)">
                        <input type="email" name="email" id="email" placeholder="Email" />
                      </div>
                    </div>
                    <div class="row 50%">
                      <div class="12u">
                        <textarea name="message" id="message" placeholder="Message" rows="5"></textarea>
                      </div>
                    </div>
                    <div class="row 50%">
                      <div class="12u">
                        <ul class="actions">
                          <li><input type="submit" class="button alt" value="Send Message" /></li>
                        </ul>
                      </div>
                    </div>
                  </form>
                </section>
              </div>
            </div>

            <!-- Icons -->
              <ul class="icons">
                <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>

                <li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
                <li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
              </ul>

            <!-- Copyright -->
              <div class="copyright">
                <ul class="menu">
                  <li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
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
