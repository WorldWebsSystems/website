<!DOCTYPE html>
<html lang="es">

<head>

	<?php

	include 'detecta_so.php';
	include 'template_encabezado.php';
	include 'template_estilo.php';
	include 'template_chat_tawkto.php';
	include 'template_cabecera.php';

	?>

</head>

<body style="background-color:#F0EFEF;">

	<?php 

	if ($so == 'movil') {$fuente = 3;}else{$fuente = 5;}

	?>

	<h3>

	<font color='black' size=<?php echo $fuente; ?>>

	<div align='center'>

		<!-- #main -->

  			<main id="main">

				<?php

				if ($pagina_sitio == $menu_inicio) {

					include 'template_slide.php';

				}else{

					echo "<br><br><br>";

				}

				include $pagina_sitio.'_contenido.php';

				if ($pagina_sitio == 'inicio') {

					include 'template_cinta_servicios.php';

				}

				include 'template_ruta.php';

				?>

  			</main>

		<!-- End #main -->

		<?php

		$pie = 1;

		include 'template_estilo.php';
		include 'template_pie_pagina.php';
		include 'template_limpiamemoria.php';

		?>

	</div>

	</font>

	</h3>

</body>

</html>