<?php
$descripcion_amplia = 1;
?>

<section id="websites" class="titulo">

	<div class="container" data-aos="fade-up">

		<div class="section-title">

			<?php 

			include 'valores_cliente_amplios.php';
			include 'websites_descripcion.php';

			?>

		</div>

		<div class="col-lg-12 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="100">

			<p align="justify">

				<?php 

				echo $descripcion_websites; 

				?>

				<br><br>

				Las características del servicio son las siguientes:

			</p>

		</div>

	</div>

</section>

<?php

	$id_plan = 8;
	$id_plan_tarifa = 17;

	$motor = 6;
	include 'motor_busqueda_6.php';

	include 'websites_tarifas_contenido.php';

?>

