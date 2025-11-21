<?php
$descripcion_amplia = 1;
?>

<section id="webhosting" class="titulo">

	<div class="container" data-aos="fade-up">

		<div class="section-title">

			<?php 

			include 'valores_cliente_amplios.php';
			include 'ingenieria_descripcion.php';

			?>

		</div>

		<div class="col-lg-12 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">

			<p align="justify">

			<?php 

			echo $descripcion_ingenieria; 

			?>

			<br><br>

			- Ley Sobre el Derecho de Autor.<br><br>
			- Ley de Propiedad Industrial.

			<br><br><br>

			Las características del servicio son las siguientes:

			</p>

		</div>

	</div>

</section>

<?php

	$id_plan = 10;
	$id_plan_tarifa = 26;

	$motor = 6;
	include 'motor_busqueda_6.php';

	include 'ingenieria_tarifas_contenido.php';

?>

