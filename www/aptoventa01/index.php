<!DOCTYPE html>
<html lang="es">

<head>

	<?php

	$carpeta = substr(getcwd(), 25, 100);

	include '../abre_bd_query_sitios.php';

	$resultado33 = mysqli_query($connect, "SELECT * FROM red where carpeta = '$carpeta'");

	$row33 = mysqli_fetch_array($resultado33);

	$visitas = $row33[visitas] + 1;

	$resultado331 = mysqli_query($connect, "UPDATE red SET visitas=$visitas WHERE carpeta = '$carpeta'");

	$resultado331 = mysqli_query($connect, "SELECT * FROM areas where id = $row33[id_area]");

	$row331 = mysqli_fetch_array($resultado331);

	$area = $row331[area];

	?>

	<meta charset="utf-8">
  	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title><?php echo $row33[nombre] . " | " . $row33[celular] . " " . $row33[telefono]; ?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name=description content="<?php echo $row33[meta_descripcion]; ?>">
	<meta name=keywords content="<?php echo $row33[meta_keywords]; ?>">
	<meta property="og:image" content="<?php echo $row33[imagen]; ?>" />

	<link rel="icon" type="image/png" href="../imagen_usuario_vacio.png"/>

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

      <h1 class="logo"><a href="index.html"><FONT SIZE=3><?php echo $row33[nombre] . "</b></font><br>"; ?></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="https://worldwebs.net/estilos/sailor/assets/img/logo.png" alt="" class="img-fluid"></a>-->

	<?php

	include 'menu_superior.php';

	?>

      <a href="#" class="get-started-btn ml-auto">Get Started</a>

    </div>
  </header><!-- End Header -->

<br><br><br>

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row content">
          <div class="col-lg-7">
		<img src='../imagen_usuario_vacio.png' width='220' title='Próximamente se habilitarán las funciones para incluir imágenes y editar el contenido'>
            <h2>

		<?php

		echo "<FONT SIZE=5>" . $row33[nombre] . "</FONT></b>";

		?>

	</h2>
            <h3>

		<?php

	if ($row33[descripcion] <> '') {

		echo $row33[descripcion] . "</b><br>";

	}

	?>

	</h3>

	<?php

	if ($row33[direccion] <> '') {

		echo $row33[direccion] . "</b><br>";

	}

	if ($municipio <> '') {

		echo "Municipio " . $municipio . ', ';

	}

	echo $ciudad . ', '. $estado . ', '. $pais . "</b><br>";

	?>

	Fecha/Hora: <b><?php echo $row33[fecha] . " | " . $row33[hora]; ?></b> | 

	Visitas: <b><?php echo $row33[visitas]; ?></b>

          </div>

          <div class="col-lg-1 pt-4 pt-lg-0">
          </div>

          <div class="col-lg-4 pt-4 pt-lg-0">
            <p>
              Datos de contacto:
            </p>
            <ul>

<?php

					if ($row33[email] <> '') {

						?><li><i class="ri-check-double-line"></i>Correo electrónico: <?php echo $row33[email] . "</li><br>";

					}

					if ($row33[celular] <> '') {

						?><li><i class="ri-check-double-line"></i>WhatsApp: <a href="https://wa.me/<?php echo $row33[celular]; ?>" target="_blank"><?php echo $row33[celular] . "<br>"; ?></a></li><?php

					}

					if ($row33[telefono] <> '') {

						?><li><i class="ri-check-double-line"></i>Teléfonos: <?php echo $row33[telefono] . "<br></li>";

					}

					if ($row33[instagram] <> '') {

						?><li><i class="ri-check-double-line"></i>Instagram: <a href="https://www.instagram.com/<?php echo $row33[instagram]; ?>" target="_blank"><?php echo $row33[instagram] . "</li><br>"; ?></a><?php

					}

					echo '</li><br>Sitio web: ';

					echo "<br><br>";

					echo "<h3><a href='https://tuww.net?id=" . $row33[carpeta] . "' target='_blank'>www.tuww.net/" . $row33[carpeta] . "</a></b></h3><br>";

					?>

            </ul>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

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

</body>

</html>