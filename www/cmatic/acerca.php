<!DOCTYPE html>
<html lang="es">

<head>

	<?php

	include 'template_encabezado.php';
	include 'template_estilo.php';

	?>


</head>

<body>

<font face = 'arial' size=1>

<div align = 'center'>

	<?php

	include 'fecha_hora.php';

	?>

	<section id="titulo" class="titulo">

		<div class="container" data-aos="fade-up">

			<?php 
			$titulo = $menu02_desc;
			include 'worldwebs_titulo.php';
			?>

			<div class="section-title">

				<?php echo $meta_descripcion; ?><br><br>

				<?php echo $descripcion_empresa; ?>

				&copy; Copyright (<?php echo $ano; ?>) 
				<strong><span><a href="#" target="_blank">WorldWebs Systems c.a.</a></span></strong>.<br>
				Todos los derechos reservados.

			</div>

		</div>

	</section>

</div>

</font>

</body>

</html>