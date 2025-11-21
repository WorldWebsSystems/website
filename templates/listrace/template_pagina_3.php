	<font color='white'>

	<section id="home" class="welcome-hero">

		<div class="container">

			<div class="welcome-hero-txt">

				<div class="row">

					<div class="col-md-6">

						<img src='<?php echo $imagen; ?>' class='imgRedonda' width='220' title='Próximamente se habilitarán las funciones para incluir imágenes y editar el contenido'></b><br><br>

						<?php

						if ($row33[lema] <> '') {

							echo "<font size=3 color='white'><i><b>" . $row33[lema] . "</b></font></b></i><br><br>";

						}

						?>

          				</div>

					<div class="col-md-6">

						<?php

						if ($row33[descripcion] <> '') {

							echo "<font size=4>" . substr($row33[descripcion],0,500) . "</font>";

						}

						echo "<br>";

						?>

          				</div>

				</div>

				<div class="row">

					<div class="col-md-6">

						<font size=2>Creado: <b><?php echo $row33[fecha] . " | " . $row33[hora]; ?></b><br>

						<?php

						if ($row33[direccion] <> '') {

							echo $row33[direccion] . "</b><br>";

						}

						if ($municipio <> '') {

							echo "Municipio " . $municipio;

						}

						echo ", " . $ciudad . ', '. $estado . ', '. $pais . "</b><br>";

						echo "</font>";

						?>

						<br>

						<a href="#muestravideo" class="icon-video"><img src="../../imagenes/icono_vervideo.png" width="150" title='Video promocional'></a>

						<div id="muestravideo" class="modalDialog">

							<div>
								<div align='center'>

								<a href="#close" title="Close" class="close">X</a>

								<?php if ($row33[youtube] <> '') { ?>

									<iframe width="<?php echo $ancho1; ?>" height="<?php echo $alto1; ?>" src="https://www.youtube.com/embed/<?php echo $row33[youtube]; ?>?si=ZIk_t6JHsOOSizRC" title="YouTube video player" frameborder="0" allow="accelerometer; data-autoplay="true"; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

								<?php } else { ?>

									<br><br><br><br><br><br><h1><b><font size='4' color='black'>Video promocional no disponible.</b></h1><br><br><br><br>

								<?php } ?>

							</div>

						</div>

					</div>

          			</div>

				<div class="col-md-6">

					<div class="statistics-content">

						<div class="counter"><?php echo $row33[visitas]; ?> </div> <span></span>

					</div>

					<strong>Vistas al sitio web</strong>

				</div>

			</div>

		</div>

	</section>