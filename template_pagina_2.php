<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

<header id="header">

	<div class="d-flex flex-column">

		<div class="profile">

			<img src="../../www/<?php echo $carpeta; ?>/<?php echo $imagen; ?>" alt="" class="img-fluid rounded-circle">

			<div class="social-links mt-3 text-center">

				<a href="https://www.x.com/<?php echo $row33[x]; ?>" class="twitter" target="_blank"><i class="bx bxl-twitter"></i></a>

				<a href="https://www.facebook.com/<?php echo $row33[facebook]; ?>" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>

				<a href="https://www.instagram.com/<?php echo $row33[instagram]; ?>" class="instagram" target="_blank"><i class="bx bxl-instagram"></i></a>

				<a href="https://www.linkedin.com/in/<?php echo $row33[linkedin]; ?>" class="linkedin" target="_blank"><i class="bx bxl-linkedin"></i></a>

			</div>

		</div>

		<nav id="navbar" class="nav-menu navbar">

			<ul>

				<li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Inicio</span></a></li>
	
				<li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Perfil</span></a></li>

				<li><a href="#experiencia" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Experiencia</span></a></li>

				<li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resumen Curricular</span></a></li>
	
				<li><a href="#portafolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portafolio</span></a></li>

				<li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contacto</span></a></li>

				<li><a href="?ver=codigofuente" class="nav-link scrollto" target="_blank"><img src="../../imagenes/software_libre.png" height='25'></i>&nbsp;&nbsp;<span>GIT: Código Fuente</span></a></li>

			</ul>

		</nav>

	</div>

</header>

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

			<a href='https://tuww.net/tiendasvirtuales.php?menu=<?php echo $carpeta; ?>'><img src="../../imagenes/tiendavirtual.png" width="80" title='Tienda Virtual on line'></a><br>

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

							<form action="https://tuww.net/www/<?php echo $carpeta; ?>" method="post">

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