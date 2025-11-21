<!DOCTYPE html>
<html lang="es">

<head>

	<?php

	include 'template_encabezado.php';
	include 'template_estilo.php';

	?>

</head>

<body>

	<div align='center'>

	<font face='arial' size=4>

	<?php

	$sservicio = $_GET[servicio]

	?>

		<section id="vps" class="vps">

			<div class="container" data-aos="fade-up">

				<div class="section-title">

					<img src="imagenes/icono_instrucciones.png" width=50 class="img-fluid animated" alt=""><br>
					<b><font size=5><?php echo $menu25; ?></font></b><br>
					<strong><?php echo $menu25_desc; ?></strong>

				</div>

			</div>

		</section>

	<?php

	if ( ($sservicio == 'vps') or ($sservicio == '') ) {

		?>

		<section id="vps" class="vps">

			<div class="container" data-aos="fade-up">

				<div class="section-title">

					<img src="imagenes/icono_vps.png" width=50 class="img-fluid animated" alt=""><br>
					<b><font size=5><?php echo $menu17; ?></font></b><br>
					<strong><?php echo $menu17_desc; ?></strong>

				</div>

			</div>

		</section>

		<?php

		$id_servicio = 1;

		include 'instructivos_detalles.php';

		if ($sservicio == '') {
			echo "<hr>";
		}

	}

	if ( ($sservicio == 'websites') or ($sservicio == '') ) {

		?>

		<section id="websites" class="websites">

			<div class="container" data-aos="fade-up">

				<div class="section-title">

					<img src="imagenes/icono_websites.png" width=50 class="img-fluid animated" alt=""><br>
					<b><font size=5><?php echo $menu22; ?></font></b><br>
					<strong><?php echo $menu22_desc; ?></strong>

				</div>

			</div>

		</section>

		<?php

		$id_servicio = 2;

		include 'instructivos_detalles.php';

	}

	$pie = 1;
	include 'template_estilo.php';

	?>

</body>

</html>