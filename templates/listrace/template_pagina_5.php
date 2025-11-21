	<section id="publicidad" class="works">

		<div class="container">

			<div class="section-header">

				<div class="col-md-12">

					<?php

					if (file_exists('publicidad.jpg')) {

						if ($so <> 'movil') {
							$ancho_publicidad = 800;
							$imagen_publicidad = 'publicidad.jpg';
						}else{
							$ancho_publicidad = 350;
							$imagen_publicidad = 'publicidad_and.jpg';
						}

						?>

						<img src='<?php echo $imagen_publicidad; ?>' width='<?php echo $ancho_publicidad; ?>'>

						<br><br>

						<?php

					}

					?>

				</div>

			</div>

		</div>

	</section>
