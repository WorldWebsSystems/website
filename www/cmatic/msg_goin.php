<!DOCTYPE html>
<html lang="es">

<head>

	<?php

	$url_ia = $url;

	include 'template_encabezado.php';
	include 'template_estilo.php';

	?>


</head>

<body>

<div align='center'>

<font face = 'arial' size = 3>

	<section id="titulo" class="titulo">

		<div class="container" data-aos="fade-up">
	
			<br>

			<?php 
			$titulo = $menu02_desc;
			include 'worldwebs_titulo.php';
			?>

			<div class="section-title">
	
				<b>Noticias sobre Inteligencia Artificial (IA)</b><br>
				<h1><b><?php echo $pagina_sitio; ?> <sup><font size = 2>&copy;</font></sup></b></h1>
				<font size = 1 color ='red'><b>"Sitio web de terceros con derechos reservados de uso propios de su propietario"</b></font><br>

				<br><br>

				<form id="formulario" action="ia_goin_auth.php" method="post">

					<input id="email" name="email" type="text" size="40" placeholder="Su correo electrónico" required />

					<input id="url" name="url" type="text" value="<?php echo $url_ia; ?>" required hidden />

					<input id="chat_ia" name="chat_ia" type="text" value="<?php echo $pagina_sitio; ?>" required hidden />

					<br><br><br>

					<?php include 'captcha.php'; ?>

					<br>

					<input id="boton" name="boton" class="buy-btn" type="submit" value="Entrar a <?php echo $pagina_sitio; ?>" disabled />

				</form>

			</div>

			<?php include 'donaciones.php'; ?>

		</div>

	</section>

	</div>

</font>

</div>

</body>

</html>