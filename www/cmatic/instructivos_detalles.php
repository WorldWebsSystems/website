<?php

	$result2 = mysqli_query($connect, "SELECT * FROM instrucciones where id_servicio=$id_servicio");

	if ($id_servicio == 2) {

		$video = $video_websites;
		$servicio = "WebSite";

	}else{

		$video = $video_vps;
		$servicio = "VPS";

	}

	while ($row2 = mysqli_fetch_array($result2)) {

		$id	 	= $row2[id];
		$paso	 	= $row2[paso];
		$titulo 	= $row2[titulo];
		$descripcion 	= $row2[descripcion];
		$url_imagen 	= $row2[url_imagen];
		$url_servicio 	= $row2[id_servicio];

		?>

		<section id="instrucciones" class="instrucciones">

			<div class="container" data-aos="fade-up">

				<div class="row">

					<div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">

						<h2>Paso <font size=10><b><?php echo $paso; ?></font>:</b><br><?php echo $titulo; ?><br>
						<a href="https://youtu.be/<?php echo $video; ?>" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> ¿Cómo comprar un <?php echo $servicio; ?>? <i class="icofont-play-alt-2"></i></a></h2><br><br>

					</div>

					<div class="col-lg-12 mt-3 mt-lg-0" data-aos="fade-up" data-aos-delay=300">

						<div class="box featured">
							<a href='imagenes/<?php echo $url_imagen; ?>' target="_blank" onclick="window.open(this.href, this.target, 'top=120,left=100,width=1366,height=768'); return false;"><img src='imagenes/<?php echo $url_imagen; ?>' width=500></a><br><br>
						</div>

					</div>

					<div class="col-lg-12" data-aos="fade-up" data-aos-delay="500">

							<h2><?php echo $descripcion; ?></h2>

					</div>

				</div>

			</div>

		</section>

		<hr>

		<?php

	}

?>