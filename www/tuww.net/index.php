<!doctype html>
<html class="no-js" lang="es">

    <head>

	<?php

	$carpeta = substr(getcwd(), 29, 100);

	include '../../abre_bd_query_sitios.php';

	include '../../detecta_so.php';

	$resultado33 = mysqli_query($connect, "SELECT * FROM red where carpeta = '$carpeta'");

	$row33 = mysqli_fetch_array($resultado33);

	$actividad   = $row33[actividad];
	$descripcion = $row33[descripcion];
	$email 	     = $row33[email];
	$telefono    = $row33[telefono];
	$celular     = $row33[celular];

	$resultado331 = mysqli_query($connect, "SELECT * FROM areas where id = $row33[id_area]");

	$row331       = mysqli_fetch_array($resultado331);

	$area 	     = $row331[area];
	$imagen_area = $row331[url_imagen];

	if ($row33[imagen] == '') {

		$imagen = 'https://tuww.net/imagenes/imagen_usuario_vacio.png';

	}else{

		$imagen = $row33[imagen];

	}

	if ($row33[url] == '') {

		$url = "tuww.net/www/" . $row33[carpeta];

	}else{

		$url = $row33[url];

	}

	?>

	<meta charset="utf-8">
  	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name=description content="<?php echo $row33[meta_descripcion]; ?>">
	<meta name=keywords content="<?php echo $row33[meta_keywords]; ?>">
	<meta property="og:image" content="<?php echo 'https://tuww.net/imagenes/' . $imagen_area; ?>" />

	<link rel="icon" type="image/png" href="<?php echo 'https://tuww.net/imagenes/' . $imagen_area; ?>"/>
  	<link href="https://tuww.net/www/" . $carpeta . "/<?php echo $imagen; ?>" rel="apple-touch-icon">

	<link href="https://tuww.net/www/style.css" rel="stylesheet" id="imagen-redonda">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">

        <!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<?php
        
	if ($row33[fecha] == '') {

		$resultado888 = mysqli_query($connect, "UPDATE red SET fecha='$fecha' WHERE carpeta='$row33[carpeta]'");

	}

	if ($row33[hora] == '') {

		$resultado888 = mysqli_query($connect, "UPDATE red SET hora='$hora' WHERE carpeta='$row33[carpeta]'");

	}

	$municipio = '';

	$resultado8881= mysqli_query($connect, "SELECT * FROM loc_ciudades where id = $row33[id_ciudad]");

	$row8881= mysqli_fetch_array($resultado8881);

	$ciudad = $row8881[ciudad];

	$resultado888 = mysqli_query($connect, "SELECT * FROM loc_municipios where id_ciudad = $row8881[id]");

	$row888 = mysqli_fetch_array($resultado888);

	$municipio = $row888[municipio];

	$resultado8882= mysqli_query($connect, "SELECT * FROM loc_estados where id = $row8881[idestado]");

	$row8882= mysqli_fetch_array($resultado8882);

	$estado = $row8882[estado];

	$resultado8883= mysqli_query($connect, "SELECT * FROM loc_paises where id = $row8882[idpais]");

	$row8883= mysqli_fetch_array($resultado8883);

	$pais = $row8883[pais];
	$cod_telefono = $row8883[cod_telefono];

	$celular = '';

	for ($i = 0; $i <= strlen($row33[celular]); $i++) {

		$letra = substr($row33[celular], $i, 1);

		if (($letra / $letra == 1) or ($letra == '0')) {

			$celular = $celular . $letra;

		}

	}

	$resultado3311 = mysqli_query($connect, "SELECT * FROM areas_actividades where id = $row33[actividad]");

	$row3311 = mysqli_fetch_array($resultado3311);

	?>

	<title>

	<?php

	if ($row33[siglas] <> '') {

		echo $row33[siglas] . " | ";

	}

	if ($row33[nombre] <> '') {

		echo $row33[nombre] . " | ";

	}

	if ($row33[descripcion] <> '') {

		echo $row33[descripcion] . " | ";

	}

	echo $ciudad . ", " . $estado . ", " . $pais;

	if ($so <> 'movil') {

		$titulo1 = 4;
		$titulo2 = 3;

	}else{

		$titulo1 = 3;
		$titulo2 = 2;

	}


	?>

	</title>

	<?php
       
	include '../estilo.php';

	?>

    </head>
	
	<body>
		<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
		
		<!--header-top start -->
		<header id="header-top" class="header-top">
			<ul>
				<li>
					<div class="header-top-left">
						<ul>
							<li class="select-opt">
								<select name="language" id="language">
									<option value="default">EN</option>
									<option value="Bangla">BN</option>
									<option value="Arabic">AB</option>
								</select>
							</li>
							<li class="select-opt">
								<select name="currency" id="currency">
									<option value="usd">USD</option>
									<option value="euro">Euro</option>
									<option value="bdt">BDT</option>
								</select>
							</li>
							<li class="select-opt">
								<a href="#"><span class="lnr lnr-magnifier"></span></a>
							</li>
						</ul>
					</div>
				</li>

			</ul>
					
		</header><!--/.header-top-->
		<!--header-top end -->

		<!-- top-area Start -->
		<section class="top-area">
			<div class="header-area">
				<!-- Start Navigation -->
			    <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"  data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

			        <div class="container">

			            <!-- Start Header Navigation -->
			            <div class="navbar-header">
			                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
			                    <i class="fa fa-bars"></i>
			                </button>
			                <a class="navbar-brand" href="index.html">

					<?php

					include '../index_logo.php';

					?>

					</span></a>

			            </div><!--/.navbar-header-->
			            <!-- End Header Navigation -->

			            <!-- Collect the nav links, forms, and other content for toggling -->
			            <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
			                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
			                    <li class=" scroll active"><a href="#home">Inicio</a></li>
			                    <li class="scroll"><a href="#works">Descripción</a></li>
			                    <li class="scroll"><a href="#reviews">Publicidad</a></li>
			                    <li class="scroll"><a href="#blog">Galería</a></li>
			                    <li class="scroll"><a href="#contact">Suscripción</a></li>
			                </ul><!--/.nav -->
			            </div><!-- /.navbar-collapse -->
			        </div><!--/.container-->
			    </nav><!--/nav-->
			    <!-- End Navigation -->
			</div><!--/.header-area-->
		    <div class="clearfix"></div>

		</section><!-- /.top-area-->
		<!-- top-area End -->

		<font color='white'>

		<!--welcome-hero start -->
		<section id="home" class="welcome-hero">
			<div class="container">
				<div class="welcome-hero-txt">

					<div class="row">

						<div class="col-md-6">

							<img src='<?php echo $imagen; ?>' class='imgRedonda' width='220' title='Próximamente se habilitarán las funciones para incluir imágenes y editar el contenido'></b><br><br>

          					</div>

						<div class="col-md-6">

							<?php

							if ($row33[descripcion] <> '') {

								echo "<font size=4>" . substr($row33[descripcion],0,200) . "</font>";

							}

							echo "<br><br>";

							if ($row33[youtube] <> '') {

								?>

								<a href="https://www.youtube.com/watch?v=<?php echo $row33[youtube]; ?>" target="_blank">

								<?php

							}

							?>

							<br><br>

							<img src="../../imagenes/icono_vervideo.png" width="150"></a>

							<br><br>

						<div class="single-ststistics-box">
							<div class="statistics-content">
								<div class="counter"><?php echo $row33[visitas]; ?> </div> <span></span>
							</div><!--/.statistics-content-->
							<strong>Vistas al sitio web</strong>
						</div><!--/.single-ststistics-box-->

          					</div>

					</div>

					<div class="row">

						<div class="col-md-6">

							<font size=2>Creado: <b><?php echo $row33[fecha] . " | " . $row33[hora]; ?></b><br>

							<?php

							if ($row33[direccion] <> '') {

								echo $row33[direccion] . "</b><br>";

							}

							if ($municipio <> '') {

								echo "Municipio " . $municipio;

							}

							echo ", " . $ciudad . ', '. $estado . ', '. $pais . "</b><br>";

							echo "</font>";

							?>

          					</div>

						<div class="col-md-6">

