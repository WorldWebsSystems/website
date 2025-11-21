<section id="portafolio" class="portfolio section-bg">
	
	<div class="container">

		<div class="section-title">

			<h2>Portafolio</h2>

		</div>

		<?php

		if ($menu == 'admin') {

			?>

			<div class="section-title">

				<div align="right">

				<a href="#nuevoportafolio" class="icon-video"><h3>Agregar nuevo </h3><img src='../../imagenes/icono_agregar.png' height='50' title="Agregar nuevo portafolio">></a>

				<div id="nuevoportafolio" class="modalDialog">

					<div>

						<div align='center'>

						<a href="#close" title="Close" class="close">X</a>

						<?php 


						?>

						</div>

					</div>

				</div>

			</div>

			<?php

		}

		?>

		<div class="row" data-aos="fade-up">

			<div class="col-lg-12 d-flex justify-content-center">

				<ul id="portfolio-flters">

					<li data-filter="*" class="filter-active">Todo</li>

					<li data-filter=".filter-sis">Sistemas</li>

					<li data-filter=".filter-aca">Académicos</li>

					<li data-filter=".filter-cred">Acreditaciones</li>

					<li data-filter=".filter-pub">Publicaciones</li>

					<li data-filter=".filter-pry">Proyectos</li>

				</ul>

			</div>

		</div>

		<div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

			<?php

			$resultado45 = mysqli_query($connect, "SELECT * FROM cv where id_red = $row33[id] and imagen <> '' order by tipo_desarrollo asc");

			while ($row45 = mysqli_fetch_array($resultado45)) {

				?>

				<div class="col-lg-4 col-md-6 portfolio-item filter-<?php echo $row45[tipo_desarrollo]; ?>">

					<div class="portfolio-wrap">

						<img src="<?php echo $row45[imagen]; ?>" class="img-fluid" alt="" height='300'>

						<div class="portfolio-links">

							<a href="<?php echo $row45[imagen]; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox"  title="<?php echo $row45[titulo]; ?>"><i class="bx bx-plus"></i></a>

							<a href="<?php echo $row45[url]; ?>" title="Detalles" target="_blank"><i class="bx bx-link"></i></a>

						</div>

					</div>

				</div>

				<?php

			}

			?>

		</div>

	</div>

</section>
