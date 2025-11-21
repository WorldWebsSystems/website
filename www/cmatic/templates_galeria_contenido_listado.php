<?php

	$i = 0;

	while ($rowp = mysqli_fetch_array($resultp)) {

		$i++;
		$idarea     = $rowp[id];
		$area 	    = $rowp[area];
		$url_imagen = $rowp[url_imagen];

		$result99   = mysqli_query($connect, "SELECT count(*) as cantidad FROM templates where idarea=$idarea");
		$row99 	    = mysqli_fetch_array($result99);
		$cantidad   = $row99[cantidad];

		if ($i == 1) {

			?><section id="templates" class="cliens section-bg">

				<div class="container">

					<div class="row" data-aos="zoom-in">

		<?php } ?>

						<div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">

							<a href="<?php echo $pagina_sitio; ?>.php?id=<?php echo $idarea; ?>&pagina=1#templates">
							<img src="imagenes/<?php echo $url_imagen; ?>" width='50' class="img-fluid" alt=""><br>
							<?php echo "<font size=3><b>".$area."<br>(".$cantidad.")"."</b></font>"; ?></a>

						</div>

		<?php

		if ($i >= 4) {

			?>

					</div>

				</div>

			</section>

			<?php 

			$i = 0;	

		}

	}

?>