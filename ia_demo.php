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

	include 'template_chat_tawkto.php';

	$concepto = "Visita a DEMO de Agente IA Asistente + ChatBots";
	include 'graba_historial.php';

	?>

	<br><br>

	<div align='center'>

		<section id="tarifas-agentesia" class="services">

			<div class="container">

				<div class="section-title">

					<div class="col-md-12">

						<div class="icon-box">

							<div align="center">

							<img src='imagenes/icono_ia_mini.png' width='100'><br>
							<font face='arial' size=4><b>ASISTENTE VIRTUAL + CHATBOT</b><br>
							<font size=3>Versión Demostrativa<br>
							+58 424 7756630<br>
							info@tuww.net</font><br><br>

							Instrucciones:<br><br>

							Seleccione el ícono que se encuentra en la parte inferior de esta ventana, y comience a chatear con el ChatBot de IA.

							<div/>

						</div>

					</div>



				</div>

						<?php

						if ($so <> 'movil') {
							echo "<img src='imagenes/flecha_izquierda.gif' width='100'>";
						}else{
							echo "<br><br><img src='imagenes/flecha_derecha.gif' width='100'>";
						}

						?>

			</div>

		</section>



	</div>

	<?php

	include 'estilo.php';

	?>

</body>

</html>