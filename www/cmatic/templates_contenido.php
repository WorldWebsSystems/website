<section id="templates" class="titulo">

	<div class="container" data-aos="fade-up">

		<div class="section-title">

			<?php 

			include 'valores_cliente_amplios.php';
			include 'templates_descripcion.php'; 

			?>

		</div>

		<div class="col-lg-12 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay=300">

			<p align="justify">

			<?php echo $descripcion_templates; ?><br><br>

			<?php echo $descripcion_templates_amplia; ?>

			</p>

		</div>

	</div>

</section>

<?php

	$ppagina_sitio = 'templates';
	$idarea = "";
	$pagina_sitio = 'templates_galeria';

	include 'templates_galeria_contenido.php'; 

?>

