<!DOCTYPE html>
<html lang="es">

<head>

	<?php

	include 'index_encabezado.php';

	?>

</head>

<body>

	<br><br>

	<font color='black'>

	<?php

	include 'encabezado.php';

	if ($id == '') {

		?>

		<section id="services" class="services">

			<div class="container">

				<div class="section-title">

					<div align="center">

						<?php

						include'index_1.php';

						?>

					</div>

					<?php
					include 'directorio_sitiosweb_1.php';
					?>

				</div>

				<?php

				if ($tema == '') {

					include 'directorio_sitiosweb_2.php';

				}else{

					include 'directorio_sitiosweb_3.php';

				}

				?>

			</div>

		</section>

		<?php

	}else{

		$resultado33 = mysqli_query($connect, "SELECT * FROM red where carpeta = '$id'");

		$row33 = mysqli_fetch_array($resultado33);

		$actividad = $row33[actividad];

		$url = $row33[url];

		if ($url == '') {

			$url = 'https://cmatic.live/www/' . $id . "/";

		}else{

			$status = $row33[status];

			$visitas = $row33[visitas] + 1;

			$resultado331 = mysqli_query($connect, "UPDATE red SET visitas=$visitas WHERE carpeta = '$id'");

			echo "<div align='center'><br><br><br><br><br><br><br><br><br><br><br>Redireccionando al sitio web propio del usuario...</div>";

		}

		echo "<SCRIPT>window.location.href='".$url."';</SCRIPT>";

	}

	echo "<div align='center'>";

	echo "</div><br><br><br>";

	include'pie_pagina.php';

	$pie = 1;

	include 'estilo.php';

	?>

	</font>

</body>

</html>


