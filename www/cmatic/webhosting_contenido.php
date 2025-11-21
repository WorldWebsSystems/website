<?php
$descripcion_amplia = 1;
?>

<section id="webhosting" class="titulo">

	<div class="container" data-aos="fade-up">

		<div class="section-title">

			<?php 

			include 'valores_cliente_amplios.php';
			include 'webhosting_descripcion.php';

			?>

		</div>

		<div class="col-lg-12 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">

			<p align="justify">

			<?php 

			echo $descripcion_webhosting; 

			?>

			<br><br>

			Las características del servicio son las siguientes:

			</p>

		</div>

	</div>

</section>

<?php

	$id_plan = 9;
	$id_plan_tarifa = 25;

	$motor = 6;
	include 'motor_busqueda_6.php';

	include 'webhosting_tarifas_contenido.php';

?>

