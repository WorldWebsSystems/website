<!DOCTYPE html>
<html lang="es">

<head>

	<?php

	include 'template_encabezado.php';
	include 'template_estilo.php';

	$id_tarifa = $_GET[plan];

	$descripcion_amplia = true;

	?>

</head>

<body>

	<div align='center'>

	<font face = 'arial' size=4>

	<section id="titulo" class="titulo">

		<div class="container" data-aos="fade-up">

			<div class="section-title">

				<img src='imagenes/clients/<?php echo $carpeta; ?>/logos/logo_worldwebs.png' height=80><br>
				<b><font size=5><?php echo $empresa; ?></font></b><br>

				<?php

				include 'valores_tarifas.php';

				$descripcion2 = $descripcion;
				$detalle_amplio2 = $detalle_amplio;

				include 'valores_planes.php';

				$descripcion1 = $descripcion;

				$motor = 2;
				include 'motor_busqueda.php';

				?>

				<h2><font size=3><b><?php echo $plan; ?></b></font></h2><br><br><br>

				<h3><font size=5><b>Plan: <?php echo $detalle; ?></b></font></h3><br>

				<font size=3><?php echo $detalle_amplio2; ?></font><br><br><br>

				<h2><font size=3><b>DETALLES DEL PLAN:</b></font></h2>

			</div>

			<div class="section-title">

				<div align='left'>

				<font size=4><?php echo $descripcion; ?></font>

				</div>

			</div>

		</div>

	</section>

	</font>

	</div>

	<?php

	$pie = 1;

	include 'template_estilo.php';

	?>


</body>

</html>