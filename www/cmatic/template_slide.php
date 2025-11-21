<!-- ======= Hero Section ======= -->

	<section id="hero">

		<div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

			<ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

			<div class="carousel-inner" role="listbox">

				<?php

				$i = 0;

				$result99 = mysqli_query($connect, "SELECT * FROM servicios where status>0 order by status asc");
				while ($row2 = mysqli_fetch_array($result99)) {

					$i++;
					if ($i == 1) {$carrusel = ' active';}else{$carrusel = '';}

					include 'valores_servicios.php';

					?>

					<div class="carousel-item<?php echo $carrusel; ?>" style="background-image: url(imagenes/<?php echo $imagen; ?>)">

						<div class="carousel-container">

							<div class="container">

								<h2 class="animate__animated animate__fadeInDown"><?php echo $servicio; ?></h2>
								<a href="https://youtu.be/<?php echo $video; ?>" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Ver video <i class="icofont-play-alt-2"></i></a><br>
								<p class="animate__animated animate__fadeInUp"><?php echo $promo; ?></p>

								<a href="<?php echo $link; ?>" class="btn-get-started animate__animated animate__fadeInUp scrollto">Conocer servicio...</a>

							</div>

						</div>


					</div>

					<?php

				}

			?>

		</div>

		<a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>

		<a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
			<span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>

	</div>

</section><!-- End Hero -->

<br>

<strong><font size=2>Aceptamos las siguiente formas de pago:</font></strong>

<br><br>

<marquee>

	<?php

	$result99 = mysqli_query($connect, "SELECT * FROM formas_pago where status=1 order by orden asc, moneda asc");
	while ($row2 = mysqli_fetch_array($result99)) {

		?> <img src='imagenes/<?php echo $row2[imagen]; ?>' height=25> <?php

	}

	?>

</marquee>



