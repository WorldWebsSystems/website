<!DOCTYPE html>
<html lang="es">

<head>

	<?php

	include 'index_encabezado.php';

	?>

</head>

<body style="background-color:#F0EFEF;">

	<?php

	if ($so <> 'movil') {
		$ancho_publicidad = 800;
	}else{
		$ancho_publicidad = 350;
	}

	include 'dimensiones.php';

	include 'encabezado.php';

	?>

	<br><br>

	<div align='center'>

	<font size=4 color='black'>

	<section id="services" class="services">

		<div class="container">

			<div class="section-title">

				<div class="row">

					<div class="col-md-12">

						<div align="center">

							<?php

							include'index_1.php';

							?>

						</div>

						<br><img src='imagenes/icono_igtienda.png' height='75'><br>

						<p><font size=4>Sitios Web / <i>ECommerce</i></font></a></p>
						<a href="#tarifas-tiendasvirtuales"><img src='../../imagenes/boton-contratar.png' width='120'></a><br><br>

					</div>

					<div class="col-md-12">

						<?php

						include 'sitiosweb_1.php';

						?>

					</div>


				</div>

			</div>

		</div>

	</section>

	<?php

	include 'tarifas_2.php';

	include 'tarifas_3.php';

	echo "<div align='center'>";

	echo "</div><br><br><br>";

	include'pie_pagina.php';

	$pie = 1;

	include 'estilo.php';

	?>

</body>

</html>


