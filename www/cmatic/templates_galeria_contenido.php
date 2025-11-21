<?php

$idarea = $_GET[id];
$pagina = $_GET[pagina];

if ($ppagina_sitio <> 'templates') {

	?>

	<section id="galeria" class="titulo">

		<div class="container" data-aos="fade-up">

			<div class="section-title">

				<?php

				include 'valores_cliente_amplios.php';
				include 'templates_galeria_descripcion.php';

				?>

			</div>

		</div>

	</section>

	<?php

}

if ($idarea == '') {

	$result99 = mysqli_query($connect, "SELECT count(*) as cantidad FROM templates");
	$row99 = mysqli_fetch_array($result99);
	$cantidad = $row99[cantidad];

	?>

    	<!-- ======= Directorio Section ======= -->

		<section id="galeria1" class="titulo">

      			<div class="container-fluid" data-aos="fade-up">

        			<div class="row">

          				<div class="col-lg-12 d-flex flex-column justify-content-center align-items-stretch  order-1 order-lg-1">

						<div class="section-title">

							<h2><b><font size=5>Temas Disponibles:<br></font></b></a></h2>
							<h1><b><font size=3><?php echo "(".$cantidad." <i>Templates</i>)"; ?></font></b></h1>

						</div>

						<div align='left'>

            						<div class="accordion-list">

								<div align='center'>

								<?php 

								$resultp = mysqli_query($connect, "SELECT areas.id, areas.area, areas.url_imagen FROM areas INNER JOIN templates ON areas.id = templates.idarea GROUP BY area order by area asc");

								include $pagina_sitio.'_contenido_listado.php'; 

								?>

								</div>

            						</div>

            					</div>

          				</div>

					<br><br>

					<div align='center'>

          				<div class="col-lg-12 d-flex flex-column justify-content-center align-items-stretch  order-1 order-lg-1">

						<div class="section-title">

							<h2><b><font size=5>Todos los Temas:<br></font></b></a></h2>

						</div>

					</div>

          				<div class="col-lg-12 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

						<div align='left'>

            						<div class="accordion-list">

								<div align='center'>

								<?php 

								$resultp = mysqli_query($connect, "SELECT * FROM areas order by area asc");

								include $pagina_sitio.'_contenido_listado.php'; 

								?>

								</div>

            						</div>

            					</div>

          				</div>

      				</div>

    		</section>

	<!-- End Directorios Section -->

	<?php

}else{

	$resultp = mysqli_query($connect, "SELECT * FROM areas where id = $idarea");
	$rowp = mysqli_fetch_array($resultp);

	$i++;
	$idarea 	= $rowp[id];
	$area 		= $rowp[area];
	$url_imagen 	= $rowp[url_imagen];

	$result99 = mysqli_query($connect, "SELECT count(*) as cantidad FROM templates where idarea=$idarea");
	$row99 = mysqli_fetch_array($result99);
	$cantidad = $row99[cantidad];

	?>

	<section id="templates" class="titulo">

		<div class="row">

			<div class="container" data-aos="fade-up">

				<div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">

					<?php include $pagina_sitio.'_contenido_areas.php'; ?>

				</div>

			</div>

		</div>

	</section>

	<?php

	$idarea = "";

}

?>