<div class="social">

<ul>

<table width='100%'>

	<tr>

		<td width='16%'>

      			<li>
				<?php 

				if ($row33[instagram] <> '') {

					?>

					<a href="https://www.instagram.com/<?php echo $row33[instagram]; ?>" target="_blank">

					<?php

				}

				?>

				<i class="fab fa-instagram"></i>

       				<div class="instagram">
          				Instagram</a>
       				</div>

      			</li>

		</td>

		<td width='5%'>

		</td>

		<td width='16%'>

      			<li>

				<?php 

				if ($row33[facebook] <> '') {

					?>

					<a href="https://www.facebook.com/<?php echo $row33[facebook]; ?>" target="_blank">

					<?php

				}

				?>

				<i class="fab fa-facebook-f"></i>

       				<div class="facebook">
          				Facebook</a>
       				</div>

      			</li>

		</td>

		<td width='5%'>

		</td>

		<td width='16%'>

      			<li>
				<?php 

				if ($row33[x] <> '') {

					?>

					<a href="https://www.x.com/<?php echo $row33[x]; ?>" target="_blank">

					<?php

				}

				?>

				<img src="../../imagenes/icono_x.png" width="15">

       				<div class="twitter">
          				X.com</a>
       				</div>

      			</li>

		</td>

		<td width='5%'>

		</td>

		<td width='16%'>

      			<li>
				<?php 

				if ($row33[tiktok] <> '') {

					?>

					<a href="https://www.tiktok.com/<?php echo $row33[tiktok]; ?>" target="_blank">

					<?php

				}

				?>

				<img src="../../imagenes/icono_tiktok.png" width="15">

       				<div class="tiktok">
          				TikTok</a>
       				</div>

      			</li>

		</td>

		<td width='5%'>

		</td>

		<td width='16%'>

      			<li>
				<?php 

				if ($row33[linkedin] <> '') {

					?>

					<a href="https://www.linkedin.com/in/<?php echo $row33[linkedin]; ?>" target="_blank">

					<?php

				}

				?>

				<li><i class="fab fa-linkedin-in"></i>

       				<div class="linkedin">
          				Linkedin</a>
       				</div>

      			</li>

		</td>

	</tr>

