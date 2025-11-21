<!DOCTYPE html>
<html lang="es">

<head>

	<?php

	$carpeta = substr(getcwd(), 25, 100);

	include '../abre_bd_query_sitios.php';

	$resultado33 = mysqli_query($connect, "SELECT * FROM red where carpeta = '$carpeta'");

	$row33 = mysqli_fetch_array($resultado33);

	$actividad = $row33[actividad];

	$visitas = $row33[visitas] + 1;

	$resultado331 = mysqli_query($connect, "UPDATE red SET visitas=$visitas WHERE carpeta = '$carpeta'");

	$resultado331 = mysqli_query($connect, "SELECT * FROM areas where id = $row33[id_area]");

	$row331 = mysqli_fetch_array($resultado331);

	$area 	     = $row331[area];
	$imagen_area = $row331[url_imagen];

	if ($row33[imagen] == '') {

		$imagen = '../imagen_usuario_vacio.png';

	}else{

		$imagen = $row33[imagen];

	}

	?>

	<meta charset="utf-8">
  	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>

	<?php

	echo $row33[actividad] . ": ";

	if ($row33[siglas] <> '') {

		echo $row33[siglas] . " | ";

	}

	echo $row33[nombre] . " | " . $row33[descripcion]; 

	?>

	</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name=description content="<?php echo $row33[meta_descripcion]; ?>">
	<meta name=keywords content="<?php echo $row33[meta_keywords]; ?>">
	<meta property="og:image" content="<?php echo $imagen; ?>" />

	<link rel="icon" type="image/png" href="../favicon.png"/>
  	<link href="https://tuww.net/<?php echo $imagen; ?>" rel="apple-touch-icon">

	<link href="../css/style.css" rel="stylesheet" id="bootstrap-css">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?	family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="https://worldwebs.net/estilos/sailor/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://worldwebs.net/estilos/sailor/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
	<link href="https://worldwebs.net/estilos/sailor/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="https://worldwebs.net/estilos/sailor/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
	<link href="https://worldwebs.net/estilos/sailor/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
	<link href="https://worldwebs.net/estilos/sailor/assets/vendor/venobox/venobox.css" rel="stylesheet">
	<link href="https://worldwebs.net/estilos/sailor/assets/vendor/owl.carousel/../estilos/sailor/assets/owl.carousel.min.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="https://worldwebs.net/estilos/sailor/assets/css/style.css" rel="stylesheet">

	<?php

	if ($row33[fecha] == '') {

		$resultado888 = mysqli_query($connect, "UPDATE red SET fecha='$fecha' WHERE carpeta='$row33[carpeta]'");

	}

	if ($row33[hora] == '') {

		$resultado888 = mysqli_query($connect, "UPDATE red SET hora='$hora' WHERE carpeta='$row33[carpeta]'");

	}

	$municipio = '';

	$resultado888 = mysqli_query($connect, "SELECT * FROM loc_municipios where id = $row33[id_municipio]");

	$row888 = mysqli_fetch_array($resultado888);

	$municipio = $row888[municipio];

	$resultado8881= mysqli_query($connect, "SELECT * FROM loc_ciudades where id = $row33[id_ciudad]");

	$row8881= mysqli_fetch_array($resultado8881);

	$ciudad = $row8881[ciudad];

	$resultado8882= mysqli_query($connect, "SELECT * FROM loc_estados where id = $row8881[idestado]");

	$row8882= mysqli_fetch_array($resultado8882);

	$estado = $row8882[estado];

	$resultado8883= mysqli_query($connect, "SELECT * FROM loc_paises where id = $row8882[idpais]");

	$row8883= mysqli_fetch_array($resultado8883);

	$pais = $row8883[pais];

	?>

</head>

