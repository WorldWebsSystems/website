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

						<br><img src='imagenes/icono_ighosting.png' height='75'><br>

						<p><font size=4>Servidores <i>WebHosting</i></font></a></p>
						<a href="#tarifas-webhosting"><img src='../../imagenes/boton-contratar.png' width='120'></a><br><br>

						CMATIC <i>WebHosting & Servers</i>, ofrece servidores seguros, rápidos y eficientes Microsoft Windows © o GNU Linux, provistos de amplia ciberseguridad, <i>Firewalls</i>, protocolos IPV4 e IPV6 y certificados de seguridad SSL.<br><br>

						Los servidores <i>WebHosting</i> que ofrecemos, son servicios que permiten almacenar y hacer accesibles los archivos de un sitio web en Internet, y contienen el espacio donde se guardan los datos del sitio, y los servidores que ofrecemos a nuestros clientes son los siguientes:<br><br><br>

						<h3>1. <a href='#tarifas-webhosting'><i>WebHosting</i> compartido:</a></h3><br>

						&check; El sitio web comparte recursos con otros sitios en una misma computadora. Es económico, pero puede ralentizarse si hay mucho tráfico en otros sitios.<br><br><br>


						<h3>2. <a href='#tarifas-vps'>Servidor Privado Virtual (VPS):</a></h3><br>

						&check; El sitio tiene su propio servidor virtual, pero comparte recursos con otros sitios. Es más caro que el <i>hosting</i> compartido.<br><br><br>

						<h3>3. <a href='#tarifas-serverdedicado'>Servidor Dedicado:</a></h3><br>

						&check; El usuario tiene acceso exclusivo a su propio <i>hardware</i> de servidor web. Es la opción más costosa. Ideal para alto tráfico.<br>

					</div>

					<div class="col-md-12">

						<?php

						include 'servidores_1.php';

						?>

					</div>


				</div>

			</div>

		</div>

	</section>

	<?php

	include 'tarifas_1_1.php';

	include 'tarifas_1_2.php';

	include 'tarifas_1_3.php';

	echo "<div align='center'>";

	echo "</div><br><br><br>";

	include'pie_pagina.php';

	$pie = 1;

	include 'estilo.php';

	?>

</body>

</html>