</table>

</ul>

</div>

          					</div>

					</div>

				</div>
			</div>

		</section><!--/.welcome-hero-->
		<!--welcome-hero end -->

		<!--list-topics start -->
		<section id="list-topics" class="list-topics">
			<div class="container">
				<div class="list-topics-content">
					<ul>
						<li>
							<div class="single-list-topics-content">
								<a href="https://www.instagram.com/<?php echo $row33[instagram]; ?>" target="_blank">
								<div class="single-list-topics-icon">
									<img src='../../imagenes/icono-instagram.png' width=60>
								</div>
								<h2>Instagram</a></h2>
							</div>
						</li>
						<li>
							<div class="single-list-topics-content">
								<a href="mailto:<?php echo $row33[email]; ?>" target="_blank">
								<div class="single-list-topics-icon">
									<img src='../../imagenes/icono-email.png' width=60>
								</div>
								<h2>Correo Electrónico</a></h2>
							</div>
						</li>
						<li>
							<div class="single-list-topics-content">
								<a href="https://tuww.net/index.php?id=<?php echo $row33[carpeta]; ?>" target="_blank">
								<div class="single-list-topics-icon">
									<img src='../../imagenes/logo_telefono.png' width=60>
								</div>
								<h2>Teléfono Fijo</a></h2>
							</div>
						</li>
						<li>
							<div class="single-list-topics-content">
								<a href="https://wa.me/+<?php echo $cod_telefono; ?><?php echo $celular; ?>" target="_blank">
								<div class="single-list-topics-icon">
									<img src='../../imagenes/logo_whatsapp.png' width=60>
								</div>
								<h2>WhatsApp</a></h2>
							</div>
						</li>
						<li>
							<div class="single-list-topics-content">
								<a href="https://tienda.tuww.net/index.php?id=<?php echo $row33[carpeta]; ?>" target="_blank">
								<div class="single-list-topics-icon">
									<img src='../../imagenes/icono_tienda.png' width=60>
								</div>
								<h2>Tienda <i>OnLine<i></a></h2>
							</div>
						</li>
					</ul>
				</div>
			</div><!--/.container-->

		</section><!--/.list-topics-->
		<!--list-topics end-->

		<font color='black'>

		<!--works start -->
		<section id="works" class="works">
			<div class="container">
				<div class="section-header">

							<?php

							if ($row33[descripcion_amplia] <> '') {

								?>

								<h2>Descripción Amplia:</h2>

								<?php

								echo "<br><font size=3>" . $row33[descripcion_amplia] . "</font></br>";

							}

							?>

				</div><!--/.section-header-->
				<div class="works-content">
					<div class="row">
						<div class="col-md-4 col-sm-6">
							<div class="single-how-works">
								<div class="single-how-works-icon">
									<i class="flaticon-lightbulb-idea"></i>
								</div>
								<h2><a href="#">choose <span> what to</span> do</a></h2>
								<p>
									Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmod tempor incididunt ut laboremagna aliqua. 
								</p>
								<button class="welcome-hero-btn how-work-btn" onclick="window.location.href='#'">
									read more
								</button>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="single-how-works">
								<div class="single-how-works-icon">
									<i class="flaticon-networking"></i>
								</div>
								<h2><a href="#">find <span> what you want</span></a></h2>
								<p>
									Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmod tempor incididunt ut laboremagna aliqua. 
								</p>
								<button class="welcome-hero-btn how-work-btn" onclick="window.location.href='#'">
									read more
								</button>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="single-how-works">
								<div class="single-how-works-icon">
									<i class="flaticon-location-on-road"></i>
								</div>
								<h2><a href="#">explore <span> amazing</span> place</a></h2>
								<p>
									Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmod tempor incididunt ut laboremagna aliqua. 
								</p>
								<button class="welcome-hero-btn how-work-btn" onclick="window.location.href='#'">
									read more
								</button>
							</div>
						</div>
					</div>
				</div>
			</div><!--/.container-->
		
		</section><!--/.works-->
		<!--works end -->

		<!--explore start -->
		<section id="explore" class="explore">
			<div class="container">
				<div class="explore-content">
					<div class="row">

					<div align="center">

						<?php

						if (file_exists('publicidad.jpg')) {

							echo "<br>";

							if ($so <> 'movil') {
								$ancho_publicidad = 800;
							}else{
								$ancho_publicidad = 350;
							}

							if ($so <> 'movil') {
								$imagen_publicidad = 'publicidad.jpg';
							}else{
								$imagen_publicidad = 'publicidad_and.jpg';
							}

							?>

							<img src='<?php echo $imagen_publicidad; ?>' width='<?php echo $ancho_publicidad; ?>'>

							<br><br>

							<?php

						}

						?>

					</div>
				</div>
			</div><!--/.container-->

		</section><!--/.explore-->
		<!--explore end -->

		<!--reviews start -->
		<section id="reviews" class="reviews">
			<div class="container">
				<div class="section-header">
					<h2>Publicidad Patrocinada:</h2>
				</div><!--/.section-header-->
				<div class="explore-content">
					<div class="row">

					<div align="center">

						<?php

						include '../../cinta_clientes_fijos.php';

						?>

					</div>
				</div>
			</div><!--/.container-->

		</section><!--/.reviews-->
		<!--reviews end -->

		<!--blog start -->
		<section id="blog" class="blog" >
			<div class="container">
				<div class="section-header">
					<h2>Galería de Imágenes</h2>
				</div><!--/.section-header-->
				<div class="blog-content">
					<div class="row">
						<div class="col-md-4 col-sm-6">
							<div class="single-blog-item">
								<div class="single-blog-item-img">
									<img src="https://tuww.net/estilos/listrace/assets/images/blog/b1.jpg" alt="blog image">
								</div>
								<div class="single-blog-item-txt">
									<h2><a href="#">How to find your Desired Place more quickly</a></h2>
									<h4>posted <span>by</span> <a href="#">admin</a> march 2018</h4>
									<p>
										Lorem ipsum dolor sit amet, consectetur de adipisicing elit, sed do eiusmod tempore incididunt ut labore et dolore magna.
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="single-blog-item">
								<div class="single-blog-item-img">
									<img src="https://tuww.net/estilos/listrace/assets/images/blog/b2.jpg" alt="blog image">
								</div>
								<div class="single-blog-item-txt">
									<h2><a href="#">How to find your Desired Place more quickly</a></h2>
									<h4>posted <span>by</span> <a href="#">admin</a> march 2018</h4>
									<p>
										Lorem ipsum dolor sit amet, consectetur de adipisicing elit, sed do eiusmod tempore incididunt ut labore et dolore magna.
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="single-blog-item">
								<div class="single-blog-item-img">
									<img src="https://tuww.net/estilos/listrace/assets/images/blog/b3.jpg" alt="blog image">
								</div>
								<div class="single-blog-item-txt">
									<h2><a href="#">How to find your Desired Place more quickly</a></h2>
									<h4>posted <span>by</span> <a href="#">admin</a> march 2018</h4>
									<p>
										Lorem ipsum dolor sit amet, consectetur de adipisicing elit, sed do eiusmod tempore incididunt ut labore et dolore magna.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!--/.container-->
			
		</section><!--/.blog-->
		<!--blog end -->

		<!--subscription strat -->
		<section id="contact"  class="subscription">
			<div class="container">
				<div class="subscribe-title text-center">
					<h2>
						Usted desea recibir información de nuestra empresa?
					</h2>
					<p>
						Mediante esta suscripción, usted recibirñá periódicamente en su correo electrónico, cualquier promoción u oferta de los servicios que ofrecemos a neustros clientes.
					</p>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="subscription-input-group">
							<form action="#">
								<input type="email" class="subscription-input-form" placeholder="Introduzca su correo electrónico">
								<button class="appsLand-btn subscribe-btn" onclick="window.location.href='#'">
									Suscribirse
								</button>
							</form>
						</div>
					</div>	
				</div>
			</div>

		</section><!--/subscription-->	
		<!--subscription end -->

		<!--footer start-->
		<footer id="footer"  class="footer">
			<div class="container">
				<div class="footer-menu">
		           	<div class="row">
			           	<div class="col-sm-5">
			           		 <div class="navbar-header">
			                <a class="navbar-brand" href="index.html">

					<?php

					include '../index_logo.php';

					?>

					</span></a>
				            </div><!--/.navbar-header-->
			           	</div>
			           	<div class="col-sm-7">
			           		<ul class="footer-menu-item">
			                    <li class=" scroll active"><a href="#home">Inicio</a></li>
			                    <li class="scroll"><a href="#works">Descripción</a></li>
			                    <li class="scroll"><a href="#reviews">Publicidad</a></li>
			                    <li class="scroll"><a href="#blog">Galería</a></li>
			                    <li class="scroll"><a href="#contact">Suscripción</a></li>
			                </ul><!--/.nav -->
			           	</div>
		           </div>
				</div>
				<div class="hm-footer-copyright">
					<div class="row">
						<div class="col-sm-12">
							<p>
								&copy;Todos los derechos reservados. Se prohibe la reproducción total o parcial del presente sitio web, sin el permiso del propietario</a>
							</p><!--/p-->
						</div>
					</div>
					
				</div><!--/.hm-footer-copyright-->
			</div><!--/.container-->

			<div id="scroll-Top">
				<div class="return-to-top">
					<i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
				</div>
				
			</div><!--/.scroll-Top-->
			
        </footer><!--/.footer-->
		<!--footer end-->
		
	<?php

	$pie = 1;

	include '../estilo.php';

	?>
        
    </body>
	
</html>