<body style="background-color:#F0EFEF;">

	<!-- ======= Header ======= -->

		<header id="header" class="fixed-top ">

			<div class="container d-flex align-items-center">

					<table width='100%'>

						<tr>

							<td align='center' width='25%'>

								<img src='https://worldwebs.net/imagenes/<?php echo $imagen_area; ?>' height='50'><br>

							</td>

							<td align='left' width='75%'>

								<font size=1><b><a href='../'>GUÍA CLASIFICADA &#169;</a></b></font><br>
								<font size=3><b><?php echo $row331[area]; ?></b></font><br>
								<font size=2><b><?php echo $row33[actividad]; ?></b></font>

							</td>

						</tr>

					</table>

				<?php

				include 'menu_superior.php';

				$celular = '';

				for ($i = 0; $i <= strlen($row33[celular]); $i++) {

					if (substr($row33[celular], $i, 1) <> '-') {

						$celular = $celular . substr($row33[celular], $i, 1);

					}

				}

				?>

			</div>

		</header>

	<!-- End Header -->

	<br><br><br>

  	<main id="main">

		<!-- ======= About Section ======= -->

			<section id="about" class="about">

      				<div class="container">

					<div class="row content">

						<div class="col-lg-12">

							<div align='center'>

							<img src='<?php echo $imagen; ?>' class='imgRedonda' width='220' title='Próximamente se habilitarán las funciones para incluir imágenes y editar el contenido'></b><br><br>

							<font size=2>Visitas: <b><?php echo $row33[visitas]; ?></b>

            						<h2>

							<?php

							if ($row33[siglas] <> '') {

								echo "<FONT SIZE=6>" . $row33[siglas] . "</FONT></b>";

							}
							echo "</h2>";

							if ($row33[nombre] <> '') {

								echo "<FONT SIZE=5><b>" . $row33[nombre] . "</b></FONT></b>";

							}

							?>

							<h3>

							<?php

							if ($row33[descripcion] <> '') {

								echo $row33[descripcion] . "</b><br><br>";

							}

							?>

							<font size=2>Creado: <b><?php echo $row33[fecha] . " | " . $row33[hora]; ?></b><br>

							<?php

							if ($row33[direccion] <> '') {

								echo $row33[direccion] . "</b><br>";

							}

							if ($municipio <> '') {

								echo "Municipio " . $municipio;

							}

							if ($so <> 'windows') {

								echo "<br>" . $ciudad . ', '. $estado . '<br>'. $pais . "</b><br>";

							}else{

								echo ", " . $ciudad . ', '. $estado . ', '. $pais . "</b><br>";

							}

							echo "</font>";

							if ($so <> 'windows') {

								echo "<br>";

							}else{

								echo " | ";

							}

							echo "<font size=2><b>DESCRIPCIÓN AMPLIA:</b></font><br><br>";

							if ($row33[descripcion_amplia] <> '') {

								echo $row33[descripcion_amplia] . "</b><br>";

							}

							?>

							</h3>

							<br><hr><br>

							</div>

          					</div>

        				</div>

					<div class="row content">

						<div class="col-lg-12 pt-4 pt-lg-0">

							<div align='center'>

							<p><h3><b>Datos de contacto:</b></h3></p>

            						<ul>

								<font size=4>

								<?php

								if ($row33[email] <> '') {

									?><img src='https://worldwebs.net/imagenes/imagen_email.png' height=18></i> <?php echo $row33[email] . "<br><br>";

								}

								if ($row33[celular] <> '') {

									?><img src='https://worldwebs.net/imagenes/logo_whatsapp.png' height=18> <a href="https://wa.me/+58<?php echo $celular; ?>" target="_blank"><?php echo $row33[celular]; ?></a><br><br><?php

								}

								if ($row33[telefono] <> '') {

									?><img src='https://worldwebs.net/imagenes/logo_telefono.png' height=18> <?php echo $row33[telefono] . "<br><br>";

								}

								if ($row33[instagram] <> '') {

									?><img src='https://worldwebs.net/imagenes/logo_instagram.png' height=18> <a href="https://www.instagram.com/<?php echo $row33[instagram]; ?>" target="_blank"><?php echo $row33[instagram] . "</a><br><br>"; ?><?php

								}

								echo '<br>Sitio web: ';

								echo "<br><br>";

								echo "<h3><b><font size=4><a href='https://tuww.net?id=" . $row33[carpeta] . "' target='_blank'>www.tuww.net/" . $row33[carpeta] . "</a></font></b></h3><br>";

								?>

							</ul>

							</div>

						</div>

					</div>

				</div>

			</section>

		<!-- End About Section -->

	<?php

	include '../pie_pagina.php';

	?>


  		<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  		<!-- Vendor JS Files -->
  		<script src="https://worldwebs.net/estilos/sailor/assets/vendor/jquery/jquery.min.js"></script>
  		<script src="https://worldwebs.net/estilos/sailor/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  		<script src="https://worldwebs.net/estilos/sailor/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  		<script src="https://worldwebs.net/estilos/sailor/assets/vendor/php-email-form/validate.js"></script>
  		<script src="https://worldwebs.net/estilos/sailor/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  		<script src="https://worldwebs.net/estilos/sailor/assets/vendor/venobox/venobox.min.js"></script>
  		<script src="https://worldwebs.net/estilos/sailor/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  		<script src="https://worldwebs.net/estilos/sailor/assets/vendor/owl.carousel/owl.carousel.min.js"></script>

 		<!-- Template Main JS File -->
  		<script src="https://worldwebs.net/estilos/sailor/assets/js/main.js"></script>

	</main>

</body>

</html>