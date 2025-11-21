<section id="hero" class="d-flex flex-column justify-content-center align-items-center">

	<div class="hero-container" data-aos="fade-in">

		<strong><b>Portafolio:</font></b></strong>

		<h3><b><?php echo $row33[siglas]; ?></font></b></h3>

		<h4><b><?php echo $row33[nombre]; ?></font></b></h4>

		<font size=4><p><span class="typed" data-typed-items="<?php echo $row33[lema]; ?>"></span></font></p>

		<?php 

		if ($row33[youtube] <> '') { 

			?>

			<a href="#muestravideo" class="icon-video"><img src="../../imagenes/icono_vervideo.png" width="150" title='Video personal'></a><br>

			<div id="muestravideo" class="modalDialog">

				<div>

				<div align='center'>

				<a href="#close" title="Close" class="close">X</a>

				<iframe width="<?php echo $ancho1; ?>" width='<?php echo $ancho; ?>' height="<?php echo $alto2; ?>" src="https://www.youtube.com/embed/<?php echo $row33[youtube]; ?>?si=ZIk_t6JHsOOSizRC" title="YouTube video player" frameborder="0" allow="accelerometer; data-autoplay="true"; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

				</div>

				</div>

			</div>

			<?php 

		}

		if ($row33[tienda] == 1) { 

			?>

			<a href='https://cmatic.live/tiendasvirtuales.php?menu=<?php echo $carpeta; ?>'><img src="../../imagenes/tiendavirtual.png" width="80" title='Tienda Virtual on line'></a><br>

			<?php 

		}

		?>

		<a href="#modopropietario" class="icon-propietario"><img src="../../imagenes/icono_admin.png" width='20' title='Activar funciones de propietario del sitio web'></a><br>

		<div id="modopropietario" class="modalDialog">

			<div>

				<div align='center'>

				<a href="#close" title="Close" class="close">X</a>

				<div class="container">

					<div class="row" data-aos="fade-in">

						<div class="col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch">

							<form action="https://cmatic.live/www/<?php echo $carpeta; ?>" method="post">

								<div class="row">

									<div class="form-group">

										<br><h4>Validación de Propietario:</h4><br>

									</div>
	
									<div class="form-group col-md-4">

										<div align='left'>
	
										<label for="name">Usuario (Sitio web):</label>

										</div>

									</div>

									<div class="form-group col-md-8">
	
										<input id="carpeta" name="carpeta" type="text" value='<?php echo $carpeta; ?>' class="form-control" required /><br>

									</div>

									<div class="form-group col-md-4">

										<div align='left'>
	
										<label for="contrasena">Contraseña:</label>

										</div>

									</div>

									<div class="form-group col-md-8">
	
										<input id="contrasena" name="contrasena" type="password" class="form-control" required /><br>

									</div>

									<div class="form-group col-md-12">

										<button id='boton_s' name='boton_s' type="submit" />Validar</button><br><br>

									</div>

								</div>

							</form>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

</section>